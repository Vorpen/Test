
<?php

echo '



        
          <div class="container">
              <div class="row">
                  <div class="col-xs-12 col-sm-12- col-md-12 col-lg-12">
                    <div class="container-upload">
                    <form method="POST" action="index.php?page=upload" enctype="multipart/form-data" class="upload">
                    <h4>Naslov videa</h4><br>
                    <input type="text" name="title" class="nas" >
                    <br>
                     
                  
                    <h4 class="kat">Kategorije</h4>   <br>
             
                    <select name="kategorija" class="sel">
                      <option>Odaberite</option>
                      <option>Matematika</option>
                      <option>Psihologija</option>
                      <option>Biologija</option>
                      <option>Fizika</option>
                      <option>Umjetnost</option>
                      <option>Kemija</option>
                      <option>Informatika</option>
                    </select>
                    <br><br>
                    <h4 class="op">Opis</h4>
                    <br> <br>
                    <textarea name="description" class="text1"></textarea>
                    <br>
                    <br>
                    <br>
                     <h4>Upload:</h4> 
                     <input type="file" name="datoteka" value="Upload" id="uploadFile" class="upload_button">
                    <br>
                    <input type="submit" name="btn_upload" id=""value="ShowMe" class = " button">

                    </form>
                    
                    


            

                    </div>
                      </div>
                          </div>
                            </div>

            

          


<img src="media/sucess.gif" id="success">

<div class="progress">
   <h5 class="format">MP4/H.264</h5> <h5 class="format"> AVI </h5>
</div>


';

            ?>
