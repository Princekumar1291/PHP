<?php
$name="Prince kumar";
for($i=1;$i<=10;$i++){
  echo "$i $name";
  echo "<br/>";
}

$number=19;
for($i=1;$i<=10;$i++){
  echo $number*$i;
  echo "<br/>";
}


for($i=0;$i<=10;$i++){
  if($i%2==0) continue;
  echo $i;
  echo "<br/>";
}



for($i=0;$i<=100;$i++){
  if($i==15) break;
  echo $i;
  echo "<br/>";
}


//nexted for loop
for($i=1;$i<=5;$i++){
  for($j=1;$j<=5;$j++){
    echo "$i $j";
    echo "<br/>";
  }
}




//while loop
$i=1;
while($i<=10){
  echo "$i $name";
  echo "<br/>";
  $i++;
}



// Do While loop in PHP  (at least one time loop will run)
$i=19;
do{
  echo "$i $name";
  echo "<br/>";
  $i++;
}while($i<=10);