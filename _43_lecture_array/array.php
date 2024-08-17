<?php
$user=["Prince Kumar",20];
// echo $user[0];
// echo "<br>";
// echo $user[1];
// echo "<br>";

$arr=["Ram","Shayam","Abhishek","Prakhar","Anil"];
array_push($arr,"Mohit");
array_push($arr,"Mohit","Anil","Prakhar");
array_pop($arr);
array_splice($arr,-2);

for($i=0;$i<sizeof($arr);$i++){
  echo $arr[$i];
  echo "<br>";
}
