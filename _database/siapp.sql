-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 11:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `bkns`
--

CREATE TABLE `bkns` (
  `id` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bkns`
--

INSERT INTO `bkns` (`id`, `nip`, `created_at`) VALUES
(1, '23123', '2021-11-14 07:54:38'),
(3, '333333', '2021-11-14 08:01:47'),
(4, '1212121', '2021-11-14 08:01:50'),
(6, '312321', '2021-11-14 08:29:09'),
(7, '23123', '2021-11-17 05:19:20'),
(8, '	\r\n312321', '2021-11-17 08:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created_at`) VALUES
(1, 'Group 1', '2021-09-29 14:41:10'),
(2, 'Group 2', '2021-09-29 14:41:10');

-- --------------------------------------------------------

--
-- Table structure for table `jabatans`
--

CREATE TABLE `jabatans` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatans`
--

INSERT INTO `jabatans` (`id`, `nama`, `created_at`) VALUES
(1, 'Jendral', '2021-10-05 12:48:06'),
(2, 'Kolonel', '2021-10-05 12:48:06');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_layanans`
--

CREATE TABLE `jenis_layanans` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_layanans`
--

INSERT INTO `jenis_layanans` (`id`, `nama`, `created_at`) VALUES
(1, 'Pengangkatan Pejabat Fungsional Keahlian Utama', '2021-11-02 02:23:15'),
(2, 'Pemberhentian Pejabat Fungsional Keahlian Utama', '2021-11-02 02:23:15'),
(3, 'Perpindahan Pejabat Fungsional Keahlian Utama', '2021-11-02 02:23:15'),
(4, 'Ralat Keppres Jabatan Fungsional Keahlian Utama', '2021-11-02 02:23:15'),
(5, 'Pembatalan Keppres Jabatan Fungsional Keahlian Utama', '2021-11-02 02:23:15'),
(6, 'Pengangkatan Pejabat Non Struktural', '2021-11-02 02:23:15'),
(7, 'Pemberhentian Pejabat Non Struktural', '2021-11-02 02:23:15'),
(8, 'Ralat Keppres Jabatan Non Struktural', '2021-11-02 02:23:15'),
(9, 'Pembatalan Keppres Jabatan Non Struktural', '2021-11-02 02:23:15'),
(10, 'Pengangkatan Pejabat Lainnya', '2021-11-02 02:23:15'),
(11, 'Pemberhentian Pejabat Lainnya', '2021-11-02 02:23:15'),
(12, 'Ralat Keppres Jabatan Lainnya', '2021-11-02 02:23:15'),
(13, 'Pembatalan Keppres Jabatan Lainnya', '2021-11-02 02:23:15'),
(14, 'Persetujuan pengangkatan Staf Khusus Menteri/Kepala Lembaga', '2021-11-02 02:23:15'),
(15, 'Pemberian Kenaikan Pangkat', '2021-11-02 02:23:15'),
(16, 'Pembatalan Keppres Kenaikan Pangkat', '2021-11-02 02:23:15'),
(17, 'Pengesahan Kenaikan Pangkat', '2021-11-02 02:23:15'),
(18, 'Ralat Keppres Kepangkatan', '2021-11-02 02:23:15'),
(19, 'BUP Non KPP', '2021-11-02 02:23:15'),
(20, 'BUP KPP', '2021-11-02 02:23:15'),
(21, 'Berhenti Atas Permintaan Sendiri', '2021-11-02 02:23:15'),
(22, 'Non BUP Janda/Duda/Anak non KPP', '2021-11-02 02:23:15'),
(23, 'Non BUP Janda/Duda/Anak KPP', '2021-11-02 02:23:15'),
(24, 'Berhenti Tidak Dengan Hormat', '2021-11-02 02:23:15'),
(25, 'Anumerta', '2021-11-02 02:23:15'),
(26, 'Pemberhentian Sementara', '2021-11-02 02:23:15'),
(27, 'Ralat Keppres Pemberhentian', '2021-11-02 02:23:15'),
(28, 'Pembatalan Keppres Pemberhentian', '2021-11-02 02:23:15'),
(29, 'Petikan Keppres yang Hilang/Rusak', '2021-11-02 02:23:15');

-- --------------------------------------------------------

--
-- Table structure for table `kenaikan_pangkats`
--

CREATE TABLE `kenaikan_pangkats` (
  `id` int(11) NOT NULL,
  `tanggal_surat_usulan` varchar(255) DEFAULT NULL,
  `no_surat_usulan` varchar(255) DEFAULT NULL,
  `pejabat_menandatangani` varchar(255) DEFAULT NULL,
  `file_data_usulan` varchar(255) DEFAULT NULL,
  `nip` bigint(20) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` varchar(255) DEFAULT NULL,
  `pendidikan_terakhir` varchar(255) DEFAULT NULL,
  `instansi` varchar(255) DEFAULT NULL,
  `instansi_induk` varchar(255) DEFAULT NULL,
  `instansi_pengusul` varchar(255) DEFAULT NULL,
  `pangkat_gol` int(11) DEFAULT NULL,
  `tmt_gol` varchar(255) DEFAULT NULL,
  `tmt_cpns` varchar(255) DEFAULT NULL,
  `masa_kerja_gol_tahun` varchar(100) DEFAULT NULL,
  `masa_kerja_gol_bulan` varchar(100) DEFAULT NULL,
  `file_nota_usulan_asn` varchar(255) DEFAULT NULL,
  `file_nota_usulan` varchar(255) DEFAULT NULL,
  `nomor_pak` varchar(255) DEFAULT NULL,
  `tanggal_pak` varchar(255) DEFAULT NULL,
  `jumlah_angka_kredit` varchar(255) DEFAULT NULL,
  `periode_penilaian` varchar(30) DEFAULT NULL,
  `file_data_pak` varchar(255) DEFAULT NULL,
  `nomor_klarifikasi` varchar(255) DEFAULT NULL,
  `tanggal_klarifikasi` varchar(255) DEFAULT NULL,
  `file_klarifikasi_pak` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `no_keppress_jabatan` varchar(255) DEFAULT NULL,
  `tmt_jabatan` varchar(255) DEFAULT NULL,
  `unit_kerja` varchar(255) DEFAULT NULL,
  `file_jabatan` varchar(255) DEFAULT NULL,
  `file_pengambilan_sumpah` varchar(255) DEFAULT NULL,
  `pangkat_gol_baru` varchar(255) DEFAULT NULL,
  `tmt_gol_baru` varchar(255) DEFAULT NULL,
  `masa_kerja_gol_tahun_baru` varchar(255) DEFAULT NULL,
  `masa_kerja_gol_bulan_baru` varchar(255) DEFAULT NULL,
  `periode_kenaikan` varchar(30) DEFAULT NULL,
  `jabatan_lama` varchar(255) DEFAULT NULL,
  `no_sk_jabatan_lama` varchar(255) DEFAULT NULL,
  `tmt_jabatan_lama` varchar(255) DEFAULT NULL,
  `unit_kerja_lama` varchar(255) DEFAULT NULL,
  `file_data_jabatan_lama` varchar(255) DEFAULT NULL,
  `jabatan_baru` varchar(255) DEFAULT NULL,
  `unit_kerja_baru` varchar(255) DEFAULT NULL,
  `file_data_jabatan_baru` varchar(255) DEFAULT NULL,
  `jabatan_data_kompetensi` varchar(255) DEFAULT NULL,
  `nomor_sertifikat` varchar(100) DEFAULT NULL,
  `tgl_sertifikat` varchar(255) DEFAULT NULL,
  `file_data_kompetensi` varchar(255) DEFAULT NULL,
  `jumlah` varchar(100) DEFAULT NULL,
  `terisi` varchar(100) DEFAULT NULL,
  `sisa` varchar(100) DEFAULT NULL,
  `file_formasi_jabatan` varchar(255) DEFAULT NULL,
  `file_skp_2` varchar(255) DEFAULT NULL,
  `file_skp_2_dukungan_lainnya` varchar(255) DEFAULT NULL,
  `ket` varchar(30) DEFAULT NULL,
  `no_keppres` varchar(255) DEFAULT NULL,
  `tanggal_keppres` varchar(255) DEFAULT NULL,
  `masa_jabatan_start` varchar(255) DEFAULT NULL,
  `masa_jabatan_end` varchar(255) DEFAULT NULL,
  `tmt` varchar(255) DEFAULT NULL,
  `hak_keuangan` varchar(255) DEFAULT NULL,
  `tanggal_pelantikan` varchar(255) DEFAULT NULL,
  `yang_melantik` varchar(255) DEFAULT NULL,
  `tanggal_surat_pengantar` varchar(50) DEFAULT NULL,
  `no_surat_pengantar` varchar(50) DEFAULT NULL,
  `alasan_ralat` varchar(50) DEFAULT NULL,
  `file_bukti_pendukung` varchar(255) DEFAULT NULL,
  `file_surat_pengantar` varchar(255) DEFAULT NULL,
  `file_keppres` varchar(255) DEFAULT NULL,
  `file_ba_pelantikan` varchar(255) DEFAULT NULL,
  `file_sumpah_jabatan` varchar(255) DEFAULT NULL,
  `file_pendukung` varchar(255) DEFAULT NULL,
  `id_pengirim` bigint(20) NOT NULL,
  `jenis_layanan` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `distributor_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(37, '2021_09_27_102005_create_pengangkatan_pemberhentian_jfkus', 5),
(38, '2021_09_29_092546_create_roles_table', 5),
(39, '2021_09_29_202625_create_groups_table', 5),
(40, '2014_10_12_000000_create_users_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `id_usulan` bigint(20) DEFAULT NULL,
  `id_layanan` bigint(20) DEFAULT NULL,
  `id_pengirim` bigint(20) DEFAULT NULL,
  `id_status` bigint(20) DEFAULT NULL,
  `tanggal_catatan` varchar(255) DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `id_usulan`, `id_layanan`, `id_pengirim`, `id_status`, `tanggal_catatan`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 111111, NULL, '11/12/2021 8:56 AM', 'dsadasd', '2021-11-11 18:56:36', '2021-11-11 18:56:36'),
(2, 2, 1, 111111, NULL, '12-Nov-2021', 'dasdsadas', '2021-11-11 19:18:38', '2021-11-11 19:18:38'),
(3, 1, 1, 111111, NULL, '04-Dec-2021', 'das', '2021-11-13 13:55:25', '2021-11-13 13:55:25'),
(4, 2, 1, 111111, NULL, '13-Nov-2021', 'sdadas', '2021-11-13 15:29:23', '2021-11-13 15:29:23'),
(5, 3, 1, 111111, NULL, '13-Nov-2021', 'dasd', '2021-11-13 15:36:30', '2021-11-13 15:36:30'),
(6, 4, 1, 111111, NULL, '13-Nov-2021', 'dsada', '2021-11-13 16:30:46', '2021-11-13 16:30:46'),
(7, 5, 1, 111111, NULL, '13-Nov-2021', 'adss', '2021-11-13 16:35:52', '2021-11-13 16:35:52'),
(8, 2, 1, 111111, NULL, '14-Nov-2021', 'dsada', '2021-11-14 05:25:15', '2021-11-14 05:25:15'),
(9, 5, 3, 111111, NULL, '14-Nov-2021', 'dsadsa', '2021-11-14 06:50:00', '2021-11-14 06:50:00'),
(10, 7, 2, 111111, NULL, '14-Nov-2021', 'asdas', '2021-11-14 06:56:55', '2021-11-14 06:56:55'),
(11, 2, 1, 111111, 28, '16-Nov-2021', 'Catatan RKP', '2021-11-16 08:55:11', '2021-11-17 08:10:05'),
(12, 11, 1, 111111, NULL, '17-Nov-2021', 'hujiko', '2021-11-17 05:17:22', '2021-11-17 05:17:22'),
(13, 5, 3, 111111, 27, '17-Nov-2021', 'dasdasd', '2021-11-17 05:20:45', '2021-11-17 08:09:36'),
(14, 7, 2, 111111, 27, '17-Nov-2021', 'dasdas', '2021-11-17 08:12:22', '2021-11-17 08:12:22'),
(15, 12, 1, 111111, NULL, '17-Nov-2021', 'sada', '2021-11-17 08:47:32', '2021-11-17 08:47:32'),
(16, 2, 1, 111111, 27, '17-Nov-2021', 'dsada', '2021-11-17 08:49:27', '2021-11-17 08:49:27'),
(17, 2, 1, 111111, 27, '24-Nov-2021', 'dasdasa', '2021-11-17 09:02:57', '2021-11-17 09:02:57'),
(18, 2, 1, 111111, 27, '24-Nov-2021', 'dasdad', '2021-11-17 09:18:19', '2021-11-17 09:18:19');

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
(1, 'Penata Tk.1', 'III', 'd', '2021-09-14 04:06:15', '2021-11-10 07:05:55'),
(2, 'Pembina', 'IV', 'a', '2021-09-14 04:09:53', '2021-09-14 04:09:53'),
(3, 'Pembina Tk.1', 'IV', 'b', '2021-09-14 04:09:53', '2021-11-10 07:07:51'),
(4, 'Pembina Utama Muda', 'IV', 'c', '2021-09-14 04:09:53', '2021-09-14 04:09:53'),
(5, 'Pembina Utama Madya', 'IV', 'd', '2021-09-14 04:09:53', '2021-09-14 04:09:53'),
(6, 'Pembina Utama', 'IV', 'e', '2021-09-14 04:09:53', '2021-09-14 04:09:53');

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
-- Table structure for table `pemberhentians`
--

CREATE TABLE `pemberhentians` (
  `id` int(11) NOT NULL,
  `tanggal_surat_usulan` varchar(255) DEFAULT NULL,
  `no_surat_usulan` varchar(255) DEFAULT NULL,
  `pejabat_menandatangani` varchar(255) DEFAULT NULL,
  `file_data_usulan` varchar(255) DEFAULT NULL,
  `nip` bigint(20) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tanggal_lahir` varchar(255) DEFAULT NULL,
  `pendidikan_terakhir` varchar(255) DEFAULT NULL,
  `instansi` varchar(255) DEFAULT NULL,
  `pangkat_gol_baru` int(11) DEFAULT NULL,
  `tmt_gol_baru` varchar(255) DEFAULT NULL,
  `pangkat_lama` varchar(255) DEFAULT NULL,
  `gol_ruang_lama` varchar(255) DEFAULT NULL,
  `nomor_pak` varchar(255) DEFAULT NULL,
  `tanggal_pak` varchar(255) DEFAULT NULL,
  `jumlah_angka_kredit` varchar(255) DEFAULT NULL,
  `periode_penilaian` int(11) DEFAULT NULL,
  `file_data_pak` varchar(255) DEFAULT NULL,
  `no_klarifikasi` varchar(255) DEFAULT NULL,
  `tanggal_klarifikasi` varchar(255) DEFAULT NULL,
  `file_klarifikasi_pak` varchar(255) DEFAULT NULL,
  `tmt_lama` varchar(255) DEFAULT NULL,
  `jabatan_terakhir` varchar(255) DEFAULT NULL,
  `unit_kerja_terakhir` varchar(255) DEFAULT NULL,
  `tmt_berhenti` varchar(255) DEFAULT NULL,
  `tmt_pensiun` varchar(255) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `tanggal_surat_pengantar` varchar(255) DEFAULT NULL,
  `no_surat_pengantar` varchar(255) DEFAULT NULL,
  `no_keppres` varchar(255) DEFAULT NULL,
  `tanggal_keppres` varchar(255) DEFAULT NULL,
  `alasan_ralat` varchar(255) DEFAULT NULL,
  `file_surat_pengantar` varchar(255) DEFAULT NULL,
  `file_keppres` varchar(255) DEFAULT NULL,
  `file_bukti_pendukung` varchar(255) DEFAULT NULL,
  `masa_jabatan_start` varchar(255) DEFAULT NULL,
  `masa_jabatan_end` varchar(255) DEFAULT NULL,
  `tmt` varchar(255) DEFAULT NULL,
  `hak_keuangan` varchar(255) DEFAULT NULL,
  `tanggal_pelantikan` varchar(255) DEFAULT NULL,
  `yang_melantik` varchar(255) DEFAULT NULL,
  `file_ba_pelantikan` varchar(255) DEFAULT NULL,
  `file_sumpah_jabatan` varchar(255) DEFAULT NULL,
  `id_pengirim` bigint(20) NOT NULL,
  `jenis_layanan` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `distributor_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `tanggal_surat_usulan` date DEFAULT NULL,
  `no_surat_usulan` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ppk_pejabat_yang_diusulkan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pejabat_menandatangani` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_surat_usulan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `pendidikan_terakhir` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instansi_induk` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instansi_pengusul` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pangkat_gol` int(11) DEFAULT NULL,
  `tmt_gol` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_nota_usulan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_penetapan_kebutuhan_formasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_ijazah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_pencantuman_gelar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_pak` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_pak` date DEFAULT NULL,
  `jumlah_angka_kredit` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_data_pak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_klarifikasi_pak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_fungsional` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_keppress_jabatan_fungsional` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_keppres_pengangkatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_ba_pengambilan_sumpah_pelantikan_fungsional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt_jabatan_fungsional` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_kerja_fungsional` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alasan_pemberhentian` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket_alasan_pemberhentian` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt_pemberhentian` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_pendukung_pemberhentian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_lama` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_sk_jabatan_lama` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt_jabatan_lama` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_kerja_lama` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_data_jabatan_lama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_baru` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_kerja_baru` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_surat_rekomendasi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_surat_rekomendasi` date DEFAULT NULL,
  `file_data_rekomendasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_surat_keterangan_menduduki_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_surat_keterangan_pengalaman` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_kompetensi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_sertifikat` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_sertifikat` date DEFAULT NULL,
  `file_data_kompetensi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terisi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sisa` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_skp_2_dukungan_lainnya` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_surat_pengantar` date DEFAULT NULL,
  `no_surat_pengantar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_keppres` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_keppres` date DEFAULT NULL,
  `alasan_ralat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_surat_pengantar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_keppres` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_bukti_pendukung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_sk_pangkat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_sk_pangkat_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_penilaian_skp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_penilaian_prestasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_pengirim` bigint(20) NOT NULL,
  `jenis_layanan` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `status_bkn` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distributor_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengangkatan_pemberhentian_lainnya`
