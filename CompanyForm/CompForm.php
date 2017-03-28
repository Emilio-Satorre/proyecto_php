<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro Empresa</title>
    <link rel="stylesheet" type="text/css" href="CompForm.css">
</head>
<body>
    <?php
        require_once "conexion.php";

        if(! empty($_POST)){
            if(mailExists()){
                echo "Este correo ya esta en uso";
            }else{
                register_company($_POST['user'],$_POST['email'],$_POST['pass']);
            }
        }


        function register_company($username,$email,$password){
            global $pdo;
            $stmt = $pdo->prepare('INSERT INTO company (nombre,email,password) VALUES (:user,:mail,:pass)');
            $stmt->execute([':user'=>$username,':mail'=>$email,':pass'=>$password]);
        }
        function mailExists(){
            global $pdo;
            $stmt=$pdo->prepare('SELECT * FROM company');
            $stmt->execute();
            $comp=$stmt->fetch();
            if($comp['email'] === $_POST['email']){
                return true;
            }
            return false;
        }
    ?>
    <h2>Registro Empresa</h2>
    <form action="" method="POST">
        <label>Empresa</label>
        <input type="text" name="user" placeholder="nombre de la empresa" required><br><br>
        <label>Correo electrónico</label>
        <input type="email" name="email" placeholder="correo electrónico" required><br><br>
        <label>Password</label>
        <input type="password" name="pass" placeholder="introduzca contraseña" requires><br><br>
        <input type="submit" name="" value="Enviar" id="button">
    </form>
</body>
</html>