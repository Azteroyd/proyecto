<?php
	require ('conexion_dos.php');
	$con = conexion();
	
	$id_clas = $_POST['id_ClasPuesto'];
	
	$queryP = "SELECT id_puesto, nom_puesto, nivel, tipo_puesto  FROM tbl_puestos WHERE num_puesto = '$id_clas' ORDER BY nom_puesto ASC";
	$resultadoP = mysqli_query($con,$queryP);
	
	$html= "<option disabled selected>Selecciona el Puesto</option>";
	
	while($rowP = $resultadoP->fetch_assoc())
	{
		$obLavel = $rowP['nivel'];
		$obPuesto = $rowP['nom_puesto'];
		$html.= "<option value = ".$obLavel." id = 'aux'>".$rowP['nom_puesto']."</option>";
	}
	

	echo $html;
?>


<?php 

	
?>