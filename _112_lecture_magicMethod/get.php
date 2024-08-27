<?php
class User{
  public $name="Prince";
  private $age=20;
  function __get($property){
    echo "$property property not found";
  }
}

$user=new User();
echo $user->nama;
echo "<br>";

echo $user->age;
echo "<br>";