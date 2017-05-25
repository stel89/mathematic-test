-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 26 2017 г., 17:43
-- Версия сервера: 5.7.17-0ubuntu0.16.04.2
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_04_24_121056_Post', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` int(11) NOT NULL,
  `price` int(255) NOT NULL,
  `trial` float NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `region`, `town`, `mark`, `model`, `size`, `owner`, `price`, `trial`, `image`, `text`, `author_id`, `created_at`, `updated_at`) VALUES
(1, 'Первое объявление', 'Днепропетровская область', 'Киев', 'Какая то марка', 'Какая то модель', '1,5', 14, 1115515, 10, '/img/24.04.2017/2500142.jpg', 'Хочу продать', 1, '2017-04-24 09:53:02', '2017-04-24 09:53:02'),
(2, 'Объявление 2', 'Запорожская область', 'Запорожье', 'Какая то марка', 'Какая то модель', '2,5', 0, 100, 11, '/img/25.04.2017/064_wallpaper1.jpg', 'Продам дешего', 1, '2017-04-25 08:53:39', '2017-04-25 08:53:39'),
(3, 'Объявление 3', 'Тернопольская область', 'Симферополь', 'Какая то марка1', 'Какая то модель2', '1,5', 3, 115500, 25, '/img/25.04.2017/962ba93827b7f6033365915ada227432.jpg', 'Продам дорого', 1, '2017-04-25 08:57:21', '2017-04-25 08:57:21'),
(4, 'Объявление 4', 'Житомирская область', 'Черкассы', 'Какая то марка3', 'Какая то модель3', '2,0', 6, 0, 50, '/img/25.04.2017/1435302349_avto-eksklyuziv-3.jpg', 'Забирайте даром отдаю', 1, '2017-04-25 09:01:51', '2017-04-25 09:01:51'),
(5, 'Объявление 5', 'Закарпатская область', 'Запорожье', 'Valmet Automotive', 'Fisker Carma', '2,0', 2, 10000, 125, '/img/26.04.2017/181358.jpeg', 'Мечтайте :)', 1, '2017-04-26 10:51:25', '2017-04-26 10:51:25');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `published`, `created_at`, `updated_at`) VALUES
(1, 'stel', 'stel1989@yandex.ru', '$2y$10$3pcuXFFJbR3p0HBbr5zrquEtAK6d3Qlymbv1feydVq0Qmpej/Cadm', 'ZtLNHVIOgZYCu82XOQrFRlEIR65fVk2lpCYxILW1DiZzVdkOunevyt2atsqS', 0, '2017-04-24 09:35:16', '2017-04-24 09:35:16');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
