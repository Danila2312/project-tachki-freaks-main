-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 06 2024 г., 11:33
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



CREATE TABLE `catalog` (
  `id` int NOT NULL,
  `availability` tinyint(1) DEFAULT NULL,
  `name` text NOT NULL,
  `city` text NOT NULL,
  `category` text NOT NULL,
  `full_name` text NOT NULL,
  `year` int NOT NULL,
  `engine` text NOT NULL,
  `value_engine` float NOT NULL,
  `power` int NOT NULL,
  `cost_min` int NOT NULL,
  `cost_mid` int NOT NULL,
  `cost_max` int NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `availability`, `name`, `city`, `category`, `full_name`, `year`, `engine`, `value_engine`, `power`, `cost_min`, `cost_mid`, `cost_max`, `description`) VALUES
(1, 1, 'BMW ', 'Ногинск', 'внедорожник', 'BMW X2', 2021, 'бензин', 2, 192, 7000, 10000, 20000, 'BMW X2 - стильный и спортивный малолитражный внедорожник класса люкс, известный своими характеристиками, современным дизайном и маневренной управляемостью. Модель 2021 года предлагает идеальное сочетание роскоши и атлетизма, что делает ее привлекательным вариантом для тех, кто ищет опыт вождения премиум-класса.'),
(2, 1, 'Kia', 'Ногинск', 'внедорожник', 'Kia Sportage', 2022, 'бензин', 2.5, 190, 7000, 10000, 20000, 'Kia Sportage 2022 года выпуска - это компактный внедорожник, который может похвастаться ярким дизайном, передовыми технологическими возможностями и комфортным салоном. Благодаря современному стилю и практичности, Sportage обеспечивает всесторонние впечатления от вождения, подходящие как для городских приключений, так и для длительных поездок.'),
(3, 1, 'lexus', 'ногинск', 'комфорт', 'Lexus LS500', 2018, 'бензин', 3.4, 421, 7000, 10000, 20000, 'Lexus LS 2018 года выпуска - это полноразмерный седан класса люкс, известный своим изысканным мастерством, исключительным комфортом и расширенными функциями безопасности. Сочетая в себе роскошь и производительность, Lexus LS обеспечивает утонченный опыт вождения с акцентом на роскошь и надежность.'),
(4, 1, 'Jaguar', 'ногинск', 'комфорт', 'Jaguar XF', 2012, 'Бензин', 5, 550, 7000, 10000, 100000, 'Jaguar XF 2012 года выпуска - это среднеразмерный седан класса люкс, известный своим элегантным дизайном, мощными двигателями и привлекательной динамикой вождения. Уделяя особое внимание производительности и элегантности, XF обеспечивает изысканный и роскошный опыт вождения, который понравится энтузиастам и водителям, следящим за стилем.'),
(5, 1, 'toyota', 'ногинск', 'внедорожник', 'Toyota RAV4', 2017, 'дизель', 2.5, 180, 7000, 10000, 20000, 'Toyota RAV4 2017 года выпуска - популярный компактный внедорожник, известный своей надежностью, универсальностью и просторным салоном. Предлагая комфортную езду, экономичные характеристики и практичные функции, RAV4 является лучшим выбором для частных лиц и семей, ищущих надежный и производительный кроссовер.'),
(6, 1, 'Mazda', 'ногинск', 'бизнес', 'Mazda 6', 2021, 'бензин', 2.5, 231, 7000, 10000, 100000, 'Mazda 6 - седан среднего размера, известный своим элегантным дизайном, привлекательной динамикой вождения и высококлассным интерьером. Mazda 6 2021 модельного года сочетает в себе стиль, производительность и комфорт, предлагая изысканные впечатления от вождения, подходящие для тех, кто ищет спортивный, но в то же время утонченный седан.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
