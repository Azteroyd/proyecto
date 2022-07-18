copia export

<?php 
	include 'conexion.php';
	$con=conexion();

	$query=mysqli_query($con,"SELECT * FROM tbl_formato");
	$filename="Datos.xls";

	header('Content-type: application/vnd.ms-excel');
	header('Content-Disposition: attachment; filename='.$filename);
	header('Pragma: no-cache');
	header('Cache_Control: must-revalidate, post-check=0, pre-check=0');
	header('Expires: 0');

	echo '<style> table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}'; 



	echo '<table border="1" cellspacing="0" cellpadding="0" >';
	echo '<tr>';
	echo '<th> Variables de Requisiciones</th>';
	echo '</tr>';

	echo '<tr>';
		echo '<th><font face="Arial"> Numero de Plaza</font></th>';
		echo '<th><font face="Arial"> Nombre de la Dependencia Medica</font></th>';
		echo '<th><font face="Arial"> Codigo de la Unidad Medico Administrativa</font></th>';
		echo '<th><font face="Arial"> Nombre de la Unidad Medico Administrativa</font></th>';
		echo '<th><font face="Arial"> Nombre del contratado</font></th>';
		echo '<th><font face="Arial"> Genero</font></th>';
		echo '<th><font face="Arial"> Personal de base</font></th>';
		echo '<th><font face="Arial"> RFC (Con Homoclave)</font></th>';
		echo '<th><font face="Arial"> Clave del Contratado</font></th>';
		echo '<th><font face="Arial"> Fecha de Inicio de Contratación</font></th>';
		echo '<th><font face="Arial"> Fecha de termino de contratación</font></th>';
		echo '<th><font face="Arial"> Número de Dias Contratados</font></th>';
		echo '<th><font face="Arial"> Turno</font></th>';
		echo '<th><font face="Arial"> Referencia</font></th>';
		echo '<th><font face="Arial"> (Especificar) Otro</font></th>';
		echo '<th><font face="Arial"> Clasificación</font></th>';
		echo '<th><font face="Arial"> Categoria</font></th>';
		echo '<th><font face="Arial"> Nivel</font></th>';
		echo '<th><font face="Arial"> Rango</font></th>';

	echo '</tr>';

	while ($row=mysqli_fetch_array($query)) {
	echo '<tr>';
		echo '<td>'.$row['num_plaza'].'<td>';
		echo '<td>'.$row['depen'].'<td>';
		echo '<td>'.$row['cod_umed'].'<td>';
		echo '<td>'.$row['nom_umed'].'<td>';
		echo '<td>'.$row['nom_cont'].'<td>';
		echo '<td>'.$row['sexo'].'<td>';
		echo '<td>'.$row['nom_asup'].'<td>';
		echo '<td>'.$row['rfc'].'<td>';
		echo '<td>'.$row['ise_clave'].'<td>';
		echo '<td>'.$row['fecha_ini'].'<td>';
		echo '<td>'.$row['fecha_con'].'<td>';
		echo '<td>'.$row['dias_con'].'<td>';
		echo '<td>'.$row['turno'].'<td>';
		echo '<td>'.$row['ref_requi'].'<td>';
		echo '<td>'.$row['esp_otro'].'<td>';
		echo '<td>'.$row['clasi'].'<td>';
		echo '<td>'.$row['nom_puesto'].'<td>';
		echo '<td>'.$row['nivel'].'<td>';
		echo '<td>'.$row['rango'].'<td>';
	echo '<tr>';
	}
	echo '</table>';
	echo "</style>'";
 ?>