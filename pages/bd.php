<?php

/**
 * @brief Хост для подключения к базе данных.
 * @var string $host
 */
$host = 'localhost';

/**
 * @brief Имя базы данных.
 * @var string $db 
 */
$db   = 'pc_hub';

/**
 * @brief Имя пользователя базы данных.
 * @var string $user
 */
$user = 'root';

/**
 * @brief Пароль для подключения к базе данных.
 * @var string $pass
 */
$pass = '';

/**
 * @brief Порт для подключения к базе данных.
 * @var string $port
 */
$port = "3307";

/**
 * @brief Кодировка для подключения к базе данных.
 * @var string $charset
 */
$charset = 'utf8mb4';

/**
 * @brief Строка подключения к базе данных.
 * @var string $dsn
 */
$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";

try {
     /**
      * @brief Объект PDO для работы с базой данных.
      * @var \PDO $pdo 
      */
     $pdo = new \PDO($dsn, $user, $pass);
}
catch (PDOException $e) {
    echo "Невозможно установить соединение с базой данных";
    exit;
};

?>