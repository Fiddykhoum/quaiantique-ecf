-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 21 fév. 2023 à 21:44
-- Version du serveur : 10.3.38-MariaDB-0+deb10u1
-- Version de PHP : 7.3.31-1~deb10u2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fiddy2051642`
--

-- --------------------------------------------------------

--
-- Structure de la table `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `cards`
--

INSERT INTO `cards` (`id`, `title`, `description`, `content`, `image`) VALUES
(63, 'Notre cuisine', 'Du matériel de pointe', 'Une cuisine moderne, équipée de toutes les dernières technologies liées au savoir faire de notre équipe', '63f4ff1152e1d-postes.cuisine.jpeg'),
(64, 'Brouillon 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(65, 'Brouillon 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.Lorem ipsum dolor sit amet consectetur adipisicing elit', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', NULL),
(66, 'Un restaurant chaleureux', 'Un cadre apaisant dans une ambiance chaleureuse ', 'Venez passer un moment de plaisir a déguster les plats de notre chef', '63f50861464b0-restaurant.1284351.960.720.jpg'),
(67, 'Un chef étoilé', 'La finesse d\'un grand chef', 'Venez gouter à des plats de très haute qualités, uniques et novateurs. ', '63f509ea083c6-salmon.1238248.960.720.jpg'),
(68, 'Notre équipe', 'Présentation du personnel de notre restaurant.', 'Nous comptons parmi nous les meilleurs cuisiniers de la région, ainsi que des serveurs et serveuses toujours à l\'écoute.', '63f510afe4b21-personnel.jpg'),
(69, 'Une décoration originale', 'L\'histoire de notre décoration, qui attire parfois les touristes !', 'La décoration a été créée par madame BAUVILLE, architecte très connue, et reconnue.', '63f5117e9151e-ampoules.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Entrée'),
(2, 'Plat'),
(3, 'Dessert');

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `menus`
--

