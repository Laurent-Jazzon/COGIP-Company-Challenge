-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 20 avr. 2021 à 12:14
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
-- Base de données : `cogip`
--

-- --------------------------------------------------------

--
-- Structure de la table `companies`
--

CREATE TABLE `companies` (
  `companies_id` int(11) NOT NULL,
  `companies_name` varchar(255) NOT NULL,
  `companies_country` varchar(255) NOT NULL,
  `companies_vat_number` varchar(255) NOT NULL,
  `companies_type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `companies`
--

INSERT INTO `companies` (`companies_id`, `companies_name`, `companies_country`, `companies_vat_number`, `companies_type_id`) VALUES
(1, 'Fluffz', 'Belgium', 'BE03423697352', 1),
(2, 'Omelon', 'France', 'FR68164597326', 1),
(3, 'Pretza', 'Belgium', 'BE83407651982', 2),
(4, 'Yumbly', 'Spain', 'ES86125493257', 2),
(5, 'Sours', 'France', 'FR14325698536', 2),
(6, 'Lierst', 'Belgium', 'BE85412351982', 2),
(7, 'Evadi', 'Spain', 'ES86184193236', 2),
(8, 'Lostchild', 'Neverland', 'NV14425896536', 2),
(9, 'Moonman', 'Moon', 'MN11123213221', 2),
(10, 'Glaflemme', 'Nowhere', 'NW35514853773', 2);

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `contacts_id` int(11) NOT NULL,
  `contacts_firstname` varchar(255) NOT NULL,
  `contacts_lastname` varchar(255) NOT NULL,
  `contacts_email` varchar(255) NOT NULL,
  `contacts_company_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`contacts_id`, `contacts_firstname`, `contacts_lastname`, `contacts_email`, `contacts_company_id`) VALUES
(1, 'Omer', 'Dalor', 'omerdalor@gmail.com', 1),
(2, 'Lara', 'Clette', 'laraclette@gmail.com', 1),
(3, 'Juste', 'Leblanc', 'justeleblanc@gmail.com', 2),
(4, 'Larry', 'Potier', 'larrypotiert@gmail.com', 2),
(5, 'Juan', 'Obi', 'obijuan@gmail.com', 2),
(6, 'Joey', 'Joestar', 'jojo@gmail.com', 1),
(7, 'Dio', 'Brando', 'diobrando@gmail.com', 1),
(8, 'Jean-Pierre', 'Polnaref', 'jppol@gmail.com', 1),
(9, 'Moe', 'Lester', 'perv@gmail.com', 10),
(10, 'Dino', 'Zore', 'dinozore@gmail.com', 9),
(11, 'Fabien', 'Gaffatoi', 'fbgat@gmail.com', 3),
(12, 'Fidel', 'Opost', 'fidelopost@gmail.com', 3),
(13, 'Gaston', 'Laplouz', 'gastonlaplouz@gmail.com', 3),
(14, 'Adil', 'Dushit', 'bonteuch@gmail.com', 7),
(15, 'Hans', 'Lipe', 'hanslipe@gmail.com', 6),
(16, 'Many', 'Festation', 'acab@gmail.com', 4),
(17, 'Nadine', 'Greux', 'greuxnadine@gmail.com', 4),
(18, 'Sarah', 'Masse', 'xxxsarah@gmail.com', 10),
(19, 'Olaf', 'Herme', 'olafherme@gmail.com', 9),
(20, 'Oscar', 'Fesse', 'oscarfesse@gmail.com', 8),
(21, 'Paul', 'Igone', 'carre@gmail.com', 5),
(22, 'Paul', 'Hauqu', 'paulhauqu@gmail.com', 5),
(23, 'Régis', 'Cide', 'kingslayer@gmail.com', 8),
(24, 'Rick', 'Hicqui', 'rikiki@gmail.com', 7),
(25, 'Samir', 'Hitleku', 'smhit@gmail.com', 6);

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

CREATE TABLE `invoices` (
  `invoices_id` int(11) NOT NULL,
  `invoices_number` int(12) NOT NULL,
  `invoices_date` date NOT NULL,
  `invoices_company_id` int(11) DEFAULT NULL,
  `invoices_contact_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `invoices`
--

INSERT INTO `invoices` (`invoices_id`, `invoices_number`, `invoices_date`, `invoices_company_id`, `invoices_contact_id`) VALUES
(1, 153498756, '2021-03-06', 2, 5),
(2, 542389541, '2021-03-15', 1, 2),
(3, 789234521, '2021-03-19', 1, 1),
(4, 423587465, '2021-03-28', 2, 4),
(5, 469821364, '2021-04-03', 2, 3),
(11, 542368745, '2021-04-04', 1, 1),
(12, 654123598, '2021-04-05', 1, 1),
(13, 541258796, '2021-04-06', 1, 1),
(14, 542365125, '2021-04-07', 1, 1),
(15, 425789654, '2021-04-08', 1, 2),
(16, 532145879, '2021-04-09', 1, 2),
(17, 452359874, '2021-04-10', 1, 2),
(18, 845214598, '2021-04-11', 1, 2),
(19, 542156897, '2021-04-05', 2, 3),
(20, 541246981, '2021-04-06', 2, 3),
(21, 512489632, '2021-04-07', 2, 3),
(22, 123452478, '2021-04-08', 2, 4),
(23, 512456232, '2021-04-09', 2, 4),
(24, 648451239, '2021-04-10', 2, 4),
(25, 458216548, '2021-04-11', 2, 5),
(26, 842651785, '2021-04-12', 2, 5),
(27, 814561518, '2021-04-12', 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `types_id` int(11) NOT NULL,
  `types_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`types_id`, `types_type`) VALUES
(1, 'provider'),
(2, 'client');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_name` varchar(255) NOT NULL,
  `users_login` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_login`) VALUES
(1, 'Jean-Christian', 'Ranu'),
(2, 'Murielle', 'fifi');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`companies_id`),
  ADD KEY `type` (`companies_type_id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contacts_id`),
  ADD KEY `company_id` (`contacts_company_id`);

--
-- Index pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`invoices_id`),
  ADD KEY `company_id` (`invoices_company_id`),
  ADD KEY `contact_id` (`invoices_contact_id`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`types_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `companies`
--
ALTER TABLE `companies`
  MODIFY `companies_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contacts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoices_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `types_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_types` FOREIGN KEY (`companies_type_id`) REFERENCES `types` (`types_id`);

--
-- Contraintes pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`contacts_company_id`) REFERENCES `companies` (`companies_id`);

--
-- Contraintes pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`invoices_company_id`) REFERENCES `companies` (`companies_id`),
  ADD CONSTRAINT `invoices_ibfk_2` FOREIGN KEY (`invoices_contact_id`) REFERENCES `contacts` (`contacts_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
