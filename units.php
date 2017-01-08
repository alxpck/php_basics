<?php

// number in pounds that we want to convert to kg
$pounds = 140;
// floating point value for the pound to kg conversion
$lb_to_kg = 0.453592;
// use the variables above to calculate pounds multiplied by kg conversion number
$kilograms = $pounds * $lb_to_kg;
// display the pounds in kg
echo 'Weight:';
echo $pounds;
echo ' lbs = ';
echo $kilograms;
echo ' kg';
echo "\n";

//number in miles we want to convert to km
$miles = 2.5;
// floating point balue for the mi to km conversion
$mi_to_km = 1.60934;
// use the variables above to calculate mi multiplied by km conversion number
$kilometers = $miles * $mi_to_km;
// display the miles in km
echo "Distance: ";
echo $miles;
echo ' miles = ';
echo $kilometers;
echo ' km';

?>