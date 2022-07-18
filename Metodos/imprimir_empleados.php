<?php
ob_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Imprimir Todo</title>
</head>
<meta charset="utf-8">
<style type="text/css">
	table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
	border:0.5px solid black;
    text-align: center;
    font-size: 8pt;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
	text-align: center;
    background-color: #E0FFFF;
    color: black;
}
header {
    background-color: #BDC3C7;
    height: 80px;
    width: 100%;
    top: 0;
    left: 0;

    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

img{
    height: auto;
    width: auto;
    max-height: 70px;
    max-width: 200px;               
}

.img1{
    position: absolute;
    left:1045px;
    bottom: 1px;
}
.img2{
    position: absolute;
    left:10px;
    bottom: 1px;
}
.img3{
    position: absolute;
    left:830px;
    bottom: 1px;
}
label{
	position: absolute;
    left:230px;
    bottom: 1px;
}
</style>
<body>
		<header>
			<img src="../Docs/Logos/logo1.png" alt="image 1" class="img1">
			<img src="../Docs/Logos/logo6.png" alt="image 2" class="img2">
			<img src="../Docs/Logos/logo3.png" alt="image 3" class="img3">

			<label><h3> Información General y Domiciliaria del Personal Suplente </h3></label>
		</header>
	<div class="">
	<table border="0" cellspacing="0" cellpadding="0" class="tabla" style="border: 1px solid black; border-collapse: collapse;">
		<tr>
			<th><font face="Arial"> Num. de Registro</font></th>
			<th><font face="Arial"> Nombre(s) </font></th>
			<th><font face="Arial"> Apellido Paterno </font></th>
			<th><font face="Arial"> Apellido Materno</font></th>
			<th><font face="Arial"> Clave CURP </font></th>
			<th><font face="Arial"> RFC (Con Homoclave)</font></t>
			<th><font face="Arial"> Clave ISSEMYM</font></th>
			<th><font face="Arial"> Entiad Federativa</font></th>
			<th><font face="Arial"> Municipio</font></th>
			<th><font face="Arial"> Localidad</font></th>
			<th><font face="Arial"> Calle</font></th>
			<th><font face="Arial"> Código int/ext de la calle</font></th>
			<th><font face="Arial"> Código Postal</font></th>
			<th><font face="Arial"> Fecha de Nacimiento</font></th>
			<th><font face="Arial"> Genero</font></th>
			<th><font face="Arial"> Estado Civil</font></th>
			<th><font face="Arial"> Telefono o Celular</font></th>
			<th><font face="Arial"> Estatus</th>
			<th><font face="Arial"> Fecha de Alta </font></th>
			<th><font face="Arial"> Fecha de Baja </font></th>
		</tr>
	<?php 
		Include 'conexion_dos.php';
		$con=conexion();

	$query = 'SELECT * FROM tbl_infosuplentes';


	if ($res = mysqli_query($con,$query)) {
		while ($row = mysqli_fetch_assoc($res)) {
			$name0 = $row['id_suplente'];
			$name = $row['nombre_sup'];
			$name1 = $row['apellido_pat'];
			$name2 = $row['apellido_mat'];
			$name3 = $row['curp_sup'];
			$name4 = $row['rfc_sup'];
			$name5 = $row['clave_isesup'];
			$name6 = $row['estado_sup'];
			$name7 = $row['municipio_sup'];
			$name8 = $row['localidad_sup'];
			$name9 = $row['calle_sup'];
			$name10 = $row['cod_calle'];
			$name11 = $row['cod_post'];
			$name12 = $row['fechanac_sup'];
			$name13 = $row['genero'];
			$name14 = $row['edo_civil'];
			$name15 = $row['telefono_sup'];
			$name16 = $row['estatus'];
			$name17 = $row['fechaalta_sup'];
			$name18 = $row['fechabaja_sup'];

		echo '<tr>
				<td>'.$name0.'</td>
				<td>'.$name.'</td>
				<td>'.$name1.'</td>
				<td>'.$name2.'</td>
				<td>'.$name3.'</td>
				<td>'.$name4.'</td>
				<td>'.$name5.'</td>
				<td>'.$name6.'</td>
				<td>'.$name7.'</td>
				<td>'.$name8.'</td>
				<td>'.$name9.'</td>
				<td>'.$name10.'</td>
				<td>'.$name11.'</td>
				<td>'.$name12.'</td>
				<td>'.$name13.'</td>
				<td>'.$name14.'</td>
				<td>'.$name15.'</td>
				<td>'.$name16.'</td>
				<td>'.$name17.'</td>
				<td>'.$name18.'</td>

			</tr>';
		}
		$res->free();
	}
	?>
</table>
</div>

</body>
</html>

<?php
$html=ob_get_clean();

require_once '../Librerias/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnable' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);
$dompdf->setPaper('Legal','landscape');
$dompdf->render();
$dompdf->stream("Reporte_.pdf",array("Attachment" =>false));

?>
