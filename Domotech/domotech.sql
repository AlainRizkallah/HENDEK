-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 22 Juin 2017 à 10:33
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Contenu de la table `actionneur`
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
-- Structure de la table `capteffect`
--

CREATE TABLE `capteffect` (
  `capteurs` text NOT NULL,
  `effecteurs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `capteffect`
--

INSERT INTO `capteffect` (`capteurs`, `effecteurs`) VALUES
('Vidéosurveillance', 'non'),
('non', 'Lumière');

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
-- Contenu de la table `capteur`
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
-- Contenu de la table `habitation`
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
(23, 'aj', 0, 'ACID', 1);

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
  `date` datetime NOT NULL,
  `ID` int(11) NOT NULL,
  `lu` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `messageext`
--

INSERT INTO `messageext` (`nom`, `prenom`, `mail`, `tel`, `objet`, `message`, `date`, `ID`, `lu`) VALUES
('HENTGES', 'Thibault', 'tibo.ngs@live.fr', 2147483647, 'TEST', 'TESTTTTTT tetststs stdts', '2017-06-12 11:01:51', 1, 0),
('Hentges', 'Thibault', 'tibo.ngs@live.fr', 2147483647, 'agdsg', 'gsdgsgs', '2017-06-12 11:06:00', 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `messageint`
--

CREATE TABLE `messageint` (
  `idDest` int(11) NOT NULL,
  `idSend` int(11) NOT NULL,
  `objet` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  `ID` int(11) NOT NULL,
  `lu` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `messageint`
--

INSERT INTO `messageint` (`idDest`, `idSend`, `objet`, `message`, `date`, `ID`, `lu`) VALUES
(8, 8, 'bfb', 'vbdb', '2017-06-12 11:04:43', 47, 0),
(8, 8, 'gsdgs', 'dsg', '2017-06-12 11:04:48', 48, 1),
(8, 8, 'Réponse à : gsdgs', ' \r\n __________ \r\n \r\n Message précédent : \r\n dsg', '2017-06-12 11:14:29', 49, 0);

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `titre` text NOT NULL,
  `contenu` text NOT NULL,
  `date` datetime NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`titre`, `contenu`, `date`, `ID`) VALUES
('NEWS 1 ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu tempor odio, varius fringilla sapien. Suspendisse ex augue, sodales quis sollicitudin ut, dictum at quam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras vel vestibulum leo. Nullam ante dui, iaculis vitae varius vel, suscipit ut turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque consequat neque vehicula tincidunt rutrum. Proin nunc ligula, vestibulum ac tellus et, venenatis pellentesque nulla. Aenean finibus est nec dapibus sollicitudin. Phasellus diam nisl, scelerisque eu dapibus et, dapibus sit amet eros. Donec euismod nibh est, at ornare massa pellentesque ut. Vivamus nec maximus dui, et sodales dolor. Ut euismod efficitur purus at congue.\r\n        ', '0000-00-00 00:00:00', 1),
('NEWS 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu tempor odio, varius fringilla sapien. Suspendisse ex augue, sodales quis sollicitudin ut, dictum at quam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras vel vestibulum leo. Nullam ante dui, iaculis vitae varius vel, suscipit ut turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque consequat neque vehicula tincidunt rutrum. Proin nunc ligula, vestibulum ac tellus et, venenatis pellentesque nulla. Aenean finibus est nec dapibus sollicitudin. Phasellus diam nisl, scelerisque eu dapibus et, dapibus sit amet eros. Donec euismod nibh est, at ornare massa pellentesque ut. Vivamus nec maximus dui, et sodales dolor. Ut euismod efficitur purus at congue.', '0000-00-00 00:00:00', 3),
('NEWS 3 (contient une date)', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu tempor odio, varius fringilla sapien. Suspendisse ex augue, sodales quis sollicitudin ut, dictum at quam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras vel vestibulum leo. Nullam ante dui, iaculis vitae varius vel, suscipit ut turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque consequat neque vehicula tincidunt rutrum. Proin nunc ligula, vestibulum ac tellus et, venenatis pellentesque nulla. Aenean finibus est nec dapibus sollicitudin. Phasellus diam nisl, scelerisque eu dapibus et, dapibus sit amet eros. Donec euismod nibh est, at ornare massa pellentesque ut. Vivamus nec maximus dui, et sodales dolor. Ut euismod efficitur purus at congue.', '2017-06-12 10:53:41', 4),
('Un nouveau pakistanais dans l\'équipe !!!!', 'Bienvenue sur PakPakNews, dans cette rubrique nous verrons chaque semaine les\r\n actualités concernant les pakistanais de notre groupe. C\'est avec un immense plaisir que nous rencontrons aujourd\'hui Vikash notre nouvel arrivant. \'Bonjour Vikash, peux tu te présenter ?\' V : bien sur, je m\'appelle vikash et je suis un pakpak. ...', '2017-06-13 18:53:15', 20);

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
-- Contenu de la table `salle`
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
(30, 23, 'dgdg'),
(31, 23, 'Gd');

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
  `status` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Utilisateur principal',
  `idGroupe` int(11) DEFAULT NULL,
  `forgetmdp` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `abonnement` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`identifiant`, `mdp`, `id`, `tel`, `email`, `nom`, `prenom`, `status`, `idGroupe`, `forgetmdp`, `abonnement`) VALUES
('alain', '0cc175b9c0f1b6a831c399e269772661', 1, '0611101213', 'thibault.hentges@gmail.com', 'fdfd', 'a', 'Utilisateur principal', 1, '0', 0),
('tibo', '92eb5ffee6ae2fec3ad71c777531578f', 2, '01', 'tibo@tibo', 't', '', 'Utilisateur principal', 2, '0', 0),
('tebbs', '92eb5ffee6ae2fec3ad71c777531578f', 3, '', '', '', '', 'Enfant', 3, '0', 0),
('admin', '21232f297a57a5a743894a0e4a801fc3', 8, '0626742891', 't@t.com', 'admin', 'admin', 'admin', 8, '0', 0),
('\'', '3590cb8af0bbb9e78c343b52b93773c9', 17, '0654433456', 'tibo.ngs@live.fr', '\'', '\'', 'Utilisateur principal', 17, '0', 0),
('alainaaa', '0cc175b9c0f1b6a831c399e269772661', 18, '0444443333', 'a@a.com', 'Alain\'s gay house', 'Alain', 'Utilisateur principal', 18, '0', 0),
('alainJunior', '0cc175b9c0f1b6a831c399e269772661', 20, '', '', '', '', 'Enfant', 1, '0', 0);

--
-- Index pour les tables exportées
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
-- Index pour la table `messageext`
--
ALTER TABLE `messageext`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Index pour la table `messageint`
--
ALTER TABLE `messageint`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `idMessage` (`ID`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

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
-- AUTO_INCREMENT pour les tables exportées
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
  MODIFY `ID` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `messageext`
--
ALTER TABLE `messageext`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `messageint`
--
ALTER TABLE `messageint`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
