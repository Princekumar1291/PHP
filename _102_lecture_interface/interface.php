<?php
interface ProductFeatures{
  // public $company="abc";  we cant use properties and methods in interface
  function images();
  function ownerDetails();
}

class Products implements ProductFeatures{
  public function images(){
    echo "images";
  }
  public function ownerDetails(){
    echo "ownerDetails";
  }
}

$p1=new Products();
$p1->images();
echo "</br>";

$p1->ownerDetails();
echo "</br>";