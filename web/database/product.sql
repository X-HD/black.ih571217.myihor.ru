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
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text,
  `price` float NOT NULL DEFAULT '0',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT 'no-image.png',
  `hit` enum('0','1') NOT NULL DEFAULT '0',
  `new` enum('0','1') NOT NULL DEFAULT '0',
  `sale` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `content`, `price`, `keywords`, `description`, `img`, `hit`, `new`, `sale`) VALUES
(1, 85, 'Leather boot with Double G', '<p>The leather ankle boot is designed with a sleek construction and elongated toe. Distinguished by a strap across the front with House Web stripe and Double G hardware.</p>\r\n\r\n<p>Black leather</p>\r\n\r\n<p>Green and red Web strap with Double G hardware</p>\r\n\r\n<p>Side zipper</p>\r\n\r\n<p>Leather sole</p>\r\n\r\n<p>.6&quot; heel height</p>\r\n\r\n<p>Made in Italy</p>\r\n', 1100, NULL, NULL, 'no-image.png', '0', '1', '0'),
(2, 85, 'Leather boot with pierced moon', '<p>The pierced crescent moon embellishes the toe of a leather boot, backed in contrast leather. A python strap is further enriched with the mirrored GG.</p>\r\n\r\n<p>Black leather with red leather toe</p>\r\n\r\n<p>Pierced moon appliqu&eacute;</p>\r\n\r\n<p>Python strap with GG mirrored hardware</p>\r\n\r\n<p>Square toe</p>\r\n\r\n<p>Lace-up closure</p>\r\n\r\n<p>Side zipper</p>\r\n\r\n<p>Leather sole</p>\r\n\r\n<p>2&quot; heel height</p>\r\n\r\n<p>Made in Italy</p>\r\n\r\n<p>Delivered in special edition packaging with a garden motif from the Fall Winter 2017 runway show.</p>\r\n', 1300, NULL, NULL, 'no-image.png', '0', '1', '0'),
(3, 85, 'Queercore embroidered brogue boot', '<p>The Queercore boot blends traditional brogue details with unexpected hardware and design. Inspired by the punk movement of the mid-1980s, the lace-up silhouette reflects the subculture&#39;s nonconformist spirit, completed with a studded tiger head buckle across the front-a detail that has quickly become a key embellishment for Gucci. The design is updated for Fall Winter 2017 with allover embroidered insects.</p>\r\n\r\n<p>Black leather with embroidered insects</p>\r\n\r\n<p>Embroidered gold bee detail at the back</p>\r\n\r\n<p>Lace-up closure</p>\r\n\r\n<p>Side zipper</p>\r\n\r\n<p>Tiger head buckle</p>\r\n\r\n<p>Leather sole</p>\r\n\r\n<p>1&quot; heel height</p>\r\n\r\n<p>Made in Italy</p>\r\n', 1300, NULL, NULL, 'no-image.png', '0', '1', '0'),
(4, 85, 'Leather crab brogue boot', '<p>A leather ankle boot with special brogue detailing representing a crab motif, speaking to the maritime inspiration of the Spring Summer 2017 collection. Swirled designs and the bee motif accent the toe.</p>\r\n\r\n<p>Black leather</p>\r\n\r\n<p>Yellow laces on right shoe; Green and white criss cross laces on left shoe</p>\r\n\r\n<p>Ships with an additional set of black laces</p>\r\n\r\n<p>Side zipper</p>\r\n\r\n<p>Leather sole</p>\r\n\r\n<p>.5&quot; heel height</p>\r\n\r\n<p>Made in Italy</p>\r\n\r\n<p>This item will be delivered in special edition packaging</p>\r\n', 1200, NULL, NULL, 'no-image.png', '0', '1', '0'),
(5, 85, 'Queercore brogue boot', '<p>The Queercore boot blends traditional brogue details with unexpected hardware and design. Inspired by the punk movement of the mid-1980s, the lace-up silhouette reflects the subculture&#39;s nonconformist spirit, completed with a studded tiger head buckle across the front-a detail that has quickly become a key embellishment for Gucci. The design is updated for Fall Winter 2017 in a tweed fabric with leather.</p>\r\n\r\n<p>Green, blue and red tweed with black leather</p>\r\n\r\n<p>Embroidered gold bee detail at the back</p>\r\n\r\n<p>Tiger head buckle</p>\r\n\r\n<p>Lace-up closure</p>\r\n\r\n<p>Side zipper</p>\r\n\r\n<p>Leather sole</p>\r\n\r\n<p>1&quot; heel height</p>\r\n\r\n<p>Made in Italy</p>\r\n\r\n<p>Delivered in special edition packaging with a garden motif from the Fall Winter 2017 runway show.</p>\r\n', 1300, NULL, NULL, 'no-image.png', '1', '0', '0'),
(6, 85, 'Horsebit leather boot with appliqués ', '<p>A leather ankle boot with embroidered appliqu&eacute;s representing two important themes of the Pre-Fall collection. On the right shoe is the Angry Cat-specially embroidered to achieve a three-dimensional effect, and on the left is a UFO, speaking to Alessandro Michele&#39;s fascination with outer space. The thread embroideries juxtapose a &#39;70s inspired silhouette with Horsebit hardware.</p>\r\n\r\n<p>Black leather</p>\r\n\r\n<p>Embroidered Angry Cat appliqu&eacute; on right shoe</p>\r\n\r\n<p>Embroidered UFO appliqu&eacute; on left shoe</p>\r\n\r\n<p>Horsebit detail</p>\r\n\r\n<p>Side zipper</p>\r\n\r\n<p>Leather sole</p>\r\n\r\n<p>1.2&quot; height</p>\r\n\r\n<p>Made in Italy</p>\r\n', 1400, NULL, NULL, 'no-image.png', '1', '0', '0'),
(7, 85, 'Suede boot with appliqués', '<p>A suede ankle boot with cr&ecirc;pe rubber sole, embellished with embroidered appliqu&eacute;s representing two distinctive emblems of the House. Alessandro Michele captures the powerful energy of the tiger-one of Gucci&#39;s most important animal motifs-juxtaposed with whimsical cloud embroideries.</p>\r\n\r\n<p>Taupe suede</p>\r\n\r\n<p>Embroidered tiger and clouds appliqu&eacute;s</p>\r\n\r\n<p>Lace-up closure</p>\r\n\r\n<p>Rubber sole</p>\r\n\r\n<p>.6&quot; height</p>\r\n\r\n<p>Made in Italy</p>\r\n', 900, NULL, NULL, 'no-image.png', '1', '0', '0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
