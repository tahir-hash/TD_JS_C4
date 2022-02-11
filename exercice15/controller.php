<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../exercice11/css/style.css">
    <title>Document</title>
</head>

<body>
<?php 
include_once("fonctions.php");
include_once("../fonctionscom.php");
  session_start();
if(isset($_POST['submit']))
{
    $a=$_POST['nbr'];
    $b=$_POST['color'];
    $c=$_POST['radio'];
    $_SESSION['post']=$_POST;
    $arrError=[];
    $matrice=[][];
    validNombreInf($a,"nbr",$arrError,2);
    if(count($arrError)==0)
    {
        session_unset();
    }else{
        $_SESSION['error']=$arrError;
        //var_dump( $_SESSION);
        header('location:index.php'); 
        exit();
    }
}
else
{
    //Redirection
    header('location:index.php');
    exit();
}
?>
    <br> <br>
    <a href="index.php">RETOUR FORM</a>
</body>
</html>
