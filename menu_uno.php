<?php
	include("session.php");	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
</head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./CSS/menu_uno.css">
<body>
		<header>
			<img src="docs/logos/logo1.png" alt="image 1" class="img1">
			<img src="docs/logos/logo6.png" alt="image 2" class="img2">
			<img src="docs/logos/logo3.png" alt="image 3" class="img3">
		</header>

<center>
	<div class="contenedor">
	<div class="divi">
        <div id="content" class="col-lg-3">
            <div id="menu">
                <ul>
                	<!--<li><a href="./Metodos/impresion.php" style="text-align: left;">impresion </a></li>-->
                	<li><a href="./Log/logout.php" style="text-align: left;"> Cerrar Sesión </a></li>
                	<li class="has-sub"><a title="" href="Docs/Pdfs/instructivo.pdf" style="text-align: left; " target="_blank" rel="noopener noreferrer"> Instructivo </a></li>
                	<li><a href="per_suplente.php" style="text-align: left;"> Registro del suplente </a></li>
                	<li><a href="formato.php" style="text-align: left;"> Formato de Requisición </a></li>
                	<li><a title="" href="#" style="text-align: left;"> Formatos </a>
						<ul>
							<li> <a href="Docs/Formatos/Carta Compromiso.docx" style="text-align: left;" target="_blank" rel="noopener noreferrer"> Carta Compromiso </a> </li>
							<li><a href="Docs/Formatos/Constancia de Afiliación(Solicitud).docx" style="text-align: left;" target="_blank" rel="noopener noreferrer"> Constancia de Afiliación(Solicitud) </a> </li> 
							<li><a href="Docs/Formatos/Cédula de Autocontrol.docx" style="text-align: left;" target="_blank" rel="noopener noreferrer"> Cédula de Autocontrol </a> </li>
						</ul>
					</li>

					<li class="has-sub"><a title="" href="" style="text-align: left;">Normatividad <i class="fa fa-angle-right"></i></a>
                        <ul>
							<li> <a href="Docs/Pdfs/condiciones.pdf" style="text-align: left;" target="_blank" rel="noopener noreferrer"> Condiciones Generales de trabajo </a> </li>
							
							<li><a title="" href="" style="text-align: left;">Constituciones</a>
							<ul>
								<li> <a href="Docs/Pdfs/constitucion1.pdf" style="text-align: left;" target="_blank" rel="noopener noreferrer"> Constitución Política de los Estados Unidos Mexicanos </a> </li>
								<li> <a href="Docs/Pdfs/constitucion2.pdf" style="text-align: left;" target="_blank" rel="noopener noreferrer"> Constitución Política del Estado de México </a> </li>
							</ul>
							</li>

							<li><a title="" href="" style="text-align: left;">Leyes</a>
							<ul>
								<li> <a href="Docs/Pdfs/ley1.pdf" style="text-align: left;" target="_blank" rel="noopener noreferrer"> Ley de Seguridad Social para los Servidores Públicos del Estado y Municipios </a> </li>
								<li> <a href="Docs/Pdfs/ley2.pdf" style="text-align: left;" target="_blank" rel="noopener noreferrer"> Ley de Trabajo de Servidores Públicos EDOMEX </a> </li>
								<li> <a href="Docs/Pdfs/ley3.pdf"style="text-align: left;" target="_blank" rel="noopener noreferrer"> Ley Federal del Trabajo  </a> </li>
							</ul>
							</li>

							<li><a title="" href="" style="text-align: left;">Reglamentos</a>
							<ul>
								<li> <a href="Docs/Pdfs/reglamento1.pdf" style="text-align: left;" target="_blank" rel="noopener noreferrer"> Reglamento  de  Escalafón  de  los  Servidores  Públicos  Generales  del  Poder Ejecutivo del Estado de México </a> </li>
								<li> <a href="Docs/Pdfs/reglamento2.pdf" style="text-align: left;" target="_blank" rel="noopener noreferrer"> Reglamento de Capacitación y Desarrollo para Los Servidores Públicos del Poder Ejecutivo del Estado de México </a> </li>
								<li> <a href="Docs/Pdfs/reglamento3.pdf" style="text-align: left;" target="_blank" rel="noopener noreferrer"> Reglamento de Riesgos de Trabajo Instituto de Seguridad Social del Estado de México </a> </li>
								<li> <a href="Docs/Pdfs/reglamento4.pdf" style="text-align: left;" target="_blank" rel="noopener noreferrer"> Reglamento de Seguridad e Higiene en el Trabajo para los Servidores Públicos del </a> </li>
								<li> <a href="Docs/Pdfs/reglamento5.pdf" style="text-align: left;" target="_blank" rel="noopener noreferrer"> Reglamento Interior del Instituto de Seguridad Social para los Servidores Públicos del Estado de México </a> </li>
							</ul>
							</li>

                        </ul>
                    </li>

                     <li class="has-sub"><a title="" href="Docs/Pdfs/manual.pdf" style="text-align: left;" target="_blank" rel="noopener noreferrer">Manual de organización <i class="fa fa-angle-right"></i></a></li>
                	
					<li class="has-sub"><a title="" href="Docs/Pdfs/personal.pdf" style="text-align: left;" target="_blank" rel="noopener noreferrer"> Puestos para Suplencia </a></li>
           
                    <li class="has-sub"><a title="" href="Docs/Pdfs/calendario.pdf" style="text-align: left;" target="_blank" rel="noopener noreferrer"> Calendario Oficial </a></li>
                    <li class="has-sub"><a title="" href="" style="text-align: left;" target="_blank" rel="noopener noreferrer"> Calendario de Programación de Pagos </a></li>
                    
                    <li><a href="Estadistica/menu_dos.php" style="text-align: left;"> Estadistica </a></li>
                </ul>
    		</div>
    	</div>
    </div>
</div>
</center>

</body>
</html>