<?php 
	
	require('Librerias/fpdf/fpdf.php');

	/*Sentencia para llamar a los datos*/
	require 'conexion.php';
	$con=conexion();
	$consul = "SELECT * FROM tbl_formato order by id_registro desc  limit 1";
	$res = mysqli_query($con,$consul);

	while ($row = $res->fetch_assoc()) {

	$pdf = new FPDF();
	$pdf->AddPage('portrait','letter');
	
	$pdf ->SetFont('Arial','','10');
	$pdf->Image('Docs/Salida/Formato_vacio.jpg',0,0,215,280,'','jpg');


		$pdf->SetXY(52,26.5);
		$pdf->MultiCell(26,4,utf8_decode($row['folio_req']),0,'C',0);

		$pdf->SetXY(105,26.5);
		$pdf->MultiCell(18,4,utf8_decode($row['num_plaza']),0,'C',0);
		
		$pdf->SetXY(52,38);
		$pdf->MultiCell(158,4,utf8_decode($row['depen']),0,'C',0);
		
		$pdf->SetXY(5,50);
		$pdf->MultiCell(47,4,utf8_decode($row['cod_umed']),0,'C',0);

		$pdf->SetXY(52,50);
		$pdf->MultiCell(158,4,utf8_decode($row['nom_umed']),0,'C',0);


		$pdf->SetXY(67,27);
		$pdf->Write(90,$row['fecha_ini']);

		$pdf->SetXY(111,27);
		$pdf->Write(90,$row['fecha_con']);

		$pdf->SetXY(170,27);
		$pdf->Write(90,$row['dias_con']);

		$pdf->SetXY(78,76);
		$pdf->MultiCell(45,5,utf8_decode($row['ref_requi']),0,'C',0);

		$pdf->SetXY(144,76);
		$pdf->MultiCell(66,4,utf8_decode($row['esp_otro']));

		$pdf->SetXY(5,97);
		$pdf->MultiCell(138,4,utf8_decode($row['nom_cont']),0,'C',0);

		$pdf->SetXY(144,97);
		$pdf->MultiCell(66,4,$row['rfc'],0,'C',0);

		$pdf->SetXY(5,108);
		$pdf->MultiCell(138,4,utf8_decode($row['nom_asup']),0,'C',0);

		$pdf->SetXY(144,108);
		$pdf->MultiCell(66,4,$row['ise_clave'],0,'C',0);

		$pdf->SetXY(5,124);
		$pdf->MultiCell(72,4,utf8_decode($row['nom_puesto']),0,'C',0);

		$pdf->SetXY(85,83);
		$pdf->Write(90,$row['nivel']);

		$pdf->SetXY(110,83);
		$pdf->Write(90,$row['rango']);

		$pdf->SetXY(125,83);
		$pdf->Write(90,$row['horario_ent']);

		$pdf->SetXY(143,83);
		$pdf->Write(90,'A');	

		$pdf->SetXY(150,83);
		$pdf->Write(90,$row['horario_sal']);

		$pdf->SetXY(183,122);
		$pdf->MultiCell(27,5,utf8_decode($row['turno']),0,0);

		
		$pdf->setFont('Arial','',8);
		$pdf->SetXY(144,205);
		$pdf->MultiCell(66,4,utf8_decode($row['observaciones']),0,0);

		$pdf->SetXY(52,132);
		$pdf->MultiCell(52,5,utf8_decode($row['clasi']),0,'C',0);

		$pdf->SetXY(144,132);
		$pdf->MultiCell(66,5,$row['dias_labo'],0,0);

		$pdf->SetXY(5,142);
		$pdf->MultiCell(205,4,utf8_decode($row['fun_puesto']),0,0);

		$pdf->SetXY(5,161);
		$pdf->MultiCell(118,4,utf8_decode($row['cono_req']),0,'C',0);

		$pdf->SetXY(124,163);
		$pdf->setFont('Arial','B',10);
		$pdf->MultiCell(86,4,utf8_decode($row['exp_req']));

		$pdf->setFont('Arial','B',7);
		$pdf->SetXY(5,235);
		$pdf->MultiCell(73,4,utf8_decode($row['resp_cont_uno']),0,'C',0);

			$pdf->setFont('Arial','',6);
			$pdf->SetXY(5,227);
			$pdf->MultiCell(73,3,utf8_decode($row['cargo_uno']),0,'C',0);

		$pdf->setFont('Arial','B',7);
		$pdf->SetXY(78,235);
		$pdf->MultiCell(66,4,utf8_decode($row['resp_cont_dos']),0,'C',0);

			$pdf->setFont('Arial','',6);
			$pdf->SetXY(78,227);
			$pdf->MultiCell(66,3,utf8_decode($row['cargo_dos']),0,'C',0);

		$pdf->setFont('Arial','B',7);
		$pdf->SetXY(144,235);
		$pdf->MultiCell(66,4,utf8_decode($row['nom_cont']),0,'C',0);

		$pdf->SetXY(5,254);
		$pdf->MultiCell(73,3,utf8_decode($row['jefe_dep']),0,'C',0);

		$pdf->SetXY(78,254);
		$pdf->MultiCell(66,3,utf8_decode($row['titu_sub']),0,'C',0);

		$pdf->SetXY(144,254);
		$pdf->MultiCell(66,3,utf8_decode($row['titu_direc']),0,'C',0);
	

		}
	$pdf->Output();
 ?>