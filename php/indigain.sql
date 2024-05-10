-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 05:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indigain`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `uid` int(100) NOT NULL,
  `product_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`name`, `uid`, `product_id`) VALUES
('AVVATAR micronized creatine monohydrate (100g)', 1, 8),
('AVVATAR micronized creatine monohydrate (100g)', 2, 8),
('AVVATAR micronized creatine monohydrate (100g)', 3, 8),
('NAKPRO creatine monohydrate (100g)', 4, 9),
('MUSCLE BLAZE CREAMP creatine monohydrate (100g)', 5, 10),
('NAKPRO creatine monohydrate (100g)', 6, 9),
('MUSCLE BLAZE CREAMP creatine monohydrate (100g)', 7, 10),
('GNC PRO performance pre-workout (500g)', 8, 3),
('MUSCLE ASYLUM F9 pre-workout (500g)', 9, 1),
('BIG MUSCLES NUTRITION freak (500g)', 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(0, 'pre workout'),
(1, 'creatine'),
(2, 'whey protein'),
(3, 'bcaa'),
(4, 'weight gainer');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `state` text NOT NULL,
  `pin_code` varchar(6) NOT NULL,
  `city` text NOT NULL,
  `contact_number` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `email`, `state`, `pin_code`, `city`, `contact_number`) VALUES
