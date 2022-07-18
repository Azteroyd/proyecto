<?php
require('../Librerias/fpdf/fpdf.php');
include('../Log/config.php');
$id = $_GET['id'];

$pdf = new FPDF();
///var_dump(get_class_methods($pdf));

$pdf->AddPage();
$pdf->SetFont('Arial','',10);

$pdf->Image('../Docs/Logos/logo2.png',5,0,50,50,'','png');
$pdf->Image('../Docs/Logos/logo3.png',139,18,30,15,'','png');
$pdf->Image('../Docs/Logos/logo1.png',170,18,30,15,'','png');

$pdf->SetXY(90,20);
$pdf->Cell(32,4,'Fecha: '.date('d-m-Y').'',0,"R");
$pdf->Ln(14);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,utf8_decode('Información del suplente'),1,0,'C');

$query="SELECT * FROM tbl_infosuplentes WHERE id_suplente='$id'";
$result = mysqli_query($mysqli, $query);
while($row = mysqli_fetch_array($result)){
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(67,8,utf8_decode('Número de Registro del Suplente'),1,0);
	$pdf->Cell(123,8,$row['id_suplente'],1,1,'C');
	
	$pdf->Cell(67,8,'Nombre(s)',1,0);
	$pdf->Cell(123,8,utf8_decode($row['nombre_sup']),1,1,'C');
	
	$pdf->Cell(67,8,'Apellido Paterno',1,0);
	$pdf->Cell(123,8,utf8_decode($row['apellido_pat']),1,1,'C');
	
	$pdf->Cell(67,8,'Apellido Materno',1,0);
	$pdf->Cell(123,8,utf8_decode($row['apellido_mat']),1,1,'C');
	
	$pdf->Cell(67,8,utf8_decode('Clave CURP'),1,0);
	$pdf->Cell(123,8,$row['curp_sup'],1,1,'C');
	
	$pdf->Cell(67,8,utf8_decode('RFC (Con Homoclave)'),1,0);
	$pdf->Cell(123,8,$row['rfc_sup'],1,1,'C');

	$pdf->Cell(67,8,utf8_decode('Clave ISSEMYM'),1,0);
	$pdf->Cell(123,8,$row['clave_isesup'],1,1,'C');

	$pdf->Cell(67,8,utf8_decode('Estado de Residencia'),1,0);
	$pdf->Cell(123,8,utf8_decode($row['estado_sup']),1,1,'C');

	$pdf->Cell(67,8,utf8_decode('Municipio'),1,0);
	$pdf->Cell(123,8,utf8_decode($row['municipio_sup']),1,1,'C');

	$pdf->Cell(67,8,utf8_decode('Localidad'),1,0);
	$pdf->MultiCell(123,8,utf8_decode($row['localidad_sup']),1,'C');

	$pdf->Cell(67,8,utf8_decode('Calle'),1,0);
	$pdf->Cell(123,8,$row['calle_sup'],1,1,'C');

	$pdf->Cell(67,8,utf8_decode('Numero Interior o Exterior'),1,0);
	$pdf->MultiCell(123,8,utf8_decode($row['cod_calle']),1,'C');

	$pdf->Cell(67,8,utf8_decode('Código Postal'),1,0);
	$pdf->MultiCell(123,8,utf8_decode($row['cod_post']),1,'C');

	$pdf->Cell(67,8,utf8_decode('Fecha de Nacimiento'),1,0);
	$pdf->MultiCell(123,8,utf8_decode($row['fechanac_sup']),1,'C');

	$pdf->Cell(67,8,utf8_decode('Genero'),1,0);
	$pdf->MultiCell(123,8,utf8_decode($row['genero']),1,'C');

	$pdf->Cell(67,8,utf8_decode('Estado Civil'),1,0);
	$pdf->MultiCell(123,8,utf8_decode($row['edo_civil']),1,'C');

	$pdf->Cell(67,8,utf8_decode('Numero de Telefono'),1,0);
	$pdf->MultiCell(123,8,utf8_decode($row['telefono_sup']),1,'C');

	$pdf->Cell(67,8,utf8_decode('Estatus'),1,0);
	$pdf->MultiCell(123,8,utf8_decode($row['estatus']),1,'C');

	$pdf->Cell(67,8,utf8_decode('Fecha de Alta'),1,0);
	$pdf->MultiCell(123,8,utf8_decode($row['fechaalta_sup']),1,'C');

	$pdf->Cell(67,8,utf8_decode('Fecha de Baja'),1,0);
	$pdf->MultiCell(123,8,utf8_decode($row['fechabaja_sup']),1,'C');

}

$pdf->Output();
?>

