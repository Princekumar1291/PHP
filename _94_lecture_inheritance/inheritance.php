<?php

class UserAuth{
  function login($userType){
    echo "$userType login";
    echo "</br>";
  }
}

class Student extends UserAuth{
  function getName(){
    echo "Student Name";
  }
}

class Teacher extends UserAuth{
  function getSkills(){
    echo "Teacher skills";
  }
}

$s1=new Student();
$s1->login("Student");

$t1=new Teacher();
$t1->login("Teacher");

$s1->getName();
echo "</br>";

$t1->getSkills();
echo "</br>";