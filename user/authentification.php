<?php

if(!isset($_SESSION['auth']))
{
    //header('location: login.php');
    redirect("login.php",'Connectez-vous pour continuer');
}

?>