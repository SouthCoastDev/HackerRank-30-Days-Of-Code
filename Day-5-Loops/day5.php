<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$number);

for($i=1;$i<11;$i++){

    $sum = $number * $i;
    echo $number." x ".$i." = ". $sum . "\n";

}

?>
