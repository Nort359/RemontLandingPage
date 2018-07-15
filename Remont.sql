-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 15 2018 г., 13:26
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Remont`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Action`
--

CREATE TABLE `Action` (
  `id` int(11) NOT NULL,
  `TextAction` varchar(255) NOT NULL,
  `days` int(11) NOT NULL,
  `hours` int(11) NOT NULL,
  `minutes` int(11) NOT NULL,
  `count_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Action`
--

INSERT INTO `Action` (`id`, `TextAction`, `days`, `hours`, `minutes`, `count_users`) VALUES
(1, 'Успей заказать по выгодной цене', 3, 15, 0, 50);

-- --------------------------------------------------------

--
-- Структура таблицы `Admin`
--

CREATE TABLE `Admin` (
  `id` int(11) NOT NULL,
  `Login` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Admin`
--

INSERT INTO `Admin` (`id`, `Login`, `Password`) VALUES
(1, '3a53f7bc7ff5a1c00d810a558ec35f52', '6ab0357358450ad998820809ff239bed');

-- --------------------------------------------------------

--
-- Структура таблицы `Grid`
--

CREATE TABLE `Grid` (
  `id` int(11) NOT NULL,
  `Count_grid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Grid`
--

INSERT INTO `Grid` (`id`, `Count_grid`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `Objects`
--

CREATE TABLE `Objects` (
  `IdObjects` int(11) NOT NULL,
  `Header` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Date_object` date NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Objects`
--

INSERT INTO `Objects` (`IdObjects`, `Header`, `Description`, `Date_object`, `img`) VALUES
(6, 'Полный ремонт квартиры', 'Данный объект был одним из наших первейших заказов. Посмотрите, что из этого вышло', '2018-02-01', 'users_files/objects/object-357700'),
(7, 'Проспект победы', 'Ещё один прекрасный пример мастерства наших специалистов', '2017-06-17', 'users_files/objects/object-990589'),
(8, 'Капитальный ремонт комнаты', 'Этот объект прекрасно демонстрирует внимание наших специалистов ко всем деталям', '2017-02-08', 'users_files/objects/object-858558'),
(9, 'Ремонт всего дома', 'Этот пример демонстрирует чувство наших специалистов к прекрасному. Ничего лишнего', '2018-04-13', 'users_files/objects/object-9');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Action`
--
ALTER TABLE `Action`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Grid`
--
ALTER TABLE `Grid`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Objects`
--
ALTER TABLE `Objects`
  ADD PRIMARY KEY (`IdObjects`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Action`
--
ALTER TABLE `Action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Grid`
--
ALTER TABLE `Grid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `Objects`
--
ALTER TABLE `Objects`
  MODIFY `IdObjects` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
