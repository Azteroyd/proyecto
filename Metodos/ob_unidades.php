<?php
	
	require ('conexion_dos.php');
	$con = conexion();
	
	$id_cord = $_POST['id_cord'];
	
	$queryU = "SELECT id_unidad, codigo, nom_unidad, tipo_uni  FROM tbl_unidades WHERE tipo_uni = '$id_cord' ORDER BY nom_unidad ASC";
	$resultadoU = mysqli_query($con,$queryU);
	
	$html= "<option value='0'>Selecciona la Unidad</option>";
	
	while($rowU = $resultadoU->fetch_assoc())
	{
		$html.= "<option>".$rowU['nom_unidad']."</option>";
		//$html.="<input>".$rowU['codigo']."</input>"
	}
	
	echo $html;
?>