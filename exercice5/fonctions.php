<?php


function distance (array $point,$point1)
{
    $distance= sqrt(pow($point1[0]-$point[0],2)+pow($point1[1]-$point[1],2));
    echo "la distance est: ".$distance;
}
?>