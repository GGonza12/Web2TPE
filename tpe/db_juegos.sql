-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2021 a las 22:34:26
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
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `comentario` varchar(450) NOT NULL,
  `puntaje` int(2) NOT NULL,
  `id_juego` tinyint(4) NOT NULL,
  `id_usuario` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `comentario`, `puntaje`, `id_juego`, `id_usuario`) VALUES
(86, 'test', 3, 6, 7),
(88, 'test admin 2', 5, 6, 4),
(89, 'test admin 3', 2, 6, 4),
(90, '', 3, 6, 5),
(91, 'comentario test 1\n', 3, 6, 5),
(92, 'comentario tasdasdasdasdsa', 3, 6, 5),
(93, 'comentario tasdasdasdasdsaasdasd', 4, 6, 5),
(94, 'test2 coment\n', 2, 6, 7),
(95, 'test2 coment 5\n', 5, 6, 7),
(96, 'test2 coment 4\n', 4, 6, 7),
(97, 'tesadasdasdas', 3, 2, 7),
(98, 'juegzao', 5, 2, 7),
(99, 'the witcher 3', 3, 6, 7),
(100, ' Hotline miami', 4, 2, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id_empresa` tinyint(4) NOT NULL,
  `empresa` varchar(255) NOT NULL,
  `informacion` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id_empresa`, `empresa`, `informacion`) VALUES
