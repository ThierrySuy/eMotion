-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 28 Août 2017 à 07:16
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
(25, 9, 'KV1PMJKDINCzel', '2017-08-29', '2017-08-31', 1, 1);

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
(10, 'admin', 'admin@admin.fr', 'Admin', 'Admin', '12 rue des admin', 75014, 'Paris', '0123456789', 'admin91', 4, 10);

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
('0kbqdYpEjM0KNo', 'RENAULT', 'ZOEE', 'Gris', 'OF-899-YE', 2, '17', 2013, '2015-07-04', '14483', '23893', 1),
('15fg87gds4sd4', 'Peugeot', '408', 'rouge', 'HU-496-LV', 2, '50', 2015, '2017-07-12', '16500', '15000', 2),
('1HGCM82633A004352', 'Ferrari', '458 italia', 'rouge', 'HU-496-LV', 2, '150', 2008, '2014-07-20', '1500000', '3000', 2),
('4785ETUI', 'Renault', 'Kadjar', 'Bleu', 'PM-789-PO', 2, '150', 2017, '2017-07-22', '150000', '150', 1),
('8ONgNAF3VavavO', 'BMW', 'I3', 'NOIRE', 'YF-899-YE', 1, '25', 2015, '2017-01-20', '10000', '6455', 3),
('8pdmNAF3VavavO', 'porsche', 'Cayen', 'ROUGE', 'ML-488-DF', 2, '120', 2015, '2017-08-16', '100000', '1500', 3),
('ANOnQnqty2KxqX', 'NISSAN', 'LEAF', 'Blanc', 'EF-219-DU', 2, '15', 2010, '2016-06-14', '15483', '15', 1),
('BUFCRG09JyTWVA', 'BMW', 'W EVOLUTION', 'Noir', 'RK-895-AA', 1, '25', 2016, '2016-07-04', '10293', '3672', 2),
('GGGK796', 'Renault', 'Clio', 'Bleu', 'AN-090-EL', 2, '42', 2016, '2016-07-06', '6000', '156', 2),
('GheleBUzODaXeL', 'PEUGEOT', 'METROPOLIS ACTIVE', 'Blanc', 'ZK-892-AA', 1, '15', 2016, '2016-07-04', '8059', '2678', 1),
('KV1PMJKDINCzel', 'TESLA', 'MODEL S', 'Gris', 'AA-896-YT', 2, '70', 2016, '2016-07-04', '89678', '16432', 3);

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
(2, 'Lyon'),
(3, 'Marseille');

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
  MODIFY `id_location` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
