<?php

$host = 'localhost';
$db   = 'pc_hub';
$user = 'root';
$pass = '';
$port = "3307";
$charset = 'utf8mb4';


$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
try {
     $pdo = new \PDO($dsn, $user, $pass);
}
catch (PDOException $e) {
    echo "Невозможно установить соединение с базой данных";
    exit;
};

?>