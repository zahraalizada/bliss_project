<?php

$host = "45.84.206.203";
$dbname = "u601023761_demo";
$username = "u601023761_demo";
$password = "Demo123@#";
global $conn;
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die ("Could not connect to the database $dbname :" . $pe->getMessage());
}

?>


