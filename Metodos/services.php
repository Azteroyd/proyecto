<?php 
	include_once 'conexion.php';
	$con=conexion();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nom = htmlspecialchars(trim($_POST["nom_umed"]));

		$sql = "SELECT * FROM tbl_unidades WHERE codigo = '$nom'";
		$res = $mysqli->query($sql);
		$dato = $res->fetch_assoc();

$cod =$dato['cod_umed'];

	echo json_encode(['cod_umed' => $cod]);
	
	}else{
		echo "<p>No se encontro el registro</p>";
	}
 ?>