<?php

//example of access modifiers

class Person{
  //private property
  public $name="Prakhar";
  //public property
  private $age=20;
  //protected property
  protected $city="Noida";
}

class Employee extends Person{
  public function getDetails(){
    echo $this->name;
    echo "<br>";
    echo $this->city;
    echo "<br>";
  }
}
  

$obj=new Employee();
$obj->getDetails();

echo $obj->name;
echo "<br>";