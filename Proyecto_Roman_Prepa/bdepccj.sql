-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 20:08:24
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdepccj`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `No_de_control` int(10) NOT NULL,
  `Nombres` varchar(25) DEFAULT NULL,
  `Ap_Materno` varchar(25) DEFAULT NULL,
  `Ap_Paterno` varchar(25) DEFAULT NULL,
  `Fecha_de_nacimiento` date DEFAULT NULL,
  `Sexo` char(1) DEFAULT NULL,
  `Telefono` varchar(10) DEFAULT NULL,
  `CURP` varchar(18) DEFAULT NULL,
  `Especialidad` varchar(25) DEFAULT NULL,
  `Semestre` char(1) DEFAULT NULL,
  `Promedio` char(2) DEFAULT NULL,
  `Turno` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`No_de_control`, `Nombres`, `Ap_Materno`, `Ap_Paterno`, `Fecha_de_nacimiento`, `Sexo`, `Telefono`, `CURP`, `Especialidad`, `Semestre`, `Promedio`, `Turno`) VALUES
(2019156637, 'Rosa Consuelo', 'Balam', 'Leonardo', '2004-11-08', 'F', '3452667189', 'RCBL20041108FNCJC5', 'Laboratorista Quimico', '5', '9', 'M'),
(2020160135, 'Carlos Roberto', 'Aban', 'Puc', '2005-04-30', 'M', '6745362191', 'CRAP20050430MNCJC5', 'Mercadotecnia', '4', '6', 'V'),
(2020166752, 'Frida', 'Martin', 'Quijano', '2005-03-05', 'F', '6276678913', 'FFMQ20050305FNCJC5', 'Humanidades', '3', '8', 'V'),
(2021703678, 'Armando Orlando', 'Jimenez', 'Gutierrez', '2006-09-03', 'M', '6745566109', 'AOJG20060905MNCJC5', 'Refrigeración ', '1', '9', 'M'),
(2021785945, 'Bianca Lizette', 'Kumul', 'Basalino', '2006-12-09', 'F', '5556478145', 'BLKB20061209FNCJC5', 'Programacion', '2', '7', 'M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `Clave` int(10) NOT NULL,
  `Nombre` varchar(25) DEFAULT NULL,
  `Semestre` char(1) DEFAULT NULL,
  `DNI_Maestro` varchar(10) DEFAULT NULL,
  `Horas` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`Clave`, `Nombre`, `Semestre`, `DNI_Maestro`, `Horas`) VALUES
(1122009362, 'Geografía', '4', '9008324512', 36),
(1122234216, 'TIC\'S', '2', '8887653452', 48),
(1122637283, 'Cálculo Integral', '5', '6753625516', 36),
(1122764553, 'Astrología', '3', '8746537209', 48),
(1122897645, 'Física', '1', '5678490835', 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `RFC` varchar(14) NOT NULL,
  `Nombres` varchar(25) DEFAULT NULL,
  `Apellidos` varchar(25) DEFAULT NULL,
  `Telefono` varchar(10) DEFAULT NULL,
  `Fecha_de_nacimiento` date DEFAULT NULL,
  `Area` varchar(25) DEFAULT NULL,
  `Turno` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`RFC`, `Nombres`, `Apellidos`, `Telefono`, `Fecha_de_nacimiento`, `Area`, `Turno`) VALUES
('BARO9750106N1A', 'Karina Maria', 'Basulto Rojas', '6171244233', '1975-01-06', 'baños mujeres ', 'V'),
('CADE9781207N1A', 'Livia Zulema', 'Carmona Delgado', '5556812933', '1978-12-07', 'cancha futbol', 'V'),
('ORME9830808N1A', 'Gerardo', 'Ortiz Medina', '6722289045', '1983-08-08', 'baños hombres', 'M'),
('TEPE9750929N1A', 'Juan Alberto', 'Tejeda Perez', '2971567409', '1975-09-29', 'entrada', 'V'),
('YEYE9900702N1A', 'Dhamar Aimee', 'Yepez Yepez', '2267589902', '1990-07-02', 'salones 1 a 5', 'M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `DNI` varchar(10) NOT NULL,
  `Nombres` varchar(25) DEFAULT NULL,
  `Apellidos` varchar(25) DEFAULT NULL,
  `Telefono` varchar(10) DEFAULT NULL,
  `Domicilio` varchar(60) DEFAULT NULL,
  `Fecha_de_nacimiento` date DEFAULT NULL,
  `Sexo` char(1) DEFAULT NULL,
  `Materia` varchar(25) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Grupos` char(1) DEFAULT NULL,
  `Salon` char(2) DEFAULT NULL,
  `Turno` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`DNI`, `Nombres`, `Apellidos`, `Telefono`, `Domicilio`, `Fecha_de_nacimiento`, `Sexo`, `Materia`, `Email`, `Grupos`, `Salon`, `Turno`) VALUES
('3562782291', 'Karim Orlando', 'Marrero Jimenez', '2453667819', 'Calle Bolívar #5647 Col. San Pedro', '1994-03-01', 'M', 'Historia', 'karimorlandomj@gmail.com', '6', '3', 'V'),
('5678490835', 'Luis Angel', 'Ramirez Paez', '2117788973', 'Calle Ramurai #2346 Col. Saltos Grises', '1980-03-05', 'M', 'Fisica', 'luisangelrp@gmail.com', '4', '12', 'V'),
('6753625516', 'Guillermo Agustin', 'Pelaes Tamarillo', '9987654430', 'Calle Solobia #1829 Col. Durango', '1975-12-12', 'M', 'Cálculo Integral', 'guillermoagustinpt@gmail.com', '6', '14', 'M'),
('8746537209', 'Amalia ', 'Mendoza Perez', '6567865541', 'Calle Hidalgo #9896 Col. Colorado', '1990-08-26', 'F', 'Astrología', 'amaliamp@gmail.com', '8', '23', 'M'),
('8887653452', 'Ubaldo', 'Landa Uscanga', '7776285236', 'Calle Ocampo #556 Col. Villa hermosa', '1883-09-13', 'M', 'TIC\'S', 'ubaldolu@gmail.com', '8', '28', 'M'),
('9008324512', 'Karla Rosita', 'Lopez Libanoi', '6735426617', 'Calle Estopa #3345 Col. Kuwai', '1994-04-01', 'F', 'Geografía ', 'karlarositall@gamilc.om', '6', '34', 'V');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`No_de_control`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`Clave`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`RFC`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`DNI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
