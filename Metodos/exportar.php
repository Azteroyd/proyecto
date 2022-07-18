<?php 
	include 'conexion_dos.php';
	$con=conexion();

	require '../Librerias/vendor/autoload.php';

	use PhpOffice\PhpSpreadsheet\{Spreadsheet, IOFactory};
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


	$sql='SELECT id_registro,folio_req,num_plaza,depen,cod_umed,nom_umed,nom_cont,nom_asup,ise_clave,rfc,fecha_ini,fecha_con,ref_requi,esp_otro,dias_con,turno,clasi,nom_puesto,nivel,rango FROM tbl_formato';
	$res = mysqli_query($con,$sql);

	$excel = new Spreadsheet();
	$hojaActiva = $excel->getActiveSheet();
	$hojaActiva->setTitle("Variables de Recepción");

	/*$hojaActiva->setPath('Docs/Logos/logo1.png');
	$hojaActiva->setCoordinates('A1');*/

	$hojaActiva->getColumnDimension('A')->setWidth(25);
		$hojaActiva->setCellValue('A5','Folio de Requisición');
	
	$hojaActiva->getColumnDimension('B')->setWidth(15);
		$hojaActiva->setCellValue('B5','Número de Plaza');
	
	$hojaActiva->getColumnDimension('C')->setWidth(60);
		$hojaActiva->setCellValue('C5','Nombre de la Dependencia Médica');
	
	$hojaActiva->getColumnDimension('D')->setWidth(30);
		$hojaActiva->setCellValue('D5','Código de la Unidad Medica');
	
	$hojaActiva->getColumnDimension('E')->setWidth(60);
		$hojaActiva->setCellValue('E5','Nombre de la Unidad Medica');
	
	$hojaActiva->getColumnDimension('F')->setWidth(60);
		$hojaActiva->setCellValue('F5','Nombre del contratado');
	
	$hojaActiva->getColumnDimension('G')->setWidth(30);
		$hojaActiva->setCellValue('G5','Genero');
	
	$hojaActiva->getColumnDimension('H')->setWidth(60);
		$hojaActiva->setCellValue('H5','Personal de Base');
	
	$hojaActiva->getColumnDimension('I')->setWidth(45);
		$hojaActiva->setCellValue('I5','Clave del Contratado');
	
	$hojaActiva->getColumnDimension('J')->setWidth(35);
		$hojaActiva->setCellValue('J5','RFC');
	
	$hojaActiva->getColumnDimension('K')->setWidth(40);
		$hojaActiva->setCellValue('K5','Fecha de Inicio de Contratación');
	
	$hojaActiva->getColumnDimension('L')->setWidth(40);
		$hojaActiva->setCellValue('L5','Fecha de Termino de Contratación');
	
	$hojaActiva->getColumnDimension('M')->setWidth(35);
		$hojaActiva->setCellValue('M5','Referencia de la Requisición');
	
	$hojaActiva->getColumnDimension('N')->setWidth(50);
		$hojaActiva->setCellValue('N5','Especificar Referencia');
	
	$hojaActiva->getColumnDimension('O')->setWidth(40);
		$hojaActiva->setCellValue('O5','Número de Dias Contratados');
	
	$hojaActiva->getColumnDimension('P')->setWidth(20);
		$hojaActiva->setCellValue('P5','Turno');
	
	$hojaActiva->getColumnDimension('Q')->setWidth(30);
		$hojaActiva->setCellValue('Q5','Categoria');
	
	$hojaActiva->getColumnDimension('R')->setWidth(40);
		$hojaActiva->setCellValue('R5','Clasificación');
	
	$hojaActiva->getColumnDimension('S')->setWidth(10);
		$hojaActiva->setCellValue('S5','Nivel');
	
	$hojaActiva->getColumnDimension('T')->setWidth(10);
		$hojaActiva->setCellValue('T5','Rango');


	$fila = 6;

	while ($row = $res->fetch_assoc()) {

		$hojaActiva->setCellValue('A'.$fila, $row['folio_req']);
		$hojaActiva->setCellValue('B'.$fila, $row['num_plaza']);
		$hojaActiva->setCellValue('C'.$fila, $row['depen']);
		$hojaActiva->setCellValue('D'.$fila, $row['cod_umed']);
		$hojaActiva->setCellValue('E'.$fila, $row['nom_umed']);
		$hojaActiva->setCellValue('F'.$fila, $row['nom_cont']);
		$hojaActiva->setCellValue('G'.$fila, $row['sexo']);
		$hojaActiva->setCellValue('H'.$fila, $row['nom_asup']);
		$hojaActiva->setCellValue('I'.$fila, $row['ise_clave']);
		$hojaActiva->setCellValue('J'.$fila, $row['rfc']);
		$hojaActiva->setCellValue('K'.$fila, $row['fecha_ini']);
		$hojaActiva->setCellValue('L'.$fila, $row['fecha_con']);
		$hojaActiva->setCellValue('M'.$fila, $row['ref_requi']);
		$hojaActiva->setCellValue('N'.$fila, $row['esp_otro']);
		$hojaActiva->setCellValue('O'.$fila, $row['dias_con']);
		$hojaActiva->setCellValue('P'.$fila, $row['turno']);
		$hojaActiva->setCellValue('Q'.$fila, $row['clasi']);
		$hojaActiva->setCellValue('R'.$fila, $row['nom_puesto']);
		$hojaActiva->setCellValue('S'.$fila, $row['nivel']);
		$hojaActiva->setCellValue('T'.$fila, $row['rango']);
$fila++;
	}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Variables_de_recepción.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel,'Xlsx');
$writer->save('php://output');
exit;

 ?>