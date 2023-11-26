-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2023 a las 02:45:32
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `farma`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `CAT_ID` int(11) NOT NULL,
  `CAT_DESCRIP` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`CAT_ID`, `CAT_DESCRIP`) VALUES
(1, 'Medicamentos'),
(2, 'Cuidado Personal'),
(3, 'Quirurgico'),
(4, 'Estetica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `FACT_ID` int(11) NOT NULL,
  `PER_ID` int(11) DEFAULT NULL,
  `PRODUCT_ID` int(11) DEFAULT NULL,
  `FACT_SUBTOTAL` int(11) DEFAULT NULL,
  `FACT_TOTAL` int(11) DEFAULT NULL,
  `FACT_FECHA` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `identidad`
--

CREATE TABLE `identidad` (
  `IDENT_ID` int(11) NOT NULL,
  `IDENT_DESCRIP` varchar(22) DEFAULT NULL,
  `IDENT_ALIAS` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `identidad`
--

INSERT INTO `identidad` (`IDENT_ID`, `IDENT_DESCRIP`, `IDENT_ALIAS`) VALUES
(1, 'Cédula de ciudadanía', 'CC'),
(2, 'Tarjeta de identidad', 'TI'),
(3, 'Cédula de extranjería', 'CE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes_e`
--

CREATE TABLE `mensajes_e` (
  `MENSAJE_ID` int(11) NOT NULL,
  `PER_ID` int(11) DEFAULT NULL,
  `MENSAJE_TITULO` varchar(20) DEFAULT NULL,
  `MENSAJE` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `PER_ID` int(11) NOT NULL,
  `IDENT_ID` int(11) DEFAULT NULL,
  `PER_NOMBRE` varchar(30) DEFAULT NULL,
  `PER_APELLIDO` varchar(30) DEFAULT NULL,
  `PER_NUMIDENT` varchar(10) DEFAULT NULL,
  `PER_TEL` varchar(10) DEFAULT NULL,
  `PER_CORREO` longtext DEFAULT NULL,
  `PER_CONTRA` varchar(255) DEFAULT NULL,
  `PER_FOTO` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`PER_ID`, `IDENT_ID`, `PER_NOMBRE`, `PER_APELLIDO`, `PER_NUMIDENT`, `PER_TEL`, `PER_CORREO`, `PER_CONTRA`, `PER_FOTO`) VALUES
(2, 1, 'Adrian', 'Cordoba', '1077996648', '3126627120', 'adrian24cg@gmail.com', '$2y$10$H4J.CF4wFdiI6pdkDqupMO0igSeUDhi46hMk15b3jE6viSNDPkVGK', '../imagesPerfil/Madara.jpg'),
(3, 1, 'Luisxl', 'Cuesta', '1077996647', '312778120', 'luis@gmail.com', '$2y$10$SeejPHjkokv.72gQXrCQ8Ol1aeTdp2J0ZvXlJMrYPLLRVEEyBvhHG', '../imagesPerfil/Defecto.JPG'),
(4, 1, 'AK', '23131', '107797212', '3127761623', 'AK@gmail.com', '$2y$10$BTArRpROZsgBlqIubCoR5.dGNSFAdLp3owxbSYixUAU2M7aFRw1cW', '../imagesPerfil/Defecto.JPG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `PRODUCT_ID` int(11) NOT NULL,
  `CAT_ID` int(11) DEFAULT NULL,
  `PRODUCT_NOMBRE` varchar(30) DEFAULT NULL,
  `PRODUCT_STOCK` int(11) DEFAULT NULL,
  `PRODUCT_PRECIO` int(11) DEFAULT NULL,
  `PRODUCT_FOTO` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`PRODUCT_ID`, `CAT_ID`, `PRODUCT_NOMBRE`, `PRODUCT_STOCK`, `PRODUCT_PRECIO`, `PRODUCT_FOTO`) VALUES
(1, 1, 'Acetaminofen', 10, 20000, '../ImagesProductos/Acetaminofen.png'),
(2, 1, 'Dolex', 15, 30000, '../ImagesProductos/Dolex.png'),
(3, 2, 'DUO sensative', 10, 200000, '../ImagesProductos/DUO.png'),
(4, 1, 'Tukol-D', 20, 100000, '../ImagesProductos/Tko.png'),
(5, 1, 'Vitafer', 5, 250000, '../ImagesProductos/Vita.png'),
(6, 2, 'Gillete Presto barba', 2, 3000, '../ImagesProductos/Presto.png'),
(7, 2, 'Shampoo Pantene', 5, 20000, '../ImagesProductos/Sham.png'),
(8, 3, 'Tapabocas', 30, 2000, '../ImagesProductos/Tapabocas-desechable.png'),
(9, 3, 'Bata quirurgica', 12, 50000, '../ImagesProductos/720.png'),
(10, 3, 'Bisturie desechable', 10, 30000, '../ImagesProductos/Vis.png'),
(11, 4, 'Tinte Palette Color Creme Perm', 10, 40000, '../ImagesProductos/Tinte.png'),
(12, 4, 'Pinta labios rojo', 2, 500000, '../ImagesProductos/pintalabios.png'),
(13, 4, 'Rubor', 2, 10000, '../ImagesProductos/Rubor.png'),
(14, 2, 'Cera ego', 10, 3800, '../ImagesProductos/CERA-EGO_F.png'),
(15, 2, 'Palette negro', 20, 8000, '../ImagesProductos/Palet.png'),
(16, 1, 'PostDay', 10, 15000, '../ImagesProductos/POST.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `PROV_ID` int(11) NOT NULL,
  `PER_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`PROV_ID`, `PER_ID`) VALUES
(2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relationship_7`
--

CREATE TABLE `relationship_7` (
  `PROV_ID` int(11) NOT NULL,
  `PRODUCT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`CAT_ID`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`FACT_ID`),
  ADD KEY `FK_RELATIONSHIP_3` (`PER_ID`),
  ADD KEY `FK_RELATIONSHIP_4` (`PRODUCT_ID`);

--
-- Indices de la tabla `identidad`
--
ALTER TABLE `identidad`
  ADD PRIMARY KEY (`IDENT_ID`);

--
-- Indices de la tabla `mensajes_e`
--
ALTER TABLE `mensajes_e`
  ADD PRIMARY KEY (`MENSAJE_ID`),
  ADD KEY `FK_RELATIONSHIP_5` (`PER_ID`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`PER_ID`),
  ADD KEY `FK_RELATIONSHIP_1` (`IDENT_ID`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`PRODUCT_ID`),
  ADD KEY `FK_RELATIONSHIP_2` (`CAT_ID`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`PROV_ID`),
  ADD KEY `FK_RELATIONSHIP_6` (`PER_ID`);

--
-- Indices de la tabla `relationship_7`
--
ALTER TABLE `relationship_7`
  ADD PRIMARY KEY (`PROV_ID`,`PRODUCT_ID`),
  ADD KEY `FK_RELATIONSHIP_8` (`PRODUCT_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `CAT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `FACT_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `identidad`
--
ALTER TABLE `identidad`
  MODIFY `IDENT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `mensajes_e`
--
ALTER TABLE `mensajes_e`
  MODIFY `MENSAJE_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `PER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `PRODUCT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `PROV_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `relationship_7`
--
ALTER TABLE `relationship_7`
  MODIFY `PROV_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`PER_ID`) REFERENCES `persona` (`PER_ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `producto` (`PRODUCT_ID`);

--
-- Filtros para la tabla `mensajes_e`
--
ALTER TABLE `mensajes_e`
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`PER_ID`) REFERENCES `persona` (`PER_ID`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`IDENT_ID`) REFERENCES `identidad` (`IDENT_ID`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`CAT_ID`) REFERENCES `categoria` (`CAT_ID`);

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`PER_ID`) REFERENCES `persona` (`PER_ID`);

--
-- Filtros para la tabla `relationship_7`
--
ALTER TABLE `relationship_7`
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`PROV_ID`) REFERENCES `proveedor` (`PROV_ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `producto` (`PRODUCT_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
