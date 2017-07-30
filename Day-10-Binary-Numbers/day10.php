<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
//get binary value with decbin() the PHP function. Returns a string.
$binaryVal = decbin($n);
//convert binary string into an array.
$binArray = str_split($binaryVal);
//create vars used in algorithm
$n = $binArray;
$count = 0;
$i = 0;
$highCount = 0;

foreach($n as $value){
    //foreach loop to iterate over all elements in the array.
   if($n[$i] == 1){
    $count ++;
    $i++;
    } else {
       if($count > $highCount){
         $highCount = $count;
         }
        $i++;
        $count=0;
    }
    //final check to make sure only high count is recorded.
    if($count > $highCount){
       $highCount = $count;
         }
}

echo $highCount."\n";
?>