--

CREATE TABLE `pengangkatan_pemberhentian_lainnya` (
  `id` int(11) NOT NULL,
  `tanggal_surat_pengantar` varchar(255) DEFAULT NULL,
  `no_surat_pengantar` varchar(255) DEFAULT NULL,
  `jabatan_lainnya` varchar(255) DEFAULT NULL,
  `unsur` int(11) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `instansi` varchar(255) DEFAULT NULL,
  `jabatan_angkat` int(11) DEFAULT NULL,
  `jabatan_berhenti` int(11) DEFAULT NULL,
  `file_surat_pengantar` varchar(255) DEFAULT NULL,
  `file_dhr` varchar(255) DEFAULT NULL,
  `file_dukumen_lain_pengangkatan_lainnya` varchar(255) DEFAULT NULL,
  `no_keppres` varchar(255) DEFAULT NULL,
  `tanggal_keppres` varchar(255) DEFAULT NULL,
  `masa_jabatan_start` varchar(255) DEFAULT NULL,
  `masa_jabatan_end` varchar(255) DEFAULT NULL,
  `tmt` varchar(255) DEFAULT NULL,
  `hak_keuangan` varchar(255) DEFAULT NULL,
  `tanggal_pelantikan` varchar(255) DEFAULT NULL,
  `yang_melantik` varchar(255) DEFAULT NULL,
  `file_ba_pelantikan` varchar(255) DEFAULT NULL,
  `file_sumpah_jabatan` varchar(255) DEFAULT NULL,
  `formasi` varchar(255) DEFAULT NULL,
  `formasi_terisi_start` varchar(255) DEFAULT NULL,
  `formasi_terisi_end` varchar(255) DEFAULT NULL,
  `no_surat_persetujuan` varchar(255) DEFAULT NULL,
  `tanggal_surat_persetujuan` varchar(255) DEFAULT NULL,
  `kepada_menteri` varchar(255) DEFAULT NULL,
  `nama_staff_khusus` varchar(255) DEFAULT NULL,
  `alasan_ralat` varchar(255) DEFAULT NULL,
  `file_keppres` varchar(255) DEFAULT NULL,
  `file_bukti_pendukung` varchar(255) DEFAULT NULL,
  `id_pengirim` bigint(20) NOT NULL,
  `jenis_layanan` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `distributor_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengangkatan_pemberhentian_ns`
--

CREATE TABLE `pengangkatan_pemberhentian_ns` (
  `id` int(11) NOT NULL,
  `tanggal_surat_pengantar` varchar(255) DEFAULT NULL,
  `no_surat_pengantar` varchar(255) DEFAULT NULL,
  `file_surat_pengantar` varchar(255) DEFAULT NULL,
  `lns` varchar(255) DEFAULT NULL,
  `unsur` int(11) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `instansi` varchar(255) DEFAULT NULL,
  `jabatan_angkat` int(11) DEFAULT NULL,
  `jabatan_berhenti` int(11) DEFAULT NULL,
  `file_dhr` varchar(255) DEFAULT NULL,
  `file_dukumen_lain_pengangkatan_ns` varchar(255) DEFAULT NULL,
  `no_keppres` varchar(255) DEFAULT NULL,
  `tanggal_keppres` varchar(255) DEFAULT NULL,
  `masa_jabatan_start` varchar(255) DEFAULT NULL,
  `masa_jabatan_end` varchar(255) DEFAULT NULL,
  `tmt` varchar(255) DEFAULT NULL,
  `hak_keuangan` varchar(255) DEFAULT NULL,
  `tanggal_pelantikan` varchar(255) DEFAULT NULL,
  `yang_melantik` varchar(255) DEFAULT NULL,
  `file_keppres` varchar(255) DEFAULT NULL,
  `file_bukti_pendukung` varchar(255) DEFAULT NULL,
  `file_ba_pelantikan` varchar(255) DEFAULT NULL,
  `file_sumpah_jabatan` varchar(255) DEFAULT NULL,
  `alasan_ralat` varchar(255) DEFAULT NULL,
  `id_pengirim` bigint(20) NOT NULL,
  `jenis_layanan` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `distributor_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penolakans`
--

CREATE TABLE `penolakans` (
  `id` int(11) NOT NULL,
  `id_usulan` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `id_pengirim` int(11) NOT NULL,
  `id_verifikator` int(11) NOT NULL,
  `nama_verifikator` varchar(255) NOT NULL,
  `alasan_penolakan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `rkps`
--

CREATE TABLE `rkps` (
  `id` int(11) NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `penandatangan` varchar(255) NOT NULL,
  `penerima` varchar(255) NOT NULL,
  `no_memo_rkp` varchar(255) NOT NULL,
  `tanggal_memo` date NOT NULL,
  `hal` varchar(255) NOT NULL,
  `id_usulan` bigint(20) NOT NULL,
  `id_layanan` bigint(20) NOT NULL,
  `id_pengirim` bigint(20) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `status` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'PIC', '2021-09-29 14:40:35'),
(2, 'Koordinator Pokja', '2021-09-29 14:40:35'),
(3, 'JF Ahli Muda', '2021-09-29 14:40:35'),
(4, 'JF Ahli Madya', '2021-09-29 14:40:35'),
(5, 'Kepala Biro', '2021-09-29 14:40:35');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `nama`, `created_at`) VALUES
(1, 'Pengajuan Surat Usulan', '2021-11-02 02:33:30'),
(2, 'Pending JF Ahli', '2021-11-02 02:33:30'),
(3, 'Pending Pokja', '2021-11-02 02:33:30'),
(4, 'Diproses Pokja', '2021-11-02 02:33:30'),
(5, 'Pengembalian Surat Usulan', '2021-11-02 02:33:30'),
(6, 'Terima Pertek BKN', '2021-11-02 02:33:30'),
(7, 'Pengembalian Pertek BKN', '2021-11-02 02:33:30'),
(8, 'Penyiapan Rancangan Keppres', '2021-11-02 02:33:30'),
(9, 'Pengajuan Rancangan Keppres', '2021-11-02 02:33:30'),
(10, 'Penomoran Keppres', '2021-11-02 02:33:30'),
(11, 'Penyiapan Salinan dan Petikan Keppres', '2021-11-02 02:33:30'),
(12, 'Pengiriman', '2021-11-02 02:33:30'),
(13, 'Penyampaian Tanda Terima', '2021-11-02 02:33:30'),
(14, 'Diverifikasi Pokja', '2021-11-02 02:33:30'),
(15, 'Diterima', '2021-11-02 02:33:30'),
(16, 'Tidak Diterima', '2021-11-02 02:33:30'),
(17, 'Diproses JF Ahli', '2021-11-02 02:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `surats`
--

CREATE TABLE `surats` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `id_usulan` bigint(20) NOT NULL,
  `id_layanan` bigint(20) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `id_pengirim` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `unsurs`
--

CREATE TABLE `unsurs` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unsurs`
--

INSERT INTO `unsurs` (`id`, `nama`, `created_at`) VALUES
(1, 'Pemerintah', '2021-10-05 12:45:19'),
(2, 'Non Pemerintah', '2021-10-05 12:45:19');

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
  `groups_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nip`, `nip_verified_at`, `password`, `roles_id`, `groups_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'PIC - Nama', '111111', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 1, NULL, 'yX3TsXA7O777myrfV5sjKHivSkoGRFTtbEy4RtYYjQJMLa5DO1bQx8gfDVc1', '2021-09-29 14:41:21', '2021-11-17 08:47:37'),
(2, 'Koordinator Pokja - Nama', '123456', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 2, 1, NULL, '2021-09-29 14:41:21', '2021-09-29 14:41:21'),
(3, 'JF Ahli Muda - Nama', '654321', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 3, 1, NULL, '2021-09-29 14:41:21', '2021-09-29 14:41:21'),
(4, 'JF Ahli Madya- Nama', '222222', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 4, 2, NULL, '2021-09-29 14:41:21', '2021-09-29 14:41:21'),
(5, 'Kepala Biro - Nama', '333333', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 5, 2, NULL, '2021-09-29 14:41:21', '2021-09-29 14:41:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bkns`
--
ALTER TABLE `bkns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `groups_name_unique` (`name`);

--
-- Indexes for table `jabatans`
--
ALTER TABLE `jabatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_layanans`
--
ALTER TABLE `jenis_layanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kenaikan_pangkats`
--
ALTER TABLE `kenaikan_pangkats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
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
-- Indexes for table `pemberhentians`
--
ALTER TABLE `pemberhentians`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pengangkatan_pemberhentian_lainnya`
--
ALTER TABLE `pengangkatan_pemberhentian_lainnya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengangkatan_pemberhentian_ns`
--
ALTER TABLE `pengangkatan_pemberhentian_ns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penolakans`
--
ALTER TABLE `penolakans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periodes`
--
ALTER TABLE `periodes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `periodes_name_unique` (`name`);

--
-- Indexes for table `rkps`
--
ALTER TABLE `rkps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surats`
--
ALTER TABLE `surats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unsurs`
--
ALTER TABLE `unsurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nip_unique` (`nip`),
  ADD KEY `users_roles_id_foreign` (`roles_id`),
  ADD KEY `users_groups_id_foreign` (`groups_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bkns`
--
ALTER TABLE `bkns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_layanans`
--
ALTER TABLE `jenis_layanans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `kenaikan_pangkats`
--
ALTER TABLE `kenaikan_pangkats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
-- AUTO_INCREMENT for table `pangkat_gols`
--
ALTER TABLE `pangkat_gols`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pemberhentians`
--
ALTER TABLE `pemberhentians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengangkatans`
--
ALTER TABLE `pengangkatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `pengangkatan_pemberhentian_jfkus`
--
ALTER TABLE `pengangkatan_pemberhentian_jfkus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengangkatan_pemberhentian_lainnya`
--
ALTER TABLE `pengangkatan_pemberhentian_lainnya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengangkatan_pemberhentian_ns`
--
ALTER TABLE `pengangkatan_pemberhentian_ns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penolakans`
--
ALTER TABLE `penolakans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `periodes`
--
ALTER TABLE `periodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rkps`
--
ALTER TABLE `rkps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `surats`
--
ALTER TABLE `surats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unsurs`
--
ALTER TABLE `unsurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_groups_id_foreign` FOREIGN KEY (`groups_id`) REFERENCES `groups` (`id`),
  ADD CONSTRAINT `users_roles_id_foreign` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
