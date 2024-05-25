-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 13 mai 2024 à 16:24
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `campus_afrique`
--

-- --------------------------------------------------------

--
-- Structure de la table `c_candidats`
--

CREATE TABLE `c_candidats` (
  `id` bigint(20) NOT NULL,
  `code_candidat` varchar(10) DEFAULT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `sexe` enum('Masc','Fem') NOT NULL,
  `telephone` varchar(25) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `dialoukay` varchar(150) DEFAULT NULL,
  `date_naiss` date DEFAULT NULL,
  `lieu_naiss` varchar(150) DEFAULT NULL,
  `date_creation` date NOT NULL,
  `id_op_saisie` int(11) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `etat` tinyint(4) DEFAULT NULL,
  `date_last_modif` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `c_candidats`
--

INSERT INTO `c_candidats` (`id`, `code_candidat`, `prenom`, `nom`, `sexe`, `telephone`, `email`, `dialoukay`, `date_naiss`, `lieu_naiss`, `date_creation`, `id_op_saisie`, `ip`, `etat`, `date_last_modif`) VALUES
(6, 'NU00000081', 'baye demba', 'DIACK', 'Masc', NULL, 'bayedemba@gmail.com', 'passeraz', NULL, NULL, '2023-07-10', NULL, NULL, 0, '2023-07-10 13:52:02'),
(25, 'NI00000082', 'baye demba1', 'diack2', 'Masc', NULL, 'com.perfplus@gmail.com', 'passer123', NULL, NULL, '2023-08-03', NULL, NULL, 0, '2023-08-03 11:16:53'),
(27, 'NI00000083', 'Augustin', 'Ndiaye', 'Masc', NULL, 'ndiayeaugustin18@gmail.com', 'augusTIN18', NULL, NULL, '2023-08-03', NULL, '::1', 0, '2023-08-03 12:40:59'),
(28, 'BT00000084', 'Buur', 'Joie', 'Masc', NULL, 'seydinamandionem9@gmail.com', 'passer', NULL, NULL, '2024-05-02', 2, '::1', 0, '2024-05-02 14:42:39'),
(29, 'BT00000085', 'Astou', 'faye', 'Fem', NULL, 'astouFaye@gmail.com', 'passe', NULL, NULL, '2024-05-07', 2, '::1', 0, '2024-05-07 00:42:29'),
(30, 'BT00000086', 'adama', 'diagne', 'Fem', NULL, 'adamalayediagne05@gmail.com', 'passe', NULL, NULL, '2024-05-07', 2, '::1', 0, '2024-05-07 00:49:10');

-- --------------------------------------------------------

--
-- Structure de la table `c_candidats_details`
--

CREATE TABLE `c_candidats_details` (
  `id` bigint(20) NOT NULL,
  `code_candidat` varchar(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tel_2` varchar(20) DEFAULT NULL,
  `email_2` varchar(150) DEFAULT NULL,
  `adresse` varchar(300) DEFAULT NULL,
  `cni` varchar(20) DEFAULT NULL,
  `cni_img` varchar(200) DEFAULT NULL,
  `passport` varchar(20) DEFAULT NULL,
  `passport_img` int(100) DEFAULT NULL,
  `extrait_naissance` varchar(20) DEFAULT NULL,
  `extrait_img` varchar(100) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `cand_niveau_etude` enum('aucun','cfee','bfem','tle','Bac','Bac+1','Bac+2','Bac+3','Bac+4','Bac+5','>Bac+5') DEFAULT NULL,
  `cand_experiences` tinyint(4) NOT NULL DEFAULT 0,
  `date_last_modif` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `c_candidats_details`
--

INSERT INTO `c_candidats_details` (`id`, `code_candidat`, `email`, `tel_2`, `email_2`, `adresse`, `cni`, `cni_img`, `passport`, `passport_img`, `extrait_naissance`, `extrait_img`, `photo`, `cand_niveau_etude`, `cand_experiences`, `date_last_modif`) VALUES
(0, 'NU00000081', 'bayedemba@gmail.com', '776126031', 'aaaaa', 'dsqd', 'dsq', NULL, 'dsqd', NULL, 'dsq', NULL, NULL, 'Bac+5', 4, '2023-08-01 09:34:20');

-- --------------------------------------------------------

--
-- Structure de la table `c_candidats_diplomes`
--

CREATE TABLE `c_candidats_diplomes` (
  `id` bigint(20) NOT NULL,
  `code_candidat` varchar(10) NOT NULL,
  `id_type_diplome` int(11) NOT NULL,
  `libelle` varchar(300) NOT NULL,
  `annee_obtention` varchar(4) NOT NULL,
  `lieu_obtention` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `date_creation` date NOT NULL,
  `etat` enum('0','1') NOT NULL DEFAULT '1',
  `id_op_saisie` int(11) NOT NULL,
  `date_last_modif` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `c_candidats_diplomes`
--

INSERT INTO `c_candidats_diplomes` (`id`, `code_candidat`, `id_type_diplome`, `libelle`, `annee_obtention`, `lieu_obtention`, `image`, `date_creation`, `etat`, `id_op_saisie`, `date_last_modif`) VALUES
(4, 'NU00000084', 2, '', '2023', NULL, NULL, '2023-04-18', '1', 12, '2023-07-11 09:38:06'),
(11, 'NU00000081', 2, 'kjdsamd udbd', 'dkqn', 'idan', NULL, '2023-07-14', '1', 0, '2023-07-14 18:37:41'),
(15, 'NU00000081', 2, 'PAIEMENT  6e REG', '2012', 'UGB', NULL, '2023-07-18', '1', 0, '2023-07-18 17:38:28'),
(17, 'NU00000081', 2, '111', '111', '11', 'diplome__NU00000081__17.jpg', '2023-07-18', '1', 0, '2023-07-18 17:38:57');

-- --------------------------------------------------------

--
-- Structure de la table `c_candidats_experiences`
--

CREATE TABLE `c_candidats_experiences` (
  `id` bigint(20) NOT NULL,
  `code_candidat` varchar(10) NOT NULL,
  `id_type_exp` int(11) NOT NULL,
  `libelle` varchar(300) NOT NULL,
  `date_debut` varchar(20) NOT NULL,
  `date_fin` varchar(20) DEFAULT NULL,
  `entreprise_lieu` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `date_creation` date NOT NULL,
  `etat` enum('0','1') NOT NULL DEFAULT '1',
  `id_op_saisie` int(11) NOT NULL,
  `date_last_modif` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `c_candidats_experiences`
--

INSERT INTO `c_candidats_experiences` (`id`, `code_candidat`, `id_type_exp`, `libelle`, `date_debut`, `date_fin`, `entreprise_lieu`, `image`, `date_creation`, `etat`, `id_op_saisie`, `date_last_modif`) VALUES
(2, 'NU00000081', 2, 'STAGE A L\'ange du sénégal et de la sous rgiéon', '2012-12-01', '2012-12-12', 'ANSD', NULL, '2022-10-12', '1', 2, '2023-07-14 18:45:13'),
(3, 'NU00000084', 1, 'stage a l\'ard e d saint -louis', '2022-10-12', '2022-01-01', 'Agence Nationale de la statistique etd e e=la de demdnn', NULL, '2022-10-12', '1', 3, '2023-07-14 18:45:13'),
(5, 'NU00000081', 2, 'PAIEMENT  6e REG', '2023-06-29', '2023-07-22', NULL, NULL, '2023-07-18', '1', 0, '2023-07-18 17:38:16'),
(6, 'NU00000081', 2, 'x&lt;wxw', '2023-06-27', '2023-07-08', NULL, NULL, '2023-07-24', '1', 0, '2023-07-24 20:29:54');

-- --------------------------------------------------------

--
-- Structure de la table `c_candidats_langues`
--

CREATE TABLE `c_candidats_langues` (
  `id` bigint(20) NOT NULL,
  `code_candidat` varchar(10) NOT NULL,
  `id_langue` int(11) NOT NULL,
  `commentaires` varchar(300) DEFAULT NULL,
  `niveau` enum('debutant','moyen','parfait') NOT NULL,
  `lu` enum('0','1') NOT NULL DEFAULT '0',
  `parle` enum('0','1') NOT NULL DEFAULT '0',
  `ecrit` enum('0','1') NOT NULL DEFAULT '0',
  `date_creation` date NOT NULL,
  `etat` enum('0','1') NOT NULL DEFAULT '1',
  `id_op_saisie` int(11) NOT NULL,
  `date_last_modif` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `c_candidats_langues`
--

INSERT INTO `c_candidats_langues` (`id`, `code_candidat`, `id_langue`, `commentaires`, `niveau`, `lu`, `parle`, `ecrit`, `date_creation`, `etat`, `id_op_saisie`, `date_last_modif`) VALUES
(7, 'NU00000081', 1, 'FDSF', 'debutant', '1', '1', '0', '2023-07-14', '1', 2, '2023-07-14 08:52:01'),
(8, 'NU00000084', 2, 'EZE', 'debutant', '0', '0', '0', '2023-07-18', '1', 3, '2023-07-14 08:52:01'),
(10, 'NU00000081', 4, 'DDD', 'moyen', '0', '0', '0', '2023-04-18', '1', 2, '2023-07-14 09:48:56'),
(12, 'NU00000081', 2, 'test comme', 'debutant', '1', '1', '1', '2023-07-25', '1', 0, '2023-07-25 17:59:22');

-- --------------------------------------------------------

--
-- Structure de la table `c_candidatures`
--

CREATE TABLE `c_candidatures` (
  `id` bigint(20) NOT NULL,
  `code_candidat` varchar(10) NOT NULL,
  `id_offre` bigint(20) NOT NULL,
  `code_depot` varchar(15) NOT NULL,
  `montant_inscr` int(11) DEFAULT NULL,
  `montant_justif` varchar(200) DEFAULT NULL,
  `mode_paie` enum('virement','espece','cheque','wari','wave','om','autres') DEFAULT NULL,
  `cand_niveau_etude` enum('aucun','cfee','bfem','tle','Bac','Bac+1','Bac+2','Bac+3','Bac+4','Bac+5','>Bac+5') NOT NULL DEFAULT 'aucun',
  `cand_experiences` tinyint(4) NOT NULL,
  `can_experience_1` varchar(100) DEFAULT NULL,
  `can_experience_2` varchar(100) DEFAULT NULL,
  `can_experience_3` varchar(100) DEFAULT NULL,
  `can_experience_1_periode` varchar(30) DEFAULT NULL,
  `can_experience_2_periode` varchar(30) DEFAULT NULL,
  `can_experience_3_periode` varchar(30) DEFAULT NULL,
  `can_diplome_1` bigint(20) NOT NULL,
  `can_diplome_2` bigint(20) DEFAULT NULL,
  `can_diplome_3` bigint(20) DEFAULT NULL,
  `can_langue_1` bigint(20) NOT NULL,
  `can_langue_2` bigint(20) DEFAULT NULL,
  `can_langue_3` bigint(20) DEFAULT NULL,
  `date_creation` date NOT NULL,
  `ip` varchar(16) NOT NULL,
  `etat` enum('0','1') NOT NULL DEFAULT '0',
  `id_op_saisie` int(11) NOT NULL,
  `date_last_modif` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `c_candidatures`
--

INSERT INTO `c_candidatures` (`id`, `code_candidat`, `id_offre`, `code_depot`, `montant_inscr`, `montant_justif`, `mode_paie`, `cand_niveau_etude`, `cand_experiences`, `can_experience_1`, `can_experience_2`, `can_experience_3`, `can_experience_1_periode`, `can_experience_2_periode`, `can_experience_3_periode`, `can_diplome_1`, `can_diplome_2`, `can_diplome_3`, `can_langue_1`, `can_langue_2`, `can_langue_3`, `date_creation`, `ip`, `etat`, `id_op_saisie`, `date_last_modif`) VALUES
(2, 'NU00000081', 1, 'azert', 323829, '392020', 'espece', 'Bac+1', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, '2022-10-12', '12.123.134.13', '0', 2, '2023-07-14 16:39:38'),
(3, 'NU00000081', 2, '4328JFS', 200000, '36474884', 'cheque', 'aucun', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, '2022-10-12', '12.123.134.13', '1', 1, '2023-07-14 18:01:50'),
(4, 'NU00000084', 2, 'FDJSF84832', 320000, '530000', 'cheque', 'aucun', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, NULL, NULL, '2023-04-18', '133.373.38.37', '0', 3, '2023-07-14 18:01:50'),
(5, 'NU00000081', 1, 'ADYNAMISER', NULL, NULL, NULL, 'Bac+5', 4, '0', '0', '0', '2012-12-01--2012-12-12', '2023-06-29--2023-07-22', '2023-06-27--2023-07-08', 0, NULL, NULL, 0, NULL, NULL, '2023-08-02', '', '', 0, '2023-08-02 12:37:54'),
(6, 'NU00000081', 5, 'ADYNAMISER', NULL, NULL, NULL, 'Bac+5', 4, 'STAGE A L\'ange du sénégal et de la sous rgiéon', 'PAIEMENT  6e REG', 'x&lt;wxw', '2012-12-01--2012-12-12', '2023-06-29--2023-07-22', '2023-06-27--2023-07-08', 0, NULL, NULL, 0, NULL, NULL, '2023-08-02', '', '0', 0, '2023-08-02 12:40:50'),
(7, 'NU00000081', 5, 'ADYNAMISER', NULL, NULL, NULL, 'Bac+5', 4, 'STAGE A L\'ange du sénégal et de la sous rgiéon', 'PAIEMENT  6e REG', 'x&lt;wxw', '2012-12-01--2012-12-12', '2023-06-29--2023-07-22', '2023-06-27--2023-07-08', 0, NULL, NULL, 0, NULL, NULL, '2023-08-02', '', '0', 0, '2023-08-02 16:27:35');

-- --------------------------------------------------------

--
-- Structure de la table `c_categorie_des_offres`
--

CREATE TABLE `c_categorie_des_offres` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `commentaires` varchar(500) DEFAULT NULL,
  `id_op_saisie` int(11) NOT NULL,
  `etat` enum('0','1') NOT NULL DEFAULT '1',
  `date_creation` date NOT NULL,
  `date_last_modif` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `c_categorie_des_offres`
--

INSERT INTO `c_categorie_des_offres` (`id`, `libelle`, `commentaires`, `id_op_saisie`, `etat`, `date_creation`, `date_last_modif`) VALUES
(1, 'Général', NULL, 1, '1', '2022-07-27', '2023-06-12 19:32:27'),
(2, 'Non classé', 'Non classé', 2, '1', '2022-07-27', '2023-06-12 21:33:29');

-- --------------------------------------------------------

--
-- Structure de la table `c_offres`
--

CREATE TABLE `c_offres` (
  `id` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `text_details` text DEFAULT NULL,
  `img_1` varchar(100) DEFAULT NULL,
  `date_publication` date NOT NULL,
  `date_cloture` date NOT NULL DEFAULT '2000-01-01',
  `conditions_a_remplir` varchar(200) DEFAULT NULL,
  `debouches` varchar(200) DEFAULT NULL,
  `modalites_de_formation` varchar(200) DEFAULT NULL,
  `montant_a_payer` varchar(200) DEFAULT NULL,
  `date_creation` date NOT NULL,
  `etat` enum('0','1') NOT NULL DEFAULT '1',
  `id_op_saisie` int(11) NOT NULL,
  `date_last_modif` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `c_offres`
--

INSERT INTO `c_offres` (`id`, `id_categorie`, `libelle`, `description`, `text_details`, `img_1`, `date_publication`, `date_cloture`, `conditions_a_remplir`, `debouches`, `modalites_de_formation`, `montant_a_payer`, `date_creation`, `etat`, `id_op_saisie`, `date_last_modif`) VALUES
(1, 1, 'Master spécialisé en gestion on shore pétrole et gaz', 'Général', 'Général', NULL, '2023-06-17', '2023-06-17', NULL, NULL, NULL, NULL, '0000-00-00', '1', 0, '2023-06-11 22:17:09'),
(2, 1, 'Concours formation des Techniciens', 'Concours formation des Techniciens', 'Concours formation des Techniciens', NULL, '2023-06-04', '2000-01-01', NULL, NULL, NULL, NULL, '2023-06-27', '0', 1, '2023-06-12 17:59:04'),
(3, 2, 'Formation qualifiante développeur web en 3 mois depuis le début', 'Cette formation permet aux participants d\'être autonome en tant que développeur et web master ', 'Formation qualifiante développeur web en 3 mois depuis le début', NULL, '2023-06-01', '2023-07-31', NULL, NULL, NULL, NULL, '2023-06-12', '1', 2, '2023-06-12 22:40:06'),
(5, 1, 'test master 2 secruitét web', 'test master 2 secruitét webtest master 2 secruitét web', 'test master 2 secruitét webtest master 2 secruitét webtest master 2 secruitét web', NULL, '2023-07-06', '2023-08-06', NULL, NULL, NULL, NULL, '2023-07-10', '1', 2, '2023-07-10 22:29:28'),
(6, 1, 'Institut polytechnique des Métiers', 'naahgdgud', 'zuiuzuiazduizaiud', NULL, '2024-05-31', '2024-05-30', NULL, NULL, NULL, NULL, '2024-05-10', '0', 2, '2024-05-09 22:49:13'),
(7, 1, 'Institut polytechnique des Métiers', 'naahgdgud', 'zuiuzuiazduizaiud', NULL, '2024-05-31', '2024-05-30', NULL, NULL, NULL, NULL, '2024-05-10', '1', 2, '2024-05-09 23:09:27');

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

CREATE TABLE `ecole` (
  `id` int(11) NOT NULL,
  `libelle` text NOT NULL,
  `code_agent` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `email` varchar(70) NOT NULL,
  `numero` int(11) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `pasword` varchar(20) NOT NULL,
  `id_type_profil` int(10) NOT NULL,
  `commentaires` varchar(255) NOT NULL,
  `etat` enum('actif','suspendu','block','') NOT NULL,
  `id_site` tinyint(4) NOT NULL,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_lastmotif` datetime NOT NULL,
  `lien_site` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ecole`
--

INSERT INTO `ecole` (`id`, `libelle`, `code_agent`, `logo`, `email`, `numero`, `adresse`, `description`, `pasword`, `id_type_profil`, `commentaires`, `etat`, `id_site`, `date_creation`, `date_lastmotif`, `lien_site`) VALUES
(1, 'Université Numérique Cheikh Hamidou Kane  ', 'NI00000020', '', 'administration@unchk.edu.sn', 779900990, 'Sénégal', 'C\'est université numérique d\'enseignement supérieure du Sénégal ', 'passe', 2, 'Ecole', 'actif', 3, '2024-05-08 15:09:55', '2024-05-08 01:11:21', ''),
(2, 'Institut polytechnique des Métiers', 'NI00000021', '', 'administration@ipm.edu.sn', 770957856, 'Dakar', 'École d\'ingénieurs', 'passe', 2, 'ecole', 'actif', 0, '2024-05-08 01:20:20', '0000-00-00 00:00:00', ''),
(3, 'Groupe ISI', 'NI00000021', 'diplome_3__.jpg', 'administration@isi.edu.sn', 776457816, 'Dakar', 'École d\'ingénieur informatique', '2613267', 2, 'ecole', 'actif', 3, '2024-05-10 17:28:48', '2024-05-10 00:00:00', 'https://www.groupeisi.com/'),
(4, 'Université Cheikh Anta Diop', 'NI00000023', '', 'administration@ucd.edu.sn', 770945689, 'Dakar', 'école publique', '278416703', 2, 'ecole', 'actif', 3, '2024-05-10 00:00:00', '0000-00-00 00:00:00', ''),
(5, 'Institut polytechnique des Métiers', 'NI00000024', '', 'administration03@ipm.edu.sn', 770953317, 'Dakar', 'ecole', '1596418952', 2, 'ecole', 'actif', 3, '2024-05-11 00:00:00', '0000-00-00 00:00:00', ''),
(6, 'Institut polytechnique des Métiers', 'NI00000024', '', 'administration09@ipm.edu.sn', 770951145, 'Dakar', 'ecole', '315778936', 2, 'ecole', 'actif', 3, '2024-05-11 00:00:00', '0000-00-00 00:00:00', ''),
(7, 'ESP', 'NI00000025', 'diplome_7__.jpg', 'administration@esp.edu.sn', 770942266, 'Dakar', 'ecole technique', '167048901', 2, 'ecole', 'actif', 3, '2024-05-11 14:19:42', '2024-05-11 00:00:00', 'https://www.groupeisi.com/');

-- --------------------------------------------------------

--
-- Structure de la table `lst_diplomes`
--

CREATE TABLE `lst_diplomes` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `commentaires` varchar(300) DEFAULT NULL,
  `etat` enum('1','0') NOT NULL DEFAULT '1',
  `date_creation` date NOT NULL,
  `id_op_saisie` smallint(11) NOT NULL,
  `date_last_modif` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lst_diplomes`
--

INSERT INTO `lst_diplomes` (`id`, `libelle`, `commentaires`, `etat`, `date_creation`, `id_op_saisie`, `date_last_modif`) VALUES
(1, 'Master 2', '2022 ANNEE', '1', '2023-06-24', 2, NULL),
(2, 'Licence', 'xx', '1', '2023-07-07', 2, NULL),
(3, 'Maitrise', 'Maitrise/ Bac+4', '1', '2023-07-12', 2, '2023-07-12 05:39:23');

-- --------------------------------------------------------

--
-- Structure de la table `lst_langues`
--

CREATE TABLE `lst_langues` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `commentaires` varchar(300) DEFAULT NULL,
  `etat` enum('1','0') NOT NULL DEFAULT '1',
  `date_creation` date NOT NULL,
  `id_op_saisie` smallint(11) NOT NULL,
  `date_last_modif` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lst_langues`
--

INSERT INTO `lst_langues` (`id`, `libelle`, `commentaires`, `etat`, `date_creation`, `id_op_saisie`, `date_last_modif`) VALUES
(1, 'Wolof', NULL, '1', '2020-03-02', 2, '2020-03-02 12:13:36'),
(2, 'Sérére', NULL, '1', '2020-03-02', 2, '2020-03-02 12:13:36');

-- --------------------------------------------------------

--
-- Structure de la table `lst_localites`
--

CREATE TABLE `lst_localites` (
  `id` smallint(5) NOT NULL,
  `id_pays` smallint(5) DEFAULT NULL,
  `libelle` varchar(100) DEFAULT NULL,
  `id_parent` smallint(5) DEFAULT NULL,
  `etat` enum('0','1') NOT NULL DEFAULT '1',
  `date_last_modif` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lst_localites`
--

INSERT INTO `lst_localites` (`id`, `id_pays`, `libelle`, `id_parent`, `etat`, `date_last_modif`) VALUES
(42, NULL, 'Dakar', NULL, '1', '2020-03-07 14:40:15'),
(43, NULL, 'Pikine', NULL, '1', '2020-03-07 14:40:15'),
(44, NULL, 'Touba', NULL, '1', '2020-03-07 14:40:15'),
(45, NULL, 'Guediawaye', NULL, '1', '2020-03-07 14:40:15'),
(46, NULL, 'Thies\r', NULL, '1', '2020-03-07 14:40:16'),
(47, NULL, 'Kaolack', NULL, '1', '2020-03-07 14:40:16'),
(48, NULL, 'Mbour', NULL, '1', '2020-03-07 14:40:16'),
(49, NULL, 'Saint-Louis', NULL, '1', '2020-03-07 14:40:16'),
(50, NULL, 'Rufisque', NULL, '1', '2020-03-07 14:40:16'),
(51, NULL, 'Ziguinchor', NULL, '1', '2020-03-07 14:40:16'),
(52, NULL, 'Diourbel', NULL, '1', '2020-03-07 14:40:16'),
(53, NULL, 'Louga', NULL, '1', '2020-03-07 14:40:16'),
(54, NULL, 'Tambacounda', NULL, '1', '2020-03-07 14:40:16'),
(55, NULL, 'Mbacke\r\nKolda', NULL, '1', '2020-03-07 14:40:16'),
(56, NULL, 'Richard-Toll', NULL, '1', '2020-03-07 14:40:16'),
(57, NULL, 'Bargny', NULL, '1', '2020-03-07 14:40:16'),
(58, NULL, 'Tivaouane', NULL, '1', '2020-03-07 14:40:16'),
(59, NULL, 'Joal-Fadiouth', NULL, '1', '2020-03-07 14:40:16'),
(60, NULL, 'Dahra', NULL, '1', '2020-03-07 14:40:16'),
(61, NULL, 'Kaffrine', NULL, '1', '2020-03-07 14:40:16'),
(62, NULL, 'Bignona', NULL, '1', '2020-03-07 14:40:16'),
(63, NULL, 'Fatick', NULL, '1', '2020-03-07 14:40:16'),
(64, NULL, 'Velingara', NULL, '1', '2020-03-07 14:40:16'),
(65, NULL, 'Bambey', NULL, '1', '2020-03-07 14:40:16'),
(66, NULL, 'Sebikhotane', NULL, '1', '2020-03-07 14:40:16'),
(67, NULL, 'Dagana', NULL, '1', '2020-03-07 14:40:16'),
(68, NULL, 'Sedhiou', NULL, '1', '2020-03-07 14:40:16'),
(69, NULL, 'Nguekhokh', NULL, '1', '2020-03-07 14:40:17'),
(70, NULL, 'Diawara', NULL, '1', '2020-03-07 14:40:17'),
(71, NULL, 'Kedougou', NULL, '1', '2020-03-07 14:40:17'),
(72, NULL, 'Pout', NULL, '1', '2020-03-07 14:40:17'),
(73, NULL, 'Kayar', NULL, '1', '2020-03-07 14:40:17'),
(74, NULL, 'Matam', NULL, '1', '2020-03-07 14:40:17'),
(75, NULL, 'Meckhe', NULL, '1', '2020-03-07 14:40:17'),
(76, NULL, 'Nioro du Rip', NULL, '1', '2020-03-07 14:40:17'),
(77, NULL, 'Ourossogui', NULL, '1', '2020-03-07 14:40:17'),
(78, NULL, 'Kebemer', NULL, '1', '2020-03-07 14:40:17'),
(79, NULL, 'Ndioum', NULL, '1', '2020-03-07 14:40:17'),
(80, NULL, 'Koungheul', NULL, '1', '2020-03-07 14:40:17'),
(81, NULL, 'Guinguineo\r', NULL, '1', '2020-03-07 14:40:17'),
(82, NULL, 'Linguere', NULL, '1', '2020-03-07 14:40:17'),
(83, NULL, 'Khombole', NULL, '1', '2020-03-07 14:40:17'),
(84, NULL, 'Bakel', NULL, '1', '2020-03-07 14:40:17'),
(85, NULL, 'Sokone', NULL, '1', '2020-03-07 14:40:17'),
(86, NULL, 'Diamniadio', NULL, '1', '2020-03-07 14:40:17'),
(87, NULL, 'Mboro', NULL, '1', '2020-03-07 14:40:17'),
(88, NULL, 'Thiadiaye', NULL, '1', '2020-03-07 14:40:17'),
(89, NULL, 'Goudomp', NULL, '1', '2020-03-07 14:40:17'),
(90, NULL, 'Podor', NULL, '1', '2020-03-07 14:40:17'),
(91, NULL, 'Gossas', NULL, '1', '2020-03-07 14:40:17'),
(92, NULL, 'Kanel', NULL, '1', '2020-03-07 14:40:17'),
(93, NULL, 'Rosso', NULL, '1', '2020-03-07 14:40:17'),
(94, NULL, 'Ndoffane', NULL, '1', '2020-03-07 14:40:18'),
(95, NULL, 'Gandiaye', NULL, '1', '2020-03-07 14:40:18'),
(96, 111, '111', 111, '1', '2023-07-07 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `lst_pays`
--

CREATE TABLE `lst_pays` (
  `id` smallint(5) NOT NULL,
  `code` int(3) NOT NULL,
  `alpha2` varchar(2) NOT NULL,
  `alpha3` varchar(3) NOT NULL,
  `nom_en_gb` varchar(45) NOT NULL,
  `nom_fr_fr` varchar(45) NOT NULL,
  `etat` enum('0','1') NOT NULL DEFAULT '1',
  `date_creation` date NOT NULL,
  `id_op_saisie` int(11) NOT NULL,
  `date_last_modif` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lst_pays`
--

INSERT INTO `lst_pays` (`id`, `code`, `alpha2`, `alpha3`, `nom_en_gb`, `nom_fr_fr`, `etat`, `date_creation`, `id_op_saisie`, `date_last_modif`) VALUES
(2, 8, 'AL', 'ALB', 'Albania', 'Albanie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(4, 12, 'DZ', 'DZA', 'Algeria', 'Algerie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(5, 16, 'AS', 'ASM', 'American Samoa', 'Samoa Americaines', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(6, 20, 'AD', 'AND', 'Andorra', 'Andorre', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(7, 24, 'AO', 'AGO', 'Angola', 'Angola', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(8, 28, 'AG', 'ATG', 'Antigua and Barbuda', 'Antigua-et-Barbuda', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(9, 31, 'AZ', 'AZE', 'Azerbaijan', 'Azerbaedjan', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(10, 32, 'AR', 'ARG', 'Argentina', 'Argentine', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(11, 36, 'AU', 'AUS', 'Australia', 'Australie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(12, 40, 'AT', 'AUT', 'Austria', 'Autriche', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(13, 44, 'BS', 'BHS', 'Bahamas', 'Bahamas', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(14, 48, 'BH', 'BHR', 'Bahrain', 'Bahre', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(15, 50, 'BD', 'BGD', 'Bangladesh', 'Bangladesh', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(16, 51, 'AM', 'ARM', 'Armenia', 'Armenie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(17, 52, 'BB', 'BRB', 'Barbados', 'Barbade', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(18, 56, 'BE', 'BEL', 'Belgium', 'Belgique', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(19, 60, 'BM', 'BMU', 'Bermuda', 'Bermudes', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(20, 64, 'BT', 'BTN', 'Bhutan', 'Bhoutan', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(21, 68, 'BO', 'BOL', 'Bolivia', 'Bolivie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(22, 70, 'BA', 'BIH', 'Bosnia and Herzegovina', 'Bosnie-Herzegovine', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(23, 72, 'BW', 'BWA', 'Botswana', 'Botswana', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(24, 74, 'BV', 'BVT', 'Bouvet Island', 'ele Bouvet', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(25, 76, 'BR', 'BRA', 'Brazil', 'Bresil', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(26, 84, 'BZ', 'BLZ', 'Belize', 'Belize', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(27, 86, 'IO', 'IOT', 'British Indian Ocean Territory', 'Territoire Britannique de l\'Ocean Indien', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(28, 90, 'SB', 'SLB', 'Solomon Islands', 'eles Salomon', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(29, 92, 'VG', 'VGB', 'British Virgin Islands', 'eles Vierges Britanniques', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(30, 96, 'BN', 'BRN', 'Brunei Darussalam', 'Brunei Darussalam', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(31, 100, 'BG', 'BGR', 'Bulgaria', 'Bulgarie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(32, 104, 'MM', 'MMR', 'Myanmar', 'Myanmar', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(33, 108, 'BI', 'BDI', 'Burundi', 'Burundi', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(34, 112, 'BY', 'BLR', 'Belarus', 'Belarus', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(35, 116, 'KH', 'KHM', 'Cambodia', 'Cambodge', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(36, 120, 'CM', 'CMR', 'Cameroon', 'Cameroun', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(37, 124, 'CA', 'CAN', 'Canada', 'Canada', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(38, 132, 'CV', 'CPV', 'Cape Verde', 'Cap-vert', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(39, 136, 'KY', 'CYM', 'Cayman Islands', 'eles Caemanes', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(40, 140, 'CF', 'CAF', 'Central African', 'Republique Centrafricaine', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(41, 144, 'LK', 'LKA', 'Sri Lanka', 'Sri Lanka', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(42, 148, 'TD', 'TCD', 'Chad', 'Tchad', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(43, 152, 'CL', 'CHL', 'Chile', 'Chili', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(44, 156, 'CN', 'CHN', 'China', 'Chine', '1', '0000-00-00', 0, '2020-01-25 21:47:32'),
(45, 158, 'TW', 'TWN', 'Taiwan', 'Taewan', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(46, 162, 'CX', 'CXR', 'Christmas Island', 'ele Christmas', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(47, 166, 'CC', 'CCK', 'Cocos (Keeling) Islands', 'eles Cocos (Keeling)', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(48, 170, 'CO', 'COL', 'Colombia', 'Colombie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(49, 174, 'KM', 'COM', 'Comoros', 'Comores', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(50, 175, 'YT', 'MYT', 'Mayotte', 'Mayotte', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(51, 178, 'CG', 'COG', 'Republic of the Congo', 'Republique du Congo', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(52, 180, 'CD', 'COD', 'The Democratic Republic Of The Congo', 'Republique Democratique du Congo', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(53, 184, 'CK', 'COK', 'Cook Islands', 'eles Cook', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(54, 188, 'CR', 'CRI', 'Costa Rica', 'Costa Rica', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(55, 191, 'HR', 'HRV', 'Croatia', 'Croatie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(56, 192, 'CU', 'CUB', 'Cuba', 'Cuba', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(57, 196, 'CY', 'CYP', 'Cyprus', 'Chypre', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(58, 203, 'CZ', 'CZE', 'Czech Republic', 'Republique Tcheque', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(59, 204, 'BJ', 'BEN', 'Benin', 'Benin', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(60, 208, 'DK', 'DNK', 'Denmark', 'Danemark', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(61, 212, 'DM', 'DMA', 'Dominica', 'Dominique', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(62, 214, 'DO', 'DOM', 'Dominican Republic', 'Republique Dominicaine', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(63, 218, 'EC', 'ECU', 'Ecuador', 'equateur', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(64, 222, 'SV', 'SLV', 'El Salvador', 'El Salvador', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(65, 226, 'GQ', 'GNQ', 'Equatorial Guinea', 'Guinee equatoriale', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(66, 231, 'ET', 'ETH', 'Ethiopia', 'ethiopie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(67, 232, 'ER', 'ERI', 'Eritrea', 'erythr', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(68, 233, 'EE', 'EST', 'Estonia', 'Estonie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(69, 234, 'FO', 'FRO', 'Faroe Islands', 'eles Fero', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(70, 238, 'FK', 'FLK', 'Falkland Islands', 'eles (malvinas) Falkland', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(71, 239, 'GS', 'SGS', 'South Georgia and the South Sandwich Islands', 'Georgie du Sud et les eles Sandwich du Sud', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(72, 242, 'FJ', 'FJI', 'Fiji', 'Fidji', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(73, 246, 'FI', 'FIN', 'Finland', 'Finlande', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(74, 248, 'AX', 'ALA', '?land Islands', 'eles eland', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(75, 250, 'FR', 'FRA', 'France', 'France', '1', '0000-00-00', 0, '2020-01-25 21:47:32'),
(76, 254, 'GF', 'GUF', 'French Guiana', 'Guyane Franeaise', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(77, 258, 'PF', 'PYF', 'French Polynesia', 'Polynesie Franeaise', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(78, 260, 'TF', 'ATF', 'French Southern Territories', 'Terres Australes Franeaises', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(79, 262, 'DJ', 'DJI', 'Djibouti', 'Djibouti', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(80, 266, 'GA', 'GAB', 'Gabon', 'Gabon', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(81, 268, 'GE', 'GEO', 'Georgia', 'Georgie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(82, 270, 'GM', 'GMB', 'Gambia', 'Gambie', '1', '0000-00-00', 0, '2020-01-25 21:47:32'),
(83, 275, 'PS', 'PSE', 'Occupied Palestinian Territory', 'Territoire Palestinien Occup', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(84, 276, 'DE', 'DEU', 'Germany', 'Allemagne', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(85, 288, 'GH', 'GHA', 'Ghana', 'Ghana', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(86, 292, 'GI', 'GIB', 'Gibraltar', 'Gibraltar', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(87, 296, 'KI', 'KIR', 'Kiribati', 'Kiribati', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(88, 300, 'GR', 'GRC', 'Greece', 'Grece', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(89, 304, 'GL', 'GRL', 'Greenland', 'Groenland', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(90, 308, 'GD', 'GRD', 'Grenada', 'Grenade', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(91, 312, 'GP', 'GLP', 'Guadeloupe', 'Guadeloupe', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(92, 316, 'GU', 'GUM', 'Guam', 'Guam', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(93, 320, 'GT', 'GTM', 'Guatemala', 'Guatemala', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(94, 324, 'GN', 'GIN', 'Guinea', 'Guinée', '1', '0000-00-00', 0, '2020-01-25 21:47:32'),
(96, 332, 'HT', 'HTI', 'Haiti', 'Haeti', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(97, 334, 'HM', 'HMD', 'Heard Island and McDonald Islands', 'eles Heard et Mcdonald', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(98, 336, 'VA', 'VAT', 'Vatican City State', 'Saint-Siege (etat de la Cite du Vatican)', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(99, 340, 'HN', 'HND', 'Honduras', 'Honduras', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(100, 344, 'HK', 'HKG', 'Hong Kong', 'Hong-Kong', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(101, 348, 'HU', 'HUN', 'Hungary', 'Hongrie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(102, 352, 'IS', 'ISL', 'Iceland', 'Islande', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(103, 356, 'IN', 'IND', 'India', 'Inde', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(104, 360, 'ID', 'IDN', 'Indonesia', 'Indonesie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(105, 364, 'IR', 'IRN', 'Islamic Republic of Iran', 'Republique Islamique d\'Iran', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(106, 368, 'IQ', 'IRQ', 'Iraq', 'Iraq', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(107, 372, 'IE', 'IRL', 'Ireland', 'Irlande', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(108, 376, 'IL', 'ISR', 'Israel', 'Isra', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(109, 380, 'IT', 'ITA', 'Italy', 'Italie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(110, 384, 'CI', 'CIV', 'Cote d\'Ivoire', 'Cote d\'Ivoire', '1', '0000-00-00', 0, '2020-01-25 21:47:32'),
(111, 388, 'JM', 'JAM', 'Jamaica', 'Jamaeque', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(112, 392, 'JP', 'JPN', 'Japan', 'Japon', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(113, 398, 'KZ', 'KAZ', 'Kazakhstan', 'Kazakhstan', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(114, 400, 'JO', 'JOR', 'Jordan', 'Jordanie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(115, 404, 'KE', 'KEN', 'Kenya', 'Kenya', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(116, 408, 'KP', 'PRK', 'Democratic People\'s Republic of Korea', 'Republique Populaire Democratique de Cor', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(117, 410, 'KR', 'KOR', 'Republic of Korea', 'Republique de Corée', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(118, 414, 'KW', 'KWT', 'Kuwait', 'Koweit', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(119, 417, 'KG', 'KGZ', 'Kyrgyzstan', 'Kirghizistan', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(120, 418, 'LA', 'LAO', 'Lao People\'s Democratic Republic', 'Republique Democratique Populaire Lao', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(121, 422, 'LB', 'LBN', 'Lebanon', 'Liban', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(122, 426, 'LS', 'LSO', 'Lesotho', 'Lesotho', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(123, 428, 'LV', 'LVA', 'Latvia', 'Lettonie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(124, 430, 'LR', 'LBR', 'Liberia', 'Liberia', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(125, 434, 'LY', 'LBY', 'Libyan Arab Jamahiriya', 'Jamahiriya Arabe Libyenne', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(126, 438, 'LI', 'LIE', 'Liechtenstein', 'Liechtenstein', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(127, 440, 'LT', 'LTU', 'Lithuania', 'Lituanie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(128, 442, 'LU', 'LUX', 'Luxembourg', 'Luxembourg', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(129, 446, 'MO', 'MAC', 'Macao', 'Macao', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(130, 450, 'MG', 'MDG', 'Madagascar', 'Madagascar', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(131, 454, 'MW', 'MWI', 'Malawi', 'Malawi', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(132, 458, 'MY', 'MYS', 'Malaysia', 'Malaisie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(133, 462, 'MV', 'MDV', 'Maldives', 'Maldives', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(134, 466, 'ML', 'MLI', 'Mali', 'Mali', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(135, 470, 'MT', 'MLT', 'Malta', 'Malte', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(136, 474, 'MQ', 'MTQ', 'Martinique', 'Martinique', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(137, 478, 'MR', 'MRT', 'Mauritania', 'Mauritanie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(138, 480, 'MU', 'MUS', 'Mauritius', 'Maurice', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(139, 484, 'MX', 'MEX', 'Mexico', 'Mexique', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(140, 492, 'MC', 'MCO', 'Monaco', 'Monaco', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(141, 496, 'MN', 'MNG', 'Mongolia', 'Mongolie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(142, 498, 'MD', 'MDA', 'Republic of Moldova', 'Republique de Moldova', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(143, 500, 'MS', 'MSR', 'Montserrat', 'Montserrat', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(144, 504, 'MA', 'MAR', 'Morocco', 'Maroc', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(145, 508, 'MZ', 'MOZ', 'Mozambique', 'Mozambique', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(146, 512, 'OM', 'OMN', 'Oman', 'Oman', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(147, 516, 'NA', 'NAM', 'Namibia', 'Namibie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(148, 520, 'NR', 'NRU', 'Nauru', 'Nauru', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(149, 524, 'NP', 'NPL', 'Nepal', 'Nepal', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(150, 528, 'NL', 'NLD', 'Netherlands', 'Pays-Bas', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(151, 530, 'AN', 'ANT', 'Netherlands Antilles', 'Antilles Neerlandaises', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(152, 533, 'AW', 'ABW', 'Aruba', 'Aruba', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(153, 540, 'NC', 'NCL', 'New Caledonia', 'Nouvelle-Caledonie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(154, 548, 'VU', 'VUT', 'Vanuatu', 'Vanuatu', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(155, 554, 'NZ', 'NZL', 'New Zealand', 'Nouvelle-Zelande', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(156, 558, 'NI', 'NIC', 'Nicaragua', 'Nicaragua', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(157, 562, 'NE', 'NER', 'Niger', 'Niger', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(158, 566, 'NG', 'NGA', 'Nigeria', 'Nigeria', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(159, 570, 'NU', 'NIU', 'Niue', 'Niu', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(160, 574, 'NF', 'NFK', 'Norfolk Island', 'ele Norfolk', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(161, 578, 'NO', 'NOR', 'Norway', 'Norvege', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(162, 580, 'MP', 'MNP', 'Northern Mariana Islands', 'eles Mariannes du Nord', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(163, 581, 'UM', 'UMI', 'United States Minor Outlying Islands', 'eles Mineures eloignees des etats-Unis', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(164, 583, 'FM', 'FSM', 'Federated States of Micronesia', 'etats Federes de Micronesie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(165, 584, 'MH', 'MHL', 'Marshall Islands', 'eles Marshall', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(166, 585, 'PW', 'PLW', 'Palau', 'Palaos', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(167, 586, 'PK', 'PAK', 'Pakistan', 'Pakistan', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(168, 591, 'PA', 'PAN', 'Panama', 'Panama', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(169, 598, 'PG', 'PNG', 'Papua New Guinea', 'Papouasie-Nouvelle-Guinée', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(170, 600, 'PY', 'PRY', 'Paraguay', 'Paraguay', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(171, 604, 'PE', 'PER', 'Peru', 'Perou', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(172, 608, 'PH', 'PHL', 'Philippines', 'Philippines', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(173, 612, 'PN', 'PCN', 'Pitcairn', 'Pitcairn', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(174, 616, 'PL', 'POL', 'Poland', 'Pologne', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(175, 620, 'PT', 'PRT', 'Portugal', 'Portugal', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(176, 624, 'GW', 'GNB', 'Guinea-Bissau', 'Guinee-Bissau', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(177, 626, 'TL', 'TLS', 'Timor-Leste', 'Timor-Leste', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(178, 630, 'PR', 'PRI', 'Puerto Rico', 'Porto Rico', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(179, 634, 'QA', 'QAT', 'Qatar', 'Qatar', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(180, 638, 'RE', 'REU', 'R?union', 'Reunion', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(181, 642, 'RO', 'ROU', 'Romania', 'Roumanie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(182, 643, 'RU', 'RUS', 'Russian Federation', 'Federation de Russie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(183, 646, 'RW', 'RWA', 'Rwanda', 'Rwanda', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(184, 654, 'SH', 'SHN', 'Saint Helena', 'Sainte-Helene', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(185, 659, 'KN', 'KNA', 'Saint Kitts and Nevis', 'Saint-Kitts-et-Nevis', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(186, 660, 'AI', 'AIA', 'Anguilla', 'Anguilla', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(187, 662, 'LC', 'LCA', 'Saint Lucia', 'Sainte-Lucie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(188, 666, 'PM', 'SPM', 'Saint-Pierre and Miquelon', 'Saint-Pierre-et-Miquelon', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(189, 670, 'VC', 'VCT', 'Saint Vincent and the Grenadines', 'Saint-Vincent-et-les Grenadines', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(190, 674, 'SM', 'SMR', 'San Marino', 'Saint-Marin', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(191, 678, 'ST', 'STP', 'Sao Tome and Principe', 'Sao Tome-et-Principe', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(192, 682, 'SA', 'SAU', 'Saudi Arabia', 'Arabie Saoudite', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(194, 690, 'SC', 'SYC', 'Seychelles', 'Seychelles', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(195, 694, 'SL', 'SLE', 'Sierra Leone', 'Sierra Leone', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(196, 702, 'SG', 'SGP', 'Singapore', 'Singapour', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(197, 703, 'SK', 'SVK', 'Slovakia', 'Slovaquie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(198, 704, 'VN', 'VNM', 'Vietnam', 'Viet Nam', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(199, 705, 'SI', 'SVN', 'Slovenia', 'Slovenie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(200, 706, 'SO', 'SOM', 'Somalia', 'Somalie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(201, 710, 'ZA', 'ZAF', 'South Africa', 'Afrique du Sud', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(202, 716, 'ZW', 'ZWE', 'Zimbabwe', 'Zimbabwe', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(203, 724, 'ES', 'ESP', 'Spain', 'Espagne', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(204, 732, 'EH', 'ESH', 'Western Sahara', 'Sahara Occidental', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(205, 736, 'SD', 'SDN', 'Sudan', 'Soudan', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(206, 740, 'SR', 'SUR', 'Suriname', 'Suriname', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(207, 744, 'SJ', 'SJM', 'Svalbard and Jan Mayen', 'Svalbard etele Jan Mayen', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(208, 748, 'SZ', 'SWZ', 'Swaziland', 'Swaziland', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(209, 752, 'SE', 'SWE', 'Sweden', 'Suede', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(210, 756, 'CH', 'CHE', 'Switzerland', 'Suisse', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(211, 760, 'SY', 'SYR', 'Syrian Arab Republic', 'Republique Arabe Syrienne', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(212, 762, 'TJ', 'TJK', 'Tajikistan', 'Tadjikistan', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(213, 764, 'TH', 'THA', 'Thailand', 'Thaelande', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(214, 768, 'TG', 'TGO', 'Togo', 'Togo', '1', '0000-00-00', 0, '2020-01-25 21:47:32'),
(215, 772, 'TK', 'TKL', 'Tokelau', 'Tokelau', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(216, 776, 'TO', 'TON', 'Tonga', 'Tonga', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(217, 780, 'TT', 'TTO', 'Trinidad and Tobago', 'Trinite-et-Tobago', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(218, 784, 'AE', 'ARE', 'United Arab Emirates', 'emirats Arabes Unis', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(219, 788, 'TN', 'TUN', 'Tunisia', 'Tunisie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(220, 792, 'TR', 'TUR', 'Turkey', 'Turquie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(221, 795, 'TM', 'TKM', 'Turkmenistan', 'Turkmenistan', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(222, 796, 'TC', 'TCA', 'Turks and Caicos Islands', 'eles Turks et Caeques', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(223, 798, 'TV', 'TUV', 'Tuvalu', 'Tuvalu', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(224, 800, 'UG', 'UGA', 'Uganda', 'Ouganda', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(225, 804, 'UA', 'UKR', 'Ukraine', 'Ukraine', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(226, 807, 'MK', 'MKD', 'The Former Yugoslav Republic of Macedonia', 'L\'ex-Republique Yougoslave de Macedoine', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(227, 818, 'EG', 'EGY', 'Egypt', 'egypte', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(228, 826, 'GB', 'GBR', 'United Kingdom', 'Royaume-Uni', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(229, 833, 'IM', 'IMN', 'Isle of Man', 'ele de Man', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(230, 834, 'TZ', 'TZA', 'United Republic Of Tanzania', 'Republique-Unie de Tanzanie', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(231, 840, 'US', 'USA', 'United States', 'etats-Unis', '1', '0000-00-00', 0, '2020-01-25 21:47:32'),
(232, 850, 'VI', 'VIR', 'U.S. Virgin Islands', 'eles Vierges des etats-Unis', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(233, 854, 'BF', 'BFA', 'Burkina Faso', 'Burkina Faso', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(234, 858, 'UY', 'URY', 'Uruguay', 'Uruguay', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(235, 860, 'UZ', 'UZB', 'Uzbekistan', 'Ouzbekistan', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(236, 862, 'VE', 'VEN', 'Venezuela', 'Venezuela', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(237, 876, 'WF', 'WLF', 'Wallis and Futuna', 'Wallis et Futuna', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(238, 882, 'WS', 'WSM', 'Samoa', 'Samoa', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(239, 887, 'YE', 'YEM', 'Yemen', 'Yemen', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(240, 891, 'CS', 'SCG', 'Serbia and Montenegro', 'Serbie-et-Montenegro', '0', '0000-00-00', 0, '2020-01-25 21:47:32'),
(241, 894, 'ZM', 'ZMB', 'Zambia', 'Zambie', '0', '0000-00-00', 0, '2020-01-25 21:47:32');

-- --------------------------------------------------------

--
-- Structure de la table `lst_types_pieces`
--

CREATE TABLE `lst_types_pieces` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `commentaires` varchar(300) DEFAULT NULL,
  `etat` enum('1','0') NOT NULL DEFAULT '1',
  `date_creation` date NOT NULL,
  `id_op_saisie` smallint(11) NOT NULL,
  `date_last_modif` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lst_types_pieces`
--

INSERT INTO `lst_types_pieces` (`id`, `libelle`, `commentaires`, `etat`, `date_creation`, `id_op_saisie`, `date_last_modif`) VALUES
(3, 'CNI', 'CNI', '1', '2023-07-11', 2, '2023-07-11 16:00:07');

-- --------------------------------------------------------

--
-- Structure de la table `lst_type_experiences`
--

CREATE TABLE `lst_type_experiences` (
  `id` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL,
  `commentaires` varchar(300) DEFAULT NULL,
  `etat` enum('1','0') NOT NULL DEFAULT '1',
  `date_creation` date NOT NULL,
  `id_op_saisie` smallint(11) NOT NULL,
  `date_last_modif` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lst_type_experiences`
--

INSERT INTO `lst_type_experiences` (`id`, `libelle`, `commentaires`, `etat`, `date_creation`, `id_op_saisie`, `date_last_modif`) VALUES
(1, 'Stage', 'aaa', '1', '2023-07-12', 0, '2023-07-12 04:43:49'),
(2, 'CDD', 'CDD', '1', '2022-10-12', 1, '2023-07-14 07:56:00');

-- --------------------------------------------------------

--
-- Structure de la table `par_lieux_sn`
--

CREATE TABLE `par_lieux_sn` (
  `id` int(11) NOT NULL,
  `niveau` int(11) NOT NULL,
  `type` enum('region','departement','cacr','commune') NOT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `code_syscol` varchar(12) NOT NULL,
  `nom_lieu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `par_lieux_sn`
--

INSERT INTO `par_lieux_sn` (`id`, `niveau`, `type`, `id_parent`, `code_syscol`, `nom_lieu`) VALUES
(1, 1, 'region', NULL, '04', 'SAINT-LOUIS'),
(2, 1, 'departement', NULL, '05', 'TAMBACOUNDA'),
(3, 1, 'region', NULL, '06', 'KAOLACK'),
(4, 1, 'region', NULL, '07', 'THIES'),
(5, 1, 'region', NULL, '08', 'LOUGA'),
(6, 1, 'region', NULL, '09', 'FATICK'),
(7, 1, 'region', NULL, '10', 'KOLDA'),
(8, 1, 'region', NULL, '11', 'MATAM'),
(9, 1, 'region', NULL, '12', 'KAFFRINE'),
(10, 1, 'region', NULL, '13', 'KEDOUGOU'),
(11, 1, 'region', NULL, '14', 'SEDHIOU'),
(12, 1, 'region', NULL, '01', 'DAKAR'),
(13, 1, 'region', NULL, '02', 'ZIGUINCHOR'),
(14, 1, 'region', NULL, '03', 'DIOURBEL'),
(16, 2, 'departement', 1, '042', 'PODOR'),
(17, 2, 'departement', 1, '043', 'SAINT LOUIS'),
(18, 2, 'departement', 2, '051', 'BAKEL'),
(19, 2, 'departement', 2, '052', 'TAMBACOUNDA'),
(20, 2, 'departement', 2, '053', 'GOUDIRY'),
(21, 2, 'departement', 2, '054', 'KOUPENTOUM'),
(22, 2, 'departement', 3, '061', 'KAOLACK'),
(23, 2, 'departement', 3, '062', 'NIORO'),
(24, 2, 'departement', 3, '063', 'GUINGUINEO'),
(25, 2, 'departement', 4, '071', 'M\'BOUR'),
(26, 2, 'departement', 4, '072', 'THIES'),
(27, 2, 'departement', 4, '073', 'TIVAOUANE'),
(28, 2, 'departement', 5, '081', 'KEBEMER'),
(29, 2, 'departement', 5, '082', 'LINGUERE'),
(30, 2, 'departement', 5, '083', 'LOUGA'),
(31, 2, 'departement', 6, '091', 'FATICK'),
(32, 2, 'departement', 6, '092', 'FOUNDIOUGNE'),
(33, 2, 'departement', 6, '093', 'GOSSAS'),
(34, 2, 'departement', 7, '101', 'KOLDA'),
(35, 2, 'departement', 7, '102', 'VELINGARA'),
(36, 2, 'departement', 7, '103', 'MEDINA YORO FOULAH'),
(37, 2, 'departement', 8, '111', 'MATAM'),
(38, 2, 'departement', 8, '112', 'KANEL'),
(39, 2, 'departement', 8, '113', 'RANEROU'),
(40, 2, 'departement', 9, '121', 'KAFFRINE'),
(41, 2, 'departement', 9, '122', 'BIRKELANE'),
(42, 2, 'departement', 9, '123', 'KOUNGHEUL'),
(43, 2, 'departement', 9, '124', 'MALEM HODDAR'),
(44, 2, 'departement', 10, '131', 'KEDOUGOU'),
(45, 2, 'departement', 10, '132', 'SALEMATA'),
(46, 2, 'departement', 10, '133', 'SARAYA'),
(47, 2, 'departement', 11, '141', 'SEDHIOU'),
(48, 2, 'departement', 11, '142', 'BOUNKILING'),
(49, 2, 'departement', 11, '143', 'GOUDOMP'),
(50, 2, 'departement', 12, '011', 'DAKAR'),
(51, 2, 'departement', 12, '012', 'PIKINE'),
(52, 2, 'departement', 12, '013', 'RUFISQUE'),
(53, 2, 'departement', 12, '014', 'GUEDIAWAYE'),
(54, 2, 'departement', 13, '021', 'BIGNONA'),
(55, 2, 'departement', 13, '022', 'OUSSOUYE'),
(56, 2, 'departement', 13, '023', 'ZIGUINCHOR'),
(57, 2, 'departement', 14, '031', 'BAMBEY'),
(58, 2, 'departement', 14, '032', 'DIOURBEL'),
(59, 2, 'departement', 14, '033', 'M\'BACKE'),
(60, 2, 'departement', 1, '041', 'DAGANA'),
(79, 3, 'cacr', 16, '042201', 'CAS-CAS'),
(80, 3, 'cacr', 16, '042202', 'SALDE'),
(81, 3, 'cacr', 16, '042203', 'THILLE BOUBACAR'),
(82, 3, 'cacr', 16, '042204', 'GAMADJI SARE'),
(83, 3, 'cacr', 17, '043101', 'COM. SAINT LOUIS'),
(84, 3, 'cacr', 17, '043102', 'COM. M\'PAL'),
(85, 3, 'cacr', 17, '043201', 'RAO'),
(86, 3, 'cacr', 18, '051101', 'COM. BAKEL'),
(87, 3, 'cacr', 18, '051102', 'COM. DIAWARA'),
(88, 3, 'cacr', 18, '051103', 'COM .KIDIRA'),
(89, 3, 'cacr', 18, '051201', 'KENIEBA'),
(90, 3, 'cacr', 18, '051202', 'BELE'),
(91, 3, 'cacr', 18, '051203', 'MOUDERY'),
(92, 3, 'cacr', 19, '052101', 'COM. TAMBACOUNDA'),
(93, 3, 'cacr', 19, '052201', 'KOUSSANAR'),
(94, 3, 'cacr', 19, '052202', 'MAKACOULIBANTANG'),
(95, 3, 'cacr', 19, '052203', 'MISSIRAH'),
(96, 3, 'cacr', 20, '053101', 'COM. GOUDIRY'),
(97, 3, 'cacr', 20, '053102', 'COM. KOTHIARY'),
(98, 3, 'cacr', 20, '053201', 'BALA'),
(99, 3, 'cacr', 20, '053202', 'BOYNGUEL BAMBA'),
(100, 3, 'cacr', 20, '053203', 'DIANKE MAKHA'),
(101, 3, 'cacr', 20, '053204', 'KOULOR'),
(102, 3, 'cacr', 21, '054101', 'COM. KOUMPENTOUM'),
(103, 3, 'cacr', 21, '054102', 'COM. MALEM NIANI'),
(104, 3, 'cacr', 21, '054201', 'BAMBA  THIALENE'),
(105, 3, 'cacr', 21, '054202', 'KOUTHIABA WOLOF'),
(106, 3, 'cacr', 22, '061101', 'COM. KAOLACK'),
(107, 3, 'cacr', 22, '061102', 'COM. KAHONE'),
(108, 3, 'cacr', 22, '061103', 'COM. GANDIAYE'),
(109, 3, 'cacr', 22, '061104', 'COM. NDOFFANE'),
(110, 3, 'cacr', 22, '061105', 'COM. SIBASSOR'),
(111, 3, 'cacr', 22, '061201', 'NDIEDIENG'),
(112, 3, 'cacr', 22, '061202', 'KOUMBAL'),
(113, 3, 'cacr', 22, '061203', 'NGOTHIE'),
(114, 3, 'cacr', 23, '062101', 'COM. NIORO'),
(115, 3, 'cacr', 23, '062102', 'COM. KEUR MADIABEL'),
(116, 3, 'cacr', 23, '062201', 'MEDINA-SABAKH'),
(117, 3, 'cacr', 23, '062202', 'PAOSKOTO'),
(118, 3, 'cacr', 23, '062203', 'WACK-NGOUNA'),
(119, 3, 'cacr', 24, '063101', 'COM. GUINGUINEO'),
(120, 3, 'cacr', 24, '063102', 'COM. FASS'),
(121, 3, 'cacr', 24, '063103', 'COM. MBOSS'),
(122, 3, 'cacr', 24, '063201', 'MBADAKHOUNE'),
(123, 3, 'cacr', 24, '063202', 'NGUELOU'),
(124, 3, 'cacr', 25, '071101', 'COM. JOAL- FADIOUTH'),
(125, 3, 'cacr', 25, '071102', 'COM. M\'BOUR'),
(126, 3, 'cacr', 25, '071103', 'COM. GUEKOKH'),
(127, 3, 'cacr', 25, '071104', 'COM. THIADIAYE'),
(128, 3, 'cacr', 25, '071105', 'COM. N\'GAPAROU'),
(129, 3, 'cacr', 25, '071106', 'COM. POPOGUINE'),
(130, 3, 'cacr', 25, '071107', 'COM. SALY PORTUDAL'),
(131, 3, 'cacr', 25, '071108', 'COM. SOMONE'),
(132, 3, 'cacr', 25, '071201', 'FISSEL'),
(133, 3, 'cacr', 25, '071202', 'SESSENE'),
(134, 3, 'cacr', 25, '071203', 'SINDIA'),
(135, 3, 'cacr', 26, '072101', 'COM. KHOMBOLE'),
(136, 3, 'cacr', 26, '072102', 'COM. POUT'),
(137, 3, 'cacr', 26, '072103', 'COM. CAYAR'),
(138, 3, 'cacr', 26, '072201', 'NOTTO'),
(139, 3, 'cacr', 26, '072202', 'THIENABA'),
(140, 3, 'cacr', 26, '072203', 'KEUR MOUSSA'),
(141, 3, 'cacr', 26, '072301', 'VILLE DE THIES'),
(142, 3, 'cacr', 27, '073101', 'COM. MEKHE'),
(143, 3, 'cacr', 27, '073102', 'COM. TIVAOUANE'),
(144, 3, 'cacr', 27, '073103', 'COM. M\'BORO'),
(145, 3, 'cacr', 27, '073201', 'MEOUANE'),
(146, 3, 'cacr', 27, '073202', 'MERINA-DAKHAR'),
(147, 3, 'cacr', 27, '073203', 'NIAKHENE'),
(148, 3, 'cacr', 27, '073204', 'PAMBAL'),
(149, 3, 'cacr', 28, '081101', 'COM. KEBEMER'),
(150, 3, 'cacr', 28, '081102', 'COM. GUEOUL'),
(151, 3, 'cacr', 28, '081201', 'DAROU MOUSTY'),
(152, 3, 'cacr', 28, '081202', 'NDANDE'),
(153, 3, 'cacr', 28, '081203', 'SAGATTA GUETH'),
(154, 3, 'cacr', 29, '082101', 'COM. LINGUERE'),
(155, 3, 'cacr', 29, '082102', 'COM. DAHRA'),
(156, 3, 'cacr', 29, '082103', 'COM. MBEULEUKHE'),
(157, 3, 'cacr', 29, '082201', 'BARKEDJI'),
(158, 3, 'cacr', 29, '082202', 'DODJI'),
(159, 3, 'cacr', 29, '082203', 'YANG YANG'),
(160, 3, 'cacr', 29, '082204', 'SAGATTA DJOLOF'),
(161, 3, 'cacr', 30, '083101', 'COM. LOUGA'),
(162, 3, 'cacr', 30, '083102', 'COM. NDIAGNE'),
(163, 3, 'cacr', 30, '083201', 'COKI'),
(164, 3, 'cacr', 30, '083202', 'K EUR MOMAR SARR'),
(165, 3, 'cacr', 30, '083203', 'MBEDIENE'),
(166, 3, 'cacr', 30, '083204', 'SAKAL'),
(167, 3, 'cacr', 31, '091101', 'COM. FATICK'),
(168, 3, 'cacr', 31, '091102', 'COM. DIOFIOR'),
(169, 3, 'cacr', 31, '091103', 'COM. DIAKHAO'),
(170, 3, 'cacr', 31, '091201', 'NDIOB'),
(171, 3, 'cacr', 31, '091202', 'FIMELA'),
(172, 3, 'cacr', 31, '091203', 'NIAKHAR'),
(173, 3, 'cacr', 31, '091204', 'TATTAGUINE'),
(174, 3, 'cacr', 32, '092101', 'COM. FOUNDIOUGNE'),
(175, 3, 'cacr', 32, '092102', 'COM. SOKONE'),
(176, 3, 'cacr', 32, '092103', 'COM. PASSY'),
(177, 3, 'cacr', 32, '092104', 'COM. KARANG POSTE'),
(178, 3, 'cacr', 32, '092105', 'COM. SOUM'),
(179, 3, 'cacr', 32, '092201', 'DJILOR'),
(180, 3, 'cacr', 32, '092202', 'NIODIOR'),
(181, 3, 'cacr', 32, '092203', 'TOUBACOUTA'),
(182, 3, 'cacr', 33, '093101', 'COM. GOSSAS'),
(183, 3, 'cacr', 33, '093201', 'COLOBANE'),
(184, 3, 'cacr', 33, '093202', 'OUADIOUR'),
(185, 3, 'cacr', 34, '101101', 'COM. KOLDA'),
(186, 3, 'cacr', 34, '101102', 'COM. DABO'),
(187, 3, 'cacr', 34, '101103', 'COM. SALIKEGNE'),
(188, 3, 'cacr', 34, '101104', 'COM. SARE YOBA DIEGA'),
(189, 3, 'cacr', 34, '101201', 'DIOULACOLON'),
(190, 3, 'cacr', 34, '101202', 'MAMPATIM'),
(191, 3, 'cacr', 34, '101203', 'SARE BIDJI'),
(192, 3, 'cacr', 35, '102101', 'COM. VELINGARA'),
(193, 3, 'cacr', 35, '102102', 'COM. DIAOUBE- KABENDOU'),
(194, 3, 'cacr', 35, '102103', 'COM. KOUNKANE'),
(195, 3, 'cacr', 35, '102201', 'BONCONTO'),
(196, 3, 'cacr', 35, '102202', 'PAKOUR'),
(197, 3, 'cacr', 35, '102203', 'SARE COLY SALLE'),
(198, 3, 'cacr', 36, '103101', 'COM. MEDINA YORO FOULAH'),
(199, 3, 'cacr', 36, '103102', 'COM. PATA'),
(200, 3, 'cacr', 36, '103201', 'FAFACOUROU'),
(201, 3, 'cacr', 36, '103202', 'AR.NDORNA'),
(202, 3, 'cacr', 36, '103203', 'NIAMING'),
(203, 3, 'cacr', 37, '111101', 'COM .MATAM'),
(204, 3, 'cacr', 37, '111102', 'COM. OUROSSOGUI'),
(205, 3, 'cacr', 37, '111103', 'COM. THILOGNE'),
(206, 3, 'cacr', 37, '111104', 'COM. NGUIDILOGNE'),
(207, 3, 'cacr', 37, '111201', 'AGNAM-CIVOL'),
(208, 3, 'cacr', 37, '111202', 'OGO'),
(209, 3, 'cacr', 38, '112101', 'COM. KANEL'),
(210, 3, 'cacr', 38, '112102', 'COM. SEMME'),
(211, 3, 'cacr', 38, '112103', 'COM. WAOUNDE'),
(212, 3, 'cacr', 38, '112104', 'COM. DEMBANCANE'),
(213, 3, 'cacr', 38, '112105', 'COM. HAMADY OUNARE'),
(214, 3, 'cacr', 38, '112106', 'COM. SINTHIOU BAMANBE-BANADJI'),
(215, 3, 'cacr', 38, '112107', 'COM. ODOBERE'),
(216, 3, 'cacr', 38, '112201', 'ORKADIERE'),
(217, 3, 'cacr', 38, '112202', 'OURO SIDY'),
(218, 3, 'cacr', 39, '113101', 'COM. RANEROU'),
(219, 3, 'cacr', 39, '113201', 'VELINGARA'),
(220, 3, 'cacr', 40, '121101', 'COM. KAFFRINE'),
(221, 3, 'cacr', 40, '121102', 'COM. N\'GANDA'),
(222, 3, 'cacr', 40, '121201', 'GNIBY'),
(223, 3, 'cacr', 40, '121202', 'KATAKEL'),
(224, 3, 'cacr', 41, '122101', 'COM .BIRKELANE'),
(225, 3, 'cacr', 41, '122201', 'KEUR M\'BOUKI'),
(226, 3, 'cacr', 41, '122202', 'MABO'),
(227, 3, 'cacr', 42, '123101', 'COM. KOUNGHEUL'),
(228, 3, 'cacr', 42, '123201', 'IDA MOURIDE'),
(229, 3, 'cacr', 42, '123202', 'LOUR ESCALE'),
(230, 3, 'cacr', 42, '123203', 'MISSIRAH WADENE'),
(231, 3, 'cacr', 43, '124101', 'COM. MALEM HODDAR'),
(232, 3, 'cacr', 43, '124201', 'DAROU MINAM II'),
(233, 3, 'cacr', 43, '124202', 'SAGNA'),
(234, 3, 'cacr', 44, '131101', 'COM .KEDOUGOU'),
(235, 3, 'cacr', 44, '131201', 'BANDAFASSI'),
(236, 3, 'cacr', 44, '131202', 'FONGOLEMBI'),
(237, 3, 'cacr', 45, '132101', 'COM. SALEMATA'),
(238, 3, 'cacr', 45, '132201', 'DAKATELI'),
(239, 3, 'cacr', 45, '132202', 'DAR  SALAM'),
(240, 3, 'cacr', 46, '133101', 'COM. SARAYA'),
(241, 3, 'cacr', 46, '133201', 'BEMBOU'),
(242, 3, 'cacr', 46, '133202', 'SABODOLA'),
(243, 3, 'cacr', 47, '141101', 'COM. SEDHIOU'),
(244, 3, 'cacr', 47, '141102', 'COM. MARSASSOUM'),
(245, 3, 'cacr', 47, '141103', 'COM. DIANAH MALARY'),
(246, 3, 'cacr', 47, '141201', 'DIENDE'),
(247, 3, 'cacr', 47, '141202', 'DJIBABOUYA'),
(248, 3, 'cacr', 47, '141203', 'DJIREDJI'),
(249, 3, 'cacr', 48, '142101', 'COM. BOUNKILING'),
(250, 3, 'cacr', 48, '142102', 'COM. MADINA WANDIFA'),
(251, 3, 'cacr', 48, '142103', 'COM. NDIAMACOUTA'),
(252, 3, 'cacr', 48, '142201', 'BOGHAL'),
(253, 3, 'cacr', 48, '142202', 'BONA'),
(254, 3, 'cacr', 48, '142203', 'DIAROUME'),
(255, 3, 'cacr', 49, '143101', 'COM. GOUDOMP'),
(256, 3, 'cacr', 49, '143102', 'COM. DIATTACOUNDA'),
(257, 3, 'cacr', 49, '143103', 'COM. SAMINE'),
(258, 3, 'cacr', 49, '143104', 'COM. TANAFF'),
(259, 3, 'cacr', 49, '143201', 'DJIBANAR'),
(260, 3, 'cacr', 49, '143202', 'KARANTABA'),
(261, 3, 'cacr', 49, '143203', 'SIMBANDI BRASSOU'),
(262, 3, 'cacr', 50, '011301', 'VILLE DE DAKAR'),
(263, 3, 'cacr', 51, '012301', 'VILLE DE PIKINE'),
(264, 3, 'cacr', 52, '013101', 'COM. BARGNY'),
(265, 3, 'cacr', 52, '013102', 'COM. SEBIKOTANE'),
(266, 3, 'cacr', 52, '013103', 'COM. DIAMNIADIO'),
(267, 3, 'cacr', 52, '013104', 'COM. JAXAAY PARCELLE NIAKOUL RAP'),
(268, 3, 'cacr', 52, '013105', 'COM. SANGALKAM'),
(269, 3, 'cacr', 52, '013106', 'COM. SENDOU'),
(270, 3, 'cacr', 52, '013201', 'BAMBYLOR'),
(271, 3, 'cacr', 52, '013301', 'VILLE DE RUFISQUE'),
(272, 3, 'cacr', 53, '014301', 'VILLE DE GUEDIAWAYE'),
(273, 3, 'cacr', 54, '021101', 'COM. BIGNONA'),
(274, 3, 'cacr', 54, '021102', 'COM. THIONCK-ESSYL'),
(275, 3, 'cacr', 54, '021103', 'COM. DIOULOULOU'),
(276, 3, 'cacr', 54, '021201', 'SINDIAN'),
(277, 3, 'cacr', 54, '021202', 'TENDOUCK'),
(278, 3, 'cacr', 54, '021203', 'TENGHORY'),
(279, 3, 'cacr', 54, '021204', 'KATABA I'),
(280, 3, 'cacr', 55, '022101', 'COM. OUSSOUYE'),
(281, 3, 'cacr', 55, '022201', 'CABROUSSE'),
(282, 3, 'cacr', 55, '022202', 'LOUDIA OUOLOF'),
(283, 3, 'cacr', 56, '023101', 'COM. ZIGUINCHOR'),
(284, 3, 'cacr', 56, '023201', 'NIAGUIS'),
(285, 3, 'cacr', 56, '023202', 'NYASSIA'),
(286, 3, 'cacr', 57, '031101', 'COM. BAMBEY'),
(287, 3, 'cacr', 57, '031201', 'BABA GARAGE'),
(288, 3, 'cacr', 57, '031202', 'LAMBAYE'),
(289, 3, 'cacr', 57, '031203', 'N\'GOYE'),
(290, 3, 'cacr', 58, '032101', 'COM. DIOURBEL'),
(291, 3, 'cacr', 58, '032201', 'N\'DINDY'),
(292, 3, 'cacr', 58, '032202', 'N\'DOULO'),
(293, 3, 'cacr', 59, '033101', 'COM. M\'BACKE'),
(294, 3, 'cacr', 59, '033201', 'KAEL'),
(295, 3, 'cacr', 59, '033202', 'N\'DAME'),
(296, 3, 'cacr', 59, '033203', 'TAIF'),
(297, 3, 'cacr', 60, '041101', 'COM. DAGANA'),
(298, 3, 'cacr', 60, '041102', 'COM. RICHARD-TOLL'),
(299, 3, 'cacr', 60, '041103', 'COM. ROSSO-SENEGAL'),
(300, 3, 'cacr', 60, '041104', 'COM. ROSS-BETHIO'),
(301, 3, 'cacr', 60, '041105', 'COM. GAE'),
(302, 3, 'cacr', 60, '041106', 'COM. NDOMBO SANDJIRY'),
(303, 3, 'cacr', 60, '041201', 'MBANE'),
(304, 3, 'cacr', 60, '041202', 'NDIAYE'),
(305, 3, 'cacr', 16, '042101', 'COM. PODOR'),
(306, 3, 'cacr', 16, '042102', 'COM. NDIOUM'),
(307, 3, 'cacr', 16, '042103', 'COM. GOLLERE'),
(308, 3, 'cacr', 16, '042104', 'COM. NDIANDANE'),
(309, 3, 'cacr', 16, '042105', 'COM. BODE LAO'),
(310, 3, 'cacr', 16, '042106', 'COM. DEMETTE'),
(311, 3, 'cacr', 16, '042107', 'COM. GALOYA TOUCOULEUR'),
(312, 3, 'cacr', 16, '042108', 'COM. GUEDE CHANTIER'),
(313, 3, 'cacr', 16, '042109', 'COM. MBOUMBA'),
(314, 3, 'cacr', 16, '042110', 'COM. AERE LAO'),
(315, 3, 'cacr', 16, '042111', 'COM. PETE'),
(316, 3, 'cacr', 16, '042112', 'COM. WALALDE'),
(1354, 4, 'commune', 79, '04220102', 'DOUNGA-LAO'),
(1356, 4, 'commune', 80, '04220201', 'BOKE DIALLOUBE'),
(1357, 4, 'commune', 80, '04220202', 'MBOLO BIRANE'),
(1358, 4, 'commune', 81, '04220301', 'FANAYE'),
(1359, 4, 'commune', 81, '04220302', 'NDIAYENE PENDAO'),
(1360, 4, 'commune', 82, '04220401', 'DODEL'),
(1361, 4, 'commune', 82, '04220402', 'GAMADJI SARE'),
(1362, 4, 'commune', 82, '04220403', 'GUEDE VILLAGE'),
(1363, 4, 'commune', 83, '04310100', 'COM. SAINT LOUIS'),
(1364, 4, 'commune', 84, '04310200', 'COM. M\'PAL'),
(1365, 4, 'commune', 85, '04320101', 'GANDON'),
(1366, 4, 'commune', 85, '04320102', 'FASS NGOM'),
(1367, 4, 'commune', 85, '04320103', 'N\'DIEBENE GANDIOLE'),
(1368, 4, 'commune', 86, '05110100', 'COM. BAKEL'),
(1369, 4, 'commune', 87, '05110200', 'COM. DIAWARA'),
(1370, 4, 'commune', 88, '05110300', 'COM .KIDIRA'),
(1371, 4, 'commune', 89, '05120101', 'GATHIARY'),
(1372, 4, 'commune', 89, '05120102', 'MADINA FOULBE'),
(1373, 4, 'commune', 89, '05120103', 'SADATOU'),
(1374, 4, 'commune', 89, '05120104', 'TOUMBOURA'),
(1375, 4, 'commune', 90, '05120201', 'BELE'),
(1376, 4, 'commune', 90, '05120202', 'SINTHIOU-FISSA'),
(1377, 4, 'commune', 91, '05120301', 'BALLOU'),
(1378, 4, 'commune', 91, '05120302', 'GABOU'),
(1379, 4, 'commune', 91, '05120303', 'MOUDERY'),
(1380, 4, 'commune', 92, '05210100', 'COM. TAMBACOUNDA'),
(1381, 4, 'commune', 93, '05220101', 'KOUSSANAR'),
(1382, 4, 'commune', 93, '05220102', 'SINTHIOU MALEM'),
(1383, 4, 'commune', 94, '05220201', 'MAKACOULIBATANG'),
(1384, 4, 'commune', 94, '05220202', 'N\'DOGA BABACAR'),
(1385, 4, 'commune', 94, '05220203', 'NIANI TOUCOULEUR'),
(1386, 4, 'commune', 95, '05220301', 'DIALACOTO'),
(1387, 4, 'commune', 95, '05220302', 'MISSIRAH'),
(1388, 4, 'commune', 95, '05220303', 'NETTE BOULOU'),
(1389, 4, 'commune', 96, '05310100', 'COM. GOUDIRY'),
(1390, 4, 'commune', 97, '05310200', 'COM. KOTHIARY'),
(1391, 4, 'commune', 98, '05320101', 'BALA'),
(1392, 4, 'commune', 98, '05320102', 'GOUMBAYEL'),
(1393, 4, 'commune', 98, '05320103', 'KOAR'),
(1394, 4, 'commune', 99, '05320201', 'DOUGUE'),
(1395, 4, 'commune', 99, '05320202', 'BOYNGUEL BAMBA'),
(1396, 4, 'commune', 99, '05320203', 'KOUSSAN'),
(1397, 4, 'commune', 99, '05320204', 'SINTHIOU MAMADOU BOUBOU'),
(1398, 4, 'commune', 100, '05320301', 'BANI   ISRAEL'),
(1399, 4, 'commune', 100, '05320302', 'BOUTOUCOUFARA'),
(1400, 4, 'commune', 100, '05320303', 'DIANKE MAKHA'),
(1401, 4, 'commune', 100, '05320304', 'KOMOTI'),
(1402, 4, 'commune', 101, '05320401', 'KOULOR'),
(1403, 4, 'commune', 101, '05320402', 'SINTHIOU BOCAR ALI'),
(1404, 4, 'commune', 102, '05410100', 'COM. KOUMPENTOUM'),
(1405, 4, 'commune', 103, '05410200', 'COM. MALEM NIANI'),
(1406, 4, 'commune', 104, '05420101', 'BAMBA  THIALENE'),
(1407, 4, 'commune', 104, '05420102', 'KAHENE'),
(1408, 4, 'commune', 104, '05420103', 'MERETO'),
(1409, 4, 'commune', 104, '05420104', 'N\'DAME'),
(1410, 4, 'commune', 105, '05420201', 'KOUTHIA GAYDI'),
(1411, 4, 'commune', 105, '05420202', 'KOUTHIABA WOLOF'),
(1412, 4, 'commune', 105, '05420203', 'PASS KOTO'),
(1413, 4, 'commune', 105, '05420204', 'PAYAR'),
(1414, 4, 'commune', 106, '06110100', 'COM. KAOLACK'),
(1415, 4, 'commune', 107, '06110200', 'COM. KAHONE'),
(1416, 4, 'commune', 108, '06110300', 'COM. GANDIAYE'),
(1417, 4, 'commune', 109, '06110400', 'COM. NDOFFANE'),
(1418, 4, 'commune', 110, '06110500', 'COM. SIBASSOR'),
(1419, 4, 'commune', 111, '06120101', 'KEUR SOCE'),
(1420, 4, 'commune', 111, '06120102', 'NDIAFFATE'),
(1421, 4, 'commune', 111, '06120103', 'NDIEDIENG'),
(1422, 4, 'commune', 112, '06120201', 'LATMINGUE'),
(1423, 4, 'commune', 112, '06120202', 'THIARE'),
(1424, 4, 'commune', 112, '06120203', 'KEUR BAKA'),
(1425, 4, 'commune', 113, '06120301', 'DYA'),
(1426, 4, 'commune', 113, '06120302', 'NDIEBEL'),
(1427, 4, 'commune', 113, '06120303', 'THIOMBY'),
(1428, 4, 'commune', 114, '06210100', 'COM. NIORO'),
(1429, 4, 'commune', 115, '06210200', 'COM. KEUR MADIABEL'),
(1430, 4, 'commune', 116, '06220101', 'KAYEMOR'),
(1431, 4, 'commune', 116, '06220102', 'MEDINA-SABAKH'),
(1432, 4, 'commune', 116, '06220103', 'NGAYENE'),
(1433, 4, 'commune', 117, '06220201', 'GAINTE KAYE'),
(1434, 4, 'commune', 117, '06220202', 'PAOSKOTO'),
(1435, 4, 'commune', 117, '06220203', 'POROKHANE'),
(1436, 4, 'commune', 117, '06220204', 'TAÃBA NIASSENE'),
(1437, 4, 'commune', 117, '06220205', 'DABALY'),
(1438, 4, 'commune', 117, '06220206', 'DAROU SALAM'),
(1439, 4, 'commune', 118, '06220301', 'KEUR MABA DIAKHOU'),
(1440, 4, 'commune', 118, '06220302', 'NDRAME ESCALE'),
(1441, 4, 'commune', 118, '06220303', 'WACK NGOUNA'),
(1442, 4, 'commune', 118, '06220304', 'K. MANDONGO'),
(1443, 4, 'commune', 119, '06310100', 'COM. GUINGUINEO'),
(1444, 4, 'commune', 120, '06310200', 'COM. FASS'),
(1445, 4, 'commune', 121, '06310300', 'COM. MBOSS'),
(1446, 4, 'commune', 122, '06320101', 'MBADAKHOUNE'),
(1447, 4, 'commune', 122, '06320102', 'NDIAGO'),
(1448, 4, 'commune', 122, '06320103', 'NGATHIE NAOUDE'),
(1449, 4, 'commune', 122, '06320104', 'KHELCOM BIRAME'),
(1450, 4, 'commune', 123, '06320201', 'GAGNICK'),
(1451, 4, 'commune', 123, '06320202', 'NGUELOU'),
(1452, 4, 'commune', 123, '06320203', 'OUROUR'),
(1453, 4, 'commune', 123, '06320204', 'DARA MBOSS'),
(1454, 4, 'commune', 123, '06320205', 'PANAL OUOLOF'),
(1455, 4, 'commune', 124, '07110100', 'COM. JOAL- FADIOUTH'),
(1456, 4, 'commune', 125, '07110200', 'COM. M\'BOUR'),
(1457, 4, 'commune', 126, '07110300', 'COM. GUEKOKH'),
(1458, 4, 'commune', 127, '07110400', 'COM. THIADIAYE'),
(1459, 4, 'commune', 128, '07110500', 'COM. N\'GAPAROU'),
(1460, 4, 'commune', 129, '07110600', 'COM. POPOGUINE'),
(1461, 4, 'commune', 130, '07110700', 'COM. SALY PORTUDAL'),
(1462, 4, 'commune', 131, '07110800', 'COM. SOMONE'),
(1463, 4, 'commune', 132, '07120101', 'FISSEL'),
(1464, 4, 'commune', 132, '07120102', 'N\'DIAGANIAO'),
(1465, 4, 'commune', 133, '07120201', 'N\'GUENIENE'),
(1466, 4, 'commune', 133, '07120202', 'SANDIARA'),
(1467, 4, 'commune', 133, '07120203', 'SESSENE'),
(1468, 4, 'commune', 134, '07120301', 'MALICOUNDA'),
(1469, 4, 'commune', 134, '07120302', 'DIASS'),
(1470, 4, 'commune', 134, '07120303', 'SINDIA'),
(1471, 4, 'commune', 135, '07210100', 'COM. KHOMBOLE'),
(1472, 4, 'commune', 136, '07210200', 'COM. POUT'),
(1473, 4, 'commune', 137, '07210300', 'COM. CAYAR'),
(1474, 4, 'commune', 138, '07220101', 'NOTTO'),
(1475, 4, 'commune', 138, '07220102', 'TASSETTE'),
(1476, 4, 'commune', 139, '07220201', 'N\'DIEYENE SIRAKH'),
(1477, 4, 'commune', 139, '07220202', 'N\'GOUNDIANE'),
(1478, 4, 'commune', 139, '07220203', 'THIENABA'),
(1479, 4, 'commune', 139, '07220204', 'TOUBA TOUL'),
(1480, 4, 'commune', 140, '07220301', 'DIENDER GUEDJI'),
(1481, 4, 'commune', 140, '07220302', 'FANDENE'),
(1482, 4, 'commune', 140, '07220303', 'KEUR MOUSSA'),
(1483, 4, 'commune', 141, '07230111', 'THIES NORD'),
(1484, 4, 'commune', 141, '07230121', 'THIES EST'),
(1485, 4, 'commune', 141, '07230122', 'THIES OUEST'),
(1486, 4, 'commune', 142, '07310100', 'COM. MEKHE'),
(1487, 4, 'commune', 143, '07310200', 'COM. TIVAOUANE'),
(1488, 4, 'commune', 144, '07310300', 'COM. M\'BORO'),
(1489, 4, 'commune', 145, '07320101', 'MEOUANE'),
(1490, 4, 'commune', 145, '07320102', 'TAIBA N\'DIAYE'),
(1491, 4, 'commune', 145, '07320103', 'DAROU KHOUDOSS'),
(1492, 4, 'commune', 146, '07320201', 'KOUL'),
(1493, 4, 'commune', 146, '07320202', 'MERINA DAKHAR'),
(1494, 4, 'commune', 146, '07320203', 'PEKESSE'),
(1495, 4, 'commune', 147, '07320301', 'M\'BAYENE'),
(1496, 4, 'commune', 147, '07320302', 'N\'GANDIOUF'),
(1497, 4, 'commune', 147, '07320303', 'NIAKHENE'),
(1498, 4, 'commune', 147, '07320304', 'THILMAKHA'),
(1499, 4, 'commune', 148, '07320401', 'CHERIF LÃ'),
(1500, 4, 'commune', 148, '07320402', 'MONT- ROLLAND'),
(1501, 4, 'commune', 148, '07320403', 'NOTTO GOUYE DIAMA'),
(1502, 4, 'commune', 148, '07320404', 'PIRE GOUREYE'),
(1503, 4, 'commune', 148, '07320405', 'PAMBAL'),
(1504, 4, 'commune', 149, '08110100', 'COM. KEBEMER'),
(1505, 4, 'commune', 150, '08110200', 'COM. GUEOUL'),
(1506, 4, 'commune', 151, '08120101', 'DAROU MARNANE'),
(1507, 4, 'commune', 151, '08120102', 'DAROU MOUSTY'),
(1508, 4, 'commune', 151, '08120103', 'MBADIANE'),
(1509, 4, 'commune', 151, '08120104', 'NDOYENE'),
(1510, 4, 'commune', 151, '08120105', 'SAM YABAL'),
(1511, 4, 'commune', 151, '08120106', 'TOUBA MERINA'),
(1512, 4, 'commune', 151, '08120107', 'MBACKE CADIOR'),
(1513, 4, 'commune', 152, '08120201', 'BADEGNE OUOLOF'),
(1514, 4, 'commune', 152, '08120202', 'DIOKOUL DIAWRIGNE'),
(1515, 4, 'commune', 152, '08120203', 'KAB GAYE'),
(1516, 4, 'commune', 152, '08120204', 'NDANDE'),
(1517, 4, 'commune', 152, '08120205', 'THIEPPE'),
(1518, 4, 'commune', 153, '08120301', 'KANENE NDIOB'),
(1519, 4, 'commune', 153, '08120302', 'LORO'),
(1520, 4, 'commune', 153, '08120303', 'SAGATTA GUETH'),
(1521, 4, 'commune', 153, '08120304', 'THIOLOM FALL'),
(1522, 4, 'commune', 153, '08120305', 'NGOURANE OUOLOF'),
(1523, 4, 'commune', 154, '08210100', 'COM. LINGUERE'),
(1524, 4, 'commune', 155, '08210200', 'COM. DAHRA'),
(1525, 4, 'commune', 156, '08210300', 'COM. MBEULEUKHE'),
(1526, 4, 'commune', 157, '08220101', 'BARKEDJI'),
(1527, 4, 'commune', 157, '08220102', 'GASSANE'),
(1528, 4, 'commune', 157, '08220103', 'THIARGNY'),
(1529, 4, 'commune', 157, '08220104', 'THIEL'),
(1530, 4, 'commune', 158, '08220201', 'DODJI'),
(1531, 4, 'commune', 158, '08220202', 'LABGAR'),
(1532, 4, 'commune', 158, '08220203', 'OUARKHOH'),
(1533, 4, 'commune', 159, '08220301', 'KAMB'),
(1534, 4, 'commune', 159, '08220302', 'MBOULA'),
(1535, 4, 'commune', 159, '08220303', 'TESSEKRE FORAGE'),
(1536, 4, 'commune', 159, '08220304', 'YANG YANG'),
(1537, 4, 'commune', 160, '08220401', 'BOULAL'),
(1538, 4, 'commune', 160, '08220402', 'DEALI'),
(1539, 4, 'commune', 160, '08220403', 'SAGATTA DJOLOF'),
(1540, 4, 'commune', 160, '08220404', 'THIAMENE DJOLOF'),
(1541, 4, 'commune', 160, '08220405', 'AFFE DJOLOFF'),
(1542, 4, 'commune', 161, '08310100', 'COM. LOUGA'),
(1543, 4, 'commune', 162, '08310200', 'COM. NDIAGNE'),
(1544, 4, 'commune', 163, '08320101', 'COKI'),
(1545, 4, 'commune', 163, '08320102', 'PETE OUARACK'),
(1546, 4, 'commune', 163, '08320103', 'THIAMENE CAYOR'),
(1547, 4, 'commune', 163, '08320104', 'GUET ARDO'),
(1548, 4, 'commune', 164, '08320201', 'GANDE'),
(1549, 4, 'commune', 164, '08320202', 'K.MOMAR SARR'),
(1550, 4, 'commune', 164, '08320203', 'NGUER MALAL'),
(1551, 4, 'commune', 164, '08320204', 'SYER'),
(1552, 4, 'commune', 165, '08320301', 'KELLE GUEYE'),
(1553, 4, 'commune', 165, '08320302', 'MBEDIENE'),
(1554, 4, 'commune', 165, '08320303', 'NGUIDILE'),
(1555, 4, 'commune', 165, '08320304', 'NIOMRE'),
(1556, 4, 'commune', 166, '08320401', 'LEONA'),
(1557, 4, 'commune', 166, '08320402', 'NGUEUNE SARR'),
(1558, 4, 'commune', 166, '08320403', 'SAKAL'),
(1559, 4, 'commune', 167, '09110100', 'COM. FATICK'),
(1560, 4, 'commune', 168, '09110200', 'COM. DIOFIOR'),
(1561, 4, 'commune', 169, '09110300', 'COM. DIAKHAO'),
(1562, 4, 'commune', 170, '09120101', 'DIAOULE'),
(1563, 4, 'commune', 170, '09120102', 'MBELACADIAO'),
(1564, 4, 'commune', 170, '09120103', 'NDIOB'),
(1565, 4, 'commune', 170, '09120104', 'THIARE  NDIALGUI'),
(1566, 4, 'commune', 171, '09120201', 'FIMELA'),
(1567, 4, 'commune', 171, '09120202', 'LOUL-SESSENE'),
(1568, 4, 'commune', 171, '09120203', 'PALMARIN FACAO'),
(1569, 4, 'commune', 171, '09120204', 'DJILASSE'),
(1570, 4, 'commune', 172, '09120301', 'NGAYOKHEME'),
(1571, 4, 'commune', 172, '09120302', 'NIAKHAR'),
(1572, 4, 'commune', 172, '09120303', 'PATAR'),
(1573, 4, 'commune', 173, '09120401', 'DIARERE'),
(1574, 4, 'commune', 173, '09120402', 'DIOUROUP'),
(1575, 4, 'commune', 173, '09120403', 'TATTAGUINE'),
(1576, 4, 'commune', 174, '09210100', 'COM. FOUNDIOUGNE'),
(1577, 4, 'commune', 175, '09210200', 'COM. SOKONE'),
(1578, 4, 'commune', 176, '09210300', 'COM. PASSY'),
(1579, 4, 'commune', 177, '09210400', 'COM. KARANG POSTE'),
(1580, 4, 'commune', 178, '09210500', 'COM. SOUM'),
(1581, 4, 'commune', 179, '09220101', 'DJILOR'),
(1582, 4, 'commune', 179, '09220102', 'DIOSSONG'),
(1583, 4, 'commune', 179, '09220103', 'DIAGANE BARKA'),
(1584, 4, 'commune', 179, '09220104', 'MBAM'),
(1585, 4, 'commune', 179, '09220105', 'NIASSENE'),
(1586, 4, 'commune', 180, '09220201', 'BASSOUL'),
(1587, 4, 'commune', 180, '09220202', 'DIONEWAR'),
(1588, 4, 'commune', 180, '09220203', 'DJIRNDA'),
(1589, 4, 'commune', 181, '09220301', 'KEUR S.DIANE'),
(1590, 4, 'commune', 181, '09220302', 'KEUR  SAMBA GUEYE'),
(1591, 4, 'commune', 181, '09220303', 'NIORO ALASSANE TALL'),
(1592, 4, 'commune', 181, '09220304', 'TOUBACOUTA'),
(1593, 4, 'commune', 182, '09310100', 'COM. GOSSAS'),
(1594, 4, 'commune', 183, '09320101', 'COLOBANE'),
(1595, 4, 'commune', 183, '09320102', 'MBAR'),
(1596, 4, 'commune', 184, '09320201', 'NDIENE LAGANE'),
(1597, 4, 'commune', 184, '09320202', 'OUADIOUR'),
(1598, 4, 'commune', 184, '09320203', 'PATAR LIA'),
(1599, 4, 'commune', 185, '10110100', 'COM. KOLDA'),
(1600, 4, 'commune', 186, '10110200', 'COM. DABO'),
(1601, 4, 'commune', 187, '10110300', 'COM. SALIKEGNE'),
(1602, 4, 'commune', 188, '10110400', 'COM. SARE YOBA DIEGA'),
(1603, 4, 'commune', 189, '10120101', 'DIOULACOLON'),
(1604, 4, 'commune', 189, '10120102', 'MEDINA  EL HADJI'),
(1605, 4, 'commune', 189, '10120103', 'TANKANTO ESCALE'),
(1606, 4, 'commune', 189, '10120104', 'GUIRO YERO BOCAR'),
(1607, 4, 'commune', 190, '10120201', 'BAGADADJI'),
(1608, 4, 'commune', 190, '10120202', 'COUMBACARA'),
(1609, 4, 'commune', 190, '10120203', 'MAMPATIM'),
(1610, 4, 'commune', 190, '10120204', 'DIALAMBERE'),
(1611, 4, 'commune', 190, '10120205', 'MEDINA CHERIF'),
(1612, 4, 'commune', 191, '10120301', 'SARE BIDJI'),
(1613, 4, 'commune', 191, '10120302', 'THIETTY'),
(1614, 4, 'commune', 192, '10210100', 'COM. VELINGARA'),
(1615, 4, 'commune', 193, '10210200', 'COM. DIAOUBE- KABENDOU'),
(1616, 4, 'commune', 194, '10210300', 'COM. KOUNKANE'),
(1617, 4, 'commune', 195, '10220101', 'BONCONTO'),
(1618, 4, 'commune', 195, '10220102', 'LINKERING'),
(1619, 4, 'commune', 195, '10220103', 'MEDINA GOUNASS'),
(1620, 4, 'commune', 195, '10220104', 'SINTHIANG  KOUNDARA'),
(1621, 4, 'commune', 196, '10220201', 'OUASSADOU'),
(1622, 4, 'commune', 196, '10220202', 'PAROUMBA'),
(1623, 4, 'commune', 196, '10220203', 'PAKOUR'),
(1624, 4, 'commune', 197, '10220301', 'KANDIA'),
(1625, 4, 'commune', 197, '10220302', 'SARE COLY SALLE'),
(1626, 4, 'commune', 197, '10220303', 'NEMATABA'),
(1627, 4, 'commune', 197, '10220304', 'KANDIAYE'),
(1628, 4, 'commune', 198, '10310100', 'COM. MEDINA YORO FOULAH'),
(1629, 4, 'commune', 199, '10310200', 'COM. PATA'),
(1630, 4, 'commune', 200, '10320101', 'FAFACOUROU'),
(1631, 4, 'commune', 200, '10320102', 'BADION'),
(1632, 4, 'commune', 201, '10320201', 'NDORNA'),
(1633, 4, 'commune', 201, '10320202', 'BIGNARABE'),
(1634, 4, 'commune', 201, '10320203', 'BOUROUCO'),
(1635, 4, 'commune', 201, '10320204', 'KOULINTO'),
(1636, 4, 'commune', 202, '10320301', 'DINGUIRAYE'),
(1637, 4, 'commune', 202, '10320302', 'KEREWANE'),
(1638, 4, 'commune', 202, '10320303', 'NIAMING'),
(1639, 4, 'commune', 203, '11110100', 'COM .MATAM'),
(1640, 4, 'commune', 204, '11110200', 'COM. OUROSSOGUI'),
(1641, 4, 'commune', 205, '11110300', 'COM. THILOGNE'),
(1642, 4, 'commune', 206, '11110400', 'COM. NGUIDILOGNE'),
(1643, 4, 'commune', 207, '11120101', 'AGNAM-CIVOL'),
(1644, 4, 'commune', 207, '11120102', 'OREFONDE'),
(1645, 4, 'commune', 207, '11120103', 'DABIA'),
(1646, 4, 'commune', 208, '11120201', 'BOKIDIAWE'),
(1647, 4, 'commune', 208, '11120202', 'NABADJI-CIVOL'),
(1648, 4, 'commune', 208, '11120203', 'OGO'),
(1649, 4, 'commune', 209, '11210100', 'COM. KANEL'),
(1650, 4, 'commune', 210, '11210200', 'COM. SEMME'),
(1651, 4, 'commune', 211, '11210300', 'COM. WAOUNDE'),
(1652, 4, 'commune', 212, '11210400', 'COM. DEMBANCANE'),
(1653, 4, 'commune', 213, '11210500', 'COM. HAMADY OUNARE'),
(1654, 4, 'commune', 214, '11210600', 'COM. SINTHIOU BAMANBE-BANADJI'),
(1655, 4, 'commune', 215, '11210700', 'COM. ODOBERE'),
(1656, 4, 'commune', 216, '11220101', 'BOKILADJI'),
(1657, 4, 'commune', 216, '11220102', 'ORKADIERE'),
(1658, 4, 'commune', 216, '11220103', 'AOURE'),
(1659, 4, 'commune', 217, '11220201', 'NDENDORY'),
(1660, 4, 'commune', 217, '11220202', 'OURO SIDY'),
(1661, 4, 'commune', 218, '11310100', 'COM. RANEROU'),
(1662, 4, 'commune', 219, '11320101', 'LOUGRE-THIOLY'),
(1663, 4, 'commune', 219, '11320102', 'VELINGARA'),
(1664, 4, 'commune', 219, '11320103', 'OUDALAYE'),
(1665, 4, 'commune', 220, '12110100', 'COM. KAFFRINE'),
(1666, 4, 'commune', 221, '12110200', 'COM. N\'GANDA'),
(1667, 4, 'commune', 222, '12120101', 'BOULEL'),
(1668, 4, 'commune', 222, '12120102', 'GNIBY'),
(1669, 4, 'commune', 222, '12120103', 'KAHI'),
(1670, 4, 'commune', 223, '12120201', 'DIOKOUL M\'BELBOUCK'),
(1671, 4, 'commune', 223, '12120202', 'KATHIOTE'),
(1672, 4, 'commune', 223, '12120203', 'MEDINATOUL SALAM 2'),
(1673, 4, 'commune', 223, '12120204', 'DIAMAGADIO'),
(1674, 4, 'commune', 224, '12210100', 'COM .BIRKELANE'),
(1675, 4, 'commune', 225, '12220101', 'KEUR M\'BOUKI'),
(1676, 4, 'commune', 225, '12220102', 'TOUBA M\'BELLA'),
(1677, 4, 'commune', 225, '12220103', 'DIAMAL'),
(1678, 4, 'commune', 226, '12220201', 'MABO'),
(1679, 4, 'commune', 226, '12220202', 'N\'DIOGNICK'),
(1680, 4, 'commune', 226, '12220203', 'MBEULEUP'),
(1681, 4, 'commune', 226, '12220204', 'SEGRE GATTA'),
(1682, 4, 'commune', 227, '12310100', 'COM. KOUNGHEUL'),
(1683, 4, 'commune', 228, '12320101', 'SALY ESCALE'),
(1684, 4, 'commune', 228, '12320102', 'FASS THIEKENE'),
(1685, 4, 'commune', 228, '12320103', 'IDA MOURIDE'),
(1686, 4, 'commune', 229, '12320201', 'LOUR ESCALE'),
(1687, 4, 'commune', 229, '12320202', 'RIBOT ESCALE'),
(1688, 4, 'commune', 230, '12320301', 'GAINTHE PATHE'),
(1689, 4, 'commune', 230, '12320302', 'MAKA YOP'),
(1690, 4, 'commune', 230, '12320303', 'MISSIRAH WADENE'),
(1691, 4, 'commune', 231, '12410100', 'COM. MALEM HODDAR'),
(1692, 4, 'commune', 232, '12420101', 'DAROU MINAM II'),
(1693, 4, 'commune', 232, '12420102', 'N\'DIOUM  N\'GAINTH'),
(1694, 4, 'commune', 232, '12420103', 'KHELCOM'),
(1695, 4, 'commune', 232, '12420104', 'NDIOBENE SAMBA LAMO'),
(1696, 4, 'commune', 233, '12420201', 'DIANKE SOUF'),
(1697, 4, 'commune', 233, '12420202', 'SAGNA'),
(1698, 4, 'commune', 234, '13110100', 'COM .KEDOUGOU'),
(1699, 4, 'commune', 235, '13120101', 'BANDAFASSI'),
(1700, 4, 'commune', 235, '13120102', 'TOMBORONKOTO'),
(1701, 4, 'commune', 235, '13120103', 'DINDIFELO'),
(1702, 4, 'commune', 235, '13120104', 'NINEFECHA'),
(1703, 4, 'commune', 236, '13120201', 'DIMBOLI'),
(1704, 4, 'commune', 236, '13120202', 'FONGOLEMBI'),
(1705, 4, 'commune', 237, '13210100', 'COM. SALEMATA'),
(1706, 4, 'commune', 238, '13220101', 'DAKATELI'),
(1707, 4, 'commune', 238, '13220102', 'KEVOYE'),
(1708, 4, 'commune', 239, '13220201', 'DAR SALAM'),
(1709, 4, 'commune', 239, '13220202', 'ETHIOLO'),
(1710, 4, 'commune', 239, '13220203', 'OUBADJI'),
(1711, 4, 'commune', 240, '13310100', 'COM. SARAYA'),
(1712, 4, 'commune', 241, '13320101', 'MEDINA BAFFE'),
(1713, 4, 'commune', 241, '13320102', 'BEMBOU'),
(1714, 4, 'commune', 242, '13320201', 'KHOSSANTO'),
(1715, 4, 'commune', 242, '13320202', 'MISSIRAH SIRIMANA'),
(1716, 4, 'commune', 242, '13320203', 'SABODALA'),
(1717, 4, 'commune', 243, '14110100', 'COM. SEDHIOU'),
(1718, 4, 'commune', 244, '14110200', 'COM. MARSASSOUM'),
(1719, 4, 'commune', 245, '14110300', 'COM. DIANAH MALARY'),
(1720, 4, 'commune', 246, '14120101', 'DIENDE'),
(1721, 4, 'commune', 246, '14120102', 'SAKAR'),
(1722, 4, 'commune', 246, '14120103', 'DIANNAH BA'),
(1723, 4, 'commune', 246, '14120104', 'KOUSSY'),
(1724, 4, 'commune', 246, '14120105', 'OUDOUCAR'),
(1725, 4, 'commune', 246, '14120106', 'SAMA KANTA PEULH'),
(1726, 4, 'commune', 247, '14120201', 'BENET- BIJINI'),
(1727, 4, 'commune', 247, '14120202', 'SANSAMBA'),
(1728, 4, 'commune', 247, '14120203', 'DJIBABOUYA'),
(1729, 4, 'commune', 248, '14120301', 'BAMBALI'),
(1730, 4, 'commune', 248, '14120302', 'DJIREDJI'),
(1731, 4, 'commune', 249, '14210100', 'COM. BOUNKILING'),
(1732, 4, 'commune', 250, '14210200', 'COM. MADINA WANDIFA'),
(1733, 4, 'commune', 251, '14210300', 'COM. NDIAMACOUTA'),
(1734, 4, 'commune', 252, '14220101', 'BOGHAL'),
(1735, 4, 'commune', 252, '14220102', 'TANKON'),
(1736, 4, 'commune', 252, '14220103', 'DJINANY'),
(1737, 4, 'commune', 252, '14220104', 'NDIAMALATHIEL'),
(1738, 4, 'commune', 253, '14220201', 'BONA'),
(1739, 4, 'commune', 253, '14220202', 'DIACOUNDA'),
(1740, 4, 'commune', 253, '14220203', 'INOR'),
(1741, 4, 'commune', 253, '14220204', 'KANDION MANGANA'),
(1742, 4, 'commune', 254, '14220301', 'DIAROUME'),
(1743, 4, 'commune', 254, '14220302', 'DIAMBATY'),
(1744, 4, 'commune', 254, '14220303', 'FAOUNE'),
(1745, 4, 'commune', 255, '14310100', 'COM. GOUDOMP'),
(1746, 4, 'commune', 256, '14310200', 'COM. DIATTACOUNDA'),
(1747, 4, 'commune', 257, '14310300', 'COM. SAMINE'),
(1748, 4, 'commune', 258, '14310400', 'COM. TANAFF'),
(1749, 4, 'commune', 259, '14320101', 'DJIBANAR'),
(1750, 4, 'commune', 259, '14320102', 'KAOUR'),
(1751, 4, 'commune', 259, '14320103', 'MANGAROUNGOU SANTO'),
(1752, 4, 'commune', 259, '14320104', 'SIMBADI BALANTE'),
(1753, 4, 'commune', 259, '14320105', 'YARANG BALANTE'),
(1754, 4, 'commune', 260, '14320201', 'KARANTABA'),
(1755, 4, 'commune', 260, '14320202', 'KOLIBANTANG'),
(1756, 4, 'commune', 261, '14320301', 'NIAGHA'),
(1757, 4, 'commune', 261, '14320302', 'SIMBANDI BRASSOU'),
(1758, 4, 'commune', 261, '14320303', 'BAGHERE'),
(1759, 4, 'commune', 261, '14320304', 'DIOUBOUDOU'),
(1760, 4, 'commune', 262, '01130111', 'GOREE'),
(1761, 4, 'commune', 262, '01130112', 'PLATEAU'),
(1762, 4, 'commune', 262, '01130113', 'MEDINA'),
(1763, 4, 'commune', 262, '01130114', 'COLOBANE/FASS/GUEULE TAPEE'),
(1764, 4, 'commune', 262, '01130115', 'FANN/POINT E/ AMITIE'),
(1765, 4, 'commune', 262, '01130121', 'GRAND DAKAR'),
(1766, 4, 'commune', 262, '01130122', 'BISCUITERIE'),
(1767, 4, 'commune', 262, '01130123', 'HLM'),
(1768, 4, 'commune', 262, '01130124', 'HANN/ BEL AIR'),
(1769, 4, 'commune', 262, '01130125', 'SICAP LIBERTE'),
(1770, 4, 'commune', 262, '01130126', 'DIEUPPEUL DERKLE'),
(1771, 4, 'commune', 262, '01130131', 'OUAKAM'),
(1772, 4, 'commune', 262, '01130132', 'N\'GOR'),
(1773, 4, 'commune', 262, '01130133', 'YOFF'),
(1774, 4, 'commune', 262, '01130134', 'CA.MERMOZ/ SACRE -COEUR'),
(1775, 4, 'commune', 262, '01130141', 'GRAND YOFF'),
(1776, 4, 'commune', 262, '01130142', 'PATTE D\'OIE'),
(1777, 4, 'commune', 262, '01130143', 'PARCELLES ASSAINIES'),
(1778, 4, 'commune', 262, '01130144', 'CAMBERENE'),
(1779, 4, 'commune', 263, '01230111', 'YEUMBEUL NORD'),
(1780, 4, 'commune', 263, '01230112', 'YEUMBEUL SUD'),
(1781, 4, 'commune', 263, '01230113', 'MALIKA'),
(1782, 4, 'commune', 263, '01230114', 'KEUR MASSAR'),
(1783, 4, 'commune', 263, '01230121', 'PIKINE OUEST'),
(1784, 4, 'commune', 263, '01230122', 'PIKINE EST'),
(1785, 4, 'commune', 263, '01230123', 'PIKINE SUD'),
(1786, 4, 'commune', 263, '01230124', 'DALIFORD'),
(1787, 4, 'commune', 263, '01230125', 'DJIDAH THIAROYE KAO'),
(1788, 4, 'commune', 263, '01230126', 'GUINAW RAIL NORD'),
(1789, 4, 'commune', 263, '01230127', 'GUINAW RAIL SUD'),
(1790, 4, 'commune', 263, '01230131', 'THIAROYE /MER'),
(1791, 4, 'commune', 263, '01230132', 'DIACK SAO'),
(1792, 4, 'commune', 263, '01230133', 'DIAMAGUENE/SICAP M\'BAO'),
(1793, 4, 'commune', 263, '01230134', 'THIAROYE GARE'),
(1794, 4, 'commune', 263, '01230135', 'M\'BAO'),
(1795, 4, 'commune', 264, '01310100', 'COM. BARGNY'),
(1796, 4, 'commune', 265, '01310200', 'COM. SEBIKOTANE'),
(1797, 4, 'commune', 266, '01310300', 'COM. DIAMNIADIO'),
(1798, 4, 'commune', 267, '01310400', 'COM. JAXAAY PARCELLE NIAKOUL RAP'),
(1799, 4, 'commune', 268, '01310500', 'COM. SANGALKAM'),
(1800, 4, 'commune', 269, '01310600', 'COM. SENDOU'),
(1801, 4, 'commune', 270, '01320101', 'YENE'),
(1802, 4, 'commune', 270, '01320102', 'BAMBYLOR'),
(1803, 4, 'commune', 270, '01320103', 'TIVAOUANE PEULH-NIAGHA'),
(1804, 4, 'commune', 271, '01330111', 'RUFISQUE CENTRE (NORD)'),
(1805, 4, 'commune', 271, '01330112', 'RUFISQUE  EST'),
(1806, 4, 'commune', 271, '01330113', 'RUFISQUE OUEST'),
(1807, 4, 'commune', 272, '01430111', 'GOLF SUD'),
(1808, 4, 'commune', 272, '01430112', 'SAM  NOTAIRE'),
(1809, 4, 'commune', 272, '01430113', 'N\'DIAREME LIMAMOULAYE'),
(1810, 4, 'commune', 272, '01430114', 'WAKHINANE NIMZATT'),
(1811, 4, 'commune', 272, '01430115', 'MEDINA GOUNASS'),
(1812, 4, 'commune', 273, '02110100', 'COM. BIGNONA'),
(1813, 4, 'commune', 274, '02110200', 'COM. THIONCK-ESSYL'),
(1814, 4, 'commune', 275, '02110300', 'COM. DIOULOULOU'),
(1815, 4, 'commune', 276, '02120101', 'DJIBIDIONE'),
(1816, 4, 'commune', 276, '02120102', 'OULAMPANE'),
(1817, 4, 'commune', 276, '02120103', 'SINDIAN'),
(1818, 4, 'commune', 276, '02120104', 'SUELLE'),
(1819, 4, 'commune', 277, '02120201', 'BALINGORE'),
(1820, 4, 'commune', 277, '02120202', 'DIEGOUNE'),
(1821, 4, 'commune', 277, '02120203', 'KARTHIACK'),
(1822, 4, 'commune', 277, '02120204', 'MANGAGOULACK'),
(1823, 4, 'commune', 277, '02120205', 'MLOMP'),
(1824, 4, 'commune', 278, '02120301', 'COUBALAN'),
(1825, 4, 'commune', 278, '02120302', 'NIAMONE'),
(1826, 4, 'commune', 278, '02120303', 'OUONCK'),
(1827, 4, 'commune', 278, '02120304', 'TENGHORY'),
(1828, 4, 'commune', 279, '02120401', 'DJINAKI'),
(1829, 4, 'commune', 279, '02120402', 'KAFOUNTINE'),
(1830, 4, 'commune', 279, '02120403', 'KATABA I'),
(1831, 4, 'commune', 280, '02210100', 'COM. OUSSOUYE'),
(1832, 4, 'commune', 281, '02220101', 'DJEMBERING'),
(1833, 4, 'commune', 281, '02220102', 'SANTHIABA MANJACQUE'),
(1834, 4, 'commune', 282, '02220201', 'MLOMP'),
(1835, 4, 'commune', 282, '02220202', 'OUKOUT'),
(1836, 4, 'commune', 283, '02310100', 'COM. ZIGUINCHOR'),
(1837, 4, 'commune', 284, '02320101', 'ADEANE'),
(1838, 4, 'commune', 284, '02320102', 'BOUTOUPA CAMAR'),
(1839, 4, 'commune', 284, '02320103', 'NIAGUIS'),
(1840, 4, 'commune', 285, '02320201', 'ENAMPORE'),
(1841, 4, 'commune', 285, '02320202', 'NYASSIA'),
(1842, 4, 'commune', 286, '03110100', 'COM. BAMBEY'),
(1843, 4, 'commune', 287, '03120101', 'BABA GARAGE'),
(1844, 4, 'commune', 287, '03120102', 'DINGUIRAYE'),
(1845, 4, 'commune', 287, '03120103', 'K. SAMBA KANE'),
(1846, 4, 'commune', 288, '03120201', 'GAWANE'),
(1847, 4, 'commune', 288, '03120202', 'LAMBAYE'),
(1848, 4, 'commune', 288, '03120203', 'N\'GOGOM'),
(1849, 4, 'commune', 288, '03120204', 'REFANE'),
(1850, 4, 'commune', 289, '03120301', 'DANGALMA'),
(1851, 4, 'commune', 289, '03120302', 'N\'DONDOL'),
(1852, 4, 'commune', 289, '03120303', 'N\'GOYE'),
(1853, 4, 'commune', 289, '03120304', 'THIAKAR'),
(1854, 4, 'commune', 290, '03210100', 'COM. DIOURBEL'),
(1855, 4, 'commune', 291, '03220101', 'DANKH  SENE'),
(1856, 4, 'commune', 291, '03220102', 'GADE ESCALE'),
(1857, 4, 'commune', 291, '03220103', 'N\'DINDY'),
(1858, 4, 'commune', 291, '03220104', 'KEUR N\'GALGOU'),
(1859, 4, 'commune', 291, '03220105', 'TAIBA MOUTOUPHA'),
(1860, 4, 'commune', 291, '03220106', 'TOUBA LAPPE'),
(1861, 4, 'commune', 292, '03220201', 'N\'DOULO'),
(1862, 4, 'commune', 292, '03220202', 'N\'GOHE'),
(1863, 4, 'commune', 292, '03220203', 'PATAR'),
(1864, 4, 'commune', 292, '03220204', 'TOCKY GARE'),
(1865, 4, 'commune', 292, '03220205', 'TOURE M\'BONDE'),
(1866, 4, 'commune', 293, '03310100', 'COM. M\'BACKE'),
(1867, 4, 'commune', 294, '03320101', 'DENDEYE GOUYE GUI'),
(1868, 4, 'commune', 294, '03320102', 'DAROU SALAM  TYP'),
(1869, 4, 'commune', 294, '03320103', 'KAEL'),
(1870, 4, 'commune', 294, '03320104', 'MADINA'),
(1871, 4, 'commune', 294, '03320105', 'N\'DIOUMANE  T. THIEKENE'),
(1872, 4, 'commune', 294, '03320106', 'TOUBA  M\'BOUL'),
(1873, 4, 'commune', 294, '03320107', 'DAROU NAHIM'),
(1874, 4, 'commune', 294, '03320108', 'TAIBA TIECKENE'),
(1875, 4, 'commune', 295, '03320201', 'DALLA N\'GABOU'),
(1876, 4, 'commune', 295, '03320202', 'MISSIRAH'),
(1877, 4, 'commune', 295, '03320203', 'N\'GHAYE'),
(1878, 4, 'commune', 295, '03320204', 'TOUBA FALL'),
(1879, 4, 'commune', 295, '03320205', 'TOUBA MOSQUEE'),
(1880, 4, 'commune', 296, '03320301', 'SADIO'),
(1881, 4, 'commune', 296, '03320302', 'TAÃF'),
(1882, 4, 'commune', 297, '04110100', 'COM. DAGANA'),
(1883, 4, 'commune', 298, '04110200', 'COM. RICHARD-TOLL'),
(1884, 4, 'commune', 299, '04110300', 'COM. ROSSO-SENEGAL'),
(1885, 4, 'commune', 300, '04110400', 'COM. ROSS-BETHIO'),
(1886, 4, 'commune', 301, '04110500', 'COM. GAE'),
(1887, 4, 'commune', 302, '04110600', 'COM. NDOMBO SANDJIRY'),
(1888, 4, 'commune', 303, '04120101', 'MBANE'),
(1889, 4, 'commune', 303, '04120102', 'BOKHOL'),
(1890, 4, 'commune', 304, '04120201', 'DIAMA'),
(1891, 4, 'commune', 304, '04120202', 'NGNITH'),
(1892, 4, 'commune', 304, '04120203', 'RONKH'),
(1893, 4, 'commune', 305, '04210100', 'COM. PODOR'),
(1894, 4, 'commune', 306, '04210200', 'COM. NDIOUM'),
(1895, 4, 'commune', 307, '04210300', 'COM. GOLLERE'),
(1896, 4, 'commune', 308, '04210400', 'COM. NDIANDANE'),
(1897, 4, 'commune', 309, '04210500', 'COM. BODE LAO'),
(1898, 4, 'commune', 310, '04210600', 'COM. DEMETTE'),
(1899, 4, 'commune', 311, '04210700', 'COM. GALOYA TOUCOULEUR'),
(1900, 4, 'commune', 312, '04210800', 'COM. GUEDE CHANTIER'),
(1901, 4, 'commune', 313, '04210900', 'COM. MBOUMBA'),
(1902, 4, 'commune', 314, '04211000', 'COM. AERE LAO'),
(1903, 4, 'commune', 315, '04211100', 'COM. PETE'),
(1904, 4, 'commune', 316, '04211200', 'COM. WALALDE'),
(1905, 4, 'commune', 79, '04220101', 'MEDINA NDIATHBE');

-- --------------------------------------------------------

--
-- Structure de la table `sys_almustakhdam`
--

CREATE TABLE `sys_almustakhdam` (
  `id` int(11) NOT NULL,
  `code_agent` varchar(8) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `id_type_profil` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `mot_de_passe` varchar(100) NOT NULL DEFAULT 'Paciconj@2002',
  `commentaires` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `etat` enum('actif','suspendu','blocke') NOT NULL DEFAULT 'suspendu',
  `id_site` tinyint(4) NOT NULL,
  `id_op_saisie` smallint(20) DEFAULT NULL,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_last_modif` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `sys_almustakhdam`
--

INSERT INTO `sys_almustakhdam` (`id`, `code_agent`, `prenom`, `nom`, `id_type_profil`, `email`, `mot_de_passe`, `commentaires`, `etat`, `id_site`, `id_op_saisie`, `date_creation`, `date_last_modif`) VALUES
(2, 'BD892473', 'Demba', 'Diack', 16, 'bayedemba@gmail.com', 'passer', 'Sqs', 'actif', 3, NULL, '2023-07-24 20:20:06', '2021-04-20 15:59:37'),
(9, 'AG982034', 'Sophie', 'Diop', 23, 'test_v@gmail.com', 'passer', 'votant', 'actif', 1, 2, '2022-09-09 18:54:50', '2022-03-08 10:32:03');

-- --------------------------------------------------------

--
-- Structure de la table `sys_menu`
--

CREATE TABLE `sys_menu` (
  `id` int(11) NOT NULL,
  `code` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `libelle` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `etat` enum('0','1') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '1',
  `rang` tinyint(4) NOT NULL DEFAULT 99,
  `date_last_modif` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sys_menu`
--

INSERT INTO `sys_menu` (`id`, `code`, `libelle`, `etat`, `rang`, `date_last_modif`) VALUES
(8, 'securite', 'Securité', '1', 10, '2022-03-17 11:33:11'),
(9, 'offres', 'Offres', '1', 8, '2023-06-10 16:19:29'),
(10, 'candidats', 'Candidats', '1', 9, '2023-06-10 16:19:50'),
(18, 'params', 'Paramétrages', '1', 127, '2023-06-10 16:19:59'),
(19, 'candidatures', 'Candidatures', '1', 99, '2023-06-13 14:54:28');

-- --------------------------------------------------------

--
-- Structure de la table `sys_sites`
--

CREATE TABLE `sys_sites` (
  `id` tinyint(4) NOT NULL,
  `libelle` varchar(60) NOT NULL,
  `commentaires` varchar(200) DEFAULT NULL,
  `is_global` enum('0','1') NOT NULL DEFAULT '0',
  `etat` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sys_sites`
--

INSERT INTO `sys_sites` (`id`, `libelle`, `commentaires`, `is_global`, `etat`) VALUES
(1, 'BEE', NULL, '0', '1'),
(2, 'BEC', NULL, '0', '1'),
(3, 'ANSD', 'ANSD général', '0', '1');

-- --------------------------------------------------------

--
-- Structure de la table `sys_sous_menu`
--

CREATE TABLE `sys_sous_menu` (
  `id` smallint(11) NOT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `code` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `libelle` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `etat` enum('0','1') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '1',
  `date_last_modif` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sys_sous_menu`
--

INSERT INTO `sys_sous_menu` (`id`, `id_menu`, `code`, `libelle`, `etat`, `date_last_modif`) VALUES
(13, 8, 'list-users', 'Liste utilisateurs', '1', '2022-03-18 12:57:29'),
(14, 8, 'profils', 'Profils', '1', '2021-04-20 15:46:50'),
(15, 8, 'menus', 'Menus', '1', '2021-04-20 15:47:26'),
(16, 8, 'smenus', 'Sous-menus', '1', '2021-04-20 15:47:26'),
(17, 9, 'liste-offres', 'Liste des offres', '1', '2023-06-10 16:22:33'),
(45, 10, 'candidats', 'Les candidats', '1', '2023-06-13 14:54:02'),
(46, 19, 'candidatures', 'Les candidatures', '1', '2023-06-13 14:55:33'),
(47, 18, 'params', 'Paramétrages', '1', '2023-06-16 18:54:29');

-- --------------------------------------------------------

--
-- Structure de la table `sys_type_action`
--

CREATE TABLE `sys_type_action` (
  `id` smallint(11) NOT NULL,
  `id_type_profil` int(10) UNSIGNED DEFAULT NULL,
  `id_sous_menu` smallint(11) NOT NULL,
  `d_read` enum('0','1') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '1',
  `d_add` enum('0','1') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '1',
  `d_upd` enum('0','1') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '1',
  `d_del` enum('0','1') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '1',
  `date_last_modif` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sys_type_action`
--

INSERT INTO `sys_type_action` (`id`, `id_type_profil`, `id_sous_menu`, `d_read`, `d_add`, `d_upd`, `d_del`, `date_last_modif`) VALUES
(1, 16, 17, '1', '1', '1', '1', '2024-05-07 17:36:18'),
(2, 16, 15, '1', '1', '1', '1', '2024-05-07 17:36:18'),
(3, 16, 16, '1', '1', '1', '1', '2024-05-07 17:36:18'),
(4, 16, 14, '1', '1', '1', '1', '2024-05-07 17:36:18'),
(5, 16, 13, '1', '', '', '', '2024-05-07 17:36:18'),
(6, 16, 46, '1', '1', '1', '1', '2024-05-07 17:36:18'),
(7, 16, 45, '1', '', '', '', '2024-05-07 17:36:18'),
(8, 16, 47, '1', '1', '1', '1', '2024-05-07 17:36:18'),
(10, 2, 46, '1', '1', '1', '1', '2024-05-08 15:28:58'),
(11, 2, 17, '1', '1', '1', '1', '2024-05-08 15:30:31'),
(16, 2, 47, '1', '1', '1', '1', '2024-05-08 17:39:32');

-- --------------------------------------------------------

--
-- Structure de la table `sys_type_profil`
--

CREATE TABLE `sys_type_profil` (
  `id` int(10) UNSIGNED NOT NULL,
  `libelle_type_profil` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `etat` enum('0','1') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '1',
  `id_op_saisie` int(11) NOT NULL,
  `date_creation` date NOT NULL,
  `date_last_modif` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sys_type_profil`
--

INSERT INTO `sys_type_profil` (`id`, `libelle_type_profil`, `etat`, `id_op_saisie`, `date_creation`, `date_last_modif`) VALUES
(2, 'Ecole', '1', 0, '2024-05-08', '2024-05-08 17:49:58'),
(16, 'Super Admin', '1', 0, '0000-00-00', '2021-04-20 13:29:57'),
(23, 'Votant', '1', 2, '0000-00-00', '2022-09-09 18:45:32');

-- --------------------------------------------------------

--
-- Structure de la table `z_connexions`
--

CREATE TABLE `z_connexions` (
  `id` bigint(20) NOT NULL,
  `ip` varchar(16) NOT NULL,
  `name_` varchar(200) DEFAULT NULL,
  `profil_` varchar(50) DEFAULT NULL,
  `id_site` int(11) DEFAULT NULL,
  `navigateur` varchar(255) DEFAULT NULL,
  `sens` enum('in','out') DEFAULT NULL,
  `date_last_modif` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `z_connexions`
--

INSERT INTO `z_connexions` (`id`, `ip`, `name_`, `profil_`, `id_site`, `navigateur`, `sens`, `date_last_modif`) VALUES
(17, '192.168.12.159', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'out', '2022-06-14 09:28:52'),
(18, '192.168.12.159', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'in', '2022-06-14 09:29:06'),
(19, '192.168.12.159', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', 'in', '2022-06-14 10:17:25'),
(20, '192.168.12.159', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-14 16:14:55'),
(21, '192.168.12.159', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-14 17:00:52'),
(22, '192.168.12.159', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'out', '2022-06-14 17:04:29'),
(23, '192.168.12.159', 'ADMIN BEC', 'BEC Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-14 17:04:43'),
(24, '192.168.12.159', 'ADMIN BEC', 'BEC Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'out', '2022-06-14 17:05:08'),
(25, '192.168.12.159', 'SOPHIE DIOP', 'BEE admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-14 17:05:16'),
(26, '192.168.12.159', 'SOPHIE DIOP', 'BEE admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'out', '2022-06-14 17:05:31'),
(27, '192.168.12.159', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-14 17:05:35'),
(28, '192.168.12.159', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-15 09:49:05'),
(29, '192.168.12.159', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'out', '2022-06-15 09:59:02'),
(30, '192.168.12.159', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-15 09:59:59'),
(31, '192.168.12.159', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'out', '2022-06-15 10:00:12'),
(32, '192.168.12.159', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-15 10:00:32'),
(33, '192.168.12.159', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'out', '2022-06-15 10:00:48'),
(34, '192.168.12.159', 'AGENT SAISIE', 'Agent saisie BEC', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-15 10:01:38'),
(35, '192.168.5.35', 'SOPHIE DIOP', 'BEE admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0', 'in', '2022-06-17 08:46:47'),
(36, '192.168.12.131', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-17 09:43:43'),
(37, '192.168.5.35', 'SOPHIE DIOP', 'BEE admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0', 'in', '2022-06-17 09:51:44'),
(38, '192.168.5.35', 'SOPHIE DIOP', 'BEE admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0', 'out', '2022-06-17 09:59:17'),
(39, '192.168.5.35', 'SOPHIE DIOP', 'BEE admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:89.0) Gecko/20100101 Firefox/89.0', 'in', '2022-06-17 09:59:40'),
(40, '192.168.12.131', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-17 10:40:26'),
(41, '192.168.12.131', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'out', '2022-06-17 10:45:09'),
(42, '192.168.12.131', 'SOPHIE DIOP', 'BEE admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-17 10:45:16'),
(43, '192.168.12.156', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-21 10:53:13'),
(44, '192.168.12.156', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-21 14:05:05'),
(45, '192.168.12.156', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'out', '2022-06-21 14:05:27'),
(46, '192.168.12.156', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-21 14:40:04'),
(47, '192.168.12.156', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.124 Safari/537.36 Edg/102.0.1245.44', 'in', '2022-06-21 14:40:36'),
(48, '192.168.12.156', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-21 17:26:41'),
(49, '192.168.12.175', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-22 10:29:35'),
(50, '192.168.12.175', 'AGENT SAISIE', 'Agent saisie BEC', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.124 Safari/537.36 Edg/102.0.1245.44', 'in', '2022-06-22 10:31:26'),
(51, '192.168.12.175', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'out', '2022-06-22 10:33:22'),
(52, '192.168.12.175', 'AGENT SAISIE', 'Agent saisie BEC', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-22 10:33:34'),
(53, '192.168.12.175', 'AGENT SAISIE', 'Agent saisie BEC', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'out', '2022-06-22 10:36:26'),
(54, '192.168.12.175', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-22 10:36:29'),
(55, '192.168.12.175', NULL, NULL, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.124 Safari/537.36 Edg/102.0.1245.44', 'out', '2022-06-22 15:17:23'),
(56, '192.168.12.175', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.124 Safari/537.36 Edg/102.0.1245.44', 'in', '2022-06-22 15:17:32'),
(57, '192.168.12.175', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-22 15:36:05'),
(58, '192.168.12.175', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-22 16:12:00'),
(59, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-23 10:22:45'),
(60, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-23 12:07:24'),
(61, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-23 14:30:28'),
(62, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-23 20:28:47'),
(63, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'out', '2022-06-23 20:29:27'),
(64, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-24 14:27:31'),
(65, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-27 09:26:07'),
(66, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-27 16:33:19'),
(67, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-27 17:42:16'),
(68, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-29 09:41:51'),
(69, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-29 10:54:07'),
(70, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-29 11:52:32'),
(71, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-29 15:34:36'),
(72, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-29 16:35:34'),
(73, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-29 19:21:53'),
(74, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37', 'in', '2022-06-30 09:44:43'),
(75, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-30 10:33:32'),
(76, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-30 11:55:24'),
(77, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.53 Safari/537.36 Edg/103.0.1264.37', 'in', '2022-06-30 12:00:56'),
(78, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'out', '2022-06-30 12:04:13'),
(79, '::1', 'AGENT SAISIE', 'Agent saisie BEC', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-30 12:04:19'),
(80, '::1', 'AGENT SAISIE', 'Agent saisie BEC', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'out', '2022-06-30 12:30:55'),
(81, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-30 12:30:56'),
(82, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-30 13:14:41'),
(83, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'in', '2022-06-30 16:41:13'),
(84, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-01 16:31:19'),
(85, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-04 10:02:40'),
(86, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.66 Safari/537.36 Edg/103.0.1264.44', 'in', '2022-07-04 10:19:58'),
(87, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.66 Safari/537.36 Edg/103.0.1264.44', 'in', '2022-07-04 11:45:49'),
(88, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-04 12:46:58'),
(89, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.66 Safari/537.36 Edg/103.0.1264.44', 'in', '2022-07-04 16:36:35'),
(90, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-05 12:26:56'),
(91, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-06 09:11:27'),
(92, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-06 10:01:26'),
(93, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-06 14:50:31'),
(94, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-06 16:27:03'),
(95, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-06 21:53:16'),
(96, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-07 10:16:39'),
(97, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-07 11:00:20'),
(98, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-13 12:20:19'),
(99, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-13 13:26:05'),
(100, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-14 16:14:20'),
(101, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.49', 'in', '2022-07-15 15:51:11'),
(102, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.49', 'out', '2022-07-15 16:09:16'),
(103, '::1', 'AGENT SAISIE', 'Agent saisie BEC', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.49', 'in', '2022-07-15 16:10:21'),
(104, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-15 16:11:50'),
(105, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-18 15:45:24'),
(106, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-20 09:54:50'),
(107, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-20 10:31:38'),
(108, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-20 11:50:19'),
(109, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-20 12:25:20'),
(110, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'out', '2022-07-20 12:25:57'),
(111, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-20 12:25:58'),
(112, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-21 20:39:52'),
(113, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36 Edg/103.0.1264.71', 'in', '2022-07-25 11:07:54'),
(114, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-25 11:08:30'),
(115, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'out', '2022-07-25 11:09:44'),
(116, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-25 11:32:51'),
(117, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-25 12:50:29'),
(118, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-25 15:55:01'),
(119, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36 Edg/103.0.1264.71', 'in', '2022-07-27 09:45:28'),
(120, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-27 10:06:33'),
(121, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36 Edg/103.0.1264.71', 'in', '2022-07-27 12:02:36'),
(122, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-27 12:34:15'),
(123, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-28 19:46:35'),
(124, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-07-29 17:13:04'),
(125, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-08-02 15:32:42'),
(126, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-08-03 09:54:16'),
(127, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-08-03 11:18:00'),
(128, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-08-03 12:30:55'),
(129, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-08-03 15:47:28'),
(130, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-08-03 16:25:24'),
(131, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-08-04 09:26:47'),
(132, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-08-04 10:15:22'),
(133, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-08-04 10:48:25'),
(134, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-08-05 11:12:24'),
(135, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-08-05 12:13:27'),
(136, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'in', '2022-08-05 14:46:19'),
(137, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-10 11:14:00'),
(138, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-10 11:14:14'),
(139, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-10 12:37:06'),
(140, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.81 Safari/537.36 Edg/104.0.1293.47', 'in', '2022-08-10 12:38:35'),
(141, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-10 15:31:41'),
(142, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-10 16:13:30'),
(143, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.81 Safari/537.36 Edg/104.0.1293.47', 'in', '2022-08-10 16:49:26'),
(144, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-11 09:46:36'),
(145, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-11 12:38:09'),
(146, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-11 16:02:08'),
(147, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.81 Safari/537.36 Edg/104.0.1293.47', 'in', '2022-08-11 16:42:16'),
(148, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.81 Safari/537.36 Edg/104.0.1293.47', 'in', '2022-08-12 09:24:50'),
(149, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-12 09:32:10'),
(150, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-12 16:40:18'),
(151, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-18 12:21:39'),
(152, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-18 13:11:55'),
(153, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-25 10:57:56'),
(154, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-25 11:52:45'),
(155, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36 Edg/104.0.1293.63', 'in', '2022-08-25 11:53:08'),
(156, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-25 13:38:19'),
(157, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-26 09:25:41'),
(158, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'out', '2022-08-26 09:35:00'),
(159, '::1', 'AGENT SAISIE', 'Agent saisie BEC', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-26 09:39:06'),
(160, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-26 10:56:36'),
(161, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'out', '2022-08-26 10:56:40'),
(162, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-26 11:15:06'),
(163, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'out', '2022-08-26 11:15:15'),
(164, '::1', 'AGENT SAISIE', 'Agent saisie BEC', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-26 11:15:19'),
(165, '::1', 'AGENT SAISIE', 'Agent saisie BEC', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'out', '2022-08-26 11:20:04'),
(166, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-26 11:20:08'),
(167, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-26 12:40:11'),
(168, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'out', '2022-08-26 12:40:50'),
(169, '::1', 'AGENT SAISIE', 'Agent saisie BEC', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-26 12:40:54'),
(170, '::1', 'AGENT SAISIE', 'Agent saisie BEC', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-26 13:36:34'),
(171, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36 Edg/104.0.1293.63', 'in', '2022-08-26 13:46:34'),
(172, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-26 15:17:59'),
(173, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'in', '2022-08-26 16:23:34'),
(174, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'in', '2022-09-02 12:45:05'),
(175, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'in', '2022-09-02 20:44:27'),
(176, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'out', '2022-09-02 20:47:35'),
(177, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'in', '2022-09-02 20:48:22'),
(178, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'in', '2022-09-06 19:11:14'),
(179, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'in', '2022-09-07 11:17:56'),
(180, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'in', '2022-09-09 17:20:48'),
(181, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'in', '2022-09-09 18:53:46'),
(182, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'out', '2022-09-09 18:54:06'),
(183, '::1', 'SOPHIE DIOP', 'Votant', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'in', '2022-09-09 18:54:58'),
(184, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-08 15:42:03'),
(185, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-09 11:17:38'),
(186, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-09 11:53:06'),
(187, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'in', '2023-06-10 16:12:33'),
(188, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'out', '2023-06-10 16:12:36'),
(189, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'in', '2023-06-10 16:12:41'),
(190, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'out', '2023-06-10 16:24:21'),
(191, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'in', '2023-06-10 16:24:23'),
(192, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'in', '2023-06-10 17:33:01'),
(193, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-11 21:53:34'),
(194, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-11 22:37:51'),
(195, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-12 17:53:55'),
(196, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-12 19:26:44'),
(197, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'in', '2023-06-12 19:32:02'),
(198, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'in', '2023-06-12 20:25:34'),
(199, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-12 21:24:05'),
(200, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-12 22:36:17'),
(201, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-12 23:32:00'),
(202, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-13 14:44:04'),
(203, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'in', '2023-06-13 14:47:58'),
(204, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'out', '2023-06-13 14:50:56'),
(205, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'in', '2023-06-13 14:50:57'),
(206, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'out', '2023-06-13 14:51:14'),
(207, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'in', '2023-06-13 14:51:15'),
(208, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'out', '2023-06-13 14:57:31'),
(209, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'in', '2023-06-13 14:57:33'),
(210, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'in', '2023-06-13 14:58:31'),
(211, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'in', '2023-06-13 14:58:49'),
(212, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-13 16:53:32'),
(213, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'in', '2023-06-13 17:41:59'),
(214, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'out', '2023-06-13 17:42:58'),
(215, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-13 18:46:19'),
(216, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-06-13 18:48:50'),
(217, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-13 18:48:51'),
(218, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-06-13 18:49:06'),
(219, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-13 18:49:08'),
(220, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-06-13 18:52:47'),
(221, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-13 18:58:23'),
(222, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-06-13 19:03:12'),
(223, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'in', '2023-06-13 19:05:03'),
(224, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'in', '2023-06-14 18:08:34'),
(225, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'out', '2023-06-14 18:09:32'),
(226, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'in', '2023-06-14 23:15:58'),
(227, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'out', '2023-06-14 23:16:16'),
(228, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'in', '2023-06-15 20:32:33'),
(229, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', 'out', '2023-06-15 20:38:28'),
(230, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-16 18:52:24'),
(231, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-16 18:52:36'),
(232, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-06-16 18:54:56'),
(233, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-16 18:55:00'),
(234, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-17 13:30:23'),
(235, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-19 11:46:08'),
(236, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.51', 'in', '2023-06-19 13:23:44'),
(237, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-06-19 13:24:03'),
(238, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-19 13:24:11'),
(239, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-06-19 13:27:54'),
(240, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-19 13:27:57'),
(241, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-06-19 13:28:29'),
(242, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-19 13:28:32'),
(243, '127.0.0.1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/114.0', 'in', '2023-06-19 20:17:41'),
(244, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.51', 'in', '2023-06-19 20:18:53'),
(245, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.51', 'in', '2023-06-19 20:29:12'),
(246, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.51', 'in', '2023-06-19 20:29:50'),
(247, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-21 17:14:08'),
(248, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-21 20:57:09'),
(249, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-22 15:06:41'),
(250, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-22 15:09:33'),
(251, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-24 16:28:25'),
(252, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-06-24 17:51:32'),
(253, '127.0.0.1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/114.0', 'in', '2023-06-24 20:34:06'),
(254, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.58', 'in', '2023-06-27 13:23:42'),
(255, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-05 18:11:21'),
(256, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-05 18:11:53'),
(257, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.67', 'in', '2023-07-05 18:18:08'),
(258, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.67', 'out', '2023-07-05 18:26:26'),
(259, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.67', 'in', '2023-07-06 08:03:26'),
(260, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-06 12:58:58'),
(261, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-07 11:23:35'),
(262, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-07 12:10:36'),
(263, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-07 13:07:46'),
(264, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-07 13:13:35'),
(265, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-07 15:28:57'),
(266, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-07 15:30:23'),
(267, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-07 15:44:13'),
(268, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-07 15:47:44'),
(269, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-07 15:49:30'),
(270, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-07 15:52:24'),
(271, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-08 22:58:23'),
(272, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-09 00:37:31');
INSERT INTO `z_connexions` (`id`, `ip`, `name_`, `profil_`, `id_site`, `navigateur`, `sens`, `date_last_modif`) VALUES
(273, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-09 01:08:26'),
(274, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-09 01:18:25'),
(275, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-09 08:28:29'),
(276, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-10 16:27:44'),
(277, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-10 16:27:56'),
(278, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-10 22:27:34'),
(279, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-10 22:30:04'),
(280, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-10 22:38:34'),
(281, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-10 22:39:12'),
(282, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-10 22:43:45'),
(283, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-10 22:43:52'),
(284, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-10 22:50:09'),
(285, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.67', 'in', '2023-07-10 23:02:01'),
(286, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.67', 'out', '2023-07-10 23:02:39'),
(287, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-10 23:08:10'),
(288, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.79', 'in', '2023-07-11 06:42:03'),
(289, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.79', 'out', '2023-07-11 06:42:16'),
(290, '::1', NULL, NULL, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.79', 'out', '2023-07-11 13:54:44'),
(291, '::1', NULL, NULL, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.79', 'out', '2023-07-11 14:53:53'),
(292, '::1', NULL, NULL, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.79', 'out', '2023-07-11 15:09:11'),
(293, '::1', NULL, NULL, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-11 15:58:01'),
(294, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-11 15:58:07'),
(295, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-11 15:58:15'),
(296, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-11 15:58:23'),
(297, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-11 16:04:34'),
(298, '::1', NULL, NULL, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-11 20:43:45'),
(299, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-11 20:44:32'),
(300, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-11 20:48:43'),
(301, '::1', NULL, NULL, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-11 21:06:46'),
(302, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.79', 'in', '2023-07-11 21:12:17'),
(303, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.79', 'out', '2023-07-11 21:12:24'),
(304, '::1', NULL, NULL, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-11 21:13:17'),
(305, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-11 21:13:22'),
(306, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-12 04:37:21'),
(307, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-12 04:51:33'),
(308, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.79', 'in', '2023-07-12 05:37:35'),
(309, '::1', NULL, NULL, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-12 06:36:27'),
(310, '::1', NULL, NULL, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.79', 'out', '2023-07-12 06:37:16'),
(311, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.79', 'in', '2023-07-12 06:37:25'),
(312, '::1', NULL, NULL, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-12 06:41:33'),
(313, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-12 06:43:37'),
(314, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.79', 'in', '2023-07-12 09:44:00'),
(315, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-13 11:00:09'),
(316, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-14 05:40:15'),
(317, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-14 07:40:05'),
(318, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-14 07:54:05'),
(319, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-14 07:54:09'),
(320, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-14 07:54:12'),
(321, '::1', NULL, NULL, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-14 18:21:34'),
(322, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-14 18:56:54'),
(323, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-14 18:56:57'),
(324, '127.0.0.1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/115.0', 'in', '2023-07-17 19:53:49'),
(325, '::1', NULL, NULL, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-18 13:37:37'),
(326, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-18 17:32:52'),
(327, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-18 17:33:03'),
(328, '::1', NULL, NULL, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'out', '2023-07-18 17:39:22'),
(329, '::1', NULL, NULL, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.183', 'out', '2023-07-24 19:14:27'),
(330, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.183', 'in', '2023-07-24 20:18:41'),
(331, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.183', 'out', '2023-07-24 20:21:43'),
(332, '::1', NULL, NULL, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.183', 'out', '2023-07-24 20:26:55'),
(333, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'in', '2023-07-24 20:32:44'),
(334, '::1', NULL, NULL, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', 'out', '2023-07-31 15:58:41'),
(335, '::1', NULL, NULL, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36', 'out', '2023-08-02 16:20:57'),
(336, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-06 18:33:04'),
(337, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-07 00:19:05'),
(338, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-07 00:33:04'),
(339, '::1', 'SOPHIE DIOP', 'Votant', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-07 00:34:28'),
(340, '::1', 'SOPHIE DIOP', 'Votant', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-07 00:37:25'),
(341, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-07 14:32:27'),
(342, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-07 16:36:49'),
(343, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-07 22:53:11'),
(344, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-07 22:57:10'),
(345, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-08 00:58:05'),
(346, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-08 12:53:47'),
(347, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-08 12:59:12'),
(348, '::1', NULL, NULL, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-08 14:42:04'),
(349, '::1', 'Université Numérique Cheikh Hamidou Kane  ', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-08 14:46:06'),
(350, '::1', 'Université Numérique Cheikh Hamidou Kane  ', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-08 14:47:31'),
(351, '::1', 'Université Numérique Cheikh Hamidou Kane  ', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-08 16:30:09'),
(352, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-08 17:17:07'),
(353, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-08 17:24:53'),
(354, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-08 17:26:02'),
(355, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-08 17:31:17'),
(356, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-08 17:33:09'),
(357, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-08 17:38:20'),
(358, '::1', 'Groupe ISI', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-08 17:49:02'),
(359, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-08 18:01:08'),
(360, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-08 18:01:33'),
(361, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-08 18:02:55'),
(362, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-08 18:03:11'),
(363, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-08 18:04:51'),
(364, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-08 23:43:07'),
(365, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-08 23:58:22'),
(366, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-09 00:02:49'),
(367, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-09 00:03:07'),
(368, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-09 00:08:29'),
(369, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-09 00:20:51'),
(370, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-09 00:21:09'),
(371, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-09 00:27:11'),
(372, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-09 00:27:29'),
(373, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-09 01:28:26'),
(374, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-09 22:38:41'),
(375, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-09 22:52:10'),
(376, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-09 22:56:25'),
(377, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-09 23:00:18'),
(378, '::1', 'Université Cheikh Anta Diop', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-09 23:01:11'),
(379, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-09 23:54:33'),
(380, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-09 23:54:49'),
(381, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-09 23:55:02'),
(382, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-10 00:26:07'),
(383, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-10 00:26:20'),
(384, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-10 00:30:27'),
(385, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-10 01:37:27'),
(386, '::1', NULL, NULL, 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-10 16:29:42'),
(387, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-10 16:29:55'),
(388, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-10 16:59:20'),
(389, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-10 16:59:40'),
(390, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-10 17:36:31'),
(391, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-10 17:36:40'),
(392, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-10 17:38:35'),
(393, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-10 17:39:02'),
(394, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-10 23:41:34'),
(395, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-10 23:45:26'),
(396, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-11 00:01:40'),
(397, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-11 02:08:56'),
(398, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-11 13:38:15'),
(399, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-11 13:45:14'),
(400, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-11 13:45:34'),
(401, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-11 13:48:07'),
(402, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-11 14:01:24'),
(403, '::1', 'ESP', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-11 14:02:13'),
(404, '::1', 'ESP', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-11 14:27:35'),
(405, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-11 14:27:51'),
(406, '::1', 'DEMBA DIACK', 'Super Admin', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'out', '2024-05-11 14:30:19'),
(407, '::1', 'Groupe ISI', 'Ecole', 1, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'in', '2024-05-11 14:30:36');

-- --------------------------------------------------------

--
-- Structure de la table `z_log_error_connexions`
--

CREATE TABLE `z_log_error_connexions` (
  `id` bigint(20) NOT NULL,
  `ip` varchar(16) NOT NULL,
  `login` varchar(200) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `navigateur` varchar(255) DEFAULT NULL,
  `date_last_modif` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `z_log_error_connexions`
--

INSERT INTO `z_log_error_connexions` (`id`, `ip`, `login`, `mdp`, `navigateur`, `date_last_modif`) VALUES
(3, '192.168.12.159', 'dqdqsd.diack@ansd.sn', 'Passer@123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', '2022-06-14 09:29:03'),
(4, '192.168.12.159', 'saisie_bec@gmail.com', 'Passer@123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-15 10:00:24'),
(5, '192.168.12.159', 'saisie_bec@gmail.com', 'Passer@123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-15 10:00:29'),
(6, '192.168.12.159', 'saisie_bec@gmail.com', 'Passer@123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-15 10:00:54'),
(7, '192.168.12.175', 'saisie_bec@gmail.com', 'Passer@123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.124 Safari/537.36 Edg/102.0.1245.44', '2022-06-22 10:30:55'),
(8, '::1', 'esia@esia.sn', 'passer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-27 09:25:48'),
(9, '::1', 'saisie_bec@gmail.com', 'Passer@123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.49', '2022-07-15 16:09:19'),
(10, '::1', 'saisie_bec@gmail.com', 'Passer@123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.49', '2022-07-15 16:09:23'),
(11, '::1', 'saisie_bec@gmail.com', 'Passer@123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.49', '2022-07-15 16:09:38'),
(12, '::1', 'saisie_bec@ansd.sn', 'Passer@123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36 Edg/103.0.1264.49', '2022-07-15 16:09:54'),
(13, '::1', '1\' or 1 = \'1', 'passer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-19 14:43:56'),
(14, '::1', 'saisie_bec@gmail.com', 'Passer@123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-25 11:09:49'),
(15, '::1', 'demba.diack@ansd.sn', '1\' or 1 = \'1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-10 11:14:05'),
(16, '::1', '1\' or 1 = \'1', 'Passer@123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-10 11:14:08'),
(17, '::1', '1\' or 1 = \'1', '1\' or 1 = \'1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-10 11:14:13'),
(18, '::1', 'esia@esia.sn', 'passer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-25 10:57:27'),
(19, '::1', 'saisie_bec@gmail.com', 'Passer@123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-26 11:14:55'),
(20, '::1', 'de', 'Passer@123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-26 15:17:56'),
(21, '::1', 'esia@esia.sn', 'passer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', '2022-09-02 12:44:59'),
(22, '::1', 'test_v@gmail.com', 'passer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', '2022-09-09 18:51:36'),
(23, '::1', 'test@gmail.com', 'passer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', '2022-09-09 18:51:43'),
(24, '::1', 'bayedemba@gmail.com', 'passer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-06-08 15:41:25'),
(25, '::1', 'bayedemba@gmail.com', 'passer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-06-09 11:17:34'),
(26, '::1', 'bayedemba@gmail.com', 'passer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-06-09 11:52:53'),
(27, '::1', 'demba.diack@ansd.sn', 'Passer@123', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-06-09 11:52:57'),
(28, '::1', 'empty', 'empty', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.43', '2023-06-10 16:07:48'),
(29, '::1', 'admin_ipm', 'Passer@12345;', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-06-17 13:30:15'),
(30, '::1', 'empty', 'empty', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 Edg/114.0.1823.51', '2023-06-19 20:29:10'),
(31, '::1', 'bayedemba@gmail.com', 'passerj', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-07-09 08:28:39'),
(32, '::1', 'bayedemba@gmail.comddd', 'passer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-07-10 22:30:11'),
(33, '::1', '1\' or 1 = \'1', 'passer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-07-10 22:30:15'),
(34, '::1', 'bayedemba@gmail.com', 'passer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36 Edg/115.0.1901.183', '2023-07-24 20:18:38'),
(35, '::1', 'bayedemba@gmail.com', 'passeraz', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', '2023-07-24 20:32:43'),
(36, '127.0.0.1', 'ndiayeaugustin18@gmail.com', 'augusTIN18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/116.0', '2023-08-03 12:42:37'),
(37, '::1', 'bayedemba@gmail.com', 'passe', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', '2024-05-06 18:32:23'),
(38, '::1', 'test_v@gmail.com', 'passe', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', '2024-05-07 00:33:39'),
(39, '::1', 'mandione@gmail.com', 'passe', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', '2024-05-07 14:32:06'),
(40, '::1', 'administration@unchk.edu.sn', 'passe', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', '2024-05-08 13:41:09'),
(41, '::1', 'administration@unchk.edu.sn', 'passe', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', '2024-05-08 13:43:01'),
(42, '::1', 'administration@unchk.edu.sn', 'passe', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', '2024-05-08 13:45:15'),
(43, '::1', 'administration@unchk.edu.sn', 'passe', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', '2024-05-08 14:34:05'),
(44, '::1', 'administration@isi.edu.sn', '2613267', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', '2024-05-08 23:57:58'),
(45, '::1', 'bayedemba@gmail.com', 'passeraz', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', '2024-05-09 22:32:57'),
(46, '::1', 'bayedemba@gmail.com', 'passeraz', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', '2024-05-09 22:33:18'),
(47, '::1', 'bayedemba@gmail.com', 'passeraz', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', '2024-05-09 22:56:05'),
(48, '::1', 'administration@isi.edu.sn', '2613267', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', '2024-05-09 23:54:07'),
(49, '::1', 'administration@isi.edu.sn', '2613267', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', '2024-05-10 23:59:24'),
(50, '::1', 'administration@isi.edu.sn', 'passer', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', '2024-05-11 00:01:20'),
(51, '::1', 'bayedemba@gmail.com', 'passeraz', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', '2024-05-11 13:45:25');

-- --------------------------------------------------------

--
-- Structure de la table `z_trace_activities`
--

CREATE TABLE `z_trace_activities` (
  `id` bigint(20) NOT NULL,
  `texte` varchar(100) NOT NULL,
  `type` enum('calcul indice','chargement données','nouvelle collecte','nouvelle entreprise','nouveau pays','initialisation année') NOT NULL,
  `date_act` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_concerned_elt` varchar(20) DEFAULT NULL,
  `id_site` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `z_trace_activities`
--

INSERT INTO `z_trace_activities` (`id`, `texte`, `type`, `date_act`, `id_concerned_elt`, `id_site`) VALUES
(1, 'Collecte bureaubee période de :02 - 2023', 'chargement données', '2022-07-13 13:28:12', NULL, 3),
(2, 'Collecte bureau() période de :01 - 2022', 'calcul indice', '2022-07-15 16:19:39', '4', 3),
(3, 'Collecte bureau() période de :01 - 2022', 'nouvelle collecte', '2022-07-15 16:20:23', '4', 3),
(4, 'Collecte bureau() période de :01 - 2022', 'nouvelle entreprise', '2022-07-15 16:20:25', '4', 3),
(5, 'Collecte bureau() période de :06 - 2022', 'nouvelle collecte', '2022-07-18 15:45:41', '7', 3),
(6, 'Collecte bureau() période de :01 - 2022', 'nouvelle collecte', '2022-07-20 10:46:52', '4', 3),
(7, 'Collecte bureau() période de :06 - 2022', 'nouvelle collecte', '2022-07-25 11:08:44', '7', 3),
(8, 'Collecte bureau() période de :01 - 2022', 'nouvelle collecte', '2022-07-25 12:50:49', '4', 3),
(9, 'Collecte bureau() période de :01 - 2022', 'nouvelle collecte', '2022-07-27 09:45:33', '4', 3),
(10, 'Collecte bureau() période de :01 - 2022', 'nouvelle collecte', '2022-08-02 15:46:39', '4', 3),
(11, 'Collecte bureau() période de :01 - 2022', 'nouvelle collecte', '2022-08-10 11:14:27', '4', 3),
(12, 'Chargement de données ', '', '2022-08-10 12:39:33', '32', 3),
(13, 'Calcul indice (BEE) période de :06 - 2022', 'calcul indice', '2022-08-10 15:37:27', '7', 3),
(14, 'Calcul indice (BEE) période de :05 - 2022', 'calcul indice', '2022-08-10 16:16:25', '7', 3),
(15, 'Calcul indice (BEE) période de :05 - 2022', 'calcul indice', '2022-08-10 16:18:21', '7', 3),
(16, 'Calcul indice (BEE) période de :05 - 2022', 'calcul indice', '2022-08-10 16:34:57', '7', 3),
(17, 'Calcul indice (BEE) période de :05 - 2022', 'calcul indice', '2022-08-11 09:48:09', '7', 3),
(18, 'Calcul indice (BEE) période de :05 - 2022', 'calcul indice', '2022-08-11 09:48:24', '7', 3),
(19, 'Calcul indice (BEE) période de :05 - 2022', 'calcul indice', '2022-08-11 09:48:59', '7', 3),
(20, 'Calcul indice (BEE) période de :05 - 2022', 'calcul indice', '2022-08-11 12:38:53', '7', 3),
(21, 'Calcul indice (BEE) période de :05 - 2022', 'calcul indice', '2022-08-11 12:39:53', '7', 3),
(22, 'Calcul indice (BEE) période de :05 - 2022', 'calcul indice', '2022-08-11 12:52:23', '7', 3),
(23, 'Calcul indice (BEE) période de :05 - 2022', 'calcul indice', '2022-08-11 16:02:33', '7', 3),
(24, 'Calcul indice (BEE) période de :05 - 2022', 'calcul indice', '2022-08-11 16:05:41', '7', 3),
(25, 'Chargement de données ', '', '2022-08-11 16:14:05', '33', 3),
(26, 'Calcul indice (BEE) période de :05 - 2022', 'calcul indice', '2022-08-11 16:41:40', '7', 3),
(27, 'Calcul indice (BEE) période de :05 - 2022', 'calcul indice', '2022-08-11 16:42:52', '7', 3),
(28, 'Calcul indice (BEE) période de :05 - 2022', 'calcul indice', '2022-08-12 09:39:36', '7', 3),
(29, 'Calcul indice (BEE) période de :05 - 2022', 'calcul indice', '2022-08-12 09:42:43', '7', 3),
(30, 'Collecte bureau(bec) période de :02 - 2021', 'nouvelle collecte', '2022-08-26 11:45:15', NULL, 3),
(31, 'Calcul indice (BEE) période de :05 - 2022', 'calcul indice', '2022-08-26 12:40:39', '7', 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `c_candidats`
--
ALTER TABLE `c_candidats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `code_candidat` (`code_candidat`);

--
-- Index pour la table `c_candidats_details`
--
ALTER TABLE `c_candidats_details`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `c_candidats_diplomes`
--
ALTER TABLE `c_candidats_diplomes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `c_candidats_experiences`
--
ALTER TABLE `c_candidats_experiences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `c_candidats_langues`
--
ALTER TABLE `c_candidats_langues`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code_candidat` (`code_candidat`,`id_langue`),
  ADD KEY `id_langue` (`id_langue`);

--
-- Index pour la table `c_candidatures`
--
ALTER TABLE `c_candidatures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_offre` (`id_offre`);

--
-- Index pour la table `c_categorie_des_offres`
--
ALTER TABLE `c_categorie_des_offres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `c_offres`
--
ALTER TABLE `c_offres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Index pour la table `ecole`
--
ALTER TABLE `ecole`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lst_diplomes`
--
ALTER TABLE `lst_diplomes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_site_saisie` (`commentaires`),
  ADD KEY `id_op_saisie` (`id_op_saisie`);

--
-- Index pour la table `lst_langues`
--
ALTER TABLE `lst_langues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_site_saisie` (`commentaires`),
  ADD KEY `id_op_saisie` (`id_op_saisie`);

--
-- Index pour la table `lst_localites`
--
ALTER TABLE `lst_localites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pays` (`id_pays`) USING BTREE,
  ADD KEY `parent` (`id_parent`) USING BTREE;

--
-- Index pour la table `lst_pays`
--
ALTER TABLE `lst_pays`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alpha2` (`alpha2`),
  ADD UNIQUE KEY `alpha3` (`alpha3`),
  ADD UNIQUE KEY `code_unique` (`code`),
  ADD KEY `id_op_saisie` (`id_op_saisie`);

--
-- Index pour la table `lst_types_pieces`
--
ALTER TABLE `lst_types_pieces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_site_saisie` (`commentaires`),
  ADD KEY `id_op_saisie` (`id_op_saisie`);

--
-- Index pour la table `lst_type_experiences`
--
ALTER TABLE `lst_type_experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_site_saisie` (`commentaires`),
  ADD KEY `id_op_saisie` (`id_op_saisie`);

--
-- Index pour la table `par_lieux_sn`
--
ALTER TABLE `par_lieux_sn`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_parent` (`id_parent`);

--
-- Index pour la table `sys_almustakhdam`
--
ALTER TABLE `sys_almustakhdam`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_op_saisie` (`id_op_saisie`),
  ADD KEY `id_type_profil` (`id_type_profil`),
  ADD KEY `id_site` (`id_site`);

--
-- Index pour la table `sys_menu`
--
ALTER TABLE `sys_menu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sys_sites`
--
ALTER TABLE `sys_sites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sys_sous_menu`
--
ALTER TABLE `sys_sous_menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_menu_2` (`id_menu`,`code`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Index pour la table `sys_type_action`
--
ALTER TABLE `sys_type_action`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sous_menu` (`id_sous_menu`),
  ADD KEY `id_type_profil` (`id_type_profil`);

--
-- Index pour la table `sys_type_profil`
--
ALTER TABLE `sys_type_profil`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `z_connexions`
--
ALTER TABLE `z_connexions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `z_log_error_connexions`
--
ALTER TABLE `z_log_error_connexions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `z_trace_activities`
--
ALTER TABLE `z_trace_activities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `c_candidats`
--
ALTER TABLE `c_candidats`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `c_candidats_details`
--
ALTER TABLE `c_candidats_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `c_candidats_diplomes`
--
ALTER TABLE `c_candidats_diplomes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `c_candidats_experiences`
--
ALTER TABLE `c_candidats_experiences`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `c_candidats_langues`
--
ALTER TABLE `c_candidats_langues`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `c_candidatures`
--
ALTER TABLE `c_candidatures`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `c_categorie_des_offres`
--
ALTER TABLE `c_categorie_des_offres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `c_offres`
--
ALTER TABLE `c_offres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `ecole`
--
ALTER TABLE `ecole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `lst_diplomes`
--
ALTER TABLE `lst_diplomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `lst_langues`
--
ALTER TABLE `lst_langues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `lst_localites`
--
ALTER TABLE `lst_localites`
  MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT pour la table `lst_pays`
--
ALTER TABLE `lst_pays`
  MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT pour la table `lst_types_pieces`
--
ALTER TABLE `lst_types_pieces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `lst_type_experiences`
--
ALTER TABLE `lst_type_experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `par_lieux_sn`
--
ALTER TABLE `par_lieux_sn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1906;

--
-- AUTO_INCREMENT pour la table `sys_almustakhdam`
--
ALTER TABLE `sys_almustakhdam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `sys_menu`
--
ALTER TABLE `sys_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `sys_sites`
--
ALTER TABLE `sys_sites`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `sys_sous_menu`
--
ALTER TABLE `sys_sous_menu`
  MODIFY `id` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `sys_type_action`
--
ALTER TABLE `sys_type_action`
  MODIFY `id` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `sys_type_profil`
--
ALTER TABLE `sys_type_profil`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `z_connexions`
--
ALTER TABLE `z_connexions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=408;

--
-- AUTO_INCREMENT pour la table `z_log_error_connexions`
--
ALTER TABLE `z_log_error_connexions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `z_trace_activities`
--
ALTER TABLE `z_trace_activities`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `par_lieux_sn`
--
ALTER TABLE `par_lieux_sn`
  ADD CONSTRAINT `par_lieux_sn_ibfk_1` FOREIGN KEY (`id_parent`) REFERENCES `par_lieux_sn` (`id`);

--
-- Contraintes pour la table `sys_almustakhdam`
--
ALTER TABLE `sys_almustakhdam`
  ADD CONSTRAINT `sys_almustakhdam_ibfk_1` FOREIGN KEY (`id_type_profil`) REFERENCES `sys_type_profil` (`id`),
  ADD CONSTRAINT `sys_almustakhdam_ibfk_2` FOREIGN KEY (`id_site`) REFERENCES `sys_sites` (`id`);

--
-- Contraintes pour la table `sys_sous_menu`
--
ALTER TABLE `sys_sous_menu`
  ADD CONSTRAINT `sys_sous_menu_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `sys_menu` (`id`);

--
-- Contraintes pour la table `sys_type_action`
--
ALTER TABLE `sys_type_action`
  ADD CONSTRAINT `sys_type_action_ibfk_1` FOREIGN KEY (`id_sous_menu`) REFERENCES `sys_sous_menu` (`id`),
  ADD CONSTRAINT `sys_type_action_ibfk_2` FOREIGN KEY (`id_type_profil`) REFERENCES `sys_type_profil` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
