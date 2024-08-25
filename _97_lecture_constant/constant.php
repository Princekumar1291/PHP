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

//:: (Scope Resolution Operator):

// The scope resolution operator :: is used to access class members (like constants, methods, or static properties) directly from the class name rather than from an instance of the class.
// It's often referred to as the "double colon" or "Paamayim Nekudotayim" in PHP.