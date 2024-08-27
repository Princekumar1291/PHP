<?php
include("./connection.php");

// print_r($_POST);

class operation{
  public $DBconnection;
  function __construct($connection){
    $this->DBconnection=$connection;
  }
  function indertData($name,$course,$batch,$city,$year){
    $sql="insert into students (name,course,batch,city,year) values (:name,:course,:batch,:city,:year)";
    $result=$this->DBconnection->prepare($sql);
    $result->bindparam(':name',$name);
    $result->bindparam(':course',$course);
    $result->bindparam(':batch',$batch);
    $result->bindparam(':city',$city);
    $result->bindparam(':year',$year);
    $result->execute();
    if($result){
      echo "Data Inserted";
    }else{
      echo "Data Not Inserted";
    }
  }
}

$obj=new operation($connection);
if(isset($_POST['name']) && isset($_POST['course']) && isset($_POST['batch']) && isset($_POST['city']) && isset($_POST['year'])){
  $obj->indertData($_POST['name'],$_POST['course'],$_POST['batch'],$_POST['city'],$_POST['year']);
}