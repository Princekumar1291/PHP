<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="user_name" id="" placeholder="Enter User Name">
    <br> <br>
    <button name="btn" value="set">Set Session</button> 
    <br> <br>
    <button name="btn" value="get">Get Session</button> 
    <br> <br>
    <button name="btn" value="delete">Delete Session</button> 
    <br> <br>
  </form>
</body>
</html>

<?php
session_start();

if(isset($_POST['btn'])){
  if($_POST['btn'] == 'set'){
    $val=$_POST['user_name'];
    $_SESSION["user"]=$val;
  }
  elseif(isset($_SESSION["user"]) && $_POST['btn']=='get'){
    echo $_SESSION["user"];
  }
  elseif($_POST['btn']=='delete'){
    session_destroy();
  }
}