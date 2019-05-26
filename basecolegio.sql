-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 01:14 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basecolegio`
--

-- --------------------------------------------------------

--
-- Table structure for table `anioescolar`
--

CREATE TABLE `anioescolar` (
  `codigo` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anioescolar`
--

INSERT INTO `anioescolar` (`codigo`, `descripcion`) VALUES
(1, '2018-20');

-- --------------------------------------------------------

--
-- Table structure for table `asignatura`
--

CREATE TABLE `asignatura` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cantidad` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asignatura`
--

INSERT INTO `asignatura` (`codigo`, `nombre`, `cantidad`) VALUES
(1, 'BIOLOGIA', 2),
(2, 'MATEMATICA', 2),
(3, 'FIHR', 1);

-- --------------------------------------------------------

--
-- Table structure for table `aula`
--

CREATE TABLE `aula` (
  `codigo` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aula`
--

INSERT INTO `aula` (`codigo`, `descripcion`) VALUES
(1, '1-A'),
(2, '1-B'),
(3, '2-A'),
(4, '2-B');

-- --------------------------------------------------------

--
-- Table structure for table `empleado`
--

CREATE TABLE `empleado` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `puesto` varchar(20) NOT NULL,
  `fechaInicio` date NOT NULL,
  `sueldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empleado`
--

INSERT INTO `empleado` (`codigo`, `nombre`, `apellido`, `direccion`, `cedula`, `telefono`, `puesto`, `fechaInicio`, `sueldo`) VALUES
(1, 'Francisco', 'Suarez', 'Villa', '123', '123', 'Profesor', '2018-11-06', 50000),
(2, 'Jenny', 'Cordero', 'Castillo', '152', '1234', 'Docente', '2018-11-02', 1000),
(3, 'Daniel', 'Sanchez', 'Castillo', '152', '1234', 'Docente', '2018-11-13', 1000),
(4, 'Jeury', 'Suarez', 'Castillo', '11', '22', 'Conserje', '2018-11-08', 5000),
(5, 'Wilmer', 'Morillo', 'Villa Riva', '152', '1234', 'Docente', '2018-12-15', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `estudiante`
--

CREATE TABLE `estudiante` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `correoElectronico` varchar(20) NOT NULL,
  `padre` varchar(50) NOT NULL,
  `madre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estudiante`
--

INSERT INTO `estudiante` (`codigo`, `nombre`, `apellido`, `direccion`, `telefono`, `fechaNacimiento`, `correoElectronico`, `padre`, `madre`) VALUES
(1, 'Wilmer', 'Morillo', 'Castillo', '1234', '2018-11-01', 'hola@hotmail.com', 'Jose Luis', 'Adelina'),
(2, 'Daniel', 'Sanchez', 'Castillo', '1234', '2018-11-05', 'hola@hotmail.com', 'Jose Luis', 'Adelina'),
(3, 'Jenny', 'Cordero', 'Castillo', '1234', '2018-11-02', 'hola@hotmail.com', 'Jose Luis', 'Adelina'),
(4, 'Jeury Dago', 'Suarez', 'Castillo', '22', '2018-12-20', 'hola@hotmail.com', 'Jose', 'Franita'),
(5, 'Daniel', 'Cordero', 'Castillo', '1234', '2018-11-01', 'hola@hotmail.com', 'Jose Luis', 'Adelina'),
(9, 'Francisco', 'Suarez', 'Villa', '123', '2018-12-05', 'ma@hotmail.com', 'Frana', 'Franita'),
(10, 'Rudy Nuevo', 'Sanchez', 'SFM', '123', '2018-12-03', 'hey@hotmail.com', 'Rudio', 'Rudia'),
(11, 'Carlos', 'Morillo', 'Villa Riva', '123', '2018-12-02', 'coloso@hotmail.com', 'Pascual', 'Maria'),
(12, 'JUAN CARLOS ROJAS', 'FDSGSDFSD', 'SDFDF', '43345345', '2018-12-12', 'DFGDFG', 'DFGDFG', 'DFGDF');

-- --------------------------------------------------------

--
-- Table structure for table `horarioprofesor`
--

CREATE TABLE `horarioprofesor` (
  `codigo` int(11) NOT NULL,
  `codigohorariosemestral` int(11) NOT NULL,
  `codigoasignatura` int(11) NOT NULL,
  `codigoaula` int(11) NOT NULL,
  `horaentrada` time NOT NULL,
  `horasalida` time NOT NULL,
  `dias` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `horarioprofesor`
--

INSERT INTO `horarioprofesor` (`codigo`, `codigohorariosemestral`, `codigoasignatura`, `codigoaula`, `horaentrada`, `horasalida`, `dias`) VALUES
(2, 21, 1, 1, '08:00:00', '10:00:00', 'lunes miercoles'),
(3, 21, 2, 1, '10:00:00', '12:00:00', ''),
(4, 22, 2, 2, '08:00:00', '10:00:00', 'lunes martes'),
(5, 26, 1, 1, '08:00:00', '10:00:00', ''),
(6, 26, 1, 1, '08:00:00', '10:00:00', ''),
(7, 26, 1, 1, '08:00:00', '10:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `horariosemestral`
--

CREATE TABLE `horariosemestral` (
  `codigo` int(11) NOT NULL,
  `codigoprofesor` int(11) NOT NULL,
  `anioescolar` varchar(50) NOT NULL,
  `cantidadhora` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `horariosemestral`
--

INSERT INTO `horariosemestral` (`codigo`, `codigoprofesor`, `anioescolar`, `cantidadhora`) VALUES
(1, 1, '', 0),
(2, 1, '1', 0),
(3, 1, '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nombreusuario` varchar(50) NOT NULL,
  `claveusuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`codigo`, `nombre`, `apellido`, `nombreusuario`, `claveusuario`) VALUES
(1, 'Wilmer', 'Morillo', 'wilmermorillo', '1234'),
(2, 'Daniel', 'Sanchez', 'daniel', '1235'),
(3, 'Jose', 'Cordero', 'jenny', '12'),
(4, 'Francisco', 'Suarez', 'elpancho', '123'),
(5, 'Ariel ', 'Pereyra ', 'ariel', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anioescolar`
--
ALTER TABLE `anioescolar`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `horarioprofesor`
--
ALTER TABLE `horarioprofesor`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `horariosemestral`
--
ALTER TABLE `horariosemestral`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anioescolar`
--
ALTER TABLE `anioescolar`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `aula`
--
ALTER TABLE `aula`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `empleado`
--
ALTER TABLE `empleado`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `horarioprofesor`
--
ALTER TABLE `horarioprofesor`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `horariosemestral`
--
ALTER TABLE `horariosemestral`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
