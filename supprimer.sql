-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 18 juil. 2024 à 00:24
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
-- Structure de la table `supprimer`
--

CREATE TABLE `supprimer` (
  `supp` int(10) UNSIGNED NOT NULL,
  `matricule` char(5) DEFAULT NULL,
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
  `cod_fil` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `supprimer`
--

INSERT INTO `supprimer` (`supp`, `matricule`, `nom`, `prenom`, `photo`, `mail`, `date_nais`, `sexe`, `addresse`, `tel`, `diplome`, `annee_dip`, `cod_fil`) VALUES
(1, '', 'GBAGUIDI', 'Gbèwanou Marie-nouss', 'WhatsApp Image 2023-12-16 à 20.32.24_27930560_240625_180340.jpg', 'nouss396@gmail.com', '2024-06-07', 'Masculin', 'BENIN', '90122612', 'Baccalauréat C', '0000-00-00', '2024-'),
(2, '1', 'GBAGUIDI', 'Gbèwanou Marie-nouss', 'WhatsApp Image 2023-12-16 à 20.32.24_27930560_240625_180340.jpg', 'nouss396@gmail.com', '2024-06-07', 'Masculin', 'BENIN', '90122612', 'Baccalauréat C', '0000-00-00', '2024-'),
(3, '2', 'GBAGUIDI', 'Gbèwanou Marie-nouss', 'WhatsApp Image 2023-12-16 à 20.32.24_27930560_240625_182522.jpg', 'nouss396@gmail.com', '2024-06-07', 'Masculin', 'BENIN', '90122612', 'Baccalauréat C', '0000-00-00', '2024-'),
(4, '3', 'GBAGUIDI', 'Gbèwanou Marie-nouss', 'Capture d’écran 2024-03-31 143250_240626_150130.png', 'nouss396@gmail.com', '2024-06-07', 'Masculin', 'BENIN', '90122612', 'Baccalauréat C', '2024-06-28', 'SI'),
(5, '6', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', ''),
(6, '5', 'GBAGUIDI', 'Gbèwanou Marie-nouss', 'Capture d’écran 2024-03-31 143250_240626_151232.png', 'nouss396@gmail.com', '2024-06-07', 'Masculin', 'BENIN', '90122612', 'Baccalauréat C', '2024-06-28', 'SI'),
(7, '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', ''),
(8, '7', 'Wealthgenix', 'Nouss', 'image_240627_140513.jpg', 'nousso396@gmail.com', '2024-06-05', 'Masculin', 'C/226 F-Jéricho COTONOU', '90122612', 'Baccalauréat C', '2024-06-15', 'SRT'),
(9, '8', 'AYIVO', 'Mirabelle', 'WhatsApp Image 2023-08-01 à 15.40.23_240628_214605.jpg', 'mirabelleayivoh@gmail.com', '2024-06-04', 'Masculin', 'C/226 F-Jéricho COTONOU', '90391353', 'Baccalauréat C', '2024-06-07', 'SI'),
(10, '13', 'GBAGUIDI', 'Gbèwanou Marie-nouss', 'image_240705_160613.jpg', 'nousso396@gmail.com', '2024-07-03', 'Masculin', 'BENIN', '90122612', 'Baccalauréat C', '2024-07-20', 'SRT'),
(11, '14', 'GBAGUIDI', 'Gbèwanou Marie-nouss', 'image_240710_093943.jpg', 'nousso396@gmail.com', '2024-07-02', 'Masculin', 'BENIN', '90122612', 'Baccalauréat C', '2008-12-24', 'SI');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `supprimer`
--
ALTER TABLE `supprimer`
  ADD PRIMARY KEY (`supp`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `supprimer`
--
ALTER TABLE `supprimer`
  MODIFY `supp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
