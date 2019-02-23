-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-02-2019 a las 15:12:33
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `camegovp_sionweb2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartamentos`
--

CREATE TABLE IF NOT EXISTS `apartamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_apartamento` decimal(10,0) NOT NULL,
  `torre` decimal(10,0) NOT NULL,
  `usuarios_cedula` varchar(45) NOT NULL DEFAULT '',
  `propietario_cedula` varchar(45) DEFAULT NULL,
  `nombre_completo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`,`usuarios_cedula`),
  KEY `fk_apartamentos_usuarios1_idx` (`usuarios_cedula`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=136 ;

--
-- Volcado de datos para la tabla `apartamentos`
--

INSERT INTO `apartamentos` (`id`, `numero_apartamento`, `torre`, `usuarios_cedula`, `propietario_cedula`, `nombre_completo`) VALUES
(1, '101', '1', '', '12345', 'lorena'),
(2, '102', '1', '1022934520', '1022934520', 'b'),
(3, '103', '1', '1022934521', '1022934521', 'c'),
(4, '201', '1', '1022934522', '1022934522', 'd'),
(5, '202', '1', '1022934523', '1022934523', 'a'),
(6, '203', '1', '1022934524', '1022934524', 'b'),
(7, '301', '1', '1022934525', '1022934525', 'c'),
(8, '302', '1', '1022934526', '1022934526', 'd'),
(9, '303', '1', '1022934527', '1022934527', 'a'),
(10, '401', '1', '1022934528', '1022934528', 'b'),
(11, '402', '1', '1022934529', '1022934529', 'c'),
(12, '403', '1', '1022934530', '1022934530', 'd'),
(13, '501', '1', '1022934531', '1022934531', 'a'),
(14, '502', '1', '1022934532', '1022934532', 'b'),
(15, '503', '1', '1022934533', '1022934533', 'c'),
(16, '601', '1', '1022934534', '1022934534', 'd'),
(17, '602', '1', '1022934535', '1022934535', 'a'),
(18, '603', '1', '1022934536', '1022934536', 'b'),
(19, '701', '1', '1022934537', '1022934537', 'c'),
(20, '702', '1', '1022934538', '1022934538', 'd'),
(21, '703', '1', '1022934539', '1022934539', 'a'),
(22, '801', '1', '1022934540', '1022934540', 'b'),
(23, '802', '1', '1022934541', '1022934541', 'c'),
(24, '803', '1', '1022934542', '1022934542', 'd'),
(25, '901', '1', '1022934543', '1022934543', 'a'),
(26, '902', '1', '1022934544', '1022934544', 'b'),
(27, '903', '1', '1022934545', '1022934545', 'c'),
(28, '1001', '1', '1022934546', '1022934546', 'd'),
(29, '1002', '1', '1022934547', '1022934547', 'a'),
(30, '1003', '1', '1022934548', '1022934548', 'b'),
(31, '1101', '1', '1022934549', '1022934549', 'c'),
(32, '1102', '1', '1022934550', '1022934550', 'd'),
(33, '1103', '1', '1022934551', '1022934551', 'a'),
(34, '1201', '1', '1022934552', '1022934552', 'b'),
(35, '1202', '1', '1022934553', '1022934553', 'c'),
(36, '1203', '1', '1022934554', '1022934554', 'd'),
(37, '1301', '1', '1022934555', '1022934555', 'a'),
(38, '1302', '1', '1022934556', '1022934556', 'b'),
(39, '1303', '1', '1022934557', '1022934557', 'c'),
(40, '1401', '1', '1022934558', '1022934558', 'd'),
(41, '1402', '1', '1022934559', '1022934559', 'a'),
(42, '1403', '1', '1022934560', '1022934560', 'b'),
(43, '1501', '1', '1022934561', '1022934561', 'c'),
(44, '1502', '1', '1022934562', '1022934562', 'd'),
(45, '1503', '1', '1022934563', '1022934563', 'a'),
(46, '101', '2', '1022934564', '1022934564', 'b'),
(47, '102', '2', '1022934565', '1022934565', 'c'),
(48, '103', '2', '1022934566', '1022934566', 'd'),
(49, '201', '2', '1022934567', '1022934567', 'a'),
(50, '202', '2', '1022934568', '1022934568', 'b'),
(51, '203', '2', '1022934569', '1022934569', 'c'),
(52, '301', '2', '1022934570', '1022934570', 'd'),
(53, '302', '2', '1022934571', '1022934571', 'a'),
(54, '303', '2', '1022934572', '1022934572', 'b'),
(55, '401', '2', '1022934573', '1022934573', 'c'),
(56, '402', '2', '1022934574', '1022934574', 'd'),
(57, '403', '2', '1022934575', '1022934575', 'a'),
(58, '501', '2', '1022934576', '1022934576', 'b'),
(59, '502', '2', '1022934577', '1022934577', 'c'),
(60, '503', '2', '1022934578', '1022934578', 'd'),
(61, '601', '2', '1022934579', '1022934579', 'a'),
(62, '602', '2', '1022934580', '1022934580', 'b'),
(63, '603', '2', '1022934581', '1022934581', 'c'),
(64, '701', '2', '1022934582', '1022934582', 'd'),
(65, '702', '2', '1022934583', '1022934583', 'a'),
(66, '703', '2', '1022934584', '1022934584', 'b'),
(67, '801', '2', '1022934585', '1022934585', 'c'),
(68, '802', '2', '1022934586', '1022934586', 'd'),
(69, '803', '2', '1022934587', '1022934587', 'a'),
(70, '901', '2', '1022934588', '1022934588', 'b'),
(71, '902', '2', '1022934589', '1022934589', 'c'),
(72, '903', '2', '1022934590', '1022934590', 'd'),
(73, '1001', '2', '1022934591', '1022934591', 'a'),
(74, '1002', '2', '1022934592', '1022934592', 'b'),
(75, '1003', '2', '1022934593', '1022934593', 'c'),
(76, '1101', '2', '1022934594', '1022934594', 'd'),
(77, '1102', '2', '1022934595', '1022934595', 'a'),
(78, '1103', '2', '1022934596', '1022934596', 'b'),
(79, '1201', '2', '1022934597', '1022934597', 'c'),
(80, '1202', '2', '1022934598', '1022934598', 'd'),
(81, '1203', '2', '1022934599', '1022934599', 'a'),
(82, '1301', '2', '1022934600', '1022934600', 'b'),
(83, '1302', '2', '1022934601', '1022934601', 'c'),
(84, '1303', '2', '1022934602', '1022934602', 'd'),
(85, '1401', '2', '1022934603', '1022934603', 'a'),
(86, '1402', '2', '1022934604', '1022934604', 'b'),
(87, '1403', '2', '1022934605', '1022934605', 'c'),
(88, '1501', '2', '1022934606', '1022934606', 'd'),
(89, '1502', '2', '1022934607', '1022934607', 'a'),
(90, '1503', '2', '1022934608', '1022934608', 'b'),
(91, '101', '3', '1022934609', '1022934609', 'c'),
(92, '102', '3', '1022934610', '1022934610', 'd'),
(93, '103', '3', '1022934611', '1022934611', 'a'),
(94, '201', '3', '1022934612', '1022934612', 'b'),
(95, '202', '3', '1022934613', '1022934613', 'c'),
(96, '203', '3', '1022934614', '1022934614', 'd'),
(97, '301', '3', '1022934615', '1022934615', 'a'),
(98, '302', '3', '1022934616', '1022934616', 'b'),
(99, '303', '3', '1022934617', '1022934617', 'c'),
(100, '401', '3', '1022934618', '1022934618', 'd'),
(101, '402', '3', '1022934619', '1022934619', 'a'),
(102, '403', '3', '1022934620', '1022934620', 'b'),
(103, '501', '3', '1022934621', '1022934621', 'c'),
(104, '502', '3', '1022934622', '1022934622', 'd'),
(105, '503', '3', '1022934623', '1022934623', 'a'),
(106, '601', '3', '1022934624', '1022934624', 'b'),
(107, '602', '3', '1022934625', '1022934625', 'c'),
(108, '603', '3', '1022934626', '1022934626', 'd'),
(109, '701', '3', '1022934627', '1022934627', 'a'),
(110, '702', '3', '1022934628', '1022934628', 'b'),
(111, '703', '3', '1022934629', '1022934629', 'c'),
(112, '801', '3', '1022934630', '1022934630', 'd'),
(113, '802', '3', '1022934631', '1022934631', 'a'),
(114, '803', '3', '1022934632', '1022934632', 'b'),
(115, '901', '3', '1022934633', '1022934633', 'c'),
(116, '902', '3', '1022934634', '1022934634', 'd'),
(117, '903', '3', '1022934635', '1022934635', 'a'),
(118, '1001', '3', '1022934636', '1022934636', 'b'),
(119, '1002', '3', '1022934637', '1022934637', 'c'),
(120, '1003', '3', '1022934638', '1022934638', 'd'),
(121, '1101', '3', '1022934639', '1022934639', 'a'),
(122, '1102', '3', '1022934640', '1022934640', 'b'),
(123, '1103', '3', '1022934641', '1022934641', 'c'),
(124, '1201', '3', '1022934642', '1022934642', 'd'),
(125, '1202', '3', '1022934643', '1022934643', 'a'),
(126, '1203', '3', '1022934644', '1022934644', 'b'),
(127, '1301', '3', '1022934645', '1022934645', 'c'),
(128, '1302', '3', '1022934646', '1022934646', 'd'),
(129, '1303', '3', '1022934647', '1022934647', 'a'),
(130, '1401', '3', '1022934648', '1022934648', 'b'),
(131, '1402', '3', '1022934649', '1022934649', 'c'),
(132, '1403', '3', '1022934650', '1022934650', 'lorena'),
(133, '1501', '3', '123457', '123457', 'jaime'),
(134, '1502', '3', '123456', '123456', 'juan'),
(135, '1503', '3', '444444', '444444', 'gustavo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoeventos`
--

CREATE TABLE IF NOT EXISTS `estadoeventos` (
  `idestadoeventos` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_estado_eventos` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idestadoeventos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `estadoeventos`
--

INSERT INTO `estadoeventos` (`idestadoeventos`, `nombre_estado_eventos`) VALUES
(1, 'INICIAL'),
(2, 'HISTORIALES'),
(3, 'NO VISIBLES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadopqrs`
--

CREATE TABLE IF NOT EXISTS `estadopqrs` (
  `idestadopqrs` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_estado_pqr` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idestadopqrs`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `estadopqrs`
--

INSERT INTO `estadopqrs` (`idestadopqrs`, `nombre_estado_pqr`) VALUES
(1, 'EN PROCESO'),
(2, 'PENDIENTES'),
(3, 'CANCELADOS'),
(4, 'SOLUCIONADOS'),
(5, 'NO APROBADOS'),
(6, 'SIN INFORMACION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_parqueo`
--

CREATE TABLE IF NOT EXISTS `estado_parqueo` (
  `idestado_parqueo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_estadoparqueo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idestado_parqueo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `estado_parqueo`
--

INSERT INTO `estado_parqueo` (`idestado_parqueo`, `nombre_estadoparqueo`) VALUES
(1, 'ACTIVO'),
(2, 'INACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_usuarios`
--

CREATE TABLE IF NOT EXISTS `estado_usuarios` (
  `activar_user` int(11) NOT NULL AUTO_INCREMENT,
  `estado_user` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`activar_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `estado_usuarios`
--

INSERT INTO `estado_usuarios` (`activar_user`, `estado_user`) VALUES
(1, 'ACTIVO'),
(2, 'INACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) DEFAULT NULL,
  `mensaje` varchar(500) DEFAULT NULL,
  `subtitulo` varchar(45) DEFAULT NULL,
  `submensaje` varchar(500) DEFAULT NULL,
  `idestadoeventos` int(11) NOT NULL,
  `imagenes` varchar(100) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  PRIMARY KEY (`id`,`idestadoeventos`),
  KEY `fk_eventos_estadoeventos1_idx` (`idestadoeventos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `mensaje`, `subtitulo`, `submensaje`, `idestadoeventos`, `imagenes`, `fecha_registro`) VALUES
(1, 'CARRERA POR DEPARTAMENTO', 'Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.', 'Proceso', 'Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.', 3, '/imagenes/eventos/20180610_182713.jpg', '2018-12-04'),
(2, 'CARRERA VEHICULOS', 'Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.', 'CUBICULOS', 'Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.', 2, '/imagenes/eventos/20180728_150838.jpg', '2018-12-06'),
(3, 'ESTACIONARIO', 'Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.', 'PARQUEOS', 'Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.', 2, '/imagenes/eventos/20180805_083557.jpg', '2018-12-11'),
(4, 'FIESTA DE CIMPLAÑOS', 'acceder a eventos de festividades', 'PRE - AVISO', 'anticipación', 1, '/imagenes/eventos/images.jpg', '2018-12-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos_salidas`
--

CREATE TABLE IF NOT EXISTS `ingresos_salidas` (
  `id_salidas` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL,
  `puntoparqueo_id` int(11) NOT NULL,
  `vehiculos_placa` varchar(45) NOT NULL,
  PRIMARY KEY (`id_salidas`,`puntoparqueo_id`,`vehiculos_placa`),
  UNIQUE KEY `id_salidas_UNIQUE` (`id_salidas`),
  KEY `fk_ingresos_salidas_puntoparqueo1_idx` (`puntoparqueo_id`),
  KEY `fk_ingresos_salidas_vehiculos1_idx` (`vehiculos_placa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ingresos_salidas`
--

INSERT INTO `ingresos_salidas` (`id_salidas`, `fecha_ingreso`, `fecha_salida`, `puntoparqueo_id`, `vehiculos_placa`) VALUES
(1, '2018-12-02', '2018-12-01', 87, 'GHT428'),
(2, '2018-12-07', '2018-12-02', 2, 'CYT444');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pqrs`
--

CREATE TABLE IF NOT EXISTS `pqrs` (
  `idpqrs` int(11) NOT NULL,
  `asunto` varchar(45) DEFAULT NULL,
  `mensaje` varchar(500) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `adjunto` varchar(45) DEFAULT NULL,
  `idestadopqrs` int(11) NOT NULL,
  `idusuario` varchar(20) NOT NULL,
  PRIMARY KEY (`idpqrs`,`idestadopqrs`,`idusuario`),
  KEY `fk_pqrs_estadopqrs1_idx` (`idestadopqrs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntoparqueo`
--

CREATE TABLE IF NOT EXISTS `puntoparqueo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_punto` varchar(45) DEFAULT NULL,
  `tipos_id` int(11) NOT NULL,
  `idestado_parqueo` int(11) NOT NULL,
  PRIMARY KEY (`id`,`tipos_id`,`idestado_parqueo`),
  KEY `fk_puntoparqueo_tipos1_idx` (`tipos_id`),
  KEY `fk_puntoparqueo_estado_parqueo1_idx` (`idestado_parqueo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=101 ;

--
-- Volcado de datos para la tabla `puntoparqueo`
--

INSERT INTO `puntoparqueo` (`id`, `nombre_punto`, `tipos_id`, `idestado_parqueo`) VALUES
(1, 'A1', 1, 1),
(2, 'A2', 1, 1),
(3, 'A3', 1, 1),
(4, 'A4', 1, 1),
(5, 'A5', 1, 1),
(6, 'A6', 1, 1),
(7, 'A7', 1, 1),
(8, 'A8', 1, 1),
(9, 'A9', 1, 1),
(10, 'A10', 1, 1),
(11, 'A11', 1, 1),
(12, 'A12', 1, 1),
(13, 'A13', 1, 1),
(14, 'A14', 1, 1),
(15, 'A15', 1, 1),
(16, 'A16', 1, 1),
(17, 'A17', 1, 1),
(18, 'A18', 1, 1),
(19, 'A19', 1, 1),
(20, 'A20', 1, 1),
(21, 'A21', 1, 1),
(22, 'A22', 1, 1),
(23, 'A23', 1, 1),
(24, 'A24', 1, 1),
(25, 'A25', 1, 1),
(26, 'A26', 1, 1),
(27, 'A27', 1, 1),
(28, 'A28', 1, 1),
(29, 'A29', 1, 1),
(30, 'A30', 1, 1),
(31, 'A31', 1, 1),
(32, 'A32', 1, 1),
(33, 'A33', 1, 1),
(34, 'A34', 1, 1),
(35, 'A35', 1, 1),
(36, 'A36', 1, 1),
(37, 'A37', 1, 1),
(38, 'A38', 1, 1),
(39, 'A39', 1, 1),
(40, 'A40', 1, 1),
(41, 'A41', 1, 1),
(42, 'A42', 1, 1),
(43, 'A43', 1, 1),
(44, 'A44', 1, 1),
(45, 'A45', 1, 1),
(46, 'A46', 1, 1),
(47, 'A47', 1, 1),
(48, 'A48', 1, 1),
(49, 'A49', 1, 1),
(50, 'A50', 1, 1),
(51, 'A51', 1, 1),
(52, 'A52', 1, 1),
(53, 'A53', 1, 1),
(54, 'A54', 1, 1),
(55, 'A55', 1, 1),
(56, 'A56', 1, 1),
(57, 'A57', 1, 1),
(58, 'A58', 1, 1),
(59, 'A59', 1, 1),
(60, 'A60', 1, 1),
(61, 'A61', 1, 1),
(62, 'A62', 1, 1),
(63, 'A63', 1, 1),
(64, 'A64', 1, 1),
(65, 'A65', 1, 1),
(66, 'A66', 1, 1),
(67, 'A67', 1, 1),
(68, 'A68', 1, 1),
(69, 'A69', 1, 1),
(70, 'A70', 1, 1),
(71, 'A71', 1, 1),
(72, 'A72', 1, 1),
(73, 'A73', 1, 1),
(74, 'A74', 1, 1),
(75, 'A75', 1, 1),
(76, 'A76', 1, 1),
(77, 'A77', 1, 1),
(78, 'A78', 1, 1),
(79, 'A79', 1, 1),
(80, 'A80', 1, 1),
(81, 'A81', 1, 1),
(82, 'A82', 1, 1),
(83, 'A83', 1, 1),
(84, 'A84', 1, 1),
(85, 'A85', 1, 1),
(86, 'A86', 1, 1),
(87, 'A87', 1, 1),
(88, 'A88', 1, 1),
(89, 'A89', 1, 1),
(90, 'A90', 1, 1),
(91, 'A91', 1, 1),
(92, 'A92', 1, 1),
(93, 'A93', 1, 1),
(94, 'A94', 1, 1),
(95, 'A95', 1, 1),
(96, 'A96', 1, 1),
(97, 'A97', 1, 1),
(98, 'A98', 1, 1),
(99, 'A99', 1, 1),
(100, 'A100', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_sorteo`
--

CREATE TABLE IF NOT EXISTS `registro_sorteo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apartamentos_id` int(11) NOT NULL,
  `apartamento` decimal(10,0) NOT NULL,
  `torre` decimal(10,0) NOT NULL,
  `nombre_punto` varchar(20) NOT NULL,
  `puntoparqueo_id` int(11) NOT NULL,
  `fecha_sorteo` date NOT NULL,
  PRIMARY KEY (`id`,`apartamentos_id`,`puntoparqueo_id`),
  KEY `fk_apartamentos_has_puntoparqueo_puntoparqueo1_idx` (`puntoparqueo_id`),
  KEY `fk_apartamentos_has_puntoparqueo_apartamentos1_idx` (`apartamentos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre_rol`) VALUES
(1, 'SUPERUSER'),
(2, 'ADMINISTRADOR'),
(3, 'OPERADOR'),
(4, 'PROPIETARIO'),
(5, 'ARRENDATARIO'),
(6, 'VISITANTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sorteo`
--

CREATE TABLE IF NOT EXISTS `sorteo` (
  `id_sorteo` int(11) NOT NULL AUTO_INCREMENT,
  `id_apartamento` int(11) NOT NULL,
  `apartamento` decimal(10,0) NOT NULL,
  `torre` decimal(10,0) NOT NULL,
  `fecha_sorteo` datetime NOT NULL,
  PRIMARY KEY (`id_sorteo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id`, `tipo`) VALUES
(1, 'DISCAPACITADOS'),
(2, 'VEHICULOS ADMINISTRATIVOS'),
(3, 'MOTOCILCETAS'),
(5, 'VEHICULOS NO ADMINISTRATIVOS'),
(6, 'NINGUNO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `cedula` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `telefono` decimal(10,0) DEFAULT NULL,
  `celular` decimal(10,0) DEFAULT NULL,
  `correo` varchar(45) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `estado_usuario` int(11) NOT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `roles_id` int(11) NOT NULL,
  `tipos_id` int(11) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `activar_user` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cedula`,`roles_id`,`tipos_id`,`activar_user`),
  UNIQUE KEY `cedula_UNIQUE` (`cedula`),
  KEY `fk_usuarios_roles1_idx` (`roles_id`),
  KEY `fk_usuarios_tipos1_idx` (`tipos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cedula`, `nombre`, `apellido`, `telefono`, `celular`, `correo`, `username`, `password`, `estado_usuario`, `observaciones`, `roles_id`, `tipos_id`, `fecha_registro`, `activar_user`) VALUES
('1022934516', 'Andres', 'torrez gomez', '317264656', '317264656', 'tavos@gmail.com', 'adrtor', '2468', 1, 'N/A', 5, 1, '2018-11-16 00:00:00', 1),
('1022934520', 'a', 'w', '123460', '317268', 'a@5', '123457', '12345', 2, 'N/A', 5, 5, '2018-09-13 00:00:00', 1),
('1022934521', 'b', 'x', '123461', '317269', 'a@6', '123458', '12345', 2, 'N/A', 5, 5, '2018-09-14 00:00:00', 1),
('1022934522', 'c', 'y', '123462', '317270', 'a@7', '123459', '12345', 2, 'N/A', 5, 5, '2018-09-15 00:00:00', 1),
('1022934523', 'd', 'z', '123463', '317271', 'a@8', '123460', '12345', 2, 'N/A', 5, 5, '2018-09-16 00:00:00', 1),
('1022934524', 'a', 'w', '123464', '317272', 'a@9', '123461', '12345', 2, 'N/A', 5, 5, '2018-09-17 00:00:00', 1),
('1022934525', 'b', 'x', '123465', '317273', 'a@10', '123462', '12345', 2, 'N/A', 5, 5, '2018-09-18 00:00:00', 1),
('1022934526', 'c', 'y', '123466', '317274', 'a@11', '123463', '12345', 2, 'N/A', 5, 5, '2018-09-19 00:00:00', 1),
('1022934527', 'd', 'z', '123467', '317275', 'a@12', '123464', '12345', 2, 'N/A', 5, 5, '2018-09-20 00:00:00', 1),
('1022934528', 'a', 'w', '123468', '317276', 'a@13', '123465', '12345', 2, 'N/A', 5, 5, '2018-09-21 00:00:00', 1),
('1022934529', 'b', 'x', '123469', '317277', 'a@14', '123466', '12345', 2, 'N/A', 5, 5, '2018-09-22 00:00:00', 1),
('1022934530', 'c', 'y', '123470', '317278', 'a@15', '123467', '12345', 2, 'N/A', 5, 5, '2018-09-23 00:00:00', 1),
('1022934531', 'd', 'z', '123471', '317279', 'a@16', '123468', '12345', 2, 'N/A', 5, 5, '2018-09-24 00:00:00', 1),
('1022934532', 'a', 'w', '123472', '317280', 'a@17', '123469', '12345', 2, 'N/A', 5, 5, '2018-09-25 00:00:00', 1),
('1022934533', 'b', 'x', '123473', '317281', 'a@18', '123470', '12345', 2, 'N/A', 5, 5, '2018-09-26 00:00:00', 1),
('1022934534', 'c', 'y', '123474', '317282', 'a@19', '123471', '12345', 2, 'N/A', 5, 5, '2018-09-27 00:00:00', 1),
('1022934535', 'd', 'z', '123475', '317283', 'a@20', '123472', '12345', 2, 'N/A', 5, 5, '2018-09-28 00:00:00', 1),
('1022934536', 'a', 'w', '123476', '317284', 'a@21', '123473', '12345', 2, 'N/A', 5, 5, '2018-09-29 00:00:00', 1),
('1022934537', 'b', 'x', '123477', '317285', 'a@22', '123474', '12345', 2, 'N/A', 5, 5, '2018-09-30 00:00:00', 1),
('1022934538', 'c', 'y', '123478', '317286', 'a@23', '123475', '12345', 2, 'N/A', 5, 5, '2018-10-01 00:00:00', 1),
('1022934539', 'd', 'z', '123479', '317287', 'a@24', '123476', '12345', 2, 'N/A', 5, 5, '2018-10-02 00:00:00', 1),
('1022934540', 'a', 'w', '123480', '317288', 'a@25', '123477', '12345', 2, 'N/A', 5, 5, '2018-10-03 00:00:00', 1),
('1022934541', 'b', 'x', '123481', '317289', 'a@26', '123478', '12345', 2, 'N/A', 5, 5, '2018-10-04 00:00:00', 1),
('1022934542', 'c', 'y', '123482', '317290', 'a@27', '123479', '12345', 2, 'N/A', 5, 5, '2018-10-05 00:00:00', 1),
('1022934543', 'd', 'z', '123483', '317291', 'a@28', '123480', '12345', 2, 'N/A', 5, 5, '2018-10-06 00:00:00', 1),
('1022934544', 'a', 'w', '123484', '317292', 'a@29', '123481', '12345', 2, 'N/A', 5, 5, '2018-10-07 00:00:00', 1),
('1022934545', 'b', 'x', '123485', '317293', 'a@30', '123482', '12345', 2, 'N/A', 5, 5, '2018-10-08 00:00:00', 1),
('1022934546', 'c', 'y', '123486', '317294', 'a@31', '123483', '12345', 2, 'N/A', 5, 5, '2018-10-09 00:00:00', 1),
('1022934547', 'd', 'z', '123487', '317295', 'a@32', '123484', '12345', 2, 'N/A', 5, 5, '2018-10-10 00:00:00', 1),
('1022934548', 'a', 'w', '123488', '317296', 'a@33', '123485', '12345', 2, 'N/A', 5, 5, '2018-10-11 00:00:00', 1),
('1022934549', 'b', 'x', '123489', '317297', 'a@34', '123486', '12345', 2, 'N/A', 5, 5, '2018-10-12 00:00:00', 1),
('1022934550', 'c', 'y', '123490', '317298', 'a@35', '123487', '12345', 2, 'N/A', 5, 5, '2018-10-13 00:00:00', 1),
('1022934551', 'd', 'z', '123491', '317299', 'a@36', '123488', '12345', 2, 'N/A', 5, 5, '2018-10-14 00:00:00', 1),
('1022934552', 'a', 'w', '123492', '317300', 'a@37', '123489', '12345', 2, 'N/A', 5, 5, '2018-10-15 00:00:00', 1),
('1022934553', 'b', 'x', '123493', '317301', 'a@38', '123490', '12345', 2, 'N/A', 5, 5, '2018-10-16 00:00:00', 1),
('1022934554', 'c', 'y', '123494', '317302', 'a@39', '123491', '12345', 2, 'N/A', 5, 5, '2018-10-17 00:00:00', 1),
('1022934555', 'd', 'z', '123495', '317303', 'a@40', '123492', '12345', 2, 'N/A', 5, 5, '2018-10-18 00:00:00', 1),
('1022934556', 'a', 'w', '123496', '317304', 'a@41', '123493', '12345', 2, 'N/A', 5, 5, '2018-10-19 00:00:00', 1),
('1022934557', 'b', 'x', '123497', '317305', 'a@42', '123494', '12345', 2, 'N/A', 5, 5, '2018-10-20 00:00:00', 1),
('1022934558', 'c', 'y', '123498', '317306', 'a@43', '123495', '12345', 2, 'N/A', 5, 5, '2018-10-21 00:00:00', 1),
('1022934559', 'd', 'z', '123499', '317307', 'a@44', '123496', '12345', 2, 'N/A', 5, 5, '2018-10-22 00:00:00', 1),
('1022934560', 'a', 'w', '123500', '317308', 'a@45', '123497', '12345', 2, 'N/A', 5, 5, '2018-10-23 00:00:00', 1),
('1022934561', 'b', 'x', '123501', '317309', 'a@46', '123498', '12345', 2, 'N/A', 5, 5, '2018-10-24 00:00:00', 1),
('1022934562', 'c', 'y', '123502', '317310', 'a@47', '123499', '12345', 2, 'N/A', 5, 5, '2018-10-25 00:00:00', 1),
('1022934563', 'd', 'z', '123503', '317311', 'a@48', '123500', '12345', 2, 'N/A', 5, 5, '2018-10-26 00:00:00', 1),
('1022934564', 'a', 'w', '123504', '317312', 'a@49', '123501', '12345', 2, 'N/A', 5, 5, '2018-10-27 00:00:00', 1),
('1022934565', 'b', 'x', '123505', '317313', 'a@50', '123502', '12345', 2, 'N/A', 5, 5, '2018-10-28 00:00:00', 1),
('1022934566', 'c', 'y', '123506', '317314', 'a@51', '123503', '12345', 2, 'N/A', 5, 5, '2018-10-29 00:00:00', 1),
('1022934567', 'd', 'z', '123507', '317315', 'a@52', '123504', '12345', 2, 'N/A', 5, 5, '2018-10-30 00:00:00', 1),
('1022934568', 'a', 'w', '123508', '317316', 'a@53', '123505', '12345', 2, 'N/A', 5, 5, '2018-10-31 00:00:00', 1),
('1022934569', 'b', 'x', '123509', '317317', 'a@54', '123506', '12345', 2, 'N/A', 5, 5, '2018-11-01 00:00:00', 1),
('1022934570', 'c', 'y', '123510', '317318', 'a@55', '123507', '12345', 2, 'N/A', 5, 5, '2018-11-02 00:00:00', 1),
('1022934571', 'd', 'z', '123511', '317319', 'a@56', '123508', '12345', 2, 'N/A', 5, 5, '2018-11-03 00:00:00', 1),
('1022934572', 'a', 'w', '123512', '317320', 'a@57', '123509', '12345', 2, 'N/A', 5, 5, '2018-11-04 00:00:00', 1),
('1022934573', 'b', 'x', '123513', '317321', 'a@58', '123510', '12345', 2, 'N/A', 5, 5, '2018-11-05 00:00:00', 1),
('1022934574', 'c', 'y', '123514', '317322', 'a@59', '123511', '12345', 2, 'N/A', 5, 5, '2018-11-06 00:00:00', 1),
('1022934575', 'd', 'w', '123515', '317323', 'a@60', '123512', '12345', 2, 'N/A', 5, 5, '2018-11-07 00:00:00', 1),
('1022934576', 'a', 'x', '123516', '317324', 'a@61', '123513', '12345', 2, 'N/A', 5, 5, '2018-11-08 00:00:00', 1),
('1022934577', 'b', 'y', '123517', '317325', 'a@62', '123514', '12345', 2, 'N/A', 5, 5, '2018-11-09 00:00:00', 1),
('1022934578', 'c', 'z', '123518', '317326', 'a@63', '123515', '12345', 2, 'N/A', 5, 5, '2018-11-10 00:00:00', 1),
('1022934579', 'd', 'w', '123519', '317327', 'a@64', '123516', '12345', 2, 'N/A', 5, 5, '2018-11-11 00:00:00', 1),
('1022934580', 'a', 'x', '123520', '317328', 'a@65', '123517', '12345', 2, 'N/A', 5, 5, '2018-11-12 00:00:00', 1),
('1022934581', 'b', 'y', '123521', '317329', 'a@66', '123518', '12345', 2, 'N/A', 5, 5, '2018-11-13 00:00:00', 1),
('1022934582', 'c', 'z', '123522', '317330', 'a@67', '123519', '12345', 2, 'N/A', 5, 5, '2018-11-14 00:00:00', 1),
('1022934583', 'd', 'w', '123523', '317331', 'a@68', '123520', '12345', 2, 'N/A', 5, 5, '2018-11-15 00:00:00', 1),
('1022934584', 'a', 'x', '123524', '317332', 'a@69', '123521', '12345', 2, 'N/A', 5, 5, '2018-11-16 00:00:00', 1),
('1022934585', 'b', 'y', '123525', '317333', 'a@70', '123522', '12345', 2, 'N/A', 5, 5, '2018-11-17 00:00:00', 1),
('1022934586', 'c', 'z', '123526', '317334', 'a@71', '123523', '12345', 2, 'N/A', 5, 5, '2018-11-18 00:00:00', 1),
('1022934587', 'd', 'w', '123527', '317335', 'a@72', '123524', '12345', 2, 'N/A', 5, 5, '2018-11-19 00:00:00', 1),
('1022934588', 'a', 'x', '123528', '317336', 'a@73', '123525', '12345', 2, 'N/A', 5, 5, '2018-11-20 00:00:00', 1),
('1022934589', 'b', 'y', '123529', '317337', 'a@74', '123526', '12345', 2, 'N/A', 5, 5, '2018-11-21 00:00:00', 1),
('1022934590', 'c', 'z', '123530', '317338', 'a@75', '123527', '12345', 2, 'N/A', 5, 5, '2018-11-22 00:00:00', 1),
('1022934591', 'd', 'w', '123531', '317339', 'a@76', '123528', '12345', 2, 'N/A', 5, 5, '2018-11-23 00:00:00', 1),
('1022934592', 'a', 'x', '123532', '317340', 'a@77', '123529', '12345', 2, 'N/A', 5, 5, '2018-11-24 00:00:00', 1),
('1022934593', 'b', 'y', '123533', '317341', 'a@78', '123530', '12345', 2, 'N/A', 5, 5, '2018-11-25 00:00:00', 1),
('1022934594', 'c', 'z', '123534', '317342', 'a@79', '123531', '12345', 2, 'N/A', 5, 5, '2018-11-26 00:00:00', 1),
('1022934595', 'd', 'w', '123535', '317343', 'a@80', '123532', '12345', 2, 'N/A', 5, 5, '2018-11-27 00:00:00', 1),
('1022934596', 'a', 'x', '123536', '317344', 'a@81', '123533', '12345', 2, 'N/A', 5, 5, '2018-11-28 00:00:00', 1),
('1022934597', 'b', 'y', '123537', '317345', 'a@82', '123534', '12345', 2, 'N/A', 5, 5, '2018-11-29 00:00:00', 1),
('1022934598', 'c', 'z', '123538', '317346', 'a@83', '123535', '12345', 2, 'N/A', 5, 5, '2018-11-30 00:00:00', 1),
('1022934599', 'd', 'w', '123539', '317347', 'a@84', '123536', '12345', 2, 'N/A', 5, 5, '2018-12-01 00:00:00', 1),
('1022934600', 'a', 'x', '123540', '317348', 'a@85', '123537', '12345', 2, 'N/A', 5, 5, '2018-12-02 00:00:00', 1),
('1022934601', 'b', 'y', '123541', '317349', 'a@86', '123538', '12345', 2, 'N/A', 5, 5, '2018-12-03 00:00:00', 1),
('1022934602', 'c', 'z', '123542', '317350', 'a@87', '123539', '12345', 2, 'N/A', 5, 5, '2018-12-04 00:00:00', 1),
('1022934603', 'd', 'w', '123543', '317351', 'a@88', '123540', '12345', 2, 'N/A', 5, 5, '2018-12-05 00:00:00', 1),
('1022934604', 'a', 'x', '123544', '317352', 'a@89', '123541', '12345', 2, 'N/A', 5, 5, '2018-12-06 00:00:00', 1),
('1022934605', 'b', 'y', '123545', '317353', 'a@90', '123542', '12345', 2, 'N/A', 5, 5, '2018-12-07 00:00:00', 1),
('1022934606', 'c', 'z', '123546', '317354', 'a@91', '123543', '12345', 2, 'N/A', 5, 5, '2018-12-08 00:00:00', 1),
('1022934607', 'd', 'w', '123547', '317355', 'a@92', '123544', '12345', 2, 'N/A', 5, 5, '2018-12-09 00:00:00', 1),
('1022934608', 'a', 'x', '123548', '317356', 'a@93', '123545', '12345', 2, 'N/A', 5, 5, '2018-12-10 00:00:00', 1),
('1022934609', 'b', 'y', '123549', '317357', 'a@94', '123546', '12345', 2, 'N/A', 5, 5, '2018-12-11 00:00:00', 1),
('1022934610', 'c', 'z', '123550', '317358', 'a@95', '123547', '12345', 2, 'N/A', 5, 5, '2018-12-12 00:00:00', 1),
('1022934611', 'd', 'w', '123551', '317359', 'a@96', '123548', '12345', 2, 'N/A', 5, 5, '2018-12-13 00:00:00', 1),
('1022934612', 'a', 'x', '123552', '317360', 'a@97', '123549', '12345', 2, 'N/A', 5, 5, '2018-12-14 00:00:00', 1),
('1022934613', 'b', 'y', '123553', '317361', 'a@98', '123550', '12345', 2, 'N/A', 5, 5, '2018-12-15 00:00:00', 1),
('1022934614', 'c', 'z', '123554', '317362', 'a@99', '123551', '12345', 2, 'N/A', 5, 5, '2018-12-16 00:00:00', 1),
('1022934615', 'd', 'w', '123555', '317363', 'a@100', '123552', '12345', 2, 'N/A', 5, 5, '2018-12-17 00:00:00', 1),
('1022934616', 'a', 'x', '123556', '317364', 'a@101', '123553', '12345', 2, 'N/A', 5, 5, '2018-12-18 00:00:00', 1),
('1022934617', 'b', 'y', '123557', '317365', 'a@102', '123554', '12345', 2, 'N/A', 5, 5, '2018-12-19 00:00:00', 1),
('1022934618', 'c', 'z', '123558', '317366', 'a@103', '123555', '12345', 2, 'N/A', 5, 5, '2018-12-20 00:00:00', 1),
('1022934619', 'd', 'w', '123559', '317367', 'a@104', '123556', '12345', 2, 'N/A', 5, 5, '2018-12-21 00:00:00', 1),
('1022934620', 'a', 'x', '123560', '317368', 'a@105', '123557', '12345', 2, 'N/A', 5, 5, '2018-12-22 00:00:00', 1),
('1022934621', 'b', 'y', '123561', '317369', 'a@106', '123558', '12345', 2, 'N/A', 5, 5, '2018-12-23 00:00:00', 1),
('1022934622', 'c', 'z', '123562', '317370', 'a@107', '123559', '12345', 2, 'N/A', 5, 5, '2018-12-24 00:00:00', 1),
('1022934623', 'd', 'w', '123563', '317371', 'a@108', '123560', '12345', 2, 'N/A', 5, 5, '2018-12-25 00:00:00', 1),
('1022934624', 'a', 'x', '123564', '317372', 'a@109', '123561', '12345', 2, 'N/A', 5, 5, '2018-12-26 00:00:00', 1),
('1022934625', 'b', 'y', '123565', '317373', 'a@110', '123562', '12345', 2, 'N/A', 5, 5, '2018-12-27 00:00:00', 1),
('1022934626', 'c', 'z', '123566', '317374', 'a@111', '123563', '12345', 2, 'N/A', 5, 5, '2018-12-28 00:00:00', 1),
('1022934627', 'd', 'w', '123567', '317375', 'a@112', '123564', '12345', 2, 'N/A', 5, 5, '2018-12-29 00:00:00', 1),
('1022934628', 'a', 'x', '123568', '317376', 'a@113', '123565', '12345', 2, 'N/A', 5, 5, '2018-12-30 00:00:00', 1),
('1022934629', 'b', 'y', '123569', '317377', 'a@114', '123566', '12345', 2, 'N/A', 5, 5, '2018-12-31 00:00:00', 1),
('1022934630', 'c', 'w', '123570', '317378', 'a@115', '123567', '12345', 2, 'N/A', 5, 5, '2019-01-01 00:00:00', 1),
('1022934631', 'd', 'x', '123571', '317379', 'a@116', '123568', '12345', 2, 'N/A', 5, 5, '2019-01-02 00:00:00', 1),
('1022934632', 'a', 'y', '123572', '317380', 'a@117', '123569', '12345', 2, 'N/A', 5, 5, '2019-01-03 00:00:00', 1),
('1022934633', 'b', 'z', '123573', '317381', 'a@118', '123570', '12345', 2, 'N/A', 5, 5, '2019-01-04 00:00:00', 1),
('1022934634', 'c', 'w', '123574', '317382', 'a@119', '123571', '12345', 2, 'N/A', 5, 5, '2019-01-05 00:00:00', 1),
('1022934635', 'd', 'x', '123575', '317383', 'a@120', '123572', '12345', 2, 'N/A', 5, 5, '2019-01-06 00:00:00', 1),
('1022934636', 'a', 'y', '123576', '317384', 'a@121', '123573', '12345', 2, 'N/A', 5, 5, '2019-01-07 00:00:00', 1),
('1022934637', 'b', 'z', '123577', '317385', 'a@122', '123574', '12345', 2, 'N/A', 5, 5, '2019-01-08 00:00:00', 1),
('1022934638', 'c', 'w', '123578', '317386', 'a@123', '123575', '12345', 2, 'N/A', 5, 5, '2019-01-09 00:00:00', 1),
('1022934639', 'd', 'x', '123579', '317387', 'a@124', '123576', '12345', 2, 'N/A', 5, 5, '2019-01-10 00:00:00', 1),
('1022934640', 'a', 'y', '123580', '317388', 'a@125', '123577', '12345', 2, 'N/A', 5, 5, '2019-01-11 00:00:00', 1),
('1022934641', 'b', 'z', '123581', '317389', 'a@126', '123578', '12345', 2, 'N/A', 5, 5, '2019-01-12 00:00:00', 1),
('1022934642', 'c', 'w', '123582', '317390', 'a@127', '123579', '12345', 2, 'N/A', 5, 5, '2019-01-13 00:00:00', 1),
('1022934643', 'd', 'x', '123583', '317391', 'a@128', '123580', '12345', 2, 'N/A', 5, 5, '2019-01-14 00:00:00', 1),
('1022934644', 'a', 'y', '123584', '317392', 'a@129', '123581', '12345', 2, 'N/A', 5, 5, '2019-01-15 00:00:00', 1),
('1022934645', 'b', 'z', '123585', '317393', 'a@130', '123582', '12345', 2, 'N/A', 5, 5, '2019-01-16 00:00:00', 1),
('1022934646', 'c', 'w', '123586', '317394', 'a@131', '123583', '12345', 2, 'N/A', 5, 5, '2019-01-17 00:00:00', 1),
('1022934647', 'd', 'x', '123587', '317395', 'a@132', '123584', '12345', 2, 'N/A', 5, 5, '2019-01-18 00:00:00', 1),
('1022934648', 'a', 'y', '123588', '317396', 'a@133', '123585', '12345', 2, 'N/A', 5, 5, '2019-01-19 00:00:00', 1),
('1022934649', 'b', 'z', '123589', '317397', 'a@134', '123586', '12345', 2, 'N/A', 5, 5, '2019-01-20 00:00:00', 1),
('1022934650', 'c', 'w', '123590', '317398', 'a@135', '123587', '12345', 2, 'N/A', 2, 5, '2019-01-21 00:00:00', 1),
('12345', 'lorena', 'caicedo', '12345', '12345', 'lore@caicedo.com', '', '12345', 1, 'notengo', 5, 6, '2018-12-27 00:00:00', 1),
('123456', 'jaime', 'valderrama', '3172646327', '3172646358', 'tavo@gmail.com', '', '54321', 1, 'das', 3, 1, '2018-11-23 00:00:00', 1),
('123457', 'juan', 'andrade', '3172646327', '12345', 'gustavo@gmail.com', 'juaand', '12345', 1, '', 1, 2, '2018-11-08 00:00:00', 1),
('123458', 'jorge', 'gomez perez', '3172646327', '12345', 'gustavo@gmail.com', '', '12345', 1, 'aaaa', 5, 1, '2018-12-27 00:00:00', 1),
('444444', 'gustavo', 'Hernandéz', '3172646327', '123', 'gonzalo@hotmail.com', '', '123456', 1, 'asd', 4, 1, '2018-11-24 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_respaldo`
--

CREATE TABLE IF NOT EXISTS `usuarios_respaldo` (
  `cedula` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `telefono` decimal(10,0) DEFAULT NULL,
  `celular` decimal(10,0) DEFAULT NULL,
  `correo` varchar(45) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `estado_usuario` int(11) NOT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `roles_id` int(11) NOT NULL,
  `tipos_id` int(11) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `activar_user` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cedula`,`roles_id`,`tipos_id`,`activar_user`),
  UNIQUE KEY `cedula_UNIQUE` (`cedula`),
  KEY `fk_usuarios_roles1_idx` (`roles_id`),
  KEY `fk_usuarios_tipos1_idx` (`tipos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios_respaldo`
--

INSERT INTO `usuarios_respaldo` (`cedula`, `nombre`, `apellido`, `telefono`, `celular`, `correo`, `username`, `password`, `estado_usuario`, `observaciones`, `roles_id`, `tipos_id`, `fecha_registro`, `activar_user`) VALUES
('1022934516', 'Andres', 'torrez gomez', '317264656', '317264656', 'tavos@gmail.com', 'adrtor', '2468', 1, 'N/A', 5, 1, '2018-11-16 00:00:00', 1),
('1022934520', 'a', 'w', '123460', '317268', 'a@5', '123457', '12345', 2, 'N/A', 5, 5, '2018-09-13 00:00:00', 1),
('1022934521', 'b', 'x', '123461', '317269', 'a@6', '123458', '12345', 2, 'N/A', 5, 5, '2018-09-14 00:00:00', 1),
('1022934522', 'c', 'y', '123462', '317270', 'a@7', '123459', '12345', 2, 'N/A', 5, 5, '2018-09-15 00:00:00', 1),
('1022934523', 'd', 'z', '123463', '317271', 'a@8', '123460', '12345', 2, 'N/A', 5, 5, '2018-09-16 00:00:00', 1),
('1022934524', 'a', 'w', '123464', '317272', 'a@9', '123461', '12345', 2, 'N/A', 5, 5, '2018-09-17 00:00:00', 1),
('1022934525', 'b', 'x', '123465', '317273', 'a@10', '123462', '12345', 2, 'N/A', 5, 5, '2018-09-18 00:00:00', 1),
('1022934526', 'c', 'y', '123466', '317274', 'a@11', '123463', '12345', 2, 'N/A', 5, 5, '2018-09-19 00:00:00', 1),
('1022934527', 'd', 'z', '123467', '317275', 'a@12', '123464', '12345', 2, 'N/A', 5, 5, '2018-09-20 00:00:00', 1),
('1022934528', 'a', 'w', '123468', '317276', 'a@13', '123465', '12345', 2, 'N/A', 5, 5, '2018-09-21 00:00:00', 1),
('1022934529', 'b', 'x', '123469', '317277', 'a@14', '123466', '12345', 2, 'N/A', 5, 5, '2018-09-22 00:00:00', 1),
('1022934530', 'c', 'y', '123470', '317278', 'a@15', '123467', '12345', 2, 'N/A', 5, 5, '2018-09-23 00:00:00', 1),
('1022934531', 'd', 'z', '123471', '317279', 'a@16', '123468', '12345', 2, 'N/A', 5, 5, '2018-09-24 00:00:00', 1),
('1022934532', 'a', 'w', '123472', '317280', 'a@17', '123469', '12345', 2, 'N/A', 5, 5, '2018-09-25 00:00:00', 1),
('1022934533', 'b', 'x', '123473', '317281', 'a@18', '123470', '12345', 2, 'N/A', 5, 5, '2018-09-26 00:00:00', 1),
('1022934534', 'c', 'y', '123474', '317282', 'a@19', '123471', '12345', 2, 'N/A', 5, 5, '2018-09-27 00:00:00', 1),
('1022934535', 'd', 'z', '123475', '317283', 'a@20', '123472', '12345', 2, 'N/A', 5, 5, '2018-09-28 00:00:00', 1),
('1022934536', 'a', 'w', '123476', '317284', 'a@21', '123473', '12345', 2, 'N/A', 5, 5, '2018-09-29 00:00:00', 1),
('1022934537', 'b', 'x', '123477', '317285', 'a@22', '123474', '12345', 2, 'N/A', 5, 5, '2018-09-30 00:00:00', 1),
('1022934538', 'c', 'y', '123478', '317286', 'a@23', '123475', '12345', 2, 'N/A', 5, 5, '2018-10-01 00:00:00', 1),
('1022934539', 'd', 'z', '123479', '317287', 'a@24', '123476', '12345', 2, 'N/A', 5, 5, '2018-10-02 00:00:00', 1),
('1022934540', 'a', 'w', '123480', '317288', 'a@25', '123477', '12345', 2, 'N/A', 5, 5, '2018-10-03 00:00:00', 1),
('1022934541', 'b', 'x', '123481', '317289', 'a@26', '123478', '12345', 2, 'N/A', 5, 5, '2018-10-04 00:00:00', 1),
('1022934542', 'c', 'y', '123482', '317290', 'a@27', '123479', '12345', 2, 'N/A', 5, 5, '2018-10-05 00:00:00', 1),
('1022934543', 'd', 'z', '123483', '317291', 'a@28', '123480', '12345', 2, 'N/A', 5, 5, '2018-10-06 00:00:00', 1),
('1022934544', 'a', 'w', '123484', '317292', 'a@29', '123481', '12345', 2, 'N/A', 5, 5, '2018-10-07 00:00:00', 1),
('1022934545', 'b', 'x', '123485', '317293', 'a@30', '123482', '12345', 2, 'N/A', 5, 5, '2018-10-08 00:00:00', 1),
('1022934546', 'c', 'y', '123486', '317294', 'a@31', '123483', '12345', 2, 'N/A', 5, 5, '2018-10-09 00:00:00', 1),
('1022934547', 'd', 'z', '123487', '317295', 'a@32', '123484', '12345', 2, 'N/A', 5, 5, '2018-10-10 00:00:00', 1),
('1022934548', 'a', 'w', '123488', '317296', 'a@33', '123485', '12345', 2, 'N/A', 5, 5, '2018-10-11 00:00:00', 1),
('1022934549', 'b', 'x', '123489', '317297', 'a@34', '123486', '12345', 2, 'N/A', 5, 5, '2018-10-12 00:00:00', 1),
('1022934550', 'c', 'y', '123490', '317298', 'a@35', '123487', '12345', 2, 'N/A', 5, 5, '2018-10-13 00:00:00', 1),
('1022934551', 'd', 'z', '123491', '317299', 'a@36', '123488', '12345', 2, 'N/A', 5, 5, '2018-10-14 00:00:00', 1),
('1022934552', 'a', 'w', '123492', '317300', 'a@37', '123489', '12345', 2, 'N/A', 5, 5, '2018-10-15 00:00:00', 1),
('1022934553', 'b', 'x', '123493', '317301', 'a@38', '123490', '12345', 2, 'N/A', 5, 5, '2018-10-16 00:00:00', 1),
('1022934554', 'c', 'y', '123494', '317302', 'a@39', '123491', '12345', 2, 'N/A', 5, 5, '2018-10-17 00:00:00', 1),
('1022934555', 'd', 'z', '123495', '317303', 'a@40', '123492', '12345', 2, 'N/A', 5, 5, '2018-10-18 00:00:00', 1),
('1022934556', 'a', 'w', '123496', '317304', 'a@41', '123493', '12345', 2, 'N/A', 5, 5, '2018-10-19 00:00:00', 1),
('1022934557', 'b', 'x', '123497', '317305', 'a@42', '123494', '12345', 2, 'N/A', 5, 5, '2018-10-20 00:00:00', 1),
('1022934558', 'c', 'y', '123498', '317306', 'a@43', '123495', '12345', 2, 'N/A', 5, 5, '2018-10-21 00:00:00', 1),
('1022934559', 'd', 'z', '123499', '317307', 'a@44', '123496', '12345', 2, 'N/A', 5, 5, '2018-10-22 00:00:00', 1),
('1022934560', 'a', 'w', '123500', '317308', 'a@45', '123497', '12345', 2, 'N/A', 5, 5, '2018-10-23 00:00:00', 1),
('1022934561', 'b', 'x', '123501', '317309', 'a@46', '123498', '12345', 2, 'N/A', 5, 5, '2018-10-24 00:00:00', 1),
('1022934562', 'c', 'y', '123502', '317310', 'a@47', '123499', '12345', 2, 'N/A', 5, 5, '2018-10-25 00:00:00', 1),
('1022934563', 'd', 'z', '123503', '317311', 'a@48', '123500', '12345', 2, 'N/A', 5, 5, '2018-10-26 00:00:00', 1),
('1022934564', 'a', 'w', '123504', '317312', 'a@49', '123501', '12345', 2, 'N/A', 5, 5, '2018-10-27 00:00:00', 1),
('1022934565', 'b', 'x', '123505', '317313', 'a@50', '123502', '12345', 2, 'N/A', 5, 5, '2018-10-28 00:00:00', 1),
('1022934566', 'c', 'y', '123506', '317314', 'a@51', '123503', '12345', 2, 'N/A', 5, 5, '2018-10-29 00:00:00', 1),
('1022934567', 'd', 'z', '123507', '317315', 'a@52', '123504', '12345', 2, 'N/A', 5, 5, '2018-10-30 00:00:00', 1),
('1022934568', 'a', 'w', '123508', '317316', 'a@53', '123505', '12345', 2, 'N/A', 5, 5, '2018-10-31 00:00:00', 1),
('1022934569', 'b', 'x', '123509', '317317', 'a@54', '123506', '12345', 2, 'N/A', 5, 5, '2018-11-01 00:00:00', 1),
('1022934570', 'c', 'y', '123510', '317318', 'a@55', '123507', '12345', 2, 'N/A', 5, 5, '2018-11-02 00:00:00', 1),
('1022934571', 'd', 'z', '123511', '317319', 'a@56', '123508', '12345', 2, 'N/A', 5, 5, '2018-11-03 00:00:00', 1),
('1022934572', 'a', 'w', '123512', '317320', 'a@57', '123509', '12345', 2, 'N/A', 5, 5, '2018-11-04 00:00:00', 1),
('1022934573', 'b', 'x', '123513', '317321', 'a@58', '123510', '12345', 2, 'N/A', 5, 5, '2018-11-05 00:00:00', 1),
('1022934574', 'c', 'y', '123514', '317322', 'a@59', '123511', '12345', 2, 'N/A', 5, 5, '2018-11-06 00:00:00', 1),
('1022934575', 'd', 'w', '123515', '317323', 'a@60', '123512', '12345', 2, 'N/A', 5, 5, '2018-11-07 00:00:00', 1),
('1022934576', 'a', 'x', '123516', '317324', 'a@61', '123513', '12345', 2, 'N/A', 5, 5, '2018-11-08 00:00:00', 1),
('1022934577', 'b', 'y', '123517', '317325', 'a@62', '123514', '12345', 2, 'N/A', 5, 5, '2018-11-09 00:00:00', 1),
('1022934578', 'c', 'z', '123518', '317326', 'a@63', '123515', '12345', 2, 'N/A', 5, 5, '2018-11-10 00:00:00', 1),
('1022934579', 'd', 'w', '123519', '317327', 'a@64', '123516', '12345', 2, 'N/A', 5, 5, '2018-11-11 00:00:00', 1),
('1022934580', 'a', 'x', '123520', '317328', 'a@65', '123517', '12345', 2, 'N/A', 5, 5, '2018-11-12 00:00:00', 1),
('1022934581', 'b', 'y', '123521', '317329', 'a@66', '123518', '12345', 2, 'N/A', 5, 5, '2018-11-13 00:00:00', 1),
('1022934582', 'c', 'z', '123522', '317330', 'a@67', '123519', '12345', 2, 'N/A', 5, 5, '2018-11-14 00:00:00', 1),
('1022934583', 'd', 'w', '123523', '317331', 'a@68', '123520', '12345', 2, 'N/A', 5, 5, '2018-11-15 00:00:00', 1),
('1022934584', 'a', 'x', '123524', '317332', 'a@69', '123521', '12345', 2, 'N/A', 5, 5, '2018-11-16 00:00:00', 1),
('1022934585', 'b', 'y', '123525', '317333', 'a@70', '123522', '12345', 2, 'N/A', 5, 5, '2018-11-17 00:00:00', 1),
('1022934586', 'c', 'z', '123526', '317334', 'a@71', '123523', '12345', 2, 'N/A', 5, 5, '2018-11-18 00:00:00', 1),
('1022934587', 'd', 'w', '123527', '317335', 'a@72', '123524', '12345', 2, 'N/A', 5, 5, '2018-11-19 00:00:00', 1),
('1022934588', 'a', 'x', '123528', '317336', 'a@73', '123525', '12345', 2, 'N/A', 5, 5, '2018-11-20 00:00:00', 1),
('1022934589', 'b', 'y', '123529', '317337', 'a@74', '123526', '12345', 2, 'N/A', 5, 5, '2018-11-21 00:00:00', 1),
('1022934590', 'c', 'z', '123530', '317338', 'a@75', '123527', '12345', 2, 'N/A', 5, 5, '2018-11-22 00:00:00', 1),
('1022934591', 'd', 'w', '123531', '317339', 'a@76', '123528', '12345', 2, 'N/A', 5, 5, '2018-11-23 00:00:00', 1),
('1022934592', 'a', 'x', '123532', '317340', 'a@77', '123529', '12345', 2, 'N/A', 5, 5, '2018-11-24 00:00:00', 1),
('1022934593', 'b', 'y', '123533', '317341', 'a@78', '123530', '12345', 2, 'N/A', 5, 5, '2018-11-25 00:00:00', 1),
('1022934594', 'c', 'z', '123534', '317342', 'a@79', '123531', '12345', 2, 'N/A', 5, 5, '2018-11-26 00:00:00', 1),
('1022934595', 'd', 'w', '123535', '317343', 'a@80', '123532', '12345', 2, 'N/A', 5, 5, '2018-11-27 00:00:00', 1),
('1022934596', 'a', 'x', '123536', '317344', 'a@81', '123533', '12345', 2, 'N/A', 5, 5, '2018-11-28 00:00:00', 1),
('1022934597', 'b', 'y', '123537', '317345', 'a@82', '123534', '12345', 2, 'N/A', 5, 5, '2018-11-29 00:00:00', 1),
('1022934598', 'c', 'z', '123538', '317346', 'a@83', '123535', '12345', 2, 'N/A', 5, 5, '2018-11-30 00:00:00', 1),
('1022934599', 'd', 'w', '123539', '317347', 'a@84', '123536', '12345', 2, 'N/A', 5, 5, '2018-12-01 00:00:00', 1),
('1022934600', 'a', 'x', '123540', '317348', 'a@85', '123537', '12345', 2, 'N/A', 5, 5, '2018-12-02 00:00:00', 1),
('1022934601', 'b', 'y', '123541', '317349', 'a@86', '123538', '12345', 2, 'N/A', 5, 5, '2018-12-03 00:00:00', 1),
('1022934602', 'c', 'z', '123542', '317350', 'a@87', '123539', '12345', 2, 'N/A', 5, 5, '2018-12-04 00:00:00', 1),
('1022934603', 'd', 'w', '123543', '317351', 'a@88', '123540', '12345', 2, 'N/A', 5, 5, '2018-12-05 00:00:00', 1),
('1022934604', 'a', 'x', '123544', '317352', 'a@89', '123541', '12345', 2, 'N/A', 5, 5, '2018-12-06 00:00:00', 1),
('1022934605', 'b', 'y', '123545', '317353', 'a@90', '123542', '12345', 2, 'N/A', 5, 5, '2018-12-07 00:00:00', 1),
('1022934606', 'c', 'z', '123546', '317354', 'a@91', '123543', '12345', 2, 'N/A', 5, 5, '2018-12-08 00:00:00', 1),
('1022934607', 'd', 'w', '123547', '317355', 'a@92', '123544', '12345', 2, 'N/A', 5, 5, '2018-12-09 00:00:00', 1),
('1022934608', 'a', 'x', '123548', '317356', 'a@93', '123545', '12345', 2, 'N/A', 5, 5, '2018-12-10 00:00:00', 1),
('1022934609', 'b', 'y', '123549', '317357', 'a@94', '123546', '12345', 2, 'N/A', 5, 5, '2018-12-11 00:00:00', 1),
('1022934610', 'c', 'z', '123550', '317358', 'a@95', '123547', '12345', 2, 'N/A', 5, 5, '2018-12-12 00:00:00', 1),
('1022934611', 'd', 'w', '123551', '317359', 'a@96', '123548', '12345', 2, 'N/A', 5, 5, '2018-12-13 00:00:00', 1),
('1022934612', 'a', 'x', '123552', '317360', 'a@97', '123549', '12345', 2, 'N/A', 5, 5, '2018-12-14 00:00:00', 1),
('1022934613', 'b', 'y', '123553', '317361', 'a@98', '123550', '12345', 2, 'N/A', 5, 5, '2018-12-15 00:00:00', 1),
('1022934614', 'c', 'z', '123554', '317362', 'a@99', '123551', '12345', 2, 'N/A', 5, 5, '2018-12-16 00:00:00', 1),
('1022934615', 'd', 'w', '123555', '317363', 'a@100', '123552', '12345', 2, 'N/A', 5, 5, '2018-12-17 00:00:00', 1),
('1022934616', 'a', 'x', '123556', '317364', 'a@101', '123553', '12345', 2, 'N/A', 5, 5, '2018-12-18 00:00:00', 1),
('1022934617', 'b', 'y', '123557', '317365', 'a@102', '123554', '12345', 2, 'N/A', 5, 5, '2018-12-19 00:00:00', 1),
('1022934618', 'c', 'z', '123558', '317366', 'a@103', '123555', '12345', 2, 'N/A', 5, 5, '2018-12-20 00:00:00', 1),
('1022934619', 'd', 'w', '123559', '317367', 'a@104', '123556', '12345', 2, 'N/A', 5, 5, '2018-12-21 00:00:00', 1),
('1022934620', 'a', 'x', '123560', '317368', 'a@105', '123557', '12345', 2, 'N/A', 5, 5, '2018-12-22 00:00:00', 1),
('1022934621', 'b', 'y', '123561', '317369', 'a@106', '123558', '12345', 2, 'N/A', 5, 5, '2018-12-23 00:00:00', 1),
('1022934622', 'c', 'z', '123562', '317370', 'a@107', '123559', '12345', 2, 'N/A', 5, 5, '2018-12-24 00:00:00', 1),
('1022934623', 'd', 'w', '123563', '317371', 'a@108', '123560', '12345', 2, 'N/A', 5, 5, '2018-12-25 00:00:00', 1),
('1022934624', 'a', 'x', '123564', '317372', 'a@109', '123561', '12345', 2, 'N/A', 5, 5, '2018-12-26 00:00:00', 1),
('1022934625', 'b', 'y', '123565', '317373', 'a@110', '123562', '12345', 2, 'N/A', 5, 5, '2018-12-27 00:00:00', 1),
('1022934626', 'c', 'z', '123566', '317374', 'a@111', '123563', '12345', 2, 'N/A', 5, 5, '2018-12-28 00:00:00', 1),
('1022934627', 'd', 'w', '123567', '317375', 'a@112', '123564', '12345', 2, 'N/A', 5, 5, '2018-12-29 00:00:00', 1),
('1022934628', 'a', 'x', '123568', '317376', 'a@113', '123565', '12345', 2, 'N/A', 5, 5, '2018-12-30 00:00:00', 1),
('1022934629', 'b', 'y', '123569', '317377', 'a@114', '123566', '12345', 2, 'N/A', 5, 5, '2018-12-31 00:00:00', 1),
('1022934630', 'c', 'w', '123570', '317378', 'a@115', '123567', '12345', 2, 'N/A', 5, 5, '2019-01-01 00:00:00', 1),
('1022934631', 'd', 'x', '123571', '317379', 'a@116', '123568', '12345', 2, 'N/A', 5, 5, '2019-01-02 00:00:00', 1),
('1022934632', 'a', 'y', '123572', '317380', 'a@117', '123569', '12345', 2, 'N/A', 5, 5, '2019-01-03 00:00:00', 1),
('1022934633', 'b', 'z', '123573', '317381', 'a@118', '123570', '12345', 2, 'N/A', 5, 5, '2019-01-04 00:00:00', 1),
('1022934634', 'c', 'w', '123574', '317382', 'a@119', '123571', '12345', 2, 'N/A', 5, 5, '2019-01-05 00:00:00', 1),
('1022934635', 'd', 'x', '123575', '317383', 'a@120', '123572', '12345', 2, 'N/A', 5, 5, '2019-01-06 00:00:00', 1),
('1022934636', 'a', 'y', '123576', '317384', 'a@121', '123573', '12345', 2, 'N/A', 5, 5, '2019-01-07 00:00:00', 1),
('1022934637', 'b', 'z', '123577', '317385', 'a@122', '123574', '12345', 2, 'N/A', 5, 5, '2019-01-08 00:00:00', 1),
('1022934638', 'c', 'w', '123578', '317386', 'a@123', '123575', '12345', 2, 'N/A', 5, 5, '2019-01-09 00:00:00', 1),
('1022934639', 'd', 'x', '123579', '317387', 'a@124', '123576', '12345', 2, 'N/A', 5, 5, '2019-01-10 00:00:00', 1),
('1022934640', 'a', 'y', '123580', '317388', 'a@125', '123577', '12345', 2, 'N/A', 5, 5, '2019-01-11 00:00:00', 1),
('1022934641', 'b', 'z', '123581', '317389', 'a@126', '123578', '12345', 2, 'N/A', 5, 5, '2019-01-12 00:00:00', 1),
('1022934642', 'c', 'w', '123582', '317390', 'a@127', '123579', '12345', 2, 'N/A', 5, 5, '2019-01-13 00:00:00', 1),
('1022934643', 'd', 'x', '123583', '317391', 'a@128', '123580', '12345', 2, 'N/A', 5, 5, '2019-01-14 00:00:00', 1),
('1022934644', 'a', 'y', '123584', '317392', 'a@129', '123581', '12345', 2, 'N/A', 5, 5, '2019-01-15 00:00:00', 1),
('1022934645', 'b', 'z', '123585', '317393', 'a@130', '123582', '12345', 2, 'N/A', 5, 5, '2019-01-16 00:00:00', 1),
('1022934646', 'c', 'w', '123586', '317394', 'a@131', '123583', '12345', 2, 'N/A', 5, 5, '2019-01-17 00:00:00', 1),
('1022934647', 'd', 'x', '123587', '317395', 'a@132', '123584', '12345', 2, 'N/A', 5, 5, '2019-01-18 00:00:00', 1),
('1022934648', 'a', 'y', '123588', '317396', 'a@133', '123585', '12345', 2, 'N/A', 5, 5, '2019-01-19 00:00:00', 1),
('1022934649', 'b', 'z', '123589', '317397', 'a@134', '123586', '12345', 2, 'N/A', 5, 5, '2019-01-20 00:00:00', 1),
('1022934650', 'c', 'w', '123590', '317398', 'a@135', '123587', '12345', 2, 'N/A', 2, 5, '2019-01-21 00:00:00', 1),
('12345', 'lorena', 'caicedo', '12345', '12345', 'lore@caicedo.com', '', '12345', 1, 'notengo', 5, 6, '2018-12-27 00:00:00', 1),
('123456', 'jaime', 'valderrama', '3172646327', '3172646358', 'tavo@gmail.com', '', '54321||', 1, 'das', 3, 1, '2018-11-23 00:00:00', 1),
('123457', 'juan', 'andrade', '3172646327', '12345', 'gustavo@gmail.com', 'juaand', '12345', 1, '', 1, 2, '2018-11-08 00:00:00', 1),
('123458', 'jorge', 'gomez perez', '3172646327', '12345', 'gustavo@gmail.com', '', '12345', 1, 'aaaa', 5, 1, '2018-12-27 00:00:00', 1),
('444444', 'gustavo', 'Hernandéz', '3172646327', '123', 'gonzalo@hotmail.com', '', '123456', 1, 'asd', 4, 1, '2018-11-24 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE IF NOT EXISTS `vehiculos` (
  `placa` varchar(45) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `usuarios_cedula` varchar(45) NOT NULL,
  `fecha_registro` date NOT NULL,
  `tipo_de_vehiculo` int(11) NOT NULL,
  PRIMARY KEY (`placa`,`usuarios_cedula`,`tipo_de_vehiculo`),
  UNIQUE KEY `placa_UNIQUE` (`placa`),
  KEY `fk_vehiculos_usuarios1` (`usuarios_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`placa`, `marca`, `color`, `modelo`, `usuarios_cedula`, `fecha_registro`, `tipo_de_vehiculo`) VALUES
('BCA123', 'Chevrolet', 'Amarillo', '2016', '123456', '2018-12-10', 2),
('CKT234', 'HYUNDAi', 'VERDE', '1998', '123458', '2018-12-19', 5),
('CYT444', 'RENAULT', 'VERDE', '2016', '1022934650', '2018-12-19', 5),
('GHT428', 'HYUNDAI', 'MORADO', '1987', '123457', '2018-12-27', 3),
('GHT989', 'HYUNDAI', 'MORADO', '1987', '12345', '2018-12-27', 3),
('GKP555', 'BMW', 'GRIS', '2018', '1022934649', '2018-12-27', 5),
('KTK232', 'RENAULT', 'NEGRO', '2016', '444444', '2018-12-25', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos_respaldo`
--

CREATE TABLE IF NOT EXISTS `vehiculos_respaldo` (
  `placa` varchar(45) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `usuarios_cedula` varchar(45) NOT NULL,
  `fecha_registro` date NOT NULL,
  `tipo_de_vehiculo` int(11) NOT NULL,
  PRIMARY KEY (`placa`,`usuarios_cedula`,`tipo_de_vehiculo`),
  UNIQUE KEY `placa_UNIQUE` (`placa`),
  KEY `fk_vehiculos_usuarios1` (`usuarios_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculos_respaldo`
--

INSERT INTO `vehiculos_respaldo` (`placa`, `marca`, `color`, `modelo`, `usuarios_cedula`, `fecha_registro`, `tipo_de_vehiculo`) VALUES
('BCA123', 'Chevrolet', 'Amarillo', '2016', '123456', '2018-12-10', 2),
('CKT234', 'HYUNDAi', 'VERDE', '1998', '444444', '2018-12-19', 5),
('CYT444', 'RENAULT', 'VERDE', '2016', '444444', '2018-12-19', 5),
('GHT428', 'HYUNDAI', 'MORADO', '1987', '444444', '2018-12-27', 3),
('GHT989', 'HYUNDAI', 'MORADO', '1987', '12345', '2018-12-27', 3),
('GKP555', 'BMW', 'GRIS', '2018', '12345', '2018-12-27', 0),
('KTK232', 'RENAULT', 'NEGRO', '2016', '444444', '2018-12-25', 3);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `authassignment`
--
ALTER TABLE `authassignment`
  ADD CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `fk_eventos_estadoeventos1` FOREIGN KEY (`idestadoeventos`) REFERENCES `estadoeventos` (`idestadoeventos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ingresos_salidas`
--
ALTER TABLE `ingresos_salidas`
  ADD CONSTRAINT `fk_ingresos_salidas_puntoparqueo1` FOREIGN KEY (`puntoparqueo_id`) REFERENCES `puntoparqueo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pqrs`
--
ALTER TABLE `pqrs`
  ADD CONSTRAINT `fk_pqrs_estadopqrs1` FOREIGN KEY (`idestadopqrs`) REFERENCES `estadopqrs` (`idestadopqrs`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `puntoparqueo`
--
ALTER TABLE `puntoparqueo`
  ADD CONSTRAINT `fk_puntoparqueo_estado_parqueo1` FOREIGN KEY (`idestado_parqueo`) REFERENCES `estado_parqueo` (`idestado_parqueo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_puntoparqueo_tipos1` FOREIGN KEY (`tipos_id`) REFERENCES `tipos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_roles1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_tipos1` FOREIGN KEY (`tipos_id`) REFERENCES `tipos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `fk_vehiculos_usuarios1` FOREIGN KEY (`usuarios_cedula`) REFERENCES `usuarios` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
