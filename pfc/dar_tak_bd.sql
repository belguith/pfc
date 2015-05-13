-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 13 Mai 2015 à 00:31
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `atelier`
--

INSERT INTO `atelier` (`id_atelier`, `nom_atelier`, `prix_atelier`, `nbr_max`, `nbr_inscrit`, `date_atelier`, `description_atelier`, `note_atelier`, `image_atelier`, `type_atelier`) VALUES
(3, 'Traite des vaches', '20', 20, 10, '2015-05-11 00:00:00', 'Les inscrits à cet atelier peuvent apprendre à traire les vaches . Le lait peut ensuite servir à faire du fromage.', '10', 'img/traire_vache.jpg', 'agricole'),
(4, 'Atelier Confiture', '10', 5, 5, '2015-05-11 00:00:00', 'Un chef-pâtissier professionnel vous conseille à chaque étape de la confection et une fois votre recette terminée, vous repartez avec.', '5', 'img/confiture.jpg', 'agricole'),
(5, 'Fabrication Couscous', '10', 5, 2, '2015-05-11 10:30:00', 'Cet atelier permet aux inscrits d''apprendre à confectionner le couscous Tunisien traditionnel.', '10', 'img/couscous.jpg', 'agricole'),
(6, 'Atelier Labour', '5', 20, 10, '2015-05-11 10:30:00', 'Le labour est un travail agricole qui consiste à retourner une terre non cultivée en vue d''y déposer des semences ou des graines.', '8', 'img/labour.jpg', 'agricole'),
(7, 'Le couscous', '5', 5, 2, '2015-05-11 10:30:00', 'Le couscous est un plat berbère à base de semoule de blé dur.Le plat de base consiste en l''association du couscous (céréale) et des pois chiches (légumineuses) mais sans viande, la légumineuse jouant ce rôle. Le couscous est servi avec de la viande et un ragoût de légumes.', '5', 'img/cous.jpg', 'culinaire'),
(8, 'La mloukhyia', '5', 5, 2, '2015-05-11 00:00:00', 'La mloukhiya est un plat populaire du Maghreb.Il s''agit d''un ragoût de viande de bœuf ou d''agneau cuisiné dans une sauce riche à base de corète potagère ou jute rouge. Les feuilles de cette plante sont séchées et réduites en une poudre de couleur verte, facile à conserver.', '8', 'img/mloukhia.jpg', 'culinaire'),
(9, 'Lablabi', '10', 5, 5, '2015-05-11 10:30:00', 'Le lablabi est un plat populaire en Tunisie, préparé à base de pois chiches, d’ail, de cumin ou de carvi, d’huile d’olive, de sel, de poivre et d’harissa. L''appellation vient du turc leblebi, signifiant pois chiches grillés.', '10', 'img/lablebi.jpg', 'culinaire'),
(10, 'Le brik tunsien', '5', 10, 10, '2015-05-11 12:00:00', 'La brik est une entrée dans la gastronomie africaine du nord, préparée à partir d''une feuille de pâte très fine (malsouka) faite de farine et de semoule de blé.Sa farce peut être composée d''un oeuf , de la viande de boeuf hachée ou du poulet.', '8', 'img/brik.jpg', 'culinaire'),
(11, 'Atelier de poterie', '15', 20, 8, '2015-05-11 00:00:00', 'Considérez cet art ancestral qu''est la céramique et entrez dans la danse des potiers ... Faites-vous confiance, appréciez ce contact avec la terre et lancez-vous ... Faites la parler, du bout des doigts ou à pleines mains ... et laissez le volume prendre forme. Modelez, façonnez, repoussez, tirez, battez, roulez, retirez, ajoutez, creusez, ajustez, sculptez, lissez .', '9', 'img/poterie.jpg', 'artisanal'),
(12, 'Atelier de tissage', '10', 20, 10, '2015-05-11 00:00:00', 'cet atelier sera dirigé par des tisserands et femmes qui vous présenteront et feront participer aux différentes étapes de la préparation de la laine (lavage, cardage, filature, filage et rouage) et du tissage sur métiers', '6', 'img/tissage.jpg', 'artisanal'),
(13, 'Atelier de Vannerie', '10', 20, 6, '2015-05-11 10:30:00', 'Un vannier explique aux participants comment fabriquer des vans, corbeilles et autres. Une expérience inédite où le gestuel et le visuel dominent la communication avec un artisan qui ne maîtrise outre sa langue maternelle que l’art de la vannerie.', '8', 'img/vannerie.jpg', 'artisanal'),
(14, 'Atelier de Mechmoum', '15', 20, 6, '2015-05-11 12:00:00', 'Le Machmoum n’est autre qu’un bouquet de fleurs de jasmin, ou de fell, qui a subi plusieurs étapes de fabrication. En effet, la culture est d’abord réalisée en famille.', '5', 'img/machmoum-tunisie.jpg', 'artisanal');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `mail_client`, `tel_client`, `cin_client`, `image_client`, `login`, `motdepasse`, `role`, `code`, `active`) VALUES
(1, 'admin', 'admin', 'admin@aaaa', '85208520', '85208520', '', 'admin', 'admin', 1, '', 1),
(2, 'nom', 'prenom', 'mail@email.tn', '85208520', '85208520', 0x75726c, 'nomprenom', 'motdepasse', 1, '8520852085208520', 0);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `id_atelier` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `contenu` varchar(1000) NOT NULL,
  `date_publication` datetime NOT NULL,
  PRIMARY KEY (`id_client`,`id_atelier`,`id_commentaire`),
  KEY `commentaire_atelier_FK` (`id_atelier`),
  KEY `id_commentaire` (`id_commentaire`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `id_atelier`, `id_client`, `contenu`, `date_publication`) VALUES
