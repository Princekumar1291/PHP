<?php

trait parentCompany1{
  function getTotalEmployees(){
    echo 500;
  }
  function getTotalProject(){
    echo 50;
  }
}

trait parentCompany2{
  function getTotalOffice(){
    echo 20;
  }
}

class Company{
  use parentCompany1;
  use parentCompany2;
}

$c1 = new Company();
$c1->getTotalEmployees();
echo "<br>";
$c1->getTotalProject();
echo "<br>";
$c1->getTotalOffice();