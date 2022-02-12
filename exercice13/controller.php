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
       $a= $_POST['textarea'];
}
else
{
    //Redirection
    header('location:index.php');
    exit();
}
?>
<div class="contain">
         <form action="controller.php" method="POST">
        <div class="boite"> 
            <label for="">Phrases corigées</label>
        <div class="input">
            <textarea name="textarea" id="" cols="30" rows="10" readonly><?= decoupe($a) ?></textarea>
        </div>
        </div>
    </form>
    </div>
    <br> <br>
    <a href="index.php">RETOUR FORM</a>
</body>
</html>
