<?php
	include("../session.php");
	include("../Estadistica/config.php");
	$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../CSS/edit_sup.css" /> 
</head>
<body>

	<header>
		<img src="../docs/logos/logo1.png" alt="image 1" class="img1">
		<img src="../docs/logos/logo6.png" alt="image 2" class="img2">
		<img src="../docs/logos/logo3.png" alt="image 3" class="img3">
	</header>
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<h2>Actualizar Estatus suplente</h2>
<hr>
<center>
	<a href="../Estadistica/empleados.php"> <button>Regresar</button></a>
</center>

<form action="actualizar.php" method="POST">
  <div class="grup">
    <center>

  <?php
	$result = mysqli_query($mysqli,"SELECT * FROM tbl_infosuplentes WHERE id_suplente ='$id'");
	while($row = mysqli_fetch_array($result))
	{
	echo"<input type='hidden' name='id' value='{$row['id_suplente']}' required>";
	echo "<br>";
	echo "<label>Nuevo estatus para el empleado </label>";
	echo "<br>";
    echo"<input class='form-input' type='text' placeholder='Nuevo Estatus' name='nuevo_estatus' value='{$row['estatus']}' required>";
    echo "<br>";
    echo "<label> Fecha de baja del empleado </label>";
    echo "<br>";
    echo"<input class='form-input' type='date' name='fecha_baja' value='{$row['fechabaja_sup']}' required>";
    

    echo"<div class='clearfix'>";
    echo"<button type='submit' class='signupbtn'>Actualizar</button>";
	echo"</div>";
	}?>
      </center>
    </div>
  </form>
</body>
</html>