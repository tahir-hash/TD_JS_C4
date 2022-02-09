<?php

//fonction
   function validNombre($nbre,string $key,array &$arrError ):void
   {
    //if(estVide($nbre)){
    //    $arrError[$key]="Veullez saisir une valeur";
    //}else{
        if(!estNombre($nbre)){
            $arrError[$key]="Veullez saisir un nombre";
        }
    }
  
   //fonction

   function estNombre($nbre):bool
   {
       return is_numeric($nbre); 
   }
   //fonction

  // function estVide($nbre):bool
  // {
  //  return empty($nbre); 
  // }
//fonction
function equationSecondDegre(int|float $a,int|float $b,int|float $c)
{
    if($a!=0)
    {
        $delta= pow($b,2) -(4*$a*$c);
        if($delta>0)
        {
            $x1= (-$b-sqrt($delta))/2*$a;
            $x2= (-$b+sqrt($delta))/2*$a;
            echo'<strong>'.'l\'equation admet deux solutions X1='.$x1 ."et X2=".$x2.'</strong> ';
        }
        else if($delta=0)
        {
            $x0= -$b/2*$a;
            echo '<strong>'.'l\'equation admet une solution double X0='.$x0.'</strong> ';
        }
        else
        echo '<strong>'.'l\'equation n\'admet pas de solutions.'.'</strong>';
    }
    else
    {
        echo'<strong>'.'l\'equation n\'admet pas de solutions.'.'</strong>';
    }
}