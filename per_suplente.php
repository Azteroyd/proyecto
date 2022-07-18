<!DOCTYPE html>
<html>
<head>
	<title>Registro de Personal Suplente</title>
</head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./CSS/suple.css">
<body>
	<header>
		<img src="docs/logos/logo1.png" alt="image 1" class="img1">
		<img src="docs/logos/logo6.png" alt="image 2" class="img2">
		<img src="docs/logos/logo3.png" alt="image 3" class="img3">
		<a href="menu_uno.php"> <button>Menú</button></a>
		<a href="formato.php"> <button>Requisicion</button></a>			
	</header>

<center>
<h3>Verifica primero si el suplente ya esta registrado!!!</h3>
<h4>Si NO esta registrado por favor registralo :D</h4>
</center>

	<div class="acomo">
		<form action="./Metodos/busqueda.php" method="POST" autocomplete="on" id="formuno">
			<input type="text" name="value" placeholder="Introduce la Clave ISSEMYM o RFC" autocomplete="off" style="width: 320px;">
			<button type="submit" class="signupbtn" name="buscar" >Buscar</button>
		</form>
	</div>

	<div class="grup">

		<form action="./Metodos/registro_sup.php" method="POST" autocomplete="on" id="formdos">

	<center>	
		<div>
<!--Titulo --><div class="titulo"><b> <font size="3">Ingrese los Datos Generales del Suplente</b></div>	
			<div class="caja">
				<label> Nombre o Nombres </label>
				<input type="text" name="nombre_sup" class="form-input" required placeholder="Ingresa el o los nombre(s)"> 
			</div>
<br>
			<div class="caja">
				<label> Apellidos </label>
				<input type="text" name="apellido_pat" class="form-input" required placeholder="Primer Apellido">
				<input type="text" name="apellido_mat" class="form-input" required placeholder="Segundo Apellido"> 
			</div>
<br>
			<div class="caja">
				<label> Genero </label>
<br>
					<label>Masculino</label>
					<input type="radio" name="genero" class="" style="height: 15px; width: 100px;" value="Masculino" />
<br>
					<label>Femenino</label>
					<input type="radio" name="genero" class="" style="height: 15px; width: 100px;" value="Femenino" />
			</div>
<br>
<br>
			<div class="caja">
				<label> Fecha de Nacimiento </label>
				<input type="date" name="fechanac_sup" class="form-input" required>
			</div>
<br>
			<div class="caja">
				<label> Estado Civil</label>
<br>
					<label>Soltero</label>
					<input type="radio" name="edo_civil" class="" style="height: 15px; width: 100px;" value="Soltero" />
<br>
					<label>Casado</label>
					<input type="radio" name="edo_civil" class="" style="height: 15px; width: 100px;" value="Casado" />
			</div>	
<br>
			<div class="caja">
				<label> Telefono </label>
				<input type="number" name="telefono_sup" class="form-input" required placeholder="Ingresa el numero telefonico">
			</div>
<br>
			<div class="caja">
				<label> Clave CURP</label>
				<input type="text" name="curp_suple" class="form-input" required placeholder="Ingresa la clave CURP">
			</div>

			<div class="caja">
				<label>RFC(Con homoclave)</label>
				<input type="text" name="rfc_sup" class="form-input" required="" placeholder="Ingresa el RFC (con Homoclave)">
			</div>

			<div class="caja">
				<label> Clave ISSEMYM </label>
				<input type="text" name="clave_isesup" class="form-input" required placeholder="Ingresa la clave ISSEMYM a 10 digitos">
			</div>
<br>
			<div class="caja">
				<label> Estatus Laboral </label>
				<br>
					<label>Activo</label>
					<input type="radio" name="estatus_sup" class="" style="height: 15px; width: 100px;" value="Activo" />
					<label> Ingrese la Fecha de Alta </label>
					<input type="date" name="fechaalta_sup"/>
<br>
			</div>

			<div class="caja">
				<input type="hidden" name="fecha_baja" class="form-input">
			</div>
<br>


<!--Titulo --><div class="titulo"><b> <font size="3">Ingrese los Datos Domiciliarios del Suplente</b></div>
			<div class="caja">
				<label>Entidad </label>
				<input type="text" name="estado_sup" class="form-input" required placeholder="Ingresa la Entidad">
			</div>
<br>
			<div class="caja">
				<label> Municipio </label>
				<input type="text" name="municipio_sup" class="form-input" required placeholder="Ingresa el municipio">
			</div>
<br>

			<div class="caja">
				<label> Código postal </label>
				<input type="text" name="cod_post" class="form-input" required placeholder="Ingresa el código postal">
			</div>	
<br>			
			<div class="caja">
				<label>Localidad </label>
				<input type="text" name="localidad_sup" class="form-input" required placeholder="Ingresa la Localidad">
			</div>
<br>
			<div class="caja">
				<label> Calle </label>
				<input type="text" name="calle_sup" class="form-input" required placeholder="Ingresa la Calle">
			</div>
<br>
			<div class="caja">
				<label> Número Interior y/o Exterior</label>
				<input type="text" name="cod_calle" class="form-input" required placeholder="Ingresa el Número">
			</div>		


					<center> 
<!-- Boton Registrar --><input class="form-btn" name="submit" type="submit" value="Registrar"/>
					</center>

		</form>

		</div>
		</center>

	</div>

</body>
</html>