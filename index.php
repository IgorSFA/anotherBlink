<html>
<head>
	<meta charset="utf-8">
	<title>Workshop de Arduino</title>
</head>
<body>

	<?php
		echo "<p>Workshop de Arduino</p>";
		$port = fopen("/dev/ttyACM0", "w+"); 
		sleep(2);
	?>


	<form action="arduino.php" method="POST">
		<input type="hidden" name="turn" value="on1" />
		<input type="Submit" value="On 1">
	</form>

	<form action="arduino.php" method="POST">
		<input type="hidden" name="turn" value="off1" />
		<input type="Submit" value="Off 1">
	</form>


	<form action="arduino.php" method="POST">
		<input type="hidden" name="turn" value="on2" />
		<input type="Submit" value="On 2">
	</form>

	<form action="arduino.php" method="POST">
		<input type="hidden" name="turn" value="off2" />
		<input type="Submit" value="Off 2">
	</form>

	<?php

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

</body>
</html>