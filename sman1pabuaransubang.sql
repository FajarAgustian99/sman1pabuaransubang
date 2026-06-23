-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table sman1pabuaransubang.academic_programs
CREATE TABLE IF NOT EXISTS `academic_programs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.academic_programs: ~1 rows (approximately)
INSERT INTO `academic_programs` (`id`, `title`, `icon`, `description`, `sort_order`, `is_active`, `created_at`, `updated_at`) VALUES
	(1, 'Tes', NULL, 'Tes', 0, 0, '2026-06-01 09:10:32', '2026-06-01 09:10:32');

-- Dumping structure for table sman1pabuaransubang.academic_schedules
CREATE TABLE IF NOT EXISTS `academic_schedules` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `sort_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.academic_schedules: ~1 rows (approximately)
INSERT INTO `academic_schedules` (`id`, `activity`, `activity_date`, `description`, `sort_order`, `created_at`, `updated_at`) VALUES
	(1, 'Tes', '2026-06-02', 'dxADDA', 1, '2026-06-01 09:16:26', '2026-06-01 09:16:26');

-- Dumping structure for table sman1pabuaransubang.announcements
CREATE TABLE IF NOT EXISTS `announcements` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `announcement_date` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `announcements_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.announcements: ~1 rows (approximately)
INSERT INTO `announcements` (`id`, `category`, `title`, `description`, `announcement_date`, `image`, `button_text`, `button_color`, `slug`, `is_active`, `created_at`, `updated_at`) VALUES
	(1, 'Tes', 'Tes', 'Tes', '2026-06-01', 'announcements/OlUkgg3rDzkC6EZoCqX2Gy1Q1oz8G4JdCc6fnDVS.jpg', 'tes', 'primary', 'tes', 1, '2026-05-29 07:32:18', '2026-05-29 07:32:18');

-- Dumping structure for table sman1pabuaransubang.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.cache: ~2 rows (approximately)
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
	('sman1pabuaransubang-cache-sman1pabuaran.operator@gmail.com|127.0.0.1', 'i:1;', 1780769585),
	('sman1pabuaransubang-cache-sman1pabuaran.operator@gmail.com|127.0.0.1:timer', 'i:1780769585;', 1780769585);

-- Dumping structure for table sman1pabuaransubang.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.cache_locks: ~0 rows (approximately)

-- Dumping structure for table sman1pabuaransubang.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operational_hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_maps_embed` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.contacts: ~0 rows (approximately)

-- Dumping structure for table sman1pabuaransubang.contact_messages
CREATE TABLE IF NOT EXISTS `contact_messages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.contact_messages: ~1 rows (approximately)
INSERT INTO `contact_messages` (`id`, `name`, `email`, `subject`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
	(1, 'Tes', 'fajar1990.agustian@gmail.com', 'Tes', 'Tes', 1, '2026-06-06 09:09:23', '2026-06-06 09:10:08');

-- Dumping structure for table sman1pabuaransubang.contact_settings
CREATE TABLE IF NOT EXISTS `contact_settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_maps_embed` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.contact_settings: ~0 rows (approximately)

-- Dumping structure for table sman1pabuaransubang.extracurriculars
CREATE TABLE IF NOT EXISTS `extracurriculars` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `badge_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'primary',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.extracurriculars: ~0 rows (approximately)

-- Dumping structure for table sman1pabuaransubang.extracurricular_achievements
CREATE TABLE IF NOT EXISTS `extracurricular_achievements` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.extracurricular_achievements: ~0 rows (approximately)

-- Dumping structure for table sman1pabuaransubang.facilities
CREATE TABLE IF NOT EXISTS `facilities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int NOT NULL DEFAULT '1',
  `sort_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.facilities: ~1 rows (approximately)
INSERT INTO `facilities` (`id`, `name`, `type`, `description`, `photo`, `qty`, `sort_order`, `created_at`, `updated_at`) VALUES
	(1, 'Laboratorium Komputer', 'Praktikum Komputer', 'Tempat Praktikum Komputer', 'facilities/r0QkvuBdXBFZjHY5EIraXXtqnDNzmWm7m8I9LErD.png', 1, 1, '2026-05-30 10:40:37', '2026-05-30 10:40:37');

-- Dumping structure for table sman1pabuaransubang.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
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

