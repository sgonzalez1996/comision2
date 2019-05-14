<?php 
include('../db/conexiondbFacelec.php');

$viewVend = mysqli_query($con, "SELECT * FROM $vendedores");


include('../db/cerrarConexionFacelec.php');

?>