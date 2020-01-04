<?php




        include("db_connection_show_me.php");

        if(isset($_POST["btn_visitor"])){

            $username = $_POST["username"];
            $password = $_POST["password"];
            $email = $_POST["email"];
            
            

            $username = trim($username);
            $password = trim($password);



            $query = "INSERT INTO  users (ID, username, email, ime, prez, password, mobitel, oib, IDVrsta)
                                            VALUES('null', '$username','$email','null', 'null','$password','null', 'null','1')
            ";


            $result = mysqli_query($con, $query);

            if($result){

                    header("Location: http://localhost/zavrsni/login.php");
            
            
            }
            else {



                echo ' Doslo je do pogreske';
                
            }



        }





      

        if(isset($_POST["btn_register"])){

            $username = $_POST["username"];
            $ime = $_POST ["ime"];
            $prez = $_POST["prez"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $mobitel = $_POST["mobitel"];
            $oib = $_POST["oib"];

          
            

      
            $username= trim($username);
            $password = trim($password);

            $query ="INSERT INTO users (ID, username, email, ime, prez, password,  mobitel, oib, IDvrsta)
            VALUES('null', '$username', '$email','$ime', '$prez,' ,'$password', '$mobitel', '$oib','2' )
            ";

            $result = mysqli_query($con, $query);



                $query1 = "SELECT * from users where username = '$username'";
                $result1 = mysqli_query($con, $query1);
                $row = mysqli_fetch_array($result1);

                $ID_user = $row["ID"];

                $query_insert = " INSERT INTO user_profile (IDProfile, image, description, UserID)
                value ('null', 'null', 'Za uredivanje opisa kliknite', '$ID_user')";
                $result2 = mysqli_query($con,$query_insert);


            

         

            if($result2){

                                
                echo' <h5 class="uspjesno"> Uspješno ste  se registrirali!</h5>';

                echo '<div class="gif"><img src="media/dobro.gif"></div>';
            


            }
            else  {

                echo 'Neuspjesno upisivanje podataka';
            }
 
        }


















?>
