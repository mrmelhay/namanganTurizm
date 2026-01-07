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

-- Дамп структуры для таблица namangan_turizm.about_contents
CREATE TABLE IF NOT EXISTS `about_contents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` json NOT NULL,
  `content` json NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы namangan_turizm.about_contents: ~1 rows (приблизительно)
INSERT INTO `about_contents` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
	(1, '{"en": "About Us", "ru": "О нас", "uz": "Biz haqimizda"}', '{"en": "<p><strong>&ldquo;NAMANGAN TURIZM&rdquo; LLC</strong> was established in 2014 and operates as a tour operator providing professional tourism services. The company conducts its activities in accordance with the legislation of the Republic of Uzbekistan.</p>\\r\\n\\r\\n<p><strong>License Register Number: T-0721-14</strong></p>\\r\\n\\r\\n<h3>Our Services</h3>\\r\\n\\r\\n<ul>\\r\\n\\t<li>\\r\\n\\t<p><strong>Domestic Tourism</strong><br />\\r\\n\\tOrganization of tours and tourism services within the Republic of Uzbekistan.</p>\\r\\n\\t</li>\\r\\n\\t<li>\\r\\n\\t<p><strong>International Tourism</strong><br />\\r\\n\\tProviding outbound tourism services as well as attracting foreign visitors to Uzbekistan, including leisure, medical, and educational tourism.</p>\\r\\n\\t</li>\\r\\n</ul>\\r\\n\\r\\n<p><strong>&ldquo;NAMANGAN TURIZM&rdquo; LLC</strong> is committed to delivering comfortable, safe, and reliable travel services to its clients.</p>", "ru": "<p><strong>ООО &laquo;NAMANGAN TURIZM&raquo;</strong> основано в 2014 году и является туроператорской компанией, предоставляющей профессиональные туристические услуги. Деятельность компании осуществляется в соответствии с законодательством Республики Узбекистан.</p>\\r\\n\\r\\n<p><strong>Регистрационный номер в реестре лицензий: T-0721-14</strong></p>\\r\\n\\r\\n<h3>Направления деятельности</h3>\\r\\n\\r\\n<ul>\\r\\n\\t<li>\\r\\n\\t<p><strong>Внутренний туризм</strong><br />\\r\\n\\tОрганизация туристических поездок и услуг на территории Республики Узбекистан.</p>\\r\\n\\t</li>\\r\\n\\t<li>\\r\\n\\t<p><strong>Международный туризм</strong><br />\\r\\n\\tОсуществление туристической деятельности за пределами Республики Узбекистан, а также привлечение иностранных граждан в Узбекистан, включая направления отдыха, медицинского и образовательного туризма.</p>\\r\\n\\t</li>\\r\\n</ul>\\r\\n\\r\\n<p><strong>ООО &laquo;NAMANGAN TURIZM&raquo;</strong> ориентировано на предоставление комфортных, безопасных и надежных туристических услуг.</p>", "uz": "<p><strong>&ldquo;NAMANGAN TURIZM&rdquo; MCHJ</strong> 2014-yilda tashkil etilgan bo&lsquo;lib, turizm sohasida professional xizmatlar ko&lsquo;rsatib kelayotgan turoperator kompaniyadir. Kompaniya faoliyati O&lsquo;zbekiston Respublikasi qonunchiligi asosida amalga oshiriladi.</p>\\r\\n\\r\\n<p><strong>Litsenziya reestri bo&lsquo;yicha tartib raqami: T-0721-14</strong></p>\\r\\n\\r\\n<h3>Faoliyat yo&lsquo;nalishlarimiz</h3>\\r\\n\\r\\n<ul>\\r\\n\\t<li>\\r\\n\\t<p><strong>Ichki turizm</strong><br />\\r\\n\\tO&lsquo;zbekiston Respublikasi hududida sayohatlar va turizm xizmatlarini tashkil etish.</p>\\r\\n\\t</li>\\r\\n\\t<li>\\r\\n\\t<p><strong>Xalqaro turizm</strong><br />\\r\\n\\tO&lsquo;zbekiston Respublikasidan tashqarida turizm faoliyatini amalga oshirish hamda xorijiy fuqarolarni mamlakatimizga jalb etish, jumladan dam olish, tibbiy va ta&rsquo;lim turizmi yo&lsquo;nalishlari.</p>\\r\\n\\t</li>\\r\\n</ul>\\r\\n\\r\\n<p><strong>&ldquo;NAMANGAN TURIZM&rdquo; MCHJ</strong> mijozlarga qulay, xavfsiz va ishonchli sayohat xizmatlarini taqdim etishni o&lsquo;zining ustuvor vazifasi deb biladi.</p>"}', 'about/CHJvZJCIfeBDq23qYW11WQwfh0KNiYwEceyv3T4B.jpg', '2026-01-06 08:24:17', '2026-01-06 08:39:14');

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

