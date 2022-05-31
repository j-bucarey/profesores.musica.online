-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2022 a las 05:17:22
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_desarrollo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pais` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `pais`, `edad`) VALUES
(1, 'María', 'Colombia', 52),
(2, 'Jorge', 'Argentina', 48),
(3, 'Silvia', 'Venezuela', 25),
(4, 'Ramiro Perez', 'Uruguay', 35),
(5, 'Carlos', 'Colombia', 28),
(6, 'Cristian', 'Francia', 22),
(7, 'Roberto', 'Perú', 20),
(8, 'Mauricio', 'Venezuela', 41),
(9, 'Karina', 'México', 30),
(10, 'José', 'Chile', 19),
(11, 'Beatriz', 'Colombia', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tutor`
--

CREATE TABLE `tb_tutor` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ocupacion` varchar(350) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_tutor`
--

INSERT INTO `tb_tutor` (`codigo`, `nombre`, `ocupacion`, `descripcion`) VALUES
(3, 'Belen ', 'Profesora de musica de 30 años , egresada de Universidad de Talca', 'belen_p.rmusica@hotmail.com'),
(4, 'Vanessa Pilar', 'Músico Profesional; Soprano, Licenciada en Música, Entrenadora Vocal con perfeccionamiento en técnica vocal lírica y popular, interpretación y dirección coral, con reconocidos maestros de Chile y el extranjero.', 'vanessa_musica10@gmail.com'),
(5, 'Alejandro Bascuñan', 'Con más de treinta años dedicado a tocar batería y percusión en distintos proyectos musicales de diversos grupos etáreos, hoy abro las puertas para compartir la experiencia y ayudara a formar a los futuros bateristas y percusionistas que están en ciernes.', 'alejandro_bascuñan@gmail.com'),
(6, 'Victor Pavez', 'Soy músico con más de 15 años de experiencia en la música académica y popular. . Poseo estudios de flauta traversa en el conservatorio de la Universidad Católica de Chile (IMUC) y de piano y composición en la universidad ARCIS además de estudios informales con distintos maestras/os y en diversos cursos.', 'victor.pavez@gmail.com'),
(7, 'Pablo Niculante', 'Impartiendo clases desde el 2016 formación a alumnos de diversos niveles: niños, adolescentes, universitarios y adultos. Los alumnos siempre han demostrado un desarrollo en su creatividad, su destreza y agilidad con el piano son notables en poco tiempo, siempre dependiendo de la motivación y disciplina que el alumno se proponga a sí mismo: Salir de', 'pablo.niculante.piano@gmail.com'),
(8, 'Jorge Gonzalez', 'Cantante y productor musical, estudie 4 años en una academia de música moderna, y he sido Vocal coach en diversos lugares, como en el coro Chile Gospel, Instituto Satélite,y de forma independiente.', 'jorge.gonzalez3@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `nombreVideo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `urlVideo` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `nombreVideo`, `urlVideo`, `fecha`) VALUES
(8, 'aassa', 'https://www', '29-05-2022 11:56 pm'),
(10, '', 'https://www', '29-05-2022 11:57 pm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_tutor`
--
ALTER TABLE `tb_tutor`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tb_tutor`
--
ALTER TABLE `tb_tutor`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
