-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2022 a las 17:05:47
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_cita` int(11) NOT NULL,
  `Gerente` varchar(100) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `NombreVisita` varchar(100) NOT NULL,
  `Asunto` varchar(100) NOT NULL,
  `NumPersonas` int(11) NOT NULL,
  `Status` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id_cita`, `Gerente`, `Fecha`, `Hora`, `NombreVisita`, `Asunto`, `NumPersonas`, `Status`) VALUES
(25, 'Jaime Rivas Campell', '2022-02-25', '10:22:00', 'Armando Maciel Rivera', 'Entrevista', 1, 'Completada'),
(24, 'Jaime Rivas Campell', '2022-02-24', '10:50:00', 'Juan Perez', 'Entrevista', 1, 'Completada'),
(23, 'Elena Martinez', '2022-02-24', '11:10:00', 'Armando Maciel Rivera', 'Entrevista', 1, 'Completada'),
(26, 'Mario Rivas Barragan', '2022-02-28', '10:20:00', 'fsfgs', 'gwstgw', 1, 'Completada'),
(27, 'Elena Martinez', '2022-03-01', '11:30:00', 'Luis Perez', 'Entrevista', 1, 'Completada'),
(28, 'Jaime Rivas Campell', '2022-03-02', '10:20:00', 'Jose Lopez', 'Entrevista', 12, 'Completada'),
(29, 'Salvador Farias', '2022-03-01', '12:30:00', 'Armando Maciel Rivera', 'Entrevista', 1, 'Completada'),
(30, 'Salvador Farias', '2022-03-02', '10:20:00', 'Armando Maciel Rivera', 'Entrevista', 1, 'Completada'),
(31, 'Mario Rivas Tamez', '2022-03-03', '11:00:00', 'Juan Perez', 'Entrevista', 1, 'Completada'),
(32, 'Jaime Rivas Barragan', '2022-03-01', '10:20:00', 'Armando Maciel Rivera', 'Entrevista', 1, 'Completada'),
(33, 'Javier Gomez', '2022-03-02', '12:30:00', 'Juan Perez', 'Entrevista', 1, 'estado'),
(34, 'Jaime Rivas Barragan', '2022-03-02', '10:20:00', 'Armando Maciel Rivera', 'Entrevista', 1, 'estado'),
(35, 'Jaime Rivas Barragan', '2022-03-02', '10:40:00', 'Armando Maciel Rivera', 'Entrevista', 1, 'Completada'),
(36, 'Elena Martinez', '2022-03-01', '10:20:00', 'Armando Maciel Rivera', 'Entrevista', 1, 'Completada'),
(37, 'Jaime Rivas Barragan', '2022-03-02', '10:00:00', 'Juan Perez', 'Visita', 1, 'Completada'),
(38, 'Jaime Rivas Campell', '2022-03-02', '01:30:00', 'Luis Perez', 'Entrevista', 1, 'Completada'),
(39, 'Rosendo Zavala', '2022-03-02', '00:48:00', 'Juan Perez', 'Entrevista', 1, 'Completada'),
(40, 'Mario Rivas Tamez', '2022-03-02', '10:20:00', 'Roberto Bolaños', 'Visita', 1, 'Completada'),
(41, 'Salvador Farias', '2022-03-03', '15:53:00', 'Juan Perezzz', 'Entrevista', 1, 'Completada'),
(42, 'Rosendo Zavala', '2022-03-03', '05:09:00', 'Juan Perez', 'Entrevista', 1, 'Completada'),
(43, 'Mario Rivas Barragan', '2022-03-03', '18:10:00', 'Juan C', 'Entrevista', 1, 'Completada'),
(44, 'Elena Martinez', '2022-03-14', '20:12:00', 'Juan Perez', 'Entrevista', 1, 'Completada'),
(45, 'Elena Martinez', '2022-03-03', '10:20:00', 'Sergio Perez', 'Visita', 1, 'Completada'),
(46, 'Rosendo Zavala', '2022-03-03', '10:20:00', 'Juan Lopez Perez', 'Visita', 1, 'Pendiente'),
(47, 'Jaime Rivas Campell', '2022-03-04', '01:30:00', 'Paty Rangel', 'Visita', 1, 'Completada'),
(48, 'Yuliana Soria', '2022-03-04', '09:50:00', 'Armando Maciel Rivera', 'Entrevista', 1, 'Completada'),
(49, 'Elena Martinez', '2022-03-04', '11:20:00', 'Armando Maciel Rivera', 'Entrevista', 1, 'Pendiente'),
(50, 'Jaime Rivas Barragan', '2022-03-04', '01:30:00', 'Luis Perez', 'Visita', 1, 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gerentes`
--

CREATE TABLE `gerentes` (
  `id_Gerentes` int(11) NOT NULL,
  `NombreCompleto` varchar(100) NOT NULL,
  `Area` varchar(30) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Correo` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gerentes`
--

INSERT INTO `gerentes` (`id_Gerentes`, `NombreCompleto`, `Area`, `Status`, `Correo`) VALUES
(77, 'Javier Gómez ', 'Acopio', 'Activo', 'JavierG@globalfrut.com.mx'),
(74, 'Salvador Farias', 'Produccion', 'Activo', 'sfarias@globalfrut.com.mx'),
(73, 'Elena Martinez', 'Calidad e Inocuidad', 'Activo', 'elena@globalfrut.com.mx'),
(72, 'Rosendo Zavala', 'Contabilidad', 'Activo', 'rosendo@globalfrut.com.mx'),
(71, 'Yuliana Soria', 'RH', 'Activo', 'yulianas@globalfrut.com.mx'),
(70, 'Mario Rivas Tamez', 'Ventas (otros mercados)', 'Activo', 'mariort@globalfrut.com.mx'),
(69, 'Jaime Rivas Campell', 'Ventas USA', 'Activo', 'jaimerc@globalfrut.com.mx'),
(68, 'Mario Rivas Barragán', 'Direccion', 'Activo', 'marior@globalfrut.com.mx'),
(66, 'Jaime Rivas Barragán', 'Direccion', 'Activo', 'jaimer@globalfrut.com.mx');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`);

--
-- Indices de la tabla `gerentes`
--
ALTER TABLE `gerentes`
  ADD PRIMARY KEY (`id_Gerentes`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `gerentes`
--
ALTER TABLE `gerentes`
  MODIFY `id_Gerentes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
