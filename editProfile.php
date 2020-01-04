<html>
<head> 

<style>

  .container_profil {
                width: 700px;
                margin: 120px auto 120px;
                background-color: #fff;
                border: 2px solid orange;
                padding: 0 20px 20px;
                border-radius: 6px;
                -webkit-border-radius: 6px;
                -moz-border-radius: 6px;
                box-shadow: 0 2px 5px rgba(0,0,0,0.075);
                -webkit-box-shadow: 0 2px 5px rgba(0,0,0,0.075);
                -moz-box-shadow: 0 2px 5px rgba(0,0,0,0.075);
                text-align: center;
                font-family:"Times New Roman", "times", "sans-serif";
                text-align:justify;
 
            
            }

            .container_profil textarea {



              resize:none;
              width:700px;
              height:200px;
              decoration:none;
              border:none;

            }

                  #edit-button{

                                      
                  display: inline-block;
                  border-radius: 4px;
                  background-color: #282828;
                  border: none;
                  color: white;
                  text-align: center;
                  font-size: 1.5em;
                  padding:5px;

                  width: 200px;
                  height:50px;
                  transition: all 0.5s;
                  cursor: pointer;
                  margin: 5px;
                  opacity:1;
                  transition-duration:500ms;
                  transition-property:opacity;
                  transition-timing-function:ease-in;
                  margin-left:-50px;
                  margin-top:-50px;

}


          

</style>


</head>


<body>






<?php



echo' <h5 class="uspjesno"> Uspješno ste ažurirali svoju sliku!</h5>';

  echo '<div class="gif"><img src="media/dobro.gif"></div>';








   
          if(isset($_POST["btn_profile"])){

           

              $description = $_POST["description"];
              $IDProfile = $_POST["IDProfile"];
              $imageName = $_FILES["image"]["name"];
              $imageTmp = $_FILES["image"]["tmp_name"];
              $imageError  = $_FILES["image"]["error"];
            

              $query = "UPDATE  user_profile set description = '$description'  where IDProfile = '$IDProfile' ";
              $result = mysqli_query($con, $query);


              if($imageError == 0 ){
                      
           
                  $path  ="/media";

              


                $name_array = explode(".", $imageName);
                $ext = end($name_array);
                $new_file_name = "files_" .time(). ".". $ext;

                $new_name = $path . $new_file_name;

                if(move_uploaded_file($imageTmp, $new_name)){

                 

              

                

              $query1 = "UPDATE user_profile set image = '$imageName' where IDProfile = '$IDProfile'";
                $result1 = mysqli_query($con, $query1);


          
                   
                  
                


              


            }
          }
        }
      








          

  




        

      



       
      
           


    




?>




