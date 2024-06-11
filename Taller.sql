-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2024 a las 05:09:29
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `taller`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Rut` varchar(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `ApellidoP` varchar(50) DEFAULT NULL,
  `ApellidoM` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `Comuna` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Rut`, `Nombre`, `ApellidoP`, `ApellidoM`, `Direccion`, `Telefono`, `Comuna`) VALUES
('110306571', 'Berta de lo Urdes', 'Corrales ', 'Orellana', 'Pasaje Bombero Berlarmino Meza 02054', '933550998', 'Pudahuel'),
('141773992', 'Nicolas', 'Valdenegro', 'Canales', 'ipchile 123', '123456789', 'Santiago'),
('176236418', 'Francisco Javier', 'Yañez', 'Corrales', 'Lomas del parque 089', '979827856', 'Puente Alto'),
('17907866K', 'Luis Felipe', 'Guzman', 'Suazo', 'Las perdices 02054', '979827856', 'Buin'),
('18702479K', 'Kevin Steven', 'Fuenzalida', 'Ponce', 'Narciso Ortega Parcela 15', '12345678', 'Pudahuel'),
('188656730', 'Jasna Andrea', 'Yañez', 'Corrales', 'Pasaje Bombero Berlarmino meza 02054', '12345678', 'Puente Alto'),
('207222364', 'Martin Alejandro', 'Urquejo', 'Cordova', 'Av. Central Cardenal Raul Silva Henriquez 6878', '936188043', 'Lo Espejo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compania`
--

CREATE TABLE `compania` (
  `Rut` varchar(11) NOT NULL,
  `Descripcion` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

--
-- Volcado de datos para la tabla `compania`
--

INSERT INTO `compania` (`Rut`, `Descripcion`) VALUES
('76039758K', 'COMPAÑIA DE SEGUROS GENERALES CONTINENTAL S.A.'),
('760429651', 'ORION SEGUROS GENERALES S.A.'),
('760612235', 'ZENIT SEGUROS GENERALES S.A.'),
('761732587', 'UNNIO SEGUROS GENERALES S.A.'),
('762125196', 'ASSURANT CHILE COMPAÑIA DE SEGUROS GENERALES S.A.'),
('763287939', 'METLIFE CHILE SEGUROS GENERALES S.A.'),
('76590840K', 'ZURICH SANTANDER SEGUROS GENERALES CHILE S.A.'),
('765986257', 'ASEGURADORA PORVENIR S.A.'),
('766209327', 'STARR INTERNATIONAL SEGUROS GENERALES S.A.'),
('767434928', 'REALE CHILE SEGUROS GENERALES S.A.'),
('769818758', 'CONTEMPORA COMPAÑIA DE SEGUROS GENERALES S.A.'),
('770969522', 'FID CHILE SEGUROS GENERALES S.A.'),
('775912073', 'EVEREST COMPAÑIA DE SEGUROS GENERALES CHILE S.A.'),
('945100001', 'RENTA NACIONAL COMPAÑIA DE SEGUROS GENERALES S.A.'),
('965082107', 'MAPFRE COMPAÑIA DE SEGUROS GENERALES DE CHILE S.A.'),
('966541806', 'COMPAÑIA DE SEGUROS GENERALES CONSORCIO NACIONAL DE SEGUROS S.A.'),
('968376403', 'BNP PARIBAS CARDIF SEGUROS GENERALES S.A.'),
('990170002', 'SEGUROS GENERALES SURAMERICANA S.A.'),
('990240000', 'MUTUALIDAD DE CARABINEROS'),
('990370001', 'ZURICH CHILE SEGUROS GENERALES S.A.'),
('990610002', 'LIBERTY COMPAÑIA DE SEGUROS GENERALES S.A.'),
('99147000K', 'BCI SEGUROS GENERALES S.A.'),
('992250003', 'CHUBB SEGUROS CHILE S.A.'),
('992310006', 'HDI SEGUROS S.A.'),
('992880007', 'SOUTHBRIDGE COMPAÑIA DE SEGUROS GENERALES S.A.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Rut` varchar(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Cargo` varchar(50) DEFAULT NULL,
  `ApellidoP` varchar(50) DEFAULT NULL,
  `ApellidoM` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `Comuna` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Rut`, `Nombre`, `Cargo`, `ApellidoP`, `ApellidoM`, `Direccion`, `Telefono`, `Comuna`) VALUES
('141773992', 'Nicolas Andres', 'Vendedor', 'Valdenegro', 'Canales', 'ipchile 123', '123456', 'Santiago'),
('175636410', 'Constanza Soledad', 'Vendedor', 'Duarte', 'Chavez', 'Diego de Sevilla 13337', '12345678', 'San Bernardo'),
('176236410', 'Eduardo', 'Mecanico', 'Onetto', 'Gonzalez', 'Republica 23', '123465678', 'Santiago'),
('176236418', 'Francisco Javier', 'Mecanico', 'Yañez', 'Corrales', 'Lomas del Parque 089', '979827856', 'Puente Alto'),
('17907866K', 'Luis Felipe', 'Mecanico/Desabollador', 'Guzman', 'Suazo', 'Las perdices 02054', '1234567', 'Buin'),
('18702479K', 'Kevin Steven', 'Jefe Mecanico', 'Fuenzalida', 'Ponce', 'Narciso Ortega Parcela 15', '12345678', 'Pudahuel'),
('207222364', 'Martin Alejandro', 'Analista', 'Urquejo', 'Cordova', 'Av. Central Cardenal Raul Silva Henriquez 6878', '936188043', 'Lo Espejo'),
('24350600K', 'Fernanda Anaiís', 'Vendedor', 'Yañez', 'Guajardo', 'Lomas del Parque 089', '123445678', 'Pudahuel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `garantiasrepuestos`
--

CREATE TABLE `garantiasrepuestos` (
  `GarantiaID` int(11) NOT NULL,
  `NombreRepuesto` varchar(100) DEFAULT NULL,
  `DetalleGarantia` text DEFAULT NULL,
  `Cliente` varchar(11) DEFAULT NULL,
  `FechaInicio` date DEFAULT NULL,
  `FechaFin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

--
-- Volcado de datos para la tabla `garantiasrepuestos`
--

INSERT INTO `garantiasrepuestos` (`GarantiaID`, `NombreRepuesto`, `DetalleGarantia`, `Cliente`, `FechaInicio`, `FechaFin`) VALUES
(1, 'Frenos', 'No funciona pastilla Derecha', '176236418', '2023-11-25', '2024-11-25'),
(3, 'Frenos', 'No funciona', '176236418', '2023-11-25', '2024-11-25'),
(11, 'Palanca de Cambio', 'Errro de palanca', '176236418', '2023-11-25', '2023-11-30'),
(12, 'Palanca de Cambio', 'Errro de palanca', '176236418', '2023-11-25', '2023-11-30'),
(13, 'Palanca de Cambio', 'Errro de palanca', '176236418', '2023-11-25', '2023-11-30'),
(14, 'Desabolladura en frio parachoque', 'Cubre raspones', '17907866K', '2023-11-25', '2023-12-02'),
(15, 'Pulido Puerta Lateral derecha Piloto', 'Pulido de puerta', '17907866K', '2023-11-20', '2023-11-27'),
(16, 'Frenos ABS', 'Frenos ABS', '17907866K', '2023-11-25', '2023-11-26'),
(17, 'Pintado Puerta', 'Pintado Puerta', '188656730', '2023-11-24', '2023-11-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuestos`
--

CREATE TABLE `repuestos` (
  `RepuestoID` int(11) NOT NULL,
  `NombreRepuesto` varchar(100) DEFAULT NULL,
  `CantidadStock` int(11) DEFAULT NULL,
  `PrecioUnitario` decimal(10,2) DEFAULT NULL,
  `Proveedor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

--
-- Volcado de datos para la tabla `repuestos`
--

INSERT INTO `repuestos` (`RepuestoID`, `NombreRepuesto`, `CantidadStock`, `PrecioUnitario`, `Proveedor`) VALUES
(2, 'frenos', 1, 45000.00, 'Brembo'),
(5, 'Neblinero Derecho Mahindra', 2, 45000.00, 'Mahindra'),
(12, 'Manilla de repuesto RC200', 15, 15000.00, 'KTM'),
(13, 'Espejo Derecho Susuki Scross ', 5, 35000.00, 'Susuki'),
(14, 'Volante Susuki Scross', 3, 90000.00, 'SUSUKI'),
(16, 'Foco Hyundai Accent', 3, 56000.00, 'Hyundai'),
(17, 'Llantas Accent 2011', 4, 599000.00, 'Hyundai Chile'),
(18, 'Rueda Jeep', 4, 150000.00, 'Good Year'),
(19, 'Batería para automóvil', 20, 50000.00, 'EnergíaPlus'),
(20, 'Filtro de aceite', 100, 15000.00, 'FiltrosXpress'),
(21, 'Pastillas de freno delanteras', 50, 35000.00, 'FrenosPro'),
(22, 'Lámpara halógena H4', 80, 5000.00, 'IluminaciónTotal'),
(23, 'Aceite de motor 5W-30', 30, 25000.00, 'LubricantesEstrella'),
(24, 'Kit de distribución', 15, 80000.00, 'RepuestosRápidos'),
(25, 'Amortiguadores traseros', 25, 60000.00, 'SuspensionesTop'),
(26, 'Filtro de aire', 70, 12000.00, 'AireLimpio'),
(27, 'Bujías de encendido', 40, 8000.00, 'ChispaPerfecta'),
(28, 'Líquido refrigerante', 60, 10000.00, 'RefrigerantesEco'),
(29, 'Juego de cables de bujías', 20, 25000.00, 'EncendidoTotal'),
(30, 'Espejo retrovisor derecho', 10, 35000.00, 'RetrovisoresPlus'),
(31, 'Juego de tapacubos', 30, 15000.00, 'EstiloRuedas'),
(32, 'Limpiaparabrisas', 50, 8000.00, 'VisiónClara'),
(33, 'Motor de arranque', 10, 70000.00, 'ArranquesPro'),
(34, 'Alternador', 15, 90000.00, 'GeneradoresPower'),
(35, 'Bomba de agua', 12, 30000.00, 'AquaBombas'),
(36, 'Filtro de combustible', 40, 10000.00, 'CombustiblePuro'),
(37, 'Termostato', 18, 12000.00, 'ControlTérmico'),
(38, 'Radiador', 8, 55000.00, 'RadiadoresTop'),
(39, 'Bomba de freno', 20, 25000.00, 'FrenadasSeguras'),
(40, 'Sensor de oxígeno', 25, 18000.00, 'SensoresEco'),
(41, 'Catalizador', 8, 120000.00, 'CatalizadoresVerdes'),
(42, 'Escape trasero', 15, 40000.00, 'SilenciadoresPro'),
(43, 'Sensor ABS', 12, 35000.00, 'SistemasSeguros'),
(44, 'Kit de embrague', 10, 90000.00, 'EmbraguesTotal'),
(45, 'Correa de transmisión', 25, 15000.00, 'TransmisionesFuertes'),
(46, 'Bombilla H7', 60, 3000.00, 'IluminaciónTotal'),
(47, 'Rótula de dirección', 18, 18000.00, 'DirecciónPerfecta'),
(48, 'Cojinete de rueda', 22, 10000.00, 'RodamientosTotal'),
(49, 'Bomba de aceite', 14, 35000.00, 'AceiteFluido'),
(50, 'Cilindro maestro de freno', 10, 55000.00, 'FrenosPro'),
(51, 'Turbocompresor', 5, 120000.00, 'TurboPower'),
(52, 'Junta de culata', 12, 25000.00, 'JuntasFirmes'),
(53, 'Kit de buje de suspensión', 20, 15000.00, 'SuspensionesTop'),
(54, 'Tensor de la correa', 15, 8000.00, 'TensoresPerfectos'),
(55, 'Líquido de frenos DOT 4', 30, 10000.00, 'FrenosPro'),
(56, 'Filtro de habitáculo', 40, 12000.00, 'AireLimpio'),
(57, 'Sensor de presión de neumáticos', 18, 18000.00, 'SeguridadNeumáticos'),
(58, 'Juego de mangueras de freno', 25, 8000.00, 'FrenosPro'),
(59, 'Bomba de combustible', 10, 40000.00, 'CombustiblePuro'),
(60, 'Juego de escobillas de limpiaparabrisas', 35, 6000.00, 'VisiónClara'),
(61, 'Bobina de encendido', 22, 18000.00, 'ChispaPerfecta'),
(62, 'Filtro de dirección asistida', 15, 10000.00, 'DirecciónPerfecta'),
(63, 'Kit de reparación de pinchazos', 40, 5000.00, 'NeumáticosSOS'),
(64, 'Bujes de la barra estabilizadora', 20, 12000.00, 'EstabilidadTotal'),
(65, 'Filtro de gasolina', 30, 8000.00, 'CombustiblePuro'),
(66, 'Cable de freno de estacionamiento', 18, 15000.00, 'FrenosPro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuestossolicitud`
--

CREATE TABLE `repuestossolicitud` (
  `SolicitudID` int(11) DEFAULT NULL,
  `RepuestoID` int(11) DEFAULT NULL,
  `CantidadUtilizada` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `siniestro`
--

CREATE TABLE `siniestro` (
  `SiniestroID` int(11) NOT NULL,
  `Detalle` varchar(300) DEFAULT NULL,
  `Estado_Siniestro` varchar(50) DEFAULT NULL,
  `Fecha_Siniestro` date DEFAULT NULL,
  `RutCompania` varchar(11) DEFAULT NULL,
  `Rut` varchar(11) DEFAULT NULL,
  `Estado_Seguro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

--
-- Volcado de datos para la tabla `siniestro`
--

INSERT INTO `siniestro` (`SiniestroID`, `Detalle`, `Estado_Siniestro`, `Fecha_Siniestro`, `RutCompania`, `Rut`, `Estado_Seguro`) VALUES
(2, 'choque por alcance ', 'Activo', '2023-10-31', '762125196', '17907866K', 'Seguro Vigente'),
(3, 'Choque lateral', 'Pendiente', '2023-11-01', '765986257', '176236418', 'Seguro Vigente'),
(4, 'Robo Vehiculo 1', 'Finalizado', '2023-11-01', '762125196', '141773992', 'Seguro Vigente'),
(5, 'Vidrio Roto', 'Activo', '2023-10-11', '99147000K', '18702479K', 'Seguro Vigente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudesservicio`
--

CREATE TABLE `solicitudesservicio` (
  `SolicitudID` int(11) NOT NULL,
  `Rut` varchar(11) DEFAULT NULL,
  `FechaSolicitud` date DEFAULT NULL,
  `DescripcionProblema` text DEFAULT NULL,
  `Estado` varchar(20) DEFAULT NULL,
  `Siniestroid` int(11) DEFAULT NULL,
  `RutEmpleado` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

--
-- Volcado de datos para la tabla `solicitudesservicio`
--

INSERT INTO `solicitudesservicio` (`SolicitudID`, `Rut`, `FechaSolicitud`, `DescripcionProblema`, `Estado`, `Siniestroid`, `RutEmpleado`) VALUES
(1, '176236418', '2023-11-09', 'choque', 'Completado', NULL, NULL),
(2, '18702479K', '2023-11-09', 'vidrio roto', 'Completado', NULL, NULL),
(3, '176236418', '2023-11-13', 'Choque mega', 'Pendiente', -176236415, '18702479K');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Rut` varchar(11) NOT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Contraseña` varchar(15) DEFAULT NULL,
  `Tipo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Rut`, `Correo`, `Contraseña`, `Tipo`) VALUES
('141773992', 'nicolas@gmail.com', '123456', 'Vendedor'),
('176236418', 'francisco@gmail.com', '123456', 'Administrador'),
('17907866K', 'luis@gmail.com', '123456', 'Mecanico'),
('18702479K', 'kevin@gmail.com', '123456', 'Aseguradora'),
('207222364', 'martin@gmail.com', '123456', 'Analista'),
('24350600K', 'fernanda@gmail.com', '123456', 'Gerente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `Patente` varchar(11) NOT NULL,
  `Rut` varchar(11) DEFAULT NULL,
  `Marca` varchar(50) DEFAULT NULL,
  `Modelo` varchar(50) DEFAULT NULL,
  `Anio` int(11) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`Patente`, `Rut`, `Marca`, `Modelo`, `Anio`, `color`) VALUES
('DHLW82', '176236418', 'HYUNDAI ', 'ACCENT RB', 2011, 'GRIS PLATA'),
('LCLW48', '18702479K', 'BAIC', 'X25', 2020, 'NARANJO'),
('LXCJ15', '17907866K', 'CHEVROLET', 'ONIX HB TURBO', 2019, 'BLANCO'),
('MAUR69', '207222364', 'CHERY', 'IQ', 2013, 'AZUL ELECTRICO'),
('WWFX12', '141773992', 'SUBARU', 'IMPRESA', 2023, 'GRIS PLATA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventasrepuestos`
--

CREATE TABLE `ventasrepuestos` (
  `VentaID` int(11) NOT NULL,
  `NombreRepuesto` varchar(100) DEFAULT NULL,
  `CantidadVendida` int(11) DEFAULT NULL,
  `Cliente` varchar(11) DEFAULT NULL,
  `FechaVenta` date DEFAULT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

--
-- Volcado de datos para la tabla `ventasrepuestos`
--

INSERT INTO `ventasrepuestos` (`VentaID`, `NombreRepuesto`, `CantidadVendida`, `Cliente`, `FechaVenta`, `Total`) VALUES
(1, 'Frenos', 1, '176236418', '2023-11-23', 45000),
(2, 'Frenos 2', 2, '17907866K', '2023-11-23', 90000),
(3, 'Neblinero Derecho Mahindra', 1, '176236418', '2023-11-23', 45000),
(4, 'Bobina de encendido', 3, '17907866K', '2023-11-24', 54000),
(5, 'frenos', 1, '141773992', '2023-11-25', 45000),
(6, 'Bobina de encendido', 2, '17907866K', '2023-11-25', 36000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Rut`);

--
-- Indices de la tabla `compania`
--
ALTER TABLE `compania`
  ADD PRIMARY KEY (`Rut`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Rut`);

--
-- Indices de la tabla `garantiasrepuestos`
--
ALTER TABLE `garantiasrepuestos`
  ADD PRIMARY KEY (`GarantiaID`),
  ADD KEY `Cliente` (`Cliente`);

--
-- Indices de la tabla `repuestos`
--
ALTER TABLE `repuestos`
  ADD PRIMARY KEY (`RepuestoID`);

--
-- Indices de la tabla `repuestossolicitud`
--
ALTER TABLE `repuestossolicitud`
  ADD KEY `SolicitudID` (`SolicitudID`),
  ADD KEY `RepuestoID` (`RepuestoID`);

--
-- Indices de la tabla `siniestro`
--
ALTER TABLE `siniestro`
  ADD PRIMARY KEY (`SiniestroID`),
  ADD KEY `Rut` (`Rut`),
  ADD KEY `RutCompania` (`RutCompania`);

--
-- Indices de la tabla `solicitudesservicio`
--
ALTER TABLE `solicitudesservicio`
  ADD PRIMARY KEY (`SolicitudID`),
  ADD KEY `Rut` (`Rut`),
  ADD KEY `RutEmpleado` (`RutEmpleado`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Rut`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`Patente`),
  ADD KEY `Rut` (`Rut`);

--
-- Indices de la tabla `ventasrepuestos`
--
ALTER TABLE `ventasrepuestos`
  ADD PRIMARY KEY (`VentaID`),
  ADD KEY `Cliente` (`Cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `garantiasrepuestos`
--
ALTER TABLE `garantiasrepuestos`
  MODIFY `GarantiaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `repuestos`
--
ALTER TABLE `repuestos`
  MODIFY `RepuestoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `siniestro`
--
ALTER TABLE `siniestro`
  MODIFY `SiniestroID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `solicitudesservicio`
--
ALTER TABLE `solicitudesservicio`
  MODIFY `SolicitudID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventasrepuestos`
--
ALTER TABLE `ventasrepuestos`
  MODIFY `VentaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `garantiasrepuestos`
--
ALTER TABLE `garantiasrepuestos`
  ADD CONSTRAINT `garantiasrepuestos_ibfk_1` FOREIGN KEY (`Cliente`) REFERENCES `clientes` (`Rut`);

--
-- Filtros para la tabla `repuestossolicitud`
--
ALTER TABLE `repuestossolicitud`
  ADD CONSTRAINT `repuestossolicitud_ibfk_1` FOREIGN KEY (`SolicitudID`) REFERENCES `solicitudesservicio` (`SolicitudID`),
  ADD CONSTRAINT `repuestossolicitud_ibfk_2` FOREIGN KEY (`RepuestoID`) REFERENCES `repuestos` (`RepuestoID`);

--
-- Filtros para la tabla `siniestro`
--
ALTER TABLE `siniestro`
  ADD CONSTRAINT `siniestro_ibfk_1` FOREIGN KEY (`Rut`) REFERENCES `clientes` (`Rut`),
  ADD CONSTRAINT `siniestro_ibfk_2` FOREIGN KEY (`RutCompania`) REFERENCES `compania` (`Rut`);

--
-- Filtros para la tabla `solicitudesservicio`
--
ALTER TABLE `solicitudesservicio`
  ADD CONSTRAINT `solicitudesservicio_ibfk_1` FOREIGN KEY (`Rut`) REFERENCES `clientes` (`Rut`),
  ADD CONSTRAINT `solicitudesservicio_ibfk_2` FOREIGN KEY (`RutEmpleado`) REFERENCES `empleados` (`Rut`);

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`Rut`) REFERENCES `clientes` (`Rut`);

--
-- Filtros para la tabla `ventasrepuestos`
--
ALTER TABLE `ventasrepuestos`
  ADD CONSTRAINT `ventasrepuestos_ibfk_1` FOREIGN KEY (`Cliente`) REFERENCES `clientes` (`Rut`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
