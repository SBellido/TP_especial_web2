-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2018 a las 22:30:43
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cursada`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL,
  `id_asignatura` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nota` float NOT NULL,
  `aprobado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `id_asignatura`, `nombre`, `email`, `nota`, `aprobado`) VALUES
(23, 9, 'Lucas Batch ', 'batch@hotmail.com', 9, 1),
(24, 9, 'Adrian Nader', 'nader@gmail.com', 6, 1),
(36, 10, 'Pedro Gamaleri', 'pedro@gmail.com', 5, 1),
(38, 6, 'Patricio Conte', 'conte@gmail.com', 3, 1),
(39, 10, 'Ramiro Tapia', 'tapia@gmail.com', 9, 1),
(40, 8, 'Perico Pérez', 'perico@gmail.com', 9, 1),
(42, 8, 'José Sancor', 'sancor@hormail.com', 6, 1),
(43, 8, 'Julio Boca', 'boca@gmail.com', 2, 1),
(44, 10, 'Alfredo Casio', 'casio@gmail.com', 4, 0),
(46, 13, 'Rosario Magenta', 'magenta@gmail.com', 4, 0),
(47, 13, 'Martina Khier', 'khier@hotmail.com', 3, 0),
(48, 6, 'Julian Peroti', 'peroti@yahoo.com', 10, 0),
(49, 9, 'María Cuevas', 'cuevas@hotmail.com', 8, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE `asignaturas` (
  `id_asignatura` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `descripcion` varchar(400) CHARACTER SET latin1 NOT NULL,
  `docente` varchar(50) CHARACTER SET latin1 NOT NULL,
  `terminada` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`id_asignatura`, `nombre`, `descripcion`, `docente`, `terminada`) VALUES
(6, 'Producción y Análisis de la Imagen', 'Esta materia fue pensada como una materia introductoria que, por un lado, articule los saberes construidos por los alumnos en la materia Plástica-visual del Ciclo Básico y por otro los profundice. Debemos tener presente que no todos los estudiantes han tenido plásticavisual en los años anteriores. Por lo tanto, los conocimientos correspondientes a esta campo no están garantizados a lo largo de dic', 'Paco García', 0),
(8, ' Imagen y procedimientos constructivos', 'Esta asignatura introduce al estudiante en las nuevas problemáticas vinculadas con los procedimientos de las artes visuales, entendiendo a éstos como los modos de construcción de las imágenes en la bi y tridimensión. En tanto propuesta integradora, busca superar la compartimentación de los saberes de las diferentes áreas (pintura, grabado y arte impreso, escultura, cerámica, escenografía, dibujo, ', 'Sebastian Bellido', 0),
(9, 'Web 1', 'Este curso introduce al alumno al modelo de desarrollo para Internet. Para esto, aprenderá nociones generales, tal como sitios, lenguajes, navegadores y modelos de comunicaciones. A continuación, comenzará con el diseño de páginas web utilizando un lenguaje declar  ativo, definiendo contenido y formato de datos. Cerca del final del curso, podrá incorporar los conocimientos básicos de programación ', 'Javier Romero', 0),
(10, 'Programación', 'Este curso introduce a los alumnos a los conceptos básicos de programación, principalmente aprendiendo lógica y condiciones, secuencias de ejecución y tipos de datos. Para esto, aprenderá la sintaxis de un lenguaje de programación junto con un entorno de desarrollo visual, de simple uso y que permita el desarrollo rápido de programas. ', 'Jorge Medrano', 0),
(13, 'Base de Datos', 'Esta asignatura introduce al estudiante en las nuevas problemáticas vinculadas con los procedimientos de las artes visuales, entendiendo a éstos como los modos de construcción de las imágenes en la bi y tridimensión. En tanto propuesta integradora, busca superar la compartimentación de los saberes de las diferentes áreas (pintura, grabado y arte impreso, escultura, cerámica, escenografía, dibujo. ', 'Jorge Mayo', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id_docente` int(11) NOT NULL,
  `id_asignatura` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id_docente`, `id_asignatura`, `nombre`, `usuario`, `email`, `cargo`, `pass`) VALUES
(1, 6, 'Sebastián Bellido', 'Seba', 'sebastianbellidodg@gmail.com', 'Titular', '$2y$10$CJ1Xmj4nvVsvLWcfFVbmDui1ROZEqb07Bk0z0EK22uJQsPrcZo6ZK');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `id_asignatura` (`id_asignatura`);

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`id_asignatura`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id_docente`),
  ADD KEY `id_asignatura` (`id_asignatura`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  MODIFY `id_asignatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id_docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`id_asignatura`) REFERENCES `asignaturas` (`id_asignatura`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `docentes_ibfk_1` FOREIGN KEY (`id_asignatura`) REFERENCES `asignaturas` (`id_asignatura`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
