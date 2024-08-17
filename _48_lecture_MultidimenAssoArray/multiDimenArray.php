<?php
$user=[
  ["Name"=>"Anil","Location"=>'Noida',"EmailId"=>"anil@gmail.com"],
  ["Name"=>"Prakhar","Location"=>'Delhi',"EmailId"=>"prakhar@gmail.com"],
  ["Name"=>"Rohit","Location"=>'Noida',"EmailId"=>"rohit@gmail.com"],
  ["Name"=>"Anil","Location"=>'Noida',"EmailId"=>"anil@gmail.com"],
  ["Name"=>"Prakhar","Location"=>'Delhi',"EmailId"=>"prakhar@gmail.com"],
  ["Name"=>"Rohit","Location"=>'Noida',"EmailId"=>"rohit@gmail.com"],
];

echo "<pre>";
print_r($user);
echo "</pre>";

foreach($user as $data){
  foreach($data as $key=>$ele){
    echo $key." is ".$ele.", ";
  }
  echo "<br>";
}