
<?php 

include ('../inc/header.php');

include ('../php/vendedores/consultarVend.php');

?>

<h2>Informacion de los vededores</h2>

<a href="create.php"><button type="submit">Nuevo Vendedor</button></a>
<div class="clear">&nbsp;</div>

<table border="1">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>apellido</th>
			<th>identificacion</th>
			<th>Clase de Vendedor</th>
			<th>telefono</th>
			<th>correo</th>
			<th>Accion</th>
		</tr>
	</thead>

	<tbody>
		
		<?php while( $consulta = mysqli_fetch_array($viewVend) ) {
			?>


			<tr>
				<td><?= $consulta['id']?></td>
				<td><?= $consulta['nombre']?></td>
				<td><?= $consulta['apellido']?></td>
				<td><?= $consulta['identificacion']?></td>
				<td><?= $consulta['clase_vend']?></td>
				<td><?= $consulta['telefono']?></td>
				<td><?= $consulta['correo']?></td>
				<td><a href="edit.php"> Editar</a></td>

			</tr>

		<?php } ?>

	</tbody>
</table>


<?php include ('../inc/footer.php'); ?>

