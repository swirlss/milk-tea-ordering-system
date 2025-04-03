<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "milktea_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM orders ORDER BY id DESC";
$result = $conn->query($sql);

echo "<h2>Orders</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Flavor</th><th>Size</th><th>Toppings</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["flavor"]."</td><td>".$row["size"]."</td><td>".$row["toppings"]."</td></tr>";
    }
} else {
    echo "<tr><td colspan='4'>No orders yet</td></tr>";
}

echo "</table>";
$conn->close();
?>

