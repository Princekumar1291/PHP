<form action="" method="get">
  <input type="text" name="search" placeholder="Search...">
  <button type="submit">Search</button>
</form>

<?php
include("./config.php");

if(isset($_GET['search'])){
  $search = "%".$_GET['search']."%";
  // $sql="select * from students where name=:search";
  $sql="select * from students where name like :search";
  $getStudent=$connection->prepare($sql);
  $getStudent->bindParam(":search",$search);
  $getStudent->execute();
  $student=$getStudent->fetchAll(PDO::FETCH_ASSOC);

  if(count($student) > 0){
    echo "<pre>";
    print_r($student);
    echo "</pre>";
  }else{
    echo "No result found";
  }

}


?>
