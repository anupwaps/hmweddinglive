-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 02:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ngk1`
--

-- --------------------------------------------------------

--
-- Table structure for table `couriercharge`
--

CREATE TABLE `couriercharge` (
  `cid` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `tax` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `couriercharge`
--

INSERT INTO `couriercharge` (`cid`, `weight`, `tax`) VALUES
(1, 10, 20);

-- --------------------------------------------------------

--
-- Table structure for table `imagesdata`
--

CREATE TABLE `imagesdata` (
  `iid` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imagesdata`
--

INSERT INTO `imagesdata` (`iid`, `category`, `url`) VALUES
(1, 'POPULAR', 'https://storage.sg.content-cdn.io/cdn-cgi/image/width=2500,height=500,quality=75,format=auto,fit=cover,g=top/in-resources/d7048855-742a-406c-a67d-5c2962e69e5e/Images/ProductImages/Source/weddingpackage-5_1.jpg'),
(2, 'POPULAR', 'https://storage.sg.content-cdn.io/cdn-cgi/image/width=2500,height=1000,quality=75,format=auto,fit=cover,g=top/in-resources/d7048855-742a-406c-a67d-5c2962e69e5e/Images/ProductImages/Source/weddingpackage-5_1.jpg'),
(4, 'LATEST', 'https://storage.sg.content-cdn.io/cdn-cgi/image/width=2500,height=1000,quality=75,format=auto,fit=cover,g=top/in-resources/d7048855-742a-406c-a67d-5c2962e69e5e/Images/ProductImages/Source/weddingpackage-5_1.jpg'),
(5, 'FEATURE', 'https://storage.sg.content-cdn.io/cdn-cgi/image/width=2500,height=1000,quality=75,format=auto,fit=cover,g=top/in-resources/d7048855-742a-406c-a67d-5c2962e69e5e/Images/ProductImages/Source/weddingpackage-5_1.jpg'),
(6, 'LATEST', 'https://storage.sg.content-cdn.io/cdn-cgi/image/width=2500,height=1000,quality=75,format=auto,fit=cover,g=top/in-resources/d7048855-742a-406c-a67d-5c2962e69e5e/Images/ProductImages/Source/weddingpackage-5_1.jpg'),
(7, 'FEATURE', 'https://www.marketinforeports.com/assets/images/logo.png'),
(8, 'FEATURE', 'https://www.marketinforeports.com/assets/images/logo.png'),
(10, 'POPULAR', 'https://www.ashtekarandsons.in//upload/product/5/8.jpg'),
(11, 'LATEST', 'https://storage.sg.content-cdn.io/cdn-cgi/image/width=2500,height=1000,quality=75,format=auto,fit=cover,g=top/in-resources/d7048855-742a-406c-a67d-5c2962e69e5e/Images/ProductImages/Source/weddingpackage-5_1.jpg'),
(1, 'POPULAR', 'https://storage.sg.content-cdn.io/cdn-cgi/image/width=2500,height=500,quality=75,format=auto,fit=cover,g=top/in-resources/d7048855-742a-406c-a67d-5c2962e69e5e/Images/ProductImages/Source/weddingpackage-5_1.jpg'),
(2, 'POPULAR', 'https://storage.sg.content-cdn.io/cdn-cgi/image/width=2500,height=1000,quality=75,format=auto,fit=cover,g=top/in-resources/d7048855-742a-406c-a67d-5c2962e69e5e/Images/ProductImages/Source/weddingpackage-5_1.jpg'),
(4, 'LATEST', 'https://storage.sg.content-cdn.io/cdn-cgi/image/width=2500,height=1000,quality=75,format=auto,fit=cover,g=top/in-resources/d7048855-742a-406c-a67d-5c2962e69e5e/Images/ProductImages/Source/weddingpackage-5_1.jpg'),
(5, 'FEATURE', 'https://storage.sg.content-cdn.io/cdn-cgi/image/width=2500,height=1000,quality=75,format=auto,fit=cover,g=top/in-resources/d7048855-742a-406c-a67d-5c2962e69e5e/Images/ProductImages/Source/weddingpackage-5_1.jpg'),
(6, 'LATEST', 'https://storage.sg.content-cdn.io/cdn-cgi/image/width=2500,height=1000,quality=75,format=auto,fit=cover,g=top/in-resources/d7048855-742a-406c-a67d-5c2962e69e5e/Images/ProductImages/Source/weddingpackage-5_1.jpg'),
(7, 'FEATURE', 'https://www.marketinforeports.com/assets/images/logo.png'),
(8, 'FEATURE', 'https://www.marketinforeports.com/assets/images/logo.png'),
(10, 'POPULAR', 'https://www.ashtekarandsons.in//upload/product/5/8.jpg'),
(11, 'LATEST', 'https://storage.sg.content-cdn.io/cdn-cgi/image/width=2500,height=1000,quality=75,format=auto,fit=cover,g=top/in-resources/d7048855-742a-406c-a67d-5c2962e69e5e/Images/ProductImages/Source/weddingpackage-5_1.jpg'),
(1, 'POPULAR', 'https://storage.sg.content-cdn.io/cdn-cgi/image/width=2500,height=500,quality=75,format=auto,fit=cover,g=top/in-resources/d7048855-742a-406c-a67d-5c2962e69e5e/Images/ProductImages/Source/weddingpackage-5_1.jpg'),
(2, 'POPULAR', 'https://storage.sg.content-cdn.io/cdn-cgi/image/width=2500,height=1000,quality=75,format=auto,fit=cover,g=top/in-resources/d7048855-742a-406c-a67d-5c2962e69e5e/Images/ProductImages/Source/weddingpackage-5_1.jpg'),
(4, 'LATEST', 'https://storage.sg.content-cdn.io/cdn-cgi/image/width=2500,height=1000,quality=75,format=auto,fit=cover,g=top/in-resources/d7048855-742a-406c-a67d-5c2962e69e5e/Images/ProductImages/Source/weddingpackage-5_1.jpg'),
(5, 'FEATURE', 'https://storage.sg.content-cdn.io/cdn-cgi/image/width=2500,height=1000,quality=75,format=auto,fit=cover,g=top/in-resources/d7048855-742a-406c-a67d-5c2962e69e5e/Images/ProductImages/Source/weddingpackage-5_1.jpg'),
(6, 'LATEST', 'https://storage.sg.content-cdn.io/cdn-cgi/image/width=2500,height=1000,quality=75,format=auto,fit=cover,g=top/in-resources/d7048855-742a-406c-a67d-5c2962e69e5e/Images/ProductImages/Source/weddingpackage-5_1.jpg'),
(7, 'FEATURE', 'https://www.marketinforeports.com/assets/images/logo.png'),
(8, 'FEATURE', 'https://www.marketinforeports.com/assets/images/logo.png'),
(10, 'POPULAR', 'https://www.ashtekarandsons.in//upload/product/5/8.jpg'),
(11, 'LATEST', 'https://storage.sg.content-cdn.io/cdn-cgi/image/width=2500,height=1000,quality=75,format=auto,fit=cover,g=top/in-resources/d7048855-742a-406c-a67d-5c2962e69e5e/Images/ProductImages/Source/weddingpackage-5_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `24_rate` varchar(500) NOT NULL,
  `22_rate` varchar(500) NOT NULL,
  `18_rate` varchar(500) NOT NULL,
  `silver_rate` varchar(500) NOT NULL,
  `standard_rate` varchar(500) NOT NULL,
  `created_by` varchar(500) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `24_rate`, `22_rate`, `18_rate`, `silver_rate`, `standard_rate`, `created_by`, `created_date`) VALUES
