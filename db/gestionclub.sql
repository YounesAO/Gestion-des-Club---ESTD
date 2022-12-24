-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 24 déc. 2022 à 20:27
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
  `idClub` int(11) NOT NULL AUTO_INCREMENT,
  `nomClub` varchar(50) DEFAULT NULL,
  `Slogan` varchar(50) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `dateCreation` date DEFAULT NULL,
  `lesObjectifs` varchar(100) NOT NULL,
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
  `nomEtudiant` varchar(50) NOT NULL,
  `prenomEtudiant` varchar(50) DEFAULT NULL,
  `CNE` varchar(50) NOT NULL,
  `filiere` varchar(50) DEFAULT NULL,
  `niveau` varchar(50) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL DEFAULT 'images\\img_avatar1.png',
  `userName` varchar(40) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `sexe` varchar(1) NOT NULL,
  PRIMARY KEY (`idEtudiant`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `integrer`
--

DROP TABLE IF EXISTS `integrer`;
CREATE TABLE IF NOT EXISTS `integrer` (
  `idClub` int(11) NOT NULL,
  `IdEtudiant` int(11) NOT NULL,
  `valide` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`idClub`,`IdEtudiant`),
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
  `valide` tinyint(1) NOT NULL DEFAULT '0',
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
  `idClub` int(11) DEFAULT NULL,
  `valide` int(11) NOT NULL DEFAULT '0',
  KEY `fkEtudiantProposer` (`idEtudiant`),
  KEY `fkEvenementProposer` (`idEvenement`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
