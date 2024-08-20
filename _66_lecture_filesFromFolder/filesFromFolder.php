<?php
$paht="files";
$items=scandir($paht);
$items=array_diff($items,[".",".."]);



echo "<pre>";
print_r($items);
echo "</pre>";
echo "<br>";

foreach($items as $item){
  echo "<a href='./files/$item'>$item</a>";
  echo "<br>";
}