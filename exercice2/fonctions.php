<?php
function psd (int $long,$larg)
{
    if($long>$larg)
    {
    $perimetre= ($long +$larg)*2;
    $surface= $long * $larg;
    $diag= sqrt (pow($long,2)+pow($larg,2));
    echo "Le perimetre est: ".$perimetre. '</br>'; 
    echo "La surface est: ".$surface. '</br>';
    echo "La diagonale est: ".$diag. '</br>';
    }
   else
   echo "La longueur ne peut pas être inferieur à la largeur";
}
?>