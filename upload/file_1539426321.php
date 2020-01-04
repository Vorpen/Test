<?php

// files.php

include("db_connection.php");

echo '
<form method="POST" action="" enctype="multipart/form-data">

	Datoteka:
	<input type="file" name="datoteka" value="" />
	
	<input type="submit" name="btn_upload" value="Upload" />

</form>';

if(isset($_POST["btn_upload"]))
{
	$name     = $_FILES["datoteka"]["name"];
	$type     = $_FILES["datoteka"]["type"];
	$tmp_name = $_FILES["datoteka"]["tmp_name"]; 
	$error    = $_FILES["datoteka"]["error"];
	$size     = $_FILES["datoteka"]["size"];
	
	$path = "upload/";
	
	if($error == 0)
	{
		$name_array = explode(".", $name);
		
		$ext = end($name_array);
		
		$new_filename = "file_" . time() . "." . $ext;
		
		$new_name = $path . $new_filename;
		
		if(move_uploaded_file($tmp_name, $new_name))
		{
			$query = "INSERT INTO files
					  (path, name, ext, size, type, name_original, uploadtime)
					  VALUES
					  ('$path', '$new_filename', '$ext', '$size', '$type', '$name', NOW())";
			
			$result = mysqli_query($con, $query);
			
			if($result)
			{
				echo "Datoteka spremljena";
			}
			else
			{
				echo "Doslo je do pogreske kod evidentiranja datoteke";
			}							
		}
		else
		{
			echo "Doslo je do pogreske kod spremanje datoteke";
		}
	}
	else
	{
		echo "Doslo je do pogreske kod prijenosa datoteke";
	}
}

if(isset($_GET["task"]) && $_GET["task"] == "del")
{
	$id = (int)$_GET["ID"];
	
	$query = "SELECT * FROM files WHERE id = '$id'";
	$result = mysqli_query($con, $query);

	$file = mysqli_fetch_array($result);	
	
	$path = $file["path"];
	$name = $file["name"];

	$filename_server = $path . $name;	
	
	unlink($filename_server);
	
	$query_del = "DELETE FROM files WHERE id = '$id' LIMIT 1";
	$result_del = mysqli_query($con, $query_del);
}

echo '
<table border="1">
	<thead>
		<tr>
			<th>Datoteka</th>
			<th>Datum uploada</th>
			<th>Velicina</th>
			<th>Akcija</th>
		</tr>
	</thead>
	<tbody>'; 
	
	$query = "SELECT *
			  FROM files
			  ORDER BY name ASC";
			  
	$result = mysqli_query($con, $query);
	
	while($row = mysqli_fetch_array($result))
	{
		$id         = $row["id"];
		$name       = $row["name_original"];
		$size       = $row["size"];
		$uploadtime = $row["uploadtime"];
		$path       = $row["path"];
		
		$name_server = $row["name"];
		
		$size = ceil($size / 1024);
		$uploadtime = date("d.m.Y. H:i", strtotime($uploadtime));
		
		echo ' 
		<tr>
			<td><a href="file_download.php?ID='.$id.'" title="Preuzmi datoteku">'.$name.'</a></td>
			<td align="right">'.$uploadtime.'</td>
			<td align="right">'.$size.' KB</td>
			<td>
				<a href="files.php?task=del&ID='.$id.'">Obrisi</a>
			</td>
		</tr>'; 		
	}
		
	echo '
	</tbody>
</table>';









?>