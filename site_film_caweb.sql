-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 26 mai 2023 à 09:32
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `site_film_caweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `Avis`
--

CREATE TABLE `Avis` (
  `idAvis` int(11) NOT NULL,
  `idFilm` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `datePublication` date NOT NULL,
  `appreciation` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Avis`
--

INSERT INTO `Avis` (`idAvis`, `idFilm`, `titre`, `texte`, `datePublication`, `appreciation`) VALUES
(1, 1, 'Chef d\'oeuvre', 'Le Parrain est un des meilleurs films jamais réalisés.', '2022-01-01', '5'),
(2, 1, 'Très bon', 'Un grand classique.', '2022-01-02', '4'),
(4, 2, 'Incroyable', 'Un univers riche et passionnant.', '2022-01-04', '5'),
(5, 2, 'Moyen', 'Pas mal, mais un peu trop simpliste.', '2022-01-05', '3'),
(6, 3, 'Génial', 'Une histoire captivante et des personnages attachants.', '2022-01-06', '5'),
(7, 3, 'Assez bon', 'Un bon divertissement.', '2022-01-07', '4'),
(8, 3, 'Bof', 'Pas vraiment mon style.', '2022-01-08', '2'),
(9, 4, 'Effrayant', 'Des dinosaures plus vrais que nature.', '2022-01-09', '4'),
(10, 4, 'Moyen', 'Beaucoup d\'action, mais peu de substance.', '2022-01-10', '3'),
(11, 5, 'Test Avis', 'pas mal franchement', '2023-05-11', '4'),
(12, 5, 'Blabla', 'blablablabla', '2023-05-11', '2'),
(28, 11, 'A Masterpiece', 'This film is an absolute masterpiece. The performances, the storytelling, and the direction are all top-notch.', '2021-05-01', '5'),
(29, 11, 'Incredible Acting', 'The acting in this film is outstanding. It truly brings the characters to life.', '2021-05-05', '4'),
(31, 13, 'Quirky and Engaging', 'Pulp Fiction is a quirky and engaging film that keeps you hooked from start to finish. The non-linear narrative adds an extra layer of intrigue.', '2021-05-03', '4'),
(34, 13, 'Quentin Tarantino Delivers', 'Pulp Fiction showcases Quentin Tarantino\'s unique style of storytelling. The dialogue and the memorable characters make it a must-see.', '2021-05-07', '5'),
(35, 13, 'Thrilling and Unexpected', 'Pulp Fiction keeps you on the edge of your seat with its unexpected twists and turns. It\'s a rollercoaster of a film.', '2021-05-08', '4'),
(36, 14, 'A Brilliant Superhero Film', 'The Dark Knight is a brilliant superhero film that pushes the boundaries of the genre. The performances, especially Heath Ledger\'s portrayal of the Joker, are outstanding.', '2021-05-09', '5'),
(37, 14, 'Intense and Gripping', 'The Dark Knight is an intense and gripping film that keeps you on the edge of your seat. The action sequences and the psychological depth of the characters are remarkable.', '2021-05-10', '4'),
(38, 14, 'A Game-Changer for Superhero Movies', 'The Dark Knight revolutionized the superhero genre with its dark and realistic take on the Batman story. It elevated the standards for what a superhero film could achieve.', '2021-05-11', '5'),
(44, 5, 'Another test avis', 'Très bien !', '2023-05-25', '4');

-- --------------------------------------------------------

--
-- Structure de la table `Film`
--

CREATE TABLE `Film` (
  `idFilm` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `directeur` varchar(255) NOT NULL,
  `dateSortie` date NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Film`
--

INSERT INTO `Film` (`idFilm`, `titre`, `directeur`, `dateSortie`, `image`, `description`) VALUES
(1, 'Le Parrain', 'Francis Ford Coppola', '1972-03-14', '1.jpeg', 'Le patriarche d’une grande famille de la mafia décide de transmettre le pouvoir à son fils.'),
(2, 'Star Wars: Épisode IV - Un nouvel espoir', 'George Lucas', '1977-05-25', '2.jpeg', 'Dans une galaxie lointaine, un jeune fermier se joint à la lutte contre un empire maléfique.'),
(3, 'Retour vers le futur', 'Robert Zemeckis', '1985-07-03', '3.jpeg', 'Un adolescent voyage dans le temps dans une machine à remonter.'),
(4, 'Jurassic Park', 'Steven Spielberg', '1993-06-11', '4.jpeg', 'Un parc à thème de dinosaures est envahi par des prédateurs préhistoriques.'),
(5, 'Demo', 'Yuxiang', '2023-05-11', '5.jpeg', 'This is dummy data'),
(11, 'The Shawshank Redemption', 'Frank Darabont', '1994-10-14', '6.jpeg', 'Two imprisoned men bond over several years, finding solace and eventual redemption through acts of common decency.'),
(13, 'Pulp Fiction', 'Quentin Tarantino', '1994-10-14', '8.jpeg', 'Various interrelated stories about crime and redemption in Los Angeles.'),
(14, 'The Dark Knight', 'Christopher Nolan', '2008-07-18', '7.jpeg', 'Batman faces off against the Joker, a mastermind criminal wreaking havoc on Gotham City.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Avis`
--
ALTER TABLE `Avis`
  ADD PRIMARY KEY (`idAvis`),
  ADD KEY `idFilm` (`idFilm`);

--
-- Index pour la table `Film`
--
ALTER TABLE `Film`
  ADD PRIMARY KEY (`idFilm`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Avis`
--
ALTER TABLE `Avis`
  MODIFY `idAvis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `Film`
--
ALTER TABLE `Film`
  MODIFY `idFilm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Avis`
--
ALTER TABLE `Avis`
  ADD CONSTRAINT `avis_ibfk_1` FOREIGN KEY (`idFilm`) REFERENCES `FILM` (`idFilm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
