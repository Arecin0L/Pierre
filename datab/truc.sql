-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for truc
CREATE DATABASE IF NOT EXISTS `truc` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `truc`;

-- Dumping structure for table truc.bien_etre
CREATE TABLE IF NOT EXISTS `bien_etre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `desc` text CHARACTER SET utf8 NOT NULL,
  `price` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL DEFAULT '0',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table truc.bien_etre: ~0 rows (approximately)
DELETE FROM `bien_etre`;
/*!40000 ALTER TABLE `bien_etre` DISABLE KEYS */;
/*!40000 ALTER TABLE `bien_etre` ENABLE KEYS */;

-- Dumping structure for table truc.high_tech
CREATE TABLE IF NOT EXISTS `high_tech` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `desc` text CHARACTER SET utf8 NOT NULL,
  `price` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL DEFAULT '0',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table truc.high_tech: ~0 rows (approximately)
DELETE FROM `high_tech`;
/*!40000 ALTER TABLE `high_tech` DISABLE KEYS */;
/*!40000 ALTER TABLE `high_tech` ENABLE KEYS */;

-- Dumping structure for table truc.hygiene
CREATE TABLE IF NOT EXISTS `hygiene` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `desc` text CHARACTER SET utf8 NOT NULL,
  `price` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL DEFAULT '0',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table truc.hygiene: ~0 rows (approximately)
DELETE FROM `hygiene`;
/*!40000 ALTER TABLE `hygiene` DISABLE KEYS */;
/*!40000 ALTER TABLE `hygiene` ENABLE KEYS */;

-- Dumping structure for table truc.jardinage
CREATE TABLE IF NOT EXISTS `jardinage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `desc` text CHARACTER SET utf8 NOT NULL,
  `price` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL DEFAULT '0',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table truc.jardinage: ~0 rows (approximately)
DELETE FROM `jardinage`;
/*!40000 ALTER TABLE `jardinage` DISABLE KEYS */;
/*!40000 ALTER TABLE `jardinage` ENABLE KEYS */;

-- Dumping structure for table truc.log
CREATE TABLE IF NOT EXISTS `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(250) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `conftoken` varchar(255) NOT NULL DEFAULT '0',
  `tokenconfirmed` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table truc.log: ~0 rows (approximately)
DELETE FROM `log`;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
/*!40000 ALTER TABLE `log` ENABLE KEYS */;

-- Dumping structure for table truc.loisirs
CREATE TABLE IF NOT EXISTS `loisirs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `desc` text CHARACTER SET utf8 NOT NULL,
  `price` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL DEFAULT '0',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table truc.loisirs: ~0 rows (approximately)
DELETE FROM `loisirs`;
/*!40000 ALTER TABLE `loisirs` DISABLE KEYS */;
/*!40000 ALTER TABLE `loisirs` ENABLE KEYS */;

-- Dumping structure for table truc.optique
CREATE TABLE IF NOT EXISTS `optique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `desc` text CHARACTER SET utf8 NOT NULL,
  `price` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL DEFAULT '0',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table truc.optique: ~3 rows (approximately)
DELETE FROM `optique`;
/*!40000 ALTER TABLE `optique` DISABLE KEYS */;
INSERT INTO `optique` (`id`, `name`, `desc`, `price`, `quantity`, `date_added`) VALUES
	(1, 'Cyclounette', '"TOP AFFAIRE" chez truC, Pour l\'achat d\'une paire d\'une lunette une blague offerte\r\n              uniquement chez truC (c\'est bébé cyclope en pleine discussion avec papa cyclope :\r\n              - Dis, papa, pourquoi on n\'a qu\'un oeil ?\r\n              - Oh, laisse-moi j\'ai pas l\'temps.\r\n              Bébé cyclope:\r\n              - Dis papa, POURQUOI on n\'a qu\'un oeil, dis ?\r\n              - Je t\'ai dis que j\'avais pas l\'temps ?\r\n              - Dis papa, pourquoi....\r\n              - OH ARRETE DE ME CASSER LA COUILLE !!! )', 17.17, 4, '2021-11-17 13:58:07'),
	(2, 'Chinette', 'Vous avez un chien? il veut des lunettes? Vous ne trouvé pas votre bonheur chez Kriss ou\r\n              Affreuxlook? Rien de plus simple contactez nous!\r\n            \r\n              Disponible en différents coloris dont un noir opaque du plus bel effet, votre chien se prendra pour une\r\n              personne aveugle car oui le changement c\'est maintenant et c\'est rigolo!!', 17.17, 4, '2021-11-17 13:59:05'),
	(3, 'Lunetamis', ' Nouveauté sur notre site, (pour les BG) comme disent les jeunes, nos Lunétamis sont disponible, mi-paires de\r\n              lunettes mi-salamis elles ne manquerons pas de protéger vos yeux du soleil éclatant d\'Etaples sur mer un\r\n              mois d\'octobre de nuit\r\n            \r\n              Elles seront également indispensables si vous croiser un amis (le sang de la veine ) comme disent les jeunes\r\n              pour grailler un p\'tit bout sur le banc de ce si charmant port, du Nord-pas-de-Calais', 17.17, 4, '2021-11-17 13:59:51');
/*!40000 ALTER TABLE `optique` ENABLE KEYS */;

-- Dumping structure for table truc.outillage
CREATE TABLE IF NOT EXISTS `outillage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `desc` text CHARACTER SET utf8 NOT NULL,
  `price` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL DEFAULT '0',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table truc.outillage: ~5 rows (approximately)
