<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "travel_agency";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


$sql="INSERT INTO customer(name,email,pin) VALUES ('$_POST[name]','$_POST[email]','$_POST[pin]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>