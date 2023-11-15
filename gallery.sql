SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `asirAppGallery` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;

USE `asirAppGallery`;

CREATE TABLE `authors` (

  `authorId` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `enabled` int(2) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP

) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE `images` (

  `imageId` int(11) NOT NULL,
  `authorId` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `size` int(11) NOT NULL,
  `text` text NOT NULL,
  `enabled` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP

) ENGINE=MyISAM DEFAULT CHARSET=latin1;

ALTER TABLE `authors` ADD PRIMARY KEY (`authorId`);

ALTER TABLE `images` ADD PRIMARY KEY (`imageId`);

ALTER TABLE `authors` MODIFY `authorId` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `images` MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT;

CREATE USER 'asirAppGallery'@'localhost' IDENTIFIED BY 'abc123.';
GRANT ALL PRIVILEGES ON *.* TO 'asirAppGallery'@'localhost' WITH GRANT OPTION;

FLUSH PRIVILEGES;

COMMIT;