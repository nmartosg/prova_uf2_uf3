-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 07-06-2021 a las 11:24:51
-- Versión del servidor: 5.7.33-0ubuntu0.16.04.1
-- Versión de PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nmartos_examenuf2uf3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suma` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`id`, `from`, `to`, `messages`, `suma`, `created_at`, `updated_at`) VALUES
(1, '12', 'All', '4 + 4', '8', '2021-06-05 00:10:14', '2021-06-05 00:10:14'),
(2, '12', 'All', '3 + 4', '7', '2021-06-05 00:10:16', '2021-06-05 00:10:16'),
(3, '12', 'All', '8 + 9', '17', '2021-06-05 00:10:18', '2021-06-05 00:10:18'),
(4, '12', 'All', '4 + 9', '13', '2021-06-05 00:10:21', '2021-06-05 00:10:21'),
(5, '12', 'All', '6 + 4', '10', '2021-06-05 00:13:49', '2021-06-05 00:13:49'),
(6, '11', 'All', '4 + 9', '13', '2021-06-05 00:14:20', '2021-06-05 00:14:20'),
(7, '11', 'All', '6 + 8', '14', '2021-06-05 00:14:23', '2021-06-05 00:14:23'),
(8, '11', 'All', '4 + 1', '5', '2021-06-05 00:14:25', '2021-06-05 00:14:25'),
(9, '11', 'All', '10 + 9', '19', '2021-06-05 00:14:27', '2021-06-05 00:14:27'),
(10, '11', 'All', '7 + 9', '16', '2021-06-05 00:14:32', '2021-06-05 00:14:32'),
(11, '12', 'All', '10 + 9', '19', '2021-06-05 00:26:16', '2021-06-05 00:26:16'),
(12, '12', 'All', '9 + 3', '12', '2021-06-05 00:28:24', '2021-06-05 00:28:24'),
(13, '12', 'All', '10 + 10', '20', '2021-06-05 00:32:01', '2021-06-05 00:32:01'),
(14, '12', 'All', '9 + 4', '13', '2021-06-05 00:32:53', '2021-06-05 00:32:53'),
(15, '12', 'All', '1 + 7', '8', '2021-06-05 00:33:38', '2021-06-05 00:33:38'),
(16, '12', 'All', '3 + 6', '9', '2021-06-05 00:34:42', '2021-06-05 00:34:42'),
(17, '12', 'All', '1 + 9', '10', '2021-06-05 00:37:07', '2021-06-05 00:37:07'),
(18, '12', 'All', '2 + 9', '11', '2021-06-05 00:37:46', '2021-06-05 00:37:46'),
(19, '12', 'All', '6 + 1', '7', '2021-06-05 00:38:29', '2021-06-05 00:38:29'),
(20, '12', 'All', '5 + 3', '8', '2021-06-05 00:38:43', '2021-06-05 00:38:43'),
(21, '12', 'All', '6 + 5', '11', '2021-06-05 00:39:12', '2021-06-05 00:39:12'),
(22, '12', 'All', '8 + 9', '17', '2021-06-05 00:43:02', '2021-06-05 00:43:02'),
(23, '12', 'All', '4 + 5', '9', '2021-06-05 00:43:48', '2021-06-05 00:43:48'),
(24, '12', 'All', '9 + 9', '18', '2021-06-05 00:56:18', '2021-06-05 00:56:18'),
(25, '12', 'All', '6 + 5', '11', '2021-06-05 01:11:29', '2021-06-05 01:11:29'),
(26, '12', 'All', '7 + 3', '10', '2021-06-05 01:12:11', '2021-06-05 01:12:11'),
(27, '12', 'All', '2 + 3', '5', '2021-06-05 01:12:57', '2021-06-05 01:12:57'),
(28, '12', 'All', '1 + 4', '5', '2021-06-05 01:14:11', '2021-06-05 01:14:11'),
(29, '12', 'All', '10 + 7', '17', '2021-06-05 01:17:07', '2021-06-05 01:17:07'),
(30, '12', 'All', '6 + 7', '13', '2021-06-05 01:17:39', '2021-06-05 01:17:39'),
(31, '12', 'All', '5 + 4', '9', '2021-06-05 01:20:10', '2021-06-05 01:20:10'),
(32, '12', 'All', '10 + 7', '17', '2021-06-05 11:55:11', '2021-06-05 11:55:11'),
(33, '12', 'All', '4 + 3', '7', '2021-06-05 11:55:14', '2021-06-05 11:55:14'),
(34, '12', 'All', '6 + 1', '7', '2021-06-05 11:55:16', '2021-06-05 11:55:16'),
(35, '12', 'All', '5 + 7', '12', '2021-06-05 11:55:17', '2021-06-05 11:55:17'),
(36, '12', 'All', '6 + 8', '14', '2021-06-05 11:55:18', '2021-06-05 11:55:18'),
(37, '12', 'All', '1 + 8', '9', '2021-06-05 11:55:19', '2021-06-05 11:55:19'),
(38, '12', 'All', '9 + 4', '13', '2021-06-05 11:55:20', '2021-06-05 11:55:20'),
(39, '12', 'All', '6 + 3', '9', '2021-06-05 11:55:27', '2021-06-05 11:55:27'),
(40, '12', 'All', '5 + 2', '7', '2021-06-05 12:08:07', '2021-06-05 12:08:07'),
(41, '12', 'All', '9 + 9', '18', '2021-06-05 12:09:22', '2021-06-05 12:09:22'),
(42, '12', 'All', '1 + 1', '2', '2021-06-05 12:11:02', '2021-06-05 12:11:02'),
(43, '12', 'All', '2 + 4', '6', '2021-06-05 12:16:40', '2021-06-05 12:16:40'),
(44, '12', 'All', '10 + 5', '15', '2021-06-05 12:18:33', '2021-06-05 12:18:33'),
(45, '12', 'All', '4 + 9', '13', '2021-06-05 12:18:43', '2021-06-05 12:18:43'),
(46, '12', 'All', '2 + 1', '3', '2021-06-06 08:21:08', '2021-06-06 08:21:08'),
(47, '12', 'All', '4 + 6', '10', '2021-06-06 08:21:10', '2021-06-06 08:21:10'),
(48, '12', 'All', '8 + 1', '9', '2021-06-06 08:21:12', '2021-06-06 08:21:12'),
(49, '12', 'All', '9 + 5', '14', '2021-06-06 08:21:27', '2021-06-06 08:21:27'),
(50, '12', 'All', '3 + 10', '13', '2021-06-06 08:36:08', '2021-06-06 08:36:08'),
(51, '12', 'All', '3 + 2', '5', '2021-06-06 08:52:38', '2021-06-06 08:52:38'),
(52, '12', 'All', '2 + 1', '3', '2021-06-06 09:00:34', '2021-06-06 09:00:34'),
(53, '12', 'All', '10 + 4', '14', '2021-06-07 00:19:38', '2021-06-07 00:19:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_04_134457_create_messages_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('noeliamartos2001@gmail.com', '$2y$10$yCAZ3vd7XGjNLzc3D/.xku.jEVyyqjY/.fUxAbPx/BXrtzigz44HG', '2021-06-02 07:27:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cognoms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Cognoms',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `cognoms`, `email`, `imagen`, `admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Noe', 'Martos', 'noeliamartos@gmail.com', NULL, 1, NULL, '$2y$10$xWDXIVcBxj4x8/WV/nLAVeyuLxdytQWJb.k5fUTX4DbRzPTSt495O', NULL, '2021-06-03 13:26:37', '2021-06-03 13:26:37'),
(6, 'Noelia', 'Martos Garcia', '2@gmail.com', 'public/image.JPG', 0, NULL, '$2y$10$ETJ5RWAJei0nk1km2Spjq.bMMSpEfOklp3KuhcEHFp5yViyznxrWe', 'y8FOMumirdb0gr4cI5wvWtOMQU4C6uxCHAXW0JiZgCtfpoCNej98JN2jgp4O', '2021-06-03 15:01:41', '2021-06-03 15:01:41'),
(12, 'admin', 'Cognoms', 'admin@gmail.com', 'public/image.JPG', 1, NULL, '$2y$10$xWDXIVcBxj4x8/WV/nLAVeyuLxdytQWJb.k5fUTX4DbRzPTSt495O', 'yLJXm9juEnMqtAYJZ0UBSeaY0n1M5GKl5RsQbdMh2XFUL90T04lybLfoKiKX', '2021-06-04 23:27:22', '2021-06-04 23:27:22'),
(14, 'test', 'Cognoms', 'test@gmail.com', 'public/image.JPG', 0, NULL, '$2y$10$khvH.Bnkp2w1dymc5wueS.g4ltxhURKxnue4VT82/Cyg/upXravBK', NULL, '2021-06-06 09:21:24', '2021-06-06 09:21:24'),
(15, 'Noelia', 'Martos', 'noeliamartos2001@gmail.com', NULL, 1, NULL, '$2y$10$6c.00.8f6tw48yTViu1ikua6g6A1USDJ5wec2zHULhpFzXdTOqU9i', NULL, '2021-06-06 09:23:18', '2021-06-06 09:23:18'),
(16, 'Noadmin', 'Cognoms', 'no@gmail.com', NULL, 0, NULL, '$2y$10$iD1R2y.lnauQ8WflMFIy5exR9jmtF2ZpfUmBJEmxdesYyw5MAPLXK', NULL, '2021-06-07 00:18:14', '2021-06-07 00:18:14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
