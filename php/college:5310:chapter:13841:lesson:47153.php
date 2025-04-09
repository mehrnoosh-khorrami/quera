<?php

$height = readline();
$mass = readline();
$BMI = $mass / ($height ** 2);
switch ($BMI) {
    case $BMI < 18.5:
        $S_BMI = "Underweight";
        break;
    case ($BMI >= 18.5) && ($BMI < 25):
        $S_BMI = "Normal";    
        break;
    case ($BMI >= 25) && ($BMI < 30):
        $S_BMI = "Overweight";
        break;
    case $BMI >= 30:
        $S_BMI = "Obese";
}
echo $S_BMI;