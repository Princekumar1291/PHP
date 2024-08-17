<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
</head>
<body>
  <table border="1" cellpadding="5" style="border-collapse: collapse;">
    <tr>
      <th>Sno</th>
      <th>Name</th>
      <th>Location</th>
      <th>EmailId</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Anil</td>
      <td>Noida</td>
      <td>anil@gmail.com</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Prakhar</td>
      <td>Delhi</td>
      <td>prakhar@gmail.com</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Rohit</td>
      <td>Noida</td>
      <td>rohit@gmail.com</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Anil</td>
      <td>Noida</td>
      <td>anil@gmail.com</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Prakhar</td>
      <td>Delhi</td>
      <td>prakhar@gmail.com</td>
    </tr>
  </table>
</body>
</html>


<?php
$user=[
  [1,"Anil",'Noida',"anil@gmail.com"],
  [2,"Prakhar",'Delhi',"prakhar@gmail.com"],
  [3,"Rohit",'Noida',"rohit@gmail.com"],
  [4,"Anil",'Noida',"anil@gmail.com"],
  [5,"Prakhar",'Delhi',"prakhar@gmail.com"],
  [6,"Rohit",'Noida',"rohit@gmail.com"],
];

$tableHeading=["Sno","Name","Location","EmailId"];


echo "<table border='1' cellpadding='5' style='border-collapse: collapse;'>";
echo "<tr>";
for($i=0;$i<sizeof($tableHeading);$i++){
  echo "<th>";
  echo "$tableHeading[$i]";
  echo "</th>";
}
echo "</tr>";
for($i=0;$i<sizeof($user);$i++){
  echo "<tr>";
  for($j=0;$j<sizeof($user[$i]);$j++){
    // echo "<td>";
    // echo $user[$i][$j];
    // echo "</td>";  //or
    echo "<td>".$user[$i][$j]."</td>";
  }
  echo "</tr>";
}
echo "<table>";

