
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jaldhi_database";

// Create connection
$conn = new mysqli($servername,
	$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// collect value of input field
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$subject = $_REQUEST["subject"];
$message = $_REQUEST["message"];
    $sql = "INSERT INTO contact_data_sc VALUES ('$name', '$email', '$subject','$message')";


	
if ($conn->query($sql) === TRUE) {
    

	echo "record inserted successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

}




// Closing the connection.
$conn->close();

?>