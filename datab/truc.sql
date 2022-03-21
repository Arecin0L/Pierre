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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table truc.bien_etre: ~5 rows (approximately)
DELETE FROM `bien_etre`;
/*!40000 ALTER TABLE `bien_etre` DISABLE KEYS */;
INSERT INTO `bien_etre` (`id`, `name`, `desc`, `price`, `quantity`, `date_added`) VALUES
	(1, 'Mémoire de forme', ' Vous l\'attendiez le voilà en exclusivité mondiale le matelas à mémoire de forme PEPEDA! Entreprise fondé en 1903 collabore désormais avec l\'entreprise truC, regardez ces lignes futuristes, ce détail dans la conception, imaginez sont confort et son maintient.\r\n              La technologie non respirante de ce matelas vous apportera un plus pour un confort et une chaleur importante par n\'importe quelles conditions climatique! Existe en taille S,M,L,XL et XXXXL en version simple, double (appeler aussi Hôtel du cul tourné) à ne pas manquer dans notre site.', 7.99, 12, '2022-03-21 16:23:41'),
	(2, 'Poitong', ' La LONICERA Corp en collaboration avec l\'entreprise truC sont fier de vous présenter les nouvelles Poitong, nouveau design, nouveau concept , anti dérapant ce modèle change par rapport a la version 1.0 qui elle restée gluante!\r\n              Le plus de ces Poitong se sont leurs innovations car à chaques pas fait, leurs yeux sortent et rentrent dans leurs orbites, de plus ces tongs sont respirante grâce a leurs branchies intégrés', 100.99, 7, '2022-03-21 16:25:10'),
	(3, 'Bouteille d\'eau', ' L\'entreprise truC a innové dans ses ateliers de Sanglier sur le Mont pour vos proposer la première bouteille d\'eau non versable, ultime évolution de la bombe à eau, ce chef d`\'oeuvre rafraichira vos amis une fois balancé dans leurs chicots ! Un halo de fraicheur et d\'humidité revigorante les envelopperons\r\n              Le nec le plus ultra est de les congeler pour une portée de tir plus importante et un impact des plus rafraichissant!', 2.99, 24, '2022-03-21 16:27:00'),
	(4, 'Finger_hands', ' Vous vous appelez Christophe, Pierre ou Jacques, le clavier d\'ordinateur vous semble beaucoup trop grand pour vos petites mains joufflues sa mère, ne cherchez pas sur  OUICHE ou tout autres sites de chinoiserie, l\'innovations et bel et bien sur truC le site de cette entreprise qui a de grandes ambitions.\r\n              Ce produit vous permettra de suivre un cours de MR DESCHARLES en Javascript ou en Jquery(dis les bêtes noires, pour ne pas les nommer) sans vous préocupper de son débit de paroles à la seconde. Vous pourrez ainsi copier les cours sereinement sans faire attendre tout vos camarades, en vous curant le nez.', 5.99, 3, '2022-03-21 16:28:31'),
	(5, 'Parapluie', 'Idéal pour les nordistes en plein été, ces Parassurres sont comme son nom l\'indique des parapluie pour chaussure. Rien à rajouter\r\n             Existe aussi en modèle allant pour nos NIKE JESUS mais avec des parasols, et pour les NIKE MATHY avec des ombrelles à cocktail.', 9.99, 9, '2022-03-21 16:29:35');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table truc.high_tech: ~3 rows (approximately)
DELETE FROM `high_tech`;
/*!40000 ALTER TABLE `high_tech` DISABLE KEYS */;
INSERT INTO `high_tech` (`id`, `name`, `desc`, `price`, `quantity`, `date_added`) VALUES
	(1, 'Teledonut', 'Le goûter portable le deux en un ultime pour vous les adeptes de la cuisine numérique 3.0 mi-donuts, mi-telephone, vos conversations deviendrons de savoureux moments.\r\nA conserver au frais de préférence.', 9.99, 9, '2022-03-21 16:54:13'),
	(2, 'Clavier', 'Vous désirez décrocher du travail , tu es un jeune geek qui ne veut plus sortir de sa chambres et papa et maman en on marre de crier pour que tu vienne manger. L\'entreprise truC a le don d\'avoir une solution à chaques problèmes grâce au PERFOR FINGERS , ce problème ne sera qu\'un mauvais souvenir  et votre jeune chérubin reprendra une vie sociale correcte et votre moitié heureuse de vous revoir dans la Maison\r\nLivrable sous 48 heures (pansements non fournis)', 9.99, 9, '2022-03-21 16:55:09'),
	(3, 'CD_Cadena', 'Vous venez d\'acquérir le dernier CD de Chantal Goya et vous y tenez plus qu\'à vos propres enfants? la société truC à la solution, pour ne pas que certains malendrins ne fasse la main mise sur votre précieux.\r\nEn effets les vols de CD des années 80 deviens un fléau le CADENAS est là pour vous accrochable à votre pantalon,dans un garage à vélo bref il vous suivra partout, une chaîne est aussi disponible pour attacher votre album préférer prêt de votre coeur.', 9.99, 9, '2022-03-21 16:56:03');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table truc.jardinage: ~3 rows (approximately)
