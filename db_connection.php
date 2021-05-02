<?php
$servername = "localhost:3306";
$username = "root";
$password = "JRawlsk120";
$dbname = "forms";
try {
$conn = new PDO("mysql:host=localhost:3306;dbname=form", $username, $password, $db);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
} catch (PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}
