SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `Galeria` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Galeria`;

CREATE TABLE `autores` (

  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `enabled` int(2) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP

) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `imagenes` (

  `id` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `archivo` varchar(200) NOT NULL,
  `tamaño` int(11) NOT NULL,
  `texto` text NOT NULL,
  `enabled` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP

) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `autores` ADD PRIMARY KEY (`id`);

ALTER TABLE `imagenes` ADD PRIMARY KEY (`id`);

ALTER TABLE `autores` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `imagenes` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

COMMIT;
