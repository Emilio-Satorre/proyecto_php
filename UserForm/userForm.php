<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="formStyle.css">

</head>
<body>
	<?php
		require_once "conexion.php";

		if(! empty($_POST)){
			if(mailExists()){
				echo "Este correo ya esta en uso";
			}else{
		 		register_players($_POST['username'],$_POST['email'],$_POST['password']);
			}
		}


		function register_players($username,$email,$password){
		 	global $pdo;
		 	$stmt = $pdo->prepare('INSERT INTO players (user,email,password) VALUES (:user,:mail,:pass)');
		 	$stmt->execute([':user'=>$username,':mail'=>$email,':pass'=>$password]);
		}
		function mailExists(){
			global $pdo;
			$stmt=$pdo->prepare('SELECT * FROM players');
			$stmt->execute();
			$user=$stmt->fetch();
			if($user['email'] === $_POST['email']){
				return true;
			}
			return false;
		}
	?>

	<h2>Registro:</h2><br>
	<form method="POST" action="">
		<label>Usuario:</label>
		<input type="text" name="username" placeholder="Escriba aquí su nombre de usuario" required><br><br>
		<label>Correo electrónico:</label>
		<input type="email" name="email" placeholder="Escriba aquí su correo electrónico" required><br><br>
		<label>Contraseña:</label>
		<input type="password" name="password" placeholder="Escriba aquí su contraseña" required><br><br>
		<input type="submit" name="" value="Enviar" id="button">
	</form>
</body>
</html>