-- Дамп структуры для таблица namangan_turizm.features
CREATE TABLE IF NOT EXISTS `features` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` json NOT NULL,
  `description` json NOT NULL,
  `order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы namangan_turizm.features: ~2 rows (приблизительно)
INSERT INTO `features` (`id`, `icon`, `title`, `description`, `order`, `created_at`, `updated_at`) VALUES
	(1, 'bi bi-geo-alt-fill', '{"en": "Best Destinations", "ru": "Лучшие направления", "uz": "Eng yaxshi manzillar"}', '{"en": "We offer tours to the most beautiful and historical places in Namangan and beyond.", "ru": "Мы предлагаем туры по самым красивым и историческим местам Намангана и за его пределами.", "uz": "Biz Namangan va undan tashqaridagi eng go\'zal va tarixiy joylarga sayohatlarni taklif etamiz."}', 1, '2026-01-06 05:22:33', '2026-01-06 05:22:33'),
	(2, 'bi bi-currency-dollar', '{"en": "Affordable Prices", "ru": "Доступные цены", "uz": "Hamyonbop narxlar"}', '{"en": "High-quality services at competitive rates, ensuring great value for your money.", "ru": "Высококачественные услуги по конкурентоспособным ценам, обеспечивающие отличное соотношение цены и качества.", "uz": "Raqobatbardosh narxlarda yuqori sifatli xizmatlar, pulingiz uchun ajoyib qiyatni ta\'minlaydi."}', 2, '2026-01-06 05:22:33', '2026-01-06 05:22:33'),
	(3, 'bi bi-emoji-smile-fill', '{"en": "Satisfaction Guaranteed", "ru": "Гарантия удовольствия", "uz": "Mamnuniyat kafolatlangan"}', '{"en": "Our priority is your happiness. We strive to make every trip unforgettable.", "ru": "Ваше счастье - наш приоритет. Мы стремимся сделать каждую поездку незабываемой.", "uz": "Sizning baxtingiz bizning ustuvor vazifamizdir. Biz har bir sayohatni unutilmas qilishga harakat qilamiz."}', 3, '2026-01-06 05:22:33', '2026-01-06 05:22:33');

-- Дамп структуры для таблица namangan_turizm.galleries
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы namangan_turizm.galleries: ~2 rows (приблизительно)
INSERT INTO `galleries` (`id`, `image_path`, `title`, `created_at`, `updated_at`) VALUES
	(1, 'gallery/VnP6ERCJypTFuYxTIrCz9NhYoJ7Cjux4UTc1KXEj.png', '{"ru": "werw", "uz": "erwe"}', '2026-01-05 00:40:58', '2026-01-05 00:40:58'),
	(2, 'gallery/ivsyFP8yLkvwgMCvN4BFkrIRsS5WIn04N6wzskKM.png', '{"ru": "qweq", "uz": "wqrqweq"}', '2026-01-05 00:41:05', '2026-01-05 00:41:05');

