<?php
// Database connection
$servername = "localhost"; 
$username = "root"; 
$password = "1234"; 
$dbname = "bookstore"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$bb = $_POST['bookTitle'];
$qty = $_POST['quantity'];
$fname = $_POST['fullName'];
$ad = $_POST['address'];
$emai = $_POST['email'];


// SQL Query
$sql = "INSERT INTO ordernow (BookTitle, Quantity, FullName, ShippingAddress, Email  ) VALUES ('$bb', '$qty', '$fname', '$ad','$emai')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
