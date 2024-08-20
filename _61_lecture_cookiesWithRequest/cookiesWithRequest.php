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
    <br><br>
    <button name="btn" value="set">Set Cookie</button>
    <br><br>
    <button name="btn" value="display">Display Cookie</button>
    <br><br>
    <button name="btn" value="delete">Delete Cookie</button>
  </form>
</body>
</html>

<?php


if(isset($_POST['btn'])){
  if($_POST['btn'] == 'set'){
    $userName=$_POST['user_name'];
    if(strlen($userName)>0){
      setcookie("UserName",$userName,time()+10);
    }
  }
  elseif($_POST['btn']=='display'){
    if(isset($_COOKIE['UserName'])){
      echo $_COOKIE['UserName'];
    }
    else{
      echo "Cookies with user_name is not found.";
    }
  }
  elseif($_POST['btn']=='delete'){
    if(isset($_COOKIE['UserName'])){
      setcookie("UserName",'',time()-100);
      echo "Cookie with userName is delete.";
    }
    else{
      echo "Cookie UserName does not exist.";
    }
  }
}


























// if(isset($_POST['btn'])){
//   if($_POST['btn'] == 'set'){
//     setcookie('user_name',$_POST['user_name'],time()+(86400 * 30));
//   }elseif($_POST['btn'] == 'display'){
//     if(isset($_COOKIE['user_name'])){
//       echo $_COOKIE['user_name'];
//     }else{
//       echo "Cookie is not set";
//     }
//   }elseif($_POST['btn'] == 'delete'){
//     setcookie('user_name','',time()-(86400 * 30));
//   }
// }