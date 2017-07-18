<?php
$handle = fopen('php://stdin', 'r');
$mealCost = (float) fgets($handle);
$tipPercent = (float) fgets($handle);
$taxPercent = (float) fgets($handle);

//tests
//printf("%.2f \n", $mealCost);
//printf("%.2f \n", $tipPercent);
//printf("%.2f \n", $taxPercent);

$tipAmount = ($tipPercent / 100) * $mealCost;
$taxAmount = ($taxPercent / 100) * $mealCost;

//tests
//printf("%.2f \n", $tipAmount);
//printf("%.2f \n", $taxAmount);

$totalCost = $mealCost + $tipAmount + $taxAmount;
printf("The total meal cost is %.0f dollars.\n", round($totalCost));
?>
