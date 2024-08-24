<?php
include("./config.php");
if(isset($_GET['id'])){
  $sql="select * from students where id=:id";
  $getStudent=$connection->prepare($sql);
  $getStudent->bindParam(':id',$_GET['id']);
  $getStudent->execute();
  $result=$getStudent->fetch(PDO::FETCH_ASSOC);
}

$name=$result['name'];
$course=$result['course'];
$batch=$result['batch'];
$city=$result['city'];
$year=$result['year'];

if(isset($_POST['update'])){
  $name=$_POST['name'];
  $course=$_POST['course'];
  $batch=$_POST['batch'];
  $city=$_POST['city'];
  $year=$_POST['year'];
  $sql="update students set name=:name,course=:course,batch=:batch,city=:city,year=:year where id=:id";
  $updateStudent=$connection->prepare($sql);
  $updateStudent->bindParam(':name',$name);
  $updateStudent->bindParam(':course',$course);
  $updateStudent->bindParam(':batch',$batch);
  $updateStudent->bindParam(':city',$city);
  $updateStudent->bindParam(':year',$year);
  $updateStudent->bindParam(':id',$_GET['id']);
  $updateStudent->execute();
  if($updateStudent)header('location:deleteEdit.php');
  else echo "Data not updated";
}

?>

<form action="" method="post">
  <input type="text" name="name" value="<?php echo $name; ?>">
  <br><br>
  <input type="text" name="course" value="<?php echo $course; ?>">
  <br><br>
  <input type="text" name="batch" value="<?php echo $batch; ?>">
  <br><br>
  <input type="text" name="city" value="<?php echo $city; ?>">
  <br><br>
  <input type="text" name="year" value="<?php echo $year; ?>">
  <br><br>
  <button name="update" type="submit" value=<?php echo $_GET['id']?>>Update</button>
</form>