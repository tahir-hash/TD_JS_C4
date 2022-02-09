<?php
function multi ($a)
{

    for($i=1;$i<=10;$i++)
    {
        $multi= $a*$i;
        echo $a. "X". $i. "=".'<strong style="color:blue">'.$multi.'</strong>' . '</br>';
    }
}

?>