-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 15 Mars 2020 à 14:30
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `IdCat` int(5) NOT NULL,
  `NomCat` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`IdCat`, `NomCat`) VALUES
(4, 'DROIT CONSTITUTIONNELLE'),
(1, 'REVUE'),
(5, 'MAGAZINE'),
(6, 'LOI'),
(8, 'POLITIQUE'),
(11, 'DROIT DE L\'HOMME'),
(10, 'ECONOMIE'),
(12, 'SCIENCES'),
(13, 'ENCYCLOPEDIE'),
(15, 'DROIT CIVILE');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `id` int(10) NOT NULL,
  `TitreLiv` varchar(50) NOT NULL,
  `AuteurLiv` varchar(50) NOT NULL,
  `EditionLiv` varchar(50) NOT NULL,
  `AdresseLiv` varchar(50) NOT NULL,
  `CollectionLiv` varchar(50) NOT NULL,
  `NoteLiv` varchar(50) NOT NULL,
  `NumIsbn` varchar(50) NOT NULL,
  `PageLiv` varchar(10) NOT NULL,
  `ImageLivre` varchar(100) NOT NULL,
  `NumeLivre` varchar(100) NOT NULL,
  `IdCat` int(5) NOT NULL,
  `Resume` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `livre`
--

INSERT INTO `livre` (`id`, `TitreLiv`, `AuteurLiv`, `EditionLiv`, `AdresseLiv`, `CollectionLiv`, `NoteLiv`, `NumIsbn`, `PageLiv`, `ImageLivre`, `NumeLivre`, `IdCat`, `Resume`) VALUES
(199, 'La droit Constitutionnelle', 'Bruno Pean', 'Le 20 Mars 2020,France', 'France', '', '', '12-001-15-01', '80', './imagebibliotheque/5e685e3fe93b4.pdf', '<p>You did not select a file to upload.</p>', 4, 'Cette valeur est une mesure de la symétrie de \r\n si elle n\'est pas très importante à bas débit \r\ndevient à hauts débits. Les réseaux hauts débits\r\n en effet des codages complexes plus difficiles\r\nreconnaître et plus facilement perturbés.\r\nLes pas de torsade des paires étant différents\r\n autres il est évident que le signal met plus\r\nlongtemps à se propager sur la paire la plus \r\n peut être gênant dans le cas du giga Ethernet'),
(202, 'Droit de la famille', 'Patrick Courb', 'le 15 Janvier 2000', 'France ', '', '', '12-02-0001-12', '60', './imagebibliotheque/5e6861267766b.pdf', '<p>You did not select a file to upload.</p>', 1, ''),
(203, 'Droit Pénal Géneral', 'Xavier Pix', 'le 30 janvier 2002,Luxemburg', 'Europe ', '', '', '12-0001-012-01', '20', './imagebibliotheque/5e68627bd628f.pdf', '<p>You did not select a file to upload.</p>', 4, 'Cette valeur est une mesure de la symétrie de \r\n si elle n\'est pas très importante à bas débit \r\ndevient à hauts débits. Les réseaux hauts débits\r\n en effet des codages complexes plus difficiles\r\nreconnaître et plus facilement perturbés.\r\nLes pas de torsade des paires étant différents\r\n autres il est évident que le signal met plus\r\nlongtemps à se propager sur la paire la plus \r\n peut être gênant dans le cas du giga Ethernet'),
(201, 'La droit de l\'Homme', 'PaulAurhen', '12 Janvier 1999,Paris', 'France', '', '', '15-02-001-12', '50', './imagebibliotheque/5e68603455b18.pdf', '<p>You did not select a file to upload.</p>', 1, 'Cette valeur est une mesure de la symétrie de \r\n si elle n\'est pas très importante à bas débit \r\ndevient à hauts débits. Les réseaux hauts débits\r\n en effet des codages complexes plus difficiles\r\nreconnaître et plus facilement perturbés.\r\nLes pas de torsade des paires étant différents\r\n autres il est évident que le signal met plus\r\nlongtemps à se propager sur la paire la plus \r\n peut être gênant dans le cas du giga Ethernet'),
(204, 'Droit et Politiques', 'C.DILLANOY', '4°éme édition 2007', '30,rue luxemburg', '', '', '978-2-200-00-01', '80', './imagebibliotheque/5e689a10bc624.pdf', '<p>You did not select a file to upload.</p>', 5, 'Cette valeur est une mesure de la symétrie de \r\n si elle n\'est pas très importante à bas débit \r\ndevient à hauts débits. Les réseaux hauts débits\r\n en effet des codages complexes plus difficiles\r\nreconnaître et plus facilement perturbés.\r\nLes pas de torsade des paires étant différents\r\n autres il est évident que le signal met plus\r\nlongtemps à se propager sur la paire la plus \r\n peut être gênant dans le cas du giga Ethernet\r\n'),
(200, 'La Judiciaire', 'Cergy', 'Le 15 Mars 2002,Mada', 'Madagascar', '', '', '12-002-23-01', '50', './imagebibliotheque/5e685f913f940.pdf', '<p>You did not select a file to upload.</p>', 4, 'Cette valeur est une mesure de la symétrie de \r\n si elle n\'est pas très importante à bas débit \r\ndevient à hauts débits. Les réseaux hauts débits\r\n en effet des codages complexes plus difficiles\r\nreconnaître et plus facilement perturbés.\r\nLes pas de torsade des paires étant différents\r\n autres il est évident que le signal met plus\r\nlongtemps à se propager sur la paire la plus \r\n peut être gênant dans le cas du giga Ethernet'),
(205, 'Sciences de l\'éducation', 'Alain Bernard', '7°eme édition 2004', 'rue 404 ,Paris', '', '', '456-20-0001-01', '80', './imagebibliotheque/5e68b086d0cca.pdf', '<p>You did not select a file to upload.</p>', 12, 'Cette valeur est une mesure de la symétrie de \r\n si elle n\'est pas très importante à bas débit \r\ndevient à hauts débits. Les réseaux hauts débits\r\n en effet des codages complexes plus difficiles\r\nreconnaître et plus facilement perturbés.\r\nLes pas de torsade des paires étant différents\r\n autres il est évident que le signal met plus\r\nlongtemps à se propager sur la paire la plus \r\n peut être gênant dans le cas du giga Ethernet\r\n'),
(206, 'Droit civile les obligatoires', 'ALAIN BENARD', '3°édition 2000,mars', 'rue 404 ,Paris', '', '', '123-02-012-02', '80', './imagebibliotheque/5e68ddbc2d4ac.pdf', '<p>You did not select a file to upload.</p>', 1, 'Cette valeur est une mesure de la symétrie de \r\n si elle n\'est pas très importante à bas débit \r\ndevient à hauts débits. Les réseaux hauts débits\r\n en effet des codages complexes plus difficiles\r\nreconnaître et plus facilement perturbés.\r\nLes pas de torsade des paires étant différents\r\n autres il est évident que le signal met plus\r\nlongtemps à se propager sur la paire la plus \r\n peut être gênant dans le cas du giga Ethernet');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `IdMemb` int(5) NOT NULL,
  `NomMemb` varchar(50) NOT NULL,
  `PrenomMemb` varchar(50) NOT NULL,
  `EmailMemb` varchar(50) NOT NULL,
  `MotPass` varchar(50) NOT NULL,
  `Types` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`IdMemb`, `NomMemb`, `PrenomMemb`, `EmailMemb`, `MotPass`, `Types`) VALUES
(2, 'TAFITA', 'Omega', 'freddy@gmail.com', '2580', 'User'),
(3, 'NOMENA', 'Fitiavana', 'nomena@gmail.com', '12345', 'User'),
(4, 'Tania', 'Mialy', 'mialy@gmail.com', 'tiko', 'User'),
(10, 'Rojoniaina', 'freddy', 'freddy@gmail.com', '1234', 'Admin'),
(13, 'FANEVA', 'Daniel', 'miora@gmail.com', '1992', 'User'),
(17, 'FITIAVANA', 'Nomenjanahary', 'nomena@gmail.com', '2589', 'User');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`IdCat`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IdCat` (`IdCat`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`IdMemb`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `IdCat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `IdMemb` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
