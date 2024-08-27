<?php
class User{
  private function getName($name){
    echo $name;
  }
  function __call($name, $arguments){
    if(method_exists($this, $name)){
      // echo "$name is private method";
      call_user_func_array([$this, $name], $arguments);
    }
    else echo "Method $name is not defined";
  }
}

$user = new User();
$user->getName("Maurya");
echo "<br>";

$user->setName("Maurya");
echo "<br>";