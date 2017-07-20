<?php
    $handle = fopen("php://stdin", "r");
    /* Enter your code here. Read input from STDIN. Print output to STDOUT */
    fscanf($handle,"%d",$count);
    $i = 0;

    while($i < $count){
        $odds = "";
        $evens ="";
        fscanf($handle,"%s",$word);
        $wordLength = strlen($word);

        for($j = 0; $j < $wordLength; $j++){
            if ($j % 2 == 0) { // even
                $evens .= $word[$j];
                } else { //odd
                    $odds .=$word[$j];
                }
        }

        $i++;
        echo $evens." ".$odds."\n";
    }

?>
