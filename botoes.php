<html>
<head>
	<meta charset="utf-8">
	<title>Workshop de Arduino</title>
</head>
<body>
	<?php
	
	$portaString = $_POST['porta'];
	
	?>

	<form action="state.php" method="POST">
		<input type="hidden" name="porta" value="<?php echo $portaString ?>">
		<input type="hidden" name="turn" value="on1" />
		<input type="Submit" value="On 1">
	</form>
	
	<form action="state.php" method="POST">
		<input type="hidden" name="porta" value="<?php echo $portaString ?>">
		<input type="hidden" name="turn" value="off1" />
		<input type="Submit" value="Off 1">
	</form>
	
	<form action="state.php" method="POST">
		<input type="hidden" name="porta" value="<?php echo $portaString ?>">
		<input type="hidden" name="turn" value="on2" />
		<input type="Submit" value="On 2">
	</form>
	
	<form action="state.php" method="POST">
		<input type="hidden" name="porta" value="<?php echo $portaString ?>">
		<input type="hidden" name="turn" value="off2" />
		<input type="Submit" value="Off 2">
	</form>
	<a href="testes/index.html">Clique aqui para voltar</a>

</body>
</html>
