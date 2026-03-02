-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2025 at 01:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `presensikaryawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `in` time NOT NULL,
  `out` time DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(10,7) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'diluar kantor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `date`, `user_id`, `in`, `out`, `note`, `approved`, `created_at`, `updated_at`, `latitude`, `longitude`, `status`) VALUES
(50, '2024-12-17', 4, '23:38:00', '23:39:47', 'ijin', 1, '2024-12-17 16:38:54', '2025-01-07 06:47:11', '-7.7719860', '110.4094280', 'diluar kantor'),
(52, '2024-12-25', 4, '14:52:00', '16:09:00', 'out', 1, '2024-12-25 07:52:04', '2025-01-03 15:10:07', '-7.7662215', '110.4197757', 'dalam kantor'),
(53, '2024-12-25', 4, '14:52:05', NULL, NULL, 1, '2024-12-25 07:52:05', '2025-01-03 15:09:35', '-7.7662215', '110.4197757', 'dalam kantor'),
(54, '2024-12-25', 4, '14:52:05', NULL, NULL, 1, '2024-12-25 07:52:05', '2025-01-03 15:09:35', '-7.7662215', '110.4197757', 'dalam kantor'),
(57, '2025-01-07', 4, '11:28:00', '11:29:54', 'izin pulang', 1, '2025-01-07 04:28:56', '2025-01-15 14:09:24', '-7.7662221', '110.4197759', 'dalam kantor'),
(59, '2025-01-12', 11, '14:30:00', '14:31:32', 'jam pulang', 1, '2025-01-12 07:30:23', '2025-01-12 07:35:55', '-7.7662218', '110.4197713', 'dalam kantor'),
(60, '2025-01-15', 11, '21:08:00', '21:08:49', 'ijin pulang', 1, '2025-01-15 14:08:39', '2025-01-15 14:09:14', '-7.7630801', '110.3796404', 'diluar kantor'),
(61, '2025-01-21', 11, '12:00:00', '12:00:52', 'pulang', 0, '2025-01-21 05:00:06', '2025-01-21 05:00:52', '-7.7599093', '110.4090844', 'diluar kantor'),
(62, '2025-02-04', 11, '10:00:00', '10:00:34', 'pulang', 1, '2025-02-04 03:00:21', '2025-02-04 03:19:15', '-7.7662168', '110.4197615', 'dalam kantor');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_05_005540_create_permission_tables', 1),
(6, '2024_03_05_023835_create_attendances_table', 1),
(7, '2024_03_06_130334_create_settings_table', 1),
(8, '2024_03_19_115350_create_office_maps_table', 1),
(9, '2024_12_15_add_location_to_attendance_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 17),
(1, 'App\\Models\\User', 27),
(3, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 7),
(3, 'App\\Models\\User', 9),
(3, 'App\\Models\\User', 11),
(3, 'App\\Models\\User', 12),
(3, 'App\\Models\\User', 13),
(3, 'App\\Models\\User', 14),
(3, 'App\\Models\\User', 15),
(3, 'App\\Models\\User', 16),
(3, 'App\\Models\\User', 18),
(3, 'App\\Models\\User', 26);

-- --------------------------------------------------------

--
-- Table structure for table `office_maps`
--

CREATE TABLE `office_maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `building` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'regional',
  `floor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `office_maps`
--

INSERT INTO `office_maps` (`id`, `name`, `building`, `floor`, `desc`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Petani / Pekebun', 'witel', '747', 'Quas officia voluptas doloremque.', NULL, '2024-03-21 03:36:35', '2024-03-21 03:36:35'),
(2, 'Belum / Tidak Bekerja', 'regional', '261', 'Autem eligendi veniam ut sed.', NULL, '2024-03-21 03:36:35', '2024-03-21 03:36:35'),
(3, 'Wartawan', 'msc', '912', 'Facere maiores reiciendis minima nemo aut perferendis aperiam.', NULL, '2024-03-21 03:36:35', '2024-03-21 03:36:35'),
(4, 'Notaris', 'regional', '964', 'Et aperiam aut omnis ex.', NULL, '2024-03-21 03:36:35', '2024-03-21 03:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user.index', 'web', '2024-12-17 15:47:05', '2024-12-17 15:47:05'),
(37, 'user.create', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(38, 'user.edit', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(39, 'user.delete', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(40, 'user.show', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(41, 'profile.edit', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(42, 'office.index', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(43, 'office.search', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(44, 'office.create', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(45, 'office.edit', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(46, 'office.delete', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(47, 'role.index', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(48, 'role.create', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(49, 'role.edit', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(50, 'role.delete', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(51, 'attendance.index', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(52, 'attendance.mine', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(53, 'attendance.approve', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(54, 'attendance.create', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(55, 'attendance.edit', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(56, 'attendance.delete', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(57, 'dashboard', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(58, 'home', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(59, 'profile', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(60, 'documentation', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(61, 'setting.registration-code', 'web', '2024-12-17 16:06:36', '2024-12-17 16:06:36'),
(62, 'absensi.mine', 'web', '2024-12-17 15:13:24', '2024-12-17 15:13:24'),
(64, 'absensi.edit', 'web', '2024-12-17 15:13:50', '2024-12-17 15:13:50'),
(65, 'user.download-rekap', 'web', '2024-12-17 17:48:38', '2024-12-17 17:48:38'),
(66, 'attendance.report', 'web', '2025-01-12 10:31:56', '2025-01-12 10:31:56'),
(67, 'absensi.create', 'web', '2025-01-21 04:59:01', '2025-01-21 04:59:01');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2024-12-17 15:47:05', '2024-12-17 15:47:05'),
(3, 'karyawan', 'web', '2024-12-17 15:47:05', '2024-12-17 15:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(41, 3),
(42, 1),
(43, 1),
(43, 3),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(52, 3),
(54, 3),
(55, 1),
(55, 3),
(56, 3),
(57, 1),
(58, 3),
(59, 1),
(59, 3),
(60, 1),
(60, 3),
(61, 1),
(64, 3),
(65, 1),
(65, 3),
(66, 1),
(66, 3),
(67, 3);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'registration_code', 'KGU813', '2024-03-19 07:07:26', '2024-12-16 15:28:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `alamat`, `nik`, `phone`, `photo`, `active`, `created_at`, `updated_at`) VALUES
(4, 'Ilham Syaputra', 'ilhamsyaput@presensi.com', '$2y$12$/.elMLTsd0aKXHSQrAkdq.KjLNwvU7HXU0yfEPj96hlzctWabBqf.', 'Jln Ring Road Utara', '21731878223', '082317231', NULL, 1, '2024-12-15 04:02:23', '2025-01-19 13:37:38'),
(11, 'rifky dermawan', 'rifky@presensi.com', '$2y$12$vfDxq3BkzKQ3oH2u65GiVO4w8ch0BlSpSZTM.hrp56y3nmxoAzfye', NULL, NULL, NULL, NULL, 1, '2025-01-12 07:22:28', '2025-02-04 03:29:07'),
(16, 'dava akbar', 'davaakbar@presensi.com', '$2y$12$MnosfLTSNN4n7hr0cHbP7.D7pgyPfsBb969dO1L3t4toGnVH1icnu', NULL, 'NIK0001', NULL, NULL, 1, '2025-02-04 08:46:09', '2025-02-04 08:46:09'),
(26, 'Contoh karyawan', 'karyawan@presensi.com', '$2y$12$Z7GagdAVljJb9kkX6hIYZOB0yVllYmGNo1VEu7Abijjk6Ao8.ZYhO', NULL, NULL, NULL, NULL, 1, '2025-02-05 03:39:13', '2025-02-05 03:39:13'),
(27, 'Rigel', 'administrator@presensi.com', '$2y$12$zwt11DA8pi80V/ZpxkHhx.qm/rgwvIIlS59/tCeaSxlYAMsr6huX.', 'Jln. Utama Pugeran No 57', NULL, '082351911849', NULL, 1, '2025-02-05 03:39:14', '2025-02-05 03:44:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendances_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `office_maps`
--
ALTER TABLE `office_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `office_maps`
--
ALTER TABLE `office_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `attendances_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
