-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 09 mars 2022 à 13:35
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `animaux`
--
CREATE DATABASE IF NOT EXISTS `animaux` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `animaux`;

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

DROP TABLE IF EXISTS `animaux`;
CREATE TABLE IF NOT EXISTS `animaux` (
  `id_animal` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `couleur` varchar(50) NOT NULL,
  `id_race` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_animal`),
  KEY `id_race` (`id_race`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`id_animal`, `nom`, `couleur`, `id_race`) VALUES
(1, 'chien', 'noir', NULL),
(2, 'chat', 'blanc', NULL),
(3, 'girafe', 'orange', NULL),
(4, 'dauphin', 'gris', NULL),
(5, 'hamster', 'noir et blanc', NULL),
(6, 'rat', 'kk', NULL),
(7, 'lièvre', 'marron', NULL),
(8, 'poule', 'rouge', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `races`
--

DROP TABLE IF EXISTS `races`;
CREATE TABLE IF NOT EXISTS `races` (
  `id_race` int(11) NOT NULL AUTO_INCREMENT,
  `nom_race` varchar(50) NOT NULL,
  PRIMARY KEY (`id_race`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD CONSTRAINT `animaux_ibfk_1` FOREIGN KEY (`id_race`) REFERENCES `races` (`id_race`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
