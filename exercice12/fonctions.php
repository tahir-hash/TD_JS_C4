<?php
function afficheMois(array $tab)
{
    echo '<table>';
    echo '<tr>';
        echo '<th>'.$tab[1].'</th>';
        echo '<th>'.$tab[4].'</th>';
        echo '<th>'.$tab[7].'</th>';
        echo '<th>'.$tab[10].'</th>';
    echo '</tr>';
    echo '<tr>';
        echo '<th>'.$tab[2].'</th>';
        echo '<th>'.$tab[5].'</th>';
        echo '<th>'.$tab[8].'</th>';
        echo '<th>'.$tab[11].'</th>';
    echo '</tr>'; 
    echo '<tr>';
        echo '<th>'.$tab[3].'</th>';
        echo '<th>'.$tab[6].'</th>';
        echo '<th>'.$tab[9].'</th>';
        echo '<th>'.$tab[12].'</th>';
    echo '</tr>';  
echo '</table>';
}








//echo '<td>';
//        afficheTabSup($a,$tab['premier']);
//        echo '</td>';
//        echo '<td>';
//        afficheTabInf($a,$tab['premier']);
//        echo '</td>';
//    echo '</tr>';
//
//
//
//
//
//insertTab($a,$tab['premier'],$tab['inferieur'],$tab['superieur']);

?>

