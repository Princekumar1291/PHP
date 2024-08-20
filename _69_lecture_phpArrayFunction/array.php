<?php
$user=["prince",20,"siwan","bihar",];

$address="village-siwan";

echo is_array($user);
echo "<br>";

echo is_array($address);
echo "<br>";

echo count($user);
echo "<br>";

echo sizeof($user);
echo "<br>";

unset($user[2]);
print_r($user);
echo "<br>";

array_push($user,"India");
print_r($user);
echo "<br>";

array_pop($user);
print_r($user);
echo "<br>";

//on object like array 
$user=[
  "name"=>"prince",
  "age"=>20,
  "city"=>"siwan",
  "state"=>"bihar",
  "country"=>"India",
];

$userKeys=array_keys($user);
print_r($userKeys);
echo "<br>";

$userValue=array_values($user);
print_r($userValue);
echo "<br>";

echo implode(" ",$userValue);
echo "<br>";

$str="Hello how are you Prince";
$newArr=explode(" ",$str);
print_r($newArr);
echo "<br>";

$arr1=[1,2,3,4,5];
$arr2=[5,6,7,8,9,10];
$arr3=array_merge($arr1,$arr2);
print_r($arr3);
echo "<br>";

$uniqueData=array_unique($arr3);
print_r($uniqueData);
echo "<br>";
