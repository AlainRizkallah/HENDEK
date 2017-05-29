-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 21 mai 2017 à 19:50
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `domotech`
--

-- --------------------------------------------------------

--
-- Structure de la table `actionneur`
--

CREATE TABLE `actionneur` (
  `ID` int(11) NOT NULL,
  `idSalle` int(11) NOT NULL,
  `idCapteur` int(11) NOT NULL,
  `etat` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `ID` int(10) NOT NULL,
  `mdp` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

CREATE TABLE `capteur` (
  `ID` int(11) NOT NULL,
  `idHabitation` int(11) NOT NULL,
  `idSalle` int(11) NOT NULL,
  `type` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `valeur` float NOT NULL,
  `etat` tinyint(1) NOT NULL DEFAULT '0',
  `temps` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`ID`, `idHabitation`, `idSalle`, `type`, `valeur`, `etat`, `temps`) VALUES
(7, 5, 9, 'Présence', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `comportement`
--

CREATE TABLE `comportement` (
  `idComportement` int(11) NOT NULL,
  `data` text NOT NULL,
  `idActionneur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `données`
--

CREATE TABLE `données` (
  `idTable` int(11) NOT NULL,
  `data` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `habitation`
--

CREATE TABLE `habitation` (
  `ID` int(40) NOT NULL,
  `adresse` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `superficie` int(40) NOT NULL,
  `nom` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `habitation`
--

INSERT INTO `habitation` (`ID`, `adresse`, `superficie`, `nom`) VALUES
(5, '10 rue de Jupiter, Mars', 120, 'Home');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `texte` text NOT NULL,
  `date` date NOT NULL,
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `idSender` int(11) NOT NULL,
  `idDest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

CREATE TABLE `messagerie` (
  `idSender` int(11) NOT NULL,
  `idDest` int(11) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `ID` int(11) NOT NULL,
  `idHabitation` int(11) NOT NULL,
  `nom` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`ID`, `idHabitation`, `nom`) VALUES
(9, 5, 'Chambre');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `identifiant` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `tel` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'normal'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`identifiant`, `mdp`, `id`, `tel`, `email`, `nom`, `prenom`, `status`) VALUES
('alain', '0cc175b9c0f1b6a831c399e269772661', 0, '4568', 'alain.riz@isep.fr', 'alain', '', 'normal');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Index pour la table `habitation`
--
ALTER TABLE `habitation`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `identifiant` (`identifiant`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `capteur`
--
ALTER TABLE `capteur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `habitation`
--
ALTER TABLE `habitation`
  MODIFY `ID` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
