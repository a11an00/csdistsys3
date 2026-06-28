<?php

$host = "sql306.infinityfree.com ";
$user = "if0_42291827";
$password = "nT3QttRuyZ";
$database = "if0_42291827_csdistsys ";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>