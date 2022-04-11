-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 01:37 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hc_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `name`, `number`, `created_at`, `updated_at`, `data`) VALUES
(1, 'Sanjay Kumar', '10', NULL, NULL, NULL),
(2, 'Vijay Kumar', '12', NULL, NULL, NULL),
(3, 'Ashish Kumar', '14', NULL, NULL, NULL),
(4, 'Dhananjay Negi', '16', NULL, NULL, NULL),
(5, 'numquam', '65', '2022-04-10 19:58:58', '2022-04-10 19:58:58', NULL),
(6, 'commodi', '83', '2022-04-10 19:58:58', '2022-04-10 19:58:58', NULL),
(7, 'et', '71', '2022-04-10 19:58:58', '2022-04-10 19:58:58', NULL),
(8, 'illum', '93', '2022-04-10 19:58:58', '2022-04-10 19:58:58', NULL),
(9, 'vero', '14', '2022-04-10 19:58:58', '2022-04-10 19:58:58', NULL),
(10, 'quia', '76', '2022-04-10 19:58:58', '2022-04-10 19:58:58', NULL),
(11, 'illum', '38', '2022-04-10 19:58:58', '2022-04-10 19:58:58', NULL),
(12, 'modi', '70', '2022-04-10 19:58:58', '2022-04-10 19:58:58', NULL),
(13, 'possimus', '69', '2022-04-10 19:58:58', '2022-04-10 19:58:58', NULL),
(14, 'quidem', '91', '2022-04-10 19:58:58', '2022-04-10 19:58:58', NULL),
(15, 'impedit', '71', '2022-04-10 19:59:10', '2022-04-10 19:59:10', NULL),
(16, 'voluptatem', '4', '2022-04-10 19:59:10', '2022-04-10 19:59:10', NULL),
(17, 'qui', '67', '2022-04-10 19:59:10', '2022-04-10 19:59:10', NULL),
(18, 'suscipit', '7', '2022-04-10 19:59:10', '2022-04-10 19:59:10', NULL),
(19, 'aut', '46', '2022-04-10 19:59:10', '2022-04-10 19:59:10', NULL),
(20, 'corrupti', '31', '2022-04-10 19:59:10', '2022-04-10 19:59:10', NULL),
(21, 'iste', '17', '2022-04-10 19:59:10', '2022-04-10 19:59:10', NULL),
(22, 'atque', '63', '2022-04-10 19:59:10', '2022-04-10 19:59:10', NULL),
(23, 'mollitia', '69', '2022-04-10 19:59:10', '2022-04-10 19:59:10', NULL),
(24, 'sunt', '92', '2022-04-10 19:59:10', '2022-04-10 19:59:10', NULL),
(25, 'alias', '66', '2022-04-10 20:01:51', '2022-04-10 20:01:51', NULL),
(26, 'quo', '19', '2022-04-10 20:01:51', '2022-04-10 20:01:51', NULL),
(27, 'voluptatem', '68', '2022-04-10 20:01:51', '2022-04-10 20:01:51', NULL),
(28, 'sed', '7', '2022-04-10 20:01:51', '2022-04-10 20:01:51', NULL),
(29, 'ut', '39', '2022-04-10 20:01:51', '2022-04-10 20:01:51', NULL),
(30, 'id', '80', '2022-04-10 20:01:51', '2022-04-10 20:01:51', NULL),
(31, 'debitis', '55', '2022-04-10 20:01:51', '2022-04-10 20:01:51', NULL),
(32, 'quos', '46', '2022-04-10 20:01:51', '2022-04-10 20:01:51', NULL),
(33, 'impedit', '63', '2022-04-10 20:01:51', '2022-04-10 20:01:51', NULL),
(34, 'quod', '55', '2022-04-10 20:01:51', '2022-04-10 20:01:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manuals`
--

CREATE TABLE `manuals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jsontype` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`jsontype`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manuals`
--

INSERT INTO `manuals` (`id`, `data`, `created_at`, `updated_at`, `name`, `email`, `jsontype`) VALUES
(1, '{\"name\":\"a\",\"email\":\"a\",\"mobile_number\":\"a\"}', NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, '{\"_token\":\"S4IJycTVw97PXJ3zCotnwusovICrqzc3gjWzklnv\",\"name\":\"teste\",\"price\":\"100\",\"properties\":[{\"key\":null,\"value\":null},{\"key\":null,\"value\":null},{\"key\":null,\"value\":null},{\"key\":null,\"value\":null},{\"key\":null,\"value\":null}]}'),
(3, NULL, NULL, NULL, NULL, NULL, '{\"_token\":\"S4IJycTVw97PXJ3zCotnwusovICrqzc3gjWzklnv\",\"name\":null,\"price\":null,\"properties\":[{\"key\":\"xx\",\"value\":\"xx\"},{\"key\":null,\"value\":null},{\"key\":null,\"value\":null},{\"key\":null,\"value\":null},{\"key\":null,\"value\":null}]}'),
(4, NULL, NULL, NULL, 'Antonio', 'teste@teste', NULL),
(5, NULL, NULL, NULL, 'Sara', 'asdad@2asdad', NULL),
(6, NULL, NULL, NULL, 'Zecas', 'rrr@asdas', NULL),
(7, NULL, NULL, NULL, 'Serafim', 'ppp@pppp', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_08_230426_create_houses_table', 1),
(6, '2022_04_08_230441_create_rooms_table', 1),
(7, '2022_04_09_133022_create_xml_data_table', 1),
(8, '2022_04_09_225734_add_datajson_to_houses_table', 1),
(9, '2022_04_09_230422_create_manuals_table', 1),
(10, '2022_04_10_115007_add_xml_name_xml_email_to_manuals_table', 1),
(11, '2022_04_10_141935_add_jsontype_to_manuals_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `house_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `house_id`, `name`, `size`, `created_at`, `updated_at`) VALUES
(1, '1', 'Dr. Myah Wiza', '733', '2022-04-10 20:01:51', '2022-04-10 20:01:51'),
(2, '1', 'Hershel Kshlerin', '173', '2022-04-10 20:01:51', '2022-04-10 20:01:51'),
(3, '1', 'Mr. Dane Hudson', '471', '2022-04-10 20:01:51', '2022-04-10 20:01:51'),
(4, '1', 'Maymie Reichel', '2', '2022-04-10 20:01:51', '2022-04-10 20:01:51'),
(5, '1', 'Abe Hyatt', '739', '2022-04-10 20:01:51', '2022-04-10 20:01:51'),
(6, '1', 'Christian West', '65', '2022-04-10 20:01:51', '2022-04-10 20:01:51'),
(7, '1', 'Laron Nitzsche', '166', '2022-04-10 20:01:51', '2022-04-10 20:01:51'),
(8, '1', 'Dr. Janie Klein II', '421', '2022-04-10 20:01:51', '2022-04-10 20:01:51'),
(9, '1', 'Dr. Tremaine Turner MD', '519', '2022-04-10 20:01:51', '2022-04-10 20:01:51'),
(10, '1', 'Michaela Willms', '651', '2022-04-10 20:01:51', '2022-04-10 20:01:51'),
(11, '1', 'Sala Branca', '10', NULL, NULL),
(12, '1', 'Sala Azul', '12', NULL, NULL),
(13, '1', 'Sala Preta', '14', NULL, NULL),
(14, '1', 'Sala Verde', '16', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Boyd Goldner', 'cbreitenberg@example.net', '2022-04-10 20:01:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RsZ7eH1GP6', '2022-04-10 20:01:51', '2022-04-10 20:01:51'),
(2, 'Ellen Klocko Sr.', 'nienow.tabitha@example.org', '2022-04-10 20:01:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HYaWTvxXXg', '2022-04-10 20:01:51', '2022-04-10 20:01:51'),
(3, 'Magnus Weber II', 'kutch.jamaal@example.net', '2022-04-10 20:01:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3aZOe57L5W', '2022-04-10 20:01:51', '2022-04-10 20:01:51'),
(4, 'Hayden Mosciski II', 'amir46@example.org', '2022-04-10 20:01:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Z09tYvPTGI', '2022-04-10 20:01:51', '2022-04-10 20:01:51'),
(5, 'Mrs. Herminia D\'Amore MD', 'pearline.stoltenberg@example.com', '2022-04-10 20:01:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jPWUHcD257', '2022-04-10 20:01:51', '2022-04-10 20:01:51'),
(6, 'Leonardo Aufderhar', 'amely99@example.net', '2022-04-10 20:01:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WRnkHapHnt', '2022-04-10 20:01:51', '2022-04-10 20:01:51'),
(7, 'Joan Weber', 'isabella75@example.org', '2022-04-10 20:01:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'E3SmnrvDWU', '2022-04-10 20:01:51', '2022-04-10 20:01:51'),
(8, 'Phoebe Rutherford', 'darien86@example.net', '2022-04-10 20:01:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'w7m6MSztLK', '2022-04-10 20:01:51', '2022-04-10 20:01:51'),
(9, 'Cheyanne Bosco II', 'whand@example.org', '2022-04-10 20:01:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'VdS3SUnPq7', '2022-04-10 20:01:51', '2022-04-10 20:01:51'),
(10, 'Emilie Hackett', 'rkautzer@example.org', '2022-04-10 20:01:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0BQLShwMmw', '2022-04-10 20:01:51', '2022-04-10 20:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `xml_data`
--

CREATE TABLE `xml_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_videos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `xml_data`
--

INSERT INTO `xml_data` (`id`, `name`, `category`, `price`, `total_videos`) VALUES
(1, 'WordPress Theme Development', 'WordPress', 'Free', 35),
(2, 'WordPress Plugin Development', 'WordPress', 'Free', 50),
(3, 'Node Js with Sequelize ORM', 'NodeJs', '$10', 89),
(4, 'CakePHP 4.x Admin Panel development', 'CakePHP 4', '$9', 79),
(5, 'WordPress Theme Development', 'WordPress', 'Free', 35),
(6, 'WordPress Plugin Development', 'WordPress', 'Free', 50),
(7, 'Node Js with Sequelize ORM', 'NodeJs', '$10', 89),
(8, 'CakePHP 4.x Admin Panel development', 'CakePHP 4', '$9', 79);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manuals`
--
ALTER TABLE `manuals`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `xml_data`
--
ALTER TABLE `xml_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `manuals`
--
ALTER TABLE `manuals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `xml_data`
--
ALTER TABLE `xml_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
