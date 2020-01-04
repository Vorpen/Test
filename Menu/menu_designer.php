
<?php


echo'
<nav class="navbar fixed-top navbar-expand-md navbar-light ">

  <button class="navbar-toggler" type="button" data-target="#navbarNav" data-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" aria-controls="navbar-collapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class=" navbar-collapse" id="navbarNav">
    <ul class="nav justify-content-end ">
      <li class="nav-item ">
        <a class="nav-link" href="index.php?page=default">Naslovna <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="index.php?page=top">Top </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=kategorije">Kategorije</a>
      </li>
	  <li class="nav-item">
	  <a class="nav-link" href="index.php?page=Profesori"> Profesori</a>
      
    </li>  
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=video">Upload</a>
         </li>

         

       
        
         <li class="nav-item" id="user">

         <form method="POST" class="profile_form1" action="index.php?page=kao">
         <input type="hidden" name="ID" value="'.$_SESSION["ID"].'">
         <input type="hidden" name="username"  value="'.$_SESSION["username"].'">
           <button name="btn_kao" class="profile-icon"> '.$_SESSION["username"].'  <img src="media/head1.png" class="icon" ></button>

          </form>
       


      
        </li>

        <li class="nav-item">

        <form method="POST" class="profile_form" action="index.php?page=profileIN">
         
        <input type="hidden" name="username"  value="'.$_SESSION["username"].'">
        <button name="btn_profile" class="profile-icon1"> <img src="media/edit1.png" class="icon" ></button>
        </form>


        </li>

    
            <li class="nav-item">
           <form method="POST" action="login.php">
         <a href="../zavrsni/login.php" class="nav-link" id="logout">Logout</a>
          </form>
          </li>
   
    </ul>
  </div>
</nav>
';
?>