(1, 3, 1, '8520', '2015-05-12 00:00:00'),
(2, 4, 1, 'atelier', '2015-05-12 00:00:00'),
(5, 3, 2, '8520', '2015-05-12 00:00:00'),
(4, 4, 2, 'atelier', '2015-01-01 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `excursion`
--

INSERT INTO `excursion` (`id_excursion`, `destination_excursion`, `lilbelle_excursion`, `date_debut`, `date_fin`, `imge_excursion`) VALUES
(1, 'Haouaria', 'El Haouaria  est une ville tunisienne situee a l''extremite nord-est du cap Bon, a l''entree du golfe ', '2015-05-05', '2015-05-15', 'http://media-cdn.tripadvisor.com/media/photo-s/01/8a/97/41/el-haouaria.jpg'),
(2, 'Kelibia', 'Kelibia, est une ville cotiere du Nord-Est de la Tunisie. Situee a la pointe de la peninsule du cap ', '0000-00-00', '0000-00-00', 'http://media-cdn.tripadvisor.com/media/photo-s/03/9f/22/de/mamounia-hotel.jpg'),
(3, 'Korbous', 'Korbous Situee dans la région du cap Bon , cette petite ville borde le golfe de Tunis et se situe à ', '2015-05-26', '2015-05-30', 'http://www.cyberesa.info/cr.fwk/images/hotels/Section-255-20091216-020836.jpg'),
(4, 'port des princes', 'Port Prince est un site magnifique du Cap Bon, avec une plage magnifique et de bons parcours de rand', '2015-05-27', '2015-05-26', 'https://farm3.staticflickr.com/2616/4086408143_517ab243d2_o.jpg');

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
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `info_dartak`
--

INSERT INTO `info_dartak` (`nom`, `adresse1`, `adresse2`, `adresse3`, `tel_rensaignement`, `tel_jour`, `tel_soir`, `tel_hebergement`, `email`) VALUES
('dartak', 'En face du clubBen de Beni Khalled.', '2 KM avant l''entrée de la ville.', 'A coté de FirmetSalouh', '+216 71585742', '+216 71585748', '+216 71585747', '+216 71585741', 'maisondartak@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `mailing_list`
--

CREATE TABLE IF NOT EXISTS `mailing_list` (
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `mailing_list`
--

INSERT INTO `mailing_list` (`email`) VALUES
('belguith.chachia@gmail.com');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='num tel message' AUTO_INCREMENT=5 ;

--
-- Contenu de la table `mesage_client`
--

INSERT INTO `mesage_client` (`id_message`, `nom`, `prenom`, `email`, `num_tel`, `contenu`) VALUES
(1, 'g', 'g', 'gg', 25432543, 'jilj'),
(2, 'g', 'g', 'ool', 25432543, 'jilj'),
(3, 'kmar', 'bel', 'k', 20545845, 'lou'),
(4, 'xcbxb', 'bxcb', 'cxb', 20181830, 'bcxb');

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
(1, 3, '2015-02-02'),
(1, 3, '2015-02-07'),
(1, 4, '2015-02-05'),
(2, 4, '2015-04-04');

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
(2, 2, '2005-01-01', '2005-01-02', '2005-01-07');

-- --------------------------------------------------------

--
-- Structure de la table `site_map`
--

CREATE TABLE IF NOT EXISTS `site_map` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `table_name` varchar(20) NOT NULL,
  `page_link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

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
(11, 'reservation', 'reservation/list.php'),
(12, 'mailing_list', 'mailing_list/list.php'),
(13, 'info_dartak', 'info_dartak/list.php'),
(14, 'message_client', 'message_client/list.php');

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
