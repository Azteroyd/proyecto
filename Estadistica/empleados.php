<?php
	include("../Metodos/conexion.php");
	include("../session.php");	
	$con=conexion();
	
	if(isset($_POST['search']))
	{
		$valueToSearh = $_POST['valueToSearh']; 
		$query = "SELECT * FROM tbl_infosuplentes WHERE id_suplente LIKE '%".$valueToSearh."%' OR nombre_sup LIKE '%".$valueToSearh."%' OR apellido_pat LIKE'%".$valueToSearh."%' OR apellido_mat LIKE'%".$valueToSearh. "%' OR curp_sup LIKE'%".$valueToSearh."%' OR rfc_sup LIKE'%".$valueToSearh."%'";
		$result = filterRecord($query);
	}
	else
	{
		$query = "SELECT * FROM tbl_infosuplentes";
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
	<title>Registros</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../CSS/empleados.css" /> 

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
		<a href="../Metodos/imprimir_empleados.php" target="_blank" rel="noopener noreferrer"> <button>Imprimir Todo</button></a>
		<a href="../Metodos/exportar_empleados.php" target="_blank" rel="noopener noreferrer"> <button>Exportar a Excel</button></a>

<div style="border: 0px solid black; height: 490px; width: 100%; overflow: auto ! important; overflow: none;">


<table border='1' class="sas">
<tr>
<th> Nombre del suplente</th>
<th> Apellido Paterno</th>
<th> Apellido Materno</th>
<th> CURP</th>
<th> RFC (con Homoclave)</th>
<th> Clave ISSEMYM</th>
<th> Estado de Residencia</th>
<th> Municipio de Residencia</th>
<th> Localidad de Residencia</th>
<th> Calle </th>
<th> Codigo Int/Ext</th>
<th> Código Postal</th>
<th> Fecha de Nacimiento</th>
<th> Genero</th>
<th> Estado Civil</th>
<th> Num. de Telefono</th>
<th> Estatus</th>
<th> Fecha de Alta</th>
<th> Fecha de Baja</th>
</tr>

<?php
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['nombre_sup']  ."</td>";
echo "<td>" . $row['apellido_pat']  ."</td>";
echo "<td>" . $row['apellido_mat']  ."</td>";
echo "<td>" . $row['curp_sup']      ."</td>";
echo "<td>" . $row['rfc_sup']   ."</td>";
echo "<td>" . $row['clave_isesup']   ."</td>";
echo "<td>" . $row['estado_sup']   ."</td>";
echo "<td>" . $row['municipio_sup']   ."</td>";
echo "<td>" . $row['localidad_sup']        ."</td>";
echo "<td>" . $row['calle_sup']  ."</td>";
echo "<td>" . $row['cod_calle']  ."</td>";
echo "<td>" . $row['cod_post']  ."</td>";
echo "<td>" . $row['fechanac_sup']   ."</td>";
echo "<td>" . $row['genero']      ."</td>";
echo "<td>" . $row['edo_civil']  ."</td>";
echo "<td>" . $row['telefono_sup']   ."</td>";
echo "<td>" . $row['estatus']      ."</td>";
echo "<td>" . $row['fechaalta_sup'] ."</td>";
echo "<td>" . $row['fechabaja_sup'] ."</td>";

echo "<td><a href='../Metodos/editar_empleado.php?id=".$row['id_suplente']."'><img src=' ../Docs/Iconos/icons8-Edit-32.png' alt='Editar'></a></td>";
echo "<td><a href='../Metodos/imprimir_suplente.php?id=".$row['id_suplente']."' target='_blank' rel='noopener noreferrer'><img src=' ../Docs/Iconos/icons8-Print-32.png' alt='Imprimir' ></a></td>";
echo "</tr>";
}
echo "</table>";

?>

</table>
</div>
</body>
</html> 