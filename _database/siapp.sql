-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 02:46 AM
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
  `id` int(20) NOT NULL,
  `nip` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bkns`
--

INSERT INTO `bkns` (`id`, `nip`, `created_at`) VALUES
(1, 3213123, '2021-11-22 03:20:53'),
(2, 196603171991022001, '2021-11-22 03:21:28'),
(3, 11111111, '2021-11-30 08:58:27');

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
(1, 'Administrator', '2021-09-29 14:41:10'),
(2, 'Menteri', '2021-09-29 14:41:10'),
(3, 'Deputi', '2021-12-02 06:20:45'),
(4, 'Kepala Biro', '2021-12-02 06:20:45'),
(5, 'Koordinator Pokja P4', '2021-12-02 06:20:45'),
(6, 'Koordinator Pokja KP', '2021-12-02 06:20:45'),
(7, 'Koordinator Pokja Pensiun', '2021-12-02 06:20:45'),
(8, 'Kepala Bagian Dukungan Administrasi ', '2021-12-02 06:20:45'),
(9, 'Tim Pokja P4', '2021-12-02 06:20:45'),
(10, 'Tim Pokja KP', '2021-12-02 06:20:45'),
(11, 'Tim Pokja Pensiun', '2021-12-02 06:20:45'),
(12, 'Bagian Dukungan Administrasi', '2021-12-02 06:20:45'),
(13, 'TU Menteri', '2021-12-02 06:20:45'),
(14, 'PIC Pengusul (Subadmin)', '2021-12-02 06:20:45');

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
(1, 'Diangkat', '2021-11-22 12:53:26'),
(2, 'Diberhentikan', '2021-11-22 13:04:51');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_paks`
--

CREATE TABLE `jabatan_paks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan_paks`
--

INSERT INTO `jabatan_paks` (`id`, `name`, `created_at`) VALUES
(1, 'Dokter Ahli Utama', '2021-11-22 09:01:25'),
(2, 'Dokter Gigi Ahli Utama', '2021-11-22 09:01:25'),
(3, 'Dokter Pendidik Klinis Ahli Utama', '2021-11-22 09:02:13'),
(4, 'Apoteker Ahli Utama', '2021-11-22 09:02:13'),
(5, 'Perawat Ahli Utama', '2021-11-22 09:02:59'),
(6, 'Guru Ahli Utama', '2021-11-22 09:03:39'),
(7, 'Pengawas Sekolah Ahli Utama', '2021-11-22 09:03:39'),
(8, 'Penilik Ahli Utama', '2021-11-22 09:03:39');

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
  `tanggal_lahir` varchar(100) DEFAULT NULL,
  `pendidikan_terakhir` varchar(50) DEFAULT NULL,
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
  `file_skp_1_tahun_terakhir` varchar(100) DEFAULT NULL,
  `file_skp_2_tahun_terakhir` varchar(100) DEFAULT NULL,
  `ket` varchar(30) DEFAULT NULL,
  `no_keppres` varchar(255) DEFAULT NULL,
  `tanggal_keppres` varchar(255) DEFAULT NULL,
  `masa_jabatan_start` varchar(255) DEFAULT NULL,
  `masa_jabatan_end` varchar(255) DEFAULT NULL,
  `masa_periode_start` varchar(50) DEFAULT NULL,
  `masa_periode_end` varchar(50) DEFAULT NULL,
  `tmt` varchar(255) DEFAULT NULL,
  `hak_keuangan` varchar(255) DEFAULT NULL,
  `tanggal_pelantikan` varchar(255) DEFAULT NULL,
  `yang_melantik` varchar(255) DEFAULT NULL,
  `tanggal_surat_pengantar` varchar(50) DEFAULT NULL,
  `no_surat_pengantar` varchar(50) DEFAULT NULL,
  `alasan_ralat` varchar(50) DEFAULT NULL,
  `file_bukti_pendukung` varchar(255) DEFAULT NULL,
  `file_surat_pengantar` varchar(255) DEFAULT NULL,
  `file_sk_pangkat_terakhir` varchar(100) DEFAULT NULL,
  `file_sk_jabatan` varchar(50) DEFAULT NULL,
  `file_bap` varchar(50) DEFAULT NULL,
  `file_spp` varchar(50) DEFAULT NULL,
  `jabatan_pak` varchar(50) DEFAULT NULL,
  `jabatan_pak_lainnya` varchar(50) DEFAULT NULL,
  `file_hukuman` varchar(100) DEFAULT NULL,
  `file_surat_keputusan_ppk` varchar(100) DEFAULT NULL,
  `catatan_hukuman` text DEFAULT NULL,
  `status_hukuman` int(10) DEFAULT NULL,
  `pangkat_luar_biasa` int(11) DEFAULT NULL,
  `file_keppres` varchar(255) DEFAULT NULL,
  `file_ba_pelantikan` varchar(255) DEFAULT NULL,
  `file_sumpah_jabatan` varchar(255) DEFAULT NULL,
  `file_pendukung` varchar(255) DEFAULT NULL,
  `tanggal_surat_permohonan` varchar(20) DEFAULT NULL,
  `no_surat_permohonan` varchar(20) DEFAULT NULL,
  `opsi` int(5) DEFAULT NULL,
  `file_surat_permohonan` varchar(20) DEFAULT NULL,
  `file_surat_kehilangan` varchar(20) DEFAULT NULL,
  `file_fotokopi_sk_hilang` varchar(20) DEFAULT NULL,
  `file_dokumen_klarifikasi` varchar(20) DEFAULT NULL,
  `file_fotokopi_sk_diperbaiki` varchar(20) DEFAULT NULL,
  `alasan_pembatalan` text DEFAULT NULL,
  `file_keppres_dibatalkan` varchar(20) DEFAULT NULL,
  `file_alasan` varchar(20) DEFAULT NULL,
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
  `id_rkp` varchar(255) DEFAULT NULL,
  `tanggal_catatan` varchar(255) DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Penata Tingkat 1', 'III', 'd', '2021-09-14 04:06:15', '2021-12-06 01:18:10'),
(2, 'Pembina', 'IV', 'a', '2021-09-14 04:09:53', '2021-09-14 04:09:53'),
(3, 'Pembina Tingkat 1', 'IV', 'b', '2021-09-14 04:09:53', '2021-12-06 01:18:17'),
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
  `tanggal_surat_usulan` date DEFAULT NULL,
  `no_surat_usulan` varchar(255) DEFAULT NULL,
  `jabatan_menandatangani` varchar(255) DEFAULT NULL,
  `jangka_waktu` varchar(255) DEFAULT NULL,
  `file_data_usulan` varchar(255) DEFAULT NULL,
  `file_data_pendukung_lainnya` varchar(255) DEFAULT NULL,
  `file_data_dokumen_klarifikasi` varchar(255) DEFAULT NULL,
  `file_petikan_asli_sk_pensiun` varchar(255) DEFAULT NULL,
  `nip` bigint(20) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nama_janda_duda_anak` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `pendidikan_terakhir` varchar(255) DEFAULT NULL,
  `instansi_induk` varchar(255) DEFAULT NULL,
  `no_urut` varchar(255) DEFAULT NULL,
  `pangkat_baru` int(11) DEFAULT NULL,
  `tmt_pangkat_baru` varchar(255) DEFAULT NULL,
  `pangkat_lama` varchar(255) DEFAULT NULL,
  `alamat_setelah_pensiun` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `pangkat_terakhir` int(11) DEFAULT NULL,
  `tmt_pemberhentian` varchar(255) DEFAULT NULL,
  `nomor_pak` varchar(255) DEFAULT NULL,
  `tanggal_pak` date DEFAULT NULL,
  `jumlah_angka_kredit` varchar(255) DEFAULT NULL,
  `periode_penilaian` int(11) DEFAULT NULL,
  `file_data_pak` varchar(255) DEFAULT NULL,
  `no_klarifikasi` varchar(255) DEFAULT NULL,
  `tanggal_klarifikasi` date DEFAULT NULL,
  `file_klarifikasi_pak` varchar(255) DEFAULT NULL,
  `tmt_pemberhentian_sementara` varchar(255) DEFAULT NULL,
  `tmt_lama` varchar(255) DEFAULT NULL,
  `jabatan_terakhir` varchar(255) DEFAULT NULL,
  `unit_kerja_terakhir` varchar(255) DEFAULT NULL,
  `tmt_berhenti` varchar(255) DEFAULT NULL,
  `tmt_pensiun` varchar(255) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `tanggal_surat_pengantar` date DEFAULT NULL,
  `no_surat_pengantar` varchar(255) DEFAULT NULL,
  `no_keppres` varchar(255) DEFAULT NULL,
  `nomor_keppres_dibatalkan` varchar(255) DEFAULT NULL,
  `tanggal_keppres` date DEFAULT NULL,
  `file_data_pernyataan_permohonan_aps` varchar(255) DEFAULT NULL,
  `file_akte_kematian` varchar(255) DEFAULT NULL,
  `file_keppres` varchar(255) DEFAULT NULL,
  `file_sk_tidak_sedang_dalam_hukum_dpcp` varchar(255) DEFAULT NULL,
  `masa_jabatan_start` varchar(255) DEFAULT NULL,
  `masa_jabatan_end` varchar(255) DEFAULT NULL,
  `taspen` varchar(255) DEFAULT NULL,
  `file_sk_tidak_pernah_dijatuhi_hukuman` varchar(255) DEFAULT NULL,
  `file_pas_foto` varchar(255) DEFAULT NULL,
  `file_berita_acara_pelantikan` varchar(255) DEFAULT NULL,
  `file_ijasah` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `file_sk_jabatan_terakhir` varchar(255) DEFAULT NULL,
  `file_sk_pangkat_terakhir` varchar(255) DEFAULT NULL,
  `file_putusan_pengadilan_inkrach` varchar(255) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `no_surat_permohonan` varchar(255) DEFAULT NULL,
  `tanggal_surat_permohonan` date DEFAULT NULL,
  `file_surat_permohonan` varchar(255) DEFAULT NULL,
  `file_surat_keterangan_kehilangan_polisi` varchar(255) DEFAULT NULL,
  `nama_kantor_polisi` varchar(255) DEFAULT NULL,
  `no_surat_kehilangan` varchar(255) DEFAULT NULL,
  `tanggal_surat_kehilangan` date DEFAULT NULL,
  `file_surat_keterangan_kehilangan` varchar(255) DEFAULT NULL,
  `file_fotokopi_sk_hilang` varchar(255) DEFAULT NULL,
  `file_data_pendukung_terkait` varchar(255) DEFAULT NULL,
  `file_surat_keputusan_pengangkatan_sebagai_pejabat` varchar(255) DEFAULT NULL,
  `file_keppres_yang_dibatalkan` varchar(255) DEFAULT NULL,
  `perihal` text DEFAULT NULL,
  `data_salah` varchar(255) DEFAULT NULL,
  `seharusnya` varchar(255) DEFAULT NULL,
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
-- Table structure for table `pendidikans`
--

CREATE TABLE `pendidikans` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendidikans`
--

INSERT INTO `pendidikans` (`id`, `name`, `created_at`) VALUES
(1, 'SMA Sederajat', '2021-11-22 10:09:46'),
(2, 'D1', '2021-11-22 10:10:07'),
(3, 'D2', '2021-11-22 10:10:12'),
(4, 'D3', '2021-11-22 10:10:24'),
(5, 'D4', '2021-11-22 10:10:26'),
(6, 'S1', '2021-11-22 10:10:29'),
(7, 'S2', '2021-11-22 10:10:36'),
(8, 'S3', '2021-11-22 10:10:36');

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
  `no_surat_usulan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ppk_pejabat_yang_diusulkan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pejabat_menandatangani` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_surat_usulan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `pendidikan_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instansi_induk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instansi_pengusul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pangkat_gol` int(11) DEFAULT NULL,
  `tmt_gol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_nota_usulan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_penetapan_kebutuhan_formasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_ijazah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_pencantuman_gelar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_pak` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_pak` date DEFAULT NULL,
  `jumlah_angka_kredit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_data_pak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_klarifikasi_pak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_fungsional` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_keppress_jabatan_fungsional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_keppres_pengangkatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_ba_pengambilan_sumpah_pelantikan_fungsional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt_jabatan_fungsional` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `satuan_organisasi_fungsional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alasan_pemberhentian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ket_alasan_pemberhentian` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt_pemberhentian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_pendukung_pemberhentian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_lama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_sk_jabatan_lama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt_jabatan_lama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `satuan_organisasi_lama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_data_jabatan_lama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_baru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `satuan_organisasi_baru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_surat_rekomendasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_surat_rekomendasi` date DEFAULT NULL,
  `file_data_rekomendasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_surat_keterangan_menduduki_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_surat_keterangan_pengalaman` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_kompetensi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_sertifikat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_sertifikat` date DEFAULT NULL,
  `file_data_kompetensi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terisi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sisa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `unsur_non` bigint(30) DEFAULT NULL,
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
  `unsur_non` bigint(30) DEFAULT NULL,
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
  `tanggal_prosess_penolakan` date NOT NULL,
  `alasan_penolakan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penolakans`
--

INSERT INTO `penolakans` (`id`, `id_usulan`, `id_layanan`, `id_pengirim`, `id_verifikator`, `nama_verifikator`, `tanggal_prosess_penolakan`, `alasan_penolakan`, `created_at`, `updated_at`) VALUES
(1, 1, 19, 111111, 555555, 'JF SDMA  Ahli Muda Pensiun', '2021-12-06', 'sadasdas', '2021-12-06 06:59:33', '2021-12-06 06:59:33');

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
  `tanggal_keppres_maju` date DEFAULT NULL,
  `tanggal_keppres_turun` date DEFAULT NULL,
  `no_keppres` varchar(255) DEFAULT NULL,
  `file_keppres` varchar(255) DEFAULT NULL,
  `status` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rkp_asns`
--

