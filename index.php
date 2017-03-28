<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Incluimos el archivo de variables -->
	<?php include "vars.php"; ?>
	<meta charset="UTF-8">
	<title>Lista de usuarios</title>
</head>
<body>
	<?php
		/*Abrimos la lista donde mostraremos los datos lamacenados en el array*/		 
		echo "<ul>";
			/*Por cada reggistro de el array, que muestre el nombre*/
			foreach($players as $player){
				echo "<li>".$player."</li>";			
			}
		echo "</ul>";
	?>
</body>
</html>