<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

if(isset($_POST['user_name'])){
  echo "User name is ".$_POST['user_name'];
  echo "<br>";
  echo "Password is ".$_POST['user_password'];
  echo "<br>";
  echo "Email is ".$_POST['user_email'];
  echo "<br>";
  echo "Gender is ".$_POST['gender'];
  echo "<br>";
  echo "City is ".$_POST['city'];
  echo "<br>";
  echo $_POST['user_description'];
  echo "<br>";
  echo "Skills is/are ".implode(",",$_POST['skills']);
  echo "<br>";
}
