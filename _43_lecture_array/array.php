<?php
$user=["Prince Kumar",20];
echo $user[0];
echo "<br>";
echo $user[1];
echo "<br>";

$arr=["Ram","Shayam","Abhishek","Prakhar","Anil"];
array_push($arr,"Mohit");

for($i=0;$i<sizeof($arr);$i++){
  echo $arr[$i];
  echo "<br>";
}
