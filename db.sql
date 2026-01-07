-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               8.4.2 - MySQL Community Server - GPL
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.11.0.7065
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных namangan_turizm
CREATE DATABASE IF NOT EXISTS `namangan_turizm` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `namangan_turizm`;

-- Дамп структуры для таблица namangan_turizm.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы namangan_turizm.cache: ~0 rows (приблизительно)

-- Дамп структуры для таблица namangan_turizm.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы namangan_turizm.cache_locks: ~0 rows (приблизительно)

-- Дамп структуры для таблица namangan_turizm.failed_jobs
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

-- Дамп данных таблицы namangan_turizm.failed_jobs: ~0 rows (приблизительно)

-- Дамп структуры для таблица namangan_turizm.galleries
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы namangan_turizm.galleries: ~0 rows (приблизительно)

-- Дамп структуры для таблица namangan_turizm.hotels
CREATE TABLE IF NOT EXISTS `hotels` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` json NOT NULL,
  `description` json DEFAULT NULL,
  `stars` int NOT NULL DEFAULT '0',
  `images` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы namangan_turizm.hotels: ~0 rows (приблизительно)

-- Дамп структуры для таблица namangan_turizm.jobs
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

-- Дамп данных таблицы namangan_turizm.jobs: ~0 rows (приблизительно)

-- Дамп структуры для таблица namangan_turizm.job_batches
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

-- Дамп данных таблицы namangan_turizm.job_batches: ~0 rows (приблизительно)

-- Дамп структуры для таблица namangan_turizm.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы namangan_turizm.migrations: ~8 rows (приблизительно)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2025_12_30_053806_create_tours_table', 2),
	(5, '2025_12_30_053807_create_galleries_table', 2),
	(6, '2025_12_30_053807_create_hotels_table', 2),
	(7, '2025_12_30_053808_create_posts_table', 2),
	(8, '2025_12_30_053808_create_settings_table', 2);

-- Дамп структуры для таблица namangan_turizm.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы namangan_turizm.password_reset_tokens: ~0 rows (приблизительно)

-- Дамп структуры для таблица namangan_turizm.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` json NOT NULL,
  `body` json NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы namangan_turizm.posts: ~0 rows (приблизительно)

-- Дамп структуры для таблица namangan_turizm.sessions
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

-- Дамп данных таблицы namangan_turizm.sessions: ~0 rows (приблизительно)

-- Дамп структуры для таблица namangan_turizm.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы namangan_turizm.settings: ~0 rows (приблизительно)

-- Дамп структуры для таблица namangan_turizm.tours
CREATE TABLE IF NOT EXISTS `tours` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` json NOT NULL,
  `description` json NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transport_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_list` json DEFAULT NULL,
  `images` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы namangan_turizm.tours: ~5 rows (приблизительно)
INSERT INTO `tours` (`id`, `title`, `description`, `price`, `duration`, `transport_type`, `route_list`, `images`, `created_at`, `updated_at`) VALUES
	(1, '{"en": "Namangan - Tashkent - Namangan", "ru": "Наманган - Ташкент - Наманган", "uz": "Namangan - Toshkent - Namangan"}', '{"en": "Tour package includes: Hotel, meals, transfer services.", "ru": "В тур пакет включено: Отель, питание, трансфер.", "uz": "Tur paket ichida: Mehmonxona, ovqatlanish, transfer xizmatlari kiradi."}', 'Kelishilgan narxda', '2 kun 1 kecha', 'Mikroavtobus', '{"en": "Namangan - Tashkent - Namangan", "ru": "Наманган - Ташкент - Наманган", "uz": "Namangan - Toshkent - Namangan"}', NULL, '2025-12-30 00:42:26', '2025-12-30 00:42:26'),
	(2, '{"en": "Namangan - Zaamin - Namangan", "ru": "Наманган - Зомин - Наманган", "uz": "Namangan - Zomin - Namangan"}', '{"en": "Tour package includes: Hotel, meals, transfer services.", "ru": "В тур пакет включено: Отель, питание, трансфер.", "uz": "Tur paket ichida: Mehmonxona, ovqatlanish, transfer xizmatlari kiradi."}', 'Kelishilgan narxda', '2 kun 1 kecha', 'Mikroavtobus', '{"en": "Namangan - Zaamin - Namangan", "ru": "Наманган - Зомин - Наманган", "uz": "Namangan - Zomin - Namangan"}', NULL, '2025-12-30 00:42:26', '2025-12-30 00:42:26'),
	(3, '{"en": "Pap - Khiva - Bukhara - Samarkand - Pap", "ru": "Пап - Хива - Бухара - Самарканд - Пап", "uz": "Pop - Xiva - Buxoro - Samarqand - Pop"}', '{"en": "Tour package includes: Hotel, meals, transfer services.", "ru": "В тур пакет включено: Отель, питание, трансфер.", "uz": "Tur paket ichida: Mehmonxona, ovqatlanish, transfer xizmatlari kiradi."}', 'Kelishilgan narxda', '6 kun 5 kecha', 'Pop - Xiva poyezd, Xiva - Buxoro - Samarqand mikroavtobus', '{"en": "Pap - Khiva - Bukhara - Samarkand - Pap", "ru": "Пап - Хива - Бухара - Самарканд - Пап", "uz": "Pop - Xiva - Buxoro - Samarqand - Pop"}', NULL, '2025-12-30 00:42:26', '2025-12-30 00:42:26'),
	(4, '{"en": "Pap - Bukhara - Samarkand - Pap", "ru": "Пап - Бухара - Самарканд - Пап", "uz": "Pop - Buxoro - Samarqand - Pop"}', '{"en": "Tour package includes: Hotel, meals, transfer services.", "ru": "В тур пакет включено: Отель, питание, трансфер.", "uz": "Tur paket ichida: Mehmonxona, ovqatlanish, transfer xizmatlari kiradi."}', 'Kelishilgan narxda', '5 kun 4 kecha', 'Pop - Samarqand poyezd, Buxoro - Samarqand mikroavtobus', '{"en": "Pap - Bukhara - Samarkand - Pap", "ru": "Пап - Бухара - Самарканд - Пап", "uz": "Pop - Buxoro - Samarqand - Pop"}', NULL, '2025-12-30 00:42:26', '2025-12-30 00:42:26'),
	(5, '{"en": "Namangan - Samarkand - Namangan", "ru": "Наманган - Самарканд - Наманган", "uz": "Namangan - Samarqand - Namangan"}', '{"en": "Tour package includes: Hotel, meals, transfer services.", "ru": "В тур пакет включено: Отель, питание, трансфер.", "uz": "Tur paket ichida: Mehmonxona, ovqatlanish, transfer xizmatlari kiradi."}', 'Kelishilgan narxda', '3 kun 2 kecha', 'Namangan - Oxangaron yengil mashina, Oxangaron - Samarqand mikroabtobus', '{"en": "Namangan - Samarkand - Namangan", "ru": "Наманган - Самарканд - Наманган", "uz": "Namangan - Samarqand - Namangan"}', NULL, '2025-12-30 00:42:26', '2025-12-30 00:42:26');

-- Дамп структуры для таблица namangan_turizm.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы namangan_turizm.users: ~1 rows (приблизительно)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$PVUJw8A577uCycHHhKBgl.ps/5i4sV4QhTB4DrkcABu66g.Fzpii2', NULL, '2025-12-30 00:42:26', '2025-12-30 00:42:26');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
