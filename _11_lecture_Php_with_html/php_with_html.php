<?php

$h2_color="purple";

?>

<?php
echo "<h1 style='color:green'>Hello World in PHP</h1>";
echo "<p> this is paragraph</p>";
?>

<?php
$name="Prince Kumar";
echo "<h1 style='color:red'>My name is: $name</h1>"
?>


<h1 style="color: blue">
  <?php
  echo "my name is $name";
  ?>
</h1>


<h1 style="color: blue">
my name is
  <?php
  echo $name;
  ?>
</h1>


<h2 style="color: <?php echo $h2_color ?>">this is h2 tag</h2>
<h2 style="color: <?php echo $h2_color ?>">this is h2 tag</h2>
<h2 style="color: <?php echo $h2_color ?>">this is h2 tag</h2>