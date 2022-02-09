<?php
function next_precdate ($a)
{   
 $nextday = date("d-m-Y", strtotime("$a +1 day"));
 $precday = date("d-m-Y", strtotime("$a -1 day"));
 echo "La date suivante est: ".$nextday.'</br>';
 echo "La date precedante est: ".$precday;

}
?>