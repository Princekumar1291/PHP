<?php

// final class Model{

// }
// class Car extends Model{

// }
// $car=new Car();



class Model{
  final function companyName(){
    echo "ABC";
  }
}

class Car extends Model{
  function companyName(){
    echo "XYZ";
  }
}

$car=new Car();
$car->companyName();


