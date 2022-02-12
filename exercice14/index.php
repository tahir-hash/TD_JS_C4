<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../exercice14/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="contain">
         <form action="controller.php" method="POST">
            <div class="boite"> 
                <label for="">Indiquer le nombre de numéro que vous voulez saisir.</label>
            <div class="input">
                <input type="text" <?=$_SESSION['dis'] ?> name="nombreNumber">
            </div>
            </div>
            <input type="submit" name="submit" <?=$_SESSION['dis'] ?> value=Confirmer>
            </div>
            <br>     <label for="">Saisir le numéro</label>
            <div class="input">
                <input type="text" <?=$_SESSION['di'] ?> name="numberPhone">
            </div>
            <input type="submit" name="telephone" <?=$_SESSION['di'] ?> value=<?=$_SESSION['print'] ?> >
            </div>
        </form>
    </div>
    <br>

</body>
</html>