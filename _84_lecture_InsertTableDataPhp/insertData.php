<?php
include("./config.php");

$student=$connection->prepare(
  'insert into students (name,course,batch,city,year) values ("Abhimanu","MCA","morning","Siwan","2nd")'
);

$result=$student->execute();

if($result){
  echo "Data inserted successfully";
}else{
  echo "Data not inserted";
}