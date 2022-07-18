<?php require ('conexion_dos.php'); $con=conexion();?>

<!DOCTYPE html>
<html>
<head>
	<title>Formato de requisición</title>
</head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./CSS/formula.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
  </script>
<script type="text/javascript" src="js/funciones.js"> </script>
<body>
	<header class="header">
			<img src="docs/logos/logo1.png" alt="image 1" class="img1">
			<img src="docs/logos/logo6.png" alt="image 2" class="img2">
			<img src="docs/logos/logo3.png" alt="image 3" class="img3">

			<a href="per_suplente.php"> <button> Busqueda de Suplente </button> </a>
			<a href="menu_uno.php" ><button> Salir a Menú </button> </a>	
	</header>

<div class="grup">
<!-- Formulario -->		
<form action="./Metodos/registro.php" method="POST" autocomplete="on" id="form">
<!-Encabezado--><h2><em>REQUISICIÓN DE PERSONAL EVENTUAL</em></h2>
<!--
<form action="" method="POST" class="search">
<input type="search" name="valueToSearh" placeholder="Búsqueda" autocomplete="off">
 <a href="llenar.php">Buscar</a>
</form> -->

<center>
				<div>
					<div class="caja">
						<label for="folio_req"><font size="0.7"> 1/</font> Folio de Requisición </label>
      					<input type="text" name="folio_req" class="form-input" id="folio_req" required/>
      				</div>

      				<div class="caja">
      					<label for="num_plaza"><font size="0.7">2/</font> Numero de Plaza </label>
      					<input type="number" name="num_plaza" class="form-input" required/>
      				</div>
				</div>
</center>

<center>
				<div>
<!--Titulo -->		<div class="titulo"><b> <font size="3"><font size="0.7">4/</font> CORDINACIONES</font></b></div>


<!---------------------------------------------------------------------->
<div class="caja">
<?php

	$query = "SELECT id_cord, nom_cord FROM tbl_cordinaciones ORDER BY nom_cord";
	$resultado = mysqli_query($con,$query);
?>
      					<select name="nom_cord" id="nom_cord" style="width: 550px; height: 25px;">
      						<option value="0">Seleccionar Coordinación</option>
<?php while ($row = $resultado->fetch_assoc()) { ?>
	<option value="<?php echo $row ['id_cord']; ?>"> <?php echo $row['nom_cord']; ?></option>
<?php } ?>
</select>
</div>
<!---------------------------------------------------------------------->


				</div>
</center>

<center>
				<div>
<!--Titulo -->		<div class="titulo"><b> <font size="3"><font size="0.7">5/</font> CODIGO Y NOMBRE COMPLETO DE LA UNIDAD MEDICA O ADMINISTRATIVA</font></b></div>

						<div class="caja">
							<select name="nom_umed" id="nom_umed" style="width: 600px; height: 25px;"></select>
      					</div>

      					
				</div>
</center>

<center>
				<div>
<!--Titulo -->		<div class="titulo"><b> <font size="3">6/PERIODO DE CONTRATACIÓN DEL PERSONAL EVENTUAL</font> </b></div>

						<div class="caja">
							<label for="fecha_ini"><font size="0.7">7/</font> Fecha de Inicio de Contratación </label>
      						<input type="date" name="fecha_ini" class="form-input" required/>
      					</div>

      					<div class="caja">
      						<label for="fecha_con"><font size="0.7">8/</font> Fecha de termino de contratación </label>
      						<input type="date" name="fecha_con" class="form-input" required/>
      					</div>

      					<div class="caja">
      						<label for="dias_con"><font size="0.7">9/</font> Número de días de contratación </label>
      						<input type="number" name="dias_con" class="form-input" required/>
      					</div>

      					<div class="caja">
      						<label for="ref_requi"><font size="0.7">10/</font> Referencia para la Requisición </label>
      						<select name="ref_requi" class="opcdos" style="width: 260px; height: 25px;">
      							<?php 

									$query = 'SELECT * FROM tbl_referequi';
									$res = mysqli_query($con,$query);
									while ($row = mysqli_fetch_array($res)) {
									$ref_requi=$row['tipo_requi'];
									?>
									<option value="<?php echo $ref_requi ?>"><?php echo $ref_requi ?></option>
									<?php } ?>
      						</select>
      					</div>

      					<div class="caja">
      						<label for="esp_otro">Especifique Clausula Sindical </label>
      						<input type="text" name="esp_otro" class="form-input" required/>
      					</div>
				</div>
</center>

