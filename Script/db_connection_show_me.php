<?php



$user ='root';
$password='';
$database ='show_me';
$server ='localhost';


$con = mysqli_connect($server,$user, $password, $database );



if(mysqli_connect_errno() > 0 ){


    echo ' Neuspjesno spajanje na bazu';
    mysqli_connect_errno();
    exit;



}

else {


   
    
}



mysqli_query($con, "SET NAMES UTF-8");




















?>