
<?php


include("script/db_connection_show_me.php");
include("script/checklogin.php");









?>

<?php
    if(isset($_GET["page"]) && $_GET["page"] !=""){

        $page = $_GET["page"];
        
    }
    else {
        $page = "default";
    }
    $file = trim($page).".php";

        if(file_exists($file)){

            $include2page = $file;
        }
        else {
        
                $include2page = "default.php";
        }


?>





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
   

    <script src="js/boostrap.min.js"></script>
   


   

   <script src="zavrsni.js"></script>
   <script src="js/jquery-1.11.0.min"></script>
   <script src="js/jquery-1.11.0.min"></script>
   <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.5/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.5/css/froala_style.min.css' rel='stylesheet' type='text/css' />
   
 

  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.5/js/froala_editor.min.js'></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/jquery-ui.css"></script>
 

 

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>


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



                
                 

                        $(window).scroll(function(){

                            if($(this).scrollTop() > 1 ){

                                $('nav').addClass("sticky").css("background-color", "black");
                            }
                            else if($(this).scrollTop() < 1 ){

                                $('nav').addClass("sticky").css("background-color", "transparent");
                            }
                        });


                    $(document).ready(function(){

                        $("#prikazi").click(function(){


                            $("#profesori").slideToggle("slow", "swing");

                        });


                    });

            $(document).ready(function(){



            $("#stars").selectable();


            });
            

            $(document).ready(function(){
        
                    $("#video-ocjena").click(function(){

                        

                      $("#video-ocjena").children(".video_neocjenjen").appendTo("#spremnik").css({

                           width:"500px",
                           height:"300px"

                       }); 

                       $(".ovdje").css("display", "none");        
                    $("#mali-opis").appendTo("#spremnik").css("font-size", "1.1em");

                   

                    });
            });


                $(document).ready(function(){


                    $("#lista-komentara").click(function(){

                        $(".comment-box").slideToggle("slow", "swing").focus();



                    });




                });


   $(document).ready(function(){

       

        $("#lijevo").click(function(){
           
            var currentDiv = $(".active");
            var nextDiv = currentDiv.next();
         

            if(nextDiv.length){


                currentDiv.removeClass("active").css("display", "none");
                                
                nextDiv.addClass("skriven").show("slide", {direction: "left"}, 1000);
                nextDiv.addClass("active").css("display", "block");
                

            }

        });

   });


   $(document).ready(function(){



        $("#desno").click(function(){
           
            var currentDiv = $(".active");
            var prevDiv = currentDiv.prev();
            

            if(prevDiv.length){

                currentDiv.removeClass("active").css("display", "none");
                prevDiv.show("slide", {direction: "right"}, 1000);
                prevDiv.addClass("active").css("display", "block");


            }

        });

    }); 







        $(document).ready(function(){

            $(".delete").click(function(){

                if(confirm("Dali ste sigurni  dali zelite obrisati komentar?"))
                {

                    /* pitanje */
                }

                else {

                    alert("Poruka nije obrisana");
                }



            });






        });



            $("#nasVideo").click(function(){



                



            });
    




        



                    


            $query= "SELECT IDvrsta FROM users where IDvrsta like '$IDvrsta'";
                    $result = mysqli_query($con, $query);
                    $user = mysqli_fetch_array($result);

                    if($user["IDvrsta"] == '3'){

                        $include_profesor = include("Menu/menu_profesor.php");
                     

                    }
                    elseif ($user["IDvrsta"] == '2'){

                        $include_designer = include("Menu/menu_designer.php");

                    }

                    elseif($user["IDvrsta"] == '1'){

                        $include_visitor = include("Menu/menu_visitor.php");
                    }

                    else {
                        
                        header("Location:../login.php");
                    }

                  


</script>

<style>


            * {
  box-sizing: border-box;
}





.container1 {
  height: 100px;

  margin: 0 auto;
}

#success{

    display:none;


}




{

background-image:url(img/f.png);

background-position:center center;
background-attachment: fixed;
width:100%;
background-repeat: no-repeat;

height:500px;

}



.uspjesno {


    text-align:center;
    font-size:1.3em;
}



    #likovi{


        width:200px;
    }


.gif {


    height:200px;
    width:300px;
    margin: 0 auto;
    margin-bottom:100px;
     


}




