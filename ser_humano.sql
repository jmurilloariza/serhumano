-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-12-2017 a las 04:51:08
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ser_humano`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `alumno_id` int(11) NOT NULL,
  `tipo_documento` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `numero_documento` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `lugar_exp_mun` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `lugar_exp_depto` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_1` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_2` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_1` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_2` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_nac` date NOT NULL,
  `lugar_nac_mun` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `lugar_nac_depto` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `discapacidad` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `cap_excepcionales` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `anexo_documento` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anexo_hoja_vida`
--

CREATE TABLE `anexo_hoja_vida` (
  `anexo_id` int(11) NOT NULL,
  `tutor` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `uibicacion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `extension` varchar(5) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacidades_excepcionales`
--

CREATE TABLE `capacidades_excepcionales` (
  `cad_excep_id` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `capacidad_excepcional` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `capacidades_excepcionales`
--

INSERT INTO `capacidades_excepcionales` (`cad_excep_id`, `capacidad_excepcional`) VALUES
('﻿1', 'Superdotado                                  '),
('2', 'Con talento científico                       '),
('3', 'Con talento tecnológico                      '),
('4', 'Con talento subjetivo                        '),
('9', 'No Aplica\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `cuenta_id` int(11) NOT NULL,
  `email` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `foto_perfil` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_cuenta` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas_roles`
--

CREATE TABLE `cuentas_roles` (
  `cuenta_id` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `num_departamento` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `departamento` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`num_departamento`, `departamento`) VALUES
('﻿05', 'ANTIOQUIA'),
('08', 'ATLANTICO\r'),
('11', 'BOGOTA\r'),
('13', 'BOLIVAR\r'),
('15', 'BOYACA\r'),
('17', 'CALDAS\r'),
('18', 'CAQUETA\r'),
('19', 'CAUCA\r'),
('20', 'CESAR\r'),
('23', 'CORDOBA\r'),
('25', 'CUNDINAMARCA\r'),
('27', 'CHOCO\r'),
('41', 'HUILA\r'),
('44', 'LA GUAJIRA\r'),
('47', 'MAGDALENA\r'),
('50', 'META\r'),
('52', 'NARIÑO\r'),
('54', 'N. DE SANTANDER\r'),
('63', 'QUINDIO\r'),
('66', 'RISARALDA\r'),
('68', 'SANTANDER\r'),
('70', 'SUCRE\r'),
('73', 'TOLIMA\r'),
('76', 'VALLE DEL CAUCA\r'),
('81', 'ARAUCA\r'),
('85', 'CASANARE\r'),
('86', 'PUTUMAYO\r'),
('88', 'SAN ANDRES\r'),
('91', 'AMAZONAS\r'),
('94', 'GUAINIA\r'),
('95', 'GUAVIARE\r'),
('97', 'VAUPES\r'),
('99', 'VICHADA\r'),
('N', 'No aplica\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discapacidades`
--

