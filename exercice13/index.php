<?php
   session_start();
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
    <div class="contain">
         <form action="controller.php" method="POST">
        <div class="boite"> 
            <label for="">Saisir des Phrases</label>
        <div class="input">
            <textarea name="textarea" id="" cols="30" rows="10"></textarea>
        </div>
    
        <input type="submit" name="submit" value=Valider>

        </div>
   
    </form>
    </div>
    <br>

</body>
</html>