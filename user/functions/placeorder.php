<?php




session_start();
include('../config/bdcon.php');


if(isset($_SESSION['auth']))
{


    if(isset($_POST['placeorderBtn']))
    {
        
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $pincode = mysqli_real_escape_string($con, $_POST['pincode']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $payement_mode = mysqli_real_escape_string($con, $_POST['payement_mode']);
        $payement_id = mysqli_real_escape_string($con, $_POST['payement_id']);
        if($name ==""|| $email == "" || $phone == "" || $pincode == "" || $address == "" )
        {
            $_SESSION['message'] = "Tous les champs sont obligatoires";
                header('Location: ../checkout.php '); 
                exit(0);
        }
                $userId = $_SESSION['auth_user']['user_id'];
                $query = "SELECT c.id as cid, c.prod_id, c.prod_qty, p.id as pid, p.name, p.image, p.selling_price 
                FROM carts c, products p WHERE c.prod_id = p.id AND c.user_id ='$userId' ORDER BY c.id DESC ";      
                
                $query_run = mysqli_query($con, $query);

                $total_price = 0;
                    foreach($query_run as $citem)
                        {
                            $total_price += $citem['selling_price'] * $citem['prod_qty'];
                        }      
                            
                         
                $tracking_no ="M2rgangsta".rand(1111,9999).substr($phone,2);                       // phone numbre declartion php
                

            $insert_query = "INSERT INTO orders (tracking_no, user_id, name, email, phone, address, pincode, total_price,
             payement_mode, payement_id) VALUES ('$tracking_no','$userId','$name','$email','$phone','$address',
             '$pincode','$total_price','$payement_mode','$payement_id') ";
             $insert_query_run = mysqli_query($con, $insert_query);                                //inserting info to order table

             if($insert_query_run)
             {
                $order_id = mysqli_insert_id($con);
                foreach($query_run as $citem)
                {
                    $prod_id = $citem['prod_id'];                                                        //declaration variable produit de puis table product
                    $prod_qty = $citem['prod_qty'];                                                     //declaration variable quantite
                    $price = $citem['selling_price'];                                                  //declaration variable prix
                    $insert_Items_query ="INSERT INTO order_items (order_id, prod_id, qty, price) VALUES 
                    ('$order_id', '$prod_id', '$prod_qty', '$price')";                                 //inserting info to order table
                    $insert_query_run = mysqli_query($con, $insert_Items_query);                                                    
                    
                    $product_query = "SELECT * FROM products WHERE id='$prod_id' LIMIT 1 " ;                      //select all products when id
                    $product_query_run = mysqli_query($con, $product_query);

                        $productData = mysqli_fetch_array($product_query_run);                             //using fatchaa to fetch data from products
                        $old_qty = $productData['qty'];

                        $new_qty = $old_qty - $prod_qty;                                                    //deminue de stock de base

                     $updateQty_query ="UPDATE products SET qty='$new_qty' WHERE id='$prod_id' ";
                     $updateQty_query_run =mysqli_query($con, $updateQty_query);

                }
                    $deleteCartQuery ="DELETE FROM carts WHERE user_id='$userId' ";                  //drop product from table
                    $deleteCartQuery_run = mysqli_query($con, $deleteCartQuery);

                    if($payement_mode = "COD")
                    {
                        $_SESSION['message'] ="order placed successfuly";
                        header('location: ../my-orders.php');
                        die();
                    }else{
                        echo 201;
                    }
                

             }
        }
       
        
}

else
{
    header('location: ../index.php');
}
?>
