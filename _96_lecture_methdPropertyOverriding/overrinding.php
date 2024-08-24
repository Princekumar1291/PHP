<?php
class Teacher{
  public $city="noida";
  function nextExam(){
    echo "next exam is maths";
  }
  function age(){
    echo "my age is 40";
  }
}

class Student extends Teacher{
  public $city="delhi"; //property overriding
  function age(){   //mehod overriding
    echo "my age is 20";
  }
}

$s1=new Student();
$s1->nextExam();
echo "</br>";
$s1->age();
echo "</br>";
echo $s1->city;

echo "</br>";
echo "</br>";

$t1=new Teacher();
$t1->nextExam();
echo "</br>";
$t1->age();
echo "</br>";
echo $t1->city;
