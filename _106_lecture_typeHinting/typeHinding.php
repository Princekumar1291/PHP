<!-- Type Hinting or type declaretion -->
<?php
function fruit(string | int $name){
  echo $name;
}

fruit("Apple");
echo "<br>";

function fruit2(array $name){
  echo sizeof($name);
}
fruit2(["Apple","Banana","Chiken","Mango","Grapes"]);
