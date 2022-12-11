-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 11 déc. 2022 à 21:22
-- Version du serveur : 5.7.36
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionclub`
--

-- --------------------------------------------------------

--
-- Structure de la table `club`
--

DROP TABLE IF EXISTS `club`;
CREATE TABLE IF NOT EXISTS `club` (
  `idClub` int(11) NOT NULL,
  `nomClub` varchar(50) DEFAULT NULL,
  `Slogan` varchar(50) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `dateCreation` date DEFAULT NULL,
  PRIMARY KEY (`idClub`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `creer`
--

DROP TABLE IF EXISTS `creer`;
CREATE TABLE IF NOT EXISTS `creer` (
  `idClub` int(11) DEFAULT NULL,
  `IdEtudiant` int(11) DEFAULT NULL,
  `idSP` int(11) DEFAULT NULL,
  KEY `fkEtudiantCreer` (`IdEtudiant`),
  KEY `fkClubCreer` (`idClub`),
  KEY `fkService_ParrascolaireCreer` (`idSP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `idEtudiant` int(11) NOT NULL AUTO_INCREMENT,
  `nomEtudiant` varchar(50) DEFAULT NULL,
  `prenomEtudiant` varchar(50) DEFAULT NULL,
  `CNE` varchar(50) DEFAULT NULL,
  `filiere` varchar(50) DEFAULT NULL,
  `niveau` varchar(50) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `userName` varchar(40) NOT NULL,
  PRIMARY KEY (`idEtudiant`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`idEtudiant`, `nomEtudiant`, `prenomEtudiant`, `CNE`, `filiere`, `niveau`, `dateNaissance`, `password`, `img`, `userName`) VALUES
(1, 'AIT OUAHDA', 'YOUNES', 'D1234', 'GI', '2', '2002-09-23', '12345678', NULL, 'YOUNESAIO');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `idEvenement` int(11) NOT NULL AUTO_INCREMENT,
  `idEtudiant` int(11) DEFAULT NULL,
  `nomEvent` varchar(50) DEFAULT NULL,
  `dateEvent` date DEFAULT NULL,
  `descriptionEvent` varchar(50) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `lieu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idEvenement`),
  KEY `fkEtudiantEvenement` (`idEtudiant`)
) ENGINE=MyISAM AUTO_INCREMENT=1670793201 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`idEvenement`, `idEtudiant`, `nomEvent`, `dateEvent`, `descriptionEvent`, `img`, `lieu`) VALUES
(1670793200, 1, 'The Hand Bold', NULL, 'TEST', NULL, NULL),
(1670793159, 1, 'The Hand Bold', NULL, 'TEST', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `integrer`
--

DROP TABLE IF EXISTS `integrer`;
CREATE TABLE IF NOT EXISTS `integrer` (
  `idClub` int(11) DEFAULT NULL,
  `IdEtudiant` int(11) DEFAULT NULL,
  KEY `fkClubIntegrer` (`idClub`),
  KEY `fkEtudiantIntegrer` (`IdEtudiant`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `organiser`
--

DROP TABLE IF EXISTS `organiser`;
CREATE TABLE IF NOT EXISTS `organiser` (
  `idEvenement` int(11) DEFAULT NULL,
  `idClub` int(11) DEFAULT NULL,
  KEY `fkEvenementOrganiser` (`idEvenement`),
  KEY `fkClubOrganiser` (`idClub`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `proposer`
--

DROP TABLE IF EXISTS `proposer`;
CREATE TABLE IF NOT EXISTS `proposer` (
  `idEtudiant` int(11) DEFAULT NULL,
  `idEvenement` int(11) DEFAULT NULL,
  KEY `fkEtudiantProposer` (`idEtudiant`),
  KEY `fkEvenementProposer` (`idEvenement`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `proposer`
--

INSERT INTO `proposer` (`idEtudiant`, `idEvenement`) VALUES
(1, 1670793159),
(1, 1670793200);

-- --------------------------------------------------------

--
-- Structure de la table `service_parrascolaire`
--

DROP TABLE IF EXISTS `service_parrascolaire`;
CREATE TABLE IF NOT EXISTS `service_parrascolaire` (
  `IdSP` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdSP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
