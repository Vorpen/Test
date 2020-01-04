<?php



if(isset($_POST["btn_kao"])){

$ID = $_POST["ID"];
$username = $_POST["username"];


    
  $query = "SELECT  users.username, user_profile.description, user_profile.image, user_profile.UserID from users, user_profile where $ID = user_profile.UserID";
  

  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_array($result);

 

  $userID = $row["UserID"];
  $description = $row["description"];
  $image = $row["image"];





echo ' 

<div class="container_profil">
<div class="avatar-flip">
  <img src="media/'.$image.'">
  <img src="media/bio.jpg" >
</div>

<h2>' .$username. '</h2>
<p>'.$description.'</p>


</div>
';


echo'
<div class="profesor_kontakt">
<h3>  Stupite u kontakt </h3>
<input type="submit" class="button" value="Pošaljite email">
</div>

';




}




















?>