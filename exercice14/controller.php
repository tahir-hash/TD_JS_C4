<?php
include_once("fonctions.php");
include_once("../fonctionscom.php");
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    extract($_POST);
    $_SESSION['dis']="";
    s
    if(isset($submit))
    {
        $_SESSION['dis']="disabled";
        header('location:index.php');
        exit();
        
    }
?>
<?php 


?>

