-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 09 déc. 2019 à 20:28
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pointage`
--

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `id` int(11) NOT NULL,
  `nom` varchar(225) NOT NULL,
  `prenom` varchar(225) NOT NULL,
  `matricule` varchar(225) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `cin` varchar(225) NOT NULL,
  `createdAt` datetime NOT NULL,
  `date_naissance` date NOT NULL,
  `email` varchar(225) NOT NULL,
  `telephone` varchar(225) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `salaire` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id`, `nom`, `prenom`, `matricule`, `photo`, `cin`, `createdAt`, `date_naissance`, `email`, `telephone`, `sexe`, `salaire`) VALUES
(11, 'Salah', 'hfjhg', 'e11', 'by', '', '2019-12-05 01:02:48', '2019-12-25', 'bjy', 'v', 'Homme', 120),
(15, 'Salah', 'salah', 'e12', 'mm', 'EE', '2019-12-06 23:51:56', '2019-12-26', 'EE@gmail.com', '0639610866', 'Homme', 12000),
(19, 'sam', 'mpa', 'e14', 'image/image-1.png', 'ee56', '2019-12-07 18:24:12', '2019-12-17', 'nbjbjb', 'jb', 'Homme', 12223),
(20, 'Salah', 'salah', 'e13XXX', 'image/e13XXX-asasasasasasas.jpg', 'mllo', '2019-12-08 13:23:27', '2019-12-06', 'sasasa', '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `pointage`
--

CREATE TABLE `pointage` (
  `id` int(11) NOT NULL,
  `employe_id` int(11) NOT NULL,
  `date_pointage` datetime NOT NULL,
  `etat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pointage`
--

INSERT INTO `pointage` (`id`, `employe_id`, `date_pointage`, `etat`) VALUES
(7, 11, '2019-12-01 03:34:18', ''),
(8, 12, '2019-04-11 02:13:11', ''),
(9, 11, '2018-12-12 03:34:18', ''),
(10, 12, '2018-12-01 02:13:11', ''),
(11, 11, '2019-12-05 23:27:44', ''),
(12, 11, '2019-12-05 23:29:46', ''),
(13, 11, '2019-12-05 23:31:21', ''),
(14, 11, '2019-12-05 23:31:32', ''),
(15, 11, '2019-12-05 23:31:38', ''),
(16, 11, '2019-12-05 23:31:40', ''),
(17, 11, '2019-12-05 23:31:42', ''),
(18, 11, '2019-12-05 23:39:34', ''),
(19, 11, '2019-12-05 23:45:02', ''),
(20, 11, '2019-12-05 23:45:13', ''),
(21, 14, '2019-12-05 23:45:57', ''),
(22, 11, '2019-12-05 23:46:13', ''),
(23, 11, '2019-12-06 00:01:43', ''),
(24, 11, '2019-12-06 00:22:29', ''),
(25, 12, '2019-12-06 14:04:21', ''),
(26, 11, '2019-12-06 14:04:24', ''),
(27, 13, '2019-12-06 17:07:36', ''),
(28, 11, '2019-12-06 20:11:18', ''),
(29, 11, '2019-12-06 20:22:32', ''),
(31, 15, '2019-12-06 22:14:52', ''),
(32, 13, '2019-12-06 22:14:56', ''),
(33, 12, '2019-12-06 22:15:04', ''),
(34, 12, '2019-12-06 22:15:16', ''),
(35, 14, '2019-12-06 22:15:22', ''),
(36, 15, '2019-12-06 22:15:48', ''),
(37, 0, '2019-12-03 10:52:09', ''),
(57, 11, '2019-12-07 13:47:38', ''),
(58, 15, '2019-12-07 13:48:45', ''),
(59, 15, '2019-12-07 13:49:28', ''),
(60, 11, '2019-12-07 14:26:38', ''),
(61, 15, '2019-12-07 14:26:46', ''),
(62, 11, '2019-12-08 17:29:39', ''),
(63, 11, '2019-12-08 17:29:51', ''),
(64, 11, '2019-12-08 17:33:12', ''),
(65, 11, '2019-12-08 17:33:39', ''),
(66, 11, '2019-12-08 17:34:01', ''),
(67, 11, '2019-12-08 17:34:21', ''),
(68, 11, '2019-12-08 17:34:32', ''),
(69, 11, '2019-12-08 17:36:19', ''),
(70, 11, '2019-12-09 01:49:32', 'Sortir'),
(71, 11, '2019-12-09 01:50:21', 'Sortir'),
(72, 11, '2019-12-09 01:50:27', 'Entrée'),
(73, 11, '2019-12-09 01:50:31', 'Sortir'),
(74, 11, '2019-12-09 01:50:33', 'Entrée'),
(75, 11, '2019-12-09 01:50:34', 'Sortir'),
(76, 11, '2019-12-09 01:50:35', 'Entrée'),
(77, 11, '2019-12-09 01:50:36', 'Sortir'),
(78, 11, '2019-12-09 01:50:37', 'Entrée'),
(79, 11, '2019-12-09 01:50:38', 'Sortir'),
(80, 11, '2019-12-09 01:50:38', 'Entrée'),
(81, 11, '2019-12-09 01:50:39', 'Sortir'),
(82, 11, '2019-12-09 01:52:39', 'Entrée'),
(83, 11, '2019-12-09 01:52:41', 'Sortir'),
(84, 11, '2019-12-09 01:52:43', 'Entrée'),
(85, 11, '2019-12-09 01:54:32', 'Sortir'),
(86, 11, '2019-12-09 01:54:55', 'Entrée'),
(87, 11, '2019-12-09 01:55:16', 'Sortir'),
(88, 11, '2019-12-09 01:55:34', 'Entrée'),
(89, 11, '2019-12-09 01:55:35', 'Sortir'),
(90, 11, '2019-12-09 01:55:36', 'Entrée'),
(91, 11, '2019-12-09 01:55:38', 'Sortir'),
(92, 11, '2019-12-09 01:58:46', 'Entrée'),
(93, 11, '2019-12-09 01:58:48', 'Sortir'),
(94, 11, '2019-12-09 01:59:00', 'Entrée'),
(95, 11, '2019-12-09 01:59:01', 'Sortir'),
(96, 11, '2019-12-09 01:59:02', 'Entrée'),
(97, 11, '2019-12-09 02:03:20', 'Sortir'),
(98, 11, '2019-12-09 02:08:25', 'Sortir'),
(99, 11, '2019-12-09 02:09:18', 'Entrée'),
(100, 11, '2019-12-09 02:09:30', 'Sortir'),
(101, 11, '2019-12-09 02:09:42', 'Entrée'),
(102, 11, '2019-12-09 02:10:01', 'Sortir'),
(103, 11, '2019-12-09 02:10:17', 'Entrée'),
(104, 11, '2019-12-09 02:10:28', 'Sortir'),
(105, 11, '2019-12-09 02:10:44', 'Entrée'),
(106, 11, '2019-12-09 02:10:56', 'Sortir'),
(107, 15, '2019-12-09 02:12:12', 'Sortir'),
(108, 15, '2019-12-09 02:12:24', 'Entrée'),
(109, 11, '2019-12-09 20:26:00', 'Entrée'),
(110, 11, '2019-12-09 20:26:11', 'Sortir'),
(111, 11, '2019-12-09 20:26:27', 'Entrée'),
(112, 11, '2019-12-09 20:26:46', 'Sortir');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`_id`, `name`, `email`, `password`, `image`) VALUES
(1, 'test', 'a', '$2y$10$OqBTYlb/ME86QkIzrFoADObwMhM2.eI8Sr7uQElQOS9uKLB.vRfUS', 'fsdfsdf');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matricule` (`matricule`);

--
-- Index pour la table `pointage`
--
ALTER TABLE `pointage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `pointage`
--
ALTER TABLE `pointage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