.progress{


    height:50px;
}

    #gif{

        display:none;


    }

.button-wrap {
 
  text-align: center;
  top: 50%;
    margin-left: 30px;
}
@media (max-width: 40em) {
  .button-wrap {
    margin-top: -1.5em;
  }
}


    .ovdje {

        text-align:center;
        color:grey;
        font-size: 1.4em;
        margin-top:150px;
    }

div.button-wrap {
    width:600px;

}
.button-label {
  display: inline-block;
  padding: 1em 2em;
  margin: 0.5em;
  cursor: pointer;
  color: #292929;
  border-radius: 0.25em;
  background: #efefef;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2), inset 0 -3px 0 rgba(0, 0, 0, 0.22);
  -webkit-transition: 0.3s;
  transition: 0.3s;
 
          width:10px;
      
}
.button-label h1 {
  font-size: 1em;
  font-family: "Lato", sans-serif;
}
.button-label:hover {
  background: #d6d6d6;
  color: #101010;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2), inset 0 -3px 0 rgba(0, 0, 0, 0.32);
}
.button-label:active {
  -webkit-transform: translateY(2px);
          transform: translateY(2px);
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2), inset 0px -1px 0 rgba(0, 0, 0, 0.22);
}
@media (max-width: 40em) {
  .button-label {
    padding: 0em 1em 3px;
    margin: 0.25em;
  }
}.button-label {
  display: inline-block;
  padding: 1em 2em;
  margin: 0.5em;
  cursor: pointer;
  color: #292929;
  border-radius: 0.25em;
  background: #efefef;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2), inset 0 -3px 0 rgba(0, 0, 0, 0.22);
  -webkit-transition: 0.3s;
  transition: 0.3s;
 
          width:10px;
      
}
.button-label h1 {
  font-size: 1em;
  font-family: "Lato", sans-serif;
}
.button-label:hover {
  background: #d6d6d6;
  color: #101010;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2), inset 0 -3px 0 rgba(0, 0, 0, 0.32);
}
.button-label:active {
  -webkit-transform: translateY(2px);
          transform: translateY(2px);
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2), inset 0px -1px 0 rgba(0, 0, 0, 0.22);
}
@media (max-width: 40em) {
  .button-label {
    padding: 0em 1em 3px;
    margin: 0.25em;
  }
}





#jedan-button:checked + .button-label {
  background: red;
  color: #efefef;
}


#dva-button:checked + .button-label {
  background: #D91E18;
  color: #efefef;
}


#treci-button:checked + .button-label {
  background: #4183D7;
  color: #efefef;
}

#cetri-button:checked + .button-label {
  background: grey;
  color: #efefef;
}

#peti-button:checked + .button-label {
  background: brown;
  color: #efefef;
}


#sesti-button:checked + .button-label {
  background: brown;
  color: #efefef;
}

#sedmi-button:checked + .button-label {
  background: black;
  color: #efefef;
}

#osmi-button:checked + .button-label {
  background: green;
  color: #efefef;
}

#deveti-button:checked + .button-label {
  background: orange ;
  color: #efefef;
}

#deseti-button:checked + .button-label {
  background: #2ECC71;
  color: #efefef;
}

