<?php
/* Change these values depending on the config
of your MySQL server */
$servername = 'localhost';
$db = 'shorturl';
$username = 'admin';
$password = 'password';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
    echo "Connection failed";
    exit();
}