-- Dumping data for table sman1pabuaransubang.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table sman1pabuaransubang.featured_programs
CREATE TABLE IF NOT EXISTS `featured_programs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.featured_programs: ~1 rows (approximately)
INSERT INTO `featured_programs` (`id`, `title`, `image`, `description`, `sort_order`, `is_active`, `created_at`, `updated_at`) VALUES
	(1, 'trssss', 'featured-programs/guGdc7l0mg0FxjkYrn3WVulFlaRQhCBaxSLFM3O2.jpg', 'Dsfafadfafa', 0, 1, '2026-06-01 09:21:15', '2026-06-01 09:21:15');

-- Dumping structure for table sman1pabuaransubang.footer_settings
CREATE TABLE IF NOT EXISTS `footer_settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_year` int NOT NULL DEFAULT '2026',
  `copyright_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.footer_settings: ~1 rows (approximately)
INSERT INTO `footer_settings` (`id`, `school_name`, `description`, `address`, `phone`, `email`, `working_hours`, `facebook`, `instagram`, `youtube`, `copyright_year`, `copyright_name`, `created_at`, `updated_at`) VALUES
	(1, 'SMAN 1 PABUARAN', NULL, 'Jl Raya Cipeundeuy - Pabuaran', '081221775552', 'fajar1990.agustian@gmail.com', '06.30 s.d 15.00', NULL, NULL, NULL, 2026, 'Copyright@sman1pabuaran', '2026-06-06 10:30:58', '2026-06-06 10:30:58');

