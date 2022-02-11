<?php

//fonction
   function validNombre($nbre,string $key,array &$arrError ):void
   {
    if(estVide($nbre))
    {
        $arrError[$key]="Veullez saisir une valeur";
    }
    else
    {
        if(!estNombre($nbre))
        {
            $arrError[$key]="Veullez saisir un nombre";
        }
    }
   }
   //fonction
function validNombrePositif($nbre,string $key,array &$arrError ):void
{
 if(estVide($nbre))
 {
     $arrError[$key]="Veullez saisir une valeur";
 }
 else if(!estNombre($nbre))
 {
    $arrError[$key]="Veullez saisir un nombre";
 }
 else
 {
     if($nbre<0)
     {
        $arrError[$key]="Veullez saisir un nombre positif";
     }
 }
}
//fonction
function validNombreInf($nbre,string $key,array &$arrError, int $i ):void
{
 if(estVide($nbre))
 {
     $arrError[$key]="Veullez saisir une valeur";
 }
 else if(!estNombre($nbre))
 {
    $arrError[$key]="Veullez saisir un nombre";
 }
 else
 {
     if($nbre<= $i-1)
     {
        $arrError[$key]="Veullez saisir un nombre superieur ou egal à $i";
     }
 }
}
   //fonction

   function estNombre($nbre):bool
   {
       return is_numeric($nbre); 
   }
   function estEntier($nbre):bool
   {
       return is_int($nbre); 
   }
   //fonction

   function estVide($nbre):bool
   {
    return empty($nbre); 
   }
   //fonction
   function estPremier($a):bool
   {
    //if ($a == 1)
    //return 0;
    for ($i = 2; $i <= $a/2; $i++)
    {
        if ($a % $i == 0)
            return 0;
    }
    return 1;
   }
   