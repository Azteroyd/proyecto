<?php 
require('../Librerias/fpdf/fpdf.php');
include('../Log/config.php');
require('../Estadistica/consulta.php');
$id = $_GET['id'];

$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont('Arial','',10);

$pdf->Image('../Docs/Logos/logo2.png',5,0,50,50,'','png');
$pdf->Image('../Docs/Logos/logo3.png',139,18,30,15,'','png');
$pdf->Image('../Docs/Logos/logo1.png',170,18,30,15,'','png');

$pdf->SetXY(90,20);
$pdf->Cell(32,4,'Fecha: '.date('d-m-Y').'',0,"R");
$pdf->Ln(14);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,'Requisicion',1,0,'C');

$query="SELECT * FROM tbl_formato WHERE id_registro='$id'";
$result = mysqli_query($mysqli, $query);
while($row = mysqli_fetch_array($result)){
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(67,8,utf8_decode('Folio de Requisición'),1,0);
	$pdf->Cell(123,8,$row['folio_req'],1,1,'C');
	
	$pdf->Cell(67,8,'Nombre Completo',1,0);
	$pdf->Cell(123,8,utf8_decode($row['nom_cont']),1,1,'C');
	
	$pdf->Cell(67,8,'Persona a quien suplio',1,0);
	$pdf->Cell(123,8,utf8_decode($row['nom_asup']),1,1,'C');
	
	$pdf->Cell(67,8,'Puesto',1,0);
	$pdf->Cell(123,8,utf8_decode($row['nom_puesto']),1,1,'C');
	
	$pdf->Cell(67,8,utf8_decode('Fecha de Inicio de Contratación'),1,0);
	$pdf->Cell(123,8,$row['fecha_ini'],1,1,'C');
	
	$pdf->Cell(67,8,utf8_decode('Fecha de Termino de Contratación'),1,0);
	$pdf->Cell(123,8,$row['fecha_con'],1,1,'C');

	$pdf->Cell(67,8,utf8_decode('RFC (Con Homoclave)'),1,0);
	$pdf->Cell(123,8,$row['rfc'],1,1,'C');

	$pdf->Cell(67,8,utf8_decode('Clave ISSEMYM'),1,0);
	$pdf->Cell(123,8,$row['ise_clave'],1,1,'C');

	$pdf->Cell(67,8,'Genero',1,0);
	$pdf->Cell(123,8,$row['sexo'],1,1,'C');

	$pdf->Cell(67,8,utf8_decode('Unidad Médica o Administrativa'),1,0);
	$pdf->MultiCell(123,8,utf8_decode($row['nom_umed']),1,'C');

	$pdf->Cell(67,8,utf8_decode('Código de Unidad Médica'),1,0);
	$pdf->Cell(123,8,$row['cod_umed'],1,1,'C');

	$pdf->Cell(67,8,utf8_decode('Dependencia Médica'),1,0);
	$pdf->SetFont('Arial','',10);
	$pdf->MultiCell(123,8,utf8_decode($row['depen']),1,'C');
}

$pdf->Output();
 ?>