<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$arrayLength);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp); // converts string into array. (seperator,string,limit)
array_walk($arr,'intval');

$i=0;
$counter = $arrayLength;
$output = "";

while($i <= $counter){
    $output .= $arr[$counter]." ";
    $counter -- ;
}

echo trim($output);


?>
