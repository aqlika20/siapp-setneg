-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 08:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_asn`
--

CREATE TABLE `data_asn` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_nota_usul_asn_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat_gol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmt_gol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmt_cpns` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_kerja_golongan_thn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_kerja_golongan_bln` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_nota_usul_asn_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_jabatan`
--

CREATE TABLE `data_jabatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_keppres_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_ba_pengambilan_sumpah_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmt_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_pak`
--

CREATE TABLE `data_pak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_pak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_angka_kredit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `periode_penilaian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_data_pak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_usulan`
--

CREATE TABLE `data_usulan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_surat_usulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat_usulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pejabat_ttd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_usulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `klarifikasi_pak`
--

CREATE TABLE `klarifikasi_pak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor_klarifikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_klarifikasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_klarifikasi_pak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
(1, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(2, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(3, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(4, '2016_06_01_000004_create_oauth_clients_table', 1),
(5, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(6, '2021_09_12_121459_create_data_usulan', 1),
(7, '2021_09_12_122729_create_data_asn', 1),
(8, '2021_09_12_123421_create_data_jabatan', 1),
(9, '2021_09_12_123722_create_pangkat_baru', 1),
(10, '2014_07_26_074500_create_roles_table', 2),
(16, '2021_09_14_083033_create_pengangkatans', 3),
(17, '2021_09_14_084643_create_data_pak', 3),
(18, '2021_09_14_084657_create_klarifikasi_pak', 3),
(19, '2021_09_14_150206_create_pangkat_gols', 3),
(20, '2021_09_14_164243_create_periodes', 3);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pangkat_baru`
--

CREATE TABLE `pangkat_baru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pangkat_gol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmt_gol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_kerja_gol_thn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_kerja_gol_bln` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode_kenaikan_pangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_data_pendukung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tambah_catatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_catatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pangkat_gols`
--

CREATE TABLE `pangkat_gols` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pangkat_gols`
--

INSERT INTO `pangkat_gols` (`id`, `name`, `golongan`, `ruang`, `created_at`, `updated_at`) VALUES
(1, 'Juru Muda', 'I', 'a', '2021-09-14 10:47:05', '2021-09-14 10:47:05'),
(2, 'Juru Muda Tingkat 1', 'I', 'b', '2021-09-14 10:47:05', '2021-09-14 10:47:05'),
(3, 'Juru', 'I', 'c', '2021-09-14 10:59:16', '2021-09-14 10:59:16'),
(4, 'Juru Tingkat 1', 'I', 'd', '2021-09-14 10:59:16', '2021-09-14 10:59:16'),
(5, 'Pengatur Muda', 'II', 'a', '2021-09-14 10:59:16', '2021-09-14 10:59:16'),
(6, 'Pengatur Muda Tingkat 1', 'II', 'b', '2021-09-14 10:59:16', '2021-09-14 10:59:16'),
(7, 'Pengatur', 'II', 'c', '2021-09-14 10:59:16', '2021-09-14 10:59:16'),
(8, 'Pengatur Tingkat 1', 'II', 'd', '2021-09-14 10:59:16', '2021-09-14 10:59:16'),
(9, 'Penata Muda', 'III', 'a', '2021-09-14 11:06:15', '2021-09-14 11:06:15'),
(10, 'Penata Muda Tingkat 1', 'III', 'b', '2021-09-14 11:06:15', '2021-09-14 11:06:15'),
(11, 'Penata ', 'III', 'c', '2021-09-14 11:06:15', '2021-09-14 11:06:15'),
(12, 'Penata Tingkat 1', 'III', 'd', '2021-09-14 11:06:15', '2021-09-14 11:06:15'),
(13, 'Pembina', 'IV', 'a', '2021-09-14 11:09:53', '2021-09-14 11:09:53'),
(14, 'Pembina Tingkat 1', 'IV', 'b', '2021-09-14 11:09:53', '2021-09-14 11:09:53'),
(15, 'Pembina Utama Muda', 'IV', 'c', '2021-09-14 11:09:53', '2021-09-14 11:09:53'),
(16, 'Pembina Utama Madya', 'IV', 'd', '2021-09-14 11:09:53', '2021-09-14 11:09:53'),
(17, 'Pembina Utama', 'IV', 'e', '2021-09-14 11:09:53', '2021-09-14 11:09:53');

