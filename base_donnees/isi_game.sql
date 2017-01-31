-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 27 Janvier 2017 à 11:30
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `isi_game`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(256) DEFAULT NULL,
  `prix` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `name`, `description`, `category_id`, `image`, `prix`) VALUES
(1, 'Assasin creed syndicate', NULL, 2, 'assasin_creed_xbox.png', '30.99'),
(3, 'Avengers lego', NULL, 2, 'avengers_xbox.png', '25.99'),
(2, 'Avatar', NULL, 5, 'avatar_psp.png', '10.99'),
(5, 'Batman arkham origins', NULL, 7, 'batman_xbox.png', '34.99'),
(6, 'Star Wars battlefront', NULL, 1, 'battle_ps4.png', '40.99'),
(8, 'Super mario bros U', NULL, 6, 'bros_wii.png', '23.99'),
(10, 'Call of duty black ops 2', NULL, 1, 'call_of_duty_ps4.png', '40.99'),
(11, 'Call of duty', NULL, 3, 'call_pc.png', '23.99'),
(12, 'Dead or alive 5', NULL, 3, 'dead_pc.png', '10.99'),
(13, 'The division', NULL, 1, 'division_ps4.png', '45.99'),
(14, 'Donkey kong country', NULL, 6, 'donkey_wii.png', '16.99'),
(15, 'Dragon ball xenoverse 2', NULL, 1, 'dragon_ball_ps4.png', '41.99'),
(16, 'Driver', NULL, 3, 'driver_pc.png', '16.99'),
(17, 'Dying light', NULL, 1, 'dying_ps4.png', '35.99'),
(18, 'Fifa 07', NULL, 3, 'fifa_pc.png', '9.99'),
(19, 'Fifa 17', NULL, 1, 'fifa_ps4.png', '34.99'),
(20, 'Fifa 13', NULL, 5, 'fifa_psp.png', '4.99'),
(21, 'Final fantasy XV', NULL, 1, 'final_fantasy_ps4.png', '40.99'),
(22, 'Football manager', NULL, 3, 'football_pc.png', '15.99'),
(23, 'God of war', NULL, 8, 'gow_ps3.png', '16.99'),
(24, 'Grand theft auto SanAndreas', NULL, 3, 'gta_pc.png', '12.99'),
(25, 'Grand theft auto V', NULL, 1, 'gta_ps4.png', '38.99'),
(26, 'Grand theft auto Triple edition', NULL, 5, 'gtaa_psp.png', '13.99'),
(27, 'Hobbit lego', NULL, 6, 'hobbit_wii.png', '10.99'),
(28, 'The last of us', NULL, 8, 'hte_last_ps3.png', '20.99'),
(29, 'Injustice', NULL, 1, 'injustice_ps4.png', '35.99'),
(30, 'Yoshi island', NULL, 6, 'island_wii.png', '14.99'),
(31, 'Kao challengers', NULL, 5, 'kao_psp.png', '2.99'),
(34, 'Mass effect andromeda', NULL, 3, 'mass_pc.png', '50.99'),
(35, 'Personna Portable', NULL, 5, 'megami_psp.png', '12.99'),
(36, 'Metal gearsolid V ground zeroes', NULL, 7, 'metal-gear_xbox.png', '21.99'),
(37, 'Epic mickey the power of 2', NULL, 6, 'mickey_wii.png', '10.99'),
(38, 'Mortal kombat XL', NULL, 1, 'mortal_kombat_ps4.png', '26.99'),
(39, 'Motocross madness', NULL, 3, 'motocross_pc.png', '5.99'),
(40, 'Nba2K17', NULL, 1, 'nba_ps4.png', '35.99'),
(41, 'Nba2K16', NULL, 2, 'nba_xbox.png', '24.99'),
(42, 'Neptunia', NULL, 5, 'neptunia_psvita.png', '15.99'),
(43, 'Need for speed Shift', NULL, 5, 'nfs_psp.png', '8.99'),
(45, 'Pes 2017', NULL, 3, 'pes_pc.png', '49.99'),
(47, 'Pokemon tournament', NULL, 6, 'pokemon_wii.png', '25.99'),
(50, 'WWE 2010', NULL, 5, 'raw_psp.png', '10.99'),
(51, 'Shadow warrior 2', NULL, 3, 'shadow_pc.png', '24.99'),
(52, 'Sims 4', NULL, 3, 'sims_pc.png', '40.99'),
(53, 'Sims castaway', NULL, 5, 'sims_psp.png', '8.99'),
(54, 'Sniper elite 4', NULL, 1, 'sniper_ps4.png', '20.99'),
(55, 'Sonic lost world', NULL, 6, 'sonic_wii.png', '25.99'),
(56, 'Ultimate alliance 2', NULL, 5, 'spider_psp.png', '14.99'),
(57, 'The red', NULL, 5, 'the_red_psp.png', '11.99'),
(58, 'Captain toad', NULL, 6, 'toad_wii.png', '23.99'),
(59, 'Tomb raider', NULL, 1, 'tomb_raider.png', '32.99'),
(60, 'Tortue ninjas', NULL, 2, 'tortue_ninja_xbox.png', '20.99'),
(61, 'Uncharted 2', NULL, 8, 'uncharted_ps3.png', '32.99'),
(62, 'Vietcong', NULL, 3, 'vietcong_pc.png', '7.99'),
(63, 'Wall.E', NULL, 3, 'waall_pc.png', '4.99'),
(64, 'The walking dead', NULL, 8, 'walking_dead_ps3.png', '40.99'),
(65, 'Crowlanser', NULL, 5, 'wayfarer_psp.png', '13.99'),
(66, 'Zombi', NULL, 3, 'zombie_pc.png', '21.99');

-- --------------------------------------------------------

--
-- Structure de la table `article_category`
--

CREATE TABLE `article_category` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` varchar(1024) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article_category`
--

INSERT INTO `article_category` (`id`, `name`, `description`) VALUES
(1, 'jeux_ps4', 'Tout les jeux vidéo sur ps4'),
(2, 'jeux_xboxone', 'Tout les jeux vidéos  sur xboxone'),
(3, 'jeux_pc', 'Tout les jeux vidéos sur pc'),
(4, 'materiel', 'Tout nos matériel pour le jeux vidéo'),
(5, 'jeux_psp', 'Tout les jeux sur psp'),
(6, 'jeux_wii', 'Tout les jeux sur wii'),
(7, 'jeux_xbox360', 'Tout les jeux sur xbox360'),
(8, 'jeux_ps3', 'Tout les jeux sur ps3');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT pour la table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
