<?php
print_r($_GET);
echo "<br>";
print_r($_GET['user_name']);
echo "<br>";

print_r($_REQUEST);
echo "<br>";
print_r($_REQUEST['user_name']);
echo "<br>";

$_REQUEST['dumy']="test";
foreach($_REQUEST as $key=>$value){
  echo $key . " " . $value . "<br>";
}