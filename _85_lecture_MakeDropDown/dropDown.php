<?php
include("./config.php");

$getStudent=$connection->prepare(
  "select id,name from students"
);
$getStudent->execute();
$students=$getStudent->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
// print_r($students);
echo "<pre>";

echo "<select>";
echo "<option value='' disabled selected>Select Student</option>";
foreach($students as $student){
  echo "<option value='$student[id]'>$student[name]</option>";
}
echo "</select>";