-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 13 jan. 2022 à 16:52
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
-- Base de données : `immovable`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passphrase` varchar(1000) NOT NULL,
  `tel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pseudo`, `email`, `passphrase`, `tel`) VALUES
(1, 'bino', 'admin', 'fabienbrou99@gmail.com', 'root', '0022504774183');

-- --------------------------------------------------------

--
-- Structure de la table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `postdate` datetime NOT NULL,
  `location` varchar(255) NOT NULL,
  `area` int(11) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `property`
--

INSERT INTO `property` (`id`, `owner`, `tel`, `postdate`, `location`, `area`, `details`, `price`) VALUES
(3, 'Kylee Joyce', '+1 (273) 454-3555', '2022-01-13 12:00:00', 'Et culpa aut repudia', 124, 'Et similique consequ', 531),
(4, 'Mark Oliver', '+1 (876) 261-6284', '2022-01-13 12:00:00', 'Qui nostrud ullam te', 334, 'Fuga Eum sunt labor', 334),
(5, 'Caryn Shepherd', '+1 (421) 964-4345', '2022-01-13 12:00:00', 'Occaecat illum exer', 34, 'Ut sint neque offici', 962),
(6, 'Caryn Shepherd', '+1 (421) 964-4345', '2022-01-13 12:00:00', 'Occaecat illum exer', 34, 'Ut sint neque offici', 962),
(7, 'Alexandra Ray', '+1 (693) 504-7314', '2022-01-13 12:00:00', 'Possimus ut dolor r', 22, 'Nisi non magni ad se', 265),
(8, 'Bell Gill', '+1 (103) 926-4539', '2022-01-13 12:00:00', 'Itaque sint cupidata', 72, 'At est excepteur ut ', 936),
(9, 'Caldwell Roach', '+1 (304) 382-6853', '2022-01-13 12:00:00', 'Odit culpa deserunt ', 27, 'Voluptatem ipsum la', 579),
(10, 'Castor Fischer', '+1 (515) 834-7329', '2022-01-13 12:00:00', 'Magna eum sunt quibu', 11, 'Quae enim velit labo', 96);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
