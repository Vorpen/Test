<?php


echo '<nav class="navbar fixed-top navbar-expand-md navbar-light ">

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
	  <a class="nav-link" href="index.php?page=onama"> O nama</a>
      
    </li>  
     
         <li class="nav-item" id="user">
          <a class="nav-link" href="index.php?page=profile"><?php echo ''.$_SESSION["username"].'';?> <img src="media/head1.png" class="icon" ></a>
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