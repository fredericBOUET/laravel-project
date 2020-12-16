-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 20 nov. 2020 à 22:27
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `biero`
--

-- --------------------------------------------------------

--
-- Structure de la table `bieres`
--

CREATE TABLE `bieres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brasserie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bieres`
--

INSERT INTO `bieres` (`id`, `nom`, `brasserie`, `description`, `image`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'maBiere1', 'Brasserie1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et nisi dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam non diam maximus, hendrerit leo vitae, semper ligula. Fusce placerat mollis velit, id condimentum nulla rutrum eget. Curabitur mollis tristique ante a imperdiet. Nam libero lorem, pulvinar sit amet neque at, fringilla eleifend nulla. Phasellus et dui vitae lacus consectetur luctus. Nullam in imperdiet diam. Etiam pharetra aliquet auctor. Nam sed dapibus lorem, eget laoreet massa. Duis cursus eros vitae quam laoreet, sed vehicula metus scelerisque.', 'rousse.jpg', 'rousse', NULL, '2020-11-10 00:05:56', NULL),
(5, 'maBiere2', 'Brasserie2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et nisi dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam non diam maximus, hendrerit leo vitae, semper ligula. Fusce placerat mollis velit, id condimentum nulla rutrum eget. Curabitur mollis tristique ante a imperdiet. Nam libero lorem, pulvinar sit amet neque at, fringilla eleifend nulla. Phasellus et dui vitae lacus consectetur luctus. Nullam in imperdiet diam. Etiam pharetra aliquet auctor. Nam sed dapibus lorem, eget laoreet massa. Duis cursus eros vitae quam laoreet, sed vehicula metus scelerisque.', 'brune.jpg', 'brune', NULL, '2020-11-10 00:21:14', NULL),
(6, 'maBiere3', 'Brasserie3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et nisi dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam non diam maximus, hendrerit leo vitae, semper ligula. Fusce placerat mollis velit, id condimentum nulla rutrum eget. Curabitur mollis tristique ante a imperdiet. Nam libero lorem, pulvinar sit amet neque at, fringilla eleifend nulla. Phasellus et dui vitae lacus consectetur luctus. Nullam in imperdiet diam. Etiam pharetra aliquet auctor. Nam sed dapibus lorem, eget laoreet massa. Duis cursus eros vitae quam laoreet, sed vehicula metus scelerisque.', 'brune.jpg', 'brune', NULL, '2020-11-20 00:04:56', '2020-11-20 00:04:56'),
(7, 'maBiere4', 'Brasserie4', 'aaaaLorem ipsum dolor sit amet, consasdectetur adipiscing elit. Morbi et nisi dui. Pellentesque habitant morbi tristique senectus et netus et malesuaasdasfames ac turpis egestas. Aliquam non diam maximus, hendrerit leo vitae, semper ligula. Fusce placerat mollis velit, id condimentum nulla rutrum eget. Curabitur mollis tristique ante a imperdiet. Nam libero lorem, pulvinar sit amet neque at, fringilla eleifend nulla. Phasellus et dui vitae lacus consectetur luctus. Nullam in imperdiet diam. Etiam pharetra aliquet auctor. Nam sed dapibus dassadsadassadlorem, eget laoreet massa. Duis cursus eros vitae quam laoreet, sed vehicula metus scelerisque.', 'rousse.jpg', 'rousse', NULL, '2020-11-09 23:59:39', NULL),
(13, 'maBiere5', 'Brasserie5', 'test', 'brune.jpg', 'brune', '2020-11-10 00:11:05', '2020-11-10 00:11:12', '2020-11-10 00:11:12'),
(14, 'maBiere6', 'Brasserie6', 'asddsadas', 'rousse.jpg', 'rousse', '2020-11-10 00:21:25', '2020-11-10 00:21:29', '2020-11-10 00:21:29'),
(15, 'maBiere7', 'Brasserie7', 'testajout', 'blonde.jpg', 'blonde', '2020-11-19 21:37:47', '2020-11-19 21:37:47', NULL),
(16, 'maBiere8', 'Brasserie8', 'asddsa', 'brune.jpg', 'brune', '2020-11-21 00:00:28', '2020-11-21 00:00:28', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `biere_user`
--

CREATE TABLE `biere_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `biere_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `biere_user`
--

INSERT INTO `biere_user` (`id`, `biere_id`, `user_id`, `created_at`, `updated_at`) VALUES
(22, 6, 8, '2020-11-17 23:34:24', NULL),
(23, 5, 8, '2020-11-17 23:34:25', NULL),
(25, 7, 8, '2020-11-18 00:05:42', NULL),
(27, 5, 6, '2020-11-18 03:56:45', NULL),
(29, 7, 6, '2020-11-18 03:56:48', NULL),
(30, 4, 6, '2020-11-18 04:04:47', NULL),
(31, 6, 6, '2020-11-19 01:46:19', NULL),
(33, 6, 10, '2020-11-19 21:09:16', NULL),
(34, 5, 10, '2020-11-19 21:09:17', NULL),
(35, 7, 10, '2020-11-21 00:23:35', NULL),
(36, 15, 10, '2020-11-21 00:23:36', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_26_183932_create_bieres_table', 2),
(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 3),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(7, '2020_10_30_152333_create_sessions_table', 3),
(8, '2020_11_03_185017_add_deleted_at_to_bieres_table', 4),
(9, '2020_11_11_182749_add_roles_to_user_table', 5),
(10, '2020_11_17_155424_create_biere_users_table', 6),
(11, '2020_11_17_155917_create_bieres_users_table', 7);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('rpVmBrMncydMa0bz8pXYExpusCZoLEXq6F2SqYI8', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.111 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUXNxaHFqWGdhS3c1MDdPdTR6cFJ4c0JXbnI2S1JuSDh3NHdEd2U3WCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1604072732);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(8, 'test123', 'dadada@gmail.com', NULL, '$2y$10$NIM9vkWLl9M9ycmuDEOOLe23wIvEX61/.//1EJ1SWwOwsUdNecNA6', NULL, NULL, NULL, '2020-11-17 23:34:13', '2020-11-17 23:34:13', 'admin'),
(9, 'admin123', 'fredericbouset123@gmail.com', NULL, '$2y$10$P1nlFpD4ssXxC39vLhfof.JoRE8LRu0kBoyHqJkDgoNCDJtgNAS3y', NULL, NULL, NULL, '2020-11-19 20:53:15', '2020-11-19 20:53:15', 'admin'),
(10, 'user1', 'testuser1@gmail.com', NULL, '$2y$10$HLuCJHM1A4m6mQ9fkVlbPeKj215Pp4Sef9zFdnoPZAyy.DT2BEngW', NULL, NULL, NULL, '2020-11-19 21:03:32', '2020-11-19 21:03:32', 'sub'),
(11, 'user2', 'testuser2@gmail.com', NULL, '$2y$10$dVD4Vdml5gorqgtPL9N11.Hnt2CrtisfU0MW3nuF/.e6WRyU3DWBm', NULL, NULL, NULL, '2020-11-19 21:03:51', '2020-11-19 21:03:51', 'sub'),
(12, 'user3', 'testuser3@gmail.com', NULL, '$2y$10$Kw6AWntvG.KX32irMUJCme9J12wdHfly5ncXxRcs5coCW5qMsUCMu', NULL, NULL, NULL, '2020-11-19 21:04:10', '2020-11-19 21:04:10', 'sub');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bieres`
--
ALTER TABLE `bieres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `biere_user`
--
ALTER TABLE `biere_user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bieres`
--
ALTER TABLE `bieres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `biere_user`
--
ALTER TABLE `biere_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
