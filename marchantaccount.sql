-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2023 at 10:54 AM
-- Server version: 5.7.40-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onvision_capital`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_address` text COLLATE utf8mb4_unicode_ci,
  `business_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `federal_tax_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `businesss_start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lenght_of_ownership` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_entity` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_of_business` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_sold` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_owner_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_ownership` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_home_address` text COLLATE utf8mb4_unicode_ci,
  `merchant_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_ssn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_home` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_phone_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_owner_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_ownership` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_home_address` text COLLATE utf8mb4_unicode_ci,
  `partner_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_ssn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_home` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partner_phone_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_mortgage_bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_mortgage_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_mortgage_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `software_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_terminal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monthly_credit_card_volumn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avg_monthly_gross_sales_volumn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requested_advance_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `do_you_accept` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_cash_advance_company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `underwrite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature_date_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature_date_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_statements_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `business_name`, `business_date_of_birth`, `business_address`, `business_city`, `business_state`, `business_zip`, `business_phone`, `business_fax`, `federal_tax_id`, `businesss_start_date`, `lenght_of_ownership`, `website`, `business_email`, `type_of_entity`, `type_of_business`, `service_sold`, `merchant_owner_name`, `merchant_title`, `merchant_ownership`, `merchant_home_address`, `merchant_city`, `merchant_state`, `merchant_zip`, `merchant_ssn`, `merchant_date_of_birth`, `merchant_home`, `merchant_phone_no`, `partner_owner_name`, `partner_title`, `partner_ownership`, `partner_home_address`, `partner_city`, `partner_state`, `partner_zip`, `partner_ssn`, `partner_date_of_birth`, `partner_home`, `partner_phone_no`, `business_mortgage_bank`, `business_mortgage_account`, `business_mortgage_phone`, `software_model`, `number_of_terminal`, `monthly_credit_card_volumn`, `avg_monthly_gross_sales_volumn`, `requested_advance_amount`, `do_you_accept`, `current_cash_advance_company`, `balance`, `underwrite`, `signature_one`, `signature_date_one`, `signature_two`, `signature_date_two`, `bank_statements_file`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Barry Nolan', '2017-03-24', 'Labore reprehenderit', 'Hic porro exercitati', 'Qui quasi anim labor', '44739', '14125485685', '8056568', 'Consequatur velit', '2002-12-11', '42', 'https://www.nehuruvelod.net', 'kadaq@mailinator.com', 'Corporation', '[\"Wholesale\",\"Restaurant\",\"Supermarket\"]', 'Dolores explicabo V', 'Akeem Valdez', 'Molestiae ipsam corr', '14', 'Inventore iste asper', 'Quidem fugiat tempor', 'Dolorum ut voluptate', '87419', 'Dolore dolorum repud', '1983-09-24', 'Tempor voluptas prae', '60', 'Macon Garcia', 'Inventore voluptas q', '6', 'Occaecat sit dolor', 'Qui veritatis itaque', 'Excepturi Nam conseq', '66275', 'Unde sint eum aliqui', '1994-06-26', 'Harum sit obcaecati', '17', 'Deserunt autem error', 'Mollit in voluptas e', '+1 (553) 906-2212', 'Beatae et ut dolore', '14', '12', '2', 'Sit error maxime au', '[\"Amex\",\"Discover\",\"Debit\",\"EBT\"]', 'Harrington Blankenship Traders', 'Ut assumenda maxime', 'Facilis deleniti nem', 'uploads/signatures-one/1-.png', '1982-03-26', 'uploads/signatures-two/1-.png', '2015-10-05', NULL, NULL, '2022-09-14 22:50:29', '2022-09-14 22:50:29'),
(2, 'Lila Montgomery', '28-Jun-1976', 'Nulla incidunt amet', 'Ipsa dolor sunt exc', 'Dolor maiores earum', '34315', '8801822252198', '9836589855', 'Quia itaque quae qui', '2008-10-04', '6', 'https://www.debyzufubysir.me', 'qocy@mailinator.com', 'Corporation', '[\"Retail MO\\/TO\",\"Restaurant\",\"Supermarket\",\"Other\"]', 'Ad voluptatum offici', 'Tasha Lancaster', 'Quasi rerum aut sed', '81', 'Ad est sed et tenet', 'Error veniam commod', 'Quae reprehenderit', '42107', 'Explicabo Aut nulla', '2009-07-05', 'Nulla soluta aut eum', '6525685954585', 'Pascale Huffman', 'Ipsa sint quam dui', '36', 'Repudiandae dolor no', 'Et et deserunt nihil', 'Voluptatem proident', '76558', 'Et fugit consequat', '1996-11-11', 'Enim assumenda anim', '25323223223', 'Tempore magnam perf', 'Ut ut vero est exer', '+1 (519) 419-9134', 'Quasi ea quis odit n', '117', '12', '1', 'Deserunt ut quasi at', '[\"Visa\\/MasterCard\",\"Amex\",\"Discover\",\"EBT\"]', 'Mcclain and Tyson Plc', 'Mollitia rerum in al', 'Reiciendis delectus', 'uploads/signatures-one/2-.png', '1972-04-09', 'uploads/signatures-two/2-.png', '1972-01-02', NULL, NULL, '2022-09-15 00:42:41', '2022-09-15 00:42:41'),
(3, 'Lila Montgomery', '28-Jun-1976', 'Nulla incidunt amet', 'Ipsa dolor sunt exc', 'Dolor maiores earum', '34315', '8801822252198', '9836589855', 'Quia itaque quae qui', '2008-10-04', '6', 'https://www.debyzufubysir.me', 'qocy@mailinator.com', 'Corporation', '[\"Retail MO\\/TO\",\"Restaurant\",\"Supermarket\",\"Other\"]', 'Ad voluptatum offici', 'Tasha Lancaster', 'Quasi rerum aut sed', '81', 'Ad est sed et tenet', 'Error veniam commod', 'Quae reprehenderit', '42107', 'Explicabo Aut nulla', '2009-07-05', 'Nulla soluta aut eum', '6525685954585', 'Pascale Huffman', 'Ipsa sint quam dui', '36', 'Repudiandae dolor no', 'Et et deserunt nihil', 'Voluptatem proident', '76558', 'Et fugit consequat', '1996-11-11', 'Enim assumenda anim', '25323223223', 'Labore est placeat', 'Consequat Ut perspi', '+1 (198) 816-4536', 'Accusantium explicab', '525', '4', '5', 'Sit sit omnis corpo', '[\"Visa\\/MasterCard\",\"Discover\",\"Debit\"]', 'Stone and Eaton LLC', 'Autem id sed quia a', 'Deserunt numquam vit', 'uploads/signatures-one/3-.png', '2018-11-19', 'uploads/signatures-two/3-.png', '2001-05-19', NULL, NULL, '2022-09-15 00:44:00', '2022-09-15 00:44:00'),
(4, 'hellow', 'Onvision Capital Corp', 'f4443', 'ghg', 'hg', '454', '43454545433', '434', '434343', '2022-09-29', '32', 'efe', 'hezi@onvisioncapital.com', 'LLC', '[\"Wholesale\"]', 'fdfr', 'ggfff', 'fgfdgfg', '100', 'fgfff\r\n         hghghg', 'ffgf', 'tr', '17665', '345345688', '2022-06-08', '56545676543', '45454545435', 'dfgfhf', 'gfff', '50', 'fgfgf', 'fgfgf', 'yt', '22345', '556678987', '2022-09-27', '55555566666', '55545434566', 'gfhgg', 'bvbb', '55544456789', '45454', '45', '45454', '54545', '4545', '[\"Amex\"]', 'fgfgffhf', '6454', 'fgfgg', 'uploads/signatures-one/4-.png', '2022-09-29', 'uploads/signatures-two/4-.png', '2022-09-11', NULL, NULL, '2022-10-01 04:13:19', '2022-10-01 04:13:19'),
(5, 'Emily Gates', '04-Dec-2018', 'Ea consequatur Quos', 'Eaque magna quia vol', 'Itaque fugit sed re', '75409', '928898999999', '52', 'Repellendus Quas co', '2000-05-15', '62', 'https://www.cotybeboh.org.uk', 'qulutidy@mailinator.com', 'Corporation', '[\"Wholesale\",\"Restaurant\",\"Supermarket\",\"Service\",\"Other\"]', 'Amet non et id aut', 'Dane Gillespie', 'Commodi molestiae at', '87', 'Sed aut amet esse e', 'Esse esse numquam', 'Alias dolor deserunt', '57909', 'Exercitationem ad te', '2009-02-17', 'Sit facilis velit a', '928898999999', 'Wyatt Bryant', 'Corporis voluptatum', '88', 'Aut at ut nobis blan', 'Natus molestias earu', 'Consectetur est to', '86753', 'Culpa labore soluta', '1992-07-22', 'Aut tenetur sit labo', '928898999999', 'Minima beatae libero', 'Error sit laboriosam', '+1 (499) 248-9464', 'Magnam nostrum et ar', '767', '4', '9', 'Architecto quia ut e', '[\"Visa\\/MasterCard\",\"Discover\",\"EBT\"]', 'Briggs and Fischer Inc', 'Sequi voluptate susc', 'Eu consequat Ut ass', 'uploads/signatures-one/5-.png', '2008-09-10', 'uploads/signatures-two/5-.png', '2022-01-04', NULL, NULL, '2022-10-01 10:25:20', '2022-10-01 10:25:20'),
(6, 'A+ Smoodees Inc.', 'A+ Smoodees', '4080 Living Arts Dr #609', 'Mississauga', 'ON', 'L5B 4N3', '6479993884', NULL, '767458128 RC0001', '2016-05-23', NULL, NULL, 'achievafitandwell@gmail.com', 'Corporation', 'null', 'Smoothie Production and Distribution', 'Anthony Pereira', 'Owner', '100', '4080 Living Arts Dr #609', 'Mississauga', 'ON', 'L5B 4N3', '494506140', '2022-10-31', NULL, '6479993884', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null', '50K', '50K', NULL, 'uploads/signatures-one/6-.png', '2022-10-31', NULL, NULL, 'uploads/bank-statement/6360353e6d813.pdf', NULL, '2022-11-01 03:51:10', '2022-11-01 03:51:10'),
(7, 'Caregivers Homecare', 'Caregivers Homecare Agency', '611 Chartiers Ave', 'McKees Rocks', 'PA', '15136', '4129239322', NULL, '833711179', '2019-03-28', NULL, NULL, 'info@caregivershomecareagency.com', NULL, 'null', 'Healthcare', 'Lois woods', 'Owner', '100', '116 cutler street', 'McKees Rocks', 'PA', '15136', '205643740', '1985-03-15', NULL, '4129239322', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL, 'uploads/signatures-one/7-.png', '2022-11-15', NULL, NULL, NULL, NULL, '2022-11-15 20:02:02', '2022-11-15 20:02:02'),
(8, 'Caregivers Homecare', 'Caregivers Homecare Agency', '611 Chartiers Ave', 'McKees Rocks', 'PA', '15136', '4129239322', NULL, '833711179', '2019-03-28', NULL, NULL, 'info@caregivershomecareagency.com', NULL, 'null', 'Healthcare', 'Lois woods', 'Owner', '100', '116 cutler street', 'McKees Rocks', 'PA', '15136', '205643740', '1985-03-15', NULL, '4129239322', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL, 'uploads/signatures-one/8-.png', '2022-11-15', NULL, NULL, NULL, NULL, '2022-11-15 20:02:03', '2022-11-15 20:02:03'),
(9, 'Sunupglobal.com', 'Sunupglobal.com', 'Notun Bazar, Gulshan, Dhaka 1212', 'Dhaka', 'Dhaka', '1212', '01767633380', NULL, '444544', '2022-11-16', NULL, NULL, 'sunupcorporation.bd@gmail.com', 'Sole Proprietorship', 'null', 'sdfsdf', 'Mohammad Sohidul Islam', 'sdfsdf', '55', 'Notun Bazar, Gulshan, Dhaka 1212', 'Dhaka', 'Dhaka', '1212', 'wee', '2022-11-16', NULL, '01767633380', 'sdsf', 'fff', '555', 'Notun Bazar, Gulshan, Dhaka 1212', 'Dhaka', 'Dhaka', '1212', 'sdfsdf', '2022-11-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null', 'sdfsdf', '555', NULL, 'uploads/signatures-one/9-.png', '2022-11-16', 'uploads/signatures-two/9-.png', '2022-11-16', 'uploads/bank-statement/6374af4669e14.png', NULL, '2022-11-16 16:37:10', '2022-11-16 16:37:10'),
(10, 'Scooters \'N Chairs, Inc', 'Scooters \'N Chairs', '3340 Peachtree Road\r\nSuite 1800', 'Atlanta', 'GA', '30326', '8776599493', NULL, '830542073', '2018-05-15', NULL, NULL, 'scott@scootersnchairs.com', 'Corporation', 'null', 'Mobility Scooters + Electric Wheelchairs', 'Scott Zabriskie', 'CEO', '100', '601 Willow Creek Ln', 'Woodstock', 'GA', '30188', '256552397', '1985-11-05', NULL, '8776599493', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL, 'uploads/signatures-one/10-.png', '2022-11-20', NULL, NULL, 'uploads/bank-statement/637a63643aa08.pdf', NULL, '2022-11-21 00:27:00', '2022-11-21 00:27:00'),
(11, 'Al dias electric', 'Al dias electric', '34 base lodge lane', 'Swansea', 'Mass', '02777', '5088894265', NULL, '04-3402822', '1993-08-01', NULL, NULL, 'odette06@comcast.net', 'Sole Proprietorship', 'null', 'Electrical contractor', 'Albert Dias', 'Owner', '100', '34 base lodge lane', 'Swansea', 'Mass', '02777', '011520394', '1968-10-01', NULL, '5088894265', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null', 'Fundmate', '9000', NULL, 'uploads/signatures-one/11-.png', '2022-12-06', NULL, NULL, 'uploads/bank-statement/638f8bdc3d679.pdf', NULL, '2022-12-07 01:37:16', '2022-12-07 01:37:16'),
(12, 'Al dias electric', 'Al dias', '34 base lodge lane', 'Swansea', 'Massachusetts', '02777', '5088894265', NULL, '04-3402822', '1993-08-06', NULL, NULL, 'odette06@comcast.net', 'Sole Proprietorship', 'null', 'Electrical contractor', 'Albert Dias', 'Owner', '100', '34 base lodge lane', 'Swansea', 'Mass', '02777', '011520394', '1968-10-06', NULL, '5088894265', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null', 'Fundmate', '9000', NULL, 'uploads/signatures-one/12-.png', '2022-12-06', NULL, NULL, 'uploads/bank-statement/638fbff1e2971.pdf', NULL, '2022-12-07 05:19:29', '2022-12-07 05:19:29'),
(13, 'Onvision Capital Corp', 'Onvision Capital Corp', '1214 Bergen Ave', 'Brooklyn', 'NY', '11234', '3059901185', NULL, '434343', '2023-01-17', NULL, NULL, 'hezi@onvisioncapital.com', 'Sole Proprietorship', 'null', 'fdfr', 'Yecheskel Amrami', 'fgfdgfg1', '1', '141-08 68th Dr', 'Flushing', 'NY', '11367', '11', '2023-01-03', NULL, '3476242500', 'dfgfhf', 'fasdfsa', '22', 'fdsafsa', 'Flushing', 'NY', '11367', '22', '2023-01-03', NULL, '3476242500', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null', 'fgfgffhf', '100', NULL, 'uploads/signatures-one/13-.png', '2023-01-03', 'uploads/signatures-two/13-.png', '2023-01-03', 'uploads/bank-statement/63b4760c8b769.png', NULL, '2023-01-04 01:38:04', '2023-01-04 01:38:04'),
(14, 'YBM Enterprises, LLC', 'YBM Enterprises, LLC', '141-08 68th Dr', 'Flushing', 'NY', '11367', '3476242500', NULL, '2323', '2023-01-20', NULL, NULL, 'ybmdeals26@gmail.com', 'Corporation', 'null', '3223', 'Yecheskel Amrami', 'fdsfsf', '23', '1214 Bergen Ave', 'Brooklyn', 'NY', '11234', '22', '2023-01-03', NULL, '3059901185', 'dfgfhf', 'gfff', '54', 'sdfsf', 'sdfsf', 'NY', '11367', '544', '2023-01-03', NULL, '3476242500', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null', '3443', '434', NULL, 'uploads/signatures-one/14-.png', '2023-01-03', 'uploads/signatures-two/14-.png', '2023-01-03', 'uploads/bank-statement/63b47bc61e51d.png', NULL, '2023-01-04 02:02:30', '2023-01-04 02:02:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
