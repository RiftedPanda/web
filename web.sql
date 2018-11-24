-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2018 a las 06:32:09
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
-- Base de datos: `web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `Id_category` int(11) NOT NULL,
  `namecat` varchar(30) NOT NULL,
  `filter` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`Id_category`, `namecat`, `filter`) VALUES
(1, 'Plasticas', 'xd'),
(2, 'Visuales', 'vis'),
(3, 'Aplicada', 'apli'),
(4, 'liberales', 'lib');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `content`
--

CREATE TABLE `content` (
  `Id_post` int(11) NOT NULL,
  `Id_user` int(11) NOT NULL,
  `Tag` varchar(30) NOT NULL,
  `uniqueurl` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Label` varchar(30) NOT NULL,
  `textcontent` varchar(30) NOT NULL,
  `referencepost` varchar(30) NOT NULL,
  `Id_category` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallery`
--

CREATE TABLE `gallery` (
  `Id_img` int(11) NOT NULL,
  `Id_user` int(11) NOT NULL,
  `Id_category` int(11) NOT NULL,
  `uniqueurl` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gallery`
--

INSERT INTO `gallery` (`Id_img`, `Id_user`, `Id_category`, `uniqueurl`, `status`) VALUES
(1, 1, 1, 'das.jpg', 'Terminado'),
(2, 1, 1, 'xd.jpg', 'En proceso'),
(3, 2, 3, 'saaaa.jpg', 'En proceso'),
(4, 2, 3, 'xd2.jpg', 'En proceso'),
(5, 1, 2, '1.jpg', 'Terminado'),
(6, 1, 2, '2.jpg', 'Terminado'),
(7, 1, 4, '3.jpg', 'Terminado'),
(8, 1, 4, '4.jpg', 'Terminado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `secret_ans` varchar(30) NOT NULL DEFAULT 'n/a',
  `nickname` varchar(30) NOT NULL DEFAULT 'n/a',
  `foto` varchar(200) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `Facebook` varchar(30) NOT NULL DEFAULT 'n/a',
  `Instagram` varchar(30) NOT NULL DEFAULT 'n/a',
  `Deviantart` varchar(30) NOT NULL DEFAULT 'n/a',
  `Twitter` varchar(30) NOT NULL DEFAULT 'n/a',
  `Twitch` varchar(30) DEFAULT 'n/a',
  `birthday` varchar(30) NOT NULL DEFAULT '0',
  `Patreon` varchar(30) NOT NULL DEFAULT 'n/a',
  `kofi` varchar(30) NOT NULL DEFAULT 'n/a',
  `Paypal` varchar(30) NOT NULL DEFAULT 'n/a',
  `Description` varchar(30) NOT NULL DEFAULT 'n/a',
  `interest_cat` varchar(30) NOT NULL DEFAULT 'n/a',
  `labels` varchar(30) NOT NULL DEFAULT 'n/a',
  `usertype` tinyint(10) NOT NULL DEFAULT '0',
  `Id_category` int(11) NOT NULL DEFAULT '0',
  `weburl` varchar(30) NOT NULL DEFAULT 'n/a',
  `gallery` varchar(30) NOT NULL DEFAULT 'n/a',
  `ID_gallery` int(11) NOT NULL DEFAULT '0',
  `socialmedia` varchar(30) NOT NULL DEFAULT 'n/a',
  `followers` varchar(30) NOT NULL DEFAULT '0',
  `following` varchar(30) NOT NULL DEFAULT '0',
  `ID_task` int(11) NOT NULL DEFAULT '0',
  `activo` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `secret_ans`, `nickname`, `foto`, `fullname`, `Facebook`, `Instagram`, `Deviantart`, `Twitter`, `Twitch`, `birthday`, `Patreon`, `kofi`, `Paypal`, `Description`, `interest_cat`, `labels`, `usertype`, `Id_category`, `weburl`, `gallery`, `ID_gallery`, `socialmedia`, `followers`, `following`, `ID_task`, `activo`) VALUES
(0, 'Joseee', 'elmo2040', 'dfsfd@gmail.com', '', '', '../fotos/das.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, 2, '', '', 1, '', '', '', 1, 0),
(1, '', 'elmo2050', 'dsfsd@gmail.com', 'asda', 'Pocoyo', '../fotos/3d ojo.jpg', 'Josï¿½ Cruz', '', 'd', 'x', 'd', 'x', '2018/11/06', 'xd', 'xd', 'xd', 'xd', 'xd', 'xd', 0, 2, 'zczxc', 'fdsd', 1, 'asd', 'fds', 'sdfsd', 1, 0),
(2, 'wqe', 'elmo2040', 'sdsads@gmail.com', 'sda', 'asd', '../fotos/123.jpg', 'Jose Aviles', '', 'sad', '', '', '', '', '', '', '', '', '', '', 0, 2, '', '', 1, '', '', '', 1, 0),
(5, 'p', 'Revelation117', 'nexusinfinitus@gmail.com', '', 'VyrusCKrysis', '../fotos/123.jpg', 'Luis Elias Moran Rodriguez', '', '', '', '', '', '1997/07/16', '', '', '', '', '', '', 0, 2, '', '', 1, '', '', '', 1, 0),
(6, 'pe', 'pe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0, '', '', '', 0, 1),
(7, 'pep', 'pe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 1, '', '', 0, '', '', '', 0, 1),
(20, 'Miguel', 'elmo2040', 'miguel@gmail.com', '', '', '../fotos/sdr.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 2, '', '', 1, '', '', '', 1, 0);

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
  `foto` varchar(200) NOT NULL,
  `nickname` varchar(100) NOT NULL DEFAULT 'N/A',
  `birthday` varchar(100) NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `fullname`, `foto`, `nickname`, `birthday`) VALUES
(1, 'VyrusCKrysis', 'nexusinfinitus@gmail.com', '42d7551e31a895e8a0a418c21138f94d', 'Elias Rodriguez', 'build/images/users/images_users/shen.jpg', 'N/A', '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id_category`);

--
-- Indices de la tabla `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`Id_post`),
  ADD KEY `Id_user` (`Id_user`),
  ADD KEY `Id_category` (`Id_category`);

--
-- Indices de la tabla `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`Id_img`),
  ADD KEY `Id_img` (`Id_img`),
  ADD KEY `Id_user` (`Id_user`),
  ADD KEY `Id_category` (`Id_category`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_user` (`id`),
  ADD KEY `Id_category` (`Id_category`),
  ADD KEY `ID_gallery` (`ID_gallery`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gallery`
--
ALTER TABLE `gallery`
  MODIFY `Id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`Id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`Id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `gallery_ibfk_2` FOREIGN KEY (`Id_category`) REFERENCES `categories` (`Id_category`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Id_category`) REFERENCES `categories` (`Id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
