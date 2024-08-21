<?php
$a=10;
$b=20;
echo $a-$b;
echo "<br>";

echo $a+$b;
echo "<br>";

// die();  //method taken form the Perl Programming Language
// exit(); //method taken from the C Programming Language
echo dieTest();

echo $a*$b;
echo "<br>";

echo $a/$b;
echo "<br>";

echo test();



function test(){
  return 1000;
}

function dieTest(){
  echo "Die is called in function";
  die(); //or exit()
}