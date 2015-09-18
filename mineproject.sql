-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 18 Septembre 2015 à 17:27
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `minetable`
--

INSERT INTO `minetable` (`ID`, `nameObject`, `namePerson`, `photoObject`, `photoPerson`, `created_at`) VALUES
(4, 'fucj', 'you', '155fb1b207b4f0.png', '155fb1b207ba94.png', '2015-09-17 19:57:20'),
(5, 'fucj', 'you', '155fb22f7a0ab0.png', '155fb22f7a1130.png', '2015-09-17 20:30:47'),
(13, 'fucj', 'you', '155fbc47a1f039.png', '155fbc47a1f387.png', '2015-09-18 07:59:54'),
(14, 'fucj', 'you', '155fbc4dba5dea.png', '155fbc4dbac8b5.png', '2015-09-18 08:01:31'),
(16, 'nameobject', 'nameperson', '155fbeca168851.png', '155fbeca168c49.png', '2015-09-18 10:51:13'),
(18, 'objet', 'personne', '155fc1b90946b3.png', '155fc1b90949ad.png', '2015-09-18 14:11:28'),
(19, 'objet', 'personne', '155fc20e05578f.png', '155fc20e055bb8.png', '2015-09-18 14:34:08'),
(22, 'objet', 'personne', '155fc23089ecfa.png', '155fc23089f0c4.png', '2015-09-18 14:43:20');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Fuid` varchar(100) NOT NULL,
  `Ffname` varchar(60) NOT NULL,
  `Femail` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`UID`, `Fuid`, `Ffname`, `Femail`) VALUES
(1, '1133861813309137', 'Damien Duvernois', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
