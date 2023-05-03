<?php

$proc1 = $_POST['proc1'];
$proc2 = $_POST['proc2'];


require_once("bd.php");

$data = $pdo->query("SELECT `name`,`cores`,`threads`,`frequency`,`year`,`socket`,`price`,`rate` FROM `processors` WHERE `id` ='" . $proc1 . "';")->fetchAll();
$data2 = $pdo->query("SELECT `name`,`cores`,`threads`,`frequency`,`year`,`socket`,`price`,`rate` FROM `processors` WHERE `id` ='" . $proc2 . "';")->fetchAll();


echo $data[0][1];


?>
