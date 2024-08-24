<?php
  $serverName="localhost";
  $userName="root";
  $password="";
  $dbName="college";

  $connection=new PDO("mysql:host=$serverName;dbname=$dbName",$userName,$password);

  if($connection){
    echo "Connection sucessfull";
  }else{
    echo "Connection failed";
  }
?>

