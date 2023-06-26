<?php
	session_start(); // inicia sesion
?>
<html>
	<body>
		<a href="ej4.php"></a>
		<?php
			echo "Has visitado " . ($_SESSION["contador"]) . " páginas";
		?>
		<br>
		<br>
		<a href="ej4.php">Otra página</a>
	</body>
</html>