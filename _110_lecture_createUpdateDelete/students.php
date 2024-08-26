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
  function insertData(){
    $sql="insert into students(name,course,batch,city,year) values ('Abhimanu','MCA','morning','Siwan','5nd')";
    $result=$this->DBconnection->prepare($sql);
    $result->execute();
    if($result){
      echo "Data Inserted";
    }else{
      echo "Data Not Inserted";
    }
  }

  function updateData(){
    $sql="update students set name='Shivam' where id=70";
    $result=$this->DBconnection->prepare($sql);
    $result->execute();
    if($result){
      echo "Data Updated";
    }else{
      echo "Data Not Updated";
    }
  }
  function deleteData(){
    $sql="delete from students where id=70";
    $result=$this->DBconnection->prepare($sql);
    $result->execute();
    if($result){
      echo "Data Deleted";
    }else{
      echo "Data Not Deleted";
    }
  }
}

$student=new Student ($connection);
// $student->getData();

// $student->insertData();

// $student->updateData();

$student->deleteData();