CREATE TABLE `rkp_asns` (
  `id` int(11) NOT NULL,
  `id_usulan` bigint(20) NOT NULL,
  `id_layanan` bigint(20) NOT NULL,
  `id_pengirim` bigint(20) NOT NULL,
  `nip` bigint(20) NOT NULL,
  `id_rkp` bigint(20) NOT NULL,
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
(1, 'Administrator', '2021-12-02 06:29:35'),
(2, 'Menteri', '2021-12-02 06:34:07'),
(3, 'Deputi', '2021-12-02 06:34:07'),
(4, 'Kepala Biro', '2021-12-02 06:34:07'),
(5, 'Koordinator Pokja P4', '2021-12-02 06:34:07'),
(6, 'Koordinator Pokja KP', '2021-12-02 06:34:07'),
(7, 'Koordinator Pokja Pensiun', '2021-12-02 06:34:07'),
(8, 'Kepala Bagian Dukungan Administrasi ', '2021-12-02 06:34:07'),
(9, 'Tim Pokja P4', '2021-12-02 06:34:07'),
(10, 'Tim Pokja KP', '2021-12-02 06:34:07'),
(11, 'Tim Pokja Pensiun', '2021-12-02 06:34:07'),
(12, 'Bagian Dukungan Administrasi', '2021-12-02 06:34:07'),
(13, 'TU Menteri', '2021-12-02 06:34:07'),
(14, 'PIC Pengusul (Subadmin)', '2021-12-02 06:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `satuan_kerjas`
--

CREATE TABLE `satuan_kerjas` (
  `id` varchar(32) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `instansi_id` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `satuan_kerjas`
--

INSERT INTO `satuan_kerjas` (`id`, `nama`, `instansi_id`) VALUES
('A5EB03E240CDF6A0E040640A040252AD', 'Kementerian Koordinator Bidang Politik, Hukum dan Keamanan', 'A5EB03E23BE8F6A0E040640A040252AD'),
('A5EB03E240CEF6A0E040640A040252AD', 'Kementerian Koordinator Bidang Perekonomian', 'A5EB03E23BE9F6A0E040640A040252AD'),
('A5EB03E240CFF6A0E040640A040252AD', 'Kementerian Koordinator Bidang Pembangunan Manusia dan Kebudayaan', 'A5EB03E23BEAF6A0E040640A040252AD'),
('ff8080814c0a2e94014c44a55f7059ce', 'Kementerian Koordinator Bidang Kemaritiman', '0C37093AED94370CE050640A1502102F'),
('A5EB03E240D0F6A0E040640A040252AD', 'Kementerian Riset, Teknologi, dan Pendidikan Tinggi', 'A5EB03E23BEBF6A0E040640A040252AD'),
('A5EB03E240D1F6A0E040640A040252AD', 'Kementerian Koperasi dan Usaha Kecil dan Menengah', 'A5EB03E23BECF6A0E040640A040252AD'),
('A5EB03E240D2F6A0E040640A040252AD', 'Kementerian Lingkungan Hidup', 'A5EB03E23BEDF6A0E040640A040252AD'),
('A5EB03E240D3F6A0E040640A040252AD', 'Kementerian Badan Usaha Milik Negara', 'A5EB03E23BEFF6A0E040640A040252AD'),
('A5EB03E240D4F6A0E040640A040252AD', 'Kementerian Pemberdayaan Perempuan dan Perlindungan Anak', 'A5EB03E23BF0F6A0E040640A040252AD'),
('A5EB03E240D5F6A0E040640A040252AD', 'Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi', 'A5EB03E23BF1F6A0E040640A040252AD'),
('A5EB03E240D7F6A0E040640A040252AD', 'Kementerian Perumahan Rakyat', 'A5EB03E23BE5F6A0E040640A040252AD'),
('A5EB03E240D8F6A0E040640A040252AD', 'Kementerian Desa, Pembangunan Daerah Tertinggal dan Transmigrasi', 'A5EB03E23B95F6A0E040640A040252AD'),
('A5EB03E240D9F6A0E040640A040252AD', 'Kementerian Dalam Negeri', 'A5EB03E23BF3F6A0E040640A040252AD'),
('A5EB03E240DAF6A0E040640A040252AD', 'Kementerian Luar Negeri', 'A5EB03E23BF4F6A0E040640A040252AD'),
('A5EB03E240DBF6A0E040640A040252AD', 'Kementerian Pertahanan', 'A5EB03E23BF5F6A0E040640A040252AD'),
('A5EB03E240DDF6A0E040640A040252AD', 'Kementerian Keuangan', 'A5EB03E23BF7F6A0E040640A040252AD'),
('A5EB03E240DEF6A0E040640A040252AD', 'Kementerian Pertanian', 'A5EB03E23BF8F6A0E040640A040252AD'),
('A5EB03E240DFF6A0E040640A040252AD', 'Kementerian Energi dan Sumber Daya Mineral', 'A5EB03E23BF9F6A0E040640A040252AD'),
('A5EB03E240E0F6A0E040640A040252AD', 'Kementerian Perhubungan', 'A5EB03E23D62F6A0E040640A040252AD'),
('A5EB03E240E1F6A0E040640A040252AD', 'Kementerian Pendidikan dan Kebudayaan', 'A5EB03E23BFAF6A0E040640A040252AD'),
('A5EB03E240E2F6A0E040640A040252AD', 'Kementerian Kesehatan', 'A5EB03E23AF9F6A0E040640A040252AD'),
('A5EB03E240E3F6A0E040640A040252AD', 'Kementerian Agama', 'A5EB03E23BFBF6A0E040640A040252AD'),
('A5EB03E240E4F6A0E040640A040252AD', 'Kementerian Ketenagakerjaan', 'A5EB03E23AFAF6A0E040640A040252AD'),
('A5EB03E240E5F6A0E040640A040252AD', 'Kementerian Sosial', 'A5EB03E23BFCF6A0E040640A040252AD'),
('A5EB03E240E6F6A0E040640A040252AD', 'Kementerian Lingkungan Hidup dan Kehutanan', 'A5EB03E23AFBF6A0E040640A040252AD'),
('A5EB03E240E7F6A0E040640A040252AD', 'Kementerian Kelautan dan Perikanan', 'A5EB03E23BFDF6A0E040640A040252AD'),
('A5EB03E240E8F6A0E040640A040252AD', 'Kementerian Komunikasi dan Informatika', 'A5EB03E23BE6F6A0E040640A040252AD'),
('A5EB03E240E9F6A0E040640A040252AD', 'Kementerian Perdagangan', 'A5EB03E23BE7F6A0E040640A040252AD'),
('A5EB03E240EAF6A0E040640A040252AD', 'Kementerian Perindustrian', 'A5EB03E23B96F6A0E040640A040252AD'),
('A5EB03E240EBF6A0E040640A040252AD', 'Kementerian Pekerjaan Umum dan Perumahan Rakyat', 'A5EB03E23D46F6A0E040640A040252AD'),
('A5EB03E240ECF6A0E040640A040252AD', 'Kementerian Pariwisata', 'A5EB03E23BE4F6A0E040640A040252AD'),
('A5EB03E240EDF6A0E040640A040252AD', 'Kementerian Sekretariat Negara', 'A5EB03E23AFCF6A0E040640A040252AD'),
('A5EB03E240EEF6A0E040640A040252AD', 'Kejaksaan Agung', 'A5EB03E23BFEF6A0E040640A040252AD'),
('A5EB03E240EFF6A0E040640A040252AD', 'Badan Intelijen Negara', 'A5EB03E23AFDF6A0E040640A040252AD'),
('A5EB03E240F0F6A0E040640A040252AD', 'Sekretariat Jenderal MPR', 'A5EB03E23BFFF6A0E040640A040252AD'),
('A5EB03E240F1F6A0E040640A040252AD', 'Setjen DPA', 'A5EB03E23C00F6A0E040640A040252AD'),
('A5EB03E240F2F6A0E040640A040252AD', 'Sekretariat Jenderal DPR RI', 'A5EB03E23C01F6A0E040640A040252AD'),
('A5EB03E240F3F6A0E040640A040252AD', 'Mahkamah Agung RI', 'A5EB03E23AFEF6A0E040640A040252AD'),
('A5EB03E240F4F6A0E040640A040252AD', 'Badan Pemeriksa Keuangan', 'A5EB03E23AFFF6A0E040640A040252AD'),
('A5EB03E240F5F6A0E040640A040252AD', 'Setjen WANTANNAS', 'A5EB03E23C02F6A0E040640A040252AD'),
('A5EB03E240F6F6A0E040640A040252AD', 'Badan Siber dan Sandi Negara', 'A5EB03E23C03F6A0E040640A040252AD'),
('A5EB03E240F8F6A0E040640A040252AD', 'Lembaga Administrasi Negara', 'A5EB03E23C04F6A0E040640A040252AD'),
('A5EB03E240F9F6A0E040640A040252AD', 'Lembaga Penerbangan dan Antariksa Nasional', 'A5EB03E23B01F6A0E040640A040252AD'),
('A5EB03E240FAF6A0E040640A040252AD', 'Lembaga Ilmu Pengetahuan Indonesia', 'A5EB03E23C05F6A0E040640A040252AD'),
('A5EB03E240FBF6A0E040640A040252AD', 'Badan Tenaga Nuklir Nasional', 'A5EB03E23B02F6A0E040640A040252AD'),
('A5EB03E240FCF6A0E040640A040252AD', 'Badan Pusat Statistik', 'A5EB03E23C06F6A0E040640A040252AD'),
('A5EB03E240FEF6A0E040640A040252AD', 'Arsip Nasional Republik Indonesia', 'A5EB03E23C07F6A0E040640A040252AD'),
('A5EB03E240FFF6A0E040640A040252AD', 'Badan Informasi Geospasial', 'A5EB03E23B04F6A0E040640A040252AD'),
('A5EB03E24102F6A0E040640A040252AD', 'Badan Pengkajian dan Penerapan Teknologi', 'A5EB03E23B05F6A0E040640A040252AD'),
('A5EB03E24103F6A0E040640A040252AD', 'Badan Pengawasan Keuangan dan Pembangunan', 'A5EB03E23C09F6A0E040640A040252AD'),
('A5EB03E24105F6A0E040640A040252AD', 'Perpustakaan Nasional RI', 'A5EB03E23C0AF6A0E040640A040252AD'),
('A5EB03E24106F6A0E040640A040252AD', 'Badan Standardisasi Nasional', 'A5EB03E23B07F6A0E040640A040252AD'),
('A5EB03E24107F6A0E040640A040252AD', 'Badan Pengawas Tenaga Nuklir', 'A5EB03E23C0BF6A0E040640A040252AD'),
('A5EB03E24108F6A0E040640A040252AD', 'Badan Pengawas Obat dan Makanan', 'A5EB03E23B08F6A0E040640A040252AD'),
('A5EB03E2410AF6A0E040640A040252AD', 'Kepolisian Negara', 'A5EB03E23B09F6A0E040640A040252AD'),
('A5EB03E2410BF6A0E040640A040252AD', 'MABES TNI', 'A5EB03E23C0DF6A0E040640A040252AD'),
('A5EB03E2410DF6A0E040640A040252AD', 'Sekretariat Kabinet', 'A5EB03E23C0EF6A0E040640A040252AD'),
('A5EB03E2410EF6A0E040640A040252AD', 'Sekretariat Presiden', 'A5EB03E23C0FF6A0E040640A040252AD'),
('A5EB03E2410FF6A0E040640A040252AD', 'Sekretariat Wakil Presiden', 'A5EB03E23B0BF6A0E040640A040252AD'),
('A5EB03E24110F6A0E040640A040252AD', 'Sekretariat Militer', 'A5EB03E23C10F6A0E040640A040252AD'),
('A5EB03E24111F6A0E040640A040252AD', 'Badan Narkotika Nasional', 'A5EB03E23C11F6A0E040640A040252AD'),
('A5EB03E24112F6A0E040640A040252AD', 'Setjen Komisi Pemilihan Umum', 'A5EB03E23D54F6A0E040640A040252AD'),
('A5EB03E24113F6A0E040640A040252AD', 'Badan Nasional Penanggulangan Bencana', 'A5EB03E23D55F6A0E040640A040252AD'),
('A5EB03E24114F6A0E040640A040252AD', 'Setjen KOMNAS HAM', 'A5EB03E23D56F6A0E040640A040252AD'),
('A5EB03E24115F6A0E040640A040252AD', 'Badan Pengusahaan Kawasan Perdagangan Bebas dan Pelabuhan Bebas Batam', 'A5EB03E23D45F6A0E040640A040252AD'),
('A5EB03E24117F6A0E040640A040252AD', 'Setjen Komisi Pemberantasan Korupsi', 'A5EB03E23D43F6A0E040640A040252AD'),
('A5EB03E24118F6A0E040640A040252AD', 'Setjen KORPRI', 'A5EB03E23D47F6A0E040640A040252AD'),
('A5EB03E24119F6A0E040640A040252AD', 'Sekretariat Jenderal Komisi Yudisial', 'A5EB03E23B1CF6A0E040640A040252AD'),
('A5EB03E2411AF6A0E040640A040252AD', 'Setjen Dewan Perwakilan Daerah', 'A5EB03E23B1DF6A0E040640A040252AD'),
('A5EB03E2411BF6A0E040640A040252AD', 'Badan Nasional Penempatan Perlindungan TKI', 'A5EB03E23D48F6A0E040640A040252AD'),
('A5EB03E2411CF6A0E040640A040252AD', 'Badan Keamanan Laut RI', 'A5EB03E23B7AF6A0E040640A040252AD'),
('A5EB03E2411DF6A0E040640A040252AD', 'Badan Nasional Pencarian dan Pertolongan', 'A5EB03E23D34F6A0E040640A040252AD'),
('A5EB03E2411EF6A0E040640A040252AD', 'Lembaga Kebijakan Pengadaan Barang/Jasa Pemerintah', 'A5EB03E23D4BF6A0E040640A040252AD'),
('A5EB03E24120F6A0E040640A040252AD', 'Ombudsman Republik Indonesia', 'A5EB03E23CFDF6A0E040640A040252AD'),
('A5EB03E24121F6A0E040640A040252AD', 'TELEVISI REPUBLIK INDONESIA', 'A5EB03E23D67F6A0E040640A040252AD'),
('A5EB03E24122F6A0E040640A040252AD', 'RADIO REPUBLIK INDONESIA', 'A5EB03E23D4DF6A0E040640A040252AD'),
('A5EB03E24123F6A0E040640A040252AD', 'Badan Nasional Pengelola Perbatasan', 'A5EB03E23C5EF6A0E040640A040252AD'),
('A5EB03E24124F6A0E040640A040252AD', 'Badan Nasional Penanggulangan Terorisme', 'A5EB03E23C5FF6A0E040640A040252AD'),
('8ae482893d68b543013d7c73e422677b', 'Setjen Komisi Pengawas Persaingan Usaha', '8ae482893d68b543013d7c73e421677a'),
('8ae48288503bd9ee0150606afe0d766f', 'Komisi Aparatur Sipil Negara', '8ae48288503bd9ee0150606afe0c766e'),
('ff80808151ad0c6e0151adac2f8711bd', 'Badan Ekonomi Kreatif', '23B3C7AFE842586CE050640A150208C2'),
('8ae483a661d763350161da6c5c2e420b', 'Lembaga Perlindungan Saksi dan Korban', '6291CFA065278E99E050640A290279EA'),
('748FC9961C1B485EE050640A2A030F86', 'Badan Pembinaan Ideologi Pancasila', '748FC9961C1A485EE050640A2A030F86'),
('A5EB03E24125F6A0E040640A040252AD', 'Pemerintah Aceh', 'A5EB03E23B0CF6A0E040640A040252AD'),
('A5EB03E24126F6A0E040640A040252AD', 'Pemerintah Kab. Aceh Besar', 'A5EB03E23C12F6A0E040640A040252AD'),
('A5EB03E24127F6A0E040640A040252AD', 'Pemerintah Kab. Pidie', 'A5EB03E23C13F6A0E040640A040252AD'),
('A5EB03E24128F6A0E040640A040252AD', 'Pemerintah Kab. Aceh Utara', 'A5EB03E23B0DF6A0E040640A040252AD'),
('A5EB03E24129F6A0E040640A040252AD', 'Pemerintah Kab. Aceh Timur', 'A5EB03E23C14F6A0E040640A040252AD'),
('A5EB03E2412AF6A0E040640A040252AD', 'Pemerintah Kab. Aceh Selatan', 'A5EB03E23B0EF6A0E040640A040252AD'),
('A5EB03E2412BF6A0E040640A040252AD', 'Pemerintah Kab. Aceh Barat', 'A5EB03E23C15F6A0E040640A040252AD'),
('A5EB03E2412CF6A0E040640A040252AD', 'Pemerintah Kab. Aceh Tengah', 'A5EB03E23B0FF6A0E040640A040252AD'),
('A5EB03E2412DF6A0E040640A040252AD', 'Pemerintah Kab. Aceh Tenggara', 'A5EB03E23C16F6A0E040640A040252AD'),
('A5EB03E2412EF6A0E040640A040252AD', 'Pemerintah Kab. Simeulue', 'A5EB03E23B10F6A0E040640A040252AD'),
('A5EB03E2412FF6A0E040640A040252AD', 'Pemerintah Kab. Bireuen', 'A5EB03E23C17F6A0E040640A040252AD'),
('A5EB03E24130F6A0E040640A040252AD', 'Pemerintah Kab. Aceh Singkil', 'A5EB03E23BDEF6A0E040640A040252AD'),
('A5EB03E24131F6A0E040640A040252AD', 'Pemerintah Kab. Aceh Barat Daya', 'A5EB03E23B11F6A0E040640A040252AD'),
('A5EB03E24132F6A0E040640A040252AD', 'Pemerintah Kab. Gayo Lues', 'A5EB03E23C18F6A0E040640A040252AD'),
('A5EB03E24133F6A0E040640A040252AD', 'Pemerintah Kab. Aceh Tamiang', 'A5EB03E23B12F6A0E040640A040252AD'),
('A5EB03E24134F6A0E040640A040252AD', 'Pemerintah Kab. Nagan Raya', 'A5EB03E23C19F6A0E040640A040252AD'),
('A5EB03E24135F6A0E040640A040252AD', 'Pemerintah Kab. Aceh Jaya', 'A5EB03E23B13F6A0E040640A040252AD'),
('A5EB03E24136F6A0E040640A040252AD', 'Pemerintah Kab. Bener Meriah', 'A5EB03E23D2FF6A0E040640A040252AD'),
('A5EB03E24137F6A0E040640A040252AD', 'Pemerintah Kab. Pidie Jaya', 'A5EB03E23BE0F6A0E040640A040252AD'),
('A5EB03E24138F6A0E040640A040252AD', 'Pemerintah Kota Sabang', 'A5EB03E23C1AF6A0E040640A040252AD'),
('A5EB03E24139F6A0E040640A040252AD', 'Pemerintah Kota Banda Aceh', 'A5EB03E23C27F6A0E040640A040252AD'),
('A5EB03E2413AF6A0E040640A040252AD', 'Pemerintah Kota Langsa', 'A5EB03E23C28F6A0E040640A040252AD'),
('A5EB03E2413BF6A0E040640A040252AD', 'Pemerintah Kota Lhokseumawe', 'A5EB03E23C29F6A0E040640A040252AD'),
('A5EB03E2413CF6A0E040640A040252AD', 'Pemerintah Kota Subulussalam', 'A5EB03E23BDFF6A0E040640A040252AD'),
('A5EB03E2413DF6A0E040640A040252AD', 'Pemerintah Provinsi Sumatera Utara', 'A5EB03E23C2AF6A0E040640A040252AD'),
('A5EB03E2413EF6A0E040640A040252AD', 'Pemerintah Kab. Deli Serdang', 'A5EB03E23C95F6A0E040640A040252AD'),
('A5EB03E2413FF6A0E040640A040252AD', 'Pemerintah Kab. Karo', 'A5EB03E23C96F6A0E040640A040252AD'),
('A5EB03E24140F6A0E040640A040252AD', 'Pemerintah Kab. Langkat', 'A5EB03E23C97F6A0E040640A040252AD'),
('A5EB03E24141F6A0E040640A040252AD', 'Pemerintah Kab. Tapanuli Tengah', 'A5EB03E23C98F6A0E040640A040252AD'),
('A5EB03E24142F6A0E040640A040252AD', 'Pemerintah Kab. Simalungun', 'A5EB03E23C99F6A0E040640A040252AD'),
('A5EB03E24143F6A0E040640A040252AD', 'Pemerintah Kab. Labuhanbatu', 'A5EB03E23C9AF6A0E040640A040252AD'),
('A5EB03E24144F6A0E040640A040252AD', 'Pemerintah Kab. Dairi', 'A5EB03E23B49F6A0E040640A040252AD'),
('A5EB03E24145F6A0E040640A040252AD', 'Pemerintah Kab. Tapanuli Utara', 'A5EB03E23C9BF6A0E040640A040252AD'),
('A5EB03E24146F6A0E040640A040252AD', 'Pemerintah Kab. Tapanuli Selatan', 'A5EB03E23C9CF6A0E040640A040252AD'),
('A5EB03E24147F6A0E040640A040252AD', 'Pemerintah Kab. Asahan', 'A5EB03E23C9DF6A0E040640A040252AD'),
('A5EB03E24148F6A0E040640A040252AD', 'Pemerintah Kab. Nias', 'A5EB03E23C9EF6A0E040640A040252AD'),
('A5EB03E24149F6A0E040640A040252AD', 'Pemerintah Kab. Toba Samosir', 'A5EB03E23C9FF6A0E040640A040252AD'),
('A5EB03E2414AF6A0E040640A040252AD', 'Pemerintah Kab. Mandailing Natal', 'A5EB03E23CA0F6A0E040640A040252AD'),
('A5EB03E2414BF6A0E040640A040252AD', 'Pemerintah Kab. Nias Selatan', 'A5EB03E23B14F6A0E040640A040252AD'),
('A5EB03E2414CF6A0E040640A040252AD', 'Pemerintah Kab. Humbang Hasundutan', 'A5EB03E23CA1F6A0E040640A040252AD'),
('A5EB03E2414DF6A0E040640A040252AD', 'Pemerintah Kab. Pakpak Bharat', 'A5EB03E23B15F6A0E040640A040252AD'),
('A5EB03E2414EF6A0E040640A040252AD', 'Pemerintah Kab. Samosir', 'A5EB03E23D2BF6A0E040640A040252AD'),
('A5EB03E2414FF6A0E040640A040252AD', 'Pemerintah Kab. Serdang Bedagai', 'A5EB03E23B4AF6A0E040640A040252AD'),
('A5EB03E24150F6A0E040640A040252AD', 'Pemerintah Kab. Padang Lawas', 'A5EB03E23BE1F6A0E040640A040252AD'),
('A5EB03E24151F6A0E040640A040252AD', 'Pemerintah Kab. Padang Lawas Utara', 'A5EB03E23BE2F6A0E040640A040252AD'),
('A5EB03E24152F6A0E040640A040252AD', 'Pemerintah Kab. Batubara', 'A5EB03E23BE3F6A0E040640A040252AD'),
('A5EB03E24153F6A0E040640A040252AD', 'Pemerintah Kab. Labuhanbatu Selatan', 'A5EB03E23B7CF6A0E040640A040252AD'),
('A5EB03E24154F6A0E040640A040252AD', 'Pemerintah Kab. Labuhanbatu Utara', 'A5EB03E23B7DF6A0E040640A040252AD'),
('A5EB03E24155F6A0E040640A040252AD', 'Pemerintah Kab. Nias Barat', 'A5EB03E23C23F6A0E040640A040252AD'),
('A5EB03E24156F6A0E040640A040252AD', 'Pemerintah Kab. Nias Utara', 'A5EB03E23C24F6A0E040640A040252AD'),
('A5EB03E24157F6A0E040640A040252AD', 'Pemerintah Kota Medan', 'A5EB03E23CA2F6A0E040640A040252AD'),
('A5EB03E24158F6A0E040640A040252AD', 'Pemerintah Kota Tebing Tinggi', 'A5EB03E23B16F6A0E040640A040252AD'),
('A5EB03E24159F6A0E040640A040252AD', 'Pemerintah Kota Binjai', 'A5EB03E23CA3F6A0E040640A040252AD'),
('A5EB03E2415CF6A0E040640A040252AD', 'Pemerintah Kota Sibolga', 'A5EB03E23CA5F6A0E040640A040252AD'),
('A5EB03E2415DF6A0E040640A040252AD', 'Pemerintah Kota Padangsidimpuan', 'A5EB03E23B18F6A0E040640A040252AD'),
('A5EB03E2415FF6A0E040640A040252AD', 'Pemerintah Provinsi Riau', 'A5EB03E23CA6F6A0E040640A040252AD'),
('A5EB03E24160F6A0E040640A040252AD', 'Pemerintah Kab. Kampar', 'A5EB03E23B19F6A0E040640A040252AD'),
('A5EB03E24161F6A0E040640A040252AD', 'Pemerintah Kab. Bengkalis', 'A5EB03E23CA7F6A0E040640A040252AD'),
('A5EB03E24162F6A0E040640A040252AD', 'Pemerintah Kab. Indragiri Hulu', 'A5EB03E23B1AF6A0E040640A040252AD'),
('A5EB03E24163F6A0E040640A040252AD', 'Pemerintah Kab. Indragiri Hilir', 'A5EB03E23CA8F6A0E040640A040252AD'),
('A5EB03E24164F6A0E040640A040252AD', 'Pemerintah Kab. Pelalawan', 'A5EB03E23B1BF6A0E040640A040252AD'),
('A5EB03E24165F6A0E040640A040252AD', 'Pemerintah Kab. Rokan Hulu', 'A5EB03E23CA9F6A0E040640A040252AD'),
('A5EB03E24166F6A0E040640A040252AD', 'Pemerintah Kab. Rokan Hilir', 'A5EB03E23B1EF6A0E040640A040252AD'),
('A5EB03E24167F6A0E040640A040252AD', 'Pemerintah Kab. Siak', 'A5EB03E23CAAF6A0E040640A040252AD'),
('A5EB03E24168F6A0E040640A040252AD', 'Pemerintah Kab. Kuantan Singingi', 'A5EB03E23B1FF6A0E040640A040252AD'),
('A5EB03E24169F6A0E040640A040252AD', 'Pemerintah Kab. Kepulauan Meranti', 'A5EB03E23D66F6A0E040640A040252AD'),
('A5EB03E2416AF6A0E040640A040252AD', 'Pemerintah Kota Pekanbaru', 'A5EB03E23CABF6A0E040640A040252AD'),
('A5EB03E2416BF6A0E040640A040252AD', 'Pemerintah Kota Dumai', 'A5EB03E23CACF6A0E040640A040252AD'),
('A5EB03E2416CF6A0E040640A040252AD', 'Pemerintah Provinsi Sumatera Barat', 'A5EB03E23B20F6A0E040640A040252AD'),
('A5EB03E2416DF6A0E040640A040252AD', 'Pemerintah Kab. Agam', 'A5EB03E23CADF6A0E040640A040252AD'),
('A5EB03E2416EF6A0E040640A040252AD', 'Pemerintah Kab. Pasaman', 'A5EB03E23B21F6A0E040640A040252AD'),
('A5EB03E2416FF6A0E040640A040252AD', 'Pemerintah Kab. Limapuluh Kota', 'A5EB03E23B55F6A0E040640A040252AD'),
('A5EB03E24170F6A0E040640A040252AD', 'Pemerintah Kab. Solok', 'A5EB03E23B22F6A0E040640A040252AD'),
('A5EB03E24171F6A0E040640A040252AD', 'Pemerintah Kab. Padang Pariaman', 'A5EB03E23CAEF6A0E040640A040252AD'),
('A5EB03E24172F6A0E040640A040252AD', 'Pemerintah Kab. Pesisir Selatan', 'A5EB03E23B23F6A0E040640A040252AD'),
('A5EB03E24173F6A0E040640A040252AD', 'Pemerintah Kab. Tanah Datar', 'A5EB03E23CAFF6A0E040640A040252AD'),
('A5EB03E24174F6A0E040640A040252AD', 'Pemerintah Kab. Sijunjung', 'A5EB03E23B24F6A0E040640A040252AD'),
('A5EB03E24175F6A0E040640A040252AD', 'Pemerintah Kab. Kep. Mentawai', 'A5EB03E23CB0F6A0E040640A040252AD'),
('A5EB03E24176F6A0E040640A040252AD', 'Pemerintah Kab. Solok Selatan', 'A5EB03E23D5EF6A0E040640A040252AD'),
('A5EB03E24177F6A0E040640A040252AD', 'Pemerintah Kab. Dharmasraya', 'A5EB03E23D30F6A0E040640A040252AD'),
('A5EB03E24178F6A0E040640A040252AD', 'Pemerintah Kab. Pasaman Barat', 'A5EB03E23D5FF6A0E040640A040252AD'),
('A5EB03E24179F6A0E040640A040252AD', 'Pemerintah Kota Bukittinggi', 'A5EB03E23B25F6A0E040640A040252AD'),
('A5EB03E2417AF6A0E040640A040252AD', 'Pemerintah Kota Padang Panjang', 'A5EB03E23CB1F6A0E040640A040252AD'),
('A5EB03E2417BF6A0E040640A040252AD', 'Pemerintah Kota Sawahlunto', 'A5EB03E23B26F6A0E040640A040252AD'),
('A5EB03E2417CF6A0E040640A040252AD', 'Pemerintah Kota Solok', 'A5EB03E23CB2F6A0E040640A040252AD'),
('A5EB03E2417DF6A0E040640A040252AD', 'Pemerintah Kota Padang', 'A5EB03E23B27F6A0E040640A040252AD'),
('A5EB03E2417EF6A0E040640A040252AD', 'Pemerintah Kota Payakumbuh', 'A5EB03E23CB3F6A0E040640A040252AD'),
('A5EB03E2417FF6A0E040640A040252AD', 'Pemerintah Kota Pariaman', 'A5EB03E23B28F6A0E040640A040252AD'),
('A5EB03E24180F6A0E040640A040252AD', 'Pemerintah Provinsi Jambi', 'A5EB03E23B4BF6A0E040640A040252AD'),
('A5EB03E24181F6A0E040640A040252AD', 'Pemerintah Kab. Batang Hari', 'A5EB03E23B29F6A0E040640A040252AD'),
('A5EB03E24182F6A0E040640A040252AD', 'Pemerintah Kab. Tanjung Jabung Barat', 'A5EB03E23CB4F6A0E040640A040252AD'),
('A5EB03E24183F6A0E040640A040252AD', 'Pemerintah Kab. Bungo', 'A5EB03E23B2AF6A0E040640A040252AD'),
('A5EB03E24184F6A0E040640A040252AD', 'Pemerintah Kab. Merangin', 'A5EB03E23CB5F6A0E040640A040252AD'),
('A5EB03E24185F6A0E040640A040252AD', 'Pemerintah Kab. Kerinci', 'A5EB03E23B2BF6A0E040640A040252AD'),
('A5EB03E24186F6A0E040640A040252AD', 'Pemerintah Kab. Sarolangun', 'A5EB03E23CB6F6A0E040640A040252AD'),
('A5EB03E24187F6A0E040640A040252AD', 'Pemerintah Kab. Tebo', 'A5EB03E23B2CF6A0E040640A040252AD'),
('A5EB03E24188F6A0E040640A040252AD', 'Pemerintah Kab. Muaro Jambi', 'A5EB03E23CB7F6A0E040640A040252AD'),
('A5EB03E24189F6A0E040640A040252AD', 'Pemerintah Kab. Tanjung Jabung Timur', 'A5EB03E23B2DF6A0E040640A040252AD'),
('A5EB03E2418AF6A0E040640A040252AD', 'Pemerintah Kota Jambi', 'A5EB03E23CB8F6A0E040640A040252AD'),
('A5EB03E2418BF6A0E040640A040252AD', 'Pemerintah Kota Sungai Penuh', 'A5EB03E23B7EF6A0E040640A040252AD'),
('A5EB03E2418CF6A0E040640A040252AD', 'Pemerintah Provinsi Sumatera Selatan', 'A5EB03E23B2EF6A0E040640A040252AD'),
('A5EB03E2418DF6A0E040640A040252AD', 'Pemerintah Kab. Musi Banyuasin', 'A5EB03E23CB9F6A0E040640A040252AD'),
('A5EB03E2418EF6A0E040640A040252AD', 'Pemerintah Kab. Ogan Komering Ulu', 'A5EB03E23B2FF6A0E040640A040252AD'),
('A5EB03E2418FF6A0E040640A040252AD', 'Pemerintah Kab. Muara Enim', 'A5EB03E23CBAF6A0E040640A040252AD'),
('A5EB03E24190F6A0E040640A040252AD', 'Pemerintah Kab. Lahat', 'A5EB03E23CBBF6A0E040640A040252AD'),
('A5EB03E24191F6A0E040640A040252AD', 'Pemerintah Kab. Musi Rawas', 'A5EB03E23B30F6A0E040640A040252AD'),
('A5EB03E24192F6A0E040640A040252AD', 'Pemerintah Kab. Ogan Komering Ilir', 'A5EB03E23CBCF6A0E040640A040252AD'),
('A5EB03E24193F6A0E040640A040252AD', 'Pemerintah Kab. Banyuasin', 'A5EB03E23B31F6A0E040640A040252AD'),
('A5EB03E24194F6A0E040640A040252AD', 'Pemerintah Kab. Ogan Komering Ulu Timur', 'A5EB03E23D5CF6A0E040640A040252AD'),
('A5EB03E24195F6A0E040640A040252AD', 'Pemerintah Kab. Ogan Komering Ulu Sel.', 'A5EB03E23D2CF6A0E040640A040252AD'),
('A5EB03E24196F6A0E040640A040252AD', 'Pemerintah Kab. Ogan Ilir', 'A5EB03E23B4CF6A0E040640A040252AD'),
('A5EB03E24197F6A0E040640A040252AD', 'Pemerintah Kab. Empat Lawang', 'A5EB03E23BEEF6A0E040640A040252AD'),
('A5EB03E24198F6A0E040640A040252AD', 'Pemerintah Kota Palembang', 'A5EB03E23CBDF6A0E040640A040252AD'),
('A5EB03E24199F6A0E040640A040252AD', 'Pemerintah Kota Pagar Alam', 'A5EB03E23B32F6A0E040640A040252AD'),
('A5EB03E2419AF6A0E040640A040252AD', 'Pemerintah Kota Lubuk Linggau', 'A5EB03E23CBEF6A0E040640A040252AD'),
('A5EB03E2419BF6A0E040640A040252AD', 'Pemerintah Kota Prabumulih', 'A5EB03E23B33F6A0E040640A040252AD'),
('ff80808140cec7d80140e1972f0551c9', 'Pemerintah Kab. Penukal Abab Lematang Ilir', 'ff80808140cec7d80140e1972df151c8'),
('A5EB03E2419CF6A0E040640A040252AD', 'Pemerintah Provinsi Kep. Bangka Belitung', 'A5EB03E23CBFF6A0E040640A040252AD'),
('A5EB03E2419DF6A0E040640A040252AD', 'Pemerintah Kab. Bangka', 'A5EB03E23B56F6A0E040640A040252AD'),
('A5EB03E2419EF6A0E040640A040252AD', 'Pemerintah Kab. Belitung', 'A5EB03E23B34F6A0E040640A040252AD'),
('A5EB03E2419FF6A0E040640A040252AD', 'Pemerintah Kab. Bangka Barat', 'A5EB03E23B35F6A0E040640A040252AD'),
('A5EB03E241A0F6A0E040640A040252AD', 'Pemerintah Kab. Bangka Tengah', 'A5EB03E23CC0F6A0E040640A040252AD'),
('A5EB03E241A1F6A0E040640A040252AD', 'Pemerintah Kab. Bangka Selatan', 'A5EB03E23B36F6A0E040640A040252AD'),
('A5EB03E241A2F6A0E040640A040252AD', 'Pemerintah Kab. Belitung Timur', 'A5EB03E23CC1F6A0E040640A040252AD'),
('A5EB03E241A3F6A0E040640A040252AD', 'Pemerintah Kota Pangkal Pinang', 'A5EB03E23CFCF6A0E040640A040252AD'),
('A5EB03E241A4F6A0E040640A040252AD', 'Pemerintah Provinsi Bengkulu', 'A5EB03E23C2BF6A0E040640A040252AD'),
('A5EB03E241A5F6A0E040640A040252AD', 'Pemerintah Kab. Bengkulu Utara', 'A5EB03E23C2CF6A0E040640A040252AD'),
('A5EB03E241A6F6A0E040640A040252AD', 'Pemerintah Kab. Bengkulu Selatan', 'A5EB03E23C2DF6A0E040640A040252AD'),
('A5EB03E241A7F6A0E040640A040252AD', 'Pemerintah Kab. Rejang Lebong', 'A5EB03E23C2EF6A0E040640A040252AD'),
('A5EB03E241A8F6A0E040640A040252AD', 'Pemerintah Kab. Kaur', 'A5EB03E23C2FF6A0E040640A040252AD'),
('A5EB03E241A9F6A0E040640A040252AD', 'Pemerintah Kab. Seluma', 'A5EB03E23C30F6A0E040640A040252AD'),
('A5EB03E241ABF6A0E040640A040252AD', 'Pemerintah Kab. Kepahiang', 'A5EB03E23D2DF6A0E040640A040252AD'),
('A5EB03E241ACF6A0E040640A040252AD', 'Pemerintah Kab. Lebong', 'A5EB03E23B4DF6A0E040640A040252AD'),
('A5EB03E241ADF6A0E040640A040252AD', 'Pemerintah Kab. Bengkulu Tengah', 'A5EB03E23B7FF6A0E040640A040252AD'),
('A5EB03E241AEF6A0E040640A040252AD', 'Pemerintah Kota Bengkulu', 'A5EB03E23C32F6A0E040640A040252AD'),
('A5EB03E241AFF6A0E040640A040252AD', 'Pemerintah Provinsi Lampung', 'A5EB03E23C33F6A0E040640A040252AD'),
('A5EB03E241B0F6A0E040640A040252AD', 'Pemerintah Kab. Lampung Selatan', 'A5EB03E23C34F6A0E040640A040252AD'),
('A5EB03E241B1F6A0E040640A040252AD', 'Pemerintah Kab. Lampung Tengah', 'A5EB03E23C35F6A0E040640A040252AD'),
('A5EB03E241B2F6A0E040640A040252AD', 'Pemerintah Kab. Lampung Utara', 'A5EB03E23C36F6A0E040640A040252AD'),
('A5EB03E241B3F6A0E040640A040252AD', 'Pemerintah Kab. Lampung Barat', 'A5EB03E23C37F6A0E040640A040252AD'),
('A5EB03E241B4F6A0E040640A040252AD', 'Pemerintah Kab. Tulang Bawang', 'A5EB03E23C38F6A0E040640A040252AD'),
('A5EB03E241B5F6A0E040640A040252AD', 'Pemerintah Kab. Tanggamus', 'A5EB03E23B6EF6A0E040640A040252AD'),
('A5EB03E241B6F6A0E040640A040252AD', 'Pemerintah Kab. Way Kanan', 'A5EB03E23C39F6A0E040640A040252AD'),
('A5EB03E241B7F6A0E040640A040252AD', 'Pemerintah Kab. Lampung Timur', 'A5EB03E23B6FF6A0E040640A040252AD'),
('A5EB03E241B8F6A0E040640A040252AD', 'Pemerintah Kab. Pesawaran', 'A5EB03E23AF7F6A0E040640A040252AD'),
('A5EB03E241BAF6A0E040640A040252AD', 'Pemerintah Kab. Pringsewu', 'A5EB03E23D60F6A0E040640A040252AD'),
('A5EB03E241BBF6A0E040640A040252AD', 'Pemerintah Kab. Mesuji', 'A5EB03E23D61F6A0E040640A040252AD'),
('ff80808141007d280141071725850047', 'Pemerintah Kab. Pesisir Barat', 'ff80808141007d280141071724a60046'),
('A5EB03E241BCF6A0E040640A040252AD', 'Pemerintah Kota Metro', 'A5EB03E23C3AF6A0E040640A040252AD'),
('A5EB03E241BDF6A0E040640A040252AD', 'Pemerintah Kota Bandar Lampung', 'A5EB03E23B70F6A0E040640A040252AD'),
('A5EB03E241BEF6A0E040640A040252AD', 'Pemerintah Provinsi Daerah Khusus Ibukota Jakarta', 'A5EB03E23C3BF6A0E040640A040252AD'),
('A5EB03E241C5F6A0E040640A040252AD', 'Pemerintah Provinsi Jawa Barat', 'A5EB03E23B74F6A0E040640A040252AD'),
('A5EB03E241C6F6A0E040640A040252AD', 'Pemerintah Kab. Bogor', 'A5EB03E23C3FF6A0E040640A040252AD'),
('A5EB03E241C7F6A0E040640A040252AD', 'Pemerintah Kab. Sukabumi', 'A5EB03E23C40F6A0E040640A040252AD'),
('A5EB03E241C8F6A0E040640A040252AD', 'Pemerintah Kab. Cianjur', 'A5EB03E23B75F6A0E040640A040252AD'),
('A5EB03E241C9F6A0E040640A040252AD', 'Pemerintah Kab. Bekasi', 'A5EB03E23C41F6A0E040640A040252AD'),
('A5EB03E241CAF6A0E040640A040252AD', 'Pemerintah Kab. Karawang', 'A5EB03E23B76F6A0E040640A040252AD'),
('A5EB03E241CBF6A0E040640A040252AD', 'Pemerintah Kab. Purwakarta', 'A5EB03E23C42F6A0E040640A040252AD'),
('A5EB03E241CCF6A0E040640A040252AD', 'Pemerintah Kab. Subang', 'A5EB03E23B77F6A0E040640A040252AD'),
('A5EB03E241CDF6A0E040640A040252AD', 'Pemerintah Kab. Bandung', 'A5EB03E23C43F6A0E040640A040252AD'),
('A5EB03E241CEF6A0E040640A040252AD', 'Pemerintah Kab. Sumedang', 'A5EB03E23B78F6A0E040640A040252AD'),
('A5EB03E241CFF6A0E040640A040252AD', 'Pemerintah Kab. Garut', 'A5EB03E23C44F6A0E040640A040252AD'),
('A5EB03E241D0F6A0E040640A040252AD', 'Pemerintah Kab. Tasikmalaya', 'A5EB03E23B79F6A0E040640A040252AD'),
('A5EB03E241D1F6A0E040640A040252AD', 'Pemerintah Kab. Ciamis', 'A5EB03E23B45F6A0E040640A040252AD'),
('A5EB03E241D2F6A0E040640A040252AD', 'Pemerintah Kab. Cirebon', 'A5EB03E23C45F6A0E040640A040252AD'),
('A5EB03E241D3F6A0E040640A040252AD', 'Pemerintah Kab. Kuningan', 'A5EB03E23B97F6A0E040640A040252AD'),
('A5EB03E241D4F6A0E040640A040252AD', 'Pemerintah Kab. Indramayu', 'A5EB03E23C46F6A0E040640A040252AD'),
('A5EB03E241D5F6A0E040640A040252AD', 'Pemerintah Kab. Majalengka', 'A5EB03E23B98F6A0E040640A040252AD'),
('A5EB03E241D6F6A0E040640A040252AD', 'Pemerintah Kab. Bandung Barat', 'A5EB03E23B7BF6A0E040640A040252AD'),
('ff8080813ff0535b013ff0cd0fd02e18', 'Pemerintah Kab. Pangandaran', 'ff8080813ff0535b013ff0cd0e792e17'),
('A5EB03E241D7F6A0E040640A040252AD', 'Pemerintah Kota Bandung', 'A5EB03E23C47F6A0E040640A040252AD'),
('A5EB03E241D8F6A0E040640A040252AD', 'Pemerintah Kota Bogor', 'A5EB03E23B99F6A0E040640A040252AD'),
('A5EB03E241D9F6A0E040640A040252AD', 'Pemerintah Kota Sukabumi', 'A5EB03E23C48F6A0E040640A040252AD'),
('A5EB03E241DBF6A0E040640A040252AD', 'Pemerintah Kota Bekasi', 'A5EB03E23C49F6A0E040640A040252AD'),
('A5EB03E241DCF6A0E040640A040252AD', 'Pemerintah Kota Depok', 'A5EB03E23B9BF6A0E040640A040252AD'),
('A5EB03E241DDF6A0E040640A040252AD', 'Pemerintah Kota Cimahi', 'A5EB03E23C4AF6A0E040640A040252AD'),
('A5EB03E241DEF6A0E040640A040252AD', 'Pemerintah Kota Tasikmalaya', 'A5EB03E23B9CF6A0E040640A040252AD'),
('A5EB03E241DFF6A0E040640A040252AD', 'Pemerintah Kota Banjar', 'A5EB03E23C4BF6A0E040640A040252AD'),
('A5EB03E241E0F6A0E040640A040252AD', 'Pemerintah Provinsi Banten', 'A5EB03E23B9DF6A0E040640A040252AD'),
('A5EB03E241E1F6A0E040640A040252AD', 'Pemerintah Kab. Serang', 'A5EB03E23B46F6A0E040640A040252AD'),
('A5EB03E241E2F6A0E040640A040252AD', 'Pemerintah Kab. Pandeglang', 'A5EB03E23C4CF6A0E040640A040252AD'),
('A5EB03E241E3F6A0E040640A040252AD', 'Pemerintah Kab. Lebak', 'A5EB03E23B9EF6A0E040640A040252AD'),
('A5EB03E241E4F6A0E040640A040252AD', 'Pemerintah Kab. Tangerang', 'A5EB03E23C4DF6A0E040640A040252AD'),
('A5EB03E241E5F6A0E040640A040252AD', 'Pemerintah Kota Tangerang', 'A5EB03E23B9FF6A0E040640A040252AD'),
('A5EB03E241E6F6A0E040640A040252AD', 'Pemerintah Kota Cilegon', 'A5EB03E23C4EF6A0E040640A040252AD'),
('A5EB03E241E7F6A0E040640A040252AD', 'Pemerintah Kota Serang', 'A5EB03E23B81F6A0E040640A040252AD'),
('A5EB03E241E8F6A0E040640A040252AD', 'Pemerintah Kota Tangerang Selatan', 'A5EB03E23D65F6A0E040640A040252AD'),
('A5EB03E241E9F6A0E040640A040252AD', 'Pemerintah Daerah D I Yogyakarta', 'A5EB03E23BA0F6A0E040640A040252AD'),
('A5EB03E241EAF6A0E040640A040252AD', 'Pemerintah Kab. Bantul', 'A5EB03E23C4FF6A0E040640A040252AD'),
('A5EB03E241EBF6A0E040640A040252AD', 'Pemerintah Kab. Sleman', 'A5EB03E23BA1F6A0E040640A040252AD'),
('A5EB03E241ECF6A0E040640A040252AD', 'Pemerintah Kab. Gunung Kidul', 'A5EB03E23B42F6A0E040640A040252AD'),
('A5EB03E241EDF6A0E040640A040252AD', 'Pemerintah Kab. Kulon Progo', 'A5EB03E23BA2F6A0E040640A040252AD'),
('A5EB03E241EEF6A0E040640A040252AD', 'Pemerintah Kota Yogyakarta', 'A5EB03E23C50F6A0E040640A040252AD'),
('A5EB03E241EFF6A0E040640A040252AD', 'Pemerintah Provinsi Jawa Tengah', 'A5EB03E23BA3F6A0E040640A040252AD'),
('A5EB03E241F0F6A0E040640A040252AD', 'Pemerintah Kab. Semarang', 'A5EB03E23C51F6A0E040640A040252AD'),
('A5EB03E241F1F6A0E040640A040252AD', 'Pemerintah Kab. Kendal', 'A5EB03E23C52F6A0E040640A040252AD'),
('A5EB03E241F2F6A0E040640A040252AD', 'Pemerintah Kab. Demak', 'A5EB03E23BA4F6A0E040640A040252AD'),
('A5EB03E241F3F6A0E040640A040252AD', 'Pemerintah Kab. Grobogan', 'A5EB03E23C53F6A0E040640A040252AD'),
('A5EB03E241F4F6A0E040640A040252AD', 'Pemerintah Kab. Pekalongan', 'A5EB03E23BA5F6A0E040640A040252AD'),
('A5EB03E241F5F6A0E040640A040252AD', 'Pemerintah Kab. Batang', 'A5EB03E23C54F6A0E040640A040252AD'),
('A5EB03E241F6F6A0E040640A040252AD', 'Pemerintah Kab. Tegal', 'A5EB03E23BA6F6A0E040640A040252AD'),
('A5EB03E241F7F6A0E040640A040252AD', 'Pemerintah Kab. Brebes', 'A5EB03E23C55F6A0E040640A040252AD'),
('A5EB03E241F8F6A0E040640A040252AD', 'Pemerintah Kab. Pati', 'A5EB03E23BA7F6A0E040640A040252AD'),
('A5EB03E241F9F6A0E040640A040252AD', 'Pemerintah Kab. Kudus', 'A5EB03E23C56F6A0E040640A040252AD'),
('A5EB03E241FAF6A0E040640A040252AD', 'Pemerintah Kab. Pemalang', 'A5EB03E23BA8F6A0E040640A040252AD'),
('A5EB03E241FBF6A0E040640A040252AD', 'Pemerintah Kab. Jepara', 'A5EB03E23C57F6A0E040640A040252AD'),
('A5EB03E241FCF6A0E040640A040252AD', 'Pemerintah Kab. Rembang', 'A5EB03E23BA9F6A0E040640A040252AD'),
('A5EB03E241FDF6A0E040640A040252AD', 'Pemerintah Kab. Blora', 'A5EB03E23C58F6A0E040640A040252AD'),
('A5EB03E241FEF6A0E040640A040252AD', 'Pemerintah Kab. Banyumas', 'A5EB03E23BAAF6A0E040640A040252AD'),
('A5EB03E241FFF6A0E040640A040252AD', 'Pemerintah Kab. Cilacap', 'A5EB03E23C59F6A0E040640A040252AD'),
('A5EB03E24200F6A0E040640A040252AD', 'Pemerintah Kab. Purbalingga', 'A5EB03E23BABF6A0E040640A040252AD'),
('A5EB03E24201F6A0E040640A040252AD', 'Pemerintah Kab. Banjarnegara', 'A5EB03E23C5AF6A0E040640A040252AD'),
('A5EB03E24202F6A0E040640A040252AD', 'Pemerintah Kab. Magelang', 'A5EB03E23BACF6A0E040640A040252AD'),
('A5EB03E24203F6A0E040640A040252AD', 'Pemerintah Kab. Temanggung', 'A5EB03E23C5BF6A0E040640A040252AD'),
('A5EB03E24204F6A0E040640A040252AD', 'Pemerintah Kab. Wonosobo', 'A5EB03E23CF6F6A0E040640A040252AD'),
('A5EB03E24205F6A0E040640A040252AD', 'Pemerintah Kab. Purworejo', 'A5EB03E23BADF6A0E040640A040252AD'),
('A5EB03E24206F6A0E040640A040252AD', 'Pemerintah Kab. Kebumen', 'A5EB03E23C5CF6A0E040640A040252AD'),
('A5EB03E24207F6A0E040640A040252AD', 'Pemerintah Kab. Klaten', 'A5EB03E23C5DF6A0E040640A040252AD'),
('A5EB03E24208F6A0E040640A040252AD', 'Pemerintah Kab. Boyolali', 'A5EB03E23CC2F6A0E040640A040252AD'),
('A5EB03E24209F6A0E040640A040252AD', 'Pemerintah Kab. Sragen', 'A5EB03E23CC3F6A0E040640A040252AD'),
('A5EB03E2420AF6A0E040640A040252AD', 'Pemerintah Kab. Sukoharjo', 'A5EB03E23CC4F6A0E040640A040252AD'),
('A5EB03E2420BF6A0E040640A040252AD', 'Pemerintah Kab. Karanganyar', 'A5EB03E23CC5F6A0E040640A040252AD'),
('A5EB03E2420CF6A0E040640A040252AD', 'Pemerintah Kab. Wonogiri', 'A5EB03E23CC6F6A0E040640A040252AD'),
('A5EB03E2420DF6A0E040640A040252AD', 'Pemerintah Kota Semarang', 'A5EB03E23CC7F6A0E040640A040252AD'),
('A5EB03E2420EF6A0E040640A040252AD', 'Pemerintah Kota Salatiga', 'A5EB03E23CC8F6A0E040640A040252AD'),
('A5EB03E24210F6A0E040640A040252AD', 'Pemerintah Kota Tegal', 'A5EB03E23CCAF6A0E040640A040252AD'),
('A5EB03E24211F6A0E040640A040252AD', 'Pemerintah Kota Magelang', 'A5EB03E23CCBF6A0E040640A040252AD'),
('A5EB03E24212F6A0E040640A040252AD', 'Pemerintah Kota Surakarta', 'A5EB03E23B43F6A0E040640A040252AD'),
('A5EB03E24213F6A0E040640A040252AD', 'Pemerintah Provinsi Jawa Timur', 'A5EB03E23CCCF6A0E040640A040252AD'),
('A5EB03E24214F6A0E040640A040252AD', 'Pemerintah Kab. Gresik', 'A5EB03E23CCDF6A0E040640A040252AD'),
('A5EB03E24215F6A0E040640A040252AD', 'Pemerintah Kab. Mojokerto', 'A5EB03E23CCEF6A0E040640A040252AD'),
('A5EB03E24216F6A0E040640A040252AD', 'Pemerintah Kab. Sidoarjo', 'A5EB03E23CCFF6A0E040640A040252AD'),
('A5EB03E24217F6A0E040640A040252AD', 'Pemerintah Kab. Jombang', 'A5EB03E23CD0F6A0E040640A040252AD'),
('A5EB03E24218F6A0E040640A040252AD', 'Pemerintah Kab. Sampang', 'A5EB03E23CD1F6A0E040640A040252AD'),
('A5EB03E24219F6A0E040640A040252AD', 'Pemerintah Kab. Pamekasan', 'A5EB03E23CD2F6A0E040640A040252AD'),
('A5EB03E2421AF6A0E040640A040252AD', 'Pemerintah Kab. Sumenep', 'A5EB03E23B37F6A0E040640A040252AD'),
('A5EB03E2421BF6A0E040640A040252AD', 'Pemerintah Kab. Bangkalan', 'A5EB03E23CD3F6A0E040640A040252AD'),
('A5EB03E2421CF6A0E040640A040252AD', 'Pemerintah Kab. Bondowoso', 'A5EB03E23B38F6A0E040640A040252AD'),
('A5EB03E2421DF6A0E040640A040252AD', 'Pemerintah Kab. Situbondo', 'A5EB03E23CD4F6A0E040640A040252AD'),
('A5EB03E2421EF6A0E040640A040252AD', 'Pemerintah Kab. Banyuwangi', 'A5EB03E23B39F6A0E040640A040252AD'),
('A5EB03E2421FF6A0E040640A040252AD', 'Pemerintah Kab. Jember', 'A5EB03E23CD5F6A0E040640A040252AD'),
('A5EB03E24220F6A0E040640A040252AD', 'Pemerintah Kab. Malang', 'A5EB03E23B3AF6A0E040640A040252AD'),
('A5EB03E24221F6A0E040640A040252AD', 'Pemerintah Kab. Pasuruan', 'A5EB03E23CD6F6A0E040640A040252AD'),
('A5EB03E24222F6A0E040640A040252AD', 'Pemerintah Kab. Probolinggo', 'A5EB03E23B3BF6A0E040640A040252AD'),
('A5EB03E24223F6A0E040640A040252AD', 'Pemerintah Kab. Lumajang', 'A5EB03E23CD7F6A0E040640A040252AD'),
('A5EB03E24224F6A0E040640A040252AD', 'Pemerintah Kab. Kediri', 'A5EB03E23B3CF6A0E040640A040252AD'),
('A5EB03E24225F6A0E040640A040252AD', 'Pemerintah Kab. Tulungagung', 'A5EB03E23CD8F6A0E040640A040252AD'),
('A5EB03E24226F6A0E040640A040252AD', 'Pemerintah Kab. Nganjuk', 'A5EB03E23B3DF6A0E040640A040252AD'),
('A5EB03E24227F6A0E040640A040252AD', 'Pemerintah Kab. Trenggalek', 'A5EB03E23CD9F6A0E040640A040252AD'),
('A5EB03E24228F6A0E040640A040252AD', 'Pemerintah Kab. Blitar', 'A5EB03E23B3EF6A0E040640A040252AD'),
('A5EB03E24229F6A0E040640A040252AD', 'Pemerintah Kab. Madiun', 'A5EB03E23CDAF6A0E040640A040252AD'),
('A5EB03E2422AF6A0E040640A040252AD', 'Pemerintah Kab. Ngawi', 'A5EB03E23B3FF6A0E040640A040252AD'),
('A5EB03E2422BF6A0E040640A040252AD', 'Pemerintah Kab. Magetan', 'A5EB03E23CDBF6A0E040640A040252AD'),
('A5EB03E2422CF6A0E040640A040252AD', 'Pemerintah Kab. Ponorogo', 'A5EB03E23B40F6A0E040640A040252AD'),
('A5EB03E2422DF6A0E040640A040252AD', 'Pemerintah Kab. Pacitan', 'A5EB03E23CDCF6A0E040640A040252AD'),
('A5EB03E2422EF6A0E040640A040252AD', 'Pemerintah Kab. Bojonegoro', 'A5EB03E23B41F6A0E040640A040252AD'),
('A5EB03E2422FF6A0E040640A040252AD', 'Pemerintah Kab. Tuban', 'A5EB03E23CDDF6A0E040640A040252AD'),
('A5EB03E24230F6A0E040640A040252AD', 'Pemerintah Kab. Lamongan', 'A5EB03E23B57F6A0E040640A040252AD'),
('A5EB03E24231F6A0E040640A040252AD', 'Pemerintah Kota Surabaya', 'A5EB03E23B44F6A0E040640A040252AD'),
('A5EB03E24232F6A0E040640A040252AD', 'Pemerintah Kota Mojokerto', 'A5EB03E23CDEF6A0E040640A040252AD'),
('A5EB03E24233F6A0E040640A040252AD', 'Pemerintah Kota Malang', 'A5EB03E23B58F6A0E040640A040252AD'),
('A5EB03E24234F6A0E040640A040252AD', 'Pemerintah Kota Pasuruan', 'A5EB03E23CDFF6A0E040640A040252AD'),
('A5EB03E24235F6A0E040640A040252AD', 'Pemerintah Kota Probolinggo', 'A5EB03E23B59F6A0E040640A040252AD'),
('A5EB03E24236F6A0E040640A040252AD', 'Pemerintah Kota Blitar', 'A5EB03E23CE0F6A0E040640A040252AD'),
('A5EB03E24237F6A0E040640A040252AD', 'Pemerintah Kota Kediri', 'A5EB03E23B5AF6A0E040640A040252AD'),
('A5EB03E24238F6A0E040640A040252AD', 'Pemerintah Kota Madiun', 'A5EB03E23CE1F6A0E040640A040252AD'),
('A5EB03E24239F6A0E040640A040252AD', 'Pemerintah Kota Batu', 'A5EB03E23B5BF6A0E040640A040252AD'),
('A5EB03E2423AF6A0E040640A040252AD', 'Pemerintah Provinsi Kalimantan Barat', 'A5EB03E23B5CF6A0E040640A040252AD'),
('A5EB03E2423BF6A0E040640A040252AD', 'Pemerintah Kab. Sambas', 'A5EB03E23CE2F6A0E040640A040252AD'),
('A5EB03E2423CF6A0E040640A040252AD', 'Pemerintah Kab. Sanggau', 'A5EB03E23CE3F6A0E040640A040252AD'),
('A5EB03E2423DF6A0E040640A040252AD', 'Pemerintah Kab. Sintang', 'A5EB03E23CE4F6A0E040640A040252AD'),
('A5EB03E2423EF6A0E040640A040252AD', 'Pemerintah Kab. Mempawah', 'A5EB03E23B5DF6A0E040640A040252AD'),
('A5EB03E2423FF6A0E040640A040252AD', 'Pemerintah Kab. Kapuas Hulu', 'A5EB03E23CE5F6A0E040640A040252AD'),
('A5EB03E24240F6A0E040640A040252AD', 'Pemerintah Kab. Ketapang', 'A5EB03E23B5EF6A0E040640A040252AD'),
('A5EB03E24241F6A0E040640A040252AD', 'Pemerintah Kab. Bengkayang', 'A5EB03E23CE6F6A0E040640A040252AD'),
('A5EB03E24243F6A0E040640A040252AD', 'Pemerintah Kab. Melawi', 'A5EB03E23D2EF6A0E040640A040252AD'),
('A5EB03E24244F6A0E040640A040252AD', 'Pemerintah Kab. Sekadau', 'A5EB03E23D5DF6A0E040640A040252AD'),
('A5EB03E24245F6A0E040640A040252AD', 'Pemerintah Kab. Kubu Raya', 'A5EB03E23D4AF6A0E040640A040252AD'),
('A5EB03E24246F6A0E040640A040252AD', 'Pemerintah Kab. Kayong Utara', 'A5EB03E23BDDF6A0E040640A040252AD'),
('A5EB03E24247F6A0E040640A040252AD', 'Pemerintah Kota Pontianak', 'A5EB03E23B60F6A0E040640A040252AD'),
('A5EB03E24248F6A0E040640A040252AD', 'Pemerintah Kota Singkawang', 'A5EB03E23CE7F6A0E040640A040252AD'),
('A5EB03E24249F6A0E040640A040252AD', 'Pemerintah Provinsi Kalimantan Tengah', 'A5EB03E23B61F6A0E040640A040252AD'),
('A5EB03E2424AF6A0E040640A040252AD', 'Pemerintah Kab. Kapuas', 'A5EB03E23CE8F6A0E040640A040252AD'),
('A5EB03E2424BF6A0E040640A040252AD', 'Pemerintah Kab. Barito Utara', 'A5EB03E23CE9F6A0E040640A040252AD'),
('A5EB03E2424CF6A0E040640A040252AD', 'Pemerintah Kab. Barito Selatan', 'A5EB03E23B62F6A0E040640A040252AD'),
('A5EB03E2424DF6A0E040640A040252AD', 'Pemerintah Kab. Kotawaringin Timur', 'A5EB03E23CEAF6A0E040640A040252AD'),
('A5EB03E2424EF6A0E040640A040252AD', 'Pemerintah Kab. Kotawaringin Barat', 'A5EB03E23B63F6A0E040640A040252AD'),
('A5EB03E2424FF6A0E040640A040252AD', 'Pemerintah Kab. Pulang Pisau', 'A5EB03E23CEBF6A0E040640A040252AD'),
('A5EB03E24250F6A0E040640A040252AD', 'Pemerintah Kab. Gunung Mas', 'A5EB03E23B64F6A0E040640A040252AD'),
('A5EB03E24251F6A0E040640A040252AD', 'Pemerintah Kab. Lamandau', 'A5EB03E23CECF6A0E040640A040252AD'),
('A5EB03E24252F6A0E040640A040252AD', 'Pemerintah Kab. Sukamara', 'A5EB03E23B65F6A0E040640A040252AD'),
('A5EB03E24253F6A0E040640A040252AD', 'Pemerintah Kab. Murung Raya', 'A5EB03E23CEDF6A0E040640A040252AD'),
('A5EB03E24254F6A0E040640A040252AD', 'Pemerintah Kab. Katingan', 'A5EB03E23B66F6A0E040640A040252AD'),
('A5EB03E24255F6A0E040640A040252AD', 'Pemerintah Kab. Seruyan', 'A5EB03E23CEEF6A0E040640A040252AD'),
('A5EB03E24256F6A0E040640A040252AD', 'Pemerintah Kab. Barito Timur', 'A5EB03E23B67F6A0E040640A040252AD'),
('A5EB03E24257F6A0E040640A040252AD', 'Pemerintah Kota Palangka Raya', 'A5EB03E23B4EF6A0E040640A040252AD'),
('A5EB03E24258F6A0E040640A040252AD', 'Pemerintah Provinsi Kalimantan Selatan', 'A5EB03E23B68F6A0E040640A040252AD'),
('A5EB03E24259F6A0E040640A040252AD', 'Pemerintah Kab. Banjar', 'A5EB03E23CEFF6A0E040640A040252AD'),
('A5EB03E2425AF6A0E040640A040252AD', 'Pemerintah Kab. Tanah Laut', 'A5EB03E23CF0F6A0E040640A040252AD'),
('A5EB03E2425BF6A0E040640A040252AD', 'Pemerintah Kab. Tapin', 'A5EB03E23B69F6A0E040640A040252AD'),
('A5EB03E2425CF6A0E040640A040252AD', 'Pemerintah Kab. Hulu Sungai Selatan', 'A5EB03E23CF1F6A0E040640A040252AD'),
('A5EB03E2425DF6A0E040640A040252AD', 'Pemerintah Kab. Hulu Sungai Tengah', 'A5EB03E23B6AF6A0E040640A040252AD'),
('A5EB03E2425EF6A0E040640A040252AD', 'Pemerintah Kab. Barito Kuala', 'A5EB03E23CF2F6A0E040640A040252AD'),
('A5EB03E2425FF6A0E040640A040252AD', 'Pemerintah Kab. Tabalong', 'A5EB03E23B6BF6A0E040640A040252AD'),
('A5EB03E24260F6A0E040640A040252AD', 'Pemerintah Kab. Kotabaru', 'A5EB03E23CF3F6A0E040640A040252AD'),
('A5EB03E24261F6A0E040640A040252AD', 'Pemerintah Kab. Hulu Sungai Utara', 'A5EB03E23B6CF6A0E040640A040252AD'),
('A5EB03E24262F6A0E040640A040252AD', 'Pemerintah Kab. Tanah Bumbu', 'A5EB03E23CF7F6A0E040640A040252AD'),
('A5EB03E24263F6A0E040640A040252AD', 'Pemerintah Kab. Balangan', 'A5EB03E23CF4F6A0E040640A040252AD'),
('A5EB03E24264F6A0E040640A040252AD', 'Pemerintah Kota Banjarmasin', 'A5EB03E23CF5F6A0E040640A040252AD'),
('A5EB03E24265F6A0E040640A040252AD', 'Pemerintah Kota Banjarbaru', 'A5EB03E23B6DF6A0E040640A040252AD'),
('A5EB03E24266F6A0E040640A040252AD', 'Pemerintah Provinsi Kalimantan Timur', 'A5EB03E23C61F6A0E040640A040252AD'),
('A5EB03E24267F6A0E040640A040252AD', 'Pemerintah Kab. Kutai Kartanegara', 'A5EB03E23C62F6A0E040640A040252AD'),
('A5EB03E24268F6A0E040640A040252AD', 'Pemerintah Kab. Paser', 'A5EB03E23C63F6A0E040640A040252AD'),
('A5EB03E2426AF6A0E040640A040252AD', 'Pemerintah Kab. Berau', 'A5EB03E23C65F6A0E040640A040252AD'),
('A5EB03E2426DF6A0E040640A040252AD', 'Pemerintah Kab. Kutai Barat', 'A5EB03E23B4FF6A0E040640A040252AD'),
('A5EB03E2426EF6A0E040640A040252AD', 'Pemerintah Kab. Kutai Timur', 'A5EB03E23C68F6A0E040640A040252AD'),
('A5EB03E2426FF6A0E040640A040252AD', 'Pemerintah Kab. Penajam Paser Utara', 'A5EB03E23C69F6A0E040640A040252AD'),
('ff8080813ff0535b013ff0b2991524a8', 'Pemerintah Kab. Mahakam Ulu', 'ff8080813ff0535b013ff0b296d924a7'),
('A5EB03E24271F6A0E040640A040252AD', 'Pemerintah Kota Samarinda', 'A5EB03E23C6AF6A0E040640A040252AD'),
('A5EB03E24272F6A0E040640A040252AD', 'Pemerintah Kota Balikpapan', 'A5EB03E23C6BF6A0E040640A040252AD'),
('A5EB03E24273F6A0E040640A040252AD', 'Pemerintah Kota Bontang', 'A5EB03E23C6CF6A0E040640A040252AD'),
('A5EB03E24275F6A0E040640A040252AD', 'Pemerintah Provinsi Sulawesi Utara', 'A5EB03E23C6EF6A0E040640A040252AD'),
('A5EB03E24276F6A0E040640A040252AD', 'Pemerintah Kab. Minahasa', 'A5EB03E23C6FF6A0E040640A040252AD'),
('A5EB03E24277F6A0E040640A040252AD', 'Pemerintah Kab. Bolaang Mongondow', 'A5EB03E23BAEF6A0E040640A040252AD'),
('A5EB03E24278F6A0E040640A040252AD', 'Pemerintah Kab. Kepulauan Sangihe', 'A5EB03E23C70F6A0E040640A040252AD'),
('A5EB03E24279F6A0E040640A040252AD', 'Pemerintah Kab. Minahasa Selatan', 'A5EB03E23BAFF6A0E040640A040252AD'),
('A5EB03E2427AF6A0E040640A040252AD', 'Pemerintah Kab. Kepulauan Talaud', 'A5EB03E23B53F6A0E040640A040252AD'),
('A5EB03E2427BF6A0E040640A040252AD', 'Pemerintah Kab. Minahasa Utara', 'A5EB03E23D44F6A0E040640A040252AD'),
('A5EB03E2427CF6A0E040640A040252AD', 'Pemerintah Kab. Bolaang Mongondow Utara', 'A5EB03E23B83F6A0E040640A040252AD'),
('A5EB03E2427DF6A0E040640A040252AD', 'Pemerintah Kab. Siau Tagulandang Biaro', 'A5EB03E23B84F6A0E040640A040252AD'),
('A5EB03E2427EF6A0E040640A040252AD', 'Pemerintah Kab. Minahasa Tenggara', 'A5EB03E23B85F6A0E040640A040252AD'),
('A5EB03E2427FF6A0E040640A040252AD', 'Pemerintah Kab. Bolaang Mongondow Selatan', 'A5EB03E23B86F6A0E040640A040252AD'),
('A5EB03E24280F6A0E040640A040252AD', 'Pemerintah Kab. Bolaang Mongondow Timur', 'A5EB03E23B87F6A0E040640A040252AD'),
('A5EB03E24281F6A0E040640A040252AD', 'Pemerintah Kota Manado', 'A5EB03E23C71F6A0E040640A040252AD'),
('A5EB03E24282F6A0E040640A040252AD', 'Pemerintah Kota Bitung', 'A5EB03E23BB0F6A0E040640A040252AD'),
('A5EB03E24283F6A0E040640A040252AD', 'Pemerintah Kota Tomohon', 'A5EB03E23C72F6A0E040640A040252AD'),
('A5EB03E24284F6A0E040640A040252AD', 'Pemerintah Kota KotaMobagu', 'A5EB03E23B88F6A0E040640A040252AD'),
('A5EB03E24285F6A0E040640A040252AD', 'Pemerintah Provinsi Gorontalo', 'A5EB03E23BB1F6A0E040640A040252AD'),
('A5EB03E24286F6A0E040640A040252AD', 'Pemerintah Kab. Gorontalo', 'A5EB03E23C73F6A0E040640A040252AD'),
('A5EB03E24287F6A0E040640A040252AD', 'Pemerintah Kab. Boalemo', 'A5EB03E23BB2F6A0E040640A040252AD'),
('A5EB03E24288F6A0E040640A040252AD', 'Pemerintah Kab. Pohuwato', 'A5EB03E23C74F6A0E040640A040252AD'),
('A5EB03E24289F6A0E040640A040252AD', 'Pemerintah Kab. Bone Bolango', 'A5EB03E23BB3F6A0E040640A040252AD'),
('A5EB03E2428AF6A0E040640A040252AD', 'Pemerintah Kab. Gorontalo Utara', 'A5EB03E23B8BF6A0E040640A040252AD'),
('A5EB03E2428BF6A0E040640A040252AD', 'Pemerintah Kota Gorontalo', 'A5EB03E23C75F6A0E040640A040252AD'),
('A5EB03E2428CF6A0E040640A040252AD', 'Pemerintah Provinsi Sulawesi Tengah', 'A5EB03E23BB4F6A0E040640A040252AD'),
('A5EB03E2428DF6A0E040640A040252AD', 'Pemerintah Kab. Poso', 'A5EB03E23C76F6A0E040640A040252AD'),
('A5EB03E2428EF6A0E040640A040252AD', 'Pemerintah Kab. Donggala', 'A5EB03E23C77F6A0E040640A040252AD'),
('A5EB03E2428FF6A0E040640A040252AD', 'Pemerintah Kab. Tolitoli', 'A5EB03E23BB5F6A0E040640A040252AD'),
('A5EB03E24290F6A0E040640A040252AD', 'Pemerintah Kab. Banggai', 'A5EB03E23C78F6A0E040640A040252AD'),
('A5EB03E24291F6A0E040640A040252AD', 'Pemerintah Kab. Buol', 'A5EB03E23BB6F6A0E040640A040252AD'),
('A5EB03E24292F6A0E040640A040252AD', 'Pemerintah Kab. Morowali', 'A5EB03E23C79F6A0E040640A040252AD'),
('A5EB03E24293F6A0E040640A040252AD', 'Pemerintah Kab. Banggai Kepulauan', 'A5EB03E23BB7F6A0E040640A040252AD'),
('A5EB03E24294F6A0E040640A040252AD', 'Pemerintah Kab. Parigi Moutong', 'A5EB03E23C7AF6A0E040640A040252AD'),
('A5EB03E24295F6A0E040640A040252AD', 'Pemerintah Kab. Tojo Una Una', 'A5EB03E23D35F6A0E040640A040252AD'),
('A5EB03E24296F6A0E040640A040252AD', 'Pemerintah Kab. Sigi', 'A5EB03E23B89F6A0E040640A040252AD'),
('ff8080813ff0535b013ff0d48c652eff', 'Pemerintah Kab. Banggai Laut', 'ff8080813ff0535b013ff0d48c5e2efe'),
('A5EB03E24297F6A0E040640A040252AD', 'Pemerintah Kota Palu', 'A5EB03E23BB8F6A0E040640A040252AD'),
('A5EB03E24298F6A0E040640A040252AD', 'Pemerintah Provinsi Sulawesi Selatan', 'A5EB03E23BB9F6A0E040640A040252AD'),
('A5EB03E24299F6A0E040640A040252AD', 'Pemerintah Kab. Pinrang', 'A5EB03E23C7BF6A0E040640A040252AD'),
('A5EB03E2429AF6A0E040640A040252AD', 'Pemerintah Kab. Gowa', 'A5EB03E23C7CF6A0E040640A040252AD'),
('A5EB03E2429BF6A0E040640A040252AD', 'Pemerintah Kab. Wajo', 'A5EB03E23C7DF6A0E040640A040252AD'),
('A5EB03E2429CF6A0E040640A040252AD', 'Pemerintah Kab. Bone', 'A5EB03E23BBAF6A0E040640A040252AD'),
('A5EB03E2429DF6A0E040640A040252AD', 'Pemerintah Kab. Tana Toraja', 'A5EB03E23C7EF6A0E040640A040252AD'),
('A5EB03E2429EF6A0E040640A040252AD', 'Pemerintah Kab. Maros', 'A5EB03E23BBBF6A0E040640A040252AD'),
('A5EB03E2429FF6A0E040640A040252AD', 'Pemerintah Kab. Luwu', 'A5EB03E23C7FF6A0E040640A040252AD'),
('A5EB03E242A0F6A0E040640A040252AD', 'Pemerintah Kab. Sinjai', 'A5EB03E23BBCF6A0E040640A040252AD'),
('A5EB03E242A1F6A0E040640A040252AD', 'Pemerintah Kab. Bulukumba', 'A5EB03E23B47F6A0E040640A040252AD'),
('A5EB03E242A2F6A0E040640A040252AD', 'Pemerintah Kab. Bantaeng', 'A5EB03E23BBDF6A0E040640A040252AD'),
('A5EB03E242A3F6A0E040640A040252AD', 'Pemerintah Kab. Jeneponto', 'A5EB03E23C80F6A0E040640A040252AD'),
('A5EB03E242A5F6A0E040640A040252AD', 'Pemerintah Kab. Takalar', 'A5EB03E23C81F6A0E040640A040252AD'),
('A5EB03E242A6F6A0E040640A040252AD', 'Pemerintah Kab. Barru', 'A5EB03E23BBFF6A0E040640A040252AD'),
('A5EB03E242A7F6A0E040640A040252AD', 'Pemerintah Kab. Sidenreng Rappang', 'A5EB03E23BC0F6A0E040640A040252AD'),
('A5EB03E242A8F6A0E040640A040252AD', 'Pemerintah Kab. Pangkajene dan Kepulauan', 'A5EB03E23C82F6A0E040640A040252AD'),
('A5EB03E242A9F6A0E040640A040252AD', 'Pemerintah Kab. Soppeng', 'A5EB03E23C83F6A0E040640A040252AD'),
('A5EB03E242AAF6A0E040640A040252AD', 'Pemerintah Kab. Enrekang', 'A5EB03E23BC1F6A0E040640A040252AD'),
('A5EB03E242ABF6A0E040640A040252AD', 'Pemerintah Kab. Luwu Utara', 'A5EB03E23C84F6A0E040640A040252AD'),
('A5EB03E242ACF6A0E040640A040252AD', 'Pemerintah Kab. Luwu Timur', 'A5EB03E23BC2F6A0E040640A040252AD'),
('A5EB03E242ADF6A0E040640A040252AD', 'Pemerintah Kab. Toraja Utara', 'A5EB03E23B8AF6A0E040640A040252AD'),
('A5EB03E242AFF6A0E040640A040252AD', 'Pemerintah Kota Makassar', 'A5EB03E23C85F6A0E040640A040252AD'),
('A5EB03E242B0F6A0E040640A040252AD', 'Pemerintah Kota Parepare', 'A5EB03E23BC3F6A0E040640A040252AD'),
('A5EB03E242B1F6A0E040640A040252AD', 'Pemerintah Kota Palopo', 'A5EB03E23C86F6A0E040640A040252AD'),
('A5EB03E242B2F6A0E040640A040252AD', 'Pemerintah Provinsi Sulawesi Tenggara', 'A5EB03E23BC4F6A0E040640A040252AD'),
('A5EB03E242B3F6A0E040640A040252AD', 'Pemerintah Kab. Konawe', 'A5EB03E23C87F6A0E040640A040252AD'),
('A5EB03E242B4F6A0E040640A040252AD', 'Pemerintah Kab. Buton', 'A5EB03E23C88F6A0E040640A040252AD'),
('A5EB03E242B5F6A0E040640A040252AD', 'Pemerintah Kab. Muna', 'A5EB03E23BC5F6A0E040640A040252AD'),
('A5EB03E242B6F6A0E040640A040252AD', 'Pemerintah Kab. Kolaka', 'A5EB03E23C89F6A0E040640A040252AD'),
('A5EB03E242B7F6A0E040640A040252AD', 'Pemerintah Kab. Konawe Selatan', 'A5EB03E23BC6F6A0E040640A040252AD'),
('A5EB03E242B8F6A0E040640A040252AD', 'Pemerintah Kab. Kolaka Utara', 'A5EB03E23D36F6A0E040640A040252AD'),
('A5EB03E242B9F6A0E040640A040252AD', 'Pemerintah Kab. Bombana', 'A5EB03E23D37F6A0E040640A040252AD'),
('A5EB03E242BAF6A0E040640A040252AD', 'Pemerintah Kab. Wakatobi', 'A5EB03E23D38F6A0E040640A040252AD'),
('A5EB03E242BCF6A0E040640A040252AD', 'Pemerintah Kab. Buton Utara', 'A5EB03E23D32F6A0E040640A040252AD'),
('A5EB03E242BDF6A0E040640A040252AD', 'Pemerintah Kab. Konawe Utara', 'A5EB03E23D33F6A0E040640A040252AD'),
('ff808081407013be0140718ae5b25cb6', 'Pemerintah Kab. Kolaka Timur', 'ff808081407013be0140718ae4665cb5'),
('8ae4828944dd62730144dd795a92077c', 'Pemerintah Kab. Konawe Kepulauan', '8ae4828944dd62730144dd79597f077b'),
('0D899D160ABAF3F0E050640A020213DA', 'Pemerintah Kab. Buton Selatan', '0C8286E5D5268A36E050640A150223A8'),
('0E5478E4857746FDE050640A02020C4A', 'Pemerintah Kab. Buton Tengah', '0E4FE60BDC1D9C73E050640A0202492C'),
('104AE26AA57BE0D8E050640A02023463', 'Pemerintah Kab. Muna Barat', '8ae482894bca19a4014bd87660831274'),
('A5EB03E242BEF6A0E040640A040252AD', 'Pemerintah Kota Kendari', 'A5EB03E23C8AF6A0E040640A040252AD'),
('A5EB03E242BFF6A0E040640A040252AD', 'Pemerintah Kota Baubau', 'A5EB03E23BC7F6A0E040640A040252AD'),
('A5EB03E242C0F6A0E040640A040252AD', 'Pemerintah Provinsi Bali', 'A5EB03E23C8BF6A0E040640A040252AD'),
('A5EB03E242C1F6A0E040640A040252AD', 'Pemerintah Kab. Buleleng', 'A5EB03E23BC8F6A0E040640A040252AD');
INSERT INTO `satuan_kerjas` (`id`, `nama`, `instansi_id`) VALUES
('A5EB03E242C2F6A0E040640A040252AD', 'Pemerintah Kab. Jembrana', 'A5EB03E23C8CF6A0E040640A040252AD'),
('A5EB03E242C3F6A0E040640A040252AD', 'Pemerintah Kab. Klungkung', 'A5EB03E23BC9F6A0E040640A040252AD'),
('A5EB03E242C4F6A0E040640A040252AD', 'Pemerintah Kab. Gianyar', 'A5EB03E23C8DF6A0E040640A040252AD'),
('A5EB03E242C5F6A0E040640A040252AD', 'Pemerintah Kab. Karangasem', 'A5EB03E23BCAF6A0E040640A040252AD'),
('A5EB03E242C6F6A0E040640A040252AD', 'Pemerintah Kab. Bangli', 'A5EB03E23C8EF6A0E040640A040252AD'),
('A5EB03E242C7F6A0E040640A040252AD', 'Pemerintah Kab. Badung', 'A5EB03E23C8FF6A0E040640A040252AD'),
('A5EB03E242C8F6A0E040640A040252AD', 'Pemerintah Kab. Tabanan', 'A5EB03E23CF8F6A0E040640A040252AD'),
('A5EB03E242C9F6A0E040640A040252AD', 'Pemerintah Kota Denpasar', 'A5EB03E23BCBF6A0E040640A040252AD'),
('A5EB03E242CAF6A0E040640A040252AD', 'Pemerintah Provinsi NTB', 'A5EB03E23C90F6A0E040640A040252AD'),
('A5EB03E242CBF6A0E040640A040252AD', 'Pemerintah Kab. Lombok Barat', 'A5EB03E23BCCF6A0E040640A040252AD'),
('A5EB03E242CCF6A0E040640A040252AD', 'Pemerintah Kab. Lombok Tengah', 'A5EB03E23C91F6A0E040640A040252AD'),
('A5EB03E242CDF6A0E040640A040252AD', 'Pemerintah Kab. Lombok Timur', 'A5EB03E23BCDF6A0E040640A040252AD'),
('A5EB03E242CEF6A0E040640A040252AD', 'Pemerintah Kab. Bima', 'A5EB03E23C92F6A0E040640A040252AD'),
('A5EB03E242CFF6A0E040640A040252AD', 'Pemerintah Kab. Sumbawa', 'A5EB03E23CF9F6A0E040640A040252AD'),
('A5EB03E242D0F6A0E040640A040252AD', 'Pemerintah Kab. Dompu', 'A5EB03E23C93F6A0E040640A040252AD'),
('A5EB03E242D1F6A0E040640A040252AD', 'Pemerintah Kab. Sumbawa Barat', 'A5EB03E23D39F6A0E040640A040252AD'),
('A5EB03E242D2F6A0E040640A040252AD', 'Pemerintah Kab. Lombok Utara', 'A5EB03E23B82F6A0E040640A040252AD'),
('A5EB03E242D3F6A0E040640A040252AD', 'Pemerintah Kota Mataram', 'A5EB03E23BCEF6A0E040640A040252AD'),
('A5EB03E242D4F6A0E040640A040252AD', 'Pemerintah Kota Bima', 'A5EB03E23C94F6A0E040640A040252AD'),
('A5EB03E242D5F6A0E040640A040252AD', 'Pemerintah Provinsi NTT', 'A5EB03E23BCFF6A0E040640A040252AD'),
('A5EB03E242D6F6A0E040640A040252AD', 'Pemerintah Kab. Kupang', 'A5EB03E23CFEF6A0E040640A040252AD'),
('A5EB03E242D7F6A0E040640A040252AD', 'Pemerintah Kab. Belu', 'A5EB03E23CFFF6A0E040640A040252AD'),
('A5EB03E242D8F6A0E040640A040252AD', 'Pemerintah Kab. Timor Tengah Utara', 'A5EB03E23D00F6A0E040640A040252AD'),
('A5EB03E242D9F6A0E040640A040252AD', 'Pemerintah Kab. Timor Tengah Selatan', 'A5EB03E23D01F6A0E040640A040252AD'),
('A5EB03E242DAF6A0E040640A040252AD', 'Pemerintah Kab. Alor', 'A5EB03E23B52F6A0E040640A040252AD'),
('A5EB03E242DBF6A0E040640A040252AD', 'Pemerintah Kab. Sikka', 'A5EB03E23D02F6A0E040640A040252AD'),
('A5EB03E242DCF6A0E040640A040252AD', 'Pemerintah Kab. Flores Timur', 'A5EB03E23D03F6A0E040640A040252AD'),
('A5EB03E242DDF6A0E040640A040252AD', 'Pemerintah Kab. Ende', 'A5EB03E23D04F6A0E040640A040252AD'),
('A5EB03E242DEF6A0E040640A040252AD', 'Pemerintah Kab. Ngada', 'A5EB03E23D05F6A0E040640A040252AD'),
('A5EB03E242DFF6A0E040640A040252AD', 'Pemerintah Kab. Manggarai', 'A5EB03E23D06F6A0E040640A040252AD'),
('A5EB03E242E0F6A0E040640A040252AD', 'Pemerintah Kab. Sumba Timur', 'A5EB03E23D07F6A0E040640A040252AD'),
('A5EB03E242E1F6A0E040640A040252AD', 'Pemerintah Kab. Sumba Barat', 'A5EB03E23D08F6A0E040640A040252AD'),
('A5EB03E242E2F6A0E040640A040252AD', 'Pemerintah Kab. Lembata', 'A5EB03E23D09F6A0E040640A040252AD'),
('A5EB03E242E3F6A0E040640A040252AD', 'Pemerintah Kab. Rote Ndao', 'A5EB03E23D0AF6A0E040640A040252AD'),
('A5EB03E242E4F6A0E040640A040252AD', 'Pemerintah Kab. Manggarai Barat', 'A5EB03E23D0BF6A0E040640A040252AD'),
('A5EB03E242E5F6A0E040640A040252AD', 'Pemerintah Kab. Manggarai Timur', 'A5EB03E23D57F6A0E040640A040252AD'),
('A5EB03E242E6F6A0E040640A040252AD', 'Pemerintah Kab. Sumba Barat Daya', 'A5EB03E23D49F6A0E040640A040252AD'),
('A5EB03E242E7F6A0E040640A040252AD', 'Pemerintah Kab. Nagekeo', 'A5EB03E23C1CF6A0E040640A040252AD'),
('A5EB03E242E8F6A0E040640A040252AD', 'Pemerintah Kab. Sumba Tengah', 'A5EB03E23C1DF6A0E040640A040252AD'),
('ff8080813ff0535b013ff0cfe02b2e83', 'Pemerintah Kab. Malaka', 'ff8080813ff0535b013ff0cfe00e2e82'),
('A5EB03E242EAF6A0E040640A040252AD', 'Pemerintah Kota Kupang', 'A5EB03E23D0CF6A0E040640A040252AD'),
('A5EB03E242EBF6A0E040640A040252AD', 'Pemerintah Provinsi Maluku', 'A5EB03E23BD0F6A0E040640A040252AD'),
('A5EB03E242ECF6A0E040640A040252AD', 'Pemerintah Kab. Maluku Tengah', 'A5EB03E23D0DF6A0E040640A040252AD'),
('A5EB03E242EDF6A0E040640A040252AD', 'Pemerintah Kab. Maluku Tenggara', 'A5EB03E23BD1F6A0E040640A040252AD'),
('A5EB03E242EEF6A0E040640A040252AD', 'Pemerintah Kab. Buru', 'A5EB03E23D0EF6A0E040640A040252AD'),
('A5EB03E242EFF6A0E040640A040252AD', 'Pemerintah Kab. Kepulauan Tanimbar', 'A5EB03E23BD2F6A0E040640A040252AD'),
('A5EB03E242F0F6A0E040640A040252AD', 'Pemerintah Kab. Kepulauan Aru', 'A5EB03E23D3AF6A0E040640A040252AD'),
('A5EB03E242F1F6A0E040640A040252AD', 'Pemerintah Kab. Seram Bagian Barat', 'A5EB03E23D3BF6A0E040640A040252AD'),
('A5EB03E242F2F6A0E040640A040252AD', 'Pemerintah Kab. Seram Bagian Timur', 'A5EB03E23D42F6A0E040640A040252AD'),
('A5EB03E242F3F6A0E040640A040252AD', 'Pemerintah Kab. Buru Selatan', 'A5EB03E23B8CF6A0E040640A040252AD'),
('A5EB03E242F4F6A0E040640A040252AD', 'Pemerintah Kab. Maluku Barat Daya', 'A5EB03E23B8DF6A0E040640A040252AD'),
('A5EB03E242F5F6A0E040640A040252AD', 'Pemerintah Kota Ambon', 'A5EB03E23D0FF6A0E040640A040252AD'),
('A5EB03E242F6F6A0E040640A040252AD', 'Pemerintah Kota Tual', 'A5EB03E23B8EF6A0E040640A040252AD'),
('A5EB03E242F7F6A0E040640A040252AD', 'Pemerintah Provinsi Maluku Utara', 'A5EB03E23B54F6A0E040640A040252AD'),
('A5EB03E242F8F6A0E040640A040252AD', 'Pemerintah Kab. Halmahera Barat', 'A5EB03E23BD3F6A0E040640A040252AD'),
('A5EB03E242F9F6A0E040640A040252AD', 'Pemerintah Kab. Halmahera Tengah', 'A5EB03E23D10F6A0E040640A040252AD'),
('A5EB03E242FAF6A0E040640A040252AD', 'Pemerintah Kab. Kepulauan Sula', 'A5EB03E23BD4F6A0E040640A040252AD'),
('A5EB03E242FBF6A0E040640A040252AD', 'Pemerintah Kab. Halmahera Selatan', 'A5EB03E23D11F6A0E040640A040252AD'),
('A5EB03E242FCF6A0E040640A040252AD', 'Pemerintah Kab. Halmahera Utara', 'A5EB03E23BD5F6A0E040640A040252AD'),
('A5EB03E242FDF6A0E040640A040252AD', 'Pemerintah Kab. Halmahera Timur', 'A5EB03E23D12F6A0E040640A040252AD'),
('A5EB03E242FEF6A0E040640A040252AD', 'Pemerintah Kab. Pulau Morotai', 'A5EB03E23C25F6A0E040640A040252AD'),
('ff8080813ff0535b013ff0ce7cdf2e5d', 'Pemerintah Kab. Pulau Taliabu', 'ff8080813ff0535b013ff0ce7cd12e5c'),
('A5EB03E242FFF6A0E040640A040252AD', 'Pemerintah Kota Ternate', 'A5EB03E23BD6F6A0E040640A040252AD'),
('A5EB03E24300F6A0E040640A040252AD', 'Pemerintah Kota Tidore Kepulauan', 'A5EB03E23D13F6A0E040640A040252AD'),
('A5EB03E24301F6A0E040640A040252AD', 'Pemerintah Provinsi Papua', 'A5EB03E23BD7F6A0E040640A040252AD'),
('A5EB03E24302F6A0E040640A040252AD', 'Pemerintah Kab. Jayapura', 'A5EB03E23D14F6A0E040640A040252AD'),
('A5EB03E24303F6A0E040640A040252AD', 'Pemerintah Kab. Biak Numfor', 'A5EB03E23BD8F6A0E040640A040252AD'),
('A5EB03E24304F6A0E040640A040252AD', 'Pemerintah Kab. Kepulauan Yapen', 'A5EB03E23D15F6A0E040640A040252AD'),
('A5EB03E24305F6A0E040640A040252AD', 'Pemerintah Kab. Merauke', 'A5EB03E23BD9F6A0E040640A040252AD'),
('A5EB03E24306F6A0E040640A040252AD', 'Pemerintah Kab. Jayawijaya', 'A5EB03E23D16F6A0E040640A040252AD'),
('A5EB03E24307F6A0E040640A040252AD', 'Pemerintah Kab. Nabire', 'A5EB03E23BDAF6A0E040640A040252AD'),
('A5EB03E24308F6A0E040640A040252AD', 'Pemerintah Kab. Puncak Jaya', 'A5EB03E23BDBF6A0E040640A040252AD'),
('A5EB03E24309F6A0E040640A040252AD', 'Pemerintah Kab. Paniai', 'A5EB03E23D17F6A0E040640A040252AD'),
('A5EB03E2430AF6A0E040640A040252AD', 'Pemerintah Kab. Mimika', 'A5EB03E23D18F6A0E040640A040252AD'),
('A5EB03E2430BF6A0E040640A040252AD', 'Pemerintah Kab. Boven Digoel', 'A5EB03E23BDCF6A0E040640A040252AD'),
('A5EB03E2430CF6A0E040640A040252AD', 'Pemerintah Kab. Mappi', 'A5EB03E23D19F6A0E040640A040252AD'),
('A5EB03E2430DF6A0E040640A040252AD', 'Pemerintah Kab. Asmat', 'A5EB03E23B50F6A0E040640A040252AD'),
('A5EB03E2430EF6A0E040640A040252AD', 'Pemerintah Kab. Yahukimo', 'A5EB03E23D1AF6A0E040640A040252AD'),
('A5EB03E2430FF6A0E040640A040252AD', 'Pemerintah Kab. Pegunungan Bintang', 'A5EB03E23D4EF6A0E040640A040252AD'),
('A5EB03E24310F6A0E040640A040252AD', 'Pemerintah Kab. Tolikara', 'A5EB03E23D1BF6A0E040640A040252AD'),
('A5EB03E24311F6A0E040640A040252AD', 'Pemerintah Kab. Sarmi', 'A5EB03E23D1CF6A0E040640A040252AD'),
('A5EB03E24312F6A0E040640A040252AD', 'Pemerintah Kab. Keerom', 'A5EB03E23D4FF6A0E040640A040252AD'),
('A5EB03E24313F6A0E040640A040252AD', 'Pemerintah Kab. Waropen', 'A5EB03E23D1DF6A0E040640A040252AD'),
('A5EB03E24314F6A0E040640A040252AD', 'Pemerintah Kab. Supiori', 'A5EB03E23D3CF6A0E040640A040252AD'),
('A5EB03E24315F6A0E040640A040252AD', 'Pemerintah Kab. Mamberamo Raya', 'A5EB03E23B8FF6A0E040640A040252AD'),
('A5EB03E24316F6A0E040640A040252AD', 'Pemerintah Kab. Mamberamo Tengah', 'A5EB03E23B90F6A0E040640A040252AD'),
('A5EB03E24317F6A0E040640A040252AD', 'Pemerintah Kab. Lanny Jaya', 'A5EB03E23B91F6A0E040640A040252AD'),
('A5EB03E24318F6A0E040640A040252AD', 'Pemerintah Kab. Yalimo', 'A5EB03E23B92F6A0E040640A040252AD'),
('A5EB03E24319F6A0E040640A040252AD', 'Pemerintah Kab. Nduga', 'A5EB03E23B93F6A0E040640A040252AD'),
('A5EB03E2431AF6A0E040640A040252AD', 'Pemerintah Kab. Dogiyai', 'A5EB03E23B94F6A0E040640A040252AD'),
('A5EB03E2431BF6A0E040640A040252AD', 'Pemerintah Kab. Puncak', 'A5EB03E23C60F6A0E040640A040252AD'),
('A5EB03E2431CF6A0E040640A040252AD', 'Pemerintah Kab. Deiyai', 'A5EB03E23C1FF6A0E040640A040252AD'),
('A5EB03E2431DF6A0E040640A040252AD', 'Pemerintah Kab. Intan Jaya', 'A5EB03E23C1EF6A0E040640A040252AD'),
('A5EB03E2431EF6A0E040640A040252AD', 'Pemerintah Kota Jayapura', 'A5EB03E23D50F6A0E040640A040252AD'),
('A5EB03E2431FF6A0E040640A040252AD', 'Pemerintah Provinsi Kepulauan Riau', 'A5EB03E23D1EF6A0E040640A040252AD'),
('A5EB03E24320F6A0E040640A040252AD', 'Pemerintah Kab. Bintan', 'A5EB03E23D51F6A0E040640A040252AD'),
('A5EB03E24321F6A0E040640A040252AD', 'Pemerintah Kab. Karimun', 'A5EB03E23CFAF6A0E040640A040252AD'),
('A5EB03E24322F6A0E040640A040252AD', 'Pemerintah Kab. Natuna', 'A5EB03E23D1FF6A0E040640A040252AD'),
('A5EB03E24323F6A0E040640A040252AD', 'Pemerintah Kab. Lingga', 'A5EB03E23D31F6A0E040640A040252AD'),
('A5EB03E24324F6A0E040640A040252AD', 'Pemerintah Kab. Kepulauan Anambas', 'A5EB03E23B80F6A0E040640A040252AD'),
('A5EB03E24325F6A0E040640A040252AD', 'Pemerintah Kota Batam', 'A5EB03E23D52F6A0E040640A040252AD'),
('A5EB03E24327F6A0E040640A040252AD', 'Pemerintah Provinsi Papua Barat', 'A5EB03E23D22F6A0E040640A040252AD'),
('A5EB03E24328F6A0E040640A040252AD', 'Pemerintah Kab. Sorong', 'A5EB03E23D26F6A0E040640A040252AD'),
('A5EB03E24329F6A0E040640A040252AD', 'Pemerintah Kab. Sorong Selatan', 'A5EB03E23B51F6A0E040640A040252AD'),
('A5EB03E2432AF6A0E040640A040252AD', 'Pemerintah Kab. Raja Ampat', 'A5EB03E23D27F6A0E040640A040252AD'),
('A5EB03E2432BF6A0E040640A040252AD', 'Pemerintah Kab. Manokwari', 'A5EB03E23D28F6A0E040640A040252AD'),
('A5EB03E2432CF6A0E040640A040252AD', 'Pemerintah Kab. Teluk Bintuni', 'A5EB03E23D58F6A0E040640A040252AD'),
('A5EB03E2432DF6A0E040640A040252AD', 'Pemerintah Kab. Teluk Wondama', 'A5EB03E23D29F6A0E040640A040252AD'),
('A5EB03E2432EF6A0E040640A040252AD', 'Pemerintah Kab. Fak-Fak', 'A5EB03E23D59F6A0E040640A040252AD'),
('A5EB03E2432FF6A0E040640A040252AD', 'Pemerintah Kab. Kaimana', 'A5EB03E23D2AF6A0E040640A040252AD'),
('A5EB03E24330F6A0E040640A040252AD', 'Pemerintah Kab. Tambrauw', 'A5EB03E23C26F6A0E040640A040252AD'),
('A5EB03E24331F6A0E040640A040252AD', 'Pemerintah Kab. Maybrat', 'A5EB03E23D4CF6A0E040640A040252AD'),
('ff8080813ff0535b013ff0cb2af32df6', 'Pemerintah Kab. Pegunungan Arfak', 'ff8080813ff0535b013ff0cb2abb2df5'),
('ff80808144245f0701442f61c9da5f01', 'Pemerintah Kab. Manokwari Selatan', 'ff80808144245f0701442f61c90d5f00'),
('A5EB03E24332F6A0E040640A040252AD', 'Pemerintah Kota Sorong', 'A5EB03E23D5AF6A0E040640A040252AD'),
('A5EB03E24333F6A0E040640A040252AD', 'Pemerintah Provinsi Sulawesi Barat', 'A5EB03E23D23F6A0E040640A040252AD'),
('A5EB03E24334F6A0E040640A040252AD', 'Pemerintah Kab. Pasangkayu', 'A5EB03E23B48F6A0E040640A040252AD'),
('A5EB03E24335F6A0E040640A040252AD', 'Pemerintah Kab. Mamuju', 'A5EB03E23D3EF6A0E040640A040252AD'),
('A5EB03E24336F6A0E040640A040252AD', 'Pemerintah Kab. Mamasa', 'A5EB03E23D3FF6A0E040640A040252AD'),
('A5EB03E24337F6A0E040640A040252AD', 'Pemerintah Kab. Polewali Mandar', 'A5EB03E23D40F6A0E040640A040252AD'),
('A5EB03E24338F6A0E040640A040252AD', 'Pemerintah Kab. Majene', 'A5EB03E23D41F6A0E040640A040252AD'),
('ff808081426f4d6801428ec9b0557ff3', 'Pemerintah Kab. Mamuju Tengah', 'ff808081426f4d6801428ec9afb07ff2'),
('ff80808140151b37014033f7faa94561', 'Pemerintah Provinsi Kalimantan Utara', 'ff80808140151b37014033f7fa9a4560'),
('A5EB03E24269F6A0E040640A040252AD', 'Pemerintah Kab. Bulungan', 'A5EB03E23C64F6A0E040640A040252AD'),
('A5EB03E2426BF6A0E040640A040252AD', 'Pemerintah Kab. Malinau', 'A5EB03E23C66F6A0E040640A040252AD'),
('A5EB03E2426CF6A0E040640A040252AD', 'Pemerintah Kab. Nunukan', 'A5EB03E23C67F6A0E040640A040252AD'),
('A5EB03E24270F6A0E040640A040252AD', 'Pemerintah Kab. Tana Tidung', 'A5EB03E23BF2F6A0E040640A040252AD'),
('A5EB03E24274F6A0E040640A040252AD', 'Pemerintah Kota Tarakan', 'A5EB03E23C6DF6A0E040640A040252AD');

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
  `id_rkp` bigint(20) DEFAULT NULL,
  `id_usulan` bigint(20) DEFAULT NULL,
  `id_layanan` bigint(20) DEFAULT NULL,
  `nip` bigint(20) DEFAULT NULL,
  `id_pengirim` bigint(20) DEFAULT NULL,
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
-- Table structure for table `unsur_nons`
--

CREATE TABLE `unsur_nons` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unsur_nons`
--

INSERT INTO `unsur_nons` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Pengusaha', '2021-11-22 15:45:57', '2021-11-22 17:49:46'),
(2, 'Serikat Buruh', '2021-11-22 15:45:57', '2021-11-22 17:49:46'),
(3, 'Akademisi', '2021-11-22 15:45:57', '2021-11-22 17:49:46'),
(4, 'Gorengan', '2021-11-22 17:50:05', '2021-11-22 17:50:05');

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
  `roles_id` int(20) NOT NULL,
  `groups_id` int(20) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nip`, `nip_verified_at`, `password`, `roles_id`, `groups_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Person Incharge', '111111', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 14, 14, 'mWIyWwAHjjQqQp7S1oiVJogKmDaSOHaI0C5Tw1JGxLKBMtnq9l5FxLlLTsIN', '2021-12-02 06:39:33', '2021-12-07 19:12:57'),
(2, 'Koordinator Pokja P4 / JF SDMA Ahli Madya', '123456', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 5, 5, NULL, '2021-12-02 06:39:33', '2021-12-02 06:39:33'),
(3, 'Koordinator Pokja KP / JF SDMA Ahli Madya', '67890', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 6, 6, NULL, '2021-12-02 06:41:32', '2021-12-02 06:41:32'),
(4, 'Koordinator Pokja Pensiun / JF SDMA Ahli Madya', '222222', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 7, 7, NULL, '2021-12-02 06:41:32', '2021-12-02 06:41:32'),
(25, 'JF SDMA  Ahli Muda P4', '333333', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 9, 9, NULL, '2021-12-02 07:21:21', '2021-12-02 07:21:21'),
(26, 'JF SDMA  Ahli Muda KP', '444444', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 10, 10, NULL, '2021-12-02 07:21:21', '2021-12-02 07:21:21'),
(27, 'JF SDMA  Ahli Muda Pensiun', '555555', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 11, 11, NULL, '2021-12-02 07:21:21', '2021-12-02 07:21:21'),
(28, 'JF SDMA  Ahli Pertama P4', '666666', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 9, 9, NULL, '2021-12-02 07:21:21', '2021-12-02 07:21:21'),
(29, 'JF SDMA  Ahli Pertama KP', '777777', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 10, 10, NULL, '2021-12-02 07:21:21', '2021-12-02 07:21:21'),
(30, 'JF SDMA  Ahli Pertama Pensiun', '888888', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 11, 11, NULL, '2021-12-02 07:21:21', '2021-12-02 07:21:21'),
(31, 'JF SDMA  Ahli Terampil P4', '999999', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 9, 9, NULL, '2021-12-02 07:21:21', '2021-12-02 07:21:21'),
(32, 'JF SDMA  Ahli Terampil KP', '000000', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 10, 10, NULL, '2021-12-02 07:21:21', '2021-12-02 07:21:21'),
(33, 'JF SDMA  Ahli Terampil Pensiun', '654321', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 11, 11, NULL, '2021-12-02 07:21:21', '2021-12-02 07:21:21'),
(34, 'Pelaksana P4', '098765', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 9, 9, NULL, '2021-12-02 07:21:21', '2021-12-02 07:21:21'),
(35, 'Menteri', '123123', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 2, 2, NULL, '2021-12-02 07:24:29', '2021-12-02 07:24:29'),
(36, 'Deputi', '345345', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 3, 3, NULL, '2021-12-02 07:24:29', '2021-12-02 07:24:29'),
(37, 'Kepala Biro', '567567', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 4, 4, NULL, '2021-12-02 07:24:29', '2021-12-02 07:24:29'),
(38, 'TU Menteri', '890890', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 13, 13, NULL, '2021-12-02 07:39:13', '2021-12-02 07:39:13'),
(39, 'Bagian Dukungan Administrasi', '321767', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 12, 12, NULL, '2021-12-02 15:04:43', '2021-12-02 15:04:43'),
(40, 'Pelaksana Pensiun ', '787312', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 11, 11, NULL, '2021-12-06 02:41:04', '2021-12-06 02:41:04'),
(41, 'Pelaksana Dukmin', '89312', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 12, 12, NULL, '2021-12-06 02:42:21', '2021-12-06 02:42:21'),
(42, 'TU Dukmin', '312467', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 12, 12, NULL, '2021-12-06 02:43:02', '2021-12-06 02:43:02'),
(43, 'Arsiparis', '312472', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 12, 12, NULL, '2021-12-06 02:43:40', '2021-12-06 02:43:40'),
(44, 'Administrator', '123748', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 1, 1, NULL, '2021-12-06 02:44:16', '2021-12-06 02:44:16'),
(45, 'Kepala Bagian Dukungan Administrasi', '831237', NULL, '$2y$10$gGqnqq58u00YXuJTOnNJBu2zpu5X8bQxhi86Tx.wk.oTQcZHfte3y', 8, 8, NULL, '2021-12-06 02:57:43', '2021-12-06 02:57:43');

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
-- Indexes for table `jabatan_paks`
--
ALTER TABLE `jabatan_paks`
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
-- Indexes for table `pendidikans`
--
ALTER TABLE `pendidikans`
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
-- Indexes for table `rkp_asns`
--
ALTER TABLE `rkp_asns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

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
-- Indexes for table `unsur_nons`
--
ALTER TABLE `unsur_nons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nip_unique` (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bkns`
--
ALTER TABLE `bkns`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jabatan_paks`
--
ALTER TABLE `jabatan_paks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `pendidikans`
--
ALTER TABLE `pendidikans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `rkp_asns`
--
ALTER TABLE `rkp_asns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `unsur_nons`
--
ALTER TABLE `unsur_nons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
