-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 04:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `titikbanjieeer`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` bigint(20) UNSIGNED NOT NULL,
  `nama_kecamatan` varchar(255) NOT NULL,
  `deskripsi_kecamatan` text DEFAULT NULL,
  `jumlah_penduduk_total` int(11) DEFAULT NULL,
  `jumlah_penduduk_laki_laki` int(11) DEFAULT NULL,
  `jumlah_penduduk_perempuan` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`, `deskripsi_kecamatan`, `jumlah_penduduk_total`, `jumlah_penduduk_laki_laki`, `jumlah_penduduk_perempuan`, `created_at`, `updated_at`) VALUES
(1, 'Biringkanaya', 'Biringkanaya (Makassar: ᨅᨗᨑᨗᨃᨊᨐ) adalah sebuah kecamatan di Kota Makassar, Sulawesi Selatan, Indonesia. terletak dengan batas wilayah Kabupaten Kota Maros. Kecamatan Biringkanaya ini memiliki 11 kelurahan', 211228, 105584, 105644, '2023-07-09 05:59:37', '2023-07-09 05:59:37'),
(2, 'Panakkukang', 'Panakkukang (Makassar: ᨄᨊᨀᨘᨀ) adalah sebuah kecamatan di Kota Makassar, Sulawesi Selatan, Indonesia. di kecamatan ini terdapat beberapa pusat aktivitas seperti perkantoran dan mall, salah satu mall yang terkenal di daerah ini adalah Mal Panakkukang & Panakkukang Square.', 139759, 69762, 69997, '2023-07-09 05:59:37', '2023-07-09 05:59:37'),
(3, 'Tamalanrea', 'Tamalanrea (Makassar: ᨈᨆᨒᨋᨙᨕ) adalah sebuah kecamatan di Kota Makassar, Sulawesi Selatan, Indonesia. Kecamatan ini terbentuk pada tahun 1998 sebagai hasil pemekaran wilayah Kecamatan Biringkanaya. Wilayahnya seluas 31,84 km². Hingga bulan Mei 2015, jumlah penduduknya sekitar 142.000 jiwa.', 103322, 51471, 51851, '2023-07-09 05:59:37', '2023-07-09 05:59:37'),
(4, 'Ujung Pandang', 'Ujung Pandang (Makassar: ᨕᨘᨍᨘ ᨄᨉ) adalah sebuah kecamatan di Kota Makassar, Sulawesi Selatan, Indonesia sekaligus pusat pemerintahan Kota Makassar.[1][2] Nama Ujung Pandang juga sempat digunakan sebagai nama ibu kota Provinsi Sulawesi Selatan, sebelum kini telah ganti nama menjadi Makassar.', 24541, 11903, 12638, '2023-07-09 05:59:37', '2023-07-09 05:59:37'),
(5, 'Tamalate', 'Tamalate (Makassar: ᨈᨆᨒᨈᨙ) adalah kecamatan di selatan Kota Makassar, provinsi Sulawesi Selatan.Peta Administratif Kecamatan Tamalate, Kota Makassar. Kecamatan ini berpusat pada kompleks perumahan yang bernama BTN Hartaco Indah. Di kompleks ini, terdapat sebuah sekolah dasar, dua sekolah menengah pertama, satu sekolah menengah atas, satu sekolah menengah kejuruan, dan juga terdapat 3 buah SPBU, yaitu di jalan Sultan Alauddin dan jalan Abd.Kadir. Tak jauh dari perumahan tersebut terdapat sebuah benteng yang bernama Benteng Somba Opu, di mana benteng tersebut adalah peninggalan Kerajaan Gowa. Kecamatan Tamalate berbatasan langsung dengan Kabupaten Gowa.', 182348, 91174, 91174, '2023-07-09 05:59:37', '2023-07-09 05:59:37'),
(6, 'Manggala', 'Manggala (Makassar: ᨆᨁᨒ) adalah sebuah kecamatan di Kota Makassar, Sulawesi Selatan, Indonesia.', 148462, 74113, 74349, '2023-07-09 05:59:37', '2023-07-09 05:59:37'),
(7, 'Rappocini', 'Rappocini (Makassar: ᨑᨄᨚᨌᨗᨊᨗ) adalah sebuah kecamatan di Kota Makassar, Sulawesi Selatan, Indonesia', 144733, 70865, 73868, '2023-07-09 05:59:37', '2023-07-09 05:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kelurahan` bigint(20) UNSIGNED NOT NULL,
  `nama_kelurahan` varchar(255) NOT NULL,
  `id_kecamatan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id_kelurahan`, `nama_kelurahan`, `id_kecamatan`, `created_at`, `updated_at`) VALUES
