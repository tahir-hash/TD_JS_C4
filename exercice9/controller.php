

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../exercice6/css/style.css">
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
    $_SESSION['post']=$_POST;
    $arrError=[];
    validNombrePositif($a,"nbr",$arrError);
    if(count($arrError)==0)
    {
        $return= multi($a);
        echo $return;
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
