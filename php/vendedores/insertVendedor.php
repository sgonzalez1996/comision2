<?php 

include('../../db/conexiondbFacelec.php');


if (isset($_POST['registarVendedores'])) {

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$identificacion = $_POST['identificacion'];
	$clase_vend = $_POST['clase_vend'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];

	$con->query( "INSERT INTO $vendedores (nombre, apellido, identificacion, clase_vend, telefono, correo) VALUES ('$nombre','$apellido', '$identificacion', '$clase_vend','$telefono', '$correo')");

	
	echo "Se insertaron correctamente los datos";

}


include('../../db/cerrarConexionFacelec.php');


?>