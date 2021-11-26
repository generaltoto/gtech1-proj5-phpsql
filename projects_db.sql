-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 26 nov. 2021 à 15:06
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
-- Base de données : `projects_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_publish_date` date NOT NULL,
  `project_edit_date` date NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `project_img`
--

DROP TABLE IF EXISTS `project_img`;
CREATE TABLE IF NOT EXISTS `project_img` (
  `project_id` int(11) NOT NULL,
  `img_header` varchar(64) NOT NULL,
  `img_description_1` varchar(64) NOT NULL,
  `img_parallax_1` varchar(64) NOT NULL,
  `icon_1` varchar(64) NOT NULL,
  `icon_2` varchar(64) NOT NULL,
  `icon_3` varchar(64) NOT NULL,
  `img_description_2` varchar(64) NOT NULL,
  `img_caroussel_1` varchar(64) NOT NULL,
  `img_caroussel_2` varchar(64) NOT NULL,
  `img_caroussel_3` varchar(64) NOT NULL,
  `img_caroussel_4` varchar(64) NOT NULL,
  `img_caroussel_5` varchar(64) NOT NULL,
  `img_parallax_2` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `project_text`
--

DROP TABLE IF EXISTS `project_text`;
CREATE TABLE IF NOT EXISTS `project_text` (
  `project_id` int(11) NOT NULL,
  `tittle_1` varchar(40) NOT NULL,
  `tittle_2` varchar(40) NOT NULL,
  `tittle_3` varchar(40) NOT NULL,
  `paragraph_1` text NOT NULL,
  `min_tittle_1` varchar(20) NOT NULL,
  `min_paragraph_1` text NOT NULL,
  `min_tittle_2` varchar(20) NOT NULL,
  `min_paragraph_2` text NOT NULL,
  `min_tittle_3` varchar(20) NOT NULL,
  `min_paragraph_3` text NOT NULL,
  `tittle_4` varchar(40) NOT NULL,
  `paragraph_2` text NOT NULL,
  `tittle_5` varchar(40) NOT NULL,
  `tittle_6` varchar(40) NOT NULL,
  `tab_tittle_1` varchar(30) NOT NULL,
  `tab_paragraph_1` text NOT NULL,
  `tab_tittle_2` varchar(30) NOT NULL,
  `tab_paragraph_2` text NOT NULL,
  `tab_tittle_3` varchar(30) NOT NULL,
  `tab_paragraph_3` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_last_name` varchar(35) NOT NULL,
  `user_first_name` varchar(35) NOT NULL,
  `user_email` varchar(35) NOT NULL,
  `user_password` varchar(35) NOT NULL,
  `user_role` tinyint(4) NOT NULL DEFAULT '0' COMMENT 'admin or not',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
