-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 30 Août 2017 à 09:37
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `emotion`
--

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE `location` (
  `id_location` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `numero_serie` varchar(20) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `etat_location` int(1) NOT NULL,
  `duree_jour` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `location`
--

INSERT INTO `location` (`id_location`, `id_user`, `numero_serie`, `date_debut`, `date_fin`, `etat_location`, `duree_jour`) VALUES
(19, 8, '0kbqdYpEjM0KNo', '2017-08-27', '2017-08-28', 1, 1),
(18, 8, '0kbqdYpEjM0KNo', '2017-08-30', '2017-08-31', 1, 1),
(17, 9, 'ANOnQnqty2KxqX', '2017-08-01', '2017-08-09', 2, 9),
(16, 6, '15fg87gds4sd4', '2017-08-31', '2017-08-31', 1, 1),
(15, 6, '1HGCM82633A004352', '2017-09-13', '2017-09-23', 1, 1),
(14, 6, '15fg87gds4sd4', '2017-08-26', '2017-08-30', 1, 1),
(20, 8, '1HGCM82633A004352', '2017-08-27', '2017-08-28', 1, 1),
(23, 9, '1HGCM82633A004352', '2017-08-29', '2017-08-31', 1, 1),
(25, 9, 'KV1PMJKDINCzel', '2017-08-29', '2017-08-31', 1, 1),
(26, 1, 'ZEIGH515ZEG', '2017-08-17', '2017-08-31', 1, 14),
(27, 9, '0kbqdYpEjM0KNo', '2017-09-30', '2017-10-05', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `type_vehicule`
--

CREATE TABLE `type_vehicule` (
  `id_type_vehicule` int(5) NOT NULL,
  `categorie` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type_vehicule`
--

INSERT INTO `type_vehicule` (`id_type_vehicule`, `categorie`) VALUES
(1, 'scooter'),
(2, 'voiture');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `code_postal` int(5) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `numero_permis` varchar(100) NOT NULL,
  `role` int(1) NOT NULL,
  `point_fidelite` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `pass`, `mail`, `nom`, `prenom`, `adresse`, `code_postal`, `ville`, `telephone`, `numero_permis`, `role`, `point_fidelite`) VALUES
(9, '123456', 'riesco.maxime@gmail.com', 'Riesco', 'Maxime', '37 rue marcelin berthelot', 91330, 'Yerres', '0699728086', '0124hoodeh', 2, 425),
(10, 'admin', 'admin@admin.fr', 'Admin', 'Admin', '12 rue des admin', 75014, 'Paris', '0123456789', 'admin91', 4, 10),
(11, 'aaaa', 'suy.thierry21@gmail.com', 'Suy', 'Thierry', '2 Rue test', 94380, 'Bonneuil', '0144556655', 'ZG4154', 2, 10);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `numero_serie` varchar(20) NOT NULL,
  `marque` varchar(100) NOT NULL,
  `modele` varchar(100) NOT NULL,
  `couleur` varchar(50) NOT NULL,
  `immatriculation` varchar(20) NOT NULL,
  `id_type_vehicule` int(5) NOT NULL,
  `prix` varchar(10) NOT NULL,
  `annee` int(4) NOT NULL,
  `date_achat` date NOT NULL,
  `prix_achat` varchar(50) NOT NULL,
  `kilometres` varchar(10) NOT NULL,
  `ville` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`numero_serie`, `marque`, `modele`, `couleur`, `immatriculation`, `id_type_vehicule`, `prix`, `annee`, `date_achat`, `prix_achat`, `kilometres`, `ville`) VALUES
('0kbqdYpEjM0KNo', 'RENAULT', 'ZOEE', 'Gris', 'AA-001-AA', 2, '75', 2013, '2015-07-04', '14000', '800', 1),
('15fg87gds4sd4', 'BeeBee', 'XS', 'Rouge', 'AA-001-BB', 2, '75', 2015, '2017-07-12', '23880', '800', 2),
('1HGCM82633A004352', 'KIA', 'SOUL EV', 'Noir', 'AA-001-CC', 2, '250', 2008, '2014-07-20', '20000', '800', 2),
('4785ETUI', 'BMW', 'i8', 'Noir/Bleu', 'AA-001-DD', 2, '300', 2017, '2017-07-22', '150000', '800', 1),
('8ONgNAF3VavavO', 'BMW', 'i3', 'Gris', 'AA-001-EE', 2, '300', 2015, '2017-01-20', '30000', '800', 3),
('8pdmNAF3VavavO', 'BMW', 'C EVOLUTION', 'Noir', 'AA-001-FF', 1, '500', 2015, '2017-08-16', '15000', '800', 3),
('ANOnQnqty2KxqX', 'NISSAN', 'LEAF', 'Blanc', 'AA-001-GG', 2, '90', 2010, '2016-06-14', '16000', '800', 1),
('BUFCRG09JyTWVA', 'PEUGEOT', 'iOn', 'Noir', 'LP-080-MR', 2, '85', 2016, '2016-07-04', '14000', '800', 2),
('GGGK796', 'TESLA', 'MODEL S', 'Bleu', 'LP-091-MR', 2, '200', 2016, '2016-07-06', '135000', '800', 2),
('GheleBUzODaXeL', 'ZERO MOTORCYCLES', 'Zero DS', 'Blanc', 'JR-913-NR', 1, '150', 2016, '2016-07-04', '8000', '800', 1),
('KV1PMJKDINCzel', 'MISTUBISHI', 'I-MiEV', 'Gris', 'MR-227-LP', 1, '100', 2016, '2016-07-04', '8000', '800', 3);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id_ville` int(1) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`id_ville`, `nom`) VALUES
(1, 'Paris'),
(2, 'Lyon');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id_location`);

--
-- Index pour la table `type_vehicule`
--
ALTER TABLE `type_vehicule`
  ADD PRIMARY KEY (`id_type_vehicule`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`numero_serie`),
  ADD UNIQUE KEY `id_vehicule` (`numero_serie`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `location`
--
ALTER TABLE `location`
  MODIFY `id_location` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
