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
    <link rel="stylesheet" href="../exercice12/css/style.css">
    <title>Document</title>
</head>

<body>
<?php 

include_once("fonctions.php");
if(isset($_POST['submit']))
{
    $a=$_POST['nbr'];
    $month = array( 
    1 => 'Janvier',
    2 => 'Février',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Août',
    9=> 'Septembre',
   10=> 'Octobre',
   11 => 'Novembre',
   12 => 'Décembre');
   $month_eng = array( 
    1 => 'January',
    2 => 'February',
    3 => 'March',
    4 => 'April',
    5 => 'May',
    6 => 'June',
    7 => 'July',
    8 => 'August',
    9=> 'September',
   10=> 'October',
   11 => 'November',
   12 => 'Décember');
   
            afficheMois($month);
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
