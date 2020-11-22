-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 22 2020 г., 19:12
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `present`
--

-- --------------------------------------------------------

--
-- Структура таблицы `telegram`
--

CREATE TABLE `telegram` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `TELEGRAM_CHATID` text NOT NULL,
  `TELEGRAM_TOKEN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `telegram`
--

INSERT INTO `telegram` (`id`, `name`, `TELEGRAM_CHATID`, `TELEGRAM_TOKEN`) VALUES
(1, '@alvikagal', '1007659188', '1455822037:AAEBAZqmtX7BUN3jmsBTywqUX01P8NGPIEA'),
(3, '@Lorioni', '391022978', '1455822037:AAEBAZqmtX7BUN3jmsBTywqUX01P8NGPIEA'),
(7, 'Вадим Будько', '864865932', '1455822037:AAEBAZqmtX7BUN3jmsBTywqUX01P8NGPIEA');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `telegram`
--
ALTER TABLE `telegram`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `telegram`
--
ALTER TABLE `telegram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
