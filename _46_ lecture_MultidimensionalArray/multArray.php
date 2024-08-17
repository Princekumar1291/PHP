<?php
$array=[
  ["Prince","Prakhar","Pratik"],
  ["Anil","Rohit","Mohit"],
  ["Rohit","Prakhar","Anil"],
];

echo $array[0][0];
echo "<br>";
echo "<br>";

for($i=0;$i<sizeof($array);$i++){
  for($j=0;$j<sizeof($array[$i]);$j++){
    echo $array[$i][$j];
    echo "<br/>";
  }
}

echo "<br>";
echo "<br>";

foreach($array as $arr){
  foreach($arr as $ele){
    echo $ele;
    echo "<br/>";
  }
}

echo "<br/>";
echo "<br/>";

print_r($array);

echo "<br/>";
echo "<br/>";

echo "<pre>";
print_r($array);
echo "<pre/>";