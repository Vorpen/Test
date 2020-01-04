<?php



        if(isset($_POST["button_comment"])){
        
            $userID= $_SESSION["ID"];
            $time = $_POST["time"];
            $comment = $_POST["comment"];
            $IDVideo = $_POST["ID"];
            $username = $_POST["username"];

        
        

        
            $query = "INSERT INTO user_comment (IDcomment, userID, comment, time, VideoID)
                        VALUE('null', '$userID','$comment', now(), '$IDVideo') ";

            $result = mysqli_query($con, $query);


            if($result){

                               
                echo' <h5 class="uspjesno"> Uspješno ste ostavili svoj komentar!</h5>';

                echo '<div class="gif"><img src="media/dobro.gif"></div>';

                    
                    $query = "SELECT video.ID, video.filename, video.title, video.time,  video.description, video.Kategorija, users.username from video, users where video.ID = $IDVideo ";
                    $result = mysqli_query($con, $query);
                    $row = mysqli_fetch_array($result);

                        
                        $title = $row["title"];
                        $kategorija = $row["Kategorija"];
                        $filename = $row["filename"];
                        $ID = $row["ID"];
                        $description = $row["description"];
                        $time = $row["time"];


                  


                    




                }

            

            
   



    }


    

        





        if(isset($_POST["btn_edit"])){


            $userID = $_POST["userID"];
            $IDcomment = $_POST["IDcomment"];
          
            $comment = $_POST["comment"];
        
            $query = " UPDATE user_comment  set comment = '$comment' where IDcomment = $IDcomment ";
            $result = mysqli_query($con,$query);
            $query1 = " UPDATE user_comment  set time = now() where IDcomment = $IDcomment ";
            $result1 = mysqli_query($con, $query1);


            if($result1){

                echo' <h5 class="uspjesno"> Uspješno ste obrisali komentar!</h5>';

                echo '<div class="gif"><img src="media/dobro.gif"></div>';
            }
          

          


        }

      
                 if(isset($_POST['btn_delete'])){
                    $IDcomment = $_POST["IDcomment"];
                    $IDVideo = $_POST["ID"];
                    $query = "DELETE from user_comment where IDcomment = $IDcomment";
                    $result = mysqli_query($con, $query);

                    if($result){


                        echo' <h5 class="uspjesno"> Uspješno ste obrisali komentar!</h5>';

                        echo '<div class="gif"><img src="media/dobro.gif"></div>';
        

                        $query = "SELECT video.ID, video.filename, video.title, video.time,  video.description, video.Kategorija, users.username from video, users where video.ID = $IDVideo ";
                        $result = mysqli_query($con, $query);
                        $row = mysqli_fetch_array($result);
    
                 
                            $title = $row["title"];
                            $kategorija = $row["Kategorija"];
                            $filename = $row["filename"];
                            $ID = $row["ID"];
                            $description = $row["description"];
                            $time = $row["time"];
    
    
                     
    
    
                        
    
    
    
    
                    }
    
        
                        }

                
        
           
    
        
    




                




?>