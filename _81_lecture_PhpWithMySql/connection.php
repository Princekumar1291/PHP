<?php
$host="localhost";
$user="root";
$password=null;
$database="college";

$connection = new mysqli($host,$user,$password,$database);

if($connection->connect_error){
  die("connection failed".$connection->connect_error);
}

echo "connected successfully";
echo "</br>";

echo "<pre>";
print_r($connection);
echo "</pre>";

$result=$connection->query("show tables")->fetch_all(MYSQLI_ASSOC);
echo "<pre>";
print_r($result);
echo "</pre>";
?>