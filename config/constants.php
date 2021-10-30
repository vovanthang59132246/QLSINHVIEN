<?php
session_start();

$hostname = "localhost";
$username = "root";
$dbname = "qlsv";
$conn = new mysqli($hostname, $username,"", $dbname);
#mysqli_set_charset($conn,'UTF8');
if ($conn->connect_error) {
    echo "Loi ket noi db " . $conn->connect_error;
}