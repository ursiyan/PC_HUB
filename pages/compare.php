<?php

$proc1 = $_POST['proc1'];
$proc2 = $_POST['proc2'];


require_once("bd.php");

$data = $pdo->query("SELECT `name`,`cores`,`threads`,`frequency`,`year`,`socket`,`price`,`rate` FROM `processors` WHERE `id` ='" . $proc1 . "';")->fetchAll();
$data2 = $pdo->query("SELECT `name`,`cores`,`threads`,`frequency`,`year`,`socket`,`price`,`rate` FROM `processors` WHERE `id` ='" . $proc2 . "';")->fetchAll();

// echo $data[0][1];

echo "
<link rel='stylesheet' href='../style/compare.css'>
<div>
	<table class='fixed_headers'>
  <thead>
    <tr>
      <th>Название</th>
      <th>" . $data[0][0] . "</th>
      <th>" . $data2[0][0] . "</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Ядра</td>
      <td>" . $data[0][1] . " </td>
      <td>" . $data2[0][1] . "</td>
    </tr>
    <tr>
      <td>Потоки</td>
      <td>" . $data[0][2] . "</td>
      <td>" . $data2[0][2] . "</td>
    </tr>
    <tr>
      <td>Частота</td>
      <td>" . $data[0][3] . "</td>
      <td>" . $data2[0][3] . "</td>
    </tr>
    <tr>
      <td>Год выпуска</td>
      <td>" . $data[0][4] . "</td>
      <td>" . $data2[0][4] . "</td>
    </tr>
    <tr>
      <td>Сокет</td>
      <td>" . $data[0][5] . " </td>
      <td>" . $data2[0][5] . "</td>
    </tr>
    <tr>
      <td>Цена</td>
      <td>" . $data[0][6] ."</td>
      <td>" . $data2[0][6] ."</td>
    </tr>
    <tr>
      <td>Рейтинг</td>
      <td>" . $data[0][7] . "</td>
      <td>" . $data2[0][7] . "</td>
    </tr>
  </tbody>
</table>
</div>"

?>

