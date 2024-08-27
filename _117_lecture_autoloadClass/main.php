<?php
// include("./Teacher.php");
// include("./Student.php");
// include("./Management.php");

spl_autoload_register(function($class){
  include($class.".php");
  echo "<br/>";
  // echo $class;
});

$t = new Teacher();
$s = new Student();
$m = new Management();