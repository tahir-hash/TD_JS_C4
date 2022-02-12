<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once("fonctions.php");
include_once("../fonctionscom.php");
  session_start();
if(isset($_POST['btn_ok']))
{
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $_SESSION['post']=$_POST;
    $arrError=[];
    validNombre($a,"a",$arrError);
    validNombre($b,"b",$arrError);
    validNombre($c,"c",$arrError);
    if(count($arrError)==0){
        $date= "$a."-".$b."-".$c";
        echo $date;
        next_precdate($date); echo '</br></br>';
        var_dump($_SESSION);
        //unset($_SESSION['post']);
        //unset($_SESSION['error']);
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
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <a href="index.php">RETOUR FORM</a>
</body>
</html>
