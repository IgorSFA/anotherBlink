<html>
<head>
	<meta charset="utf-8">
	<title>Workshop de Arduino</title>
</head>
<body>

	<?php
		echo "<h3><p style=\"text-align=center\">Workshop de Arduino</p></h3>";
		$portaString = $_POST['porta'];
		$port = fopen($portaString, "w+"); 
		sleep(2);

		if ($_POST['turn']=="on1")
		{
			echo "Ligado Rele 1";
			fwrite($port, "n");
		}

		if ($_POST['turn']=="off1")
		{
			echo "Desligado Rele 1";
			fwrite($port, "f");
		}
		if ($_POST['turn']=="on2")
		{
			echo "Ligado Rele 2";
			fwrite($port, "y");
		}

		if ($_POST['turn']=="off2")
		{
			echo "Desligado Rele 2";
			fwrite($port, "z");
		}

		fclose($port);
	?>
	<form action="/testes/botoes.php" method="POST">
		<input type="hidden" name="porta" value"<?php echo $portaString ?>">
		<input type="submit" value="Voltar">
	</form>

</body>
</html>
