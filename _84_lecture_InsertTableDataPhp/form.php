<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="name" placeholder="Enter Name">
    <br><br>
    <input type="text" name="course" placeholder="Enter Course">
    <br><br>
    <input type="text" name="batch" placeholder="Enter Batch">
    <br><br>
    <input type="text" name="city" placeholder="Enter City">
    <br><br>
    <input type="text" name="year" placeholder="Enter Year">
    <br><br>
    <input type="submit" value="Add New Student">
  </form>

  <?php
  include("./config.php");

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['name']) && isset($_POST['course']) && isset($_POST['batch']) && isset($_POST['city']) && isset($_POST['year'])) {
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];
    
    // Prepare an SQL statement with placeholders
    $insertStudent = $connection->prepare(
      'INSERT INTO students (name, course, batch, city, year) VALUES (:name, :course, :batch, :city, :year)'
    );

    // Bind parameters to the placeholders
    $insertStudent->bindParam(':name', $name);
    $insertStudent->bindParam(':course', $course);
    $insertStudent->bindParam(':batch', $batch);
    $insertStudent->bindParam(':city', $city);
    $insertStudent->bindParam(':year', $year);

    // Execute the prepared statement
    $result = $insertStudent->execute();

    // Check if the data was inserted successfully
    if ($result) {
      echo "Data inserted successfully";
    } else {
      echo "Data not inserted";
    }
  }
  ?>
</body>
</html>
