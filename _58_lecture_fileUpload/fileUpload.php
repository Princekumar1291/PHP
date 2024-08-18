<?php
// echo "This is include file";
// echo "<br/>";
// print_r($_FILES);
// echo "<br/>";

echo "<pre>";
if($_FILES['fileUpload']){
  print_r($_FILES);
  $path=$_FILES['fileUpload']['name'];
  $uploadPath="./uploads/".$path;
  move_uploaded_file($_FILES['fileUpload']['tmp_name'],$uploadPath) or die("File not uploaded");
}else{
  die("File not found");
}
echo "</pre>";