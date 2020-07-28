-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 28 juil. 2020 à 14:31
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
-- Structure de la table `chapitre`
--

DROP TABLE IF EXISTS `chapitre`;
CREATE TABLE IF NOT EXISTS `chapitre` (
  `id_chapitre` int(11) NOT NULL AUTO_INCREMENT,
  `titre_chapitre` text CHARACTER SET utf8 NOT NULL,
  `text_chapitre` text CHARACTER SET utf8 NOT NULL,
  `auteur` varchar(30) CHARACTER SET utf8 NOT NULL,
  UNIQUE KEY `ID_Chapitre` (`id_chapitre`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chapitre`
--

INSERT INTO `chapitre` (`id_chapitre`, `titre_chapitre`, `text_chapitre`, `auteur`) VALUES
(12, 'Bonjour', 'Hello toi !', 'Hugo'),
(13, 'Test', '<p>TEST</p>', 'hugo');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(75) NOT NULL,
  `text_commentaire` varchar(180) NOT NULL,
  `date_creation` date NOT NULL,
  `signaler` tinyint(1) NOT NULL,
  `commentaire_id_chapitre` int(11) NOT NULL,
  PRIMARY KEY (`id_commentaire`),
  KEY `Commentaire_ID_Chapitre` (`commentaire_id_chapitre`),
  KEY `Commentaire_ID_Chapitre_2` (`commentaire_id_chapitre`),
  KEY `fk_Commentaire_ID_Chapitre` (`commentaire_id_chapitre`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `pseudo`, `text_commentaire`, `date_creation`, `signaler`, `commentaire_id_chapitre`) VALUES
(4, 'hugp', '<p>hello</p>', '2020-07-20', 0, 12);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nom_role` varchar(30) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `nom_role`) VALUES
(1, 'admin'),
(2, 'utilisateur');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(75) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `pseudo`, `password`, `role_id`) VALUES
(10, 'user', '$2y$10$lZmjdenpWo3f276GJKP4PO112pyNx4wdK7OOLsvFvKu96sIXv5aXO', 2),
(7, 'admin', '$2y$10$O9xaONMSVd.uS8a6Ix9WD.HuyPyCD26z2yf6nJuaaCkQpr3nD8mCG', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
