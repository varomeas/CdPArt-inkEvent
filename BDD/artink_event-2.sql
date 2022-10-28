-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 28 oct. 2022 à 11:07
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `artink_event`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `createurs`
--

CREATE TABLE `createurs` (
  `id_createur` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `bio` text NOT NULL,
  `origine` varchar(50) NOT NULL,
  `metier` varchar(50) NOT NULL,
  `url_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `createurs`
--

INSERT INTO `createurs` (`id_createur`, `nom`, `prenom`, `age`, `bio`, `origine`, `metier`, `url_photo`) VALUES
(1, 'Plescia-Buchi', 'Maxime', 44, 'Maxime Plescia-Büchi est tatoueur et directeur artistique. Il a travaillé dans le design avant de fonder le magazine Sang Bleu. Il a également fait son apprentissage de tatoueur auprès de Filip Leu dans sa ville natale de Lausanne en 2006.\r\nDe retour à Londres, Plescia-Büchi ouvre le studio de tatouage Sang Bleu et fonde Swiss Typefaces et Novembre Magazine.', 'Angleterre', 'Tatoueur', 'img/artistes/maxime.jpg'),
(2, 'Queipo', 'Dani', 30, 'Dani est largement connu de la communauté mondiale du tatouage, en raison de ses superbes tatouages Old School. Ils ont une exécution technique parfaite et contiennent également des tracés qui permettent de reconnaître l\'artiste parmi des milliers d\'autres tatoueurs dans ce domaine.\r\nDes couleurs vives, des lignes nettes et audacieuses et une échelle d\'images suffisamment grande avec une exécution impeccable des détails sont le meilleur moyen de représenter les classiques impérissables du tatouage.', 'Angleterre', 'Tatoueur', 'img/artistes/dani.jpg'),
(3, 'Dodie', '', 42, 'Forte de ses 21 années d\'expérience, cette experte a réussi à se faire son propre nom dans l\'univers du tatouage en créant son propre style : féminin et délicat mariant fleurs et dentelles. En plus de participer à l\'émission Tatoo Cover sur TFX, elle est cheffe de son salon l\'Heure Bleue.\r\n', 'France', 'Tatoueuse', 'img/artistes/dodie.jpg'),
(4, 'Riffard', 'Sandry', 33, 'Sandry Riffard est un tatoueur venant du Puy-En-Velay. A 33 ans, il est un tatoueur incontournable au Puy-En-Velay. Son style gothique et sa patte le rendent spécial et ses clients ne sont pas déçus, c\'est toujours plaisant d\'aller se faire tatouer chez lui.', 'France', 'Tatoueur', 'img/artistes/sandry.jpg'),
(5, 'Mottin', 'Jean-Pierre', 36, 'Tatoueur liégeois, Jean-Pierre Mottin s\'est fait remarquer lors d\'un précédent Mondial du tatouage de Paris. Sa technique fétiche est le dotwork, ça consiste à créer un motif grâce à des centaines de petits points. Il fait aussi beaucoup de tatouage de style mosaïque.', 'Belgique', 'Tatoueur', 'img/artistes/jpmottin.jpg'),
(6, 'Bersekov', 'Inal', 33, 'Inal Bersekov vient de Verviers, il est l\'un des plus doué dans le domaine du tatouage hyper réaliste, il a tatoué de nombreuses célébrité comme Steven Defour ou encore Drake. Pour atteindre la perfection de ses tatouages il a du travailler son style durant de nombreuses années.', 'Belgique', 'Tatoueur', 'img/artistes/inal.jpg'),
(7, 'Machlev', 'Chaim', 35, 'Chaim Machlev est un tatoueur localisé à Berlin, sont style se traduit par des formes abstraites et de fresques. C\'est un maitre dans l\'art de la symétrie. De plus, il a des millions de fan qui veulent avoir leur tatouage fait par lui.', 'Allemagne', 'Tatoueur', 'img/artistes/dotstolines.jpg'),
(8, 'Aurisch', 'Peter', 0, 'Peter Aurisch est un tatoueur Berlinois, son esprit très créatif lui permet de rendre ses tatouages assez originaux. Son style graphique et coloré donne de superbes résultats.', 'Allemagne', 'Tatoueur', 'img/artistes/peter.jpg'),
(9, 'Filhol', 'Lucile', 24, 'Cette jeune artiste cantalienne à laissé tomber ses études en design graphique à Lyon pour se consacrer au dessin. Elle est tombée amoureuse de la ville du Puy en Velay depuis son plus jeune âge et aujourd\'hui, elle croque la ville à travers ses oeuvres originales qu\'elle partage et qu\'elle vend via les réseaux sociaux, sous le nom \"Ma vie de Lune\"', 'Française ', 'Dessinatrice', 'img/artistes/lucile.jpg'),
(10, 'Chevalier', 'Lou', 22, 'Jeune perceuse du Puy en Velay, Lou travaille dans un petit studio. Le sérieux de sa pratique a été reconnu par la fidélité de ses clients.', 'Française', 'Perceuse', 'img/artistes/maviedereve.jpg'),
(11, '', 'Elena', 32, 'Elena travaille à Yssingeaux une petite ville à côté du Puy-en-Velay dans laquelle elle fait également de l’esthétisme comme par exemple du réchauffement de cil.', 'Française', 'Perceuse', 'img/artistes/elena.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `participent`
--

CREATE TABLE `participent` (
  `creneaux` varchar(11) DEFAULT NULL,
  `id_periode` int(11) NOT NULL,
  `id_createur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `participent`
--

INSERT INTO `participent` (`creneaux`, `id_periode`, `id_createur`) VALUES
(NULL, 1, 1),
(NULL, 1, 2),
(NULL, 1, 3),
(NULL, 1, 4),
(NULL, 1, 5),
(NULL, 1, 6),
(NULL, 1, 7),
(NULL, 1, 8),
(NULL, 1, 10),
(NULL, 1, 11),
(NULL, 2, 1),
(NULL, 2, 2),
(NULL, 2, 3),
(NULL, 2, 4),
(NULL, 2, 5),
(NULL, 2, 6),
(NULL, 2, 7),
(NULL, 2, 8),
('14h-16h', 2, 9),
(NULL, 2, 10),
(NULL, 2, 11),
(NULL, 3, 1),
(NULL, 3, 2),
(NULL, 3, 3),
(NULL, 3, 4),
(NULL, 3, 5),
(NULL, 3, 6),
(NULL, 3, 7),
(NULL, 3, 8),
(NULL, 3, 10),
(NULL, 3, 11);

-- --------------------------------------------------------

--
-- Structure de la table `periode`
--

CREATE TABLE `periode` (
  `id_periode` int(2) NOT NULL,
  `jour` date NOT NULL,
  `horaire_debut` time NOT NULL,
  `horaire_fin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `periode`
--

INSERT INTO `periode` (`id_periode`, `jour`, `horaire_debut`, `horaire_fin`) VALUES
(1, '2023-06-30', '13:00:00', '20:00:00'),
(2, '2023-07-01', '10:00:00', '20:00:00'),
(3, '2023-07-02', '10:00:00', '20:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `reservent`
--

CREATE TABLE `reservent` (
  `id_client` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL,
  `nb_places` int(2) NOT NULL,
  `prix_a_payer` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `createurs`
--
ALTER TABLE `createurs`
  ADD PRIMARY KEY (`id_createur`);

--
-- Index pour la table `participent`
--
ALTER TABLE `participent`
  ADD PRIMARY KEY (`id_periode`,`id_createur`),
  ADD KEY `id_createur` (`id_createur`);

--
-- Index pour la table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Index pour la table `reservent`
--
ALTER TABLE `reservent`
  ADD PRIMARY KEY (`id_client`,`id_periode`),
  ADD KEY `id_periode` (`id_periode`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `createurs`
--
ALTER TABLE `createurs`
  MODIFY `id_createur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `periode`
--
ALTER TABLE `periode`
  MODIFY `id_periode` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `participent`
--
ALTER TABLE `participent`
  ADD CONSTRAINT `participent_ibfk_1` FOREIGN KEY (`id_createur`) REFERENCES `createurs` (`id_createur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `participent_ibfk_2` FOREIGN KEY (`id_periode`) REFERENCES `periode` (`id_periode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservent`
--
ALTER TABLE `reservent`
  ADD CONSTRAINT `reservent_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservent_ibfk_2` FOREIGN KEY (`id_periode`) REFERENCES `periode` (`id_periode`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