DELETE FROM `outillage`;
/*!40000 ALTER TABLE `outillage` DISABLE KEYS */;
INSERT INTO `outillage` (`id`, `name`, `desc`, `price`, `quantity`, `date_added`) VALUES
	(1, 'Poignée', 'Marre de vous accrocher aux poignées de porte, avec vos vêtements ou vos cabas, la société truC en collaboration avec la société Intex le trafiquant de piscine, a la solution grâce à cette poignée de porte gonflable le résultat est là, une prise en main aléatoire est son atout premier !!', 10.99, 17, '2021-11-17 01:16:20'),
	(2, 'Tournevide', 'Tu es un piètre mécanicien mais tu veux que tes amis croient que tu es un pro du bricolage? Le gain de place est juste incroyable, terminé la recherche de vis et de tournevis correspondant, voici le deux en un, le Tournevide!!', 0.99, 17, '2021-11-17 01:18:35'),
	(3, 'Compas', 'Léonard de Vinci lui même, se servait également de cet instrument et seul l\'entreprise truC vous le propose en exclusivité mondiale le Compas carré. En effet le Compas carré réglera beaucoup de conflits entre les partisants du carré et du rond sans angle', 117.99, 2, '2021-11-17 01:19:30'),
	(4, 'Marto\'Elec', 'Tout le monde à une fois dans sa vie taper au marteau pour faire moulte travaux de ménage domestique, mais voilà', 17.17, 6, '2021-11-17 01:25:04'),
	(5, '	Oranbinet', 'Encore un produit exclusif dans la boutique , adopter par la chaine GULLI en personne en association avec Leroy', 1.26, 21, '2021-11-17 01:24:09');
/*!40000 ALTER TABLE `outillage` ENABLE KEYS */;

-- Dumping structure for table truc.vaisselle
CREATE TABLE IF NOT EXISTS `vaisselle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `desc` text CHARACTER SET utf8 NOT NULL,
  `price` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL DEFAULT '0',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table truc.vaisselle: ~5 rows (approximately)
DELETE FROM `vaisselle`;
/*!40000 ALTER TABLE `vaisselle` DISABLE KEYS */;
INSERT INTO `vaisselle` (`id`, `name`, `desc`, `price`, `quantity`, `date_added`) VALUES
	(1, 'Fourchaine', 'Pas besoin de mots, cette image parle d\'elle même. Ce chef d\'oeuvre sera idéal pour tous les \r\n            amateurs de gastronomie acrobatique.\r\n\r\n            Un seul mot me vient à l\'esprit : "BONNE CHANCE" aux amateurs de petits pois ou tout autre fan de riz!!\r\n            Une exclusivitée de l\'entreprise truC.\r\n          </p>', 17.17, 4, '2021-11-17 11:56:16'),
	(2, 'Tasse Bizon', 'Notre tasse en véritable poils de bison de Croatie du Nord chatouillera votre palais de bon\r\n            matin, en effet cette tasse équipée de sa soucoupe et de sa cuillère, vous feront économiser un maximum\r\n            d\'eau car le poil de bison est inlavable, ainsi vous retrouverez les saveurs de vos thés, soupes, ou tout\r\n            autres aliments consommés il y a deux ans auparavant, ce qui donnera un goût unique à votre boisson.\r\n            En plus de ce modèle, un autre est aussi disponible sans avoir été nettoyé, donc à vous les goûts subtiles\r\n            et délicats des cafards, puces et tout autres déjections selon l\'endroit où les poils ont étaient prélevés.', 17.17, 4, '2021-11-17 11:55:24'),
	(3, 'Sablioivre', 'Encore une nouveautée sur notre site, cet ensemble de salière et de poivrière pour retraité qui\r\n            ont le temps de manger le dimanche midi après Jean-luc Reichmann, en effet cet objet technique évite à toutes\r\n            les personnes ayant cette maladie qui ravage les neuronnes j\'ai nommé Parkinson, de retapisser la salle à\r\n            manger complète et de blessé les membres de leur famille par projection de sel ou de poivre dans les yeux !\r\n            IMPORTANT !! En présentant votre carte d\'affiliation au régime de retraite cet ensemble vous reviendra à -10%\r\n            avec le code promo "AssuranceObsèque"', 17.17, 4, '2021-11-17 11:54:48'),
	(4, 'Verre Niglot', 'Un incontournable de la communauté Gitane, enfin chez vous grâce à la société truC, en effet ce verre a pied\r\n            mi-oeuvre d\'art, mi-verre à pied en peau de niglot sauvage te plaira mon cousin et trouvera une place dans ta\r\n            camping entre la statue de la vierge Marie et le fusil à pompe du cousin Pedro.\r\n            \r\n            Il sera aussi efficace pour les conflits avec les CRS qui ne veulent pas te laisser rentrer dans la commune\r\n            pour un terrain en leurs balancant dans les chicots!', 17.17, 4, '2021-11-17 11:53:54'),
	(5, 'Trouillère', 'Pour compléter cette série "Vaisselle" la société truC à encore frappé un grand coup dans le monde de la\r\n            table, en effet avec cette cuillère intelligente fini les repas rasoirs une cuillère de soupe ou de semoule se\r\n            transformera en carnage pour votre pantalon ce qui vous permettra de partir aux toilettes trés souvent finir\r\n            votre partie de Candy Crush où allez voir la chaine Youtube de Gatssi sans vous préoccuper de votre\r\n            "date"(comme disent les jeunes) et cela autant de fois que vous le désirer!\r\n            Attention toute fois aux boissons très chaudes et autres sauce tomate ravageuse de textile .', 17.17, 4, '2021-11-17 11:52:46');
/*!40000 ALTER TABLE `vaisselle` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
