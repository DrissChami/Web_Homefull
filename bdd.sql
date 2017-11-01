-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 26 Mai 2017 à 08:05
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `form`
--

CREATE TABLE `form` (
  `name` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `mail` varchar(500) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `form`
--

INSERT INTO `form` (`name`, `address`, `mail`, `amount`) VALUES
('bITE', 'GGG', 'BITE@btie.com', 4),
('Drissou', 'hhh', 'chami.driss@gmail.com', 100),
('Amine', 'loj', 'ded@efrei.fr', 100),
('Ghali', 'ggg', 'BITE@btie.com', 1),
('Abdul ', 'Bukit Jalan 2, Selangor', 'abdul@apu.fr', 290),
('Ilyes', '5 Square des Aulnes', 'ilyes@mail.com', 400),
('Akli', '110 JALAN BUKIT, MALAYSIA', 'akli@apu.com', 300);

-- --------------------------------------------------------

--
-- Structure de la table `information`
--

CREATE TABLE `information` (
  `gender` char(1) NOT NULL,
  `color_top` varchar(20) NOT NULL,
  `color_bottom` varchar(20) NOT NULL,
  `tall` int(200) NOT NULL,
  `build` varchar(20) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `information`
--

INSERT INTO `information` (`gender`, `color_top`, `color_bottom`, `tall`, `build`, `id`) VALUES
('F', 'White', 'Brown', 6, 'Skinny', 1),
('F', 'White', 'Brown', 6, 'Skinny', 2);

-- --------------------------------------------------------

--
-- Structure de la table `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `markers`
--

INSERT INTO `markers` (`id`, `lat`, `lng`) VALUES
(1, -33.861034, 151.171936);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`name`);

--
-- Index pour la table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