(2, '2930.4', '1953.6', '2604.8', '254', '3256', '4', '2019-05-28 23:57:35'),
(3, '', 'NaN', 'NaN', '1200', 'silver', '4', '2019-05-31 03:28:08'),
(4, '2961', '1974', '2632', '470', '3290', '4', '2019-05-31 03:29:09'),
(5, '11120.4', '7413.599999999999', '9884.8', '000', '12356', '4', '2019-06-05 03:11:18'),
(6, '29.7', '19.799999999999997', '26.4', '000', '33,515', '4', '2019-06-05 03:12:15'),
(7, '000', '000', '000', '39245', '', '4', '2019-06-05 04:17:56'),
(8, '28800', '19200', '25600', '000', '32000', '4', '2019-06-06 17:58:23'),
(9, '2983.5', '1989', '2652', '25000', '3315', '4', '2019-06-10 19:21:21'),
(10, '28800', '19200', '25600', '000', '32000', '4', '2019-06-15 19:43:00'),
(11, '2700', '1800', '2400', '000', '3000', '4', '2019-06-15 19:52:04'),
(12, '2889', '1926', '2568', '450', '3210', '4', '2019-08-14 19:36:32'),
(13, '3487.5', '2325', '3100', '000', '3875', '4', '2019-08-22 05:08:31'),
(14, '000', '000', '000', '4700', '3875', '4', '2019-08-22 05:09:33'),
(15, '2.7', '1.7999999999999998', '2.4', '2800', '3,730', '4', '2019-10-13 01:52:59'),
(16, '000', '000', '000', '000', '3,730', '4', '2019-10-13 01:54:24'),
(17, 'NaN', 'NaN', 'NaN', '000', '', '4', '2019-10-13 01:54:41'),
(18, '2.7', '1.7999999999999998', '2.4', '000', '3,730', '4', '2019-10-13 01:55:37'),
(19, '90', '60', '80', '000', '100', '4', '2019-10-17 04:30:21'),
(20, '3483', '2322', '3096', '48', '3870', '4', '2019-10-17 04:31:08'),
(21, '900', '600', '800', '000', '1000', '4', '2019-10-17 04:34:56'),
(22, '3600.000', '2400.000', '3200.000', '48', '4000', '4', '2019-10-19 03:42:29'),
(23, '3330.000', '2220.000', '2960.000', '400', '3700', '4', '2019-10-20 03:33:40'),
(24, '31000.000', '21700.000', '26350.000', '20000', '31000', '4', '2019-11-05 17:45:00'),
(25, '3200.000', '2240.000', '2720.000', '2200', '3200', '4', '2019-11-05 17:45:49'),
(26, '3880.000', '2716.000', '3298.000', '48', '3880', '4', '2019-11-05 21:43:56'),
(27, '3379.680', '3109.306', '2872.728', '38.97', '3379.68', '4', '2019-12-20 21:26:20'),
(28, '3380.000', '3109.600', '2873.000', '39', '3380', '4', '2019-12-21 03:19:12'),
(29, '3379.680', '3109.306', '2872.728', '000', '3379.68', '4', '2019-12-21 03:22:34'),
(30, '3379.680', '3109.306', '2872.728', '38.97', '3379.68', '4', '2019-12-21 03:22:53'),
(31, '3380.000', '3109.600', '2873.000', '39', '3380', '4', '2019-12-21 03:30:24'),
(32, '3379.680', '3109.306', '2872.728', '38.97', '3379.68', '4', '2019-12-21 03:40:04'),
(33, '4040.000', '3716.800', '3434.000', '000', '4040', '4', '2020-01-10 17:00:13'),
(34, '2500.000', '2300.000', '2125.000', '000', '2500', '14', '2020-02-08 19:09:37'),
(35, '3300.000', '3036.000', '2805.000', '000', '3300', '14', '2020-02-08 21:03:08'),
(36, '4070.000', '3744.400', '3459.500', '48', '4070', '14', '2020-02-08 22:14:39'),
(37, '3500.000', '3220.000', '2975.000', '2000', '3500', '14', '2020-02-09 21:34:49'),
(38, '4345.000', '3997.400', '3693.250', '48', '4345', '14', '2020-03-04 19:42:20'),
(39, '4080.000', '3753.600', '3468.000', '37.8', '4080', '14', '2020-03-20 22:43:59'),
(40, '4245.000', '3905.400', '3608.250', '42', '4245', '14', '2020-03-24 23:14:16'),
(41, '4250.000', '3910.000', '3612.500', '37.5', '4250', '14', '2020-03-24 23:38:14'),
(42, '4355.000', '4006.600', '3701.750', '000', '4355', '14', '2020-03-28 00:28:13'),
(43, '4680.000', '4305.600', '3978.000', '43', '4680', '14', '2020-04-24 03:02:59');

