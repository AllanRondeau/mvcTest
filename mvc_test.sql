-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 20 oct. 2023 à 11:37
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mvc_test`
--

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `synopsis` text NOT NULL,
  `genre` varchar(255) NOT NULL,
  `scriptwriter` varchar(255) NOT NULL,
  `production_company` varchar(255) NOT NULL,
  `year_release` varchar(4) NOT NULL,
  `film_producer` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`id`, `title`, `synopsis`, `genre`, `scriptwriter`, `production_company`, `year_release`, `film_producer`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'dqsd', 'qsdqsd', 'qsdqs', 'sdqs', 'qsdqsd', '2019', 'qsdq', '2023-10-19 10:00:51', '2023-10-19 10:00:51', '2023-10-19'),
(2, 'titanic', 'test', 'drame', 'lui', 'testest', '2020', 'lui', '2023-10-19 10:46:00', '2023-10-19 10:46:00', '2023-10-19'),
(3, 'test', 'kshdgcyidcguskd', 'test', 'sdifshd', 'gchsdcbsdkjk', '2004', 'bchsdbchsdj', '2023-10-19 11:52:09', '2023-10-19 17:00:26', '2023-10-19'),
(4, 'dqsd', 'qsd', 'qqsd', 'qsd', 'qsd', '2010', 'qsd', '2023-10-19 11:52:43', '2023-10-19 11:52:43', '2023-10-19'),
(5, 'dd', 'dd', 'dd', 'dd', 'dd', '2010', 'dd', '2023-10-19 11:53:08', '2023-10-19 11:53:08', '2023-10-19'),
(6, 'qdqs', 'qsd', 'qsd', 'sqd', 'qsd', '2010', 'qsd', '2023-10-19 11:54:45', '2023-10-19 11:54:45', '2023-10-19'),
(7, 'qsd', 'qsd', 'qsd', 'qsd', 'qsd', '2020', 'qsd', '2023-10-19 11:58:57', '2023-10-19 11:58:57', '2023-10-19'),
(8, 'dqsdsdfsdgsrs', 'dtrjgdfyihvuk', 'qs', 'dsf', 'sdf', '2010', 'sdfs', '2023-10-19 11:59:23', '2023-10-19 11:59:23', '2023-10-19'),
(9, 'dqsdsdfsdgsrs', 'dtrjgdfyihvuk', 'qs', 'dsf', 'sdf', '2010', 'sdfs', '2023-10-19 11:59:37', '2023-10-19 11:59:37', '2023-10-19'),
(10, 'QSD', 'QSD', 'QSD', 'QSD', 'SDQS', '2000', 'QSD', '2023-10-19 11:59:58', '2023-10-19 11:59:58', '2023-10-19'),
(11, 'qsd', 'qsd', 'qsd', 'qsd', 'qsd', '2010', 'qsd', '2023-10-19 16:40:19', '2023-10-19 16:40:19', NULL),
(12, 'dfdfproutddffs', 'jshdfghj', 'testdsd', 'sjhdvch', 'sdf', '1992', 'sdfsdf', '2023-10-20 09:51:22', '2023-10-20 09:58:10', NULL),
(13, 'titanic 2', 'Film romantique/dramatique. Suivi d\'une histoire d\'amour entre jack et rose sur le célèbre titanic et reconstitution du naufrage du navire', 'drame', 'James Cameron', '20th Century Fox', '1980', 'James Cameron', '2023-10-20 11:34:44', '2023-10-20 11:34:50', '2023-10-20');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'test@test.com', '9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08', '2023-10-16', '2023-10-16'),
(3, 'test2@test.com', '16b87c342c513d45ece031fbae1a1189ec5e3bc63e3e39b9bd8f583f526b7f98', '2023-10-18', '2023-10-18'),
(4, 'test3@test.com', '16b87c342c513d45ece031fbae1a1189ec5e3bc63e3e39b9bd8f583f526b7f98', '2023-10-18', '2023-10-18'),
(7, 'test5@test.com', 'a544f49a44e1b75ef70d54123611651dae4cc59d2575a53670c1a6d691ef5dc1', '2023-10-18', '2023-10-18'),
(8, 'test6@test.com', '7546df0d5385f6a05d11c5a0388a5736466f31d5ab210fe486f377bd648459a5', '2023-10-18', '2023-10-18'),
(9, 'arondeau@gmail.com', 'a544f49a44e1b75ef70d54123611651dae4cc59d2575a53670c1a6d691ef5dc1', '2023-10-20', '2023-10-20');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `movies`
--
ALTER TABLE `movies`
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
-- AUTO_INCREMENT pour la table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
