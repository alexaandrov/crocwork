-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 14 2016 г., 22:17
-- Версия сервера: 5.7.11
-- Версия PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `crocwork`
--

-- --------------------------------------------------------

--
-- Структура таблицы `organization`
--

CREATE TABLE `organization` (
  `id` int(11) NOT NULL,
  `display_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ogrn` bigint(20) DEFAULT NULL,
  `oktmo` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `organization`
--

INSERT INTO `organization` (`id`, `display_name`, `ogrn`, `oktmo`) VALUES
(13, 'ООО Аеро', 2837463728123, 84736253741),
(14, 'ООО Ривела', 23423423423423, 634683823489),
(15, 'ООО Милена', 28947528947528, 234247812772);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `organization_id` int(11) DEFAULT NULL,
  `lastname` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `inn` bigint(20) DEFAULT NULL,
  `snils` bigint(20) DEFAULT NULL,
  `firstname` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `organization_id`, `lastname`, `middlename`, `birthday`, `inn`, `snils`, `firstname`) VALUES
(8, 14, 'Линкольн', 'Абрамович', '2007-07-02', 2837485746811, 374638273612, 'Абрам'),
(9, 14, 'Ел', 'Ложкой', '2013-09-01', 8234987434883, 324234234234, 'Мак'),
(10, 15, 'Лильева', 'Ромашкович', '2015-12-15', 45645645645646, 2342342342342, 'Архидея'),
(11, 13, 'Павел', 'Борисович', '1917-10-10', 45645645445646, 2342342242342, 'Малинов');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C1EE637CD5499347` (`display_name`),
  ADD UNIQUE KEY `UNIQ_C1EE637CB89AB2C7` (`ogrn`),
  ADD UNIQUE KEY `UNIQ_C1EE637C6FC1CE2C` (`oktmo`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E93323CB` (`inn`),
  ADD UNIQUE KEY `UNIQ_8D93D649E4EB19B0` (`snils`),
  ADD KEY `IDX_8D93D64932C8A3DE` (`organization_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `organization`
--
ALTER TABLE `organization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D64932C8A3DE` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
