--
-- Estructura de tabla para la tabla `lista_radios`
--
CREATE TABLE `lista_radios` (
  `id` int(3) unsigned NOT NULL default '0',
  `opcion` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22;

--
-- Volcado de datos para la tabla `lista_radios`
--
INSERT INTO `lista_radios` (`id`, `opcion`) VALUES (0, 'Elige'),
(1, 'SBS'),
(2, 'OPERADORES'),
(3, 'MOVIL'),
(4, 'PORTATIL'),
(5, 'BASE');


--
-- Estructura de tabla para la tabla `lista_lugares`
--
CREATE TABLE `lista_lugares` (
  `id` int(5) unsigned NOT NULL auto_increment,
  `opcion` varchar(100) NOT NULL,
  `relacion` int(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `codigo_pais` (`relacion`)
) ENGINE=MyISAM AUTO_INCREMENT=490;


--
-- Volcado de datos para la tabla `lista_lugares`
--
INSERT INTO `lista_lugares` (`id`, `opcion`, `relacion`) VALUES (1, 'CERI', 1),
(2, 'CAPULO', 1),
(3, 'TIRADERO', 1),
(4, 'AUNTAMIENTO', 1),
(5, 'NO APLICA', 2),
(6, 'NO APLICA', 3),
(7, 'NO APLICA', 4),
(8, 'NO APLICA', 5);

--
-- Estructura de tabla para la tabla `servicio`
--
CREATE TABLE `servicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `apellido` varchar(80) NOT NULL,
  `reparacion` varchar(50) NOT NULL,
  `prioridad` varchar(50) NOT NULL,
  `tiporadio` varchar(50) NOT NULL,
  `lugar` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `descripcion` varchar(350) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;