<?php
include 'con_db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login!</title>
    <link rel="stylesheet" type="text/css" href="estilo.css"> <!-- Se vincula el archivo CSS que se va a utilizar --> 
</head>
<body class=body1>
    <form action='iniciar_sesion.php' method="POST"> <!-- se utiliza el metodo POST -->
     <h1>Login!</h1> <!-- Titulo principal -->
<input type="text" name="usuario" placeholder="Usuario"> <!-- Caja de Texto usuario -->
<input type="password" name="contraseña" placeholder="Contraseña"> <!-- Caja de Texto contraseña -->
<input type="submit" href="home.php" value="Ingresar" name="home">
<a type="submit" name= "register" class="enlace1" href="Registro_de_usuarios.php">Registrarme</a>
</form>
</body>
</html>