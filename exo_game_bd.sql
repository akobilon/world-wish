-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 08 juin 2022 à 22:06
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `exo_game_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `archer`
--

DROP TABLE IF EXISTS `archer`;
CREATE TABLE IF NOT EXISTS `archer` (
  `arme` varchar(50) NOT NULL,
  `sante` int NOT NULL,
  `attaque` int NOT NULL,
  `tir` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `archer`
--

INSERT INTO `archer` (`arme`, `sante`, `attaque`, `tir`) VALUES
('Arc', 120, 15, 0);

-- --------------------------------------------------------

--
-- Structure de la table `druide`
--

DROP TABLE IF EXISTS `druide`;
CREATE TABLE IF NOT EXISTS `druide` (
  `arme` varchar(50) NOT NULL,
  `sante` int NOT NULL,
  `attaque` int NOT NULL,
  `pouvoir_naturel` int NOT NULL,
  `soigner` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `druide`
--

INSERT INTO `druide` (`arme`, `sante`, `attaque`, `pouvoir_naturel`, `soigner`) VALUES
('Griffes', 85, 1, 5, 5),
('Griffes', 85, 1, 5, 5);

-- --------------------------------------------------------

--
-- Structure de la table `epee_bouclier`
--

DROP TABLE IF EXISTS `epee_bouclier`;
CREATE TABLE IF NOT EXISTS `epee_bouclier` (
  `arme` varchar(50) NOT NULL,
  `sante` int NOT NULL,
  `attaque` int NOT NULL,
  `parer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `epee_bouclier`
--

INSERT INTO `epee_bouclier` (`arme`, `sante`, `attaque`, `parer`) VALUES
('Epee', 150, 15, 0);

-- --------------------------------------------------------

--
-- Structure de la table `hache`
--

DROP TABLE IF EXISTS `hache`;
CREATE TABLE IF NOT EXISTS `hache` (
  `arme` varchar(50) NOT NULL,
  `sante` int NOT NULL,
  `attaque` int NOT NULL,
  `parer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `hache`
--

INSERT INTO `hache` (`arme`, `sante`, `attaque`, `parer`) VALUES
('Hache', 150, 20, 0);

-- --------------------------------------------------------

--
-- Structure de la table `lance_bouclier`
--

DROP TABLE IF EXISTS `lance_bouclier`;
CREATE TABLE IF NOT EXISTS `lance_bouclier` (
  `arme` varchar(50) NOT NULL,
  `sante` int NOT NULL,
  `attaque` int NOT NULL,
  `parer` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `lance_bouclier`
--

INSERT INTO `lance_bouclier` (`arme`, `sante`, `attaque`, `parer`) VALUES
('Lance', 150, 10, 0);

-- --------------------------------------------------------

--
-- Structure de la table `pretre`
--

DROP TABLE IF EXISTS `pretre`;
CREATE TABLE IF NOT EXISTS `pretre` (
  `arme` varchar(50) NOT NULL,
  `sante` int NOT NULL,
  `attaque` int NOT NULL,
  `pouvoir_sacre` int NOT NULL,
  `soigner` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pretre`
--

INSERT INTO `pretre` (`arme`, `sante`, `attaque`, `pouvoir_sacre`, `soigner`) VALUES
('Chapelet', 85, 1, 10, 5);

-- --------------------------------------------------------

--
-- Structure de la table `sorcier`
--

DROP TABLE IF EXISTS `sorcier`;
CREATE TABLE IF NOT EXISTS `sorcier` (
  `arme` varchar(50) NOT NULL,
  `sante` int NOT NULL,
  `attaque` int NOT NULL,
  `boule_de_feu` int NOT NULL,
  `rater` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `sorcier`
--

INSERT INTO `sorcier` (`arme`, `sante`, `attaque`, `boule_de_feu`, `rater`) VALUES
('Baguette', 100, 5, 30, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
