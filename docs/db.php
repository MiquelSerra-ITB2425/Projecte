<?php
$servername = "127.0.0.1"; // evita problemas de socket
$username   = "root";
$password   = "root";
$dbname     = "crud_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
