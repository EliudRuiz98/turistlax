<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/estilo22.css">

	<title></title>
</head>
<body>

<?php

$pass=$_POST['pas'];

if($pass=='pass1')
{

$server="localhost";
$usuario="root";
$contrasena="";
$bd="clientes";






$conexion=mysqli_connect($server, $usuario, $contrasena, $bd) or die ("error al conectar");

$consulta=mysqli_query($conexion,"SELECT * FROM contacte")
or die ("error al traer datos");

echo'<h2>';

echo'<div class="table-responsive-xl">';
  echo'<table class="table">';


echo'<table>';
echo'<tr>';
echo '<th>Nombre</th>';
echo '<th>Telefono</th>';
echo '<th>Correo</th>';
echo '<th>Fecha</th>';
echo '<th>Origen</th>';
echo '<th>Destino</th>';
echo '<th>Pasajeros</th>';
echo '<th>Detalles</th>';
echo '<th></th>';
echo'</tr>';

while($extraido=mysqli_fetch_array($consulta)){
echo'<tr>';
echo'<td>'.$extraido['Nombre'].'</td>';
echo'<td>'.$extraido['Telefono'].'</td>';
echo'<td>'.$extraido['Correo'].'</td>';
echo'<td>'.$extraido['Fecha'].'</td>';
echo'<td>'.$extraido['Origen'].'</td>';
echo'<td>'.$extraido['Destino'].'</td>';
echo'<td>'.$extraido['Pasajeros'].'</td>';
echo'<td>'.$extraido['Detalles'].'</td>';
echo'<td><a href="eliminaruno.php?Nombre='.$extraido['Nombre'].'"><button type="button">Eliminar</button></a></td>';



echo'</tr>';

}
echo'</table>';
echo '</div>';
echo'</h2>';

mysqli_close($conexion);






echo'<form action="index.html">';
echo'<center>';
echo'<input type="submit" value="Regresar">';
echo'</center>';
echo'</form>';





}


else
{



echo'<center>';
echo '<br><br><br><br><br><br>';

echo'LA CONTRASEÑA NO COINCIDE, INTÉNTALO DE NUEVO<br>';
echo'<a href="index.html">
<input type="submit" value="regresar"></a>';
echo'</center>';





}


?>



</body>
</html>


