<?php 

include('conexiodb.php');

$consult = "SELECT * FROM CATEGORIAS";
$stmt = sqlsrv_query( $conn, $consult);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table>
		<thead>
			<th>nombre</th>
		</thead>

		<tbody>
			<?php 
			while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
			?>
<td><?php echo $row['CMTIPINV_DESCRIPCION']; ?></td>
		<?php } ?>
		</tbody>
	</table>

</body>
</html>