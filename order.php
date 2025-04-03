<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "milktea_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$flavor = $_POST['flavor'];
$size = $_POST['size'];
$toppings = $_POST['toppings'];

$sql = "INSERT INTO orders (flavor, size, toppings) VALUES ('$flavor', '$size', '$toppings')";

if ($conn->query($sql) === TRUE) {
    echo "Order placed successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

