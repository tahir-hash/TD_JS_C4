<?php
function sommeP (int $a,$b)
{
    $somme= $a+$b;
    $exp1= exp($a);
    $exp2= exp($b);
    $diff= $a-$b;
    $prod= $a*$b;
    $mod= $a%$b;
    $div= $a/$b;
    $carre1= pow($a,2);
    $carre2= pow($b,2);
    echo "Le premier nombre est: ".$a. '</br>';
    echo "Le  second nombre est: ".$b. '</br> </br>';
    echo "La somme est: ".$somme. '</br>'; 
    echo "L'exponentiel du premier nombre est: ".$exp1. '</br>';
    echo "L'exponentiel du second nombre est: ".$exp2. '</br>';
    echo "La difference est: ".$diff. '</br>';
    echo "Le produit est: ".$prod. '</br>'; 
    echo "Le modulo est: ".$mod. '</br>';
    echo "Le quotient est: ".$div. '</br>';
    echo "Le carre du premier nombre est: ".$carre1. '</br>'; 
    echo "Le carre du second nombre est: ".$carre2. '</br>'; 
}
?>