(1, 'nikhil ', 'gogoi', 'nikhilgogoi123@gmail.com', 'assam', '786188', 'lakhimpur', '1234567890'),
(2, 'paras ', 'rai', 'parasrai234@gmail.com', 'assam', '786189', 'sadiya', '9908964789'),
(3, 'dominik', 'toretto', 'dominik456@gmail.com', 'meghalaya', '793001', 'shillong', '6787658909');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `order_number` int(100) NOT NULL,
  `order_amount` double NOT NULL,
  `quantity` int(50) NOT NULL,
  `products` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `weight` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_date`, `order_number`, `order_amount`, `quantity`, `products`, `weight`) VALUES
('2024-05-10', 1, 5000, 3, '0,0,1', '500,1000,2000'),
('2024-05-10', 2, 2000, 1, '3', '3000'),
('2024-05-10', 3, 4000, 2, '1,2', '1000,2000');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(100) NOT NULL,
  `bill_no` int(100) NOT NULL,
  `order_no` int(100) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `bill_no`, `order_no`, `amount`) VALUES
(1, 1, 1, 5000),
(2, 2, 2, 2000),
(3, 3, 3, 4000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `price` double NOT NULL,
  `name` text NOT NULL,
  `category` int(50) NOT NULL,
  `image` text NOT NULL,
  `cross_price` double DEFAULT NULL,
  `description` text NOT NULL,
  `stock` double NOT NULL,
  `weight` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `price`, `name`, `category`, `image`, `cross_price`, `description`, `stock`, `weight`) VALUES
(1, 1249, 'MUSCLE ASYLUM F9 pre-workout ', 0, 'assets/preworkout/WhatsApp Image 2024-04-30 at 2.30.02 PM.jpeg', 1599, '100% transparent ingredients mean no proprietary blends. Take before your workout for sustained energy and endurance to help achieve your fitness goals.', 50, '500,1000'),
(2, 1149, 'BIG MUSCLES NUTRITION freak ', 0, 'assets/preworkout/WhatsApp Image 2024-04-30 at 2.30.26 PM.jpeg', 1499, 'Fuel your workouts with a surge of clean energy to power through even the most intense training sessions.', 50, '500,1000'),
(3, 1249, 'GNC PRO performance pre-workout ', 0, 'assets/preworkout/WhatsApp Image 2024-04-30 at 2.31.01 PM.jpeg', 1499, 'GNC pro performance pre-workout contains L-Arginine and L-Citrulline to boost blood and oxygen flow towards muscles. They help maintain a constant supply of high energy and endurance to push beyond your usual training targets.', 50, '500,1000'),
(4, 1349, 'BIG MUSCLE NUTRITION Karnage ', 0, 'assets/preworkout/WhatsApp Image 2024-04-30 at 2.31.44 PM.jpeg', 1499, 'Fuel your workouts with a surge of clean energy to power through even the most intense training sessions. Stay laser-focused and dialed in on your workout, minimizing distractions and maximizing productivity.', 50, '500,1000'),
(5, 1599, 'MUSCLE BLAZE pre-workout extreme ', 0, 'assets/preworkout/WhatsApp Image 2024-04-30 at 2.32.21 PM.jpeg', 2099, 'Created to unleash the Xtreme fire in you.  This pre-workout contains caffeine and theanine for instant and sustained release of energy to keep you focused and active.', 50, '500,1000'),
(6, 1049, 'WELLCORE warrior pre-workout ', 0, 'assets/preworkout/WhatsApp Image 2024-04-30 at 2.33.01 PM.jpeg', 1399, 'Strongest non-caffeinated pre-workout with citrulline complex and other ingredients. This pre-workout supplement is designed to provide insane pumps, increased strength and power, enhanced mind-muscle synergy.', 50, '500,1000'),
(7, 499, 'WELLCORE creatine monohydrate ', 1, 'assets/creatine/WhatsApp Image 2024-04-30 at 2.16.05 PM.jpeg', NULL, 'Wellcore creatine monohydrate has been formulated using micronization technology. This advanced formulation allows rapid realease of creatine to the muscles, thereby improving its utilization.', 200, '100,500'),
(8, 499, 'AVVATAR micronized creatine monohydrate ', 1, 'assets/creatine/WhatsApp Image 2024-04-30 at 2.16.51 PM.jpeg', NULL, 'our creatine monohydrate is finely micronized, ensuring quick absorption and maximum effectiveness.', 200, '100,500'),
(9, 399, 'NAKPRO creatine monohydrate ', 1, 'assets/creatine/WhatsApp Image 2024-04-30 at 2.17.30 PM.jpeg', NULL, 'Nakpro creatine monohydrate is the most potent, unadulterated and finest creatine powder helps in improving strength, power and allows to gain lean muscle mass.', 200, '100,500'),
(10, 699, 'MUSCLE BLAZE CREAMP creatine monohydrate ', 1, 'assets/creatine/WhatsApp Image 2024-04-30 at 2.18.17 PM.jpeg', NULL, 'CreAMP creatine monohydrate is powered by MB CreAbsorb which ensures higher bioavailability of creatine monohydrate in the body.', 200, '100,500'),
(11, 356, 'NUTRABAY creatine ', 1, 'assets/creatine/WhatsApp Image 2024-04-30 at 2.19.11 PM.jpeg', NULL, 'Nutrabay creatine is 100% pure creatine, vegan friendly with no artificial colour, no fillers, no added sugar and no banned substances. Gluten free, Diary free, Steroid free, Tested for purity.', 200, '100,500'),
(12, 499, 'BIG MUSCLES creatine ', 1, 'assets/creatine/WhatsApp Image 2024-04-30 at 2.19.47 PM.jpeg', NULL, 'Creatine serves as an energy source for the muscle cells by promoting greater ATP production. Helps increase strength and reduce fatigue, allowing you to lift heavier, run further faster and improve overall physical performance.', 200, '100,500'),
(13, 2349, 'BIG MUSCLES gold whey ', 2, 'assets/whey/WhatsApp Image 2024-04-30 at 2.22.51 PM.jpeg', 2599, 'it delivers 25g protein , 5.5g branched amino acids(BCAA), 4g glutamic acid and ZERO sugar per serving. 100% pure ingredients and advanced processing ensures the nutrients of the whey protein are preserved to its best form.', 500, '1000,2000,3000,4000,5000,6000,7000,8000,9000,10000'),
(14, 1989, 'optimum nutrition gold standard whey ', 2, 'assets/whey/WhatsApp Image 2024-04-30 at 2.23.24 PM.jpeg', 2199, '24g blended protein consisting of whey protein isolate, 5 grams of naturally occuring BCAA\'s and over 4 grams of glutamine and glutamic acid in each serving, which helps to build lean and strong muscles: gluten free.', 500, '1000,2000,3000,4000,5000,6000,7000,8000,9000,10000'),
(15, 2549, 'MUSCLE BLAZE raw whey protein ', 2, 'assets/whey/WhatsApp Image 2024-04-30 at 2.23.56 PM.jpeg', 2999, 'Get 24g protein, 5.2g of naturally occuring BCAA\'s, 11.2g EAA\'s as well as digestive enzymes in every 34g of serving of MuscleBlaze raw whey protein concentrate 70% for effective gain and synthesis.', 500, '1000,2000,3000,4000,5000,6000,7000,8000,9000,10000'),
(16, 2159, 'avvatar whey protein ', 2, 'assets/whey/WhatsApp Image 2024-04-30 at 2.24.25 PM.jpeg', 2599, 'Premium blend of whey protein concentrate and isolate, packed with 27g of freshest whey protein per serving for building strength and enabling muscle growth.', 500, '1000,2000,3000,4000,5000,6000,7000,8000,9000,10000'),
(17, 1799, 'GNC PRO 100% whey ', 2, 'assets/whey/WhatsApp Image 2024-04-30 at 2.24.57 PM.jpeg', 2099, 'GNC pro performance whey is 100% pure to offer excellent quality and potency for improving your fitness performance. get 24g protein, 5.5g BCAA per serving.', 500, '1000,2000,3000,4000,5000,6000,7000,8000,9000,10000'),
(18, 1699, 'FUEL ONE whey max ', 2, 'assets/whey/WhatsApp Image 2024-04-30 at 2.25.24 PM.jpeg', 1899, 'Fuel one whey protein is packed with 24g of high quality protein, 5.29g of BCAA\'s and 11.8g of EAA\'s, its your perfect post- workout partner, aiding in faster recovery, muscle maintenance & preventing breakdown.', 500, '1000,2000,3000,4000,5000,6000,7000,8000,9000,10000'),
(19, 1499, 'XTEND BCAA ', 3, 'assets/bcaa/WhatsApp Image 2024-04-30 at 2.11.43 PM.jpeg', 1999, 'Our carefully crafted formula ensures quick absorption, allowing the BCAA\'s to rapidly reach your muscles and kickstart for the recovery process, making it excellent choice for pre, intra or post-workout supplementation.', 100, '1000,2000,3000,4000,5000,6000,7000,8000,9000,10000'),
(20, 1799, 'GNC Gold Series BCAA ', 3, 'assets/bcaa/WhatsApp Image 2024-04-30 at 2.12.20 PM.jpeg', 2499, 'GNC\'s BCAA supplement features instantized BCAA\'s with 3.5g leucine, 1.75g isoleucine and 1.75g valine in the ratio 2:1:1, which is perfectly balanced combination to help build lean muscles and boost immunity.', 100, '1000,2000,3000,4000,5000,6000,7000,8000,9000,10000'),
(21, 1599, 'NUTRABAY Gold BCAA', 3, 'assets/bcaa/WhatsApp Image 2024-04-30 at 2.13.18 PM.jpeg', 1899, 'BCAA\'s are known to decrease muscle damage, which helps reduce the length and severity of muscle cramps. Infused with electrolytes to replenish the lost minerals during sweating, rehydrate the body and help reduce fatigue.', 100, '1000,2000,3000,4000,5000,6000,7000,8000,9000,10000'),
(22, 1649, 'BIG MUSCLES NUTRITION BCAA ', 3, 'assets/bcaa/WhatsApp Image 2024-04-30 at 2.13.51 PM.jpeg', 1899, '5g of BCAA in the 2:1:1 ratio: comprises of three crucial amino acids: L-Leucine, L-Isoleucine, and L-Valine, that helps in muscle growth and muscle protection.', 100, '1000,2000,3000,4000,5000,6000,7000,8000,9000,10000'),
(23, 1999, 'MUSCLE BLAZE BCAA pro ', 3, 'assets/bcaa/WhatsApp Image 2024-04-30 at 2.14.20 PM.jpeg', 2099, 'The new MuscleBlaze BCAA pro+ electrolytes will maximize your gains without breaking your wallet.\r\n100% vegan BCAA\'s with 5g of BCAA\'s in each serving.', 100, '1000,2000,3000,4000,5000,6000,7000,8000,9000,10000'),
(24, 1756, 'Optimum nutrition BCAA', 3, 'assets/bcaa/WhatsApp Image 2024-04-30 at 2.15.05 PM.jpeg', 1999, 'Instantized ON BCAA 5000 provides 5g branched chain amino acids in each8.8g serving, in the preferred 2:1:1 ratio of Leucine to Isoleucine and Valine, to support muscle recovery and endurance.', 100, '1000,2000,3000,4000,5000,6000,7000,8000,9000,10000'),
(25, 1299, 'NUTRELA weight gainer ', 4, 'assets/weight/WhatsApp Image 2024-04-30 at 2.26.14 PM.jpeg', 1599, 'With each serving size of 30g, you get 20g protein,8g fat, 66.8g carbs along with nutritious enrichment extracted from 16 herbs.', 300, '1000,2000,3000,4000,5000,6000,7000,8000,9000,10000'),
(26, 1697, 'BOLT mass gainer ', 4, 'assets/weight/WhatsApp Image 2024-04-30 at 2.26.35 PM.jpeg', 1799, 'Bolt mass gainer contains 1g dose of creatine monohydrate to help you increase strength and regenerate ATP, Delivers 25g protein, 412 calories per serving.', 300, '1000,2000,3000,4000,5000,6000,7000,8000,9000,10000'),
(27, 1899, 'BIG MUSCLES NUTRITION real mass gainer', 4, 'assets/weight/WhatsApp Image 2024-04-30 at 2.27.02 PM.jpeg', 1999, '50g(approx) of protein from 5 sources, 160g of good complex carbs, 1000 calories, 7500mg of BCAA\'s along with 3000mg of glutamine per 3 serving.', 300, '1000,2000,3000,4000,5000,6000,7000,8000,9000,10000'),
(28, 1899, 'OPTIMUM NUTRITION serious mass ', 4, 'assets/weight/WhatsApp Image 2024-04-30 at 2.27.32 PM.jpeg', 1999, 'Suitable for vegetarians, optimum nutrition serious mass is a calorie weight gainer which is also high in protein and when taken over time with regular resistance exercise and a balanced diet can help you gain mass and muscle.', 300, '1000,2000,3000,4000,5000,6000,7000,8000,9000,10000'),
(29, 2159, 'MUSCLE BLAZE weight gainer ', 4, 'assets/weight/WhatsApp Image 2024-04-30 at 2.28.02 PM.jpeg', 2599, 'Packed with a whopping 1422 kcal in three servings, MuscleBlaze weight gainer ignites your weight gain journey so you achieve your bulking goals.', 300, '1000,2000,3000,4000,5000,6000,7000,8000,9000,10000'),
(30, 1659, 'GNC PRO weight gainer ', 4, 'assets/weight/WhatsApp Image 2024-04-30 at 2.28.44 PM.jpeg', 1899, 'GNC pro performance weight gainer(6 servings) helps build a good muscular profile without any flabs. Each serving provides 2200 calories, 73g protein, and 440g carbs.', 300, '1000,2000,3000,4000,5000,6000,7000,8000,9000,10000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'shahill paul', 'shahill77'),
(2, 'ankit saikia', 'ankit11'),
(3, 'riki thapa', 'riki99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_number`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_number` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
