<?php

include('../user/functions/myfunctions.php');


if(isset($_SESSION['auth']))
{
    if ($_SESSION['role_as'] != 1  ) 
    {
        redirect("../user/index.php" , "You are not authorized to access this page");
        /* $_SESSION['message'] =  "You are not authorized to access this page";
              header('Location: ../user/index.php');*/ 
         
    }
}
else
{   
   /*$_SESSION['message'] =  "login to continue ";
     header('Location: ../../user/login.php');*/
   
   redirect("../user/loginvendeur.php " , "login to continue");
    
}


?>