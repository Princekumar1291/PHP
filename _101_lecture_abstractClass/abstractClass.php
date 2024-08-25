<?php

abstract class Car{
  abstract public function companyName();
  abstract public function modelName();
  abstract public function modelYear();
  public function demo(){
    echo "Car Demo";
  }
}

class BMW extends Car{
  public function companyName(){
    echo "ABC";
  }
  public function modelName(){
    echo "X5";
  }
  public function modelYear(){
    echo "2016";
  }
  public function getDetails(){
    $this->companyName();
    echo "<br>";
    $this->modelName();
    echo "<br>";
    $this->modelYear();
    echo "<br>";
    $this->demo();
  }
}

$obj=new BMW();
$obj->companyName();
echo "<br>";
$obj->modelName();
echo "<br>";
$obj->modelYear();
echo "<br>";
$obj->getDetails();
echo "<br>";
echo "<br>";

$obj->getDetails();