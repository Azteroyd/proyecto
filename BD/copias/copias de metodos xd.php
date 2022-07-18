	<form>
      						<select name="nom_deper" class="opcuno" style="width: 550px; height: 25px;" id="autosubmit" onchange="this.form.submit()">
      							<?php 
									include_once 'conexion_dos.php';
										$con=conexion();

									$query = 'SELECT * FROM tbl_ubicacion';
									$res = mysqli_query($con,$query);
									while ($row = mysqli_fetch_array($res)) {
									$nom_depe=$row['nom_uni'];
									$tipo=$row['id_ubi'];
									?>
									<option value="<?php echo $tipo ?>"><?php echo $nom_depe ?></option>
									<?php } ?>
									<option value="" selected disabled>Ubicaciones disponibles</option>
							</select>
						</form>







<form>
      						<select name="nom_umed" class="opcuatro" onchange = "this.form.submit()" style="width: 600px; height: 25px;" id="nomUmed">
      							
<?php
include_once 'conexion_dos.php';
$con=conexion();
	
		if(isset($_GET['nom_deper'])){
			$number = $_GET["nom_deper"];
			$query = "SELECT tbl_unidades.nom_unidad, 
			tbl_unidades.codigo,  
			tbl_ubicacion.id_ubi 
			FROM tbl_unidades, tbl_ubicacion WHERE tbl_unidades.tipo_uni='$number' AND tbl_ubicacion.id_ubi='$number'";
			$query2 = 'SELECT * FROM tbl_unidades';
		}									
		
						
		$response = mysqli_query($con,$query);
							while($row = mysqli_fetch_array($response)){

								$NameUnity = $row['nom_cord'];
								$CodeUnity = $row['id_cord'];


								?>
									<option value="<?php echo $CodeUnity; ?>"><?php echo $NameUnity; ?></option>
									<?php } ?>
									<option value="" selected="" disabled="">Unidades Disponibles</option>
      						</select>
      					</form>


      					 <?php 
							 	if(isset($_GET['nom_umed'])){
									 $infofilter = $_GET["nom_umed"];
								 } 
								
							  ?>



<label for="cod_umed"> Codigo de Unidad Médica </label>
      						<input type="int" name="" class="form-input" id="cod_umed"  value = "<?php echo $infofilter;?>" required disabled="" />


      						<form>
      					<select name="clazi" class="opctres" style="width: 150px; height: 25px;" id="autosubmit" onchange="this.form.submit()">
      						<?php 
									include_once 'conexion_dos.php';
										$con=conexion();

									$query = 'SELECT * FROM tbl_claspuesto';
									$res = mysqli_query($con,$query);
									while ($row = mysqli_fetch_array($res)) {
									$classi=$row['clasificacion'];
									$tipo=$row['id_ClasPuesto'];
									?>
									<option value="<?php echo $tipo ?>"><?php echo $classi ?></option>
									<?php } ?>
									<option value="" selected disabled>Opciones</option>
      					</select>
      					</form>


      					<form name="puesto" action="" method="">
      						<select name="nom_puesto" class="opctres" onchange = "this.form.submit()" style="width: 200px; height: 25px;">
      							
							<?php

							if (isset($_GET ['clazi'])) {
								$numero = $_GET["clazi"];
								$query = "SELECT tbl_puestos.nom_puesto,
								tbl_puestos.nivel,
								tbl_claspuesto.id_ClasPuesto 
								FROM tbl_puestos,tbl_claspuesto WHERE tbl_puestos.num_puesto=$numero AND tbl_claspuesto.id_ClasPuesto=$numero";
							$query2 = 'SELECT * FROM tbl_puestos';
						}								
						
							$resp = mysqli_query($con,$query);
							while($row = mysqli_fetch_array($resp)){

								$NamePuesto = $row['nom_puesto'];
								$CodePuesto = $row['nivel'];


								?>
									<option value="<?php echo $CodePuesto; ?>"><?php echo $NamePuesto; ?></option>
									<?php } ?>
									<option value="" selected="" disabled="">Puestos Disponibles</option>
      						</select>
      					</form>
<?php 
							 	if(isset($_GET['nom_puesto'])){
									 $Codefilter = $_GET["nom_puesto"];
								 } 
								
							  ?>


<!--						
					<div class="caja">
						<label for="nom_puesto"><font size="0.7">15/</font> Nombre del puesto </span></label>
      					<select name="nom_puesto" class="opctres" style="width: 360px; height: 25px;">
									<?php 

									$query = 'SELECT * FROM tbl_puestos';
									$res = mysqli_query($con,$query);
									while ($row = mysqli_fetch_array($res)) {
									$nom_puesto=$row['nom_puesto'];
									?>
									<option value="<?php echo $nom_puesto ?>"><?php echo $nom_puesto ?></option>
									<?php } ?>
								</select>
					</div>

					<?php 
							 	if(isset($_GET['nivel'])){
									 $codfilter = $_GET["nivel"];
								 } 
								
							  ?>

      					<div class="caja">
							<label for="nivel"><font size="0.7">16/</font> Nivel </label>
      						<input type="int" name="" class="form-input" id="cod_umed"  value = "<?php echo $codfilter;?>" required disabled="" />
      					</div>
-->

<div class="caja">
<label for="cod_umed"> Codigo de Unidad Médica </label>
      						<input type="int" name="cod_umed" id="cod_umed" class="form-input" value=""/>
      					</div>