<?php
// Replace with your actual database connection credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Students";

// Unique identifier (e.g., student ID) for the record you want to delete
$student_id_to_delete =$_GET['id'];; // Replace with the actual student ID

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define an array of table names to delete data from
$tables_to_delete_from = array(
    "student_details",
    "mhtcet_details",
    "fees_details",
    "hostel_details",
    "address_details",
    "education_details",
    "education_details_2",
    "health_details",
    "declaration_details"
);

// Loop through the tables and execute DELETE queries
foreach ($tables_to_delete_from as $table) {
    $sql = "DELETE FROM $table WHERE id = $student_id_to_delete"; // Assuming 'id' is the primary key
    if ($conn->query($sql) === TRUE) {
       echo "Data deleted from $table successfully.<br>";
       header("Location: ../adminpage.php");
    } else {
        echo "Error deleting data from $table: " . $conn->error . "<br>";
    }
}

// Close the database connection
$conn->close();
?>
