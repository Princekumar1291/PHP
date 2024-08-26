<?php
include("./connection.php");


class Student{
  public $DBconnection;
  function __construct($connection){
    $this->DBconnection=$connection;
  }
  function getData(){
    $sql="select * from students limit 10";
    $result=$this->DBconnection->prepare($sql);
    $result->execute();
    $students=$result->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($students);
    echo "</pre>";
  }
}

$student=new Student ($connection);
$student->getData();
