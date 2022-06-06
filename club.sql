-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 04 juin 2022 à 15:20
-- Version du serveur :  5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `club`
--

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `idg` int(11) NOT NULL,
  `nomgroupe` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`idg`, `nomgroupe`) VALUES
(2, '  Groupe2'),
(3, '  formateur'),
(4, 'groupe4');

-- --------------------------------------------------------

--
-- Structure de la table `integration`
--

CREATE TABLE `integration` (
  `idint` int(53) NOT NULL,
  `idm` int(11) NOT NULL,
  `idg` int(11) NOT NULL,
  `etat` varchar(43) DEFAULT NULL,
  `anne` int(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `integration`
--

INSERT INTO `integration` (`idint`, `idm`, `idg`, `etat`, `anne`) VALUES
(1, 1, 4, NULL, 2022),
(2, 2, 4, NULL, 2022),
(3, 3, 2, '1', 2022),
(4, 4, 2, '1', 2022),
(5, 5, 2, NULL, 2021),
(6, 6, 2, NULL, 20222),
(7, 7, 4, NULL, 2017),
(8, 8, 3, NULL, 2023),
(9, 9, 4, NULL, 34567),
(10, 9, 2, '1', 2022),
(11, 9, 4, NULL, 20222),
(12, 3, 3, '1', 34567),
(13, 4, 3, '1', 34567),
(14, 9, 3, '1', 34567),
(15, 3, 4, NULL, 20222),
(16, 4, 4, NULL, 20222),
(17, 9, 4, NULL, 20222);

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `idm` int(11) NOT NULL,
  `nomm` varchar(98) NOT NULL,
  `prenom` varchar(26) NOT NULL,
  `frais_inscr` int(11) NOT NULL,
  `role` varchar(65) NOT NULL,
  `niveau` int(11) NOT NULL,
  `sexe` varchar(34) NOT NULL,
  `telephone` varchar(89) NOT NULL,
  `num_etudiant` varchar(32) NOT NULL,
  `adress` text NOT NULL,
  `photo` varchar(43) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`idm`, `nomm`, `prenom`, `frais_inscr`, `role`, `niveau`, `sexe`, `telephone`, `num_etudiant`, `adress`, `photo`) VALUES
(1, '  eloge', '  Nirema', 3000, 'membre', 0, '  Masculin', '  76888354', ' A2344', '  kinanira', 'thumb128.png'),
(2, '  Derick', '  Kazimushahara', 3000, 'membre', 0, '  Masculin', '  76888354', ' A2344', 'Kanyosha', 'img4.jpg'),
(3, '  Jules', '  Nzejimana', 3000, 'membre', 0, '  Masculin', '  76888354', ' A26773', '  Jabe', 'img4.jpg'),
(4, '  Pacifique', '  Ngoyi Kitambi', 3000, 'membre', 0, '  Masculin', '  76888354', ' A2344', '  Buyenzi', 'img1.jpg'),
(5, '  Thierry', '  Ndagijimana', 3000, 'formateur', 0, '  Masculin', '  76888354', ' A2344', '  Bwiza', 'img7.jpg'),
(6, '  eloge', '  paolo', 3000, 'membre', 0, '  M', '  76888354', ' A2344', '  musaga', 'img2.jpg'),
(7, '  njhv', '  jj', 300, 'membre', 0, '  Masculin', '  7667476', ' A2344', '  Bwiza', 'img1.jpg'),
(8, '  Thierry', '  ghj', 3000, 'formateur', 0, '  Masculin', '  76888354', ' A2344', '  Buyenzi', 'img3.jpg'),
(9, '  eloge', '  eloelo', 3000, 'membre', 0, '  Masculin', '  76888354', ' A2344', '  kinanira', 'img2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `presense`
--

CREATE TABLE `presense` (
  `idp` int(11) NOT NULL,
  `date_presence` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `presense`
--

INSERT INTO `presense` (`idp`, `date_presence`) VALUES
(1, '2022-05-13');

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

CREATE TABLE `presentation` (
  `idpresentation` int(11) NOT NULL,
  `idm` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `statut` varchar(43) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `presentation`
--

INSERT INTO `presentation` (`idpresentation`, `idm`, `idp`, `statut`) VALUES
(1, 3, 1, 'present'),
(2, 4, 1, 'absent');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `photo` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `etat` int(11) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`iduser`, `nom`, `prenom`, `telephone`, `photo`, `username`, `password`, `etat`, `role`) VALUES
(1, 'eloge', 'paolo', '76888354', 'img2.jpg', 'paolo', '12345', 1, 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`idg`);

--
-- Index pour la table `integration`
--
ALTER TABLE `integration`
  ADD PRIMARY KEY (`idint`),
  ADD KEY `idp` (`idg`),
  ADD KEY `idm` (`idm`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`idm`);

--
-- Index pour la table `presense`
--
ALTER TABLE `presense`
  ADD PRIMARY KEY (`idp`);

--
-- Index pour la table `presentation`
--
ALTER TABLE `presentation`
  ADD PRIMARY KEY (`idpresentation`),
  ADD KEY `idm` (`idm`),
  ADD KEY `idp` (`idp`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `idg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `integration`
--
ALTER TABLE `integration`
  MODIFY `idint` int(53) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `idm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `presense`
--
ALTER TABLE `presense`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `presentation`
--
ALTER TABLE `presentation`
  MODIFY `idpresentation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
