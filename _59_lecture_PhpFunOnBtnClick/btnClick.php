<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <button name="btnClick" value="btn1">Call Function</button>
  </form>
</body>
</html>

<?php
// print_r($_POST);
// echo "<br>";

if(isset($_POST['btnClick'])){
  btnClickTest();
}

function btnClickTest(){
  echo "Function called on button click";
}