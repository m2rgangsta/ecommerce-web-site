<?php
session_start();
//include('config/bdcon.php');

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
   

function getAllActive($table)                                                     // fucntion get status activve
{               
        global $con;                                                              //base connection
        $query = "SELECT * From $table WHERE status = '0' ";
       return $query_run = mysqli_query($con,$query);                             // retrun function
}
function getAllProd()
{
        global $con;                                                              //base connection
        $query = "SELECT * From products  WHERE status = '0' ";
       return $query_run = mysqli_query($con,$query);   
}
function getAlltrending()                                                     // fucntion get status activve
{               
        global $con;                                                              //base connection
        $query = "SELECT * From products WHERE trending = '1' ";
       return $query_run = mysqli_query($con,$query);                             // retrun function
}

function getIDActive($table, $id)                                                       //function to get id stauts active
{               
        global $con;
        $query = "SELECT * From $table WHERE id='$id' AND status = '0' LIMIT 1";
       return $query_run = mysqli_query($con,$query);
}

function getSlugActive($table, $slug)                                           //function to get slug
{               
        global $con;                                                            //base connection replay
        $query = "SELECT * From $table WHERE slug='$slug' AND status = '0'";
       return $query_run = mysqli_query($con,$query);
}

function getProdByCategory($category_id)   //function to get products
{
        global $con;                    
        $query = "SELECT * From products WHERE category_id='$category_id' AND status = '0' ";
       return $query_run = mysqli_query($con,$query);
}



function getartItems()   //function to get Itedm with joiture from table products AND carts 
{
        global $con;
        $userId = $_SESSION['auth_user']['user_id'];                                                                    //jointure
        $query = "SELECT c.id as cid, c.prod_id, c.prod_qty, p.id as pid, p.name, p.image, p.selling_price 
        FROM carts c, products p WHERE c.prod_id = p.id AND c.user_id ='$userId' ORDER BY c.id DESC ";
        return $query_run = mysqli_query($con, $query);
}
function getwishlistItems()   //function to get Itedm with joiture from table products AND carts 
{
        global $con;
        $userId = $_SESSION['auth_user']['user_id'];                                                                    //jointure
        $query = "SELECT c.id as cid, c.prod_id, c.prod_qty, p.id as pid, p.name, p.image, p.selling_price 
        FROM wishlists c, products p WHERE c.prod_id = p.id AND c.user_id ='$userId' ORDER BY c.id DESC ";
        return $query_run = mysqli_query($con, $query);
}

function getOrders()   //function to show order
{
        global $con;
        $userId = $_SESSION['auth_user']['user_id'];
        $query = "SELECT * From orders WHERE user_id='$userId' ORDER BY id DESC ";
        return $query_run =mysqli_query($con,$query);
}

function checkTrackingNoValid($trackingNo)                      //chek the number of tracking number for buying product to vlidate commande and t3rf el blasa win wsol rl produit mt3k 
{
        global $con;
        $userId = $_SESSION['auth_user']['user_id'];

        $query = "SELECT * FROM orders WHERE tracking_no='$trackingNo' AND user_id='$userId' ";
        return mysqli_query($con,$query);
}

function redirect($url, $message)  // message function  
{
    $_SESSION['message'] = $message;
         header('Location: '.$url); 
                
        exit();
}







?>