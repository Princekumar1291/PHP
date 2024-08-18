<?php
$a=10;
$b=20;
const data=20;  //not show const variable

echo "<pre>";
// print_r($GLOBALS);  //global variable
echo "</pre>";
echo "<br>";

// print_r($_SERVER); //server variable
echo "<br>";

print_r($_REQUEST); //request variable
echo "<br>";

print_r($_GET); //post variable
echo "<br>";

print_r($_POST); //post variable 
echo "<br>";