-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 02 mai 2019 à 13:49
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

DROP TABLE IF EXISTS `annonces`;
CREATE TABLE IF NOT EXISTS `annonces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9462 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`id`, `type`, `Description`) VALUES
(9460, 'louay', 'okey'),
(3844, 'hamza', 'hamza123'),
(383, 'zezeaz', 'ezeaezaeaze'),
(4545, 'hlhllhll', 'hllhlhlhlhl'),
(555, 'ggggggggggggggg', 'gggggggggggggggg'),
(9456, 'hamza', 'hamamzmzmzmamzmzmzmm'),
(9457, 'a la une', 'zjejzjekk'),
(9461, 'oujf', 'tfghjk');

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Sujet` varchar(50) DEFAULT NULL,
  `commentaire` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4467 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `Sujet`, `commentaire`) VALUES
(23, 'hamza', 'hamza'),
(22, 'zkzkzk', 'zkzkzkzkkzkzk'),
(4464, 'lzlzlz', 'fkfkffk');

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `User_ID` int(11) NOT NULL,
  `Product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  KEY `ForeignKey_Cart_User` (`User_ID`),
  KEY `ForeignKey_Cart_Product` (`Product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(11, 'adult'),
(8, 'maysa'),
(7, 'louay');

-- --------------------------------------------------------

--
-- Structure de la table `compteadmin`
--

DROP TABLE IF EXISTS `compteadmin`;
CREATE TABLE IF NOT EXISTS `compteadmin` (
  `idadmin` int(20) NOT NULL AUTO_INCREMENT,
  `MailA` varchar(250) NOT NULL,
  `FirstNameA` varchar(250) NOT NULL,
  `LastNameA` varchar(250) NOT NULL,
  `PasswordA` varchar(250) NOT NULL,
  `RePasswordA` varchar(250) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compteadmin`
--

INSERT INTO `compteadmin` (`idadmin`, `MailA`, `FirstNameA`, `LastNameA`, `PasswordA`, `RePasswordA`) VALUES
(2, 'mayhabbachi@esprit.tn', 'may', 'habbachi', '1234', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `compter`
--

DROP TABLE IF EXISTS `compter`;
CREATE TABLE IF NOT EXISTS `compter` (
  `Mail` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `PassWord` varchar(255) NOT NULL,
  `RePassWord` varchar(255) NOT NULL,
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compter`
--

INSERT INTO `compter` (`Mail`, `FirstName`, `LastName`, `PassWord`, `RePassWord`, `id_client`) VALUES
('maysa.habbachi@esprit.tn', 'maysa', 'habbachi', '1234', '1234', 18),
('mayhabbachi@gmail.com', 'maysa', 'habbachi', '1234', '1234', 19),
('jdlsf@fsflk.com', 'tyuio', 'tyukm', '1234', '1234', 20);

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `informations` varchar(255) NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `photo` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `name`, `address`, `phone`, `informations`, `DateDebut`, `DateFin`, `photo`) VALUES
(4, 'livre', 'livre@esprit.tn', '8511544', 'livre', '2019-05-01', '2019-05-28', 'book.jpg'),
(2, 'Evenements', 'librairie.bousslema@esprit.tn', '52376526', 'livres2 ijew ma tendmouch', '2019-05-01', '2019-05-02', 'll.jpg'),
(3, 'kitab', 'librairie@esprit.tn', '95966210', 'evenemnets ', '2019-05-06', '2019-05-28', 'event.jpg'),
(5, 'livre200', 'livre@esprit.tn', '52376526', 'livre', '2019-04-29', '2019-04-30', 'images.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `billing_name` varchar(50) NOT NULL,
  `billing_surname` varchar(50) NOT NULL,
  `billing_email` varchar(255) NOT NULL,
  `billing address` varchar(255) NOT NULL,
  `billing_postal_code` int(11) NOT NULL,
  `billing_city` varchar(255) NOT NULL,
  `billing_phone` int(11) NOT NULL,
  `billing_country` varchar(255) NOT NULL,
  `is_filled` int(1) NOT NULL DEFAULT '0',
  `order_date` datetime NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `ForeignKey_orders_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `billing_name`, `billing_surname`, `billing_email`, `billing address`, `billing_postal_code`, `billing_city`, `billing_phone`, `billing_country`, `is_filled`, `order_date`) VALUES
(102, 2, 'integ', 'integ_fin', 'interation@gd.fdfdsq', 'integ_fin', 21, 'integ_fin', 21, 'integ_fin', 1, '2019-04-21 10:12:57'),
(103, 2, 'integ_fin', 'integ_fin', 'khaled.fajraoui@esprit.tn', 'integ_fin', 54, 'integ_fin', 54, 'integ_fin', 1, '2019-04-21 10:17:41'),
(104, 2, 'maysa', 'habbachi', 'maysa.habbachi@esprit.tn', 'sousse', 4054, 'sousse', 95955623, 'tunisie', 0, '2019-04-26 16:36:22');

-- --------------------------------------------------------

--
-- Structure de la table `orders_products`
--

DROP TABLE IF EXISTS `orders_products`;
CREATE TABLE IF NOT EXISTS `orders_products` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  KEY `ForeignKey_order_orderproducts` (`order_id`),
  KEY `ForeignKey_Product_orderproduct` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `orders_products`
--

INSERT INTO `orders_products` (`order_id`, `product_id`, `product_quantity`) VALUES
(102, 12, 9),
(103, 12, 1),
(104, 12, 12),
(104, 12, 12);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `quantite` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cat` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=356 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `image`, `prix`, `quantite`, `description`, `cat`) VALUES
(12, 'livre', 'erre.jpg', '100', 78, 'livres', '2'),
(15, 'livre1', 'ccd.jpg', '500', 333, 'livres1', '3'),
(20, 'jdid', 'mas.jpg', '300', 2, 'aaaaae', '2'),
(32, 'maysa', 'guerre.jpg', '20', 789, 'okeey', '1'),
(352, 'livre3', '10.jpg', '586', 2, 'livres', '2'),
(353, 'adult', 'ok.jpg', '55', 858, 'livres', 'adult'),
(355, 'paulo', 'livre.jpg', '40', 789, 'paulo', 'adult');

