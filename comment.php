

<?php

    /* navigacijsko sučelje */
    










        if(isset($_POST["btn_rasprava"])){

            $ID = $_POST["ID"];

           
         
            $query1 ="SELECT * from video_view where videoID = $ID";
            $result1 = mysqli_query($con, $query1);
            $row = mysqli_fetch_array($result1);

            $videoID = $row["videoID"];

            if($videoID !=""){

                $query3 =" UPDATE video_view set Views = Views + 1 where videoID = $ID";
                $result3 = mysqli_query($con,$query3);

         }
            
         else {

            $query2 = " INSERT INTO  video_view (IDcount, Views, videoID)
            values(null,'1', '$ID') ";
            $result2= mysqli_query($con, $query2);

         }


    


            $filename = $_POST["filename"];
            $title = $_POST["title"];
            $username=$_POST{"username"};
            $ID = $_POST["ID"];
            $description = $_POST["description"];
    echo '
            <div class="container">
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 text-left">
                <div class="video_komentiranje">
            <video  id="nasVideo" controls autoplay muted >
            <source src= "media/'.$filename.'" type="video/mp4"></source>
                                </video>
                              <div class="naslov">  <h5> '.$title.'  </h5></div>
                              <form method="POST" action="index.php?page=profileIN">
                              <input type="hidden" name="username" value="'.$username.'">
              <button type="submit" class="button_black_username1" name="btn_profile">'.$username.'</button>
                                </form>

          
                </div>
                     </div>

                   
                  
                        
                         </div>
                            </div>
                           

                            

';



            




    


    $query = "SELECT video_points.comment, video_points.points, users.username, video_points.userID, users.ID from video_points, users where video_points.userID= users.ID ";
    $result = mysqli_query($con, $query);
    

        
   $row1 = mysqli_fetch_array($result);
   $row2 = mysqli_fetch_array($result);
   $row3 = mysqli_fetch_array($result);
   $row4 = mysqli_fetch_array($result);
   $row5 = mysqli_fetch_array($result);
   $row6 = mysqli_fetch_array($result);
   $row7 = mysqli_fetch_array($result);
   $row8 = mysqli_fetch_array($result);
    


echo '

<div id="slider">



<div class="skriven" >


<h4 class="prof-nas">'.$row3[3].'  </h4>
<p class="prof-comment">'.$row3[0].' </p>

</div>

<div class="skriven" >



<h4 class="prof-nas">'.$row2[2].'  </h4>
<p class="prof-comment">'.$row3[0].' </p>
<p class="prof-comment">'.$row3[1].' </p>

</div>
<div  class="active"> 

<h4 class="prof-nas">'.$row1[2].'  </h4>
<p class="prof-comment">'.$row1[0].' </p>
<p class="prof-comment">'.$row1[1].' </p>


</div>

<div class="skriven" >


<h4 class="prof-nas">'.$row4[2].'  </h4>
<p class="prof-comment">'.$row4[0].' </p>
<p class="prof-comment">'.$row1[1].' </p>

</div>

<div class="skriven" >


<h4 class="prof-nas">'.$row5[2].'  </h4>
<p class="prof-comment">'.$row5[0].' </p>

</div>
<div class="skriven" >


<h4 class="prof-nas">'.$row6[2].'  </h4>
<p class="prof-comment">'.$row6[0].' </p>

</div>

<div class="skriven" >


<h4 class="prof-nas">'.$row7[2].'  </h4>
<p class="prof-comment">'.$row7[0].' </p>

</div>

</div>
    

    ';
    

    echo'

    <div class="strelice">
<img src="media/desno.png" id="desno">
<img src="media/lijevo.png" id="lijevo">
</div>
';

        }
    



echo '<div class="container">

    <div class="row"> 


        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
     
            <form method="POST" action="index.php?page=comment_function" class="form-comment">
                <input type="hidden" name="userID" >
                <input type="hidden" name="time" >
                <input type="hidden" name="ID" value="'.$ID.'">
                <input type="hidden" name="username" value="'.$username.'">
             
                    <textarea name="comment" class="text2"></textarea>
                <input type="submit" class="button_black" name="button_comment" value="Comment" >
                
            </form>

          
               
        </div>
            </div>
                </div>
               
';




$query = "SELECT user_comment.IDcomment, user_comment.userID, user_comment.VideoID,  user_comment.time, user_comment.comment, users.username, users.ID from user_comment, users where user_comment.userID = users.ID order by time desc";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result)){

    if($row["VideoID"] == $ID){
    
    echo '
  
    
    <div class="comment-box">';
    echo '<br><p class="vrijeme">'.$row["time"]. '</p></br>';
   
    echo '<br><img src="media/designer.png" class="designer_slikica"><p class="username">' .$row["username"].'</p><br>';


    echo '<div><p class="comment-text">'.$row["comment"].'</p></div>';

    if($_SESSION["ID"] == $row["userID"]){
    echo '
    
    
    <form method="POST" action="comment_edit.php">
    <input type="hidden" name="IDcomment" value="'.$row["IDcomment"].'">
    <input type="hidden" name="userID" value="'.$row["userID"].'">
    <input type="hidden" name="time" value="'.$row["time"].'">
    <input type="hidden" name="comment" value="'.$row["comment"].'">
    <button name="btn_edit" class="edit"> Edit</button>
    </form>

    <form method="POST" action ="index.php?page=comment_function" >
    <input type="hidden" name="IDcomment" value="'.$row["IDcomment"].'">
    <input type="hidden" name="ID" value="'.$ID.'">
    <button name="btn_delete" class="delete"> Delete </button>
    </form>  
    ';
    }
}

        echo'
    </div>
    ';
    
}






?>