.hidden {
  display: none;
}



            #facebook{

                padding-bottom:25px;
            }
                   
            .opis{

            
                padding:10px;
                margin-top: 50px;
                color:black;
                
            }

            div.profesorlist{
                border: 2px solid orange;


            }

            div.profesorlist h5 {

                text-align:center;

            }

        .skriven {


            display:none;
            display
        }
                .opis-profesora {

                    font-size:0.8em;
                    padding:10px;
                    width:300px;
                }

            .opis h2 {

                font-size:2.5em;
                font-family:'Playfair Display', serif;
                text-align:center;


            }

           #slider {

                width:500px;
               
                height:300px;
                margin-top:-200px;
                margin: 0 auto;

            }


            .format {

                font-family:'Playfair Display', serif;
                font-style:'italic';
                margin: 0 auto;
                text-align:center;
                color:grey;
            }


                    .active {

                     
                        width:500px;
                        height:300px;
                        display:inline-block;
                        
                        
                    }


                    .opis-video1 {

                      
                        width:600px;
                        height:300px;
                        margin-top:40px;
                        border: 1px solid orange;
                        margin:0 auto;
                        padding:20px;
                        text-align:justify;   
                       font-size:1.2em;


                    }
                    
                   
                    .jumbotron1 {

background-image:url(img/ff.png);

background-position:center center;

width:100%;
background-repeat: no-repeat;

height:500px;

}

                

                     

                

                      .comment-slider1 {


                        border: 1px solid black;
                        background-color:grey;
                        }

                img#lijevo {
                    width:50px;
                    height:40px;
                    position:Absolute;
                    left:0;



                }

                  img#desno {
                    width:50px;
                    height:40px;
                    position:Absolute;
                    right: 0;
                   
                


                  

                    

                }


                div.strelice {
                    
                        margin: 0 auto;
                        width:700px;
                        position:relative;
                        margin-bottom:30px;

                }

                     img.slikica {
                        width:120px;
                        border-radius: 110px;
                        height:100px;
                        margin-bottom:30px;
                        margin: 0 auto;
                        
                    }
                .prof-comment{


                  
                  color: #adb7bd; font-family: 'Charm', cursive; font-size: 24px; line-height: 26px; text-indent: 30px; margin: 0;
                  margin-top:40px;
                  text-align:center;


                }

                .prof-nas {

                    color: #ff4411; font-size: 34px; font-family: 'Signika', sans-serif; padding-bottom: 10px; 

                    text-align:center;
                }


                .prof-ocjena {

                      color: #adb7bd; font-family: 'Charm', cursive; font-size: 24px; line-height: 26px; text-indent: 30px; margin: 0;
                  margin-top:20px;
                  text-align:center;
                  margin-right:20px;

                }


                .opis-video {




                    margin-left:0px;
                }


                #like-white {

                    text-align:center;
                    text-decoration:none;
                    
             
                            display:block;
                            border-radius: 4px;
                            background-color: gray;
                            border: none;
                            color: black;
                            
                           
                            margin-top:-90px;
                            font-size: 15px;
                            padding: 10px;
                            width: 70px;
                            height:40px;
                            transition: all 0.5s;
                            cursor: pointer;
                            margin-bottom:20px;
                            margin-left:800px;
                           

                }


             

            
               
                #dislike-black {

                    text-align:center;
                    text-decoration:none;


                            display:block;
                            border-radius: 4px;
                            background-color: #282828;
                            border: none;
                            color: white;

                        
                            font-size: 15px;
                            padding: 10px;
                            width: 70px;
                            height:40px;
                            transition: all 0.5s;
                            cursor: pointer;
                           margin-top:-60px;
                            margin-left:720px;

}



                .opis-video a {


                    margin-left:38px;
                    color:black;
                    text-decoration:none;
                    
                    width:140px;
                    transition-duration:500ms;
           
                    transition-timing-function:ease-in;
                    font-size:1.3em;
                    margin-top:10px;



             }


                .opis-video h6 {

                    margin-top:10px;
                    font-size:1.5em;
                    color:black;
        




                }


                .opis-video h5 {

                    margin-top:10px;
                    margin-bottom:10px; 
                    font-family: 'Roboto Slab', serif;
                    font-size:1.5em;


                }
                .rasprava{

                     margin-bottom:0px;
                    display: block;
                    border-radius: 4px;
                    background-color:#45B42F;
                    border: none;
                    color: #FFFFFF;
                    text-align: center;
                    font-size: 18px;
                    text-decoration:none;
                    opacity:0.9;
                    height:45px;
                    padding: 10px;
                    width: 250px;
                    transition: all 0.5s;
                    cursor: pointer;
                    margin: 5px;
                    margin-left:30px;
                    margin-top:-10px;
                }



                .rasprava:hover {
                    text-decoration:none;
                    opacity:0.7;

                }


                 .rasprava12{

                    margin-bottom:0px;
                    display: block;
                    border-radius: 4px;
                    background-color:#45B42F;
                    border: none;
                    color: #FFFFFF;
                    text-align: center;
                    font-size: 18px;
                    text-decoration:none;
                    opacity:0.9;
                    height:45px;
                    padding: 10px;
                    width: 250px;
                    transition: all 0.5s;
                    cursor: pointer;
                    margin:0 auto;
                    margin-bottom:20px;
                    }



                    .rasprava12:hover {
                    text-decoration:none;
                    opacity:0.7;

                    }
                

                #nasVideo{


                    width:500px;
                    height:300px;
                 
                  
                }

                div.container-prvi{

                    overflow:scroll;

                }

            .opis p {

                margin-top:30px;
            }
            body{

                font-family: 'Pattaya', sans-serif;
                background-color:white;
            
            }

                /*
Basic input element using psuedo classes
*/




        
            nesto{



                transform:rotateY(180deg);

            }

            .profesor{

            
                padding:10px;
                border:1px solid black;

                width:100%;
            }

            .rounded-circle {


                width:180px;
                height:130px;
                margin-left:10px;
                margin.bottom:-30px;
            }

            #profesori {

                position:relative;

            }
            @media only screen and (max-width: 1013px) {

                .prvi_profesor{

                    height:300px;

                }
            
            }

            .prvi_profesor p {

            

                margin-left:100px;
            width:60%;
                margin-top:-110px;
                color:grey;
                padding-left:10px;
                float:right;
            }

            .prvi_profesor h3 {
            position:absolute;
            top:-40px;
            font-family: 'Pattaya', sans-serif;
            margin-left:20px;

            
            }

            .naslov {

                margin:0 auto;
                margin-bottom:50px;
                text-align:center;

            }
            #user{

                margin-left:50px;

            }

            .icon{

            width:50px;
            height:30px;
            
            margin: 0 auto;
          
            }

            .logout{
                width:70px;
                height:50px;
                background-color:transparent;
             
                padding:10px;
                margin-left:10px;
                margin-right:15px;
                margin-top:18px;
                border:none;
                transition-duration:500ms;
                transition-timing-function:ease-in;
                transition-property:"background-color";
                text-decoration:none;
                opacity:1;
                transition: ease-in 500ms opacity;

                font-weight:600;
            }

            .logout:hover {

                opacity:0.7;

            }
            


            h5 {

                font-weight:600;
                margin-left:40px;
            }
            
                h6 {

             
                margin-left:40px;
                }

                h6 {

            
                margin-left:40px;
                }


            /*profile*/

            .container_profil {
                width: 700px;
                margin: 120px auto 120px;
                background-color: #fff;
                border: 2px solid orange;
              
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

            #opisivanje {

                    decoration:none;
                    resize:none;
                    margin-right:50px;
                    width:600px;
                    font-size:1.3em;
                    border:none;

                    -moz-appearance:none;
                    outline:0px none transparent;

            }

            #opisivanje1 {
                decoration:none;
                    resize:none;
                    padding :10px;
                 
                    font-size:1.3em;
                    border:none;

                    -moz-appearance:none;
                    outline:0px none transparent;


            }

                #opisivanje:focus, input:focus{
                    outline: 0;
                }

          

      

            


            .profilee{

                width:100px;
                height:100px;
                text-align:center;
                margin: 0 auto;

            }

         input#edit-button{

                     
                                display: inline-block;
                                border-radius: 4px;
                                background-color: #282828;
                                border: none;
                                color: white;
                                text-align: center;
                                font-size: 1.5em;
                                padding:5px;
                                height:50px;
                                width: 400px;
                                height:70px;
                                transition: all 0.5s;
                                cursor: pointer;
                               
                                opacity:1;
                                transition-duration:500ms;
                                transition-property:opacity;
                                transition-timing-function:ease-in;
                                text-align:center;
                                margin-bottom:30px;
                                margin-left:750px;
                                margin-top:-20px;
                              

            }

   


            #edit-button:hover{
                opacity:0.9;


            }


            .container_profil:hover .avatar-flip {
                transform: rotateY(180deg);
                -webkit-transform: rotateY(180deg);
            }
            .container_profil:hover .avatar-flip img:first-child {
                opacity: 0;
            }
            .container_profil:hover .avatar-flip img:last-child {
                opacity: 1;
            }
            .avatar-flip {
                border-radius: 100px;
                overflow: hidden;
                height: 150px;
                width: 150px;
                position: relative;
                margin: auto;
                top: -60px;
            
                transition: all 0.3s ease-in-out;
                -webkit-transition: all 0.3s ease-in-out;
                -moz-transition: all 0.3s ease-in-out;
                box-shadow: 0 0 0 13px #f0f0f0;
                -webkit-box-shadow: 0 0 0 13px #f0f0f0;
                -moz-box-shadow: 0 0 0 13px #f0f0f0;
            }
            .avatar-flip img {
                position: absolute;
                left: 0;
                top: 0;
                border-radius: 100px;
                transition: all 0.3s ease-in-out;
                -webkit-transition: all 0.3s ease-in-out;
                -moz-transition: all 0.3s ease-in-out;
            }
            .avatar-flip img:first-child {
                z-index: 1;
                width:150px;
                height:150px;
            }
            .avatar-flip img:last-child {
                z-index: 0;
                transform: rotateY(180deg);
                -webkit-transform: rotateY(180deg);
                opacity: 0;
                width:150px;
                height:150px;
            }
            h2 {
                font-size: 32px;
            
                margin-bottom: 15px;
                color: #333;
                text-align:center;
            }
            h4 {
                font-size: 13px;
                color: #00baff;
                letter-spacing: 1px;
                margin-bottom: 25px
            }
            p {
            
            
                font-size: 26px;
                line-height: 26px;
                margin-bottom: 20px;
                color: #666;
               
        
            
            }
            
            
            .profesor_kontakt {
            
                text-align:center;
            }



            /* Button */

           
            .button {

            margin-bottom:50px;
            display: inline-block;
            border-radius: 4px;
            background-color: #f4511e;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 24px;
            padding: 15px;
            width: 350px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
            margin-left:-10px;
            }
            .button1 {

                display: inline-block;
                border-radius: 4px;
                background-color: #f4511e;
                border: none;
                color: #FFFFFF;
                text-align: center;
                font-size: 24px;
                padding: 15px;
                width: 350px;
                transition: all 0.5s;
                cursor: pointer;
                margin-bottom: 50px;
                margin-left:750px;
             
                }

                .button2 {
                display: inline-block;
                border-radius: 4px;
                background-color: #f4511e;
                border: none;
                color: #FFFFFF;
                text-align: center;
                font-size: 24px;
                padding: 15px;
                width: 350px;
                transition: all 0.5s;
                cursor: pointer;
                margin-bottom: 50px;
                margin-left:750px;

                }

            .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 1s,;

            }

            .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 1s;

            }

            .button:hover span {
            padding-right: 25px;
            }

            .button:hover span:after {
            opacity: 1;
            right: 0;
            }


            .profesor_kontakt {

                    margin-bottom:50px;


            }

            .profesorlist  a {


                text-decoration: none;
                background-color:green;
                color:White;
                padding:10px;
                transition-duration: 500ms;
                transition-property:"background-color";
                transition-timing-function:ease-in;
                font-weight:200;
                

            }

            .profesorlist a:hover {


                
            }

            footer {

                margin-right :0;
                clear:both;
                width:100%;
            }
           footer ul {

               margin-left:-20px;
           }

           footer ul li {
               margin-right:5px;
               height:20px;
               
           }



           /*uplaod*/

            .container-upload {

                text-align  :center;

            }

            .container-upload h4 {
                   
                    font-weight:500;
                    font-size:2.0em;



            }

            .prosjek {
            
              
            

            

            }

            .progress-pie-chart{


               
            }


                .pcc-percents-wrapper{

                    position:absolute;
                    bottom:60px;
                    left: 60px;
                    background-color:non
                   

                }
     

                    h3{

                        background-color:none;
                    }

            
            .text1 {
             
                width:700px;
                height:300px;

            }
            .container-upload input {

                    width:500px;




            }
            
            input[type='file'] {
                    color: transparent;
                    width:20%;
                    padding:5px;
                    margin-left:45%;
}
            
             
                #spremnik{
            height:400px;
            
          }
       

          /***********************repizutoriji*********************/
          
        #stars {margin-left:0px; }
        #stars .ui-selecting {border:1px solid orange;}
        #stars .ui-selected {background-color:orange; color:White;}
         
        .lia {
          padding:10px;
          border:1px solid black;
          width:40px;
          font-size:1.5em;
          text-decoration:none;
          display:inline-block;
          cursor:pointer;

        }

       #spremnik {


          
            width:600px;

        }

        .text_ocjena{

            width:600px;
            resize:none;
            height:450px;
           
        }


        .container-drugi {

            border: 1px solid  grey ;

            margin-left:30px;


        }
        textarea:hover, 
        input:hover, 
        textarea:active, 
        input:active, 
        textarea:focus, 
        input:focus,
        button:focus,
        button:active,
        button:hover,
        label:focus,
        .btn:active,
        .btn.active
        {
            outline:0px !important;
            -webkit-appearance:none;
            
        }
        textarea.text1:hover, 
        input:hover, 
        textarea:active, 
        input:active, 
        textarea:focus, 
        input:focus,
        button:focus,
        button:active,
        button:hover,
        label:focus,
        .btn:active,
        .btn.active
        {
            outline:0px !important;
            -webkit-appearance:none;
            resize:none;
        }

        .video_spremnik {


          width:700px;
          height:300px;
        }


        #video-ocjena{

            margin-bottom:50px;
        }


        .video-prebacen {

            width:500px;
            height:300px;

        }

        #mali-opis{

            margin-left:40px;
            font-size:1.1em;

        }
        .zuti {

          background-color:yellow;
        }
        footer {

        margin-right :0;
        }


                .info {
                    position:relative;
                    margin-bottom:100px;
                    margin-left:38px;
                }

                .info a {

                    text-decoration:none;
                    color:grey;
                    
                    padding:10px;
                    font-weight:500;
                    font-size:1.8em;
                    width:60px;
                    position:Absolute;
                    top:40px;
                    left:-10px;
                    
                }
                .info a:hover{



                }
                


            
                video_povuci {
                display:block;


                }
                .prvi {

                padding:10px;
                width:1200px;
                background-color:black;
                }

                .video_povuci {

                width:600px;


                }

                .drugi {

                width:600px;
                float:right;
                }
                video {


                margin-left:40px;
                width:200px;
                height:100px;

                }


                /*h5 {

                text-align:center;
                margin-top:-20px;
                font-weight:600;
                }
                */


                .text1 {

                width:600px;
                }



                .ocjena {

                margin-bottom:10px;



                }
                .ocjene {

                margin-left:50px;
                }


                .button {

                margin-bottom:-40px;
                display: inline-block;
                border-radius: 4px;
                background-color: #f4511e;
                border: none;
                color: #FFFFFF;
                text-align: center;
                font-size: 24px;
                padding: 15px;
                width: 350px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
                margin-left:0px;

                }

                .button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 1s,;

                }


                #but {
                    margin-left: 130px;


                }

                .button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 1s;

                }

                .button:hover span {
                padding-right: 25px;
                }

                .button:hover span:after {
                opacity: 1;
                right: 0;
                }



               

                .container-drugi {


                width:700px;
                }

                .container-prvi {

                overflow-y:scroll;


                }
                .progressDiv
                {

                    
                }

                 /*upload------------------------------*/

                select.sel {


                    width:600px;
                    height:30px;
                    margin-left:50px;

                    }

                    input.nas {

                        width:600px;
                        margin-left:20px;
             



                    }
                        .upload h4 {

                            text-align:center;
                  
                            font-family: 'Pattaya', sans-serif;;
                        }
                    .upload input {

                        width:700px;
                    }
                
                    .kat {

                        margin-top:50px;
                    }

                  .text2{


                        width:670px;;
                        height:50px;
                        margin-top:0px;
                        margin-left:0px;
                        resize:none;
                        

                        }

                        textarea{
                            width:700px;
                            height:500px;
                            margin-top:20px;
                            margin-left:40px;


                        }



                        /* comentari */

              

                        .button_black{

                            margin-bottom:50px;
                            display: inline-block;
                            border-radius: 4px;
                            background-color: #282828;
                            border: none;
                            color: white;
                            margin-top:10px;
                            text-align: center;
                            font-size: 17px;
                            padding: 10px;
                            width: 170px;
                            transition: all 0.5s;
                            cursor: pointer;
                       
                        
                            margin-top:20px;
                                


                            }


                        

                            .button_black_username{

                                 margin-bottom:50px;
                            display: inline-block;
                            border-radius: 4px;
                          
                            border: none;
                        
                            font-family: 'ZCOOL XiaoWei', serif;
                            text-align: center;
                            font-size: 20px;
                            padding: 5px;
                            width: 400px;
                            transition: all 0.5s;
                            font-weight:500;
                            transition: all 0.5s;
                            cursor: pointer;
                            margin: 5px;
                            margin-right:150px;
                            margin-bottom:-80px;
                            margin-left:30px;
                            opacity:0.7;
                         

                            }


                            
                            .button_black_username1{

                            margin-bottom:50px;
                            display: inline-block;
                            border-radius: 4px;

                            border: none;

                            font-family: 'ZCOOL XiaoWei', serif;
                            text-align: center;
                            font-size: 20px;
                            padding: 5px;
                            width: 400px;
                            transition: all 0.5s;
                            font-weight:500;
                            transition: all 0.5s;
                            cursor: pointer;
                            margin: 5px;
                            margin-right:150px;
                            margin-bottom:-80px;
                            margin-left:80px;
                            opacity:0.7;


                            }




                            .naslov {

                                width:600px;
                                
                                margin-top:30px;
                                margin-left:0px;
                            }
                   
                            .button_black_username:hover {


                                opacity:1;
                            }



                            .edit {

                                position:Absolute;
                                bottom:0;
                                right:100;    
                                margin-bottom:50px;
                                display: inline-block;
                                border-radius: 4px;
                                background-color: #282828;
                                border: none;
                                color: white;
                                text-align: center;
                                font-size: 15px;
                                padding: 7px;
                                width: 80px;
                                transition: all 0.5s;
                                cursor: pointer;
                                margin: 5px;
                                opacity:1;
                                margin-left:510px;
                                transition-duration:500ms;
                                transition-property:opacity;
                                transition-timing-function:ease-in;


                            


                            }

                            .edit:hover {

                                opacity:0.9;
                            }

                            .delete{

                                    position:Absolute;
                                bottom:0;
                                right:0;    
                                margin-bottom:50px;
                                display: inline-block;
                                border-radius: 4px;
                                background-color: #ff4d4d;
                                border: none;
                                color: white;
                                text-align: center;
                                font-size: 15px;
                                padding: 7px;
                                width: 80px;
                                transition: all 0.5s;
                                cursor: pointer;
                                margin: 5px;
                                margin-left:0px;
                                margin-top:5px;
                                transition-duration:500ms;
                                transition-property:opacity;
                                transition-timing-function:ease-in;

                                
                            
                            }
                        
                        .delete:hover {

                            opacity:0.9;
                        }

                        .comment-box {

                          
                            position:Relative;
                            width:700px;
                            margin-top:0px;
                            margin: 0 auto;
                            padding:20px;
                            margin-bottom:20px;
                            border-radius: 4px;
                            border: 1px solid grey;
                            text-align:justify;
                            height:170px;



                        }


                        .vrijeme{
                                position:absolute;
                                margin-top:-40px;
                                font-size:1.1em;
                                right:0;
                                padding-right:10px;

                                

                        }
                        

                        .username{
                            position:absolute;
                            top:0;
                            left:4;
                            padding:5px;
                            font-size:1.3em;
                            margin-left:20px;


                        }

                        .comment-text{

                                font-size:1.2em;
                                margin-top: -40px;
                                

                        }

                        .form-comment {

                            margin-left:200px;
                            margin-top:10px;

                        }

                      .video-comments {
                            margin-left:200px;

                        }



                        .profesorlist {

                            margin-left:300px;
                            margin-bottom:30px;
                            width:500px;
                          
                            border-radius:10px;
                            padding:10px;



                        }
                        #profile-button-prof{

                            
                            display: block;
                                border-radius: 4px;
                                background-color: orange;
                                border: none;
                                color: white;
                                text-align: center;
                                font-size: 1.5em;
                                padding:5px;
                             
                                width: 400px;
                                height:50px;
                                transition: all 0.5s;
                                cursor: pointer;
                                margin: 0 auto;
                                opacity:1;
                                transition-duration:500ms;
                                transition-property:opacity;
                                transition-timing-function:ease-in;
                             
                            
                              
                        }

                        #profile-button-prof:hover{


                            opacity:0.7;
                        }

                        .profesorlist h3 {


                            margin-left:30px;
                        }

                        .profesorlist h5 {

                           margin-left:13px;
                        }


                        .profile-icon {


                           decoration:none;
                           background-color:transparent;
                            border: none;
                            color:white;
                            margin-top:5px;
                            margin-left:10px;
                            opacity:1;
                            transition-duration:500ms;
                            transition-property:opacity;
                            transition-timing-function:ease-in;

                        }
                        .profile-icon1 {


                            decoration:none;
                            background-color:transparent;
                            border: none;
                            color:white;
                            margin-top:5px;
                            margin-left:10px;
                            opacity:1;
                            transition-duration:500ms;
                            transition-property:opacity;
                            transition-timing-function:ease-in;

                }

                        .profile-icon:hover{

                            opacity:0.7;

                        }


                        h5.vrijeme {

                          position:absolute;
                     
                            margin-right:400px;
                            margin-top:-265px;


                        }

                        input#edit-button-image {

                                
                                display: inline-block;
                                border-radius: 4px;
                           
                                border-radius:10px;
                                color: white;
                                text-align: center;
                                font-size: 1.5em;
                                padding:5px;
                                    
                                width: 100px;
                                height:50px;
                                transition: all 0.5s;
                                cursor: pointer;
                                margin: 5px;
                                opacity:1;
                                transition-duration:500ms;
                                transition-property:opacity;
                                transition-timing-function:ease-in;
                                margin-left:1050px;
                                position:Absolute;
                                top:-20;
                    
                        }

                        .video_komentiranje {

                            border:none;
                            margin-left:250px;
                         


                        }
                            .form-comment {

                                margin-top:100px;
                            }
          


            .designer_slikica {


                    width:40px;
                    height:20px;
                    top:0;
                     margin-left:3px;
                     left:0;
                     position:absolute;
                     margin-top:7px;
                     
                   



            }
          


            .button-image {


                border:none;
                decoration:none;
                background-color:transparent;
            }

            .button-image:active{

                outline:none;
                border:none;

            }

            .button-image:focus {


                outline:0;

            }

         
        
        @media screen and (max-width: 640px) {



              .logout{
                width:80px;
                height:50px;
                background-color:transparent;
             
                padding:10px;
                margin-left:30px;
               
                margin-top:-10px;
                border:none;
                transition-duration:500ms;
                transition-timing-function:ease-in;
                transition-property:"background-color";
                text-decoration:none;
          

                font-weight:600;
            }

                .button_black_username{

                    width:150px;
                    margin-top:20px;
                    margin-left:20px;
                    

                }

                img.icon {

                    


                }
                div.jumbtron{

width:100%;
}



    #navbarNav {

        height:550px;

    }


    ul.nav.justify-content-end {

        height:450px;
    }


            div#navbarNav.navbar-collapse{

                    height:500px;

            }

                ul.nav.justify-content-end{

                    display:block;
                    height:380px;
                }


                form.profile_form{

                    margin-left:-30px;
                }

                
                li.nav-item {

                  width:100px;
                    background-color:none;
                    opacity:1;
               
             
                }


                div.container_profil{


                    width:500px;
                    height:700px;
                }

                div.container_profil {

                    width:100%;
                }
              

                button.profile-icon {

                    margin-top:30px;
                        margin-left:-28px;

                }


                  button.profile-icon1 {


                      margin-left:35px;
                      margin-top:-40px;

}
                a.nav-link {

                    font-size:0.9em;
                }

                #logout{

                    margin-top:-190px;
                
                }


            .rasprava {

                width:170px;
              margin-top:10px;
              margin-left:20px;


            }


            #nasVideo {

                width:300px;
                margin-left:20px;

            }

            h5 {

                margin-left:18px;
                margin-top:10px; 
            }
        }

            button.navbar-toggler {


                background-color:orange;
            }
            
            button.navbar-toggler:hover{

                opacity:0.7;

            }

      img.kateg {


        width:500px;
      }

   
    }


      @media screen and (max-width: 375px) {

        img.kateg {

            width:350px;

        }

      }

</style>



 
  </head>

<body>
<?php



ini_set('display_errors',1);
error_reporting(-1);


         


  
    
        
?>
         
   

<div class="jumbotron1">


</div>

<?php



    include($include2page);








?>


        <footer>
            
       <h5>SHOW ME</h5>
                <ul>
                        <li><a href="#" id="facebook"></a></li>
                        <li><a href="#" id="pinterest"></a></li>
                        <li><a href="#" id="youtube"></a></li>
                        
                </ul>
            <span  >Copyright © 2018. Show me. All rights reserved.</span>
     
        </footer>

</body>

</html>