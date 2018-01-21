-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 16 2018 г., 19:57
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `internet_mag`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_small_discription` varchar(255) NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  `cat_sort_order` int(11) NOT NULL DEFAULT '0',
  `cat_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_small_discription`, `cat_image`, `cat_sort_order`, `cat_status`) VALUES
(1, 'Анамегаторы бензина', 'Предназначен для двигателей внутреннего cгорания работающих на бензине и газе', '/views/template/images/product/T4.jpg', 1, 1),
(2, 'Анамегаторы дизеля', 'Предназначен для двигателей внутреннего cгорания работающих на дизеле', '/views/template/images/product/T6.jpg', 2, 1),
(3, 'Анамегаторы масел', 'Предназначен для увеличения ресурса работы масел в двигателях внутреннего сгорания', '/views/template/images/product/MP8.jpg', 3, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `pr_id` int(11) NOT NULL,
  `pr_name` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `pr_code` int(11) NOT NULL,
  `pr_price` float NOT NULL,
  `pr_availability` int(11) NOT NULL,
  `pr_brand` varchar(255) NOT NULL,
  `pr_image` varchar(255) NOT NULL,
  `pr_small_discription` varchar(255) NOT NULL,
  `pr_discription` text NOT NULL,
  `pr_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`pr_id`, `pr_name`, `cat_id`, `pr_code`, `pr_price`, `pr_availability`, `pr_brand`, `pr_image`, `pr_small_discription`, `pr_discription`, `pr_status`) VALUES
(1, 'Анамегатор бензина Adizol T4 (1,3 мл на 400л. бензина)', 1, 1, 120, 1, 'Adizol', '/views/template/images/product/T4.jpg', 'Предназначен для двигателей внутреннего cгорания работающих на бензине и газе', '1 капсула на 20 литров бензина\r\n\r\nУвеличение мощности и приемистости двигателя до 10-15%\r\nОтсутствие провалов при ускорении\r\nСнижение удельного расхода топлива до 10% — по бензину, до 15% — по дизтопливу\r\nСнижение расхода масла до 10%\r\nОчищает и защищает двигатель\r\nПродлевает срок службы автомобиля\r\nУменьшает токсичность выхлопных газов', 1),
(2, 'Анамегатор дизеля Adizol T6  (0,68 мл на 800л. д/т)', 2, 2, 100, 1, 'Adizol', '/views/template/images/product/T6.jpg', 'Предназначен для двигателей внутреннего cгорания работающих на дизеле', '1 капсула на 40 литров дизельного топлива\r\n\r\nПовышенная концентрация для работы в экстремальных условиях\r\nУвеличение мощности и приемистости двигателя до 10-15%\r\nОтсутствие провалов при ускорении\r\nСнижение удельного расхода топлива до 10% — по бензину, до 15% — по дизтопливу\r\nСнижение расхода масла до 10%\r\nОчищает и защищает двигатель\r\nПродлевает срок службы автомобиля\r\nУменьшает токсичность выхлопных газов', 1),
(3, 'Анамегатор масла GoldOzerol MP8 (30 мл на 4л. масла)', 3, 3, 45, 1, 'Adizol', '/views/template/images/product/MP8.jpg', 'Предназначен для увеличения ресурса работы масел в двигателях внутреннего сгорания (объем масла до 6 литров)', '30 мл на 4 литра масла\r\n\r\nУвеличение мощности двигателя до 5-10%\r\nСнижение скорости износа трущихся пар в 10-100 раз\r\nБолее надежный и легкий запуск двигателя в холодное время\r\nСнижение расхода масла на угар - 9-10%\r\nПродлевает срок службы автомобиля\r\nУменьшает токсичность выхлопных газов\r\nСнижает уровень шумов', 1),
(4, 'Анамегатор масла DiamondOzerol MP10 (14 мл на 10л. масла)', 3, 4, 65, 1, 'Adizol', '/views/template/images/product/MP10.jpg', 'Предназначен для увеличения ресурса работы масел в двигателях внутреннего сгорания (объем масла от 10 литров)', '14 мл на 10 литра масла\r\n\r\nУвеличение мощности двигателя до 5-10%\r\nСнижение скорости износа трущихся пар в 10-100 раз\r\nБолее надежный и легкий запуск двигателя в холодное время\r\nСнижение расхода масла на угар - 9-10%\r\nПродлевает срок службы автомобиля\r\nУменьшает токсичность выхлопных газов\r\nСнижает уровень шумов', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pr_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
