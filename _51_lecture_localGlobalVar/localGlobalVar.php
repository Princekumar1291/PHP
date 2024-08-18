<?php
$food="Biryani";
function getName(){
  $name="Prince";  //local variable
  echo "local ",$name;
  echo "<br/>";

  global $food;   
  $food="Chiken";
  echo $food;
  echo "<br/>";
}

getName();
echo $food;
echo "<br/>";
// echo $name; cant access outside the function


$city="Bhagalpur";
function getAge(){
  $city="Siwan";
  echo $city;
  echo "<br/>";
  function getCity(){
    // $city="Muzaffarpur";
    global $city;   //access outer most variable
    echo $city;
    echo "<br/>";
  }
}
getAge();
getCity();