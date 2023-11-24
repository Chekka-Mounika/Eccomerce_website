-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 12:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybasket`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `product_name`, `user_id`, `product_price`) VALUES
(13, 1, 'Tata salt', 29, 163),
(25, 25, '2 piece SummerSuit(Men)', 35, 3699);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(30) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_desc` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_desc`) VALUES
(1, 'mens_wear', 'Men\'s wear'),
(2, 'womens_wear', 'Women\'s wear'),
(3, 'electronics', 'Electronics'),
(4, 'kids_wear', 'Kid\'s wear'),
(5, 'grocery', 'Grocery'),
(6, 'beauty_products', 'Beauty products'),
(7, 'decoratives', 'Decoratives'),
(8, 'footwear', 'Foot wear');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_price`, `product_cat_id`) VALUES
(1, 'Tata salt', 'Tata Salt Iodized Crystal Salt is sourced from the sea. This pack contains 1kg.', 163, 5),
(2, 'Surf Excel', 'Buy Surf Excel easy wash detergent powder 1kg online at best price of Rs 144', 144, 5),
(3, 'Chocolate Horlicks', 'Horlicks is traditionally crafted using malted wheat and barley enriched with vitamins and minerals. This pack contains 500 grams', 207, 5),
(4, 'Lux soap', 'Rosa Gallica flower extract ,Jasminium flower extract.', 70, 5),
(5, 'Brand Face wash', 'Herbals Purifying Neem face wash', 100, 6),
(6, 'Vanesa body spray', 'Gives you a fresh scent that lasts long', 200, 6),
(7, 'Nivea body lotion', 'Moisturizing everyday can reduce the chance of developing extreme dryness or oilness.', 300, 6),
(8, 'Estee Lauder hair serum', 'Onion scalp serum with onion and Niacinamide for healthy hair growth', 500, 6),
(9, 'Peacock thread wall hanging', 'A large decorative piece of fabric to be hung on the wall.', 200, 7),
(10, 'Ceiling hanging', 'A large decorative piece of fabric to be \r\nhung from the ceiling.', 300, 7),
(11, 'Wall clock', 'Designed by using embroidery work', 400, 7),
(12, 'Flower vase', 'Attractive display throughout your event and it will help support blooms in best position. ', 2000, 7),
(13, 'Puma\'s Sneakers shaded in pink women\'s wear', 'Shoes with a rubber sole that is designed for people to wear while running, playing sports, etc.', 3000, 8),
(14, 'Women\'s heal sandals', 'A sole held to be the wearer\'s foot by straps going over the instep and around the ankle.', 1499, 8),
(15, 'Women\'s half shoe.', 'A half shoe of pink shade with flat heel', 900, 8),
(16, 'HyTech sandal', 'This footwear is intended to protect and comfort your foot.', 753, 8),
(17, 'Pure Cotton Denim Dungaree outfit(0-3 years)', 'Adjustable popper fastenings on the dungaree shoulder straps allow cotton spot-print bodysuit with long sleeves and poppers for easy on and off. ', 700, 4),
(18, 'Lehenga for kids(5-7 years)', 'A form of ankle-length skirt from the Indian subcontinent. Gota patti embroidery is often used for festivals and weddings.', 2000, 4),
(22, 'Colorado Winter ( Men)', 'Beige cardian is knitte from a blend of cotton, linen and silk ', 1435, 1),
(23, 'Formal Shirt ', 'formal shirt knitted with printed designmixed with red and blue ', 599, 1),
(24, 'Royal Suit ', 'Ethnic wear suit ,for big occasions designer ethnic wear', 3999, 1),
(25, '2 piece SummerSuit(Men)', 'Cool warm weather styles and fashion ideas.Pool party attire', 3699, 1),
(26, 'Crushed Tee shirt(Men)', 'Crafted for comfort. get ease of the movement with this premium quality Tee that is stitched to perfection', 549, 1),
(27, 'Blue Poly Georgette', 'A fusion of style and comfort, this blue poly georgette dress from Janasya will be an apt inclusion to your wardrobe. Featuring a keyhole neck, crepe lining, tie-up at waist with gathers, three quarter sleeves, this gathered hemline dress posseses a stunning taste.\r\n', 795, 2),
(28, 'White Digital Printed Anarkali Gown', 'Heavy Faux Georgette With Sleeve.\r\nFancy Digital Print With Fancy Lace Border Work (Front&Back Side Work)', 1799, 2),
(29, 'Blue Floral Belt dress', 'Best Quality Product, with imported bsy fabric...its good for summer use', 849, 2),
(30, 'Plus Cut And Sew Smock Dress IN', 'Round Neck Short Sleeve Color Block Ruffle Loose fitntunic trapeze swing,dress for summer', 3054, 2),
(31, 'Indya Hot Pink Foil Belted Maxi Kurta with Attached Dupatta', 'Hot pink maxi kurta crafted in georgette and mesh.\r\nLavished with lotus motif foil print.\r\nIt features an attached pleated dupatta and a belt with pearls & gold zari tassels.\r\nTailored sleeveless, it has a round neck and a button closure', 3550, 2),
(32, 'Vivo Bluetooth m-4', 'Black bluetooth,comfortable in ears ,long bluetooth and gripping to ears', 575, 3),
(33, 'Hot Selling G5S Tws Earphones Waterproof ', 'Headphones Headsets Power Banks Noise Cancelling Wireless Earbuds with Mic for Sport', 1500, 3),
(34, 'WTT140ABRT Voltas Semi Automatic Washing Machine, Red', 'The stainless steel net in the cassette filter collects lint, buttons and threads that are removed from the water after the clothes have been washed.', 16999, 3),
(35, 'Apple MacBook Pro (13\", 2018, Four Thunderbolt 3 ports', 'Touch Bar Intel i5 Dual Core, 16GB RAM, 512GB SSD, A1706 touchba', 69999, 3);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `registereddate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `registereddate`) VALUES
(1, 'mounika', 'ytytvyu@ioi.verht', '456', '2022-10-23 09:52:33'),
(2, 'mounikaeqc', 'ytytvyu@ioi.verhtcqwr', '123', '2022-10-23 09:54:50'),
(3, 'rwv', 'wreyvety@wr.tybujrt', '1', '2022-10-23 09:58:47'),
(4, 'wvv', 'ryevw@wrv', '1', '2022-10-23 10:00:53'),
(5, 'wre', 'wtv@utb.yt', '1', '2022-10-23 10:01:47'),
(6, 'wreyt', 'wtv@utb.ytyu', '1', '2022-10-23 10:10:28'),
(7, 'mouni', '223@gmail.com', '1', '2022-10-23 10:11:24'),
(8, 'mouni', '2234@gmail.com', '12', '2022-10-23 10:14:45'),
(9, 'mouni', '22354@gmail.com', '12', '2022-10-23 10:15:52'),
(10, 'mouni', '2@gmail.com', '12', '2022-10-23 10:16:27'),
(11, 'mouni', '24@gmail.com', '12', '2022-10-23 10:17:20'),
(12, 'mouni', '244@gmail.com', '12', '2022-10-23 10:17:47'),
(13, 'mouni', '2444@gmail.com', '12', '2022-10-23 10:18:13'),
(14, 'mouni', '2444@gmail.com', '12', '2022-10-23 10:19:11'),
(15, '23423', '2323@344.g', '123', '2022-10-23 10:19:30'),
(16, '23423', '2323@344.g', '123', '2022-10-23 10:20:54'),
(17, '23423', '2323@344.g', '123', '2022-10-23 10:21:29'),
(18, '23423', '2323@344.g', '123', '2022-10-23 10:21:54'),
(19, '23423', '2323@344.g', '123', '2022-10-23 10:22:24'),
(20, '23423', '2323@344.g', '123', '2022-10-23 10:24:39'),
(21, '23423', '2323@344.g', '123', '2022-10-23 10:25:20'),
(22, '23423', '2323@344.g', '123', '2022-10-23 10:25:42'),
(23, '23423', '2323@344.g', '123', '2022-10-23 10:26:02'),
(24, '23423', '2323@344.g', '123', '2022-10-23 10:26:48'),
(25, '23423', '2323@344.g', '123', '2022-10-23 10:27:04'),
(26, '23423', '2323@344.g', '123', '2022-10-23 10:27:31'),
(27, 'wer', 'dvfg@fgff.k', '678', '2022-10-23 10:27:51'),
(28, 'mouni', '12@gmail.com', '123', '2022-10-23 10:46:30'),
(29, 'm', 'm@gmail.com', '123', '2022-10-23 10:48:00'),
(30, 'mounika', '123@gmail.com', '123', '2022-10-24 16:23:15'),
(31, 'hriday', 'h@mail.com', '456', '2022-10-25 17:46:19'),
(32, 'pavan', 'pavan@gmail.com', 'pavan', '2022-11-06 18:29:55'),
(33, 'hi', 'hi@gmail.com', 'hi', '2022-11-11 18:24:21'),
(34, 'hello', 'hello@gmail.com', 'hello', '2022-11-11 22:07:03'),
(35, 'tamal', 'tamal@gmail.com', 'tamal', '2022-11-11 22:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `product_id`, `user_id`, `product_name`, `product_price`) VALUES
(62, 1, 29, 'Tata salt', 163),
(63, 2, 29, 'Surf Excel', 144),
(64, 3, 29, 'Chocolate Horlicks', 207),
(65, 22, 33, 'Colorado Winter ( Men)', 1435),
(66, 23, 33, 'Formal Shirt ', 599),
(67, 32, 35, 'Vivo Bluetooth m-4', 575),
(68, 33, 35, 'Hot Selling G5S Tws Earphones Waterproof ', 1500),
(69, 28, 35, 'White Digital Printed Anarkali Gown', 1799),
(70, 2, 35, 'Surf Excel', 144),
(71, 17, 35, 'Pure Cotton Denim Dungaree outfit(0-3 years)', 700),
(72, 9, 35, 'Peacock thread wall hanging', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_id` (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
