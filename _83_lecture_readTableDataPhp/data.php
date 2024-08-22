<?php

include("./config.php");

// Prepare and execute the SQL query to fetch all students
$getStudents = $connection->prepare("SELECT * FROM students");
$getStudents->execute();

// Fetch all results into an array
$students = $getStudents->fetchAll(PDO::FETCH_ASSOC); // Fetch associative array

echo "<pre>";
// Optional: Print the raw array data for debugging
print_r($students);  
echo "</pre>";

// Start the HTML table
echo "<table border='1'>";

// Check if there are any students to display
if (count($students) > 0) {
    // Output table header
    echo "<tr>";
    foreach (array_keys($students[0]) as $key) {
        if ($key != "id") {
            echo "<th>$key</th>"; // Table header
        }
    }
    echo "</tr>";

    // Loop through each student record
    foreach ($students as $student) {
        echo "<tr>";
        // Loop through each key-value pair in the student record
        foreach ($student as $key => $value) {
            // Exclude the "id" column
            if ($key != "id") {
                echo "<td>$value</td>";
            }
        }
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='100%'>No data available</td></tr>";
}

// End the HTML table
echo "</table>";

?>
