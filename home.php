<?php 
session_start();
include 'con_db.php';
$usuario= $_SESSION['usuario'];
/*echo "<a class:cerrarsesion href='cerrar_sesion.php'> Cerrar sesion </a>";*/
echo "<br><h1>Bienvenido $usuario!</h1>";
$consulta="SELECT loguin, usuario FROM registro_de_ingreso WHERE usuario='$usuario'";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="estilo.css"> <!-- Se vincula el archivo CSS que se va a utilizar --> 
</head>
<body class='body2'>
<a class='cerrarsesion' href='cerrar_sesion.php'> Cerrar sesion </a>
<br>
<br>
<br>
<table>
<div class= "container-table">
<div class="Table_title">Listado de Login<table></div>
<div class="Table_title">Loguins realizados:<table></div>
<?php
$resultado= mysqli_query($conex, $consulta);
while($row=mysqli_fetch_assoc($resultado)){?>
<div class="table_item"><?php echo /*$row['usuario'],*/ $row['loguin']?></div>
<?php  } mysqli_free_result($resultado)?>
</div>
</table>
</body>
</html>