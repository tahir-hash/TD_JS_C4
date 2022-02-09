<?php
include('fonctions.php');
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
    <form action="" method="POST">
        Date<input type="date" name="date" required >
        <input type="submit" value=calculer>
    </form> <br>
    <?php
    $a=$_POST['date'];
    if(isset($a))
    {
        $return=next_precdate($a);
    }
    echo $return;
    ?>
</body>
</html>