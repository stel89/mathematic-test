-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Май 25 2017 г., 14:09
-- Версия сервера: 5.7.18-0ubuntu0.16.04.1
-- Версия PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `auto`
--

-- --------------------------------------------------------

--
-- Структура таблицы `City`
--

CREATE TABLE `City` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `City`
--

INSERT INTO `City` (`id`, `title`, `language`, `created_at`, `updated_at`) VALUES
(7, 'Саратов', 'Русский', '2017-05-23 06:48:26', '2017-05-25 07:55:10'),
(44, 'Москва', 'Русский', '2017-05-24 07:57:05', '2017-05-24 08:29:30'),
(45, 'Ростов', 'Украинский,Японский', '2017-05-24 07:57:10', '2017-05-24 11:18:06'),
(46, 'Какой то немецкий город', 'Немецкий', '2017-05-24 11:28:07', '2017-05-24 11:28:07');

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

CREATE TABLE `countries` (
  `id` int(255) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `towns` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `countries`
--

INSERT INTO `countries` (`id`, `title`, `towns`, `created_at`, `updated_at`) VALUES
(8, 'Россия', ',7,44,45', '2017-05-23 06:48:20', '2017-05-24 07:57:10'),
(12, 'Аякс', ',46', '2017-05-24 05:17:38', '2017-05-24 11:28:07'),
(14, 'Аякс2', '', '2017-05-24 07:35:47', '2017-05-24 07:35:47'),
(15, 'Аякс3', '', '2017-05-24 07:35:50', '2017-05-24 07:35:50');

-- --------------------------------------------------------

--
-- Структура таблицы `Language`
--

CREATE TABLE `Language` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Language`
--

INSERT INTO `Language` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Русский', '2017-05-21 08:42:38', '2017-05-21 08:42:38'),
(2, 'Английский', '2017-05-21 08:51:03', '2017-05-21 08:51:03'),
(3, 'Украинский', '2017-05-23 09:10:49', '2017-05-23 09:10:49'),
(4, 'Китайски', '2017-05-24 07:49:35', '2017-05-24 07:49:35'),
(5, 'Японский', '2017-05-24 07:51:26', '2017-05-24 07:51:26'),
(6, 'Французкий', '2017-05-24 07:54:16', '2017-05-24 07:54:16'),
(7, 'Немецкий', '2017-05-24 07:56:19', '2017-05-24 07:56:19'),
(8, 'Греческий', '2017-05-24 07:56:37', '2017-05-24 07:56:37');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_04_24_121056_language', 1),
(2, '2017_05_19_122752_Country', 1),
(3, '2017_05_19_122829_City', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `City`
--
ALTER TABLE `City`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Language`
--
ALTER TABLE `Language`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `City`
--
ALTER TABLE `City`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT для таблицы `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `Language`
--
ALTER TABLE `Language`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
