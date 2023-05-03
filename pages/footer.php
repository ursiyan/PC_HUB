
<footer>
<br>
<div class="alert alert-primary"  style="text-align:left; width:100%" role="alert">
По вопросам работы сайта:<br>
	Email: solmax2000@gmail.com
	<a id="up" href="#menu"></a>
</div>


</footer>	
<?php //автотест на подключение к бд	$host = 'localhost';$user = 'root';$pass = '';$db_name = 'solovev_44';$link = mysqli_connect($host, $user, $pass, $db_name);$result_failed = "Соединение потеряно!";$result_succes = "Соединение на месте!";echo "<script> setInterval(function(){";if (!$link) {echo "console.log('".$result_failed."');";}else {echo "console.log('".$result_succes."');";}echo " }, 5000); </script>";?>
<script type="text/javascript">
	 $(document).ready(function(){
    $("#up").click(function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
			top = $(id).offset().top;
			console.log(id);
        $('body,html').animate({scrollTop: top}, 500);
    });
});

</script>

</body>
</html>