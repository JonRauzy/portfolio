-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : lun. 13 mars 2023 à 08:57
-- Version du serveur : 10.6.5-MariaDB
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `message` varchar(255) NOT NULL,
  `object` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `object`, `date`) VALUES
(34, 'dfgdg', 'oui@pute.com', 'kjkkkhjkhj', 'quoi', '2023-03-08 14:10:54'),
(33, 'jonathan', 'oui@pute.com', 'gdfgfgdgdfgdfgdfgd', 'quoi', '2023-03-08 14:10:46'),
(32, 'jonathan', 'oui@pute.com', 'hngioniogfngcfbh', 'quoi', '2023-03-06 10:33:13'),
(31, 'jonathan', 'oui@pute.com', 'hngioniogfngcfbh', 'quoi', '2023-03-06 10:32:33'),
(30, 'jonathan', 'oui@pute.com', 'hngioniogfngcfbh', 'quoi', '2023-03-06 10:26:50');

-- --------------------------------------------------------

--
-- Structure de la table `links`
--

DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL COMMENT 'url -> image',
  `link` varchar(255) NOT NULL COMMENT 'url ',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `links`
--

INSERT INTO `links` (`id`, `title`, `description`, `img`, `link`) VALUES
(1, 'facebook', 'des fake news à partager', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/2048px-Facebook_f_logo_%282019%29.svg.png', 'https://www.facebook.com'),
(2, 'instagram', 'des photos et des likes ', 'https://logos-marques.com/wp-content/uploads/2020/09/Logo-Instagram-1.png', 'https://www.instagram.com/'),
(3, 'Linkedin', 'Check mon égo', 'https://cdn-icons-png.flaticon.com/512/174/174857.png', 'https://www.linkedin.com/'),
(4, 'Grafikart', 'Pour apprendre internet', 'https://external-preview.redd.it/mK1wGO4OJa3bhCXHfG-dhywsbxufDDJTdZKaClwiMbA.jpg?auto=webp&s=de29c02074ca45801abe0987d674e1986b7e4c54', 'https://grafikart.fr/');

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL COMMENT 'url to the image',
  `link` varchar(255) NOT NULL COMMENT 'url to the project',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `img`, `link`) VALUES
(10, 'Livre d\'or', 'C\'est un livre d\'or', 'https://zupimages.net/up/23/11/vj0w.png', 'https://2022.webdev-cf2m.be/jonathan/livre_d_or/public/'),
(7, 'Projet perso de préformation', 'premier oui', 'https://zupimages.net/up/23/11/0jci.png', 'https://2022.webdev-cf2m.be/jonathan/prefo/'),
(8, 'Helsinki', 'Projet type site vitrine sur la ville d\'helsinki', 'https://zupimages.net/up/23/11/svkz.png', 'https://2022.webdev-cf2m.be/jonathan/JonHelsinki/'),
(9, 'Bronks', 'Reproduction du site de théatre Bronks', 'https://zupimages.net/up/23/11/nm2k.png', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `login` varchar(255) NOT NULL COMMENT 'user name',
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `password`) VALUES
(1, 'jean-miche', 'toto', '1234'),
(2, 'jon doe', 'jojo', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
