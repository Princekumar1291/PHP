<?php
class Model{
  static $name="Prakhar";
  static function getName(){
    echo self::$name; //or
    echo Model::$name;
  }
}

Model::getName();
echo Model::$name;
