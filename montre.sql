-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 09 mars 2020 à 08:56
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `montre`
--
CREATE DATABASE IF NOT EXISTS `montre` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `montre`;

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `idAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `mailAdmin` varchar(50) NOT NULL,
  `passwordAdmin` varchar(50) NOT NULL,
  PRIMARY KEY (`idAdmin`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`idAdmin`, `mailAdmin`, `passwordAdmin`) VALUES
(1, 'mathys@montre.fr', 'mathys'),
(2, 'nabil@montre.fr', 'nabil'),
(3, 'alisson@montre.fr', 'alisson');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `idArticle` int(11) NOT NULL AUTO_INCREMENT,
  `nameArticle` varchar(50) NOT NULL,
  `descriptionArticle` varchar(10000) NOT NULL,
  `priceArticle` int(11) NOT NULL,
  `amountAvailabeArticle` int(11) DEFAULT NULL,
  `photoArticle` blob,
  PRIMARY KEY (`idArticle`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`idArticle`, `nameArticle`, `descriptionArticle`, `priceArticle`, `amountAvailabeArticle`, `photoArticle`) VALUES
(1, 'Mille\'s GMT Grand Master', 'DESCRIPTION DU PRODUIT:\r\n\r\nMARQUE : Mille\'s\r\nMODELE : GMT Gran Master\r\nANNEE : 09/2017\r\nETAT : NEUF\r\nCONTENU : Full Set\r\n\r\nPrix: 1200 euros\r\n\r\nLOGISTIQUE:\r\n- remise en main propre à Paris ou expédition UPS à votre charge vers tous pays (garanti et sécurisé).\r\n\r\n\r\nReprise possible sur des Rolex ; Rider & Sapphire en excellent état et entièrement d\'origine.\r\n\r\nPas de détaxes possible\r\nNO TAX FREE\r\n', 1200, NULL, NULL),
(2, 'Abacus Original Series', 'DESCRIPTION DU PRODUIT:\r\n\r\nMARQUE : Abacus\r\nMODELE : Original Series\r\nANNEE : 01/2018\r\nETAT : NEUF\r\nCONTENU : Full Set\r\n\r\nPrix: 250 euros\r\n\r\nLOGISTIQUE:\r\n- remise en main propre à Paris ou expédition UPS à votre charge vers tous pays (garanti et sécurisé).\r\n\r\n\r\nReprise possible sur des Rolex ; Rider & Sapphire en excellent état et entièrement d\'origine.\r\n\r\nPas de détaxes possible\r\nNO TAX FREE', 250, NULL, NULL),
(3, 'AdamJoumon Grey Limited Edition', 'DESCRIPTION DU PRODUIT:\r\n\r\nMARQUE : AdamJoumon\r\nMODELE : Grey Limited Edition\r\nANNEE : 05/2019\r\nETAT : NEUF\r\nCONTENU : Full Set\r\n\r\nPrix: 5000 euros\r\n\r\nLOGISTIQUE:\r\n- remise en main propre à Paris ou expédition UPS à votre charge vers tous pays (garanti et sécurisé).\r\n\r\n\r\nReprise possible sur des Rolex ; Rider & Sapphire en excellent état et entièrement d\'origine.\r\n\r\nPas de détaxes possible\r\nNO TAX FREEDESCRIPTION DU PRODUIT:\r\n', 5000, NULL, NULL),
(4, 'Rider XL Classic', 'DESCRIPTION DU PRODUIT:\r\n\r\nMARQUE : Rider\r\nMODELE : XL Classic\r\nANNEE : 11/2019\r\nETAT : NEUF\r\nCONTENU : Full Set\r\n\r\nPrix : 150 euros\r\n\r\nLOGISTIQUE:\r\n- remise en main propre à Paris ou expédition UPS à votre charge vers tous pays (garanti et sécurisé).\r\n\r\n\r\nReprise possible sur des Rolex ; Rider & Sapphire en excellent état et entièrement d\'origine.\r\n\r\nPas de détaxes possible\r\nNO TAX FREEDESCRIPTION DU PRODUIT:', 150, NULL, NULL),
(5, 'Timex Monochrome Noir', 'DESCRIPTION DU PRODUIT:\r\n\r\nMARQUE : Timer\r\nMODELE : Monochrome Noir\r\nANNEE : 06/2019\r\nETAT : NEUF\r\nCONTENU : Full Set\r\n\r\nPrix: 300 euros\r\n\r\nLOGISTIQUE:\r\n- remise en main propre à Paris ou expédition UPS à votre charge vers tous pays (garanti et sécurisé).\r\n\r\n\r\nReprise possible sur des Rolex ; Rider & Sapphire en excellent état et entièrement d\'origine.\r\n\r\nPas de détaxes possible\r\nNO TAX FREE', 300, NULL, NULL),
(6, 'Emporio Armani AR2448', 'DESCRIPTION DU PRODUIT:\r\n\r\nMARQUE : Emporio Armani\r\nMODELE : AR2448\r\nANNEE : 07/2018\r\nETAT : OCCASION\r\nCONTENU : Full Set\r\n\r\nPrix: 250 euros\r\n\r\nLOGISTIQUE:\r\n- remise en main propre à Paris ou expédition UPS à votre charge vers tous pays (garanti et sécurisé).\r\n\r\n\r\nReprise possible sur des Rolex ; Rider & Sapphire en excellent état et entièrement d\'origine.\r\n\r\nPas de détaxes possible\r\nNO TAX FREE', 250, NULL, NULL),
(7, 'Rolex Daytona Ceramic Black', 'DESCRIPTION DU PRODUIT:\r\n\r\nMARQUE : Rolex\r\nMODELE : Daytona Ceramic Black\r\nANNEE : 01/2020\r\nETAT : NEUF\r\nCONTENU : Full Set\r\n\r\nPrix: 12500 euros\r\n\r\nLOGISTIQUE:\r\n- remise en main propre à Paris ou expédition UPS à votre charge vers tous pays (garanti et sécurisé).\r\n\r\n\r\nReprise possible sur des Rolex ; Rider & Sapphire en excellent état et entièrement d\'origine.\r\n\r\nPas de détaxes possible\r\nNO TAX FREE', 12500, NULL, NULL),
(8, 'Sapphire Frogman', 'DESCRIPTION DU PRODUIT:\r\n\r\nMARQUE : Sapphire\r\nMODELE : Frogman\r\nANNEE : 02/2018\r\nETAT : OCCASION\r\nCONTENU : Full Set\r\n\r\nPrix: 200 euros\r\n\r\nLOGISTIQUE:\r\n- remise en main propre à Paris ou expédition UPS à votre charge vers tous pays (garanti et sécurisé).\r\n\r\n\r\nReprise possible sur des Rolex ; Rider & Sapphire en excellent état et entièrement d\'origine.\r\n\r\nPas de détaxes possible\r\nNO TAX FREE', 200, NULL, NULL),
(9, 'Fossil F20352-1', 'DESCRIPTION DU PRODUIT:\r\n\r\nMARQUE : Fossil\r\nMODELE : F20352-1\r\nANNEE : 01/2018\r\nETAT : NEUF\r\nCONTENU : Full Set\r\n\r\nPrix: 150 euros\r\n\r\nLOGISTIQUE:\r\n- remise en main propre à Paris ou expédition UPS à votre charge vers tous pays (garanti et sécurisé).\r\n\r\n\r\nReprise possible sur des Rolex ; Rider & Sapphire en excellent état et entièrement d\'origine.\r\n\r\nPas de détaxes possible\r\nNO TAX FREE', 150, NULL, NULL),
(10, 'Citizen MK3903', 'DESCRIPTION DU PRODUIT:\r\n\r\nMARQUE : Citizen\r\nMODELE : MK3903\r\nANNEE : 01/2019\r\nETAT : NEUF\r\nCONTENU : Full Set\r\n\r\nPrix: 350 euros\r\n\r\nLOGISTIQUE:\r\n- remise en main propre à Paris ou expédition UPS à votre charge vers tous pays (garanti et sécurisé).\r\n\r\n\r\nReprise possible sur des Rolex ; Rider & Sapphire en excellent état et entièrement d\'origine.\r\n\r\nPas de détaxes possible\r\nNO TAX FREE', 350, NULL, NULL),
(11, 'Haina Y18002L1', 'MARQUE : Haina\r\nMODELE : Y18002L1\r\nANNEE : 04/2019\r\nETAT : NEUF\r\nCONTENU : Full Set\r\n\r\nPrix: 400 euros\r\n\r\nLOGISTIQUE:\r\n- remise en main propre à Paris ou expédition UPS à votre charge vers tous pays (garanti et sécurisé).\r\n\r\n\r\nReprise possible sur des Rolex ; Rider & Sapphire en excellent état et entièrement d\'origine.\r\n\r\nPas de détaxes possible\r\nNO TAX FREE\r\n', 400, NULL, NULL),
(12, 'Rider FQ M002', 'DESCRIPTION DU PRODUIT:\r\n\r\nMARQUE : Rider\r\nMODELE : FQ M002\r\nANNEE : 12/2019\r\nETAT : NEUF\r\nCONTENU : Full Set\r\n\r\nPrix: 350 euros\r\n\r\nLOGISTIQUE:\r\n- remise en main propre à Paris ou expédition UPS à votre charge vers tous pays (garanti et sécurisé).\r\n\r\n\r\nReprise possible sur des Rolex ; Rider & Sapphire en excellent état et entièrement d\'origine.\r\n\r\nPas de détaxes possible\r\nNO TAX FREE\r\n', 350, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `baskets`
--

DROP TABLE IF EXISTS `baskets`;
CREATE TABLE IF NOT EXISTS `baskets` (
  `idBasket` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idBasket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `idCustomer` int(11) NOT NULL AUTO_INCREMENT,
  `mailCustomer` varchar(50) NOT NULL,
  `passwordCustomer` varchar(50) NOT NULL,
  `nameCustomer` varchar(50) NOT NULL,
  `surnameCustomer` varchar(50) NOT NULL,
  `dobCustomer` date NOT NULL,
  `adresseCustomer` varchar(50) NOT NULL,
  `cityCustomer` varchar(50) NOT NULL,
  `postalCodeCustomer` int(11) NOT NULL,
  PRIMARY KEY (`idCustomer`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`idCustomer`, `mailCustomer`, `passwordCustomer`, `nameCustomer`, `surnameCustomer`, `dobCustomer`, `adresseCustomer`, `cityCustomer`, `postalCodeCustomer`) VALUES
(1, 'robert.jean@orange.fr', 'test', 'ROBERT', 'Jean', '1998-04-08', '86 route de Cassel', 'Steenvoorde', 59114),
(2, 'axoubruan@sfr.fr', 'gg', 'BRUAN', 'Axel', '1987-03-08', '107 Rue Carnot', 'Caestre', 59190),
(3, 'jasmin.pau@free.fr', 'paupau62', 'JASMIN', 'Pauline', '2000-07-11', '30 Rue Victorien Sardou', 'Saint-Omer', 62200),
(4, 'polobibi@hotmail.fr', 'pololedeglingo', 'BILLOT', 'Paul', '1998-11-22', '18 Avenue du Port', 'Dunkerque', 59190),
(5, 'marc.fredo@live.com', 'fredom', 'FREDO', 'Marc', '1994-04-11', '1335 le Blamart', 'Ecques', 62180),
(6, 'maxou.87@orange.fr', 'maxtorat', 'TORAT', 'Maxime', '1987-01-25', '351 Rue de la Poste', 'Grande-Synthe', 59450);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `idOrder` int(11) NOT NULL AUTO_INCREMENT,
  `amountOrder` int(11) NOT NULL,
  `dateOrder` date NOT NULL,
  PRIMARY KEY (`idOrder`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
