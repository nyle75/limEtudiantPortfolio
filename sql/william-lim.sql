-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 21 mars 2022 à 13:16
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
-- Base de données : `william-lim`
--

-- --------------------------------------------------------

--
-- Structure de la table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texte` varchar(2000) NOT NULL,
  `lien` varchar(50) NOT NULL,
  `texte2` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `about`
--

INSERT INTO `about` (`id`, `texte`, `lien`, `texte2`) VALUES
(1, 'À PROPOS DE MOI', '', ''),
(2, 'Je m\'appelle William Lim, je suis actuellement en seconde année de DUT Métiers du Multimédia et d\'Internet, avide de connaissance, j\'ai appris le graphisme en autodidacte et en cours, et je souhaiterai en faire mon métier plus tard.', '', ''),
(3, 'Graphiste', '', ''),
(4, 'Je veux toujours progresser et aller de l\'avant, je souhaite développer mes compétences dans les domaines du graphisme et pouvoir marquer la société d\'aujourd\'hui.', '', ''),
(5, 'J\'accorde aussi une grande importance à la créativité et à l’autonomie dans le contenu que je produis. Je suis quelqu\'un de sérieux dans le travail mais aussi très sociable qui aime avoir les avis de différentes personnes.', '', ''),
(6, 'Grâce à mon parcours universitaire et mes travaux étudiants, j’ai acquis des qualités qui\r\nme semblent essentielles dans le domaine du graphisme. Ces nombreuses expériences ont pu\r\ndémontrer mes capacités à fournir un travail régulier et en autonomie, que je sois seul ou en\r\ngroupe. Cela a également développé mon regard critique envers mes nombreux projets, qui m’a\r\npermis de nourrir cette volonté de progression et de m’améliorer dans ce domaine du graphisme.\r\nL’ensemble de mes activités personnelles et universitaires m’ont également permis d’acquérir une\r\nculture visuelle et une rigueur qui me semblent vraiment important dans ce domaine', '', ''),
(13, 'COMPÉTENCES', '', ''),
(12, '', '/assets/img/moi.jpg', '');

-- --------------------------------------------------------

--
-- Structure de la table `about2`
--

DROP TABLE IF EXISTS `about2`;
CREATE TABLE IF NOT EXISTS `about2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `texte` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `about2`
--

INSERT INTO `about2` (`id`, `nom`, `texte`) VALUES
(1, 'Date de naissance :', '14 août 2000'),
(2, 'Ville :', 'Paris'),
(3, 'Âge :', '21 ans'),
(4, 'Email :', 'william.lim77360@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

DROP TABLE IF EXISTS `connexion`;
CREATE TABLE IF NOT EXISTS `connexion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `pdw` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`id`, `login`, `pdw`) VALUES
(1, 'Toto', 'Toto1234');

-- --------------------------------------------------------

--
-- Structure de la table `contacte`
--

DROP TABLE IF EXISTS `contacte`;
CREATE TABLE IF NOT EXISTS `contacte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `lien` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contacte`
--

INSERT INTO `contacte` (`id`, `nom`, `lien`) VALUES
(1, 'CONTACT', 'Vous pouvez me contacter avec le formulaire ci-dessous ou directement sur l\'un de mes réseaux sociaux disponible avec le fomrulaire.'),
(2, 'Instagram :', 'https://www.instagram.com/_william.lim/'),
(3, 'Linkedin :', 'https://www.linkedin.com/in/william-lim-792ab9195/'),
(4, 'Email :', 'william.lim77360@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `lien`
--

DROP TABLE IF EXISTS `lien`;
CREATE TABLE IF NOT EXISTS `lien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `lien` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lien`
--

INSERT INTO `lien` (`id`, `nom`, `lien`) VALUES
(1, 'ACCUEIL', 'index.php'),
(3, 'A PROPOS DE MOI', 'about.php'),
(4, 'PORTFOLIO', 'portfolio.php'),
(5, 'CONTACT', 'contact.php');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texte` varchar(200) NOT NULL,
  `lien` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`id`, `texte`, `lien`) VALUES
(1, 'William Lim', ''),
(2, 'Graphiste Junior en Ile-De-France', ''),
(3, 'A propos de moi', '');

-- --------------------------------------------------------

--
-- Structure de la table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `lien` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `portfolio`
--

INSERT INTO `portfolio` (`id`, `nom`, `lien`) VALUES
(45, 'modif', 'assets/img/portfolio/poster.png'),
(43, 'test', 'assets/img/portfolio/test.png');

-- --------------------------------------------------------

--
-- Structure de la table `portfoliotexte`
--

DROP TABLE IF EXISTS `portfoliotexte`;
CREATE TABLE IF NOT EXISTS `portfoliotexte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texte` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `portfoliotexte`
--

INSERT INTO `portfoliotexte` (`id`, `texte`) VALUES
(1, 'Bienvenue sur mon Portfolio, ici vous pouvez retrouver toutes mes créations réalisés dans les logiciels de la suite Adobe.');

-- --------------------------------------------------------

--
-- Structure de la table `skill`
--

DROP TABLE IF EXISTS `skill`;
CREATE TABLE IF NOT EXISTS `skill` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `pourcentage` int(100) NOT NULL,
  `test` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `skill`
--

INSERT INTO `skill` (`id`, `nom`, `pourcentage`, `test`) VALUES
(1, 'ILLUSTRATOR', 75, 1),
(2, 'PHOTOSHOP', 75, 1),
(3, 'AFTER EFFECT', 60, 1),
(4, 'PREMIERE PRO', 60, 2),
(5, 'INDESIGN', 40, 2),
(6, 'BLENDER', 10, 2);

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lien` varchar(200) NOT NULL,
  `nom` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `video`
--

INSERT INTO `video` (`id`, `lien`, `nom`) VALUES
(9, 'https://www.youtube.com/embed/LoMIcniBGvU', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
