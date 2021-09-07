-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 06:44 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(2, 'Md. Faruk Islam', 'mdfaruk345@gmail.com', 'mdfaruk345@gmail.com', 'iko.png', 'Saudi Aradia ', '<p>new editor MD. Faruk Islam joins in site for edit this site.</p>', '+966 57 8278070', 'Editor'),
(5, 'Md. Habibur Rahman', 'mdhabib375@gmail.com', 'mdhabib375@gmail.com', 'H-man2.jpg', 'Bangladesh', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, esse. Dignissimos sequi ratione quod doloremque nulla praesentium deleniti ipsam assumenda? Sunt quia ducimus officiis, id cupiditate obcaecati impedit veniam nisi.</p>', '01737571574', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `size`) VALUES
(9, '::1', 1, 'Medium'),
(10, '::1', 1, 'Medium'),
(11, '::1', 1, 'Medium'),
(7, '::1', 1, 'Small'),
(8, '::1', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Men', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore provident voluptatibus eaque necessitatibus laborum praesentium ipsa natus architecto voluptatem pariatur eius ducimus voluptate, minus, ad esse dolorem dignissimos earum nobis.'),
(2, 'Women', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore provident voluptatibus eaque necessitatibus laborum praesentium ipsa natus architecto voluptatem pariatur eius ducimus voluptate, minus, ad esse dolorem dignissimos earum nobis.'),
(3, 'Kids', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore provident voluptatibus eaque necessitatibus laborum praesentium ipsa natus architecto voluptatem pariatur eius ducimus voluptate, minus, ad esse dolorem dignissimos earum nobis.'),
(4, 'Other', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore provident voluptatibus eaque necessitatibus laborum praesentium ipsa natus architecto voluptatem pariatur eius ducimus voluptate, minus, ad esse dolorem dignissimos earum nobis.'),
(5, 'Oldies ', 'We lunch our new products for Oldies man. This products are very comfortable for every old man. They can easily choose the products  from home.');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(2, 'cute_baby', 'cutebaby143@gmail.com', 'cu517109', 'Bangladesh', 'Rajshahi', '+880 1770 517109', 'kamarga', 'c-pic.jpg', '::1'),
(4, 'Jamil Chowdhury', 'mdjamil1234@gmail.com', 'mdjamil1234@gmail.com', 'Bangladesh', 'Dinajpur', '01745682356', 'Dinajpur,Dhaka,Bangladesh.', 'H-man.jpg', '::1'),
(5, 'Raju Ahmad', 'mdraju4567@gmail.com', 'mdraju4567@gmail.com', 'Bangladesh', 'Rajshahi', '01756789884', 'Rajshahi,Dhaka,Bangladesh', 'H-man2.jpg', '::1'),
(6, 'Md. Mostofa Kamal', 'moskjd436@gmail.com', 'moskjd436@gmail.com', 'Bangladesh', 'Dhaka', '84759834-759849', 'skadks jkajslkdv asdja ', 'H-man.jpg', '::1'),
(7, 'Rofiq', 'rmd.rofiqulislam@gmail.com', '12346123456', 'Bangladesh', 'Rajshahi', '01723967187', 'Dhanura', 'slider2.png', '::1'),
(8, 'MD.SELIM REZA', 'studentmrselim@gmail.com', '017145617', 'Bangladesh', 'Rashahi', '01714561792', 'kamarga', 'H-man.jpg', '::1'),
(9, 'habib', 'admin@gmail.com', '123456', 'Bangladesh', 'malshira', '01750918981', 'kamarga', 'monochrome-half-body-man-without-face-vector-11886479.jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(13, 4, 135, 1324771497, 3, 'Medium', '2021-04-08', 'pending'),
(14, 4, 70, 687866848, 2, 'Small', '2021-04-08', 'complete'),
(15, 5, 2690, 1445548155, 2, 'Large', '2021-04-08', 'complete'),
(16, 5, 50, 1460137770, 1, 'Medium', '2021-04-08', 'pending'),
(17, 6, 30, 863576380, 1, 'Medium', '2021-04-09', 'complete'),
(18, 2, 30, 1128380974, 1, 'Medium', '2021-05-17', 'complete'),
(19, 2, 120, 2054953826, 1, 'Medium', '2021-05-18', 'pending'),
(20, 2, 2690, 2054953826, 2, 'Large', '2021-05-18', 'pending'),
(21, 2, 60, 1442391859, 2, 'Large', '2021-07-31', 'pending'),
(22, 2, 206, 1442391859, 2, 'Small', '2021-07-31', 'pending'),
(23, 2, 35, 1442391859, 1, 'Small', '2021-07-31', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(1, 1964801525, 100, 'western Union', 123546, 567890, '19/03/2021'),
(2, 1449099576, 242, 'Western Union', 76543, 387, '29/03/21'),
(6, 863576380, 30, 'Bkash', 2147483647, 63784, '09/04/2021'),
(7, 1128380974, 30, 'Nagod', 23123, 6785, '18/05/2021');

-- --------------------------------------------------------

--
-- Table structure for table `pending_order`
--

CREATE TABLE `pending_order` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending_order`
--

INSERT INTO `pending_order` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(13, 4, 1324771497, '10', 3, 'Medium', 'pending'),
(14, 4, 687866848, '2', 2, 'Small', 'complete'),
(17, 6, 863576380, '11', 1, 'Medium', 'complete'),
(18, 2, 1128380974, '11', 1, 'Medium', 'complete'),
(19, 2, 2054953826, '9', 1, 'Medium', 'pending'),
(20, 2, 2054953826, '7', 2, 'Large', 'pending'),
(21, 2, 1442391859, '11', 2, 'Large', 'pending'),
(22, 2, 1442391859, '5', 2, 'Small', 'pending'),
(23, 2, 1442391859, '2', 1, 'Small', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keywords`) VALUES
(2, 2, 3, '2021-03-31 18:40:51', 'Hijab for kids', 'hijab-anak-1.jpg', 'hijab-anak-2.jpg', 'hijab-anak-3.jpg', 35, '<p>Our new product Hijab for kids.</p>', 'Hijab'),
(5, 1, 2, '2021-03-07 11:10:27', 'Red Winter jacket', 'Red-Winter-jacket-1.jpg', 'Red-Winter-jacket-2.jpg', 'Red-Winter-jacket-3.jpg', 103, '<p>Winter new product for Women from korean.</p>', 'Korean Jacket'),
(7, 2, 2, '2021-03-13 08:54:18', 'women diamond heart ring', 'women-diamond-heart-ring-1.jpg', 'women-diamond-heart-ring-2.jpg', 'women-diamond-heart-ring-3.jpg', 1345, '<p><em>Dimond for woman.</em></p>', 'Dimond Heart'),
(8, 3, 2, '2021-03-31 08:07:08', 'High Heels Women Pantofel Brukat', 'High Heels Women Pantofel Brukat-1.jpg', 'High Heels Women Pantofel Brukat-2.jpg', 'High Heels Women Pantofel Brukat-3.jpg', 50, '<p><strong>New shoe for women</strong></p>', 'Shoe'),
(9, 1, 1, '2021-03-31 08:19:51', 'Man Geox Winter jacket', 'Man-Geox-Winter-jacket-1.jpg', 'Man-Geox-Winter-jacket-2.jpg', 'Man-Geox-Winter-jacket-3.jpg', 120, '<p><strong>New Jacket for men</strong></p>', 'jacket'),
(10, 1, 1, '2021-03-31 09:56:19', 'jacket', 'jacket1.jpg', 'jacket2.jpg', 'jacket3.jpg', 45, '<p><strong>Jaket for Young boys</strong></p>', 'M jacket'),
(11, 5, 1, '2021-04-08 16:24:02', 't-shirt for young man', 'Man-Polo-1.jpg', 'Man-Polo-2.jpg', 'Man-Polo-3.jpg', 30, '<p>we are lunch new t-shirt for man in summer.</p>', 'new t-shiet for men');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'Jackets', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore provident voluptatibus eaque necessitatibus laborum praesentium ipsa natus architecto voluptatem pariatur eius ducimus voluptate, minus, ad esse dolorem dignissimos earum nobis.'),
(2, 'Accessories', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore provident voluptatibus eaque necessitatibus laborum praesentium ipsa natus architecto voluptatem pariatur eius ducimus voluptate, minus, ad esse dolorem dignissimos earum nobis.'),
(3, 'Shoes', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore provident voluptatibus eaque necessitatibus laborum praesentium ipsa natus architecto voluptatem pariatur eius ducimus voluptate, minus, ad esse dolorem dignissimos earum nobis.'),
(4, 'Coats', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore provident voluptatibus eaque necessitatibus laborum praesentium ipsa natus architecto voluptatem pariatur eius ducimus voluptate, minus, ad esse dolorem dignissimos earum nobis.'),
(5, 'T-Shirt', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore provident voluptatibus eaque necessitatibus laborum praesentium ipsa natus architecto voluptatem pariatur eius ducimus voluptate, minus, ad esse dolorem dignissimos earum nobis.'),
(12, 'Panjabi Collection', 'New Panjabi collection for Eid. This Panjabi made by original suti.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL,
  `slide_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`, `slide_url`) VALUES
(19, 'Slider number14', 'slider-number-14.jpg', 'www.google.com'),
(20, 'Slider number11', 'slider-number-11.jpg', 'www.photo.com'),
(21, 'Slider number9', 'slider-number-9.jpg', 'http://www.youtube.com'),
(22, 'Slider number10', 'slider-number-10.jpg', 'www.cutephoto.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

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
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_order`
--
ALTER TABLE `pending_order`
  ADD PRIMARY KEY (`order_id`);

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
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pending_order`
--
ALTER TABLE `pending_order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
