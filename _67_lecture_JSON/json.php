<?php

$user=["name"=>"Prince","age"=>20,"city"=>"Noida","country"=>"India"];
$userJson=json_encode($user);
echo $userJson;
echo "<br/>";

print_r($user);
echo "<br/>";

$jsonToData=json_decode($userJson,true);
print_r($jsonToData);
echo "<br>";