<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/estilo22.css">
	<title></title>
</head>
<body>




<?php

$server="localhost";
$usuario="root";
$contrasena="";
$bd="clientes";


$conexion=mysqli_connect($server, $usuario, $contrasena, $bd) or die ("error al conectar");




$borraesto=$_GET["Nombre"];


$consulta=mysqli_query($conexion,"DELETE FROM contacte  WHERE Nombre='$borraesto'")
or die ("error al traer datos");





mysqli_close($conexion);


echo'<center>';
echo '<br><br><br><br><br><br>';


echo'<h2>';
echo'eliminado correctamente<br>';

echo'<td><a href="index.html"><button type="button">Regresar</button></a></td>';
echo'</center>';
'</h2>';






/*EliminarProducto($_POST['Nombre']);

function EliminarProducto($Nombre)
{

$sentencia="DELETE FROM contacte WHERE Nombre='".$Nombre."'";
mysqli_query($sentencia) or die(mysqli_error());



}
*/


?>

</body>
</html>