(1, 'Paccerakkang', 1, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(2, 'Daya', 1, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(3, 'Pai', 1, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(4, 'Antang', 2, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(5, 'Manggala', 2, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(6, 'Batua', 2, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(7, 'Tamangapa', 2, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(8, 'Borong', 2, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(9, 'Bitoa', 2, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(10, 'Tello', 3, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(11, 'Tello Baru', 3, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(12, 'Karuisi Utara', 3, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(13, 'Panaikang', 3, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(14, 'Tamamaung', 3, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(15, 'Masale', 3, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(16, 'Tamalanrea Indah', 3, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(17, 'Tamalanrea Jaya', 3, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(18, 'Bira', 4, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(19, 'Parang Loe', 4, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(20, 'Maloku', 5, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(21, 'Tidung', 6, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(22, 'Mangasa', 7, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(23, 'Tanjung Merdeka', 7, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(24, 'Jongaya', 7, '2023-07-09 06:14:10', '2023-07-09 06:14:10'),
(25, 'Pabaeng-pabaeng', 7, '2023-07-09 06:14:10', '2023-07-09 06:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2023_07_10_015235_add_api_key_column_to_users_table', 1),
(10, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(11, '2019_08_19_000000_create_failed_jobs_table', 2),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(13, '2023_07_09_155931_create_users_table', 2),
(14, '2023_07_09_155935_create_kecamatan_table', 2),
(15, '2023_07_09_155938_create_kelurahan_table', 2),
(16, '2023_07_09_155943_create_titik_banjir_table', 2),
(17, '2023_07_09_155948_create_titik_pengungsian_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(3, 'App\\Models\\User', 2, 'auth_token', '31c3ed173e41ba3250ba852afc230dbdf9e38626cb08228672f0ea7b8b5b0dfd', '[\"*\"]', '2023-07-10 06:03:02', NULL, '2023-07-10 06:02:39', '2023-07-10 06:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `titik_banjir`
--

CREATE TABLE `titik_banjir` (
  `id_titik_banjir` bigint(20) UNSIGNED NOT NULL,
  `nama_titik` varchar(255) NOT NULL,
  `id_kelurahan` bigint(20) UNSIGNED NOT NULL,
  `longitude` varchar(45) NOT NULL,
  `link_maps` text NOT NULL,
  `ketinggian_air` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `titik_banjir`
--

INSERT INTO `titik_banjir` (`id_titik_banjir`, `nama_titik`, `id_kelurahan`, `longitude`, `link_maps`, `ketinggian_air`, `created_at`, `updated_at`) VALUES
(1, 'BTP Blok AF', 1, '-5.1353776,119.5088572', 'https://goo.gl/maps/J1sKvtHeEquGgyVy6', '10cm - 20cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(2, 'Perumahan Mangga Tiga', 1, '-5.1245203,119.5199926', 'https://goo.gl/maps/ev1opivyZdsMhgGL7', '25cm', '2023-07-09 06:26:11', '2023-07-09 08:07:07'),
(3, 'Perumahan Buka mata', 1, '-5.131057,119.5231501', 'https://goo.gl/maps/Ckco4L3ysvexd4P57', '+-15cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(4, 'Kotipa Raya-Perumahan Kodam III', 2, '-5.1308418,119.5181755', 'https://goo.gl/maps/8bKoHyV6aCRvaUeJA', '+-10cm', '2023-07-09 06:26:11', '2023-07-09 08:07:24'),
(5, 'Perumahan Al Marhamah Kompleks Depag', 1, '-5.118249,119.512835', 'https://goo.gl/maps/tVTjjCecw9pvnrPv8', '10cm - 15cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(6, 'Perumahan Citra Sudiang', 3, '-5.089267,119.5048298', 'https://goo.gl/maps/4F6Z3wdAG3DYk1gc8', '20cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(7, 'Lampu Merah Jl. Daeng Ramang', 3, '-5.093378,119.513525', 'https://goo.gl/maps/5sVWjuASLbuVYq3u6', '+-15cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(8, 'Bukit Batu (Antang)', 4, '-5.1518714,119.4796289', 'https://goo.gl/maps/E1noZtKFzYhkY5MNA', '+-10cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(9, 'Kampung Baru (Manggala)', 5, '-5.1568453,119.494683', 'https://goo.gl/maps/EGFyUykdPgmiFR7U8', '40cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(10, 'Jalan Toa Daeng (Batua)', 6, '-5.1536428,119.4622066', 'https://goo.gl/maps/NBfcDJ2iqXqapvUm6', '10cm - 30cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(11, 'Perumahan Swadaya Mas (Batua)', 6, '-5.1528978,119.4662325', 'https://goo.gl/maps/tCifyRK9sSghs1F16', '+-15cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(12, 'Kampung Romang Tangaya (Tamangapa)', 7, '-5.1878826,119.5110871', 'https://goo.gl/maps/ru9QeDBmJqc2AY3U7', '10cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(13, 'Kampung Kajang (Tamangapa)', 7, '-5.1812025,119.4829786', 'https://goo.gl/maps/ZaV1RdyYmggPkpJ2A', '25cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(14, 'Perumnas Antang Blok 7', 4, '-5.169439,119.4827803', 'https://goo.gl/maps/5c8HiaepHpN9B4ab6', '20cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(15, 'Jl. Toa Daeng III', 6, '-5.1536428,119.4622066', 'https://goo.gl/maps/NBfcDJ2iqXqapvUm6', '+-15cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(16, 'Jl. Kecaping Raya', 5, '-5.1727517,119.5014857', 'https://goo.gl/maps/YJQFFyGibaPaAirg8', '+-10cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(17, 'Jl. Terompet Blok 10', 5, '-5.172797,119.5047444', 'https://goo.gl/maps/cALdWazedf7onYgq9', '10cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(18, 'Jl. Ujung Bori', 5, '-5.1639591,119.471246', 'https://goo.gl/maps/NKgSpoyXNm9E2meK6', '30cm - 50cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(19, 'Kompleks swadaya, Jl, Swadaya Mas', 6, '-5.1510879,119.4663429', 'https://goo.gl/maps/3DaxqTDFb8gfEGVB7', '25cm - 50cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(20, 'Pasaran keke RW 13 RT 1, 2, 3 dan 4', 6, '-5.1558179,119.4631886', 'https://goo.gl/maps/sR9MVUbcYhHUL5ph7', '+-70cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(21, 'Jl Borong raya', 6, '-5.1616954,119.4621343', 'https://goo.gl/maps/QuuFbVcDTXHbFtZd9', '20cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(22, 'Jl, Inspeksi PAM lorong 6 RT 6 RW 1', 6, '-5.1503113,119.4734848', 'https://goo.gl/maps/UGrZp3sL6zPnFPUc8', '40cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(23, 'Komp Griya Puspita Sari', 8, '-5.1656983,119.4589937', 'https://goo.gl/maps/w85E8BsYubfiSJSD9', '20cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(24, 'Jl Toddopuli 18 Baru', 8, '-5.1650239,119.453535', 'https://goo.gl/maps/X9tjSwmNi1DZ6yTP8', '35cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(25, 'Inpeksi kanal Puri Taman Sari', 8, '-5.1713129,119.4601796', 'https://goo.gl/maps/AmNPf7aXETSiyCJC7', '35cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(26, 'Jl Al Ikhlas', 8, '-5.1670524,119.4572911', 'https://goo.gl/maps/hLLW8S7tcgqZAPsy5', '20cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(27, 'Jl Toddopuli 2', 8, '-5.1599023,119.4512073', 'https://goo.gl/maps/ACb5S2j9kpJnk47L9', '20cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(28, 'Jl Toddopuli 10', 8, '-5.1662142,119.4558644', 'https://goo.gl/maps/Gb74DVKSwjwrE4WR9', '20cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(29, 'Jl Waduk Tunggu Pampang, di sebelah barat/jembatan', 9, '-5.1694114,119.4692174', 'https://goo.gl/maps/9NV19Dvd2o2bzb6z6', '20cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(30, 'Asrama polisi panaikang', 10, '-5.1430165,119.4547366', 'https://goo.gl/maps/4Wwi74ixBXNUCstL7', '10cm - 30cm', '2023-07-09 06:26:11', '2023-07-09 08:23:13'),
(31, 'BTN Citra Tello', 11, '-5.1439077,119.4700765', 'https://goo.gl/maps/H9aq5pfEGS35tfuq5', '20cm', '2023-07-09 06:26:11', '2023-07-09 08:23:18'),
(32, 'Jl. Adipura I', 12, '-5.1310231,119.4334215', 'https://goo.gl/maps/UdBhbnrcbaeNhNa4A', '10cm', '2023-07-09 06:26:11', '2023-07-09 08:23:21'),
(33, 'Jl. Urip Sumoharjo, Depan Kantor Gubernur', 13, '-5.140417,119.451267', 'https://goo.gl/maps/q2fa3VM5wHP7h2yU8', '+-15cm', '2023-07-09 06:26:11', '2023-07-09 08:23:42'),
(34, 'Jl Sukaria Raya RT 7 dan 9', 14, '-5.1443497,119.441435', 'https://goo.gl/maps/dwp4Dx7zQynhp4w89', '15-20 cm', '2023-07-09 06:26:11', '2023-07-09 08:23:49'),
(35, 'Jl Sukaria 10 hingga Sukaria 18 RT 6, 7, 8 dan 9', 14, '-5.1432415,119.4428449', 'https://goo.gl/maps/RakZf31cUpCABiFp7', '10cm - 50cm', '2023-07-09 06:26:11', '2023-07-09 08:24:02'),
(36, 'Jl Sukamaju Raya RT 4 dan 6', 14, '-5.1415373,119.4426583', 'https://goo.gl/maps/54Wps5qjJpniuH1f9', '20 - 35cm', '2023-07-09 06:26:11', '2023-07-09 08:24:10'),
(37, 'Jl Sukamaju 9, 10, dan 11', 14, '-5.1412057,119.4432655', 'https://goo.gl/maps/1Ft1zsNxwaQhzoAPA', '40cm', '2023-07-09 06:26:11', '2023-07-09 08:24:20'),
(38, 'Jl Sukamaju 12 s/d 16 RT 4', 14, '-5.141087,119.4444346', 'https://goo.gl/maps/YsyVog8H3LGvCaSg8', '40 - 60 cm', '2023-07-09 06:26:11', '2023-07-09 08:24:33'),
(39, 'Jl Sukaria 5 dan 8 RT 1', 14, '-5.142849,119.4421191', 'https://goo.gl/maps/H8A7aPJaosWUnWcZA', '20cm', '2023-07-09 06:26:11', '2023-07-09 08:24:40'),
(40, 'Jl. Adhyaksa Baru lorong 4RT 05 Rw 04', 15, '-5.1541904,119.4457253', 'https://goo.gl/maps/h725DdJVPD5Z68Ab8', '15cm', '2023-07-09 06:26:11', '2023-07-09 08:24:49'),
(41, 'Jl. Abdesir', 15, '-5.1512297,119.4471194', 'https://goo.gl/maps/QATo4ifN2GkW8GBm6', '10cm', '2023-07-09 06:26:11', '2023-07-09 08:24:55'),
(42, 'Perumahan Nusa Harapan Permai', 17, '-5.1458995,119.5144151', 'https://goo.gl/maps/MMUAMcF9AMaFYMJY8', '30 - 50cm', '2023-07-09 06:26:11', '2023-07-09 08:25:12'),
(43, 'Perumahan Bung Permai', 16, '-5.1451934,119.4863157', 'https://goo.gl/maps/cqXArWBBC1Knui1PA', '40 - 70cm', '2023-07-09 06:26:11', '2023-07-09 08:25:17'),
(44, 'Perumahan Antara', 16, '-5.1365855,119.47563', 'https://goo.gl/maps/S7DWZhQhyPLBvUmW6', '+-45cm', '2023-07-09 06:26:11', '2023-07-09 08:25:28'),
(45, 'Perumahan Hamsi', 16, '-5.1393873,119.4746771', 'https://goo.gl/maps/DHRCoZBpiAzJucJU9', '30cm', '2023-07-09 06:26:11', '2023-07-09 08:26:22'),
(46, 'Perumahan Asal Mula', 16, '-5.1343303,119.4734041', 'https://goo.gl/maps/paKhfyaYNuWwnw9h8', '35 - 60cm', '2023-07-09 06:26:11', '2023-07-09 08:26:34'),
(47, 'Perumahan Hartaco Permai', 16, '-5.1409494,119.4772881', 'https://goo.gl/maps/7iNjj1nkccDz3nue7', '+-25cm', '2023-07-09 06:26:11', '2023-07-09 08:26:40'),
(48, 'Jl. Perintis Kemerdekaan, Depan Taman Teras Unhas', 16, '-5.140835, 119.488470', 'https://goo.gl/maps/RkYRgbVzvLceoPjo8', '50 - 70cm', '2023-07-09 06:26:11', '2023-07-09 08:26:47'),
(49, 'Jl. Ir Sutami', 18, '-5.088285,119.4800934', 'https://goo.gl/maps/aUQ2ZrV2W7mygrde6', '35 - 60cm', '2023-07-09 06:26:11', '2023-07-09 08:27:00'),
(50, 'Jl. Ir Sutami', 19, '-5.088285,119.4800934', 'https://goo.gl/maps/weztEd4KqJkJtXtM9', '30 - 40cm', '2023-07-09 06:26:11', '2023-07-09 08:27:06'),
(51, 'Jl. Penghibur', 20, '-5.1416153,119.4045824', 'https://goo.gl/maps/ksB8MTkSL5vSvQDm6', '+-30cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(52, 'Jl. Raya Pendidikan', 21, '-5.1702734,119.4356277', 'https://goo.gl/maps/Qd7U3BbuBwDfGXgj6', '60cm - 70cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(53, 'RW 10 Jalan Traktor dan Jl Mamoa 5', 22, '-5.1840489,119.4293386', 'https://goo.gl/maps/UP5KWQC8MXTCiKQKA', '30cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(54, 'RW 07 RT 03 Jl Sultan Alauddin 2 dan RW 07 RT 02 lorong 2D', 22, '-5.1809175,119.434451', 'https://goo.gl/maps/r98xRoPP8MB4ZucB7', '+-45cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(55, 'RW 03 RT 02 Jalan Buldozer', 22, '-5.1842164,119.4296054', 'https://goo.gl/maps/5CkyzxA9LCshTigp6', '+-30cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(56, 'RW 10 RT 06 Jalan Mamoa Raya Dan RT 04 Jl Mamoa 5', 22, '-5.1802123,119.4302196', 'https://goo.gl/maps/9cdUggJU9VqCo35aA', '-+20cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(57, 'RT02 RW 05 Jl Bayang', 23, '-5.1860988,119.3845076', 'https://goo.gl/maps/YE1L7ZoCzLrHiSBu5', '10-15cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(58, 'RT 02 RW 08 Jl. Mappaoddang', 24, '-5.1755546,119.412145', 'https://goo.gl/maps/JWXTpQGQotKqah6H9', '20-30cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55'),
(59, 'Jl. Andi Tonro 2 depan kantor lurah', 25, '-5.1709669,119.4206924', 'https://goo.gl/maps/mLKKCdegazq3VU277', '-+45cm', '2023-07-09 06:26:11', '2023-07-09 08:20:55');

-- --------------------------------------------------------

--
-- Table structure for table `titik_pengungsian`
--

CREATE TABLE `titik_pengungsian` (
  `id_titik_pengungsian` bigint(20) UNSIGNED NOT NULL,
  `nama_pengungsian` varchar(255) NOT NULL,
  `jumlah_kepala_keluarga` int(11) NOT NULL,
  `jumlah_orang_mengungsi` int(11) NOT NULL,
  `longitude_pengungsian` varchar(45) NOT NULL,
  `link_maps_pengungsian` text NOT NULL,
  `id_kelurahan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `titik_pengungsian`
--

INSERT INTO `titik_pengungsian` (`id_titik_pengungsian`, `nama_pengungsian`, `jumlah_kepala_keluarga`, `jumlah_orang_mengungsi`, `longitude_pengungsian`, `link_maps_pengungsian`, `id_kelurahan`, `created_at`, `updated_at`) VALUES
(1, 'Masjid Ar Rahman (Grand Rahmani Residence)', 39, 130, '-5.1288625,119.5234255', 'https://goo.gl/maps/ixFfGcNCSRMtYrrV7', 1, '2023-07-09 06:34:52', '2023-07-09 06:36:24'),
(2, 'Warkop Gomacca (Jalan Poros Katimbang)', 22, 75, '-5.1361714,119.5203932', 'https://goo.gl/maps/H95es1iRfevCyxBq8', 1, '2023-07-09 06:34:52', '2023-07-09 06:36:26'),
(3, 'Posyandu Bougenville (Kodam III)', 2, 12, '-5.1214735,119.5258448', 'https://goo.gl/maps/FygrekFKYovNbJqN9', 1, '2023-07-09 06:34:52', '2023-07-09 06:36:29'),
(4, 'TK Tri Putri (Kodam III)', 10, 40, '-5.1329123,119.5216', 'https://goo.gl/maps/jvddafUPXBMwbhH26', 1, '2023-07-09 06:34:52', '2023-07-09 06:36:35'),
(5, 'Masjid Ar Rahman (Nusa Harapan Permai)', 11, 49, '-5.1288572,119.5208506', 'https://goo.gl/maps/bwXmQqPWUAfgaGHD6', 1, '2023-07-09 06:34:52', '2023-07-09 06:36:37'),
(6, 'Masjid Ar Ra mun (Buka Mata)', 9, 46, '-5.1296639,119.5238318', 'https://goo.gl/maps/LGudt4CWUYyKVsMv8', 1, '2023-07-09 06:34:52', '2023-07-09 06:34:52'),
(7, 'TKAI Hidayah (Buka Mata)', 3, 10, '-5.106447,119.506411', 'https://goo.gl/maps/wdHEs6NbVTrxcoks8', 1, '2023-07-09 06:34:52', '2023-07-09 06:34:52'),
(8, 'Mushollah Al Ummah (Buka Mata)', 5, 20, '', '', 1, '2023-07-09 06:34:52', '2023-07-09 06:34:52'),
(9, 'Blok G7 No 1/2 (Perum Mangga 3)', 17, 53, '-5.1264304,119.5332002', 'https://goo.gl/maps/SuUdMXVfW7XLTaAr7', 1, '2023-07-09 06:34:52', '2023-07-09 06:34:52'),
(10, 'Masjid Al Muhajirin (Perum Bung Permai)', 10, 25, '-5.1387734,119.5012151', 'https://goo.gl/maps/yfCKfRwuqyn9CArJ7', 16, '2023-07-09 06:34:52', '2023-07-09 06:37:12'),
(11, 'Masjid Jabal Nur (Blok 10)', 82, 311, '-5.1381781,119.4980048', 'https://goo.gl/maps/Sy7jSDUdoHHCHMCH9', 5, '2023-07-09 06:34:52', '2023-07-09 06:34:52'),
(12, 'Masjid Makkah Al Mukarramah Blok 10 (Jalan Suling)', 32, 124, '-5.172058,119.5048319', 'https://goo.gl/maps/k4uzM7G4jJKNrenK8', 5, '2023-07-09 06:34:52', '2023-07-09 06:34:52'),
(13, 'Posyandu Anyelir (Jalan Manggala Dalam)', 7, 38, '-5.1707054,119.4966073', 'https://goo.gl/maps/P7G6ZgE4bNwbnvF37', 5, '2023-07-09 06:34:52', '2023-07-09 06:34:52'),
(14, 'Masjid Al Muttagin (Jalan Ujung Bori)', 12, 50, '-5.1702426,119.4975484', 'https://goo.gl/maps/Kjw41ouyQWynpKBH6', 5, '2023-07-09 06:34:52', '2023-07-09 06:34:52'),
(15, 'Masjid Nurul Jihad (Blok 10)', 5, 22, '-5.173997,119.5051645', 'https://goo.gl/maps/tDz8JsKjSHBfrKks7', 5, '2023-07-09 06:34:52', '2023-07-09 06:34:52'),
(16, 'Masjid Al Mutohhirin (Jalan Bangkala Dalam 3)', 6, 24, '-5.167772,119.4996863', 'https://goo.gl/maps/kzVuLAnj1ug48Pkr6', 5, '2023-07-09 06:34:52', '2023-07-09 06:34:52'),
(17, 'Masjid Al Muhajirin (Blok 8)', 26, 102, '-5.1713705,119.5082343', 'https://goo.gl/maps/bP3q9uFEHWmdG4JR9', 5, '2023-07-09 06:34:52', '2023-07-09 06:34:52'),
(18, 'Rumah a.n Bahri (Komp. Pemda RW 12)', 10, 38, '', '', 5, '2023-07-09 06:34:52', '2023-07-09 06:34:52'),
(19, 'Masjid Arra id (Komp. Pemda RW 12)', 8, 36, '-5.16822,119.5016133', 'https://goo.gl/maps/vxHD1dqSJvpLfRDw5', 5, '2023-07-09 06:34:52', '2023-07-09 06:34:52'),
(20, 'Masjid Qurrataayyun (Blok 8)', 22, 91, '', '', 5, '2023-07-09 06:34:52', '2023-07-09 06:34:52'),
(21, 'Masjid Yudha Al Fatih (Blok 8)', 9, 35, '-5.1717802,119.5016781', 'https://goo.gl/maps/eRREQdwf6nZmfnM49', 5, '2023-07-09 06:34:52', '2023-07-09 06:34:52'),
(22, 'Masjid Al Anwar (Blok 10)', 12, 56, '-5.1714567,119.5092998', 'https://goo.gl/maps/YAcHJH7YLMQUsv6p7', 5, '2023-07-09 06:34:52', '2023-07-09 06:34:52'),
(23, 'DDI AI Abrar (Blok 11)', 1, 2, '-5.1690707,119.5053391', 'https://goo.gl/maps/tQ5RccsmQdRAcpin7', 5, '2023-07-09 06:34:52', '2023-07-09 06:34:52'),
(24, 'Masjid Raya Bukit Baruga (Jalan Raya Baruga)', 60, 225, '-5.1576537,119.4807307', 'https://goo.gl/maps/BKyLE3UjDD9tFqGX7', 4, '2023-07-09 06:34:52', '2023-07-09 06:34:52'),
(25, 'Masjid Nurul Aisyiah (Kampung Kajang)', 2, 10, '-5.1822866,119.4841013', 'https://goo.gl/maps/mNxpMfBL75kE9kdF6', 7, '2023-07-09 06:34:52', '2023-07-09 06:34:52'),
(26, 'SD Inpres Kassi (Jalan Tamangapa Raya)', 3, 10, '-5.1830411,119.4884057', 'https://goo.gl/maps/91jMcqjcyazDBa518', 7, '2023-07-09 06:34:52', '2023-07-09 06:34:52'),
(27, 'Rumah a.n Nusir Rurung (Jalan Rahmatullah)', 3, 12, '', '', 7, '2023-07-09 06:34:52', '2023-07-09 06:34:52'),
(28, 'Rumah Potong Hewan (Jalan Tamangapa Raya)', 2, 9, '-5.1889512,119.495858', 'https://goo.gl/maps/ZFk4JbDXibL25iCz7', 7, '2023-07-09 06:34:52', '2023-07-09 06:34:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'azwar712', 'azwar712@gmail.com', NULL, '$2y$10$eeMxcvK.Blw/bvxRGWeJL.LiC6jx0BAKjnUIGwPPqz/PZqDON3jra', NULL, '2023-07-09 18:15:00', '2023-07-09 18:15:00'),
(2, 'azwar711', 'azwar711@gmail.com', NULL, '$2y$10$60Ebld4dbUROKD9MbzW5xeU7Yj2VMQYe0Ljfm6wm4mXstcu6t7TKe', NULL, '2023-07-10 05:15:06', '2023-07-10 05:15:06');

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
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`),
  ADD KEY `kelurahan_id_kecamatan_foreign` (`id_kecamatan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `titik_banjir`
--
ALTER TABLE `titik_banjir`
  ADD PRIMARY KEY (`id_titik_banjir`),
  ADD KEY `titik_banjir_id_kelurahan_foreign` (`id_kelurahan`);

--
-- Indexes for table `titik_pengungsian`
--
ALTER TABLE `titik_pengungsian`
  ADD PRIMARY KEY (`id_titik_pengungsian`),
  ADD KEY `titik_pengungsian_id_kelurahan_foreign` (`id_kelurahan`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id_kelurahan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `titik_banjir`
--
ALTER TABLE `titik_banjir`
  MODIFY `id_titik_banjir` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `titik_pengungsian`
--
ALTER TABLE `titik_pengungsian`
  MODIFY `id_titik_pengungsian` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD CONSTRAINT `kelurahan_id_kecamatan_foreign` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`) ON DELETE CASCADE;

--
-- Constraints for table `titik_banjir`
--
ALTER TABLE `titik_banjir`
  ADD CONSTRAINT `titik_banjir_id_kelurahan_foreign` FOREIGN KEY (`id_kelurahan`) REFERENCES `kelurahan` (`id_kelurahan`) ON DELETE CASCADE;

--
-- Constraints for table `titik_pengungsian`
--
ALTER TABLE `titik_pengungsian`
  ADD CONSTRAINT `titik_pengungsian_id_kelurahan_foreign` FOREIGN KEY (`id_kelurahan`) REFERENCES `kelurahan` (`id_kelurahan`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
