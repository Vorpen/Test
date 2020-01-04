<?php
 
 include("db_connection_show_me.php");


 session_start();



 if(isset($_SESSION["ID"]) && $_SESSION["ID"] > 0){

    $ID = $_SESSION["ID"];
    $username = $_SESSION["username"];
    $IDvrsta = $_SESSION["IDvrsta"];    


 }


 if(isset($_POST["btn_login"])){



    $username = $_POST["username"];
    $password = $_POST["password"];

    $username_form = trim($username);
    $password= trim($password);
    
    $query = "SELECT ID, username, password, IDvrsta  from users where username like '$username'";

    $result = mysqli_query($con, $query);

    $user = mysqli_fetch_array($result);

    if($user["password"] == $password){

       
        $_SESSION["ID"] = $user["ID"];
        $_SESSION["username"] = $user["username"]; 
        $_SESSION["IDvrsta"] = $user["IDvrsta"];

    }
             
    else {

        header("Location: ../login.php");
        exit;

        
    }
}



 


    






 




?>