-- Dumping structure for table sman1pabuaransubang.header_settings
CREATE TABLE IF NOT EXISTS `header_settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elearning_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'E-Learning',
  `elearning_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ppdb_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'SPMB Online',
  `ppdb_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.header_settings: ~1 rows (approximately)
INSERT INTO `header_settings` (`id`, `school_name`, `logo`, `elearning_text`, `elearning_url`, `ppdb_text`, `ppdb_url`, `is_active`, `created_at`, `updated_at`) VALUES
	(1, 'SMAN 1 PABUARAN', 'header/G9V2XeEY5sGXaoaW38uSG2TgxmilkkRhBQFgPinr.png', 'E-Learning', 'https://e-learningsanepa.chasan.id/', 'SPMB Online', 'https://spmb.jabarprov.go.id/', 1, '2026-06-06 10:20:30', '2026-06-06 10:32:23');

-- Dumping structure for table sman1pabuaransubang.hero_sliders
CREATE TABLE IF NOT EXISTS `hero_sliders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.hero_sliders: ~3 rows (approximately)
INSERT INTO `hero_sliders` (`id`, `title`, `subtitle`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
	(1, 'Tes', 'Tes', 'sliders/mb1GFWFjtexqDVKCUB1ZGpc8Knk0aFBgHKwrgOev.jpg', 1, '2026-05-29 07:10:18', '2026-05-30 07:21:38'),
	(2, 'Tes 2', 'Tes 2', 'sliders/m6w6j6kY200FYPUOB2vsKqAr3uFzK8uDx288IMyE.jpg', 1, '2026-05-30 07:01:04', '2026-05-30 07:21:06'),
	(3, 'Tes 3', 'Tes 3', 'sliders/R32JCbw4GF1vxJCzrwj9tXPMoBUy1FnJLxGbPTwK.jpg', 1, '2026-05-30 07:20:56', '2026-05-30 07:20:56');

-- Dumping structure for table sman1pabuaransubang.histories
CREATE TABLE IF NOT EXISTS `histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `histories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.histories: ~1 rows (approximately)
INSERT INTO `histories` (`id`, `title`, `slug`, `content`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'TES', 'tes', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset\'s Body Type sheets. It has survived not only many decades, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised thanks to these sheets and more recently with desktop publishing software including versions of Lorem Ipsum.', 'histories/4uwZpPT6ghevRCzHQyHCpgII7YCMVxnfvAcg1LQI.jpg', '2026-05-30 09:50:45', '2026-05-30 09:50:45');

-- Dumping structure for table sman1pabuaransubang.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.jobs: ~0 rows (approximately)

-- Dumping structure for table sman1pabuaransubang.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.job_batches: ~0 rows (approximately)

-- Dumping structure for table sman1pabuaransubang.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.migrations: ~25 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2026_05_29_121707_create_hero_sliders_table', 1),
	(5, '2026_05_29_121741_create_school_statistics_table', 1),
	(6, '2026_05_29_121816_create_announcements_table', 1),
	(7, '2026_05_29_121937_create_principals_table', 1),
	(8, '2026_05_29_145854_add_is_active_to_principals_table', 2),
	(9, '2026_05_30_150442_create_news_table', 3),
	(10, '2026_05_30_151148_create_histories_table', 4),
	(11, '2026_05_30_162515_create_vision_missions_table', 5),
	(12, '2026_05_30_170557_create_organizations_table', 6),
	(13, '2026_05_30_172319_create_teachers_table', 7),
	(14, '2026_05_30_173522_create_facilities_table', 8),
	(15, '2026_06_01_152732_create_academic_programs_table', 9),
	(16, '2026_06_01_152848_create_academic_schedules_table', 10),
	(17, '2026_06_01_152941_create_featured_programs_table', 11),
	(18, '2026_06_06_135541_create_extracurriculars_table', 12),
	(19, '2026_06_06_140342_create_extracurricular_achievements_table', 13),
	(20, '2026_06_06_152625_add_is_active_to_extracurricular_achievements_table', 14),
	(21, '2026_06_06_153649_create_contact_settings_table', 15),
	(22, '2026_06_06_153721_create_contact_messages_table', 15),
	(23, '2026_06_06_154920_create_contacts_table', 16),
	(24, '2026_06_06_162529_create_footer_settings_table', 17),
	(25, '2026_06_06_163740_create_header_settings_table', 18);

-- Dumping structure for table sman1pabuaransubang.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.news: ~1 rows (approximately)
INSERT INTO `news` (`id`, `title`, `slug`, `image`, `content`, `is_published`, `created_at`, `updated_at`) VALUES
	(1, 'Tes', 'tes', 'news/1JkIeHvqw4qPsgdSFdwN0hO6qsvkrQA3AxMR0clw.jpg', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since 1966, when designers at Letraset and James Mosley, the librarian at St Bride Printing Library, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset\'s Body Type sheets. It has survived not only many decades, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised thanks to these sheets and more recently with desktop publishing software including versions of Lorem Ipsum.', 1, '2026-05-30 09:14:48', '2026-05-30 09:14:48');

-- Dumping structure for table sman1pabuaransubang.organizations
CREATE TABLE IF NOT EXISTS `organizations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.organizations: ~1 rows (approximately)
INSERT INTO `organizations` (`id`, `position`, `name`, `photo`, `sort_order`, `created_at`, `updated_at`) VALUES
	(1, 'Guru PKN', 'JAENUDIN, S.Pdi Gr', 'organizations/3Np0QlF1WD1x0plxxn0GDh9mcbvkw1VhvVcffdlk.jpg', 1, '2026-05-30 10:13:00', '2026-05-30 10:13:00');

-- Dumping structure for table sman1pabuaransubang.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table sman1pabuaransubang.principals
CREATE TABLE IF NOT EXISTS `principals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Kepala Sekolah',
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.principals: ~1 rows (approximately)
INSERT INTO `principals` (`id`, `name`, `position`, `message`, `photo`, `created_at`, `updated_at`, `is_active`) VALUES
	(1, 'Tes', 'Kepala Sekolah', 'Tes', 'principals/JcnTNBK4onCrSa1haQS62cloYvFqOi1VPqU3banL.jpg', '2026-05-30 06:59:57', '2026-05-30 06:59:57', 1);

-- Dumping structure for table sman1pabuaransubang.school_statistics
CREATE TABLE IF NOT EXISTS `school_statistics` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.school_statistics: ~0 rows (approximately)

-- Dumping structure for table sman1pabuaransubang.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.sessions: ~1 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('ClW4hmw07VTEl8c6VNGn0RiRKEdwd4ClEFzDInST', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRkQ5RnNlenNGR05FYkZhUVI0cmtoT3VYVzZnNkdhS2ZsZ0gxOFVGZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9zbWFuMXBhYnVhcmFuc3ViYW5nLnRlc3QiO3M6NToicm91dGUiO3M6NzoiYmVyYW5kYSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1780770229);

-- Dumping structure for table sman1pabuaransubang.teachers
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.teachers: ~0 rows (approximately)

-- Dumping structure for table sman1pabuaransubang.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','guru','siswa') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'siswa',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Administrator', 'admin', 'admin@gmail.com', NULL, '$2y$12$/hN7jygjMJL2hmTx2X86ROk9RP66nT2AN5940rG0d6RfIg99YGozm', 'siswa', 'A9t4mYb1kFrUvuY6PD8TPaGB0pOjwTDlf8d4K7L2hIAZ73pkOLKQxW5LOcw4', '2026-05-29 06:21:00', '2026-05-29 06:21:00');

-- Dumping structure for table sman1pabuaransubang.vision_missions
CREATE TABLE IF NOT EXISTS `vision_missions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `vision` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sman1pabuaransubang.vision_missions: ~1 rows (approximately)
INSERT INTO `vision_missions` (`id`, `vision`, `mission`, `created_at`, `updated_at`) VALUES
	(1, 'Tes', 'Tes', '2026-05-30 09:46:25', '2026-05-30 09:46:25');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
