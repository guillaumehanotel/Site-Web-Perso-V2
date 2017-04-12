-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 12 Avril 2017 à 10:05
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_perso`
--
CREATE DATABASE IF NOT EXISTS `bdd_perso` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bdd_perso`;

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

DROP TABLE IF EXISTS `competence`;
CREATE TABLE IF NOT EXISTS `competence` (
  `competence_id` int(11) NOT NULL AUTO_INCREMENT,
  `competence_intitule` varchar(50) NOT NULL,
  `competence_categorie` int(1) NOT NULL,
  PRIMARY KEY (`competence_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Vider la table avant d'insérer `competence`
--

TRUNCATE TABLE `competence`;
--
-- Contenu de la table `competence`
--

INSERT INTO `competence` (`competence_id`, `competence_intitule`, `competence_categorie`) VALUES
(1, 'Java', 1),
(2, 'Bash', 2),
(3, 'HTML', 1),
(4, 'CSS', 1),
(5, 'Réseau', 3),
(6, 'PHP', 1),
(7, 'SEO', 2),
(8, 'Javascript', 2),
(9, 'SQL', 2);

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

DROP TABLE IF EXISTS `experience`;
CREATE TABLE IF NOT EXISTS `experience` (
  `experience_id` int(11) NOT NULL AUTO_INCREMENT,
  `experience_date` varchar(255) NOT NULL,
  `experience_duree` varchar(255) NOT NULL,
  `experience_ville` varchar(255) NOT NULL,
  `experience_intitule` varchar(255) NOT NULL,
  `experience_entreprise` varchar(255) NOT NULL,
  `experience_type` varchar(255) NOT NULL,
  `experience_description` varchar(255) NOT NULL,
  `experience_ordre` int(11) NOT NULL,
  `experience_codepostal` int(5) NOT NULL,
  PRIMARY KEY (`experience_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Vider la table avant d'insérer `experience`
--

TRUNCATE TABLE `experience`;
--
-- Contenu de la table `experience`
--

INSERT INTO `experience` (`experience_id`, `experience_date`, `experience_duree`, `experience_ville`, `experience_intitule`, `experience_entreprise`, `experience_type`, `experience_description`, `experience_ordre`, `experience_codepostal`) VALUES
(1, 'Juillet - Août 2016', '2 mois', 'Royan', 'Equipier Formation Cuisine', 'Mc Donald\'s', 'Job d\'été', '- Préparation des sandwichs, Cuisson des produits\r\n- Travail en équipe dans une production à la chaîne', 1, 17);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `formation_id` int(10) NOT NULL AUTO_INCREMENT,
  `formation_annee_debut` varchar(30) NOT NULL,
  `formation_annee_fin` varchar(30) NOT NULL,
  `formation_annee_courante` varchar(30) NOT NULL,
  `formation_intitule` varchar(100) NOT NULL,
  `formation_ecole` varchar(100) NOT NULL,
  `formation_ville` varchar(100) NOT NULL,
  `formation_ville_code_postal` int(10) NOT NULL,
  `formation_description` text NOT NULL,
  `formation_lien` varchar(255) NOT NULL,
  PRIMARY KEY (`formation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Vider la table avant d'insérer `formation`
--

TRUNCATE TABLE `formation`;
--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`formation_id`, `formation_annee_debut`, `formation_annee_fin`, `formation_annee_courante`, `formation_intitule`, `formation_ecole`, `formation_ville`, `formation_ville_code_postal`, `formation_description`, `formation_lien`) VALUES
(1, '2014', '2015', '1ère', 'Licence Informatique', 'Université de La Rochelle', 'La Rochelle', 17, 'Cette première année de Licence est composée du 1er semestre commun à toutes les formations, chaque étudiant doit choisir des regroupements de matières en fonction de ses préférences. Le second semestre commence lui, à aborder vraiment tous les concepts de l\'informatique. J\'ai notamment pu voir lors de cette première année :', 'https://formations.univ-larochelle.fr/licence-informatique'),
(2, '2015', '2016', '2ème', 'Licence Informatique', 'Université de La Rochelle', 'La Rochelle', 17, 'Cette 2ème année de Licence Informatique m\'a permis de découvrir de nouvelles technologies, comme le C, le SQL, le  PHP ou encore JQuery. J\'ai pu aussi beaucoup approfondir mes connaissances en java car à des cours de structures de données et de Programmation Orientée Objet.', 'https://formations.univ-larochelle.fr/licence-informatique');

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

DROP TABLE IF EXISTS `presentation`;
CREATE TABLE IF NOT EXISTS `presentation` (
  `presentation_id` int(11) NOT NULL AUTO_INCREMENT,
  `presentation_description` text NOT NULL,
  `presentation_apropos` text NOT NULL,
  PRIMARY KEY (`presentation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Vider la table avant d'insérer `presentation`
--

TRUNCATE TABLE `presentation`;
--
-- Contenu de la table `presentation`
--

INSERT INTO `presentation` (`presentation_id`, `presentation_description`, `presentation_apropos`) VALUES
(1, 'Je suis étudiant en 1ère année à Ingésup Bordeaux, je suis intéressé par les technologies Java, j\'aimerais en apprendre d\'avantage sur des technologies récentes comme le Machine Learning ou le Big Data.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam quos laboriosam ut molestias laudantium voluptates excepturi ullam adipisci soluta, et, pariatur dolorum quaerat reiciendis corrupti perspiciatis, explicabo nostrum, iure minima. Quam sit numquam blanditiis quos amet velit eum at dolorem ea voluptatum quaerat itaque magnam voluptates sint placeat, voluptatibus et id, hic ad sapiente vel ut quasi. Iure, quasi, et. Nisi voluptates vel quisquam autem quo. Odit mollitia eaque placeat inventore adipisci alias quo aut quos molestias, deleniti quia impedit debitis, quis dignissimos molestiae voluptatibus voluptatum dolorem veniam. Rem, quod. Est tenetur vel quos quis eligendi corporis, sit cum numquam porro labore eum, maxime atque a odit modi? Officia consequatur dolor et porro dolorum nesciunt neque quas magnam obcaecati, quibusdam! Soluta odio adipisci dicta distinctio? Aperiam magnam non quis numquam voluptate earum, laudantium dolores enim, eveniet magni, qui harum voluptates. Voluptatum illum excepturi quibusdam, ab ad eos beatae ea nihil.blabla\r\n<br>\r\ndsf\r\nsdf');

-- --------------------------------------------------------

--
-- Structure de la table `realisation`
--

DROP TABLE IF EXISTS `realisation`;
CREATE TABLE IF NOT EXISTS `realisation` (
  `realisation_id` int(11) NOT NULL AUTO_INCREMENT,
  `realisation_link` varchar(100) NOT NULL,
  `realisation_titre` varchar(50) NOT NULL,
  `realisation_desc` varchar(50) NOT NULL,
  `realisation_picture_path` varchar(100) NOT NULL,
  PRIMARY KEY (`realisation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Vider la table avant d'insérer `realisation`
--

TRUNCATE TABLE `realisation`;
--
-- Contenu de la table `realisation`
--

INSERT INTO `realisation` (`realisation_id`, `realisation_link`, `realisation_titre`, `realisation_desc`, `realisation_picture_path`) VALUES
(1, 'https://github.com/guillaumehanotel', 'Github', 'Retrouvez mon code', '\\Guillaume_Hanotel/images/github-logo.png'),
(13, 'http://abiflizera.net/', 'Abiflizera', 'Projet SEO', '\\Guillaume_Hanotel/images/Abiflizera200.png');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Vider la table avant d'insérer `user`
--

TRUNCATE TABLE `user`;
--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(2, 'guillaume', '$2y$10$FDMUzAT9vYd7hbBKiStA/.QRteY/VTyCOvqU1R8WijZalm5x6ryEK');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
