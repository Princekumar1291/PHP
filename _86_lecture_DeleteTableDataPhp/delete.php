<?php

include("./config.php");

// Handle the deletion
if (isset($_POST['delete'])) {
    $id = $_POST['delete'];

    // Prepare the delete statement
    $delete = $connection->prepare("DELETE FROM students WHERE id = :id");
    $delete->bindParam(':id', $id, PDO::PARAM_INT);

    if ($delete->execute()) {
        // Redirect to the same page to refresh the data
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Data not deleted";
    }
}

// Fetch and display the students
$studentQue = $connection->prepare("SELECT * FROM students");
$studentQue->execute();
$students = $studentQue->fetchAll(PDO::FETCH_ASSOC);

echo "<table border='1'>";
echo "<tr>";
   foreach(array_keys($students[0]) as $key){
       if($key != "id")echo "<th>$key</th>";
   }
   echo "<th>Action</th>";
echo "</tr>";

foreach ($students as $student) {
    echo "<tr>";
    echo "<td>{$student['name']}</td>";
    echo "<td>{$student['course']}</td>";
    echo "<td>{$student['batch']}</td>";
    echo "<td>{$student['city']}</td>";
    echo "<td>{$student['year']}</td>";
    echo "<td>
        <form action='' method='post'>
            <button name='delete' value='{$student['id']}'>
                Delete 
            </button>
        </form>
    </td>";
    echo "</tr>";
}

echo "</table>";
?>
