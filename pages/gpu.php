<?php

$proc1 = $_POST['proc1'];
$proc2 = $_POST['proc2'];

require_once("bd.php");

$data = $pdo->query("SELECT `name`,`LHR`,`videomemory`,`connection_interface`,`video_output`,`price`,`rate` FROM `gpu` WHERE `id` ='" . $proc1 . "';")->fetchAll();
$data2 = $pdo->query("SELECT `name`,`LHR`,`videomemory`,`connection_interface`,`video_output`,`price`,`rate` FROM `gpu` WHERE `id` ='" . $proc2 . "';")->fetchAll();
$data3 = $pdo->query("SELECT `name`, `rate` FROM `processors` ORDER BY `rate` DESC;")->fetchAll();

?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="../style/style.css">
	<link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
	
	<script src="../js/js.js" charset="utf-8"></script>
	<script src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title>PC HUB</title>	
</head>
<body>
<header>
<table>
		<th>
			<div class="logo">			
			<a style="color:white; font-size:300%"  rel="alternate" href="../index.php">PC</a>
			<a style="color:black; font-size:300%; background-color: #ffa31a; border-radius: 5px;"rel="alternate" href="../index.php">HUB</a>	</div>	

			<th>
				<div class="container">			
				<a class="ru" style="color:white; font-size:175%"  rel="alternate" href="cpu.php">Процессоры</a>
				<a class="us" style="color:white; font-size:200%"  rel="alternate" href="cpu.php">CPU</a>			
			</div>	
			</th>	
		</th>
		<th>
			<div class="container">			
			<a class="ru" style="color:white; font-size:175%"  rel="alternate" href="gpu.php">Видеокарты</a>
			<a class="us" style="color:white; font-size:200%"  rel="alternate" href="gpu.php">GPU</a>			
		</div>	
		</th>
		<th>
			<div class="container">			
			<a class="ru" style="color:white; font-size:175%"  rel="alternate" href="power_units.php">Блоки питания</a>	
			<a class="us" style="color:white; font-size:200%"  rel="alternate" href="power_units.html">Power Units</a>		
		</div>		

		</th>
		<th>
			<div class="container">			
			<a class="ru" style="color:white; font-size:175%"  rel="alternate" href="motherboards.php">Материнские платы</a>		
			<a class="us" style="color:white; font-size:200%"  rel="alternate" href="motherboards.php">Motherboards</a>			
		</div>
		</th>
		<th>
			<div class="container">			
			<a class="ru" style="color:white; font-size:175%"  rel="alternate" href="memory_storage.php">Накопители</a>
			<a class="us" style="color:white; font-size:200%"  rel="alternate" href="memory_storage.php">Storage devices</a>			
		</div>
		</th>
		<th>
			<div class="container">			
			<a class="ru" style="color:white; font-size:175%"  rel="alternate" href="monitors.php">Мониторы</a>
			<a class="us" style="color:white; font-size:200%"  rel="alternate" href="monitors.php">cases</a>			
		</div>	
		</th>
		<th>
			<div class="container">			
			<a class="ru" style="color:white; font-size:175%"  rel="alternate" href="cases.php">Корпуса</a>
			<a class="us" style="color:white; font-size:200%"  rel="alternate" href="cases.php">Cases</a>	

		</div>	</th>
		<th></th>
		<th>
			<div>
				<button class="btn container btn-inline dropdown-toggle" type="button"  data-toggle="dropdown">
				<text class="ru" style="font-size:35px; margin-left:-20%; color: white;">RU</text>
				<text class="us" style="font-size:35px; margin-left:-20%; color: white;">ENG</text>
  				</button>
			
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<button onclick="changeLanguage('ru')" class="dropdown-item" style="font-size:20px;">Русский</button>
					<button onclick="changeLanguage('us')" class="dropdown-item" style="font-size:20px;">English</button>
				  </div>
			</div>
		</th>
	</div>	
</table>   
</header>
<br><br><br>
<center>
	<form method='POST' action='gpu.php'>
	<h1 style="color:white; font-size:200%">Сравнение видеокарт</h1><br><br>

	<table>	
	<th><select class="form-control input-xs"   id="subject-select" name="proc1">
			<option selected disabled hidden> Choose here </option>
				<?php
				// Подключение к базе данных
				$connection = mysqli_connect("localhost", "ursiyan", "13371337loh", "pc_hub");

				// Получение списка предметов из базы данных
				$result = mysqli_query($connection, "SELECT * FROM `gpu`");
				
				// Создание опций для тега <select>
				while ($row = mysqli_fetch_assoc($result)) {
					echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
				}

				// Закрытие соединения с базой данных
				mysqli_close($connection);
				?>

				</select></th>
				<th style="font-size: 30px;">&nbsp;&nbsp;VS&nbsp;&nbsp;</th>
		<th><select class="form-control input-xs"  id="subject-select" name="proc2">
			<option selected disabled hidden> Choose here </option>

				<?php
				// Подключение к базе данных
				$connection = mysqli_connect("localhost", "ursiyan", "13371337loh", "pc_hub");

				// Получение списка предметов из базы данных
				$result = mysqli_query($connection, "SELECT * FROM `gpu`");
				
				// Создание опций для тега <select>
				while ($row = mysqli_fetch_assoc($result)) {
					echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
				}

				// Закрытие соединения с базой данных
				mysqli_close($connection);
				?>
				</select></th>
			</table>
		<center>
		<br><br><br>
		<button class='btn btn-success ru' type='submit'>Сравнить</button>
		<button class='btn btn-success us' type='submit'>Compare</button>
		<br>
		<input onclick="showDifference(this)" type="checkbox"> Показать различия </input>
		</center>
	</form>
	
