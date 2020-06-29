-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 29 Juin 2020 à 07:13
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `allocationchambre`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE IF NOT EXISTS `chambre` (
  `idChambre` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `numChambre` varchar(8) NOT NULL,
  `numBatiment` varchar(8) NOT NULL,
  `typeChambre` varchar(10) NOT NULL,
  PRIMARY KEY (`idChambre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `chambre`
--

INSERT INTO `chambre` (`idChambre`, `numChambre`, `numBatiment`, `typeChambre`) VALUES
(2, '001-2490', '2', 'Individuel'),
(5, '002-7484', '12', 'PartagÃ©'),
(9, '003-6745', '3', 'PartagÃ©'),
(10, '001-3270', '1', 'Individuel'),
(14, '003-7687', '3', 'PartagÃ©'),
(15, '100-1948', '101', 'Individuel');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `matricule` varchar(8) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` int(9) NOT NULL,
  `dateNaissance` date NOT NULL,
  `typeBourse` varchar(15) DEFAULT NULL,
  `logement` varchar(10) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `chambre` int(8) unsigned DEFAULT NULL,
  PRIMARY KEY (`matricule`),
  KEY `chambre` (`chambre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`matricule`, `nom`, `prenom`, `email`, `tel`, `dateNaissance`, `typeBourse`, `logement`, `adresse`, `chambre`) VALUES
('4891', '', '', '', 0, '0000-00-00', NULL, NULL, '', NULL),
('DiAd9380', 'Dieng', 'Adja', 'adjadieng@gmail.com', 770927290, '1998-10-05', 'Bourse-entiere', 'loge', NULL, 2),
('DiDi9744', 'Diop', 'Diarra', 'diadia@gmail.com', 774854141, '1996-09-16', NULL, NULL, 'Dakar', NULL),
('DiFa3595', 'Diarra', 'Fatou', 'diadia@gmail.com', 774854141, '2020-06-24', 'Demi-Bourse', 'loge', NULL, 5),
('DIMA0001', 'Diop', 'Mamadou', 'diopmamadu10@gmail.com', 761808121, '1999-06-09', NULL, NULL, 'dakar/pikine', NULL),
('DiSa3801', 'Diop', 'Saly', 'sali95@gmail.com', 765480101, '1995-03-22', 'Bourse-ent', NULL, 'Pikine', NULL),
('GuFa3365', 'Gueye', 'Fatou', 'fagueye@gmail.com', 770001034, '1993-04-07', NULL, NULL, 'Kaolack', NULL),
('NiNd7585', 'Niang', 'Ndeye', 'niangballo@gmail.com', 765482425, '1994-06-03', 'Bourse-entiere', NULL, 'Thies', NULL),
('qqqq4051', 'qqqqqqqqqqq', 'qqqqqqq', 'diadia@gmail.com', 0, '0000-00-00', 'Demi-Bourse', NULL, 'Fass', NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`chambre`) REFERENCES `chambre` (`idChambre`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