INSERT INTO `menus` (`id`, `title`, `content`, `image`) VALUES
(16, 'Plat principal', 'Le plat principal, la principale raison de pourquoi vous venez ici (sinon vous êtes bizarre). Petite sélection des quelques plats disponibles : soupe aux choux, cordon bleu, salade de fruits de mer, et bien plus', '63f50ca92d03f-plat.principal.jpg'),
(4, 'Menu à 75€', 'Entrée:\r\nDes trucs pas frais\r\nD\'autre moins pires\r\n\r\nPlat:\r\n¨Pas mieux\r\nUn peu plus\r\n\r\nDessert:\r\nTrop copieux\r\nGlace', '63f3cb350c79f-fleur.copie.jpg'),
(12, 'Les entrées', 'Avant le plat principal vient l\'entrée, voici ce qu\'on vous propose, à votre disposition, un bar à salade, tartare, potages, huîtres, et bien plus !', '63f50b9eb9b0a-entree.jpg'),
(8, 'Gourmandise', 'Pour les plus gourmant, voici quelques exemples de nos meilleurs desserts : tartes au citron, meringues, donuts, et éclaires !', '63f50a6eb0d23-gateau.jpg'),
(18, 'Les boissons', 'Retrouvez les boissons les plus classiques ! Coca, Sprite, Schweppes, tonic, Diabolo...', '63f50d82ac85c-canettes.jpg'),
(14, 'Nos vins', 'Retrouvez dans notre restaurant les vins les plus raffinés de la région. Voici un avant-goût : Vin chaud, vin Perséphone, vin blanc, rose, etc...', '63f50bd744b19-vin.jpg'),
(20, 'De l\'alcool', 'Boissons alcoolisées pour tous le monde ! Whisky, bières blondes, brunes, et bien plus sont au rendez-vous !', '63f50de3e25e4-biere.jpg'),
(22, 'Plats festifs', 'Pour les festivités, nous faisons également des plats à thème : Saint-Valentin, Noël, Carnaval et Halloween.', '63f50e5777811-festif.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `ingredients` text NOT NULL,
  `instructions` text NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `recipes`
--

INSERT INTO `recipes` (`id`, `category_id`, `title`, `description`, `ingredients`, `instructions`, `image`) VALUES
(1, 1, 'Recette 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(2, 1, 'Recette 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(3, 1, 'Recette 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(4, 1, 'Recette 4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(5, 1, 'Recette 5', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(6, 1, 'Recette 6', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(7, 1, 'Recette 7', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(8, 1, 'Recette 8', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(9, 1, 'Recette 9', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(10, 1, 'Recette 10', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(11, 1, 'Recette 11', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(12, 1, 'Recette 12', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(13, 1, 'Recette 13', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(14, 1, 'Recette 14', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(15, 1, 'Recette 15', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(16, 1, 'Recette 16', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(17, 1, 'Recette 17', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(18, 1, 'Recette 18', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(19, 1, 'Recette 19', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(20, 1, 'Recette 20', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(21, 1, 'Recette 21', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(22, 1, 'Recette 22', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(23, 1, 'Recette 23', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(24, 1, 'Recette 24', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(25, 1, 'Recette 25', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(26, 2, 'Recette 26', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(27, 2, 'Recette 27', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(28, 2, 'Recette 28', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(29, 2, 'Recette 29', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(30, 2, 'Recette 30', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(31, 2, 'Recette 31', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(32, 2, 'Recette 32', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(33, 2, 'Recette 33', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(34, 2, 'Recette 34', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(35, 2, 'Recette 35', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(36, 2, 'Recette 36', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(37, 2, 'Recette 37', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(38, 2, 'Recette 38', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(39, 2, 'Recette 39', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(40, 2, 'Recette 40', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(41, 2, 'Recette 41', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(42, 2, 'Recette 42', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(43, 3, 'Recette 43', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(44, 3, 'Recette 44', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(45, 3, 'Recette 45', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(46, 3, 'Recette 46', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(47, 3, 'Recette 47', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(48, 3, 'Recette 48', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(49, 3, 'Recette 49', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, amet. Cum labore possimus ad vitae minima nesciunt commodi eos.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', NULL),
(54, 3, 'Mousse au chocolat', 'La mousse au chocolat est une véritable gourmandise qui plaira à tous les amateurs de chocolat. Cette recette est très simple à réaliser et ne nécessite que quelques ingrédients de base.', '200g de chocolat noir à pâtisser\r\n4 oeufs\r\n30g de sucre en poudre\r\n1 pincée de sel\r\nsdfsd', 'Faites fondre le chocolat au bain-marie ou au micro-ondes, puis laissez-le refroidir légèrement.\r\nSéparez les blancs des jaunes d\'oeufs. Mettez les blancs dans un saladier et réservez.\r\nDans un autre saladier, fouettez les jaunes d\'oeufs avec le sucre et le sel jusqu\'à ce que le mélange blanchisse.\r\nAjoutez le chocolat fondu aux jaunes d\'oeufs et mélangez bien.\r\nMontez les blancs en neige ferme et incorporez-les délicatement à la préparation au chocolat en prenant soin de ne pas casser les blancs.\r\nVersez la mousse dans des verrines ou dans un grand bol et réfrigérez pendant au moins 2 heures avant de déguster.', '1-chocolate-au-mousse.jpg'),
(55, 2, 'Gratin dauphinois', 'Le gratin dauphinois est une recette traditionnelle de la région de Dauphiné, située dans les Alpes françaises. Il se compose de fines tranches de pommes de terre cuites dans du lait et du beurre, le tout gratiné au four jusqu\'à ce qu\'il soit doré et croustillant.', '1 kg de pommes de terre à chair ferme\r\n1 litre de lait entier\r\n3 gousses d\'ail\r\n50 g de beurre\r\nSel et poivre', 'Préchauffez le four à 180°C (th. 6). Pelez et rincez les pommes de terre. Coupez-les en fines tranches à l\'aide d\'une mandoline ou d\'un couteau bien aiguisé.\r\nDans une grande casserole, faites chauffer le lait avec les gousses d\'ail épluchées et pressées. Ajoutez une pincée de sel et une poignée de poivre.\r\nQuand le lait commence à frémir, ajoutez les tranches de pommes de terre en les disposant en couches bien serrées. Laissez cuire à feu doux pendant environ 10 minutes, jusqu\'à ce que les pommes de terre soient tendres.\r\nÉgouttez les pommes de terre en conservant le lait chaud. Disposez les tranches de pommes de terre dans un plat à gratin beurré.\r\nVersez le lait chaud sur les pommes de terre en veillant à ce qu\'il recouvre entièrement les tranches. Parsemez le dessus de quelques noisettes de beurre.\r\nEnfournez le gratin pendant 30 à 40 minutes, jusqu\'à ce qu\'il soit doré et bien gratiné. Servez chaud, accompagné d\'une salade verte ou d\'une viande grillée.', '2-gratin-dauphinois.jpg'),
(58, 1, 'Salade de chèvre', 'La salade de chèvre est une préparation fraîche et légère, idéale pour les repas d\'été. Elle se compose de feuilles de salade, de tranches de poire et d\'émietté de chèvre frais, le tout assaisonné avec une vinaigrette légère à base d\'huile d\'olive et de vinaigre de vin.', '1 boule de chèvre frais\r\n1 botte de salade (laitue, roquette, mâche, etc.)\r\n1 poignée de noix (noisettes, amandes, noix de cajou, etc.)\r\n1 poire\r\nQuelques feuilles de menthe\r\n1 cuillère à soupe de vinaigrette (huile d\'olive, vinaigre de vin, moutarde, sel et poivre)', 'Commencez par laver et essorer votre salade. Découpez-la en fines lamelles et répartissez-la dans les assiettes.\r\nCoupez la poire en fines tranches et répartissez-les sur la salade.\r\nÉmiettez le chèvre et répartissez-le sur la salade.\r\nParsemez la salade de noix concassées et de feuilles de menthe ciselées.\r\nPréparez la vinaigrette en mélangeant une cuillère à soupe d\'huile d\'olive, une cuillère à soupe de vinaigre de vin, une pincée de moutarde, du sel et du poivre. Versez-la sur la salade et mélangez bien.\r\nServez la salade de chèvre fraîche, accompagnée d\'un pain croustillant.', '3-salade.jpg'),
(59, 1, 'Hoummous', 'Du houmous maison de haute qualité', '200 grammes de poids chiche\r\n1 gousse d\'ail\r\n1 càs de jus de citron\r\n70 gr de tahin\r\n', 'mixer des glaçons puis y ajouter les poids chiche cuits\r\najouter le tahin, le sel , le jus de citron et l\'ail\r\nmixer le tout', NULL),
(60, 2, 'Chemise épourvu', 'C\'est pas bon, faut pas en manger\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '1 galette salée\r\n1 poivron\r\n1 banane\r\ndu gingembre, mais pas beaucoup\r\n100 gr d\'épluchures de poires\r\nun peu de caramel mais pas beaucoup, mais quand même un peu mais faut pas  abuser, faut pas en mettre trop quoi.', 'Mettre du caramel dans l\'eau bouillant (environ 682°), remplir la casserole d\'eau de 3/4 + 1/4 ( attention à ne pas faire déborder)\r\nUne fois ma température atteinte, sortir le caramel (mais pas beaucoup, mais quand même un peu mais faut pas  abuser, faut pas en mettre trop quoi) avec une paille\r\npour ensuite venir la vomir su la galette en l\'étalant bien serrer les dents pour ne pas laisser passer de morceau.\r\nAjouter le poivron entier et la banane épluchée à l\'intérieur de la galette.\r\nPour finir,  jette moi ça et va te commander un tacos!!!!', '4-tacos.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `level`) VALUES
(1, 'Administrateur', '1', 1),
(2, 'Directeur', '2', 2),
(3, 'user', '3', 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role_id` int(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role_id`, `password`) VALUES
(1, 'fidadmin', 'fidadmin@email.com', 1, 'd4f84a8d7c95bf7814cee2b6bad678d7cb895f6a4e2c47daba13f08c7a474b0a'),
(6, 'fiddykhoum', 'fiddykhoum@email.com', 3, 'b479a474c99eb3a9bd3391fa199bf48ecf138ec71484c6a0f1bde8d66e646fba'),
(8, 'fiddy', 'fiddy@email.com', 3, '34f20fd4b024d614749b5da10139b69d9412bb7b8389fc4158e851297bd721c2'),
(9, 'zawinette', 'zawinette@email.com', 3, '3314204c4531160b28a580e6190fffcad1624f7ea461bcc23dd45678a2fd47ac'),
(10, 'zawinette', 'zawinette@email.com', 2, '3314204c4531160b28a580e6190fffcad1624f7ea461bcc23dd45678a2fd47ac'),
(11, 'trus', 'truse@email.com', 3, 'b4068ecd4f872890b0a88dd3b26383aa811a4b19146be6a599ab19cfff38c5bb'),
(12, 'encoreun', 'encoreun@email.com', 1, '94e183e136b2a3109ea6d297b5cad86b634f0af4364de546564f7dc12886b382'),
(13, 'fid', 'fid@email.com', 1, '9f0c710ce3e5bb37de415d96e55c4e7f1c8bee45db66b4cbf4141077948f02b2'),
(14, 'Adrien', 'Adrien@email.com', 2, '61d317b4dace195b3e8360b8eda6f2417e80d21af91badc3eeb37ab08d7925bc'),
(15, 'admin', 'admin@email.com', 1, '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918'),
(16, 'directeur', 'directeur@email.com', 2, '1cbf490a712b85da86e54e22a2129320d5f5b5e877801a43885ae79764f17bb1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
