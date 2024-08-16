<?php
$marks=77;
if($marks>=90 && $marks<=100){
  $grade="A";
}
elseif($marks>=80 && $marks<90){
  $grade="B";
}
elseif($marks>=70 && $marks<80){
  $grade="C";
}
elseif($marks>=60 && $marks<70){
  $grade="D";
}
else{
  $grade="F";
}
echo "Grade is $grade";
?>



