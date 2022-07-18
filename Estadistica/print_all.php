<?php
include('config.php');
include_once('PDF.php');

$pdf = new FPDF('L','mm','Legal');
///var_dump(get_class_methods($pdf));

/**************************/

/**************************/

$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,10,'Date:'.date('d-m-Y').'',0,"R");

$pdf->Ln(2);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Registros',1,1,"C");

$pdf->SetFont('Arial','B',10);
$pdf->Cell(8,8,'No.',1);
$pdf->Cell(15,8,'No. Plaza',1);
$pdf->Cell(28,8,'Dependencia',1);
$pdf->Cell(32,8,utf8_decode('Unidad Médica'),1);
$pdf->Cell(45,8,'Nombre del Contratado',1);
$pdf->Cell(5,8,'Genero',1);
$pdf->Cell(33,8,'Personal de Base',1);
$pdf->Cell(25,8,'RFC',1);
$pdf->Cell(18,8,'Clave del Contratado',1);
$pdf->Cell(20,8,utf8_decode('Fecha de Contratación'),1);
$pdf->Cell(20,8,utf8_decode('Fecha de Termino de Contratación'),1);
$pdf->Cell(5,8,'Dias Contratados',1);
$pdf->Cell(13,8,'Turno',1);
$pdf->Cell(45,8,'Caegoria',1);
$pdf->Cell(20,8,utf8_decode('Clasificación'),1);

$query="SELECT * FROM tbl_formato";
$result = mysqli_query($mysqli, $query);
$no=0;
while($row = mysqli_fetch_array($result)){
	$no=$no+1;
	$pdf->Ln(8);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(8,8,$no,1);
	$pdf->MultiCell(15,8,utf8_decode($row['num_plaza']),1);
	$pdf->MultiCell(28,8,$row['depen'],1);
	$pdf->MultiCell(32,8,$row['nom_umed'],1);
	$pdf->MultiCell(45,8,$row['nom_cont'],1);
	$pdf->MultiCell(5,8,$row['sexo'],1);
	$pdf->MultiCell(33,8,$row['nom_asup'],1);
	$pdf->MultiCell(25,8,$row['rfc'],1);
	$pdf->MultiCell(18,8,$row['ise_clave'],1);
	$pdf->MultiCell(20,8,$row['fecha_ini'],1);
	$pdf->MultiCell(20,8,$row['fecha_con'],1);
	$pdf->MultiCell(5,8,$row['dias_con'],1);
	$pdf->MultiCell(13,8,$row['turno'],1);
	$pdf->MultiCell(45,8,$row['nom_puesto'],1);
	$pdf->MultiCell(20,8,$row['clasi'],1);

}
$pdf->Output();
?>