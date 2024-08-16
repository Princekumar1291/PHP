<?php
function add($a, $b){
  return $a + $b;
}

$sum=add(10,20);
echo "$sum<br/>";

//welcome function

function welcome($name){
  echo "Welcome $name<br/>";
}
welcome("Prince");



function fruits($name,$color="red"){
  echo "$color of $name is $color<br/>";
}

fruits("mango");
fruits("apple","green");



//nexted function
function demo(){
  echo "hello<br/>";
  function apple(){
    echo "apple<br/>";
  }
}

demo();
apple();    //nexted function cannot called without calling its parent function


//variable function in php
function test(){
  echo "test<br/>";
}

test();  //or

$t=test();
echo "$t<br/>"; //or

$func="test";
$func();


//anonymous function
$fun2=function (){
  echo "anonymous function<br/>";
};

$fun2();