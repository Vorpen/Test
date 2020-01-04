
<?php



echo ' 
      <div class="container" >
       <div class="row"> 
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 text-left">
        
          <div class="container-prvi"> 
           ';

          $query = "SELECT video.ID, video.filename,video.time, video.title, video.time,  video.description, 
          video.Kategorija, users.username from video, users 
            where video.userID = users.ID and statusID = '2' or statusID='1' order by video.time asc  ";

        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_array($result)){

          $username = $row["username"];
          $title = $row["title"];
          $kategorija = $row["Kategorija"];
          $filename = $row["filename"];
          $ID = $row["ID"];
          $description = $row["description"];
          $time = $row["time"];
         
          $newDate = date('d-m-Y', strtotime($time));



          
        }

echo'





           
            <div id="video-ocjena">
            <video width="420px" height="300px" class="video_neocjenjen" controls>
              <source src="media/'.$filename.'" type="video/mp4">
              <input type="hidden" name="ID" value="'.$ID.'">
              <input type="hidden" name="username" value="'.$username.'">
              <input type="hidden" name="Kategorija" value="'.$kategorija.'">

                <source src="media/borna.ogg" type="video/ogg">
                
                </video>



                <p id="mali-opis"> '.$title.' | '.$username.' | '.$newDate.'  </p>
                  
              </div>

          ';
        
          
          

              
               
                                        
                 echo'  
                 
                 </div>
                 </div>

                   
                 


                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 text-left">
                 <form method="POST" action="index.php?page=points">
             
                 <div id="spremnik" class="container-drugi">
                         

                         <h5 class="ovdje"> Video ide ovdje, klikom na prvog odozgora </h5>

                 </div>

';
        
        
        $userID = $_SESSION["ID"];

                  
            
                  echo'
                  <input type="hidden" name="userID" value="'.$userID.'">
                
               
                  <div class="container1">
                  <div class="button-wrap">
                    <input class="hidden radio-label" type="radio" name="points" id="jedan-button" value="1"/>
                    <label class="button-label" for="jedan-button">
                      <h1>1</h1>
                    </label>
                    <input class="hidden radio-label" type="radio" name="points" id="dva-button" value="2"/>
                    <label class="button-label" for="dva-button">
                      <h1>2</h1>
                    </label>
                    <input class="hidden radio-label" type="radio" name="points" id="treci-button" value="3"/>
                    <label class="button-label" for="treci-button">
                      <h1>3</h1>
                    </label>
                    <input class="hidden radio-label" type="radio" name="points" id="cetri-button" value="4"/>
                    <label class="button-label" for="cetri-button">
                      <h1>4</h1>
                    </label>
                    <input class="hidden radio-label" type="radio" name="points" id="peti-button" value="5"/>
                    <label class="button-label" for="peti-button">
                      <h1>5</h1>
                    </label>
                    <input class="hidden radio-label" type="radio" name="points" id="sesti-button" value="6"/>
                    <label class="button-label" for="sesti-button">
                      <h1>6</h1>
                    </label>
                    <input class="hidden radio-label" type="radio" name="points" id="sedmi-button"value="7"/>
                    <label class="button-label" for="sedmi-button">
                      <h1>7</h1>
                    </label>
                    <input class="hidden radio-label" type="radio" name="points" id="osmi-button" value="8"/>
                    <label class="button-label" for="osmi-button">
                      <h1>8</h1>
                    </label>
                    <input class="hidden radio-label" type="radio" name="points" id="deveti-button" value="9"/>
                    <label class="button-label" for="deveti-button">
                      <h1>9</h1>
                    </label>
                    <input class="hidden radio-label" type="radio" name="points" id="deseti-button" value="10"/>
                    <label class="button-label" for="deseti-button">
                      <h1>10</h1>
                    </label>
               
              
               </div>
               </div>
        
               <textarea class="text_ocjena"  name="comment" placeholder="Komentar upišite ovdje..." > </textarea>
               <button type="submit"  class="button" id="but" name="btn_upload" ><span>Ocjeni </span></button>
             

              
             
             </form>
        
        ';
        
        echo'
                 
               



                 </div>
               </div>
             </div>
        
         
              
  
              
       
                 

        ';
      
        
?>
      

  
