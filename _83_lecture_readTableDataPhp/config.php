<?php
$host="localhost";
$user="root";
$password=null;
$db="college";


try{
  $connection=new PDO("mysql:host=$host;dbname=$db",$user,$password);
  $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  echo "Connection sucessfull";
}catch(PDOException $err){
  die("Connection not happen");
}
echo "<br/>";