-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2018 a las 03:46:27
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `weeb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `Id` int(10) NOT NULL,
  `namecat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`Id`, `namecat`) VALUES
(1, 'Plasticas'),
(2, 'Visuales'),
(3, 'Aplicadas'),
(4, 'Liberales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery`
--

CREATE TABLE `gallery` (
  `Id_img` int(20) NOT NULL,
  `Id_user` int(20) NOT NULL,
  `Id` int(20) NOT NULL,
  `uniqueurl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gallery`
--

INSERT INTO `gallery` (`Id_img`, `Id_user`, `Id`, `uniqueurl`) VALUES
(12, 2, 2, '../galeria/35 a 37.png'),
(13, 2, 2, '../galeria/autocad-2019-badge-2048ppx.jpg'),
(14, 2, 2, '../galeria/9.jpg'),
(15, 2, 2, '../galeria/13.jpg'),
(16, 2, 2, '../galeria/3d ojo.jpg'),
(17, 2, 2, '../galeria/31 a 33.png'),
(18, 2, 2, '../galeria/autocad-2019-badge-2048ppx.jpg'),
(19, 2, 2, '../galeria/bruja.jpg'),
(20, 1, 1, '../galeria/35 a 37.png'),
(21, 1, 1, '../galeria/330px-VES_Awards_89_cropped.jpg'),
(22, 1, 1, '../galeria/bruja.jpg'),
(23, 1, 1, '../galeria/3d ojo.jpg'),
(24, 1, 1, '../build/images/Users/galeria/das.jpg'),
(25, 1, 1, '../build/images/Users/galeria/123.jpg'),
(26, 1, 1, '../build/images/Users/galeria/wu.png'),
(27, 1, 1, '../build/images/Users/galeria/wu2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `nickname` varchar(200) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `deviantart` varchar(100) NOT NULL,
  `tumblr` varchar(100) NOT NULL,
  `twitch` varchar(100) NOT NULL,
  `patreon` varchar(100) NOT NULL,
  `kofi` varchar(100) NOT NULL,
  `paypal` varchar(100) NOT NULL,
  `usertype` tinyint(1) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `fullname`, `description`, `foto`, `nickname`, `birthday`, `facebook`, `twitter`, `instagram`, `deviantart`, `tumblr`, `twitch`, `patreon`, `kofi`, `paypal`, `usertype`, `activo`) VALUES
(1, 'Jose', 'joseaviles@gmail.com', 'elmo2040', 'Jose Cruz', 'Soy un estudiante de ingenieria que se tiene que dormir a las 4 de la maÃ±ana porque su compaÃ±ero no pudo copiar y pedar y cambiar unas cosultas', '../build/images/Users/Images_users/perro.jpg', 'PqHunter', '2018/11/28', 'Jose Cruz', 'Josee21', '', 'Joseee', 'Josexddxd', '', '', '', '', 0, 0),
(2, 'qwe', 'jose@gmail.com', 'elmo2040', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 0),
(3, 'VyrusCKrysis', 'nexusinfinitus@gmail.com', '123', 'Elias Rodriguez', 'Hola a todos, soy un estudiante de ingenieria en software que esta realizando un proyecto final para presentar en una exposicion de proyectos. Deseenme suerte c:', '../build/images/Users/Images_users/123.jpg', 'VyrusCKrysis', '1997/07/16', 'VyrusCKrysis', 'VyrusC.Krysis', '', 'VyrusCKrysis', 'VyrusCKrysis', '', 'VyrusCKrysis', '', '', 0, 0),
(4, 'RottenPanda', 'panda@gmail.com', '123', 'Manuel Ivan', 'Hola soy un estudiante de ingenieria que desearia poder comer pizaa todos los dias y es una crack en el diseÃ±o de pagina web -', '../build/images/Users/Images_users/das.jpg', 'PandaPool', '1997/08/21', 'Manuel Ivan Mukul Gil', 'PandaX', '', 'RottenPanda', 'Panda', '', 'RottenPanda', '', '', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`Id_img`),
  ADD KEY `id_user` (`Id_user`),
  ADD KEY `id` (`Id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `gallery`
--
ALTER TABLE `gallery`
  MODIFY `Id_img` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`Id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `gallery_ibfk_2` FOREIGN KEY (`Id`) REFERENCES `categories` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
