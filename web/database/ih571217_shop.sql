-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 11 2017 г., 22:07
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
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `keywords`, `description`) VALUES
(72, 0, 'Men', NULL, NULL),
(73, 0, 'Women', NULL, NULL),
(74, 0, 'Children', NULL, NULL),
(75, 72, 'Louis Vuitton', NULL, NULL),
(77, 72, 'Gucci', NULL, NULL),
(78, 72, 'Dolce&Gabbana', NULL, NULL),
(79, 75, 'Ready-to-wear', NULL, NULL),
(80, 75, 'Shoes', NULL, NULL),
(81, 79, 'Shirts', NULL, NULL),
(82, 80, 'Boots', NULL, NULL),
(83, 79, 'Pants', NULL, NULL),
(84, 77, 'Shoes', NULL, NULL),
(85, 84, 'Boots', NULL, NULL);

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

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1505591250),
('m140622_111540_create_image_table', 1505591257),
('m140622_111545_add_name_to_image_table', 1505591257);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `qty` int(11) NOT NULL,
  `sum` float NOT NULL,
  `status` enum('0','1') CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `created_at`, `updated_at`, `qty`, `sum`, `status`, `name`, `email`, `phone`, `address`) VALUES
(1, '2017-10-11 15:00:17', '2017-10-11 15:00:17', 7, 8500, '1', 'dmitriy', 'h@gmail.com', '4314141413', 'donetsk'),
(2, '2017-10-11 21:34:58', '2017-10-11 21:34:58', 3, 3500, NULL, 'alexe', 'a@gmail.com', '393288', 'donetsk makeevka bojanovo');

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `qty_item` int(11) NOT NULL,
  `sum_item` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `name`, `price`, `qty_item`, `sum_item`) VALUES
(1, 1, 1, 'Leather boot with Double G', 1100, 1, 1100),
(2, 1, 2, 'Leather boot with pierced moon', 1300, 1, 1300),
(3, 1, 3, 'Queercore embroidered brogue boot', 1300, 1, 1300),
(4, 1, 4, 'Leather crab brogue boot', 1200, 1, 1200),
(5, 1, 5, 'Queercore brogue boot', 1300, 1, 1300),
(6, 1, 6, 'Horsebit leather boot with appliqués ', 1400, 1, 1400),
(7, 1, 7, 'Suede boot with appliqués', 900, 1, 900),
(8, 2, 1, 'Leather boot with Double G', 1100, 2, 2200),
(9, 2, 2, 'Leather boot with pierced moon', 1300, 1, 1300);

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

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `auth_key`) VALUES
(39, 'admin', '', '$2y$13$O/X51Oup4qayJ/Tvu7.7fO1ut4NFq57F6Uvn2LZYx53hvWus5GtYe', 'JlXYy4VSQbp6p7rXjQqJl5Vbp3DDuGET');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT для таблицы `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
