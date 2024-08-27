<?php
$host="localhost";
$user="root";
$password="";
$db="college";

$connection=new PDO("mysql:host=$host;dbname=$db",$user,$password);

$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

if($connection){
  echo "connection successful";
}
else{
  echo "connection failed";
}

?>