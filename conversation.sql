-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 03-Abr-2018 às 02:30
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conversation`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conversations`
--

CREATE TABLE `conversations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `conversations`
--

INSERT INTO `conversations` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 11, '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(2, 12, '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(3, 13, '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(4, 14, '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(5, 15, '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(6, 16, '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(7, 17, '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(8, 18, '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(9, 19, '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(10, 20, '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(11, 41, '2018-03-15 15:31:45', '2018-03-15 15:31:45'),
(12, 42, '2018-03-15 15:31:45', '2018-03-15 15:31:45'),
(13, 43, '2018-03-15 15:31:45', '2018-03-15 15:31:45'),
(14, 9, '2018-03-15 03:00:00', '2018-03-15 03:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conversation_user`
--

CREATE TABLE `conversation_user` (
  `conversation_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `conversation_user`
--

INSERT INTO `conversation_user` (`conversation_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL),
(3, 3, NULL, NULL),
(4, 4, NULL, NULL),
(5, 5, NULL, NULL),
(6, 6, NULL, NULL),
(7, 7, NULL, NULL),
(8, 8, NULL, NULL),
(9, 9, NULL, NULL),
(10, 10, NULL, NULL),
(14, 9, '2018-03-15 03:00:00', '2018-03-15 03:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` double(8,2) NOT NULL DEFAULT '0.00',
  `conversation_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `messages`
--

INSERT INTO `messages` (`id`, `body`, `value`, `conversation_id`, `created_at`, `updated_at`) VALUES
(1, 'oi amiguuuu', 0.00, 9, '2018-03-15 03:00:00', '2018-03-15 03:00:00'),
(2, 'ma oeee ma oe', 0.00, 9, '2018-03-15 03:00:00', '2018-03-15 03:00:00'),
(3, 'lalalalalend', 0.00, 14, '2018-03-15 03:00:00', '2018-03-15 03:00:00'),
(4, 'opa foi engano', 0.00, 14, '2018-03-15 03:00:00', '2018-03-15 03:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2018_03_13_132942_create_conversations_table', 1),
(16, '2018_03_13_141105_create_conversation_user_table', 1),
(17, '2018_03_13_141650_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('fadel.dean@example.org', '$2y$10$DWlGEXPSWg.Y87tJPcbUNeTdTO1shNAl7klctlWvEB9oX8Rg7nwSC', '2018-03-15 15:08:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gabriella Gottlieb', 'dach.duncan@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'oKoittCDRo', '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(2, 'Jolie Tromp Jr.', 'clare.kunde@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'JZibhTIygz', '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(3, 'Esther Spencer', 'iluettgen@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '8ELlJbcP4u', '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(4, 'Edna Parisian', 'pgoyette@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'eYuVDp7Jj1', '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(5, 'Aniya Altenwerth', 'zmccullough@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'smaBQAnQ1I', '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(6, 'Eleazar Cormier PhD', 'jerde.eden@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '5qjJuGjUax', '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(7, 'Deontae O\'Connell MD', 'carolyne66@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'ZYfeweWTQQ', '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(8, 'Xander Spencer V', 'eleanora.emmerich@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'nyVZNoqOBd', '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(9, 'Bradly Stracke', 'murilosantoseduardo@gmail.com', '$2y$10$1.SGEbKKCLbykMfkvaIJpO.5QZAKzOHjcFQx4ilY.q1ARU1Yfv5pS', 'DpXhZrFoGuONa2S0q48mIf9pFJ2FYKPWNhjg6U9Tw1zzQWX9h4tXhzlKBmvr', '2018-03-15 15:01:06', '2018-03-15 15:17:42'),
(10, 'John Zulauf III', 'jazmyn.hayes@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'OceFB1HecM', '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(11, 'Mr. Adelbert Douglas', 'stamm.winifred@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'SqP1pICJZl', '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(12, 'Prof. Lucas Schumm', 'guillermo.olson@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'SlfNaegrOK', '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(13, 'Albert Murazik', 'bernie.wolf@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'h2sF1cn3dz', '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(14, 'Prof. Delfina Jenkins PhD', 'renee.morar@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'qxlaNGTQi0', '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(15, 'Nicolas Rippin', 'chand@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'yrRLVBdtXF', '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(16, 'Ms. Alexandra Halvorson', 'enoch59@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'fyU94dlQ0M', '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(17, 'Rowena Gaylord', 'ned02@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '9wyBOtBTd3', '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(18, 'Dr. Wendell Prohaska', 'swaters@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'mFGCw9d9II', '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(19, 'Christopher D\'Amore', 'ceffertz@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'KuoE4RjRPD', '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(20, 'Mr. Herbert Baumbach', 'dare.quinten@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '3YoASFvb4P', '2018-03-15 15:01:06', '2018-03-15 15:01:06'),
(21, 'Prof. Alexys Stracke', 'myrtice.frami@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'RreTglzLSs', '2018-03-15 15:31:23', '2018-03-15 15:31:23'),
(22, 'Prof. Kylee Barrows', 'leanne91@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '7wpsuTsXwl', '2018-03-15 15:31:23', '2018-03-15 15:31:23'),
(23, 'Allie Lowe', 'ethel.hahn@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'CGD93Z1sqT', '2018-03-15 15:31:23', '2018-03-15 15:31:23'),
(24, 'Robbie Murray', 'shana.conn@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '3VQfqv1t9M', '2018-03-15 15:31:23', '2018-03-15 15:31:23'),
(25, 'Prof. Jedidiah Gottlieb Jr.', 'myra.kris@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'zXcwbn8GSD', '2018-03-15 15:31:23', '2018-03-15 15:31:23'),
(26, 'Mrs. Cordia Labadie', 'kaya.weissnat@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'jaJKPBsnUb', '2018-03-15 15:31:23', '2018-03-15 15:31:23'),
(27, 'Dr. Jared O\'Connell DVM', 'aortiz@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'JtxjWBj0xm', '2018-03-15 15:31:23', '2018-03-15 15:31:23'),
(28, 'Mr. Sheldon Gerlach', 'muller.caesar@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'xU4YOCgfVi', '2018-03-15 15:31:23', '2018-03-15 15:31:23'),
(29, 'Krystel Cormier', 'lexie04@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'uXgNm0YMxM', '2018-03-15 15:31:23', '2018-03-15 15:31:23'),
(30, 'Toni Terry Jr.', 'wendy.hayes@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'Z4XFEqPbHS', '2018-03-15 15:31:23', '2018-03-15 15:31:23'),
(31, 'Isai Tromp', 'jerde.rubie@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'JYYnDwgRE1', '2018-03-15 15:31:44', '2018-03-15 15:31:44'),
(32, 'Ms. Leonora Predovic DDS', 'mante.cydney@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'clPHXMIW2J', '2018-03-15 15:31:44', '2018-03-15 15:31:44'),
(33, 'Mr. Merritt Brakus PhD', 'dino.bernier@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'eIFpMfRpp9', '2018-03-15 15:31:44', '2018-03-15 15:31:44'),
(34, 'Mr. Ken Rosenbaum PhD', 'oconner.archibald@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'FrUoXq8gHD', '2018-03-15 15:31:44', '2018-03-15 15:31:44'),
(35, 'Dominique Osinski PhD', 'lola.haley@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'jb00PryAtb', '2018-03-15 15:31:44', '2018-03-15 15:31:44'),
(36, 'Adonis Schmeler', 'jane.windler@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'anLRbhn8tq', '2018-03-15 15:31:44', '2018-03-15 15:31:44'),
(37, 'Prof. Leta Christiansen', 'mgrant@example.org', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'eXC3DGFPtx', '2018-03-15 15:31:45', '2018-03-15 15:31:45'),
(38, 'Mrs. Glenna Gaylord DDS', 'wanderson@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'JLserDpj68', '2018-03-15 15:31:45', '2018-03-15 15:31:45'),
(39, 'Dion Cummings', 'balistreri.willie@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'sJCip1rTdi', '2018-03-15 15:31:45', '2018-03-15 15:31:45'),
(40, 'Nicolette Kshlerin', 'durgan.alena@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '37Fn6zAoL3', '2018-03-15 15:31:45', '2018-03-15 15:31:45'),
(41, 'Prof. Wilfrid Carter', 'schiller.deanna@example.net', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'N9U7t0Myjr', '2018-03-15 15:31:45', '2018-03-15 15:31:45'),
(42, 'Abbie Dickens IV', 'champlin.sarina@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'O38z5LAVS3', '2018-03-15 15:31:45', '2018-03-15 15:31:45'),
(43, 'Ms. Wava Tillman', 'farrell.shanon@example.com', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '0I8fgT0xLU', '2018-03-15 15:31:45', '2018-03-15 15:31:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conversations_user_id_foreign` (`user_id`);

--
-- Indexes for table `conversation_user`
--
ALTER TABLE `conversation_user`
  ADD KEY `conversation_user_conversation_id_foreign` (`conversation_id`),
  ADD KEY `conversation_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_conversation_id_foreign` (`conversation_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `conversations`
--
ALTER TABLE `conversations`
  ADD CONSTRAINT `conversations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `conversation_user`
--
ALTER TABLE `conversation_user`
  ADD CONSTRAINT `conversation_user_conversation_id_foreign` FOREIGN KEY (`conversation_id`) REFERENCES `conversations` (`id`),
  ADD CONSTRAINT `conversation_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_conversation_id_foreign` FOREIGN KEY (`conversation_id`) REFERENCES `conversations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
