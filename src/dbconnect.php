<?php
$dsn = 'mysql:host=db;port=3306;dbname=posse;charset=utf8mb4';
$user = 'root';
$password = 'root';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo 'Connection to DB';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
