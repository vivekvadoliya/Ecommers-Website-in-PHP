<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jaldhi_database";

// Create connection
$conn = new mysqli(
	$servername,
	$username,
	$password,
	$dbname
);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// collect value of input field
	$Email = $_REQUEST["email"];
	$sql = "INSERT INTO sub_jaldhi VALUES ('$Email')";

	if ($conn->query($sql) === TRUE) {

		echo "Record Inserted Successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

}

// Closing the connection.
$conn->close();

?>