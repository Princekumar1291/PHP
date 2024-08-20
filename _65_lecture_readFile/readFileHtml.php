<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="fileExit">
    <br><br>
    <button>Read File</button>
   </form>
</body>
</html>

<?php
if(isset($_FILES['fileExit'])){
  if($_FILES['fileExit']['size']>0){
    $fileName=$_FILES['fileExit']['tmp_name'];
    $file=fopen($fileName,"r") or die("file can not be open.");
    $content=fread($file,filesize($fileName));
    echo $content;
  }
} 