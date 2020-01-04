  <?php


if(isset($_POST["btn_profile"])){

  $username_video = $_POST["username"];

  if($username_video == $_SESSION["username"] ){
    $userID = $_SESSION["ID"];


            $query = "SELECT description, image,  IDProfile   from user_profile where UserID = $userID";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_array($result);


            $description = $row["description"];
            $IDProfile = $row["IDProfile"];
            $image = $row["image"];
        
            



    echo ' 


  
    <form method="POST" id="uploadImage" action="index.php?page=editProfile" enctype="multipart/form-data"> 
    <input type="hidden" name="IDProfile" value="'.$IDProfile.'">

    <input type="file"  name="image" id="edit-button-image">

    

    

    
    
    <div class="container_profil">
   


                <div class="avatar-flip">
                  <img src="media/'.$image.'">
                  <img src="media/bio.jpg" >
                </div>
           


                <h2>' .$username_video. '</h2>
              

    

       <textarea name="description" id="opisivanje">'.$description.'</textarea>

            <div class="profilee">
            <input type="hidden" name="userID" value="'.$userID.'" >
            <input type="hidden" name="IDProfile" value="'.$IDProfile.'">
            </div>
    </div>
    <input type="submit" name="btn_profile"  id="edit-button" value="Spremi">
    </form>

    ';

    
  
            

    
            
    }

   









      else {

        if(isset($_POST["btn_profile"])){

       $username1 = $_POST["username"];
          $query = "SELECT  users.ID, users.username, user_profile.description, user_profile.image, user_profile.UserID from users, user_profile where users.ID = user_profile.UserID";
          

          $result = mysqli_query($con, $query);
          $row = mysqli_fetch_array($result);

         
          $ID = $row["ID"];
          $userID = $row["UserID"];
          $description = $row["description"];
          $image=$row["image"];


      



        echo ' 

      <div class="container_profil">
        <div class="avatar-flip">
          <img src="media/'.$image.'">
          <img src="media/bio.jpg" >
        </div>

        <h2>' .$username_video. '</h2>
        <p>'.$row["description"].'</p>
      </div>



      ';


      echo'
      <div class="profesor_kontakt">
  
  <form method="POST" action="index.php?page=contactObrazac">
  
  <input type="hidden" name="email" >
  <h3>  Stupite u kontakt </h3>
  <input type="hidden" name="username" value="'.$username1.'">
  <input type="submit" class="button" name="btn_email" value="Pošaljite email">
  
  </form>
  </div>
  
  
  
      ';
  
      

    }

      }
    }
    






?>