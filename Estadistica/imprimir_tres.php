<?php
	include("conexion.php");
	$con=conexion();
	
	if(isset($_GET['search']))
	{
		$valueToSearh = $_POST['valueToSearh']; 
		$query = "SELECT * FROM tbl_formato WHERE id_registro LIKE '%".$valueToSearh."%' OR num_plaza LIKE '%".$valueToSearh."%' OR depen LIKE'%".$valueToSearh."%' OR nom_umed LIKE'%".$valueToSearh. "%' OR nom_cont LIKE'%".$valueToSearh."%' OR sexo LIKE'%".$valueToSearh."%'OR nom_asup LIKE'%".$valueToSearh."%' OR rfc LIKE'%".$valueToSearh."%' OR ise_clave LIKE'%".$valueToSearh."%' OR fecha_ini LIKE'%".$valueToSearh."%' OR fecha_con LIKE'%".$valueToSearh."%' OR dias_con LIKE'%".$valueToSearh."%' OR turno LIKE'%".$valueToSearh."%' OR nom_puesto LIKE'%".$valueToSearh."%' OR clasi LIKE '%".$valueToSearh."%'";
		$result = filterRecord($query);
	}
	else
	{
		$query = "SELECT * FROM tbl_formato";
		$result = filterRecord($query);
	}
	
	function filterRecord($query)
	{
		include("config.php");
		$filter_result = mysqli_query($mysqli, $query);
		return $filter_result;
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="CSS/style.css" /> 

</head>
<body>
		<header>
			<img src="docs/logos/logo1.png" alt="image 1" class="img1">
			<img src="docs/logos/logo6.png" alt="image 2" class="img2">
			<img src="docs/logos/logo3.png" alt="image 3" class="img3">
		</header>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<center>
<h2>Registros de requisiciones</h2>
</center>
<hr/>

<div class="container">

<form action="" method="POST">
<input type="search" name="valueToSearh" placeholder="Búsqueda" autocomplete="off">
<button type="submit" class="signupbtn" name="search" >Buscar</button>
</form>
<div class="contenido">
<a href="menu.php" class="boto" style="height: 40px; width: 75px;"><h3> Regresar </h3></a>
<a href="imprimir_uno.php" class="boto" style="height: 40px; width: 75px;"><h3> imprimir Todo </h3></a>
<a href="imprimir_tres.php" class="boto" style="height: 40px; width: 75px;"><h3> imprimir Consulta </h3></a>
<a href="export.php" class="boto" style="height: 40px; width: 75px;"><h3> Exportar a Excel </h3></a>
</div>

<br />
<?php


echo "<table border='1'>
<tr>
<th> Numero de Plaza</th>
<th> Nombre de la Dependencia Medica</th>
<th> Codigo de la Unidad</th>
<th> Nombre de la Unidad Médico Administrativa</th>
<th> Nombre del Contratado</th>
<th> Genero</th>
<th> Personal de Base</th>
<th> RFC (con homoclave)</th>
<th> Clave del Contratado</th>
<th> Fecha de Inicio Contratación</th>
<th> Fecha de Termino de Contratación</th>
<th> Número de Dias Contratados</th>
<th> Turno</th>
<th> Referencia</th>
<th> (Especificar)Otro</th>
<th> Clasificación</th>
<th> Categoria</th>
<th> Nivel</th>
<th> Rango</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['num_plaza']  ."</td>";
echo "<td>" . $row['depen']      ."</td>";
echo "<td>" . $row['cod_umed']   ."</td>";
echo "<td>" . $row['nom_umed']   ."</td>";
echo "<td>" . $row['nom_cont']   ."</td>";
echo "<td>" . $row['sexo']       ."</td>";
echo "<td>" . $row['nom_asup']   ."</td>";
echo "<td>" . $row['rfc']        ."</td>";
echo "<td>" . $row['ise_clave']  ."</td>";
echo "<td>" . $row['fecha_ini']  ."</td>";
echo "<td>" . $row['fecha_con']  ."</td>";
echo "<td>" . $row['dias_con']   ."</td>";
echo "<td>" . $row['turno']      ."</td>";
echo "<td>" . $row['ref_requi']  ."</td>";
echo "<td>" . $row['esp_otro']   ."</td>";
echo "<td>" . $row['clasi']      ."</td>";
echo "<td>" . $row['nom_puesto'] ."</td>";
echo "<td>" . $row['nivel']      ."</td>";
echo "<td>" . $row['rango']      ."</td>";



echo "<td><a href='delete.php?id=".$row['id_registro']."'><img src=' Docs/Iconos/icons8-Trash-32.png' alt='Borrar'></a></td>";
echo "<td><a href='imprimir_dos.php?id=".$row['id_registro']."'><img src=' Docs/Iconos/icons8-Print-32.png' alt='Imprimir'></a></td>";
echo "</tr>";
}
echo "</table>";

?>

</body>
</html> 