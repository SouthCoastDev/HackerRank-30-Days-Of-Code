<?php
<?php
    $handle = fopen ("php://stdin","r");
    fscanf($handle,"%d",$testNumber);

    if($testNumber%2==1){ //number odd
        echo"Weird";
    }else { // number even

        switch($testNumber){
           case ($testNumber > 21):
            echo "Not Weird";
            break;
           case ($testNumber >= 2 && $testNumber <=5):
            echo "Not Weird";
            break;
           case ($testNumber >= 6 && $testNumber <=20):
            echo "Weird";
            break;
        }
    }

?>
?>
