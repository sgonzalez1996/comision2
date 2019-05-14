<?php 

include('../../db/conexiondbFacelec.php');


if (isset($_POST['editarVendedores'])) {


	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$identificacion = $_POST['identificacion'];
	$clase_vend = $_POST['clase_vend'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];

	$updateVend = "UPDATE $vendedores SET 
	nombre = '$nombre',
	apellido = '$apellido',
	identificacion = '$identificacion',
	clase_vend = '$clase_vend',
	telefono = '$telefono',
	correo = '$correo'

	WHERE id = '1'
	";

	mysqli_query($con, $updateVend);

	
	echo "Se Modifico correctamente los datos";

}


include('../../db/cerrarConexionFacelec.php');


?>