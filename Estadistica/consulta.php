<?php
	include("../Metodos/conexion.php");
	include("../session.php");	
	$con=conexion();
	
	if(isset($_POST['search']))
	{
		$valueToSearh = $_POST['valueToSearh']; 
		$query = "SELECT * FROM tbl_formato WHERE id_registro LIKE '%".$valueToSearh."%' OR num_plaza LIKE '%".$valueToSearh."%' OR cordinacion LIKE'%".$valueToSearh."%' OR nom_umed LIKE'%".$valueToSearh. "%' OR nom_cont LIKE'%".$valueToSearh."%' OR nom_asup LIKE'%".$valueToSearh."%' OR rfc LIKE'%".$valueToSearh."%' OR ise_clave LIKE'%".$valueToSearh."%' OR fecha_ini LIKE'%".$valueToSearh."%' OR fecha_con LIKE'%".$valueToSearh."%' OR dias_con LIKE'%".$valueToSearh."%' OR turno LIKE'%".$valueToSearh."%' OR nom_puesto LIKE'%".$valueToSearh."%' OR clasi LIKE '%".$valueToSearh."%'";
		$result = filterRecord($query);
	}
	else
	{
		$query = "SELECT * FROM tbl_formato";
		$result = filterRecord($query);
	}
	
	function filterRecord($query)
	{
		include("../Log/config.php");
		$filter_result = mysqli_query($mysqli, $query);
		return $filter_result;
	}

	//$consul = $filter_result;
?>

<!DOCTYPE html>
<html>
<head>
<title> Consultas </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../CSS/consul.css" /> 

</head>
<body>
		<header>
			<img src="../docs/logos/logo1.png" alt="image 1" class="img1">
			<img src="../docs/logos/logo6.png" alt="image 2" class="img2">
			<img src="../docs/logos/logo3.png" alt="image 3" class="img3">
			<center>
<h2>Registros de requisiciones</h2>
</center>
		</header>




<div class="container">
	<form action="" method="POST">
		<input type="search" name="valueToSearh" placeholder="Búsqueda" autocomplete="off">
		<button type="submit" class="signupbtn" name="search" >Buscar</button>
	</form>

	<a href="../Estadistica/menu_dos.php"> <button>Regresar</button></a>
		<a href="../Metodos/imprimir_consulta.php" target="_blank" rel="noopener noreferrer"> <button>Imprimir Todo</button></a>
		<a href="../Metodos/exportar_consulta.php" target="_blank" rel="noopener noreferrer"> <button>Exportar a Excel</button></a>

<div style="height: 490px; width: 100%; overflow: auto ! important; overflow: none;">


<table border='1' class="sas">
<tr>
<th> Numero de Plaza</th>
<th> Nombre de la Unidad Médico Administrativa</th>
<th> Nombre del Contratado</th>	
<th> RFC (con homoclave)</th>
<th> Clave del Contratado</th>
<th> Número de Dias Contratados</th>
<th> Turno</th>
<th> Referencia</th>
<th> Clasificación</th>
<th> Categoria</th>
</tr>

<?php
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['num_plaza']  ."</td>";
echo "<td>" . $row['nom_umed']   ."</td>";
echo "<td>" . $row['nom_cont']   ."</td>";
echo "<td>" . $row['rfc']        ."</td>";
echo "<td>" . $row['ise_clave']  ."</td>";
echo "<td>" . $row['dias_con']   ."</td>";
echo "<td>" . $row['turno']      ."</td>";
echo "<td>" . $row['ref_requi']  ."</td>";
echo "<td>" . $row['clasi']      ."</td>";
echo "<td>" . $row['nom_puesto'] ."</td>";



echo "<td><a href='delete.php?id=".$row['id_registro']."'><img src=' ../Docs/Iconos/icons8-Trash-32.png' alt='Borrar'></a></td>";
echo "<td><a href='imprimir_dos.php?id=".$row['id_registro']."' target='_blank' rel='noopener noreferrer'><img src=' ../Docs/Iconos/icons8-Print-32.png' alt='Imprimir' ></a></td>";
echo "</tr>";
}
echo "</table>";

?>

	</div>
	</table>
</div>
</body>
</html> 