<center>
<!--Titulo -->	<div class="titulo"><b> <font size="3">DATOS DEL CONTRATADO EVENTUAL Y DE LA PERSONA A QUIEN SUPLE</font></b></div>
					<!--Campo Documento-->
        			<div class="caja">
          				<label for="doc"> Introduzca la Clave ISSEMYM para llenar los campos!!!</label>
          				<input type="text" name="doc" class="form-input" id="doc" onblur="buscar_datos();">
        			</div>
<br>					
					<div class="caja">
						<label for="nom_cont"><font size="0.7">11/</font> Nombre completo de la contratada o contratado </label>
						<input type="text" name="ape_uno" class="form-input" id="ape_uno">
						<input type="text" name="ape_dos" class="form-input" id="ape_dos">
						<input type="text" name="nombre" class="form-input" id="nombre">
      				</div>

<br>
					<div class="caja">
      						<label for="rfc"><font size="0.7">12/</font> RFC <font size="0.5">(con homoclave)</font> </label>
      						<input type="text" name="rfc" class="form-input" id="rfc" />
					</div>

					<div class="caja">
      						<label for="ise_clave"><font size="0.7">14/</font> Clave ISSEMYM <font size="0.5">(10 digitos) </font></label>
      						<input type="number" name="clave_ise" class="form-input" id="clave_ise" />
      				</div>
<br>
					<div class="caja" style="display: none;">
      						<label for="genero">Genero </label>
      						<input type="text" name="gen" id="gen" class="form-input" required/>
					</div>
<br>
					<div class="caja">
      						<label for="nom_asup"><font size="0.7">13/</font> Nombre completo de la persona a quien suple </label>
      						<input style="height: 25px; width: 600px;" type="text" name="nom_asup" class="form-input" required/>
					</div>
</center>

<center>
<!--Titulo -->	<div class="titulo"><b> <font size="3">DATOS DEL PUESTO </font> </b></div>

<!---------------------------------------------------------------------->
<div class="caja">
	<?php
	
	$query = "SELECT id_ClasPuesto, clasificacion FROM tbl_claspuesto ORDER BY clasificacion ASC";
	$resultado = mysqli_query($con,$query);
	?>
<label for="clasi"><font size="0.7">20/</font> Clasificación </label>

<select name="clasificacion" id="clasificacion" style="width: 200px; height: 25px;">
<option value="0">Seleccionar la Clasificación</option>

<?php while ($row = $resultado->fetch_assoc()) { ?>
	<option value="<?php echo $row ['id_ClasPuesto']; ?>"> <?php echo $row['clasificacion']; ?></option>
<?php } ?>
</select>
      					
</div>
<!---------------------------------------------------------------------->

<div class="caja">
<label for="clasi"><font size="0.7">15/</font> Nombre del Puesto </label>
	<select name="nom_puesto" id="nom_puesto" style="width: 330px; height: 25px;"></select>
</div>

<br>      					 
<div class="caja">
							<label for="clasi"><font size="0.7">16/</font> Nivel </label>
      						<input style="width: 50px; height: 25px;" type="int" name="" class="form-input" id="nivel" required />
</div>


					<div class="caja">
      					<label for="rango"><font size="0.7">17/</font>Rango </label>
      					<input type="number" name="rango" class="form-input" required style="width: 50px; height: 25px;"/>
					</div>

					<div class="caja">
      					<label for="horario"><font size="0.7">18/</font>Horario </label>
      					<input type="time" name="horario_ent" class="form-input" required/>
      					<input type="time" name="horario_sal" class="form-input" required/>
					</div>
<br>
<br>
					<div class="caja">
      					<label for="turno"><font size="0.7">19/</font> Turno </label>
      					<select name="turno" class="opctres" style="width: 200px; height: 25px;">
      						<?php 

									$query = 'SELECT * FROM tbl_turnos';
									$res = mysqli_query($con,$query);
									while ($row = mysqli_fetch_array($res)) {
									$turno=$row['nom_turno'];
									?>
									<option value="<?php echo $turno ?>"><?php echo $turno ?></option>
									<?php } ?>
      					</select>
					</div>

					

					<div class="caja">
      					<label for="dias_labo"><font size="0.7">21/</font> Dias laborales</label>
      					<select name="dias_labo" class="opctres" style="width: 155px; height: 25px;">
      						<?php 

									$query = 'SELECT * FROM tbl_dias';
									$res = mysqli_query($con,$query);
									while ($row = mysqli_fetch_array($res)) {
									$dias_labo=$row['dias_labo'];
									?>
									<option value="<?php echo $dias_labo ?>"><?php echo $dias_labo ?></option>
									<?php } ?>
      					</select>
					</div>
