<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
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
    $_SESSION['post']=$_POST;
    $arrError=[];
    $tab=['premier'=>[],'inferieur'=>[],'superieur'=>[]];
    validNombreInf($a,"nbr",$arrError,10000);
    if(count($arrError)==0)
    {
       insertTab($a,$tab['premier'],$tab['inferieur'],$tab['superieur']);
        echo '<table>';
            echo '<tr>';
                echo '<th>'.'Premiers superieur a la moyenne'.'</th>';
                echo '<th>'.'Premiers inferieur a la moyenne'.'</th>';
            echo '<tr>';
                echo '<td>';
                afficheTabSup($a,$tab['premier']);
                echo '</td>';
                echo '<td>';
                afficheTabInf($a,$tab['premier']);
                echo '</td>';
            echo '</tr>';
        echo '</table>';
       
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
