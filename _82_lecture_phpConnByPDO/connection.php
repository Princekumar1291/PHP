<?php
$host="localhost";
$user="root";
$password="";
$db="college";

try {
  $connection = new PDO("mysql:host=$host;dbname=$db",$user,$password);  //php data object
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "connection Sucessfull";

} catch (PDOException $err) {
   echo "Connection failed $err->getMessage()";
}
echo "<br>";

$result=$connection->query("show tables")->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($result);
echo "</pre>";
?>