DELETE FROM `jardinage`;
/*!40000 ALTER TABLE `jardinage` DISABLE KEYS */;
INSERT INTO `jardinage` (`id`, `name`, `desc`, `price`, `quantity`, `date_added`) VALUES
	(1, 'Balai', ' Notre balais est un produit unique au monde, la société truC à développer ce produit en collaboration avec l\'Agence Spatiale Européenne, pour équiper la station spatiale internationale! En bois d\'arbres véritable importé tout droit du désert du Mozambique, sa qualitée n\'a d\'égale que son prix dérisoir\r\n            \r\n              Son faible encombrement en fait un élément inconditionnel pour les personnes férues de ménage à 400km de la Terre (#TomasPesquetapprouved)', 14.00, 2, '2022-03-21 16:02:36'),
	(2, 'Arozperpétuel', ' Vous en rêviez, l\'entreprise truC l\'a fait, l\'Arozperpétuel et de retour pour le plus grand bonheur des jardiniers en herbe, son design étudié en soufflerie qui fait sa réputation depuis tant d\'années, est enfin disponible sur notre site\r\n              En plastique véritable issu des industries pétrochimique de pointe, elle n\'est pas biodégradable et tuera à distance la première tortue marine qu\'elle croisera, sans pitié.', 28.99, 15, '2022-03-21 16:04:34'),
	(3, 'Bottes', ' Marre de passer une journée a suer dans ces bottes en tondant? L\'équipe truC a "LA"solution, les bottes ouvertes sont faites pour vous, grâce à leur technologie "BOOT AREA" elles se vident automatiquement et amène un air frais pour vos pieds.\r\n              Leur matière en caoutchouc hydrophobe vous suivra dans toutes vos randonnées, en mer, à la chasse (surtout dans les ronces) elles seront vos alliés à l\'assaut des terrains les plus caca !!!', 7.99, 12, '2022-03-21 16:07:06');
/*!40000 ALTER TABLE `jardinage` ENABLE KEYS */;

-- Dumping structure for table truc.logi
CREATE TABLE IF NOT EXISTS `logi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `password` varchar(250) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `email` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `conftoken` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `tokenconfirmed` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table truc.logi: ~7 rows (approximately)
DELETE FROM `logi`;
/*!40000 ALTER TABLE `logi` DISABLE KEYS */;
INSERT INTO `logi` (`id`, `username`, `password`, `email`, `conftoken`, `tokenconfirmed`) VALUES
	(11, 'Ro', '$2y$10$Ty.8ylJ13VkoiZRPY7sLyuj/wN7fkmy1Z51PXDqsh.uUQ0N0YNTTe', 'roro@gmail.com', '0', '2022-03-21 22:15:35'),
	(12, 'Test3', '$2y$10$.RYLPoZnLkg611pgGJIyF.y3zzjz./doQ675ec4nE4IQCzA7Umqg6', 'test3@gmail.com', '0', '2022-03-21 22:16:23'),
	(14, 'Kriiss', '$2y$10$4ywX1Wxa51LQ7OWcA635Bek1CH5fNj4kufsbTjPN6g3GAJR1Ny0yy', 'kriiss@gmail.com', '0', '2022-03-21 23:38:06');
/*!40000 ALTER TABLE `logi` ENABLE KEYS */;

-- Dumping structure for table truc.loisirs
CREATE TABLE IF NOT EXISTS `loisirs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `desc` text CHARACTER SET utf8 NOT NULL,
  `price` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL DEFAULT '0',
  `date_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table truc.loisirs: ~3 rows (approximately)
DELETE FROM `loisirs`;
/*!40000 ALTER TABLE `loisirs` DISABLE KEYS */;
INSERT INTO `loisirs` (`id`, `name`, `desc`, `price`, `quantity`, `date_added`) VALUES
	(1, 'Double vélo', 'Une soirée trop arrosée? un ami à raccompagné? L\'entreprise truC a dans sa besace ce petit bijou de technologie, idéal pour de sacrée randonnée en vélocipède qui ravira les pilotes les plus émérites, les demi-tours ne seront que banalités grâce a son angle de braquage hors du commun, aucun terrain ne lui resistera.\r\nIdéal pour les enfants ou les personnes ne s\'entendant pas bien dans la vie, la loi du plus fort sera dans ce cas primordiale !!', 9.99, 9, '2022-03-21 16:43:07'),
	(2, 'Chauss\'etire', 'Tu t\'appelle Ludovic et tu as de la peine car tu ne trouve pas chaussure à ton pied, notre entreprise à LA solution la chaussure NIKE JESUS en effet avec sa pointure de 175 tu pourras courir plus vite que n\'importe quel gazelle de la savane, et de plus tu sera capable de marcher sur l\'eau d\'où son nom exclusif de NIKE JESUS \r\nExiste en modèle NIKE MATHY en pointure 2 (seulement si le vent n\'excède pas 30km/h car le vent n\'épargne pas les personnes de petites tailles)', 9.99, 9, '2022-03-21 16:44:26'),
	(3, 'Skateboard', 'Développer en collaboration avec Mr. Joseph Garbaccio pour évoluer en flat dans un bowl ou en olie avec frontside 360° en street, ce skateboard vous fera tourné la tête dans tout les sens du terme, le dek est en bois compressé appelé aussi contreplaqué, les trucks sont en acier du colorado et enfin le concept du placement des trucks et des roues c\'est Joseph qui a appelé de l\'hopital pour nous demander de lancer la production \r\nPrévoir un hopital proche pour cette activité hors du commun.', 9.99, 9, '2022-03-21 16:45:27');
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

-- Dumping data for table truc.optique: ~2 rows (approximately)
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

-- Dumping data for table truc.outillage: ~4 rows (approximately)
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

-- Dumping data for table truc.vaisselle: ~4 rows (approximately)
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
