<?php
     

        if(isset($_POST["btn_upload"])){

            $userID  = $_POST["userID"];
            $points = $_POST["points"];
            $videoID = $_POST["ID"];
            $comment = $_POST["comment"];
            



            $query  ="INSERT INTO video_points  (points, comment, time, userID, videoID)
                                            values( '$points', '$comment', now(), '$userID', '$videoID')";

            $result = mysqli_query($con, $query);

            $query1 ="UPDATE video set statusID = 1 where video.ID = '$videoID'";
            $result2 =  mysqli_query($con, $query1);
          

            $result = mysqli_query($con, $query);
            if($result){


                 /*   $query1 = " UPDATE  video set statusID = '1' where ID = $videoID";
                    $result1 = mysqli_query($con, $query1);
                    */

              
                echo' <h5 class="uspjesno"> Uspješno ste  ocjenili video!</h5>';

                echo '<div class="gif"><img src="media/dobro.gif"></div>';

                

                    echo '
                    <form method="POST" action="index.php?page=repozitoriji">
                    
                    <input type="submit" class="button2" value="Povratak">
                    </form>
                    ';


            }

            else {


                echo 'Doslo je do pogreske ';

            }



        }




















?>