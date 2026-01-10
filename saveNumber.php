<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "_input_numbers_from_webpage_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Gather input data from a Form and store it to a variable
$nPut_number = $_POST['number'];

// Define a SQL QUERY and STORE it to a PHP variable
$query = "INSERT INTO _InputTable (input_value_columnar_data) VALUES (".$nPut_number.");";

// Database Name: "_input_numbers_from_webpage_db"
// Table Name: "_InputTable"
// Column Name: "input_value_columnar_data"
// Field Name: "$nPut_number" (identifier)

// Carry out the action
$conn->query($query);

// Close the connection
$conn->close();
?>
<!DOCTYPE html>
<!-- Display some HTML -->
<head>
</head>
<body>
	<!-- Hyperlink to a Landing Page after PHP script runs. -->
	<h1><a href="landingPage.html">CLICK HERE</a></h1>
</body>

</html>