(1, 'CD Projekt RED', 'CD Projekt RED es un estudio de videojuegos polaco que es filial de la desarrolladora y distribuidora polaca CD Projekt S.A.. La compañía fue fundada en febrero de 1995 como el estudio desarrollador de la empresa CD Projekt. El primer juego producido fue The Witcher, basado en los libros de Andrzej Sapkowski.'),
(2, '505 Games', '505 Games Ltd. es una compañía editora de videojuegos la cual fue fundada en el año 2006, además de ser una filial de Digital Bros. Personajes clave en la empresa son Rami y Raffi Galante o Ian Howe. '),
(3, 'Electronic Arts', 'Electronic Arts Inc. es una empresa estadounidense desarrolladora y distribuidora de videojuegos para ordenador y videoconsolas, fundada por Trip Hawkins. Sus oficinas centrales están en Redwood City, California.'),
(4, 'Capcom', 'Capcom Co., Ltd. es una empresa japonesa desarrolladora y distribuidora de videojuegos. Fue fundada en 1979 como Japan Capsule Computers, una empresa dedicada a la fabricación y distribución de máquinas de videojuegos. Su actual nombre es el resultado de unir Capsule Computers.'),
(5, 'Rockstar Games', 'Rockstar Games es una compañía desarrolladora y publicadora de videojuegos adquirido por el publicador de videojuegos Take-Two Interactive y creador del motor de videojuego RAGE. La compañía es internacionalmente conocida por títulos como la serie Grand Theft Auto, Max Payne, Midnight Club o Red Dead.'),
(7, 'Sony', 'Sony Group Corporation, comúnmente referida como Sony, es una empresa multinacional japonesa con sede en Tokio y uno de los fabricantes más importantes a nivel mundial en electrónica de consumo: audio y vídeo, computación, fotografía, videojuegos, telefonía móvil, productos profesionales, etcétera.'),
(9, 'Bethesda', 'Bethesda Softworks LLC es una empresa estadounidense dedicada a la distribución y desarrollo de videojuegos, filial de ZeniMax Media. Fue fundada en 1986 y actualmente tiene su sede en Rockville, Maryland. Es conocida por sus videojuegos de simulación deportiva, de acción y de rol.'),
(12, 'Devolver Digital', 'Devolver Digital Inc. es un distribuidor de películas y videojuegos estadounidense con sede en Austin, Texas, que está principalmente asociado con las series Serious Sam y Hotline Miami.'),
(13, 'Warner Bros. Interactive Entertainment', 'Warner Bros. Interactive Entertainment, Inc. es una división de Warner Bros. Home Entertainment Group. Es una empresa desarrolladora, distribuidora y licenciadora de videojuegos a nivel mundial de títulos propios y de terceros. Bajo el sello de WBIE está Warner Bros.'),
(16, 'Comany test bug', 'dsajasjdas');

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
(2, 'Hotline Miami', 'https://image.api.playstation.com/cdn/UP3643/CUSA00486_00/T1mmY3q3rilwXOL7WddwzgEChcdIJaAz.png', 'Gran Banda Sonora, Violento, Acción, Indie.', 'Hotline Miami es un juego de acción de alto octanaje que rebosa brutalidad es estado puro, violentos tiroteos y demoledores combates cuerpo a cuerpo.', 130, 12),
(6, 'The Witcher 3 Wild hunt', 'https://store.playstation.com/store/api/chihiro/00_09_000/container/AR/es/99/UP4497-CUSA00527_00-0000000000000002/0/image?_version=00_09_000&platform=chihiro&bg_color=000000&opacity=100&w=720&h=720', 'Sandbox, RPG.', 'Mientras la guerra se extiende por los Reinos del Norte, aceptarás el contrato de tu vida: encontrar a la niña de la profecía, un arma viviente que puede alterar el mundo tal y como lo conocemos.', 20, 1),
(7, 'Cyberpunk 2077', 'https://cdn1.epicgames.com/77f2b98e2cef40c8a7437518bf420e47/offer/Diesel_product_ginger_home_EGS_CDPROJEKTRED_CYBERPUNK2077_S2_DESCRIPTION-2560x1440-8411578303f60188c29f79cdbabcbca938bea5a6-2560x1440-91b7c4749a6d55e56e24bc22166092cb-2560x1440-91b7c4749a6d55e56e24bc22166092cb.jpg?h=270&resize=1&w=480', 'Cyberpunk, Sandbox, RPG', 'Cyberpunk 2077 es una historia de acción y aventura en mundo abierto ambientada en Night City, una megalópolis obsesionada con el poder, el glamur y la modificación corporal. Tu personaje es V, un mercenario que persigue un implante único que permite alcanzar la inmortalidad.', 50, 1),
(8, 'Grand Theft Auto San Andreas', 'https://media.vandal.net/ivandal/1200x630/3903/2005610224436_1.jpg', 'Sandbox, Third person shooter', 'Hace cinco años Carl Johnson huyó de los rigores de vivir en Los Santos, San Andreas, una ciudad destrozada por las bandas, las drogas y la corrupción en la que las estrellas de cine y los millonarios hacen lo posible por evitar a los traficantes y a los pandilleros. ', 20, 5),
(9, 'Batman™: Arkham Knight', 'https://i.blogs.es/13dee4/040814-batman-arkham-knight/450_1000.jpg', 'Sanbox, Accion', 'Batman™: Arkham Knight es la épica conclusión de la galardonada trilogía de Arkham, creada por Rocksteady Studios. El título, desarrollado en exclusiva para plataformas de nueva generación, presenta la espectacular versión del batmóvil imaginada por Rocksteady. La incorporación del legendario vehículo, unida al aclamado sistema de juego de la serie Arkham, ofrece a los jugadores una recreación definitiva del universo de Batman en la que pueden recorrer las calles y sobrevolar los tejados de la totalidad de Gotham City. En este explosivo desenlace, Batman se enfrenta a la mayor amenaza para la ciudad que ha jurado proteger, cuando el Espantapájaros reaparece para unir a todos los supervillanos de Gotham y jura destruir al murciélago de una vez para siempre.', 225, 13),
(15, 'Red Dead Redemption 2', 'https://image.api.playstation.com/cdn/UP1004/CUSA03041_00/Hpl5MtwQgOVF9vJqlfui6SDB5Jl4oBSq.png', 'Sandbox, Buena trama, Aventura', 'Con más de 175 premios al Juego del año y más de 250 valoraciones perfectas, Red Dead Redemption 2 es la épica historia de Arthur Morgan y la banda de Van der Linde, que huyen por toda América en el albor de una nueva era. También incluye acceso al mundo multijugador compartido de Red Dead Online.', 2500, 5),
(16, 'Serious Sam 3: BFE', 'https://media.vandal.net/m/14057/serious-sam-3-bfe-psn-2014515133338_1.jpg', 'FPS, Acción, Sangriento', 'Serious Sam 3: BFE es el glorioso regreso a la edad de oro de los shooters en primera persona donde los hombres eran hombres, la cobertura era para novatos y pulsar el gatillo hacía que las cosas hicieran bum. Como precuela del título independiente original, Serious Sam: The First Encounter, Serious Sam 3 transcurre durante la última lucha de la Tierra contra las legiones de bestias y mercenarios de Mental. Ambientado en los desmoronados templos de una civilización antigua y las derrumbadas ciudades del Egipto del siglo XXII, Serious Sam 3 es una emocionante fusión de los frenéticos shooters con la jugabilidad de los juegos modernos. SIN COBERTURA. VUELVE EL HOMBRE.', 440, 12),
(17, 'DEATH STRANDING', 'https://gmedia.playstation.com/is/image/SIEPDC/death-stranding-key-art-01-ps4-es-7dec20?$native$', 'Sandbox, Buena trama.', 'Hideo Kojima, el legendario creador de videojuegos, nos ofrece una nueva experiencia que desafía a todos los géneros. Sam Bridges debe enfrentarse a un mundo transformado por el Death Stranding.', 27000, 2),
(18, 'Control', 'https://image.api.playstation.com/vulcan/ap/rnd/202008/2111/hvVTsd8akckaGtN2eZ3yIuwc.png', 'Acción, Aventuras, Terror.', 'Control es un emocionante título de acción y aventuras en tercera persona con gráficos espectaculares que ha ganado más de 80 premios.', 1800, 2),
(19, 'Resident Evil Village', 'https://images.greenmangaming.com/bbd2316440504045b61415bf9da78c4c/faac1dba6c7b48be8f82856c887991b7.jpg', 'Terror, FPS.', 'Vive el survival horror como nunca antes en la 8.ª entrega principal de la aclamada serie Resident Evil: Resident Evil Village. El terror más realista e inescapable, con gráficos hiperdetallados, intensa acción en 1.ª persona y una trama magistral.', 3500, 4),
(20, 'Street Fighter V', 'https://as.com/meristation/imagenes/2020/12/23/noticias/1608759221_959757_1608759267_noticia_normal_recorte1.jpg', 'Lucha, Acción.', 'Experimenta la intensidad de la batalla cara a cara en Street Fighter® V.Elige entre 16 personajes icónicos, cada uno con su propia historia personal y desafíos de entrenamiento únicos, y luego lucha contra amigos en línea o sin conexión con una sólida variedad de opciones para cada partida.', 500, 4),
(21, 'DOOM Eternal', 'https://image.api.playstation.com/vulcan/ap/rnd/202010/0114/ERNPc4gFqeRDG1tYQIfOKQtM.png', 'FPS, Acción, Sangriento', 'Los ejércitos del infierno han invadido la Tierra. Ponte en la piel del Slayer en una épica campaña para un jugador y cruza dimensiones para detener la destrucción definitiva de la humanidad. No le tienen miedo a nada... salvo a ti.', 600, 9),
(22, 'Prey', 'https://argengamestore.com/wp-content/uploads/2017/01/capsule_616x353-2.jpg', 'Ciencia Ficción, Espacio, Atmosférico.', 'En Prey os despertaréis a bordo de la Talos I, una estación espacial en órbita alrededor de la Luna en el año 2032. Sois el sujeto clave de un experimento que espera cambiar la humanidad para siempre... pero las cosas se han complicado de forma terrible.', 1200, 9),
(25, 'dsadsadasd', 'sadasdsadasd', 'asdasd', 'sadsadsadsa', 11, 16);

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
(6, 'testpublico', 'publico@gmail.com', '$2y$10$bh8e27eDfyvJtFaHbGvFGujWXfPqHelRw8gk046zYe/pKB84GUMNu', 'comun'),
(7, 'testpublico2', 'test2@gmail.com', '$2y$10$JCLY0fEqjIh7ZUYapkMYF.etbyIhxTQ7boRDFZEpt2RSTbsn3PLRW', 'comun'),
(8, 'testlogin', 'testlogin@gmail.com', '$2y$10$uSjz28NbanHClBYWUMOpBOPe53hyJr3BsR1HarNLaqfLAByvcAOJW', 'admin'),
(9, 'test3', 'test3@gmail.com', '$2y$10$D8u5piCjL1sBpRRRdiJa/OMCEHNeGs84LOMyK.nr4CRiQHw0cHXuW', 'comun'),
(10, 'test4', 'test4@gmail.com', '$2y$10$vCJ74rtUNtjhteIbCXJf/uywYS/TmjPBPbU71TMdlqncMO1gmHw6i', 'comun'),
(12, 'test6', 'test6@gmail.com', '$2y$10$nB9DfwLWx.qlash/St6Wfu1J6Fw8Zv/4DdJMVVzsoMjFhDlaQFMmS', 'comun'),
(13, 'test7', 'test7@gmail.com', '$2y$10$zj7GY71CoalHxB0WDrLsQO5BmEtqpDc4q4yiljivoovbcK5mzGYh6', 'comun'),
(14, 'test1', 'test1@gmail.com', '$2y$10$pJ9BvXEL/62DovDT2Nqps.Z3Op32Rff2WjyLoMoklCFkUriRIFgWW', 'comun');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_juego` (`id_juego`),
  ADD KEY `id_usuario` (`id_usuario`);

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
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_empresa` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id_juego` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_juego`) REFERENCES `juegos` (`id_juego`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD CONSTRAINT `juegos_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id_empresa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
