-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2021 a las 02:37:30
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_juegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id_empresa` tinyint(4) NOT NULL,
  `empresa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id_empresa`, `empresa`) VALUES
(1, 'CD PROJEKT RED'),
(2, '505 Games'),
(3, 'Electronic Arts'),
(4, 'CAPCOM'),
(5, 'Rockstar Games'),
(6, 'EA'),
(7, 'Sony'),
(9, 'Betesha'),
(10, 'test');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id_juego` tinyint(4) NOT NULL,
  `juego` varchar(80) NOT NULL,
  `imagen` varchar(400) NOT NULL,
  `categorias` varchar(250) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` float NOT NULL,
  `id_empresa` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id_juego`, `juego`, `imagen`, `categorias`, `descripcion`, `precio`, `id_empresa`) VALUES
(2, 'Hotline miami', 'https://image.api.playstation.com/cdn/UP3643/CUSA00486_00/T1mmY3q3rilwXOL7WddwzgEChcdIJaAz.png', 'Shooter', 'Hotline Miami es un juego de acción de alto octanaje que rebosa brutalidad es estado puro, violentos tiroteos y demoledores combates cuerpo a cuerpo.', 90, 3),
(6, 'The Witcher 3 Wild hunt', 'https://store.playstation.com/store/api/chihiro/00_09_000/container/AR/es/99/UP4497-CUSA00527_00-0000000000000002/0/image?_version=00_09_000&platform=chihiro&bg_color=000000&opacity=100&w=720&h=720', 'Sandbox, RPG.', 'Mientras la guerra se extiende por los Reinos del Norte, aceptarás el contrato de tu vida: encontrar a la niña de la profecía, un arma viviente que puede alterar el mundo tal y como lo conocemos.', 20, 1),
(7, 'Cyberpunk 2077', 'https://cdn1.epicgames.com/77f2b98e2cef40c8a7437518bf420e47/offer/Diesel_product_ginger_home_EGS_CDPROJEKTRED_CYBERPUNK2077_S2_DESCRIPTION-2560x1440-8411578303f60188c29f79cdbabcbca938bea5a6-2560x1440-91b7c4749a6d55e56e24bc22166092cb-2560x1440-91b7c4749a6d55e56e24bc22166092cb.jpg?h=270&resize=1&w=480', 'Cyberpunk, Sandbox, RPG', 'Cyberpunk 2077 es una historia de acción y aventura en mundo abierto ambientada en Night City, una megalópolis obsesionada con el poder, el glamur y la modificación corporal. Tu personaje es V, un mercenario que persigue un implante único que permite alcanzar la inmortalidad.', 50, 1),
(8, 'Grand Theft Auto San Andreas', 'https://media.vandal.net/ivandal/1200x630/3903/2005610224436_1.jpg', 'Sandbox, Third person shooter', 'Hace cinco años Carl Johnson huyó de los rigores de vivir en Los Santos, San Andreas, una ciudad destrozada por las bandas, las drogas y la corrupción en la que las estrellas de cine y los millonarios hacen lo posible por evitar a los traficantes y a los pandilleros. ', 20, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` tinyint(4) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `contrasena` varchar(300) NOT NULL,
  `rol` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `email`, `contrasena`, `rol`) VALUES
(4, 'admin777', 'admin777@gmail.com', '$2y$10$CaBX6GgkRmip9ZPKpfOTReEfTwLUMKzk4tBbAIodiqI/6QY23uGv6', 'admin'),
(5, 'test', 'test1@gmail.com', '$2y$10$Daqn23TG0RMRlHMUlsYWTeRUFoIqqLO0ryc2xsBiIiMAK.qu1yImK', 'admin'),
(6, 'testpublico', 'publico@gmail.com', '$2y$10$bh8e27eDfyvJtFaHbGvFGujWXfPqHelRw8gk046zYe/pKB84GUMNu', 'publico'),
(7, 'testpublico2', 'test2@gmail.com', '$2y$10$JCLY0fEqjIh7ZUYapkMYF.etbyIhxTQ7boRDFZEpt2RSTbsn3PLRW', 'publico');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id_juego`),
  ADD KEY `id _empresa` (`id_empresa`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_empresa` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id_juego` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD CONSTRAINT `juegos_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id_empresa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
