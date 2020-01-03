-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 03 jan. 2020 à 10:34
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp_igl`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `niveau` varchar(5) NOT NULL,
  `section` varchar(2) NOT NULL,
  `grp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `prenom`, `niveau`, `section`, `grp`) VALUES
(170001, 'ABDELLICHE', 'Youcef', '1CS', 'B', 9),
(170002, 'ALI AROUS', 'Mostefa', '1CS', 'B', 9),
(170003, 'AOUADJ', 'Ihab Nassim', '1CS', 'B', 9),
(170004, 'ARABI', 'Assia', '1CS', 'B', 9),
(170005, 'AZZOUZ', 'Baha Eddine', '1CS', 'B', 9),
(170006, 'BAIBA', 'Loubna', '1CS', 'B', 9),
(170007, 'BENCHEICH', 'Chaima Maroua', '1CS', 'B', 9),
(170008, 'BENNAMANE', 'Khadidja', '1CS', 'B', 9),
(170009, 'BENZAID', 'Wissem', '1CS', 'B', 9),
(170010, 'BRIHMOUCHE', 'Yacine', '1CS', 'B', 9),
(170011, 'CHIKH', 'Yanis', '1CS', 'B', 9),
(170012, 'DEGHBOUDJ', 'Abd El Rahmen', '1CS', 'B', 9),
(170013, 'DEMIL', 'Soumeya', '1CS', 'B', 9),
(170014, 'DJEHAICHE', 'Salah', '1CS', 'B', 9),
(170028, 'bennamane', 'khadidja', '1CP', 'A', 1),
(170030, 'bennamane', 'khadidja', '1CP', 'A', 1);

-- --------------------------------------------------------

--
-- Structure de la table `moy`
--

CREATE TABLE `moy` (
  `matricule` int(11) NOT NULL,
  `module1` double NOT NULL,
  `coeff1` int(11) NOT NULL DEFAULT 5,
  `module2` double NOT NULL,
  `coeff2` int(11) NOT NULL DEFAULT 4,
  `module3` double NOT NULL,
  `coeff3` int(11) NOT NULL DEFAULT 3,
  `module4` double NOT NULL,
  `coeff4` int(11) NOT NULL DEFAULT 3,
  `module5` double NOT NULL,
  `coeff5` int(11) NOT NULL DEFAULT 2,
  `module6` double NOT NULL,
  `coeff6` int(11) NOT NULL DEFAULT 2,
  `moyenne` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `moy`
--

INSERT INTO `moy` (`matricule`, `module1`, `coeff1`, `module2`, `coeff2`, `module3`, `coeff3`, `module4`, `coeff4`, `module5`, `coeff5`, `module6`, `coeff6`, `moyenne`) VALUES
(170001, 12.32, 5, 10.67, 4, 12.45, 3, 15.34, 3, 9.6, 2, 13.43, 2, 12.19),
(170002, 11.11, 5, 10.67, 4, 12.45, 3, 10.5, 3, 12.9, 2, 12, 2, 11),
(170003, 15.87, 5, 14, 4, 14.98, 3, 15.66, 3, 12.9, 2, 13.43, 2, 16.3),
(170004, 12.32, 5, 10.67, 4, 8.98, 3, 13.33, 3, 9.6, 2, 13.43, 2, 11.78),
(170005, 12.89, 5, 11.9, 4, 11.7, 3, 10.6, 3, 13.8, 2, 12.8, 2, 11.3),
(170006, 11.11, 5, 10.67, 4, 11.7, 3, 13.33, 3, 9.6, 2, 12, 2, 13.04),
(170007, 10.8, 5, 10.3, 4, 10.7, 3, 10.56, 3, 10.65, 2, 10.02, 2, 10.3),
(170008, 11.1, 5, 11.34, 4, 12.03, 3, 11.98, 3, 10.12, 2, 10.89, 2, 11.7),
(170009, 11.9, 5, 10.43, 4, 10.4, 3, 10.34, 3, 11.23, 2, 10.9, 2, 11.4),
(170010, 15.87, 5, 14, 4, 14.98, 3, 15.34, 3, 12.9, 2, 13.43, 2, 15.4),
(170011, 14.12, 5, 13.78, 4, 15.89, 3, 13.33, 3, 12.9, 2, 12, 2, 14.9),
(170028, 11.11, 5, 10.67, 4, 12.45, 3, 13.33, 3, 9.6, 2, 12, 2, 11.2),
(170030, 12.32, 5, 14, 4, 14.98, 3, 10.5, 3, 12.9, 2, 13.43, 2, 13.9);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matricule` (`id`);

--
-- Index pour la table `moy`
--
ALTER TABLE `moy`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `matricule` (`matricule`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `moy`
--
ALTER TABLE `moy`
  ADD CONSTRAINT `moy_ibfk_1` FOREIGN KEY (`matricule`) REFERENCES `etudiants` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
