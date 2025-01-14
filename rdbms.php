<?php

// Database connection parameters
$servername = "localhost";
$username = "username";
$password = "password";
$database = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create the customer table
$sql = "CREATE TABLE IF NOT EXISTS customer (
    customer_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    address VARCHAR(255),
    ph_no VARCHAR(15)
)";

// Execute the query
if ($conn->query($sql) === TRUE) {
    $message = "Table 'customer' created successfully";
} else {
    $message = "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL Table Creation</title>
</head>
<body>

<h1>MySQL Table Creation</h1>
<p><?php echo $message; ?></p>

</body>
</html>
