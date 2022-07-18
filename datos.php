<?php 
	include('conexion_dos.php');
  $conexion=conexion();

	if(isset($_POST['buscar']))
	{
		$doc= $_POST['doc'];
		$datos = array();
		$datos['existe'] = "0";

		$resultados = mysqli_query($conexion,"SELECT nombre_sup, apellido_pat, apellido_mat, rfc_sup, clave_isesup, genero FROM tbl_infosuplentes WHERE clave_isesup = '$doc'");
  		while($consulta = mysqli_fetch_array($resultados))
  		{
  			$datos['existe'] = "1";
  			$datos['nombre_sup'] = $consulta['nombre_sup'];
  			$datos['apellido_pat'] = $consulta['apellido_pat'];
  			$datos['apellido_mat'] = $consulta['apellido_mat'];
  			$datos['rfc_sup'] = $consulta['rfc_sup'];
  			$datos['clave_isesup'] = $consulta['clave_isesup'];
        $datos['genero'] = $consulta['genero'];
 		}

 		$datos = json_encode($datos);
 		echo $datos;
	}
include("cerrar_conexion.php");
 ?>