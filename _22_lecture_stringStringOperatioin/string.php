<?php
$name="Prince Maurya";
$age="20";
$ageName="My name is $name and my age is $age";
echo $ageName;
echo "<br>";

$ageName="My name is ".$name. " and my age is ".$age;
echo $ageName;
echo "<br>";


$ageName='My name is '.$name. ' and my age is '.$age;
echo $ageName;
echo "<br>";


$ageName='My name is $name. and my age is .$age'; //wrong
echo $ageName;
echo "<br>";


$str2="Hello how are you";
$str3=" My name is Prince";
echo $str2.$str3;
echo "<br>";



$str2="Hello how are you";
$str3=" My name is Prince";
$str2.=$str3;  //concatenation operator 
echo $str2;
echo "<br>";


// dot operator(concatenation operator) is used to add two string or string and variable