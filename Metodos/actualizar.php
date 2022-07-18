<?php
include("../Estadistica/config.php");
include("../session.php");

$id = $_POST['id'];
$nuevo_estatus = $_POST['nuevo_estatus'];
$baja = $_POST['fecha_baja'];

$sql = "UPDATE tbl_infosuplentes SET estatus='$nuevo_estatus',fechabaja_sup='$baja' WHERE id_suplente = '$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Estatus actualizado exitósamente");';
	echo 'window.location="../Estadistica/empleados.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de actualización de registro!");'; 
	echo 'window.location="../Estdistica/empleados.php";';
	echo '</script>';
}
?>