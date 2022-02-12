<?php
/*
$color="#410EEA";
if(isset($_POST['submit']))
{
    if(empty($_POST['textarea']))
    {
     $color="#FF0000";
     header('location:index.php');
 exit();
    }
}
*/
function speciaux($a)
{
    $chaine = str_replace(array("#", "@", "$"), '', $a);// voir une autre methode
    return $chaine;
}
function espace($a)
{
    $chaine = preg_replace('/\s\s+/', ' ', $a);
    return $chaine;
}
function phrase ($chaine)
{
    if(strlen($chaine)>5)
    {
        if(ctype_upper($chaine[0]))
        {
                $chaine=speciaux($chaine);
                echo espace($chaine).".";
        }
        else if(!ctype_upper($chaine[0]))
        {
                $chaine=speciaux($chaine);
                echo espace(ucfirst($chaine)).".";
        }
    }  
    else
    echo ""; 
}
function decimal($a)
{   
    $taille=strlen($a);
    for($i=0;$i<$taille; $i++)
    {
       // if($a[$i]='.' && $a[$i+1]=is_int)
    }

}
function decoupe($a)
{
       $explode= explode(".",$a);
       $count=count($explode);

      for($i=0;$i<$count; $i++)
      { 
              if($i==0)
              {
                $test=phrase($explode[$i]);
              }
              else
              {
                      if($explode[0]!=" ")
                      {
                          if($explode[$i-1]="")
                          {
                            echo " ";
                              $test=phrase($explode[$i]);
                          }
                          else
                          {
                            //echo " ";
                              $test=phrase($explode[$i]);
                          }
                      }
              }
      }
 //var_dump($explode);
}
?>

