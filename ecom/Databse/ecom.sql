-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 10:34 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(100) NOT NULL,
  `ip_add` int(100) NOT NULL,
  `qty` int(255) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `size`) VALUES
(14, 0, 3, 'Small'),
(27, 0, 3, 'Extra Large');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'MEN', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(2, 'WOMEN', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(3, 'KIDS', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(4, 'OTHERS', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(100) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer-email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_img` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cart_id` int(10) NOT NULL,
  `cart_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cart_id`, `cart_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keyword`) VALUES
(14, 1, 1, '2019-10-20 18:58:51', 'Logitech Mk550 Wireless Wave Combo With Keyboard And Laser Mouse', 'c4.jpg', 'c5.jpg', 'c6.jpg', 1300, '<p><span style=\"color: rgba(255, 255, 255, 0.87); font-family: arial, sans-serif; font-size: 14px; background-color: #141518;\">Virtually no battery changes ? up to three years of battery life for the keyboard&nbsp;&nbsp;</span></p>', 'software'),
(16, 1, 1, '2019-10-20 19:01:48', 'HP Notebook 15 - Amd Dual Core - 4gb Ram, 500gb Hdd Window 10.', 'c2.jpg', 'c1.jpg', 'c3.jpg', 50000, '<p><span style=\"color: rgba(255, 255, 255, 0.87); font-family: arial, sans-serif; font-size: 14px; background-color: #141518;\">15.6\" display: BrightView glossy screen maintains the vivid colors in your photos and videos.</span></p>', 'software'),
(17, 1, 1, '2019-10-20 19:02:47', ' Wireless Wave Combo With Keyboard And Laser Mouse', 'c6.jpg', 'c5.jpg', 'c4.jpg', 1000, '<p><span style=\"color: rgba(255, 255, 255, 0.87); font-family: arial, sans-serif; font-size: 14px; background-color: #141518;\">BrightView glossy screen maintains the vivid colors in your photos and videos.</span></p>', 'software'),
(18, 2, 1, '2019-10-20 19:06:28', 'Adidas Original Trefoil T-Shirt - Vapour Pink/Black', '1.jpg', '2.jpg', '4.jpg', 450, '<p><span style=\"color: rgba(255, 255, 255, 0.87); font-family: arial, sans-serif; font-size: 14px; background-color: #141518;\">BrightView glossy screen maintains the vivid colors in your photos and videos.</span></p>', 'T-Shirt'),
(19, 2, 2, '2019-10-20 19:07:23', 'Adidas  Trefoil T-Shirt', '4.jpg', '1.jpg', '2.jpg', 1000, '<p><span style=\"color: rgba(255, 255, 255, 0.87); font-family: arial, sans-serif; font-size: 14px; background-color: #141518;\">BrightView glossy screen maintains the vivid colors in your photos and videos.</span></p>', 'T-Shirt'),
(20, 7, 1, '2019-10-20 19:09:57', 'Australian Beauty & Personal Care Products Market to Have a Healthy Growth of US', 'h1.jpg', 'h1.jpg', 'h1.jpg', 500, '<p>It is Healthly for skin</p>', 'health'),
(21, 3, 1, '2019-10-20 19:16:10', 'Korean High-top men shoes casual fashion breathable Rammstein canvas shoes man Lace-Up hip hop flat shoes', 's7.jpg', 's7.jpg', 's7.jpg', 3000, '<p><a class=\"irc_pt irc_tas irc-cms i3598 irc_lth\" dir=\"ltr\" style=\"unicode-bidi: isolate; color: rgba(255, 255, 255, 0.87); cursor: pointer; display: block; font-size: 20px; line-height: 30px; max-height: 60px; overflow: hidden; text-overflow: ellipsis; overflow-wrap: break-word; font-family: arial, sans-serif; background-color: #141518;\" tabindex=\"0\" href=\"https://www.dhgate.com/product/korean-high-top-men-shoes-casual-fashion/403218438.html\" target=\"_blank\" rel=\"noopener\" data-noload=\"\" data-ved=\"2ahUKEwiqhoaRxqvlAhVX6nMBHWd7BAUQjhx6BAgBEAI\">Korean High-top men shoes casual fashion breathable Rammstein canvas shoes man Lace-Up hip hop flat shoes</a></p>', 'Shoes'),
(22, 3, 1, '2019-10-20 19:16:58', 'Wearing Business Oxford Shoes For Male Fashion Groom Wedding Shoes Original Elegant Men Shoes', 's6.jpg', 's5.jpg', 's6.jpg', 2500, '<h1 class=\"product_title entry-title\" style=\"box-sizing: border-box; margin: 0px 0px 16px; font-size: 24px; font-family: Roboto, sans-serif; font-weight: 500; line-height: 1.1; color: #191919; clear: none; padding: 0px 0px 16px; border-bottom: 1px solid #dddddd;\">Wearing Business Oxford Shoes For Male Fashion Groom Wedding Shoes Original Elegant Men Shoes</h1>', 'Shoes'),
(23, 3, 2, '2019-10-20 19:18:43', 'Oxford Shoes For Female Fashion Groom Wedding Shoes Original Elegant ', 's3.jpg', 's2.jpg', 's1.jpg', 500, '<h1 class=\"product_title entry-title\" style=\"box-sizing: border-box; margin: 0px 0px 16px; font-size: 24px; font-family: Roboto, sans-serif; font-weight: 500; line-height: 1.1; color: #191919; clear: none; padding: 0px 0px 16px; border-bottom: 1px solid #dddddd;\">&nbsp;Oxford Shoes For FEMALE Fashion Groom Wedding Shoes Original Elegant Shoes</h1>', 'Shoes'),
(24, 4, 2, '2019-10-21 14:05:45', 'Philips Kitchen Appliances - Buy Philips Kitchen Appliances ', 'k1.jpeg', 'k1.jpeg', 'k1.jpeg', 3000, '<p>It is good product for womens</p>', 'kitchen'),
(25, 4, 2, '2019-10-21 14:12:16', 'Appliances: Home and Kitchen Appliances | Sears.com', 'k3.jpg', 'k3.jpg', 'k3.jpg', 15000, '', 'kitchen'),
(27, 2, 3, '2019-10-22 04:33:25', 'Adidas  T-Shirt - Vapour Pink/Black', '2.jpg', '1.jpg', '1.jpg', 500, '', 'T-Shirt');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Computers & Accessories', 'Welcome to the computers and accessories store. Shop from a wide selection of devices like Laptops, Printers, Routers and Tablets, to accessories like Hard Drives, Memory Cards, Pen Drives, Keyboards, Mice and more. Find the latest in technology with Gaming, Solid state drives, and Wearable devices.'),
(2, 'Clothing & Accessories', 'A fashion accessory is an item used to contribute, in a secondary manner, to the wearer\'s outfit, often used to complete an outfit and chosen to specifically complement the wearer\'s look. It has the capacity to further express an individuals identity and personality as there are accessories that come in different, shapes, sizes, hues etc. The term came into use in the 20th century'),
(3, 'SHOES & HANDBAGS', 'Shop for an attractive range of shoes for men, women and kids from leading brands like Nike, Adidas, Clarks, Fila, Crocs, Puma, Red Tape, Tresmode, Bata, Disney, Carlton London, Woodland, Reebok and many more. You can also find fabulous Handbags & Clutches or complete your purchase with Shoe care & accessories to tend to your shoe needs.'),
(4, 'Kitchen & Home appliances', 'Home appliances, also known as domestic appliances, are electrical machines that help in household functions such as cooking, cleaning and food preservation.\r\nThey are divided into the three classifications: small appliances, major appliances, or white goods, and consumer electronics, or brown goods in the United Kingdom.'),
(7, 'Health care', 'Health care, health-care, or healthcare is the maintenance or improvement of health via the prevention, diagnosis, and treatment of disease, illness, injury, and other physical and mental impairments in people. Health care is delivered by health professionals in allied health fields. Physicians and physician associates are a part of these health professionals.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_name`, `slider_image`) VALUES
(1, 'slider number 1', 'slidera.jpg'),
(2, 'slider number 2', 'sliderb.jpg'),
(3, 'slider number 3', 'sliderc.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
