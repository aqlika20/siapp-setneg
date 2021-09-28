-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 06:30 PM
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
(20, '2021_09_14_164243_create_periodes', 3),
(21, '2014_10_12_100000_create_password_resets_table', 4),
(22, '2021_09_27_102005_create_pengangkatan_pemberhentian_jfkus', 5);

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
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '12345', '15-Sep-2021', 'Budi', NULL, 123456789, 'Setiawan', 'Bandung', '15-Sep-2021', 'S1', 'Pemerintahan', NULL, '2', '15-Sep-2021', '15-Sep-2021', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30-AD', 'Supreme Being', NULL, NULL, '15-Sep-2021', 'Floor Guardians', '2', '15-Sep-2021', '5', '5', '1', NULL, NULL, '15-Sep-2021', 'Hail Ainz-Sama', '1', 'Prosess', '2021-09-15 03:34:11', '2021-09-20 09:37:54'),
(62, 'B-17/07/19', '20-Sep-2021', 'Budi', NULL, 111111, 'Setiawan', 'Bandung', '20-Sep-2021', 'S1', 'Pemerintahan', NULL, '2', '20-Sep-2021', '20-Sep-2021', '2', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '33-AD', 'Supreme Being', NULL, NULL, '20-Sep-2021', 'Floor Guardians', '2', '20-Sep-2021', '5', '5', '1', NULL, NULL, '20-Sep-2021', 'sda', '1', 'Prosess', '2021-09-20 04:09:28', '2021-09-20 09:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `pengangkatan_pemberhentian_jfkus`
--

CREATE TABLE `pengangkatan_pemberhentian_jfkus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_surat_usulan` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_surat_usulan` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pejabat_menandatangani` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_data_usulan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_terakhir` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instansi_induk` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instansi_pengusul` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pangkat_gol` int(11) DEFAULT NULL,
  `tmt_gol` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_nota_usulan_asn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_pak` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_pak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_angka_kredit` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `periode_penilaian` int(11) DEFAULT NULL,
  `file_data_pak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_klarifikasi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_klarifikasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_klarifikasi_pak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_pak_terakhir` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_pak_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_angka_kredit_terakhir` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `periode_penilaian_terakhir` int(11) DEFAULT NULL,
  `file_data_pak_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_fungsional` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_keppress_jabatan_fungsional` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_data_jabatan_fungsional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_data_jabatan_fungsional_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_ba_pengambilan_sumpah_pelantikan_fungsional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt_jabatan_fungsional` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_kerja_fungsional` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_penerimaan_keppres` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alasan_pemberhentian` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket_alasan_pemberhentian` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt_pemberhentian` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_pendukung_pemberhentian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_catatan_pemberhentian` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan_pemberhentian` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket_pemberhentian` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_sk_jabatan` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt_jabatan` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_kerja` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_data_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_lama` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_sk_jabatan_lama` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt_jabatan_lama` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_kerja_lama` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_data_jabatan_lama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_baru` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_kerja_baru` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_data_jabatan_baru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_surat_rekomendasi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_surat_rekomendasi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_data_rekomendasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_surat_pernyataan_rekomendasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_data_kompetensi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_sertifikat` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_sertifikat` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_data_kompetensi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terisi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sisa` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_formasi_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_skp_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_skp_2_dukungan_lainnya` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_catatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_layanan` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengangkatan_pemberhentian_jfkus`
--

INSERT INTO `pengangkatan_pemberhentian_jfkus` (`id`, `tgl_surat_usulan`, `no_surat_usulan`, `pejabat_menandatangani`, `file_data_usulan`, `nip`, `nama`, `tempat_lahir`, `tanggal_lahir`, `pendidikan_terakhir`, `instansi_induk`, `instansi_pengusul`, `pangkat_gol`, `tmt_gol`, `file_nota_usulan_asn`, `nomor_pak`, `tanggal_pak`, `jumlah_angka_kredit`, `periode_penilaian`, `file_data_pak`, `nomor_klarifikasi`, `tanggal_klarifikasi`, `file_klarifikasi_pak`, `nomor_pak_terakhir`, `tanggal_pak_terakhir`, `jumlah_angka_kredit_terakhir`, `periode_penilaian_terakhir`, `file_data_pak_terakhir`, `jabatan_fungsional`, `no_keppress_jabatan_fungsional`, `file_data_jabatan_fungsional`, `file_data_jabatan_fungsional_2`, `file_ba_pengambilan_sumpah_pelantikan_fungsional`, `tmt_jabatan_fungsional`, `unit_kerja_fungsional`, `tgl_penerimaan_keppres`, `alasan_pemberhentian`, `ket_alasan_pemberhentian`, `tmt_pemberhentian`, `file_pendukung_pemberhentian`, `tgl_catatan_pemberhentian`, `catatan_pemberhentian`, `ket_pemberhentian`, `jabatan`, `no_sk_jabatan`, `tmt_jabatan`, `unit_kerja`, `file_data_jabatan`, `jabatan_lama`, `no_sk_jabatan_lama`, `tmt_jabatan_lama`, `unit_kerja_lama`, `file_data_jabatan_lama`, `jabatan_baru`, `unit_kerja_baru`, `file_data_jabatan_baru`, `no_surat_rekomendasi`, `tgl_surat_rekomendasi`, `file_data_rekomendasi`, `file_surat_pernyataan_rekomendasi`, `jabatan_data_kompetensi`, `nomor_sertifikat`, `tgl_sertifikat`, `file_data_kompetensi`, `jumlah`, `terisi`, `sisa`, `file_formasi_jabatan`, `file_skp_2`, `file_skp_2_dukungan_lainnya`, `tanggal_catatan`, `catatan`, `ket`, `jenis_layanan`, `status`, `created_at`, `updated_at`) VALUES
(8, '27-Sep-2021', 'sdasdas', 'dasdas', '32654905856711-mock-up-KP-(1).pdf,32654905856879-Mockup-JFKU-(2).pdf', 312312312, 'sdasdad', 'dsadasdas', '27-Sep-2021', 'dasdasdas', 'sadasd', 'asdasd', 1, '27-Sep-2021', '32654905856993-Mockup-JFKU-(2).pdf', 'dasdasdas', '27-Sep-2021', 'dsadasda', 1, '32654905857115-High-level-diagram.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dasdasda', 'asdasda', '32654905857155-20210912_Review1.pdf,32654905857174-analisis-kebutuhan-SIAPP.jpg', NULL, '32654905857191-probis-SIAPP.JPG', '27-Sep-2021', 'dasdasdas', NULL, 'on', 'dasdasd', '27-Sep-2021', '32654905857209-mock-up-KP-(1).pdf,32654905857302-Mockup-JFKU-(2).pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '27-Sep-2021', '27-Sep-2021', '1,4,6', 2, 1, '2021-09-27 12:21:32', '2021-09-27 12:21:32'),
(9, '28-Sep-2021', 'dsadas', 'dsadas', '32655976491167-20210912_Review1.pdf,32655976491261-analisis-kebutuhan-SIAPP.jpg', 232131, 'sdADadasd', 'sdasd', '28-Sep-2021', 'dsadas', 'sdassd', 'sdas', 1, '28-Sep-2021', '32655976491280-20210912_Review1.pdf,32655976491300-analisis-kebutuhan-SIAPP.jpg', 'dsadasd', '28-Sep-2021', 'sdasdas', 1, '32655976491321-20210912_Review1.pdf,32655976491347-analisis-kebutuhan-SIAPP.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dsadasd', 'dsadas', '32655976491370-20210912_Review1.pdf,32655976491391-analisis-kebutuhan-SIAPP.jpg', NULL, '32655976491412-20210912_Review1.pdf,32655976491438-analisis-kebutuhan-SIAPP.jpg', '28-Sep-2021', 'asdasdas', NULL, 'on', 'dad', '30-Sep-2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '28-Sep-2021,28-Sep-2021,28-Sep-2021', '28-Sep-2021,28-Sep-2021,28-Sep-2021', '1,2,4,6,7', 2, 1, '2021-09-28 03:13:44', '2021-09-28 03:13:44'),
(10, '30-Sep-2021', '1234567', 'dsadas', NULL, 2312312, 'sdada', 'sdaasd', '28-Sep-2021', 'dsadasd', 'sdasd', 'sdadas', 2, '28-Sep-2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sadasd', '23zda', NULL, NULL, NULL, '28-Sep-2021', 'dsadasd', NULL, 'on', 'sdasd', '28-Sep-2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '28-Sep-2021', 'dasda,sadasd', '1', 2, 1, '2021-09-28 03:47:12', '2021-09-28 03:47:12'),
(19, '29-Sep-2021', 'dsdasdasd', 'sadasdsad', NULL, 2312321312, 'sdadasd', 'sdasdasd', '28-Sep-2021', 'sdasdas', 'dasdasd', 'dasdas', 1, '28-Sep-2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dsadas', 'dasdasd', NULL, NULL, NULL, '21-Sep-2021', 'dasdsada', NULL, 'on', 'sdasdad', '28-Sep-2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '29-Sep-2021', 'dsadasdas,dsadasd', '1,2,5,6', 2, 1, '2021-09-28 03:54:11', '2021-09-28 03:54:11'),
(20, '30-Aug-2021', '31312312', 'dasdasdas', '32656341544030-20210912_Review1.pdf,32656341547428-analisis-kebutuhan-SIAPP.jpg', 2313123, 'sdsdada', 'sdasda', '28-Sep-2021', 'dsadasd', 'sdasd', 'dsadas', 1, '28-Sep-2021', '32656341547442-analisis-kebutuhan-SIAPP.jpg', 'sdasdsadas', '28-Sep-2021', 'sadasdasd', 1, '32656341547456-report-VA-01-09-2021.pdf', 'sdasdasd', '28-Sep-2021', '32656341547485-report-VA-01-09-2021.pdf', NULL, NULL, NULL, NULL, NULL, 'sdsadasd', 'dsadas', '32656341547518-mock-up-KP-(1).pdf,32656341547615-Mockup-JFKU-(2).pdf', '32656341547743-High-level-diagram.pdf', NULL, 'dsadasdasdsaqwe', '28-Sep-2021', NULL, '7', 'asdasdasda', NULL, '32656341547780-analisis-kebutuhan-SIAPP.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '28-Sep-2021,28-Sep-2021', 'sadsadas,sdadasdas', '1,2,3,4,5', 5, 1, '2021-09-28 08:17:57', '2021-09-28 08:17:57'),
(21, '21-Sep-2021', 'sdsad', 'dasdsad', NULL, 231313, 'dasdas', 'sdasd', '28-Sep-2021', 'dsadsa', 'dsad', 'sdasd', 2, '28-Sep-2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dsadasd', 'dsadasd', NULL, NULL, NULL, '28-Sep-2021', 'dasdasda', NULL, '2', 'sdasd', '28-Sep-2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '28-Sep-2021', 'sdasdasd', '1,2,3,4', 2, 1, '2021-09-28 09:40:01', '2021-09-28 09:40:01');

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
(1, 'PIC', '2021-09-13 01:57:16'),
(2, 'Koordinator Pokja', '2021-09-13 02:29:09'),
(3, 'JF Ahli Muda', '2021-09-13 02:30:06'),
(4, 'JF Ahli Madya', '2021-09-13 02:30:06'),
(5, 'Kepala Biro', '2021-09-28 16:08:11');

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
(1, 'PIC - Nama', '111111', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 1, 'RpWzZznBHl9bJstieUfL9JIF7K00EmxZDoSFixe7BgcWZjFU9Cj7rTr0fLwd', '2021-09-12 15:01:55', '2021-09-28 16:18:01'),
(2, 'Koordinator Pokja - Nama', '123456', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 2, NULL, '2021-09-26 16:03:36', '2021-09-28 16:18:01'),
(3, 'Kepala Biro - Nama', '654321', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 3, NULL, '2021-09-26 16:33:45', '2021-09-28 16:18:01');

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_nip_index` (`nip`);

--
-- Indexes for table `pengangkatans`
--
ALTER TABLE `pengangkatans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pengangkatans_no_surat_usulan_unique` (`no_surat_usulan`),
  ADD UNIQUE KEY `pengangkatans_nip_unique` (`nip`),
  ADD UNIQUE KEY `pengangkatans_no_keppres_jabatan_unique` (`no_keppres_jabatan`);

--
-- Indexes for table `pengangkatan_pemberhentian_jfkus`
--
ALTER TABLE `pengangkatan_pemberhentian_jfkus`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `pengangkatan_pemberhentian_jfkus`
--
ALTER TABLE `pengangkatan_pemberhentian_jfkus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `periodes`
--
ALTER TABLE `periodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
