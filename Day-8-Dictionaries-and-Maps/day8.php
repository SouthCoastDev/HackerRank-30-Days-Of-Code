<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$number);
$tempPhoneBook = array();
$phoneBook = array();
$queryList = array();

//create two arrays from file data. One for the phonebook and one for the list of names to check.
while( $fileContent = fgets($_fp)){
   if(strpos($fileContent," ")){
      $tempPhoneBook = explode(" " , $fileContent);
      $phoneBook[$tempPhoneBook[0]] = $tempPhoneBook[1];
   } else {
       array_push($queryList,$fileContent);
   }
}

//count the users in the users array that are used to query the phonebook array.
$count = count($queryList);
//check for users in phonebook array.
for($i = 0 ; $i < $count ;$i++){
    $nameToCheck = trim($queryList[$i]);
    if(array_key_exists($nameToCheck,$phoneBook)){
        echo $nameToCheck."=".$phoneBook[$nameToCheck];
    } else {
        echo "Not found\n";
    }
}

?>
