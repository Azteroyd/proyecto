<?php
include("../Log/config.php");
include("session.php");

$id = $_GET['id'];


$sql = "DELETE FROM tbl_infosuplentes WHERE id_suplente='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro eliminado exitósamente");';
	echo 'window.location="../Estadistica/empleados.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="../Estadistica/empleados.php";';
	echo '</script>';
}
?>