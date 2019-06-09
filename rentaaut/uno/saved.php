<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" type="text/css" href="css/estil.css">
	<title>consultas</title>
</head>
<body id="bodyy">
		<center>
<div class='logo'>
<img src="image/logo.png">
</div>
<div id="menu">
<ul>
  <li><a href="#inicio">Inicio</a></li>
  <li><a href="conoce.html">Conoce nuestros vehículos</a></li>
  <li><a href="#cotiza">Cotiza aqui</a></li>
  <li><a href="sobrenosotros.html">Sobre nosotros</a></li>
</ul>
</div>

<?php


$servidor="localhost";
$usuario="id8472814_root";
$contrasena="t3cla2mi";
$basededatos="id8472814_clientes";


$conn=mysqli_connect($servidor, $usuario, $contrasena, $basededatos) or die ("error en la conexion de base de datos");

$nombre = $_POST['nomb'];
$telefono = $_POST['telef'];
$correo = $_POST['mail'];
$fecha = $_POST['fecha'];
$origen = $_POST['orig'];
$destino = $_POST['dest'];
$pasajeros = $_POST['select'];
$detail = $_POST['detalles'];

$insertar = "INSERT into contacte (Nombre, Telefono, Correo, Fecha, Origen, Destino, Pasajeros, Detalles) VALUES ('$nombre','$telefono','$correo','$fecha','$origen','$destino','$pasajeros','$detail')";
$resultado = mysqli_query($conn, $insertar) or die("error al insertar los registros");


mysqli_close($conn);

echo "<b>datos enviados, en unos momentos, personal se comunicará con usted";

?>
</body>
</div>
</html>