-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-12-2017 a las 22:29:07
-- Versión del servidor: 10.1.25-MariaDB-1
-- Versión de PHP: 7.1.11-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Contador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Contador`
--

CREATE TABLE `Contador` (
  `idContador` int(11) NOT NULL,
  `Contadorcol` varchar(45) DEFAULT NULL,
  `ap_paterno_cont` varchar(45) DEFAULT NULL,
  `ap_materno_cont` varchar(45) DEFAULT NULL,
  `fecha_de_nacimiento` date DEFAULT NULL,
  `telefono_cont` int(11) DEFAULT NULL,
  `estado_cont` varchar(15) DEFAULT NULL,
  `Municipio` varchar(15) DEFAULT NULL,
  `colonia_emp` varchar(15) DEFAULT NULL,
  `calle_emp` varchar(12) DEFAULT NULL,
  `cp_cont` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Contador`
--

INSERT INTO `Contador` (`idContador`, `Contadorcol`, `ap_paterno_cont`, `ap_materno_cont`, `fecha_de_nacimiento`, `telefono_cont`, `estado_cont`, `Municipio`, `colonia_emp`, `calle_emp`, `cp_cont`) VALUES
(151596, 'manuel ', 'sanchez', 'ruiz', '2017-12-12', 7932018, 'guerrero', 'pungarabato', 'esquipula', '5 de febrero', 15151515),
(445545, 'asdsd', 'asdasd', 'asdasd', '0000-00-00', 4566987, 'asdasd', 'asdasd', 'asdasd', 'asdasd', 123654),
(1515151, 'jjfjfjj', 'jfjfjfjjf', 'jfjfjfj', '2017-12-12', 7895446, 'ijijiji', 'ijijii', 'jijiji', 'jijijijij', 14563),
(1515196, 'manuel ', 'sanchez', 'ruiz', '2017-12-12', 7932018, 'guerrero', 'pungarabato', 'esquipula', '5 de febrero', 15151515);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Contador`
--
ALTER TABLE `Contador`
  ADD PRIMARY KEY (`idContador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Contador`
--
ALTER TABLE `Contador`
  MODIFY `idContador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1515197;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