CREATE TABLE `discapacidades` (
  `discapacidad_id` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `discapacidad` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `discapacidades`
--

INSERT INTO `discapacidades` (`discapacidad_id`, `discapacidad`) VALUES
('﻿1', 'Sordera Profunda \r'),
('10', 'Múltiple                                     '),
('2', 'Hipoacusia o Baja audición\r'),
('3', 'Baja visión diagnosticada \r'),
('4', 'Ceguera \r'),
('5', 'Parálisis cerebral \r'),
('6', 'Lesión neuromuscular \r'),
('7', 'Autismo \r'),
('8', 'Deficiencia cognitiva (Retardo Mental) \r'),
('9', 'Síndrome de Down \r'),
('99', 'No aplica\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educacion_superior`
--

CREATE TABLE `educacion_superior` (
  `educacion_superior_id` int(11) NOT NULL,
  `modalidad_academica_id` int(11) NOT NULL,
  `tutor` int(11) NOT NULL,
  `numero_semest_aprob` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `graduado` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `estudio_titulo_obte` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_terminacion` date DEFAULT NULL,
  `num_tarjeta_prof` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etnia`
--

CREATE TABLE `etnia` (
  `etnia_id` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `etnia` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `etnia`
--

INSERT INTO `etnia` (`etnia_id`, `etnia`) VALUES
('00', 'No Aplica'),
('08', 'Bari'),
('70', 'uwa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencia_laboral`
--

CREATE TABLE `experiencia_laboral` (
  `experiencia_id` int(11) NOT NULL,
  `tutor` int(11) NOT NULL,
  `empresa_entidad` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pais` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `departamento` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `municipio` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `correo_entidad` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_retiro` date NOT NULL,
  `cargo_contratado` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `dependencia` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `estado_contrato` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

CREATE TABLE `grados` (
  `clei` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `grado` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `grados`
--

INSERT INTO `grados` (`clei`, `grado`) VALUES
('﻿22', '4 y 5\r'),
('23', '6 y 7\r'),
('24', '8 y 9\r'),
('25', '10\r'),
('26', '11\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituciones`
--

CREATE TABLE `instituciones` (
  `institucion_id` int(11) NOT NULL,
  `cod_mun_dist` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `cod_depto_dist` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `cod_dane_ie` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `cod_dane_antiguo` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `consecutivo_sede` varchar(14) COLLATE utf8_spanish_ci NOT NULL,
  `establecimiento_educativo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_rector` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `cedula_rector` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `correo_rector` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `matricula_id` int(11) NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `institucion_id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `jornada` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `caracter` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `especialidad` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `grado` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `grupo_curso` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `metodologia` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `subsidiado` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `repitente` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `nie` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `saaa` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `cafaa` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `fuente_recursos` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `zra` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `amcf` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `bvfp` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `bhdmcf` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `bhn` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `pvc` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `ume` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ude` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sector_privado` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `pom` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `etnia` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `resguardo` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ibo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `sisben` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `direccion_residencia` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `lrm` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `lrd` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estrato` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `anos_cumplido` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_matricula` date NOT NULL,
  `ano_reporte` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `anexo_certif_ante` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad_academica`
--

CREATE TABLE `modalidad_academica` (
  `modalidad_id` int(11) NOT NULL,
  `modalidad` varchar(3) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Tecnica(T) - Tecnologia (TC) - Tecnologia Especializada(TE) - Universitaria(UN) - Especialización(ES) - Maestria o Magister(MG) - Doctorado o PHD(DOC)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `modalidad_academica`
--

INSERT INTO `modalidad_academica` (`modalidad_id`, `modalidad`) VALUES
(1, 'T\r'),
(2, 'TC\r'),
(3, 'TE\r'),
(4, 'UN\r'),
(5, 'ES\r'),
(6, 'MG\r'),
(7, 'DOC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `modulo_id` int(11) NOT NULL,
  `modulo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ar` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `num_municipio` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `num_departamento` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `municipio` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`num_municipio`, `num_departamento`, `municipio`) VALUES
('﻿00', '05', 'MEDELLIN\r'),
('001', '08', 'BARRANQUILLA\r'),
('001', '11', 'BOGOTA, D.C.\r'),
('001', '13', 'CARTAGENA\r'),
('001', '15', 'TUNJA\r'),
('001', '17', 'MANIZALES\r'),
('001', '18', 'FLORENCIA\r'),
('001', '19', 'POPAYAN\r'),
('001', '20', 'VALLEDUPAR\r'),
('001', '23', 'MONTERIA\r'),
('001', '25', 'AGUA DE DIOS\r'),
('001', '27', 'QUIBDO\r'),
('001', '41', 'NEIVA\r'),
('001', '44', 'RIOHACHA\r'),
('001', '47', 'SANTA MARTA\r'),
('001', '50', 'VILLAVICENCIO\r'),
('001', '52', 'PASTO\r'),
('001', '54', 'CUCUTA\r'),
('001', '63', 'ARMENIA\r'),
('001', '66', 'PEREIRA\r'),
('001', '68', 'BUCARAMANGA\r'),
('001', '70', 'SINCELEJO\r'),
('001', '73', 'IBAGUE\r'),
('001', '76', 'CALI\r'),
('001', '81', 'ARAUCA\r'),
('001', '85', 'YOPAL\r'),
('001', '86', 'MOCOA\r'),
('001', '88', 'SAN ANDRES\r'),
('001', '91', 'LETICIA\r'),
('001', '94', 'INIRIDA\r'),
('001', '95', 'SAN JOSE DEL GUAVIARE\r'),
('001', '97', 'MITU\r'),
('001', '99', 'PUERTO CARREÑO\r'),
('002', '05', 'ABEJORRAL\r'),
('003', '54', 'ABREGO\r'),
('004', '05', 'ABRIAQUI\r'),
('006', '13', 'ACHI\r'),
('006', '27', 'ACANDI\r'),
('006', '41', 'ACEVEDO\r'),
('006', '50', 'ACACIAS\r'),
('010', '85', 'AGUAZUL\r'),
('011', '20', 'AGUACHICA\r'),
('013', '17', 'AGUADAS\r'),
('013', '20', 'AGUSTIN CODAZZI\r'),
('013', '41', 'AGRADO\r'),
('013', '68', 'AGUADA\r'),
('015', '85', 'CHAMEZA\r'),
('015', '95', 'CALAMAR\r'),
('016', '41', 'AIPE\r'),
('019', '25', 'ALBAN\r'),
('019', '52', 'ALBAN\r'),
('020', '41', 'ALGECIRAS\r'),
('020', '68', 'ALBANIA\r'),
('020', '76', 'ALCALA\r'),
('021', '05', 'ALEJANDRIA\r'),
('022', '15', 'ALMEIDA\r'),
('022', '19', 'ALMAGUER\r'),
('022', '52', 'ALDANA\r'),
('024', '73', 'ALPUJARRA\r'),
('025', '27', 'ALTO BAUDO\r'),
('025', '95', 'EL RETORNO\r'),
('026', '41', 'ALTAMIRA\r'),
('026', '73', 'ALVARADO\r'),
('029', '18', 'ALBANIA\r'),
('030', '05', 'AMAGA\r'),
('030', '13', 'ALTOS DEL ROSARIO\r'),
('030', '47', 'ALGARROBO\r'),
('030', '73', 'AMBALEMA\r'),
('031', '05', 'AMALFI\r'),
('032', '20', 'ASTREA\r'),
('034', '05', 'ANDES\r'),
('035', '25', 'ANAPOIMA\r'),
('035', '44', 'ALBANIA\r'),
('036', '05', 'ANGELOPOLIS\r'),
('036', '52', 'ANCUYA\r'),
('036', '76', 'ANDALUCIA\r'),
('038', '05', 'ANGOSTURA\r'),
('040', '05', 'ANORI\r'),
('040', '25', 'ANOLAIMA\r'),
('041', '76', 'ANSERMANUEVO\r'),
('042', '05', 'SANTAFE DE ANTIOQUIA\r'),
('042', '13', 'ARENAL\r'),
('042', '17', 'ANSERMA\r'),
('043', '73', 'ANZOATEGUI\r'),
('044', '05', 'ANZA\r'),
('045', '05', 'APARTADO\r'),
('045', '20', 'BECERRIL\r'),
('045', '66', 'APIA\r'),
('047', '15', 'AQUITANIA\r'),
('050', '17', 'ARANZAZU\r'),
('050', '19', 'ARGELIA\r'),
('050', '27', 'ATRATO\r'),
('051', '05', 'ARBOLETES\r'),
('051', '15', 'ARCABUCO\r'),
('051', '52', 'ARBOLEDA\r'),
('051', '54', 'ARBOLEDAS\r'),
('051', '68', 'ARATOCA\r'),
('052', '13', 'ARJONA\r'),
('053', '25', 'ARBELAEZ\r'),
('053', '47', 'ARACATACA\r'),
('054', '76', 'ARGELIA\r'),
('055', '05', 'ARGELIA\r'),
('055', '73', 'ARMERO\r'),
('058', '47', 'ARIGUANI\r'),
('059', '05', 'ARMENIA\r'),
('060', '20', 'BOSCONIA\r'),
('062', '13', 'ARROYOHONDO\r'),
('065', '81', 'ARAUQUITA\r'),
('067', '73', 'ATACO\r'),
('068', '23', 'AYAPEL\r'),
('073', '27', 'BAGADO\r'),
('074', '13', 'BARRANCO DE LOBA\r'),
('075', '19', 'BALBOA\r'),
('075', '27', 'BAHIA SOLANO\r'),
('075', '66', 'BALBOA\r'),
('077', '27', 'BAJO BAUDO\r'),
('077', '68', 'BARBOSA\r'),
('078', '08', 'BARANOA\r'),
('078', '41', 'BARAYA\r'),
('078', '44', 'BARRANCAS\r'),
('079', '05', 'BARBOSA\r'),
('079', '23', 'BUENAVISTA\r'),
('079', '52', 'BARBACOAS\r'),
('079', '68', 'BARICHARA\r'),
('081', '68', 'BARRANCABERMEJA\r'),
('083', '52', 'BELEN\r'),
('086', '05', 'BELMIRA\r'),
('086', '25', 'BELTRAN\r'),
('087', '15', 'BELEN\r'),
('088', '05', 'BELLO\r'),
('088', '17', 'BELALCAZAR\r'),
('088', '66', 'BELEN DE UMBRIA\r'),
('090', '15', 'BERBEO\r'),
('090', '23', 'CANALETE\r'),
('090', '44', 'DIBULLA\r'),
('091', '05', 'BETANIA\r'),
('092', '15', 'BETEITIVA\r'),
('092', '68', 'BETULIA\r'),
('093', '05', 'BETULIA\r'),
('094', '18', 'BELEN DE LOS ANDAQUIES\r'),
('095', '25', 'BITUIMA\r'),
('097', '15', 'BOAVITA\r'),
('098', '44', 'DISTRACCION\r'),
('099', '25', 'BOJACA\r'),
('099', '27', 'BOJAYA\r'),
('099', '54', 'BOCHALEMA\r'),
('100', '19', 'BOLIVAR\r'),
('100', '76', 'BOLIVAR\r'),
('101', '05', 'CIUDAD BOLIVAR\r'),
('101', '68', 'BOLIVAR\r'),
('104', '15', 'BOYACA\r'),
('106', '15', 'BRICEÑO\r'),
('107', '05', 'BRICEÑO\r'),
('109', '15', 'BUENAVISTA\r'),
('109', '54', 'BUCARASICA\r'),
('109', '76', 'BUENAVENTURA\r'),
('110', '19', 'BUENOS AIRES\r'),
('110', '44', 'EL MOLINO\r'),
('110', '50', 'BARRANCA DE UPIA\r'),
('110', '52', 'BUESACO\r'),
('110', '70', 'BUENAVISTA\r'),
('111', '63', 'BUENAVISTA\r'),
('111', '76', 'GUADALAJARA DE BUGA\r'),
('113', '05', 'BURITICA\r'),
('113', '76', 'BUGALAGRANDE\r'),
('114', '15', 'BUSBANZA\r'),
('120', '05', 'CACERES\r'),
('120', '25', 'CABRERA\r'),
('121', '68', 'CABRERA\r'),
('122', '76', 'CAICEDONIA\r'),
('123', '25', 'CACHIPAY\r'),
('124', '50', 'CABUYARO\r'),
('124', '70', 'CAIMITO\r'),
('124', '73', 'CAJAMARCA\r'),
('125', '05', 'CAICEDO\r'),
('125', '54', 'CACOTA\r'),
('125', '85', 'HATO COROZAL\r'),
('126', '25', 'CAJICA\r'),
('126', '76', 'CALIMA\r'),
('128', '54', 'CACHIRA\r'),
('129', '05', 'CALDAS\r'),
('130', '19', 'CAJIBIO\r'),
('130', '63', 'CALARCA\r'),
('130', '76', 'CANDELARIA\r'),
('131', '15', 'CALDAS\r'),
('132', '41', 'CAMPOALEGRE\r'),
('132', '68', 'CALIFORNIA\r'),
('134', '05', 'CAMPAMENTO\r'),
('135', '15', 'CAMPOHERMOSO\r'),
('135', '27', 'EL CANTON DEL SAN PABLO\r'),
('136', '85', 'LA SALINA\r'),
('137', '08', 'CAMPO DE LA CRUZ\r'),
('137', '19', 'CALDONO\r'),
('138', '05', 'CAÑASGORDAS\r'),
('139', '85', 'MANI\r'),
('140', '13', 'CALAMAR\r'),
('141', '08', 'CANDELARIA\r'),
('142', '05', 'CARACOLI\r'),
('142', '19', 'CALOTO\r'),
('145', '05', 'CARAMANTA\r'),
('147', '05', 'CAREPA\r'),
('147', '68', 'CAPITANEJO\r'),
('147', '76', 'CARTAGO\r'),
('148', '05', 'EL CARMEN DE VIBORAL\r'),
('148', '25', 'CAPARRAPI\r'),
('148', '73', 'CARMEN DE APICALA\r'),
('150', '05', 'CAROLINA\r'),
('150', '18', 'CARTAGENA DEL CHAIRA\r'),
('150', '27', 'CARMEN DEL DARIEN\r'),
('150', '50', 'CASTILLA LA NUEVA\r'),
('151', '25', 'CAQUEZA\r'),
('152', '68', 'CARCASI\r'),
('152', '73', 'CASABIANCA\r'),
('154', '05', 'CAUCASIA\r'),
('154', '25', 'CARMEN DE CARUPA\r'),
('160', '13', 'CANTAGALLO\r'),
('160', '27', 'CERTEGUI\r'),
('160', '68', 'CEPITA\r'),
('161', '47', 'CERRO SAN ANTONIO\r'),
('161', '97', 'CARURU\r'),
('162', '15', 'CERINZA\r'),
('162', '23', 'CERETE\r'),
('162', '68', 'CERRITO\r'),
('162', '85', 'MONTERREY\r'),
('167', '68', 'CHARALA\r'),
('168', '23', 'CHIMA\r'),
('168', '25', 'CHAGUANI\r'),
('168', '73', 'CHAPARRAL\r'),
('169', '68', 'CHARTA\r'),
('170', '47', 'CHIBOLO\r'),
('170', '66', 'DOSQUEBRADAS\r'),
('172', '05', 'CHIGORODO\r'),
('172', '15', 'CHINAVITA\r'),
('172', '54', 'CHINACOTA\r'),
('174', '17', 'CHINCHINA\r'),
('174', '54', 'CHITAGA\r'),
('175', '20', 'CHIMICHAGUA\r'),
('175', '25', 'CHIA\r'),
('176', '15', 'CHIQUINQUIRA\r'),
('176', '68', 'CHIMA\r'),
('178', '20', 'CHIRIGUANA\r'),
('178', '25', 'CHIPAQUE\r'),
('179', '68', 'CHIPATA\r'),
('180', '15', 'CHISCAS\r'),
('181', '25', 'CHOACHI\r'),
('182', '23', 'CHINU\r'),
('183', '15', 'CHITA\r'),
('183', '25', 'CHOCONTA\r'),
('185', '15', 'CHITARAQUE\r'),
('187', '15', 'CHIVATA\r'),
('188', '13', 'CICUCO\r'),
('189', '15', 'CIENEGA\r'),
('189', '23', 'CIENAGA DE ORO\r'),
('189', '47', 'CIENAGA\r'),
('190', '05', 'CISNEROS\r'),
('190', '63', 'CIRCASIA\r'),
('190', '68', 'CIMITARRA\r'),
('197', '05', 'COCORNA\r'),
('200', '25', 'COGUA\r'),
('200', '73', 'COELLO\r'),
('200', '95', 'MIRAFLORES\r'),
('203', '52', 'COLON\r'),
('204', '15', 'COMBITA\r'),
('204', '70', 'COLOSO\r'),
('205', '18', 'CURILLO\r'),
('205', '27', 'CONDOTO\r'),
('205', '47', 'CONCORDIA\r'),
('206', '05', 'CONCEPCION\r'),
('206', '41', 'COLOMBIA\r'),
('206', '54', 'CONVENCION\r'),
('207', '52', 'CONSACA\r'),
('207', '68', 'CONCEPCION\r'),
('209', '05', 'CONCORDIA\r'),
('209', '68', 'CONFINES\r'),
('210', '52', 'CONTADERO\r'),
('211', '68', 'CONTRATACION\r'),
('212', '05', 'COPACABANA\r'),
('212', '13', 'CORDOBA\r'),
('212', '15', 'COPER\r'),
('212', '19', 'CORINTO\r'),
('212', '63', 'CORDOBA\r'),
('214', '25', 'COTA\r'),
('215', '15', 'CORRALES\r'),
('215', '52', 'CORDOBA\r'),
('215', '70', 'COROZAL\r'),
('217', '68', 'COROMORO\r'),
('217', '73', 'COYAIMA\r'),
('218', '15', 'COVARACHIA\r'),
('219', '86', 'COLON\r'),
('220', '81', 'CRAVO NORTE\r'),
('221', '70', 'COVEÑAS\r'),
('222', '13', 'CLEMENCIA\r'),
('223', '15', 'CUBARA\r'),
('223', '50', 'CUBARRAL\r'),
('223', '54', 'CUCUTILLA\r'),
('224', '15', 'CUCAITA\r'),
('224', '25', 'CUCUNUBA\r'),
('224', '52', 'CUASPUD\r'),
('225', '85', 'NUNCHIA\r'),
('226', '15', 'CUITIVA\r'),
('226', '50', 'CUMARAL\r'),
('226', '73', 'CUNDAY\r'),
('227', '52', 'CUMBAL\r'),
('228', '20', 'CURUMANI\r'),
('229', '68', 'CURITI\r'),
('230', '70', 'CHALAN\r'),
('230', '85', 'OROCUE\r'),
('232', '15', 'CHIQUIZA\r'),
('233', '52', 'CUMBITARA\r'),
('233', '70', 'EL ROBLE\r'),
('233', '76', 'DAGUA\r'),
('234', '05', 'DABEIBA\r'),
('235', '68', 'EL CARMEN DE CHUCURI\r'),
('235', '70', 'GALERAS\r'),
('236', '15', 'CHIVOR\r'),
('236', '73', 'DOLORES\r'),
('237', '05', 'DON MATIAS\r'),
('238', '15', 'DUITAMA\r'),
('238', '20', 'EL COPEY\r'),
('239', '54', 'DURANIA\r'),
('240', '05', 'EBEJICO\r'),
('240', '52', 'CHACHAGsI\r'),
('243', '76', 'EL AGUILA\r'),
('244', '13', 'EL CARMEN DE BOLIVAR\r'),
('244', '15', 'EL COCUY\r'),
('244', '41', 'ELIAS\r'),
('245', '25', 'EL COLEGIO\r'),
('245', '27', 'EL CARMEN DE ATRATO\r'),
('245', '47', 'EL BANCO\r'),
('245', '50', 'EL CALVARIO\r'),
('245', '54', 'EL CARMEN\r'),
('245', '68', 'EL GUACAMAYO\r'),
('246', '76', 'EL CAIRO\r'),
('247', '18', 'EL DONCELLO\r'),
('248', '13', 'EL GUAMO\r'),
('248', '15', 'EL ESPINO\r'),
('248', '76', 'EL CERRITO\r'),
('250', '05', 'EL BAGRE\r'),
('250', '20', 'EL PASO\r'),
('250', '27', 'EL LITORAL DEL SAN JUAN\r'),
('250', '52', 'EL CHARCO\r'),
('250', '54', 'EL TARRA\r'),
('250', '68', 'EL PEÑON\r'),
('250', '76', 'EL DOVIO\r'),
('250', '85', 'PAZ DE ARIPORO\r'),
('251', '50', 'EL CASTILLO\r'),
('254', '52', 'EL PEÑOL\r'),
('255', '68', 'EL PLAYON\r'),
('256', '18', 'EL PAUJIL\r'),
('256', '19', 'EL TAMBO\r'),
('256', '52', 'EL ROSARIO\r'),
('258', '25', 'EL PEÑON\r'),
('258', '47', 'EL PIÑON\r'),
('258', '52', 'EL TABLON DE GOMEZ\r'),
('260', '25', 'EL ROSAL\r'),
('260', '52', 'EL TAMBO\r'),
('261', '54', 'EL ZULIA\r'),
('263', '85', 'PORE\r'),
('263', '91', 'EL ENCANTO\r'),
('264', '05', 'ENTRERRIOS\r'),
('264', '68', 'ENCINO\r'),
('265', '70', 'GUARANDA\r'),
('266', '05', 'ENVIGADO\r'),
('266', '68', 'ENCISO\r'),
('268', '13', 'EL PEÑON\r'),
('268', '47', 'EL RETEN\r'),
('268', '73', 'ESPINAL\r'),
('269', '25', 'FACATATIVA\r'),
('270', '50', 'EL DORADO\r'),
('270', '73', 'FALAN\r'),
('271', '68', 'FLORIAN\r'),
('272', '15', 'FIRAVITOBA\r'),
('272', '17', 'FILADELFIA\r'),
('272', '63', 'FILANDIA\r'),
('275', '73', 'FLANDES\r'),
('275', '76', 'FLORIDA\r'),
('276', '15', 'FLORESTA\r'),
('276', '68', 'FLORIDABLANCA\r'),
('279', '25', 'FOMEQUE\r'),
('279', '44', 'FONSECA\r'),
('279', '85', 'RECETOR\r'),
('281', '25', 'FOSCA\r'),
('282', '05', 'FREDONIA\r'),
('283', '73', 'FRESNO\r'),
('284', '05', 'FRONTINO\r'),
('286', '25', 'FUNZA\r'),
('287', '50', 'FUENTE DE ORO\r'),
('287', '52', 'FUNES\r'),
('288', '25', 'FUQUENE\r'),
('288', '47', 'FUNDACION\r'),
('290', '19', 'FLORENCIA\r'),
('290', '25', 'FUSAGASUGA\r'),
('293', '15', 'GACHANTIVA\r'),
('293', '25', 'GACHALA\r'),
('295', '20', 'GAMARRA\r'),
('295', '25', 'GACHANCIPA\r'),
('296', '08', 'GALAPA\r'),
('296', '15', 'GAMEZA\r'),
('296', '68', 'GALAN\r'),
('297', '25', 'GACHETA\r'),
('298', '41', 'GARZON\r'),
('298', '68', 'GAMBITA\r'),
('299', '15', 'GARAGOA\r'),
('299', '25', 'GAMA\r'),
('300', '13', 'HATILLO DE LOBA\r'),
('300', '19', 'GUACHENE\r'),
('300', '23', 'COTORRA\r'),
('300', '81', 'FORTUL\r'),
('300', '85', 'SABANALARGA\r'),
('302', '63', 'GENOVA\r'),
('306', '05', 'GIRALDO\r'),
('306', '41', 'GIGANTE\r'),
('306', '76', 'GINEBRA\r'),
('307', '25', 'GIRARDOT\r'),
('307', '68', 'GIRON\r'),
('308', '05', 'GIRARDOTA\r'),
('310', '05', 'GOMEZ PLATA\r'),
('310', '20', 'GONZALEZ\r'),
('312', '25', 'GRANADA\r'),
('313', '05', 'GRANADA\r'),
('313', '50', 'GRANADA\r'),
('313', '54', 'GRAMALOTE\r'),
('315', '05', 'GUADALUPE\r'),
('315', '85', 'SACAMA\r'),
('317', '15', 'GUACAMAYAS\r'),
('317', '25', 'GUACHETA\r'),
('317', '52', 'GUACHUCAL\r'),
('318', '05', 'GUARNE\r'),
('318', '19', 'GUAPI\r'),
('318', '47', 'GUAMAL\r'),
('318', '50', 'GUAMAL\r'),
('318', '66', 'GUATICA\r'),
('318', '68', 'GUACA\r'),
('318', '76', 'GUACARI\r'),
('319', '41', 'GUADALUPE\r'),
('319', '73', 'GUAMO\r'),
('320', '25', 'GUADUAS\r'),
('320', '52', 'GUAITARILLA\r'),
('320', '68', 'GUADALUPE\r'),
('320', '86', 'ORITO\r'),
('321', '05', 'GUATAPE\r'),
('322', '15', 'GUATEQUE\r'),
('322', '25', 'GUASCA\r'),
('322', '68', 'GUAPOTA\r'),
('323', '52', 'GUALMATAN\r'),
('324', '25', 'GUATAQUI\r'),
('324', '68', 'GUAVATA\r'),
('325', '15', 'GUAYATA\r'),
('325', '50', 'MAPIRIPAN\r'),
('325', '85', 'SAN LUIS DE PALENQUE\r'),
('326', '25', 'GUATAVITA\r'),
('327', '68', 'GsEPSA\r'),
('328', '25', 'GUAYABAL DE SIQUIMA\r'),
('330', '50', 'MESETAS\r'),
('332', '15', 'GsICAN\r'),
('335', '25', 'GUAYABETAL\r'),
('339', '25', 'GUTIERREZ\r'),
('343', '94', 'BARRANCO MINAS\r'),
('344', '54', 'HACARI\r'),
('344', '68', 'HATO\r'),
('347', '05', 'HELICONIA\r'),
('347', '54', 'HERRAN\r'),
('347', '73', 'HERVEO\r'),
('349', '41', 'HOBO\r'),
('349', '73', 'HONDA\r'),
('350', '23', 'LA APARTADA\r'),
('350', '50', 'LA MACARENA\r'),
('352', '52', 'ILES\r'),
('352', '73', 'ICONONZO\r'),
('353', '05', 'HISPANIA\r'),
('354', '52', 'IMUES\r'),
('355', '19', 'INZA\r'),
('356', '52', 'IPIALES\r'),
('357', '41', 'IQUIRA\r'),
('359', '41', 'ISNOS\r'),
('360', '05', 'ITAGUI\r'),
('361', '05', 'ITUANGO\r'),
('361', '27', 'ISTMINA\r'),
('362', '15', 'IZA\r'),
('364', '05', 'JARDIN\r'),
('364', '19', 'JAMBALO\r'),
('364', '76', 'JAMUNDI\r'),
('367', '15', 'JENESANO\r'),
('368', '05', 'JERICO\r'),
('368', '15', 'JERICO\r'),
('368', '25', 'JERUSALEN\r'),
('368', '68', 'JESUS MARIA\r'),
('370', '50', 'URIBE\r'),
('370', '68', 'JORDAN\r'),
('372', '08', 'JUAN DE ACOSTA\r'),
('372', '25', 'JUNIN\r'),
('372', '27', 'JURADO\r'),
('376', '05', 'LA CEJA\r'),
('377', '15', 'LABRANZAGRANDE\r'),
('377', '25', 'LA CALERA\r'),
('377', '54', 'LABATECA\r'),
('377', '68', 'LA BELLEZA\r'),
('377', '76', 'LA CUMBRE\r'),
('378', '41', 'LA ARGENTINA\r'),
('378', '44', 'HATONUEVO\r'),
('378', '52', 'LA CRUZ\r'),
('380', '05', 'LA ESTRELLA\r'),
('380', '15', 'LA CAPILLA\r'),
('380', '17', 'LA DORADA\r'),
('381', '52', 'LA FLORIDA\r'),
('383', '20', 'LA GLORIA\r'),
('383', '66', 'LA CELIA\r'),
('385', '52', 'LA LLANADA\r'),
('385', '54', 'LA ESPERANZA\r'),
('385', '68', 'LANDAZURI\r'),
('386', '25', 'LA MESA\r'),
('388', '17', 'LA MERCED\r'),
('390', '05', 'LA PINTADA\r'),
('390', '52', 'LA TOLA\r'),
('392', '19', 'LA SIERRA\r'),
('394', '25', 'LA PALMA\r'),
('396', '41', 'LA PLATA\r'),
('397', '19', 'LA VEGA\r'),
('397', '68', 'LA PAZ\r'),
('398', '25', 'LA PEÑA\r'),
('398', '54', 'LA PLAYA\r'),
('399', '52', 'LA UNION\r'),
('400', '05', 'LA UNION\r'),
('400', '20', 'LA JAGUA DE IBIRICO\r'),
('400', '50', 'LEJANIAS\r'),
('400', '66', 'LA VIRGINIA\r'),
('400', '70', 'LA UNION\r'),
('400', '76', 'LA UNION\r'),
('400', '85', 'TAMARA\r'),
('401', '15', 'LA VICTORIA\r'),
('401', '63', 'LA TEBAIDA\r'),
('402', '25', 'LA VEGA\r'),
('403', '15', 'LA UVITA\r'),
('403', '76', 'LA VICTORIA\r'),
('405', '52', 'LEIVA\r'),
('405', '54', 'LOS PATIOS\r'),
('405', '91', 'LA CHORRERA\r'),
('406', '68', 'LEBRIJA\r'),
('407', '15', 'VILLA DE LEYVA\r'),
('407', '25', 'LENGUAZAQUE\r'),
('407', '91', 'LA PEDRERA\r'),
('408', '73', 'LERIDA\r'),
('410', '18', 'LA MONTAÑITA\r'),
('410', '85', 'TAURAMENA\r'),
('411', '05', 'LIBORINA\r'),
('411', '52', 'LINARES\r'),
('411', '73', 'LIBANO\r'),
('413', '27', 'LLORO\r'),
('417', '23', 'LORICA\r'),
('418', '19', 'LOPEZ\r'),
('418', '52', 'LOS ANDES\r'),
('418', '54', 'LOURDES\r'),
('418', '68', 'LOS SANTOS\r'),
('418', '70', 'LOS PALMITOS\r'),
('419', '23', 'LOS CORDOBAS\r'),
('420', '44', 'LA JAGUA DEL PILAR\r'),
('421', '08', 'LURUACO\r'),
('425', '05', 'MACEO\r'),
('425', '15', 'MACANAL\r'),
('425', '27', 'MEDIO ATRATO\r'),
('425', '68', 'MACARAVITA\r'),
('426', '25', 'MACHETA\r'),
('427', '52', 'MAGsI\r'),
('429', '70', 'MAJAGUAL\r'),
('430', '13', 'MAGANGUE\r'),
('430', '25', 'MADRID\r'),
('430', '27', 'MEDIO BAUDO\r'),
('430', '44', 'MAICAO\r'),
('430', '85', 'TRINIDAD\r'),
('430', '91', 'LA VICTORIA\r'),
('432', '68', 'MALAGA\r'),
('433', '08', 'MALAMBO\r'),
('433', '13', 'MAHATES\r'),
('433', '17', 'MANZANARES\r'),
('435', '52', 'MALLAMA\r'),
('436', '08', 'MANATI\r'),
('436', '25', 'MANTA\r'),
('438', '25', 'MEDINA\r'),
('440', '05', 'MARINILLA\r'),
('440', '13', 'MARGARITA\r'),
('440', '66', 'MARSELLA\r'),
('440', '85', 'VILLANUEVA\r'),
('442', '13', 'MARIA LA BAJA\r'),
('442', '15', 'MARIPI\r'),
('442', '17', 'MARMATO\r'),
('443', '20', 'MANAURE\r'),
('443', '73', 'MARIQUITA\r'),
('444', '17', 'MARQUETALIA\r'),
('444', '68', 'MATANZA\r'),
('446', '17', 'MARULANDA\r'),
('449', '73', 'MELGAR\r'),
('450', '19', 'MERCADERES\r'),
('450', '27', 'MEDIO SAN JUAN\r'),
('450', '50', 'PUERTO CONCORDIA\r'),
('455', '15', 'MIRAFLORES\r'),
('455', '19', 'MIRANDA\r'),
('456', '66', 'MISTRATO\r'),
('458', '13', 'MONTECRISTO\r'),
('460', '18', 'MILAN\r'),
('460', '47', 'NUEVA GRANADA\r'),
('460', '91', 'MIRITI - PARANA\r'),
('461', '73', 'MURILLO\r'),
('464', '15', 'MONGUA\r'),
('464', '23', 'MOMIL\r'),
('464', '68', 'MOGOTES\r'),
('466', '15', 'MONGUI\r'),
('466', '23', 'MONTELIBANO\r'),
('467', '05', 'MONTEBELLO\r'),
('468', '13', 'MOMPOS\r'),
('468', '68', 'MOLAGAVITA\r'),
('469', '15', 'MONIQUIRA\r'),
('470', '63', 'MONTENEGRO\r'),
('473', '13', 'MORALES\r'),
('473', '19', 'MORALES\r'),
('473', '25', 'MOSQUERA\r'),
('473', '52', 'MOSQUERA\r'),
('473', '70', 'MORROA\r'),
('475', '05', 'MURINDO\r'),
('476', '15', 'MOTAVITA\r'),
('479', '18', 'MORELIA\r'),
('480', '05', 'MUTATA\r'),
('480', '15', 'MUZO\r'),
('480', '52', 'NARIÑO\r'),
('480', '54', 'MUTISCUA\r'),
('483', '05', 'NARIÑO\r'),
('483', '25', 'NARIÑO\r'),
('483', '41', 'NATAGA\r'),
('483', '73', 'NATAGAIMA\r'),
('486', '17', 'NEIRA\r'),
('486', '25', 'NEMOCON\r'),
('488', '25', 'NILO\r'),
('489', '25', 'NIMAIMA\r'),
('490', '05', 'NECOCLI\r'),
('490', '13', 'NOROSI\r'),
('490', '52', 'OLAYA HERRERA\r'),
('491', '15', 'NOBSA\r'),
('491', '25', 'NOCAIMA\r'),
('491', '27', 'NOVITA\r'),
('494', '15', 'NUEVO COLON\r'),
('495', '05', 'NECHI\r'),
('495', '17', 'NORCASIA\r'),
('495', '27', 'NUQUI\r'),
('497', '76', 'OBANDO\r'),
('498', '54', 'OCAÑA\r'),
('498', '68', 'OCAMONTE\r'),
('500', '15', 'OICATA\r'),
('500', '23', 'MOÑITOS\r'),
('500', '68', 'OIBA\r'),
('501', '05', 'OLAYA\r'),
('502', '68', 'ONZAGA\r'),
('503', '41', 'OPORAPA\r'),
('504', '73', 'ORTEGA\r'),
('506', '25', 'VENECIA\r'),
('506', '52', 'OSPINA\r'),
('507', '15', 'OTANCHE\r'),
('508', '70', 'OVEJAS\r'),
('511', '15', 'PACHAVITA\r'),
('511', '97', 'PACOA\r'),
('513', '17', 'PACORA\r'),
('513', '19', 'PADILLA\r'),
('513', '25', 'PACHO\r'),
('514', '15', 'PAEZ\r'),
('516', '15', 'PAIPA\r'),
('517', '19', 'PAEZ\r'),
('517', '20', 'PAILITAS\r'),
('518', '15', 'PAJARITO\r'),
('518', '25', 'PAIME\r'),
('518', '41', 'PAICOL\r'),
('518', '54', 'PAMPLONA\r'),
('520', '08', 'PALMAR DE VARELA\r'),
('520', '52', 'FRANCISCO PIZARRO\r'),
('520', '54', 'PAMPLONITA\r'),
('520', '73', 'PALOCABILDO\r'),
('520', '76', 'PALMIRA\r'),
('522', '15', 'PANQUEBA\r'),
('522', '68', 'PALMAR\r'),
('523', '70', 'PALMITO\r'),
('524', '17', 'PALESTINA\r'),
('524', '25', 'PANDI\r'),
('524', '41', 'PALERMO\r'),
('524', '68', 'PALMAS DEL SOCORRO\r'),
('524', '99', 'LA PRIMAVERA\r'),
('530', '25', 'PARATEBUENO\r'),
('530', '41', 'PALESTINA\r'),
('530', '91', 'PUERTO ALEGRIA\r'),
('531', '15', 'PAUNA\r'),
('532', '19', 'PATIA\r'),
('533', '15', 'PAYA\r'),
('533', '19', 'PIAMONTE\r'),
('533', '68', 'PARAMO\r'),
('535', '25', 'PASCA\r'),
('536', '91', 'PUERTO ARICA\r'),
('537', '15', 'PAZ DE RIO\r'),
('540', '52', 'POLICARPA\r'),
('540', '91', 'PUERTO NARIÑO\r'),
('541', '05', 'PEÐOL\r'),
('541', '17', 'PENSILVANIA\r'),
('541', '47', 'PEDRAZA\r'),
('542', '15', 'PESCA\r'),
('543', '05', 'PEQUE\r'),
('545', '47', 'PIJIÑO DEL CARMEN\r'),
('547', '68', 'PIEDECUESTA\r'),
('547', '73', 'PIEDRAS\r'),
('548', '19', 'PIENDAMO\r'),
('548', '41', 'PITAL\r'),
('548', '63', 'PIJAO\r'),
('549', '08', 'PIOJO\r'),
('549', '13', 'PINILLOS\r'),
('549', '68', 'PINCHOTE\r'),
('550', '15', 'PISBA\r'),
('550', '20', 'PELAYA\r'),
('551', '41', 'PITALITO\r'),
('551', '47', 'PIVIJAY\r'),
('553', '54', 'PUERTO SANTANDER\r'),
('555', '23', 'PLANETA RICA\r'),
('555', '47', 'PLATO\r'),
('555', '73', 'PLANADAS\r'),
('558', '08', 'POLONUEVO\r'),
('560', '08', 'PONEDERA\r'),
('560', '44', 'MANAURE\r'),
('560', '52', 'POTOSI\r'),
('563', '73', 'PRADO\r'),
('563', '76', 'PRADERA\r'),
('564', '88', 'PROVIDENCIA\r'),
('565', '52', 'PROVIDENCIA\r'),
('568', '50', 'PUERTO GAITAN\r'),
('568', '86', 'PUERTO ASIS\r'),
('569', '86', 'PUERTO CAICEDO\r'),
('570', '20', 'PUEBLO BELLO\r'),
('570', '23', 'PUEBLO NUEVO\r'),
('570', '47', 'PUEBLOVIEJO\r'),
('571', '86', 'PUERTO GUZMAN\r'),
('572', '15', 'PUERTO BOYACA\r'),
('572', '25', 'PUERTO SALGAR\r'),
('572', '66', 'PUEBLO RICO\r'),
('572', '68', 'PUENTE NACIONAL\r'),
('573', '08', 'PUERTO COLOMBIA\r'),
('573', '19', 'PUERTO TEJADA\r'),
('573', '50', 'PUERTO LOPEZ\r'),
('573', '52', 'PUERRES\r'),
('573', '68', 'PUERTO PARRA\r'),
('573', '86', 'LEGUIZAMO\r'),
('574', '23', 'PUERTO ESCONDIDO\r'),
('575', '68', 'PUERTO WILCHES\r'),
('576', '05', 'PUEBLORRICO\r'),
('577', '50', 'PUERTO LLERAS\r'),
('579', '05', 'PUERTO BERRIO\r'),
('580', '13', 'REGIDOR\r'),
('580', '15', 'QUIPAMA\r'),
('580', '23', 'PUERTO LIBERTADOR\r'),
('580', '25', 'PULI\r'),
('580', '27', 'RIO IRO\r'),
('585', '05', 'PUERTO NARE\r'),
('585', '19', 'PURACE\r'),
('585', '52', 'PUPIALES\r'),
('585', '73', 'PURIFICACION\r'),
('586', '23', 'PURISIMA\r'),
('590', '50', 'PUERTO RICO\r'),
('591', '05', 'PUERTO TRIUNFO\r'),
('591', '81', 'PUERTO RONDON\r'),
('592', '18', 'PUERTO RICO\r'),
('592', '25', 'QUEBRADANEGRA\r'),
('594', '25', 'QUETAME\r'),
('594', '63', 'QUIMBAYA\r'),
('594', '66', 'QUINCHIA\r'),
('596', '25', 'QUIPILE\r'),
('599', '15', 'RAMIRIQUI\r'),
('599', '25', 'APULO\r'),
('599', '54', 'RAGONVALIA\r'),
('600', '13', 'RIO VIEJO\r'),
('600', '15', 'RAQUIRA\r'),
('600', '27', 'RIO QUITO\r'),
('604', '05', 'REMEDIOS\r'),
('605', '47', 'REMOLINO\r'),
('606', '08', 'REPELON\r'),
('606', '50', 'RESTREPO\r'),
('606', '76', 'RESTREPO\r'),
('607', '05', 'RETIRO\r'),
('610', '18', 'SAN JOSE DEL FRAGUA\r'),
('612', '25', 'RICAURTE\r'),
('612', '52', 'RICAURTE\r'),
('614', '17', 'RIOSUCIO\r'),
('614', '20', 'RIO DE ORO\r'),
('615', '05', 'RIONEGRO\r'),
('615', '27', 'RIOSUCIO\r'),
('615', '41', 'RIVERA\r'),
('615', '68', 'RIONEGRO\r'),
('616', '17', 'RISARALDA\r'),
('616', '73', 'RIOBLANCO\r'),
('616', '76', 'RIOFRIO\r'),
('620', '13', 'SAN CRISTOBAL\r'),
('621', '15', 'RONDON\r'),
('621', '20', 'LA PAZ\r'),
('621', '52', 'ROBERTO PAYAN\r'),
('622', '19', 'ROSAS\r'),
('622', '73', 'RONCESVALLES\r'),
('622', '76', 'ROLDANILLO\r'),
('624', '73', 'ROVIRA\r'),
('624', '99', 'SANTA ROSALIA\r'),
('628', '05', 'SABANALARGA\r'),
('631', '05', 'SABANETA\r'),
('632', '15', 'SABOYA\r'),
('634', '08', 'SABANAGRANDE\r'),
('638', '08', 'SABANALARGA\r'),
('638', '15', 'SACHICA\r'),
('642', '05', 'SALGAR\r'),
('645', '25', 'SAN ANTONIO DEL TEQUENDAMA\r'),
('646', '15', 'SAMACA\r'),
('647', '05', 'SAN ANDRES DE CUERQUIA\r'),
('647', '13', 'SAN ESTANISLAO\r'),
('649', '05', 'SAN CARLOS\r'),
('649', '25', 'SAN BERNARDO\r'),
('650', '13', 'SAN FERNANDO\r'),
('650', '44', 'SAN JUAN DEL CESAR\r'),
('652', '05', 'SAN FRANCISCO\r'),
('653', '17', 'SALAMINA\r'),
('653', '25', 'SAN CAYETANO\r'),
('654', '13', 'SAN JACINTO\r'),
('655', '13', 'SAN JACINTO DEL CAUCA\r'),
('655', '68', 'SABANA DE TORRES\r'),
('656', '05', 'SAN JERONIMO\r'),
('657', '13', 'SAN JUAN NEPOMUCENO\r'),
('658', '05', 'SAN JOSE DE LA MONTAÑA\r'),
('658', '25', 'SAN FRANCISCO\r'),
('659', '05', 'SAN JUAN DE URABA\r'),
('660', '05', 'SAN LUIS\r'),
('660', '15', 'SAN EDUARDO\r'),
('660', '23', 'SAHAGUN\r'),
('660', '27', 'SAN JOSE DEL PALMAR\r'),
('660', '41', 'SALADOBLANCO\r'),
('660', '47', 'SABANAS DE SAN ANGEL\r'),
('660', '54', 'SALAZAR\r'),
('662', '17', 'SAMANA\r'),
('662', '25', 'SAN JUAN DE RIO SECO\r'),
('663', '94', 'MAPIRIPANA\r'),
('664', '05', 'SAN PEDRO\r'),
('664', '15', 'SAN JOSE DE PARE\r'),
('665', '05', 'SAN PEDRO DE URABA\r'),
('665', '17', 'SAN JOSE\r'),
('666', '97', 'TARAIRA\r'),
('667', '05', 'SAN RAFAEL\r'),
('667', '13', 'SAN MARTIN DE LOBA\r'),
('667', '15', 'SAN LUIS DE GACENO\r'),
('668', '41', 'SAN AGUSTIN\r'),
('669', '68', 'SAN ANDRES\r'),
('669', '91', 'PUERTO SANTANDER\r'),
('670', '05', 'SAN ROQUE\r'),
('670', '13', 'SAN PABLO\r'),
('670', '23', 'SAN ANDRES SOTAVENTO\r'),
('670', '54', 'SAN CALIXTO\r'),
('670', '70', 'SAMPUES\r'),
('670', '76', 'SAN PEDRO\r'),
('671', '73', 'SALDAÑA\r'),
('672', '23', 'SAN ANTERO\r'),
('673', '13', 'SANTA CATALINA\r'),
('673', '15', 'SAN MATEO\r'),
('673', '54', 'SAN CAYETANO\r'),
('673', '68', 'SAN BENITO\r'),
('674', '05', 'SAN VICENTE\r'),
('675', '08', 'SANTA LUCIA\r'),
('675', '23', 'SAN BERNARDO DEL VIENTO\r'),
('675', '47', 'SALAMINA\r'),
('675', '73', 'SAN ANTONIO\r'),
('676', '15', 'SAN MIGUEL DE SEMA\r'),
('676', '41', 'SANTA MARIA\r'),
('678', '23', 'SAN CARLOS\r'),
('678', '52', 'SAMANIEGO\r'),
('678', '70', 'SAN BENITO ABAD\r'),
('678', '73', 'SAN LUIS\r'),
('679', '05', 'SANTA BARBARA\r'),
('679', '68', 'SAN GIL\r'),
('680', '50', 'SAN CARLOS DE GUAROA\r'),
('680', '54', 'SANTIAGO\r'),
('681', '15', 'SAN PABLO DE BORBUR\r'),
('682', '66', 'SANTA ROSA DE CABAL\r'),
('682', '68', 'SAN JOAQUIN\r'),
('683', '13', 'SANTA ROSA\r'),
('683', '50', 'SAN JUAN DE ARAMA\r'),
('683', '52', 'SANDONA\r'),
('684', '68', 'SAN JOSE DE MIRANDA\r'),
('685', '08', 'SANTO TOMAS\r'),
('685', '52', 'SAN BERNARDO\r'),
('686', '05', 'SANTA ROSA DE OSOS\r'),
('686', '15', 'SANTANA\r'),
('686', '23', 'SAN PELAYO\r'),
('686', '50', 'SAN JUANITO\r'),
('686', '68', 'SAN MIGUEL\r'),
('686', '73', 'SANTA ISABEL\r'),
('687', '52', 'SAN LORENZO\r'),
('687', '66', 'SANTUARIO\r'),
('688', '13', 'SANTA ROSA DEL SUR\r'),
('689', '50', 'SAN MARTIN\r'),
('689', '68', 'SAN VICENTE DE CHUCURI\r'),
('690', '05', 'SANTO DOMINGO\r'),
('690', '15', 'SANTA MARIA\r'),
('690', '63', 'SALENTO\r'),
('692', '47', 'SAN SEBASTIAN DE BUENAVISTA\r'),
('693', '15', 'SANTA ROSA DE VITERBO\r'),
('693', '19', 'SAN SEBASTIAN\r'),
('693', '52', 'SAN PABLO\r'),
('694', '52', 'SAN PEDRO DE CARTAGO\r'),
('696', '15', 'SANTA SOFIA\r'),
('696', '52', 'SANTA BARBARA\r'),
('697', '05', 'EL SANTUARIO\r'),
('698', '19', 'SANTANDER DE QUILICHAO\r'),
('699', '52', 'SANTACRUZ\r'),
('701', '19', 'SANTA ROSA\r'),
('702', '70', 'SAN JUAN DE BETULIA\r'),
('703', '47', 'SAN ZENON\r'),
('705', '68', 'SANTA BARBARA\r'),
('707', '47', 'SANTA ANA\r'),
('708', '70', 'SAN MARCOS\r'),
('710', '20', 'SAN ALBERTO\r'),
('711', '50', 'VISTAHERMOSA\r'),
('713', '70', 'SAN ONOFRE\r'),
('717', '70', 'SAN PEDRO\r'),
('718', '25', 'SASAIMA\r'),
('720', '15', 'SATIVANORTE\r'),
('720', '47', 'SANTA BARBARA DE PINTO\r'),
('720', '52', 'SAPUYES\r'),
('720', '54', 'SARDINATA\r'),
('720', '68', 'SANTA HELENA DEL OPON\r'),
('723', '15', 'SATIVASUR\r'),
('736', '05', 'SEGOVIA\r'),
('736', '25', 'SESQUILE\r'),
('736', '76', 'SEVILLA\r'),
('736', '81', 'SARAVENA\r'),
('740', '15', 'SIACHOQUE\r'),
('740', '25', 'SIBATE\r'),
('742', '70', 'SAN LUIS DE SINCE\r'),
('743', '19', 'SILVIA\r'),
('743', '25', 'SILVANIA\r'),
('743', '54', 'SILOS\r'),
('744', '13', 'SIMITI\r'),
('745', '25', 'SIMIJACA\r'),
('745', '27', 'SIPI\r'),
('745', '47', 'SITIONUEVO\r'),
('745', '68', 'SIMACOTA\r'),
('749', '86', 'SIBUNDOY\r'),
('750', '20', 'SAN DIEGO\r'),
('753', '15', 'SOATA\r'),
('753', '18', 'SAN VICENTE DEL CAGUAN\r'),
('754', '25', 'SOACHA\r'),
('755', '15', 'SOCOTA\r'),
('755', '68', 'SOCORRO\r'),
('755', '86', 'SAN FRANCISCO\r'),
('756', '05', 'SONSON\r'),
('756', '18', 'SOLANO\r'),
('757', '15', 'SOCHA\r'),
('757', '86', 'SAN MIGUEL\r'),
('758', '08', 'SOLEDAD\r'),
('758', '25', 'SOPO\r'),
('759', '15', 'SOGAMOSO\r'),
('760', '13', 'SOPLAVIENTO\r'),
('760', '19', 'SOTARA\r'),
('760', '86', 'SANTIAGO\r'),
('761', '05', 'SOPETRAN\r'),
('761', '15', 'SOMONDOCO\r'),
('762', '15', 'SORA\r'),
('763', '15', 'SOTAQUIRA\r'),
('764', '15', 'SORACA\r'),
('769', '25', 'SUBACHOQUE\r'),
('770', '08', 'SUAN\r'),
('770', '20', 'SAN MARTIN\r'),
('770', '41', 'SUAZA\r'),
('770', '68', 'SUAITA\r'),
('770', '73', 'SUAREZ\r'),
('771', '70', 'SUCRE\r'),
('772', '25', 'SUESCA\r'),
('773', '68', 'SUCRE\r'),
('773', '99', 'CUMARIBO\r'),
('774', '15', 'SUSACON\r'),
('776', '15', 'SUTAMARCHAN\r'),
('777', '17', 'SUPIA\r'),
('777', '25', 'SUPATA\r'),
('777', '97', 'PAPUNAUA\r'),
('778', '15', 'SUTATENZA\r'),
('779', '25', 'SUSA\r'),
('780', '13', 'TALAIGUA NUEVO\r'),
('780', '19', 'SUAREZ\r'),
('780', '68', 'SURATA\r'),
('781', '25', 'SUTATAUSA\r'),
('785', '18', 'SOLITA\r'),
('785', '19', 'SUCRE\r'),
('785', '25', 'TABIO\r'),
('786', '52', 'TAMINANGO\r'),
('787', '20', 'TAMALAMEQUE\r'),
('787', '27', 'TADO\r'),
('788', '52', 'TANGUA\r'),
('789', '05', 'TAMESIS\r'),
('790', '05', 'TARAZA\r'),
('790', '15', 'TASCO\r'),
('791', '41', 'TARQUI\r'),
('792', '05', 'TARSO\r'),
('793', '25', 'TAUSA\r'),
('794', '81', 'TAME\r'),
('797', '25', 'TENA\r'),
('797', '41', 'TESALIA\r'),
('798', '15', 'TENZA\r'),
('798', '47', 'TENERIFE\r'),
('798', '91', 'TARAPACA\r'),
('799', '25', 'TENJO\r'),
('799', '41', 'TELLO\r'),
('800', '27', 'UNGUIA\r'),
('800', '54', 'TEORAMA\r'),
('801', '41', 'TERUEL\r'),
('804', '15', 'TIBANA\r'),
('805', '25', 'TIBACUY\r'),
('806', '15', 'TIBASOSA\r'),
('807', '19', 'TIMBIO\r'),
('807', '23', 'TIERRALTA\r'),
('807', '25', 'TIBIRITA\r'),
('807', '41', 'TIMANA\r'),
('808', '15', 'TINJACA\r'),
('809', '05', 'TITIRIBI\r'),
('809', '19', 'TIMBIQUI\r'),
('810', '13', 'TIQUISIO\r'),
('810', '15', 'TIPACOQUE\r'),
('810', '27', 'UNION PANAMERICANA\r'),
('810', '54', 'TIBU\r'),
('814', '15', 'TOCA\r'),
('815', '25', 'TOCAIMA\r'),
('816', '15', 'TOGsI\r'),
('817', '25', 'TOCANCIPA\r'),
('819', '05', 'TOLEDO\r'),
('820', '15', 'TOPAGA\r'),
('820', '54', 'TOLEDO\r'),
('820', '68', 'TONA\r'),
('820', '70', 'SANTIAGO DE TOLU\r'),
('821', '19', 'TORIBIO\r'),
('822', '15', 'TOTA\r'),
('823', '25', 'TOPAIPI\r'),
('823', '70', 'TOLU VIEJO\r'),
('823', '76', 'TORO\r'),
('824', '19', 'TOTORO\r'),
('828', '76', 'TRUJILLO\r'),
('832', '08', 'TUBARA\r'),
('832', '15', 'TUNUNGUA\r'),
('834', '76', 'TULUA\r'),
('835', '15', 'TURMEQUE\r'),
('835', '52', 'SAN ANDRES DE TUMACO\r'),
('836', '13', 'TURBACO\r'),
('837', '05', 'TURBO\r'),
('837', '15', 'TUTA\r'),
('838', '13', 'TURBANA\r'),
('838', '52', 'TUQUERRES\r'),
('839', '15', 'TUTAZA\r'),
('839', '25', 'UBALA\r'),
('841', '25', 'UBAQUE\r'),
('842', '05', 'URAMITA\r'),
('842', '15', 'UMBITA\r'),
('843', '25', 'VILLA DE SAN DIEGO DE UBATE\r'),
('845', '19', 'VILLA RICA\r'),
('845', '25', 'UNE\r'),
('845', '76', 'ULLOA\r'),
('847', '05', 'URRAO\r'),
('847', '44', 'URIBIA\r'),
('849', '08', 'USIACURI\r'),
('851', '25', 'UTICA\r'),
('854', '05', 'VALDIVIA\r'),
('854', '73', 'VALLE DE SAN JUAN\r'),
('855', '23', 'VALENCIA\r'),
('855', '44', 'URUMITA\r'),
('855', '68', 'VALLE DE SAN JOSE\r'),
('856', '05', 'VALPARAISO\r'),
('858', '05', 'VEGACHI\r'),
('860', '18', 'VALPARAISO\r'),
('861', '05', 'VENECIA\r'),
('861', '15', 'VENTAQUEMADA\r'),
('861', '68', 'VELEZ\r'),
('861', '73', 'VENADILLO\r'),
('862', '25', 'VERGARA\r'),
('863', '76', 'VERSALLES\r'),
('865', '86', 'VALLE DEL GUAMUEZ\r'),
('867', '17', 'VICTORIA\r'),
('867', '25', 'VIANI\r'),
('867', '68', 'VETAS\r'),
('869', '76', 'VIJES\r'),
('870', '73', 'VILLAHERMOSA\r'),
('871', '25', 'VILLAGOMEZ\r'),
('871', '54', 'VILLA CARO\r'),
('872', '41', 'VILLAVIEJA\r'),
('872', '68', 'VILLANUEVA\r'),
('873', '05', 'VIGIA DEL FUERTE\r'),
('873', '13', 'VILLANUEVA\r'),
('873', '17', 'VILLAMARIA\r'),
('873', '25', 'VILLAPINZON\r'),
('873', '73', 'VILLARRICA\r'),
('874', '44', 'VILLANUEVA\r'),
('874', '54', 'VILLA DEL ROSARIO\r'),
('875', '25', 'VILLETA\r'),
('877', '17', 'VITERBO\r'),
('878', '25', 'VIOTA\r'),
('879', '15', 'VIRACACHA\r'),
('883', '94', 'SAN FELIPE\r'),
('884', '94', 'PUERTO COLOMBIA\r'),
('885', '05', 'YALI\r'),
('885', '25', 'YACOPI\r'),
('885', '41', 'YAGUARA\r'),
('885', '52', 'YACUANQUER\r'),
('885', '86', 'VILLAGARZON\r'),
('885', '94', 'LA GUADALUPE\r'),
('886', '94', 'CACAHUAL\r'),
('887', '05', 'YARUMAL\r'),
('887', '94', 'PANA PANA\r'),
('888', '94', 'MORICHAL\r'),
('889', '97', 'YAVARATE\r'),
('890', '05', 'YOLOMBO\r'),
('890', '76', 'YOTOCO\r'),
('892', '76', 'YUMBO\r'),
('893', '05', 'YONDO\r'),
('894', '13', 'ZAMBRANO\r'),
('895', '05', 'ZARAGOZA\r'),
('895', '68', 'ZAPATOCA\r'),
('895', '76', 'ZARZAL\r'),
('897', '15', 'ZETAQUIRA\r'),
('898', '25', 'ZIPACON\r'),
('899', '25', 'ZIPAQUIRA\r'),
('960', '47', 'ZAPAYAN\r'),
('980', '47', 'ZONA BANANERA\r'),
('N', 'N', 'No aplica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pvc`
--

CREATE TABLE `pvc` (
  `pvc_id` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `pvc` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pvc`
--

INSERT INTO `pvc` (`pvc_id`, `pvc`) VALUES
('﻿1', 'En situación de desplazamiento\r'),
('2', 'Desvinculados de grupos armados\r'),
('3', 'Hijos de adultos desmovilizados              '),
('9', 'No Aplica\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resguardos`
--

CREATE TABLE `resguardos` (
  `resguardo_id` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `resguardos`
--

INSERT INTO `resguardos` (`resguardo_id`, `nombre`) VALUES
('000', 'No Aplica'),
('363', 'Bari'),
('uwa', 'uwa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `rol_id` int(11) NOT NULL,
  `rol` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_modulos`
--

CREATE TABLE `roles_modulos` (
  `rol_id` int(11) NOT NULL,
  `modulo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_modulo`
--

CREATE TABLE `rol_modulo` (
  `rol_id` int(11) NOT NULL,
  `rol_modulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_documento`
--

CREATE TABLE `tipos_documento` (
  `tipo_doc_id` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_documento` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipos_documento`
--

INSERT INTO `tipos_documento` (`tipo_doc_id`, `tipo_documento`) VALUES
('﻿1', 'Cédula de Ciudadanía\r'),
('2', 'Tarjeta de Identidad\r'),
('3', 'Cédula de Extranjería\r'),
('5', 'Registro Civil de Nacimiento\r'),
('6', 'Número de Identificación Perso'),
('8', 'Número de Identificación estab'),
('9', 'Certificado Cabildo.\r');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores`
--

CREATE TABLE `tutores` (
  `tutor_id` int(11) NOT NULL,
  `nombres` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `apellido1` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `apellido2` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_doc` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `numero` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nacionalidad` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `lbrta_mil_clase` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `num_lbrta_mil` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DM` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_nacim` date NOT NULL,
  `pais_nacim` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `depto_nacim` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `mun_nacim` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `direccion_corresp` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `pais_corresp` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `depto_corresp` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `mun_corresp` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ultm_grd_aprob` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `titulo_obtenido` varchar(90) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_grado` date NOT NULL,
  `fecha_dilig` date NOT NULL,
  `ciudad_dilig` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`alumno_id`),
  ADD UNIQUE KEY `uk_alumno_documento` (`tipo_documento`,`numero_documento`),
  ADD KEY `fk_alumno_tipo_documento1_idx` (`tipo_documento`),
  ADD KEY `fk_alumno_tipo_discapacidad1_idx` (`discapacidad`),
  ADD KEY `fk_alumno_capacidad_execpcional1_idx` (`cap_excepcionales`),
  ADD KEY `fk_alumno_municipio1_idx` (`lugar_exp_mun`,`lugar_exp_depto`),
  ADD KEY `fk_alumno_municipio2_idx` (`lugar_nac_mun`,`lugar_nac_depto`);

--
-- Indices de la tabla `anexo_hoja_vida`
--
ALTER TABLE `anexo_hoja_vida`
  ADD PRIMARY KEY (`anexo_id`),
  ADD KEY `fk_anexos_hoja_vida_datos_personales1_idx` (`tutor`);

--
-- Indices de la tabla `capacidades_excepcionales`
--
ALTER TABLE `capacidades_excepcionales`
  ADD PRIMARY KEY (`cad_excep_id`);

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`cuenta_id`);

--
-- Indices de la tabla `cuentas_roles`
--
ALTER TABLE `cuentas_roles`
  ADD PRIMARY KEY (`cuenta_id`,`rol_id`),
  ADD KEY `fk_usuarios_has_roles_roles1_idx` (`rol_id`),
  ADD KEY `fk_usuarios_has_roles_usuarios1_idx` (`cuenta_id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`num_departamento`);

--
-- Indices de la tabla `discapacidades`
--
ALTER TABLE `discapacidades`
  ADD PRIMARY KEY (`discapacidad_id`);

--
-- Indices de la tabla `educacion_superior`
--
ALTER TABLE `educacion_superior`
  ADD PRIMARY KEY (`educacion_superior_id`),
  ADD UNIQUE KEY `num_tarjeta_prof_UNIQUE` (`num_tarjeta_prof`),
  ADD KEY `fk_educacion_superior_modalidad_academica_idx` (`modalidad_academica_id`),
  ADD KEY `fk_educacion_superior_datos_personales1_idx` (`tutor`);

--
-- Indices de la tabla `etnia`
--
ALTER TABLE `etnia`
  ADD PRIMARY KEY (`etnia_id`);

--
-- Indices de la tabla `experiencia_laboral`
--
ALTER TABLE `experiencia_laboral`
  ADD PRIMARY KEY (`experiencia_id`),
  ADD KEY `fk_experiencia_laboral_municipio_idx` (`departamento`,`municipio`),
  ADD KEY `fk_experiencia_laboral_tutor_idx` (`tutor`);

--
-- Indices de la tabla `grados`
--
ALTER TABLE `grados`
  ADD PRIMARY KEY (`clei`);

--
-- Indices de la tabla `instituciones`
--
ALTER TABLE `instituciones`
  ADD PRIMARY KEY (`institucion_id`),
  ADD KEY `fk_institucion_municipio1_idx` (`cod_mun_dist`,`cod_depto_dist`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`matricula_id`),
  ADD UNIQUE KEY `uk_matricula_alumno_ano` (`alumno_id`,`ano_reporte`),
  ADD KEY `fk_matricula_institucion1_idx` (`institucion_id`),
  ADD KEY `fk_matricula_pvc1_idx` (`pvc`),
  ADD KEY `fk_matricula_municipio1_idx` (`ume`,`ude`),
  ADD KEY `fk_matricula_municipio2_idx` (`lrm`,`lrd`),
  ADD KEY `fk_matricula_grado1_idx` (`grado`),
  ADD KEY `fk_matricula_resguardo_idx` (`resguardo`),
  ADD KEY `fk_matricula_etnia_idx` (`etnia`),
  ADD KEY `fk_matricula_tutor_id_idx` (`tutor_id`);

--
-- Indices de la tabla `modalidad_academica`
--
ALTER TABLE `modalidad_academica`
  ADD PRIMARY KEY (`modalidad_id`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`modulo_id`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`num_municipio`,`num_departamento`),
  ADD KEY `fk_municipio_departamento1_idx` (`num_departamento`);

--
-- Indices de la tabla `pvc`
--
ALTER TABLE `pvc`
  ADD PRIMARY KEY (`pvc_id`);

--
-- Indices de la tabla `resguardos`
--
ALTER TABLE `resguardos`
  ADD PRIMARY KEY (`resguardo_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `roles_modulos`
--
ALTER TABLE `roles_modulos`
  ADD PRIMARY KEY (`rol_id`,`modulo_id`),
  ADD KEY `fk_roles_has_modulos_modulos1_idx` (`modulo_id`),
  ADD KEY `fk_roles_has_modulos_roles1_idx` (`rol_id`);

--
-- Indices de la tabla `rol_modulo`
--
ALTER TABLE `rol_modulo`
  ADD PRIMARY KEY (`rol_id`,`rol_modulo`);

--
-- Indices de la tabla `tipos_documento`
--
ALTER TABLE `tipos_documento`
  ADD PRIMARY KEY (`tipo_doc_id`);

--
-- Indices de la tabla `tutores`
--
ALTER TABLE `tutores`
  ADD PRIMARY KEY (`tutor_id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `numero_UNIQUE` (`numero`),
  ADD KEY `fk_lg_nac_mun_idx` (`mun_nacim`,`depto_nacim`),
  ADD KEY `fk_datos_personales_2_idx` (`depto_corresp`,`mun_corresp`),
  ADD KEY `fk_datos_personales_tipo_documento_idx` (`tipo_doc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `alumno_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `anexo_hoja_vida`
--
ALTER TABLE `anexo_hoja_vida`
  MODIFY `anexo_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `cuenta_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `educacion_superior`
--
ALTER TABLE `educacion_superior`
  MODIFY `educacion_superior_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `experiencia_laboral`
--
ALTER TABLE `experiencia_laboral`
  MODIFY `experiencia_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `instituciones`
--
ALTER TABLE `instituciones`
  MODIFY `institucion_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `matricula_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `modalidad_academica`
--
ALTER TABLE `modalidad_academica`
  MODIFY `modalidad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `modulo_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tutores`
--
ALTER TABLE `tutores`
  MODIFY `tutor_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `fk_alumno_capacidad_execpcional1` FOREIGN KEY (`cap_excepcionales`) REFERENCES `capacidades_excepcionales` (`cad_excep_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_alumno_municipio1` FOREIGN KEY (`lugar_exp_mun`,`lugar_exp_depto`) REFERENCES `municipios` (`num_municipio`, `num_departamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_alumno_municipio2` FOREIGN KEY (`lugar_nac_mun`,`lugar_nac_depto`) REFERENCES `municipios` (`num_municipio`, `num_departamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_alumno_tipo_discapacidad1` FOREIGN KEY (`discapacidad`) REFERENCES `discapacidades` (`discapacidad_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_alumno_tipo_documento1` FOREIGN KEY (`tipo_documento`) REFERENCES `tipos_documento` (`tipo_doc_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `anexo_hoja_vida`
--
ALTER TABLE `anexo_hoja_vida`
  ADD CONSTRAINT `fk_anexos_hoja_vida_tutor` FOREIGN KEY (`tutor`) REFERENCES `tutores` (`tutor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cuentas_roles`
--
ALTER TABLE `cuentas_roles`
  ADD CONSTRAINT `fk_usuarios_has_roles_roles1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`rol_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_has_roles_usuarios1` FOREIGN KEY (`cuenta_id`) REFERENCES `cuentas` (`cuenta_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `educacion_superior`
--
ALTER TABLE `educacion_superior`
  ADD CONSTRAINT `fk_educacion_superior_modalidad_academica` FOREIGN KEY (`modalidad_academica_id`) REFERENCES `modalidad_academica` (`modalidad_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_educacion_superior_tutor` FOREIGN KEY (`tutor`) REFERENCES `tutores` (`tutor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `experiencia_laboral`
--
ALTER TABLE `experiencia_laboral`
  ADD CONSTRAINT `fk_experiencia_laboral_municipio` FOREIGN KEY (`departamento`,`municipio`) REFERENCES `municipios` (`num_departamento`, `num_municipio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_experiencia_laboral_tutor` FOREIGN KEY (`tutor`) REFERENCES `tutores` (`tutor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `instituciones`
--
ALTER TABLE `instituciones`
  ADD CONSTRAINT `fk_institucion_municipio1` FOREIGN KEY (`cod_mun_dist`,`cod_depto_dist`) REFERENCES `municipios` (`num_municipio`, `num_departamento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `fk_matricula_alumno1` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`alumno_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_matricula_etnia` FOREIGN KEY (`etnia`) REFERENCES `etnia` (`etnia_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_matricula_grado1` FOREIGN KEY (`grado`) REFERENCES `grados` (`clei`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_matricula_institucion1` FOREIGN KEY (`institucion_id`) REFERENCES `instituciones` (`institucion_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_matricula_municipio1` FOREIGN KEY (`ume`,`ude`) REFERENCES `municipios` (`num_municipio`, `num_departamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_matricula_municipio2` FOREIGN KEY (`lrm`,`lrd`) REFERENCES `municipios` (`num_municipio`, `num_departamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_matricula_pvc1` FOREIGN KEY (`pvc`) REFERENCES `pvc` (`pvc_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_matricula_resguardo` FOREIGN KEY (`resguardo`) REFERENCES `resguardos` (`resguardo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_matricula_tutor_id` FOREIGN KEY (`tutor_id`) REFERENCES `tutores` (`tutor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD CONSTRAINT `fk_municipio_departamento1` FOREIGN KEY (`num_departamento`) REFERENCES `departamentos` (`num_departamento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `roles_modulos`
--
ALTER TABLE `roles_modulos`
  ADD CONSTRAINT `fk_roles_has_modulos_modulos1` FOREIGN KEY (`modulo_id`) REFERENCES `modulos` (`modulo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_roles_has_modulos_roles1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`rol_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tutores`
--
ALTER TABLE `tutores`
  ADD CONSTRAINT `fk_tutor_2` FOREIGN KEY (`depto_corresp`,`mun_corresp`) REFERENCES `municipios` (`num_departamento`, `num_municipio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tutor_depto_nacim` FOREIGN KEY (`mun_nacim`,`depto_nacim`) REFERENCES `municipios` (`num_municipio`, `num_departamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tutor_tipo_documento` FOREIGN KEY (`tipo_doc`) REFERENCES `tipos_documento` (`tipo_doc_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
