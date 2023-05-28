<?php
session_start();
//include('../user/config/bdcon.php');

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
   

    if(isset($_SESSION['auth']))
    {
        if(isset($_POST['scope']))
        {

            $scope = $_POST['scope'];
            switch ($scope)
            {
                case "add" : 
                    $prod_id = $_POST['prod_id'];
                    $prod_qty = $_POST['prod_qty'];

                    $user_id = $_SESSION['auth_user']['user_id'];

                    $chk_existing_wishlist = "SELECT * FROM wishlists WHERE prod_id='$prod_id' AND user_id='$user_id' ";
                    $chk_existing_wishlist_run = mysqli_query($con ,$chk_existing_wishlist);

                    if(mysqli_num_rows($chk_existing_wishlist_run) > 0)
                    {
                            echo "existing";
                    }
                    else
                    {

                    

                        $insert_query ="INSERT INTO wishlists (user_id, prod_id, prod_qty) VALUES('$user_id', '$prod_id','$prod_qty' )";
                        $insert_query_run = mysqli_query($con ,$insert_query);

                            if($insert_query_run)             
                            {
                                echo 201;
                            }
                            else{
                                echo 500;
                            }
                    }
                break;

                case "update" : 
                    $prod_id = $_POST['prod_id'];
                    $prod_qty = $_POST['prod_qty'];

                    $user_id = $_SESSION['auth_user']['user_id'];

                    $chk_existing_wishlist = "SELECT * FROM wishlists WHERE prod_id='$prod_id' AND user_id='$user_id' ";
                    $chk_existing_wishlist_run = mysqli_query($con ,$chk_existing_wishlist);
                    
                    if(mysqli_num_rows($chk_existing_wishlist_run) > 0)
                    {
                            $update_query = "UPDATE wishlists SET prod_qty ='$prod_qty' WHERE prod_id = '$prod_id' AND user_id = '$user_id' ";
                            $update_query_run = mysqli_query($con, $update_query);
                            if ($update_query_run) 
                            {
                                echo 200;
                            }
                            else
                            {
                                echo 500;
                            }
                    }
                    else
                    {
                        echo "something wrong";
                    }

                break;

                case "delete":
                    $cart_id = $_POST['cart_id'];
                    $user_id = $_SESSION['auth_user']['user_id'];

                    $chk_existing_wishlist = "SELECT * FROM wishlists WHERE id='$cart_id' AND user_id='$user_id' ";
                    $chk_existing_wishlist_run = mysqli_query($con ,$chk_existing_wishlist);

                    if(mysqli_num_rows($chk_existing_wishlist_run) > 0)
                    {
                            $delete_query = "DELETE FROM wishlists WHERE id='$cart_id'   ";
                            $delete_query_run = mysqli_query($con, $delete_query);
                            if ($delete_query_run) 
                            {
                                echo 200;
                            }
                            else
                            {
                                echo "something wrong";
                            }
                    }
                    else
                    {
                        echo "something wrong";
                    }

                break;
            default :
            echo 500;
            }
    }
    }
else
{
    echo 401;
}

?>
