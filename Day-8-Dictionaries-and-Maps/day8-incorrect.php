<?php

//this version passes the shorter tests but times out on the longer ones. 

$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$number);
//echo $number;
$tempPhoneBook = array();
$phoneBook = array();
$queryList = array();

function array_push_assoc($array, $key, $value){
$array[$key] = $value;
return $array;
}

//create array from file data.
while( $fileContent = fgets($_fp)){
 array_push($tempPhoneBook, explode(" " , $fileContent));
}

$arrayCount = count($tempPhoneBook);
//print_r($tempPhoneBook);

for($i = 0 ; $i < $arrayCount ;$i++){
    if(isset($tempPhoneBook[$i][1])){
       $phoneBook= array_push_assoc($phoneBook, $tempPhoneBook[$i][0], $tempPhoneBook[$i][1]);
        //echo $tempPhoneBook[$i][0]."=".$tempPhoneBook[$i][1];
        //echo "array element set\n";
    } else {
        if(!in_array($tempPhoneBook[$i][0])){
       array_push($queryList, $tempPhoneBook[$i][0]);
        }
    }
}

$numberNamesToCheck = count($queryList);
for($i = 0 ; $i < $numberNamesToCheck ;$i++){
    $nameToCheck = trim($queryList[$i]);
    if(array_key_exists($nameToCheck,$phoneBook)){
        echo $nameToCheck."=".$phoneBook[$nameToCheck];
    } else {
        echo "Not found\n";
    }

}

?>
