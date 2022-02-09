<?php
function psd (int $cote)//:void
{
    $perimetre= $cote *4;
    $surface= $cote * $cote;
    $diag= $cote * sqrt(2);
    echo "Le perimetre est: ".$perimetre. '</br>'; 
    echo "La surface est: ".$surface. '</br>';
    echo "La diagonale est: ".$diag. '</br>';
}
?>