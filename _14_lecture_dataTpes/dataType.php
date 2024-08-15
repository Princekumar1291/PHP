<?php

$name="Prince kuar";
$age=20;
$interest=2.5;
echo $name;
echo "<br/>";
echo var_dump($name);

echo $age;
echo "<br/>";
echo var_dump($age);

echo $interest;
echo "<br/>";
echo var_dump($interest);

$check=true;
echo "<br/>";
echo var_dump($check);

$arr=['anil','sam',100,true];
echo "<br/>";
echo var_dump($arr);


$empty=null;
echo "<br/>";
echo var_dump($empty);



//example of class
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');
echo "<br>";
echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";


$connection=ftp_connect("127.0.0.1") or die("local host not found");
echo "<br>";
echo $connection;
echo "<br>";
echo var_dump($connection);

