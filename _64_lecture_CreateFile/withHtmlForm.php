<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="fileName" placeholder="Enter file name">
    <br> <br>
    <textarea name="fileData" id="" placeholder="Write your file data..."  rows="10" cols="50"></textarea>
    <br> <br>
    <button name="btn" value="post">Create</button>
  </form>
</body>
</html>

<?php
if(isset($_POST['fileName'])){
  $fileName="files/".$_POST['fileName'];
  $fileData=$_POST['fileData'];
  if($_POST['btn']=="post"){
    $file=fopen($fileName,"w") or die("File can't be created.");
    fwrite($file,$fileData);
    fclose($file);
    echo "File is created";
  }
}