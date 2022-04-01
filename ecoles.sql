-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 01 avr. 2022 à 06:03
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecoles`
--

-- --------------------------------------------------------

--
-- Structure de la table `insc`
--

DROP TABLE IF EXISTS `insc`;
CREATE TABLE IF NOT EXISTS `insc` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `ville` varchar(25) NOT NULL,
  `dtn` date NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `sport` varchar(80) NOT NULL,
  `diplomes` varchar(100) NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `insc`
--

INSERT INTO `insc` (`num`, `nom`, `ville`, `dtn`, `sexe`, `sport`, `diplomes`) VALUES
(19, 'yassine', 'rabat', '0012-12-12', 'Homme', 'Football  |  Basketball  |  Tenis  |  ', 'TS  |  ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
