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
    $nb1= rand(1,5);
    $nb2= rand(5,10);
    echo '<h1>'."La valeur de A est ".$nb1.'</h1>';
    echo '<h1>'."La valeur de B est ".$nb2.'</h1>';
    $return= permutation($nb1,$nb2);
    ?>
</body>
</html>