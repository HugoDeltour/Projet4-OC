-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 09 juil. 2020 à 11:55
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `ID_Commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `Pseudo` varchar(75) NOT NULL,
  `Text_Commentaire` varchar(180) NOT NULL,
  `Date_Creation` date NOT NULL,
  `signaler` tinyint(1) NOT NULL,
  `Commentaire_ID_Chapitre` int(11) NOT NULL,
  PRIMARY KEY (`ID_Commentaire`),
  KEY `Commentaire_ID_Chapitre` (`Commentaire_ID_Chapitre`),
  KEY `Commentaire_ID_Chapitre_2` (`Commentaire_ID_Chapitre`),
  KEY `fk_Commentaire_ID_Chapitre` (`Commentaire_ID_Chapitre`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`ID_Commentaire`, `Pseudo`, `Text_Commentaire`, `Date_Creation`, `signaler`, `Commentaire_ID_Chapitre`) VALUES
(2, 'Hugo', 'COUCOU\r\n', '2020-06-16', 1, 12),
(3, 'Hugo', 'HELL', '2020-06-17', 1, 12);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
