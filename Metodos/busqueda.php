<?php
if ($_POST) {
require('conexion.php');
	include("../session.php");	
	$con=conexion();

	$buscar = $_POST['value'];
	$sql = "SELECT * FROM tbl_infosuplentes WHERE rfc_sup = :value OR clave_isesup = :value";
	$estado = $con->prepare($sql);
	$resul = $estado->execute(array(':value'=>$buscar));
	
	$row = $estado->fetchAll(\PDO::FETCH_OBJ);
	if (count($row)) {
		echo '<script> alert("El Suplente Ya Esta Registrado! :D Puede continuar...");</script>';
		echo '<script> window.location="../formato.php"; </script>';
	}else{
		echo '<script> alert("No Se Encontro Ningun Registro, Por Favor Registre al Suplente!");</script>';
			echo '<script> window.location="../per_suplente.php"; </script>';
	}
}
?> 