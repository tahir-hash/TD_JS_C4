<?php
    function colorHaut($a, &array $tab,$col)
    {
            for ($i=0; $i<$a;$i++)
            {
                    for ($j=0; $j<$a;$j++)
                    {
                            if($i<$j)
                            {
                                echo $col;
                            }
                    }
            }
    }
?>

