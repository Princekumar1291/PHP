<?php
$str="hello world";
echo strlen($str);
echo "<br>";

echo is_string($str);
echo "<br>";

echo is_int($str);
echo "<br>";

echo strtoupper($str);
echo "<br>";

echo strtolower($str);
echo "<br>";

echo ucfirst($str);
echo "<br>";

var_dump($str);
echo "<br>";

//date 
echo date("d");
echo "<br>";

echo date("D");
echo "<br>";

echo date("l");
echo "<br>";

echo date("Y");
echo "<br>";

echo date("y");
echo "<br>";

echo date("m");
echo "<br>";

echo date("M");
echo "<br>";

$today = date("m.d.y"); 
echo $today;
echo "<br>";

$today = date("m-d-y"); 
echo $today;
echo "<br>";

// echo phpinfo();
// die();
// exit();


//random function
echo rand(100,200);
echo "<br>";

$str="This is demo string";
echo substr($str,5,8);
echo "<br>";