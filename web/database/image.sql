-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 11 2017 г., 22:06
-- Версия сервера: 5.6.37
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ih571217_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filePath` varchar(400) NOT NULL,
  `itemId` int(11) DEFAULT NULL,
  `isMain` tinyint(1) DEFAULT NULL,
  `modelName` varchar(150) NOT NULL,
  `urlAlias` varchar(400) NOT NULL,
  `name` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `image`
--

INSERT INTO `image` (`id`, `filePath`, `itemId`, `isMain`, `modelName`, `urlAlias`, `name`) VALUES
(1, 'Products/Product1/2ab7c5.jpg', 1, 1, 'Product', '65f84d22c3-1', ''),
(2, 'Products/Product1/97b6d5.jpg', 1, NULL, 'Product', '615d416308-2', ''),
(3, 'Products/Product1/972a9b.jpg', 1, NULL, 'Product', '5b81e77df6-3', ''),
(4, 'Products/Product1/419853.jpg', 1, NULL, 'Product', '44bd62ce8d-4', ''),
(5, 'Products/Product2/4087d1.jpg', 2, 1, 'Product', '8ee4482258-1', ''),
(6, 'Products/Product2/919aba.jpg', 2, NULL, 'Product', '7aad339a44-2', ''),
(7, 'Products/Product2/3f3f4a.jpg', 2, NULL, 'Product', 'a726071128-3', ''),
(8, 'Products/Product2/670548.jpg', 2, NULL, 'Product', '3b577bdf64-4', ''),
(9, 'Products/Product3/5ecb2c.jpg', 3, 1, 'Product', '139314e839-1', ''),
(10, 'Products/Product3/02f8a3.jpg', 3, NULL, 'Product', 'a98663bc7b-2', ''),
(11, 'Products/Product3/db9946.jpg', 3, NULL, 'Product', 'd8a6318543-3', ''),
(12, 'Products/Product3/f30280.jpg', 3, NULL, 'Product', 'a85e7a5565-4', ''),
(13, 'Products/Product4/1c4e4c.jpg', 4, 1, 'Product', '410fac2370-1', ''),
(14, 'Products/Product4/0f1d9f.jpg', 4, NULL, 'Product', '86d7324422-2', ''),
(15, 'Products/Product4/96fc61.jpg', 4, NULL, 'Product', '04444a0456-3', ''),
(16, 'Products/Product4/e5ba54.jpg', 4, NULL, 'Product', '000930b7c5-4', ''),
(17, 'Products/Product5/64a644.jpg', 5, 1, 'Product', 'a2ff465f17-1', ''),
(18, 'Products/Product5/69f75c.jpg', 5, NULL, 'Product', 'c541e1b5eb-2', ''),
(19, 'Products/Product5/30613b.jpg', 5, NULL, 'Product', 'cc83ad6eec-3', ''),
(20, 'Products/Product5/bca5eb.jpg', 5, NULL, 'Product', '97329e9602-4', ''),
(21, 'Products/Product6/edfecc.jpg', 6, 1, 'Product', 'e8528d70e3-1', ''),
(22, 'Products/Product6/a59da2.jpg', 6, NULL, 'Product', '5229136023-2', ''),
(23, 'Products/Product6/eb0c09.jpg', 6, NULL, 'Product', 'd476df84a7-3', ''),
(24, 'Products/Product6/0902e8.jpg', 6, NULL, 'Product', '340a9ffac4-4', ''),
(25, 'Products/Product7/04a4e1.jpg', 7, 1, 'Product', '32b67ce507-1', ''),
(26, 'Products/Product7/eeaca9.jpg', 7, NULL, 'Product', '4d11e384a1-2', ''),
(27, 'Products/Product7/08245e.jpg', 7, NULL, 'Product', 'b5a6e9c8b3-3', ''),
(28, 'Products/Product7/092837.jpg', 7, NULL, 'Product', 'e919d3e978-4', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
