<?php
print_r($_POST);
echo "<br>";

if($_POST){
  echo "User name is ". $_POST['user_name'];
  echo "<br>";
  echo "Password is ". $_POST['user_password'];
}