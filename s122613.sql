SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `Abattoir` (
`id_abattoir` int(11) NOT NULL,
  `nom_abat` text NOT NULL,
  `n_tel_abat` text NOT NULL,
  `adr_abat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `agriculteur` (
`id_agriculteur` int(11) NOT NULL,
  `nom_agri` text NOT NULL,
  `prenom_agri` text NOT NULL,
  `n_tel_agri` text NOT NULL,
  `adr_agri` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `Bovin` (
  `code_boucle` text NOT NULL,
  `nom_bovin` text NOT NULL,
  `pays` text NOT NULL,
  `departement` int(11) NOT NULL,
  `exploitation` text NOT NULL,
  `num_travail` text NOT NULL,
  `date_naissance` date NOT NULL,
  `date_mort` date NOT NULL,
  `race` text NOT NULL,
  `sexe` text NOT NULL,
  `id_agriculteur` int(11) NOT NULL,
  `id_abattoire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `Abattoir`
 ADD PRIMARY KEY (`id_abattoir`);

ALTER TABLE `agriculteur`
 ADD PRIMARY KEY (`id_agriculteur`);


ALTER TABLE `Abattoir`
MODIFY `id_abattoir` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `agriculteur`
MODIFY `id_agriculteur` int(11) NOT NULL AUTO_INCREMENT;