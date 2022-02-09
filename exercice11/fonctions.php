<?php

//fonction
function moyenne(int $nbr):float
{
    return $moy= $nbr/2;
}
//fonction
function insertTab($nbre,array &$tab,&$tab1,&$tab2)
{
    $moy= moyenne($nbre);
    for ($i=1;$i<=$nbre;$i++)
        {
            if(estPremier($i))
            {
               $tab[]=$i;
            }
            if($i<=$moy)
            {
               $tab1[]=$i;
            }
            if($i>$moy)
            {
               $tab2[]=$i;
            }
        }
       
}
//affiche
function afficheTabSup($nbre,array $tab)
{
    $moy= moyenne($nbre);
    for ($i=1;$i<=$nbre;$i++)
        {
            if($tab[$i]>$moy)
            {
              echo '<em>'.$tab[$i].'</em>'." ";
            }
        }
}
//affiche
function afficheTabInf($nbre,array $tab)
{
    $moy= moyenne($nbre);
    for ($i=1;$i<=$nbre;$i++)
        {
            if($tab[$i]<$moy)
            {
                echo '<em>'.$tab[$i].'</em>'." ";
            }
        }
}
?>

