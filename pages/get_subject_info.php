<?php
// Подключаемся к базе данных
$pdo = new PDO('mysql:host=localhost;dbname=pc_hub', 'root', '');

// Получаем ID выбранного предмета
$id = isset($_GET["id"]) ? intval($_GET["id"]) : 0;

if ($id) {
  // Выполняем запрос к базе данных для получения информации о выбранном предмете
  $statement = $pdo->prepare("SELECT `name` FROM `processors` WHERE `name` = ?");
  $statement->execute([$id]);
  $subject = $statement->fetch(PDO::FETCH_ASSOC);

  // Возвращаем информацию о выбранном предмете в формате JSON
  header("Content-Type: application/json");
  echo json_encode($subject);
} else {
  // Если ID не указан, возвращаем пустой объект
  header("Content-Type: application/json");
  echo json_encode((object)[]);
}
?>