-- --------------------------------------------------------

--
-- Table structure for table `serviceprovider`
--

CREATE TABLE `serviceprovider` (
  `spid` int(11) NOT NULL,
  `spname` varchar(255) NOT NULL,
  `spurl` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serviceprovider`
--

INSERT INTO `serviceprovider` (`spid`, `spname`, `spurl`, `status`) VALUES
(1, 'DHL', 'www.dhl.com/tracker', 'Active'),
(2, 'Fedex', 'www.fedex.com/track', 'Active'),
(3, 'Blue', 'www.bluedart.com', 'Active'),
(4, 'dhl', 'www.dhl.com', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `shippingcharge`
--

CREATE TABLE `shippingcharge` (
  `spid` int(11) NOT NULL,
  `charge` int(11) NOT NULL,
  `tax` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shippingcharge`
--

INSERT INTO `shippingcharge` (`spid`, `charge`, `tax`) VALUES
(1, 500, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tblsizeprice`
--

CREATE TABLE `tblsizeprice` (
  `sid` int(11) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `size` varchar(255) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsizeprice`
--

INSERT INTO `tblsizeprice` (`sid`, `pid`, `size`, `price`) VALUES
(1, 1, '3', 200),
(2, 1, '4', 400),
(3, 1, '5', 500),
(4, 2, 'Small.Medium', 500),
(5, 2, 'Large', 2000),
(6, 3, 'Regular', 200),
(7, 3, 'Small', 100),
(8, 4, 'Regular', 100),
(9, 5, 'Regular', 120),
(10, 6, 'Regular', 290),
(11, 7, 'Regular', 20),
(12, 8, 'Regular', 92),
(13, 9, 'Regular', 200),
(14, 10, 'Regular', 102),
(15, 11, 'Regular', 120),
(16, 12, 'Regular', 170),
(17, 13, 'Regular', 10),
(18, 14, '5', 201),
(19, 14, '7', 302),
(20, 14, '8', 405),
(21, 15, '7', 25),
(22, 15, '8', 25),
(23, 15, '9', 30),
(24, 16, '4', 100),
(25, 16, '8', 200),
(26, 16, '9', 500),
(27, 17, '3', 0.3),
(28, 17, '4', 0.4),
(29, 17, '5', 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `total_cart` int(11) NOT NULL DEFAULT 0,
  `is_shipped` int(1) NOT NULL DEFAULT 0,
  `qty` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `userid`, `created_date`, `total_cart`, `is_shipped`, `qty`) VALUES
(1, 5, '2020-05-21', 2, 1, 0),
(2, 4, '2020-05-22', 3, 0, 0),
(3, 3, '2020-05-23', 1, 1, 0),
(4, 4, '2020-05-23', 1, 0, 0),
(5, 4, '2020-05-24', 1, 0, 0),
(6, 4, '2020-05-24', 1, 0, 0),
(7, 1, '2020-05-24', 1, 1, 0),
(8, 6, '2020-05-30', 1, 1, 0),
(9, 4, '2020-06-06', 4, 0, 0),
(10, 4, '2020-06-06', 4, 0, 0),
(11, 7, '2020-06-11', 1, 1, 0),
(12, 8, '2020-06-11', 1, 1, 0),
(13, 7, '2020-06-11', 1, 1, 0),
(14, 7, '2020-07-19', 1, 1, 0),
(15, 7, '2020-07-19', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_product`
--

CREATE TABLE `tbl_cart_product` (
  `id` int(11) NOT NULL,
  `product_cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart_product`
--

INSERT INTO `tbl_cart_product` (`id`, `product_cart_id`, `product_id`, `product_price`, `quantity`, `color_id`, `size_id`, `ip`) VALUES
(1, 5, 10, 102, 1, 0, 0, '117.233.110.200'),
(2, 6, 10, 102, 1, 0, 0, '117.233.110.200'),
(3, 7, 8, 92, 1, 0, 0, '117.233.110.200'),
(4, 8, 5, 120, 1, 0, 0, '117.228.198.173'),
(5, 9, 2, 500, 1, 0, 0, '160.238.76.123'),
(6, 9, 5, 120, 1, 0, 0, '160.238.76.123'),
(7, 9, 11, 120, 1, 0, 0, '160.238.76.123'),
(8, 9, 13, 10, 1, 0, 0, '160.238.76.123'),
(9, 10, 2, 500, 1, 0, 0, '160.238.76.123'),
(10, 10, 5, 120, 1, 0, 0, '160.238.76.123'),
(11, 10, 11, 120, 1, 0, 0, '160.238.76.123'),
(12, 10, 13, 10, 1, 0, 0, '160.238.76.123'),
(13, 11, 5, 120, 1, 0, 0, '117.233.73.117'),
(14, 12, 6, 290, 1, 0, 0, '160.238.76.72'),
(15, 13, 6, 290, 1, 0, 0, '117.233.73.117'),
(16, 14, 6, 290, 1, 0, 0, '::1'),
(17, 15, 5, 200, 1, 0, 0, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category_name`, `created_by`, `modified_by`, `modified_date`, `created_date`, `status`) VALUES
(1, 'nails', 4, NULL, NULL, '2020-05-13 17:32:45', '1'),
(2, 'shoeing tools', 4, NULL, NULL, '2020-05-21 08:29:49', '0'),
(3, 'tools', 4, NULL, NULL, '2020-05-21 08:30:04', '0'),
(4, 'shoe making', 4, NULL, NULL, '2020-05-21 08:30:16', '0'),
(5, 'accessory', 4, NULL, NULL, '2020-05-22 13:36:17', '0'),
(6, 'blog', 4, NULL, NULL, '2020-05-22 13:39:40', '0'),
(7, 'education', 4, NULL, NULL, '2020-05-22 13:41:18', '0'),
(8, 'hoof care', 4, NULL, NULL, '2020-05-22 13:42:49', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkout`
--

CREATE TABLE `tbl_checkout` (
  `checkout_id` int(11) NOT NULL,
  `firstname1` varchar(20) NOT NULL,
  `lastname1` varchar(20) NOT NULL,
  `firstname2` varchar(20) DEFAULT NULL,
  `lastname2` varchar(20) DEFAULT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `phone1` varchar(20) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `country1` varchar(20) NOT NULL,
  `city1` varchar(20) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `email2` varchar(20) NOT NULL,
  `country2` varchar(20) NOT NULL,
  `city2` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `postcode1` varchar(5) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_option` varchar(20) NOT NULL,
  `order_date` datetime NOT NULL,
  `sale_id` int(11) NOT NULL,
  `postcode2` varchar(20) NOT NULL,
  `state1` varchar(20) NOT NULL,
  `state2` varchar(20) NOT NULL,
  `company_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_checkout`
--

INSERT INTO `tbl_checkout` (`checkout_id`, `firstname1`, `lastname1`, `firstname2`, `lastname2`, `address1`, `address2`, `phone1`, `email1`, `country1`, `city1`, `phone2`, `email2`, `country2`, `city2`, `province`, `postcode1`, `customer_id`, `payment_option`, `order_date`, `sale_id`, `postcode2`, `state1`, `state2`, `company_name`) VALUES
(1, 'ram', 'shyam', 'ram', 'shyam', 'tak h fahfka fbadf ', 'tak h fahfka fbadf ', '8989898989', 'ram@gmail.com', 'India', 'Nashik', '8989898989', 'ram@gmail.com', 'India', 'Nashik', '', '98909', 4, '', '2020-05-13 22:50:17', 0, '989094', 'Maharashtra', 'Maharashtra', ''),
(2, 'vishal', 'patil', 'vishal', 'patil', 'ABC', 'ABC', '9423587958', 'vp@gmail.com', 'India', 'Nashik', '9423587958', 'vp@gmail.com', 'India', 'Nashik', '', '45230', 5, 'cash', '2020-05-21 10:22:39', 1, '45230', 'Maharashtra', 'Maharashtra', ''),
(3, 'ram', 'shyam', 'ram', 'shyam', 'Plot no. 188, Vaibhav vihar, 104, Kansai Sectio, Ambarnath ( E )', 'Plot no. 188, Vaibhav vihar, 104, Kansai Sectio, Ambarnath ( E )', '08451892018', 'ngk@gmail.com', 'India', 'Nashik', '08451892018', 'ngk@gmail.com', 'India', 'Nashik', '', '42150', 4, 'cash', '2020-05-22 22:43:43', 2, '421501', 'Maharashtra', 'Maharashtra', ''),
(4, 'sam', 'ram', 'sam', 'ram', 'maxico', 'maxico', '8787878787', 'sam@gmail.com', 'India', 'Nashik', '8787878787', 'sam@gmail.com', 'India', 'Nashik', '', '42200', 3, 'cash', '2020-05-23 09:19:36', 2, '422002', 'Maharashtra', 'Maharashtra', ''),
(5, 'sam', 'ram', 'sam', 'ram', 'maxico', 'maxico', '8787878787', 'sam@gmail.com', 'Australia', 'maxico', '8787878787', 'sam@gmail.com', 'Australia', 'Australia', '', '42220', 3, '', '2020-05-23 09:39:31', 0, '422203', 'maxico', 'Australia', ''),
(6, 'sam', 'ram', 'sam', 'ram', 'maxico', 'maxico', '8787878787', 'sam@gmail.com', 'Australia', 'maxico', '8787878787', 'sam@gmail.com', 'Australia', 'Australia', '', '42003', 3, '', '2020-05-23 09:41:05', 0, '42003', 'maxico', 'Australia', ''),
(7, 'sam', 'ram', 'sam', 'ram', 'maxico', 'maxico', '8787878787', 'sam@gmail.com', 'Australia', 'maxico', '8787878787', 'sam@gmail.com', 'Australia', 'Australia', '', '42003', 3, '', '2020-05-23 09:42:25', 0, '42003', 'maxico', 'Australia', ''),
(8, 'ram', 'shyam', 'ram', 'shyam', 'Chandni Chowk , Kothrude, Pune', 'Chandni Chowk , Kothrude, Pune', '08793610587', 'ngk@gmail.com', 'India', 'Pune', '08793610587', 'ngk@gmail.com', 'India', 'India', '', '41103', 4, 'cash', '2020-05-23 10:33:25', 4, '411038', 'Maharashtra', 'India', ''),
(9, 'ram', 'shyam', 'ram', 'shyam', 'abc', 'abc', '9898989898', 'ngk@gmail.com', 'Australia', 'maxico', '9898989898', 'ngk@gmail.com', 'Australia', 'Australia', '', '45612', 4, 'cash', '2020-05-24 17:35:54', 5, '4561230', 'maxico', 'Australia', ''),
(10, 'ram', 'shyam', 'ram', 'shyam', 'maxico', 'maxico', '9898989898', 'ngk@gmail.com', 'Australia', 'maxico', '9898989898', 'ngk@gmail.com', 'Australia', 'Australia', '', '45612', 4, 'cash', '2020-05-24 17:36:40', 6, '456123', 'maxico', 'Australia', ''),
(11, 'sagar', 'marathe', 'sagar', 'marathe', 'Maxico', 'Maxico', '912345678', 'smarathe@gmail.com', 'Australia', 'maxico', '912345678', 'smarathe@gmail.com', 'Australia', 'Australia', '', '45612', 1, 'cash', '2020-05-24 17:45:06', 1, '456123', 'maxico', 'Australia', ''),
(12, 'sameer', 'patil', 'sameer', 'patil', 'aus', 'aus', '9876543120', 'sam1@gmail.com', 'Australia', 'aus', '9876543120', 'sam1@gmail.com', 'Australia', 'Australia', '', '45612', 6, 'cash', '2020-05-30 22:55:38', 2, '4561230', 'abc', 'Australia', ''),
(13, 'ram', 'shyam', 'ram', 'shyam', 'sydney area', 'sydney area', '9898989898', 'ngk@gmail.com', 'Australia', 'sydney', '9898989898', 'ngk@gmail.com', 'Australia', 'Australia', '', '32140', 4, 'cash', '2020-06-06 12:44:46', 9, '321405', 'sydney', 'Australia', ''),
(14, 'ram', 'shyam', 'ram', 'shyam', 'sydney area', 'sydney area', '9898989898', 'ngk@gmail.com', 'Australia', 'sydney', '9898989898', 'ngk@gmail.com', 'Australia', 'Australia', '', '32140', 4, 'cash', '2020-06-06 12:45:08', 10, '321405', 'sydney', 'Australia', ''),
(15, 'Sonu', 'Patil', 'Sonu', 'Patil', 'nashik', 'nashik', '9876543210', 'sonu@gmail.com', 'Australia', 'maxico', '9876543210', 'sonu@gmail.com', 'Australia', 'Australia', '', '42200', 7, 'cash', '2020-06-11 12:09:24', 3, '422003', 'maxico', 'Australia', ''),
(16, 'Sonu', 'Patil', 'Sonu', 'Patil', 'nashik', 'nashik', '9876543210', 'sonu@gmail.com', 'Australia', 'maxico', '9876543210', 'sonu@gmail.com', 'Australia', 'Australia', '', '42200', 7, 'cash', '2020-06-11 12:09:24', 4, '422003', 'maxico', 'Australia', ''),
(17, 'sam', 'ahuja', 'sam', 'ahuja', 'tsst address', 'tsst address', '8885559990', 'samahuja@gmail.com', 'Australia', 'sydney', '8885559990', 'samahuja@gmail.com', 'Australia', 'Australia', '', '32456', 8, 'cash', '2020-06-11 12:10:40', 5, '324567', 'sydney', 'Australia', ''),
(18, 'Sonu', 'Patil', 'Sonu', 'Patil', 'nashik', 'nashik', '9876543210', 'sonu@gmail.com', 'Australia', 'maxi', '9876543210', 'sonu@gmail.com', 'Australia', 'Australia', '', '42200', 7, 'cash', '2020-06-11 12:13:34', 6, '422001', 'maxi', 'Australia', ''),
(19, 'Sonu', 'Patil', 'Sonu', 'Patil', 'erwerwerw', 'erwerwerw', '9876543210', 'sonu@gmail.com', 'Australiawqeqw', 'wqeqe', '9876543210', 'sonu@gmail.com', 'Australiawqeqw', 'Australiawqeqw', '', '41103', 7, 'cash', '2020-07-19 00:06:48', 7, '411033', 'wqeqwe', 'Australiawqeqw', ''),
(20, 'Sonu', 'Patil', 'Sonu', 'Patil', 'wqeqw211dvdsd', 'wqeqw211dvdsd', '9876543210', 'sonu@gmail.com', 'Australia', 'qeqweqw', '9876543210', 'sonu@gmail.com', 'Australiad', 'Australiad', '', '34234', 7, 'cash', '2020-07-19 00:12:48', 8, '34234234', 'sdsada', 'Australiad', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_color`
--

CREATE TABLE `tbl_color` (
  `id` bigint(20) NOT NULL,
  `color_name` varchar(255) DEFAULT NULL,
  `colorcode` varchar(255) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `status_delete` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `message`, `date`) VALUES
(1, 'DHanadhie', 'dfd@jsfds.ocm', 'tyrerew', '2020-07-18 23:17:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` text NOT NULL,
  `billing_address1` varchar(255) NOT NULL,
  `billing_address2` varchar(255) NOT NULL,
  `billing_city` varchar(50) NOT NULL,
  `billing_state` varchar(50) NOT NULL,
  `billing_country` varchar(50) NOT NULL,
  `billing_zip` varchar(255) NOT NULL,
  `shipping_address1` varchar(255) NOT NULL,
  `shipping_address2` varchar(255) NOT NULL,
  `shipping_city` varchar(50) NOT NULL,
  `shipping_state` int(11) NOT NULL,
  `shipping_country` int(11) NOT NULL,
  `shipping_zip` varchar(255) NOT NULL,
  `customer_type` int(11) NOT NULL,
  `tax_id` varchar(255) NOT NULL,
  `year` varchar(5) NOT NULL,
  `credit_card_number` varchar(25) NOT NULL,
  `credit_card_cw` varchar(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `credit_card_type` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `social_networks` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkdin` varchar(255) NOT NULL,
  `googlePlus` varchar(255) NOT NULL,
  `uploadFile` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_by` int(11) NOT NULL DEFAULT 0,
  `modified_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` int(11) NOT NULL,
  `is_member` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `company_name`, `first_name`, `last_name`, `email`, `password`, `phone`, `billing_address1`, `billing_address2`, `billing_city`, `billing_state`, `billing_country`, `billing_zip`, `shipping_address1`, `shipping_address2`, `shipping_city`, `shipping_state`, `shipping_country`, `shipping_zip`, `customer_type`, `tax_id`, `year`, `credit_card_number`, `credit_card_cw`, `month`, `credit_card_type`, `website`, `social_networks`, `facebook`, `twitter`, `linkdin`, `googlePlus`, `uploadFile`, `status`, `created_by`, `modified_by`, `created_date`, `modified_date`, `is_member`) VALUES
(1, '', 'sagar', 'marathe', 'smarathe@gmail.com', 'abc', '912345678', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'active', 0, 1, '2020-05-03 22:12:56', 2020, 0),
(2, '', 'sahil', 'patil', 'sahil@gmail.com', '123', '9876543210', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'active', 0, 0, '2020-05-11 20:11:31', 0, 0),
(3, '', 'sam', 'ram', 'sam@gmail.com', 'sam', '8787878787', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'active', 0, 0, '2020-05-13 22:09:29', 0, 0),
(4, '', 'ram', 'shyam', 'ram@gmail.com', 'ram', '9898989898', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'active', 0, 0, '2020-05-13 22:19:50', 0, 0),
(5, '', 'vishal', 'patil', 'vp@gmail.com', '123', '9423587958', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'active', 0, 0, '2020-05-21 10:18:23', 0, 0),
(6, '', 'sameer', 'patil', 'sam1@gmail.com', '123', '9876543120', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'active', 0, 0, '2020-05-30 22:52:49', 0, 0),
(7, '', 'Sonu', 'Patil', 'sonu@gmail.com', '123', '9876543210', 'm n', '', 'pune', 'maharahshtra', 'india', '', '', '', '', 0, 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'active', 0, 7, '2020-06-11 11:57:14', 2020, 0),
(8, '', 'sam', 'ahuja', 'samahuja@gmail.com', '123', '8885559990', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'active', 0, 0, '2020-06-11 12:09:09', 0, 0),
(9, '', 'samay', 'amey', 'samay@gmail.com', '1234', '7676767676', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'active', 0, 0, '2020-06-13 11:15:02', 0, 0),
(10, '', 'ganesh', 'kardile', 'ganesh.kardile@gmail.com', 'abcd123', '0468780072', '', '', '', '', '', '', '', '', '', 0, 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'active', 0, 0, '2020-06-13 11:17:30', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_distributors`
--

CREATE TABLE `tbl_distributors` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `shopname` text NOT NULL,
  `address` text NOT NULL,
  `taluka` text NOT NULL,
  `contact` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `created_by` text NOT NULL,
  `created_date` date NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` bigint(20) NOT NULL,
  `product_code` varchar(255) DEFAULT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_description` text DEFAULT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_type` int(1) NOT NULL,
  `product_image` varchar(5000) NOT NULL,
  `product_image2` varchar(500) DEFAULT NULL,
  `product_image3` varchar(500) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` varchar(500) NOT NULL,
  `purity` varchar(500) NOT NULL,
  `gross_wt` varchar(500) NOT NULL,
  `stone_wt` varchar(500) NOT NULL,
  `net_wt` varchar(500) NOT NULL,
  `color` varchar(500) NOT NULL,
  `prod_len` varchar(500) NOT NULL,
  `prod_wid` varchar(500) NOT NULL,
  `design` varchar(500) NOT NULL,
  `occassion` varchar(500) NOT NULL,
  `brand` varchar(500) NOT NULL,
  `related_product` varchar(200) DEFAULT NULL,
  `quantity` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `net_amount` varchar(255) NOT NULL,
  `stone_amount` varchar(500) DEFAULT NULL,
  `courier_charge` varchar(500) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `product_for` varchar(500) NOT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `product_code`, `product_name`, `product_description`, `product_price`, `product_type`, `product_image`, `product_image2`, `product_image3`, `category_id`, `sub_category_id`, `purity`, `gross_wt`, `stone_wt`, `net_wt`, `color`, `prod_len`, `prod_wid`, `design`, `occassion`, `brand`, `related_product`, `quantity`, `discount`, `size`, `net_amount`, `stone_amount`, `courier_charge`, `created_date`, `created_by`, `product_for`, `modified_date`, `modified_by`, `status`) VALUES
(1, '255117291787570', 'Crown Head', 'Crown Head optima nails E series', '200,400,500', 2, 'optima_crown_head_nail_.jpg', 'bh-series.jpg', 'bh_slant.jpg', 1, '9', '', '', '', '20', 'black', '23', '56', 'slim', '0', 'Optima', '', '', '', '3,4,5', '200,400,500', NULL, '10', '2020-05-21 09:49:28', 4, 'Horse', NULL, NULL, '1'),
(2, '727314332481434', 'Optima E-Head', 'Optima E-Head', '500,2000,5000', 3, 'e_neck_(1).jpg', 'esl_straight.jpg', 'esl-series.jpg', 1, '9', '', '', '', '10', 'black', '23', '67', 'copper', '0', 'Optima', '1', '', '', 'Small.Medium,Large', '500,2000,5000', NULL, '5', '2020-05-21 09:52:13', 4, 'Horse', NULL, NULL, '0'),
(4, '334667706511455', 'BD APPRON', 'BD Appron', '100', 1, '1.jpg', 'cahps_apron.jpg', '11.jpg', 5, '19', '', '', '', '10', 'black', '100', '100', 'Apron', '0', 'BD', '', '', '', 'Regular', '100', NULL, '5', '2020-05-22 14:47:17', 4, 'Horse', NULL, NULL, '0'),
(5, '272316584762524', 'BD HICKER TOOL WRAP', 'BD HICKER TOOL WRAP', '120', 2, 'bd_hoof_pick.jpg', 'bd_510002-1.jpg', 'trousse-randonneur.jpg', 5, '19', '', '', '', '10', 'green', '200', '200', 'Wrap', '0', 'BD', '', '', '', 'Regular', '120', NULL, '5', '2020-05-22 15:06:15', 4, 'Horse', NULL, NULL, '0'),
(6, '709044146737364', 'BD long slive shirts', 'BD long slive shirts', '290', 2, 'p1000209-2.jpg', 'p1040618-2.jpg', 'p1000209-21.jpg', 5, '19', '', '', '', '10', 'Yellow,Blue', '102', '100', 'Shirt', '0', 'BD', '', '', '', 'Regular', '290', NULL, '2', '2020-05-22 15:08:59', 4, 'Horse', NULL, NULL, '0'),
(7, '739842605051115', 'BD TOOL WRAP', 'BD TOOL WRAP', '20', 2, 'tool_wrap_big.jpg', 'tool_wrap_smaill.jpg', 'tool_wrap_big1.jpg', 5, '19', '', '', '', '10', 'Green', '200', '200', 'Wrap', '0', 'BD', '3,4,5,6', '', '', 'Regular', '20', NULL, '10', '2020-05-22 15:17:41', 4, 'Horse', NULL, NULL, '0'),
(8, '739587277034865', 'BD HOOF PICK', 'BD HOOF PICK', '92', 2, 'bd_hoof_pick.jpg', 'bd_hoof_pick1.jpg', 'bd_hoof_pick2.jpg', 5, '19', '', '', '', '10', 'black', '120', '208', 'Pick', '0', 'BD', '3,4,5,6,7', '', '', 'Regular', '92', NULL, '5', '2020-05-22 15:25:17', 4, 'Horse', NULL, NULL, '1'),
(10, '598711531256312', 'NAIL HEAT', 'NGK NAIL HEAT', '102', 2, 'nail_heat.jpg', 'nail.jpg', 'nail_heat1.jpg', 5, '19', '', '', '', '10', 'Grey', '102', '103', 'Heat', '0', 'NGK', '3,4,5,6,7,8,9', '', '', 'Regular', '102', NULL, '5', '2020-05-22 16:22:25', 4, 'Horse', NULL, NULL, '0'),
(11, '052451156471079', 'NKG TOOL BAG', 'NKG TOOL BAG', '120', 2, 'nkg_tool_bag.jpg', 'tool_bag.jpg', 'nkg_tool_bag1.jpg', 5, '19', '', '', '', '10', 'Grey', '120', '129', 'Bag', '0', 'NGK', '3,4,5,6,7,8,10', '', '', 'Regular', '120', NULL, '5', '2020-05-22 16:35:09', 4, 'Horse', NULL, NULL, '0'),
(12, '898463408991544', 'NGK SAFETY ROP', 'NGK SAFETY ROP', '170', 2, 'img_3140.jpg', 'dscn4621b.jpg', 'nouveau_corde-150x150.jpg', 5, '19', '', '', '', '20', 'Blue/Red', '100', '200', 'Rop', '0', 'NGK', '3,4,5,6,7,8,10,11', '', '', 'Regular', '170', NULL, '5', '2020-05-22 16:43:34', 4, 'Horse', NULL, NULL, '0'),
(13, '215806249885592', 'BODNER BOOK', 'Bodner Book', '10', 2, '38137764_1973390002682919_2871139569556783104_n.jpg', '38137764_1973390002682919_2871139569556783104_n1.jpg', '38137764_1973390002682919_2871139569556783104_n2.jpg', 7, '20', '', '', '', '20', 'White', '230', '290', 'Book', '0', 'NGK', '', '', '', 'Regular', '10', NULL, '5', '2020-05-22 16:50:17', 4, 'Horse', NULL, NULL, '0'),
(14, '186185048824202', 'Crown Head', 'CROWN HEAD', '201,302,405', 1, 'optima_crown_head_nail_.jpg', 'crown_.jpg', 'crown_h.jpg', 1, '9', '', '', '', '20', 'Silver', '123', '143', 'Head', '0', 'Optima', '1,2', '', '', '5,7,8', '201,302,405', NULL, '5', '2020-05-22 22:33:03', 4, 'Horse', NULL, NULL, '0'),
(15, '732617660228193', 'Optima LIGHT DRIVE', 'Optima LIGHT DRIVE', '25,25,30', 1, 'ld_neck.jpg', 'lightdrive_straight.jpg', 'lightdrive-series.jpg', 1, '9', '', '', '', '25', 'Silver', '120', '120', 'Drive', '0', 'Optima', '1,2', '', '', '7,8,9', '25,25,30', NULL, '10', '2020-05-23 10:28:41', 4, 'Horse', NULL, NULL, '0'),
(16, '168165683498292', 'OPTIMA-29 E-SLIM jj', 'Optima Slim', '100,200,500', 3, 'ch_1.jpg', 'ch_straight.jpg', 'ch-5_neck.jpg', 1, '9', '', '', '', '0', 'white', '1', '1', 'Aus', '0', 'NGK', '', '', '', '4,8,9', '100,200,500', NULL, '100', '2020-05-24 16:20:21', 4, 'Horse', NULL, NULL, '0'),
(17, '751903062378316', 'Nipper test', 'test', '0.3,0.4,0.5', 3, 'nailsw.jpg', 'nailsw1.jpg', 'nailsw2.jpg', 2, '10', '', '', '', '0', 'na', '1', '1', 'Aus', '0', 'NGK', '1', '', '', '3,4,5', '0.3,0.4,0.5', NULL, '100', '2020-05-30 22:31:15', 4, 'Horse', NULL, NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales`
--

CREATE TABLE `tbl_sales` (
  `id` int(11) NOT NULL,
  `trans_id` varchar(80) NOT NULL,
  `buyer_name` varchar(100) NOT NULL,
  `cash_discount` int(11) NOT NULL,
  `grand_amount` double NOT NULL,
  `description` varchar(250) NOT NULL,
  `status` enum('active','inactive','processing','delivered') NOT NULL DEFAULT 'active',
  `created_by` int(11) NOT NULL,
  `issue_date` date NOT NULL,
  `due_date` date NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `paymod` varchar(100) NOT NULL,
  `shipped_status` int(11) NOT NULL COMMENT 'orderpace=0,',
  `deliverymode` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sales`
--

INSERT INTO `tbl_sales` (`id`, `trans_id`, `buyer_name`, `cash_discount`, `grand_amount`, `description`, `status`, `created_by`, `issue_date`, `due_date`, `total_quantity`, `paymod`, `shipped_status`, `deliverymode`) VALUES
(1, '0', 'sagar', 0, 92, '', 'processing', 1, '2020-05-24', '0000-00-00', 1, 'cash', 0, NULL),
(2, '0', 'sameer', 0, 120, '', 'processing', 6, '2020-05-30', '0000-00-00', 1, 'cash', 0, NULL),
(3, '0', 'Sonu', 0, 120, '', 'active', 7, '2020-06-11', '0000-00-00', 1, 'cash', 0, NULL),
(4, '0', 'Sonu', 0, 0, '', 'active', 7, '2020-06-11', '0000-00-00', 0, 'cash', 0, NULL),
(5, '0', 'sam', 0, 290, '', 'active', 8, '2020-06-11', '0000-00-00', 1, 'cash', 0, NULL),
(6, '0', 'Sonu', 0, 290, '', 'active', 7, '2020-06-11', '0000-00-00', 1, 'cash', 0, NULL),
(7, '0', 'Sonu', 0, 290, '', 'delivered', 7, '2020-07-19', '0000-00-00', 1, 'cash', 0, NULL),
(8, '0', 'Sonu', 0, 200, '', 'active', 7, '2020-07-19', '0000-00-00', 1, 'cash', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales_detail`
--

CREATE TABLE `tbl_sales_detail` (
  `id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `selling_rate` double NOT NULL,
  `discount` int(2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sales_detail`
--

INSERT INTO `tbl_sales_detail` (`id`, `sale_id`, `product_code`, `selling_rate`, `discount`, `quantity`, `color_id`, `size_id`, `product_price`) VALUES
(1, 1, '739587277034865', 0, 0, 1, 0, 0, 92),
(2, 2, '272316584762524', 0, 0, 1, 0, 0, 120),
(3, 3, '272316584762524', 0, 0, 1, 0, 0, 120),
(4, 5, '709044146737364', 0, 0, 1, 0, 0, 290),
(5, 6, '709044146737364', 0, 0, 1, 0, 0, 290),
(6, 7, '709044146737364', 0, 0, 1, 0, 0, 290),
(7, 8, '272316584762524', 0, 0, 1, 0, 0, 200);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_size`
--

CREATE TABLE `tbl_size` (
  `id` bigint(20) NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `status_delete` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider_images`
--

CREATE TABLE `tbl_slider_images` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider_images`
--

INSERT INTO `tbl_slider_images` (`id`, `name`, `created_by`, `created_date`, `modified_by`, `modified_date`, `status`, `views`) VALUES
(3, 'cover_phot.jpg', 4, '2020-06-14 14:08:08', 0, '0000-00-00 00:00:00', 'active', 0),
(4, 'crown_head_.jpeg', 4, '2020-06-14 14:13:16', 0, '0000-00-00 00:00:00', 'active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `subcat_id` bigint(20) NOT NULL,
  `parent_category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) DEFAULT NULL,
  `image` varchar(500) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`subcat_id`, `parent_category_id`, `subcategory_name`, `image`, `created_by`, `modified_by`, `modified_date`, `created_date`, `status`) VALUES
(7, 0, 'Optima BH', '', 4, NULL, NULL, '2020-05-12 17:18:26', '0'),
(8, 0, 'Optima BH', '', 4, NULL, NULL, '2020-05-12 17:17:43', '0'),
(9, 1, 'Optima BH', '', 4, NULL, NULL, '2020-05-13 17:33:08', '0'),
(10, 2, 'Nipper', 'bd_11002-1.jpg', 4, NULL, NULL, '2020-05-21 08:32:59', '0'),
(11, 2, 'Buffer', '', 4, NULL, NULL, '2020-05-21 08:34:23', '1'),
(12, 2, 'Buffer', '', 4, NULL, NULL, '2020-05-21 08:35:38', '1'),
(13, 2, 'Buffer', 'bd_17004a-1.jpg', 4, NULL, NULL, '2020-05-21 08:37:24', '0'),
(14, 2, 'Knife', 'curvy-nick-knife.jpg', 4, NULL, NULL, '2020-05-21 08:40:51', '0'),
(15, 3, 'Hammer', 'bd_18002-1.jpg', 4, NULL, NULL, '2020-05-21 08:42:59', '0'),
(16, 3, 'Cutter', 'bd_13001-1.jpg', 4, NULL, NULL, '2020-05-21 08:44:45', '0'),
(17, 4, 'Fuller', 'stamp-wooden-handle-fullered-shoes_(2).jpg', 4, NULL, NULL, '2020-05-21 08:46:08', '0'),
(18, 4, 'Stamp', 'stamp-wooden-handle-fullered-shoes.jpg', 4, NULL, NULL, '2020-05-21 08:48:11', '0'),
(19, 5, 'Accessory', '39749447_1364399983662674_1557259496902885376_n.jpg', 4, NULL, NULL, '2020-05-22 13:37:40', '0'),
(20, 7, 'Education', '38137764_1973390002682919_2871139569556783104_n.jpg', 4, NULL, NULL, '2020-05-22 13:41:53', '0'),
(21, 8, 'Hoof care', 'dr_hoof_40x21cm_3-9-16.jpg', 4, NULL, NULL, '2020-05-22 13:43:26', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `id` int(11) NOT NULL,
  `trans_id` varchar(60) NOT NULL,
  `status` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `addistional_charges` varchar(50) DEFAULT NULL,
  `salt` varchar(50) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `wish_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_wishlist`
--

INSERT INTO `tbl_wishlist` (`wish_id`, `user_id`, `product_id`, `product_price`, `created_date`) VALUES
(0, 4, 3, 2421, '2020-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `building` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `secondary_address` text NOT NULL,
  `created_date` datetime NOT NULL,
  `is_Admin` int(11) NOT NULL DEFAULT 0,
  `status` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Error reading data for table db_ngk1.user_detail: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `db_ngk1`.`user_detail`' at line 1

--
-- Indexes for dumped tables
--

--
-- Indexes for table `couriercharge`
--
ALTER TABLE `couriercharge`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  ADD PRIMARY KEY (`spid`);

--
-- Indexes for table `shippingcharge`
--
ALTER TABLE `shippingcharge`
  ADD PRIMARY KEY (`spid`);

--
-- Indexes for table `tblsizeprice`
--
ALTER TABLE `tblsizeprice`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_cart_product`
--
ALTER TABLE `tbl_cart_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  ADD PRIMARY KEY (`checkout_id`);

--
-- Indexes for table `tbl_color`
--
ALTER TABLE `tbl_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_distributors`
--
ALTER TABLE `tbl_distributors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sales_detail`
--
ALTER TABLE `tbl_sales_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider_images`
--
ALTER TABLE `tbl_slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`subcat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `couriercharge`
--
ALTER TABLE `couriercharge`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  MODIFY `spid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shippingcharge`
--
ALTER TABLE `shippingcharge`
  MODIFY `spid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblsizeprice`
--
ALTER TABLE `tblsizeprice`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_cart_product`
--
ALTER TABLE `tbl_cart_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  MODIFY `checkout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_sales_detail`
--
ALTER TABLE `tbl_sales_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_slider_images`
--
ALTER TABLE `tbl_slider_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `subcat_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
