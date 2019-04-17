-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 17 avr. 2019 à 07:43
-- Version du serveur :  10.1.32-MariaDB
-- Version de PHP :  7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `crud1`
--

-- --------------------------------------------------------

--
-- Structure de la table `persons`
--

CREATE TABLE `persons` (
  `id` int(100) NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(255) COLLATE utf8_bin NOT NULL,
  `birthday` date NOT NULL,
  `contact` int(25) NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `ville` varchar(100) COLLATE utf8_bin NOT NULL,
  `ecole` varchar(100) COLLATE utf8_bin NOT NULL,
  `commune` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `persons`
--

INSERT INTO `persons` (`id`, `nom`, `prenom`, `birthday`, `contact`, `email`, `ville`, `ecole`, `commune`) VALUES
(8, 'soumahoro', 'hamed', '1997-12-25', 87008315, 'hamedsoum4023@gmail.com', 'abidjan', 'nan', 'Treichville'),
(12, 'dosso', 'youssouf', '1987-05-08', 25121425, 'marc@gmail.com', 'yamoussoukro', 'uvci', 'Marcory'),
(13, 'soumahoro', 'mamadou', '2018-04-25', 40231364, 'soumahoro@gmail.com', 'abidjan', 'universitÃ© felix houphouet boigny', 'Portbouet');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
