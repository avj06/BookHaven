<?php 
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "library management system";



    $con = mysqli_connect($host, $username,$password,$db_name);

    if(!$con){
        die("Connection Failed: ".mysqli_connect_error());
    }


?>