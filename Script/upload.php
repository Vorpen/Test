<?php



 



    
     

        if(isset($_POST["btn_upload"])){

          $name = $_FILES["datoteka"]["name"];
          $error=$_FILES["datoteka"]["error"];
          $tmp_name = $_FILES["datoteka"]["tmp_name"];
          $type= $_FILES["datoteka"]["type"];
          $size = $_FILES["datoteka"]["size"];
          $title = $_POST["title"];
          $kategorija = $_POST["kategorija"];
          $description = $_POST["description"];

    

          
          $path="../media";

          if($error == 0){            

            $name_array = explode(".", $name);

            $ext = end($name_array);

            $new_file_name = "files_" .time(). ".". $ext;

            $new_name = $path . $new_file_name;


            if(move_uploaded_file($tmp_name, $new_name)){

                $ID = $_SESSION["ID"];




              $query = " INSERT INTO  video (ID,	statusID,	title,	format,	filename,	description,	size,	path,	time, userID, Kategorija)
                VALUES('null','2', '$title',  '$ext',  '$name',  '$description', '$size', '$path', NOW(), '$ID', '$kategorija' )";
              
             
                $result = mysqli_query($con, $query);

                if($result){

                  echo ' uspjesno spremljeno';
                }
  
                else {
  
                  echo " Neuspjesno";
                }
              
              }

            

            else
            {
              echo "Doslo je do pogreske kod spremanje datoteke";
            }

        }
      }
      
    








 











?>