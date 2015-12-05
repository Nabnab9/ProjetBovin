-- phpMyAdmin SQL Dump
-- version 4.2.13
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 23 Novembre 2015 à 13:16
-- Version du serveur :  5.5.37-MariaDB
-- Version de PHP :  5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `s122613`
--

-- --------------------------------------------------------

--
-- Structure de la table `abattoir`
--

CREATE TABLE IF NOT EXISTS `abattoir` (
  `nom_abat` varchar(50) NOT NULL,
  `n_tel_abat` text NOT NULL,
  `adr_abat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `abattoir`
--

INSERT INTO `abattoir` (`nom_abat`, `n_tel_abat`, `adr_abat`) VALUES
('la meule', '0215659764', 'osef');

-- --------------------------------------------------------

--
-- Structure de la table `agriculteur`
--

CREATE TABLE IF NOT EXISTS `agriculteur` (
  `id_agriculteur` int(11) NOT NULL,
  `nom_agri` text NOT NULL,
  `prenom_agri` text NOT NULL,
  `n_tel_agri` text NOT NULL,
  `adr_agri` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `agriculteur`
--

INSERT INTO `agriculteur` (`id_agriculteur`, `nom_agri`, `prenom_agri`, `n_tel_agri`, `adr_agri`) VALUES
(13, 'rabbit', 'roger', '02156549764', 'osef');

-- --------------------------------------------------------

--
-- Structure de la table `bovin`
--

CREATE TABLE IF NOT EXISTS `bovin` (
  `code_boucle` varchar(12) NOT NULL,
  `nom_bovin` text NOT NULL,
  `pays` text NOT NULL,
  `departement` int(11) NOT NULL,
  `exploitation` text NOT NULL,
  `num_travail` text NOT NULL,
  `date_naissance` date NOT NULL,
  `date_mort` date NOT NULL,
  `race` text NOT NULL,
  `sexe` text NOT NULL,
  `id_agriculteur_bovin` int(11) NOT NULL,
  `nom_abat_bovin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `bovin`
--

INSERT INTO `bovin` (`code_boucle`, `nom_bovin`, `pays`, `departement`, `exploitation`, `num_travail`, `date_naissance`, `date_mort`, `race`, `sexe`, `id_agriculteur_bovin`, `nom_abat_bovin`) VALUES
('555', 'Thierry', 'France', 72, 'osef', '12', '2011-12-12', '2012-12-12', 'Francaise', 'oui', 13, 'la meule');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `abattoir`
--
ALTER TABLE `abattoir`
 ADD PRIMARY KEY (`nom_abat`);

--
-- Index pour la table `agriculteur`
--
ALTER TABLE `agriculteur`
 ADD PRIMARY KEY (`id_agriculteur`);

--
-- Index pour la table `bovin`
--
ALTER TABLE `bovin`
 ADD PRIMARY KEY (`code_boucle`), ADD KEY `ETRANGERE` (`id_agriculteur_bovin`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `bovin`
--
ALTER TABLE `bovin`
ADD CONSTRAINT `contrainte_id_agri` FOREIGN KEY (`id_agriculteur_bovin`) REFERENCES `agriculteur` (`id_agriculteur`) ON DELETE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
