-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 15 mars 2024 à 15:31
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
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `idProject` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `languages` varchar(255) NOT NULL,
  `git` varchar(255) NOT NULL,
  `website` varchar(2083) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`idProject`, `title`, `description`, `languages`, `git`, `website`, `img`, `type`) VALUES
(1, 'Mon portfolio', 'Réalisation de premier portfolio', 'HTML & CSS, Javascript, PHP', 'https://github.com/MaximeLecieux/_portfolio', 'https://lecieux.fr', 'assets\\img\\project-img-1.png', 'Website'),
(2, 'Garage V Parrot', 'Réalisation d\'une application web de présentation de garage. Cette application permet à l\'administrateur, depuis un pannel de commande, de modifier les informations du site (Horaires d\'ouverture, services réalisables aux garages, commentaires) ainsi que de présenter les véhicules disponible à la vente. Pour chaque voiture, une page de présentation est disponible. Projet ECF session juin 2024.', 'HTML & CSS, Bootstrap, JavaScript, PHP & SQL', 'https://github.com/MaximeLecieux/Garage_V.Parrot', 'https://garagevparrot.lecieux.fr', 'assets/img/project-img-2.png', ''),
(3, 'Mex\'Pressing', 'Réalisation d\'une application web de présentation du pressing Mex\'Pressing. Cette application permet à l\'administrateur, depuis un pannel de commande, de modifier les informations du site (Horaires d\'ouverture, services réalisables en boutique, galerie photo). Projet Final de présentation session octobre 2023.', 'HTML & CSS, Bootstrap, JavaScript, PHP & SQL', 'https://github.com/MaximeLecieux/MexPressing', 'https://mexpressing.lecieux.fr', 'assets/img/project-img-3.png', ''),
(4, 'Restaurant Quai Antique', 'Réalisation d\'une page de présentation du restaurant Quai Antique. Projet ECF session Octobre 2023', 'HTML & CSS, Bootstrap, JavaScript', 'https://github.com/MaximeLecieux/Restaurant_Quai_Antique', 'https://quaiantique.lecieux.fr', 'assets/img/project-img-4.jpg', ''),
(5, 'Association SCEP', 'Réalisation d\'un site web de présentation de l\'association SCEP. C\'est un projet d\'entrainement front-end.', 'HTML & CSS, Bootstrap', 'https://github.com/MaximeLecieux/Association-SCEP', 'https://associationscep.lecieux.fr', 'assets/img/project-img-5.jpg', ''),
(6, 'Ai Image Generator', 'Mini projet personnel avec utilisation de l\'IA afin de générer des images en fonction de la description donnée. Exercice d\'entrainement à l\'utilisation d\'une API.', 'HTML & CSS, Bootstrap, JavaScript', 'https://github.com/MaximeLecieux/Ai_Images_Generator', 'https://aigeneratorimage.lecieux.fr', 'assets/img/project-img-6.jpg', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`idProject`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `idProject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
