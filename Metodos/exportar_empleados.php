<?php 
	include 'conexion_dos.php';
	$con=conexion();

	require '../Librerias/vendor/autoload.php';

	use PhpOffice\PhpSpreadsheet\{Spreadsheet, IOFactory};
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


	$sql='SELECT * FROM tbl_infosuplentes';
	$res = mysqli_query($con,$sql);

	$excel = new Spreadsheet();
	$hojaActiva = $excel->getActiveSheet();
	$hojaActiva->setTitle("Datos Generales y Domiciliarios");

	/*$hojaActiva->setPath('Docs/Logos/logo1.png');
	$hojaActiva->setCoordinates('A1');*/

	$hojaActiva->getColumnDimension('A')->setWidth(20);
		$hojaActiva->setCellValue('A1','Número de Empleado');
	
	$hojaActiva->getColumnDimension('C')->setWidth(20);
		$hojaActiva->setCellValue('C1','Apellido Paterno');
	
	$hojaActiva->getColumnDimension('D')->setWidth(20);
		$hojaActiva->setCellValue('D1','Apellido Materno');

	$hojaActiva->getColumnDimension('B')->setWidth(15);
		$hojaActiva->setCellValue('B1','Nombre(s)');
	
	$hojaActiva->getColumnDimension('E')->setWidth(22);
		$hojaActiva->setCellValue('E1','Clave CURP');
	
	$hojaActiva->getColumnDimension('F')->setWidth(20);
		$hojaActiva->setCellValue('F1','RFC (Con Homoclave)');
	
	$hojaActiva->getColumnDimension('G')->setWidth(15);
		$hojaActiva->setCellValue('G1','CLave ISSEMYM');
	
	$hojaActiva->getColumnDimension('H')->setWidth(20);
		$hojaActiva->setCellValue('H1','Entidad Federativa');
	
	$hojaActiva->getColumnDimension('I')->setWidth(18);
		$hojaActiva->setCellValue('I1','Municipio');
	
	$hojaActiva->getColumnDimension('J')->setWidth(27);
		$hojaActiva->setCellValue('J1','Localidad');
	
	$hojaActiva->getColumnDimension('K')->setWidth(20);
		$hojaActiva->setCellValue('K1','Calle');
	
	$hojaActiva->getColumnDimension('L')->setWidth(25);
		$hojaActiva->setCellValue('L1','Número Interior o Exterior');
	
	$hojaActiva->getColumnDimension('M')->setWidth(15);
		$hojaActiva->setCellValue('M1','Código Postal');
	
	$hojaActiva->getColumnDimension('N')->setWidth(20);
		$hojaActiva->setCellValue('N1','Fecha de Nacimiento');
	
	$hojaActiva->getColumnDimension('O')->setWidth(10);
		$hojaActiva->setCellValue('O1','Genero');
	
	$hojaActiva->getColumnDimension('P')->setWidth(10);
		$hojaActiva->setCellValue('P1','Estado Civil');
	
	$hojaActiva->getColumnDimension('Q')->setWidth(18);
		$hojaActiva->setCellValue('Q1','Número de Telefono');
	
	$hojaActiva->getColumnDimension('R')->setWidth(10);
		$hojaActiva->setCellValue('R1','Estatus');
	
	$hojaActiva->getColumnDimension('S')->setWidth(12);
		$hojaActiva->setCellValue('S1','Fecha de Alta');
	
	$hojaActiva->getColumnDimension('T')->setWidth(12);
		$hojaActiva->setCellValue('T1','Fecha de Baja');


	$fila = 2;

	while ($row = $res->fetch_assoc()) {

		$hojaActiva->setCellValue('A'.$fila, $row['id_suplente']);
		$hojaActiva->setCellValue('B'.$fila, $row['nombre_sup']);
		$hojaActiva->setCellValue('C'.$fila, $row['apellido_pat']);
		$hojaActiva->setCellValue('D'.$fila, $row['apellido_mat']);
		$hojaActiva->setCellValue('E'.$fila, $row['curp_sup']);
		$hojaActiva->setCellValue('F'.$fila, $row['rfc_sup']);
		$hojaActiva->setCellValue('G'.$fila, $row['clave_isesup']);
		$hojaActiva->setCellValue('H'.$fila, $row['estado_sup']);
		$hojaActiva->setCellValue('I'.$fila, $row['municipio_sup']);
		$hojaActiva->setCellValue('J'.$fila, $row['localidad_sup']);
		$hojaActiva->setCellValue('K'.$fila, $row['calle_sup']);
		$hojaActiva->setCellValue('L'.$fila, $row['cod_calle']);
		$hojaActiva->setCellValue('M'.$fila, $row['cod_post']);
		$hojaActiva->setCellValue('N'.$fila, $row['fechanac_sup']);
		$hojaActiva->setCellValue('O'.$fila, $row['genero']);
		$hojaActiva->setCellValue('P'.$fila, $row['edo_civil']);
		$hojaActiva->setCellValue('Q'.$fila, $row['telefono_sup']);
		$hojaActiva->setCellValue('R'.$fila, $row['estatus']);
		$hojaActiva->setCellValue('S'.$fila, $row['fechaalta_sup']);
		$hojaActiva->setCellValue('T'.$fila, $row['fechabaja_sup']);
$fila++;
	}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="información_suplentes_.xlsx"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($excel,'Xlsx');
$writer->save('php://output');
exit;

 ?>