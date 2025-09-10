<?php
$host = '192.168.56.20'; 
$port = 3306;
$db   = 'demo_db';
$user = 'root';
$pass = 'admin123';

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
