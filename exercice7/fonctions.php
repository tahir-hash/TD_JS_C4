<?php
function next_precdate ($a)
{  
    $nextday= date_add($a, date_interval_create_from_date_string("1 day"));
 //$nextday = date("d-m-Y", strtotime("$a +1 day"));
 //$precday = date("d-m-Y", strtotime("$a -1 day"));
 echo "La date suivante est: ".date_format($nextday,"d-m-Y").'</br>';
 //echo "La date precedante est: ".$precday;

}
?>