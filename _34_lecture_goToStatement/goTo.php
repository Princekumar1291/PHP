<?php
$x=20;
echo "before goto<br/>";

if($x==20){
  goto abc;
}

echo "Prince";
echo "<br/>";

abc:
echo "Prakhar Kumar";

for($i=0;$i<10;$i++){
  if($i==5){
    goto second;
  }
  echo $i;
  echo "<br/>";
}

second:
echo "Hello";