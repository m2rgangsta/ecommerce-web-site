<?php 
    $host ="localhost";
    $username = "root";
    $password = "";
    $database = "forsashop";
    //connection 
    $con =mysqli_connect($host, $username, $password, $database);
    //test connection
    if(!$con)
    {
        die("connection failed : ".mysqli_connect_error());
    }
   

?>