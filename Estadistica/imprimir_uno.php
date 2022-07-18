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

			<label><h3> Variables de Recepción y Tramite de Contrataciones de Personal Suplente </h3></label>
		</header>
	<div class="">
	<table border="0" cellspacing="0" cellpadding="0" class="tabla" style="border: 1px solid black; border-collapse: collapse;">
		<tr>
			<th><font face="Arial"> Folio de Requisición</font></th>
			<th><font face="Arial"> Numero de Plaza</font></th>
			<th><font face="Arial"> Nombre de la Dependencia Medica</font></th>
			<th><font face="Arial"> Código de la Unidad Medico Administrativa</font></th>
			<th><font face="Arial"> Nombre de la Unidad Medico Administrativa</font></th>
			<th><font face="Arial"> Nombre del Contratado</font></t>
			<th><font face="Arial"> Personal de Base</font></th>
			<th><font face="Arial"> RFC (con homoclave)</font></th>
			<th><font face="Arial"> Clave del Contratado</font></th>
			<th><font face="Arial"> Fecha de Inicio de Contratación</font></th>
			<th><font face="Arial"> Fecha de Termino de Contratación</font></th>
			<th><font face="Arial"> Número de Dias Contratados</font></th>
			<th><font face="Arial"> Turno</font></th>
			<th><font face="Arial"> Referencia</font></th>
			<th><font face="Arial"> (Especificar)Otro</font></th>
			<th><font face="Arial"> Clasificación</font></th>
			<th><font face="Arial"> Categoria<	/font></th>
			<th><font face="Arial"> Nivel </font></th>
			<th><font face="Arial"> Rango </font></th>
		</tr>
	<?php 
		Include 'conexion.php';
		$con=conexion();

	$query = 'SELECT * FROM tbl_formato';


	if ($res = mysqli_query($con,$query)) {
		while ($row = mysqli_fetch_assoc($res)) {
			$name = $row['folio_req'];
			$name1 = $row['num_plaza'];
			$name2 = $row['depen'];
			$name3 = $row['cod_umed'];
			$name4 = $row['nom_umed'];
			$name5 = $row['nom_cont'];
			$name7 = $row['nom_asup'];
			$name8 = $row['rfc'];
			$name9 = $row['ise_clave'];
			$name10 = $row['fecha_ini'];
			$name11 = $row['fecha_con'];
			$name12 = $row['dias_con'];
			$name13 = $row['turno'];
			$name14 = $row['ref_requi'];
			$name15 = $row['esp_otro'];
			$name16 = $row['clasi'];
			$name17 = $row['nom_puesto'];
			$name18 = $row['nivel'];
			$name19 = $row['rango'];

		echo '<tr>
				<td>'.$name.'</td>
				<td>'.$name1.'</td>
				<td>'.$name2.'</td>
				<td>'.$name3.'</td>
				<td>'.$name4.'</td>
				<td>'.$name5.'</td>
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
				<td>'.$name19.'</td>

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
