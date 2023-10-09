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
	$Name = $_REQUEST["name"];
	$Email = $_REQUEST["email"];
	$phone = $_REQUEST["number"];
	$Product_Name = $_REQUEST["pname"];
    $Quantity = $_REQUEST["quantity"]; 
	$AddAress = $_REQUEST["address"];
	$sql = "INSERT INTO buy_data_jaldhi VALUES ('$Name', '$Email', '$phone','$Product_Name','$Quantity','$AddAress')";

	if ($conn->query($sql) === TRUE) {

		echo "Record Inserted Successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

}

// Closing the connection.
$conn->close();

?>