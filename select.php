<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newzaa";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM newkodza";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Tel: " . $row["tel"]. " - Email: " . $row["email"]. " - Age: " . $row["age"]. " - Fav: " . $row["fav"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
