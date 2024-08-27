<?php
class User{
  private $name="Prince";
  function __set($name,$value){
    if(property_exists($this,$name)){
      $this->$name=$value;
    }
    echo "$name Property is not set with value $value as this property does not exit";
  }

  function getName(){
    echo $this->name;
  }
}

$user = new User();
// $user->name="Maurya Ji";
// echo "<br>";

$user->getName();
