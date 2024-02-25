-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2024 a las 20:45:55
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cine-k`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_funcion` (`nombre2` VARCHAR(25), `precio2` VARCHAR(25), `img2` VARCHAR(100))   BEGIN
DECLARE rutaImagen VARCHAR(100);
SET rutaImagen = CONCAT('/storage/', img2);
INSERT INTO `cines`(`id`, `Nombre`, `precio`, `Total`, `Imagen`) VALUES (null,nombre2,precio2,0.0,rutaImagen);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ventas` (`id2` INT, `entradas` VARCHAR(25))   BEGIN
DECLARE precios double;
DECLARE totales double;
DECLARE val double;
    
    SELECT precio INTO precios FROM peliculas WHERE id = id2 LIMIT 1;
    SELECT Total INTO totales FROM peliculas WHERE id = id2 LIMIT 1;
	set val=(precios*entradas)+totales;
UPDATE `cines` SET `Total`= val WHERE id=id2;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ventas_cines` (`id2` INT, `entradas` VARCHAR(25))   BEGIN
DECLARE precios double;
DECLARE totales double;
DECLARE val double;
    
    SELECT precio INTO precios FROM cines WHERE id = id2 LIMIT 1;
    SELECT Total INTO totales FROM cines WHERE id = id2 LIMIT 1;
	set val=(precios*entradas)+totales;
UPDATE `cines` SET `Total`= val WHERE id=id2;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cines`
--

CREATE TABLE `cines` (
  `id` int(20) UNSIGNED NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `precio` double(8,2) NOT NULL,
  `Total` double(8,2) NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cines`
--

INSERT INTO `cines` (`id`, `Nombre`, `precio`, `Total`, `Imagen`) VALUES
(1, 'Bamby', 100.00, 0.00, '/storage/bambi.webp'),
(2, 'Brujas', 101.00, 0.00, '/storage/brujas.gif'),
(3, 'Crepusculo', 102.00, 0.00, '/storage/Crepusculo.webp'),
(4, 'firulais', 500.00, 0.00, '/storage/firulais.jpg'),
(5, 'scoobydoo', 200.00, 0.00, '/storage/scoobydoo.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_02_09_062502_create_cines_table', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cines`
--
ALTER TABLE `cines`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cines`
--
ALTER TABLE `cines`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
