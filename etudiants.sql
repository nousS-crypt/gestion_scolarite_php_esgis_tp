-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 18 juil. 2024 à 00:25
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `elite`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `matricule` int(10) UNSIGNED NOT NULL,
  `nom` varchar(80) NOT NULL,
  `prenom` varchar(80) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `mail` varchar(80) DEFAULT NULL,
  `date_nais` date NOT NULL,
  `sexe` varchar(15) NOT NULL,
  `addresse` varchar(255) NOT NULL,
  `tel` varchar(8) NOT NULL,
  `diplome` varchar(50) NOT NULL,
  `annee_dip` date DEFAULT NULL,
  `cod_fil` char(5) DEFAULT NULL,
  `lieu` varchar(255) DEFAULT NULL,
  `classe` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`matricule`, `nom`, `prenom`, `photo`, `mail`, `date_nais`, `sexe`, `addresse`, `tel`, `diplome`, `annee_dip`, `cod_fil`, `lieu`, `classe`) VALUES
(4, 'GBAGUIDI', 'Gbèwanou Marie-nouss', 'WhatsApp Image 2023-12-16 à 20.32.24_27930560_240630_181659.jpg', 'nouss396@gmail.com', '2024-06-07', 'Masculin', 'BENIN', '90122612', 'Baccalauréat C', '2024-06-28', 'SI', 'Cotonou', 'L1'),
(9, 'AYIVO', 'Mirabelle', 'BINAIRE_240629_192817.jpeg', 'mirabelleayivoh@gmail.com', '2024-06-03', 'Masculin', '3183', '90122612', 'Baccalauréat C', '2024-06-30', 'SI', NULL, NULL),
(10, 'Astrid', 'GUEDOU', 'µBINAIRE2_240629_193213.jpeg', 'astridguedo4@gmail.com', '2024-06-23', 'Feminin', 'BENIN', '96471743', 'Baccalauréat C', '2024-06-22', 'SI', NULL, NULL),
(11, 'Chalome', 'MEGNIGBETO', 'OIP_240629_193344.jpeg', 'fannelle@gmail.com', '2024-06-14', 'Feminin', 'BENIN', '96961334', 'Baccalauréat C', '2024-06-20', 'SI', NULL, NULL),
(12, 'EKLOU', 'Bryan', 'Capture d’écran 2024-05-06 163741_240629_193453.png', 'bryan@gmail.com', '2024-06-08', 'Masculin', 'C/226 F-Jéricho COTONOU', '90122612', 'Diplome technique', '2024-06-08', 'AL', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`matricule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `matricule` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
