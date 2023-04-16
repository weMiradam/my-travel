-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2023 pada 19.34
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytravel`
--
CREATE DATABASE IF NOT EXISTS `mytravel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mytravel`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_04_16_144642_create_database_travel', 1),
(5, '2023_04_16_145154_create_database_trainer', 1),
(6, '2023_04_16_145456_create_database_contact', 1),
(7, '2023_04_16_145647_create_database_travel_order', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `trainer`
--

CREATE TABLE `trainer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `trainer`
--

INSERT INTO `trainer` (`id`, `name`, `info_name`, `photo`, `description`, `instagram`, `twitter`, `facebook`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Adam Projo Setiyo Budi', 'Ranger Merah', 'uploads/file_1681664384.jpg', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). Where does it come from? Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham. Where can I get some? There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. 5 paragraphs words bytes lists Start with \'Lorem ipsum dolor sit amet...\'</p>', 'adamprojo', 'apsb', 'adam.projo', 'adamprojo@gmail.com', '2023-04-16 09:31:32', '2023-04-16 09:59:44'),
(2, 'Lesley Pate', 'Rama Moran', 'uploads/file_1681664376.jpg', '<p>Urban Legend Tour tuh bikin penasaran tapi takut?<br>Ush, gak usah bayangin macem-macem… kita kan cuma mau tour malam hari dan rame-rame!<br>Meski ya, tournya ke tempat yang terkenal akan kisah Urban Legend nya <img src=\"https://s.w.org/images/core/emoji/14.0.0/svg/1f47b.svg\" alt=\"👻\"><img src=\"https://s.w.org/images/core/emoji/14.0.0/svg/1f47b.svg\" alt=\"👻\"><img src=\"https://s.w.org/images/core/emoji/14.0.0/svg/1f47b.svg\" alt=\"👻\"><img src=\"https://s.w.org/images/core/emoji/14.0.0/svg/1f47b.svg\" alt=\"👻\"></p><p>Bandung Good Guide so far udah punya 5 rute dengan tematik Urban Legend. Urban Legend 1.0 ini adalah series urban legend tour pertama yang BGG keluarin pas awal launching, di tanggal 29 Februari 2020 lalu. Daaaan… masih jadi yang BEST SELLER diantara serial Urban Legend lainnya.</p>', 'Aut reiciendis repel', 'Non aut voluptatem o', 'Ut quaerat consequun', 'fehamik@mailinator.com', '2023-04-16 09:47:08', '2023-04-16 09:59:36'),
(3, 'Serina Sheppard', 'Tyrone Mack', 'uploads/file_1681664456.jpg', '<p>Urban Legend Tour tuh bikin penasaran tapi takut?<br>Ush, gak usah bayangin macem-macem… kita kan cuma mau tour malam hari dan rame-rame!<br>Meski ya, tournya ke tempat yang terkenal akan kisah Urban Legend nya <img src=\"https://s.w.org/images/core/emoji/14.0.0/svg/1f47b.svg\" alt=\"👻\"><img src=\"https://s.w.org/images/core/emoji/14.0.0/svg/1f47b.svg\" alt=\"👻\"><img src=\"https://s.w.org/images/core/emoji/14.0.0/svg/1f47b.svg\" alt=\"👻\"><img src=\"https://s.w.org/images/core/emoji/14.0.0/svg/1f47b.svg\" alt=\"👻\"></p><p>Bandung Good Guide so far udah punya 5 rute dengan tematik Urban Legend. Urban Legend 1.0 ini adalah series urban legend tour pertama yang BGG keluarin pas awal launching, di tanggal 29 Februari 2020 lalu. Daaaan… masih jadi yang BEST SELLER diantara serial Urban Legend lainnya.</p>', 'Minim suscipit tempo', 'Consequatur quos ma', 'Officia in iste cum', 'qaziviqyci@mailinator.com', '2023-04-16 09:47:23', '2023-04-16 10:00:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `travel`
--

CREATE TABLE `travel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `traner_id` smallint(6) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `seat_available` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `travel`
--

INSERT INTO `travel` (`id`, `name`, `photo`, `traner_id`, `price`, `seat_available`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(5, 'Demetrius Coleman', 'uploads/file_1681664776.jpg', 2, 380, 25, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'demetrius-coleman-1681664776', '2023-04-16 10:06:16', '2023-04-16 10:06:16'),
(6, 'Susan Berger', 'uploads/file_1681664786.jpg', 1, 846, 93, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'susan-berger-1681664786', '2023-04-16 10:06:26', '2023-04-16 10:06:26'),
(7, 'Phelan Alvarez', 'uploads/file_1681664806.jpg', 1, 701, 23, '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'phelan-alvarez-1681664806', '2023-04-16 10:06:46', '2023-04-16 10:06:46'),
(8, 'Dara Moran', 'uploads/file_1681665326.png', 3, 653, 70, '<p>Because the superbuild contains a lot of plugins, you may need to remove the plugins you do not need with the removePlugins configuration option and adjust the toolbar configuration.</p><h3>Sample implementation</h3><p>In this example, we remove the premium collaboration features as well as several other plugins that require credentials to work. We need to do this, otherwise the editor would throw an error.</p><p>&nbsp;</p><figure class=\"table\"><table><thead><tr><th>First name</th><th>Last name</th><th>Age</th></tr></thead><tbody><tr><td>Tinu</td><td>Elejogun</td><td>14</td></tr><tr><td>Javier</td><td>Zapata</td><td>28</td></tr><tr><td>Lily</td><td>McGarrett</td><td>18</td></tr><tr><td>Olatunkbo</td><td>Chijiaku</td><td>22</td></tr><tr><td>Adrienne</td><td>Anthoula</td><td>22</td></tr><tr><td>Axelia</td><td>Athanasios</td><td>22</td></tr><tr><td>Jon-Kabat</td><td>Zinn</td><td>22</td></tr><tr><td>Thabang</td><td>Mosoa</td><td>15</td></tr><tr><td>Rhian</td><td>Ellis</td><td>12</td></tr></tbody></table></figure>', 'dara-moran-1681666119', '2023-04-16 10:15:26', '2023-04-16 10:28:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tr_travel_order`
--

CREATE TABLE `tr_travel_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_transaction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `travel_id` smallint(6) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket_qty` int(11) DEFAULT NULL,
  `date_booking` date DEFAULT NULL,
  `session_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@mytravel.com', NULL, '$2y$10$v8JyYcW28.1zq1XkNPSwrO8Tj/7jis0VlBSrJn2Ihmq4d2tu32F5S', NULL, '2023-04-16 15:29:59', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tr_travel_order`
--
ALTER TABLE `tr_travel_order`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `travel`
--
ALTER TABLE `travel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tr_travel_order`
--
ALTER TABLE `tr_travel_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
