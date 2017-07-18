

<?php
//From HackerRank
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";
//

// Declare second integer, double, and String variables.
$secondInt = 1;
$secondDouble = 1.0;
$newString = " string ";
// Read and save an integer, double, and String to your variables.
fscanf($handle,'%i', $secondInt);
fscanf($handle,'%f', $secondDouble);
$newString = fgets($handle);
// Print the sum of both integer variables on a new line.
echo $result = ($secondInt + $i);
echo "\n";
// Print the sum of the double variables on a new line.
printf("%.1f", $d + $secondDouble);
echo "\n";
// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.
echo $s.$newString;

//From HackerRank
fclose($handle);
?>
