<?php

class User{
  // function getName(){
  //   echo "My name is prince";
  // }

  function __invoke(){
    echo "My name is prince";
  }

  function getVillage(){
    echo "Siwan";
  }
}


$user=new User();
$user();
echo "<br>";
$user->getVillage();

?>