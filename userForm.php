<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="formStyle.css">
</head>
<body>

	<h2>Registro:</h2>

	<form action="POST">

		<label>Usuario:</label>
		<input type="text" name="user" placeholder="Escriba aquí su nombre de usuario" required><br><br>

		<label>Nombre:</label>
		<input type="text" name="username" placeholder="Escriba aquí su nombre" required><br><br>

		<label>Apellidos:</label>
		<input type="text" name="lastname" placeholder="Escriba aquí sus apellidos" required><br><br>

		<label>Correo electrónico:</label>
		<input type="email" name="email" placeholder="Escriba aquí su correo electrónico" required><br><br>

		<label>Contraseña:</label>
		<input type="password" name="password" placeholder="Escriba aquí su contraseña" required><br><br>

		<input type="submit" name="sent" value="Enviar" id="button">
		
	</form>
</body>
</html>