</center>
<?php 
	if ($proc1!==null && $proc2!==null){ // Проверка на ненулевое значение переменной с ID процессоров
		echo "
		<center><link rel='stylesheet' href='../style/compare.css'>
		<div class='cpu_comp'>
			<table class='fixed_headers'>
		  <thead>
			<tr>
			  <th>Название</th>
			  <th>" . $data[0][0] . "</th>
			  <th>" . $data2[0][0] . "</th>
			</tr>
		  </thead>
		  <tbody>
		  "; if ($data[0][1]<>$data2[0][1]){
			echo "
			<tr>
			  <td class='red'>LHR</td>
			  <td class='red'>" . $data[0][1] . " </td>
			  <td class='red'>" . $data2[0][1] . "</td>
			</tr>"
		  ;} else { 
			  echo "
			<tr>
			<td>LHR</td>
			<td>" . $data[0][1] . " </td>
			<td>" . $data2[0][1] . "</td>
			</tr>"
			;} if ($data[0][2]<>$data2[0][2]){
				echo "
				<tr>
				  <td class='red'>Объем видеопамяти</td>
				  <td class='red'>" . $data[0][2] . " </td>
				  <td class='red'>" . $data2[0][2] . "</td>
				</tr>"
			  ;} else { 
				  echo "
				<tr>
				<td>Объем видеопамяти</td>
				<td>" . $data[0][2] . " </td>
				<td>" . $data2[0][2] . "</td>
				</tr>"
				;} if ($data[0][3]<>$data2[0][3]){
					echo "
					<tr>
					  <td class='red'>Тип соединения</td>
					  <td class='red'>" . $data[0][3] . " </td>
					  <td class='red'>" . $data2[0][3] . "</td>
					</tr>"
				  ;} else { 
					  echo "
					<tr>
					<td>Тип соединения</td>
					<td>" . $data[0][3] . " </td>
					<td>" . $data2[0][3] . "</td>
					</tr>"
					;} if ($data[0][4]<>$data2[0][4]){
						echo "
						<tr>
						  <td class='red'>Видео выходы</td>
						  <td class='red'>" . $data[0][4] . " </td>
						  <td class='red'>" . $data2[0][4] . "</td>
						</tr>"
					  ;} else { 
						  echo "
						<tr>
						<td>Видео выходы</td>
						<td>" . $data[0][4] . " </td>
						<td>" . $data2[0][4] . "</td>
						</tr>"
						;} if ($data[0][5]<>$data2[0][5]){
							echo "
							<tr>
							  <td class='red'>Цена</td>
							  <td class='red'>" . $data[0][5] . " </td>
							  <td class='red'>" . $data2[0][5] . "</td>
							</tr>"
						  ;} else { 
							  echo "
							<tr>
							<td>Цена</td>
							<td>" . $data[0][5] . " </td>
							<td>" . $data2[0][5] . "</td>
							</tr>"
							;}} // Вывод таблицы для сравнения характеристик процессоров
		?>
		<?php
						echo "<br><link rel='stylesheet' href='../style/style.css'><center>	
						<table class='top'>
						<h1 style='color:white; margin-top:5%; font-size:300%'>Топ видеокарт</h1><br>
						<thead style='color:white; font-size:200%' >
						  <tr>
							<th>Название</th>
							<th>Рейтинг</th>
						  </tr>
						</thead>
						<tbody style='color:white; font-size:150%'>
						  <tr>
						  <td>" . $data3[0][0] . " </td>
						  <td>" . $data3[0][1] . " </td>
						  </tr>
						  <tr>
						  <td>" . $data3[1][0] . " </td>
						  <td>" . $data3[1][1] . "</td>
						  </tr>
						  <tr>
						  <td>" . $data3[2][0] . " </td>
						  <td>" . $data3[2][1] . " </td>
						  </tr>
						  <tr>
						  <td>" . $data3[3][0] . " </td>
						  <td>" . $data3[3][1] . " </td>
						  </tr>
						  <tr>
						  <td>" . $data3[4][0] . " </td>
						  <td>" . $data3[4][1] . " </td>
						  </tr>
						  <tr>
						  <td>" . $data3[5][0] . " </td>
						  <td>" . $data3[5][1] . " </td>
						  </tr>
						</tbody>
					  </table></div></center>"
					  
?>
		</body>
		</html>