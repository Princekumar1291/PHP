<?php
class Person{
  public $name;
  public $age;
  public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
  }
  public function sayHello(){
    echo "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
    echo "<br>";
    return $this;
  }
  public function sayBye(){
    echo "Bye, my name is " . $this->name . " and I am " . $this->age . " years old.";
    echo "<br>";
    return $this;
  }
  public function sayWait(){
    echo "Wait, my name is " . $this->name . " and I am " . $this->age . " years old.";
    echo "<br>";
  }
}

$person = new Person("John", 30);
$person->sayHello()->sayBye()->sayWait();
