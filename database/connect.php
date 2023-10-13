<?php
$host = "localhost";
$dbname = "wooden_store";
$user = "root";
$pass = "";
$charset = "utf8mb4";
$options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

try {
    $pdo = new PDO("mysql:host={$host};dbname={$dbname}", $user, $pass, $options);
} catch (\PDOException $err) {
    echo "Error " . $err->getMessage();
    die();
}