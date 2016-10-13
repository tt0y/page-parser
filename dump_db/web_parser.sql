-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 13 2016 г., 02:22
-- Версия сервера: 5.5.50
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `web_parser`
--
CREATE DATABASE IF NOT EXISTS `web_parser` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `web_parser`;

-- --------------------------------------------------------

--
-- Структура таблицы `search_results`
--

CREATE TABLE IF NOT EXISTS `search_results` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `results` text NOT NULL,
  `search_types` text NOT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `search_results`
--

INSERT INTO `search_results` (`id`, `url`, `results`, `search_types`, `count`) VALUES
(25, 'http://beforetogo.com', 'https://mc.yandex.ru/watch/35965515, http://beforetogo.com/assets/images/icons/close.png, ', 'images', 2),
(26, 'http://beforetogo.com', 'https://mc.yandex.ru/watch/35965515, http://beforetogo.com/assets/images/icons/close.png, ', 'images', 2),
(27, 'http://beforetogo.com', 'http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/offer, http://vk.com/beforetogo, http://www.facebook.com/groups/beforetogo, http://instagram.com/beforetogo/, http://twitter.com/beforetogo, ', 'links', 9),
(28, 'http://beforetogo.com', 'https://mc.yandex.ru/watch/35965515, http://beforetogo.com/assets/images/icons/close.png, ', 'images', 2),
(29, 'http://beforetogo.com', 'https://mc.yandex.ru/watch/35965515, http://beforetogo.com/assets/images/icons/close.png, ', 'images', 2),
(30, 'http://beforetogo.com', 'http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/offer, http://vk.com/beforetogo, http://www.facebook.com/groups/beforetogo, http://instagram.com/beforetogo/, http://twitter.com/beforetogo, ', 'links', 9),
(31, 'http://beforetogo.com', 'http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/offer, http://vk.com/beforetogo, http://www.facebook.com/groups/beforetogo, http://instagram.com/beforetogo/, http://twitter.com/beforetogo, ', 'links', 9),
(32, 'http://beforetogo.com', 'http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/offer, http://vk.com/beforetogo, http://www.facebook.com/groups/beforetogo, http://instagram.com/beforetogo/, http://twitter.com/beforetogo, ', 'links', 9),
(33, 'http://beforetogo.com', 'http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/offer, http://vk.com/beforetogo, http://www.facebook.com/groups/beforetogo, http://instagram.com/beforetogo/, http://twitter.com/beforetogo, ', 'links', 9),
(34, 'http://beforetogo.com', 'http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/offer, http://vk.com/beforetogo, http://www.facebook.com/groups/beforetogo, http://instagram.com/beforetogo/, http://twitter.com/beforetogo, ', 'links', 9),
(35, 'http://beforetogo.com', 'http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/offer, http://vk.com/beforetogo, http://www.facebook.com/groups/beforetogo, http://instagram.com/beforetogo/, http://twitter.com/beforetogo, ', 'links', 9),
(36, 'http://beforetogo.com', 'https://mc.yandex.ru/watch/35965515, http://beforetogo.com/assets/images/icons/close.png, ', 'images', 2),
(37, 'http://beforetogo.com', 'https://mc.yandex.ru/watch/35965515, http://beforetogo.com/assets/images/icons/close.png, ', 'images', 2),
(38, 'http://beforetogo.com', 'https://mc.yandex.ru/watch/35965515, http://beforetogo.com/assets/images/icons/close.png, ', 'images', 2),
(39, 'http://beforetogo.com', 'https://mc.yandex.ru/watch/35965515, http://beforetogo.com/assets/images/icons/close.png, ', 'images', 2),
(40, 'http://beforetogo.com', 'https://mc.yandex.ru/watch/35965515, http://beforetogo.com/assets/images/icons/close.png, ', 'images', 2),
(41, 'http://beforetogo.com', 'http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/locale, http://beforetogo.com/offer, http://vk.com/beforetogo, http://www.facebook.com/groups/beforetogo, http://instagram.com/beforetogo/, http://twitter.com/beforetogo, ', 'links', 9);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `search_results`
--
ALTER TABLE `search_results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `search_results`
--
ALTER TABLE `search_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