-- --------------------------------------------------------

--
-- Structure de la table `promo`
--

DROP TABLE IF EXISTS `promo`;
CREATE TABLE IF NOT EXISTS `promo` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `idProd` int(20) NOT NULL,
  `prix_nouveau` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `taux` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idProd` (`idProd`)
) ENGINE=InnoDB AUTO_INCREMENT=8900 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `promo`
--

INSERT INTO `promo` (`id`, `idProd`, `prix_nouveau`, `description`, `date_debut`, `date_fin`, `taux`) VALUES
(8899, 32, 10, 'sjkfdkj', '2019-04-16', '2019-04-30', 50);

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `id_rec` int(11) NOT NULL AUTO_INCREMENT,
  `nom_U` varchar(255) NOT NULL,
  `date_rec` date NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `photo` blob NOT NULL,
  PRIMARY KEY (`id_rec`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(50) NOT NULL,
  `Is_Admin` int(1) NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`User_ID`, `User_Name`, `Is_Admin`) VALUES
(1, 'khaled', 0),
(2, 'admin', 1),
(3, 'test', 0);

-- --------------------------------------------------------

--
-- Structure de la table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id_wish` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  PRIMARY KEY (`id_wish`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `ForeignKey_Cart_Product` FOREIGN KEY (`Product_id`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `ForeignKey_orders_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`User_ID`);

--
-- Contraintes pour la table `orders_products`
--
ALTER TABLE `orders_products`
  ADD CONSTRAINT `ForeignKey_Product_orderproduct` FOREIGN KEY (`product_id`) REFERENCES `produit` (`id`),
  ADD CONSTRAINT `ForeignKey_order_orderproducts` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Contraintes pour la table `promo`
--
ALTER TABLE `promo`
  ADD CONSTRAINT `promo_ibfk_1` FOREIGN KEY (`idProd`) REFERENCES `produit` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
