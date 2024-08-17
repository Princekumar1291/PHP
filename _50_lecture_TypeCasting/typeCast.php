<?php
$a=5;
$a=(string)$a;

echo $a;
echo "<br>";

echo gettype($a);
echo "<br>";


$b="10";
$b=(int)$b;
echo $b." ".gettype($b);
echo "<br>";

$c="asdf";
$c=(bool)$c;
echo $c." ".gettype($c);
echo "<br>";

if($c){
  echo "true";
}


//convert into array typecasting
$d=10;
$d=(array)$d;
print_r($d);
echo "<br>";

//convert into object typecasting
$e=10;
$e=(object)$e;
print_r($e);
echo "<br>";