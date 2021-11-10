-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-11-2021 a las 16:17:20
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `todomoda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `id_administrador` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `pass` varchar(150) NOT NULL,
  PRIMARY KEY (`id_administrador`),
  KEY `correo_electronico` (`correo_electronico`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `nombre`, `apellido`, `correo_electronico`, `pass`) VALUES
(2, 'Milca', 'Oropeza', 'milca@outlook.com', '12345'),
(3, 'Muñeco', 'm', 'milca10@outlook.com', 'm'),
(6, 'Milca ', 'Oropeza', 'correox@gmail.com', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79'),
(7, 'Mi cuenta ', '1', 'micuenta@outlookc.com', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79'),
(8, 'Mi cuenta ', '2', 'micuenta1@outlook.com', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `detalles` varchar(200) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`, `detalles`) VALUES
(1, 'categora', '123456'),
(2, 'categoria2', 'nuevos detalles'),
(3, 'categoria2', 'nuevos detalles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `colonia` varchar(30) NOT NULL,
  `calle` varchar(30) NOT NULL,
  `numero` varchar(30) NOT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `pass` varchar(150) NOT NULL,
  PRIMARY KEY (`id_cliente`),
  KEY `correo_electronico` (`correo_electronico`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `colonia`, `calle`, `numero`, `telefono`, `correo_electronico`, `pass`) VALUES
(4, 'julio', 'oropeza', 'milc', 'colocia1|', '2330', '', 'customer1@gmail.com', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

DROP TABLE IF EXISTS `compra`;
CREATE TABLE IF NOT EXISTS `compra` (
  `folio` int NOT NULL,
  `id_cliente` int NOT NULL,
  `monto` varchar(30) NOT NULL,
  `fecha_compra` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`folio`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_compra`
--

DROP TABLE IF EXISTS `detalle_compra`;
CREATE TABLE IF NOT EXISTS `detalle_compra` (
  `id` int NOT NULL AUTO_INCREMENT,
  `folio` int NOT NULL,
  `id_prenda` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `folio` (`folio`),
  KEY `id_prenda` (`id_prenda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prenda`
--

DROP TABLE IF EXISTS `prenda`;
CREATE TABLE IF NOT EXISTS `prenda` (
  `id_prenda` int NOT NULL AUTO_INCREMENT,
  `talla` varchar(20) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio_unitario` float NOT NULL,
  `id_categoria` int NOT NULL,
  PRIMARY KEY (`id_prenda`),
  KEY `id_categoria` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `prenda`
--

INSERT INTO `prenda` (`id_prenda`, `talla`, `marca`, `color`, `nombre`, `precio_unitario`, `id_categoria`) VALUES
(1, 'chica', 'marca', 'azul', 'nombre', 5, 1),
(7, 'mediana', 'shein', 'azul', 'bufanda', 10, 1),
(8, 'mediana', 'shein', 'morado', 'camisa', 10, 1),
(9, 'mediana', 'shein', 'morado', 'camisa', 10, 1),
(10, 'chica', 'shein', 'azul', 'prenda 5', 100, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `numero` int NOT NULL AUTO_INCREMENT,
  `id_prenda` int NOT NULL,
  `cantidad_stock` int DEFAULT NULL,
  PRIMARY KEY (`numero`),
  KEY `id_prenda` (`id_prenda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

DROP TABLE IF EXISTS `tarjeta`;
CREATE TABLE IF NOT EXISTS `tarjeta` (
  `numero_tarjeta` varchar(18) NOT NULL,
  `id_cliente` int NOT NULL,
  `cvv` int NOT NULL,
  `fecha_vencimiento` varchar(10) NOT NULL,
  PRIMARY KEY (`numero_tarjeta`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `correo_electronico` varchar(50) NOT NULL,
  `pass` varchar(150) NOT NULL,
  PRIMARY KEY (`correo_electronico`),
  UNIQUE KEY `correo_electronico` (`correo_electronico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`correo_electronico`, `pass`) VALUES
('correox@gmail.com', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79'),
('customer1@gmail.com', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79'),
('micuenta1@outlook.com', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79'),
('micuenta@outlookc.com', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79'),
('milca10@outlook.com', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79'),
('milca@outlook.com', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`correo_electronico`) REFERENCES `usuario` (`correo_electronico`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`correo_electronico`) REFERENCES `usuario` (`correo_electronico`);

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `detalle_compra`
--
ALTER TABLE `detalle_compra`
  ADD CONSTRAINT `detalle_compra_ibfk_1` FOREIGN KEY (`folio`) REFERENCES `compra` (`folio`),
  ADD CONSTRAINT `detalle_compra_ibfk_2` FOREIGN KEY (`id_prenda`) REFERENCES `prenda` (`id_prenda`);

--
-- Filtros para la tabla `prenda`
--
ALTER TABLE `prenda`
  ADD CONSTRAINT `prenda_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`id_prenda`) REFERENCES `prenda` (`id_prenda`);

--
-- Filtros para la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD CONSTRAINT `tarjeta_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
