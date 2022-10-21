-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 21 okt 2022 om 11:24
-- Serverversie: 5.7.36
-- PHP-versie: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_eind`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pokemon`
--

DROP TABLE IF EXISTS `pokemon`;
CREATE TABLE IF NOT EXISTS `pokemon` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pokemon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `pokemon`
--

INSERT INTO `pokemon` (`id`, `pokemon`, `type`, `created_at`, `updated_at`) VALUES
(30, 'Bulbasaur', 'Grass', '2022-10-21 07:51:49', '2022-10-21 07:51:49'),
(31, 'Charmander', 'Fire', '2022-10-21 07:51:49', '2022-10-21 07:51:49'),
(32, 'Squirtle', 'Water', '2022-10-21 07:51:49', '2022-10-21 07:51:49'),
(33, 'Pikachu', 'Electric', '2022-10-21 07:51:49', '2022-10-21 07:51:49'),
(34, 'Eevee', 'Normal', '2022-10-21 07:51:49', '2022-10-21 07:51:49'),
(35, 'Mew', 'Psychic', '2022-10-21 07:51:49', '2022-10-21 07:51:49'),
(36, 'Mewtwo', 'Psychic', '2022-10-21 07:51:49', '2022-10-21 07:51:49'),
(37, 'Snorlax', 'Normal', '2022-10-21 07:51:49', '2022-10-21 07:51:49'),
(38, 'Gengar', 'Ghost', '2022-10-21 07:51:49', '2022-10-21 07:51:49'),
(39, 'pikachu', 'lightning', '2022-10-21 08:14:13', '2022-10-21 08:14:13'),
(40, 'pikachu', 'lightning', '2022-10-21 08:14:52', '2022-10-21 08:14:52'),
(41, 'pikachu', 'lightning', '2022-10-21 08:15:12', '2022-10-21 08:15:12'),
(42, 'Chimchar', 'fire', '2022-10-21 09:04:08', '2022-10-21 09:19:19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
