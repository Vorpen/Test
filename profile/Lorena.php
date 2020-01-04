<?php


  if($_SESSION["username"] == "Lorena"){

echo'

<div class="container_profil">
  <div class="avatar-flip">
    <img src="media/lorena.jpg">
    <img src="media/download.png" >
  </div>
  <h2>Lorena Zarković</h2>
  <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risus varius blandit sit amet non magna ip sum dolore. porta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risusporta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risusporta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risusporta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risus</p>
 
</div>

';
  }

  else {




    echo'

    <div class="container_profil">
      <div class="avatar-flip">
        <img src="media/lorena.jpg">
        <img src="media/download.png" >
      </div>
      <h2>Lorena Zarković</h2>
      <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risus varius blandit sit amet non magna ip sum dolore. porta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risusporta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risusporta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risusporta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risus</p>
     
    </div>
    
    ';



  $query = "SELECT * from users where username = 'Lorena'";
  $result = mysqli_query($con, $query);

  $row= mysqli_fetch_array($result);

  $email = $row["email"];


echo'




<div class="profesor_kontakt">

<form method="POST" action="index.php?page=contactObrazac">

<input type="hidden" name="email" value="'.$email.'" >
<h3>  Stupite u kontakt </h3>
<input type="submit" class="button" name="btn_email" value="Send email">

</form>
</div>



';
  }
?>