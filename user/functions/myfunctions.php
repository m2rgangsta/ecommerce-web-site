<?php
session_start();

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



//include('../config/bdcon.php');

function getAll($table)
{               
        global $con;
        $query = "SELECT * From $table";
       return $query_run = mysqli_query($con,$query);
}


function getByID($table, $id)
{               
        global $con;
        $query = "SELECT * From $table WHERE id='$id'";
       return $query_run = mysqli_query($con,$query);
}

function getAllActive($table)
{               
        global $con;
        $query = "SELECT * From $table WHERE status='0' ";
       return $query_run = mysqli_query($con,$query);
}
function getAllOrders()
{       
        global $con;
        $query = "SELECT * From orders WHERE status='0' ";
       return $query_run = mysqli_query($con,$query);
}

function getAllMarques()
{       
        global $con;
        $query = "SELECT * From brands WHERE status='1' ";
       return $query_run = mysqli_query($con,$query);
}

function getAllusers()
{       
        global $con;
        $query = "SELECT * From users ";
       return $query_run = mysqli_query($con,$query);
}
function getAllvendeur()
{       
        global $con;
        $query = "SELECT * From vendeur ";
       return $query_run = mysqli_query($con,$query);
}

function checkTrackingNoValid($trackingNo)                      //chek the number of tracking number for buying product to vlidate commande and t3rf el blasa win wsol rl produit mt3k 
{
        global $con;       

        $query = "SELECT * FROM orders WHERE tracking_no='$trackingNo'  ";
        return mysqli_query($con,$query);
}

function getOrdersHistory()
{
        global $con;       

        $query = "SELECT * FROM orders WHERE  status !='0'  ";
        return mysqli_query($con,$query);
}


function redirect($url, $message)
{
    $_SESSION['message'] = $message;
         header('Location: '.$url); 
                
        exit();
}
       











?>