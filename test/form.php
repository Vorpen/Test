

<!DOCTYPE html>
<html>
<head>


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style>


        .kartica {

            margin :0 auto;
            width:500px;
            height:800px;
            text-align:center;
            border: 1px solid  grey;

        }

        .ime {

            font-size:2.0em;
        }

        .prezime{

 font-size:2.0em;
        }

        .pozicija {


            font-size:1.6em;
        }

</style>
	
</head>

<?php


echo ' <body>';


    if(isset($_POST["btn_postavi"])){

        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $position = $_POST["position"];
        $number = $_POST["number"];
        $name = $_FILES["datoteka"]["name"];
        $error = $_FILES["datoteka"]["error"];
        $tmp_name = $_FILES["datoteka"]["tmp_name"];

   

    

        if($error == 0){    
                
         $path="media/";  

          $name_array = explode(".", $name);

          $ext = end($name_array);

          $new_file_name = "files_" .time(). ".". $ext;

          $new_name = $path . $new_file_name;

          if(move_uploaded_file($tmp_name, $new_name)){

                 


            

                    
          }

          else {

            echo' nije dobro';
          }






          
          echo '<div class="kartica">


                    <div class="slika">

                        <img src="media/'.$new_file_name.'">
                    </div>
                    <strong >Ime</strong>:

                        <p class="ime"> '.$firstname.'</p>
                      
                        <strong>Prezime:</strong>
                        <p class="prezime"> '.$lastname.'</p>
                    
                        <strong>Pozicija:</strong>
                        <p class="pozicija"> '.$position.'<p>
                      
                        <strong>Broj:</strong>
                        <p> '.$number.'</p>

                        <form method="POST" action="PDF.php"  enctype="multipart/form-data">
                         <input type="hidden" name="firstname" value="'.$firstname.'">   
                         <input type="hidden" name="lastname" value="'.$lastname.'">   
                         <input type="hidden" name="position" value="'.$position.'">   
                         <input type="hidden" name="number" value="'.$number.'">   
                         <input type="hidden" name="file" value="'.$new_file_name.'">   
                         <input type="hidden" name="error" value="'.$error.'"> 
                         <input type="hidden" name="tmp_name" value="'.$tmp_name.'"> 
                         <input type="hidden" name="name" value="'.$name.'">        
                        <input type="submit" name="pdf_submit" value="PFD prikaz">

                        </form>

            </div>
            ';





    }

  




    }





echo '</body>';





?>