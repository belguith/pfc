-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 10 Mai 2015 à 00:37
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `dar_tak_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `lilbelle_article` varchar(50) NOT NULL,
  `description_article` text NOT NULL,
  `image_article` varchar(200) NOT NULL,
  `date_article` date NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id_article`, `lilbelle_article`, `description_article`, `image_article`, `date_article`) VALUES
(1, 'test', 'test', '/images/test.png', '2015-05-11');

-- --------------------------------------------------------

--
-- Structure de la table `atelier`
--

CREATE TABLE IF NOT EXISTS `atelier` (
  `id_atelier` int(11) NOT NULL AUTO_INCREMENT,
  `nom_atelier` varchar(50) NOT NULL,
  `prix_atelier` decimal(10,0) NOT NULL,
  `nbr_max` int(11) NOT NULL,
  `nbr_inscrit` int(11) NOT NULL,
  `date_atelier` datetime NOT NULL,
  `description_atelier` text NOT NULL,
  `note_atelier` decimal(10,0) NOT NULL,
  `image_atelier` varchar(200) NOT NULL,
  `type_atelier` varchar(20) NOT NULL,
  PRIMARY KEY (`id_atelier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

CREATE TABLE IF NOT EXISTS `chambres` (
  `id_chambre` int(11) NOT NULL AUTO_INCREMENT,
  `nom_chambre` varchar(20) NOT NULL,
  `type_chambre` int(11) NOT NULL,
  `image1_chambre` varchar(200) NOT NULL,
  `image2_chambre` varchar(200) NOT NULL,
  `image3_chambre` varchar(200) NOT NULL,
  PRIMARY KEY (`id_chambre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom_client` varchar(20) NOT NULL,
  `prenom_client` varchar(20) NOT NULL,
  `mail_client` varchar(50) NOT NULL,
  `tel_client` varchar(20) NOT NULL,
  `cin_client` varchar(20) NOT NULL,
  `image_client` mediumblob NOT NULL,
  `login` varchar(20) NOT NULL,
  `motdepasse` varchar(20) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id_client`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `mail_client`, `tel_client`, `cin_client`, `image_client`, `login`, `motdepasse`, `role`) VALUES
(1, 'admin', 'admin', 'admin@aaaa', '85208520', '85208520', '', 'admin', 'admin', 2);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `id_atelier` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `contenu` varchar(1000) NOT NULL,
  `date_publication` datetime NOT NULL,
  PRIMARY KEY (`id_client`,`id_atelier`,`id_commentaire`),
  KEY `commentaire_atelier_FK` (`id_atelier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `excursion`
--

CREATE TABLE IF NOT EXISTS `excursion` (
  `id_excursion` int(11) NOT NULL AUTO_INCREMENT,
  `destination_excursion` varchar(50) NOT NULL,
  `lilbelle_excursion` varchar(100) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` int(11) NOT NULL,
  `imge_excursion` varchar(200) NOT NULL,
  PRIMARY KEY (`id_excursion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `notation`
--

CREATE TABLE IF NOT EXISTS `notation` (
  `id_client` int(11) NOT NULL,
  `id_atelier` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  PRIMARY KEY (`id_client`,`id_atelier`,`note`),
  KEY `notation_atelier_FK` (`id_atelier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `participation`
--

CREATE TABLE IF NOT EXISTS `participation` (
  `id_client` int(11) NOT NULL DEFAULT '0',
  `id_atelier` int(11) NOT NULL DEFAULT '0',
  `date_participation` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id_client`,`id_atelier`,`date_participation`),
  KEY `atelier_atelier_FK` (`id_atelier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id_client` int(11) NOT NULL DEFAULT '0',
  `id_chambre` int(11) NOT NULL DEFAULT '0',
  `date_reservation` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id_client`,`id_chambre`,`date_reservation`),
  KEY `chambre_reservation_FK` (`id_chambre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `site_map`
--

CREATE TABLE IF NOT EXISTS `site_map` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table_name` varchar(20) NOT NULL,
  `page_link` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `site_map`
--

INSERT INTO `site_map` (`id`, `table_name`, `page_link`) VALUES
(1, 'article', 'article.php'),
(2, 'atelier', 'atelier.php'),
(3, 'chambres', 'chambres.php'),
(6, 'client', 'client.php'),
(7, 'commentaire', 'commentaire.php'),
(8, 'excursion', 'excursion.php'),
(9, 'notation', 'notation.php'),
(10, 'participation', 'participation.php'),
(11, 'reservation', 'reservation.php');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_atelier_FK` FOREIGN KEY (`id_atelier`) REFERENCES `atelier` (`id_atelier`) ON DELETE CASCADE,
  ADD CONSTRAINT `commentaire_client_FK` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE;

--
-- Contraintes pour la table `notation`
--
ALTER TABLE `notation`
  ADD CONSTRAINT `notation_atelier_FK` FOREIGN KEY (`id_atelier`) REFERENCES `atelier` (`id_atelier`) ON DELETE CASCADE,
  ADD CONSTRAINT `notation_client_FK` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE;

--
-- Contraintes pour la table `participation`
--
ALTER TABLE `participation`
  ADD CONSTRAINT `atelier_atelier_FK` FOREIGN KEY (`id_atelier`) REFERENCES `atelier` (`id_atelier`) ON DELETE CASCADE,
  ADD CONSTRAINT `client_participation_FK` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE;

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `chambre_reservation_FK` FOREIGN KEY (`id_chambre`) REFERENCES `chambres` (`id_chambre`) ON DELETE CASCADE,
  ADD CONSTRAINT `client_reservation_FK` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
