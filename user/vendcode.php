<?php

    session_start(); 
    //include('../config/bdcon.php');
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

    function redirect($url, $message)
    {
        $_SESSION['message'] = $message;
            header('Location: '.$url); 
                    
            exit();
    }



 if(isset($_POST['registerVendeur_btn']))
 {
     $name = mysqli_real_escape_string($con,$_POST['name']) ;
     $phone = mysqli_real_escape_string($con,$_POST['phone']) ;
     $email = mysqli_real_escape_string($con,$_POST['email']) ;
     $address = mysqli_real_escape_string($con,$_POST['address']) ;
     $password = mysqli_real_escape_string($con,$_POST['password']) ;
     $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']) ;
 
         //email non repeate
         $check_email_query ="SELECT * FROM vendeur WHERE email='$email'";
         $check_email_query_run = mysqli_query($con , $check_email_query);
 
         if(mysqli_num_rows($check_email_query_run) >0 )
         {
             /*$_SESSION['message'] ="Email already registered";
             header('location:../register.php');*/
         redirect("registervendeur.php" , "Email déjà enregistré");
         }
 
         else
         {
         
 
         if($password == $cpassword)
         {
             //insert data
             $insert_query = "insert into vendeur (name,email,phone,address,password) values ('$name','$email','$phone','$address','$password')";
             $insert_query_run = mysqli_query($con , $insert_query);
 
             if ($insert_query_run) 
             {
                /* $_SESSION['message'] ="register saccesfuly";
                 header('location:../login.php');*/
                 redirect("loginVendeur.php" , "Enregistrer saccesfuly");
             }
             else{
                     /*$_SESSION['message'] ="error 404  ";
                     header('location:../register.php');*/
                     redirect("registerVendeur.php" , "error 404 ");
             }
         }
         else{
                 /*$_SESSION['message'] ="password non identique";
                 header('location:../register.php');*/
                 //call function replay message
                 redirect("registerVendeur.php" , "mot de passe non identique");
         }
     }
 
 }
 
     else if(isset($_POST['loginVendeur_btn']))
     {
         $email = mysqli_real_escape_string($con , $_POST['email']);
         $password = mysqli_real_escape_string($con , $_POST['password']);
 
         $login_query = "SELECT * FROM vendeur WHERE email='$email' AND password ='$password'";
         $login_query_run = mysqli_query($con, $login_query);
 
         if(mysqli_num_rows($login_query_run)> 0)
         {
           
 
             
                  /* $_SESSION['message'] = "no account";
                 header('location:../login.php');*/
             redirect("../vendeur/index.php" , "Bienvenue chez Vendeur Dashbord");
        
         }
        
     }
  

?>