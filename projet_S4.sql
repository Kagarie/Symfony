-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 25 mars 2021 à 12:57
-- Version du serveur :  10.5.9-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_S4`
--

-- --------------------------------------------------------

--
-- Structure de la table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `groupe_id` int(11) DEFAULT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `chemin_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `album`
--

INSERT INTO `album` (`id`, `groupe_id`, `titre`, `prix`, `chemin_image`) VALUES
(1, 1, 'T.N.T', 700, 'tnt.jpg'),
(2, 1, 'Back in Black', 700, 'ACDC-BackInBlack-Front.jpg'),
(3, 2, 'Bleach', 1400, 'bleach.jpg'),
(4, 2, 'Nervermind', 1500, 'copertina-nevermind-nirvana.webp'),
(5, 3, 'Life Is Peachy', 900, 'Life Is Peachy.jpg'),
(6, 3, 'Issues', 1600, 'korn_issues.jpg'),
(7, 4, 'L Aventurier', 600, 'aventurier.jpg'),
(8, 4, 'Le Baiser', 1600, 'le baiser.jpg'),
(9, 5, 'A Night at the Opera', 800, 'A_Night_at_the_Opera.jpg'),
(10, 5, 'Sheer Heart Attack', 1100, 'Sheer Heart Attack.jpg'),
(11, 6, 'Twist and Shout', 1700, 'Twist_and_Shout.jpg'),
(12, 6, 'Something New', 1600, 'Something_New.jpg'),
(13, 7, 'Destroyer', 900, 'destroyer.jpg'),
(14, 7, 'Love Gun', 1400, 'love gun.jpg'),
(15, 8, 'Killers', 600, 'Iron-Maiden-Killers.jpg'),
(16, 8, 'Fear of the Dark', 1200, 'album_iron_maiden_fear_of_the_dark.jpg'),
(17, 9, 'Love over Gold', 1200, 'Love over Gold.jpg'),
(18, 9, 'Brothers in Arms', 1600, 'BrothersDireStraits.png');

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_membre` int(11) NOT NULL,
  `chemin_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`id`, `nom`, `nombre_membre`, `chemin_logo`, `genre`) VALUES
(1, 'AC/DC', 5, 'F4SDAe.webp', 'Hard Rock'),
(2, 'Nirvana', 4, 'nirvana-logo-clipart-7.jpg', 'Grunge'),
(3, 'Korn', 5, 'Korn_Logo_Black.svg.png', 'Nu Metal'),
(4, 'Indochine', 5, '08a2fc63a41b40c7d014c79db154ffe9--indochine.jpg', 'Pop Rock'),
(5, 'Queen', 5, 'Queen1.png', 'Rock'),
(6, 'The Beatles', 4, 'the_beatles_vector_logo_by_dutchlion-d5ovg0i.jpg', 'Rock'),
(7, 'Kiss', 4, 'iphone4-Kiss-Logo.jpg', 'Glam Rock'),
(8, 'Iron Maiden', 6, 'iron-maiden-logo.jpg', 'Heavy Metal'),
(9, 'Dire Straits', 4, 'abab3424128727a422de1c22d4a19227.jpg', 'Blues Rock');

-- --------------------------------------------------------

--
-- Structure de la table `musique`
--

CREATE TABLE `musique` (
  `id` int(11) NOT NULL,
  `album_id` int(11) DEFAULT NULL,
  `chemin_musique` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `musique`
--

INSERT INTO `musique` (`id`, `album_id`, `chemin_musique`, `titre`) VALUES
(1, 2, 'ACDC-Back-in-black.mp3', 'Back In Black'),
(2, 1, 'ACDC-T.N.T.mp3', 'T.N.T'),
(3, 12, 'Beatles-And-I-Love-Her.mp3', 'And I Love Her'),
(4, 11, 'Beatles-Twist-And-Shout.mp3', 'Twist And Shout'),
(5, 18, 'Dire-Straits-Brothers-In-Arms.mp3', 'Brothers In Arms'),
(6, 17, 'Dire-Straits-Love-Over-Gold.mp3', 'Love Over Gold'),
(7, 7, 'Indochine-aventurier.mp3', 'L\'Aventurier'),
(8, 8, 'Indochine-Le-baiser.mp3', 'Le Baiser'),
(9, 16, 'Iron-maiden-fear-of-the-dark.mp3', 'Fear Of The Dark'),
(10, 15, 'Iron-Maiden-Killer.mp3', 'Killers'),
(11, 14, 'Kiss-Almost-Human.mp3', 'Almost Human'),
(12, 13, 'Kiss-Destroyer-Sweet-Pain.mp3', 'Sweet Pain'),
(13, 5, 'KORN-Lost.mp3', 'Lost'),
(14, 6, 'KORN-Trash.mp3', 'Trash'),
(15, 3, 'Nirvana-Blew.mp3', 'Blew'),
(16, 4, 'Nirvana-Come-As-You-Are.mp3', 'Come As You Are'),
(17, 10, 'Queen-Killer-Queen.mp3', 'Killer Queen'),
(18, 9, 'Queen-Sweet-Lady.mp3', 'Sweet Lady');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `nom`, `prenom`) VALUES
(1, 'user@user', '[]', '$argon2id$v=19$m=65536,t=4,p=1$d1cxeWltODB6d01Sby9TRg$g4uxv1OWUzKm+KsOdnBPnlHWwHqHWXEGa1maidY0fiY', 'user', 'user'),
(2, 'admin@admin', '[\"ROLE_USER\",\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$MDhPakhmUXdHa2c1NWJ2Ug$DhlqUBRg/2NXMeeqhqHSnnRfx0eAxx6fSeZKYMRha24', 'admin', 'admin'),
(3, 'superAdmin@superAdmin', '[\"ROLE_USER\",\"ROLE_SUPER_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$eGRiNkRUa0QySHhKQWgzaA$A4XJoRP22AbaI4Qfr4UHtp4TkQ4OiUCFt0L+sYAahf4', 'super_admin', 'super_admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_39986E437A45358C` (`groupe_id`);

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `musique`
--
ALTER TABLE `musique`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_EE1D56BC1137ABCF` (`album_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `musique`
--
ALTER TABLE `musique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `FK_39986E437A45358C` FOREIGN KEY (`groupe_id`) REFERENCES `groupe` (`id`);

--
-- Contraintes pour la table `musique`
--
ALTER TABLE `musique`
  ADD CONSTRAINT `FK_EE1D56BC1137ABCF` FOREIGN KEY (`album_id`) REFERENCES `album` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
