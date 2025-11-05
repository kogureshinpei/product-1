<?php
// /* ドライバ呼び出しを使用して MySQL データベースに接続する */
// $dsn = 'mysql:dbname=shin;host=mysql;charset=utf8mb4';
// $user = 'root';
// $password = '1729';

// $dbh = new PDO($dsn, $user, $password);

$host = 'mysql'; // ここを 'mysql' に変更
$db   = 'app';
$user = 'root';
$pass = 'root_password'; // .env または環境変数に合わせてください
$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
  $pdo = new PDO($dsn, $user, $pass, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  ]);
} catch (PDOException $e) {
  echo "DB接続エラー: " . $e->getMessage();
  exit;
}
