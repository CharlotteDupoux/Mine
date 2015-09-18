-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 18 Septembre 2015 à 10:04
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mineproject`
--

-- --------------------------------------------------------

--
-- Structure de la table `minetable`
--

CREATE TABLE IF NOT EXISTS `minetable` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `nameObject` varchar(255) NOT NULL,
  `namePerson` varchar(255) NOT NULL,
  `photoObject` varchar(255) NOT NULL,
  `photoPerson` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `minetable`
--

INSERT INTO `minetable` (`ID`, `nameObject`, `namePerson`, `photoObject`, `photoPerson`, `created_at`) VALUES
(3, 'fucj', 'you', '155fb15c3f0bac.png', '155fb15c43e9e3.png', '2015-09-17 19:34:28'),
(4, 'fucj', 'you', '155fb1b207b4f0.png', '155fb1b207ba94.png', '2015-09-17 19:57:20'),
(5, 'fucj', 'you', '155fb22f7a0ab0.png', '155fb22f7a1130.png', '2015-09-17 20:30:47'),
(13, 'fucj', 'you', '155fbc47a1f039.png', '155fbc47a1f387.png', '2015-09-18 07:59:54'),
(14, 'fucj', 'you', '155fbc4dba5dea.png', '155fbc4dbac8b5.png', '2015-09-18 08:01:31');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
