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
			<a style="color:white; font-size:300%"  rel="alternate" href="#">PC</a>
			<a style="color:black; font-size:300%; background-color: #ffa31a; border-radius: 5px;"rel="alternate" href="#">HUB</a>	</div>	

			<th>
				<div class="container">			
				<a class="ru" style="color:white; font-size:175%"  rel="alternate" href="pages/cpu.html">Процессоры</a>
				<a class="us" style="color:white; font-size:200%"  rel="alternate" href="pages/cpu.html">CPU</a>			
			</div>	
			</th>	
		</th>
		<th>
			<div class="container">			
			<a class="ru" style="color:white; font-size:175%"  rel="alternate" href="index.php">Видеокарты</a>
			<a class="us" style="color:white; font-size:200%"  rel="alternate" href="/pages/cpu.html">GPU</a>			
		</div>	
		</th>
		<th>
			<div class="container">			
			<a class="ru" style="color:white; font-size:175%"  rel="alternate" href="../index.php">Блоки питания</a>	
			<a class="us" style="color:white; font-size:200%"  rel="alternate" href="/pages/cpu.html">Power Units</a>		
		</div>		

		</th>
		<th>
			<div class="container">			
			<a class="ru" style="color:white; font-size:175%"  rel="alternate" href="../index.php">Материнские платы</a>		
			<a class="us" style="color:white; font-size:200%"  rel="alternate" href="/pages/cpu.html">Motherboards</a>			
		</div>
		</th>
		<th>
			<div class="container">			
			<a class="ru" style="color:white; font-size:175%"  rel="alternate" href="../index.php">Накопители</a>
			<a class="us" style="color:white; font-size:200%"  rel="alternate" href="/pages/cpu.html">Storage devices</a>			
		</div>
		</th>
		<th>
			<div class="container">			
			<a class="ru" style="color:white; font-size:175%"  rel="alternate" href="../index.php">Мониторы</a>
			<a class="us" style="color:white; font-size:200%"  rel="alternate" href="/pages/cpu.html">Monitors</a>			
		</div>	
		</th>
		<th>
			<div class="container">			
			<a class="ru" style="color:white; font-size:175%"  rel="alternate" href="../index.php">Корпуса</a>
			<a class="us" style="color:white; font-size:200%"  rel="alternate" href="/pages/cpu.html">Cases</a>	

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
	<form method='POST' target='_blank' action='compare.php'>
		<select id="subject-select" name="proc1">
			<option selected disabled hidden> Choose here </option>
				<?php
				// Подключение к базе данных
				$connection = mysqli_connect("localhost", "root", "", "pc_hub");

				// Получение списка предметов из базы данных
				$result = mysqli_query($connection, "SELECT * FROM `processors`");
				
				// Создание опций для тега <select>
				while ($row = mysqli_fetch_assoc($result)) {
					echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
				}

				// Закрытие соединения с базой данных
				mysqli_close($connection);
				?>

				</select>
		<select id="subject-select" name="proc2">
			<option selected disabled hidden> Choose here </option>

				<?php
				// Подключение к базе данных
				$connection = mysqli_connect("localhost", "root", "", "pc_hub");

				// Получение списка предметов из базы данных
				$result = mysqli_query($connection, "SELECT * FROM `processors`");
				
				// Создание опций для тега <select>
				while ($row = mysqli_fetch_assoc($result)) {
					echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
				}

				// Закрытие соединения с базой данных
				mysqli_close($connection);
				?>
		</select>

		<center>
		<br><br><br>
		<button  class='btn btn-success' type='submit'>Сравнить</button>
		</center>
	</form>
	
</center>
</body>
</html>