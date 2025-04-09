<?php

$height = readline();
$mass = readline();
$BMI = $mass / ($height ** 2);
$S_BMI = match ($BMI) {
    $BMI < 18.5 => "Underweight",
    ($BMI >= 18.5) && ($BMI < 25) => "Normal",
    ($BMI >= 25) && ($BMI < 30) => "Overweight",
    default => "Obese"
};
echo $S_BMI;