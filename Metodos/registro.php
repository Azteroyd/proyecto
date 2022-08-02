<?php 
	session_start();
	$folioreq = $_POST['folio_req'];
	$numplaza = $_POST['num_plaza'];
	$nomcord = $_POST['NombreCor'];
	$codumed = $_POST['auxcoden'];
	$nomumed = $_POST['auxNU'];
	$fechaini = $_POST['fecha_ini'];
	$fechacon = $_POST['fecha_con'];
	$diascon = $_POST['dias_con'];
	$refrequi = $_POST['ref_requi'];
	$espotro = $_POST['esp_otro'];
	$nomcont = $_POST['ape_uno'].$_POST['ape_dos'].$_POST['nombre'];
	$RFC = $_POST['rfc'];
	$nomasup = $_POST['nom_asup'];
	$iseclave = $_POST['clave_ise'];
	$sex = $_POST['gen'];
	$nompuesto = $_POST['nombrePuestoAux'];
	$niv = $_POST['nom_puesto'];
	$rang = $_POST['rango'];
	$horaent = $_POST['horario_ent'];
	$horasal = $_POST['horario_sal'];
	$turn = $_POST['turno'];
	$obser = $_POST['observaciones'];
	$clazz = $_POST['othertest'];
	$diaslabo = $_POST['dias_labo'];
	$funpuesto = $_POST['fun_puesto'];
	$conoreq = $_POST['cono_req'];
	$expreq = $_POST['exp_req'];
	$resp1 = $_POST['resp_cont_uno'];
	$resp2 = $_POST['resp_cont_dos'];
	$jefe = $_POST['jefe_dep'];
	$titu1 = $_POST['titu_sub'];
	$titu2 = $_POST['titu_direc'];
	$cargo1 = $_POST['cargo'];
	$cargo2 = $_POST['cargodos'];

		include_once 'conexion_dos.php'; 
		$con = conexion();

			$ingresar ="INSERT INTO tbl_formato (
				folio_req, 
				num_plaza, 
				cordinacion, 
				cod_umed, 
				nom_umed, 
				fecha_ini, 
				fecha_con, 
				dias_con, 
				ref_requi, 
				esp_otro, 
				nom_cont, 
				rfc, 
				nom_asup, 
				ise_clave, 
				genero, 
				nom_puesto, 
				nivel, 
				rango, 
				horario_ent, 
				horario_sal, 
				turno, 
				observaciones, 
				clasi, 
				dias_labo, 
				fun_puesto,
				cono_req, 
				exp_req, 
				resp_cont_uno, 
				resp_cont_dos, 
				jefe_dep, 
				titu_sub, 
				titu_direc, 
				cargo_uno, 
				cargo_dos) values('$folioreq', '$numplaza', '$nomcord', '$codumed', '$nomumed', '$fechaini', '$fechacon', '$diascon', '$refrequi', '$espotro', '$nomcont', '$RFC', '$nomasup', '$iseclave','$sex', '$nompuesto', '$niv', '$rang', '$horaent', '$horasal', '$turn','$obser', '$clazz', '$diaslabo', '$funpuesto', '$conoreq', '$expreq','$resp1','$resp2','$jefe','$titu1','$titu2','$cargo1','$cargo2')";

		$resultado = $con->query($ingresar);

				if ($resultado) {
					echo '<script> alert("El registro fue exitoso");</script>';
					//echo '<script> window.location="../Metodos/impresion.php"; </script>';
					echo '<a href="impresion.php" target="_blank" rel="noopener noreferrer"> Imprimir </a>';

				}else{
					echo '<script> alert("Error al registar, intenta más tarde");</script>';
					//echo '<script> window.location="../formato.php"; </script>';

				}
 ?>
 <!-- 33, 32 -->