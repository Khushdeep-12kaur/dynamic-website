<?php
// Assuming you have established a database connection and sanitized the input values
$name = $_POST['name'];
$hours_worked = $_POST['hours_worked'];
// Retrieve other employee information fields here

// SQL query to save the form data to a table in the database
$sql = "INSERT INTO employees (name, hours_worked) VALUES ('$name', $hours_worked)";
// Execute the query here

// Redirect the user back to the view page after saving
header("Location: view_content.html");
exit();
?>
