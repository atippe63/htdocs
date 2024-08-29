<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $tel = $_POST['telephone'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $fav = isset($_POST['likes']) ? implode(", ", $_POST['likes']) : "";

    $stmt = $conn->prepare("INSERT INTO newkodza (name, tel, email, age, fav) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sisss", $name, $tel, $email, $age, $fav);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>แสดงข้อมูล</title>
</head>
<body>
    <h2>ฟอร์มเพิ่มข้อมูล</h2>
    <form action="submit.php" method="post">
        Name: <input type="text" name="name" required><br>
        Telephone: <input type="text" name="telephone" required><br>
        Email: <input type="email" name="email" required><br>
        Age: <input type="number" name="age" required><br>
        สิ่งที่ชอบ: <br>
        <input type="checkbox" name="likes[]" value="Zebra'"> Zebra<br>
        <input type="checkbox" name="likes[]" value="Cat"> Cat<br>
        <input type="checkbox" name="likes[]" value="Anaconda"> Anaconda<br>
        <input type="checkbox" name="likes[]" value="Human"> Human<br>
        <input type="checkbox" name="likes[]" value="Elephant"> Elephant<br>
        <input type="checkbox" name="likes[]" value="Wildebeest"> Wildebeest<br>
        <input type="checkbox" name="likes[]" value="Pigeon"> Pigeon<br>
        <input type="checkbox" name="likes[]" value="Crab"> Crab<br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>