<br>
<br>					
					<div class="caja">
      					<label for="observaciones"> <font size="0.7">32/</font> Observaciones </span></label>
      					<textarea style="height: 75px; width: 600px;" type="text" name="observaciones" class="form-input"></textarea>
					</div>
<br>					
					<div class="caja">
      					<label for="fun_puesto"> <font size="0.7">22/</font> Funciones especificas del puesto </span></label>
      					<!--<input style="height: 100px; width: 800px;" type="text" name="fun_puesto" class="form-input" required/>-->
      					<textarea style="height: 75px; width: 600px;" type="text" name="fun_puesto" class="form-input"></textarea>
					</div>
<br>
					<div class="caja">
      					<label for="cono_req"><font size="0.7"> 23/</font>Conocimientos requeridos </label>
      					<!-- <input type="text" name="cono_req" class="form-input" required/> -->
      					<textarea style="height: 75px; width: 600px;" type="text" name="cono_req" class="form-input"></textarea>
					</div>
<br>
					<div class="caja">
      					<label for="exp_req"><font size="0.7">24/</font>Experiencia requerida </label>
      					<input type="text" name="exp_req" class="form-input" required/>
      				</div>
<br>
<br>					
					<div class="caja">
      					<label  for="resp_cont_uno"><font size="0.7">35/</font>Responsable de la contratación 1.-</label>
      					<input style="height: 25px; width: 600px;" type="text" name="resp_cont_uno" class="form-input" required/>
      					<label  for="cargo">Cargo del responsable 1.-</label>
      					<input style="height: 25px; width: 600px;" type="text" name="cargo" class="form-input" required/>
      				</div>
<br>
      				<div class="caja">
      					<label for="resp_cont_dos"><font size="0.7">36/</font>Responsable de la contratación 2.-</label>
      					<input style="height: 25px; width: 600px;" type="text" name="resp_cont_dos" class="form-input" required/>
      					<label  for="cargodos">Cargo del responsable 2.-</label>
      					<input style="height: 25px; width: 600px;" type="text" name="cargodos" class="form-input" required/>
      				</div>
<br>
      				<div class="caja">
      					<label for="jefe_dep"><font size="0.7">38/</font>Jefa o Jefe del Departamento de Administración de Personal</label>
<br>
      					<select name="jefe_dep" class="opcdos" style="width: 500px; height: 25px;">
      							<?php 

									$query = 'SELECT * FROM tbl_directivos';
									$res = mysqli_query($con,$query);
									while ($row = mysqli_fetch_array($res)) {
									$nom_directivo=$row['nom_directivo'];
									?>
									<option value="<?php echo $nom_directivo ?>"><?php echo $nom_directivo ?></option>
									<?php } ?>
									<option value="" selected="" disabled="">Nombres Disponibles</option>
      						</select>
      				</div>
<br>
      				<div class="caja">
      					<label for="titu_sub"><font size="0.7">39/</font>Titular de la Subdirección de Personal</label>
<br>
      					<select name="titu_sub" class="opcdos" style="width: 500px; height: 25px;">
      							<?php 

									$query = 'SELECT * FROM tbl_directivos';
									$res = mysqli_query($con,$query);
									while ($row = mysqli_fetch_array($res)) {
									$nom_directivo=$row['nom_directivo'];
									?>
									<option value="<?php echo $nom_directivo ?>"><?php echo $nom_directivo ?></option>
									<?php } ?>
									<option value="" selected="" disabled="">Nombres Disponibles</option>
      						</select>
      				</div>
<br>
      				<div class="caja">
      					<label for="titu_direc"><font size="0.7">40/</font> Titular de la Dirección de Administración y Desarrollo de Personal</label>
<br>
      					<select name="titu_direc" class="opcdos" style="width: 500px; height: 25px;">
      							<?php 

									$query = 'SELECT * FROM tbl_directivos';
									$res = mysqli_query($con,$query);
									while ($row = mysqli_fetch_array($res)) {
									$nom_directivo=$row['nom_directivo'];
									?>
									<option value="<?php echo $nom_directivo ?>"><?php echo $nom_directivo ?></option>
									<?php } ?>
									<option value="" selected="" disabled="">Nombres Disponibles</option>
      						</select>
      				</div>

					<center> 
<!-- Boton Enviar --><input class="form-btn" name="submit" type="submit" value="Enviar" />
<!-- Boton Nuevo --><input class="form-btn" name="submit" type="reset" value="Borrar" />
					</center>
</center>
			</div>
</form>
	</div>
</body>
</html>

