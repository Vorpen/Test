<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Show me </title>
    <meta name="title" content="Hello its me">
    <meta name="description" content="Pokažite svoj edukativni rad i dozvolite da bude pod vašim imenom ocjenjen">
    <meta name="keywords" content="Show me, showme, show me">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/style1.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
   <script src="zavrsni.js"></script>
   <script src="js/jquery-1.11.0.min"></script>
   <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.5/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.5/css/froala_style.min.css' rel='stylesheet' type='text/css' />
 

  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.5/js/froala_editor.min.js'></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>


   $(window).scroll(function(){

if($(this).scrollTop() > 1){

    $('nav').addClass("sticky").css("background-color","black");

}
else if ($(this).scrollTop() < 1) {

    $('nav').addClass("sticky").css("background-color","transparent");
}


});
/*Grafikon+*/
    $(function(){
      var $ppc = $('.progress-pie-chart'),
        percent = parseInt($ppc.data('percent')),
        deg = 360*percent/100;
      if (percent > 50) {
        $ppc.addClass('gt-50');
      }
      $('.ppc-progress-fill').css('transform','rotate('+ deg +'deg)');
      $('.ppc-percents span').html(percent+'%');
    });


/************Button************/


    $('#froala-editor').froalaeditor();
 

     

  </script>


 
  </head>
<body>
<?php

   
echo'


<nav class="navbar fixed-top navbar-expand-md navbar-light ">

  <button class="navbar-toggler" type="button" data-target="#navbarNav" data-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" aria-controls="navbar-collapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class=" navbar-collapse" id="navbarNav">
    <ul class="nav justify-content-end ">
      <li class="nav-item ">
        <a class="nav-link" href="#">Naslovna <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="#">Top </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kategorije.html">Kategorije</a>
      </li>
      <li class="nav-item">

        <a class="nav-link" href="#">Repzotoriji</a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Profil</a>

      </li>
	
         
   
    </ul>
  </div>
</nav>



<div class="jumbotron">
    
</div>


      <div class="container" >
       <div class="row"> 
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 text-left">
          <div class="container-prvi"> 
            <video width="420px" height="300px" controls>
              <source src="media/borna.mp4" type="video/mp4">
                <source src="media/borna.ogg" type="video/ogg">
              
                </video>
              
                <video width="420px" height="300px" controls>
                    <source src="media/borna.mp4" type="video/mp4">
                      <source src="media/borna.ogg" type="video/ogg">
                    
                      </video>
                    
                      <video width="420px" height="300px" controls>
                          <source src="media/borna.mp4" type="video/mp4">
                            <source src="media/borna.ogg" type="video/ogg">
                          
                            </video>
                           
                            <video width="420px" height="300px" controls>
                                <source src="media/borna.mp4" type="video/mp4">
                                  <source src="media/borna.ogg" type="video/ogg">
                                
                                  </video>
                               
                                  <video width="420px" height="300px" controls>
                                      <source src="media/borna.mp4" type="video/mp4">
                                        <source src="media/borna.ogg" type="video/ogg">
                                      
                                        </video>
                                        


            </video>

          </div>
            </div>
  
              
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 text-left">
                    <div class="container-treci"> 

                      <form method="POST" action="">
                        <div class="container-drugi">
                           
                            <video width="500px" height="300px" controls >
                                <source src="media/borna.mp4" type="video/mp4">
                                  <source src="media/borna.ogg" type="video/ogg">
                                
                                  </video>
                        </div>
                        
                        <br>
                         <textarea  name="comment"> </textarea>
                        <button type="submit"  class="button"  name="btn_uplaod" ><span>Ocjeni </span></button>


                      

                       
                      
                      </form>
                    </div>
                  </div>
            
          </div>
        </div>
        </div>
        

      

        <footer>
            
       <h5>SHOW ME</h5>
                <ul>
                        <li><a href="#" id="facebook"></a></li>
                        <li><a href="#" id="pinterest"></a></li>
                        <li><a href="#" id="youtube"></a></li>
                        
                </ul>
            <p>Copyright © 2018. Show me. All rights reserved.</p>
     
        </footer>

</body>
';
?>