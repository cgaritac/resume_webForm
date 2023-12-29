-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2018 a las 20:47:46
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
CREATE DATABASE bdbolsadeempleo;
USE bdbolsadeempleo;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdbolsadeempleo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbempleados`
--

CREATE TABLE `tbempleados` (
  `identificacion` text NOT NULL,
  `nombre` text NOT NULL,
  `apellidos` text NOT NULL,
  `correo` text NOT NULL,
  `clave` text NOT NULL,
  `fechadenacimiento` text NOT NULL,
  `provincia` text NOT NULL,
  `canton` text NOT NULL,
  `distrito` text NOT NULL,
  `otrassenas` text NOT NULL,
  `celular` text NOT NULL,
  `telefonofijo` text NOT NULL,
  `movilidadlaboral` text NOT NULL,
  `aspiracionsalarial` text NOT NULL,
  `licenciadeconducir` text NOT NULL,
  `empresa1` text NOT NULL,
  `fechainicio1` date NOT NULL,
  `fechafinal1` date NOT NULL,
  `logro1` text NOT NULL,
  `responsabilidad1` text NOT NULL,
  `empresa2` text NOT NULL,
  `fechainicio2` date NOT NULL,
  `fechafinal2` date NOT NULL,
  `logro2` text NOT NULL,
  `responsabilidad2` text NOT NULL,
  `empresa3` text NOT NULL,
  `fechainicio3` date NOT NULL,
  `fechafinal3` date NOT NULL,
  `logro3` text NOT NULL,
  `responsabilidad3` text NOT NULL,
  `nivelacademico1` text NOT NULL,
  `titulo1` text NOT NULL,
  `institucion1` text NOT NULL,
  `anio1` int(10) NOT NULL,
  `nivelacademico2` text NOT NULL,
  `titulo2` text NOT NULL,
  `institucion2` text NOT NULL,
  `anio2` int(10) NOT NULL,
  `nivelacademico3` text NOT NULL,
  `titulo3` text NOT NULL,
  `institucion3` text NOT NULL,
  `anio3` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbempleados`
--

INSERT INTO `tbempleados` (`identificacion`, `nombre`, `apellidos`, `correo`, `clave`, `fechadenacimiento`, `provincia`, `canton`, `distrito`, `otrassenas`, `celular`, `telefonofijo`, `movilidadlaboral`, `aspiracionsalarial`, `licenciadeconducir`, `empresa1`, `fechainicio1`, `fechafinal1`, `logro1`, `responsabilidad1`, `empresa2`, `fechainicio2`, `fechafinal2`, `logro2`, `responsabilidad2`, `empresa3`, `fechainicio3`, `fechafinal3`, `logro3`, `responsabilidad3`, `nivelacademico1`, `titulo1`, `institucion1`, `anio1`, `nivelacademico2`, `titulo2`, `institucion2`, `anio2`, `nivelacademico3`, `titulo3`, `institucion3`, `anio3`) VALUES
							('1', 'Pedro', 'Vargas', 'usuario@empresa.com', '123***','1990-11-01', 'San Jose', 'San Pedro', 'Mercedes', '100 este de la UNED', '22223333', '25278989', 'SI', '300,000 a 400,000', 'SI', 'COLEGIO', '2016-11-01', '2018-11-16', 'MEJORAMIENTO DE LOS PROCESOS', 'PROCESOS ADMINISTRATIVOS', 'NA', '2017-01-01', '2018-01-01', 'NA', 'NA', 'NA', '2017-01-01', '2018-01-01', 'NA', 'NA', 'LICENCIATURA', 'ADMINISTRACION', 'UNED', '2000','NA', 'NA', 'NA', '2000','NA', 'NA', 'NA', '2000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbpuestosdeempresas`
--

CREATE TABLE `tbpuestosdeempresas` (
  `identificacion` int(10) NOT NULL,
  `empresa` text NOT NULL,
  `puestosolicitado` text NOT NULL,
  `nivelacademiconecesario` text NOT NULL,
  `titulonecesario` text NOT NULL,
  `salario` text NOT NULL,
  `contacto` text NOT NULL,
  `telefono` text NOT NULL,
  `correo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbpuestosdeempresas`
--

INSERT INTO `tbpuestosdeempresas` (`identificacion`, `empresa`, `puestosolicitado`, `nivelacademiconecesario`, `titulonecesario`, `salario`, `contacto`, `telefono`, `correo`) VALUES
(3, 'COMERRL', 'ADMINISTRACION', 'DOCTORADO', 'ADMINISTRACION', '500,000-600,000', 'Gerald Barboza', '2584-9866', 'gbarboza@comerrl.com'),
(1, 'JSMITH', 'EDUCACION', 'Bachillerato', 'EDUCACION', '500,000 a 600,000', 'Jhon Smith', '2589-6633', 'jsmith@jsmith.com'),
(2, 'HSOLIS', 'TECNOLOGIA', 'Bachillerato', 'TECNOLOGIA', '500,000 a 600,000', 'Hernan Jimenez', '2524-8596', 'hjimenez@hsolis.com'),
(4, 'FINANCIERA A', 'INFORMATICA', 'LICENCIATURA', 'INFORMATICA', '1000000 ', 'ANA VARGAS', '12122121', 'ABC@EMAIL.COM'),
(5, 'FINANCIERA B', 'EDUCACION', 'LICENCIATURA', 'LICENCIATURA', '1200000', 'LUIS PEREZ', '23233232', 'USUARIO@EMAIL.COM'),
(6, 'FINANCIERA C', 'MEDICINA', 'BACHILLER', 'BACHILLER', '500000', 'ALLAN CAMACHO', '56566969', 'ALLAN@EMPRESA.COM'),
(7, 'FINANCIERA ABC', 'EDUCACION', 'LICENCIADO', 'LICENCIATURA', '1500000', 'ANA VARGAS', '45457878', 'ANA@EMPRESA.COM'),
(8, 'FINANCIERA ABC', 'ADMINISTRACION', 'LICENCIATURA', 'LICENCIATURA', '1500000', 'ANA VARGAS', '25256767', 'ANA@EMPRESA.COM');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
