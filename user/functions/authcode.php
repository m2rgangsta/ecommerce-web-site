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
    //include function for replay message
    include('myfunctions.php');

    if(isset($_POST['register_btn']))
{
    $name = mysqli_real_escape_string($con,$_POST['name']) ;
    $phone = mysqli_real_escape_string($con,$_POST['phone']) ;
    $email = mysqli_real_escape_string($con,$_POST['email']) ;
    $password = mysqli_real_escape_string($con,$_POST['password']) ;
    $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']) ;

        //email non repeate
        $check_email_query ="SELECT * FROM users WHERE email='$email'";
        $check_email_query_run = mysqli_query($con , $check_email_query);

        if(mysqli_num_rows($check_email_query_run) >0 )
        {
            /*$_SESSION['message'] ="Email already registered";
            header('location:../register.php');*/
        redirect("../register.php" , "Email already registered");
        }

        else
        {
        

        if($password == $cpassword)
        {
            //insert data
            $insert_query = "insert into users (name,email,phone,password) values ('$name','$email','$phone','$password')";
            $insert_query_run = mysqli_query($con , $insert_query);

            if ($insert_query_run) 
            {
               /* $_SESSION['message'] ="register saccesfuly";
                header('location:../login.php');*/
                redirect("../login.php" , "register saccesfuly");
            }
            else{
                    /*$_SESSION['message'] ="error 404  ";
                    header('location:../register.php');*/
                    redirect("../register.php" , "error 404 ");
            }
        }
        else{
                /*$_SESSION['message'] ="password non identique";
                header('location:../register.php');*/
                //call function replay message
                redirect("../register.php" , "password non identique");
        }
    }

}

    else if(isset($_POST['login_btn']))
    {
        $email = mysqli_real_escape_string($con , $_POST['email']);
        $password = mysqli_real_escape_string($con , $_POST['password']);

        $login_query = "SELECT * FROM users WHERE email='$email' AND password ='$password'";
        $login_query_run = mysqli_query($con, $login_query);

        if(mysqli_num_rows($login_query_run)> 0)
        {
            $_SESSION['auth'] = true;

            $userdata = mysqli_fetch_array($login_query_run);
            $userid = $userdata['id'];
            $username = $userdata['name'];
            $useremail = $userdata['email'];
            $role_as = $userdata['role_as'];
 
            $_SESSION['auth_user'] = [
                'user_id' => $userid,
                'name' => $username,
                'email' => $useremail
            ];

            $_SESSION['role_as'] = $role_as;

            if($role_as == 1)
            {
                /*$_SESSION['message'] = "welcome to Dashbord  ";
                header('Location:../../Admin/index.php');*/

                redirect("../../Admin/index.php" , "welcome to Dashbord");
            }
           

            else
            {
                redirect("../index.php" , "welcome to user panel");
            }
           
            

            
        }
        else{
                /* $_SESSION['message'] = "no account";
                header('location:../login.php');*/
            redirect("../login.php" , "no account! please try to create new account");
        }
    }

   
    

?>