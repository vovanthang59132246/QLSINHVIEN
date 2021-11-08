<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "bd";
$conn = new mysqli($hostname, $username, $password, $dbname);
#mysqli_set_charset($conn,'UTF8');
if ($conn->connect_error) {
    echo "Loi ket noi db " . $conn->connect_error;
}

?>