<?php 
	session_start();
	unset($_SESSION['nombre']);
	echo '<script> alert("La Sesión a Finalizado.");</script>';
	echo '<script> window.location="../index.php"; </script>';
	session_destroy();
 ?>