-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2020 a las 14:06:25
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amics`
--

CREATE TABLE `amics` (
  `id_amic` int(2) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `cognoms` varchar(50) NOT NULL,
  `telefon` int(9) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `amics`
--

INSERT INTO `amics` (`id_amic`, `nom`, `cognoms`, `telefon`, `email`) VALUES
(1, 'Pepito', 'Grillo', 665215824, 'p.grillo@gmail.com'),
(2, 'Antonio', 'Perez', 684527852, 'a.perez@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cites`
--

CREATE TABLE `cites` (
  `id_amic` int(2) NOT NULL,
  `lloc` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `descripcio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cites`
--

INSERT INTO `cites` (`id_amic`, `lloc`, `data`, `hora`, `descripcio`) VALUES
(1, 'Teatre Barcelona', '2020-07-24', '19:00:01', 'Obra de teatre en el teatre Victoria'),
(1, 'Tibidabo', '2020-07-28', '09:40:08', 'Trobada en la entrada del parc'),
(2, 'Churreria', '2020-07-25', '17:35:07', 'Brenar a la xurreria del barri'),
(2, 'Cine', '2020-07-25', '19:00:19', 'Trobada en les taquilles del cinema '),
(1, 'Dinar', '2020-08-14', '13:03:27', 'Dinar a casa l\'avia'),
(2, 'Trobada d\'amics', '2020-08-29', '21:00:27', 'Trobada amb els amics a Can Manel');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
