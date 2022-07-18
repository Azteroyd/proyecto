<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../CSS/tabla.css">
	<title>Tabla estadistica</title>
</head>
<body>

	<header>
			<img src="docs/logos/logo1.png" alt="image 1" class="img1">
			<img src="docs/logos/logo6.png" alt="image 2" class="img2">
			<img src="docs/logos/logo3.png" alt="image 3" class="img3">
			<a href="menu.php" class="boton" style="height: 40px; width: 75px; text-align: center;"><h3> Regresar </h3></a>
	</header>


<div class="contenedor">
	<div class="documento">
		<table border="0" cellspacing="0" cellpadding="0" class="tabla">
			<tr>
				<td><font face="Arial"> Numero de Plaza</font></td>
				<td><font face="Arial"> Nombre de la Dependencia Medica</font></td>
				<td><font face="Arial"> Nombre de la Unidad Medico Administrativa</font></td>
				<td><font face="Arial"> Nombre del contratado</font></td>
				<td><font face="Arial"> Genero</font></td>
				<td><font face="Arial"> Personal de base</font></td>
				<td><font face="Arial"> RFC</font></td>
				<td><font face="Arial"> Clave del contratado</font></td>
				<td><font face="Arial"> Fecha de contratación</font></td>
				<td><font face="Arial"> Fecha de termino de contratación</font></td>
				<td><font face="Arial"> Dias contratados</font></td>
				<td><font face="Arial"> Turno</font></td>
				<td><font face="Arial"> Categoria</font></td>
				<td><font face="Arial"> Clasificación</font></td>
			</tr>
		<?php 
			Include 'conexion.php';
			$con=conexion();

		$query = 'SELECT * FROM tbl_formato';


		if ($res = mysqli_query($con,$query)) {
			while ($row = mysqli_fetch_assoc($res)) {
				$name1 = $row['num_plaza'];
				$name2 = $row['depen'];
				$name3 = $row['nom_umed'];
				$name4 = $row['nom_cont'];
				$name5 = $row['sexo'];
				$name6 = $row['nom_asup'];
				$name7 = $row['rfc'];
				$name8 = $row['ise_clave'];
				$name9 = $row['fecha_ini'];
				$name10 = $row['fecha_con'];
				$name11 = $row['dias_con'];
				$name12 = $row['turno'];
				$name13 = $row['nom_puesto'];
				$name14 = $row['clasi'];

			echo '<tr>
					<td>'.$name1.'</td>
					<td>'.$name2.'</td>
					<td>'.$name3.'</td>
					<td>'.$name4.'</td>
					<td>'.$name5.'</td>
					<td>'.$name6.'</td>
					<td>'.$name7.'</td>
					<td>'.$name8.'</td>
					<td>'.$name9.'</td>
					<td>'.$name10.'</td>
					<td>'.$name11.'</td>
					<td>'.$name12.'</td>
					<td>'.$name13.'</td>
					<td>'.$name14.'</td>

				</tr>';
				}
					$res->free();
				}
			?>
		</table>
	</div>
</div>
</body>
</html>