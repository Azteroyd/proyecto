<?php 
	session_start();
	$nom_sup = $_POST['nombre_sup'];
	$ape_pat = $_POST['apellido_pat'];
	$ape_mat = $_POST['apellido_mat'];
	$curp =    $_POST['curp_suple'];
	$rfc_sup = $_POST['rfc_sup'];
	$clave_sup = $_POST['clave_isesup'];
	$edo_sup =   $_POST['estado_sup'];
	$muni_sup =  $_POST['municipio_sup'];
	$loc_sup =   $_POST['localidad_sup'];
	$calle_sup = $_POST['calle_sup'];
	$cod_num =   $_POST['cod_calle'];
	$cod_post =  $_POST['cod_post'];
	$fecha_nac = $_POST['fechanac_sup'];
	$sex =       $_POST['genero'];
	$edo =       $_POST['edo_civil'];
	$telef =     $_POST['telefono_sup'];
	$estatus =   $_POST['estatus_sup'];
	$alta =      $_POST['fechaalta_sup'];

		include_once 'conexion.php'; 
		$con = conexion();

			$ingresar ="INSERT INTO tbl_infosuplentes (nombre_sup, apellido_pat, apellido_mat, curp_sup, rfc_sup, clave_isesup, estado_sup, municipio_sup, localidad_sup, calle_sup, cod_calle, cod_post, fechanac_sup, genero, edo_civil, telefono_sup, estatus, fechaalta_sup) values ('$nom_sup', '$ape_pat', '$ape_mat', '$curp', '$rfc_sup', '$clave_sup', '$edo_sup', '$muni_sup', '$loc_sup', '$calle_sup', '$cod_num', '$cod_post', '$fecha_nac', '$sex', '$edo', '$telef','$estatus','$alta')";

		$resultado = $con->query($ingresar);

				if ($resultado) {
					echo '<script> alert("El registro fue exitoso");</script>';
					echo '<script> window.location="../formato.php"; </script>';

				}else{
					echo '<script> alert("Error al registar, intenta más tarde");</script>';
					echo '<script> window.location="../per_suplente.php"; </script>';

				}

		//echo '<a href="../formato.php" target="_blank" rel="noopener noreferrer"> Continuar </a>';//
 ?>