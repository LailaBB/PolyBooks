-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: polybooks.fr.mysql:3306
-- Generation Time: Jun 29, 2016 at 10:33 PM
-- Server version: 5.5.49-MariaDB-1~wheezy
-- PHP Version: 5.4.45-0+deb7u3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `polybooks_fr`
--
CREATE DATABASE `polybooks_fr` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `polybooks_fr`;

-- --------------------------------------------------------

--
-- Table structure for table `aze`
--

CREATE TABLE IF NOT EXISTS `aze` (
  `aze` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  `is_public` tinyint(1) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `document_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D8698A763DA5256D` (`image_id`),
  UNIQUE KEY `UNIQ_D8698A76C33F7837` (`document_id`),
  KEY `IDX_D8698A76AFC2B591` (`module_id`),
  KEY `IDX_D8698A76DE12AB56` (`created_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `title`, `description`, `created_at`, `created_by`, `module_id`, `is_public`, `image_id`, `document_id`) VALUES
(14, 'TOEIC', 'Les tests Test of English for International Communication (TOEIC) sont des certifications standardisées permettant d''évaluer le niveau d''anglais des locuteurs non anglophones tant au niveau de l''écrit que de l''oral. Ces tests, créés et administrés par un organisme basé aux États-Unis (l''ETS : Educational Testing Service), visent en particulier à évaluer les connaissances linguistiques du candidat dans un contexte professionnel, sans jamais pour autant entrer dans un jargon technique spécifique. Plus de six millions de tests sont corrigés chaque année dans le monde, dont des centaines de milliers en France.', '2016-06-29', 1, 5, 1, 36, 37),
(15, 'UML', 'Le langage de modélisation unifié, de l''anglais Unified Modeling Language (UML), est un langage de modélisation graphique à base de pictogrammes conçu pour fournir une méthode normalisée pour visualiser la conception d''un système. Il est couramment utilisé en développement logiciel et en conception orientée objet.', '2016-06-29', 7, 7, 1, 38, 39),
(16, 'Compléxité', 'La théorie de la complexité est un domaine des mathématiques, et plus précisément de l''informatique théorique, qui étudie formellement la quantité de ressources (temps et/ou espace mémoire) nécessaire pour résoudre un problème algorithmique au moyen de l''exécution d''un algorithme. Il s''agit donc d''étudier la difficulté intrinsèque de problèmes. Les problèmes sont organisés par classes de complexité.', '2016-06-29', 6, 6, 1, 40, 41),
(17, 'Classe de problèmes et réduction', 'En calculabilité et en théorie de la complexité, une réduction est un algorithme transformant un problème en un autre. Cet outil sert à montrer qu''un problème est au moins aussi difficile qu''un autre : si un problème A peut être réduit à (i.e. transformé en) un problème B, et que le problème A est difficile alors le problème B est au moins aussi difficile. On écrit alors A ≤ B.', '2016-06-29', 6, 6, 1, 42, 43),
(18, 'Droit des SI', 'L''aspect légal de la gestion des SI est souvent négligé, faute de temps, de prise de conscience ou de difficultés à trouver les bonnes sources d’information. Dans ce document, vous aborderez les notions élémentaires de droit et de responsabilité, des exemples de problématiques rencontrées, et des stratégies de protection du SI contre les menaces juridiques.', '2016-06-29', 8, 9, 1, 44, 45),
(19, 'Introduction à l''économétrie', 'L''économétrie est une branche de la science économique qui a pour objectif d''estimer et de tester les modèles économiques, à partir de données issues de l''observation du fonctionnement réel de l''économie ou provenant d''expériences contrôlées.', '2016-06-29', 9, 8, 1, 46, 47),
(20, 'Sécurité des SI', 'La sécurité des systèmes d’information (SSI) est l’ensemble des moyens techniques, organisationnels, juridiques et humains nécessaires et mis en place pour conserver, rétablir, et garantir la sécurité du système d''information. Assurer la sécurité du système d''information est une activité du management du système d''information.', '2016-06-29', 8, 10, 1, 48, 49);

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=51 ;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `file_name`) VALUES
(1, '8eefa9337d7b547467d811ac863d12c278eb9006.jpeg'),
(3, 'f51b64adb8882f67ce9b4363ce758a4c47188e70.jpeg'),
(4, '37fb2ce7b3e04295842a5209c684e9382b6fa68e.jpeg'),
(5, 'b796c31af0da00f9b06ee947a08583466b934d66.jpeg'),
(6, 'eb778d8a259bf9adf9c2ad8e73c81f1f4ab69a29.pdf'),
(7, NULL),
(8, NULL),
(9, '6c96d4b69fc379485cd9503a5c47a5980ac20a55.jpeg'),
(10, 'bddc22fdeb0936bef6cdf24be822ef0dc73e6ca4.pdf'),
(11, NULL),
(12, NULL),
(13, '3e1c62017416dd02fc48a8d0fc0ea62b249381f8.jpeg'),
(14, '602e4da7dc54126524927fcc00a31117390f92c6.jpeg'),
(15, NULL),
(16, NULL),
(17, '4c2bb96ad439eabfa2c100e24753c5181922ae6a.jpeg'),
(18, 'd1663a836ae465e9d88d02ab74f4ed446a8989d3.pdf'),
(19, NULL),
(20, NULL),
(21, 'bffcb99fbb9895ad1ca22976c28c87e406a0407b.jpeg'),
(22, '387e4f76b78b8bce135f84f3fa3ff57b4bc35c7e.pdf'),
(23, '8f8a1b10fd081869fc104f35ad2831726cc44986.jpeg'),
(24, 'd4b6e122511b43c2fe854da519162c64a802b5da.jpeg'),
(25, '2c58afdb730b1903d1bf26dec95c16d05c5ca9ba.jpeg'),
(26, '001ddbcbccd49cfa186c1a1213e3c68d7d73fd26.jpeg'),
(27, '84967b9eb2ec52cd26536a73e8f46ce4aafc9f2e.png'),
(28, '85b95963d7d2cdea1859a7972a1607ad564737fb.png'),
(29, 'cc00f5400f5b00ebfe423d38f1fdf041e36b92f4.jpeg'),
(30, 'ab5f343b4edc5c226366593b671f59d38055a59d.pdf'),
(31, 'b5ef90cffedcf39ddd77cbd0f1f55c66efcb89e5.jpeg'),
(32, NULL),
(33, NULL),
(34, NULL),
(35, NULL),
(36, '0585af785ae5a49f473445bf82fe7eabdd95b820.jpeg'),
(37, 'a1110267d6a69567ee59a09b072ba8d2d327e3d1.pdf'),
(38, 'ef86440cc59170fa91eec65729f1d9748e66432f.gif'),
(39, '5dd5908bbd1da1d29ff8bde51914c2c2d239f785.pdf'),
(40, '677385daec4e34856835c4410fc4907919b57619.jpeg'),
(41, 'd69c1cffc4560c708adf6825edaacd46941c7e42.pdf'),
(42, 'c188847e0e4238cf50675c94d5a1d3fa48bd1440.png'),
(43, '0613b0e0ad12e377964b9ad1617ff136f698ecb5.pdf'),
(44, '9a258c98bc382d9504b2851837eba2cec0ead9ad.jpeg'),
(45, '3f0f654078858bb49a60cb092a45892b0c8ae7b1.pdf'),
(46, '5b7b6189429fe41eea4f694d2bdbda8e81f86ac0.jpeg'),
(47, '516fdaa5649cbcd9cd810421dd00c4589cab3299.pdf'),
(48, '9c77970b347474ecc982eba5bc5d7277de658af5.jpeg'),
(49, '2530c91afd407794ad90faf0d9a9e7dc9866b195.pdf'),
(50, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `log_document`
--

CREATE TABLE IF NOT EXISTS `log_document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document_id` int(11) DEFAULT NULL,
  `changed_by` int(11) DEFAULT NULL,
  `dateChange` datetime NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B63A41A9C33F7837` (`document_id`),
  KEY `IDX_B63A41A910BC6D9F` (`changed_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `log_document`
--

INSERT INTO `log_document` (`id`, `document_id`, `changed_by`, `dateChange`, `action`) VALUES
(11, 14, 1, '2016-06-29 21:30:52', 'created'),
(12, 15, 7, '2016-06-29 21:36:04', 'created'),
(13, 16, 6, '2016-06-29 21:44:12', 'created'),
(14, 17, 6, '2016-06-29 21:55:33', 'created'),
(15, 18, 8, '2016-06-29 22:02:33', 'created'),
(16, 19, 9, '2016-06-29 22:05:22', 'created'),
(17, 20, 8, '2016-06-29 22:18:43', 'created');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `name`) VALUES
(5, 'Anglais'),
(6, 'Compléxité'),
(7, 'Conception des SI'),
(8, 'Econométrie'),
(9, 'Droit'),
(10, 'Sécurité des SI');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_8D93D6493DA5256D` (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `firstname`, `lastname`, `image_id`) VALUES
(1, 'admin', 'admin', 'info@admin.fr', 'info@admin.fr', 1, '1mdzfsndcqzos0kwcgww8gckw4kwko4', '$2y$13$1mdzfsndcqzos0kwcgww8evZtLO30HWv7xTkft4AE1x58t34bnrxa', '2016-06-29 22:25:53', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 0, NULL, 'Ben Brahim', 'Laila', 31),
(6, 'VBerry', 'vberry', 'vberry@lirmm.fr', 'vberry@lirmm.fr', 1, 'jxmqups2qggsgcc8so8sowoc8g0scs0', '$2y$13$jxmqups2qggsgcc8so8souyXgkLSz9gUTgSBnU8nZfMz0qZcO7K1y', '2016-06-29 21:37:15', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:14:"ROLE_PROFESSOR";}', 0, NULL, 'Berry', 'Vincent', 32),
(7, 'JRuiz', 'jruiz', 'jruiz@univ-montp2.fr', 'jruiz@univ-montp2.fr', 1, 'rua53vs5ceo8ogwgccoo04k0cw40s4g', '$2y$13$rua53vs5ceo8ogwgccoo0uDTYwIhfqXMhqzZaZ5a0mkekd9UbAIoi', '2016-06-29 21:33:32', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:14:"ROLE_PROFESSOR";}', 0, NULL, 'Ruiz', 'Jacques', 33),
(8, 'ASaintMartin', 'asaintmartin', 'saint-martin@avocat.fr', 'saint-martin@avocat.fr', 1, 'p65r2l1et9cgc8s8s8koggcg0sss440', '$2y$13$p65r2l1et9cgc8s8s8kogeInJFAOLpYUwY65vZGX8vwlVnKzLrmiG', '2016-06-29 22:07:30', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:14:"ROLE_PROFESSOR";}', 0, NULL, 'Saint Martin', 'Axel', 34),
(9, 'GToulemonde', 'gtoulemonde', 'gwladys.toulemonde@univ-montp2.fr', 'gwladys.toulemonde@univ-montp2.fr', 1, 'rzyd4w9j074wooogw8ogcskos0kokgk', '$2y$13$rzyd4w9j074wooogw8ogcemBadOcXMxlGKrdGCK77RC0jH69S0J9G', '2016-06-29 22:03:52', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:14:"ROLE_PROFESSOR";}', 0, NULL, 'Toulemonde', 'Gwladys', 35);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `FK_D8698A763DA5256D` FOREIGN KEY (`image_id`) REFERENCES `file` (`id`),
  ADD CONSTRAINT `FK_D8698A76AFC2B591` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`),
  ADD CONSTRAINT `FK_D8698A76C33F7837` FOREIGN KEY (`document_id`) REFERENCES `file` (`id`),
  ADD CONSTRAINT `FK_D8698A76DE12AB56` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`);

--
-- Constraints for table `log_document`
--
ALTER TABLE `log_document`
  ADD CONSTRAINT `FK_B63A41A910BC6D9F` FOREIGN KEY (`changed_by`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_B63A41A9C33F7837` FOREIGN KEY (`document_id`) REFERENCES `document` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D6493DA5256D` FOREIGN KEY (`image_id`) REFERENCES `file` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
