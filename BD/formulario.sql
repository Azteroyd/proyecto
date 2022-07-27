-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2022 a las 19:00:23
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_claspuesto`
--

CREATE TABLE `tbl_claspuesto` (
  `id_ClasPuesto` int(10) NOT NULL,
  `clasificacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_claspuesto`
--

INSERT INTO `tbl_claspuesto` (`id_ClasPuesto`, `clasificacion`) VALUES
(1, 'ADMINISTRATIVO'),
(2, 'PARAMÉDICO'),
(3, 'MÉDICO'),
(4, 'ENFERMERÍA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cordinaciones`
--

CREATE TABLE `tbl_cordinaciones` (
  `id_cord` int(11) NOT NULL,
  `nom_cord` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_cordinaciones`
--

INSERT INTO `tbl_cordinaciones` (`id_cord`, `nom_cord`) VALUES
(1, 'DIRECCIÓN GENERAL'),
(2, 'UNIDAD JURIDICA CONSULTIVA Y DE IGUALDAD DE GENERO'),
(3, 'UNIDAD DE COMUNICACIÓN SOCIAL'),
(4, 'ORGANO INTERNO DE CONTROL'),
(5, 'UNIDAD DE INFORMACIÓN PLANEACIÓN PROGRAMACIÓN Y EVALUACIÓN'),
(6, 'UNIDAD DE TECNOLOGIAS DE LA INFORMACIÓN'),
(7, 'COORDINACIÓN DE SERVICIOS DE SALUD'),
(8, 'COORDINACIÓN DE PRESTACIONES Y SEGURIDAD SOCIAL'),
(9, 'COORDINACIÓN DE ADMINISTRACION Y FINANZAS'),
(10, 'COORDINACIÓN DE INNOVACION Y CALIDAD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_dias`
--

CREATE TABLE `tbl_dias` (
  `id_dias` int(2) NOT NULL,
  `dias_labo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_dias`
--

INSERT INTO `tbl_dias` (`id_dias`, `dias_labo`) VALUES
(1, 'Lunes'),
(2, 'Martes '),
(3, 'Miércoles'),
(4, 'Jueves'),
(5, 'Viernes'),
(6, 'Sábado'),
(7, 'Domingo'),
(8, 'Lunes a Viernes'),
(9, 'Sábado y Domingo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_directivos`
--

CREATE TABLE `tbl_directivos` (
  `id_directivo` int(11) NOT NULL,
  `nom_directivo` varchar(100) NOT NULL,
  `tipo_directivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_directivos`
--

INSERT INTO `tbl_directivos` (`id_directivo`, `nom_directivo`, `tipo_directivo`) VALUES
(1, 'LIUS ALBERTO GUTIÉRREZ ÁLVAREZ', 'JEFE DEL DEPARTAMENTO DE ADMINISTRACIÓN DE PERSONAL'),
(2, 'CAROLYN ELIZABETH RODRÍGUEZ AMBROSIO', 'TITULAR DE LA SUBDIRECCIÓN DE PERSONAL'),
(3, 'ANTONIO RODRÍGUEZ HERNÁNDEZ', 'TITULAR DE LA DIRECCIÓN DE ADMINISTRACIÓN Y DESARROLLO DE PERSONAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_formato`
--

CREATE TABLE `tbl_formato` (
  `id_registro` int(10) NOT NULL,
  `folio_req` varchar(10) NOT NULL,
  `num_plaza` int(10) NOT NULL,
  `cordinacion` text NOT NULL,
  `cod_umed` int(10) NOT NULL,
  `nom_umed` text NOT NULL,
  `fecha_ini` date NOT NULL,
  `fecha_con` date NOT NULL,
  `dias_con` text NOT NULL,
  `ref_requi` text NOT NULL,
  `esp_otro` text NOT NULL,
  `nom_cont` text NOT NULL,
  `rfc` varchar(13) NOT NULL,
  `nom_asup` text NOT NULL,
  `ise_clave` varchar(10) NOT NULL,
  `genero` text NOT NULL,
  `nom_puesto` varchar(80) NOT NULL,
  `nivel` int(2) NOT NULL,
  `rango` int(2) NOT NULL,
  `horario_ent` time NOT NULL,
  `horario_sal` time NOT NULL,
  `turno` text NOT NULL,
  `observaciones` varchar(200) NOT NULL,
  `clasi` text NOT NULL,
  `dias_labo` text NOT NULL,
  `fun_puesto` text NOT NULL,
  `cono_req` text NOT NULL,
  `exp_req` varchar(100) NOT NULL,
  `resp_cont_uno` varchar(100) NOT NULL,
  `resp_cont_dos` varchar(100) NOT NULL,
  `jefe_dep` varchar(100) NOT NULL,
  `titu_sub` varchar(100) NOT NULL,
  `titu_direc` varchar(100) NOT NULL,
  `cargo_uno` varchar(100) NOT NULL,
  `cargo_dos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_formato`
--

INSERT INTO `tbl_formato` (`id_registro`, `folio_req`, `num_plaza`, `cordinacion`, `cod_umed`, `nom_umed`, `fecha_ini`, `fecha_con`, `dias_con`, `ref_requi`, `esp_otro`, `nom_cont`, `rfc`, `nom_asup`, `ise_clave`, `genero`, `nom_puesto`, `nivel`, `rango`, `horario_ent`, `horario_sal`, `turno`, `observaciones`, `clasi`, `dias_labo`, `fun_puesto`, `cono_req`, `exp_req`, `resp_cont_uno`, `resp_cont_dos`, `jefe_dep`, `titu_sub`, `titu_direc`, `cargo_uno`, `cargo_dos`) VALUES
(24, '002719', 6879, 'COORDINACIÓN DE SERVICIOS DE SALUD', 39502, 'CLINICA DE CONSULTA EXTERNA LERMA IGNACIO ALLENDE BICENTENARIO', '2022-05-05', '2022-05-29', '26', 'Otro', 'Covid-19', 'Aquino Morelos Yara Elma', 'AUMY9302137D1', 'López Gómez Antonio', '0001318689', '', 'MEDICO GENERAL 8 HORAS', 27, 2, '09:00:00', '17:00:00', 'Matutino', '', 'Medico', 'Lunes a Viernes', 'Atención a los pacientes, Expedición de recetas', 'Medicina en general', '1 año', '', '', '', '', '', '', ''),
(25, '002020', 131725, 'UNIDAD DE INFORMACIÓN PLANEACIÓN PROGRAMACIÓN Y EVALUACIÓN', 39914, 'CONSULTORIO MEDICO UNIVERSIDAD TECNOLOGICA DEL SUR DEL ESTADO DE MÉXICO', '2022-06-14', '2022-06-28', '11', 'Prestación de Examen Profesional', '-', 'Gustavo Hernández Romero', 'HERG09870986', 'Miguel Ángel Gonzales Sánchez', '0012345678', '', 'TRABAJADORA SOCIAL AREA MEDICA 9 HORAS', 9, 1, '08:30:00', '17:30:00', 'Especial y Días Festivos', '', 'Paramédico', 'Lunes a Viernes', 'programar el formato de requisición de personal del issemym de acuerdo a lo planteado por el asesor externo tomando en cuenta detalles datos y recomendaciones de diseño.', 'Se requiere un conocimiento teórico practico en el área de programación y manejo de bases de datos mysql ', '1 año con ', 'José Luis Miranda reyes', 'Carlos López de León', 'Alejandro Gutiérrez Montes  ', 'Alondra Isabel Torres Ramírez ', 'José Luis Padilla Popoca', '', ''),
(26, '002020', 131725, 'UNIDAD DE INFORMACIÓN PLANEACIÓN PROGRAMACIÓN Y EVALUACIÓN', 39914, 'CONSULTORIO MEDICO UNIVERSIDAD TECNOLOGICA DEL SUR DEL ESTADO DE MÉXICO', '2022-06-14', '2022-06-28', '11', 'Prestación de Examen Profesional', '-', 'Gustavo Hernández Romero', 'HERG09870986', 'Miguel Ángel Gonzales Sánchez', '0012345678', '', 'TRABAJADORA SOCIAL AREA MEDICA 9 HORAS', 9, 1, '08:30:00', '17:30:00', 'Especial y Días Festivos', '', 'Paramédico', 'Lunes a Viernes', 'programar el formato de requisición de personal del issemym de acuerdo a lo planteado por el asesor externo tomando en cuenta detalles datos y recomendaciones de diseño.', 'Se requiere un conocimiento teórico practico en el área de programación y manejo de bases de datos mysql ', '1 año con 3 meses', 'José Luis Miranda reyes', 'Carlos López de León', 'Alejandro Gutiérrez Montes  ', 'Alondra Isabel Torres Ramírez ', 'José Luis Padilla Popoca', '', ''),
(31, '00872', 5529, 'COORDINACIÓN DE SERVICIOS DE SALUD', 39951, 'UNIDAD DE ATENCION MEDICA MOVIL REGION 1', '2022-07-04', '2022-09-30', '87', 'Procesó de Escalafón', '-', 'Montes Pulido Elisamuel', 'MOPE760303UF0', 'Reyes Escamilla Hugo Alejandro', '9906912864', '', 'MEDICO GENERAL 9 HORAS', 32, 2, '09:00:00', '18:00:00', 'Matutino', '', 'Medico', 'Lunes a Viernes', 'atención, revisión y diagnostico de pacientes en la unidad movil', 'licenciatura como médico cirujano', '2 años', 'Rosa Martha Medina Peñaloza', 'Sergio Gerardo Colin Carmona', 'Luis Alberto Gutiérrez Álvarez', 'Carolyn Elizabeth Rodríguez Ambrosio ', 'Antonio Rodríguez Hernández', 'Directora de atención a la salud', 'Encargado de la delegación Administrativa de la coordinación de servicios de salud'),
(32, '002910', 5570, 'UNIDAD DE TECNOLOGIAS DE LA INFORMACIÓN', 16301, 'Departamento de Redes y Comunicaciones', '2022-06-13', '2022-07-01', '15', 'Prestación de Examen Profesional', '-', 'José Armando Gonzalez gonzalez', 'Gog124778uf22', 'Jaime David maldonado juarez', '0123456789', '', 'TECNICO DE MNATENIMIENTO', 10, 2, '09:00:00', '18:00:00', 'Matutino', '', 'Administrativo', 'Lunes a Viernes', 'Realizar labores de mantenimiento de el area de redes', 'licenciatura o ingenieria en sistemas, redes o informatica', '5 meses', 'Rosa gonzalez garcia', 'pablo gonzalez de la cruz', 'Alejandro Gutiérrez Montes  ', 'José Juan Fernando López de la Cruz', 'José Luis Padilla Popoca', 'Directora de departamento', 'Encargado de la delegación Administrativa de la coordinación de servicios de salud'),
(33, '002910', 5570, 'UNIDAD DE TECNOLOGIAS DE LA INFORMACIÓN', 16301, 'Departamento de Redes y Comunicaciones', '2022-06-13', '2022-07-01', '15', 'Prestación de Examen Profesional', '-', 'José Armando Gonzalez gonzalez', 'Gog124778uf22', 'Jaime David maldonado juarez', '0123456789', '', 'TECNICO DE MNATENIMIENTO', 10, 2, '09:00:00', '18:00:00', 'Matutino', 'Suple las guardias del: 03, 10 y 17 de Julio 2022', 'Administrativo', 'Lunes a Viernes', 'Realizar labores de mantenimiento de el area de redes', 'licenciatura o ingenieria en sistemas, redes o informatica', '5 meses', 'Rosa gonzalez garcia', 'pablo gonzalez de la cruz', 'Alejandro Gutiérrez Montes  ', 'José Juan Fernando López de la Cruz', 'José Luis Padilla Popoca', 'Directora de departamento', 'Encargado de la delegación Administrativa de la coordinación de servicios de salud'),
(36, '286/2022', 7799, 'COORDINACIÓN DE SERVICIOS DE SALUD', 39503, 'CLÍNICA DE CONSULTA EXTERNA HUIXQUILUCAN', '0000-00-00', '0000-00-00', '7.5', 'Proceso de Escalafón', '-', 'GUTIÉRREZ FLORES CATALINA YESENIA', 'GUFC920103492', 'VELAZQUEZ TRUJILLO LADISLAO', '0013165750', '', 'MÉDICO GENERAL', 18, 2, '08:00:00', '20:00:00', 'Especial y Días Festivos', 'SUPLE LAS GUARDIAS DEL: 03,10 Y 17 DE JULIO 2022', 'MÉDICO', 'DOMINGO', 'BRINDA ATENCIÓN MÉDICA A PACIENTES, EXPLORACIÓN FISICA,ELABORA HISTORIA CLINICA,NOTA DE DEVOLUCIÓN, Y TRATAMIENTO EMITE DIAGNOSTICO, CERTIFICADO DE INCAPACIAD,RECETA MEDICA, INTEGRA DOCUMENTOS A EXPEDIENTE Y PARTICIPA EN COMITE DE EDUCACIÓN MÉDICA CONTINUA', 'ESPECIFICOS EN MÉDICO GENERAL', '2 AÑOS', 'DANIEL DE LA CRUZ ORTIZ', 'CARLOS BENITO SALAS FERNANDEZ DE CORDOVA', 'LUIS ALBERTO GUTIERREZ ÁLVAREZ', 'CAROLYN ELIZABETH RODRIGUEZ AMBROSIO', 'ANTONIO RODRÍGUEZ HERNÁNDEZ', 'DIRECTOR DE DEPARTAMENTO', 'DELEGADO DEL DEPARTAMENTO DE ZONA'),
(37, '286/2022', 7799, 'COORDINACIÓN DE SERVICIOS DE SALUD', 39503, 'CLÍNICA DE CONSULTA EXTERNA HUIXQUILUCAN', '2022-07-03', '2022-07-17', '7.5', 'Proceso de Escalafón', '-', 'GUTIÉRREZ FLORES CATALINA YESENIA', 'GUFC920103492', 'VELAZQUEZ TRUJILLO LADISLAO', '0013165750', '', 'MÉDICO GENERAL', 18, 2, '08:00:00', '20:00:00', 'Especial y Días Festivos', 'SUPLE LAS GUARDIAS DEL: 03,10 Y 17 DE JULIO 2022', 'MÉDICO', 'DOMINGO', 'BRINDA ATENCIÓN MÉDICA A PACIENTES, EXPLORACIÓN FISICA,ELABORA HISTORIA CLINICA,NOTA DE DEVOLUCIÓN, Y TRATAMIENTO EMITE DIAGNOSTICO, CERTIFICADO DE INCAPACIAD,RECETA MEDICA, INTEGRA DOCUMENTOS A EXPEDIENTE Y PARTICIPA EN COMITE DE EDUCACIÓN MÉDICA CONTINUA', 'ESPECIFICOS EN MÉDICO GENERAL', '2 AÑOS', 'DANIEL DE LA CRUZ ORTIZ', 'CARLOS BENITO SALAS FERNANDEZ DE CORDOVA', 'LUIS ALBERTO GUTIERREZ ÁLVAREZ', 'CAROLYN ELIZABETH RODRIGUEZ AMBROSIO', 'ANTONIO RODRÍGUEZ HERNÁNDEZ', 'DIRECTOR DE DEPARTAMENTO', 'DELEGADO DEL DEPARTAMENTO DE ZONA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_infosuplentes`
--

CREATE TABLE `tbl_infosuplentes` (
  `id_suplente` int(10) NOT NULL,
  `nombre_sup` varchar(100) NOT NULL,
  `apellido_pat` varchar(100) NOT NULL,
  `apellido_mat` varchar(100) NOT NULL,
  `curp_sup` varchar(50) NOT NULL,
  `rfc_sup` varchar(50) NOT NULL,
  `clave_isesup` varchar(10) NOT NULL,
  `estado_sup` varchar(100) NOT NULL,
  `municipio_sup` varchar(100) NOT NULL,
  `localidad_sup` varchar(100) NOT NULL,
  `calle_sup` varchar(100) NOT NULL,
  `cod_calle` int(10) NOT NULL,
  `cod_post` int(10) NOT NULL,
  `fechanac_sup` date NOT NULL,
  `genero` varchar(50) NOT NULL,
  `edo_civil` varchar(50) NOT NULL,
  `telefono_sup` varchar(20) NOT NULL,
  `estatus` varchar(10) NOT NULL,
  `fechaalta_sup` date NOT NULL,
  `fechabaja_sup` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_infosuplentes`
--

INSERT INTO `tbl_infosuplentes` (`id_suplente`, `nombre_sup`, `apellido_pat`, `apellido_mat`, `curp_sup`, `rfc_sup`, `clave_isesup`, `estado_sup`, `municipio_sup`, `localidad_sup`, `calle_sup`, `cod_calle`, `cod_post`, `fechanac_sup`, `genero`, `edo_civil`, `telefono_sup`, `estatus`, `fechaalta_sup`, `fechabaja_sup`) VALUES
(5, 'Gustavo', 'Hernández ', 'Romero', 'HERG990922HMCRMS01', 'HERG1317253056', '1317253056', 'Estado de México', 'Almoloya de Juárez', 'Barrio la Cabecera 3ra Sección', 'Melchor Ocampo', 123, 50900, '1999-09-22', 'Masculino', 'Soltero', '7292381369', 'Inactivo', '2022-05-02', '2022-07-04'),
(6, 'Gabriela', 'López', 'Vázquez', 'LOVA1317253056', 'LOGA1317', '1317253026', 'Estado de México', 'Zinacantepec', 'Zamarrero', 'Constituyentes Norte', 1317, 50100, '2000-01-12', 'Femenino', 'Soltero', '7229097719', 'Inactivo', '2020-02-03', '2022-07-05'),
(7, 'Gustavo David', 'Rojas', 'Vázquez', 'ROVG790916HMCJZS03', 'ROVG790916UN7', '9907117444', 'Estado de México', 'Metepec', 'Barrio de San Miguel', 'Galeana', 309, 52140, '1979-09-16', 'Masculino', 'Soltero', '1234567890', 'Inactivo', '2006-04-17', '2022-07-05'),
(8, 'Gustavo David', 'Rojas', 'Vázquez', 'ROVG790916HMCJZS03', 'ROVG790916UN7', '9907117444', 'Estado de México', 'Metepec', 'Barrio de San Miguel', 'Galeana', 309, 52140, '2022-07-05', 'Masculino', 'Soltero', '1234567890', 'Activo', '2022-07-06', '0000-00-00'),
(9, 'Ulises', 'Rodríguez ', 'Campos', 'ULI990922', 'CALO12345', '12345', 'Estado de México', 'Metepec', 'Barrio la Cabecera 3ra Sección', 'Constituyentes Norte', 309, 52140, '2022-07-07', 'Masculino', 'Soltero', '7222408916', 'Activo', '2022-07-08', '0000-00-00'),
(10, 'Ulises', 'Rodríguez ', 'Campos', 'ULI990922', 'CALO12345', '0009879180', 'Estado de México', 'Almoloya de Juárez', 'Barrio de San Miguel', 'Melchor Ocampo', 123, 50900, '1975-01-10', 'Masculino', 'Soltero', '7223444245', 'Activo', '2007-01-01', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_puestos`
--

CREATE TABLE `tbl_puestos` (
  `id_puesto` int(2) NOT NULL,
  `nom_puesto` varchar(50) NOT NULL,
  `nivel` int(2) NOT NULL,
  `tipo_puesto` text NOT NULL,
  `num_puesto` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_puestos`
--

INSERT INTO `tbl_puestos` (`id_puesto`, `nom_puesto`, `nivel`, `tipo_puesto`, `num_puesto`) VALUES
(1, 'ABOGADO DICTAMINADOR', 18, 'ADMINISTRATIVO', 1),
(2, 'ALMACENISTA', 6, 'ADMINISTRATIVO', 1),
(3, 'ANALISTA A ', 18, 'ADMINISTRATIVO', 1),
(4, 'ANALISTA B', 17, 'ADMINISTRATIVO', 1),
(5, 'ANALISTA C', 15, 'ADMINISTRATIVO', 1),
(6, 'ANALISTA D', 14, 'ADMINISTRATIVO', 1),
(7, 'ANALISTA AUXILIAR', 11, 'ADMINISTRATIVO', 1),
(8, 'ARCHIVISTA', 5, 'ADMINISTRATIVO', 1),
(9, 'AUXILIAR ADMINISTRATIVO', 5, 'ADMINISTRATIVO', 1),
(10, 'AUXILIAR DE ALMACEN', 5, 'ADMINISTRATIVO', 1),
(11, 'AUXILIAR DE ESTANCIA', 10, 'ADMINISTRATIVO', 1),
(12, 'AUXILIAR DE MANTENIMIENTO GENERAL', 8, 'ADMINISTRATIVO', 1),
(13, 'AYUDANTE GENERAL DE SERVICIOS ', 5, 'ADMINISTRATIVO', 1),
(14, 'CAMARERA ', 5, 'ADMINISTRATIVO', 1),
(15, 'CAPTURISTA', 5, 'ADMINISTRATIVO', 1),
(16, 'COCINERA', 5, 'ADMINISTRATIVO', 1),
(17, 'CHOFER', 6, 'ADMINISTRATIVO', 1),
(18, 'CHOFER ASISTENTE', 11, 'ADMINISTRATIVO', 1),
(19, 'DELEGADO ADMINISTRATIVO', 16, 'ADMINISTRATIVO', 1),
(20, 'ECONOMO', 8, 'ADMINISTRATIVO', 1),
(21, 'EDUCADORA ', 17, 'ADMINISTRATIVO', 1),
(22, 'ESTADIGRAFO', 10, 'ADMINISTRATIVO', 1),
(23, 'FOGONERO', 12, 'ADMINISTRATIVO', 1),
(24, 'INGENIERO EN SISTEMAS ', 18, 'ADMINISTRATIVO', 1),
(25, 'JARDINERO', 5, 'ADMINISTRATIVO', 1),
(26, 'JEFE B DE PROYECTO', 20, 'ADMINISTRATIVO', 1),
(27, 'JEFE DE ALMACEN', 10, 'ADMINISTRATIVO', 1),
(28, 'JEFE DE ANALISTAS', 19, 'ADMINISTRATIVO', 1),
(29, 'JEFE DE ARCHIVO', 8, 'ADMINISTRATIVO', 1),
(30, 'JEFE DE AREA ', 23, 'ADMINISTRATIVO', 1),
(31, 'JEFE DE OFICINA R-1', 12, 'ADMINISTRATIVO', 1),
(32, 'JEFE DE OFICINA R-2', 14, 'ADMINISTRATIVO', 1),
(33, 'JEFE DE OFICINA R-3', 16, 'ADMINISTRATIVO', 1),
(34, 'JEFE DE SECCION', 15, 'ADMINISTRATIVO', 1),
(35, 'LAVANDERIA', 5, 'ADMINISTRATIVO', 1),
(36, 'MAESTRO ACTIVIDADES ARTISTICAS', 8, 'ADMINISTRATIVO', 1),
(37, 'MENSAJERO', 5, 'ADMINISTRATIVO', 1),
(38, 'MESERO', 5, 'ADMINISTRATIVO', 1),
(39, 'OPERADOR DE CALDERA', 12, 'ADMINISTRATIVO', 1),
(40, 'OPERADOR DE COMPUTADOR', 8, 'ADMINISTRATIVO', 1),
(41, 'OPERADOR DE CONMUTADOR', 11, 'ADMINISTRATIVO', 1),
(42, 'PUERICULTURORA', 12, 'ADMINISTRATIVO', 1),
(43, 'RECEPCIONISTA', 5, 'ADMINISTRATIVO', 1),
(44, 'SECRETARIA A', 19, 'ADMINISTRATIVO', 1),
(45, 'SECRETARIA B', 17, 'ADMINISTRATIVO', 1),
(46, 'SECRETARIA C', 13, 'ADMINISTRATIVO', 1),
(47, 'SECRETARIA D', 9, 'ADMINISTRATIVO', 1),
(48, 'SECRETARIA E', 7, 'ADMINISTRATIVO', 1),
(49, 'TECNICO ELECTROMEDICO', 12, 'ADMINISTRATIVO', 1),
(50, 'TECNICO DE MANTENIMIENTO', 10, 'ADMINISTRATIVO', 1),
(51, 'MEDICO ESPECIALISTA 5 HORAS ', 16, 'MEDICO', 3),
(52, 'MEDICO ESPECIALISTA 6 HORAS ', 19, 'MEDICO', 3),
(53, 'MEDICO ESPECIALISTA 7 HORAS ', 24, 'MEDICO', 3),
(54, 'MEDICO ESPECIALISTA 8 HORAS ', 24, 'MEDICO', 3),
(55, 'MEDICO ESPECIALISTA 9 HORAS', 33, 'MEDICO', 3),
(56, 'MEDICO ESPECIALISTA SABADO 6 HORAS', 7, 'MEDICO', 3),
(57, 'MEDICO GENERAL 4 HORAS', 12, 'MEDICO', 3),
(58, 'MEDICO GENERAL 5 HORAS', 15, 'MEDICO', 3),
(59, 'MEDICO GENERAL 6 HORAS', 18, 'MEDICO', 3),
(60, 'MEDICO GENERAL 7 HORAS', 22, 'MEDICO', 3),
(61, 'MEDICO GENERAL 8 HORAS', 27, 'MEDICO', 3),
(62, 'MEDICO GENERAL 9 HORAS', 30, 'MEDICO', 3),
(63, 'MEDICO GENERAL SABADO 6 HORAS', 5, 'MEDICO', 3),
(64, 'ODONTOLOGO 4 HORAS', 11, 'MEDICO', 3),
(65, 'ODONTOLOGO 6 HORAS', 17, 'MEDICO', 3),
(66, 'ODONTOLOGO 7 HORAS', 21, 'MEDICO', 3),
(67, 'ODONTOLOGO 8 HORAS', 26, 'MEDICO', 3),
(68, 'ODONTOLOGO 9 HORAS', 31, 'MEDICO', 3),
(69, 'ODONTOLOGO SABADO 6 HORAS', 6, 'MEDICO', 3),
(70, 'ENFERMERA AUXILIAR', 1, 'ENFERMERIA', 4),
(71, 'ENFERMERA PASANTE', 2, 'ENFERMERIA', 4),
(72, 'ENFERMERA GENERAL', 3, 'ENFERMERIA', 4),
(73, 'ENFERMERA ESPECIALISTA', 4, 'ENFERMERIA', 4),
(74, 'CAMILLERO 9 HORAS ', 17, 'PARAMEDICO', 2),
(75, 'CAMILLERO 7 HORAS', 5, 'PARAMEDICO', 2),
(76, 'CITOTECNOLOGO', 2, 'PARAMEDICO', 2),
(77, 'CHOFER DE AMBULANCIA 9 HORAS', 11, 'PARAMEDICO', 2),
(78, 'CHOFER DE AMBULANCIA 7 HORAS', 10, 'PARAMEDICO', 2),
(79, 'DESPACHADOR DE FARMACIA 9 HORAS', 14, 'PARAMEDICO', 2),
(80, 'DESPACHAOR DE FARMACIA 7 HORAS', 3, 'PARAMEDICO', 2),
(81, 'DIETISTA', 21, 'PARAMEDICO', 2),
(82, 'FISIOTERAPISTA', 31, 'PARAMEDICO', 2),
(83, 'HISTOTECNOLOGO', 13, 'PARAMEDICO', 2),
(84, 'INGENIERO BIOMEDICO', 19, 'PARAMEDICO', 2),
(85, 'NUTRIOLOGO 6 HORAS', 20, 'PARAMEDICO', 2),
(86, 'NUTRIOLOGO 7 HORAS', 21, 'PARAMEDICO', 2),
(87, 'NUTRIOLOGO 8 HORAS', 22, 'PARAMEDICO', 2),
(88, 'NUTRIOLOGO 9 HORAS', 23, 'PARAMEDICO', 2),
(89, 'PARAMEDICO', 12, 'PARAMEDICO', 2),
(90, 'PSICOLOGO 4 HORAS', 6, 'PARAMEDICO', 2),
(91, 'PSICOLOGO 6 HORAS', 22, 'PARAMEDICO', 2),
(92, 'PSICOLOGO 7 HORAS', 24, 'PARAMEDICO', 2),
(93, 'PSICOLOGO 8 HORAS', 26, 'PARAMEDICO', 2),
(94, 'PSICOLOGO 9 HORAS', 28, 'PARAMEDICO', 2),
(95, 'QUIMICO 6 HORAS', 25, 'PARAMEDICO', 2),
(96, 'QUIMICO 7 HORAS', 27, 'PARAMEDICO', 2),
(97, 'QUIMICO 8 HORAS', 29, 'PARAMEDICO', 2),
(98, 'QUIMICO 9 HORAS', 30, 'PARAMEDICO', 2),
(99, 'RADIO TERAPISTA', 15, 'PARAMEDICO', 2),
(100, 'RELACIONES PUBLICAS 9 HORAS', 15, 'PARAMEDICO', 2),
(101, 'RELACIONES PUBLICAS 7 HORAS', 4, 'PARAMEDICO', 2),
(102, 'TECNICO BIOMEDICO', 14, 'PARAMEDICO', 2),
(103, 'TECNICO INHALOTERAPIA', 2, 'PARAMEDICO', 2),
(104, 'TECNICO LABORATORISTA', 18, 'PARAMEDICO', 2),
(105, 'TECNICO PATOLOGO', 13, 'PARAMEDICO', 2),
(106, 'TECNICO RADIOLOGO', 7, 'PARAMEDICO', 2),
(107, 'TRABAJADORA SOCIAL AREA MEDICA 9 HORAS', 20, 'PARAMEDICO', 2),
(108, 'TRABAJADORA SOCIAL AREA MEDICA 7 HORAS', 9, 'PARAMEDICO', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_referequi`
--

CREATE TABLE `tbl_referequi` (
  `id_ref` int(2) NOT NULL,
  `tipo_requi` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_referequi`
--

INSERT INTO `tbl_referequi` (`id_ref`, `tipo_requi`) VALUES
(1, 'Vacaciones Primer Periodo'),
(2, 'Vacaciones Segundo Periodo'),
(3, 'Permiso Sin Goce de Sueldo'),
(4, 'Días Económicos'),
(5, 'Incapacidad'),
(6, 'Juicio Laboral'),
(7, 'Prestación de Examen Profesional'),
(8, 'Riesgos y Quinquenios'),
(9, 'Permiso por Nupcias'),
(10, 'Autorización de Beca'),
(11, 'Licencia Sindical'),
(12, 'Permiso por Elección Popular'),
(13, 'Resguardo de Plaza'),
(14, 'Procesó de Escalafón'),
(15, 'Clausulas Sindicales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_stats`
--

CREATE TABLE `tbl_stats` (
  `id_datos` int(11) NOT NULL,
  `num_plaza` int(10) NOT NULL,
  `cod_umed` int(10) NOT NULL,
  `nom_umed` text NOT NULL,
  `nom_cont` text NOT NULL,
  `sexo` tinyint(1) NOT NULL,
  `nom_base` text NOT NULL,
  `clave_cont` int(15) NOT NULL,
  `rfc` int(13) NOT NULL,
  `fecha_ini` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `referencia` text NOT NULL,
  `otro_refe` text NOT NULL,
  `dias_cont` int(10) NOT NULL,
  `turno` text NOT NULL,
  `categoria` text NOT NULL,
  `nivel` int(4) NOT NULL,
  `rango` int(4) NOT NULL,
  `clasificacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_turnos`
--

CREATE TABLE `tbl_turnos` (
  `id_turno` int(1) NOT NULL,
  `nom_turno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_turnos`
--

INSERT INTO `tbl_turnos` (`id_turno`, `nom_turno`) VALUES
(1, 'Matutino'),
(2, 'Vespertino'),
(3, 'Nocturno'),
(4, 'Especial y Días Festivos'),
(5, 'Sabatino'),
(6, '24 x 24'),
(7, '24 x 48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_unidades`
--

CREATE TABLE `tbl_unidades` (
  `id_unidad` int(3) NOT NULL,
  `nom_unidad` text NOT NULL,
  `codigo` int(6) NOT NULL,
  `tipo_uni` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_unidades`
--

INSERT INTO `tbl_unidades` (`id_unidad`, `nom_unidad`, `codigo`, `tipo_uni`) VALUES
(1, 'Dirección General', 10000, 1),
(2, 'Oficina del C. Director General', 10100, 1),
(3, 'Comición Auxiliar Mixta', 10200, 1),
(4, 'Secretaria Particular', 11000, 1),
(5, 'Unidad Juridca Consultiva y de Igualdad de Genero', 12000, 2),
(6, 'Subdirección de lo Contencioso', 12100, 2),
(7, 'Departamento Contencioso Administrativo', 12101, 2),
(8, 'Departamento de Asuntos Laborales', 12102, 2),
(9, 'Departamento de Asuntos Judiciales', 12103, 2),
(10, 'Subdirección Técnico Normativa', 12200, 2),
(11, 'Unidad de Comunicación Social', 13000, 3),
(12, 'Secretaría Técnica', 14000, 3),
(13, 'Unidad de Tecnologías de la Información', 16000, 6),
(14, 'Subdirección de Estrategia Tecnológica', 16100, 6),
(15, 'Departamento de Planeación de la Plataforma Tecnologica', 16101, 6),
(16, 'Departamento de Dictaminación y Gestión Tecnológica', 16102, 6),
(17, 'Subdirección de Ingeniería de Sistemas', 16200, 6),
(18, 'Departamento de Actualización de La Tecnología', 16201, 6),
(19, 'Departamento de Desarrollo de Sistemas', 16202, 6),
(20, 'Subdirección de Infraestructura Informática', 16300, 6),
(21, 'Departamento de Redes y Comunicaciones', 16301, 6),
(22, 'Departamento de Soporte Técnico ', 16302, 6),
(23, 'Órgano Interno de Control', 20000, 4),
(24, 'Subdirección Control Evaluación Administrativa y Financiera', 20100, 4),
(25, 'Subdirección Control Evaluación de Obra', 20200, 4),
(26, 'Subdirección Control Evaluación de Servicios de Salud', 20300, 4),
(27, 'Subdirección Control Evaluación de Prestaciones', 20400, 4),
(28, 'Subdirección Control Evaluación de Responsabilidades', 20500, 4),
(29, 'Coordinacion de Servicios de Salud', 30000, 7),
(30, 'Delegación Administrativa', 30001, 7),
(31, 'Unidad de Planeación e Innovación de los Servicios de Salud', 30100, 7),
(32, 'Departamento de Supervición y Evaluación', 30101, 7),
(33, 'Dirección de Atención a la Salud', 31000, 7),
(34, 'Subdirección de Salud', 31200, 7),
(35, 'Departamento de Promoción de Programas de Salud', 31201, 7),
(36, 'Departamento de Epidemiología', 31203, 7),
(37, 'Departamento de la Salud Materno Infantil', 31204, 7),
(38, 'Departamento de Salud en el Trabajo', 31205, 7),
(39, 'Subdirección de Atención Médica', 31300, 7),
(40, 'Departamento de Primer Nivel de Atención Y Medicina Familiar', 31301, 7),
(41, 'Departamento De Atención en Enfermeria', 31302, 7),
(42, 'Departamento de Hospitales de Alta Especialidad', 31304, 7),
(43, 'Departamento de Evaluación y Supervición', 31305, 7),
(44, 'Subdirección de Farmacia', 31400, 7),
(45, 'Departamento de Operaciones de Farmacias', 31401, 7),
(46, 'Departamento de Farmacias Hospitalarias', 31402, 7),
(47, 'Dirección de Gestión de Control', 32000, 7),
(48, 'Subdirección de Gestión y Logistica de Insumos y Servicios Integrales', 32100, 7),
(49, 'Departamento de Servcios Especializados', 32101, 7),
(50, 'Departamento de Laboratorio y Gabinete', 32102, 7),
(51, 'Departamento de Evaluación Económica de Salud', 32103, 7),
(52, 'Subdirección de Control e Innovación Tecnológica', 32400, 7),
(53, 'Departamento de Evaluación de Tecnologia en Salud', 32401, 7),
(54, 'Departamento de Mantenimiento y Control de Equipo Médico y Laboratorio', 32402, 7),
(55, 'Dirección de Educación e Investigación en Salud', 33000, 7),
(56, 'Departamento de Educación en Salud', 33001, 7),
(57, 'Departamento de Investigación e Innovación Educativa en Salud', 33002, 7),
(58, 'CENTRO MEDICO TOLUCA', 39101, 7),
(59, 'CENTRO MEDICO ECATEPEC', 39102, 7),
(60, 'HOSPITAL MATERNO INFANTIL', 39103, 7),
(61, 'CENTRO ONCOLOGICO ESTATAL', 39104, 7),
(62, 'HOSPITAL REGIONAL DE ZUMPANGO', 39302, 7),
(63, 'HOSPITAL REGIONAL NEZAHUALCOYOTL', 39303, 7),
(64, 'HOSPITAL REGIONAL ECATEPEC', 39304, 7),
(65, 'HOSPITAL REGIONAL TEXCOCO', 39305, 7),
(66, 'HOSPITAL REGIONAL VALLE DE CHALCO SOLIDA', 39306, 7),
(67, 'HOSPITAL REGIONAL VALLE DE BRAVO', 39307, 7),
(68, 'HOSPITAL REGIONAL ATLACOMULCO', 39308, 7),
(69, 'HOSPITAL REGIONAL TENANCINGO', 39310, 7),
(70, 'HOSPITAL REGIONAL TEJUPILCO', 39311, 7),
(71, 'HOSPITAL REGIONAL TOLUCA PPS', 39312, 7),
(72, 'HOSPITAL REGIONAL TLALNEPANTLA PPS', 39313, 7),
(73, 'CLINICA REGIONAL SANTIAGO TIANGUISTENCO', 39401, 7),
(74, 'CLINICA REGIONAL CUAUITLAN IZCALLI', 39402, 7),
(75, 'CLINICA REGIONAL AMECAMECA', 39403, 7),
(76, 'CLINICA REGIONAL JILOTEPEC', 39405, 7),
(77, 'CLINICA REGIONAL ALMOLYA DE ALQUISIRAS', 39406, 7),
(78, 'CLINICA REGIONAL IXTAPAN DE LA SAL', 39407, 7),
(79, 'CLINICA DE CONSULTA EXTERNA ALFREDO DEL MAZO VELEZ', 39501, 7),
(80, 'CLINICA DE CONSULTA EXTERNA LERMA IGNACIO ALLENDE BICENTENARIO', 39502, 7),
(81, 'CLINICA DE CONSULTA EXTERNA HUIXQUILUCAN', 39503, 7),
(82, 'CLINICA DE CONSULTA EXTERNA NAUCALPAN', 39504, 7),
(83, 'CLINICA DE CONSULTA EXTERNA SAN MARTIN DE LAS PIRAMIDES', 39505, 7),
(84, 'CLINICA DE CONSULTA EXTERNA COACALCO', 39506, 7),
(85, 'CLINICA DE CONSULTA EXTERNA ECATEPEC NORTE', 39507, 7),
(86, 'CLINICA DE CONSULTA EXTERNA CHALCO', 39508, 7),
(87, 'CLINICA DE CONSULTA EXTERNA TULTITALN', 39510, 7),
(88, 'CLINICA DE CONSULTA EXTERNA ATIZAPAN DE ZARAGOZA', 39511, 7),
(89, 'CLINICA DE CONSULTA EXTERNA ECATEPEC CENTRO', 39512, 7),
(90, 'CLINICA DE CONSULTA EXTERNA RANCHO LA MORA', 39601, 7),
(91, 'CLINICA DE CONSULTA EXTERNA LAZARO CARDENAS', 39602, 7),
(92, 'CLINICA DE CONSULTA EXTERNA TENANGO DEL VALLE', 39603, 7),
(93, 'CLINICA DE CONSULTA EXTERNA TLALNEPANTLA', 39604, 7),
(94, 'CLINICA DE CONSULTA EXTERNA NICOLAS ROMERO', 39605, 7),
(95, 'CLINICA DE CONSULTA EXTERNA CHIMALHUACAN', 39607, 7),
(96, 'CLINICA DE CONSULTA EXTERNA IXTAPALUCA', 39608, 7),
(97, 'CLINICA DE CONSULTA EXTERNA ECATEPEC SUR', 39610, 7),
(98, 'CLINICA DE CONSULTA EXTERNA OZUMBA', 39611, 7),
(99, 'CLINICA DE CONSULTA EXTERNA LOS REYES LA PAZ', 39612, 7),
(100, 'CLINICA DE CONSULTA EXTERNA VALLE DE BRAVO', 39613, 7),
(101, 'CLINICA DE CONSULTA EXTERNA SAN PEDRO LIMON', 39614, 7),
(102, 'CLINICA DE CONSULTA EXTERNA IXTLAHUACA', 39615, 7),
(103, 'CLINICA DE CONSULTA EXTERNA ACAMBAY', 39616, 7),
(104, 'CLINICA DE CONSULTA EXTERNA SAN FELIPE DEL PROGRESO', 39617, 7),
(105, 'CLINICA DE CONSULTA EXTERNA JIQUIPILCO', 39618, 7),
(106, 'CLINICA DE CONSULTA EXTERNA VILLA GUERRERO', 39619, 7),
(107, 'CLINICA DE CONSULTA EXTERNA COATEPEC HARINAS', 39620, 7),
(108, 'CLINICA DE CONSULTA EXTERNA VILLA VICTORIA', 39621, 7),
(109, 'CLINICA DE CONSULTA EXTERNA TOLUCA', 39623, 7),
(110, 'CLINICA DE REHABILITACIÓN FISICA INTEGRAL ISSEMyM', 39624, 7),
(111, 'CLINICA ODONTOLOGICA MORELOS', 39701, 7),
(112, 'CONSULTORIO MEDICO OTZOLOTEPEC', 39801, 7),
(113, 'CONSULTORIO MEDICO ALMOLOYA DE JUAREZ SUTEYM', 39802, 7),
(114, 'CONSULTORIO MEDICO SAN JOSE VILLA DE ALLENDE', 39803, 7),
(115, 'CONSULTORIO MEDICO CUAUTITLAN MEXICO', 39805, 7),
(116, 'CONSULTORIO MEDICO ATIZAPAN DE ZARAGOZA', 39806, 7),
(117, 'CONSULTORIO MEDICO COYOTEPEC', 39807, 7),
(118, 'CONSULTORIO MEDICO HUEHUETOCA', 39809, 7),
(119, 'CONSULTORIO MEDICO TULTEPEC', 39810, 7),
(120, 'CONSULTORIO MEDICO TECAMAC', 39811, 7),
(121, 'CONSULTORIO MEDICO AMATEPEC', 39813, 7),
(122, 'CONSULTORIO MEDICO PALMAR CHICO', 39814, 7),
(123, 'CONSULTORIO MEDICO SAN SIMON DE GUERRERO', 39815, 7),
(124, 'CONSULTORIO MEDICO LUVIANOS', 39816, 7),
(125, 'CONSULTORIO MEDICO ZACAZONAPAN', 39817, 7),
(126, 'CONSULTORIO MEDICO TEMASCALTEPEC', 39818, 7),
(127, 'CONSULTORIO MEDICO TLATLAYA', 39819, 7),
(128, 'CONSULTORIO MEDICO SAN ANTONIO DEL ROSARIO', 39820, 7),
(129, 'CONSULTORIO MEDICO SANTA ANA ZICATECOYAN', 39821, 7),
(130, 'CONSULTORIO MEDICO SANTO TOMAS DE LOS PLATANOS', 39822, 7),
(131, 'CONSULTORIO MEDICO OTZOLOAPAN', 39823, 7),
(132, 'CONSULTORIO MEDICO JOCOTITLAN', 39824, 7),
(133, 'CONSULTORIO MEDICO LA LOMA ACAMBAY', 39826, 7),
(134, 'CONSULTORIO MEDICO SAN JOSE DEL RINCON', 39827, 7),
(135, 'CONSULTORIO MEDICO TEMASCALCINGO', 39828, 7),
(136, 'CONSULTORIO MEDICO VILLA DEL CARBON', 39829, 7),
(137, 'CONSULTORIO MEDICO ACULCO', 39830, 7),
(138, 'CONSULTORIO MEDICO POLOTITLAN', 39831, 7),
(139, 'CONSULTORIO MEDICO SAN ANDRES TIMILPAN', 39832, 7),
(140, 'CONSULTORIO MEDICO TEXCALTITLAN', 39833, 7),
(141, 'CONSULTORIO MEDICO ZACUALPAN', 39834, 7),
(142, 'CONSULTORIO MEDICO SULTEPEC', 39835, 7),
(143, 'CONSULTORIO MEDICO MALINALCO', 39836, 7),
(144, 'CONSULTORIO MEDICO OCUILAN', 39837, 7),
(145, 'CONSULTORIO MEDICO EL ORO', 39838, 7),
(146, 'CONSULTORIO MEDICO TEOLOYUCAN', 39839, 7),
(147, 'CONSULTORIO MEDICO SEDAGRO', 39901, 7),
(148, 'CONSULTORIO MEDICO H. AYUNTAMIENTO ALMOLOYA DE JUAREZ', 39902, 7),
(149, 'CONSULTORIO MEDICO PALACIO DE GOBIERNO', 39903, 7),
(150, 'CONSULTORIO MEDICO NORMAL', 39904, 7),
(151, 'CONSULTORIO MEDICO JUNTA DE CAMINOS', 39905, 7),
(152, 'CONSULTORIO MEDICO ESTATAL DE INFORMATICA', 39906, 7),
(153, 'CONSULTORIO MEDICO MAGISTERIO', 39907, 7),
(154, 'CONSULTORIO MEDICO OCOYOACAC', 39908, 7),
(155, 'CONSULTORIO MEDICO ICATI', 39909, 7),
(156, 'CONSULTORIO MEDICO DE AGUA Y SANEAMIENTO', 39910, 7),
(157, 'CONSULTORIO MEDICO CEAS NAUCALPAN CAEM', 39911, 7),
(158, 'CONSULTORIO MEDICO UNIVERSIDAD TECNOLOGICA FIDEL VELASQUEZ', 39912, 7),
(159, 'CONSULTORIO MEDICO UNIVERSIDAD TECNOLOGICA DE NEZAHUALCOYOTL', 39913, 7),
(160, 'CONSULTORIO MEDICO UNIVERSIDAD TECNOLOGICA DEL SUR DEL ESTADO DE MÉXICO', 39914, 7),
(161, 'CONSULTORIO MEDICO H. AYUNTAMIENTO DE VALLE DE BRAVO', 39915, 7),
(162, 'CONSULTORIO MEDICO UNIVERSIDAD AUTONOMA DEL ESTADO DE MEXICO', 39916, 7),
(163, 'UNIDAD DE ATENCION MEDICA MOVIL SUTEYM', 39950, 7),
(164, 'UNIDAD DE ATENCION MEDICA MOVIL REGION 1', 39951, 7),
(165, 'UNIDAD DE ATENCION MEDICA MOVIL REGION 2', 39952, 7),
(166, 'UNIDAD DE ATENCION MEDICA MOVIL REGION 3', 39953, 7),
(167, 'UNIDAD DE ATENCION MEDICA MOVIL REGION 4', 39954, 7),
(168, 'UNIDAD DE ATENCION MEDICA MOVIL REGION 5', 39955, 7),
(169, 'UNIDAD DE ATENCION MEDICA MOVIL REGION 6', 39956, 7),
(170, 'UNIDAD DE ATENCION MEDICA GINECOLOGICA ESTATAL', 39958, 7),
(171, 'Coordinación de Prestaciones y Seguridad Social', 40000, 8),
(172, 'delegación administrativa', 40001, 8),
(173, 'Dirección de Prestaciones', 41000, 8),
(174, 'Subdirección de Administración Crediticia', 41100, 8),
(175, 'Departamento de Creditos', 41102, 8),
(176, 'Departamento de Control de Cartera', 41104, 8),
(177, 'Subdirección de Prestaciones Potestativas', 41200, 8),
(178, 'Departamento de Centros Vacacionales', 41201, 8),
(179, 'Departamento de Centros Asistenciales', 41202, 8),
(180, 'Departamento de Protección al Salario', 41203, 8),
(181, 'Centro Vacacional Tonatico', 41210, 8),
(182, 'Centro Vacacional Valle de Bravo', 41211, 8),
(183, 'Centro Vacacional El Ocotal', 41212, 8),
(184, 'Centro de Pensionados Eva Samano', 41221, 8),
(185, 'Estancia Infantil Margarita Maza de Juárez', 41222, 8),
(186, 'Estancia Infantil Rosa María Sánchez', 41223, 8),
(187, 'Dirección de Seguridad Social', 42000, 8),
(188, 'Subdirección de Administración del Sistema para el Retiro', 42200, 8),
(189, 'Departamento de Control de Cuentas Individuales', 42202, 8),
(190, 'Departamento de Pensiones', 42203, 8),
(191, 'Subdirección de Relaciones Institucionales', 42300, 8),
(192, 'Ventanilla Única de Atención Integral a Instituciones Públicas', 42301, 8),
(193, 'Departamento de Vigencia de Derechos', 42302, 8),
(194, 'Departamento de Control Y Actualización Documental', 42303, 8),
(195, 'Dirección de Atención al Derechohabiente', 43000, 8),
(196, 'Unidad de Atención al Derechohabiente Toluca', 43100, 8),
(197, 'Oficina Atención al Derechohabiente Atlacomulco', 43101, 8),
(198, 'Oficina Atención al Derechohabiente Ixtapan de la Sal', 43102, 8),
(199, 'Oficina Atención al Derechohabiente Tejupilco', 43103, 8),
(200, 'Oficina Atención al Derechohabiente Valle de Bravo', 43104, 8),
(201, 'Unidad de Atención al Derechohabiente Naucalpan', 43200, 8),
(202, 'Oficina Atencion al Derchohabiente Nezahualcoyotl', 43201, 8),
(203, 'Oficina Atención al Derechohabiente Amecameca', 43202, 8),
(204, 'Unidad de Atención al Derechohabiente Ecatepec', 43300, 8),
(205, 'Oficina Atención al Derechohabiente Zumpango', 43301, 8),
(206, 'Oficina Atención al Derechohabiente Texcoco', 43302, 8),
(207, 'Coordinación de Administración y Finanzas', 50000, 9),
(208, 'Delegación Administrativa', 50001, 9),
(209, 'Subdirección de Contabilidad y Control Presupuestal', 50400, 9),
(210, 'Departamento de Contabilidad', 50401, 9),
(211, 'Departamento de Control Presupuestal', 50403, 9),
(212, 'Dirección de Administración Financiera', 51000, 9),
(213, 'Subdirección de Ingresos', 51100, 9),
(214, 'Departamento de Control de Ingresos', 51101, 9),
(215, 'Departamento de Fiscalización', 51102, 9),
(216, 'Departamento de Cobranza', 51103, 9),
(217, 'Subdirección de Tesoreria', 51200, 9),
(218, 'Departamento de Control de Pagos', 51201, 9),
(219, 'Departamento de Egresos', 51202, 9),
(220, 'Subdirección de Inversiones', 51300, 9),
(221, 'Departamento de Riesgos', 51301, 9),
(222, 'Departamento de Gestión de Inversiones', 51302, 9),
(223, 'Subdirección de Obras y Mantenimiento', 60300, 9),
(224, 'Departamento de Proyectos y Obras', 60301, 9),
(225, 'Departamento de Conservación y Mantenimiento de Bienes Muebles e Inmuebles', 60302, 9),
(226, 'Subdirección de Logistica y Control Patrimonial', 60400, 9),
(227, 'Departamento de Farmacoeconomía', 60401, 9),
(228, 'Departamento de Logística y Administración de Inventarios', 60402, 9),
(229, 'Departamento de Control Patrimonial y Riesgos', 60403, 9),
(230, 'Direccion de Adquisiciones y Servicios', 61000, 9),
(231, 'Subdirección de Servicios', 61100, 9),
(232, 'Departamento de Servicios', 61101, 9),
(233, 'Departamento de Archivo y Documentación', 61103, 9),
(234, 'Departamento de Protección Civil', 61104, 9),
(235, 'Subdirección de Suministro de Bienes', 61200, 9),
(236, 'Departamento de Adquisiciones', 61201, 9),
(237, 'Departamento de Adquisiciones', 61201, 9),
(238, 'Departamento de Apoyo a Comités (Licitaciones y Air)', 61202, 9),
(239, 'Dirección de Administración y Desarrollo de Personal', 62000, 9),
(240, 'Subdirección de Personal', 62100, 9),
(241, 'Departamento de Administración de Personal', 62101, 9),
(242, 'Departamento de Segurida e Higiene', 62102, 9),
(243, 'Subdirección de Desarrollo de Personal', 62200, 9),
(244, 'Departamento de Profecionalización', 62201, 9),
(245, 'Departamento de Evaluación del Desempeño', 62202, 9),
(246, 'Direccion de Obras y Control Patrimonial', 63000, 9),
(247, 'Unidad de Estrategia Administrativa', 64000, 9),
(248, 'Coordinación de Innovación y Calidad', 70000, 10),
(249, 'Dirección de Mejoramiento de Procesos', 71000, 10),
(250, 'Departamento de Evaluación de Procesos', 71001, 10),
(251, 'Subdirección de Procedimientos Operativos', 71200, 10),
(252, 'Departamento de Procedimeintos Médicos', 71201, 10),
(253, 'Departamento de Procedimientos Administrativos', 71202, 10),
(254, 'Dirección de Desarrollo y Calidad', 72000, 10),
(255, 'Subdirección de Calidad', 72300, 10),
(256, 'Subdirección de Proyectos Estratégicos', 72400, 10),
(257, 'Unidd de Información, Planeación, Programación y Evaluación', 80000, 5),
(258, 'Dirección de Información y Estudios Actuariales', 81000, 5),
(259, 'Departamento de Acceso a la información Institucional', 81001, 5),
(260, 'Departamento de Estudios Actuariales', 81002, 5),
(261, 'Subdirección de Estadistica y Evaluación', 81100, 5),
(262, 'Departamento de Estadística Institucional', 81101, 5),
(263, 'Departamento de Bioestadística', 81102, 5),
(264, 'Departamento de Evaluación', 81103, 5),
(265, 'Dirección de Planeación Estrategica y Programación', 82000, 5),
(266, 'Subdirección de Programación y Análisis Presupuestal', 82100, 5),
(267, 'Unidad de Seguimiento y Control', 90000, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(2) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `email`, `password`) VALUES
(3, 'gus@mail.com', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_claspuesto`
--
ALTER TABLE `tbl_claspuesto`
  ADD PRIMARY KEY (`id_ClasPuesto`);

--
-- Indices de la tabla `tbl_cordinaciones`
--
ALTER TABLE `tbl_cordinaciones`
  ADD PRIMARY KEY (`id_cord`);

--
-- Indices de la tabla `tbl_dias`
--
ALTER TABLE `tbl_dias`
  ADD PRIMARY KEY (`id_dias`);

--
-- Indices de la tabla `tbl_directivos`
--
ALTER TABLE `tbl_directivos`
  ADD PRIMARY KEY (`id_directivo`);

--
-- Indices de la tabla `tbl_formato`
--
ALTER TABLE `tbl_formato`
  ADD PRIMARY KEY (`id_registro`);

--
-- Indices de la tabla `tbl_infosuplentes`
--
ALTER TABLE `tbl_infosuplentes`
  ADD PRIMARY KEY (`id_suplente`);

--
-- Indices de la tabla `tbl_puestos`
--
ALTER TABLE `tbl_puestos`
  ADD PRIMARY KEY (`id_puesto`);

--
-- Indices de la tabla `tbl_referequi`
--
ALTER TABLE `tbl_referequi`
  ADD PRIMARY KEY (`id_ref`);

--
-- Indices de la tabla `tbl_stats`
--
ALTER TABLE `tbl_stats`
  ADD PRIMARY KEY (`id_datos`);

--
-- Indices de la tabla `tbl_turnos`
--
ALTER TABLE `tbl_turnos`
  ADD PRIMARY KEY (`id_turno`);

--
-- Indices de la tabla `tbl_unidades`
--
ALTER TABLE `tbl_unidades`
  ADD PRIMARY KEY (`id_unidad`);

--
-- Indices de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_claspuesto`
--
ALTER TABLE `tbl_claspuesto`
  MODIFY `id_ClasPuesto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_cordinaciones`
--
ALTER TABLE `tbl_cordinaciones`
  MODIFY `id_cord` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tbl_dias`
--
ALTER TABLE `tbl_dias`
  MODIFY `id_dias` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tbl_directivos`
--
ALTER TABLE `tbl_directivos`
  MODIFY `id_directivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_formato`
--
ALTER TABLE `tbl_formato`
  MODIFY `id_registro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `tbl_infosuplentes`
--
ALTER TABLE `tbl_infosuplentes`
  MODIFY `id_suplente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tbl_puestos`
--
ALTER TABLE `tbl_puestos`
  MODIFY `id_puesto` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT de la tabla `tbl_referequi`
--
ALTER TABLE `tbl_referequi`
  MODIFY `id_ref` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tbl_stats`
--
ALTER TABLE `tbl_stats`
  MODIFY `id_datos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_turnos`
--
ALTER TABLE `tbl_turnos`
  MODIFY `id_turno` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbl_unidades`
--
ALTER TABLE `tbl_unidades`
  MODIFY `id_unidad` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
