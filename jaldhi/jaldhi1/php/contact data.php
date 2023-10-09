<!-- Contact Page PHP Start -->

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
	$name = $_REQUEST["name"];
	$email = $_REQUEST["email"];
	$phone = $_REQUEST["phone"];
	$message = $_REQUEST["message"];
	$sql = "INSERT INTO contact_jaldhi VALUES ('$name', '$email', '$phone','$message')";

	if ($conn->query($sql) === TRUE) {

		echo "Record Inserted Successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

}

// Closing the connection.
$conn->close();

?>

<!-- Contact Page PHP End -->