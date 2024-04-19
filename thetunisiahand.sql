-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 19, 2024 at 05:14 PM
-- Server version: 10.6.5-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thetunisiahand`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idCateg` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  PRIMARY KEY (`idCateg`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`idCateg`, `nom`) VALUES
(1, 'NOUVEAUTES'),
(2, 'RAMADHAN'),
(3, 'HAPPY AÃD'),
(5, 'PROMOS'),
(6, 'CLASSIQUE');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `cin` int(10) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `adr` varchar(30) NOT NULL,
  `motdepasse` varchar(10) NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`cin`, `nom`, `prenom`, `adr`, `motdepasse`) VALUES
(4959970, 'Ben Abid', 'Siwar', 'Bchelli-KbÃ©lli', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `idCom` int(11) NOT NULL AUTO_INCREMENT,
  `prixT` double NOT NULL,
  `qte` int(11) NOT NULL,
  PRIMARY KEY (`idCom`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`idCom`, `prixT`, `qte`) VALUES
(1, 200, 2);

-- --------------------------------------------------------

--
-- Table structure for table `couleur`
--

DROP TABLE IF EXISTS `couleur`;
CREATE TABLE IF NOT EXISTS `couleur` (
  `ref` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(10) NOT NULL,
  PRIMARY KEY (`ref`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `couleur`
--

INSERT INTO `couleur` (`ref`, `nom`) VALUES
(1, 'Rouge'),
(2, 'Bleu'),
(3, 'Mauve'),
(4, 'Vert');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idProd` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `img` varchar(200) NOT NULL,
  `stock` int(11) NOT NULL,
  `prix` float NOT NULL,
  `couleur` int(11) NOT NULL,
  `categ` int(11) NOT NULL,
  PRIMARY KEY (`idProd`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`idProd`, `type`, `nom`, `img`, `stock`, `prix`, `couleur`, `categ`) VALUES
(1, 1, 'CHACHIA MODERNE MAUVE', '..\\Views\\CSS\\images\\chachia-mauve-2-ayshek-433x433.webp', 1, 20.5, 3, 1),
(2, 1, 'CHACHIA CLASSIQUE', '..\\Views\\CSS\\images\\chechia-rouge-1.webp', 1, 20, 1, 5),
(3, 2, 'COUFFIN CLASSIQUE', '..\\Views\\CSS\\images\\couffin-traditionnel.webp', 0, 35, 0, 6),
(12, 1, 'test', 'test', 0, 200, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `idtype` int(11) NOT NULL AUTO_INCREMENT,
  `lib` varchar(10) NOT NULL,
  PRIMARY KEY (`idtype`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`idtype`, `lib`) VALUES
(1, 'CHACHIA'),
(2, 'COUFFIN');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
