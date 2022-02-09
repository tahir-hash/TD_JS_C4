<?php
include('fonctions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php
    $nb1 = [rand(1,5), rand(1,5)];
    $nb2 = [rand(1,5), rand(1,5)];
    echo"l'abscisse du point A est ".$nb1[0].'</br>';
    echo"l'ordonnée du point A est ".$nb1[1].'</br>';
    echo"l'abscisse du point B est ".$nb2[0].'</br>';
    echo"l'ordonnée du point B est ".$nb2[1].'</br>';
    $return= distance($nb1,$nb2);
    echo $return;
    ?>
</body>
</html>