-- Дамп структуры для таблица namangan_turizm.hero_slides
CREATE TABLE IF NOT EXISTS `hero_slides` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` json NOT NULL,
  `subtitle` json DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` json DEFAULT NULL,
  `order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы namangan_turizm.hero_slides: ~0 rows (приблизительно)
INSERT INTO `hero_slides` (`id`, `image_path`, `title`, `subtitle`, `link`, `button_text`, `order`, `is_active`, `created_at`, `updated_at`) VALUES
	(1, 'hero_slides/fewIYUt1pWYY50UO44CMzDsyXpxpt7CULoADMtvE.png', '{"en": "Test EN", "ru": "Test RU", "uz": "Test UZ"}', '{"en": "<p>Content EN</p>", "ru": "<p>Content RU</p>", "uz": "<p>Content UZ</p>"}', NULL, '{"en": null, "ru": null, "uz": null}', 0, 1, '2026-01-05 05:37:46', '2026-01-05 05:37:46');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы namangan_turizm.hotels: ~3 rows (приблизительно)
INSERT INTO `hotels` (`id`, `name`, `description`, `stars`, `images`, `created_at`, `updated_at`) VALUES
	(3, '{"ru": "Отель «Айдин Плаза»", "uz": "Oydin Plaza mehmonxonasi"}', '{"ru": "<p>Отель &laquo;Айдин Плаза&raquo;</p>\\r\\n\\r\\n<p>Uzbekistan, Namangan, Amir Temur ko&#39;chasi 97</p>", "uz": "<p>Oydin Plaza mehmonxonasi</p>\\r\\n\\r\\n<p>Uzbekistan, Namangan, Amir Temur ko&#39;chasi 97</p>"}', 4, '["hotels/JmRPgczPjpc2IRmzyH1yUi6WLEpgBzpf7AiHYvuH.jpg"]', '2026-01-06 06:56:39', '2026-01-06 06:58:52'),
	(4, '{"ru": "Гранд Шердор Отель", "uz": "Grand Sherdor mehmonxonasi"}', '{"ru": "<p>Гранд Шердор Отель</p>\\r\\n\\r\\n<p>Uzbekistan, Namangan, A.Temur ko&#39;chasi 1 A</p>", "uz": "<h1>Grand Sherdor mehmonxonasi</h1>\\r\\n\\r\\n<p>Uzbekistan, Namangan, A.Temur ko&#39;chasi 1 A</p>"}', 4, '["hotels/h26ghzVS2pQEqdIeLQFfned4caaBh2w7q3ZqlCPx.jpg"]', '2026-01-06 06:57:53', '2026-01-06 06:57:53'),
	(5, '{"ru": null, "uz": "Reikartz Namangan mehmonxonasi"}', '{"ru": "<p>Отель Рейкарц Наманган<br />\\r\\nУзбекистан, Наманган, улица Намангони 12</p>", "uz": "<h1>Reikartz Namangan mehmonxonasi</h1>\\r\\n\\r\\n<p>Uzbekistan, Namangan, Namangony ko&#39;chasi 12</p>"}', 4, '["hotels/EKljxHcXyXNfbTLLC18xtywWpt7BOksBuWhFjOEr.jpg"]', '2026-01-06 06:58:48', '2026-01-06 06:58:48');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы namangan_turizm.migrations: ~8 rows (приблизительно)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2025_12_30_053806_create_tours_table', 2),
	(5, '2025_12_30_053807_create_galleries_table', 2),
	(6, '2025_12_30_053807_create_hotels_table', 2),
	(7, '2025_12_30_053808_create_posts_table', 2),
	(8, '2025_12_30_053808_create_settings_table', 2),
	(9, '2026_01_05_093500_create_hero_slides_table', 3),
	(10, '2026_01_05_093501_create_features_table', 3),
	(11, '2026_01_06_132205_create_about_contents_table', 4);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы namangan_turizm.posts: ~2 rows (приблизительно)
INSERT INTO `posts` (`id`, `title`, `body`, `image_path`, `created_at`, `updated_at`) VALUES
	(1, '{"uz": "Namanganda zamonaviy 5 yulduzli mehmonxonalar qurilishi rejalashtirilmoqda"}', '{"uz": "<p>Namangan viloyati hokimi Shavkatjon Abdurazzoqov boshchiligidagi delegatsiya Turkiyaning Afyon shahrida yirik besh yulduzli Wyndham Afyonkarahisar mehmonxonasi boshqaruv raisi Fatix Kaan Bayxan hamda mehmonxonalar qurish boʻyicha taniqli arxitektor Mustafa Mermer bilan uchrashuv oʻtkazdi.</p>\\r\\n\\r\\n<p>Muloqot davomida Namangan viloyatida ham besh yulduzli mehmonxonalar qurish imkoniyatlari, berilayotgan imtiyozlar toʻgʻrisida maʼlumot berildi, shuningdek, mehmonxonaning imkoniyatlari va sharoitlari bilan tanishildi.</p>\\r\\n\\r\\n<p>Wyndham Afyonkarahisar mehmonxonasi boshqaruvi raisi Fatix Kaan Bayxan Namangan viloyatida 2 ta shunday mehmonxona qurish imkoniyati mavjudligi, tez kunlarda oʻz Ishchi guruhini yuborib, mehmonxona uchun joylar va imkoniyatlarni oʻrganishini maʼlum qildi.</p>\\r\\n\\r\\n<p>Namangan viloyati hokimligi Axborot xizmati.</p>"}', 'posts/JvvdQBJCjZvt7qNZaeGa1AXCU7qnD2D4SaNhvrw4.jpg', '2026-01-06 07:17:09', '2026-01-06 07:17:09'),
	(2, '{"uz": "Xivada 9 tonna palov tayyorlandi"}', '{"uz": "<p>2025-yil 14-dekabr kuni zamonaviy &ldquo;Arda Xiva&rdquo; turistik majmuasida O&lsquo;zbekiston Turizm qo&lsquo;mitasi tomonidan Oshpazlar assotsiatsiyasi bilan hamkorlikda tashkil etilgan &ldquo;Xorazm palovi&rdquo; xalqaro festivali bo&lsquo;lib o&lsquo;tdi. Mazkur tadbir turizmni rivojlantirish va hudud imidjini mustahkamlash yo&lsquo;lida muhim voqeaga aylandi. Festival milliy oshxona Xorazm an&rsquo;analari&shy;ni targ&lsquo;ib qilish va sayyohlarni jalb etishda samarali vosita bo&lsquo;la olishini yaqqol namoyon etdi.</p>\\r\\n\\r\\n<p>Festivalning eng muhim voqeasi &mdash; mamlakat miqyosida rekord hisoblangan, ulkan qozonda bir vaqtning o&lsquo;zida 9 tonna xorazmcha palov tayyorlangani bo&lsquo;ldi. Bu jarayon ko&lsquo;plab tomoshabinlar va mehmonlarni bir joyga jamladi. Palov tayyorlash uchun 2,5 tonna go&lsquo;sht, 3 tonna sabzi, 2,5 tonna guruch hamda 750 litr paxta yog&lsquo;i ishlatildi. Taom tayyor bo&lsquo;lgach, barcha xohlovchilar palovdan tatib ko&lsquo;rish imkoniga ega bo&lsquo;ldi, bu esa bayramona kayfiyat, mehmondo&lsquo;stlik va birdamlik muhitini yaratdi.</p>\\r\\n\\r\\n<p><img alt=\\"Xivada 9 tonna palov tayyorlandi\\" src=\\"https://gov.uz/_next/image?url=https%3A%2F%2Fapi-portal.gov.uz%2Fuploads%2F146%2F2025%2F12%2F15%2Fe1955705-2ec8-e183-3eee-7bf85bc911de_lists_slider_.jpg&amp;w=3840&amp;q=75\\" width=\\"100%\\" /></p>\\r\\n\\r\\n<p>Festival gastronomik tadbirlar hududning turistik jozibadorligini oshirishda muhim ahamiyat kasb etishini yana bir bor tasdiqladi.</p>"}', 'posts/28eFA6bw0Zl9G5XJUVKAjnLyaUdZMcFjVswSJvsq.jpg', '2026-01-06 07:20:17', '2026-01-06 07:20:17'),
	(3, '{"uz": "“Yoshlar turizmi haftaligi” doirasida sayohatlar tashkil etilmoqda"}', '{"uz": "<p>O&lsquo;zbekiston Respublikasi Turizm qo&lsquo;mitasi hamda hamkor tashkilotlar bilan birgalikda mamlakatimizda &ldquo;Yoshlar turizmi haftaligi&rdquo; tashkil etildi. Haftalik doirasida 7 yoshdan 30 yoshgacha bo&lsquo;lgan o&lsquo;quvchi, talaba va yoshlar mamlakatimizning diqqatga sazovor joylariga sayohat qilishmoqda.</p>\\r\\n\\r\\n<p>&ldquo;Yoshlar turizmi haftaligi&rdquo; O&lsquo;zbekiston Respublikasi Prezidentining 2022-yil 30-apreldagi &ldquo;Ichki turizm xizmatlarini diversifikatsiya qilishga oid qoʻshimcha chora-tadbirlar toʻgʻrisida&rdquo;gi PQ-232-sonli qaroriga muvofiq oʻtkazilib kelinmoqda.</p>\\r\\n\\r\\n<p>&nbsp;</p>\\r\\n\\r\\n<p>Haftalik doirasida tashkil etilayotgan sayohatlar yoshlarning tarixiy-madaniy merosimiz, milliy qadriyatlarimiz va yurtimizning betakror tabiat manzaralari bilan yaqindan tanishishiga xizmat qilmoqda. Shuningdek, mazkur tadbirlar orqali yoshlar o&lsquo;rtasida vatanparvarlik tuyg&lsquo;ularini mustahkamlash, sog&lsquo;lom turmush tarzini targ&lsquo;ib qilish hamda ichki turizmga bo&lsquo;lgan qiziqishni yanada oshirish maqsad qilingan.</p>\\r\\n\\r\\n<p>&nbsp;</p>\\r\\n\\r\\n<p>Bundan tashqari, sayohatlar davomida ishtirokchilar uchun turli ma&rsquo;naviy-ma&rsquo;rifiy uchrashuvlar, madaniy tadbirlar va ko&lsquo;ngilochar dasturlar tashkil etilmoqda. Bu esa yoshlarning bo&lsquo;sh vaqtini mazmunli o&lsquo;tkazish, o&lsquo;zaro tajriba almashish va yangi do&lsquo;stlik aloqalarini o&lsquo;rnatishiga keng imkoniyat yaratmoqda.</p>\\r\\n\\r\\n<p>&nbsp;</p>\\r\\n\\r\\n<p>Eslatib o&lsquo;tamiz, ushbu haftalik doirasida respublikadagi&nbsp;<a href=\\"https://api-portal.gov.uz/uploads/146/2025/12/29/150ea705-8076-9de2-ed46-278c887b4db5_media_.pdf\\"><strong>joylashtirish vositalari</strong></a>&nbsp;tomonidan&nbsp;<strong>20 foizgacha</strong>&nbsp;chegirmalar joriy etildi. Shu bilan birga, Madaniy meros agentligi va &ldquo;Vaqf&rdquo; xayriya fondi tasarrufidagi ziyoratgohlarga yoshlar&nbsp;<strong>10 foizlik</strong>&nbsp;chegirma bilan kirishi belgilandi. Shuningdek, O&lsquo;zbekiston Respublikasi Prezidentining &ldquo;Teatrlarning jamiyat madaniy hayotidagi ahamiyatini oshirish va ular faoliyatini yanada qo&lsquo;llab-quvvatlash chora-tadbirlari to&lsquo;g&lsquo;risida&rdquo; 2024-yil 22-noyabrdagi PQ&ndash;399-son qaroriga muvofiq, &ldquo;Temir daftar&rdquo;, &ldquo;Ayollar daftari&rdquo; va &ldquo;Yoshlar daftari&rdquo;ga kiritilgan fuqarolar va nogironligi bo&lsquo;lgan shaxslar davlat teatrlarining spektakllariga bepul kiritilishi belgilangan.</p>\\r\\n\\r\\n<p style=\\"text-align:center\\"><img alt=\\"\\" src=\\"http://namanganturizm.local.test/storage/uploads/youth2_1767704432.jpg\\" width=\\"100%\\" /></p>\\r\\n\\r\\n<p>&ldquo;Uzbekistan Airways&rdquo; AJ tomonidan o&lsquo;rta maxsus, professional va oliy ta&rsquo;lim muassasalari talaba (o&lsquo;quvchi)lari uchun 2025-yil 26-dekabrdan 2026-yil 11-yanvargacha amalga oshiriladigan mahalliy aviaqatnovlarda iqtisodiy toifadagi tariflaridan&nbsp;<strong>50%</strong>&nbsp;chegirma taqdim etiladi.</p>\\r\\n\\r\\n<p>&nbsp;</p>\\r\\n\\r\\n<p>Bundan tashqari, Haftalik doirasida yoshlarning ta&rsquo;tilini mazmunli o&lsquo;tkazish maqsadida respublika bo&lsquo;ylab o&lsquo;tkaziladigan konsert-tomosha tadbirlari&nbsp;<a href=\\"https://api-portal.gov.uz/uploads/146/2025/12/29/a8b37f59-5fe3-1901-f3ac-74e911fdead5_media_.pdf\\"><strong>ro&lsquo;yxati</strong></a>&nbsp;shakllantirildi.</p>\\r\\n\\r\\n<p>&nbsp;</p>\\r\\n\\r\\n<p>&ldquo;Yoshlar turizmi haftaligi&rdquo;da faol ishtirok eting &ndash; O&lsquo;zbekiston bo&lsquo;ylab sayohat qiling!</p>"}', 'posts/yHIdHmvfYBDUM6dxWxE6Ygx0hVUgaZ4Z1hsNoF1X.jpg', '2026-01-06 08:00:48', '2026-01-06 08:00:48');

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

-- Дамп данных таблицы namangan_turizm.sessions: ~1 rows (приблизительно)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('Tbc0pohlegpTNdSRUDn67ZGhdypWPfrMdcjw27Eg', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN2M4MGhlWXJHRjZnSmpubWpIUTNNODRGU0c0NnlTc2tuaHNMNFVISiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9uYW1hbmdhbnR1cml6bS5sb2NhbC50ZXN0IjtzOjU6InJvdXRlIjtzOjQ6ImhvbWUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1767783149);

-- Дамп структуры для таблица namangan_turizm.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы namangan_turizm.settings: ~5 rows (приблизительно)
INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
	(1, 'test', 'testKeys', '2026-01-05 00:41:55', '2026-01-05 00:41:55'),
	(2, 'footer_address', 'Namangan shahri, B.MASHRAB KO\'CHASI, 2-UY', '2026-01-06 08:08:13', '2026-01-06 08:08:13'),
	(3, 'footer_phone', '97-255-05-50', '2026-01-06 08:08:13', '2026-01-06 08:08:13'),
	(4, 'footer_email', 'info@namanganturizmn.uz', '2026-01-06 08:08:13', '2026-01-06 08:08:13'),
	(5, 'footer_copyright', '"NAMANGAN TURIZM" MCHJ', '2026-01-06 08:08:13', '2026-01-06 08:08:13');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы namangan_turizm.tours: ~5 rows (приблизительно)
INSERT INTO `tours` (`id`, `title`, `description`, `price`, `duration`, `transport_type`, `route_list`, `images`, `created_at`, `updated_at`) VALUES
	(1, '{"en": "Namangan - Tashkent - Namangan", "ru": "Наманган - Ташкент - Наманган", "uz": "Namangan - Toshkent - Namangan"}', '{"en": "<p>Tour package includes: Hotel, meals, transfer services.</p>\\r\\n\\r\\n<p style=\\"text-align:center\\"><img alt=\\"\\" src=\\"http://namanganturizm.local.test/storage/uploads/direction_01_namangan_tashkent_1767695835.jpg\\" width=\\"100%\\" /></p>", "ru": "<p>В тур пакет включено: Отель, питание, трансфер.</p>\\r\\n\\r\\n<p style=\\"text-align:center\\"><img alt=\\"\\" src=\\"http://namanganturizm.local.test/storage/uploads/direction_01_namangan_tashkent_1767695835.jpg\\" width=\\"100%\\" /></p>", "uz": "<p>Tur paket ichida: Mehmonxona, ovqatlanish, transfer xizmatlari kiradi.</p>\\r\\n\\r\\n<p style=\\"text-align:center\\"><img alt=\\"\\" src=\\"http://namanganturizm.local.test/storage/uploads/direction_01_namangan_tashkent_1767695835.jpg\\" /></p>"}', 'Kelishilgan narxda', '2 kun 1 kecha', 'Mikroavtobus', '{"en": "Namangan - Tashkent - Namangan", "ru": "Наманган - Ташкент - Наманган", "uz": "Namangan - Toshkent - Namangan"}', '["tours/65ZDeN5nBasXPOPtyPDsoQDLyVZSNZmk11jHjE95.png", "tours/uLxyrSKXVLVm3RPFkxwxjNvGPvCTT1UOvcMHH6tL.png"]', '2025-12-30 00:42:26', '2026-01-06 05:56:22'),
	(2, '{"en": "Namangan - Zaamin - Namangan", "ru": "Наманган - Зомин - Наманган", "uz": "Namangan - Zomin - Namangan"}', '{"en": "<p>Tour package includes: Hotel, meals, transfer services.</p>\\r\\n\\r\\n<p style=\\"text-align:center\\"><img alt=\\"\\" src=\\"http://namanganturizm.local.test/storage/uploads/direction_02_namangan_zomin_1767700016.jpg\\" /></p>", "ru": "<p>В тур пакет включено: Отель, питание, трансфер.</p>\\r\\n\\r\\n<p style=\\"text-align:center\\"><img alt=\\"\\" src=\\"http://namanganturizm.local.test/storage/uploads/direction_02_namangan_zomin_1767700016.jpg\\" /></p>", "uz": "<p>Tur paket ichida: Mehmonxona, ovqatlanish, transfer xizmatlari kiradi.</p>\\r\\n\\r\\n<p style=\\"text-align:center\\"><img alt=\\"\\" src=\\"http://namanganturizm.local.test/storage/uploads/direction_02_namangan_zomin_1767700016.jpg\\" /></p>"}', 'Kelishilgan narxda', '2 kun 1 kecha', 'Mikroavtobus', '{"en": "Namangan - Zaamin - Namangan", "ru": "Наманган - Зомин - Наманган", "uz": "Namangan - Zomin - Namangan"}', '["tours/KBt5DLzzXEDwEgnMbUaXP9Pi7O3sdoJtIGWMmTMy.png"]', '2025-12-30 00:42:26', '2026-01-06 06:47:24'),
	(3, '{"en": "Pap - Khiva - Bukhara - Samarkand - Pap", "ru": "Пап - Хива - Бухара - Самарканд - Пап", "uz": "Pop - Xiva - Buxoro - Samarqand - Pop"}', '{"en": "<p>Tour package includes: Hotel, meals, transfer services.</p>\\r\\n\\r\\n<p style=\\"text-align:center\\"><img alt=\\"\\" src=\\"http://namanganturizm.local.test/storage/uploads/direction_03_pop_xiva_buhoro_samarqand_1767700058.jpg\\" /></p>", "ru": "<p>В тур пакет включено: Отель, питание, трансфер.</p>\\r\\n\\r\\n<p style=\\"text-align:center\\"><img alt=\\"\\" src=\\"http://namanganturizm.local.test/storage/uploads/direction_03_pop_xiva_buhoro_samarqand_1767700058.jpg\\" /></p>", "uz": "<p>Tur paket ichida: Mehmonxona, ovqatlanish, transfer xizmatlari kiradi.</p>\\r\\n\\r\\n<p style=\\"text-align:center\\"><img alt=\\"\\" src=\\"http://namanganturizm.local.test/storage/uploads/direction_03_pop_xiva_buhoro_samarqand_1767700058.jpg\\" /></p>"}', 'Kelishilgan narxda', '6 kun 5 kecha', 'Pop - Xiva poyezd, Xiva - Buxoro - Samarqand mikroavtobus', '{"en": "Pap - Khiva - Bukhara - Samarkand - Pap", "ru": "Пап - Хива - Бухара - Самарканд - Пап", "uz": "Pop - Xiva - Buxoro - Samarqand - Pop"}', '["tours/ODuvrfL0HfYZjZ7agNPWADozxRrhVcPhiypw15jd.png", "tours/aG8Ifg5GbpsxDuA68RJ1a9FyuegZ211kPfjS2ToY.png"]', '2025-12-30 00:42:26', '2026-01-06 06:48:52'),
	(4, '{"en": "Pap - Bukhara - Samarkand - Pap", "ru": "Пап - Бухара - Самарканд - Пап", "uz": "Pop - Buxoro - Samarqand - Pop"}', '{"en": "<p>Tour package includes: Hotel, meals, transfer services.</p>\\r\\n\\r\\n<p>&nbsp;</p>\\r\\n\\r\\n<p style=\\"text-align:center\\"><img alt=\\"\\" src=\\"http://namanganturizm.local.test/storage/uploads/direction_04_pop__buhoro_samarqand_1767700139.jpg\\" width=\\"100%\\" /></p>", "ru": "<p>В тур пакет включено: Отель, питание, трансфер.</p>\\r\\n\\r\\n<p>&nbsp;</p>\\r\\n\\r\\n<p style=\\"text-align:center\\"><img alt=\\"\\" src=\\"http://namanganturizm.local.test/storage/uploads/direction_04_pop__buhoro_samarqand_1767700139.jpg\\" width=\\"100%\\" /></p>", "uz": "<p>Tur paket ichida: Mehmonxona, ovqatlanish, transfer xizmatlari kiradi.</p>\\r\\n\\r\\n<p>&nbsp;</p>\\r\\n\\r\\n<p style=\\"text-align:center\\"><img alt=\\"\\" src=\\"http://namanganturizm.local.test/storage/uploads/direction_04_pop__buhoro_samarqand_1767700139.jpg\\" /></p>"}', 'Kelishilgan narxda', '5 kun 4 kecha', 'Pop - Samarqand poyezd, Buxoro - Samarqand mikroavtobus', '{"en": "Pap - Bukhara - Samarkand - Pap", "ru": "Пап - Бухара - Самарканд - Пап", "uz": "Pop - Buxoro - Samarqand - Pop"}', '["tours/HB02XkX5NphJVsCgYaLvz064tpdhnhPwHG1OAPjE.png"]', '2025-12-30 00:42:26', '2026-01-06 06:49:23'),
	(5, '{"en": "Namangan - Samarkand - Namangan", "ru": "Наманган - Самарканд - Наманган", "uz": "Namangan - Samarqand - Namangan"}', '{"en": "<p>Tour package includes: Hotel, meals, transfer services.</p>\\r\\n<p>&nbsp;</p>\\r\\n\\r\\n<p style=\\"text-align:center\\"><img alt=\\"\\" src=\\"http://namanganturizm.local.test/storage/uploads/direction_05_namangan_samarqand_1767700171.jpg\\" width=\\"100%\\" /></p>", "ru": "<p>В тур пакет включено: Отель, питание, трансфер.</p>\\r\\n<p>&nbsp;</p>\\r\\n\\r\\n<p style=\\"text-align:center\\"><img alt=\\"\\" src=\\"http://namanganturizm.local.test/storage/uploads/direction_05_namangan_samarqand_1767700171.jpg\\" width=\\"100%\\" /></p>", "uz": "<p>Tur paket ichida: Mehmonxona, ovqatlanish, transfer xizmatlari kiradi.</p>\\r\\n\\r\\n<p>&nbsp;</p>\\r\\n\\r\\n<p style=\\"text-align:center\\"><img alt=\\"\\" src=\\"http://namanganturizm.local.test/storage/uploads/direction_05_namangan_samarqand_1767700171.jpg\\" width=\\"100%\\" /></p>"}', 'Kelishilgan narxda', '3 kun 2 kecha', 'Namangan - Oxangaron yengil mashina, Oxangaron - Samarqand mikroabtobus', '{"en": "Namangan - Samarkand - Namangan", "ru": "Наманган - Самарканд - Наманган", "uz": "Namangan - Samarqand - Namangan"}', '["tours/dfsEGxEf73PKBaegzaqaeX4Smn77kllpm1ftJg23.png"]', '2025-12-30 00:42:26', '2026-01-06 06:49:48');

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

-- Дамп данных таблицы namangan_turizm.users: ~0 rows (приблизительно)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$PVUJw8A577uCycHHhKBgl.ps/5i4sV4QhTB4DrkcABu66g.Fzpii2', NULL, '2025-12-30 00:42:26', '2025-12-30 00:42:26');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
