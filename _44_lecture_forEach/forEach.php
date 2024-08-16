<!-- foreach with error -->

<?php

$arr = ['Prince',"Prakhar","Anil","Mohan","Rahul","Rohit"];
foreach ($arr as $value) {
  echo "<h3>$value</h3>";
  echo "<br>";
}

foreach ($arr as $ele):
  echo $ele;
  echo "<br>";
endforeach;
