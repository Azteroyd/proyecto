<?php 
	session_start();
	$folioreq = $_POST['folio_req'];
	$numplaza = $_POST['num_plaza'];
	$depen = $_POST['nom_depe'];
	$codumed = $_POST['cod_umed'];
	$nomumed = $_POST['nom_umed'];
	$fechaini = $_POST['fecha_ini'];
	$fechacon = $_POST['fecha_con'];
	$diascon = $_POST['dias_con'];
	$refrequi = $_POST['ref_requi'];
	$espotro = $_POST['esp_otro'];
	$nomcont = $_POST['nom_cont'];
	$RFC = $_POST['rfc'];
	$nomasup = $_POST['nom_asup'];
	$iseclave = $_POST['ise_clave'];
	$sex = $_POST['sexo'];
	$nompuesto = $_POST['nom_puesto'];
	$niv = $_POST['nivel'];
	$rang = $_POST['rango'];
	$horaent = $_POST['horario_ent'];
	$horasal = $_POST['horario_sal'];
	$turn = $_POST['turno'];
	$obser = $_POST['observaciones'];
	$clazz = $_POST['clasi'];
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


		include_once 'conexion.php'; 
		$con = conexion();

			$ingresar ="INSERT INTO tbl_formato (folio_req, num_plaza, depen, cod_umed,nom_umed, fecha_ini, fecha_con, dias_con, ref_requi, esp_otro, nom_cont, rfc, nom_asup, ise_clave,sexo, nom_puesto, nivel, rango, horario_ent, horario_sal, turno,observaciones, clasi, dias_labo, fun_puesto, cono_req, exp_req,resp_cont_uno,resp_cont_dos,jefe_dep,titu_sub,titu_direc,cargo_uno,cargo_dos) values (UPPER('$folioreq', '$numplaza', '$depen', '$codumed','$nomumed', '$fechaini', '$fechacon', '$diascon', '$refrequi', '$espotro', '$nomcont', '$RFC', '$nomasup', '$iseclave','$sex', '$nompuesto', '$niv', '$rang', '$horaent', '$horasal', '$turn','$obser', '$clazz', '$diaslabo', '$funpuesto', '$conoreq', '$expreq','$resp1','$resp2','$jefe','$titu1','$titu2','$cargo1','$cargo2'))";

		$resultado = $con->query($ingresar);

				if ($resultado) {
					echo '<script> alert("El registro fue exitoso");</script>';

				}else{
					echo '<script> alert("Error al registar, intenta más tarde");</script>';

				}

		echo '<a href="impresion.php" target="_blank" rel="noopener noreferrer"> Imprimir </a>';
		echo '<a href="menu.php"> Regresar </a>';
 ?>