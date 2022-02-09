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
    <link rel="stylesheet" href="../exercice13/css/style.css">
    <title>Document</title>
</head>

<body>
<?php 

include_once("fonctions.php");
if(isset($_POST['submit']))
{
    $a=$_POST['textarea'];
   
   echo' <div class="contain">';
       echo  '<form action="controller.php" method="POST">';
       echo '<div class="boite"> ' ;
            echo '<label for="">Les phrases corrigées</label>';
        echo'<div class="input">';
          echo  '<textarea name="textarea" id="" cols="30" rows="10" readonly>'.$a.'</textarea>';
       echo '</div>';
    echo '</div>';
   
   echo '</form>' ;
   echo '</div>';
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
