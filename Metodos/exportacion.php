<?php 
	include 'conexion.php'; 
	$con=conexion();

	$query = "SELECT * FROM tbl_formato";
	$res= mysqli_query($con,$query) or die (mysqli_error());

	$req = array();
	while ($row = mysqli_fetch_assoc($res)) {
		$req[] = $row;
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Exportación de Datos</title>
</head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/export.css">
<body>
	<div>
		<h3>Exportación a Excel</h3>
		<div>
			<div>
				<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
					<button type="submit" id="export" name="export" value="export">Exportar</button>
				</form>
			</div>
		</div>

		<table id="">
			<tr>
				<th> Folio de la requisición</th>
				<th> Nombre de la Dependencia Medica</th>
				<th> Codigo de la Unidad Médica o Administrativa</th>
				<th> Nombre de la Unidad Médico Administrativa</th>
				<th> Nombre del Contratado</th>
				<th> Genero</th>
				<th> Personal de Base</th>
				<th> RFC (con homoclave)</th>
				<th> Clave del Contratado</th>
				<th> Fecha de Inicio de Contratación</th>
				<th> Fecha de Termino de Contratación</th>
				<th> Número de Dias Contratados</th>
				<th> Turno</th>
				<th> Referencia</th>
				<th> (Especificar)Otro</th>
				<th> Clasificación</th>
				<th> Categoria</th>
				<th> Nivel</th>
				<th> Rango</th>
			</tr>
			<tbody>
				<?php 
				foreach ($req as $reqs) { ?>
					<tr>
						<td><?php echo $reqs ['folio_req']; ?></td>
						<td><?php echo $reqs ['depen']; ?></td>
						<td><?php echo $reqs ['cod_umed']; ?></td>
						<td><?php echo $reqs ['nom_umed']; ?></td>
						<td><?php echo $reqs ['nom_cont']; ?></td>
						<td><?php echo $reqs ['sexo']; ?></td>
						<td><?php echo $reqs ['nom_asup']; ?></td>
						<td><?php echo $reqs ['rfc']; ?></td>
						<td><?php echo $reqs ['ise_clave']; ?></td>
						<td><?php echo $reqs ['fecha_ini']; ?></td>
						<td><?php echo $reqs ['fecha_con']; ?></td>
						<td><?php echo $reqs ['dias_con']; ?></td>
						<td><?php echo $reqs ['turno']; ?></td>
						<td><?php echo $reqs ['ref_requi']; ?></td>
						<td><?php echo $reqs ['esp_otro']; ?></td>
						<td><?php echo $reqs ['clasi']; ?></td>
						<td><?php echo $reqs ['nom_puesto']; ?></td>
						<td><?php echo $reqs ['nivel']; ?></td>
						<td><?php echo $reqs ['rango']; ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

</body>
</html>