-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 09 juin 2017 à 18:49
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
  `etat` float NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idMaison` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `actionneur`
--

INSERT INTO `actionneur` (`ID`, `idSalle`, `etat`, `type`, `idMaison`) VALUES
(2, 15, 0, 'Lumiere', 2);

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
(1, 3, 6, 'Luminosité', 0, 0, NULL),
(2, 2, 5, 'Présence', 0, 0, NULL),
(3, 2, 5, 'Luminosité', 0, 0, NULL),
(4, 2, 5, 'Température', 0, 0, NULL),
(5, 2, 5, 'Luminosité', 0, 0, NULL),
(6, 3, 7, 'Présence', 0, 0, NULL),
(7, 3, 7, 'Luminosité', 0, 0, NULL),
(8, 3, 7, 'Température', 0, 0, NULL),
(12, 2, 11, 'Luminosité', 0, 0, NULL),
(13, 2, 11, 'Vidéosurveillance', 0, 0, NULL),
(14, 8, 14, 'Luminosité', 0, 0, NULL),
(15, 2, 11, 'Présence', 0, 0, NULL),
(16, 23, 30, 'Présence', 0, 0, NULL),
(17, 23, 30, 'Luminosité', 0, 0, NULL),
(18, 2, 15, 'Présence', 0, 0, NULL),
(20, 2, 15, 'Luminosité', 0, 0, NULL),
(21, 2, 15, 'Luminosité', 0, 0, NULL);

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
  `nom` text COLLATE utf8_unicode_ci NOT NULL,
  `idGroupe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `habitation`
--

INSERT INTO `habitation` (`ID`, `adresse`, `superficie`, `nom`, `idGroupe`) VALUES
(2, 'Paris', 420, 'Maison', 1),
(8, 'fds', 0, 'fds', 2),
(9, 'aj', 0, 'aj', 2),
(11, 'fqs', 0, 'ff', 2),
(12, 'a', 0, 'AAA', 2),
(13, 'aj', 0, 'a', 2),
(14, 'zfa', 0, 'asf', 2),
(15, 'faf', 0, 'asfa', 2),
(16, 'dz', 0, 'ACID', 2),
(17, 'sk', 0, 'bc', 2),
(18, 's', 0, 's', 2),
(19, 'v', 0, 'v', 2),
(20, 'd', 0, 's', 2),
(21, 'dsfs', 0, 'dsgq', 2),
(22, 'dsfs', 0, 'fdgsf', 2),
(23, 'aj', 0, 'ACID', 1),
(24, '12 rue des ..', 230, 'Paris', 1);

-- --------------------------------------------------------

--
-- Structure de la table `messageext`
--

CREATE TABLE `messageext` (
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` text NOT NULL,
  `tel` int(11) NOT NULL,
  `objet` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `messageint`
--

CREATE TABLE `messageint` (
  `idDest` int(11) NOT NULL,
  `idSend` int(11) NOT NULL,
  `objet` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `ID` int(11) NOT NULL,
  `lu` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messageint`
--

INSERT INTO `messageint` (`idDest`, `idSend`, `objet`, `message`, `date`, `ID`, `lu`) VALUES
(2, 2, 'Salam', 'Salami', '0000-00-00', 34, 0),
(2, 2, 'Réponse à : Salam', ' HEOHOHOHO\r\n __________ \r\n \r\n Message précédent : \r\n Salami', '0000-00-00', 35, 1),
(2, 2, 'Réponse à : Salam ', ' \r\n __________ \r\n \r\n Message précédent : \r\n Salami ', '0000-00-00', 36, 0),
(2, 2, 'Réponse à : Salam', ' \r\n __________ \r\n \r\n Message précédent : \r\n Salami', '0000-00-00', 37, 0),
(2, 2, 'Réponse à : Salam', 'Message précédent : Salami', '0000-00-00', 38, 0),
(2, 2, 'Réponse à : Salam', ' __________ \r\n \r\n Message précédent :Salami', '0000-00-00', 39, 1),
(2, 2, 'Réponse à : Salam', ' \r\n __________ \r\n \r\n Message précédent : \r\n Salami', '0000-00-00', 40, 1),
(2, 2, 'Réponse à : Salam', ' \r\n __________ \r\n \r\n Message précédent : \r\n Salami', '0000-00-00', 41, 0),
(2, 2, 'Réponse à : Salam', ' \r\n __________ \r\n \r\n Message précédent : \r\n Salami', '0000-00-00', 42, 1),
(1, 1, 'gdgl', 'bonjour', '0000-00-00', 44, 1),
(8, 1, 'Bonjour', 'eele', '0000-00-00', 45, 1);

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
(3, 1, 'salle de bain'),
(4, 1, 'minibloc'),
(6, 3, 'bnr'),
(7, 3, 'Salle de bain'),
(12, 8, 'ar'),
(13, 9, 'aegz'),
(14, 8, 'bbb'),
(15, 2, 'AAA'),
(16, 9, 'zrarar'),
(18, 8, 'razrazrazrg'),
(20, 8, 'fds'),
(21, 8, 'sfq'),
(23, 9, 'z'),
(24, 9, 'z'),
(25, 11, 'z'),
(26, 11, 's'),
(27, 11, 'v'),
(29, 9, 'dfqfq'),
(30, 23, 'dgdg');

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
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'utilisateur principal',
  `idGroupe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`identifiant`, `mdp`, `id`, `tel`, `email`, `nom`, `prenom`, `status`, `idGroupe`) VALUES
('alain', '0cc175b9c0f1b6a831c399e269772661', 1, '158885554', 'zaea.eaz@ere.fr', 'alain', 'al', 'utilisateur principal', 1),
('tibo', '92eb5ffee6ae2fec3ad71c777531578f', 2, '01', 'tibo@tibo', 'tibo', 'tibo', 'utilisateur principal', 2),
('tebbs', '92eb5ffee6ae2fec3ad71c777531578f', 3, '', '', '', '', 'Enfant', 3),
('DanielGuichard', '4a8a08f09d37b73795649038408b5f33', 7, '0402030343', 'thibault@gmail.com', 'Guichard', 'Daniel', 'utilisateur principal', 7),
('admin', '21232f297a57a5a743894a0e4a801fc3', 8, '0626742891', 't@t.com', 'admin', 'admin', 'admin', 8);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actionneur`
--
ALTER TABLE `actionneur`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

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
-- Index pour la table `messageint`
--
ALTER TABLE `messageint`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `idMessage` (`ID`);

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
-- AUTO_INCREMENT pour la table `actionneur`
--
ALTER TABLE `actionneur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `capteur`
--
ALTER TABLE `capteur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `habitation`
--
ALTER TABLE `habitation`
  MODIFY `ID` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `messageint`
--
ALTER TABLE `messageint`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