-- --------------------------------------------------------

--
-- Table structure for table `pengangkatans`
--

CREATE TABLE `pengangkatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_surat_usulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat_usulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pejabat_ttd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_usulan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instansi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_nota_usul_asn_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pangkat_gol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmt_gol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmt_cpns` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_kerja_golongan_thn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_kerja_golongan_bln` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_nota_usul_asn_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_pak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_pak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_angka_kredit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `periode_penilaian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_data_pak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_klarifikasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_klarifikasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_klarifikasi_pak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_keppres_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_ba_pengambilan_sumpah_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat_gol_baru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmt_gol_baru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_kerja_gol_thn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_kerja_gol_bln` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode_kenaikan_pangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_data_pendukung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tambah_catatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_catatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_usulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengangkatans`
--

INSERT INTO `pengangkatans` (`id`, `no_surat_usulan`, `tanggal_surat_usulan`, `pejabat_ttd`, `file_usulan`, `nip`, `nama`, `tempat_lahir`, `tanggal_lahir`, `pendidikan_terakhir`, `instansi`, `file_nota_usul_asn_1`, `pangkat_gol`, `tmt_gol`, `tmt_cpns`, `masa_kerja_golongan_thn`, `masa_kerja_golongan_bln`, `file_nota_usul_asn_2`, `nomor_pak`, `tanggal_pak`, `jumlah_angka_kredit`, `periode_penilaian`, `file_data_pak`, `nomor_klarifikasi`, `tanggal_klarifikasi`, `file_klarifikasi_pak`, `no_keppres_jabatan`, `jabatan`, `file_jabatan`, `file_ba_pengambilan_sumpah_jabatan`, `tmt_jabatan`, `unit_kerja`, `pangkat_gol_baru`, `tmt_gol_baru`, `masa_kerja_gol_thn`, `masa_kerja_gol_bln`, `periode_kenaikan_pangkat`, `file_data_pendukung`, `tambah_catatan`, `tanggal_catatan`, `catatan`, `jenis_usulan`, `status`, `created_at`, `updated_at`) VALUES
(1, '12345', '15-Sep-2021', 'Budi', NULL, 123456789, 'Setiawan', 'Bandung', '15-Sep-2021', 'S1', 'Pemerintahan', NULL, '2', '15-Sep-2021', '15-Sep-2021', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30-AD', 'Supreme Being', NULL, NULL, '15-Sep-2021', 'Floor Guardians', '2', '15-Sep-2021', '5', '5', '1', NULL, NULL, '15-Sep-2021', 'Hail Ainz-Sama', 'Pengangkatan dan Pemberhentian Pejabat Fungsional Keahlian Utama', 'Prosess', '2021-09-15 03:34:11', '2021-09-16 03:07:43'),
(57, 'B-17/07/19', '16-Sep-2021', 'Budi', '[\"32635523767775-High-level-diagram.pdf\",\"32635523767897-mock-up-KP-(1).pdf\",\"32635523767978-Mockup-JFKU-(2).pdf\"]', 111111, 'Setiawan', 'Bandung', '16-Sep-2021', 'S1', 'Pemerintahan', NULL, '2', '16-Sep-2021', '16-Sep-2021', '2', '5', '[\"32635523768094-High-level-diagram.pdf\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '35-AD', 'Supreme Being', '[\"32635523768141-High-level-diagram.pdf\"]', '[\"32635523768184-High-level-diagram.pdf\"]', '16-Sep-2021', 'Floor Guardians', '2', '16-Sep-2021', '5', '5', '2', '[\"32635523768223-High-level-diagram.pdf\"]', '[\"32635523768262-High-level-diagram.pdf\"]', '16-Sep-2021', 'dsdas', 'Pengangkatan dan Pemberhentian Pejabat Fungsional Keahlian Utama', 'Prosess', '2021-09-16 07:09:48', '2021-09-16 07:22:22'),
(59, 'B-17/07/21', '16-Sep-2021', 'Budi', '[\"32635539005687-High-level-diagram.pdf\",\"32635539005844-mock-up-KP-(1).pdf\",\"32635539005935-Mockup-JFKU-(2).pdf\"]', 1234567, 'Setiawan', 'Bandung', '16-Sep-2021', 'S1', 'Pemerintahan', '[\"32635539006054-High-level-diagram.pdf\",\"32635539006097-mock-up-KP-(1).pdf\"]', '1', '16-Sep-2021', '16-Sep-2021', '2', '5', '[\"32635539006186-Mockup-JFKU-(2).pdf\"]', '21312321', '16-Sep-2021', '111111', '1', '[\"32635539006302-Data-VPS-Monitoring.xlsx\"]', '11111', '16-Sep-2021', '[\"32635539006319-Data-VPS-Monitoring.xlsx\"]', '33-AD', 'Supreme Being', '[\"32635539006335-analisis-kebutuhan-SIAPP.jpg\"]', '[\"32635539006354-probis-SIAPP.JPG\"]', '16-Sep-2021', 'Floor Guardians', '7', '16-Sep-2021', '5', '5', '1', '[\"32635539006375-analisis-kebutuhan-SIAPP.jpg\"]', '[\"32635539006398-Data-VPS-Monitoring.xlsx\"]', '16-Sep-2021', 'qeryui', 'Pengangkatan dan Pemberhentian Pejabat Fungsional Keahlian Utama', 'Prosess', '2021-09-16 07:22:30', '2021-09-16 07:22:30');

-- --------------------------------------------------------

--
-- Table structure for table `periodes`
--

CREATE TABLE `periodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `periodes`
--

INSERT INTO `periodes` (`id`, `name`, `masa_periode`, `created_at`, `updated_at`) VALUES
(1, 'Periode 1', '2 Tahun', '2021-09-14 17:50:49', '2021-09-14 17:50:49'),
(2, 'Periode 2', '4 Tahun', '2021-09-14 17:50:49', '2021-09-14 17:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`) VALUES
(1, 'Admin', '2021-09-13 01:57:16'),
(2, 'Instansi Pengusul', '2021-09-13 02:29:09'),
(3, 'Distribusi Pengusul', '2021-09-13 02:30:06'),
(4, 'Verifikator', '2021-09-13 02:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nip`, `nip_verified_at`, `password`, `roles_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', '111111', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 1, 'TO8pzKHbUZC8yCTjiw6dLuxNFz3gjvt80FQQ1cxzggV9I625oANRUC3FxGV6', '2021-09-12 15:01:55', '2021-09-16 07:11:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_asn`
--
ALTER TABLE `data_asn`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_asn_nip_unique` (`nip`);

--
-- Indexes for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_jabatan_no_keppres_jabatan_unique` (`no_keppres_jabatan`);

--
-- Indexes for table `data_pak`
--
ALTER TABLE `data_pak`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_pak_nomor_pak_unique` (`nomor_pak`);

--
-- Indexes for table `data_usulan`
--
ALTER TABLE `data_usulan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_usulan_no_surat_usulan_unique` (`no_surat_usulan`);

--
-- Indexes for table `klarifikasi_pak`
--
ALTER TABLE `klarifikasi_pak`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `klarifikasi_pak_nomor_klarifikasi_unique` (`nomor_klarifikasi`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pangkat_baru`
--
ALTER TABLE `pangkat_baru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pangkat_gols`
--
ALTER TABLE `pangkat_gols`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pangkat_gols_name_unique` (`name`);

--
-- Indexes for table `pengangkatans`
--
ALTER TABLE `pengangkatans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pengangkatans_no_surat_usulan_unique` (`no_surat_usulan`),
  ADD UNIQUE KEY `pengangkatans_nip_unique` (`nip`),
  ADD UNIQUE KEY `pengangkatans_no_keppres_jabatan_unique` (`no_keppres_jabatan`);

--
-- Indexes for table `periodes`
--
ALTER TABLE `periodes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `periodes_name_unique` (`name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_asn`
--
ALTER TABLE `data_asn`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_pak`
--
ALTER TABLE `data_pak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_usulan`
--
ALTER TABLE `data_usulan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klarifikasi_pak`
--
ALTER TABLE `klarifikasi_pak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pangkat_baru`
--
ALTER TABLE `pangkat_baru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pangkat_gols`
--
ALTER TABLE `pangkat_gols`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pengangkatans`
--
ALTER TABLE `pengangkatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `periodes`
--
ALTER TABLE `periodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
