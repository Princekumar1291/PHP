<!-- in class variable called property and function called method -->

<?php
class MathOperation{
  function sum($num1,$num2){
    return $num1+$num2;
  }
  function diff($num1,$num2){
    return $num1=$num2;
  }
  function mul($num1,$num2){
    return $num1*$num2;
  }
  function div($num1,$num2){
    return $num1/$num2;
  }
}

$obj1=new MathOperation();
echo $obj1->sum(10,20);
echo "<br>";
echo $obj1->diff(10,20);
echo "<br>";
echo $obj1->mul(10,20);
echo "<br>";
echo $obj1->div(10,20);
echo "<br>";



class Property{
  //public private protected
  public $name="Prince";
  function getName(){
    return $this->name;
  }
  function setName($name){
    $this->name=$name;
  }
}

$obj=new Property();
echo $obj->getName();
echo "<br>";

echo $obj->name;
echo "<br>";

$obj->setName("Prakhar");

echo $obj->name;
echo "<br>";


class ConstructorDemo{
  public $name;
  function __construct($name="User"){
    echo "This is constructor";
    echo "<br>";
    $this->name=$name;
  }
  function getName(){
    return $this->name;
  }
}

$obj=new ConstructorDemo("Maurya Ji");
echo $obj->getName();