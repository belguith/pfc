-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 12 Mai 2015 à 15:55
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id_article`, `lilbelle_article`, `description_article`, `image_article`, `date_article`) VALUES
(4, 'test3', 'from', 'cpanel', '2015-05-11');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `atelier`
--

INSERT INTO `atelier` (`id_atelier`, `nom_atelier`, `prix_atelier`, `nbr_max`, `nbr_inscrit`, `date_atelier`, `description_atelier`, `note_atelier`, `image_atelier`, `type_atelier`) VALUES
(3, 'gkhik', '2000000', 20, 4444, '0000-00-00 00:00:00', 'atelier tfatta9\r\n', '15', 'jfgujuj', 'culinaireeeeeee');

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

--
-- Contenu de la table `chambres`
--

INSERT INTO `chambres` (`id_chambre`, `nom_chambre`, `type_chambre`, `image1_chambre`, `image2_chambre`, `image3_chambre`) VALUES
(1, 'bit baya', 2, 'url1', 'url2', 'url3'),
(2, 'bit el bay', 4, '8520', '987654', '8520');

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
  `code` varchar(32) NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`id_client`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `mail_client`, `tel_client`, `cin_client`, `image_client`, `login`, `motdepasse`, `role`, `code`, `active`) VALUES
(1, 'admin', 'admin', 'admin@aaaa', '85208520', '85208520', '', 'admin', 'admin', 1, '', 1);

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

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `id_atelier`, `id_client`, `contenu`, `date_publication`) VALUES
(0, 3, 1, '8520', '2015-05-12 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `excursion`
--

CREATE TABLE IF NOT EXISTS `excursion` (
  `id_excursion` int(11) NOT NULL AUTO_INCREMENT,
  `destination_excursion` varchar(50) NOT NULL,
  `lilbelle_excursion` varchar(100) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `imge_excursion` varchar(200) NOT NULL,
  PRIMARY KEY (`id_excursion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `excursion`
--

INSERT INTO `excursion` (`id_excursion`, `destination_excursion`, `lilbelle_excursion`, `date_debut`, `date_fin`, `imge_excursion`) VALUES
(2, 'sousse', 'plage', '2015-09-05', '2015-10-20', 'url');

-- --------------------------------------------------------

--
-- Structure de la table `info_dartak`
--

CREATE TABLE IF NOT EXISTS `info_dartak` (
  `nom` varchar(20) NOT NULL,
  `adresse1` varchar(100) NOT NULL,
  `adresse2` varchar(100) NOT NULL,
  `adresse3` varchar(100) NOT NULL,
  `tel_rensaignement` varchar(20) NOT NULL,
  `tel_jour` varchar(20) NOT NULL,
  `tel_soir` varchar(20) NOT NULL,
  `tel_hebergement` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mailing_list`
--

CREATE TABLE IF NOT EXISTS `mailing_list` (
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mesage_client`
--

CREATE TABLE IF NOT EXISTS `mesage_client` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `num_tel` int(11) NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id_message`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='num tel message' AUTO_INCREMENT=1 ;

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

--
-- Contenu de la table `participation`
--

INSERT INTO `participation` (`id_client`, `id_atelier`, `date_participation`) VALUES
(1, 3, '2015-02-07');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id_client` int(11) NOT NULL DEFAULT '0',
  `id_chambre` int(11) NOT NULL DEFAULT '0',
  `date_reservation` date NOT NULL DEFAULT '0000-00-00',
  `date_arrive` date NOT NULL,
  `date_depart` date NOT NULL,
  PRIMARY KEY (`id_client`,`id_chambre`,`date_reservation`),
  KEY `chambre_reservation_FK` (`id_chambre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`id_client`, `id_chambre`, `date_reservation`, `date_arrive`, `date_depart`) VALUES
(1, 1, '2015-01-28', '2015-01-28', '2015-01-28'),
(1, 1, '2015-05-12', '2015-05-28', '2015-05-31'),
(1, 2, '2015-05-12', '2015-05-13', '2015-05-14');

-- --------------------------------------------------------

--
-- Structure de la table `site_map`
--

CREATE TABLE IF NOT EXISTS `site_map` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table_name` varchar(20) NOT NULL,
  `page_link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `site_map`
--

INSERT INTO `site_map` (`id`, `table_name`, `page_link`) VALUES
(1, 'article', 'article/list.php'),
(2, 'atelier', 'atelier/list.php'),
(3, 'chambres', 'chambres/list.php'),
(6, 'client', 'clients/list.php'),
(7, 'commentaire', 'commentaires/list.php'),
(8, 'excursion', 'excursion/list.php'),
(9, 'notation', 'notation.php'),
(10, 'participation', 'particiapation/list.php'),
(11, 'reservation', 'reservation/list.php');

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
