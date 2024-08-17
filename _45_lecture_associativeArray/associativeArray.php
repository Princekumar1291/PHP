<?php
//indexed array
$user=["Prince","Princess","Princely"];
echo $user[2];
echo "<br>";

//associative array
$userDetails=[
  "name"=>"Prince",
  "age"=>20,
  "Village"=>"Sareyan",
  "Dist"=>"Siwan",
  "State"=>"Bihar",
];

$userDetails["DOB"] = 2003;

echo $userDetails["name"];
echo "<br>";


echo $userDetails["DOB"];
echo "<br>";

echo "<br>";

foreach($userDetails as $data){
  echo $data;
  echo "<br>";
}

echo "<br>";

foreach($userDetails as $key=>$data){
  echo $key." is ".$data;
  echo "<br>";
}

echo "<br>";

foreach($userDetails as $key=>$data):
  echo $key." is ".$data;
  echo "<br>";
endforeach;