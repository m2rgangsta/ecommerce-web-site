<?php
        session_start();
        include('functions/myfunctions.php');
    if(isset($_SESSION['auth']))
    {
        unset($_SESSION['auth']);
        unset($_SESSION['auth_user']);
        //$_SESSION['message']= "logout saccesfuly";
        redirect("index.php" , "déconnexion saccesfuly");
    }


    //header('Location:index.php');




?>