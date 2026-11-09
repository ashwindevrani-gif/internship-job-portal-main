<?php

$conn = new mysqli("localhost", "root", "", "jobconnect");

if ($conn->connect_error) {
    echo json_encode(["status" => "error", "message" => "Database connection failed."]);
    exit;
}

?>