<?php
	
	require ('conexion_dos.php');
	$con = conexion();
	
	$record = $_POST['record'];

	
	$queryU = "SELECT id_unidad, codigo, nom_unidad, tipo_uni  FROM tbl_unidades WHERE tipo_uni = '$record' ORDER BY nom_unidad ASC";
	$resultadoU = mysqli_query($con,$queryU);

	$html= "<option disabled selected>Selecciona la Unidad</option>";

	while($rowU = $resultadoU->fetch_assoc())
	{
		$code = $rowU['codigo'];
		$html .= "<option value = ".$code.">".$rowU['nom_unidad']."</option>";

	}

	echo $html;
?>


