

<style>



    </style>
<?php

    if (isset($_POST["btn_upload"])){

        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $position = $_POST["position"];
        $number = $_POST["number"];
        $image = $_FILES["datoteka"]["name"];
        $error = $_FILES["datoteka"]["error"];
        $tmp_name = $_FILES["datoteka"]["tmp_name"];

        $path="/media";

        if($error == 0){            

          $name_array = explode(".", $name);

          $ext = end($name_array);

          $new_file_name = "files_" .time(). ".". $ext;

          $new_name = $path . $new_file_name;

          if(move_uploaded_file($new_name, $tmp_name)){


                    echo '<div classS="kartica">


                    div class="slika">

                        <img src="media/'.$name.'">
                    
                    
                    </div>
                    <h3> '.$firstname.'</h3>
                    <br>
                    <h3> '.$lastname.'</h3>
                    <br>
                    <p> '.$number.'</p>

                    </div>
                    '


          }












    }















?>