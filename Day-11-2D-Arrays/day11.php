<?php
$handle = fopen ("php://stdin","r");
$arr = array();
for($arr_i = 0; $arr_i < 6; $arr_i++) {
   $arr_temp = fgets($handle);
   $arr[] = explode(" ",$arr_temp);
  array_walk($arr[$arr_i],'intval');
}

$tempArray = array();
$total;

//outer loop runs 4 times. Inner loop runs four times per outer loop.
for($i = 0 ; $i < 4; $i++){
 for($j = 0 ; $j < 4; $j++){
     $tempArray = array($arr[$i][$j],$arr[$i][$j+1],$arr[$i][$j+2],$arr[$i+1][$j+1],$arr[$i+2][$j],$arr[$i+2][$j+1],$arr[$i+2][$j+2]);
     $tempTotal = array_sum($tempArray);

     if($tempTotal > $total){
         $total = $tempTotal;
     }
 } //end inner for loop.
} // end outter for loop.

//out put highest total.
echo $total;
?>
