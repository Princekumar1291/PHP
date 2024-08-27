<?php
//Problem 1
$x=true && false; //priority of && is high than =
var_dump($x);
echo "<br>";

$y=true and false;  //priority of = is high than and
var_dump($y);
echo "<br>";
echo "<br>";



//Problem 2
$array=[20=>"Apple","b"=>true,1=>"a","1"=>"b",true=>"d"];  //1 and true are same and value of 1 get override to "d"
echo $array[1];
echo "<br>";
echo "<br>";


//Problem 3
$a=null;
$b;
$c="";

var_dump($a==$c);
echo "<br>";
var_dump($a===$c);
echo "<br>";
echo "<br>";


//Problem 4
function apple(){
  function banana(){
    return "banana";
  }
  return "apple";
}
echo apple();
echo "<br>";
echo banana();
echo "<br>";
echo "<br>";


//Problem 5
function callMe(){
  echo "Hello I am called";
}
function orange($fun){
  $fun();
  echo "Hello I am orange";
}

// $fun="callMe";
// orange($fun);

orange("callMe");
echo "<br>";
echo "<br>";





//Problem 6
// isset vs empty 
// use to check any variable is set of not 
// return boolean value

$diff=NULL;
$var1=0;
$var2=0.0;
$var3="0";
$var4=false;
$var5=array();
$var6="";

if(isset($var6)){
  echo "set";
}else{
  echo "not set";
}
// echo "<br>";
// if(empty($var6)){
//   echo "set";
// }else{
//   echo "not set";
// }
// echo "<br>";
// echo "<br>";




// Problem 7
var_dump(20.100==20.1);
echo "<br>";
echo "<br>";





// Problem 8
var_dump("1"==" 1");
echo "<br>";
var_dump("1"===" 1");
echo "<br>";
var_dump(1==1);
echo "<br>";
echo "<br>";




// Problem 9
$a=20;
$b=30;
// [$a,$b]=[$b,$a]; 
// or 
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo "<br>";






// Problem 10
// PHP asynchronous or synchronous?
// • PHP code is synchronous Programming Language
// • meaning that each line of code is executed sequentially,






// Problem 11
// PHP is Clientee or Server Side scripting Langauge
// PHP is Server Side scripting Langauge
// PHP Code is execute on server side
// That why we can connect php with Database also





// Problem 12
$name="prince";
$$name="Youtube Channel";
echo "$name is running a $prince";





// Problem 13
// php do not support nested class but is support anonymous calss 





// Problem 14
// can we create more then 1 constructor in php class?-->no 
//can we create constructor inside a method in php class?-->no



// Problem 15
// What does PHP stand for?--> Hypertext Preprocessor
// PHP server scripts are surrounded by delimiters, which?--> <?php ?> 
<!-- How do you write "Hello World" in PHP?--> echo "Hello World"  -->
<!-- All variables in PHP start with which symbol?--> $  -->
<!-- What is the correct way to end a PHP statement?--> ;  -->
<!-- The PHP syntax is most similar to: -->perl and c  -->
<!-- How do you get information from a fpm•n that is submitted using the "get" method?--> $_GET -->
<!-- When using the POST method, variables are displayed in the IJRL:-->no  -->
<!-- In PHP you can use both single quotes (' ') and double quotes (" ") for strings:--> yes  -->
<!-- Which superglobal variable holds information about headers, paths, and script locations?--> $_SERVER  -->
<!-- The die() and exit() functions do the exact same thing.--> yes -->
 