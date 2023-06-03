-- Adminer 4.8.1-dev MySQL 8.0.32 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(27,	'2014_10_12_000000_create_users_table',	1),
(28,	'2014_10_12_100000_create_password_resets_table',	1),
(29,	'2019_08_19_000000_create_failed_jobs_table',	1),
(30,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(31,	'2022_10_12_084944_add_role_to_users',	1),
(32,	'2022_10_17_053534_create_penyakits_table',	1),
(33,	'2022_10_17_064123_add_penyakit_to_users',	1),
(34,	'2022_12_11_153749_create_riwayat_penyakits_table',	1),
(35,	'2023_05_27_082349_add_diagnosis_to_penyakits_table',	1);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `penyakits`;
CREATE TABLE `penyakits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `diagnosis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `penyakits` (`id`, `nama`, `remember_token`, `created_at`, `updated_at`, `diagnosis`) VALUES
(1,	'Mengalami ketakutan yang tiba-tiba (Catatan : lonjakan tibatiba dapat terjadi dari keadaan tenang atau keadaan cemas)',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Panik'),
(2,	'Mengalami ketidaknyamanan secara intens dalam beberapa menit',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Panik'),
(3,	'Merasa menggigil atau sensasi panas',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Panik'),
(4,	'Jantung berdebar atau detak jantung yang dipercepat',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Panik'),
(5,	'Berkeringat',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Panik'),
(6,	'Ketakutan atau gemetar',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Panik'),
(7,	'Merasa sesak napas atau tercekik',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Panik'),
(8,	'Merasa tersedak',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Panik'),
(9,	'Merasa nyeri dibagian dada',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Panik'),
(10,	'Merasa mual atau perut seperti tertekan',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Panik'),
(11,	'Merasa pusing, goyah, atau pingsan',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Panik'),
(12,	'Merasa parestesia (sensasi mati rasa atau kesemutan)',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Panik'),
(13,	'Merasa derealisasi (perasaan tidak nyata)',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Panik'),
(14,	'Merasa depersonalisasi (melepaskan diri dari satu diri)',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Panik'),
(15,	'Merasa takut kehilangan kendali atau “menjadi gila”',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Panik'),
(16,	'Ketakutan akan kematian',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Panik'),
(17,	'Mengalami ketakutan dan kecemasan yang nyata tentang objek atau situasi tertentu (misal : terbang, ketinggian, hewan, menerima suntikan, melihat darah)',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Fobia Spesifik'),
(18,	'Merasa tidak nyaman oleh objek atau situasi tertentu',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Fobia Spesifik'),
(19,	'Ketakutan , kecemasan, atau penghindaran berlangsung terusmenerus (biasanya berlangsung selama 6 bulan atau lebih)',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Fobia Spesifik'),
(20,	'Ketakutan , kecemasan, atau penghindaran berlangsung sampai mengganggu dalam pekerjaan, sosial, atau area penting lainnya',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Fobia Spesifik'),
(21,	'Ketakutan dan kecemasan yang dialami tidak sebanding dengan bahaya nyata yang ditimbulkan oleh objek atau situasi tertentu',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Fobia Spesifik'),
(22,	'Mengalami kecemasan dan kekhawatiran yang berlebihan (kegelisahan), terjadi selama minimal 6 bulan, tentang pekerjaan atau sekolah',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Kecemasan Menyeluruh'),
(23,	'Merasa sulit untuk mengontrol rasa khawatirnya',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Kecemasan Menyeluruh'),
(24,	'Merasa mudah lelah',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Kecemasan Menyeluruh'),
(25,	'Merasa sulit berkonsentrasi atau pikiran menjadi kosong',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Kecemasan Menyeluruh'),
(26,	'Iritabilitas',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Kecemasan Menyeluruh'),
(27,	'Mengalami ketegangan otot',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Kecemasan Menyeluruh'),
(28,	'Mengalami gangguan tidur (kesulitan tertidur atau tetap tertidur)',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Kecemasan Menyeluruh'),
(29,	'Merasa kurang tidur',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Gangguan Kecemasan Menyeluruh'),
(30,	'Ketakutan atau kecemasan yang nyata tentang di mana berada pada kemungkinan diawasi oleh orang lain',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Fobia Sosial'),
(31,	'Ketakutan atau kecemasan yang nyata tentang di mana berada pada kemungkinan interaksi sosial (misal : melakukan percakapan, bertemu orang asing)',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Fobia Sosial'),
(32,	'Merasa takut akan bertindak menunjukkan gejala kecemasan yang berakibat membuat malu diri sendiri dan menyinggung orang lain',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Fobia Sosial'),
(33,	'Ketakutan dan kecemasan pada situasi sosial',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Fobia Sosial'),
(34,	'Ketakutan dan kecemasan tidak sebanding dengan ancaman nyata yang ditimbulkan oleh situasi sosial dan pada konteks sosial budaya',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Fobia Sosial'),
(35,	'Ketakutan, kecemasan, atau penghindaran terus-menerus (selama 6 bulan atau lebih)',	NULL,	'2023-06-03 00:37:14',	'2023-06-03 00:37:14',	'Fobia Sosial');

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `riwayat_penyakits`;
CREATE TABLE `riwayat_penyakits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `riwayat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `penyakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 2023-06-03 07:47:42