<?php 
	Include 'conexion.php'
	$con=conexión();

	$query = $msqli->query("SELECT * FROM tbl_formato");
	if ($res = $mysqli->query($query)) {
		while ($row = $result->fetch_assoc()) {
			$name1 = $row['num_plaza'];
			$name2 = $row['depen'];
			$name3 = $row['nom_umed'];
			$name4 = $row['nom_cont'];
			$name5 = $row['nom_asup'];
			$name5 = $row['genero'];
			$name6 = $row['rfc'];
			$name7 = $row['ise_clave'];
			$name8 = $row['fecha_ini'];
			$name9 = $row['fecha_con'];
			$name10 = $row['dias_con'];
			$name11 = $row['turno'];
			$name12 = $row['nom_puesto'];
			$name13 = $row['clasi'];

				echo .$name1'</br>';
				echo .$name2'</br>';
				echo .$name3'</br>';
				echo .$name4'</br>';
				echo .$name5'</br>';
				echo .$name6'</br>';
				echo .$name7'</br>';
				echo .$name8'</br>';
				echo .$name9'</br>';
				echo .$name10'</br>';
				echo .$name11'</br>';
				echo .$name12'</br>';
				echo .$name13'</br>';

		}
		$res->();
	}
?>