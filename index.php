<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style/style.css">
	<link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
	
	<script src="js/js.js" charset="utf-8"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<link rel="shortcut icon" href="img/icon.png" type="image/png">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title>PC Hub</title>	
</head>

<!-- git add .
git commit -m "Comment"
git push origin -->


<body>
<header>
	<table>
		<th>
			<div class="logo">			
			<a style="color:white; font-size:300%"  rel="alternate" href="#">PC</a>
			<a style="color:black; font-size:300%; background-color: #ffa31a; border-radius: 5px;"rel="alternate" href="#">HUB</a>	</div>	

			<th>
				<div class="container">			
				<a class="ru" style="color:white; font-size:175%"  rel="alternate" href="pages/cpu.php">Процессоры</a>
				<a class="us" style="color:white; font-size:200%"  rel="alternate" href="pages/cpu.php">CPU</a>			
			</div>	
			</th>	
		</th>
		<th>
			<div class="container">			
			<a class="ru" style="color:white; font-size:175%"  rel="alternate" href="index.php">Видеокарты</a>
			<a class="us" style="color:white; font-size:200%"  rel="alternate" href="/pages/cpu.php">GPU</a>			
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

<center>
	<br>
	<text style="color:white; font-size:300%"  class="ru"  rel="alternate" href="../index.php">Давно </text>
	<text style="color:black; font-size:300%; background-color: #ffa31a; border-radius: 5px;"  class="ru" rel="alternate" href="../index.php">хотели</text>
	<text style="color:white; font-size:300%"  rel="alternate" href="../index.php" class="ru">  собрать мощный компьютер, <br>но</text>
	<text style="color:black; font-size:300%; background-color: #ffa31a; border-radius: 5px;" class="ru"rel="alternate" href="../index.php">не могли</text>
	<text style="color:white; font-size:300%"  rel="alternate" class="ru" href="../index.php">  определиться с выбором?</text>

	<text style="color:white; font-size:300%"  class="us"  rel="alternate" href="../index.php">Have you been </text>
	<text style="color:black; font-size:300%; background-color: #ffa31a; border-radius: 5px;"  class="us" rel="alternate" href="../index.php">wanting</text>
	<text style="color:white; font-size:300%"  rel="alternate" href="../index.php" class="us">  to assemble a powerful computer for a long time,<br> but </text>
	<text style="color:black; font-size:300%; background-color: #ffa31a; border-radius: 5px;" class="us"rel="alternate" href="../index.php">could not make</text>
	<text style="color:white; font-size:300%"  rel="alternate" class="us" href="../index.php">   a choice?</text>
	<br>
	<div id="think">
		<img height="50%"  src=img/repo/battle.png></img>
	<text style="color:white; font-size:300%" class="ru" rel="alternate">Какой же лучше выбрать? 🤔</text>
	<text style="color:white; font-size:300%" class="us" rel="alternate">Which one is better? 🤔</text>
	</div>

	<text style="color:white; font-size:500%" class="ru" rel="alternate" href="../index.php">PC</text>
	<text style="color:black; font-size:500%; background-color: #ffa31a; border-radius: 5px;"class="ru">HUB</text>
	<text style="color:white; font-size:300%" class="ru" rel="alternate"> - ваш верный помощник в выборе комплектующих!<br></text>
	<text style="color:white; font-size:300%"class="ru"  rel="alternate">Выбери</text>
	<text style="color:black; font-size:300%; background-color: #ffa31a; border-radius: 5px;"class="ru">интересующую</text>
	<text style="color:white; font-size:300%" class="ru" rel="alternate"> категорию товаров сверху и начни сравнивать</text>

	<text style="color:white; font-size:500%" class="us" rel="alternate" href="../index.php">PC</text>
	<text style="color:black; font-size:500%; background-color: #ffa31a; border-radius: 5px;"class="us">HUB</text>
	<text style="color:white; font-size:300%" class="us" rel="alternate"> - your faithful assistant in the choice of components!<br></text>
	<text style="color:white; font-size:300%"class="us"  rel="alternate">Choose the category of products you are</text>
	<text style="color:black; font-size:300%; background-color: #ffa31a; border-radius: 5px;"class="us">interested in</text>
	<text style="color:white; font-size:300%" class="us" rel="alternate"> from above <br> and start comparing</text>
	
</center>
</body>
</html>