<?php 
	include_once 'conexion.php';
	$con=conexion();

		$query = "SELECT * FROM tbl_ubicacion"
		$res = mysqli_query($query,$con);
			while ($row = mysqli_fetch_array($res)) {
					$var=$row['nom_uni'];
					//$html.= "<option vale =".$var.">"echo.$var."</option>";
 ?>
