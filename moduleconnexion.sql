-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 20 nov. 2020 à 14:30
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `moduleconnexion`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `prenom`, `nom`, `password`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(13, 'b', 'bah', 'b', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(14, 'salah', 'alpha', 'azar', '23b23be9da2519c88f11c084310bcc0bf14417f8'),
(15, 'admin', 'omega', 'bah', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(16, 'salah', 'salah', 'salah', '2dcc3820e64b3d1a7866b22935c695fd6aa3980a'),
(17, 'b', 'b', 'b', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(18, 'admin', 'b', 'b', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(19, 'admin', 'b', 'b', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(21, 'iba', 'iba', 'iba', '39dfa55283318d31afe5a3ff4a0e3253e2045e43'),
(22, 'zlatan', 'ibrahima', 'bah', '8cb2237d0679ca88db6464eac60da96345513964');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
