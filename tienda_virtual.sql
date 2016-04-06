-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-04-2016 a las 22:13:19
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_virtual`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `idCarrito` int(11) NOT NULL,
  `sesion` int(11) NOT NULL,
  `costo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas`
--

CREATE TABLE `lineas` (
  `idLineas` int(11) NOT NULL,
  `nombreLinea` varchar(200) NOT NULL,
  `cantidadArticulos` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lineas`
--

INSERT INTO `lineas` (`idLineas`, `nombreLinea`, `cantidadArticulos`) VALUES
(1, 'Ropa', 50),
(2, 'Computo', 100),
(3, 'Electronica', 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nombreProducto` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` float NOT NULL,
  `idLinea` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombreProducto`, `descripcion`, `precio`, `idLinea`, `imagen`) VALUES
(1, 'Playera', 'Mangas cortas, cuello v, 110% algodón.', 50, 1, ''),
(2, 'Pantalon', 'Mezclilla, color azul, acampanado.', 200, 1, ''),
(3, 'zapatos', 'Talla 24", color café, para dama.', 500, 1, ''),
(4, 'Smart tv Samsung', '40", Full HD, panel OLED.', 10000, 3, ''),
(5, 'Mini componente', 'Mini componente sony, 5000 watts, entrada USB 2.0, Bluethoot.', 6000, 3, ''),
(6, 'Calculadora cientifica CASIO', 'Modelo fx-991ES, 300 funciones, dos maneras de cargar.', 120, 3, ''),
(7, 'Laptop Alienwere', 'Procesador intel core i7 cuarta generción, 14", 16 gb RAM, memoria 1TB.', 35000, 2, ''),
(8, 'Impresora EPSON', 'Multifuncional, laser, WiFi.', 1000, 2, ''),
(9, 'Tarjeta Grafica NVIDIA', '1.1 GHz, 2GB DDR 5, 4K.', 20000, 2, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `idProducto` int(11) NOT NULL,
  `idCarrito` int(11) NOT NULL,
  `costoTotal` float NOT NULL,
  `cantidadArticulos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`idCarrito`);

--
-- Indices de la tabla `lineas`
--
ALTER TABLE `lineas`
  ADD PRIMARY KEY (`idLineas`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `idLinea` (`idLinea`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lineas`
--
ALTER TABLE `lineas`
  MODIFY `idLineas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idLinea`) REFERENCES `lineas` (`idLineas`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
