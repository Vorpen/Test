
<?php

       



            

$query = "SELECT video.ID, video.filename, video.title, video.time,  video.description, video.statusID, video.Kategorija, users.username from video, users where video.userID = users.ID and video.statusID='1'  order by video.time desc ";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result)){

    $username = $row["username"];
    $title = $row["title"];
    $kategorija = $row["Kategorija"];
    $filename = $row["filename"];
    $ID = $row["ID"];
   
    $description = $row["description"];
    $time = $row["time"];

       

    $query = "SELECT ROUND(AVG(points),2) as points, ROUND(AVG(points)*100 /10,2) as prosjek from video_points where $ID= videoID";
    $result5 = mysqli_query($con,$query);
    while($row1 = mysqli_fetch_array($result5)){
    $ocjena = $row1["points"];
                  
    $prosjek = $row1["prosjek"];
                 
                        $query ="SELECT Views from video_view where $ID = videoID";
                        $result6 = mysqli_query($con, $query);
                        $row2 = mysqli_fetch_array($result6);

                        $views = $row2["Views"];
         
 echo'
<div class="container">

     <div class="row">
        
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 text-left">
    
       
       <video  id="nasVideo">
                   <source src= "media/'.$filename.'" type="video/mp4"></source>
              </video>
             
        
                 <div class="opis-video">
                 <h5> '.$title.'  </h5>
               
                 <form method="POST"  action="index.php?page=profileIN">
                 <input type="hidden" name="ID"  value="'.$ID.'">
                 <input type="hidden" name="username"  value="'.$username.'">
                 <button type="submit" class="button_black_username" name="btn_profile"> '.$username.'</button>
                 </form>
                 </div>
                 <form method="POST" action="index.php?page=comment">
                 
                 <input type="hidden" name="filename" value="'.$filename.'">
                 <input type="hidden" name="username" value="'.$username.'">
                
                 <input type="hidden" name="title" value="'.$title.'">
                 <input type="hidden" name="ID"  value="'.$ID.'">
                 <input type="hidden" name="description" value="'.$description.'">
               <button type="submit" class="rasprava" name="btn_rasprava" >Rasprava</button>
                 </form>
               
                 ';




            
                                    


        echo'
        </div>
        


                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 text-left">
                 <div class="progressDiv">
                   <div class="statChartHolder">
                   ';
       
                       
                   echo'
                       <div class="progress-pie-chart">
                    
                        <div class="progress-pie-chart" ><!--Pie Chart -->
                    
                       
                         
                           <div class="pcc-percents-wrapper">
                               <h3 >'.$prosjek.'%</h3>
                           </div>
               
                       </div><!--End Chart -->
                       
        
                    
                   </div>
                    
                   </div>
                
                   ';
                
                   echo'
                   <div class="statRightHolder">
                       <ul>
                       <li> <h3 class="blue">'.$ocjena.'</h3> <span>Ocjena</span></li>
                       <li> <h3 class="purple">'.$views.'</h3> <span>Pogleda</span></li>
                        </ul>
                       
                      </div>
                      </div>
               

            </div>
            </div>
            </div>
            </div>





';

                
                

}


}


?>