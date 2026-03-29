<?php

$conn = new mysqli("localhost", "root", "", "login_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['userId'];
$pass = $_POST['password'];

if (empty($user) || empty($pass)) {
    echo "Please fill all fields";
    exit();
}

$stmt = $conn->prepare("SELECT * FROM users WHERE userId=? AND password=?");
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<h3 style='color:green;'>Login Successful</h3>";
} else {
    echo "<h3 style='color:red;'>Invalid User ID or Password</h3>";
}

?>