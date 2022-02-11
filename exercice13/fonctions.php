<?php
function speciaux($a)
{
    $chaine = str_replace(array("#", "@", "$"), '', $a);
    return $chaine;
}
function phrase ($chaine)
{
    $point='.'; 
    if(strlen($chaine)>10)
    {
        if(ctype_upper($chaine[0]) && substr($chaine,-1)==$point)
        {
                $chaine=speciaux($chaine);
                echo $chaine;
        }
        else if(!ctype_upper($chaine[0]) && substr($chaine,-1)!=$point)
        {
                //$chaine=speciaux($chaine);
                //echo ucfirst($chaine).".";
                echo "";
        }
        else if(ctype_upper($chaine[0]) && substr($chaine,-1)!=$point)
        {
                $chaine=speciaux($chaine);
                echo ($chaine).".";
        }
        else if(!ctype_upper($chaine[0]) && substr($chaine,-1)==$point)
        {
                $chaine=speciaux($chaine);
                echo ucfirst($chaine);
        }
    }
    else
    {
            echo "";
    }
    
}
function searchPoint($a)
{
        
        if(strpbrk($a,'.'))
        {
                $test=phrase($a);
                echo $test;
        }
        else
        {
                echo "";
        }
}
?>

