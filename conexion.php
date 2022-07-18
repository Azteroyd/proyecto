<?php
function conexion(){
	$conexion = null;
	$host = 'localhost';
	$db = 'formulario';
	$user = 'root';
	$pwd = '';

	try{
		$conexion =  new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
	}
	catch(PDOException $e){
		echo "<p> No se pudo conectar a la base de datos...</p>";
		exit;
	}
        return $conexion;
  }
 ?>
