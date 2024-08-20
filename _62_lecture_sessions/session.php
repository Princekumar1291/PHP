<!-- Creating New Session  -->

<?php 
session_start();

$value="Prakhar";
$_SESSION["newsession"]=$value;
echo $_SESSION["newsession"];


// Updating Session 
$value="Prakhar";
$updatedvalue="Anil";
$_SESSION["newsession"]=$value;
$_SESSION["newsession"]=$updatedvalue;
echo $_SESSION["newsession"];

// Deleting Session 
$_SESSION["newsession"]=$value;
unset($_SESSION["newsession"]);