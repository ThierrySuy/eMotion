-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 21 Juillet 2017 à 14:27
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
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `telephone` int(10) NOT NULL,
  `numero_permis` varchar(9) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mdp` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `date_naissance`, `adresse`, `telephone`, `numero_permis`, `mail`, `mdp`) VALUES
(1, 'toto', 'toto', '2016-11-04', '45 deuii zpjohizef 8961 jfzke', 123456789, '012kjrtui', 'toto@toto.com', 'toto'),
(2, 'Toto', 'Tata', '1995-07-21', 'zeagzeg ze gzegzeze', 144556655, 'zgzegz84', 'agazega@gmail.com', 'zegze'),
(3, 'bbbbb', 'bbbbb', '1995-02-05', 'bbbbbbbb', 199999999, 'bbbbbb', 'bbb@gmail.com', 'aaaa'),
(4, 'ttttttt', 'ttttttttt', '1990-06-06', 'tttttttttttttt', 199999999, 't89t89t89', 'tttttttt@gmail.com', 'ttt');

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE `location` (
  `id_location` int(11) NOT NULL,
  `nom_loc` varchar(100) NOT NULL,
  `id_client` int(11) NOT NULL,
  `nom_client` varchar(100) NOT NULL,
  `id_vehicule` int(11) NOT NULL,
  `numeroserie` varchar(17) NOT NULL,
  `plaque` varchar(9) NOT NULL,
  `adresse_client` varchar(100) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id_vehicule` int(11) NOT NULL,
  `marque` varchar(100) NOT NULL,
  `modele` varchar(100) NOT NULL,
  `numeroserie` varchar(17) NOT NULL,
  `couleur` varchar(50) NOT NULL,
  `plaque` varchar(9) NOT NULL,
  `nombre_km` float NOT NULL,
  `date_achat` date NOT NULL,
  `prix_achat` float NOT NULL,
  `nombre_passager` int(11) NOT NULL,
  `autonomie` float NOT NULL,
  `ville` varchar(25) NOT NULL,
  `type_vehicule` varchar(20) NOT NULL,
  `img` varchar(50) NOT NULL,
  `date_prise` date DEFAULT NULL,
  `date_rendu` date DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`id_vehicule`, `marque`, `modele`, `numeroserie`, `couleur`, `plaque`, `nombre_km`, `date_achat`, `prix_achat`, `nombre_passager`, `autonomie`, `ville`, `type_vehicule`, `img`, `date_prise`, `date_rendu`, `description`) VALUES
(1, 'bmw', 'serie 5', 'aaaa5555', 'noir', 'bbbb5555', 50000, '2017-07-20', 100, 5, 10, 'paris', 'coupé', 'Lien image.jpg', NULL, NULL, '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Index pour la table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id_location`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id_vehicule`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `location`
--
ALTER TABLE `location`
  MODIFY `id_location` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id_vehicule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
