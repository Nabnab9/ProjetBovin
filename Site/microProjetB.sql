-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 07 Décembre 2015 à 00:09
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projet bovin`
--

-- --------------------------------------------------------

--
-- Structure de la table `abattoir`
--

CREATE TABLE IF NOT EXISTS `abattoir` (
  `nom_abat` varchar(30) NOT NULL,
  `n_tel_abat` varchar(10) NOT NULL,
  `adr_abat` text NOT NULL,
  PRIMARY KEY (`nom_abat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `agriculteur`
--

CREATE TABLE IF NOT EXISTS `agriculteur` (
  `id_agriculteur` int(11) NOT NULL,
  `nom_agri` varchar(30) NOT NULL,
  `prenom_agri` varchar(30) NOT NULL,
  `n_tel_agri` varchar(10) NOT NULL,
  `adr_agri` text NOT NULL,
  PRIMARY KEY (`id_agriculteur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `agriculteur`
--

INSERT INTO `agriculteur` (`id_agriculteur`, `nom_agri`, `prenom_agri`, `n_tel_agri`, `adr_agri`) VALUES
(0, '', '', '', ''),
(15, 'rousse', 'quatrre', '0634263535', 'ruebarbe'),
(1234, 'cinq', 'cinq', '0634263535', 'ruebarbe'),
(1235, 'cinq', 'cinq', '0634263535', 'ruebarbe');

-- --------------------------------------------------------

--
-- Structure de la table `bovin`
--

CREATE TABLE IF NOT EXISTS `bovin` (
  `code_boucle` varchar(14) NOT NULL,
  `nom_bovin` varchar(30) NOT NULL,
  `pays` varchar(2) NOT NULL,
  `departement` int(2) NOT NULL,
  `num_travail` int(4) NOT NULL,
  `date_naissance` date NOT NULL,
  `date_mort` date DEFAULT NULL,
  `race` varchar(30) NOT NULL,
  `sexe` char(1) DEFAULT NULL,
  `id_agriculteur_bovin` int(4) NOT NULL,
  `nom_abat_bovin` varchar(30) DEFAULT 'BovinStillAlive',
  PRIMARY KEY (`code_boucle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `bovin`
--

INSERT INTO `bovin` (`code_boucle`, `nom_bovin`, `pays`, `departement`, `num_travail`, `date_naissance`, `date_mort`, `race`, `sexe`, `id_agriculteur_bovin`, `nom_abat_bovin`) VALUES
('DE 78 1235 454', 'test2', 'DE', 78, 4545, '2012-01-06', '0000-00-00', 'Corse', 'M', 1235, ''),
('Fr 72 1234 567', 'Nom du bovin', 'Fr', 72, 5678, '2015-12-12', '0000-00-00', 'Saosnoise', 'F', 1234, ''),
('FR 72 1235 123', 'test', 'FR', 72, 1237, '2012-01-13', '0000-00-00', 'Rouge des prés', 'F', 1235, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
