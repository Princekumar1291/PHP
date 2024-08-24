<?php
class constantDemo{
  const colledgeName="LPU";
  function getColledgeName(){
    echo constantDemo::colledgeName;
    echo "<br>";  //or
    echo self::colledgeName;
  }
}

echo constantDemo::colledgeName;
echo "<br>";

$c1=new constantDemo();
$c1->getColledgeName();
