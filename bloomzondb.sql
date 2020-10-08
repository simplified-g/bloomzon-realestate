-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2020 at 01:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloomzon_db`
--
CREATE DATABASE IF NOT EXISTS `bloomzon_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bloomzon_db`;

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(7) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(70) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `website` varchar(70) NOT NULL,
  `activation_code` text DEFAULT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT 0,
  `pwd_reset_code` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `email`, `password`, `phone`, `avatar`, `website`, `activation_code`, `is_activated`, `pwd_reset_code`) VALUES
(0, 'Free', 'free@gmail.com', '99a757f0acc1fa90777fc4f4b90c747b0f32b21c', '08089898989', 'WhatsApp Image 2020-09-24 at 5.56.34 PM.jpeg', '', 'be5f35a6cb9e68234cb13b472c49f588', 1, NULL),
(1, 'Chima Woke', 'Osilem@gmail.com', 'ffa9fa72fb7923b5b114ed527872fcc75f518be8', '07058555101', '390.jpg', 'Www.agentjamie.com', '', 1, NULL),
(7, 'Leslie Woke', 'paz@gmail.com', 'ffa9fa72fb7923b5b114ed527872fcc75f518be8', '09031423423', '', '', '', 1, NULL),
(8, 'Chima Woke', 'Gohome.ng@gmail.com', 'd40eecb0efebe03b9b546d305230b0a66c664447', '07058555101', 'gohome simple xmas.jpg', 'Http://gohome.ng/', '', 1, NULL),
(9, 'Jeffrey Ukutegbe', 'jeffukus@gmail.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '0802517006', 'Snapchat-1091231946.jpg', '', '', 1, NULL),
(10, 'Emmanuel', 'henrycrusoe@yahoo.com', '586b64317c80c22c63a854f02e92e9d9ca9ecba5', '08039163259', '', '', '', 1, NULL),
(11, 'Sqt Web', 'sqt@sqtwebsolutions.com', 'f876c4857ab83ef1d7a19203d21bf653ab5a57ff', '08012345678', 'images for campaign 3.jpg', 'www.sqtwebsolutions.com', '', 1, NULL),
(12, 'Salawu', 'salawudeenjamo@gmail.com', '7a8a1553fde78cc568f099b56e3b28801d88dcb8', '08165624531', '', '', '', 1, NULL),
(14, 'Anthony Ukutegbe', 'tynodesignz@gmail.com', '95474156d4f0aba8ad255634efecab3b89062d11', '08103099408', '', '', '', 1, NULL),
(15, 'Mark', 'mark@live.com', 'ffa9fa72fb7923b5b114ed527872fcc75f518be8', '09022212345', '', '', '', 1, NULL),
(16, 'joe', 'joe@gmail.com', 'joe@gmail.com', '08025170061', '', '', '', 1, NULL),
(17, 'John Doe', 'john@doe.com', 'fd9c796f4269b3484f9ef436627d0d1cb35071c5', '08025170061', '', 'www.gohomme.ng', '', 1, NULL),
(18, 'Jane Doe', 'jane@doe.com', '8a8deed44623d4c44268c26652d80945851c4f7f', '08025170061', 'Snapchat-1091231946.jpg', '', '', 1, NULL),
(19, 'Yomi Babalola', 'yomexng@yahoo.com', '1a1863ab360c392b42ba4777118d41e24aa25fdc', '08037769819', '', '', '', 1, NULL),
(20, 'Obi Iloabachie', 'obiezeiloabachie@gmail.com', '7038abfd4477d3c16f4d87ff264d79585b6515b1', '08065622146', '', '', '', 1, NULL),
(21, 'Francis Aladi', 'aladinho99@gmail.com', '2a9b2c3790b759b551f0222ebbe3e9e650c56aad', '08068069104', '', '', '', 1, NULL),
(22, 'Becca Mike', 'mikesbecca79@gmail.com', '4adbc7ddaac7d5eea59d0ed1d134d7c4f1e66381', '08054000984', '', '', '', 1, NULL),
(23, 'Houandinou Peace Kehwe', 'missval576@gmail.com', 'fb0bf4ab8ea4b418ff618ecf095eca286743404e', '08170721249', '', '', '', 1, NULL),
(24, 'Covenant Homes', 'infocovenanthomes@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '07086413992', '', '', '', 1, NULL),
(25, 'Miriam Washington', 'Shortstaydeals@gmail.com', '574f603a22ef27ed9d77caa01c0d2799b531a3c9', '08030674466', '', '', '', 1, NULL),
(26, 'Dafe George', 'dafegeorge19@gmail.com', 'f876c4857ab83ef1d7a19203d21bf653ab5a57ff', '07065738231', '', '', '', 1, NULL),
(27, 'Ose Lady', 'support@sqtwebsolutions.com', '7c222fb2927d828af22f592134e8932480637c0d', '08137201070', '2347034695805_status_f1ffab1a362b407ea0e0aabe5a9b40c5.jpg', 'sqtwebsolutions.com', '', 1, NULL),
(28, 'Holler', 'noreply@gohome.ng', 'd40eecb0efebe03b9b546d305230b0a66c664447', '09024699096', '', '', '', 1, NULL),
(29, 'David', 'jemilohun4real@gmail.com', 'ac70b96e998edb0745c2631d13ea9a8feddb2f0e', '07032931917', '', 'www.revolutionplusproperty.com', '', 1, NULL),
(30, 'Jocency Realty', 'johnsonpresh@gmail.com', 'ec44361985ad381849beea0651a3b4d194ceb39b', '07066598178', '', '', '', 1, NULL),
(31, 'Prince Oluwanishola And Properties', 'olusholaomoluabi@yahoo.com', '1c1c8b63b042023b6f8265cc36e3bb1b1206b02f', '07084308662', '', '', '', 1, NULL),
(32, '', 'sage@go.com', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', '', '', '', 1, NULL),
(40, 'sage@goo.com', 'sage@goo.com', '27b76ee0a08126f07b873b93db1a3463b85690b6', '456788864', '', '', '', 1, NULL),
(41, 'val@go.com', 'val@go.com', 'ef777d4fc1e30eccf9f81302abb3c7c03e91f8cd', '456788864', '', '', '', 1, NULL),
(42, 'jeff@go.com', 'jeff@go.com', '18f7abccb495d3df564ca414f528032ffb555334', '456788864', '', '', '', 1, NULL),
(43, 'yop@go.com', 'yop@go.com', '5cf2cb50b4e9726d9482a4d86cd45f704abc8d9e', '0804577784', '', '', '', 1, NULL),
(44, 'Optimal Skyrealty', 'optimalskyrealty@gmail.com', 'ea25af0a442ed45c0120b071a08a6c6ac225dd29', '09092024921', '', '', '', 1, NULL),
(45, 'Obi Achong', 'achongobi@yhaoo.com', '41d2701869c63e0de13e80a75a569fe19011678c', '08130174728', '', '', '', 1, NULL),
(47, 'Sunpet  Global  Enterprises', 'sunpetglobalent@yahoo.com', 'a94902d39fddd66b1ac6547254a0de4ab0db2073', '08062183898', '', '', '', 1, NULL),
(48, 'Adesanya Olugbenga', 'adesanyaolugbenga67@gmail.com', '955e45259821e4e2be95243d6f696ccbf2331be4', '07012370904', '', '', '', 1, NULL),
(59, 'Gohome Nigeria 2', 'privacy@gohome.ng', '8baff58b2398567ee420192ead01288976e78953', '09024699096', 'Untitled design.png', '', '', 1, '70324054bb7441d00fb68a7f3544f989'),
(60, 'Test', 'whogohosttest@gmail.com', 'c6ecafc26023798da518585f217893126cb644b3', '09074635893', '', '', 'f103d64f3192702625c2a449f613a39e', 0, '9d8bc869c39698a0012044dc568cd0c6'),
(61, 'Jonny Joe', 'cjonnyjoe@gmail.com', 'd40eecb0efebe03b9b546d305230b0a66c664447', '09024699096', '', '', '6e55ea7862827b3909f664e7dc141b7b', 0, NULL),
(62, 'Havilah World', 'harvilaworld@gmail.com', 'd40eecb0efebe03b9b546d305230b0a66c664447', '00024699094', '', '', '', 1, NULL),
(68, 'Yusuf', 'yusuf@gmail.com', '030c7c36006b714a324d09e8e1f8c4aba22829de', '08025002345', '', '', NULL, 0, NULL),
(69, 'shamnex', 'shamnex4peace@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '08186044695', '', '', NULL, 0, NULL),
(70, 'Johnny Joe', 'prince.michael492@gmail.com', '876f722ecca77f8c2aee96494ee574f521e96920', '08133333333', '', '', '', 1, NULL),
(71, 'me', 'me@u.com', 'ad285d92065baefbb32f3ebe5e83d527cd95c592', '08023456789', '', '', NULL, 0, NULL),
(72, 'David Abuja', 'dreddavid150@gmail.com', '8aec95309946f5dc0fc9fdcf702f1548a22c4967', '08163238961', '', '', '', 1, NULL),
(73, 'dredlord', 'desapps91@gmail.com', '8aec95309946f5dc0fc9fdcf702f1548a22c4967', '08163238691', '', '', NULL, 0, NULL),
(74, 'Glory Ugenlo', 'ugenloose@gmail.com', 'b0d66db233a66ffe28f052317ac3785b2a5afd6e', '08137201070', '', '', '', 1, NULL),
(75, 'Glory Ugenlo', 'sqtwebsolutions@gmail.com', '68f6c1d28ef34f255aa5c5d3158657f074f68175', '08137201070', '', '', '53acb1691e141da898992426d62bd2a6', 0, NULL),
(76, 'Arinze Aguolu', 'drakensage2k@gmail.com', 'e69508805a2df0d81cff42602444c95f1b03693d', '0826252523', '7.jpg', 'my.website', '', 1, NULL),
(77, 'Abdulraheem', 'webspecialist4us@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '07031398624', '', '', 'ec5f7f8c1e8542e25e66bb358833d603', 0, NULL),
(78, 'Abdulraheem', 'webspecialist4all@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '07031398624', '', '', '', 1, NULL),
(79, 'jerome', 'prettypat2014@yahoo.com', 'df2983700ffecb52e6649f0cb3981b66537083a4', '0807305689', '', '', NULL, 0, NULL),
(81, 'favour', 'favour@sqtwebsolutions.com', '7c222fb2927d828af22f592134e8932480637c0d', '123456789', '', '', NULL, 0, NULL),
(91, 'Paul Ejike Ugwu', 'paulwhiteblogs@gmail.com', 'a642a77abd7d4f51bf9226ceaf891fcbb5b299b8', '08136343939', '', '', '', 1, NULL),
(92, 'Developer', '7binemmanuel@gmail.com', 'b8004bf1e51380573ae0f7c34cd8bc9464ea1cad', '08181094389', '', '', '5af081d59d6f1954c74929ecd22ff95f', 0, NULL),
(93, 'Angela Ojo', 'Angelaojo25@gmail.com', '4adbc7ddaac7d5eea59d0ed1d134d7c4f1e66381', '08069744795', '', '', '', 1, NULL),
(94, 'Gohomenig', 'gohomenig@gmail.com', 'd40eecb0efebe03b9b546d305230b0a66c664447', '09044455666', '', '', '', 1, NULL),
(95, 'Gohome Ads Manager', 'gohomeadmanager@gmail.com', 'd40eecb0efebe03b9b546d305230b0a66c664447', '08023077812', 'Orange and Black Bold Food Blog Post Social Media Graphics (1).png', '', '', 1, NULL),
(96, 'Adefisan Adeoye Gabriel', 'adefisan4senator@yahoo.com', '515d39e4d0d7ac5aa3f9c13bab01164aa902ab23', '08034110292', '', '', '', 1, NULL),
(97, 'Okegbemi Femi Emmanuel', 'emmanuelfemi888@gmail.com', '533564a7a35b4d2b8b0e2005d7cb012888fda69f', '08096104169', 'IMG_20190225_160158_9.jpg', '', '', 1, NULL),
(98, 'Chizoba Emecheta', 'Chizoba1.emecheta1@gmail.com', 'd99c80fa35cb37b574dadb83824475bf92194504', '08132874237', 'SnapPic Collage_20207851625410.jpg', '', '', 1, NULL),
(99, 'Mr Fixer Facility Management Company', 'Mrfixer001@gmail.com', '4893a1bea052ced243745c76e44f5e091c01f395', '07046517600', '', '', '', 1, NULL),
(100, 'Lucy Raphael', 'raphaellucy71@gmail.com', 'd128adc2ca32932f8a7736ccfec47a567480a690', '08060903250', '', '', '', 1, NULL),
(101, 'Adebayo', 'whitebronze777@yahoo.com', 'e703cb0f06c8228f040ecafdf7c040920257f757', '07031808478', '', '', '', 1, NULL),
(102, 'Blessed Daniel Seidi', 'blessedceo20@gmail.com', '29843ae7b03167657157903991d760c850bcca2f', '07039695517', '', 'https://wa.me/2347011473025', '', 1, NULL),
(103, 'Uzoka Casey Ifeanyi', 'uzokaifeanyi@gmail.com', 'f7812481267da6fbdc5fe08273e2c2b6d9c8fd0b', '08025979756', '', '', '', 1, NULL),
(104, 'Emmanuel Ekpiken', 'emmauelitaekpiken@gmail.com', '26536185c6527276cc6882ef50764d9863d3db7c', '08091174082', '', '', '', 1, NULL),
(105, 'Babalola Kehinde', 'kehneyblaq@gmail.com', '026199802b36c4e926f1356f5e24c6bc93f986db', '08166137686', '', '', '', 1, NULL),
(106, 'Michael Uzoije', 'michaeluduzoije@gmail.com', '7fdc47248e570e8a44bd0e4aaf4d020641ebcb21', '08038786631', '', '', '', 1, NULL),
(107, 'honestcollins', 'honestcollins78@gmail.com', 'f98f625e7d1c62f5dc096796f6613a14b5eb7ec9', '08032529246', '', '', NULL, 0, NULL),
(109, 'Yusuf Jibola', 'patward1601@gmail.com', '3cfd5edddff5376f4c728e854702055bcd1f7cce', '08070797612', '', '', '', 1, NULL),
(110, 'Samuel Igben', 'omo740eji@gmail.com', '7fddeea2c4db868debc176e021826964c265064b', '07062689906', '', '', '', 1, NULL),
(111, 'moin cheeta', 'moin2166@gmail.com', '8a186f5b1f4a33e3130fd05903a869c7dbf8f04b', '7891241679', '', '', NULL, 0, NULL),
(113, 'Aderonke Joseph', 'joseronke@gmail.com', '818bd979e036b828b79f60588560024c4df40816', '07039480700', '', '', '', 1, NULL),
(114, 'Ugo', 'ugohaeri@yahoo.com', '52b4e53d1b5f6fbc005fb3b1cb1af95d8a2e1eac', '08122200999', '', '', 'f8baa05e64bb14d5722bb1e9df4a2b97', 0, NULL),
(115, 'Ugo', 'ugohaeri@gmail.com', '52b4e53d1b5f6fbc005fb3b1cb1af95d8a2e1eac', '08122200999', '', '', '', 1, NULL),
(116, 'Lomek', 'usolomonemeka@yahoo.com', 'a387070865bf748f3623d34cbaf228639c17de29', '08035617992', '', '', NULL, 0, NULL),
(117, 'Lanre Thomas', 'dwanlimited@gmail.com', 'edcb55e7b3a802f98ddb25a7182f622812d8f4af', '08147370888', '', '', '', 1, NULL),
(118, 'Henry Ojeme', 'henryojeme@gmail.com', '9340af8d1b2c8b8e6f7af1ff45c65a52b7bdf3bc', '08065453181', '', '', '', 1, NULL),
(119, 'Joseph Ejiofor', 'josephejiofor@gmail.com', 'a31e44e0548b4c995336834db72c429ffc0f13ba', '08094379688', '', '', '', 1, NULL),
(120, 'Sarah Smile', 'sarahsmile860@gmail.com', '4a5cc18e2388e510a3bcce97a74e9b376947bfad', '09020113721', '', '', '', 1, NULL),
(121, 'Franca Ibazebo', 'francaibazebo@gmail.com', '7a2a02a066c0b8aec10aa15293d099c22eba42f9', '08024010201', '', '', '', 1, NULL),
(122, 'Kazeem Damilola', 'damilolaabidakun93@gmail.com', 'ce4c84080cd5beb4d04414a3e82be751a1859129', '08145466676', '', '', '', 1, NULL),
(123, 'Gidi Realtors', 'Akerele.tobi@yahoo.com', '7c222fb2927d828af22f592134e8932480637c0d', '09034338085', '', '', '5ceffff8966b766c2bb685e6a05bec2a', 0, NULL),
(124, 'Adomu Yusuf Isah', 'adomu2018@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '08085038965', '', '', 'dcb96accac61cfae1018d59e9ed0c12e', 0, NULL),
(125, 'Mr Jo', 'jossycool101@gmail.com', '91fb26f015f6dd70bca4134d5120d74ad0055371', '09022307702', '', '', '', 1, NULL),
(126, 'Osamwonyi', 'bryamthomsonjack88.gk@gmail.com', '621b239db6bc19a56c8b0d08921cd2c1d10007b1', '07046555186', '', '', '', 1, NULL),
(127, 'Emmanuel Olasunkanmi', 'sunkaanmi@gmail.com', '97abd78db6f76f2c0c51bd067428382996167d5e', '09076220787', 'Profile Picture edit.jpg', '', '', 1, NULL),
(128, 'Misko', 'mihael.cob@gmail.com', 'c26fad21a8beb682d3e592cc3cc64b8a766f7dfd', '0613344021', '', '', NULL, 0, NULL),
(129, 'abj', 'abolarinwajohson@yahoo.com', '04f3b7da1c65198374fafdd7ee79f2fe38dd4929', '08164970589', '', '', NULL, 0, NULL),
(130, 'Kingsley Okorie', 'okoriekingsli@yahoo.ca', '03d6d245fd35d76a22e6593fa1aaf1267570566f', '08132159146', '', '', '', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `app_variables`
--

CREATE TABLE `app_variables` (
  `id` int(3) NOT NULL,
  `var_name` varchar(55) NOT NULL,
  `var_value` varchar(95) NOT NULL,
  `description` varchar(120) NOT NULL,
  `isreadonly` tinyint(1) NOT NULL DEFAULT 0,
  `lastupdated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_variables`
--

INSERT INTO `app_variables` (`id`, `var_name`, `var_value`, `description`, `isreadonly`, `lastupdated`) VALUES
(1, 'APP_NAME', 'GoHome', '', 0, '2018-08-27 21:29:10'),
(2, 'SLOGAN', '', '', 1, '2018-08-27 21:29:10'),
(3, 'APP_PORTAL', 'https://www.insta-meals.com', '', 0, '2018-08-27 21:33:03'),
(4, 'APP_SHORTCODE', 'INSTMEALS', '', 0, '2018-08-27 21:24:27'),
(5, 'APP_SMSEMAIL', 'info@cis-ng.com', '', 0, '2018-08-27 21:24:27'),
(6, 'APP_SMSAPI', 'INSMAPI', '', 0, '2018-08-27 21:25:28'),
(7, 'APP_SMSPWD', 'clarkkent', '', 0, '2018-08-27 21:29:10'),
(8, 'APP_SMSNAME', 'INSMAPI', '', 0, '2018-08-27 21:29:10'),
(9, 'APP_EMAIL', 'leslie.woke@gmail.com', 'email Address that will be used to send messages to clients', 0, '2018-08-27 21:29:10'),
(10, 'APP_EMAILPWD', 'ClarkKent#93', '', 0, '2018-08-27 21:29:10'),
(11, 'APP_MOBILE', '+23409021477271', '', 0, '2018-08-27 21:29:10'),
(12, 'CONTACT_ADDRESS', '19 Ojiegbu Street, Mile 3, Port Harcourt', 'Port Harcourt', 0, '2018-08-27 21:29:10'),
(13, 'OFFICIAL_EMAIL', 'leslie.woke@gmail.com', '', 0, '2018-08-27 21:24:27'),
(14, 'FACEBOOK', 'javascript:;', 'Facebook Handle', 0, '2018-08-27 21:29:10'),
(15, 'INSTAGRAM', 'javascript:;', 'Instagram Handle', 0, '2018-08-27 21:29:10'),
(16, 'YOUTUBE', 'javascript:;', 'Youtube Handle', 0, '2018-08-27 21:24:27'),
(17, 'CONTACT_PERSON1', '(234) 0902 147 7271', '', 0, '2018-08-27 21:29:10'),
(18, 'CONTACT_PERSON2', '', '', 0, '2018-08-27 21:29:10'),
(19, 'CONTACT_PERSON3', '', '', 0, '2018-08-27 21:24:27'),
(20, 'SITE_HITS', '0', 'Number Of Times The Site Has Been Visited', 0, '2018-08-27 21:24:27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(3) NOT NULL,
  `title` varchar(60) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `usedfields` text NOT NULL COMMENT 'Seperated By Comma',
  `fieldlabels` text NOT NULL,
  `requiredfields` text NOT NULL COMMENT 'Seperated By Comma',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `locked_state` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `usedfields`, `fieldlabels`, `requiredfields`, `status`, `locked_state`) VALUES
(0, 'uncategorized', 'uncategorized', 'title, slug, image, thumb, image_align, author, excerpt, content, progress, btn_url, btn_text, tags', 'Title, Slug, Image, Thumb, Image Alignment, Author, Excerpt, Content, Progress, Btn_url, Btn_text, Keywords, Event_date, Position, Address, Date_updated, Addfield1, Addfield2, Addfield3, Addfield4, Addfield5', 'title, slug, author, excerpt, content', 1, 1),
(1, 'Projects', 'projects', 'title, slug, image, thumb, image_align, author, excerpt, content, btn_url, btn_text, tags', 'title=title, slug=slug, image=image, thumb=thumb, image_align=image_align, author=author, excerpt=excerpt, content=content, btn_url=btn_url, btn_text=btn_text, tags=tags', 'title, slug, image, excerpt, content', 1, 1),
(2, 'news', 'news', 'title, slug, image, image_align, author, excerpt, content, tags', 'title=title, slug=slug, image=image, image_align=image_align, author=author, excerpt=excerpt, content=content, tags=tags', 'title, slug, author, excerpt, content', 1, 1),
(3, 'events', 'events', 'title, slug, image, image_align, excerpt, content, tags', 'title=title, slug=slug, image=image, image_align=image_align, excerpt=excerpt, content=content, tags=tags', 'title, slug, excerpt, content', 1, 1),
(4, 'Gallery', 'gallery', 'title, slug, image, excerpt, tags', 'title=title, slug=slug, image=image, excerpt=excerpt, tags=tags', 'title, slug, image', 1, 1),
(6, 'Blog', 'blog', 'title, slug, image, image_align, author, excerpt, content, btn_url, btn_text, event_date, addfield1, addfield2', 'title=Title, slug=Slug, image=Image, image_align=Image_align, author=Author, excerpt=Excerpt, content=Content, btn_url=Button URL, btn_text=Button Text, event_date=Posted Date, addfield1=Likes, addfield2=Comments', 'title, slug, image, excerpt, content, addfield1', 1, 0),
(7, 'About', 'about', 'title, slug, image, image_align, excerpt, content, btn_url, btn_text, tags', 'title=Title, slug=Slug, image=Image, image_align=Image_align, excerpt=Excerpt, content=Content, btn_url=Btn_url, btn_text=Btn_text, tags=Tags', 'title, slug', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `compmail_draft`
--

CREATE TABLE `compmail_draft` (
  `id` int(7) NOT NULL,
  `receiver` varchar(299) NOT NULL DEFAULT '[none]',
  `sender` varchar(11) NOT NULL,
  `sender_name` varchar(55) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `mark_as` tinyint(1) NOT NULL DEFAULT 0,
  `priority` tinyint(1) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `compmail_inbox`
--

CREATE TABLE `compmail_inbox` (
  `id` int(7) NOT NULL,
  `receiver` varchar(11) NOT NULL,
  `sender` varchar(11) NOT NULL,
  `sender_name` varchar(55) NOT NULL,
  `subject` varchar(50) NOT NULL DEFAULT '[No Subject]',
  `content` text NOT NULL,
  `mark_as` tinyint(1) NOT NULL DEFAULT 0,
  `priority` tinyint(1) NOT NULL DEFAULT 0,
  `replied` tinyint(1) DEFAULT NULL,
  `attachment` varchar(55) DEFAULT NULL,
  `att_file_size` varchar(20) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compmail_inbox`
--

INSERT INTO `compmail_inbox` (`id`, `receiver`, `sender`, `sender_name`, `subject`, `content`, `mark_as`, `priority`, `replied`, `attachment`, `att_file_size`, `date`) VALUES
(1, 'Admin', 'jane@doe.co', 'er', 'Inquiry', 'er rfdggfdf', 0, 0, NULL, NULL, NULL, '2020-02-13 14:14:57'),
(2, 'Admin', 'jane@doe.co', 'er', 'Inquiry', 'er rfdggfdf', 0, 0, NULL, NULL, NULL, '2020-02-13 14:23:38'),
(3, 'Admin', 'jane@doe.co', 'er', 'Inquiry', 'er rfdggfdf', 0, 0, NULL, NULL, NULL, '2020-02-13 14:25:07'),
(4, 'Admin', 'jane@doe.co', 'er', 'Inquiry', 'er rfdggfdf', 0, 0, NULL, NULL, NULL, '2020-02-13 14:36:59'),
(5, 'Admin', 'jane@doe.co', 'er', 'Inquiry', 'er rfdggfdf', 0, 0, NULL, NULL, NULL, '2020-02-13 14:39:06'),
(6, 'Admin', 'jane@doe.co', 'er', 'Inquiry', 'er rfdggfdf', 0, 0, NULL, NULL, NULL, '2020-02-13 14:43:31'),
(7, 'Admin', 'jane@doe.co', 'er', 'Inquiry', 'er rfdggfdf', 0, 0, NULL, NULL, NULL, '2020-02-13 14:45:54'),
(8, 'Admin', 'jane@doe.co', 'er', 'Inquiry', 'er rfdggfdf', 0, 0, NULL, NULL, NULL, '2020-02-13 14:46:01'),
(9, 'Admin', '', '', 'Inquiry', '', 0, 0, NULL, NULL, NULL, '2020-02-13 14:56:50'),
(10, 'Admin', 'wedf', '23', 'Inquiry', 'sdfgyyff', 0, 0, NULL, NULL, NULL, '2020-02-13 15:54:28'),
(11, 'Admin', '', '', 'Inquiry', '', 0, 0, NULL, NULL, NULL, '2020-02-13 16:06:47'),
(12, 'Admin', '', '', 'Inquiry', '', 0, 0, NULL, NULL, NULL, '2020-02-13 16:08:33'),
(13, 'Admin', '', '', 'Inquiry', '', 0, 0, NULL, NULL, NULL, '2020-02-13 16:11:04'),
(14, 'Admin', '', '', 'Inquiry', '', 0, 0, NULL, NULL, NULL, '2020-02-13 16:15:35'),
(15, 'Admin', 'see tggfd', '2rtgf', 'Inquiry', 'sfghgg', 0, 0, NULL, NULL, NULL, '2020-02-13 16:17:45'),
(16, 'Admin', 'see tggfd', '2rtgf', 'Inquiry', 'sfghgg', 0, 0, NULL, NULL, NULL, '2020-02-13 16:19:15'),
(17, 'Admin', 'see tggfd', '2rtgf', 'Inquiry', 'sfghgg', 0, 0, NULL, NULL, NULL, '2020-02-13 16:21:58'),
(18, 'Admin', 'e to yf', 'ertf', 'Inquiry', 'qetreyy', 0, 0, NULL, NULL, NULL, '2020-02-13 16:26:12'),
(19, 'Admin', '', '', 'Inquiry', '', 0, 0, NULL, NULL, NULL, '2020-02-13 16:27:22');

-- --------------------------------------------------------

--
-- Table structure for table `compmail_sent`
--

CREATE TABLE `compmail_sent` (
  `id` int(7) NOT NULL,
  `receiver` varchar(11) NOT NULL,
  `sender` varchar(11) NOT NULL,
  `receiver_name` varchar(55) NOT NULL,
  `sender_name` varchar(55) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `mark_as` tinyint(1) NOT NULL DEFAULT 0,
  `priority` tinyint(1) NOT NULL DEFAULT 0,
  `replied` tinyint(1) NOT NULL DEFAULT 0,
  `attachment` varchar(55) NOT NULL,
  `att_file_size` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `serial` int(11) NOT NULL,
  `Userid` text NOT NULL,
  `PropID` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`serial`, `Userid`, `PropID`) VALUES
(1, 'sqt@sqtwebsolutions.com', '10009'),
(2, 'Gohome.ng@gmail.com', '10009'),
(3, 'sqt@sqtwebsolutions.com', '10000'),
(4, 'Gohome.ng@gmail.com', '10002'),
(5, 'Osilem@gmail.com', '10000'),
(6, 'jane@doe.com', '10022'),
(7, 'jane@doe.com', '10017'),
(8, 'jane@doe.com', '10014'),
(9, 'jane@doe.com', '10014'),
(10, 'jane@doe.com', '10009'),
(11, 'jane@doe.com', '10012'),
(12, 'support@sqtwebsolutions.com', '10020'),
(13, 'jane@doe.com', '10020'),
(14, 'jane@doe.com', '10045'),
(15, 'jane@doe.com', '10015'),
(17, 'support@sqtwebsolutions.com', '10036'),
(18, 'jeffukus@gmail.com', '10044'),
(19, 'support@sqtwebsolutions.com', '10045'),
(20, 'support@sqtwebsolutions.com', '10045'),
(72, 'null', '10045'),
(73, 'null', '10020'),
(74, 'null', '10042'),
(75, 'support@sqtwebsolutions.com', '10058'),
(76, 'support@sqtwebsolutions.com', '10059'),
(66, 'arinzeaguolu@gmail.com', '10045'),
(78, 'drakensage2k@gmail.com', '10037'),
(77, 'drakensage2k@gmail.com', '10045'),
(67, 'arinzeaguolu@gmail.com', '10022'),
(68, 'arinzeaguolu@gmail.com', '10020'),
(69, 'jeffukus@gmail.com', '10045'),
(70, 'jeffukus@gmail.com', '10022'),
(85, 'Gohome.ng@gmail.com', '10014'),
(0, 'free@gmail.com', '10071');

-- --------------------------------------------------------

--
-- Table structure for table `guest_agents`
--

CREATE TABLE `guest_agents` (
  `id` int(15) NOT NULL,
  `name` varchar(60) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(90) NOT NULL,
  `website` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest_agents`
--

INSERT INTO `guest_agents` (`id`, `name`, `phone`, `email`, `website`) VALUES
(1, 'James Adams', '07058555101', 'chima.woke@gmail.com', 'www.agentjamie.com'),
(3, 'Chima Woke', '07058555101', 'chima.woke.ls@gmail.com', 'www.agentjamie.com'),
(4, 'James White', '090233456789', 'jamie.white@yahoo.com', 'www.realestatedon.com.ng'),
(5, 'Caleb Allen', '090233456789', 'caleb@allen.com', 'www.realestatedon.com.ng'),
(6, 'Gohome', '09034577876', 'gohome.ng@gmail.com', 'http://gohome.ng/');

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `id` int(7) NOT NULL,
  `title` varchar(90) NOT NULL,
  `filename` varchar(90) NOT NULL,
  `filetype` varchar(45) NOT NULL,
  `filesize` int(9) NOT NULL,
  `mwidth` int(4) NOT NULL,
  `mheight` int(4) NOT NULL,
  `tags` varchar(60) NOT NULL,
  `date_uploaded` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `title`, `filename`, `filetype`, `filesize`, `mwidth`, `mheight`, `tags`, `date_uploaded`) VALUES
(1, '10 Quick Tips About Real Estate', '10-quick-tips-about-real-estate-86018.jpg', 'image/jpeg', 96534, 0, 0, '', '2019-09-30 22:26:58'),
(2, 'fullimage', 'fullimage-13092.jpg', 'image/jpeg', 316802, 0, 0, '', '2019-10-01 05:58:12'),
(3, 'Creating A Capitve Audience', 'creating-a-capitve-audience-18698.jpg', 'image/jpeg', 316802, 0, 0, '', '2019-10-01 07:31:38'),
(4, 'Avoid Scammers When You are Renting that Apartment', 'avoid-scammers-when-you-are-renting-that-apartment-36018.jpg', 'image/jpeg', 9584, 0, 0, '', '2019-10-15 09:40:18'),
(5, 'scam1', 'scam1-36125.jpg', 'image/jpeg', 12021, 0, 0, '', '2019-10-15 09:42:05'),
(6, 'Thing to know when renting a house', 'thing-to-know-when-renting-a-house-20018.jpg', 'image/jpeg', 137684, 0, 0, '', '2019-12-09 18:33:38'),
(7, 'Things to know when renting a house 2', 'things-to-know-when-renting-a-house-2-20050.jpg', 'image/jpeg', 99503, 0, 0, '', '2019-12-09 18:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `media_presets`
--

CREATE TABLE `media_presets` (
  `id` int(2) NOT NULL,
  `title` varchar(45) NOT NULL,
  `height` int(4) NOT NULL,
  `width` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mod_businessdirectory`
--

CREATE TABLE `mod_businessdirectory` (
  `id` int(5) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `othernames` varchar(45) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `compound` varchar(70) NOT NULL,
  `company` varchar(90) NOT NULL,
  `business_addr` text NOT NULL,
  `specialization` text NOT NULL,
  `email` varchar(45) NOT NULL,
  `mobile` varchar(33) NOT NULL,
  `refname` varchar(65) NOT NULL,
  `refmobile` varchar(33) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `my_articles_fave`
--

CREATE TABLE `my_articles_fave` (
  `id` int(6) NOT NULL,
  `email` varchar(60) NOT NULL,
  `artid` int(6) NOT NULL,
  `dateadded` int(11) NOT NULL,
  `lastupdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pass_key`
--

CREATE TABLE `pass_key` (
  `id` int(11) NOT NULL,
  `pass` varchar(11) NOT NULL,
  `key_used` tinyint(1) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pass_key`
--

INSERT INTO `pass_key` (`id`, `pass`, `key_used`, `email`) VALUES
(1, 'QUBMZDeFz9', 0, '0'),
(2, 'A66vnbKx3F', 0, '0'),
(3, 'SQd4BUeJ3f', 0, '0'),
(4, 'SIvkwG4ZT8', 0, '0'),
(5, 'pKKpCQxpCa', 0, '0'),
(6, 'nLTW3M9LFj', 0, 'jeffukus@gmail.com'),
(7, 'ux8gNKZNUZ', 0, 'jeffukus@gmail.com'),
(8, 'gR28qiZIlX', 0, ''),
(9, '2k2Jk2jRuw', 0, 'jeffukus@gmail.com'),
(10, 'joqkrOtAB9', 0, 'jeffukus@gmail.com'),
(11, 'DXLoz0pTp9', 0, ''),
(12, 'zrynQlfHfK', 0, 'jeffukus@gmail.com'),
(13, 'e5yx8rp46r', 0, ''),
(14, 'vSkV6Yn1tP', 0, 'jeffukus@gmail.com'),
(15, 'To26Vcl0ot', 0, 'jeffukus@gmail.com'),
(16, '3dFNDBnuvs', 0, 'jeffukus@gmail.com'),
(17, 'gocFvdF5ub', 0, 'jeffukus@gmail.com'),
(18, 'WGT2DPxf85', 0, 'jeffukus@gmail.com'),
(19, 'ywCakYpz3D', 0, 'jeffukus@gmail.com'),
(20, 'hpNpGEBcNL', 0, 'jeffukus@gmail.com'),
(21, 'Ioobo5HGCz', 0, 'jane@doe.com'),
(22, '9rgcc1QHkX', 0, 'jeffukus@gmail.com'),
(23, 'qg2RSTXXS7', 0, 'dafegeorge19@gmail.com'),
(24, 'V251fxbuto', 0, 'dafegeorge19@gmail.com'),
(25, 'tOP6n7YixD', 0, 'support@sqtwebsolutions.com'),
(26, 'DgFyQFpviO', 0, 'support@sqtwebsolutions.com'),
(27, 'DF94RNH5nU', 0, 'support@sqtwebsolutions.com'),
(28, 'X9QiNUVeqS', 0, 'support@sqtwebsolutions.com'),
(29, 'doWVY4lTqa', 0, ''),
(30, 'WWmEO7u9L6', 0, 'jeffukus@gmail.com'),
(31, 'NRhwIJdz6b', 0, 'jeffukus@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(5) NOT NULL,
  `title` varchar(90) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `catid` int(3) NOT NULL,
  `image` varchar(45) NOT NULL,
  `thumb` varchar(55) NOT NULL,
  `image_align` varchar(10) NOT NULL,
  `author` varchar(55) NOT NULL,
  `excerpt` text NOT NULL,
  `content` longtext NOT NULL,
  `progress` int(3) NOT NULL,
  `btn_url` varchar(90) NOT NULL,
  `btn_text` varchar(45) NOT NULL,
  `tags` varchar(120) NOT NULL,
  `event_date` datetime NOT NULL,
  `address` varchar(90) NOT NULL,
  `position` int(3) NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `addfield1` varchar(250) NOT NULL COMMENT 'For Additional Data',
  `addfield2` varchar(250) NOT NULL COMMENT 'For Additional Data',
  `addfield3` varchar(250) NOT NULL COMMENT 'For Additional Data',
  `addfield4` varchar(250) NOT NULL COMMENT 'For Additional Data',
  `addfield5` longtext NOT NULL COMMENT 'For Long WriteUps',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `islocked` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'lock posts to prevent accidental deletion'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts_allfields`
--

CREATE TABLE `posts_allfields` (
  `id` int(3) NOT NULL,
  `title` varchar(60) NOT NULL,
  `fieldstate` varchar(90) NOT NULL COMMENT 'checked, required, readonly etc'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts_allfields`
--

INSERT INTO `posts_allfields` (`id`, `title`, `fieldstate`) VALUES
(1, 'title', 'checked required'),
(2, 'slug', 'checked required'),
(3, 'image', ''),
(4, 'thumb', ''),
(5, 'image_align', ''),
(6, 'author', ''),
(7, 'excerpt', ''),
(8, 'content', ''),
(9, 'progress', ''),
(10, 'btn_url', ''),
(11, 'btn_text', ''),
(12, 'tags', ''),
(13, 'event_date', ''),
(14, 'address', ''),
(15, 'position', ''),
(16, 'date_updated', ''),
(17, 'addfield1', ''),
(18, 'addfield2', ''),
(19, 'addfield3', ''),
(20, 'addfield4', ''),
(21, 'addfield5', '');

-- --------------------------------------------------------

--
-- Table structure for table `posts_statuses`
--

CREATE TABLE `posts_statuses` (
  `id` int(2) NOT NULL,
  `title` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts_statuses`
--

INSERT INTO `posts_statuses` (`id`, `title`) VALUES
(0, 'Draft'),
(1, 'Active'),
(3, 'Private'),
(4, 'Archived'),
(5, 'Suspended');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `id` int(11) NOT NULL,
  `post_id` int(20) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `comments` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `post_id`, `name`, `email`, `comments`, `date_added`) VALUES
(7, 1, 'Abel Umoh', 'abel@yahoo.com', 'This is a nice post', '2019-10-09 21:09:42'),
(8, 2, 'Leslie', 'chima.woke.ls@gmail.com', 'this is a nice post. I like the tips', '2019-10-16 09:36:50'),
(9, 3, 'Chima', 'chima.woke.ls@gmail.com', 'I like this post. very educative.', '2020-01-10 13:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `property_info`
--

CREATE TABLE `property_info` (
  `id` int(11) NOT NULL,
  `prop_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `user_email` varchar(70) NOT NULL,
  `title` varchar(90) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(12) NOT NULL,
  `status` varchar(12) NOT NULL,
  `bedrooms` int(5) NOT NULL,
  `bathrooms` int(5) NOT NULL,
  `floors` int(5) NOT NULL,
  `garages` varchar(5) NOT NULL,
  `size` int(7) NOT NULL,
  `price` varchar(15) NOT NULL DEFAULT '0',
  `period` varchar(50) DEFAULT NULL,
  `video_url` text NOT NULL,
  `features` text NOT NULL,
  `address` text NOT NULL,
  `region` varchar(29) NOT NULL,
  `state` varchar(29) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `offered` int(10) NOT NULL,
  `img1` varchar(70) NOT NULL,
  `img2` varchar(70) NOT NULL,
  `img3` varchar(70) NOT NULL,
  `img4` varchar(70) NOT NULL,
  `img5` varchar(70) NOT NULL,
  `img6` varchar(70) NOT NULL,
  `img7` varchar(70) NOT NULL,
  `img8` text NOT NULL,
  `img9` text NOT NULL,
  `img10` text NOT NULL,
  `img11` text NOT NULL,
  `img12` text NOT NULL,
  `img13` text NOT NULL,
  `img14` text NOT NULL,
  `img15` text NOT NULL,
  `approved` varchar(10) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_info`
--

INSERT INTO `property_info` (`id`, `prop_id`, `user_id`, `user_email`, `title`, `description`, `type`, `status`, `bedrooms`, `bathrooms`, `floors`, `garages`, `size`, `price`, `period`, `video_url`, `features`, `address`, `region`, `state`, `postal_code`, `featured`, `offered`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `img11`, `img12`, `img13`, `img14`, `img15`, `approved`, `date_added`) VALUES
(10, 10009, 10, 'henrycrusoe@yahoo.com', 'An Appealing 4Bedroom Terrace Duplex With BQ For Rent', 'Itâ€™s an English serviced apartment and it has an appealing facilities such as: POP ceilings, standard wardrobes/ kitchen cabinet, swimming pool, gym house, standby lister, jacuzzi bathroom, foreign bathtubs, tennis spot , ensuite rooms, ACâ€™s in the whole rooms... The environment is highly secured/ serene.', 'apartment', 'Rent', 6, 8, 3, 'no', 2000, '15000000', 'yearly', '', 'Center Cooling,Balcony,Pet Friendly,Fire Alarm,Storage,Dryer,Heating,Pool,Laundry,,Gym,,Dish Washer,Emergency', 'Maitama', 'Maitama', 'abuja', '', 1, 0, '10009-16334AF8-E5F0-4043-BD1F-C33572E6920F.jpeg', '10009-86377CF6-3063-4CAB-9099-EE04F9967698.jpeg', '10009-435899FC-8B46-451B-9B0D-5E5B22DB0DCB.jpeg', '10009-F7FC5DE4-2666-4A40-B374-34243C9FC16E.jpeg', '10009-801E3C49-5C13-458E-97A8-E884A78C0CA4.jpeg', '10009-4CCF6D0C-49E5-456C-84C8-7CB3D46649DE.jpeg', '10009-FC69E24F-9C01-491A-A8FF-B49218770F5A.jpeg', '', '', '', '', '', '', '', '', 'yes', '2020-08-03 13:16:58'),
(13, 10012, 13, 'cvsmarketingteam@gmail.com', 'Office Spaces', 'For all your Virtual office solution needs, Private Executive Offices, Shared Spaces, Meeting &amp; Conference Rooms, Training Rooms and more kindly patronize us. Ideal for Entrepreneurs, Startups, NGO\\\'s, etc', 'office', 'Rent', 0, 0, 0, 'no', 25, '500000', 'yearly', '', ',Balcony,,Fire Alarm,,,,,,,,,,Emergency', '21, Prince Adelowo Adedeji street, Off Admiralty Way, Lekki Phase 1 Lagos', 'Eti-Osa', 'lagos', '', 1, 0, '10012-inbound731939442323026204.jpg', '10012-inbound1864818653549572652.png', '10012-inbound1199501351719489016.png', '10012-inbound8983217258005798859.png', '10012-inbound1875951690360165767.png', '10012-', '10012-', '10012-', '10012-', '10012-', '10012-', '10012-', '10012-', '10012-', '10012-', 'yes', '2020-08-03 13:17:05'),
(15, 10014, 21, 'aladinho99@gmail.com', 'Urgent Sales: 25 Rooms Self-contained Building At Ago Palace Way, Okota. Lagos', 'SOLD DIRECTLY FROM OWNER/LANDLORD This 25 Room Self-contained apartment building would be sold at the BEST OFFER. Can be used as is or converted to HOTEL, SCHOOL, INDUSTRY and so much more.The backyard is completely free, with enough space for a Boy\'s Quarter building or any desired structure. This is a very good investment due to high rate of property appreciation in Ago-Okota environs.Same Neighborhood with a School, great for families and working-class youth.\\r\\n\\r\\nASKING PRICE:30 MILLION\\r\\n\\r\\nCall or Whatsapp 08068069104\\r\\n\\r\\nTitle: ORIGINAL C of O\\r\\nBUILDING WOULD BE SOLD TO THE HIGHEST BIDDER.', 'house', 'Sale', 25, 25, 3, 'no', 18, '30000000', '', '', ',,,,,,,,,,,,,', 'Niyi Onilari Street, Ago Palace Way', '', 'lagos', '100263', 1, 0, '10014-IMG_0913.jpg', '10014-IMG_0910.jpg', '', '10014-IMG_0905.jpg', '', '', '10014-IMG_0904.jpg', '', '', '10014-IMG_0907.jpg', '', '', '10014-IMG_0908.jpg', '', '', 'yes', '2020-08-03 13:36:01'),
(16, 10015, 24, 'infocovenanthomes@gmail.com', 'IBEJU LEKKI', '100 plots of land,Located at ibeju lekki, just 5mins drive from Dangote refinery, and its directly facing the express', 'land', 'Sale', 0, 0, 0, 'no', 600, '2000000', '', '', ',,,,,,,,,,,,,', 'ibeju lekki free trade zone', 'Ibeju', 'lagos', '', 1, 1, '10015-IMG-20180525-WA0003.jpg', '10015-IMG-20180525-WA0005.jpg', '10015-IMG-20180525-WA0006.jpg', '', '', '', '', '', '', '', '10015-', '', '', '', '', 'yes', '2020-08-03 13:36:08'),
(27, 10017, 29, 'jemilohun4real@gmail.com', 'Richmond Court and Garden Elebu Ibadan', 'RICHMOND COURT AND GARDEN ELEBU OFF AKALA EXPRESS, IBADAN\r\n\r\n\r\n\r\n\r\nLand Title: Certificate of Occupancy\r\n\r\n\r\n\r\n\r\nSize: 600sqm  \r\n\r\nDry Land  \r\n\r\nPromo Price: NGN 1,000,000\r\n\r\n\r\n\r\n\r\nThe estate is gated and fenced round Free of any form of OMO-ONILE.\r\n\r\n\r\n\r\n\r\nOUTRIGHT= 1M\r\n\r\nINSTALMENT MONTHS = 1M; \r\n\r\n\r\n\r\nINITIAL DEPOSIT IS 200K \r\n\r\n\r\n\r\n160K FOR 5 MONTHS\r\n\r\n12 MONTHS = 1M; \r\n\r\nINITIAL DEPOSIT IS 120K; \r\n\r\n80K FOR 11 MONTHS\r\n\r\n24 MONTHS = 1.2M; \r\n\r\nINITIAL DEPOSIT IS  50K; \r\n\r\n50K FOR 23 MONTHS.\r\n\r\n\r\n\r\nIbadan; the largest city in West Africa is host to many regional businesses in nigeria and is one of the fastest growing states in nigeria. Making it a choice destination for investors that want to divest into cities from the crowded lagos state. With its ease of movement and doing business index coupled with its peaceful and serenic environment ,Ibadan is definitely a choice destination for your real estate investments. Which is why your number 1 mega Real Estate Company Revolution Plus Property has decided to take the stress of you in deciding to get a property with Richmond Court and Garden Oke-Mekun town, Elebu Ibadan. \r\n\r\nA good man or good parent lives inheritance for his children\'s children. Whether you are a parent presently or not this property is a must have for you and your children. With this promo price of N1,000,000 take advantage of this C of O property now. The estate will be adorned with state-of-the-art infrastructures such as: perimeter fencing with gate house, good road network and drainage, street lights and other recreational and commercial facilities which will no doubt give our clients the best value for their money! \r\n\r\nThis particular masterpiece offers you a superb return on investment and amazing peace of mind. Richmond Court and Garden Estate is one of its kind that leaves you entirely free of any form of OMO-ONILE.', 'land', 'Sale', 0, 0, 0, 'no', 0, '1000000', '', '', ',,,,,,,Pool', 'Challenge Ibadan', '', 'oyo', '234', 1, 0, '10017-FB_IMG_1576248221124.jpg', '10017-FB_IMG_1574262361366.jpg', '10017-FB_IMG_1576248233854.jpg', '', '', '', '', '', '', '', '', '', '', '', '', 'yes', '2020-08-03 13:36:13'),
(30, 10020, 31, 'olusholaomoluabi@yahoo.com', 'Tastefully 3bedroom Town House', 'Newly Renovated 3bedroom town house by lekki conservation Centre after Chevron busstop, Eleganza.\r\n\r\nRent 1.5M,\r\nAgency 10%, \r\nLegal Caution 150k is to be arranged amongst the tenants on cleaning, security and water treatment, 3units of it available. Only Direct and Serious client. Call or chat me: 07084308662 or 08164968133.', 'house', 'Rent', 3, 3, 1, 'yes', 1000, '1500000', 'yearly', '', 'Balcony,Pet Friendly,Storage,Laundry,Emergency', 'Off Chevron Road Lekki', 'Lekki Phase 1', 'lagos', '', 1, 0, '10020-IMG-20200131-WA0043.jpg', '10020-IMG-20200131-WA0050.jpg', '10020-IMG-20200131-WA0052.jpg', '10020-IMG-20200131-WA0047.jpg', '10020-IMG-20200131-WA0051.jpg', '10020-IMG-20200131-WA0048.jpg', '10020-IMG-20200131-WA0046.jpg', '10020-IMG-20200131-WA0045.jpg', '10020-IMG-20200131-WA0033.jpg', '10020-IMG-20200131-WA0041.jpg', '10020-IMG-20200131-WA0042.jpg', '10020-IMG-20200131-WA0025.jpg', '10020-IMG-20200131-WA0031.jpg', '10020-IMG-20200131-WA0035.jpg', '10020-IMG-20200131-WA0038.jpg', 'yes', '2020-08-03 13:18:27'),
(100, 10064, 22, 'mikesbecca79@gmail.com', '5 bedroom duplex with 4 units of 3 bedroom flats.', '5 bedroom duplex with 4 units of 3 bedroom flats. \\r\\nAll rooms ensuite. \\r\\nIn an estate with security', 'house', 'Sale', 17, 22, 1, 'yes', 2000, '170000000', '', '', 'Balcony, Pet Friendly, Storage', 'High tech estate near Lagos state business school ajah', 'Ajah', 'lagos', '100001', 1, 0, '10064-IMG-20200304-WA0003.jpg', '10064-IMG-20200304-WA0004.jpg', '10064-IMG-20200304-WA0006.jpg', '10064-IMG-20200304-WA0007.jpg', '10064-IMG-20200304-WA0008.jpg', '10064-IMG-20200304-WA0011.jpg', '10064-IMG-20200304-WA0012.jpg', '10064-IMG-20200304-WA0012.jpg', '10064-IMG-20200304-WA0013.jpg', '10064-IMG-20200304-WA0015.jpg', '10064-', '10064-', '10064-', '10064-', '10064-', 'yes', '2020-08-05 06:54:04'),
(120, 10068, 97, 'emmanuelfemi888@gmail.com', '4 bedroom flat with a roomself', 'ðŸ‘ˆðŸ‘ˆ This 4 bedroom Flat and A room Self contain is on a plot of land at Obada, Abeokuta,Ogun State, Nigeria', 'house', 'Sale', 4, 5, 0, 'yes', 1000, '25000000', '', '', 'Center Cooling,Balcony,,Fire Alarm,Storage,Dryer,Heating,,Laundry,Sauna,,,Dish Washer,Emergency', 'Obada, Abeokuta,Ogun State,Nigeria', '', 'ogun', '', 1, 0, '10068-IMG-20200706-WA0022.jpg', '10068-IMG-20200706-WA0013.jpg', '10068-IMG-20200706-WA0003.jpg', '10068-IMG-20200706-WA0008.jpg', '10068-IMG-20200706-WA0015.jpg', '10068-IMG-20200706-WA0023.jpg', '10068-IMG-20200706-WA0012.jpg', '10068-', '10068-', '10068-', '10068-', '10068-', '10068-', '10068-', '10068-', 'yes', '2020-08-03 13:36:26'),
(121, 10069, 98, 'Chizoba1.emecheta1@gmail.com', '4bedroom and 3bedroom Terrace duplex', '*N35m Lekki Listing*\\r\\n\\r\\nðŸ—ï¸ðŸ—ï¸New Listing Alert!\\r\\n\\r\\n4bedroom &amp; 3Bedroom Terrace Houses with BQ for sale!\\r\\n.\\r\\n.\\r\\nLocationðŸ“: Lekki 2nd Toll\\r\\n.\\r\\nðŸ•¹Features:\\r\\n\\r\\nðŸ”–Brand new \\r\\nðŸ”–Clean water \\r\\nðŸ”–Secured estate \\r\\n ðŸ”–Big Compound 3cars\\r\\nðŸ”–Fully Fitted Kitchen\\r\\nðŸ”–CCTV Camera\\r\\nðŸ”–1 ROOM BQ\\r\\nðŸ”–24 Hours Security\\r\\nðŸ”–Water Heaters\\r\\nðŸ”–Pop Ceiling\\r\\nðŸ”–Jacuzzi\\r\\n\\r\\nðŸ’±: N35m(3Bedrooms without BQ)\\r\\n\\r\\n ðŸ’±:N38m(3Bedrooms with BQ)\\r\\n\\r\\nðŸ’±:N42m(4Bedrooms without BQ)\\r\\n\\r\\n\r\nTitleðŸ“‘: Governor\'s Consent \\r\\n\\r\\n*Contact CHI Realtor*\\r\\n\\r\\nâ˜Žï¸08132874237\\r\\n\\r\\nâœ‰chiirealtor@gmail.com\\r\\n\\r\\n*Facebook: CHIZOBA Mj Emecheta\\r\\n\\r\\n*Instagram: @chiizobaemecheta', 'house', 'Sale', 4, 4, 2, 'yes', 2, '35000000', '', '', 'Center Cooling,Balcony,,,Storage,Dryer,Heating,,,,,,,', 'No 50 alhaji animashaun street', 'Lagos Island', 'lagos', '100242', 1, 0, '10069-FB_IMG_1603528042720260716.jpg', '10069-IMG-20200708-WA0011.jpg', '10069-IMG-20200708-WA0005.jpg', '10069-IMG-20200708-WA0002.jpg', '10069-IMG-20200708-WA0001.jpg', '10069-', '10069-', '10069-', '10069-', '10069-', '10069-', '10069-', '10069-', '10069-', '10069-', 'yes', '2020-08-05 06:53:52'),
(123, 10071, 99, 'Mrfixer001@gmail.com', '2 PLOT OF LAND AT ILORIN', '2 PLOTS OF LAND WITH PROPER DOCUMENTS LOCATED AT AIRPORT AREA, ILORIN KWARA STATE', 'land', 'Sale', 0, 0, 0, 'no', 50, '5200000', '', '', ',,,,,,,,,,,,,', '2 PLOTS AIRPORT AREA, ILORIN KWARA STATE', 'Ilorin East', 'kwara', '240101', 1, 1, '10071-Screenshot_20200709-080149.png', '10071-Screenshot_20200709-080200.png', '10071-Screenshot_20200709-080210.png', '10071-', '10071-', '10071-', '10071-', '10071-', '10071-', '10071-', '10071-', '10071-', '10071-', '10071-', '10071-', 'yes', '2020-08-03 13:36:37'),
(124, 10072, 99, 'Mrfixer001@gmail.com', '4 BEDROOM FLAT, 2 BEDROOM FLAT IN SAME COMPOUND', '4 BEDROOM FLAT, 2 BEDROOM FLAT IN THE SAME COMPOUND WITH COMPLETE DOCUMENTS AT CHECKING POINT AREA, AIRPORT ROAD, ILORIN, KWARA STATE', 'house', 'Sale', 6, 5, 1, 'no', 50, '7000000', '', '', ',Balcony,Pet Friendly,,,,,,,,,,,', 'CHECKING POINT AREA, AIRPORT ROAD, ILORIN, KWARA STATE', 'Ilorin East', 'kwara', '240101', 1, 1, '10072-Screenshot_20200709-074538.png', '10072-Screenshot_20200709-074603.png', '10072-Screenshot_20200709-074621.png', '10072-Screenshot_20200709-074640.png', '10072-Screenshot_20200709-074705.png', '10072-Screenshot_20200709-074729.png', '10072-', '10072-', '10072-', '10072-', '10072-', '10072-', '10072-', '10072-', '10072-', 'yes', '2020-08-03 13:36:44'),
(125, 10073, 102, 'blessedceo20@gmail.com', 'DISTRESSED SALE OF LAND IN LEKKI PHASE1', 'DISTRESSED SALE AT LEKKI PHASE 1\\r\\n*Three and half plots  of land facing lekki beach road Jakande Roundabout lekki phase 1*\\r\\n*Less than 3 minutes walk from the expressway Opposite Shoprite.*\\r\\n\\r\\n *Normal Price #55M per plot*\\r\\n*Distressed price #30M per plot*\\r\\nFor more details\\r\\nCall or chat : +2347039695517', 'land', 'Sale', 0, 0, 0, 'no', 3, '30000000', '', '', ',,,,,,,,,,,,,', 'Jakande Roundabout Opposite Shoprite', 'Lekki Phase 1', 'lagos', '999999', 1, 0, '10073-IMG_20200708_083618.jpg', '10073-IMG_20200708_083434.jpg', '10073-IMG_20200708_083541.jpg', '10073-', '10073-', '10073-', '10073-', '10073-', '10073-', '10073-', '10073-', '10073-', '10073-', '10073-', '10073-', 'yes', '2020-08-03 13:36:59'),
(126, 10074, 97, 'emmanuelfemi888@gmail.com', 'A plot of land with uncompleted building on it', 'A plot of land with uncompleted building on it at agarawu bus stop along toll gate road ogun state.\\r\\nBore hole, suck away and well fenced on it.\\r\\nAsking price 14m\\r\\nDocument... Receipt land survey\\r\\n\\r\\nconsultant.....08096104169 https://wa.me/2348096104169', 'land', 'Sale', 0, 0, 2, 'no', 0, '14000000', '', '', ',,,,,,,,,,,,,', 'agarawu bus stop along toll gate road ogun state', 'Ado-Odo/Ota', 'ogun', '', 1, 0, '10074-Screenshot_20200706-210337.png', '10074-Screenshot_20200706-210259.png', '10074-Screenshot_20200706-210215.png', '10074-Screenshot_20200706-210355.png', '10074-', '10074-', '10074-', '10074-', '10074-', '10074-', '10074-', '10074-', '10074-', '10074-', '10074-', 'yes', '2020-08-03 13:37:06'),
(128, 10076, 106, 'michaeluduzoije@gmail.com', '50 HECTARES OF LAND IN GWAGWALADA,  ABUJA,  WITH SOME COMPLETED AND UNCOMPLETED BUILDINGS ', 'â€¢ 50 hectares of land situate in Gwagwalada, Abuja.\\r\\nâ€¢Property is semi fenced and contains some bungalows on it.\\r\\nâ€¢Suitable for an Estate development.\\r\\nâ€¢Good Road network.\\r\\nâ€¢Good and serene neighbourhood with security.\\r\\nâ€¢Inspection of property is available on request.', 'land', 'Sale', 0, 0, 0, 'yes', 500000, '800000000', '', '', ',,Pet Friendly,,,,,,,,,,,Emergency', 'Block 10,  lafia close, Area G,  Gariki,  Abuja', 'Gwagwalada', 'abuja', '', 1, 0, '10076-images (2)_1594586970795.jpg', '10076-images (1)_1594586833837.jpg', '10076-images (2).jpeg', '10076-images (1).jpeg', '10076-images.jpeg', '10076-', '10076-', '10076-', '10076-', '10076-', '10076-', '10076-', '10076-', '10076-', '10076-', 'yes', '2020-08-03 13:37:03'),
(129, 10077, 106, 'michaeluduzoije@gmail.com', 'WEST VILLE ESTATE,  ATAN/OTA,  OGUN STATE..WITH A REGISTERED SURVEY AND LAYOUT PLAN', 'A 600Sqm plot of land,  situate at West ville Estate,  Atan/ota,  ogun state,  with accessible road network, \\r\\nSecurity,  constant power supply in the neighbourhood.\\r\\nDevelopment is rapid in the area.', 'land', 'Sale', 0, 0, 0, 'no', 1, '1100000', '', '', ',,,,,,,,,,,,,', 'West ville Estate, Atan/ota,  Ogun state', 'Ado-Odo/Ota', 'ogun', '', 1, 0, '10077-IMG-20200711-WA0024.jpg', '10077-', '10077-', '10077-', '10077-', '10077-', '10077-', '10077-', '10077-', '10077-', '10077-', '10077-', '10077-', '10077-', '10077-', 'yes', '2020-08-03 13:37:31'),
(131, 10079, 106, 'michaeluduzoije@gmail.com', 'PROPERTY IN POKA TOWN,  ALONG CITY COLLEGE,  BESIDES SUGARLAND ESTATE,  EPE,  IYANA ILLOGB', 'A plot of empty land situate at Top hill Estate,  Poka town,  Along city college,  besides sugarland Estate, Epe,  iyana illogbo,  ogun state.\\r\\nTITLE: REGISTERED SURVEY AND LAYOUT', 'land', 'Sale', 0, 0, 0, 'no', 1, '3000000', '', '', ',,,,,,,,,,,,,', 'PROPERTY IN POKA TOWN,  ALONG CITY COLLEGE,  BESIDES SUGARLAND ESTATE,  EPE,  IYANA ILLOGBO,  OGUN STATE', 'Ado-Odo/Ota', 'ogun', '', 1, 0, '10079-IMG-20200711-WA0020.jpg', '10079-', '10079-', '10079-', '10079-', '10079-', '10079-', '10079-', '10079-', '10079-', '10079-', '10079-', '10079-', '10079-', '10079-', 'yes', '2020-08-03 13:37:36'),
(132, 10080, 106, 'michaeluduzoije@gmail.com', 'A PLOT OF LAND IN ELEGANCE ESTATE, BESIDES ELEGANZA  PALACE,  LEKKI LAGOS....VALID REGISTE', 'A plot of land strategically located in Elegance Estate,  lekki,  besides Eleganza palace.\\r\\nIdeal for those who love privacy and serenity.', 'land', 'Sale', 0, 0, 0, 'no', 1, '7000000', '', '', ',,Pet Friendly,,,,,,,,,,,', 'ELEGANCE ESTATE, BESIDES ELEGANZA  PALACE,  LEKKI LAGOS.', 'Lekki Phase 1', 'lagos', '', 1, 0, '10080-IMG-20200711-WA0009.jpg', '10080-', '10080-', '10080-', '10080-', '10080-', '10080-', '10080-', '10080-', '10080-', '10080-', '10080-', '10080-', '10080-', '10080-', 'yes', '2020-08-03 13:37:41'),
(133, 10081, 106, 'michaeluduzoije@gmail.com', 'PROVIDENCE COURT,  ELERENGBE,  IBEJU-LEKKI LAGOS', 'A plot of land located in one of the fastest developing areas in lagos,  with steady power supply,  good road network,  security. \\r\\nIdeal for residential properties.\\r\\nTitle: Registered Survey layout', 'land', 'Sale', 0, 0, 0, 'no', 1, '10000000', '', '', ',,,,,,,,,,,,,', 'PROVIDENCE COURT,  ELERENGBE,  IBEJU-LEKKI LAGOS', 'Ibeju', 'lagos', '', 1, 0, '10081-IMG-20200711-WA0014.jpg', '10081-', '10081-', '10081-', '10081-', '10081-', '10081-', '10081-', '10081-', '10081-', '10081-', '10081-', '10081-', '10081-', '10081-', 'yes', '2020-08-03 13:37:45'),
(134, 10082, 106, 'michaeluduzoije@gmail.com', 'PROPERTY LOCATED AT 6TH/7TH AVENUE,  FESTAC TOWN,  LAGOS', 'A very well mapped out plot of land in Festac town. Property is ideal for those that love comfort and class,  because it is located in one of the premium areas in the heart of lagos state.\\r\\nTitle: Valid Registered Survey layout', 'land', 'Sale', 0, 0, 0, 'no', 1, '12000000', '', '', ',,Pet Friendly,,,,,,,,,,,', 'PROPERTY LOCATED AT 6TH/7TH AVENUE,  FESTAC TOWN,  LAGOS', 'Amuwo-Odofin', 'lagos', '', 1, 0, '10082-IMG-20200711-WA0016.jpg', '10082-', '10082-', '10082-', '10082-', '10082-', '10082-', '10082-', '10082-', '10082-', '10082-', '10082-', '10082-', '10082-', '10082-', 'yes', '2020-08-03 13:37:51'),
(137, 10085, 0, '', 'Modern One Storey Building.', 'Modern upstairs of 2 units of 3 bedroom flats,2 units of 2 bedroom flats and one bed sitter in', 'house', 'Sale', 3, 3, 0, 'yes', 100, '38000000', '', '', ',,,,,,,,,,,,,', 'Around Niger Cat in Uvwie LGA.', 'Uvwie', 'delta', '', 1, 0, '10085-IMG-20200716-WA0014.jpg', '10085-IMG-20200716-WA0015.jpg', '10085-IMG-20200716-WA0013.jpg', '10085-IMG-20200716-WA0008.jpg', '10085-', '10085-', '10085-', '10085-', '10085-', '10085-', '10085-', '10085-', '10085-', '10085-', '10085-', 'yes', '2020-08-03 13:37:56'),
(138, 10086, 122, 'damilolaabidakun93@gmail.com', '2 bedroom flat', '2 bedroom detached flat at ascon bus stop ibafo', 'house', 'Sale', 2, 2, 0, 'yes', 500, '4500000', '', '', ',Balcony,,,Storage,,,,Laundry,,,,,', 'Ascon bus stop ibafo', 'Obafemi-Owode', 'ogun', '', 1, 0, '10086-FB_IMG_15956046546898524.jpg', '10086-', '10086-', '10086-', '10086-', '10086-', '10086-', '10086-', '10086-', '10086-', '10086-', '10086-', '10086-', '10086-', '10086-', 'yes', '2020-08-03 13:38:24'),
(139, 10087, 0, 'damilolaabidakun93@gmail.com', 'House for sale', '3 family bedroom flat on the upper floor and 3 mini flat on the ground floor', 'house', 'Sale', 6, 6, 1, 'yes', 750, '9000000', '', '', 'Center Cooling,Balcony,,Fire Alarm,Storage,,,,Laundry,,,,,Emergency', 'Iretiogo street ibafo', 'Obafemi-Owode', 'ogun', '', 1, 0, '10087-IMG_20200603_233340_354.jpg', '10087-IMG_20200603_233340_349.jpg', '10087-', '10087-', '10087-', '10087-', '10087-', '10087-', '10087-', '10087-', '10087-', '10087-', '10087-', '10087-', '10087-', 'yes', '2020-08-03 13:38:18'),
(140, 10088, 125, 'jossycool101@gmail.com', 'An Exquisite 5 Bedroom Duplex With Empty Land For Sale In Abuja', 'This property is a wonderful 5 Bedroom detached Duplex in a secure and cozy environment in Gwarinpa.\\r\\n\\r\\nFeatures:\\r\\n* 5 Bedrooms all with water heater/toilet/bath tubs/wardrobe of which three of the rooms upstairs has balconies\\r\\n* 2 Siting Rooms (downstairs and upstairs)\\r\\n* Study\\r\\n*A large kitchen and store\\r\\n* Large compound for several cars and a Hidden car park inside the building for an SUV/car (to hide your prized car from prying eyes).\\r\\n*A Boys/maid quarter which is a room self contained apartment\\r\\n*The compound is tiled and flowers trimmed beautifully, inside and outside the compound.\\r\\n* Borehole available too.\\r\\n* The plot has two main gates and it is a 1200sqm of which about 700sqm is undeveloped and you can sell or develop it.\\r\\n\\r\\nYou cant just miss this offer. Call now because offers are coming in.\\r\\n\\r\\nAsking Price: N180Million', 'house', 'Sale', 5, 5, 1, 'no', 1200, '180000000', '', '', ',Balcony,,,Storage,,Heating,,,,,,,Emergency', 'Gwarinpa Abuja', '', 'abuja', '', 1, 1, '10088-IMG-20200717-WA0024.jpg', '10088-IMG-20200717-WA0039.jpg', '10088-IMG-20200717-WA0025.jpg', '10088-IMG-20200717-WA0037.jpg', '10088-IMG-20200717-WA0033.jpg', '10088-IMG-20200717-WA0032.jpg', '10088-IMG-20200717-WA0031.jpg', '10088-IMG-20200717-WA0035.jpg', '10088-IMG-20200717-WA0029.jpg', '10088-IMG-20200717-WA0034.jpg', '10088-', '10088-IMG-20200717-WA0040 - Copy.jpg', '10088-IMG-20200717-WA0001.jpg', '10088-', '10088-IMG-20200717-WA0013.jpg', 'yes', '2020-08-08 08:23:45'),
(141, 10089, 126, 'bryamthomsonjack88.gk@gmail.com', 'Land', 'Sale Location: Atan/Ota, Idiroko Road, in Ogun State. Size: Measure 60 by 130 more than the normal Standard full plot. Title: Deed of Assignment/Purchase Receipt. Recommendations: No Issue. Interested persons should Contact 0704-655-5186.', 'land', 'Sale', 0, 0, 0, 'no', 60, '1600000', '', '', ',,,,,,,,,,,,,', 'Sale Location: Atan/Ota, Idiroko Road, in Ogun State. Size: Measure 60 by 130 more than the normal Standard full plot. Title: Deed of Assignment/Purchase Receipt. Recommendations: No Issue. Interested persons should Contact:: 0704-655-5186.', 'Ado-Odo/Ota', 'ogun', '234', 1, 1, '10089-IMG-20161228-WA0018.jpg', '10089-IMG-20161227-WA0006.jpg', '10089-IMG-20161228-WA0024.jpg', '10089-IMG-20161228-WA0025.jpg', '10089-', '10089-', '10089-', '10089-', '10089-', '10089-', '10089-', '10089-', '10089-', '10089-', '10089-', 'yes', '2020-08-03 13:38:07'),
(142, 10090, 127, 'sunkaanmi@gmail.com', 'Luxurious 4 Bedroom Apartment For Short-Let', 'A well furnished 4 Bedroom apartment sited at the heart of Lekki Phase 1 is available to serve your needs.\\r\\n\\r\\nThe facility offers;\\r\\n24 hours Electricity\\r\\nFree Wi-Fi\\r\\nFlat-screen TV with cable subscription\\r\\nBalcony\\r\\nWell Furnished Kitchen\\r\\nCCTV\\r\\nIntercom\\r\\n\\r\\nYou are guaranteed great value for your money.\\r\\nExtended stay attracts discount too.\r\n\r\n80000 per day', 'house', 'Rent', 4, 4, 0, 'no', 2, '80000', 'daily', '', 'Center Cooling,Balcony,,Fire Alarm,Storage,,Heating,,Laundry,,,,,Emergency', 'Mike Ejezie Street, Lekki Phase 1', 'Eti-Osa', 'lagos', '', 1, 1, '10090-IMG-20200318-WA0053.jpg', '10090-', '10090-', '10090-IMG-20200703-WA0020 - Copy.jpg', '10090-', '10090-', '10090-IMG-20200622-WA0011.jpg', '10090-IMG-20200625-WA0002 - Copy.jpg', '10090-', '10090-IMG-20200622-WA0010.jpg', '10090-', '10090-', '10090-IMG-20200716-WA0000 - Copy.jpg', '10090-', '10090-', 'yes', '2020-08-05 06:52:38'),
(143, 10091, 129, 'abolarinwajohson@yahoo.com', '5 bedroom for sale at Ojodu', '5 BEDROOM FULLY DETACHED HOUSE WITH GYM HOUSE, VISITORS HUT, CCTV, SECURITY HOUSE AND GENERATOR HOUSE ON 700 SQM OF LAND AT MINI ESTATE OFF GOODWILL ESTATE OJODU BERGER. Price 70M. Contact 08164970589', 'House', 'Sale', 5, 3, 0, 'Yes', 0, '70000000', NULL, '', 'Center cooling, Balcony, Pet Friendly, Storage, Heating, Gym, Emergency Exit', 'MINI ESTATE OFF GOODWILL ESTATE OJODU BERGER.', '', 'Lagos', '', 1, 1, '10091-2347066631810_status_01d639d33f7d472db2f2574bbccbb751.jpg', '10091-2347066631810_status_2858fb96110147749125b279dbf22329.jpg', '10091-2347066631810_status_8aec50ce7d94482c8cf22e96879b6641.jpg', '10091-2347066631810_status_bd274016efda4ca4b84642452f5bd31b.jpg', '10091-2347066631810_status_b92d67ae9ad245e185dd52879c918149.jpg', '10091-2347066631810_status_d2d00a08cd694c1299925e0e0edc55d4.jpg', '10091-2347066631810_status_007febb5e07443ed929466266d75a053.jpg', '', '', '', '', '', '', '', '', 'yes', '2020-08-05 06:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `property_reports`
--

CREATE TABLE `property_reports` (
  `id` int(11) NOT NULL,
  `prop_id` int(30) NOT NULL,
  `name` varchar(99) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `complains` text NOT NULL,
  `date_reported` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `attended_to` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pseudo`
--

CREATE TABLE `pseudo` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pseudo`
--

INSERT INTO `pseudo` (`id`, `name`, `email`, `phone`, `pass`) VALUES
(1, 'J', 'e', '0990909', 'p'),
(18, 'Jane oop', 'jane@doe.com', '08025170061', '8cb2237d0679ca88db6464eac60da96345513964');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `sender_id` varchar(11) NOT NULL,
  `receiver_id` varchar(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `prop_id` varchar(11) NOT NULL,
  `sender` varchar(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `sender_id`, `receiver_id`, `name`, `email`, `phone_no`, `title`, `message`, `prop_id`, `sender`, `created_at`, `updated_at`) VALUES
(1, '0', '0', '', '', '', '', '', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(2, '0', '0', '', '', '', '', '', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(3, '0', '0', '', '', '', '', '', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(4, '0', '0', '', '', '', '', '', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(5, '0', '0', '', '', '', '', '', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(6, '0', '0', '', '', '', '', '', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(7, '0', '0', '', '', '', '', '', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(8, '0', '0', '', '', '', '', '', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(9, '0', '0', '', '', '', '', '', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(10, '', '', '', '', '', '', '', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(11, '', '', '', '', '', '', '', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(12, '', '', '', '', '', '', '', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(13, '', '', '', '', '', '', '', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(14, '', '', '', '', '', '', '', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(15, '', '', '', '', '', '', '', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(16, '18', 'null', '', '', '', 'rtere', 'drttdffg', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(17, '18', '40', '', '', '', 'Heyyo', 'howdy', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(18, '', '', '', '', '', '', '', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(19, '', '', '', '', '', '', '', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(20, '', '', '', '', '', '', '', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(21, '10', '17', 'John', 'etyy', '2346', 'Request to view property', 'so dgge', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(22, '9', '18', 'Jeff', 'jeffukus@gmail.com', '08090345678', 'Request to view property', 'Request to view property', '10022', '9', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(23, '9', '18', 'Jeff', 'jeff@ukus.com', '0804567990', 'Request to view property', 'App', '10023', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(24, '18', '30', 'eyy', 'styu', 'dhhd', 'Request to view property', '56888', '10030', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(25, '18', '30', 'eyy', 'styu', 'dhhd', 'Request to view property', '56888', '10030', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(26, '18', '35', 'rghu', 'syu', '556788', 'Request to view property', 'dfhgfdf', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(27, '18', '35', 'rghu', 'syu', '556788', 'Request to view property', 'dfhgfdf', '10030', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(28, '18', '30', 'dghig', 'ertyu', '45678', 'Request to view property', 'xfggdf', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(29, '18', '30', 'dghig', 'ertyu', '45678', 'Request to view property', 'xfggdf', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(30, '18', '30', 'syhff', 'sf how dddh', '46789', 'Request to view property', 'dgkjcvmvmcggf', '', '18', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(31, '18', '35', 'uglory', 'ugloryose@gmail.com', '081372222', 'Request to view property', 'test', '', '18', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(32, '18', '35', 'uglory', 'ugloryose@gmail.com', '081372222', 'Request to view property', 'test', '', '18', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(33, '18', '30', 'ose', 'ose', '2345y7', 'Request to view property', 'test', '', '18', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(34, '18', '30', 'ose', 'ose', '2345y7', 'Request to view property', 'test', '', '18', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(35, '9', '18', '', '', '', 'Sending Message', 'Fix a date', '10022', '18', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(36, '30', '18', '', '', '', 'Sending Message', 'Hello', '', '18', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(37, '20', '18', '', '', '', 'Sending Message', 'Hello', '', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(38, '20', '18', '', '', '', 'Sending Message', 'Hello', '10023', '18', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(39, '20', '18', '', '', '', 'Sending Message', 'Hey, test', '10023', '18', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(40, '30', '18', '', '', '', 'Sending Message', 'Hello', '10022', '18', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(41, '30', '18', '', '', '', 'Sending Message', 'Hey', '10022', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(42, '30', '18', '', '', '', 'Sending Message', 'Hey', '10022', '0', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(43, '30', '18', '', '', '', 'Sending Message', 'See', '10022', '', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(44, '30', '18', '', '', '', 'Sending Message', 'Hey', '10022', '18', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(45, '20', '18', '', '', '', 'Sending Message', 'Hey to world', '10023', '18', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(46, '9', '18', '', '', '', 'Sending Message', 'Hello', '10022', '18', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(112, '9', '18', 'Hey', 'etyytr', 'pop', 'Request to view property', 'pubspeck', '10039', '9', '2020-03-12 09:19:20', '2020-03-12 09:19:20'),
(48, '20', '18', '', '', '', 'Sending Message', 'Zino', '10023', '18', '2020-03-05 09:50:33', '2020-03-05 09:50:33'),
(113, '9', '18', 'Ade', 'ery', '08095774335', 'Request to view property', 'adert,', '10039', '9', '2020-03-12 09:31:59', '2020-03-12 09:31:59'),
(51, '9', '18', '', '', '', 'Sending Message', 'Good', '10022', '18', '2020-03-05 10:14:57', '2020-03-05 10:14:57'),
(52, '9', '18', '', '', '', 'Sending Message', 'Are you okay?', '10022', '18', '2020-03-05 21:33:19', '2020-03-05 21:33:19'),
(53, '9', '30', 'Jo', 'charles12@gmail. com', '234566', 'Request to view property', 'Hello', '', '9', '2020-03-05 21:56:03', '2020-03-05 21:56:03'),
(54, '18', '30', 'Hey', 'jeffukus@gmail.com', '55788875', 'Request to view property', 'dey oo', '', '18', '2020-03-05 22:13:39', '2020-03-05 22:13:39'),
(55, '18', '30', 'ah', 'jeff', '466863', 'Request to view property', 'dhgs', '10020', '18', '2020-03-05 22:16:13', '2020-03-05 22:16:13'),
(125, '', '', '', '', '', '', '', '', '', '2020-03-21 22:08:25', '2020-03-21 22:08:25'),
(124, '', '', '', '', '', '', '', '', '', '2020-03-21 22:08:18', '2020-03-21 22:08:18'),
(123, '76', '27', '', '', '', 'Sending Message', 'testing tho', '10045', '27', '2020-03-21 21:52:07', '2020-03-21 21:52:07'),
(122, '76', '27', '', '', '', 'Sending Message', 'hi', '10045', '27', '2020-03-20 18:59:17', '2020-03-20 18:59:17'),
(121, '76', '27', '', '', '', 'Sending Message', 'hello', '10045', '27', '2020-03-14 18:53:59', '2020-03-14 18:53:59'),
(120, '76', '27', 'safe', 'safe', 'safe', 'Request to view property', 'please work', '10045', '76', '2020-03-14 18:50:19', '2020-03-14 18:50:19'),
(119, '76', '35', 'test', 'test', '0826266382', 'Request to view property', 'test', '10022', '76', '2020-03-14 18:43:24', '2020-03-14 18:43:24'),
(118, '76', '81', 'tesy', 'test@test.com', '0893373636', 'Request to view property', 'test is for tester ', '10045', '76', '2020-03-14 18:42:38', '2020-03-14 18:42:38'),
(117, '76', '76', '', '', '', 'Sending Message', ' u dere', '10045', '76', '2020-03-14 18:41:22', '2020-03-14 18:41:22'),
(116, '76', '81', 'david', 'arinzeaguolu@gmail.com ', '08119339239 ', 'Request to view property', 'Hello world', '10045', '76', '2020-03-14 18:38:58', '2020-03-14 18:38:58'),
(114, '27', '81', 'ugloryose', 'ugloryose@gmail.com', '08137201070', 'Request to view property', 'test', '10045', '27', '2020-03-12 10:39:26', '2020-03-12 10:39:26'),
(115, '76', '81', 'johnDoe', 'arinzeaguolu@gmail.com', '08119339239 ', 'Request to view property', 'Hello', '10045', '76', '2020-03-14 18:35:06', '2020-03-14 18:35:06'),
(132, '27', '27', '', '', '', 'Sending Message', 'ok.  thanks', '10020', '27', '2020-03-23 14:49:32', '2020-03-23 14:49:32'),
(131, '76', '27', '', '', '', 'Sending Message', 'how many days do we have to lauch? ', '10045', '27', '2020-03-23 14:45:26', '2020-03-23 14:45:26'),
(130, '76', '76', '', '', '', 'Sending Message', 'ok lets go', '10022', '76', '2020-03-22 16:25:58', '2020-03-22 16:25:58'),
(87, '9', '18', '', '', '', 'Sending Message', 'go', '10023', '18', '2020-03-07 16:10:01', '2020-03-07 16:10:01'),
(88, '9', '18', '', '', '', 'Sending Message', 'Ads', '10022', '18', '2020-03-07 16:15:11', '2020-03-07 16:15:11'),
(129, '76', '76', '', '', '', 'Sending Message', 'testing though', '10022', '76', '2020-03-22 16:19:47', '2020-03-22 16:19:47'),
(128, '76', '76', '', '', '', 'Sending Message', 'ok', '10045', '76', '2020-03-21 22:58:49', '2020-03-21 22:58:49'),
(91, '9', '18', '', '', '', 'Sending Message', 'App', '10022', '18', '2020-03-07 16:45:41', '2020-03-07 16:45:41'),
(92, '9', '18', '', '', '', 'Sending Message', 'Appp', '10022', '18', '2020-03-07 17:02:38', '2020-03-07 17:02:38'),
(93, '9', '18', '', '', '', 'Sending Message', 'Aop', '10022', '18', '2020-03-07 17:12:59', '2020-03-07 17:12:59'),
(95, '27', '81', 'glory', 'ugloryose@gmail.com', '', 'Request to view property', 'test', '10045', '27', '2020-03-09 16:59:55', '2020-03-09 16:59:55'),
(127, '27', '31', 'glory', 'gmail.com', '2345678', 'Request to view property', 'test in', '10020', '27', '2020-03-21 22:14:59', '2020-03-21 22:14:59'),
(98, '9', '18', '', '', '', 'Sending Message', 'Hey', '10023', '9', '2020-03-11 22:18:48', '2020-03-11 22:18:48'),
(126, '27', '31', 'glory', 'gmail.com', '2345678', 'Request to view property', 'test in', '10020', '27', '2020-03-21 22:14:59', '2020-03-21 22:14:59'),
(100, '9', '18', 'Asd', 'dfggh', '08097864543', 'Request to view property', 'Hey for checking', '10044', '9', '2020-03-12 00:45:39', '2020-03-12 00:45:39'),
(104, '9', '78', 'rhhfd', 'sfghg', '23567', 'Request to view property', 'dggdggg', '10042', '9', '2020-03-12 01:57:11', '2020-03-12 01:57:11'),
(105, '9', '18', 'dfggg', 'ergg', '134466', 'Request to view property', 'sfhhdf', '10042', '9', '2020-03-12 02:18:40', '2020-03-12 02:18:40'),
(106, '9', '27', 'Test', 'jane@doe.com', '08097867564', 'Request to view property', 'Test', '10045', '9', '2020-03-12 02:26:15', '2020-03-12 02:26:15'),
(107, '9', '18', '', '', '', 'Sending Message', 'Hey', '10022', '18', '2020-03-12 02:29:22', '2020-03-12 02:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `last_name` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `first_name` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `fullname` varchar(70) COLLATE latin1_general_ci NOT NULL,
  `usuere` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `ikasiye` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `old_passwd` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `account_type` int(2) NOT NULL COMMENT 'Check Account_types',
  `image` varchar(45) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `online` tinyint(1) NOT NULL DEFAULT 0,
  `lastactive` datetime NOT NULL,
  `active` tinyint(1) NOT NULL,
  `accesslog` int(7) NOT NULL,
  `lock_account` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'Lock is used to prevent system admin from being deleted by someone else'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `last_name`, `first_name`, `fullname`, `usuere`, `ikasiye`, `old_passwd`, `account_type`, `image`, `email`, `online`, `lastactive`, `active`, `accesslog`, `lock_account`) VALUES
(3, 'George', 'Thesent', 'Thesent George', 'thesent', '79188130a36466aefc65e6c488afdc6e43c8e585', 'cf0fbfbd4a26d502647cd391c29867bbbbc6d115', 1, 'thesent.jpg', 'thesent@gmail.com', 0, '2019-08-08 23:30:07', 1, 0, 1),
(18, 'Woke', 'Chima', 'Chima Woke', 'chymz', 'b5da199c0702ad9fbcf4642191189b06162427a1', '', 1, '', 'leslie.woke@yahoo.com', 1, '2020-01-17 11:32:11', 1, 0, 0),
(19, 'Derek', 'Sameer', 'Sameer Derek', 'Gohome.ng@gmail.com', '7861ef2cfc57f9678710ea6930c1c65de7447b88', '', 2, '', 'Gohome.ng@gmail.com', 1, '2020-08-10 03:27:28', 1, 0, 0),
(20, 'Web', 'SQT', 'SQT Web', 'administrator', '57af183c24d946111485b35d11d56aba16865b07', '', 1, '', 'renownjosimar@gmail.com', 1, '2020-10-06 16:23:53', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_accounttypes`
--

CREATE TABLE `users_accounttypes` (
  `id` int(2) NOT NULL,
  `title` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_accounttypes`
--

INSERT INTO `users_accounttypes` (`id`, `title`) VALUES
(0, 'Deleted'),
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Editor'),
(4, 'Subscriber');

-- --------------------------------------------------------

--
-- Table structure for table `users_statuses`
--

CREATE TABLE `users_statuses` (
  `id` int(2) NOT NULL,
  `title` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_statuses`
--

INSERT INTO `users_statuses` (`id`, `title`) VALUES
(0, 'Inactive'),
(1, 'Active'),
(2, 'Suspended');

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE `widgets` (
  `id` int(3) NOT NULL,
  `title` varchar(55) NOT NULL,
  `slug` varchar(90) NOT NULL,
  `usedfields` text NOT NULL,
  `fieldlabels` text NOT NULL,
  `requiredfields` text NOT NULL,
  `positions` int(3) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `widgets`
--

INSERT INTO `widgets` (`id`, `title`, `slug`, `usedfields`, `fieldlabels`, `requiredfields`, `positions`, `status`) VALUES
(1, 'Mainslider', 'mainslider', 'title, slug, image, excerpt, btn_url, btn_text', 'title=Title, slug=Slug, image=Image, excerpt=Excerpt, btn_url=Button URL, btn_text=Button Text', 'title, slug, image, excerpt', 0, 1),
(2, 'homevideo', 'homevideo', 'title, slug, image, excerpt, addfield1', 'title=Title, slug=Slug, image=Image, excerpt=Excerpt, addfield1=Youtube Video URL', 'title, slug, image, excerpt, addfield1', 0, 1),
(3, 'Pointers', 'pointers', 'title, slug, excerpt, addfield1', 'title=Title, slug=Slug, excerpt=Excerpt, addfield1=Icon Class', 'title, slug, excerpt, addfield1', 0, 1),
(4, 'Testimonials', 'testimonials', 'title, slug, image, excerpt, addfield1, addfield2', 'title=Title, slug=Slug, image=Image, excerpt=Excerpt, addfield1=Name of Testifier, addfield2=Title of Testifier', 'title, slug, excerpt, addfield1, addfield2', 0, 1),
(5, 'features-head', 'features-head', 'title, slug, excerpt', 'title=Title, slug=Slug, excerpt=Excerpt', 'title, slug, excerpt', 0, 1),
(6, 'features', 'features', 'title, slug, excerpt, addfield1', 'title=Title, slug=Slug, excerpt=Excerpt, addfield1=Icon name', 'title, slug, excerpt', 0, 1),
(7, 'Quick Links Menu', 'quick-links-menu', 'title, slug, btn_url, btn_text', 'title=Title, slug=Slug, btn_url=Btn_url, btn_text=Btn_text', 'title, slug, btn_url, btn_text', 0, 1),
(8, 'Recent_events', 'recent-events', 'title, slug, image, btn_url, addfield1', 'title=Title, slug=Slug, image=Image, btn_url=Button URL, addfield1=Date', 'title, slug, image, addfield1', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `widget_slides`
--

CREATE TABLE `widget_slides` (
  `id` int(5) NOT NULL,
  `title` varchar(90) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `widgid` int(3) NOT NULL,
  `image` varchar(45) NOT NULL,
  `thumb` varchar(55) NOT NULL,
  `image_align` varchar(10) NOT NULL,
  `author` varchar(55) NOT NULL,
  `excerpt` text NOT NULL,
  `content` longtext NOT NULL,
  `progress` int(3) NOT NULL,
  `btn_url` varchar(90) NOT NULL,
  `btn_text` varchar(45) NOT NULL,
  `tags` varchar(120) NOT NULL,
  `event_date` datetime NOT NULL,
  `address` varchar(90) NOT NULL,
  `position` int(3) NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `addfield1` varchar(250) NOT NULL COMMENT 'For Additional Data',
  `addfield2` varchar(250) NOT NULL COMMENT 'For Additional Data',
  `addfield3` varchar(250) NOT NULL COMMENT 'For Additional Data',
  `addfield4` varchar(250) NOT NULL COMMENT 'For Additional Data',
  `addfield5` longtext NOT NULL COMMENT 'For Long WriteUps',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `lock_post` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'lock posts to prevent accidental deletion'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'yes'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://blog.gohome.ng', 'yes'),
(2, 'home', 'http://blog.gohome.ng', 'yes'),
(3, 'blogname', 'Gohome blog', 'yes'),
(4, 'blogdescription', 'Home of Real Estate', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'gohome.ng@gmail.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '9', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '1', 'yes'),
(22, 'posts_per_page', '9', 'yes'),
(23, 'date_format', 'F j, Y', 'yes'),
(24, 'time_format', 'g:i a', 'yes'),
(25, 'links_updated_date_format', 'F j, Y g:i a', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%postname%/', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:5:{i:0;s:33:\"classic-editor/classic-editor.php\";i:1;s:36:\"contact-form-7/wp-contact-form-7.php\";i:2;s:43:\"google-analytics-dashboard-for-wp/gadwp.php\";i:3;s:41:\"sassy-social-share/sassy-social-share.php\";i:4;s:24:\"wordpress-seo/wp-seo.php\";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', 'a:5:{i:0;s:75:\"/home/gohomeng/public_html/blog/wp-content/themes/travelers-blog/header.php\";i:2;s:73:\"/home/gohomeng/public_html/blog/wp-content/themes/travelers-blog/page.php\";i:3;s:75:\"/home/gohomeng/public_html/blog/wp-content/themes/travelers-blog/single.php\";i:4;s:74:\"/home/gohomeng/public_html/blog/wp-content/themes/travelers-blog/style.css\";i:5;s:74:\"/home/gohomeng/public_html/blog/wp-content/themes/travelers-blog/index.php\";}', 'no'),
(40, 'template', 'travelers-blog', 'yes'),
(41, 'stylesheet', 'travelers-blog', 'yes'),
(42, 'comment_whitelist', '1', 'yes'),
(43, 'blacklist_keys', '', 'no'),
(44, 'comment_registration', '0', 'yes'),
(45, 'html_type', 'text/html', 'yes'),
(46, 'use_trackback', '0', 'yes'),
(47, 'default_role', 'subscriber', 'yes'),
(48, 'db_version', '45805', 'yes'),
(49, 'uploads_use_yearmonth_folders', '1', 'yes'),
(50, 'upload_path', '', 'yes'),
(51, 'blog_public', '1', 'yes'),
(52, 'default_link_category', '2', 'yes'),
(53, 'show_on_front', 'posts', 'yes'),
(54, 'tag_base', '', 'yes'),
(55, 'show_avatars', '1', 'yes'),
(56, 'avatar_rating', 'G', 'yes'),
(57, 'upload_url_path', '', 'yes'),
(58, 'thumbnail_size_w', '150', 'yes'),
(59, 'thumbnail_size_h', '150', 'yes'),
(60, 'thumbnail_crop', '1', 'yes'),
(61, 'medium_size_w', '300', 'yes'),
(62, 'medium_size_h', '300', 'yes'),
(63, 'avatar_default', 'mystery', 'yes'),
(64, 'large_size_w', '1024', 'yes'),
(65, 'large_size_h', '1024', 'yes'),
(66, 'image_default_link_type', 'none', 'yes'),
(67, 'image_default_size', '', 'yes'),
(68, 'image_default_align', '', 'yes'),
(69, 'close_comments_for_old_posts', '0', 'yes'),
(70, 'close_comments_days_old', '14', 'yes'),
(71, 'thread_comments', '1', 'yes'),
(72, 'thread_comments_depth', '5', 'yes'),
(73, 'page_comments', '0', 'yes'),
(74, 'comments_per_page', '50', 'yes'),
(75, 'default_comments_page', 'newest', 'yes'),
(76, 'comment_order', 'asc', 'yes'),
(77, 'sticky_posts', 'a:0:{}', 'yes'),
(78, 'widget_categories', 'a:2:{i:2;a:4:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:12:\"hierarchical\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(79, 'widget_text', 'a:2:{i:2;a:4:{s:5:\"title\";s:15:\"About GoHome NG\";s:4:\"text\";s:415:\"Gohome is a real estate marketplace found to provide you with all the valuable help and qualified information around the place you call home always according to the current market situation. Whether you own a property that you want to sell or rent, or, if you are looking to buy or rent houses, apartments, shops, plots, residential land, business-office space, etc, we will lead you to the most beneficial decision\";s:6:\"filter\";b:1;s:6:\"visual\";b:1;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(80, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(81, 'uninstall_plugins', 'a:2:{s:43:\"google-analytics-dashboard-for-wp/gadwp.php\";s:32:\"exactmetrics_lite_uninstall_hook\";s:33:\"classic-editor/classic-editor.php\";a:2:{i:0;s:14:\"Classic_Editor\";i:1;s:9:\"uninstall\";}}', 'no'),
(82, 'timezone_string', '', 'yes'),
(83, 'page_for_posts', '0', 'yes'),
(84, 'page_on_front', '0', 'yes'),
(85, 'default_post_format', '0', 'yes'),
(86, 'link_manager_enabled', '0', 'yes'),
(87, 'finished_splitting_shared_terms', '1', 'yes'),
(88, 'site_icon', '73', 'yes'),
(89, 'medium_large_size_w', '768', 'yes'),
(90, 'medium_large_size_h', '0', 'yes'),
(91, 'wp_page_for_privacy_policy', '3', 'yes'),
(92, 'show_comments_cookies_opt_in', '1', 'yes'),
(93, 'admin_email_lifespan', '1594992602', 'yes'),
(94, 'initial_db_version', '45805', 'yes'),
(95, 'wp_user_roles', 'a:7:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:62:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;s:20:\"wpseo_manage_options\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:35:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:15:\"wpseo_bulk_edit\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}s:13:\"wpseo_manager\";a:2:{s:4:\"name\";s:11:\"SEO Manager\";s:12:\"capabilities\";a:37:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:15:\"wpseo_bulk_edit\";b:1;s:28:\"wpseo_edit_advanced_metadata\";b:1;s:20:\"wpseo_manage_options\";b:1;}}s:12:\"wpseo_editor\";a:2:{s:4:\"name\";s:10:\"SEO Editor\";s:12:\"capabilities\";a:36:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:15:\"wpseo_bulk_edit\";b:1;s:28:\"wpseo_edit_advanced_metadata\";b:1;}}}', 'yes'),
(96, 'fresh_site', '0', 'yes'),
(97, 'widget_search', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(98, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(99, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(100, 'widget_archives', 'a:2:{i:2;a:3:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(101, 'widget_meta', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(102, 'sidebars_widgets', 'a:3:{s:19:\"wp_inactive_widgets\";a:6:{i:0;s:10:\"archives-2\";i:1;s:6:\"meta-2\";i:2;s:8:\"search-2\";i:3;s:12:\"categories-2\";i:4;s:14:\"recent-posts-2\";i:5;s:17:\"recent-comments-2\";}s:9:\"sidebar-2\";a:1:{i:0;s:6:\"text-2\";}s:13:\"array_version\";i:3;}', 'yes'),
(1299, '_transient_timeout_wpseo_link_table_inaccessible', '1614433403', 'no'),
(1300, '_transient_wpseo_link_table_inaccessible', '0', 'no'),
(1301, '_transient_timeout_wpseo_meta_table_inaccessible', '1614433403', 'no'),
(1302, '_transient_wpseo_meta_table_inaccessible', '0', 'no'),
(103, 'cron', 'a:8:{i:1597023003;a:4:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1597066203;a:1:{s:32:\"recovery_mode_clean_expired_keys\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1597066223;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1597066224;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1597067003;a:1:{s:19:\"wpseo-reindex-links\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1597412602;a:1:{s:18:\"wpseo_onpage_fetch\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"weekly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:604800;}}}i:1597446566;a:1:{s:32:\"exactmetrics_usage_tracking_cron\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"weekly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:604800;}}}s:7:\"version\";i:2;}', 'yes'),
(104, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(105, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(106, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(107, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(108, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(109, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(110, 'nonce_key', '690(qB845J1yH&HT2m>7n)H,f4;.J_I?FpGO^DT pMh^02ym/Wgeq-i(5Azaft{>', 'no'),
(111, 'nonce_salt', 'X?1bN<@{|H+U9ddDWC.MK `=wB}`u*RZdgsTfl-Rd0~ }~_(2Q4$.>(Rn%B_r8;L', 'no'),
(112, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(113, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(114, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(124, 'auth_key', 'Ew+PMQnsU0P]ZM^BE=f>|h=UhLP.5j~1d^awuCm2CyW*^cwEwX==pUiukgqH-]Ch', 'no'),
(116, 'recovery_keys', 'a:0:{}', 'yes'),
(122, 'theme_mods_twentytwenty', 'a:2:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1579440971;s:4:\"data\";a:3:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:1:{i:0;s:6:\"text-2\";}s:9:\"sidebar-2\";a:1:{i:0;s:6:\"text-3\";}}}}', 'yes'),
(152, 'nav_menu_options', 'a:1:{s:8:\"auto_add\";a:0:{}}', 'yes'),
(125, 'auth_salt', '[nOXRr@RjKvX41aj4dg T VvxU8V*^$$3N )-8?I<*~iKi:I4ugSZxjE$YD_a7s3', 'no'),
(126, 'logged_in_key', '%:|pRN^*=EzlNS.2_.B~E-BUGR6Mr!BPqXI^)jAAgW-wQe=gV`{4SsyHCc-1c2A}', 'no'),
(127, 'logged_in_salt', ':kvFy941[M}wU5ua2Q9e(i!>^|v|VPD}TMfkUlQ2Vn3A95>4Dk=<azFNqb<U7+By', 'no'),
(135, 'can_compress_scripts', '1', 'no'),
(1289, 'secure_auth_key', ']rs)3=LiNt&)=>4t84D>,CHfKP60MDN-8<7qr ~M^$I2?-w88/^8FF#_nJuS]+Ne', 'no'),
(1290, 'secure_auth_salt', 'E8z*T2OJ7w~JbS3_KXPGu%&(C*W>da/;:=S)~A[}:QjPUyqo:RH^/5.(&mm$zlAv', 'no'),
(1295, 'wpseo', 'a:20:{s:15:\"ms_defaults_set\";b:0;s:7:\"version\";s:4:\"13.1\";s:20:\"disableadvanced_meta\";b:1;s:19:\"onpage_indexability\";b:1;s:11:\"baiduverify\";s:0:\"\";s:12:\"googleverify\";s:0:\"\";s:8:\"msverify\";s:0:\"\";s:12:\"yandexverify\";s:0:\"\";s:9:\"site_type\";s:0:\"\";s:20:\"has_multiple_authors\";s:0:\"\";s:16:\"environment_type\";s:0:\"\";s:23:\"content_analysis_active\";b:1;s:23:\"keyword_analysis_active\";b:1;s:21:\"enable_admin_bar_menu\";b:1;s:26:\"enable_cornerstone_content\";b:1;s:18:\"enable_xml_sitemap\";b:1;s:24:\"enable_text_link_counter\";b:1;s:22:\"show_onboarding_notice\";b:1;s:18:\"first_activated_on\";i:1582897402;s:13:\"myyoast-oauth\";b:0;}', 'yes'),
(1296, 'wpseo_titles', 'a:71:{s:10:\"title_test\";i:0;s:17:\"forcerewritetitle\";b:0;s:9:\"separator\";s:7:\"sc-dash\";s:16:\"title-home-wpseo\";s:42:\"%%sitename%% %%page%% %%sep%% %%sitedesc%%\";s:18:\"title-author-wpseo\";s:41:\"%%name%%, Author at %%sitename%% %%page%%\";s:19:\"title-archive-wpseo\";s:38:\"%%date%% %%page%% %%sep%% %%sitename%%\";s:18:\"title-search-wpseo\";s:63:\"You searched for %%searchphrase%% %%page%% %%sep%% %%sitename%%\";s:15:\"title-404-wpseo\";s:35:\"Page not found %%sep%% %%sitename%%\";s:19:\"metadesc-home-wpseo\";s:0:\"\";s:21:\"metadesc-author-wpseo\";s:0:\"\";s:22:\"metadesc-archive-wpseo\";s:0:\"\";s:9:\"rssbefore\";s:0:\"\";s:8:\"rssafter\";s:53:\"The post %%POSTLINK%% appeared first on %%BLOGLINK%%.\";s:20:\"noindex-author-wpseo\";b:0;s:28:\"noindex-author-noposts-wpseo\";b:1;s:21:\"noindex-archive-wpseo\";b:1;s:14:\"disable-author\";b:0;s:12:\"disable-date\";b:0;s:19:\"disable-post_format\";b:0;s:18:\"disable-attachment\";b:1;s:23:\"is-media-purge-relevant\";b:0;s:20:\"breadcrumbs-404crumb\";s:25:\"Error 404: Page not found\";s:29:\"breadcrumbs-display-blog-page\";b:1;s:20:\"breadcrumbs-boldlast\";b:0;s:25:\"breadcrumbs-archiveprefix\";s:12:\"Archives for\";s:18:\"breadcrumbs-enable\";b:0;s:16:\"breadcrumbs-home\";s:4:\"Home\";s:18:\"breadcrumbs-prefix\";s:0:\"\";s:24:\"breadcrumbs-searchprefix\";s:16:\"You searched for\";s:15:\"breadcrumbs-sep\";s:7:\"&raquo;\";s:12:\"website_name\";s:0:\"\";s:11:\"person_name\";s:0:\"\";s:11:\"person_logo\";s:0:\"\";s:14:\"person_logo_id\";i:0;s:22:\"alternate_website_name\";s:0:\"\";s:12:\"company_logo\";s:0:\"\";s:15:\"company_logo_id\";i:0;s:12:\"company_name\";s:0:\"\";s:17:\"company_or_person\";s:7:\"company\";s:25:\"company_or_person_user_id\";b:0;s:17:\"stripcategorybase\";b:0;s:10:\"title-post\";s:39:\"%%title%% %%page%% %%sep%% %%sitename%%\";s:13:\"metadesc-post\";s:0:\"\";s:12:\"noindex-post\";b:0;s:13:\"showdate-post\";b:0;s:23:\"display-metabox-pt-post\";b:1;s:23:\"post_types-post-maintax\";i:0;s:10:\"title-page\";s:39:\"%%title%% %%page%% %%sep%% %%sitename%%\";s:13:\"metadesc-page\";s:0:\"\";s:12:\"noindex-page\";b:0;s:13:\"showdate-page\";b:0;s:23:\"display-metabox-pt-page\";b:1;s:23:\"post_types-page-maintax\";i:0;s:16:\"title-attachment\";s:39:\"%%title%% %%page%% %%sep%% %%sitename%%\";s:19:\"metadesc-attachment\";s:0:\"\";s:18:\"noindex-attachment\";b:0;s:19:\"showdate-attachment\";b:0;s:29:\"display-metabox-pt-attachment\";b:1;s:29:\"post_types-attachment-maintax\";i:0;s:18:\"title-tax-category\";s:53:\"%%term_title%% Archives %%page%% %%sep%% %%sitename%%\";s:21:\"metadesc-tax-category\";s:0:\"\";s:28:\"display-metabox-tax-category\";b:1;s:20:\"noindex-tax-category\";b:0;s:18:\"title-tax-post_tag\";s:53:\"%%term_title%% Archives %%page%% %%sep%% %%sitename%%\";s:21:\"metadesc-tax-post_tag\";s:0:\"\";s:28:\"display-metabox-tax-post_tag\";b:1;s:20:\"noindex-tax-post_tag\";b:0;s:21:\"title-tax-post_format\";s:53:\"%%term_title%% Archives %%page%% %%sep%% %%sitename%%\";s:24:\"metadesc-tax-post_format\";s:0:\"\";s:31:\"display-metabox-tax-post_format\";b:1;s:23:\"noindex-tax-post_format\";b:1;}', 'yes'),
(1297, 'wpseo_social', 'a:19:{s:13:\"facebook_site\";s:0:\"\";s:13:\"instagram_url\";s:0:\"\";s:12:\"linkedin_url\";s:0:\"\";s:11:\"myspace_url\";s:0:\"\";s:16:\"og_default_image\";s:0:\"\";s:19:\"og_default_image_id\";s:0:\"\";s:18:\"og_frontpage_title\";s:0:\"\";s:17:\"og_frontpage_desc\";s:0:\"\";s:18:\"og_frontpage_image\";s:0:\"\";s:21:\"og_frontpage_image_id\";s:0:\"\";s:9:\"opengraph\";b:1;s:13:\"pinterest_url\";s:0:\"\";s:15:\"pinterestverify\";s:0:\"\";s:7:\"twitter\";b:1;s:12:\"twitter_site\";s:0:\"\";s:17:\"twitter_card_type\";s:19:\"summary_large_image\";s:11:\"youtube_url\";s:0:\"\";s:13:\"wikipedia_url\";s:0:\"\";s:10:\"fbadminapp\";s:0:\"\";}', 'yes'),
(1298, 'wpseo_flush_rewrite', '1', 'yes'),
(1304, 'rewrite_rules', 'a:90:{s:19:\"sitemap_index\\.xml$\";s:19:\"index.php?sitemap=1\";s:31:\"([^/]+?)-sitemap([0-9]+)?\\.xml$\";s:51:\"index.php?sitemap=$matches[1]&sitemap_n=$matches[2]\";s:24:\"([a-z]+)?-?sitemap\\.xsl$\";s:39:\"index.php?yoast-sitemap-xsl=$matches[1]\";s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:12:\"robots\\.txt$\";s:18:\"index.php?robots=1\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";s:27:\"[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\"[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\"[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\"[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"([^/]+)/embed/?$\";s:37:\"index.php?name=$matches[1]&embed=true\";s:20:\"([^/]+)/trackback/?$\";s:31:\"index.php?name=$matches[1]&tb=1\";s:40:\"([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:35:\"([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:28:\"([^/]+)/page/?([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&paged=$matches[2]\";s:35:\"([^/]+)/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&cpage=$matches[2]\";s:24:\"([^/]+)(?:/([0-9]+))?/?$\";s:43:\"index.php?name=$matches[1]&page=$matches[2]\";s:16:\"[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:26:\"[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:46:\"[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:22:\"[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";}', 'yes'),
(1305, 'wpseo_onpage', 'a:2:{s:6:\"status\";i:1;s:10:\"last_fetch\";i:1596808024;}', 'yes'),
(455, 'wpcf7', 'a:2:{s:7:\"version\";s:5:\"5.1.6\";s:13:\"bulk_validate\";a:4:{s:9:\"timestamp\";i:1579957029;s:7:\"version\";s:5:\"5.1.6\";s:11:\"count_valid\";i:1;s:13:\"count_invalid\";i:0;}}', 'yes'),
(348, 'theme_mods_travelers-blog', 'a:4:{i:0;b:0;s:18:\"nav_menu_locations\";a:1:{s:6:\"menu-1\";i:2;}s:18:\"custom_css_post_id\";i:-1;s:11:\"custom_logo\";i:64;}', 'yes'),
(349, 'travelers_blog_hide_notice', '1', 'yes'),
(1250, 'exactmetrics_site_profile', 'a:1:{s:6:\"manual\";s:14:\"UA-157443853-1\";}', 'yes'),
(1251, 'exactmetrics_over_time', 'a:4:{s:17:\"installed_version\";s:5:\"6.0.2\";s:14:\"installed_date\";i:1582815385;s:13:\"installed_pro\";b:0;s:14:\"connected_date\";i:1582936553;}', 'yes'),
(1252, 'exactmetrics_db_version', '1.0.0', 'yes'),
(1253, 'exactmetrics_current_version', '6.0.2', 'yes'),
(1254, 'exactmetrics_settings', 'a:23:{s:22:\"enable_affiliate_links\";b:1;s:15:\"affiliate_links\";a:2:{i:0;a:2:{s:4:\"path\";s:4:\"/go/\";s:5:\"label\";s:9:\"affiliate\";}i:1;a:2:{s:4:\"path\";s:11:\"/recommend/\";s:5:\"label\";s:9:\"affiliate\";}}s:12:\"demographics\";i:0;s:12:\"ignore_users\";a:2:{i:0;s:13:\"administrator\";i:1;s:6:\"editor\";}s:19:\"dashboards_disabled\";i:0;s:13:\"anonymize_ips\";i:0;s:19:\"extensions_of_files\";s:35:\"zip,mp3,mpeg,pdf,docx,pptx,xlsx,rar\";s:18:\"subdomain_tracking\";s:0:\"\";s:16:\"link_attribution\";b:0;s:16:\"tag_links_in_rss\";b:1;s:12:\"allow_anchor\";i:0;s:16:\"add_allow_linker\";i:0;s:11:\"custom_code\";s:0:\"\";s:13:\"save_settings\";a:1:{i:0;s:13:\"administrator\";}s:12:\"view_reports\";a:2:{i:0;s:13:\"administrator\";i:1;s:6:\"editor\";}s:11:\"events_mode\";s:2:\"js\";s:13:\"tracking_mode\";s:9:\"analytics\";s:15:\"speedsamplerate\";i:1;s:10:\"samplerate\";i:100;s:17:\"automatic_updates\";s:5:\"minor\";s:17:\"custom_dimensions\";a:0:{}s:28:\"gatracker_compatibility_mode\";b:1;s:14:\"gadwp_migrated\";i:1582815385;}', 'yes'),
(1255, 'exactmetrics_review', 'a:2:{s:4:\"time\";i:1582815404;s:9:\"dismissed\";b:0;}', 'yes'),
(5254, '_site_transient_timeout_theme_roots', '1596995068', 'no'),
(5255, '_site_transient_theme_roots', 'a:7:{s:13:\"navolio-light\";s:7:\"/themes\";s:11:\"pokama-lite\";s:7:\"/themes\";s:14:\"travelers-blog\";s:7:\"/themes\";s:14:\"twentynineteen\";s:7:\"/themes\";s:15:\"twentyseventeen\";s:7:\"/themes\";s:13:\"twentysixteen\";s:7:\"/themes\";s:12:\"twentytwenty\";s:7:\"/themes\";}', 'no'),
(698, 'widget_gadwp-frontwidget-report', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(699, '_amn_exact-metrics_to_check', '1583074513', 'yes'),
(700, 'gadwp_redeemed_code', '4/wAG7cMoi_tgiq2xfoo2oY0xigw9JK-zE8KsB_yiOu9vd23IBa1zkELs', 'yes'),
(642, 'heateor_sss', 'a:76:{s:24:\"horizontal_sharing_shape\";s:9:\"rectangle\";s:23:\"horizontal_sharing_size\";s:2:\"35\";s:24:\"horizontal_sharing_width\";s:2:\"70\";s:25:\"horizontal_sharing_height\";s:2:\"35\";s:24:\"horizontal_border_radius\";s:0:\"\";s:29:\"horizontal_font_color_default\";s:0:\"\";s:32:\"horizontal_sharing_replace_color\";s:4:\"#fff\";s:27:\"horizontal_font_color_hover\";s:0:\"\";s:38:\"horizontal_sharing_replace_color_hover\";s:4:\"#fff\";s:27:\"horizontal_bg_color_default\";s:0:\"\";s:25:\"horizontal_bg_color_hover\";s:0:\"\";s:31:\"horizontal_border_width_default\";s:0:\"\";s:31:\"horizontal_border_color_default\";s:0:\"\";s:29:\"horizontal_border_width_hover\";s:0:\"\";s:29:\"horizontal_border_color_hover\";s:0:\"\";s:22:\"vertical_sharing_shape\";s:5:\"round\";s:21:\"vertical_sharing_size\";s:2:\"40\";s:22:\"vertical_sharing_width\";s:2:\"80\";s:23:\"vertical_sharing_height\";s:2:\"40\";s:22:\"vertical_border_radius\";s:0:\"\";s:27:\"vertical_font_color_default\";s:0:\"\";s:30:\"vertical_sharing_replace_color\";s:4:\"#fff\";s:25:\"vertical_font_color_hover\";s:0:\"\";s:36:\"vertical_sharing_replace_color_hover\";s:4:\"#fff\";s:25:\"vertical_bg_color_default\";s:0:\"\";s:23:\"vertical_bg_color_hover\";s:0:\"\";s:29:\"vertical_border_width_default\";s:0:\"\";s:29:\"vertical_border_color_default\";s:0:\"\";s:27:\"vertical_border_width_hover\";s:0:\"\";s:27:\"vertical_border_color_hover\";s:0:\"\";s:10:\"hor_enable\";s:1:\"1\";s:21:\"horizontal_target_url\";s:7:\"default\";s:28:\"horizontal_target_url_custom\";s:0:\"\";s:5:\"title\";s:15:\"Spread the love\";s:18:\"instagram_username\";s:0:\"\";s:16:\"youtube_username\";s:0:\"\";s:20:\"comment_container_id\";s:7:\"respond\";s:23:\"horizontal_re_providers\";a:4:{i:0;s:8:\"facebook\";i:1;s:7:\"twitter\";i:2;s:8:\"linkedin\";i:3;s:8:\"whatsapp\";}s:21:\"hor_sharing_alignment\";s:4:\"left\";s:6:\"bottom\";s:1:\"1\";s:4:\"post\";s:1:\"1\";s:4:\"page\";s:1:\"1\";s:15:\"horizontal_more\";s:1:\"1\";s:15:\"vertical_enable\";s:1:\"1\";s:19:\"vertical_target_url\";s:7:\"default\";s:26:\"vertical_target_url_custom\";s:0:\"\";s:27:\"vertical_instagram_username\";s:0:\"\";s:25:\"vertical_youtube_username\";s:0:\"\";s:29:\"vertical_comment_container_id\";s:7:\"respond\";s:21:\"vertical_re_providers\";a:4:{i:0;s:8:\"facebook\";i:1;s:7:\"twitter\";i:2;s:8:\"linkedin\";i:3;s:8:\"whatsapp\";}s:11:\"vertical_bg\";s:0:\"\";s:9:\"alignment\";s:5:\"right\";s:11:\"left_offset\";s:3:\"-10\";s:12:\"right_offset\";s:3:\"-10\";s:10:\"top_offset\";s:3:\"100\";s:13:\"vertical_post\";s:1:\"1\";s:13:\"vertical_page\";s:1:\"1\";s:13:\"vertical_more\";s:1:\"1\";s:21:\"vertical_screen_width\";s:3:\"783\";s:23:\"horizontal_screen_width\";s:3:\"783\";s:23:\"bottom_sharing_position\";s:1:\"0\";s:24:\"bottom_sharing_alignment\";s:4:\"left\";s:29:\"bottom_sharing_position_radio\";s:10:\"responsive\";s:6:\"fb_key\";s:0:\"\";s:9:\"fb_secret\";s:0:\"\";s:13:\"footer_script\";s:1:\"1\";s:14:\"delete_options\";s:1:\"1\";s:31:\"share_count_cache_refresh_count\";s:2:\"10\";s:30:\"share_count_cache_refresh_unit\";s:7:\"minutes\";s:14:\"bitly_username\";s:0:\"\";s:9:\"bitly_key\";s:0:\"\";s:8:\"language\";s:5:\"en_US\";s:16:\"twitter_username\";s:0:\"\";s:15:\"buffer_username\";s:0:\"\";s:10:\"amp_enable\";s:1:\"1\";s:10:\"custom_css\";s:0:\"\";}', 'yes'),
(643, 'heateor_sss_version', '3.3.8', 'yes'),
(651, 'heateor_sss_gdpr_notification_read', '1', 'yes'),
(646, 'widget_heateor_sss_sharing', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(647, 'widget_heateor_sss_floating_sharing', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(648, 'widget_heateor_sss_follow', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(663, '_transient_health-check-site-status-result', '{\"good\":\"11\",\"recommended\":\"5\",\"critical\":\"1\"}', 'yes'),
(147, 'theme_mods_pokama-lite', 'a:9:{s:18:\"custom_css_post_id\";i:-1;s:16:\"background_color\";s:6:\"ffffff\";s:24:\"pokama_lite_home_sidebar\";i:1;s:18:\"nav_menu_locations\";a:1:{s:7:\"primary\";i:2;}s:24:\"pokama_lite_sidebar_post\";i:0;s:24:\"pokama_lite_sidebar_page\";i:0;s:11:\"custom_logo\";s:0:\"\";s:23:\"pokamalite_featured_top\";i:1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1579939548;s:4:\"data\";a:7:{s:19:\"wp_inactive_widgets\";a:6:{i:0;s:10:\"archives-2\";i:1;s:6:\"meta-2\";i:2;s:8:\"search-2\";i:3;s:12:\"categories-2\";i:4;s:14:\"recent-posts-2\";i:5;s:17:\"recent-comments-2\";}s:9:\"sidebar-1\";a:1:{i:0;s:6:\"text-2\";}s:9:\"sidebar-2\";a:1:{i:0;s:6:\"text-3\";}s:8:\"footer-1\";a:0:{}s:8:\"footer-2\";a:0:{}s:8:\"footer-3\";a:0:{}s:8:\"footer-4\";a:0:{}}}}', 'yes'),
(149, 'current_theme', 'Travelers Blog', 'yes'),
(150, 'theme_switched', '', 'yes'),
(151, 'theme_switched_via_customizer', '', 'yes'),
(1311, 'exactmetrics_frontend_tracking_notice_viewed', '1', 'yes'),
(153, 'customize_stashed_theme_mods', 'a:1:{s:12:\"twentytwenty\";a:3:{s:27:\"nav_menu_locations[primary]\";a:5:{s:15:\"starter_content\";b:1;s:5:\"value\";i:-1;s:4:\"type\";s:9:\"theme_mod\";s:7:\"user_id\";i:1;s:17:\"date_modified_gmt\";s:19:\"2020-01-19 13:31:57\";}s:28:\"nav_menu_locations[expanded]\";a:5:{s:15:\"starter_content\";b:1;s:5:\"value\";i:-5;s:4:\"type\";s:9:\"theme_mod\";s:7:\"user_id\";i:1;s:17:\"date_modified_gmt\";s:19:\"2020-01-19 13:31:57\";}s:26:\"nav_menu_locations[social]\";a:5:{s:15:\"starter_content\";b:1;s:5:\"value\";i:-9;s:4:\"type\";s:9:\"theme_mod\";s:7:\"user_id\";i:1;s:17:\"date_modified_gmt\";s:19:\"2020-01-19 13:31:57\";}}}', 'no'),
(156, 'theme_mods_navolio-light', 'a:3:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1579938996;s:4:\"data\";a:9:{s:19:\"wp_inactive_widgets\";a:6:{i:0;s:10:\"archives-2\";i:1;s:6:\"meta-2\";i:2;s:8:\"search-2\";i:3;s:12:\"categories-2\";i:4;s:14:\"recent-posts-2\";i:5;s:17:\"recent-comments-2\";}s:12:\"sidebar-blog\";a:1:{i:0;s:6:\"text-2\";}s:14:\"sidebar-single\";a:1:{i:0;s:6:\"text-3\";}s:10:\"footer-one\";a:0:{}s:10:\"footer-two\";a:0:{}s:12:\"footer-three\";a:0:{}s:11:\"footer-four\";a:0:{}s:9:\"sidebar-1\";a:0:{}s:9:\"sidebar-2\";a:0:{}}}s:18:\"nav_menu_locations\";a:1:{s:9:\"main-menu\";i:2;}}', 'yes'),
(160, 'recently_activated', 'a:0:{}', 'yes'),
(568, 'category_children', 'a:1:{i:1;a:4:{i:0;i:6;i:1;i:7;i:2;i:8;i:3;i:9;}}', 'yes'),
(309, '_transient_pokama_lite_categories', '1', 'yes'),
(5256, '_site_transient_update_themes', 'O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1596993268;s:7:\"checked\";a:7:{s:13:\"navolio-light\";s:7:\"1.0.9.3\";s:11:\"pokama-lite\";s:5:\"1.0.3\";s:14:\"travelers-blog\";s:3:\"1.0\";s:14:\"twentynineteen\";s:3:\"1.4\";s:15:\"twentyseventeen\";s:3:\"2.2\";s:13:\"twentysixteen\";s:3:\"2.0\";s:12:\"twentytwenty\";s:3:\"1.1\";}s:8:\"response\";a:6:{s:11:\"pokama-lite\";a:6:{s:5:\"theme\";s:11:\"pokama-lite\";s:11:\"new_version\";s:5:\"1.0.6\";s:3:\"url\";s:41:\"https://wordpress.org/themes/pokama-lite/\";s:7:\"package\";s:59:\"https://downloads.wordpress.org/theme/pokama-lite.1.0.6.zip\";s:8:\"requires\";s:3:\"4.5\";s:12:\"requires_php\";b:0;}s:14:\"travelers-blog\";a:6:{s:5:\"theme\";s:14:\"travelers-blog\";s:11:\"new_version\";s:3:\"1.2\";s:3:\"url\";s:44:\"https://wordpress.org/themes/travelers-blog/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/theme/travelers-blog.1.2.zip\";s:8:\"requires\";s:3:\"4.9\";s:12:\"requires_php\";s:3:\"5.6\";}s:14:\"twentynineteen\";a:6:{s:5:\"theme\";s:14:\"twentynineteen\";s:11:\"new_version\";s:3:\"1.6\";s:3:\"url\";s:44:\"https://wordpress.org/themes/twentynineteen/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/theme/twentynineteen.1.6.zip\";s:8:\"requires\";s:5:\"4.9.6\";s:12:\"requires_php\";s:5:\"5.2.4\";}s:15:\"twentyseventeen\";a:6:{s:5:\"theme\";s:15:\"twentyseventeen\";s:11:\"new_version\";s:3:\"2.3\";s:3:\"url\";s:45:\"https://wordpress.org/themes/twentyseventeen/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/theme/twentyseventeen.2.3.zip\";s:8:\"requires\";s:3:\"4.7\";s:12:\"requires_php\";s:5:\"5.2.4\";}s:13:\"twentysixteen\";a:6:{s:5:\"theme\";s:13:\"twentysixteen\";s:11:\"new_version\";s:3:\"2.1\";s:3:\"url\";s:43:\"https://wordpress.org/themes/twentysixteen/\";s:7:\"package\";s:59:\"https://downloads.wordpress.org/theme/twentysixteen.2.1.zip\";s:8:\"requires\";s:3:\"4.4\";s:12:\"requires_php\";s:5:\"5.2.4\";}s:12:\"twentytwenty\";a:6:{s:5:\"theme\";s:12:\"twentytwenty\";s:11:\"new_version\";s:3:\"1.4\";s:3:\"url\";s:42:\"https://wordpress.org/themes/twentytwenty/\";s:7:\"package\";s:58:\"https://downloads.wordpress.org/theme/twentytwenty.1.4.zip\";s:8:\"requires\";s:3:\"4.7\";s:12:\"requires_php\";s:5:\"5.2.4\";}}s:12:\"translations\";a:0:{}}', 'no'),
(5257, '_site_transient_update_plugins', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1596993269;s:7:\"checked\";a:7:{s:19:\"akismet/akismet.php\";s:5:\"4.1.3\";s:33:\"classic-editor/classic-editor.php\";s:3:\"1.5\";s:36:\"contact-form-7/wp-contact-form-7.php\";s:5:\"5.1.6\";s:43:\"google-analytics-dashboard-for-wp/gadwp.php\";s:5:\"6.0.2\";s:9:\"hello.php\";s:5:\"1.7.2\";s:41:\"sassy-social-share/sassy-social-share.php\";s:5:\"3.3.8\";s:24:\"wordpress-seo/wp-seo.php\";s:4:\"13.1\";}s:8:\"response\";a:5:{s:19:\"akismet/akismet.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:21:\"w.org/plugins/akismet\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:5:\"4.1.6\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:56:\"https://downloads.wordpress.org/plugin/akismet.4.1.6.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:59:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272\";s:2:\"1x\";s:59:\"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:61:\"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:5:\"5.4.2\";s:12:\"requires_php\";b:0;s:13:\"compatibility\";O:8:\"stdClass\":0:{}}s:36:\"contact-form-7/wp-contact-form-7.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:28:\"w.org/plugins/contact-form-7\";s:4:\"slug\";s:14:\"contact-form-7\";s:6:\"plugin\";s:36:\"contact-form-7/wp-contact-form-7.php\";s:11:\"new_version\";s:5:\"5.2.1\";s:3:\"url\";s:45:\"https://wordpress.org/plugins/contact-form-7/\";s:7:\"package\";s:63:\"https://downloads.wordpress.org/plugin/contact-form-7.5.2.1.zip\";s:5:\"icons\";a:3:{s:2:\"2x\";s:67:\"https://ps.w.org/contact-form-7/assets/icon-256x256.png?rev=2279696\";s:2:\"1x\";s:59:\"https://ps.w.org/contact-form-7/assets/icon.svg?rev=2339255\";s:3:\"svg\";s:59:\"https://ps.w.org/contact-form-7/assets/icon.svg?rev=2339255\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:69:\"https://ps.w.org/contact-form-7/assets/banner-1544x500.png?rev=860901\";s:2:\"1x\";s:68:\"https://ps.w.org/contact-form-7/assets/banner-772x250.png?rev=880427\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:3:\"5.5\";s:12:\"requires_php\";b:0;s:13:\"compatibility\";O:8:\"stdClass\":0:{}}s:43:\"google-analytics-dashboard-for-wp/gadwp.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:47:\"w.org/plugins/google-analytics-dashboard-for-wp\";s:4:\"slug\";s:33:\"google-analytics-dashboard-for-wp\";s:6:\"plugin\";s:43:\"google-analytics-dashboard-for-wp/gadwp.php\";s:11:\"new_version\";s:5:\"6.2.1\";s:3:\"url\";s:64:\"https://wordpress.org/plugins/google-analytics-dashboard-for-wp/\";s:7:\"package\";s:82:\"https://downloads.wordpress.org/plugin/google-analytics-dashboard-for-wp.6.2.1.zip\";s:5:\"icons\";a:3:{s:2:\"2x\";s:86:\"https://ps.w.org/google-analytics-dashboard-for-wp/assets/icon-256x256.png?rev=2243225\";s:2:\"1x\";s:78:\"https://ps.w.org/google-analytics-dashboard-for-wp/assets/icon.svg?rev=2243225\";s:3:\"svg\";s:78:\"https://ps.w.org/google-analytics-dashboard-for-wp/assets/icon.svg?rev=2243225\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:89:\"https://ps.w.org/google-analytics-dashboard-for-wp/assets/banner-1544x500.png?rev=2243446\";s:2:\"1x\";s:88:\"https://ps.w.org/google-analytics-dashboard-for-wp/assets/banner-772x250.png?rev=2243446\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:3:\"5.5\";s:12:\"requires_php\";s:3:\"5.2\";s:13:\"compatibility\";O:8:\"stdClass\":0:{}}s:41:\"sassy-social-share/sassy-social-share.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:32:\"w.org/plugins/sassy-social-share\";s:4:\"slug\";s:18:\"sassy-social-share\";s:6:\"plugin\";s:41:\"sassy-social-share/sassy-social-share.php\";s:11:\"new_version\";s:6:\"3.3.10\";s:3:\"url\";s:49:\"https://wordpress.org/plugins/sassy-social-share/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/plugin/sassy-social-share.zip\";s:5:\"icons\";a:1:{s:2:\"1x\";s:71:\"https://ps.w.org/sassy-social-share/assets/icon-128x128.png?rev=1300723\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:73:\"https://ps.w.org/sassy-social-share/assets/banner-772x250.png?rev=1866721\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:5:\"5.4.2\";s:12:\"requires_php\";b:0;s:13:\"compatibility\";O:8:\"stdClass\":0:{}}s:24:\"wordpress-seo/wp-seo.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:27:\"w.org/plugins/wordpress-seo\";s:4:\"slug\";s:13:\"wordpress-seo\";s:6:\"plugin\";s:24:\"wordpress-seo/wp-seo.php\";s:11:\"new_version\";s:4:\"14.7\";s:3:\"url\";s:44:\"https://wordpress.org/plugins/wordpress-seo/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/plugin/wordpress-seo.14.7.zip\";s:5:\"icons\";a:3:{s:2:\"2x\";s:66:\"https://ps.w.org/wordpress-seo/assets/icon-256x256.png?rev=1834347\";s:2:\"1x\";s:58:\"https://ps.w.org/wordpress-seo/assets/icon.svg?rev=1946641\";s:3:\"svg\";s:58:\"https://ps.w.org/wordpress-seo/assets/icon.svg?rev=1946641\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:69:\"https://ps.w.org/wordpress-seo/assets/banner-1544x500.png?rev=1843435\";s:2:\"1x\";s:68:\"https://ps.w.org/wordpress-seo/assets/banner-772x250.png?rev=1843435\";}s:11:\"banners_rtl\";a:2:{s:2:\"2x\";s:73:\"https://ps.w.org/wordpress-seo/assets/banner-1544x500-rtl.png?rev=1843435\";s:2:\"1x\";s:72:\"https://ps.w.org/wordpress-seo/assets/banner-772x250-rtl.png?rev=1843435\";}s:6:\"tested\";s:3:\"5.5\";s:12:\"requires_php\";s:6:\"5.6.20\";s:13:\"compatibility\";O:8:\"stdClass\":0:{}}}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:2:{s:33:\"classic-editor/classic-editor.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:28:\"w.org/plugins/classic-editor\";s:4:\"slug\";s:14:\"classic-editor\";s:6:\"plugin\";s:33:\"classic-editor/classic-editor.php\";s:11:\"new_version\";s:3:\"1.5\";s:3:\"url\";s:45:\"https://wordpress.org/plugins/classic-editor/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/plugin/classic-editor.1.5.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:67:\"https://ps.w.org/classic-editor/assets/icon-256x256.png?rev=1998671\";s:2:\"1x\";s:67:\"https://ps.w.org/classic-editor/assets/icon-128x128.png?rev=1998671\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:70:\"https://ps.w.org/classic-editor/assets/banner-1544x500.png?rev=1998671\";s:2:\"1x\";s:69:\"https://ps.w.org/classic-editor/assets/banner-772x250.png?rev=1998676\";}s:11:\"banners_rtl\";a:0:{}}s:9:\"hello.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:25:\"w.org/plugins/hello-dolly\";s:4:\"slug\";s:11:\"hello-dolly\";s:6:\"plugin\";s:9:\"hello.php\";s:11:\"new_version\";s:5:\"1.7.2\";s:3:\"url\";s:42:\"https://wordpress.org/plugins/hello-dolly/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/plugin/hello-dolly.1.7.2.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=2052855\";s:2:\"1x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-128x128.jpg?rev=2052855\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:66:\"https://ps.w.org/hello-dolly/assets/banner-772x250.jpg?rev=2052855\";}s:11:\"banners_rtl\";a:0:{}}}}', 'no'),
(2675, 'auto_core_update_notified', 'a:4:{s:4:\"type\";s:7:\"success\";s:5:\"email\";s:19:\"gohome.ng@gmail.com\";s:7:\"version\";s:5:\"5.3.4\";s:9:\"timestamp\";i:1591853596;}', 'no'),
(1249, 'exactmetrics_usage_tracking_config', 'a:6:{s:3:\"day\";i:5;s:4:\"hour\";i:23;s:6:\"minute\";i:9;s:6:\"second\";i:26;s:6:\"offset\";i:515366;s:8:\"initsend\";i:1583536166;}', 'yes');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(697, 'gadwp_options', '{\"client_id\":\"\",\"client_secret\":\"\",\"access_front\":[\"administrator\"],\"access_back\":[\"administrator\"],\"tableid_jail\":\"210649513\",\"theme_color\":\"#1e73be\",\"switch_profile\":0,\"tracking_type\":\"universal\",\"ga_anonymize_ip\":0,\"user_api\":0,\"ga_event_tracking\":0,\"ga_event_downloads\":\"zip|mp3*|mpe*g|pdf|docx*|pptx*|xlsx*|rar*\",\"track_exclude\":[],\"ga_target_geomap\":\"\",\"ga_realtime_pages\":10,\"token\":\"{\\\"access_token\\\":\\\"ya29.a0Adw1xeVCsdzaLEA_URjkp2HCcyUCynPcz52u3kMW9rvG_-QHCilT_cVoO8mHs8b8O7zhjsLvB89-V1FO7YZLqvx4lu4nISq1WJRngIVLrZRC9U3ZaDphSqIaroYVD8WIoNgUXy5-TIhuKBcb-Hik6io8R6tu-WUPKlGeOQ\\\",\\\"expires_in\\\":3599,\\\"refresh_token\\\":\\\"1\\\\\\/\\\\\\/0dO0AVcAP4TGlCgYIARAAGA0SNwF-L9IrYlhTiLDBSxMxcGVdS7FuGkk_iqWeYD2p3RsI3g7Zg3dzKMwYv_RgIHUR_MMRhBLTeD4\\\",\\\"scope\\\":\\\"https:\\\\\\/\\\\\\/www.googleapis.com\\\\\\/auth\\\\\\/analytics.readonly\\\",\\\"token_type\\\":\\\"Bearer\\\",\\\"created\\\":1582815319}\",\"ga_profiles_list\":[[\"All Web Site Data\",\"210649513\",\"UA-157443853-1\",\"http:\\/\\/blog.gohome.ng\\/\",3600,\"Africa\\/Lagos\",null]],\"ga_enhanced_links\":0,\"ga_remarketing\":0,\"network_mode\":0,\"ga_speed_samplerate\":1,\"ga_user_samplerate\":100,\"ga_event_bouncerate\":0,\"ga_crossdomain_tracking\":0,\"ga_crossdomain_list\":\"\",\"ga_author_dimindex\":0,\"ga_category_dimindex\":0,\"ga_tag_dimindex\":0,\"ga_user_dimindex\":0,\"ga_pubyear_dimindex\":0,\"ga_pubyearmonth_dimindex\":0,\"ga_aff_tracking\":0,\"ga_event_affiliates\":\"\\/out\\/\",\"automatic_updates_minorversion\":\"1\",\"backend_item_reports\":1,\"backend_realtime_report\":0,\"frontend_item_reports\":0,\"dashboard_widget\":1,\"api_backoff\":0,\"ga_cookiedomain\":\"\",\"ga_cookiename\":\"\",\"ga_cookieexpires\":\"\",\"pagetitle_404\":\"Page Not Found\",\"maps_api_key\":\"\",\"tm_author_var\":0,\"tm_category_var\":0,\"tm_tag_var\":0,\"tm_user_var\":0,\"tm_pubyear_var\":0,\"tm_pubyearmonth_var\":0,\"web_containerid\":\"\",\"amp_containerid\":\"\",\"amp_tracking_tagmanager\":0,\"amp_tracking_analytics\":0,\"amp_tracking_clientidapi\":0,\"trackingcode_infooter\":0,\"trackingevents_infooter\":0,\"ecommerce_mode\":\"disabled\",\"ga_formsubmit_tracking\":0,\"optimize_tracking\":0,\"optimize_containerid\":\"\",\"optimize_pagehiding\":0,\"superadmin_tracking\":0,\"ga_pagescrolldepth_tracking\":0,\"tm_pagescrolldepth_tracking\":0,\"ga_event_precision\":0,\"ga_force_ssl\":0,\"with_endpoint\":1,\"ga_optout\":0,\"ga_dnt_optout\":0,\"tm_optout\":0,\"tm_dnt_optout\":0,\"ga_with_gtag\":0,\"usage_tracking\":0,\"hide_am_notices\":0,\"network_hide_am_notices\":0,\"ga_enhanced_excludesa\":0,\"ga_hash_tracking\":0,\"gadwp_hidden\":\"Y\"}', 'yes'),
(1242, 'gadwp_cache_qr2_437729683', 'a:2:{s:5:\"value\";O:31:\"Deconf_Service_Analytics_GaData\":24:{s:17:\"\0*\0collection_key\";s:4:\"rows\";s:25:\"\0*\0internal_gapi_mappings\";a:0:{}s:20:\"\0*\0columnHeadersType\";s:44:\"Deconf_Service_Analytics_GaDataColumnHeaders\";s:24:\"\0*\0columnHeadersDataType\";s:5:\"array\";s:19:\"containsSampledData\";b:0;s:16:\"\0*\0dataTableType\";s:40:\"Deconf_Service_Analytics_GaDataDataTable\";s:20:\"\0*\0dataTableDataType\";s:0:\"\";s:2:\"id\";s:160:\"https://www.googleapis.com/analytics/v3/data/ga?ids=ga:210649513&dimensions=ga:date,ga:dayOfWeekName&metrics=ga:sessions&start-date=30daysAgo&end-date=yesterday\";s:12:\"itemsPerPage\";i:1000;s:4:\"kind\";s:16:\"analytics#gaData\";s:8:\"nextLink\";N;s:12:\"previousLink\";N;s:18:\"\0*\0profileInfoType\";s:42:\"Deconf_Service_Analytics_GaDataProfileInfo\";s:22:\"\0*\0profileInfoDataType\";s:0:\"\";s:12:\"\0*\0queryType\";s:36:\"Deconf_Service_Analytics_GaDataQuery\";s:16:\"\0*\0queryDataType\";s:0:\"\";s:4:\"rows\";a:30:{i:0;a:3:{i:0;s:8:\"20200128\";i:1;s:7:\"Tuesday\";i:2;s:1:\"0\";}i:1;a:3:{i:0;s:8:\"20200129\";i:1;s:9:\"Wednesday\";i:2;s:1:\"0\";}i:2;a:3:{i:0;s:8:\"20200130\";i:1;s:8:\"Thursday\";i:2;s:1:\"0\";}i:3;a:3:{i:0;s:8:\"20200131\";i:1;s:6:\"Friday\";i:2;s:1:\"5\";}i:4;a:3:{i:0;s:8:\"20200201\";i:1;s:8:\"Saturday\";i:2;s:1:\"1\";}i:5;a:3:{i:0;s:8:\"20200202\";i:1;s:6:\"Sunday\";i:2;s:1:\"6\";}i:6;a:3:{i:0;s:8:\"20200203\";i:1;s:6:\"Monday\";i:2;s:1:\"2\";}i:7;a:3:{i:0;s:8:\"20200204\";i:1;s:7:\"Tuesday\";i:2;s:1:\"6\";}i:8;a:3:{i:0;s:8:\"20200205\";i:1;s:9:\"Wednesday\";i:2;s:1:\"3\";}i:9;a:3:{i:0;s:8:\"20200206\";i:1;s:8:\"Thursday\";i:2;s:1:\"4\";}i:10;a:3:{i:0;s:8:\"20200207\";i:1;s:6:\"Friday\";i:2;s:1:\"2\";}i:11;a:3:{i:0;s:8:\"20200208\";i:1;s:8:\"Saturday\";i:2;s:1:\"3\";}i:12;a:3:{i:0;s:8:\"20200209\";i:1;s:6:\"Sunday\";i:2;s:1:\"0\";}i:13;a:3:{i:0;s:8:\"20200210\";i:1;s:6:\"Monday\";i:2;s:1:\"1\";}i:14;a:3:{i:0;s:8:\"20200211\";i:1;s:7:\"Tuesday\";i:2;s:1:\"3\";}i:15;a:3:{i:0;s:8:\"20200212\";i:1;s:9:\"Wednesday\";i:2;s:1:\"2\";}i:16;a:3:{i:0;s:8:\"20200213\";i:1;s:8:\"Thursday\";i:2;s:1:\"0\";}i:17;a:3:{i:0;s:8:\"20200214\";i:1;s:6:\"Friday\";i:2;s:1:\"1\";}i:18;a:3:{i:0;s:8:\"20200215\";i:1;s:8:\"Saturday\";i:2;s:1:\"0\";}i:19;a:3:{i:0;s:8:\"20200216\";i:1;s:6:\"Sunday\";i:2;s:1:\"0\";}i:20;a:3:{i:0;s:8:\"20200217\";i:1;s:6:\"Monday\";i:2;s:1:\"1\";}i:21;a:3:{i:0;s:8:\"20200218\";i:1;s:7:\"Tuesday\";i:2;s:1:\"1\";}i:22;a:3:{i:0;s:8:\"20200219\";i:1;s:9:\"Wednesday\";i:2;s:1:\"0\";}i:23;a:3:{i:0;s:8:\"20200220\";i:1;s:8:\"Thursday\";i:2;s:1:\"1\";}i:24;a:3:{i:0;s:8:\"20200221\";i:1;s:6:\"Friday\";i:2;s:1:\"0\";}i:25;a:3:{i:0;s:8:\"20200222\";i:1;s:8:\"Saturday\";i:2;s:1:\"0\";}i:26;a:3:{i:0;s:8:\"20200223\";i:1;s:6:\"Sunday\";i:2;s:1:\"0\";}i:27;a:3:{i:0;s:8:\"20200224\";i:1;s:6:\"Monday\";i:2;s:1:\"0\";}i:28;a:3:{i:0;s:8:\"20200225\";i:1;s:7:\"Tuesday\";i:2;s:1:\"0\";}i:29;a:3:{i:0;s:8:\"20200226\";i:1;s:9:\"Wednesday\";i:2;s:1:\"0\";}}s:10:\"sampleSize\";N;s:11:\"sampleSpace\";N;s:8:\"selfLink\";s:160:\"https://www.googleapis.com/analytics/v3/data/ga?ids=ga:210649513&dimensions=ga:date,ga:dayOfWeekName&metrics=ga:sessions&start-date=30daysAgo&end-date=yesterday\";s:12:\"totalResults\";i:30;s:19:\"totalsForAllResults\";a:1:{s:11:\"ga:sessions\";s:2:\"42\";}s:12:\"\0*\0modelData\";a:3:{s:5:\"query\";a:8:{s:10:\"start-date\";s:9:\"30daysAgo\";s:8:\"end-date\";s:9:\"yesterday\";s:3:\"ids\";s:12:\"ga:210649513\";s:10:\"dimensions\";s:24:\"ga:date,ga:dayOfWeekName\";s:7:\"metrics\";a:1:{i:0;s:11:\"ga:sessions\";}s:11:\"start-index\";i:1;s:11:\"max-results\";i:1000;s:13:\"samplingLevel\";s:16:\"HIGHER_PRECISION\";}s:11:\"profileInfo\";a:6:{s:9:\"profileId\";s:9:\"210649513\";s:9:\"accountId\";s:9:\"157443853\";s:13:\"webPropertyId\";s:14:\"UA-157443853-1\";s:21:\"internalWebPropertyId\";s:9:\"221605695\";s:11:\"profileName\";s:17:\"All Web Site Data\";s:7:\"tableId\";s:12:\"ga:210649513\";}s:13:\"columnHeaders\";a:3:{i:0;a:3:{s:4:\"name\";s:7:\"ga:date\";s:10:\"columnType\";s:9:\"DIMENSION\";s:8:\"dataType\";s:6:\"STRING\";}i:1;a:3:{s:4:\"name\";s:16:\"ga:dayOfWeekName\";s:10:\"columnType\";s:9:\"DIMENSION\";s:8:\"dataType\";s:6:\"STRING\";}i:2;a:3:{s:4:\"name\";s:11:\"ga:sessions\";s:10:\"columnType\";s:6:\"METRIC\";s:8:\"dataType\";s:7:\"INTEGER\";}}}s:12:\"\0*\0processed\";a:0:{}}s:7:\"expires\";i:1582844400;}', 'no'),
(1243, 'gadwp_cache_qr3_1099309192', 'a:2:{s:5:\"value\";O:31:\"Deconf_Service_Analytics_GaData\":24:{s:17:\"\0*\0collection_key\";s:4:\"rows\";s:25:\"\0*\0internal_gapi_mappings\";a:0:{}s:20:\"\0*\0columnHeadersType\";s:44:\"Deconf_Service_Analytics_GaDataColumnHeaders\";s:24:\"\0*\0columnHeadersDataType\";s:5:\"array\";s:19:\"containsSampledData\";b:0;s:16:\"\0*\0dataTableType\";s:40:\"Deconf_Service_Analytics_GaDataDataTable\";s:20:\"\0*\0dataTableDataType\";s:0:\"\";s:2:\"id\";s:260:\"https://www.googleapis.com/analytics/v3/data/ga?ids=ga:210649513&metrics=ga:sessions,ga:users,ga:pageviews,ga:BounceRate,ga:organicSearches,ga:pageviewsPerSession,ga:avgTimeOnPage,ga:avgPageLoadTime,ga:avgSessionDuration&start-date=30daysAgo&end-date=yesterday\";s:12:\"itemsPerPage\";i:1000;s:4:\"kind\";s:16:\"analytics#gaData\";s:8:\"nextLink\";N;s:12:\"previousLink\";N;s:18:\"\0*\0profileInfoType\";s:42:\"Deconf_Service_Analytics_GaDataProfileInfo\";s:22:\"\0*\0profileInfoDataType\";s:0:\"\";s:12:\"\0*\0queryType\";s:36:\"Deconf_Service_Analytics_GaDataQuery\";s:16:\"\0*\0queryDataType\";s:0:\"\";s:4:\"rows\";a:1:{i:0;a:9:{i:0;s:2:\"42\";i:1;s:2:\"25\";i:2;s:2:\"89\";i:3;s:17:\"66.66666666666666\";i:4;s:1:\"0\";i:5;s:17:\"2.119047619047619\";i:6;s:18:\"162.70212765957447\";i:7;s:3:\"0.0\";i:8;s:18:\"182.11904761904762\";}}s:10:\"sampleSize\";N;s:11:\"sampleSpace\";N;s:8:\"selfLink\";s:260:\"https://www.googleapis.com/analytics/v3/data/ga?ids=ga:210649513&metrics=ga:sessions,ga:users,ga:pageviews,ga:BounceRate,ga:organicSearches,ga:pageviewsPerSession,ga:avgTimeOnPage,ga:avgPageLoadTime,ga:avgSessionDuration&start-date=30daysAgo&end-date=yesterday\";s:12:\"totalResults\";i:1;s:19:\"totalsForAllResults\";a:9:{s:11:\"ga:sessions\";s:2:\"42\";s:8:\"ga:users\";s:2:\"25\";s:12:\"ga:pageviews\";s:2:\"89\";s:13:\"ga:BounceRate\";s:17:\"66.66666666666666\";s:18:\"ga:organicSearches\";s:1:\"0\";s:22:\"ga:pageviewsPerSession\";s:17:\"2.119047619047619\";s:16:\"ga:avgTimeOnPage\";s:18:\"162.70212765957447\";s:18:\"ga:avgPageLoadTime\";s:3:\"0.0\";s:21:\"ga:avgSessionDuration\";s:18:\"182.11904761904762\";}s:12:\"\0*\0modelData\";a:3:{s:5:\"query\";a:7:{s:10:\"start-date\";s:9:\"30daysAgo\";s:8:\"end-date\";s:9:\"yesterday\";s:3:\"ids\";s:12:\"ga:210649513\";s:7:\"metrics\";a:9:{i:0;s:11:\"ga:sessions\";i:1;s:8:\"ga:users\";i:2;s:12:\"ga:pageviews\";i:3;s:13:\"ga:BounceRate\";i:4;s:18:\"ga:organicSearches\";i:5;s:22:\"ga:pageviewsPerSession\";i:6;s:16:\"ga:avgTimeOnPage\";i:7;s:18:\"ga:avgPageLoadTime\";i:8;s:21:\"ga:avgSessionDuration\";}s:11:\"start-index\";i:1;s:11:\"max-results\";i:1000;s:13:\"samplingLevel\";s:16:\"HIGHER_PRECISION\";}s:11:\"profileInfo\";a:6:{s:9:\"profileId\";s:9:\"210649513\";s:9:\"accountId\";s:9:\"157443853\";s:13:\"webPropertyId\";s:14:\"UA-157443853-1\";s:21:\"internalWebPropertyId\";s:9:\"221605695\";s:11:\"profileName\";s:17:\"All Web Site Data\";s:7:\"tableId\";s:12:\"ga:210649513\";}s:13:\"columnHeaders\";a:9:{i:0;a:3:{s:4:\"name\";s:11:\"ga:sessions\";s:10:\"columnType\";s:6:\"METRIC\";s:8:\"dataType\";s:7:\"INTEGER\";}i:1;a:3:{s:4:\"name\";s:8:\"ga:users\";s:10:\"columnType\";s:6:\"METRIC\";s:8:\"dataType\";s:7:\"INTEGER\";}i:2;a:3:{s:4:\"name\";s:12:\"ga:pageviews\";s:10:\"columnType\";s:6:\"METRIC\";s:8:\"dataType\";s:7:\"INTEGER\";}i:3;a:3:{s:4:\"name\";s:13:\"ga:BounceRate\";s:10:\"columnType\";s:6:\"METRIC\";s:8:\"dataType\";s:7:\"PERCENT\";}i:4;a:3:{s:4:\"name\";s:18:\"ga:organicSearches\";s:10:\"columnType\";s:6:\"METRIC\";s:8:\"dataType\";s:7:\"INTEGER\";}i:5;a:3:{s:4:\"name\";s:22:\"ga:pageviewsPerSession\";s:10:\"columnType\";s:6:\"METRIC\";s:8:\"dataType\";s:5:\"FLOAT\";}i:6;a:3:{s:4:\"name\";s:16:\"ga:avgTimeOnPage\";s:10:\"columnType\";s:6:\"METRIC\";s:8:\"dataType\";s:4:\"TIME\";}i:7;a:3:{s:4:\"name\";s:18:\"ga:avgPageLoadTime\";s:10:\"columnType\";s:6:\"METRIC\";s:8:\"dataType\";s:5:\"FLOAT\";}i:8;a:3:{s:4:\"name\";s:21:\"ga:avgSessionDuration\";s:10:\"columnType\";s:6:\"METRIC\";s:8:\"dataType\";s:4:\"TIME\";}}}s:12:\"\0*\0processed\";a:0:{}}s:7:\"expires\";i:1582844400;}', 'no'),
(703, 'exactmetrics_tracking_notice', '1', 'yes'),
(3836, 'exactmetrics_admin_menu_tooltip', '1592168684', 'yes'),
(3746, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:2:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:7:\"upgrade\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.4.2.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.4.2.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-5.4.2-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-5.4.2-new-bundled.zip\";s:7:\"partial\";b:0;s:8:\"rollback\";b:0;}s:7:\"current\";s:5:\"5.4.2\";s:7:\"version\";s:5:\"5.4.2\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.3\";s:15:\"partial_version\";s:0:\"\";}i:1;O:8:\"stdClass\":11:{s:8:\"response\";s:10:\"autoupdate\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.4.2.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-5.4.2.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-5.4.2-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-5.4.2-new-bundled.zip\";s:7:\"partial\";b:0;s:8:\"rollback\";b:0;}s:7:\"current\";s:5:\"5.4.2\";s:7:\"version\";s:5:\"5.4.2\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.3\";s:15:\"partial_version\";s:0:\"\";s:9:\"new_files\";s:1:\"1\";}}s:12:\"last_checked\";i:1596993267;s:15:\"version_checked\";s:5:\"5.3.4\";s:12:\"translations\";a:0:{}}', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 3, '_wp_page_template', 'default'),
(3, 5, '_wp_attached_file', '2020/01/2020-landscape-1-1.png'),
(4, 5, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1200;s:6:\"height\";i:769;s:4:\"file\";s:30:\"2020/01/2020-landscape-1-1.png\";s:5:\"sizes\";a:4:{s:6:\"medium\";a:4:{s:4:\"file\";s:30:\"2020-landscape-1-1-300x192.png\";s:5:\"width\";i:300;s:6:\"height\";i:192;s:9:\"mime-type\";s:9:\"image/png\";}s:5:\"large\";a:4:{s:4:\"file\";s:31:\"2020-landscape-1-1-1024x656.png\";s:5:\"width\";i:1024;s:6:\"height\";i:656;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:30:\"2020-landscape-1-1-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:30:\"2020-landscape-1-1-768x492.png\";s:5:\"width\";i:768;s:6:\"height\";i:492;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(5, 5, '_starter_content_theme', 'twentytwenty'),
(21, 15, '_menu_item_target', ''),
(7, 6, '_thumbnail_id', '5'),
(20, 15, '_menu_item_object', 'custom'),
(9, 6, '_customize_changeset_uuid', 'f470ba48-b946-4f18-abb6-55f36e1fe8a1'),
(19, 15, '_menu_item_object_id', '15'),
(11, 7, '_customize_changeset_uuid', 'f470ba48-b946-4f18-abb6-55f36e1fe8a1'),
(18, 15, '_menu_item_menu_item_parent', '0'),
(13, 8, '_customize_changeset_uuid', 'f470ba48-b946-4f18-abb6-55f36e1fe8a1'),
(17, 15, '_menu_item_type', 'custom'),
(15, 9, '_customize_changeset_uuid', 'f470ba48-b946-4f18-abb6-55f36e1fe8a1'),
(22, 15, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(23, 15, '_menu_item_xfn', ''),
(24, 15, '_menu_item_url', 'http://blog.gohome.ng/'),
(25, 16, '_menu_item_type', 'post_type'),
(26, 16, '_menu_item_menu_item_parent', '0'),
(27, 16, '_menu_item_object_id', '7'),
(28, 16, '_menu_item_object', 'page'),
(29, 16, '_menu_item_target', ''),
(30, 16, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(31, 16, '_menu_item_xfn', ''),
(32, 16, '_menu_item_url', ''),
(159, 45, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:602;s:6:\"height\";i:452;s:4:\"file\";s:52:\"2020/01/thing-to-know-when-renting-a-house-20018.jpg\";s:5:\"sizes\";a:3:{s:6:\"medium\";a:4:{s:4:\"file\";s:52:\"thing-to-know-when-renting-a-house-20018-300x225.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:225;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:52:\"thing-to-know-when-renting-a-house-20018-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:21:\"pokamalite-misc-thumb\";a:4:{s:4:\"file\";s:52:\"thing-to-know-when-renting-a-house-20018-260x200.jpg\";s:5:\"width\";i:260;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(158, 45, '_wp_attached_file', '2020/01/thing-to-know-when-renting-a-house-20018.jpg'),
(387, 144, '_yoast_wpseo_content_score', '30'),
(388, 144, '_yoast_wpseo_primary_category', '6'),
(41, 18, '_menu_item_type', 'post_type'),
(42, 18, '_menu_item_menu_item_parent', '0'),
(43, 18, '_menu_item_object_id', '8'),
(44, 18, '_menu_item_object', 'page'),
(45, 18, '_menu_item_target', ''),
(46, 18, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(47, 18, '_menu_item_xfn', ''),
(48, 18, '_menu_item_url', ''),
(49, 19, '_menu_item_type', 'custom'),
(50, 19, '_menu_item_menu_item_parent', '0'),
(51, 19, '_menu_item_object_id', '19'),
(52, 19, '_menu_item_object', 'custom'),
(53, 19, '_menu_item_target', ''),
(54, 19, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(55, 19, '_menu_item_xfn', ''),
(56, 19, '_menu_item_url', 'http://blog.gohome.ng/'),
(57, 20, '_menu_item_type', 'post_type'),
(58, 20, '_menu_item_menu_item_parent', '0'),
(59, 20, '_menu_item_object_id', '7'),
(60, 20, '_menu_item_object', 'page'),
(61, 20, '_menu_item_target', ''),
(62, 20, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(63, 20, '_menu_item_xfn', ''),
(64, 20, '_menu_item_url', ''),
(157, 44, '_edit_lock', '1582900890:2'),
(379, 145, '_wp_attachment_image_alt', 'real estate investment in Nigeria'),
(389, 147, '_wp_attached_file', '2020/02/newspaper.jpg'),
(382, 144, '_heateor_sss_meta', 'a:2:{s:7:\"sharing\";i:0;s:16:\"vertical_sharing\";i:0;}'),
(73, 22, '_menu_item_type', 'post_type'),
(74, 22, '_menu_item_menu_item_parent', '0'),
(75, 22, '_menu_item_object_id', '8'),
(76, 22, '_menu_item_object', 'page'),
(77, 22, '_menu_item_target', ''),
(78, 22, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(79, 22, '_menu_item_xfn', ''),
(80, 22, '_menu_item_url', ''),
(81, 23, '_menu_item_type', 'custom'),
(82, 23, '_menu_item_menu_item_parent', '0'),
(83, 23, '_menu_item_object_id', '23'),
(84, 23, '_menu_item_object', 'custom'),
(85, 23, '_menu_item_target', ''),
(86, 23, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(87, 23, '_menu_item_xfn', ''),
(88, 23, '_menu_item_url', 'https://www.yelp.com'),
(89, 24, '_menu_item_type', 'custom'),
(90, 24, '_menu_item_menu_item_parent', '0'),
(91, 24, '_menu_item_object_id', '24'),
(92, 24, '_menu_item_object', 'custom'),
(93, 24, '_menu_item_target', ''),
(94, 24, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(95, 24, '_menu_item_xfn', ''),
(96, 24, '_menu_item_url', 'https://www.facebook.com/wordpress'),
(97, 25, '_menu_item_type', 'custom'),
(98, 25, '_menu_item_menu_item_parent', '0'),
(99, 25, '_menu_item_object_id', '25'),
(100, 25, '_menu_item_object', 'custom'),
(101, 25, '_menu_item_target', ''),
(102, 25, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(103, 25, '_menu_item_xfn', ''),
(104, 25, '_menu_item_url', 'https://twitter.com/GohomeNg'),
(105, 26, '_menu_item_type', 'custom'),
(106, 26, '_menu_item_menu_item_parent', '0'),
(107, 26, '_menu_item_object_id', '26'),
(108, 26, '_menu_item_object', 'custom'),
(109, 26, '_menu_item_target', ''),
(110, 26, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(111, 26, '_menu_item_xfn', ''),
(112, 26, '_menu_item_url', 'https://www.instagram.com/explore/tags/wordcamp/'),
(113, 27, '_menu_item_type', 'custom'),
(114, 27, '_menu_item_menu_item_parent', '0'),
(115, 27, '_menu_item_object_id', '27'),
(116, 27, '_menu_item_object', 'custom'),
(117, 27, '_menu_item_target', ''),
(118, 27, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(119, 27, '_menu_item_xfn', ''),
(120, 27, '_menu_item_url', 'mailto:info@gohome.ng'),
(386, 144, '_yoast_wpseo_linkdex', '81'),
(300, 107, '_wp_attached_file', '2020/02/amazon-echo-min.jpg'),
(126, 6, '_edit_lock', '1579442796:1'),
(127, 30, '_wp_attached_file', '2020/01/logo-light-1.png'),
(128, 30, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:137;s:6:\"height\";i:40;s:4:\"file\";s:24:\"2020/01/logo-light-1.png\";s:5:\"sizes\";a:0:{}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(129, 31, '_wp_attached_file', '2020/01/gh.jpg'),
(130, 31, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:900;s:6:\"height\";i:900;s:4:\"file\";s:14:\"2020/01/gh.jpg\";s:5:\"sizes\";a:3:{s:6:\"medium\";a:4:{s:4:\"file\";s:14:\"gh-300x300.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:14:\"gh-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:14:\"gh-768x768.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:768;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(385, 144, '_yoast_wpseo_metadesc', 'Real estate investment in Nigeria is one of the most lucrative businesses to invest in because of its high appreciation value over time'),
(299, 105, '_heateor_sss_meta', 'a:2:{s:7:\"sharing\";i:0;s:16:\"vertical_sharing\";i:0;}'),
(135, 36, '_wp_attached_file', '2020/01/gohome-blog.png'),
(136, 36, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1304;s:6:\"height\";i:921;s:4:\"file\";s:23:\"2020/01/gohome-blog.png\";s:5:\"sizes\";a:6:{s:6:\"medium\";a:4:{s:4:\"file\";s:23:\"gohome-blog-300x212.png\";s:5:\"width\";i:300;s:6:\"height\";i:212;s:9:\"mime-type\";s:9:\"image/png\";}s:5:\"large\";a:4:{s:4:\"file\";s:24:\"gohome-blog-1024x723.png\";s:5:\"width\";i:1024;s:6:\"height\";i:723;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:23:\"gohome-blog-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:23:\"gohome-blog-768x542.png\";s:5:\"width\";i:768;s:6:\"height\";i:542;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"pokamalite-full-thumb\";a:4:{s:4:\"file\";s:23:\"gohome-blog-768x542.png\";s:5:\"width\";i:768;s:6:\"height\";i:542;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"pokamalite-misc-thumb\";a:4:{s:4:\"file\";s:23:\"gohome-blog-260x200.png\";s:5:\"width\";i:260;s:6:\"height\";i:200;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(137, 36, '_edit_lock', '1579443241:1'),
(138, 37, '_wp_attached_file', '2020/01/gohome-blog-2.png'),
(139, 37, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:741;s:6:\"height\";i:335;s:4:\"file\";s:25:\"2020/01/gohome-blog-2.png\";s:5:\"sizes\";a:3:{s:6:\"medium\";a:4:{s:4:\"file\";s:25:\"gohome-blog-2-300x136.png\";s:5:\"width\";i:300;s:6:\"height\";i:136;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:25:\"gohome-blog-2-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"pokamalite-misc-thumb\";a:4:{s:4:\"file\";s:25:\"gohome-blog-2-260x200.png\";s:5:\"width\";i:260;s:6:\"height\";i:200;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(141, 37, '_wp_attachment_is_custom_background', 'pokama-lite'),
(142, 38, '_wp_attached_file', '2020/01/logo-light-1-1.png'),
(143, 38, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:137;s:6:\"height\";i:40;s:4:\"file\";s:26:\"2020/01/logo-light-1-1.png\";s:5:\"sizes\";a:0:{}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(145, 40, '_wp_attached_file', '2020/01/cropped-logo-light-1-1.png'),
(146, 40, '_wp_attachment_context', 'site-icon'),
(147, 40, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:512;s:6:\"height\";i:512;s:4:\"file\";s:34:\"2020/01/cropped-logo-light-1-1.png\";s:5:\"sizes\";a:7:{s:6:\"medium\";a:4:{s:4:\"file\";s:34:\"cropped-logo-light-1-1-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:34:\"cropped-logo-light-1-1-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"pokamalite-misc-thumb\";a:4:{s:4:\"file\";s:34:\"cropped-logo-light-1-1-260x200.png\";s:5:\"width\";i:260;s:6:\"height\";i:200;s:9:\"mime-type\";s:9:\"image/png\";}s:13:\"site_icon-270\";a:4:{s:4:\"file\";s:34:\"cropped-logo-light-1-1-270x270.png\";s:5:\"width\";i:270;s:6:\"height\";i:270;s:9:\"mime-type\";s:9:\"image/png\";}s:13:\"site_icon-192\";a:4:{s:4:\"file\";s:34:\"cropped-logo-light-1-1-192x192.png\";s:5:\"width\";i:192;s:6:\"height\";i:192;s:9:\"mime-type\";s:9:\"image/png\";}s:13:\"site_icon-180\";a:4:{s:4:\"file\";s:34:\"cropped-logo-light-1-1-180x180.png\";s:5:\"width\";i:180;s:6:\"height\";i:180;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"site_icon-32\";a:4:{s:4:\"file\";s:32:\"cropped-logo-light-1-1-32x32.png\";s:5:\"width\";i:32;s:6:\"height\";i:32;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(384, 144, '_yoast_wpseo_title', '%%title%% %%sep%% Gohome Nigeria'),
(383, 144, '_yoast_wpseo_focuskw', 'Real Estate Investment in Nigeria'),
(160, 46, '_wp_attached_file', '2020/01/images-5.jpg'),
(161, 46, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:735;s:6:\"height\";i:417;s:4:\"file\";s:20:\"2020/01/images-5.jpg\";s:5:\"sizes\";a:3:{s:6:\"medium\";a:4:{s:4:\"file\";s:20:\"images-5-300x170.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:170;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:20:\"images-5-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:21:\"pokamalite-misc-thumb\";a:4:{s:4:\"file\";s:20:\"images-5-260x200.jpg\";s:5:\"width\";i:260;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(164, 44, '_thumbnail_id', '45'),
(178, 50, '_edit_lock', '1582900863:2'),
(179, 51, '_wp_attached_file', '2020/01/scam1-36125.jpg'),
(180, 51, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:275;s:6:\"height\";i:183;s:4:\"file\";s:23:\"2020/01/scam1-36125.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:23:\"scam1-36125-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:21:\"pokamalite-misc-thumb\";a:4:{s:4:\"file\";s:23:\"scam1-36125-260x183.jpg\";s:5:\"width\";i:260;s:6:\"height\";i:183;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(181, 51, '_wp_attachment_image_alt', 'Avoid Scammers When You are Renting that Apartment'),
(369, 94, '_yoast_wpseo_focuskw', 'Living in a House that Someone Died in'),
(184, 50, '_thumbnail_id', '51'),
(186, 54, '_wp_attached_file', '2020/01/fullimage-13092.jpg'),
(187, 54, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:770;s:6:\"height\";i:450;s:4:\"file\";s:27:\"2020/01/fullimage-13092.jpg\";s:5:\"sizes\";a:5:{s:6:\"medium\";a:4:{s:4:\"file\";s:27:\"fullimage-13092-300x175.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:175;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:27:\"fullimage-13092-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:27:\"fullimage-13092-768x449.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:449;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:21:\"pokamalite-full-thumb\";a:4:{s:4:\"file\";s:27:\"fullimage-13092-768x449.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:449;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:21:\"pokamalite-misc-thumb\";a:4:{s:4:\"file\";s:27:\"fullimage-13092-260x200.jpg\";s:5:\"width\";i:260;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(376, 144, '_edit_last', '2'),
(368, 94, '_heateor_sss_meta', 'a:2:{s:7:\"sharing\";i:0;s:16:\"vertical_sharing\";i:0;}'),
(298, 105, '_edit_last', '2'),
(196, 59, '_wp_attached_file', '2020/01/cropped-gohome-blog-2.png'),
(197, 59, '_wp_attachment_context', 'custom-logo'),
(198, 59, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:741;s:6:\"height\";i:205;s:4:\"file\";s:33:\"2020/01/cropped-gohome-blog-2.png\";s:5:\"sizes\";a:3:{s:6:\"medium\";a:4:{s:4:\"file\";s:32:\"cropped-gohome-blog-2-300x83.png\";s:5:\"width\";i:300;s:6:\"height\";i:83;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:33:\"cropped-gohome-blog-2-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"pokamalite-misc-thumb\";a:4:{s:4:\"file\";s:33:\"cropped-gohome-blog-2-260x200.png\";s:5:\"width\";i:260;s:6:\"height\";i:200;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(201, 61, '_wp_attached_file', '2020/01/cropped-gh.jpg'),
(202, 61, '_wp_attachment_context', 'custom-logo'),
(203, 61, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:900;s:6:\"height\";i:248;s:4:\"file\";s:22:\"2020/01/cropped-gh.jpg\";s:5:\"sizes\";a:5:{s:6:\"medium\";a:4:{s:4:\"file\";s:21:\"cropped-gh-300x83.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:83;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:22:\"cropped-gh-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:22:\"cropped-gh-768x212.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:212;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:21:\"pokamalite-full-thumb\";a:4:{s:4:\"file\";s:22:\"cropped-gh-768x212.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:212;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:21:\"pokamalite-misc-thumb\";a:4:{s:4:\"file\";s:22:\"cropped-gh-260x200.jpg\";s:5:\"width\";i:260;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(209, 64, '_wp_attached_file', '2020/01/gohomeblog.jpg'),
(210, 64, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:180;s:6:\"height\";i:50;s:4:\"file\";s:22:\"2020/01/gohomeblog.jpg\";s:5:\"sizes\";a:1:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:21:\"gohomeblog-150x50.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:50;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(211, 65, '_wp_attached_file', '2020/01/cropped-gohomeblog.jpg'),
(212, 65, '_wp_attachment_context', 'custom-logo'),
(213, 65, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:180;s:6:\"height\";i:50;s:4:\"file\";s:30:\"2020/01/cropped-gohomeblog.jpg\";s:5:\"sizes\";a:1:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:29:\"cropped-gohomeblog-150x50.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:50;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(225, 71, '_wp_attached_file', '2020/01/cropped-gh-1.jpg'),
(226, 71, '_wp_attachment_context', 'site-icon'),
(227, 71, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:512;s:6:\"height\";i:512;s:4:\"file\";s:24:\"2020/01/cropped-gh-1.jpg\";s:5:\"sizes\";a:7:{s:6:\"medium\";a:4:{s:4:\"file\";s:24:\"cropped-gh-1-300x300.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:24:\"cropped-gh-1-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:21:\"pokamalite-misc-thumb\";a:4:{s:4:\"file\";s:24:\"cropped-gh-1-260x200.jpg\";s:5:\"width\";i:260;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:13:\"site_icon-270\";a:4:{s:4:\"file\";s:24:\"cropped-gh-1-270x270.jpg\";s:5:\"width\";i:270;s:6:\"height\";i:270;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:13:\"site_icon-192\";a:4:{s:4:\"file\";s:24:\"cropped-gh-1-192x192.jpg\";s:5:\"width\";i:192;s:6:\"height\";i:192;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:13:\"site_icon-180\";a:4:{s:4:\"file\";s:24:\"cropped-gh-1-180x180.jpg\";s:5:\"width\";i:180;s:6:\"height\";i:180;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"site_icon-32\";a:4:{s:4:\"file\";s:22:\"cropped-gh-1-32x32.jpg\";s:5:\"width\";i:32;s:6:\"height\";i:32;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(229, 73, '_wp_attached_file', '2020/01/cropped-gh-2.jpg'),
(230, 73, '_wp_attachment_context', 'site-icon'),
(231, 73, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:512;s:6:\"height\";i:512;s:4:\"file\";s:24:\"2020/01/cropped-gh-2.jpg\";s:5:\"sizes\";a:7:{s:6:\"medium\";a:4:{s:4:\"file\";s:24:\"cropped-gh-2-300x300.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:24:\"cropped-gh-2-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:21:\"pokamalite-misc-thumb\";a:4:{s:4:\"file\";s:24:\"cropped-gh-2-260x200.jpg\";s:5:\"width\";i:260;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:13:\"site_icon-270\";a:4:{s:4:\"file\";s:24:\"cropped-gh-2-270x270.jpg\";s:5:\"width\";i:270;s:6:\"height\";i:270;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:13:\"site_icon-192\";a:4:{s:4:\"file\";s:24:\"cropped-gh-2-192x192.jpg\";s:5:\"width\";i:192;s:6:\"height\";i:192;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:13:\"site_icon-180\";a:4:{s:4:\"file\";s:24:\"cropped-gh-2-180x180.jpg\";s:5:\"width\";i:180;s:6:\"height\";i:180;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"site_icon-32\";a:4:{s:4:\"file\";s:22:\"cropped-gh-2-32x32.jpg\";s:5:\"width\";i:32;s:6:\"height\";i:32;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(238, 7, '_edit_lock', '1579963287:1'),
(239, 8, '_edit_lock', '1579957120:1'),
(297, 105, '_edit_lock', '1583081711:2'),
(377, 145, '_wp_attached_file', '2020/02/real-estate.jpg'),
(378, 145, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:510;s:6:\"height\";i:337;s:4:\"file\";s:23:\"2020/02/real-estate.jpg\";s:5:\"sizes\";a:6:{s:6:\"medium\";a:4:{s:4:\"file\";s:23:\"real-estate-300x198.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:198;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:23:\"real-estate-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:29:\"travelers_blog_detail_cat_one\";a:4:{s:4:\"file\";s:23:\"real-estate-470x337.jpg\";s:5:\"width\";i:470;s:6:\"height\";i:337;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:21:\"travelers_blog_medium\";a:4:{s:4:\"file\";s:23:\"real-estate-440x337.jpg\";s:5:\"width\";i:440;s:6:\"height\";i:337;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:24:\"travelers_blog_blog_list\";a:4:{s:4:\"file\";s:23:\"real-estate-440x300.jpg\";s:5:\"width\";i:440;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:37:\"travelers_blog_blog_list_no_sidebar_1\";a:4:{s:4:\"file\";s:23:\"real-estate-220x190.jpg\";s:5:\"width\";i:220;s:6:\"height\";i:190;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"1\";s:8:\"keywords\";a:0:{}}}'),
(252, 86, '_form', '<label> Your Name (required)\n    [text* your-name] </label>\n\n<label> Your Email (required)\n    [email* your-email] </label>\n\n<label> Subject\n    [text your-subject] </label>\n\n<label> Your Message\n    [textarea your-message] </label>\n\n[submit \"Send\"]'),
(253, 86, '_mail', 'a:9:{s:6:\"active\";b:1;s:7:\"subject\";s:28:\"Gohome blog \"[your-subject]\"\";s:6:\"sender\";s:38:\"Gohome blog <wordpress@blog.gohome.ng>\";s:9:\"recipient\";s:19:\"gohome.ng@gmail.com\";s:4:\"body\";s:171:\"From: [your-name] <[your-email]>\nSubject: [your-subject]\n\nMessage Body:\n[your-message]\n\n-- \nThis e-mail was sent from a contact form on Gohome blog (http://blog.gohome.ng)\";s:18:\"additional_headers\";s:22:\"Reply-To: [your-email]\";s:11:\"attachments\";s:0:\"\";s:8:\"use_html\";b:0;s:13:\"exclude_blank\";b:0;}'),
(254, 86, '_mail_2', 'a:9:{s:6:\"active\";b:0;s:7:\"subject\";s:28:\"Gohome blog \"[your-subject]\"\";s:6:\"sender\";s:38:\"Gohome blog <wordpress@blog.gohome.ng>\";s:9:\"recipient\";s:12:\"[your-email]\";s:4:\"body\";s:113:\"Message Body:\n[your-message]\n\n-- \nThis e-mail was sent from a contact form on Gohome blog (http://blog.gohome.ng)\";s:18:\"additional_headers\";s:29:\"Reply-To: gohome.ng@gmail.com\";s:11:\"attachments\";s:0:\"\";s:8:\"use_html\";b:0;s:13:\"exclude_blank\";b:0;}'),
(255, 86, '_messages', 'a:22:{s:12:\"mail_sent_ok\";s:45:\"Thank you for your message. It has been sent.\";s:12:\"mail_sent_ng\";s:71:\"There was an error trying to send your message. Please try again later.\";s:16:\"validation_error\";s:61:\"One or more fields have an error. Please check and try again.\";s:4:\"spam\";s:71:\"There was an error trying to send your message. Please try again later.\";s:12:\"accept_terms\";s:69:\"You must accept the terms and conditions before sending your message.\";s:16:\"invalid_required\";s:22:\"The field is required.\";s:16:\"invalid_too_long\";s:22:\"The field is too long.\";s:17:\"invalid_too_short\";s:23:\"The field is too short.\";s:12:\"invalid_date\";s:29:\"The date format is incorrect.\";s:14:\"date_too_early\";s:44:\"The date is before the earliest one allowed.\";s:13:\"date_too_late\";s:41:\"The date is after the latest one allowed.\";s:13:\"upload_failed\";s:46:\"There was an unknown error uploading the file.\";s:24:\"upload_file_type_invalid\";s:49:\"You are not allowed to upload files of this type.\";s:21:\"upload_file_too_large\";s:20:\"The file is too big.\";s:23:\"upload_failed_php_error\";s:38:\"There was an error uploading the file.\";s:14:\"invalid_number\";s:29:\"The number format is invalid.\";s:16:\"number_too_small\";s:47:\"The number is smaller than the minimum allowed.\";s:16:\"number_too_large\";s:46:\"The number is larger than the maximum allowed.\";s:23:\"quiz_answer_not_correct\";s:36:\"The answer to the quiz is incorrect.\";s:13:\"invalid_email\";s:38:\"The e-mail address entered is invalid.\";s:11:\"invalid_url\";s:19:\"The URL is invalid.\";s:11:\"invalid_tel\";s:32:\"The telephone number is invalid.\";}'),
(256, 86, '_additional_settings', ''),
(257, 86, '_locale', 'en_US'),
(372, 94, '_yoast_wpseo_content_score', '30'),
(371, 94, '_yoast_wpseo_linkdex', '81'),
(370, 94, '_yoast_wpseo_metadesc', 'Living in a house that someone died in is a major factor Nigerians attempt to evade while picking a house to call their home'),
(364, 105, '_yoast_wpseo_content_score', '60'),
(363, 105, '_yoast_wpseo_linkdex', '77'),
(362, 105, '_yoast_wpseo_metadesc', 'If your definition of home is a place of comfort, a place where you want to be comfortable, then the best smart home devices available could give you a lot of what you want.'),
(361, 105, '_yoast_wpseo_focuskw', 'Best Smart Home Devices'),
(281, 95, '_wp_attached_file', '2020/01/haunted628x348.jpg'),
(280, 94, '_edit_lock', '1582900119:2'),
(282, 95, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:628;s:6:\"height\";i:348;s:4:\"file\";s:26:\"2020/01/haunted628x348.jpg\";s:5:\"sizes\";a:6:{s:6:\"medium\";a:4:{s:4:\"file\";s:26:\"haunted628x348-300x166.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:166;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:26:\"haunted628x348-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:29:\"travelers_blog_detail_cat_one\";a:4:{s:4:\"file\";s:26:\"haunted628x348-470x348.jpg\";s:5:\"width\";i:470;s:6:\"height\";i:348;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:21:\"travelers_blog_medium\";a:4:{s:4:\"file\";s:26:\"haunted628x348-440x348.jpg\";s:5:\"width\";i:440;s:6:\"height\";i:348;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:24:\"travelers_blog_blog_list\";a:4:{s:4:\"file\";s:26:\"haunted628x348-440x300.jpg\";s:5:\"width\";i:440;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:37:\"travelers_blog_blog_list_no_sidebar_1\";a:4:{s:4:\"file\";s:26:\"haunted628x348-220x190.jpg\";s:5:\"width\";i:220;s:6:\"height\";i:190;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:7:\"ADR6300\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:10:\"1365515827\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:4:\"4.92\";s:3:\"iso\";s:3:\"112\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(283, 95, '_wp_attachment_image_alt', 'live in a house someone died in'),
(284, 94, '_thumbnail_id', '95'),
(301, 107, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:225;s:6:\"height\";i:225;s:4:\"file\";s:27:\"2020/02/amazon-echo-min.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:27:\"amazon-echo-min-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:37:\"travelers_blog_blog_list_no_sidebar_1\";a:4:{s:4:\"file\";s:27:\"amazon-echo-min-220x190.jpg\";s:5:\"width\";i:220;s:6:\"height\";i:190;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(375, 144, '_edit_lock', '1583062398:2'),
(365, 94, '_edit_last', '2'),
(306, 110, '_wp_attached_file', '2020/02/maxresdefault-1.jpg'),
(307, 110, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1280;s:6:\"height\";i:720;s:4:\"file\";s:27:\"2020/02/maxresdefault-1.jpg\";s:5:\"sizes\";a:12:{s:6:\"medium\";a:4:{s:4:\"file\";s:27:\"maxresdefault-1-300x169.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:169;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:28:\"maxresdefault-1-1024x576.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:576;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:27:\"maxresdefault-1-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:27:\"maxresdefault-1-768x432.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:432;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:30:\"travelers_blog_category_slider\";a:4:{s:4:\"file\";s:27:\"maxresdefault-1-650x450.jpg\";s:5:\"width\";i:650;s:6:\"height\";i:450;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:41:\"travelers_blog_category_slider_no_sidebar\";a:4:{s:4:\"file\";s:27:\"maxresdefault-1-950x450.jpg\";s:5:\"width\";i:950;s:6:\"height\";i:450;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:29:\"travelers_blog_detail_cat_one\";a:4:{s:4:\"file\";s:27:\"maxresdefault-1-470x350.jpg\";s:5:\"width\";i:470;s:6:\"height\";i:350;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:21:\"travelers_blog_medium\";a:4:{s:4:\"file\";s:27:\"maxresdefault-1-440x420.jpg\";s:5:\"width\";i:440;s:6:\"height\";i:420;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:19:\"travelers_blog_page\";a:4:{s:4:\"file\";s:27:\"maxresdefault-1-730x450.jpg\";s:5:\"width\";i:730;s:6:\"height\";i:450;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:21:\"travelers_blog_detail\";a:4:{s:4:\"file\";s:27:\"maxresdefault-1-670x460.jpg\";s:5:\"width\";i:670;s:6:\"height\";i:460;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:24:\"travelers_blog_blog_list\";a:4:{s:4:\"file\";s:27:\"maxresdefault-1-440x300.jpg\";s:5:\"width\";i:440;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:37:\"travelers_blog_blog_list_no_sidebar_1\";a:4:{s:4:\"file\";s:27:\"maxresdefault-1-220x190.jpg\";s:5:\"width\";i:220;s:6:\"height\";i:190;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(308, 105, '_thumbnail_id', '112'),
(331, 120, '_wp_attached_file', '2020/02/philips-min.jpg'),
(311, 111, '_wp_attached_file', '2020/02/OSTELLA-BISTRO.png'),
(312, 111, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1920;s:6:\"height\";i:1080;s:4:\"file\";s:26:\"2020/02/OSTELLA-BISTRO.png\";s:5:\"sizes\";a:13:{s:6:\"medium\";a:4:{s:4:\"file\";s:26:\"OSTELLA-BISTRO-300x169.png\";s:5:\"width\";i:300;s:6:\"height\";i:169;s:9:\"mime-type\";s:9:\"image/png\";}s:5:\"large\";a:4:{s:4:\"file\";s:27:\"OSTELLA-BISTRO-1024x576.png\";s:5:\"width\";i:1024;s:6:\"height\";i:576;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:26:\"OSTELLA-BISTRO-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:26:\"OSTELLA-BISTRO-768x432.png\";s:5:\"width\";i:768;s:6:\"height\";i:432;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"1536x1536\";a:4:{s:4:\"file\";s:27:\"OSTELLA-BISTRO-1536x864.png\";s:5:\"width\";i:1536;s:6:\"height\";i:864;s:9:\"mime-type\";s:9:\"image/png\";}s:30:\"travelers_blog_category_slider\";a:4:{s:4:\"file\";s:26:\"OSTELLA-BISTRO-650x450.png\";s:5:\"width\";i:650;s:6:\"height\";i:450;s:9:\"mime-type\";s:9:\"image/png\";}s:41:\"travelers_blog_category_slider_no_sidebar\";a:4:{s:4:\"file\";s:26:\"OSTELLA-BISTRO-950x450.png\";s:5:\"width\";i:950;s:6:\"height\";i:450;s:9:\"mime-type\";s:9:\"image/png\";}s:29:\"travelers_blog_detail_cat_one\";a:4:{s:4:\"file\";s:26:\"OSTELLA-BISTRO-470x350.png\";s:5:\"width\";i:470;s:6:\"height\";i:350;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"travelers_blog_medium\";a:4:{s:4:\"file\";s:26:\"OSTELLA-BISTRO-440x420.png\";s:5:\"width\";i:440;s:6:\"height\";i:420;s:9:\"mime-type\";s:9:\"image/png\";}s:19:\"travelers_blog_page\";a:4:{s:4:\"file\";s:26:\"OSTELLA-BISTRO-730x450.png\";s:5:\"width\";i:730;s:6:\"height\";i:450;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"travelers_blog_detail\";a:4:{s:4:\"file\";s:26:\"OSTELLA-BISTRO-670x460.png\";s:5:\"width\";i:670;s:6:\"height\";i:460;s:9:\"mime-type\";s:9:\"image/png\";}s:24:\"travelers_blog_blog_list\";a:4:{s:4:\"file\";s:26:\"OSTELLA-BISTRO-440x300.png\";s:5:\"width\";i:440;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:37:\"travelers_blog_blog_list_no_sidebar_1\";a:4:{s:4:\"file\";s:26:\"OSTELLA-BISTRO-220x190.png\";s:5:\"width\";i:220;s:6:\"height\";i:190;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(315, 112, '_wp_attached_file', '2020/02/OSTELLA-BISTRO-min.png'),
(316, 112, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1920;s:6:\"height\";i:1080;s:4:\"file\";s:30:\"2020/02/OSTELLA-BISTRO-min.png\";s:5:\"sizes\";a:13:{s:6:\"medium\";a:4:{s:4:\"file\";s:30:\"OSTELLA-BISTRO-min-300x169.png\";s:5:\"width\";i:300;s:6:\"height\";i:169;s:9:\"mime-type\";s:9:\"image/png\";}s:5:\"large\";a:4:{s:4:\"file\";s:31:\"OSTELLA-BISTRO-min-1024x576.png\";s:5:\"width\";i:1024;s:6:\"height\";i:576;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:30:\"OSTELLA-BISTRO-min-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:30:\"OSTELLA-BISTRO-min-768x432.png\";s:5:\"width\";i:768;s:6:\"height\";i:432;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"1536x1536\";a:4:{s:4:\"file\";s:31:\"OSTELLA-BISTRO-min-1536x864.png\";s:5:\"width\";i:1536;s:6:\"height\";i:864;s:9:\"mime-type\";s:9:\"image/png\";}s:30:\"travelers_blog_category_slider\";a:4:{s:4:\"file\";s:30:\"OSTELLA-BISTRO-min-650x450.png\";s:5:\"width\";i:650;s:6:\"height\";i:450;s:9:\"mime-type\";s:9:\"image/png\";}s:41:\"travelers_blog_category_slider_no_sidebar\";a:4:{s:4:\"file\";s:30:\"OSTELLA-BISTRO-min-950x450.png\";s:5:\"width\";i:950;s:6:\"height\";i:450;s:9:\"mime-type\";s:9:\"image/png\";}s:29:\"travelers_blog_detail_cat_one\";a:4:{s:4:\"file\";s:30:\"OSTELLA-BISTRO-min-470x350.png\";s:5:\"width\";i:470;s:6:\"height\";i:350;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"travelers_blog_medium\";a:4:{s:4:\"file\";s:30:\"OSTELLA-BISTRO-min-440x420.png\";s:5:\"width\";i:440;s:6:\"height\";i:420;s:9:\"mime-type\";s:9:\"image/png\";}s:19:\"travelers_blog_page\";a:4:{s:4:\"file\";s:30:\"OSTELLA-BISTRO-min-730x450.png\";s:5:\"width\";i:730;s:6:\"height\";i:450;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"travelers_blog_detail\";a:4:{s:4:\"file\";s:30:\"OSTELLA-BISTRO-min-670x460.png\";s:5:\"width\";i:670;s:6:\"height\";i:460;s:9:\"mime-type\";s:9:\"image/png\";}s:24:\"travelers_blog_blog_list\";a:4:{s:4:\"file\";s:30:\"OSTELLA-BISTRO-min-440x300.png\";s:5:\"width\";i:440;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:37:\"travelers_blog_blog_list_no_sidebar_1\";a:4:{s:4:\"file\";s:30:\"OSTELLA-BISTRO-min-220x190.png\";s:5:\"width\";i:220;s:6:\"height\";i:190;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(332, 120, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:225;s:6:\"height\";i:225;s:4:\"file\";s:23:\"2020/02/philips-min.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:23:\"philips-min-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:37:\"travelers_blog_blog_list_no_sidebar_1\";a:4:{s:4:\"file\";s:23:\"philips-min-220x190.jpg\";s:5:\"width\";i:220;s:6:\"height\";i:190;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(337, 124, '_wp_attached_file', '2020/02/nest-hello-min.jpg'),
(338, 124, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:225;s:6:\"height\";i:225;s:4:\"file\";s:26:\"2020/02/nest-hello-min.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:26:\"nest-hello-min-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:37:\"travelers_blog_blog_list_no_sidebar_1\";a:4:{s:4:\"file\";s:26:\"nest-hello-min-220x190.jpg\";s:5:\"width\";i:220;s:6:\"height\";i:190;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(341, 127, '_wp_attached_file', '2020/02/wemo-mini-min.jpg'),
(342, 127, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:225;s:6:\"height\";i:225;s:4:\"file\";s:25:\"2020/02/wemo-mini-min.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:25:\"wemo-mini-min-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:37:\"travelers_blog_blog_list_no_sidebar_1\";a:4:{s:4:\"file\";s:25:\"wemo-mini-min-220x190.jpg\";s:5:\"width\";i:220;s:6:\"height\";i:190;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(345, 130, '_wp_attached_file', '2020/02/smart-things-min.jpg'),
(346, 130, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:284;s:6:\"height\";i:177;s:4:\"file\";s:28:\"2020/02/smart-things-min.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:28:\"smart-things-min-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:37:\"travelers_blog_blog_list_no_sidebar_1\";a:4:{s:4:\"file\";s:28:\"smart-things-min-220x177.jpg\";s:5:\"width\";i:220;s:6:\"height\";i:177;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(347, 131, '_wp_attached_file', '2020/02/amazon-echo-min-1.jpg'),
(348, 131, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:225;s:6:\"height\";i:225;s:4:\"file\";s:29:\"2020/02/amazon-echo-min-1.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:29:\"amazon-echo-min-1-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:37:\"travelers_blog_blog_list_no_sidebar_1\";a:4:{s:4:\"file\";s:29:\"amazon-echo-min-1-220x190.jpg\";s:5:\"width\";i:220;s:6:\"height\";i:190;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(390, 147, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:300;s:6:\"height\";i:168;s:4:\"file\";s:21:\"2020/02/newspaper.jpg\";s:5:\"sizes\";a:2:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:21:\"newspaper-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:37:\"travelers_blog_blog_list_no_sidebar_1\";a:4:{s:4:\"file\";s:21:\"newspaper-220x168.jpg\";s:5:\"width\";i:220;s:6:\"height\";i:168;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(391, 147, '_wp_attachment_image_alt', 'Real estate investment in Nigeria'),
(394, 150, '_wp_attached_file', '2020/02/OSTELLA-BISTRO-min-1.png'),
(395, 150, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1920;s:6:\"height\";i:1080;s:4:\"file\";s:32:\"2020/02/OSTELLA-BISTRO-min-1.png\";s:5:\"sizes\";a:13:{s:6:\"medium\";a:4:{s:4:\"file\";s:32:\"OSTELLA-BISTRO-min-1-300x169.png\";s:5:\"width\";i:300;s:6:\"height\";i:169;s:9:\"mime-type\";s:9:\"image/png\";}s:5:\"large\";a:4:{s:4:\"file\";s:33:\"OSTELLA-BISTRO-min-1-1024x576.png\";s:5:\"width\";i:1024;s:6:\"height\";i:576;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:32:\"OSTELLA-BISTRO-min-1-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:32:\"OSTELLA-BISTRO-min-1-768x432.png\";s:5:\"width\";i:768;s:6:\"height\";i:432;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"1536x1536\";a:4:{s:4:\"file\";s:33:\"OSTELLA-BISTRO-min-1-1536x864.png\";s:5:\"width\";i:1536;s:6:\"height\";i:864;s:9:\"mime-type\";s:9:\"image/png\";}s:30:\"travelers_blog_category_slider\";a:4:{s:4:\"file\";s:32:\"OSTELLA-BISTRO-min-1-650x450.png\";s:5:\"width\";i:650;s:6:\"height\";i:450;s:9:\"mime-type\";s:9:\"image/png\";}s:41:\"travelers_blog_category_slider_no_sidebar\";a:4:{s:4:\"file\";s:32:\"OSTELLA-BISTRO-min-1-950x450.png\";s:5:\"width\";i:950;s:6:\"height\";i:450;s:9:\"mime-type\";s:9:\"image/png\";}s:29:\"travelers_blog_detail_cat_one\";a:4:{s:4:\"file\";s:32:\"OSTELLA-BISTRO-min-1-470x350.png\";s:5:\"width\";i:470;s:6:\"height\";i:350;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"travelers_blog_medium\";a:4:{s:4:\"file\";s:32:\"OSTELLA-BISTRO-min-1-440x420.png\";s:5:\"width\";i:440;s:6:\"height\";i:420;s:9:\"mime-type\";s:9:\"image/png\";}s:19:\"travelers_blog_page\";a:4:{s:4:\"file\";s:32:\"OSTELLA-BISTRO-min-1-730x450.png\";s:5:\"width\";i:730;s:6:\"height\";i:450;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"travelers_blog_detail\";a:4:{s:4:\"file\";s:32:\"OSTELLA-BISTRO-min-1-670x460.png\";s:5:\"width\";i:670;s:6:\"height\";i:460;s:9:\"mime-type\";s:9:\"image/png\";}s:24:\"travelers_blog_blog_list\";a:4:{s:4:\"file\";s:32:\"OSTELLA-BISTRO-min-1-440x300.png\";s:5:\"width\";i:440;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:37:\"travelers_blog_blog_list_no_sidebar_1\";a:4:{s:4:\"file\";s:32:\"OSTELLA-BISTRO-min-1-220x190.png\";s:5:\"width\";i:220;s:6:\"height\";i:190;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(396, 144, '_thumbnail_id', '152'),
(399, 152, '_wp_attached_file', '2020/02/Real-Estate-Investment-in-Nigeria-for-Renting-Purposes.png');
INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(400, 152, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:940;s:6:\"height\";i:788;s:4:\"file\";s:66:\"2020/02/Real-Estate-Investment-in-Nigeria-for-Renting-Purposes.png\";s:5:\"sizes\";a:11:{s:6:\"medium\";a:4:{s:4:\"file\";s:66:\"Real-Estate-Investment-in-Nigeria-for-Renting-Purposes-300x251.png\";s:5:\"width\";i:300;s:6:\"height\";i:251;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:66:\"Real-Estate-Investment-in-Nigeria-for-Renting-Purposes-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:66:\"Real-Estate-Investment-in-Nigeria-for-Renting-Purposes-768x644.png\";s:5:\"width\";i:768;s:6:\"height\";i:644;s:9:\"mime-type\";s:9:\"image/png\";}s:30:\"travelers_blog_category_slider\";a:4:{s:4:\"file\";s:66:\"Real-Estate-Investment-in-Nigeria-for-Renting-Purposes-650x450.png\";s:5:\"width\";i:650;s:6:\"height\";i:450;s:9:\"mime-type\";s:9:\"image/png\";}s:41:\"travelers_blog_category_slider_no_sidebar\";a:4:{s:4:\"file\";s:66:\"Real-Estate-Investment-in-Nigeria-for-Renting-Purposes-940x450.png\";s:5:\"width\";i:940;s:6:\"height\";i:450;s:9:\"mime-type\";s:9:\"image/png\";}s:29:\"travelers_blog_detail_cat_one\";a:4:{s:4:\"file\";s:66:\"Real-Estate-Investment-in-Nigeria-for-Renting-Purposes-470x350.png\";s:5:\"width\";i:470;s:6:\"height\";i:350;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"travelers_blog_medium\";a:4:{s:4:\"file\";s:66:\"Real-Estate-Investment-in-Nigeria-for-Renting-Purposes-440x420.png\";s:5:\"width\";i:440;s:6:\"height\";i:420;s:9:\"mime-type\";s:9:\"image/png\";}s:19:\"travelers_blog_page\";a:4:{s:4:\"file\";s:66:\"Real-Estate-Investment-in-Nigeria-for-Renting-Purposes-730x450.png\";s:5:\"width\";i:730;s:6:\"height\";i:450;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"travelers_blog_detail\";a:4:{s:4:\"file\";s:66:\"Real-Estate-Investment-in-Nigeria-for-Renting-Purposes-670x460.png\";s:5:\"width\";i:670;s:6:\"height\";i:460;s:9:\"mime-type\";s:9:\"image/png\";}s:24:\"travelers_blog_blog_list\";a:4:{s:4:\"file\";s:66:\"Real-Estate-Investment-in-Nigeria-for-Renting-Purposes-440x300.png\";s:5:\"width\";i:440;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:37:\"travelers_blog_blog_list_no_sidebar_1\";a:4:{s:4:\"file\";s:66:\"Real-Estate-Investment-in-Nigeria-for-Renting-Purposes-220x190.png\";s:5:\"width\";i:220;s:6:\"height\";i:190;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(401, 152, '_wp_attachment_image_alt', 'Real Estate Investment in Nigeria'),
(407, 154, '_edit_last', '2'),
(406, 154, '_edit_lock', '1583082398:2'),
(408, 155, '_wp_attached_file', '2020/03/How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation.png'),
(409, 155, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:940;s:6:\"height\";i:788;s:4:\"file\";s:62:\"2020/03/How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation.png\";s:5:\"sizes\";a:11:{s:6:\"medium\";a:4:{s:4:\"file\";s:62:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-300x251.png\";s:5:\"width\";i:300;s:6:\"height\";i:251;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:62:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:62:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-768x644.png\";s:5:\"width\";i:768;s:6:\"height\";i:644;s:9:\"mime-type\";s:9:\"image/png\";}s:30:\"travelers_blog_category_slider\";a:4:{s:4:\"file\";s:62:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-650x450.png\";s:5:\"width\";i:650;s:6:\"height\";i:450;s:9:\"mime-type\";s:9:\"image/png\";}s:41:\"travelers_blog_category_slider_no_sidebar\";a:4:{s:4:\"file\";s:62:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-940x450.png\";s:5:\"width\";i:940;s:6:\"height\";i:450;s:9:\"mime-type\";s:9:\"image/png\";}s:29:\"travelers_blog_detail_cat_one\";a:4:{s:4:\"file\";s:62:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-470x350.png\";s:5:\"width\";i:470;s:6:\"height\";i:350;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"travelers_blog_medium\";a:4:{s:4:\"file\";s:62:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-440x420.png\";s:5:\"width\";i:440;s:6:\"height\";i:420;s:9:\"mime-type\";s:9:\"image/png\";}s:19:\"travelers_blog_page\";a:4:{s:4:\"file\";s:62:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-730x450.png\";s:5:\"width\";i:730;s:6:\"height\";i:450;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"travelers_blog_detail\";a:4:{s:4:\"file\";s:62:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-670x460.png\";s:5:\"width\";i:670;s:6:\"height\";i:460;s:9:\"mime-type\";s:9:\"image/png\";}s:24:\"travelers_blog_blog_list\";a:4:{s:4:\"file\";s:62:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-440x300.png\";s:5:\"width\";i:440;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:37:\"travelers_blog_blog_list_no_sidebar_1\";a:4:{s:4:\"file\";s:62:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-220x190.png\";s:5:\"width\";i:220;s:6:\"height\";i:190;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(410, 155, '_wp_attachment_image_alt', 'How to Find the Perfect Hotel for a Great Vacation'),
(413, 154, '_heateor_sss_meta', 'a:2:{s:7:\"sharing\";i:0;s:16:\"vertical_sharing\";i:0;}'),
(414, 154, '_yoast_wpseo_focuskw', 'the Perfect Hotel'),
(415, 154, '_yoast_wpseo_metadesc', 'How do I find the perfect hotel for my vacation??? Its hard I know but if you just follow these easy steps, the perfect hotel for your vacation...'),
(416, 154, '_yoast_wpseo_linkdex', '76'),
(417, 154, '_yoast_wpseo_content_score', '30'),
(418, 154, '_yoast_wpseo_primary_category', '1'),
(421, 154, '_thumbnail_id', '158'),
(424, 158, '_wp_attached_file', '2020/03/How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-1.png'),
(425, 158, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:940;s:6:\"height\";i:788;s:4:\"file\";s:64:\"2020/03/How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-1.png\";s:5:\"sizes\";a:11:{s:6:\"medium\";a:4:{s:4:\"file\";s:64:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-1-300x251.png\";s:5:\"width\";i:300;s:6:\"height\";i:251;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:64:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-1-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:64:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-1-768x644.png\";s:5:\"width\";i:768;s:6:\"height\";i:644;s:9:\"mime-type\";s:9:\"image/png\";}s:30:\"travelers_blog_category_slider\";a:4:{s:4:\"file\";s:64:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-1-650x450.png\";s:5:\"width\";i:650;s:6:\"height\";i:450;s:9:\"mime-type\";s:9:\"image/png\";}s:41:\"travelers_blog_category_slider_no_sidebar\";a:4:{s:4:\"file\";s:64:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-1-940x450.png\";s:5:\"width\";i:940;s:6:\"height\";i:450;s:9:\"mime-type\";s:9:\"image/png\";}s:29:\"travelers_blog_detail_cat_one\";a:4:{s:4:\"file\";s:64:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-1-470x350.png\";s:5:\"width\";i:470;s:6:\"height\";i:350;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"travelers_blog_medium\";a:4:{s:4:\"file\";s:64:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-1-440x420.png\";s:5:\"width\";i:440;s:6:\"height\";i:420;s:9:\"mime-type\";s:9:\"image/png\";}s:19:\"travelers_blog_page\";a:4:{s:4:\"file\";s:64:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-1-730x450.png\";s:5:\"width\";i:730;s:6:\"height\";i:450;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"travelers_blog_detail\";a:4:{s:4:\"file\";s:64:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-1-670x460.png\";s:5:\"width\";i:670;s:6:\"height\";i:460;s:9:\"mime-type\";s:9:\"image/png\";}s:24:\"travelers_blog_blog_list\";a:4:{s:4:\"file\";s:64:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-1-440x300.png\";s:5:\"width\";i:440;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:37:\"travelers_blog_blog_list_no_sidebar_1\";a:4:{s:4:\"file\";s:64:\"How-to-Find-the-Perfect-Hotel-for-a-Great-Vacation-1-220x190.png\";s:5:\"width\";i:220;s:6:\"height\";i:190;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(426, 158, '_wp_attachment_image_alt', 'How to Find the Perfect Hotel for a Great Vacation'),
(433, 159, '_edit_lock', '1592227419:2'),
(434, 159, '_edit_last', '2');

-- --------------------------------------------------------

--
-- Table structure for table `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Real Estate', 'realestate', 0),
(2, 'Primary', 'primary', 0),
(3, 'Primary (2)', 'primary-2', 0),
(4, 'Social Links Menu', 'social-links-menu', 0),
(5, 'Luxury properties', 'luxury-properties', 0),
(6, 'Advice/Tips', 'advice-tips', 0),
(7, 'Neighbourhoods', 'neighborhood', 0),
(8, 'Trend', 'trend', 0),
(9, 'Story', 'story', 0),
(10, 'property in nigeria', 'property-in-nigeria', 0),
(11, 'property blog', 'property-blog', 0),
(12, 'rent a property in nigeria', 'rent-a-property-in-nigeria', 0),
(13, 'living in a house that someone died in', 'living-in-a-house-that-someone-died-in', 0),
(14, 'best home devices in 2020', 'best-home-devices-in-2020', 0),
(15, 'tech', 'tech', 0),
(16, 'home tech', 'home-tech', 0),
(17, 'real estate', 'real-estate', 0),
(18, 'real estate investment in Nigeria', 'real-estate-investment-in-nigeria', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `term_order` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(144, 1, 0),
(15, 2, 0),
(16, 2, 0),
(144, 6, 0),
(18, 2, 0),
(19, 3, 0),
(20, 3, 0),
(50, 1, 0),
(22, 3, 0),
(23, 4, 0),
(24, 4, 0),
(25, 4, 0),
(26, 4, 0),
(27, 4, 0),
(144, 10, 0),
(44, 1, 0),
(50, 6, 0),
(94, 9, 0),
(94, 10, 0),
(94, 1, 0),
(94, 11, 0),
(94, 12, 0),
(94, 13, 0),
(105, 1, 0),
(105, 14, 0),
(105, 8, 0),
(105, 16, 0),
(105, 17, 0),
(144, 11, 0),
(144, 17, 0),
(144, 12, 0),
(144, 18, 0),
(154, 1, 0),
(154, 6, 0),
(154, 11, 0),
(154, 10, 0),
(154, 17, 0),
(154, 18, 0),
(154, 12, 0),
(159, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `count` bigint(20) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 6),
(2, 2, 'nav_menu', '', 0, 3),
(3, 3, 'nav_menu', '', 0, 3),
(4, 4, 'nav_menu', '', 0, 5),
(5, 5, 'category', '', 0, 0),
(6, 6, 'category', '', 1, 3),
(7, 7, 'category', '', 1, 0),
(8, 8, 'category', '', 1, 1),
(9, 9, 'category', '', 1, 1),
(10, 10, 'post_tag', '', 0, 3),
(11, 11, 'post_tag', '', 0, 3),
(12, 12, 'post_tag', '', 0, 3),
(13, 13, 'post_tag', '', 0, 1),
(14, 14, 'post_tag', '', 0, 1),
(15, 15, 'post_tag', '', 0, 0),
(16, 16, 'post_tag', '', 0, 1),
(17, 17, 'post_tag', '', 0, 3),
(18, 18, 'post_tag', '', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'Gohome'),
(2, 1, 'first_name', 'Gohome NG'),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'wp_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', 'theme_editor_notice'),
(15, 1, 'show_welcome_panel', '0'),
(39, 2, 'session_tokens', 'a:1:{s:64:\"6eb9d8546103b4f69220a3b7e28b291578800d1ea362ea047fa81c02f95afa2b\";a:4:{s:10:\"expiration\";i:1592341464;s:2:\"ip\";s:14:\"105.112.46.130\";s:2:\"ua\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36\";s:5:\"login\";i:1592168664;}}'),
(17, 1, 'wp_dashboard_quick_press_last_post_id', '137'),
(18, 1, 'community-events-location', 'a:1:{s:2:\"ip\";s:13:\"105.112.122.0\";}'),
(19, 1, 'wp_user-settings', 'libraryContent=browse'),
(20, 1, 'wp_user-settings-time', '1579443344'),
(35, 2, 'locale', ''),
(36, 2, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(37, 2, 'wp_user_level', '10'),
(38, 2, 'dismissed_wp_pointers', ''),
(40, 2, 'wp_dashboard_quick_press_last_post_id', '138'),
(22, 1, 'nav_menu_recently_edited', '2'),
(23, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),
(24, 1, 'metaboxhidden_nav-menus', 'a:1:{i:0;s:12:\"add-post_tag\";}'),
(31, 2, 'comment_shortcuts', 'false'),
(32, 2, 'admin_color', 'fresh'),
(33, 2, 'use_ssl', '0'),
(34, 2, 'show_admin_bar_front', 'true'),
(30, 2, 'syntax_highlighting', 'true'),
(25, 2, 'nickname', 'GohomeNG'),
(26, 2, 'first_name', 'Gohome Nigeria'),
(27, 2, 'last_name', ''),
(28, 2, 'description', ''),
(29, 2, 'rich_editing', 'true'),
(41, 2, 'community-events-location', 'a:1:{s:2:\"ip\";s:13:\"105.112.120.0\";}'),
(42, 2, 'closedpostboxes_post', 'a:1:{i:0;s:16:\"heateor_sss_meta\";}'),
(43, 2, 'metaboxhidden_post', 'a:0:{}'),
(44, 2, 'wp_user-settings', 'libraryContent=browse'),
(45, 2, 'wp_user-settings-time', '1580641513'),
(47, 1, 'exactmetrics_user_preferences', 'a:1:{s:7:\"reports\";a:1:{s:8:\"overview\";a:3:{s:8:\"toppages\";b:0;s:11:\"newvsreturn\";b:0;s:7:\"devices\";b:0;}}}'),
(48, 1, '_yoast_wpseo_profile_updated', '1582899118'),
(49, 2, '_yoast_wpseo_profile_updated', '1582899118');

-- --------------------------------------------------------

--
-- Table structure for table `wp_yoast_seo_links`
--

CREATE TABLE `wp_yoast_seo_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `target_post_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(8) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_yoast_seo_links`
--

INSERT INTO `wp_yoast_seo_links` (`id`, `url`, `post_id`, `target_post_id`, `type`) VALUES
(1, 'https://gohome.ng/', 105, 0, 'external'),
(2, 'https://blog.gohome.ng/', 105, 0, 'internal'),
(3, 'https://blog.gohome.ng/', 105, 0, 'internal'),
(4, 'https://blog.gohome.ng/', 105, 0, 'internal'),
(5, 'https://gohome.ng/', 105, 0, 'external'),
(8, 'http://blog.gohome.ng/about/', 94, 7, 'internal'),
(9, 'https://gohome.ng/', 94, 0, 'external'),
(35, 'https://gohome.ng/', 144, 0, 'external'),
(34, 'https://blog.gohome.ng/avoid-scammers-when-you-are-renting-that-apartment/', 144, 50, 'internal'),
(76, 'https://blog.gohome.ng/5-key-factors-you-should-consider-before-renting-a-house/', 154, 44, 'internal'),
(77, 'https://gohome.ng/', 154, 0, 'external'),
(78, 'https://gohome.ng/', 154, 0, 'external');

-- --------------------------------------------------------

--
-- Table structure for table `wp_yoast_seo_meta`
--

CREATE TABLE `wp_yoast_seo_meta` (
  `object_id` bigint(20) UNSIGNED NOT NULL,
  `internal_link_count` int(10) UNSIGNED DEFAULT NULL,
  `incoming_link_count` int(10) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_yoast_seo_meta`
--

INSERT INTO `wp_yoast_seo_meta` (`object_id`, `internal_link_count`, `incoming_link_count`) VALUES
(105, 3, 0),
(94, 1, 0),
(7, NULL, 1),
(144, 1, 0),
(50, NULL, 1),
(154, 1, 0),
(44, NULL, 1),
(137, 0, 0),
(138, 0, 0),
(159, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `yemedugo`
--

CREATE TABLE `yemedugo` (
  `id` int(9) NOT NULL,
  `who` varchar(45) NOT NULL,
  `didwhat` varchar(150) NOT NULL,
  `why` text NOT NULL,
  `wen` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yemedugo`
--

INSERT INTO `yemedugo` (`id`, `who`, `didwhat`, `why`, `wen`) VALUES
(1, '0', 'Property Status Updated Successful- 10001', '', '2019-09-22 21:21:26'),
(2, '0', 'Property Status Updated Successful- 10001', '', '2019-09-22 21:28:27'),
(3, '0', 'Property Status Updated Successful- 10001', '', '2019-09-22 21:28:33'),
(4, '0', 'Property Status Updated Successful- 10001', '', '2019-09-22 21:28:43'),
(5, '0', 'Property Status Updated Successful- 10001', '', '2019-09-22 21:31:05'),
(6, '0', 'Property Status Updated Successful- 10001', '', '2019-09-22 21:32:47'),
(7, '0', 'Property Status Updated Successful- 10001', '', '2019-09-22 21:33:25'),
(8, '0', 'Property Status Updated Successful- 10001', '', '2019-09-22 21:34:52'),
(9, '0', 'Property Status Updated Successful- 10001', '', '2019-09-22 21:35:39'),
(10, '0', 'Property Status Updated Successful- 10001', '', '2019-09-22 21:35:46'),
(11, '0', 'Property Status Updated Successful- 10001', '', '2019-09-22 21:42:37'),
(12, '0', 'Property Status Updated Successful- 10001', '', '2019-09-22 21:43:01'),
(13, '0', 'Property Status Updated Successful- 10001', '', '2019-09-22 21:43:23'),
(14, '0', 'Added a new Property  - Apartment In Ikoyi', '', '2019-09-22 22:19:07'),
(15, '0', 'Added a new Property  - Apartment In Ikoyi', '', '2019-09-22 22:24:13'),
(16, '0', 'Added a new Property  - House In Port Harcourt', '', '2019-09-22 22:29:03'),
(17, '0', 'Property Status Updated Successful- 10003', '', '2019-09-22 22:42:31'),
(18, '0', 'Added a new Property  - House In Port Harcourt', '', '2019-09-22 22:54:21'),
(19, '0', 'Added a new Property  - Apartment In Ikoyi', '', '2019-09-22 23:26:38'),
(20, '0', 'Logged In', '', '2019-09-23 15:10:27'),
(21, '0', 'Logged Out', '', '2019-09-23 16:43:46'),
(22, '0', 'Logged In', '', '2019-09-23 16:43:49'),
(23, '0', 'Logged Out', '', '2019-09-23 18:44:18'),
(24, '0', 'Logged In', '', '2019-09-23 18:44:20'),
(25, '0', 'Logged Out', '', '2019-09-23 21:21:31'),
(26, '0', 'Logged In', '', '2019-09-25 12:47:40'),
(27, '0', 'Logged In', '', '2019-09-25 12:51:45'),
(28, '100100', 'Unable to Load Properties', 'Reason: You Have An Error In Your Sql Syntax; Check The Manual That Corresponds To Your Mariadb Server Version For The Right Syntax To Use Near \\\'*) From Property_info Where City=\\\'port Harcourt\\\' And Approved=\\\'yes\\\'\\\' At Line 1', '2019-09-28 21:57:24'),
(29, '100100', 'Unable to Load Properties', 'Reason: You Have An Error In Your Sql Syntax; Check The Manual That Corresponds To Your Mariadb Server Version For The Right Syntax To Use Near \\\'*) From Property_info Where City=\\\'port Harcourt\\\' And Approved=\\\'yes\\\'\\\' At Line 1', '2019-09-28 21:57:28'),
(30, '0', 'Logged In', '', '2019-09-29 08:01:30'),
(31, '0', 'Logged Out', '', '2019-09-29 08:01:55'),
(32, '0', 'Added a new Property  - Store In Ikoyi', '', '2019-09-29 09:47:01'),
(33, '0', 'Added a new Property  - Store In Ikoyi', '', '2019-09-29 09:55:24'),
(34, '0', 'Added a new guest  - James Adams', '', '2019-09-29 09:55:25'),
(35, '0', 'Logged In', '', '2019-09-29 09:57:22'),
(36, '0', 'Property Status Updated Successful- 10006', '', '2019-09-29 09:57:55'),
(37, '0', 'Logged In', '', '2019-09-29 09:58:34'),
(38, '0', 'Added a new Property  - House In Owerri', '', '2019-09-29 10:01:12'),
(39, '0', 'Added a new guest  -', '', '2019-09-29 10:01:12'),
(40, '0', 'Property Status Updated Successful- 10007', '', '2019-09-29 10:02:07'),
(41, '0', 'Added a new Property  - Apartment In Owerri', '', '2019-09-29 10:57:54'),
(42, '0', 'Added a new Property  - Apartment In Owerri', '', '2019-09-29 10:58:47'),
(43, '0', 'Added a new Property  - Store In Owerri', '', '2019-09-29 11:02:17'),
(44, '0', 'Added a new Property  - Store In Owerri', '', '2019-09-29 11:04:12'),
(45, '0', 'Added a new Property  - Store In Owerri', '', '2019-09-29 11:05:24'),
(46, '0', 'Added a new Property  - Apartment In Ikoyi', '', '2019-09-29 11:07:09'),
(47, '0', 'Logged Out', '', '2019-09-29 11:07:32'),
(48, '0', 'Added a new Property  - House In Port Harcourt', '', '2019-09-29 11:08:54'),
(49, '0', 'Added a new guest  - Chima Woke', '', '2019-09-29 11:08:54'),
(50, '0', 'Logged In', '', '2019-09-29 11:10:49'),
(51, '0', 'Added a new Property  - Apartment In Owerri', '', '2019-09-29 11:12:28'),
(52, '0', 'Logged In', '', '2019-09-29 11:15:33'),
(53, '0', 'Property Status Updated Successful- 10003', '', '2019-09-29 11:15:49'),
(54, '0', 'Property Status Updated Successful- 10002', '', '2019-09-29 11:16:15'),
(55, '0', 'Property Status Updated Successful- 10001', '', '2019-09-29 11:16:38'),
(56, '0', 'Property Status Updated Successful- 10000', '', '2019-09-29 11:16:50'),
(57, '0', 'Property Status Updated Successful- 10000', '', '2019-09-29 11:17:34'),
(58, '0', 'Property Status Updated Successful- 10001', '', '2019-09-29 11:18:03'),
(59, '0', 'Property Status Updated Successful- 10002', '', '2019-09-29 11:19:00'),
(60, '0', 'Property Status Updated Successful- 10003', '', '2019-09-29 11:19:11'),
(61, '0', 'Logged Out', '', '2019-09-29 11:41:58'),
(62, '0', 'Logged In', '', '2019-09-29 12:00:00'),
(63, '100100', 'Unable to Load Properties', 'Reason: Column \\\'id\\\' In Order Clause Is Ambiguous', '2019-09-29 14:50:23'),
(64, '100100', 'Unable to Load Properties', 'Reason: The Used Select Statements Have A Different Number Of Columns', '2019-09-29 15:08:42'),
(65, '100100', 'Unable to Load Properties', 'Reason: The Used Select Statements Have A Different Number Of Columns', '2019-09-29 15:09:43'),
(66, '0', 'Logged In', '', '2019-09-30 17:50:31'),
(67, '0', 'Agents Details Updated Successful- John Lennon', '', '2019-09-30 19:05:12'),
(68, '0', 'Agents Details Updated Successful- John Lennon', '', '2019-09-30 19:10:20'),
(69, '0', 'Agents Details Updated Successful- John Lennon', '', '2019-09-30 19:10:39'),
(70, '0', 'Logged Out', '', '2019-09-30 20:58:22'),
(71, '0', 'Logged In', '', '2019-09-30 20:59:19'),
(72, '0', 'Logged In', '', '2019-09-30 22:14:32'),
(73, '0', 'Uploaded File 10-quick-tips-about-real-estate-86018.jpg', '', '2019-09-30 22:26:58'),
(74, '0', 'Added a new Post  - 10 Quick Tips About Real Estate', '', '2019-09-30 22:29:58'),
(75, '0', 'Logged Out', '', '2019-10-01 05:06:20'),
(76, '0', 'Logged In', '', '2019-10-01 05:06:24'),
(77, '0', 'Logged Out', '', '2019-10-01 05:55:46'),
(78, '0', 'Logged In', '', '2019-10-01 05:55:48'),
(79, '0', 'Uploaded File fullimage-13092.jpg', '', '2019-10-01 05:58:12'),
(80, '0', 'Post Updated Successful- 10 Quick Tips About Real Estate', '', '2019-10-01 05:59:47'),
(81, '0', 'New comment posted  - Chima Woke', '', '2019-10-01 06:47:27'),
(82, '0', 'New comment posted  - Chima Woke', '', '2019-10-01 06:48:23'),
(83, '0', 'New comment posted  - Chima Woke', '', '2019-10-01 07:01:12'),
(84, '0', 'New comment posted  - Chima Woke', '', '2019-10-01 07:05:08'),
(85, '0', 'Logged Out', '', '2019-10-01 07:27:57'),
(86, '0', 'Logged In', '', '2019-10-01 07:28:01'),
(87, '0', 'Uploaded File creating-a-capitve-audience-18698.jpg', '', '2019-10-01 07:31:38'),
(88, '0', 'Posting Failed for - Creating A Capitve Audience', 'Failed: Creating A Capitve Audience, Creating-A-Capitve-Audience, 6, Creating-A-Capitve-Audience-18698.jpg, Creating-A-Capitve-Audience-18698.jpg, , Left, , Chima Woke, Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Proident, Sunt In Culpa Qui Officia., &amp;lt;p Style=&amp;quot;margin-Right: 0px; Margin-Bottom: 12px; Margin-Left: 0px; Color: Rgb(170, 170, 170); Font-Size: 14px; Line-Height: 26px;&amp;quot;&amp;gt;nam Nisl Lacus, Dignissim Ac Tristique Ut, Scelerisque Eu Massa. Vestibulum Ligula Nunc, Rutrum In Malesuada Vitae, Tempus Sed Augue. Curabitur Quis Lectus Quis Augue Dapibus Facilisis Amusie Tincidunt Orci Est, In Vehicula Nisi Eleifend Ut Estibulm Sagittis Varius Orci Vitae.&amp;lt;/p&amp;gt;&amp;lt;blockquote Class=&amp;quot;blockquote&amp;quot; Style=&amp;quot;padding: 0px 0px 0px 40px; Margin-Top: 20px; Margin-Bottom: 24px; Margin-Left: 30px; Font-Size: 14px; Border-Width: Initial; Border-Style: None; Border-Color: Initial; Color: Rgb(52, 73, 94); Line-Height: 26px; Position: Relative;&amp;quot;&amp;gt;lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiusod Tempor Incididunt Ut Labor Et Dolore Magna Aliqua. Ut Enim Ad Minim Venia Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip.&amp;lt;/blockquote&amp;gt;&amp;lt;p Style=&amp;quot;margin-Right: 0px; Margin-Bottom: 12px; Margin-Left: 0px; Color: Rgb(170, 170, 170); Font-Size: 14px; Line-Height: 26px;&amp;quot;&amp;gt;duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Proident, Sunt In Culpa Qui Officia.&amp;lt;/p&amp;gt;, , , , , , , , , , 1. Reason: Column Count Doesn&#039;t Match Value Count At Row 1', '2019-10-01 07:32:53'),
(89, '0', 'Posting Failed for - Creating A Capitve Audience', 'Failed: Creating A Capitve Audience, Creating-A-Capitve-Audience, 6, Creating-A-Capitve-Audience-18698.jpg, Creating-A-Capitve-Audience-18698.jpg, , Left, , Chima Woke, Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Proident, Sunt In Culpa Qui Officia., &amp;lt;p Style=&amp;quot;margin-Right: 0px; Margin-Bottom: 12px; Margin-Left: 0px; Color: Rgb(170, 170, 170); Font-Size: 14px; Line-Height: 26px;&amp;quot;&amp;gt;nam Nisl Lacus, Dignissim Ac Tristique Ut, Scelerisque Eu Massa. Vestibulum Ligula Nunc, Rutrum In Malesuada Vitae, Tempus Sed Augue. Curabitur Quis Lectus Quis Augue Dapibus Facilisis Amusie Tincidunt Orci Est, In Vehicula Nisi Eleifend Ut Estibulm Sagittis Varius Orci Vitae.&amp;lt;/p&amp;gt;&amp;lt;blockquote Class=&amp;quot;blockquote&amp;quot; Style=&amp;quot;padding: 0px 0px 0px 40px; Margin-Top: 20px; Margin-Bottom: 24px; Margin-Left: 30px; Font-Size: 14px; Border-Width: Initial; Border-Style: None; Border-Color: Initial; Color: Rgb(52, 73, 94); Line-Height: 26px; Position: Relative;&amp;quot;&amp;gt;lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elit, Sed Do Eiusod Tempor Incididunt Ut Labor Et Dolore Magna Aliqua. Ut Enim Ad Minim Venia Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip.&amp;lt;/blockquote&amp;gt;&amp;lt;p Style=&amp;quot;margin-Right: 0px; Margin-Bottom: 12px; Margin-Left: 0px; Color: Rgb(170, 170, 170); Font-Size: 14px; Line-Height: 26px;&amp;quot;&amp;gt;duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur. Excepteur Sint Occaecat Cupidatat Non Proident, Sunt In Culpa Qui Officia.&amp;lt;/p&amp;gt;, , , , , , , , , , 1. Reason: Column Count Doesn&#039;t Match Value Count At Row 1', '2019-10-01 07:33:49'),
(90, '0', 'Added a new Post  - Creating A Capitve Audience', '', '2019-10-01 07:43:24'),
(91, '0', 'New comment posted  - Chima Woke', '', '2019-10-01 07:55:48'),
(92, '0', 'New comment posted  - Bobby Gucci', '', '2019-10-01 08:01:25'),
(93, '0', 'New comment posted  - Chima Woke', '', '2019-10-01 08:01:55'),
(94, '0', 'New comment posted  - Robert Brown', '', '2019-10-01 08:28:27'),
(95, '0', 'New comment posted  - John Smith', '', '2019-10-01 08:36:15'),
(96, '0', 'Logged Out', '', '2019-10-01 08:38:15'),
(97, '0', 'Logged In', '', '2019-10-01 08:38:18'),
(98, '0', 'Mail Sending Failed for - Chima Woke', 'Failed: , Chima Woke, Chima.woke.ls@gmail.com, 07058555101, Testing The Email Functionality.. Reason:', '2019-10-01 11:13:06'),
(99, '0', 'Mail Sending Failed for - Chima Woke', 'Failed: Chima Woke, Chima.woke.ls@gmail.com, 07058555101, Testing The Email Functionality.. Reason:', '2019-10-01 11:15:15'),
(100, '0', 'Mail Sending Failed for - Chima Woke', 'Failed: Chima Woke, Chima.woke.ls@gmail.com, 07058555101, Testing The Email Functionality.. Reason:', '2019-10-01 11:40:32'),
(101, '0', 'Mail Sending Failed for - Chima Woke', 'Failed: Chima Woke, Chima.woke.ls@gmail.com, 07058555101, Mejwnsns. Reason:', '2019-10-01 11:44:05'),
(102, '0', 'New comment posted  - Chima Woke', '', '2019-10-01 21:42:21'),
(103, '0', 'Logged In', '', '2019-10-02 08:35:21'),
(104, '0', 'Added a new Property  - Store in Lagos', '', '2019-10-02 09:08:30'),
(105, '0', 'Added a new guest  - James White', '', '2019-10-02 09:08:30'),
(106, '0', 'Logged Out', '', '2019-10-02 09:09:19'),
(107, '0', 'Logged In', '', '2019-10-02 09:09:29'),
(108, '0', 'Property Status Updated Successful- 10004', '', '2019-10-02 09:10:02'),
(109, '0', 'Added a new Property  - Store in Lagos', '', '2019-10-02 09:54:22'),
(110, '0', 'Added a new guest  - Caleb Allen', '', '2019-10-02 09:54:22'),
(111, '0', 'Logged Out', '', '2019-10-02 09:56:02'),
(112, '0', 'Logged In', '', '2019-10-02 09:56:13'),
(113, '0', 'Property Status Updated Successful- 10005', '', '2019-10-02 09:56:58'),
(114, '0', 'Logged In', '', '2019-10-05 09:11:03'),
(115, '100100', 'Account Removed By Chima', '', '2019-10-05 09:54:02'),
(116, '100100', 'Account Removed By Chima', '', '2019-10-05 09:54:20'),
(117, '100100', 'Comment Removed By Chima', '', '2019-10-05 10:06:42'),
(118, '100100', 'Comment Removed By Chima', '', '2019-10-05 10:07:44'),
(119, '100100', 'Comment Removed By Chima', '', '2019-10-05 10:07:48'),
(120, '100100', 'Comment Removed By Chima', '', '2019-10-05 10:08:52'),
(121, '0', 'New comment posted  - Chima Woke', '', '2019-10-05 10:09:31'),
(122, '100100', 'Comment Removed By Chima', '', '2019-10-05 10:09:44'),
(123, '100100', 'Created New User: faith@yahoo.com', '', '2019-10-05 10:12:40'),
(124, '0', 'Logged In', '', '2019-10-05 10:37:39'),
(125, '0', 'Logged Out', '', '2019-10-05 10:37:50'),
(126, '0', 'Logged In', '', '2019-10-05 10:39:31'),
(127, '0', 'Logged Out', '', '2019-10-05 10:39:33'),
(128, '100100', 'Created New User: faith@yahoo.com', '', '2019-10-05 10:47:14'),
(129, '100100', 'Created New User: osilem@gmail.com', '', '2019-10-05 10:48:39'),
(130, '100100', 'Created New User: osilem@gmail.com', '', '2019-10-05 10:52:07'),
(131, '0', 'Logged In', '', '2019-10-05 10:52:52'),
(132, '0', 'Logged Out', '', '2019-10-05 10:53:10'),
(133, '0', 'Logged In', '', '2019-10-05 10:53:56'),
(134, '0', 'Logged Out', '', '2019-10-05 10:54:16'),
(135, '100100', 'Created New User: paz@gmail.com', '', '2019-10-05 10:55:28'),
(136, '0', 'Logged In', '', '2019-10-05 10:55:57'),
(137, '0', 'Logged Out', '', '2019-10-05 10:56:06'),
(138, '0', 'Logged In', '', '2019-10-05 11:46:35'),
(139, '0', 'Logged Out', '', '2019-10-05 11:47:44'),
(140, '0', 'Logged In', '', '2019-10-05 11:49:53'),
(141, '0', 'Logged Out', '', '2019-10-05 11:54:23'),
(142, '0', 'Logged In', '', '2019-10-05 11:57:33'),
(143, '0', 'Logged In', '', '2019-10-05 12:01:22'),
(144, '0', 'Logged In', '', '2019-10-07 07:21:56'),
(145, '0', 'Restaurant Updated Successful- Apartment In Owerri', '', '2019-10-07 08:12:29'),
(146, '0', 'Property Updated Successful- Apartment In Owerri', '', '2019-10-07 09:00:40'),
(147, '0', 'Property Updated Successful- Apartment In Owerri', '', '2019-10-07 09:41:40'),
(148, '0', 'New comment posted  - Abel Umoh', '', '2019-10-09 21:09:42'),
(149, '0', 'Logged In', '', '2019-10-09 21:16:50'),
(150, '0', 'Logged Out', '', '2019-10-09 21:22:22'),
(151, '0', 'Logged In', '', '2019-10-09 21:22:41'),
(152, '0', 'Message Email Sent  - Leslie Woke', '', '2019-10-09 21:33:01'),
(153, '0', 'Message Email Sent  - Chima Woke', '', '2019-10-09 21:37:17'),
(154, '0', 'Message Email Sent  - Selina Adoku', '', '2019-10-09 21:41:48'),
(155, '0', 'Message Email Sent  - Chima Woke', '', '2019-10-09 21:43:13'),
(156, '0', 'Message Email Sent  - Chima Woke', '', '2019-10-09 21:45:17'),
(157, '0', 'Message Email Sent  - Chima Woke', '', '2019-10-09 21:48:20'),
(158, '0', 'Message Email Sent  - Chima Woke', '', '2019-10-09 21:49:08'),
(159, '0', 'Message Email Sent  - barry white', '', '2019-10-09 22:15:29'),
(160, '0', 'Message Email Sent  - Chima Woke', '', '2019-10-09 22:19:49'),
(161, '0', 'Logged Out', '', '2019-10-09 22:22:27'),
(162, '0', 'User\\\'s report sent  - Leslie', '', '2019-10-11 20:49:48'),
(163, '0', 'Message Email Sent  - Leslie Woke', '', '2019-10-11 21:35:00'),
(164, '0', 'Message Email Sent  - Chima Woke', '', '2019-10-11 21:41:37'),
(165, '0', 'Message Email Sent  - Chima Woke', '', '2019-10-11 21:42:08'),
(166, '0', 'Message Email Sent  - Chima Woke', '', '2019-10-12 01:18:29'),
(167, '0', 'Message Email Sent  - Chile', '', '2019-10-12 01:29:46'),
(168, '0', 'Message Email Sent  - Chile', '', '2019-10-12 01:49:26'),
(169, '0', 'Message Email Sent  - chimalo', '', '2019-10-12 01:50:07'),
(170, '0', 'Message Email Sent  - Chima Woke', '', '2019-10-12 01:59:28'),
(171, '0', 'Logged In', '', '2019-10-13 04:03:23'),
(172, '0', 'Property Updated Successful- Another Apartment In Owerri', '', '2019-10-13 04:27:13'),
(173, '0', 'Logged In', '', '2019-10-13 04:32:00'),
(174, '0', 'Property Status Updated Successful- 10001', '', '2019-10-13 04:32:24'),
(175, '0', 'Property Status Updated Successful- 10001', '', '2019-10-13 04:32:32'),
(176, '0', 'Property Status Updated Successful- 10000', '', '2019-10-13 04:33:56'),
(177, '0', 'Property Status Updated Successful- 10003', '', '2019-10-13 04:35:11'),
(178, '0', 'Added a new Property  - 2 Bedroom Apartment in Jahi', '', '2019-10-13 10:22:19'),
(179, '0', 'Added a new guest  - Gohome', '', '2019-10-13 10:22:19'),
(180, '100100', 'Created New User: gohome.ng@gmail.com', '', '2019-10-13 10:25:23'),
(181, '0', 'Logged In', '', '2019-10-13 10:25:56'),
(182, '0', 'Added a new Property  - 2 Bedroom Apartment in Jahi', '', '2019-10-13 10:32:08'),
(183, '0', 'Logged In', '', '2019-10-13 22:40:27'),
(184, '0', 'Unable to List', 'Reason: Unknown Column &#039;attended_to&#039; In &#039;where Clause&#039;', '2019-10-13 22:40:27'),
(185, '0', 'Unable to List', 'Reason: Unknown Column &#039;attended_to&#039; In &#039;where Clause&#039;', '2019-10-13 22:40:38'),
(186, '0', 'Unable to List', 'Reason: Unknown Column &#039;attended_to&#039; In &#039;where Clause&#039;', '2019-10-13 22:41:06'),
(187, '0', 'Unable to List', 'Reason: Unknown Column &#039;attended_to&#039; In &#039;where Clause&#039;', '2019-10-13 22:41:09'),
(188, '0', 'Unable to List', 'Reason: Unknown Column &#039;attended_to&#039; In &#039;where Clause&#039;', '2019-10-13 22:41:11'),
(189, '0', 'Unable to List', 'Reason: Unknown Column &#039;attended_to&#039; In &#039;where Clause&#039;', '2019-10-13 22:41:35'),
(190, '0', 'Unable to List', 'Reason: Unknown Column &#039;attended_to&#039; In &#039;where Clause&#039;', '2019-10-13 22:41:55'),
(191, '0', 'Unable to List', 'Reason: Unknown Column &#039;attended_to&#039; In &#039;where Clause&#039;', '2019-10-13 22:41:59'),
(192, '0', 'Unable to List', 'Reason: Unknown Column &#039;attended_to&#039; In &#039;where Clause&#039;', '2019-10-13 22:42:02'),
(193, '0', 'Logged In', '', '2019-10-14 08:38:01'),
(194, '0', 'Logged In', '', '2019-10-14 15:23:43'),
(195, '0', 'Agents Details Updated Successful- Sameer Derek', '', '2019-10-14 15:50:08'),
(196, '0', 'Logged In', '', '2019-10-14 15:53:50'),
(197, '0', 'Agents Details Updated Successful- Chima Woke', '', '2019-10-14 15:54:59'),
(198, '0', 'Logged In', '', '2019-10-14 16:09:14'),
(199, '0', 'Agents Details Updated Successful- Sameer Derek', '', '2019-10-14 16:14:06'),
(200, '0', 'Logged In', '', '2019-10-14 16:19:39'),
(201, '0', 'Agents Details Updated Successful- Sameer Derek', '', '2019-10-14 16:20:51'),
(202, '0', 'Logged Out', '', '2019-10-14 16:25:58'),
(203, '0', 'Logged In', '', '2019-10-14 16:26:20'),
(204, '0', 'Agents Details Updated Successful- Sameer Derek', '', '2019-10-14 16:29:24'),
(205, '0', 'Agents Details Updated Successful- Sameer Derek', '', '2019-10-14 16:30:57'),
(206, '0', 'Logged In', '', '2019-10-14 16:32:39'),
(207, '0', 'Unable to List Users', 'Reason: Table &#039;gohomeng_web_db.users&#039; Doesn&#039;t Exist', '2019-10-14 16:32:45'),
(208, '0', 'Unable to List Users', 'Reason: Table &#039;gohomeng_web_db.users&#039; Doesn&#039;t Exist', '2019-10-14 16:32:55'),
(209, '100100', 'chymz Created New User: Gohome.ng@gmail.com', '', '2019-10-14 16:34:09'),
(210, '0', 'Unable to List Users', 'Reason: Table &#039;gohomeng_web_db.users&#039; Doesn&#039;t Exist', '2019-10-14 16:34:10'),
(211, '0', 'Logged Out', '', '2019-10-14 16:34:20'),
(212, '0', 'Logged In', '', '2019-10-14 16:34:25'),
(213, '0', 'Logged In', '', '2019-10-14 16:35:19'),
(214, '0', 'Property Status Updated Successful- 10007', '', '2019-10-14 16:37:20'),
(215, '0', 'Property Status Updated Successful- 10006', '', '2019-10-14 16:38:33'),
(216, '0', 'Logged In', '', '2019-10-14 16:38:39'),
(217, '0', 'Property Status Updated Successful- 10007', '', '2019-10-14 16:39:25'),
(218, '0', 'Unable to List Users', 'Reason: Table &#039;gohomeng_web_db.users&#039; Doesn&#039;t Exist', '2019-10-14 16:40:49'),
(219, '0', 'Agents Details Updated Successful- Sameer Derek', '', '2019-10-14 16:44:39'),
(220, '0', 'Agents Details Updated Successful- Sameer Derek', '', '2019-10-14 16:48:55'),
(221, '0', 'Logged Out', '', '2019-10-14 16:53:15'),
(222, '0', 'Logged In', '', '2019-10-14 16:53:27'),
(223, '0', 'Logged In', '', '2019-10-14 16:55:32'),
(224, '0', 'Property Status Updated Successful- 10006', '', '2019-10-14 16:57:27'),
(225, '0', 'User\\\'s report sent  - JON', '', '2019-10-14 16:59:31'),
(226, '0', 'Logged In', '', '2019-10-15 09:13:18'),
(227, '0', 'Post Updated Successful- Avoid Scammers when You are Renting that Apartment', '', '2019-10-15 09:32:58'),
(228, '0', 'Post Updated Successful- Avoid Scammers when You are Renting that Apartment', '', '2019-10-15 09:37:35'),
(229, '0', 'Post Updated Successful- Avoid Scammers When You are Renting that Apartment', '', '2019-10-15 09:38:20'),
(230, '0', 'Post Updated Successful- Avoid Scammers When You are Renting that Apartment', '', '2019-10-15 09:39:17'),
(231, '0', 'Uploaded File avoid-scammers-when-you-are-renting-that-apartment-36018.jpg', '', '2019-10-15 09:40:18'),
(232, '0', 'Uploaded File scam1-36125.jpg', '', '2019-10-15 09:42:05'),
(233, '0', 'Post Updated Successful- Avoid Scammers When You are Renting that Apartment', '', '2019-10-15 09:42:26'),
(234, '0', 'Locked a post with ID: 1', '', '2019-10-15 09:55:13'),
(235, '0', 'Logged In', '', '2019-10-15 10:59:26'),
(236, '0', 'Unable to List Users', 'Reason: Table &#039;gohomeng_web_db.users&#039; Doesn&#039;t Exist', '2019-10-15 11:06:10'),
(237, '0', 'Logged In', '', '2019-10-15 11:07:36'),
(238, '0', 'Logged In', '', '2019-10-16 08:06:18'),
(239, '100100', 'Comment Removed By', '', '2019-10-16 08:07:02'),
(240, '100100', 'Comment Removed By', '', '2019-10-16 08:07:07'),
(241, '100100', 'Comment Removed By', '', '2019-10-16 08:07:14'),
(242, '0', 'New comment posted  - Leslie', '', '2019-10-16 09:36:50'),
(243, '0', 'Logged In', '', '2019-10-17 14:25:25'),
(244, '0', 'Logged In', '', '2019-10-17 21:25:21'),
(245, '0', 'Logged In', '', '2019-10-18 22:55:47'),
(246, '0', 'Logged Out', '', '2019-10-18 22:59:40'),
(247, '0', 'Logged In', '', '2019-10-18 22:59:49'),
(248, '0', 'Logged In', '', '2019-10-18 22:59:50'),
(249, '0', 'Logged In', '', '2019-10-18 23:00:06'),
(250, '0', 'Logged Out', '', '2019-10-18 23:02:46'),
(251, '0', 'Logged In', '', '2019-10-18 23:02:58'),
(252, '0', 'Logged Out', '', '2019-10-18 23:04:23'),
(253, '0', 'Logged In', '', '2019-10-19 05:48:27'),
(254, '0', 'Agents Details Updated Successful- Chima Woke', '', '2019-10-19 05:50:29'),
(255, '0', 'User\\\'s report sent  - Elvis Emesiobu', '', '2019-10-20 19:15:33'),
(256, '0', 'Logged In', '', '2019-10-20 19:35:33'),
(257, '0', 'Logged In', '', '2019-10-22 17:57:54'),
(258, '0', 'Agents Details Updated Successful- Sameer Derek', '', '2019-10-22 17:58:58'),
(259, '0', 'Logged In', '', '2019-10-26 09:41:47'),
(260, '0', 'Logged In', '', '2019-10-31 14:24:46'),
(261, '0', 'Logged In', '', '2019-10-31 16:14:42'),
(262, '100100', 'Created New User: jeffukus@gmail.com', '', '2019-11-01 17:21:52'),
(263, '0', 'Logged In', '', '2019-11-01 17:22:55'),
(264, '0', 'Logged In', '', '2019-11-02 16:01:05'),
(265, '0', 'Logged In', '', '2019-11-06 10:21:53'),
(266, '0', 'Logged In', '', '2019-11-08 16:07:43'),
(267, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:29:20'),
(268, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:29:20'),
(269, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:29:20'),
(270, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:29:20'),
(271, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:29:20'),
(272, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 15:29:40'),
(273, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:29:41'),
(274, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:29:41'),
(275, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:29:41'),
(276, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:29:41'),
(277, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:29:41'),
(278, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 15:30:19'),
(279, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:30:21'),
(280, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:30:21'),
(281, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:30:21'),
(282, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:30:21'),
(283, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:30:21'),
(284, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 15:32:13'),
(285, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:32:15'),
(286, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:32:15'),
(287, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:32:15'),
(288, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:32:15'),
(289, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:32:15'),
(290, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 15:32:34'),
(291, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:32:35'),
(292, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:32:35'),
(293, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:32:35'),
(294, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:32:35'),
(295, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:32:35'),
(296, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 15:33:20'),
(297, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:33:21'),
(298, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:33:21'),
(299, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:33:21'),
(300, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:33:21'),
(301, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:33:21'),
(302, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:36:57'),
(303, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:36:57'),
(304, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:36:57'),
(305, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:36:57'),
(306, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:36:57'),
(307, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 15:37:02'),
(308, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:37:03'),
(309, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:37:03'),
(310, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:37:03'),
(311, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:37:03'),
(312, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:37:03'),
(313, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 15:37:09'),
(314, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:37:10'),
(315, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:37:10'),
(316, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:37:10'),
(317, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:37:10'),
(318, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:37:10'),
(319, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 15:41:21'),
(320, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:41:23'),
(321, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:41:23'),
(322, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:41:23'),
(323, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:41:23'),
(324, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 15:41:23'),
(325, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 15:41:33'),
(326, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 15:41:52'),
(327, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:41:16'),
(328, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:41:16'),
(329, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:41:16'),
(330, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:41:16'),
(331, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:41:16'),
(332, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 16:41:20'),
(333, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:41:21'),
(334, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:41:21'),
(335, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:41:21'),
(336, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:41:21'),
(337, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:41:21'),
(338, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 16:41:24'),
(339, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:41:25'),
(340, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:41:25'),
(341, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:41:25'),
(342, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:41:25'),
(343, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:41:25'),
(344, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 16:41:41'),
(345, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:41:42'),
(346, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:41:42'),
(347, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:41:42'),
(348, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:41:42'),
(349, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:41:42'),
(350, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:45:29'),
(351, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:45:29'),
(352, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:45:29'),
(353, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:45:29'),
(354, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:45:29'),
(355, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 16:45:33'),
(356, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:45:34'),
(357, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:45:34'),
(358, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:45:34'),
(359, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:45:34'),
(360, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:45:34'),
(361, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 16:47:42'),
(362, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:47:43'),
(363, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:47:43'),
(364, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:47:43'),
(365, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:47:43'),
(366, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:47:43'),
(367, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 16:48:01'),
(368, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:02'),
(369, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:02'),
(370, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:02'),
(371, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:02'),
(372, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:02'),
(373, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 16:48:20'),
(374, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:21'),
(375, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:21'),
(376, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:21'),
(377, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:21'),
(378, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:21'),
(379, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:23'),
(380, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:23'),
(381, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:23'),
(382, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:23'),
(383, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:23'),
(384, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 16:48:25'),
(385, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:26'),
(386, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:26'),
(387, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:26'),
(388, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:26'),
(389, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:26'),
(390, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:29'),
(391, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:29'),
(392, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:29'),
(393, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:29'),
(394, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:29'),
(395, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 16:48:33'),
(396, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:34'),
(397, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:34'),
(398, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:34'),
(399, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:34'),
(400, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:34'),
(401, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:59'),
(402, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:59'),
(403, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:59'),
(404, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:59'),
(405, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:48:59'),
(406, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 16:49:03'),
(407, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 16:49:17'),
(408, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:49:18'),
(409, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:49:18'),
(410, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:49:18'),
(411, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:49:18'),
(412, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 16:49:18'),
(413, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 16:49:32'),
(414, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 17:05:18'),
(415, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 17:05:25'),
(416, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 17:05:34'),
(417, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 17:17:35'),
(418, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 17:17:56'),
(419, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:18:12'),
(420, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:18:12'),
(421, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:18:12'),
(422, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:18:12'),
(423, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:18:12'),
(424, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 17:18:25'),
(425, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:23:48'),
(426, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:23:48'),
(427, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:23:48'),
(428, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:23:48'),
(429, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:23:48'),
(430, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 17:23:59'),
(431, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:24:31'),
(432, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:24:31'),
(433, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:24:31'),
(434, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:24:31'),
(435, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:24:31'),
(436, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 17:25:15'),
(437, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:25:19'),
(438, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:25:19'),
(439, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:25:19'),
(440, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:25:19'),
(441, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:25:19'),
(442, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 17:27:29'),
(443, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'field List\\\'', '2019-11-11 17:30:57'),
(444, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:34:50'),
(445, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:37:10'),
(446, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:37:20'),
(447, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:37:28'),
(448, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 17:37:33'),
(449, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 18:19:17'),
(450, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 18:29:43'),
(451, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 18:29:43'),
(452, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 18:29:43'),
(453, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 18:29:43'),
(454, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 18:29:43'),
(455, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 18:53:40'),
(456, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 18:53:40'),
(457, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 18:53:40'),
(458, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 18:53:40'),
(459, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 18:53:40'),
(460, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 18:54:55'),
(461, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 18:54:55'),
(462, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 18:54:55'),
(463, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 18:54:55'),
(464, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 18:54:55'),
(465, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 18:59:10'),
(466, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 18:59:10'),
(467, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 18:59:10'),
(468, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 18:59:10');
INSERT INTO `yemedugo` (`id`, `who`, `didwhat`, `why`, `wen`) VALUES
(469, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 18:59:10'),
(470, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:01:22'),
(471, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:01:22'),
(472, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:01:22'),
(473, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:01:22'),
(474, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:01:22'),
(475, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:05:18'),
(476, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:05:18'),
(477, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:05:18'),
(478, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:05:18'),
(479, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:05:18'),
(480, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:06:07'),
(481, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:06:07'),
(482, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:06:07'),
(483, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:06:07'),
(484, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:06:07'),
(485, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:07:56'),
(486, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:07:56'),
(487, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:07:56'),
(488, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:07:56'),
(489, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:07:56'),
(490, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:14:29'),
(491, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:14:29'),
(492, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:14:29'),
(493, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:14:29'),
(494, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:14:29'),
(495, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:15:12'),
(496, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:15:12'),
(497, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:15:12'),
(498, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:15:12'),
(499, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 19:15:12'),
(500, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 20:24:10'),
(501, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-11 20:24:16'),
(502, '0', 'Logged In', '', '2019-11-12 16:32:12'),
(503, '0', 'Logged In', '', '2019-11-12 18:44:09'),
(504, '100100', 'Comment Removed By', '', '2019-11-12 18:45:01'),
(505, '100100', 'Comment Removed By', '', '2019-11-12 18:45:08'),
(506, '100100', 'Comment Removed By', '', '2019-11-12 18:45:12'),
(507, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-13 10:15:29'),
(508, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-13 10:33:29'),
(509, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-13 10:53:46'),
(510, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-13 10:55:07'),
(511, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-14 13:53:08'),
(512, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-17 19:27:31'),
(513, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-18 03:11:43'),
(514, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-19 01:32:53'),
(515, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-19 02:43:32'),
(516, '0', 'Logged In', '', '2019-11-23 09:10:25'),
(517, '0', 'Logged In', '', '2019-11-23 09:12:03'),
(518, '0', 'Unable to List Users', 'Reason: Table &#039;gohomeng_web_db.users&#039; Doesn&#039;t Exist', '2019-11-23 09:12:25'),
(519, '0', 'Unable to List Users', 'Reason: Table &#039;gohomeng_web_db.users&#039; Doesn&#039;t Exist', '2019-11-23 09:12:35'),
(520, '0', 'Agents Details Updated Successful- Gohome Nigeria', '', '2019-11-23 09:13:50'),
(521, '0', 'Added a new Property  - 3bedroom With Bq for Rent at Lifecamp Abuja', '', '2019-11-23 09:27:54'),
(522, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-23 09:28:11'),
(523, '0', 'Property Status Updated Successful- 10008', '', '2019-11-23 09:28:44'),
(524, '0', 'Property Status Updated Successful- 10008', '', '2019-11-23 09:31:30'),
(525, '0', 'Logged In', '', '2019-11-25 13:57:52'),
(526, '0', 'Logged In', '', '2019-11-25 14:09:25'),
(527, '0', 'Unable to List Users', 'Reason: Table &#039;gohomeng_web_db.users&#039; Doesn&#039;t Exist', '2019-11-25 14:10:08'),
(528, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-25 14:33:03'),
(529, '0', 'Logged In', '', '2019-11-26 11:34:02'),
(530, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-26 18:54:40'),
(531, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-26 18:54:44'),
(532, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-26 18:58:21'),
(533, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-26 18:58:26'),
(534, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-26 18:58:36'),
(535, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-26 18:58:40'),
(536, '0', 'Logged In', '', '2019-11-27 11:47:02'),
(537, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-27 13:11:57'),
(538, '0', 'Logged In', '', '2019-11-27 13:28:51'),
(539, '0', 'Logged Out', '', '2019-11-27 13:31:12'),
(540, '100100', 'Created New User: henrycrusoe@yahoo.com', '', '2019-11-27 19:24:50'),
(541, '0', 'Logged In', '', '2019-11-27 19:26:23'),
(542, '0', 'Logged In', '', '2019-11-27 19:49:49'),
(543, '0', 'Added a new Property  - An Appealing 4Bedroom Terrace Duplex With BQ For Rent', '', '2019-11-27 19:55:45'),
(544, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-27 19:56:45'),
(545, '0', 'Logged In', '', '2019-11-27 20:14:51'),
(546, '0', 'Property Status Updated Successful- 10009', '', '2019-11-27 20:16:49'),
(547, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-27 20:17:19'),
(548, '0', 'Property Status Updated Successful- 10009', '', '2019-11-27 20:30:42'),
(549, '0', 'Logged In', '', '2019-11-28 08:19:46'),
(550, '0', 'Logged In', '', '2019-11-28 08:25:39'),
(551, '100100', 'Unable to Load Properties', 'Reason: Unknown Column \\\'city\\\' In \\\'where Clause\\\'', '2019-11-28 08:36:30'),
(552, '0', 'Logged In', '', '2019-11-28 09:23:16'),
(553, '0', 'Logged In', '', '2019-11-28 17:18:45'),
(554, '0', 'Logged Out', '', '2019-11-28 17:24:33'),
(555, '0', 'Logged In', '', '2019-11-28 17:24:47'),
(556, '0', 'Logged In', '', '2019-11-28 17:46:19'),
(557, '0', 'Logged In', '', '2019-11-28 17:58:49'),
(558, '0', 'Logged In', '', '2019-11-28 18:52:44'),
(559, '0', 'Logged In', '', '2019-11-28 19:24:40'),
(560, '0', 'Agents Details Updated Successful- Gohome Nigeria', '', '2019-11-28 19:26:23'),
(561, '0', 'Logged In', '', '2019-11-28 19:42:02'),
(562, '0', 'Logged Out', '', '2019-11-28 20:52:13'),
(563, '0', 'Logged In', '', '2019-11-28 20:52:31'),
(564, '0', 'Logged In', '', '2019-11-29 06:07:04'),
(565, '0', 'Logged Out', '', '2019-11-29 08:15:00'),
(566, '0', 'Logged In', '', '2019-11-29 08:16:16'),
(567, '0', 'Logged In', '', '2019-11-29 08:29:53'),
(568, '0', 'Logged In', '', '2019-11-29 08:57:01'),
(569, '0', 'Logged Out', '', '2019-11-29 08:57:14'),
(570, '0', 'Logged In', '', '2019-11-29 09:01:22'),
(571, '0', 'Logged In', '', '2019-11-29 09:42:51'),
(572, '0', 'Logged In', '', '2019-11-29 16:01:33'),
(573, '0', 'Agents Details Updated Successful', '', '2019-11-29 16:17:02'),
(574, '0', 'Agents Details Updated Successful', '', '2019-11-29 16:17:22'),
(575, '0', 'Logged Out', '', '2019-11-29 16:21:30'),
(576, '0', 'Logged In', '', '2019-11-29 16:32:28'),
(577, '0', 'Logged In', '', '2019-11-29 16:39:13'),
(578, '0', 'Logged In', '', '2019-11-29 17:20:34'),
(579, '0', 'Logged Out', '', '2019-11-29 17:21:35'),
(580, '0', 'Logged In', '', '2019-11-29 17:21:44'),
(581, '0', 'Logged Out', '', '2019-11-29 17:21:50'),
(582, '0', 'Logged In', '', '2019-11-30 07:22:42'),
(583, '0', 'Logged In', '', '2019-11-30 07:23:17'),
(584, '0', 'Agents Details Updated Successful', '', '2019-11-30 07:24:01'),
(585, '0', 'Agents Details Updated Successful', '', '2019-11-30 07:24:50'),
(586, '0', 'Agents Details Updated Successful', '', '2019-11-30 07:25:09'),
(587, '0', 'Agents Details Updated Successful', '', '2019-11-30 07:25:54'),
(588, '0', 'Agents Details Updated Successful', '', '2019-11-30 07:26:18'),
(589, '0', 'Logged Out', '', '2019-11-30 07:27:01'),
(590, '0', 'Logged Out', '', '2019-11-30 11:01:31'),
(591, '0', 'Logged In', '', '2019-11-30 19:02:57'),
(592, '0', 'Logged Out', '', '2019-12-02 03:37:23'),
(593, '0', 'Logged In', '', '2019-12-02 03:39:36'),
(594, '100100', 'Unable to Load Properties', 'Reason: Table \\\'gohomeng_web_db.favourites\\\' Doesn\\\'t Exist', '2019-12-02 07:57:17'),
(595, '0', 'Logged In', '', '2019-12-02 09:36:16'),
(596, '0', 'Logged In', '', '2019-12-02 09:36:17'),
(597, '0', 'Logged In', '', '2019-12-02 09:49:21'),
(598, '0', 'Logged Out', '', '2019-12-02 09:52:14'),
(599, '0', 'Logged In', '', '2019-12-02 10:49:47'),
(600, '0', 'Logged In', '', '2019-12-03 08:58:36'),
(601, '0', 'Logged In', '', '2019-12-04 11:28:49'),
(602, '0', 'Logged In', '', '2019-12-05 09:09:37'),
(603, '0', 'Agents Details Updated Successful', '', '2019-12-05 09:11:11'),
(604, '0', 'Logged In', '', '2019-12-05 09:50:27'),
(605, '0', 'Logged In', '', '2019-12-05 18:47:28'),
(606, '0', 'Logged In', '', '2019-12-06 06:09:42'),
(607, '0', 'Logged In', '', '2019-12-06 06:12:25'),
(608, '0', 'Logged In', '', '2019-12-06 06:58:27'),
(609, '0', 'Logged In', '', '2019-12-06 15:01:32'),
(610, '0', 'Logged In', '', '2019-12-06 16:23:11'),
(611, '0', 'Logged Out', '', '2019-12-06 16:56:21'),
(612, '0', 'Logged In', '', '2019-12-06 16:58:30'),
(613, '0', 'Logged In', '', '2019-12-06 18:13:19'),
(614, '100100', 'Created New User: salawudeenjamo@gmail.com', '', '2019-12-06 21:42:58'),
(615, '0', 'Logged In', '', '2019-12-06 21:43:14'),
(616, '0', 'Logged In', '', '2019-12-06 21:53:20'),
(617, '0', 'Logged In', '', '2019-12-06 22:00:57'),
(618, '0', 'Logged In', '', '2019-12-07 18:25:15'),
(619, '0', 'Agents Details Updated Successful', '', '2019-12-07 18:29:45'),
(620, '0', 'Logged Out', '', '2019-12-07 18:30:59'),
(621, '0', 'Logged In', '', '2019-12-07 18:32:39'),
(622, '0', 'Logged Out', '', '2019-12-07 18:37:00'),
(623, '0', 'Logged In', '', '2019-12-08 09:18:25'),
(624, '0', 'Logged In', '', '2019-12-08 09:24:24'),
(625, '0', 'Logged In', '', '2019-12-08 14:07:52'),
(626, '0', 'Posting Failed for - ladjfkl', 'Failed: 10010, 11, Sqt@sqtwebsolutions.com, Ladjfkl, Klasjdfkl, Office, Rent, 5, 5, 5, Yes, 900, 1000000, , Center Cooling,balcony,pet Friendly,fire Alarm,storage,dryer,heating,pool,laundry,sauna,gym,elevator,dish Washer,emergency, Klasklfkl, Etim Ekpo, Akwa Ibom, 90001, 0, 10010-Img_20190388_122658.jpg, 10010-, 10010-, 10010-, 10010-, 10010-, 10010-,10010-, 10010-, 10010-, 10010-, 10010-, 10010-, 10010-, 10010-. Reason: Column Count Doesn\\\'t Match Value Count At Row 1', '2019-12-08 14:09:51'),
(627, '0', 'Logged In', '', '2019-12-08 20:31:51'),
(628, '0', 'Logged In', '', '2019-12-08 20:31:51'),
(629, '0', 'Logged In', '', '2019-12-08 20:32:20'),
(630, '0', 'Logged In', '', '2019-12-08 20:34:39'),
(631, '0', 'Posting Failed for - Test: 2 Bedroom Apartment in Jahi', 'Failed: 10010, 8, Gohome.ng@gmail.com, Test: 2 Bedroom Apartment In Jahi, Teste= Test, House, Sale, 2, 2, 2, No, 23, 200000, , ,,,,,,heating,,,,,,,emergency, Rumuagholu, Central Business District, Abuja, 23401, 0, 10010-Gohome Chrismas.jpg, 10010-, 10010-, 10010-Gohome Simple Xmas.jpg, 10010-, 10010-, 10010-,10010-, 10010-, 10010-, 10010-, 10010-, 10010-, 10010-, 10010-. Reason: Column Count Doesn\\\'t Match Value Count At Row 1', '2019-12-08 20:43:34'),
(632, '0', 'Logged Out', '', '2019-12-08 21:17:21'),
(633, '0', 'Logged In', '', '2019-12-08 21:18:07'),
(634, '0', 'Logged In', '', '2019-12-08 21:31:34'),
(635, '0', 'Logged In', '', '2019-12-09 09:56:08'),
(636, '0', 'Logged In', '', '2019-12-09 10:49:43'),
(637, '0', 'Posting Failed for - jkjdjkafj', 'Failed: 10010, 11, Sqt@sqtwebsolutions.com, Jkjdjkafj, Askdfklllfk, House, Sale, 3, 4, 4, No, 44444, 44444444444, , Air Conditioner,balcony,,fire Alarm,storage,,,pool,,,gym,elevator,,emergency, Abuja, Jahi, Abuja, 90001, 0, 10010-Mt-0284-Bg-Top-2.jpg, 10010-, 10010-, 10010-, 10010-, 10010-, 10010-,10010-, 10010-, 10010-, 10010-, 10010-, 10010-, 10010-, 10010-. Reason: Column Count Doesn\\\'t Match Value Count At Row 1', '2019-12-09 10:51:07'),
(638, '0', 'Posting Failed for - jkjdjkafj', 'Failed: 10010, 11, Sqt@sqtwebsolutions.com, Jkjdjkafj, Askdfklllfk, House, Sale, 3, 4, 4, No, 44444, 44444444444, , Air Conditioner,balcony,,fire Alarm,storage,,,pool,,,gym,elevator,,emergency, Abuja, Jahi, Abuja, 90001, 0, 10010-Mt-0284-Bg-Top-2.jpg, 10010-, 10010-, 10010-, 10010-, 10010-, 10010-,10010-, 10010-, 10010-, 10010-, 10010-, 10010-, 10010-, 10010-. Reason: Column Count Doesn\\\'t Match Value Count At Row 1', '2019-12-09 10:58:11'),
(639, '0', 'Posting Failed for - klfkldksklkl', 'Failed: 10010, 11, Sqt@sqtwebsolutions.com, Klfkldksklkl, Kldklskldklk, House, Sale, 8, 8, 8, Yes, 72727, 77777778888, , Air Conditioner,balcony,pet Friendly,fire Alarm,storage,,,pool,,,gym,elevator,,emergency, Abuja, Dei-Dei, Abuja, 90001, 0, 10010-9.jpg, 10010-, 10010-, 10010-, 10010-, 10010-, 10010-,10010-, 10010-, 10010-, 10010-, 10010-, 10010-, 10010-, 10010-. Reason: Column Count Doesn\\\'t Match Value Count At Row 1', '2019-12-09 11:19:23'),
(640, '0', 'Logged In', '', '2019-12-09 12:22:04'),
(641, '0', 'Logged In', '', '2019-12-09 14:21:37'),
(642, '0', 'Logged In', '', '2019-12-09 18:25:09'),
(643, '0', 'Uploaded File thing-to-know-when-renting-a-house-20018.jpg', '', '2019-12-09 18:33:38'),
(644, '0', 'Uploaded File things-to-know-when-renting-a-house-2-20050.jpg', '', '2019-12-09 18:34:10'),
(645, '0', 'Logged In', '', '2019-12-09 18:36:29'),
(646, '0', 'Added a new Post  - 5 Key Factors you should Consider before Renting a House', '', '2019-12-09 18:40:27'),
(647, '0', 'Post Updated Successful- 5 Key Factors you should Consider before Renting a House', '', '2019-12-09 18:40:56'),
(648, '0', 'Post Updated Successful- 5 Key Factors you should Consider before Renting a House', '', '2019-12-09 18:41:48'),
(649, '0', 'Post Updated Successful- 5 Key Factors you should Consider before Renting a House', '', '2019-12-09 18:42:58'),
(650, '0', 'Post Updated Successful- 5 Key Factors you should Consider before Renting a House', '', '2019-12-09 18:54:25'),
(651, '0', 'Post Updated Successful- 5 Key Factors you should Consider before Renting a House', '', '2019-12-09 19:04:34'),
(652, '0', 'Logged In', '', '2019-12-10 09:27:26'),
(653, '0', 'A New Property Has Been Added.', '', '2019-12-10 09:30:18'),
(654, '0', 'Logged In', '', '2019-12-10 11:40:29'),
(655, '0', 'Logged In', '', '2019-12-10 11:43:59'),
(656, '0', 'Logged In', '', '2019-12-10 12:13:06'),
(657, '0', 'A New Property Has Been Added.', '', '2019-12-10 12:17:22'),
(658, '0', 'Logged In', '', '2019-12-10 17:49:33'),
(659, '0', 'Logged In', '', '2019-12-10 17:55:42'),
(660, '0', 'A New Property Has Been Added.', '', '2019-12-10 17:58:21'),
(661, '0', 'Logged In', '', '2019-12-10 18:34:31'),
(662, '0', 'Logged In', '', '2019-12-10 19:01:10'),
(663, '0', 'Logged In', '', '2019-12-10 19:34:02'),
(664, '0', 'Logged In', '', '2019-12-10 20:55:57'),
(665, '0', 'Logged In', '', '2019-12-10 23:06:25'),
(666, '0', 'Logged In', '', '2019-12-11 08:30:05'),
(667, '0', 'Logged In', '', '2019-12-11 13:51:31'),
(668, '0', 'Logged In', '', '2019-12-11 13:52:22'),
(669, '0', 'Agents Password Updated Successful', '', '2019-12-11 14:06:23'),
(670, '0', 'Logged Out', '', '2019-12-11 14:24:06'),
(671, '0', 'Logged In', '', '2019-12-11 19:16:06'),
(672, '0', 'Logged In', '', '2019-12-12 06:29:06'),
(673, '0', 'Logged In', '', '2019-12-12 11:24:59'),
(674, '0', 'Logged In', '', '2019-12-12 11:25:00'),
(675, '0', 'Logged In', '', '2019-12-12 11:25:01'),
(676, '0', 'Logged In', '', '2019-12-12 21:58:55'),
(677, '0', 'Logged In', '', '2019-12-15 19:20:35'),
(678, '0', 'Logged In', '', '2019-12-17 08:10:09'),
(679, '0', 'Logged In', '', '2019-12-19 14:43:14'),
(680, '0', 'Logged In', '', '2019-12-23 11:48:07'),
(681, '0', 'Logged In', '', '2019-12-23 19:03:00'),
(682, '0', 'Logged In', '', '2019-12-23 22:34:05'),
(683, '0', 'Logged In', '', '2019-12-24 09:02:57'),
(684, '100100', 'Created New User: cvsmarketingteam@gmail.com', '', '2019-12-25 07:06:53'),
(685, '0', 'Logged In', '', '2019-12-25 07:13:51'),
(686, '0', 'Agents Details Updated Successful', '', '2019-12-25 07:15:31'),
(687, '0', 'Agents Details Updated Successful', '', '2019-12-25 07:16:02'),
(688, '0', 'A New Property Has Been Added.', '', '2019-12-25 07:23:58'),
(689, '0', 'Logged In', '', '2019-12-25 18:42:45'),
(690, '0', 'Property Status Updated Successful- 10012', '', '2019-12-25 18:44:47'),
(691, '0', 'Property Status Updated Successful- 10012', '', '2019-12-25 18:44:54'),
(692, '0', 'Logged In', '', '2019-12-26 09:30:04'),
(693, '0', 'Logged In', '', '2019-12-27 12:33:19'),
(694, '0', 'Logged In', '', '2019-12-27 15:12:24'),
(695, '0', 'Logged In', '', '2019-12-28 14:48:40'),
(696, '0', 'Logged In', '', '2019-12-28 21:46:35'),
(697, '0', 'Logged In', '', '2019-12-31 08:57:30'),
(698, '0', 'Logged In', '', '2020-01-03 11:01:17'),
(699, '0', 'Logged In', '', '2020-01-03 13:39:32'),
(700, '0', 'Logged In', '', '2020-01-03 20:59:36'),
(701, '100100', 'Created New User: tynodesignz@gmail.com', '', '2020-01-04 06:20:38'),
(702, '0', 'Logged In', '', '2020-01-04 06:21:01'),
(703, '0', 'Logged In', '', '2020-01-05 06:18:14'),
(704, '0', 'Logged In', '', '2020-01-07 04:40:47'),
(705, '0', 'Logged In', '', '2020-01-08 19:48:04'),
(706, '0', 'Logged In', '', '2020-01-09 14:53:44'),
(707, '0', 'New comment posted  - Chima', '', '2020-01-10 13:12:11'),
(708, '0', 'Logged In', '', '2020-01-12 22:57:56'),
(709, '0', 'Logged In', '', '2020-01-14 05:45:36'),
(710, '0', 'Logged In', '', '2020-01-15 10:55:23'),
(711, '0', 'Logged In', '', '2020-01-15 12:09:59'),
(712, '0', 'Logged In', '', '2020-01-15 12:10:31'),
(713, '0', 'Message Email Sent  - h', '', '2020-01-15 12:48:26'),
(714, '0', 'Logged Out', '', '2020-01-15 12:59:05'),
(715, '0', 'Logged In', '', '2020-01-15 12:59:34'),
(716, '0', 'Post Updated Successful- 5 Key Factors you should Consider before Renting a House', '', '2020-01-15 13:00:58'),
(717, '0', 'Logged In', '', '2020-01-15 13:36:13'),
(718, '0', 'Logged In', '', '2020-01-15 14:59:16'),
(719, '0', 'Logged In', '', '2020-01-16 11:33:36'),
(720, '0', 'Logged In', '', '2020-01-16 23:18:53'),
(721, '0', 'Logged In', '', '2020-01-17 08:23:28'),
(722, '0', 'Logged Out', '', '2020-01-17 09:12:32'),
(723, '0', 'Logged In', '', '2020-01-17 09:13:03'),
(724, '0', 'Logged In', '', '2020-01-17 09:29:04'),
(725, '0', 'Logged In', '', '2020-01-17 09:29:13'),
(726, '0', 'Logged Out', '', '2020-01-17 09:29:18'),
(727, '0', 'Logged In', '', '2020-01-17 09:29:22'),
(728, '0', 'Logged Out', '', '2020-01-17 09:29:29'),
(729, '0', 'Logged In', '', '2020-01-17 09:32:00'),
(730, '0', 'Logged Out', '', '2020-01-17 09:32:06'),
(731, '0', 'Logged In', '', '2020-01-17 09:32:11'),
(732, '0', 'Logged In', '', '2020-01-17 09:33:51'),
(733, '0', 'Logged In', '', '2020-01-17 16:23:59'),
(734, '0', 'Logged In', '', '2020-01-18 12:03:36'),
(735, '100100', 'Created New User: mark@live.com', '', '2020-01-18 13:53:30'),
(736, '0', 'Logged In', '', '2020-01-18 13:54:01'),
(737, '0', 'Logged In', '', '2020-01-19 12:00:11'),
(738, '0', 'Logged In', '', '2020-01-20 05:42:23'),
(739, '0', 'Logged In', '', '2020-01-21 12:54:36'),
(740, '0', 'Logged In', '', '2020-01-22 05:38:08'),
(741, '0', 'Logged In', '', '2020-01-23 09:01:03'),
(742, '0', 'Logged In', '', '2020-01-26 11:15:14'),
(743, '0', 'Logged In', '', '2020-01-27 10:39:19'),
(744, '0', 'Logged In', '', '2020-01-27 14:24:33'),
(745, '0', 'Logged In', '', '2020-01-27 18:44:58'),
(746, '0', 'Logged In', '', '2020-01-28 06:04:37'),
(747, '0', 'Logged In', '', '2020-01-28 09:36:15'),
(748, '100100', 'Created New User: jane@doe.com', '', '2020-01-28 10:33:58'),
(749, '100100', 'Created New User: yomexng@yahoo.com', '', '2020-01-28 17:34:07'),
(750, '0', 'Logged In', '', '2020-01-28 17:35:42'),
(751, '100100', 'Created New User: obiezeiloabachie@gmail.com', '', '2020-01-28 18:59:37'),
(752, '0', 'Logged In', '', '2020-01-28 19:15:21'),
(753, '0', 'Logged In', '', '2020-01-28 19:30:18'),
(754, '0', 'Logged In', '', '2020-01-28 20:03:47'),
(755, '0', 'Logged In', '', '2020-01-28 20:24:02'),
(756, '0', 'Logged In', '', '2020-01-28 20:25:46'),
(757, '0', 'Logged In', '', '2020-01-29 00:33:27'),
(758, '0', 'Logged In', '', '2020-01-29 05:36:32'),
(759, '0', 'Logged In', '', '2020-01-29 06:16:05'),
(760, '0', 'Logged In', '', '2020-01-29 06:16:26'),
(761, '0', 'Logged In', '', '2020-01-29 07:49:06'),
(762, '0', 'Logged In', '', '2020-01-29 09:23:30'),
(763, '0', 'Logged In', '', '2020-01-29 11:25:55'),
(764, '0', 'Logged In', '', '2020-01-29 14:54:41'),
(765, '100100', 'Created New User: aladinho99@gmail.com', '', '2020-01-29 15:02:35'),
(766, '0', 'Logged In', '', '2020-01-29 15:02:52'),
(767, '0', 'A New Property Has Been Added.', '', '2020-01-29 15:06:49'),
(768, '0', 'A New Property Has Been Added.', '', '2020-01-29 15:08:10'),
(769, '0', 'Logged In', '', '2020-01-29 18:28:41'),
(770, '0', 'Property Status Updated Successful- 10014', '', '2020-01-29 18:29:09'),
(771, '0', 'Logged In', '', '2020-01-29 18:29:34'),
(772, '0', 'Logged In', '', '2020-01-29 18:29:53'),
(773, '0', 'Logged In', '', '2020-01-29 18:45:42'),
(774, '0', 'Logged In', '', '2020-01-29 18:45:57'),
(775, '0', 'Logged In', '', '2020-01-29 20:00:48'),
(776, '0', 'Logged In', '', '2020-01-30 00:49:58'),
(777, '0', 'Logged In', '', '2020-01-30 05:11:38'),
(778, '100100', 'Created New User: mikesbecca79@gmail.com', '', '2020-01-30 07:44:17'),
(779, '0', 'Logged In', '', '2020-01-30 08:11:52'),
(780, '0', 'Property Status Updated Successful- 10013', '', '2020-01-30 08:12:38'),
(781, '0', 'Logged In', '', '2020-01-30 08:12:57'),
(782, '0', 'Logged In', '', '2020-01-30 08:13:14'),
(783, '100100', 'Created New User: missval576@gmail.com', '', '2020-01-30 08:35:06'),
(784, '0', 'Logged In', '', '2020-01-30 08:36:06'),
(785, '100100', 'Created New User: infocovenanthomes@gmail.com', '', '2020-01-30 08:59:41'),
(786, '0', 'Logged In', '', '2020-01-30 09:00:28'),
(787, '0', 'Logged In', '', '2020-01-30 09:01:40'),
(788, '100100', 'Created New User: Shortstaydeals@gmail.com', '', '2020-01-30 09:05:35'),
(789, '0', 'A New Property Has Been Added.', '', '2020-01-30 09:10:37'),
(790, '0', 'Logged Out', '', '2020-01-30 09:17:05'),
(791, '0', 'Logged In', '', '2020-01-30 09:48:41'),
(792, '0', 'Property Status Updated Successful- 10015', '', '2020-01-30 09:49:14'),
(793, '0', 'Logged In', '', '2020-01-30 09:54:58'),
(794, '0', 'Logged In', '', '2020-01-30 09:56:49'),
(795, '0', 'Logged In', '', '2020-01-30 10:06:52'),
(796, '0', 'Logged In', '', '2020-01-30 10:11:00'),
(797, '0', 'A New Property Has Been Added.', '', '2020-01-30 10:11:32'),
(798, '0', 'A New Property Has Been Added.', '', '2020-01-30 10:16:07'),
(799, '0', 'Logged In', '', '2020-01-30 11:07:50'),
(800, '0', 'Logged In', '', '2020-01-30 11:33:30'),
(801, '100100', 'Created New User: dafegeorge19@gmail.com', '', '2020-01-30 12:01:38'),
(802, '100100', 'Created New User: support@sqtwebsolutions.com', '', '2020-01-30 13:13:18'),
(803, '0', 'Logged In', '', '2020-01-30 13:13:31'),
(804, '0', 'Logged In', '', '2020-01-30 13:18:17'),
(805, '0', 'Logged In', '', '2020-01-30 13:24:55'),
(806, '0', 'Logged Out', '', '2020-01-30 13:29:29'),
(807, '0', 'Logged In', '', '2020-01-30 13:30:42'),
(808, '0', 'A New Property Has Been Added.', '', '2020-01-30 13:34:49'),
(809, '0', 'Logged In', '', '2020-01-30 13:37:41'),
(810, '0', 'Logged In', '', '2020-01-30 13:39:27'),
(811, '0', 'A New Property Has Been Added.', '', '2020-01-30 13:42:59'),
(812, '0', 'A New Property Has Been Added.', '', '2020-01-30 13:43:06'),
(813, '0', 'A New Property Has Been Added.', '', '2020-01-30 13:46:18'),
(814, '0', 'A New Property Has Been Added.', '', '2020-01-30 13:48:46'),
(815, '0', 'Logged Out', '', '2020-01-30 13:50:30'),
(816, '0', 'Logged In', '', '2020-01-30 13:52:34'),
(817, '0', 'Logged Out', '', '2020-01-30 13:53:20'),
(818, '0', 'Agents Details Updated Successful', '', '2020-01-30 14:00:29'),
(819, '0', 'Logged In', '', '2020-01-30 14:00:56'),
(820, '0', 'A New Property Has Been Added.', '', '2020-01-30 14:01:57'),
(821, '0', 'Logged In', '', '2020-01-30 14:04:04'),
(822, '0', 'A New Property Has Been Added.', '', '2020-01-30 14:06:40'),
(823, '0', 'Logged Out', '', '2020-01-30 14:07:05'),
(824, '0', 'Logged In', '', '2020-01-30 14:39:08'),
(825, '0', 'Logged In', '', '2020-01-30 14:59:52'),
(826, '0', 'Logged In', '', '2020-01-30 16:06:53'),
(827, '100100', 'Created New User: noreply@gohome.ng', '', '2020-01-30 16:07:55'),
(828, '0', 'Logged In', '', '2020-01-30 19:14:34'),
(829, '0', 'Logged In', '', '2020-01-30 21:17:20'),
(830, '0', 'Logged In', '', '2020-01-31 05:32:22'),
(831, '0', 'Logged In', '', '2020-01-31 06:06:23'),
(832, '0', 'Logged In', '', '2020-01-31 08:09:58'),
(833, '0', 'Logged In', '', '2020-01-31 09:30:57'),
(834, '0', 'Logged Out', '', '2020-01-31 10:27:12'),
(835, '0', 'Logged In', '', '2020-01-31 10:27:23'),
(836, '0', 'Logged In', '', '2020-01-31 11:17:15'),
(837, '0', 'Logged In', '', '2020-01-31 13:17:44'),
(838, '100100', 'Created New User: jemilohun4real@gmail.com', '', '2020-01-31 14:07:17'),
(839, '0', 'Logged In', '', '2020-01-31 14:07:50'),
(840, '0', 'Agents Details Updated Successful', '', '2020-01-31 14:08:29'),
(841, '0', 'Logged In', '', '2020-01-31 14:12:15'),
(842, '0', 'A New Property Has Been Added.', '', '2020-01-31 14:16:41'),
(843, '0', 'A New Property Has Been Added.', '', '2020-01-31 14:18:02'),
(844, '100100', 'Created New User: johnsonpresh@gmail.com', '', '2020-01-31 14:40:52'),
(845, '0', 'Logged In', '', '2020-01-31 14:41:40'),
(846, '0', 'Agents Details Updated Successful', '', '2020-01-31 14:42:26'),
(847, '0', 'A New Property Has Been Added.', '', '2020-01-31 14:47:59'),
(848, '100100', 'Created New User: olusholaomoluabi@yahoo.com', '', '2020-01-31 14:50:18'),
(849, '0', 'A New Property Has Been Added.', '', '2020-01-31 14:51:00'),
(850, '0', 'Logged In', '', '2020-01-31 14:51:22'),
(851, '0', 'A New Property Has Been Added.', '', '2020-01-31 15:00:18'),
(852, '0', 'Logged In', '', '2020-01-31 15:11:55'),
(853, '0', 'Logged In', '', '2020-01-31 15:12:59'),
(854, '0', 'Property Status Updated Successful- 10020', '', '2020-01-31 15:13:16'),
(855, '0', 'Message Email Sent  - Adedeji ademola tunde', '', '2020-01-31 15:14:32'),
(856, '0', 'Property Status Updated Successful- 10017', '', '2020-01-31 15:18:22'),
(857, '0', 'Logged Out', '', '2020-01-31 15:46:18'),
(858, '0', 'Logged In', '', '2020-01-31 15:46:34'),
(859, '0', 'Logged In', '', '2020-01-31 16:14:55'),
(860, '0', 'Logged In', '', '2020-01-31 16:15:09'),
(861, '0', 'Logged In', '', '2020-01-31 16:40:23'),
(862, '0', 'Logged In', '', '2020-01-31 19:04:17'),
(863, '0', 'Logged In', '', '2020-01-31 22:41:53'),
(864, '0', 'Message Email Sent  -', '', '2020-02-01 05:08:14'),
(865, '0', 'Message Email Sent  - Abeey command', '', '2020-02-01 05:20:21'),
(866, '0', 'Logged In', '', '2020-02-01 06:03:06'),
(867, '0', 'Message Email Sent  - Chima Woke', '', '2020-02-01 07:25:04'),
(868, '0', 'Logged In', '', '2020-02-01 07:36:51'),
(869, '0', 'Logged In', '', '2020-02-01 07:52:34'),
(870, '0', 'Logged Out', '', '2020-02-01 08:01:38'),
(871, '0', 'Logged Out', '', '2020-02-01 08:20:29'),
(872, '0', 'Logged In', '', '2020-02-01 08:20:43'),
(873, '0', 'Logged In', '', '2020-02-01 12:40:14'),
(874, '0', 'Logged In', '', '2020-02-01 15:25:04'),
(875, '0', 'Logged In', '', '2020-02-01 17:22:02'),
(876, '0', 'Logged In', '', '2020-02-01 18:57:30'),
(877, '0', 'Logged In', '', '2020-02-02 05:59:18'),
(878, '0', 'Logged Out', '', '2020-02-02 06:44:07'),
(879, '0', 'Logged In', '', '2020-02-02 06:44:15'),
(880, '0', 'Logged In', '', '2020-02-02 07:38:08'),
(881, '0', 'Logged In', '', '2020-02-02 09:45:34'),
(882, '0', 'Logged In', '', '2020-02-02 12:56:37'),
(883, '0', 'Logged In', '', '2020-02-02 15:34:27'),
(884, '0', 'Logged In', '', '2020-02-02 16:07:10'),
(885, '0', 'Logged In', '', '2020-02-02 17:22:43'),
(886, '0', 'Logged In', '', '2020-02-03 04:48:20'),
(887, '0', 'Logged In', '', '2020-02-03 10:35:32'),
(888, '0', 'Logged In', '', '2020-02-03 11:55:31'),
(889, '0', 'Logged In', '', '2020-02-03 15:39:21'),
(890, '0', 'Logged In', '', '2020-02-03 16:54:21'),
(891, '0', 'Logged In', '', '2020-02-03 18:53:34'),
(892, '0', 'Logged Out', '', '2020-02-03 19:03:23'),
(893, '100100', 'Created New User: optimalskyrealty@gmail.com', '', '2020-02-03 19:06:20'),
(894, '0', 'Logged Out', '', '2020-02-03 19:06:39'),
(895, '0', 'Logged In', '', '2020-02-03 19:06:55'),
(896, '0', 'Agents Details Updated Successful', '', '2020-02-03 19:08:49'),
(897, '100100', 'Created New User: achongobi@yhaoo.com', '', '2020-02-03 20:05:54'),
(898, '0', 'Logged In', '', '2020-02-04 06:48:09'),
(899, '0', 'Logged In', '', '2020-02-04 12:28:30'),
(900, '0', 'Logged In', '', '2020-02-04 14:01:27'),
(901, '0', 'Logged In', '', '2020-02-04 14:45:47'),
(902, '0', 'Logged In', '', '2020-02-04 15:43:08'),
(903, '0', 'Message Email Sent  - KANU IKECHUKWU', '', '2020-02-04 17:18:01'),
(904, '0', 'Logged In', '', '2020-02-04 18:07:55'),
(905, '0', 'Logged In', '', '2020-02-04 18:13:08'),
(906, '0', 'Logged In', '', '2020-02-04 18:16:16'),
(907, '0', 'Logged In', '', '2020-02-05 03:08:34'),
(908, '0', 'Logged In', '', '2020-02-05 06:41:18'),
(909, '0', 'Logged In', '', '2020-02-05 08:03:29'),
(910, '100100', 'Created New User: sunpetglobalent@yahoo.com', '', '2020-02-05 08:03:57'),
(911, '0', 'Logged In', '', '2020-02-05 08:26:51'),
(912, '0', 'Logged In', '', '2020-02-05 09:55:15'),
(913, '0', 'Logged Out', '', '2020-02-05 10:51:12'),
(914, '0', 'Logged In', '', '2020-02-05 10:51:26'),
(915, '0', 'Logged In', '', '2020-02-05 12:48:07'),
(916, '0', 'Logged In', '', '2020-02-05 13:15:43'),
(917, '0', 'A New Property Has Been Added.', '', '2020-02-05 13:16:45'),
(918, '0', 'Logged In', '', '2020-02-05 13:32:21'),
(919, '0', 'Logged In', '', '2020-02-05 13:59:46'),
(920, '0', 'Logged In', '', '2020-02-05 15:27:41'),
(921, '0', 'Logged In', '', '2020-02-05 18:01:33'),
(922, '0', 'Logged In', '', '2020-02-06 06:28:45'),
(923, '100100', 'Created New User: adesanyaolugbenga67@gmail.com', '', '2020-02-06 07:03:00'),
(924, '0', 'Logged In', '', '2020-02-06 07:04:07'),
(925, '0', 'Logged In', '', '2020-02-06 13:01:43'),
(926, '0', 'Logged In', '', '2020-02-06 13:54:46'),
(927, '0', 'Logged In', '', '2020-02-06 15:22:04'),
(928, '0', 'Logged In', '', '2020-02-06 19:33:33'),
(929, '0', 'Logged In', '', '2020-02-06 20:17:01'),
(930, '0', 'Logged In', '', '2020-02-07 06:24:47'),
(931, '0', 'Logged In', '', '2020-02-07 08:51:44'),
(932, '0', 'Logged In', '', '2020-02-07 13:56:12'),
(933, '0', 'Logged In', '', '2020-02-07 14:57:41'),
(934, '0', 'Logged In', '', '2020-02-08 05:49:07'),
(935, '0', 'Logged In', '', '2020-02-09 04:14:39'),
(936, '0', 'Logged In', '', '2020-02-09 09:50:14'),
(937, '0', 'Logged In', '', '2020-02-09 15:44:04'),
(938, '0', 'Logged In', '', '2020-02-10 03:07:10'),
(939, '0', 'Logged In', '', '2020-02-10 10:02:08'),
(940, '100100', 'Created New User: paulwhiteblogs@gmail.com', '', '2020-02-10 13:08:16'),
(941, '0', 'Logged In', '', '2020-02-10 13:10:16'),
(942, '0', 'Agents Password Updated Successful', '', '2020-02-10 13:11:18'),
(943, '0', 'Logged Out', '', '2020-02-10 13:11:27'),
(944, '0', 'Logged In', '', '2020-02-10 14:13:08'),
(945, '0', 'Logged Out', '', '2020-02-10 14:13:11'),
(946, '0', 'Logged In', '', '2020-02-10 14:17:17'),
(947, '0', 'Logged Out', '', '2020-02-10 14:22:36'),
(948, '0', 'Logged In', '', '2020-02-10 14:38:42'),
(949, '0', 'Logged Out', '', '2020-02-10 14:38:49'),
(950, '0', 'Logged In', '', '2020-02-10 14:40:11'),
(951, '0', 'Logged Out', '', '2020-02-10 14:40:14'),
(952, '0', 'Logged In', '', '2020-02-10 14:40:54'),
(953, '0', 'Logged In', '', '2020-02-10 14:41:11'),
(954, '0', 'Logged Out', '', '2020-02-10 14:41:15'),
(955, '0', 'Logged In', '', '2020-02-10 14:42:00'),
(956, '0', 'Logged Out', '', '2020-02-10 14:42:04'),
(957, '0', 'Logged In', '', '2020-02-10 14:43:36'),
(958, '0', 'Logged Out', '', '2020-02-10 14:43:41'),
(959, '100100', 'Created New User: paulwhiteblogs@gmail.com', '', '2020-02-10 14:54:08'),
(960, '100100', 'Created New User: paulwhiteblogs@gmail.com', '', '2020-02-10 14:57:37'),
(961, '100100', 'Created New User: paulwhiteblogs@gmail.com', '', '2020-02-10 14:59:01'),
(962, '100100', 'Created New User: paulwhiteblogs@gmail.com', '', '2020-02-10 15:00:14'),
(963, '100100', 'Created New User: sherikokong@gmail.com', '', '2020-02-10 15:16:04'),
(964, '100100', 'Created New User: sherikokong@gmail.com', '', '2020-02-10 15:18:23'),
(965, '100100', 'Unable to Create New User: Column count doesn\\\'t match value count at row 1', '', '2020-02-10 15:19:22'),
(966, '100100', 'Unable to Create New User: Column count doesn\\\'t match value count at row 1', '', '2020-02-10 15:28:20'),
(967, '100100', 'Unable to Create New User: Column count doesn\\\'t match value count at row 1', '', '2020-02-10 15:30:11'),
(968, '100100', 'Created New User: sherikokong@gmail.com', '', '2020-02-10 15:31:28'),
(969, '100100', 'Unable to Create New User: Column count doesn\\\'t match value count at row 1', '', '2020-02-10 15:35:06'),
(970, '100100', 'Created New User: sherikokong@gmail.com', '', '2020-02-10 15:43:38'),
(971, '100100', 'Created New User: sherikokong@gmail.com', '', '2020-02-10 15:45:37'),
(972, '100100', 'Created New User: sherikokong@gmail.com', '', '2020-02-10 15:50:17'),
(973, '100100', 'Created New User: paulwhiteblogs@gmail.com', '', '2020-02-10 17:41:55'),
(974, '100100', 'Created New User: webhicng@gmail.com', '', '2020-02-10 17:45:06'),
(975, '0', 'Logged In', '', '2020-02-10 17:53:07'),
(976, '0', 'A New Property Has Been Added.', '', '2020-02-10 18:37:00'),
(977, '0', 'A New Property Has Been Added.', '', '2020-02-10 18:42:14'),
(978, '0', 'Logged In', '', '2020-02-10 21:59:15'),
(979, '0', 'A New Property Has Been Added.', '', '2020-02-10 22:00:08'),
(980, '0', 'Logged In', '', '2020-02-11 06:04:45'),
(981, '0', 'Logged In', '', '2020-02-11 06:29:24'),
(982, '0', 'Logged In', '', '2020-02-11 08:00:27'),
(983, '0', 'A New Property Has Been Added.', '', '2020-02-11 08:01:49'),
(984, '0', 'Logged In', '', '2020-02-11 08:45:26'),
(985, '0', 'Property Status Updated Successful- 10021', '', '2020-02-11 09:12:43'),
(986, '0', 'Property Status Updated Successful- 10021', '', '2020-02-11 09:12:54'),
(987, '0', 'Property Status Updated Successful- 10021', '', '2020-02-11 10:02:20'),
(988, '0', 'Property Status Updated Successful- 10021', '', '2020-02-11 10:02:26'),
(989, '0', 'Property Status Updated Successful- 10021', '', '2020-02-11 10:02:59'),
(990, '0', 'Property Status Updated Successful- 10021', '', '2020-02-11 10:30:06'),
(991, '0', 'Property Status Updated Successful- 10021', '', '2020-02-11 10:32:28'),
(992, '0', 'Property Status Updated Successful- 10021', '', '2020-02-11 10:35:37'),
(993, '0', 'Property Status Updated Successful- 10021', '', '2020-02-11 10:35:48'),
(994, '0', 'Property Status Updated Successful- 10021', '', '2020-02-11 10:35:56'),
(995, '0', 'Property Status Updated Successful- 10021', '', '2020-02-11 10:38:35'),
(996, '0', 'Property Status Updated Successful- 10021', '', '2020-02-11 10:44:45'),
(997, '0', 'Property Status Updated Successful- 10021', '', '2020-02-11 10:44:52'),
(998, '0', 'Logged In', '', '2020-02-11 13:43:58'),
(999, '0', 'Logged In', '', '2020-02-11 21:03:03'),
(1000, '0', 'Logged In', '', '2020-02-11 21:13:57'),
(1001, '0', 'A New Property Has Been Added.', '', '2020-02-11 21:22:29'),
(1002, '0', 'Logged In', '', '2020-02-12 02:50:32'),
(1003, '0', 'Logged In', '', '2020-02-12 07:45:48'),
(1004, '0', 'Property Status Updated Successful- 10022', '', '2020-02-12 07:46:07'),
(1005, '0', 'Logged In', '', '2020-02-12 08:32:49'),
(1006, '0', 'Logged In', '', '2020-02-12 09:16:43'),
(1007, '0', 'A New Property Has Been Added.', '', '2020-02-12 09:17:55'),
(1008, '0', 'Logged In', '', '2020-02-12 09:19:13'),
(1009, '0', 'Logged In', '', '2020-02-12 09:20:53'),
(1010, '0', 'Property Status Updated Successful- 10023', '', '2020-02-12 09:23:56'),
(1011, '0', 'A New Property Has Been Added.', '', '2020-02-12 09:24:45'),
(1012, '0', 'Property Status Updated Successful- 10024', '', '2020-02-12 09:25:20'),
(1013, '0', 'A New Property Has Been Added.', '', '2020-02-12 10:17:42'),
(1014, '0', 'A New Property Has Been Added.', '', '2020-02-12 10:22:04'),
(1015, '0', 'A New Property Has Been Added.', '', '2020-02-12 10:24:13'),
(1016, '0', 'Logged Out', '', '2020-02-12 10:24:35'),
(1017, '0', 'Logged In', '', '2020-02-12 10:24:44'),
(1018, '0', 'Logged Out', '', '2020-02-12 12:21:00'),
(1019, '0', 'Logged In', '', '2020-02-13 05:49:21'),
(1020, '0', 'Logged In', '', '2020-02-13 07:24:44'),
(1021, '0', 'A New Property Has Been Added.', '', '2020-02-13 07:26:08'),
(1022, '0', 'Logged In', '', '2020-02-13 07:29:18'),
(1023, '0', 'Property Status Updated Successful- 10025', '', '2020-02-13 07:29:43'),
(1024, '0', 'Property Status Updated Successful- 10025', '', '2020-02-13 07:29:50'),
(1025, '0', 'Logged Out', '', '2020-02-13 07:32:06'),
(1026, '100100', 'Created New User: privacy@gohome.ng', '', '2020-02-13 11:30:09'),
(1027, '0', 'Logged In', '', '2020-02-13 11:33:13'),
(1028, '0', 'Logged Out', '', '2020-02-13 11:33:44'),
(1029, '0', 'Logged In', '', '2020-02-13 11:34:44'),
(1030, '0', 'A New Property Has Been Added.', '', '2020-02-13 11:35:28'),
(1031, '0', 'Logged In', '', '2020-02-13 11:36:04'),
(1032, '0', 'Property Status Updated Successful- 10023', '', '2020-02-13 11:36:29'),
(1033, '100100', 'Created New User: whogohosttest@gmail.com', '', '2020-02-13 17:07:39'),
(1034, '0', 'Logged In', '', '2020-02-14 05:09:36'),
(1035, '0', 'Logged In', '', '2020-02-14 08:07:31'),
(1036, '0', 'Logged In', '', '2020-02-14 08:08:53'),
(1037, '0', 'A New Property Has Been Added.', '', '2020-02-14 08:11:07'),
(1038, '0', 'Property Status Updated Successful- 10023', '', '2020-02-14 08:18:36'),
(1039, '0', 'Property Status Updated Successful- 10023', '', '2020-02-14 08:18:51'),
(1040, '100100', 'Created New User: cjonnyjoe@gmail.com', '', '2020-02-14 12:10:20'),
(1041, '0', 'Logged In', '', '2020-02-14 12:10:22'),
(1042, '100100', 'Created New User: harvilaworld@gmail.com', '', '2020-02-14 12:37:49'),
(1043, '0', 'Logged In', '', '2020-02-15 21:19:39'),
(1044, '0', 'Message Email Sent  - Echezona Anyichie', '', '2020-02-16 23:42:33'),
(1045, '0', 'Message Email Sent  - KennethRoast', '', '2020-02-17 05:27:10'),
(1046, '0', 'Logged In', '', '2020-02-17 08:51:33'),
(1047, '0', 'Logged In', '', '2020-02-17 16:27:43'),
(1048, '100100', 'Created New User: paulwhiteblogs2@gmail.com', '', '2020-02-21 12:31:39'),
(1049, '100100', 'Created New User: paulwhiteblogs@gmail.com', '', '2020-02-21 12:37:43'),
(1050, '100100', 'Created New User: paulwhiteblogs@gmail.com', '', '2020-02-21 12:55:32'),
(1051, '100100', 'Created New User: paulwhiteblogs@gmail.com', '', '2020-02-21 13:22:14'),
(1052, '100100', 'Created New User: paulwhiteblogs@gmail.com', '', '2020-02-21 13:24:59'),
(1053, '0', 'Logged In', '', '2020-02-22 13:26:03'),
(1054, '0', 'Logged In', '', '2020-02-25 14:44:10'),
(1055, '0', 'Logged In', '', '2020-02-27 13:53:54'),
(1056, '100100', 'Created New User: prince.michael492@gmail.com', '', '2020-02-29 08:26:23'),
(1057, '0', 'Logged In', '', '2020-03-02 11:26:35'),
(1058, '0', 'Logged In', '', '2020-03-03 17:35:21'),
(1059, '0', 'Logged In', '', '2020-03-04 06:42:45'),
(1060, '100100', 'Created New User: dreddavid150@gmail.com', '', '2020-03-07 16:00:36'),
(1061, '0', 'Logged In', '', '2020-03-07 16:28:24'),
(1062, '0', 'Logged In', '', '2020-03-07 16:35:30'),
(1063, '0', 'Logged In', '', '2020-03-07 19:42:59'),
(1064, '100100', 'Created New User: ugenloose@gmail.com', '', '2020-03-09 13:43:57'),
(1065, '100100', 'Created New User: sqtwebsolutions@gmail.com', '', '2020-03-09 13:52:16'),
(1066, '0', 'Logged In', '', '2020-03-09 13:56:41'),
(1067, '0', 'A New Property Has Been Added.', '', '2020-03-09 13:59:18'),
(1068, '0', 'Logged In', '', '2020-03-09 14:00:08'),
(1069, '0', 'Logged Out', '', '2020-03-09 14:00:46'),
(1070, '0', 'Logged In', '', '2020-03-09 14:51:45'),
(1071, '0', 'Logged In', '', '2020-03-09 14:52:49'),
(1072, '0', 'Property Status Updated Successful- 10045', '', '2020-03-09 14:53:39'),
(1073, '0', 'Logged In', '', '2020-03-10 23:31:48'),
(1074, '0', 'Logged In', '', '2020-03-11 10:21:17'),
(1075, '100100', 'Created New User: arinzeaguolu@gmail.com', '', '2020-03-14 09:38:31'),
(1076, '0', 'Logged In', '', '2020-03-14 09:40:10'),
(1077, '0', 'Logged In', '', '2020-03-14 13:31:45'),
(1078, '0', 'Agents Details Updated Successful', '', '2020-03-14 13:33:43'),
(1079, '0', 'Logged In', '', '2020-03-14 15:08:39'),
(1080, '0', 'Logged In', '', '2020-03-14 16:28:20'),
(1081, '100100', 'Created New User: webspecialist4us@gmail.com', '', '2020-03-16 12:35:59'),
(1082, '100100', 'Created New User: webspecialist4all@gmail.com', '', '2020-03-16 12:36:38'),
(1083, '0', 'Logged In', '', '2020-03-16 13:23:17'),
(1084, '0', 'A New Property Has Been Added.', '', '2020-03-16 13:24:59'),
(1085, '0', 'Logged In', '', '2020-03-16 13:31:28'),
(1086, '0', 'Logged In', '', '2020-03-16 16:55:51'),
(1087, '0', 'Logged In', '', '2020-03-18 19:32:20'),
(1088, '100100', 'Created New User: paulwhiteblogs@gmail.com', '', '2020-03-23 13:51:15'),
(1089, '100100', 'Created New User: paulwhiteblogs@gmail.com', '', '2020-03-23 14:01:52'),
(1090, '0', 'Logged In', '', '2020-03-23 14:04:22'),
(1091, '0', 'Property Status Updated Successful- 10061', '', '2020-03-23 14:04:41'),
(1092, '0', 'Property Status Updated Successful- 10060', '', '2020-03-23 14:05:02'),
(1093, '100100', 'Created New User: paulwhiteblogs@gmail.com', '', '2020-03-23 14:48:36'),
(1094, '100100', 'Created New User: paulwhiteblogs@gmail.com', '', '2020-03-23 15:29:43'),
(1095, '100100', 'Created New User: paulwhiteblogs@gmail.com', '', '2020-03-23 17:19:16'),
(1096, '100100', 'Created New User: paulwhiteblogs@gmail.com', '', '2020-03-23 17:23:09'),
(1097, '100100', 'Created New User: paulwhiteblogs@gmail.com', '', '2020-03-23 17:26:59'),
(1098, '100100', 'Created New User: paulwhiteblogs@gmail.com', '', '2020-03-23 20:02:10'),
(1099, '100100', 'Created New User: paulwhiteblogs@gmail.com', '', '2020-03-24 03:38:04'),
(1100, '100100', 'Created New User: paulwhiteblogs@gmail.com', '', '2020-03-24 03:41:48'),
(1101, '0', 'Logged In', '', '2020-03-24 03:43:02'),
(1102, '0', 'Logged In', '', '2020-03-24 03:43:42'),
(1103, '0', 'A New Property Has Been Added.', '', '2020-03-24 04:01:11'),
(1104, '0', 'Logged In', '', '2020-03-24 04:02:26'),
(1105, '0', 'Property Status Updated Successful- 10062', '', '2020-03-24 04:09:14'),
(1106, '0', 'Property Status Updated Successful- 10062', '', '2020-03-24 04:09:22'),
(1107, '0', 'Property Status Updated Successful- 10062', '', '2020-03-24 04:10:16'),
(1108, '0', 'Property Status Updated Successful- 10062', '', '2020-03-24 04:11:47'),
(1109, '0', 'Logged In', '', '2020-03-28 16:19:07'),
(1110, '0', 'A New Property Has Been Added.', '', '2020-03-28 17:04:24'),
(1111, '0', 'Logged In', '', '2020-03-29 17:11:46'),
(1112, '100100', 'Created New User: 7binemmanuel@gmail.com', '', '2020-04-17 14:00:39'),
(1113, '0', 'Logged In', '', '2020-04-17 15:12:48'),
(1114, '0', 'Agents Password Updated Successful', '', '2020-04-17 15:13:50'),
(1115, '0', 'Logged In', '', '2020-04-17 15:16:33'),
(1116, '0', 'A New Property Has Been Added.', '', '2020-04-17 15:20:30'),
(1117, '0', 'A New Property Has Been Added.', '', '2020-04-17 16:01:02'),
(1118, '0', 'A New Property Has Been Added.', '', '2020-04-17 16:08:04'),
(1119, '0', 'A New Property Has Been Added.', '', '2020-04-17 16:11:22'),
(1120, '0', 'A New Property Has Been Added.', '', '2020-04-17 16:12:37'),
(1121, '0', 'A New Property Has Been Added.', '', '2020-04-17 16:16:03'),
(1122, '0', 'Logged In', '', '2020-04-17 18:13:55'),
(1123, '0', 'A New Property Has Been Added.', '', '2020-04-17 18:16:07'),
(1124, '100100', 'Created New User: Angelaojo25@gmail.com', '', '2020-04-19 21:10:23'),
(1125, '100100', 'Created New User: gohomenig@gmail.com', '', '2020-04-24 08:07:43'),
(1126, '0', 'Message Email Sent  - Jameskaw', '', '2020-04-24 12:23:20'),
(1127, '0', 'Message Email Sent  - Barbara Atyson', '', '2020-04-25 11:31:53'),
(1128, '0', 'Message Email Sent  - Claudia Clement', '', '2020-04-26 18:54:23'),
(1129, '0', 'Message Email Sent  - Martinnem', '', '2020-04-29 13:50:19'),
(1130, '0', 'Message Email Sent  - Shenna Akehurst', '', '2020-04-30 22:40:23'),
(1131, '0', 'Message Email Sent  - Barbara Atyson', '', '2020-05-02 21:40:55'),
(1132, '0', 'Logged In', '', '2020-05-06 08:28:13'),
(1133, '0', 'Property Status Updated Successful- 10064', '', '2020-05-06 08:28:55'),
(1134, '0', 'Unable to List Users', 'Reason: Table &#039;gohomeng_web_db.users&#039; Doesn&#039;t Exist', '2020-05-06 08:54:18'),
(1135, '0', 'A New Property Has Been Added.', '', '2020-05-11 02:02:17'),
(1136, '0', 'Logged In', '', '2020-05-11 08:48:28'),
(1137, '0', 'Message Email Sent  - JerryVaw', '', '2020-05-11 18:40:42'),
(1138, '0', 'Logged In', '', '2020-05-14 14:30:09'),
(1139, '0', 'Logged In', '', '2020-05-14 14:35:24'),
(1140, '0', 'Logged In', '', '2020-05-16 07:31:08'),
(1141, '0', 'Message Email Sent  - Maria Li', '', '2020-05-19 02:07:47'),
(1142, '0', 'Message Email Sent  - Eric Jones', '', '2020-05-21 09:29:39'),
(1143, '0', 'Message Email Sent  - Eric Jones', '', '2020-05-24 12:36:36'),
(1144, '0', 'Message Email Sent  - Eric Jones', '', '2020-05-24 16:40:14'),
(1145, '0', 'Message Email Sent  - Eric Jones', '', '2020-06-04 10:19:27'),
(1146, '0', 'Message Email Sent  - Taylor Jones', '', '2020-06-07 10:17:17'),
(1147, '0', 'Logged In', '', '2020-06-10 16:31:33'),
(1148, '0', 'Logged In', '', '2020-06-10 16:32:12'),
(1149, '0', 'Logged In', '', '2020-06-10 16:33:31'),
(1150, '0', 'A New Property Has Been Added.', '', '2020-06-10 16:37:00'),
(1151, '0', 'Logged In', '', '2020-06-10 16:38:10'),
(1152, '0', 'Property Status Updated Successful- 10065', '', '2020-06-10 16:38:39'),
(1153, '0', 'Property Status Updated Successful- 10065', '', '2020-06-10 16:39:58'),
(1154, '0', 'Logged In', '', '2020-06-14 12:46:58'),
(1155, '0', 'Logged In', '', '2020-06-14 12:49:55'),
(1156, '0', 'A New Property Has Been Added.', '', '2020-06-14 12:51:56'),
(1157, '0', 'Property Status Updated Successful- 10066', '', '2020-06-14 12:52:52'),
(1158, '0', 'Logged In', '', '2020-06-14 15:00:54'),
(1159, '0', 'A New Property Has Been Added.', '', '2020-06-14 15:07:36'),
(1160, '0', 'Logged In', '', '2020-06-14 15:09:49'),
(1161, '0', 'Property Status Updated Successful- 10067', '', '2020-06-14 15:11:09'),
(1162, '0', 'Property Updated Successful- Apartment In Ajegunle', '', '2020-06-14 15:21:16'),
(1163, '0', 'Property Status Updated Successful- 10067', '', '2020-06-14 15:35:11'),
(1164, '0', 'Logged In', '', '2020-06-14 15:42:52'),
(1165, '0', 'A New Property Has Been Added.', '', '2020-06-14 15:43:48'),
(1166, '0', 'Logged In', '', '2020-06-14 15:44:17'),
(1167, '0', 'Property Status Updated Successful- 10068', '', '2020-06-14 15:44:47'),
(1168, '0', 'Logged In', '', '2020-06-14 15:45:31'),
(1169, '0', 'Logged In', '', '2020-06-14 15:45:42'),
(1170, '0', 'Property Status Updated Successful- 10068', '', '2020-06-14 15:45:53'),
(1171, '0', 'Logged In', '', '2020-06-14 19:33:41'),
(1172, '0', 'A New Property Has Been Added.', '', '2020-06-14 19:38:29'),
(1173, '0', 'A New Property Has Been Added.', '', '2020-06-14 20:18:03'),
(1174, '0', 'A New Property Has Been Added.', '', '2020-06-14 20:22:12'),
(1175, '0', 'Logged Out', '', '2020-06-14 20:41:56'),
(1176, '0', 'Message Email Sent  - JoshuaFlulp', '', '2020-06-18 19:37:40'),
(1177, '0', 'Logged In', '', '2020-06-18 20:01:49');
INSERT INTO `yemedugo` (`id`, `who`, `didwhat`, `why`, `wen`) VALUES
(1178, '0', 'A New Property Has Been Added.', '', '2020-06-18 20:05:45'),
(1179, '0', 'Logged In', '', '2020-06-18 20:06:13'),
(1180, '0', 'Property Status Updated Successful- 10071', '', '2020-06-18 20:06:36'),
(1181, '0', 'Message Email Sent  - Claudia Clement', '', '2020-06-23 20:26:39'),
(1182, '100100', 'Created New User: gohomeadmanager@gmail.com', '', '2020-06-25 07:57:15'),
(1183, '0', 'Logged In', '', '2020-06-25 08:02:54'),
(1184, '0', 'Agents Details Updated Successful', '', '2020-06-25 08:04:04'),
(1185, '0', 'A New Property Has Been Added.', '', '2020-06-25 08:09:24'),
(1186, '0', 'Logged In', '', '2020-06-25 08:10:13'),
(1187, '0', 'Property Status Updated Successful- 10065', '', '2020-06-25 08:10:45'),
(1188, '0', 'Property Status Updated Successful- 10065', '', '2020-06-25 08:15:56'),
(1189, '0', 'Logged In', '', '2020-06-26 19:36:45'),
(1190, '0', 'A New Property Has Been Added.', '', '2020-06-26 19:39:01'),
(1191, '0', 'Agents Details Updated Successful', '', '2020-06-26 20:35:09'),
(1192, '0', 'Logged Out', '', '2020-06-26 20:39:39'),
(1193, '0', 'Logged In', '', '2020-06-26 20:53:13'),
(1194, '0', 'Logged Out', '', '2020-06-26 21:01:34'),
(1195, '0', 'Message Email Sent  - Barbara Atyson', '', '2020-06-28 16:40:37'),
(1196, '0', 'Logged In', '', '2020-06-29 14:57:06'),
(1197, '0', 'Logged In', '', '2020-06-29 15:11:21'),
(1198, '0', 'Logged In', '', '2020-06-29 15:11:29'),
(1199, '0', 'Message Email Sent  - Eric Jones', '', '2020-07-02 04:52:01'),
(1200, '0', 'Logged In', '', '2020-07-05 06:58:53'),
(1201, '0', 'Logged In', '', '2020-07-05 08:16:40'),
(1202, '0', 'Unable to List Users', 'Reason: Table &#039;gohomeng_web_db.users&#039; Doesn&#039;t Exist', '2020-07-05 08:16:49'),
(1203, '0', 'Logged In', '', '2020-07-05 09:31:33'),
(1204, '0', 'Logged In', '', '2020-07-05 10:58:49'),
(1205, '0', 'Logged In', '', '2020-07-05 17:13:25'),
(1206, '100100', 'Created New User: adefisan4senator@yahoo.com', '', '2020-07-06 04:20:39'),
(1207, '0', 'Logged In', '', '2020-07-06 05:10:32'),
(1208, '0', 'Logged Out', '', '2020-07-06 05:49:36'),
(1209, '0', 'Logged In', '', '2020-07-06 05:49:46'),
(1210, '0', 'Logged In', '', '2020-07-06 07:17:11'),
(1211, '0', 'Logged In', '', '2020-07-06 18:08:36'),
(1212, '100100', 'Created New User: emmanuelfemi888@gmail.com', '', '2020-07-06 18:41:08'),
(1213, '0', 'Logged In', '', '2020-07-06 18:44:10'),
(1214, '0', 'Agents Details Updated Successful', '', '2020-07-06 18:45:44'),
(1215, '0', 'Logged In', '', '2020-07-06 20:35:33'),
(1216, '0', 'A New Property Has Been Added.', '', '2020-07-06 20:46:46'),
(1217, '0', 'A New Property Has Been Added.', '', '2020-07-06 20:49:12'),
(1218, '0', 'Logged In', '', '2020-07-06 20:51:09'),
(1219, '0', 'Logged In', '', '2020-07-07 06:25:57'),
(1220, '0', 'Logged In', '', '2020-07-07 06:27:24'),
(1221, '0', 'Logged In', '', '2020-07-07 06:27:34'),
(1222, '0', 'Property Status Updated Successful- 10068', '', '2020-07-07 06:27:59'),
(1223, '0', 'Logged Out', '', '2020-07-07 08:27:32'),
(1224, '0', 'Logged In', '', '2020-07-07 08:27:39'),
(1225, '0', 'Logged In', '', '2020-07-07 08:51:35'),
(1226, '0', 'Property Updated Successful- 4 bedroom flat with a roomself', '', '2020-07-07 08:59:40'),
(1227, '0', 'Property Status Updated Successful- 10068', '', '2020-07-07 09:02:12'),
(1228, '0', 'Logged In', '', '2020-07-07 09:07:47'),
(1229, '0', 'Logged In', '', '2020-07-07 10:11:30'),
(1230, '0', 'Logged Out', '', '2020-07-07 10:51:39'),
(1231, '0', 'Logged In', '', '2020-07-07 10:51:51'),
(1232, '0', 'Logged In', '', '2020-07-07 11:24:02'),
(1233, '0', 'Logged In', '', '2020-07-07 12:26:22'),
(1234, '0', 'Logged In', '', '2020-07-07 14:07:18'),
(1235, '0', 'Logged In', '', '2020-07-07 14:36:10'),
(1236, '0', 'Logged In', '', '2020-07-07 22:33:10'),
(1237, '0', 'Logged In', '', '2020-07-07 22:53:55'),
(1238, '0', 'Logged In', '', '2020-07-08 03:20:11'),
(1239, '0', 'Logged In', '', '2020-07-08 05:56:48'),
(1240, '0', 'Logged In', '', '2020-07-08 06:04:54'),
(1241, '0', 'Logged Out', '', '2020-07-08 06:50:26'),
(1242, '0', 'Logged In', '', '2020-07-08 06:50:36'),
(1243, '100100', 'Unable to Load Properties', 'Reason: You Have An Error In Your Sql Syntax; Check The Manual That Corresponds To Your Mariadb Server Version For The Right Syntax To Use Near \\\'desc Limit 0, 20\\\' At Line 1', '2020-07-08 07:48:30'),
(1244, '100100', 'Unable to Load Properties', 'Reason: You Have An Error In Your Sql Syntax; Check The Manual That Corresponds To Your Mariadb Server Version For The Right Syntax To Use Near \\\'desc\\\' At Line 1', '2020-07-08 07:49:18'),
(1245, '0', 'Logged Out', '', '2020-07-08 08:11:43'),
(1246, '0', 'Logged In', '', '2020-07-08 08:20:24'),
(1247, '0', 'Logged In', '', '2020-07-08 09:15:52'),
(1248, '0', 'Logged Out', '', '2020-07-08 09:27:08'),
(1249, '0', 'Logged In', '', '2020-07-08 09:27:21'),
(1250, '0', 'Logged In', '', '2020-07-08 10:50:31'),
(1251, '0', 'Message Email Sent  - CaesarMaymn', '', '2020-07-08 11:10:09'),
(1252, '0', 'Logged In', '', '2020-07-08 14:18:29'),
(1253, '0', 'Logged In', '', '2020-07-08 15:03:23'),
(1254, '0', 'Logged In', '', '2020-07-08 16:19:40'),
(1255, '0', 'Logged In', '', '2020-07-08 16:55:44'),
(1256, '100100', 'Created New User: Chizoba1.emecheta1@gmail.com', '', '2020-07-08 17:15:49'),
(1257, '0', 'Logged In', '', '2020-07-08 17:17:46'),
(1258, '0', 'A New Property Has Been Added.', '', '2020-07-08 17:21:30'),
(1259, '0', 'Logged In', '', '2020-07-08 17:22:14'),
(1260, '0', 'Agents Details Updated Successful', '', '2020-07-08 17:23:16'),
(1261, '0', 'A New Property Has Been Added.', '', '2020-07-08 17:26:19'),
(1262, '0', 'Logged In', '', '2020-07-08 17:43:52'),
(1263, '0', 'Property Status Updated Successful- 10070', '', '2020-07-08 17:44:20'),
(1264, '0', 'Property Status Updated Successful- 10069', '', '2020-07-08 17:54:49'),
(1265, '0', 'Property Status Updated Successful- 10070', '', '2020-07-08 17:55:04'),
(1266, '0', 'Logged In', '', '2020-07-08 18:29:49'),
(1267, '0', 'Agents Details Updated Successful', '', '2020-07-08 18:30:15'),
(1268, '0', 'Logged In', '', '2020-07-08 19:48:26'),
(1269, '0', 'Logged In', '', '2020-07-08 21:24:05'),
(1270, '0', 'Logged In', '', '2020-07-08 22:50:19'),
(1271, '0', 'Logged In', '', '2020-07-09 05:37:28'),
(1272, '100100', 'Created New User: Mrfixer001@gmail.com', '', '2020-07-09 06:06:07'),
(1273, '0', 'Logged In', '', '2020-07-09 06:06:54'),
(1274, '0', 'A New Property Has Been Added.', '', '2020-07-09 06:16:51'),
(1275, '0', 'Logged In', '', '2020-07-09 06:17:37'),
(1276, '0', 'A New Property Has Been Added.', '', '2020-07-09 06:25:26'),
(1277, '0', 'Logged In', '', '2020-07-09 06:46:14'),
(1278, '0', 'Property Status Updated Successful- 10071', '', '2020-07-09 06:46:30'),
(1279, '0', 'Property Status Updated Successful- 10072', '', '2020-07-09 06:46:51'),
(1280, '100100', 'Created New User: raphaellucy71@gmail.com', '', '2020-07-09 06:50:22'),
(1281, '100100', 'Created New User: whitebronze777@yahoo.com', '', '2020-07-09 06:53:26'),
(1282, '0', 'Logged In', '', '2020-07-09 08:26:01'),
(1283, '0', 'Logged In', '', '2020-07-09 09:28:18'),
(1284, '0', 'Logged In', '', '2020-07-09 10:31:29'),
(1285, '0', 'Message Email Sent  - Micheal', '', '2020-07-09 11:02:17'),
(1286, '0', 'Logged In', '', '2020-07-09 11:23:11'),
(1287, '0', 'Logged In', '', '2020-07-09 11:23:44'),
(1288, '0', 'Logged In', '', '2020-07-09 11:46:04'),
(1289, '0', 'Logged In', '', '2020-07-09 13:20:11'),
(1290, '0', 'Logged Out', '', '2020-07-09 13:57:56'),
(1291, '0', 'Logged In', '', '2020-07-09 13:58:11'),
(1292, '0', 'Logged In', '', '2020-07-09 17:00:22'),
(1293, '0', 'Logged In', '', '2020-07-09 18:55:19'),
(1294, '0', 'Logged In', '', '2020-07-09 20:49:25'),
(1295, '0', 'Logged In', '', '2020-07-10 02:54:55'),
(1296, '0', 'Logged In', '', '2020-07-10 05:38:17'),
(1297, '0', 'Logged In', '', '2020-07-10 06:34:38'),
(1298, '0', 'Logged In', '', '2020-07-10 07:13:34'),
(1299, '0', 'Message Email Sent  - DESMOND  ENABULU', '', '2020-07-10 07:21:32'),
(1300, '0', 'Logged In', '', '2020-07-10 08:32:58'),
(1301, '0', 'Logged Out', '', '2020-07-10 10:24:31'),
(1302, '0', 'Logged In', '', '2020-07-10 10:24:48'),
(1303, '0', 'Logged In', '', '2020-07-10 11:36:15'),
(1304, '0', 'Logged In', '', '2020-07-10 12:24:13'),
(1305, '0', 'Logged In', '', '2020-07-10 13:20:23'),
(1306, '0', 'Logged In', '', '2020-07-10 13:32:53'),
(1307, '0', 'Logged In', '', '2020-07-10 14:30:00'),
(1308, '0', 'Logged In', '', '2020-07-10 17:15:04'),
(1309, '0', 'Logged In', '', '2020-07-10 19:02:24'),
(1310, '0', 'Message Email Sent  - HeatherHop', '', '2020-07-10 20:27:27'),
(1311, '0', 'Logged In', '', '2020-07-11 03:35:22'),
(1312, '0', 'Message Email Sent  - Eric Jones', '', '2020-07-11 03:45:17'),
(1313, '0', 'Logged In', '', '2020-07-11 05:27:12'),
(1314, '100100', 'Created New User: blessedceo20@gmail.com', '', '2020-07-11 08:14:29'),
(1315, '0', 'Logged In', '', '2020-07-11 08:21:35'),
(1316, '0', 'Agents Details Updated Successful', '', '2020-07-11 08:30:52'),
(1317, '0', 'A New Property Has Been Added.', '', '2020-07-11 08:37:23'),
(1318, '0', 'Logged In', '', '2020-07-11 09:13:20'),
(1319, '0', 'Property Status Updated Successful- 10073', '', '2020-07-11 09:13:45'),
(1320, '0', 'Property Status Updated Successful- 10073', '', '2020-07-11 09:13:51'),
(1321, '0', 'Logged In', '', '2020-07-11 09:20:03'),
(1322, '0', 'Message Email Sent  - Eric Jones', '', '2020-07-11 10:05:33'),
(1323, '0', 'Logged In', '', '2020-07-11 14:24:20'),
(1324, '0', 'Message Email Sent  - Mike Young', '', '2020-07-11 19:33:55'),
(1325, '0', 'Logged In', '', '2020-07-11 19:48:41'),
(1326, '0', 'Logged In', '', '2020-07-12 05:23:57'),
(1327, '100100', 'Created New User: uzokaifeanyi@gmail.com', '', '2020-07-12 12:04:43'),
(1328, '0', 'Logged In', '', '2020-07-12 12:14:41'),
(1329, '0', 'Agents Details Updated Successful', '', '2020-07-12 12:16:09'),
(1330, '0', 'Logged In', '', '2020-07-12 12:45:43'),
(1331, '0', 'Logged In', '', '2020-07-12 15:16:00'),
(1332, '100100', 'Created New User: emmauelitaekpiken@gmail.com', '', '2020-07-12 15:30:49'),
(1333, '0', 'Logged In', '', '2020-07-12 15:32:27'),
(1334, '0', 'Logged In', '', '2020-07-12 15:32:36'),
(1335, '0', 'Logged In', '', '2020-07-12 20:29:44'),
(1336, '0', 'A New Property Has Been Added.', '', '2020-07-12 20:49:58'),
(1337, '0', 'Logged In', '', '2020-07-13 03:12:08'),
(1338, '0', 'Property Status Updated Successful- 10074', '', '2020-07-13 03:19:26'),
(1339, '0', 'Logged In', '', '2020-07-13 06:01:18'),
(1340, '0', 'Logged In', '', '2020-07-13 07:10:39'),
(1341, '0', 'Logged In', '', '2020-07-13 08:01:08'),
(1342, '0', 'Logged In', '', '2020-07-13 08:53:48'),
(1343, '0', 'Logged In', '', '2020-07-13 12:09:45'),
(1344, '0', 'Logged In', '', '2020-07-13 16:29:21'),
(1345, '0', 'Logged In', '', '2020-07-14 02:58:55'),
(1346, '0', 'Logged In', '', '2020-07-14 06:28:52'),
(1347, '0', 'Logged In', '', '2020-07-14 07:10:06'),
(1348, '0', 'Logged In', '', '2020-07-14 08:30:50'),
(1349, '0', 'Logged In', '', '2020-07-14 11:45:52'),
(1350, '100100', 'Created New User: kehneyblaq@gmail.com', '', '2020-07-14 15:53:33'),
(1351, '0', 'Logged In', '', '2020-07-14 15:55:07'),
(1352, '100100', 'Created New User: michaeluduzoije@gmail.com', '', '2020-07-14 19:40:23'),
(1353, '0', 'Logged In', '', '2020-07-14 19:42:21'),
(1354, '100100', 'Created New User: patward1601@gmail.com', '', '2020-07-14 19:50:38'),
(1355, '0', 'Logged In', '', '2020-07-14 19:53:04'),
(1356, '0', 'Agents Details Updated Successful', '', '2020-07-14 19:54:00'),
(1357, '0', 'A New Property Has Been Added.', '', '2020-07-14 19:57:14'),
(1358, '0', 'Logged In', '', '2020-07-15 04:57:04'),
(1359, '0', 'Property Status Updated Successful- 10075', '', '2020-07-15 04:57:27'),
(1360, '0', 'Logged In', '', '2020-07-15 05:00:55'),
(1361, '0', 'Property Updated Successful- Valid C of O.', '', '2020-07-15 05:11:18'),
(1362, '0', 'Logged In', '', '2020-07-15 05:12:39'),
(1363, '0', 'Property Status Updated Successful- 10075', '', '2020-07-15 05:13:08'),
(1364, '0', 'Property Updated Successful- 50 HECTARES OF LAND IN GWAGWALADA,  ABUJA,  WITH SOME COMPLETED AND UNCOMPLETED BUILDINGS ON IT.  WITH A VALID FEDERAL C ', '', '2020-07-15 05:21:41'),
(1365, '0', 'A New Property Has Been Added.', '', '2020-07-15 05:35:28'),
(1366, '0', 'A New Property Has Been Added.', '', '2020-07-15 05:48:10'),
(1367, '0', 'A New Property Has Been Added.', '', '2020-07-15 06:02:32'),
(1368, '0', 'A New Property Has Been Added.', '', '2020-07-15 06:07:05'),
(1369, '0', 'Logged In', '', '2020-07-15 06:12:34'),
(1370, '0', 'Property Status Updated Successful- 10076', '', '2020-07-15 06:13:07'),
(1371, '0', 'Property Status Updated Successful- 10079', '', '2020-07-15 06:15:41'),
(1372, '0', 'Property Status Updated Successful- 10077', '', '2020-07-15 06:16:10'),
(1373, '0', 'A New Property Has Been Added.', '', '2020-07-15 06:29:11'),
(1374, '0', 'A New Property Has Been Added.', '', '2020-07-15 06:37:03'),
(1375, '0', 'A New Property Has Been Added.', '', '2020-07-15 06:45:40'),
(1376, '0', 'Message Email Sent  - Leonrad Garcia', '', '2020-07-15 06:52:43'),
(1377, '0', 'Logged In', '', '2020-07-15 07:16:31'),
(1378, '0', 'Property Status Updated Successful- 10080', '', '2020-07-15 07:17:04'),
(1379, '0', 'Property Status Updated Successful- 10081', '', '2020-07-15 07:17:22'),
(1380, '0', 'Property Status Updated Successful- 10082', '', '2020-07-15 07:17:37'),
(1381, '0', 'Logged In', '', '2020-07-15 09:29:46'),
(1382, '0', 'Logged In', '', '2020-07-15 09:51:52'),
(1383, '0', 'Logged In', '', '2020-07-15 12:58:43'),
(1384, '0', 'Logged In', '', '2020-07-15 14:56:14'),
(1385, '0', 'Logged In', '', '2020-07-15 15:55:09'),
(1386, '0', 'Logged In', '', '2020-07-15 18:43:46'),
(1387, '0', 'Logged In', '', '2020-07-15 20:17:56'),
(1388, '0', 'Logged In', '', '2020-07-16 05:31:55'),
(1389, '0', 'Logged In', '', '2020-07-16 08:00:49'),
(1390, '0', 'Logged In', '', '2020-07-16 14:11:17'),
(1391, '100100', 'Created New User: omo740eji@gmail.com', '', '2020-07-16 15:08:02'),
(1392, '0', 'Logged In', '', '2020-07-16 15:10:11'),
(1393, '0', 'A New Property Has Been Added.', '', '2020-07-16 16:02:33'),
(1394, '0', 'A New Property Has Been Added.', '', '2020-07-16 16:04:10'),
(1395, '0', 'A New Property Has Been Added.', '', '2020-07-16 16:04:17'),
(1396, '0', 'Logged In', '', '2020-07-16 16:55:35'),
(1397, '0', 'Logged In', '', '2020-07-16 16:56:23'),
(1398, '0', 'Logged In', '', '2020-07-16 16:56:38'),
(1399, '0', 'Property Status Updated Successful- 10085', '', '2020-07-16 16:58:10'),
(1400, '0', 'Logged In', '', '2020-07-16 18:37:53'),
(1401, '0', 'Logged In', '', '2020-07-17 03:09:51'),
(1402, '0', 'Logged In', '', '2020-07-17 06:04:13'),
(1403, '0', 'Logged In', '', '2020-07-17 07:48:27'),
(1404, '0', 'Logged In', '', '2020-07-17 12:23:55'),
(1405, '0', 'Logged In', '', '2020-07-17 14:31:34'),
(1406, '0', 'Logged In', '', '2020-07-17 20:48:37'),
(1407, '0', 'Logged In', '', '2020-07-18 06:13:23'),
(1408, '0', 'Logged In', '', '2020-07-18 08:28:01'),
(1409, '0', 'Message Email Sent  - Eric Jones', '', '2020-07-18 16:25:39'),
(1410, '0', 'Logged In', '', '2020-07-19 05:21:37'),
(1411, '0', 'Logged In', '', '2020-07-19 08:41:17'),
(1412, '0', 'Logged Out', '', '2020-07-19 09:17:12'),
(1413, '0', 'Logged In', '', '2020-07-19 09:17:23'),
(1414, '0', 'Logged In', '', '2020-07-19 10:20:15'),
(1415, '0', 'Logged In', '', '2020-07-19 10:38:09'),
(1416, '0', 'Logged Out', '', '2020-07-19 10:39:12'),
(1417, '0', 'Logged In', '', '2020-07-19 15:42:44'),
(1418, '100100', 'Created New User: joseronke@gmail.com', '', '2020-07-20 01:12:46'),
(1419, '0', 'Logged In', '', '2020-07-20 05:29:29'),
(1420, '0', 'Logged In', '', '2020-07-20 07:12:32'),
(1421, '0', 'Logged In', '', '2020-07-20 08:08:40'),
(1422, '0', 'Message Email Sent  - Sealevelhomes', '', '2020-07-20 08:21:17'),
(1423, '0', 'Logged In', '', '2020-07-20 09:20:03'),
(1424, '0', 'Logged In', '', '2020-07-20 10:08:33'),
(1425, '0', 'Logged In', '', '2020-07-20 10:58:50'),
(1426, '0', 'Logged In', '', '2020-07-20 13:14:06'),
(1427, '0', 'Message Email Sent  - Eric Jones', '', '2020-07-20 15:16:04'),
(1428, '100100', 'Created New User: ugohaeri@yahoo.com', '', '2020-07-20 15:33:18'),
(1429, '100100', 'Created New User: ugohaeri@gmail.com', '', '2020-07-20 15:33:44'),
(1430, '0', 'Logged In', '', '2020-07-20 16:43:20'),
(1431, '0', 'Logged In', '', '2020-07-20 17:08:08'),
(1432, '0', 'Logged In', '', '2020-07-20 19:59:50'),
(1433, '0', 'Logged In', '', '2020-07-21 06:05:15'),
(1434, '0', 'Logged In', '', '2020-07-21 08:52:36'),
(1435, '0', 'Message Email Sent  - Deon Rasmussen', '', '2020-07-21 23:12:07'),
(1436, '0', 'Logged In', '', '2020-07-22 04:57:40'),
(1437, '0', 'Logged In', '', '2020-07-22 13:39:09'),
(1438, '0', 'Logged In', '', '2020-07-22 15:13:10'),
(1439, '0', 'Logged In', '', '2020-07-22 19:18:24'),
(1440, '0', 'Logged In', '', '2020-07-23 05:24:43'),
(1441, '100100', 'Created New User: dwanlimited@gmail.com', '', '2020-07-23 08:39:44'),
(1442, '0', 'Logged In', '', '2020-07-23 08:51:04'),
(1443, '0', 'Logged In', '', '2020-07-23 10:27:11'),
(1444, '100100', 'Created New User: henryojeme@gmail.com', '', '2020-07-23 18:30:07'),
(1445, '0', 'Logged In', '', '2020-07-23 20:04:12'),
(1446, '0', 'Logged In', '', '2020-07-24 06:37:10'),
(1447, '0', 'Logged In', '', '2020-07-24 11:12:37'),
(1448, '0', 'Logged In', '', '2020-07-25 05:33:24'),
(1449, '0', 'Logged In', '', '2020-07-25 14:19:01'),
(1450, '0', 'Logged In', '', '2020-07-25 18:11:50'),
(1451, '0', 'Logged In', '', '2020-07-26 07:10:26'),
(1452, '100100', 'Created New User: josephejiofor@gmail.com', '', '2020-07-26 10:25:20'),
(1453, '100100', 'Created New User: sarahsmile860@gmail.com', '', '2020-07-26 12:33:04'),
(1454, '0', 'Logged In', '', '2020-07-26 15:18:42'),
(1455, '100100', 'Created New User: francaibazebo@gmail.com', '', '2020-07-26 18:47:40'),
(1456, '0', 'Logged In', '', '2020-07-26 21:48:08'),
(1457, '0', 'Message Email Sent  - Roseann Hagai', '', '2020-07-26 22:01:14'),
(1458, '0', 'Logged In', '', '2020-07-27 06:56:08'),
(1459, '100100', 'Created New User: damilolaabidakun93@gmail.com', '', '2020-07-27 07:45:28'),
(1460, '0', 'Logged In', '', '2020-07-27 07:47:19'),
(1461, '0', 'Logged In', '', '2020-07-27 07:54:29'),
(1462, '0', 'A New Property Has Been Added.', '', '2020-07-27 07:57:03'),
(1463, '0', 'A New Property Has Been Added.', '', '2020-07-27 08:03:08'),
(1464, '0', 'Logged In', '', '2020-07-27 08:14:03'),
(1465, '0', 'Property Status Updated Successful- 10086', '', '2020-07-27 08:14:41'),
(1466, '0', 'Property Status Updated Successful- 10087', '', '2020-07-27 08:27:14'),
(1467, '0', 'Logged In', '', '2020-07-27 09:03:06'),
(1468, '0', 'Logged In', '', '2020-07-27 13:00:05'),
(1469, '0', 'Logged In', '', '2020-07-27 14:16:04'),
(1470, '0', 'Logged In', '', '2020-07-27 17:18:30'),
(1471, '100100', 'Created New User: Akerele.tobi@yahoo.com', '', '2020-07-27 22:34:50'),
(1472, '0', 'Logged In', '', '2020-07-28 06:33:17'),
(1473, '0', 'Message Email Sent  - Stian Bonnet', '', '2020-07-28 07:30:44'),
(1474, '0', 'Logged In', '', '2020-07-28 07:57:48'),
(1475, '0', 'Logged In', '', '2020-07-28 09:37:30'),
(1476, '0', 'Logged In', '', '2020-07-28 10:27:23'),
(1477, '0', 'Logged In', '', '2020-07-28 10:27:33'),
(1478, '0', 'Message Email Sent  - Michaelbop', '', '2020-07-28 11:12:29'),
(1479, '0', 'Logged In', '', '2020-07-28 12:21:27'),
(1480, '0', 'Logged In', '', '2020-07-28 14:23:39'),
(1481, '0', 'Logged In', '', '2020-07-28 19:20:54'),
(1482, '0', 'Logged In', '', '2020-07-29 06:33:43'),
(1483, '100100', 'Created New User: adomu2018@gmail.com', '', '2020-07-29 09:06:28'),
(1484, '0', 'Logged In', '', '2020-07-29 13:36:23'),
(1485, '0', 'Logged In', '', '2020-07-30 11:04:49'),
(1486, '0', 'Logged In', '', '2020-07-30 14:45:34'),
(1487, '0', 'Logged In', '', '2020-07-30 18:13:39'),
(1488, '100100', 'Created New User: jossycool101@gmail.com', '', '2020-07-30 21:03:41'),
(1489, '0', 'Logged In', '', '2020-07-30 21:06:51'),
(1490, '0', 'Logged In', '', '2020-07-30 21:07:32'),
(1491, '0', 'A New Property Has Been Added.', '', '2020-07-30 21:14:39'),
(1492, '0', 'Logged In', '', '2020-07-31 06:07:33'),
(1493, '0', 'Property Status Updated Successful- 10088', '', '2020-07-31 06:08:00'),
(1494, '100100', 'Created New User: bryamthomsonjack88.gk@gmail.com', '', '2020-07-31 16:37:46'),
(1495, '0', 'Logged In', '', '2020-07-31 16:39:08'),
(1496, '0', 'Agents Password Updated Successful', '', '2020-07-31 16:41:56'),
(1497, '0', 'A New Property Has Been Added.', '', '2020-07-31 17:08:13'),
(1498, '0', 'Logged In', '', '2020-07-31 17:09:54'),
(1499, '0', 'Logged In', '', '2020-07-31 17:15:34'),
(1500, '0', 'Logged In', '', '2020-07-31 20:39:38'),
(1501, '0', 'Logged In', '', '2020-08-01 07:58:43'),
(1502, '0', 'Property Status Updated Successful- 10089', '', '2020-08-01 07:59:02'),
(1503, '0', 'Logged In', '', '2020-08-01 10:14:30'),
(1504, '0', 'Message Email Sent  - Travisput', '', '2020-08-01 10:41:12'),
(1505, '0', 'Logged In', '', '2020-08-02 10:11:32'),
(1506, '0', 'Logged Out', '', '2020-08-02 10:27:49'),
(1507, '100100', 'Created New User: sunkaanmi@gmail.com', '', '2020-08-02 10:30:16'),
(1508, '0', 'Logged In', '', '2020-08-02 10:31:20'),
(1509, '0', 'Agents Details Updated Successful', '', '2020-08-02 10:32:06'),
(1510, '0', 'A New Property Has Been Added.', '', '2020-08-02 10:51:56'),
(1511, '0', 'Logged In', '', '2020-08-02 12:02:06'),
(1512, '0', 'Message Email Sent  - Eric Jones', '', '2020-08-02 14:06:09'),
(1513, '0', 'Logged In', '', '2020-08-03 06:37:53'),
(1514, '0', 'Property Status Updated Successful- 10090', '', '2020-08-03 06:38:16'),
(1515, '0', 'Logged In', '', '2020-08-03 11:59:36'),
(1516, '0', 'Logged In', '', '2020-08-03 13:00:05'),
(1517, '0', 'Logged In', '', '2020-08-03 17:36:07'),
(1518, '0', 'Logged In', '', '2020-08-03 18:34:51'),
(1519, '0', 'Logged In', '', '2020-08-04 05:57:47'),
(1520, '0', 'Logged In', '', '2020-08-04 05:58:52'),
(1521, '0', 'Logged In', '', '2020-08-04 09:07:42'),
(1522, '0', 'Message Email Sent  - Mike Milton', '', '2020-08-04 13:28:02'),
(1523, '0', 'Logged In', '', '2020-08-04 15:27:31'),
(1524, '0', 'Logged In', '', '2020-08-05 04:52:31'),
(1525, '0', 'Property Status Updated Successful- 10091', '', '2020-08-05 04:53:00'),
(1526, '0', 'Logged In', '', '2020-08-05 09:14:16'),
(1527, '0', 'Logged In', '', '2020-08-05 16:02:10'),
(1528, '0', 'Logged In', '', '2020-08-05 17:08:57'),
(1529, '0', 'Logged In', '', '2020-08-06 05:46:16'),
(1530, '0', 'Logged In', '', '2020-08-06 07:31:23'),
(1531, '0', 'Logged In', '', '2020-08-06 15:40:33'),
(1532, '0', 'Logged Out', '', '2020-08-06 16:25:47'),
(1533, '0', 'Logged In', '', '2020-08-06 18:10:01'),
(1534, '0', 'Logged In', '', '2020-08-07 04:35:06'),
(1535, '0', 'Logged In', '', '2020-08-07 05:08:46'),
(1536, '0', 'Logged In', '', '2020-08-07 06:28:43'),
(1537, '100100', 'Created New User: okoriekingsli@yahoo.ca', '', '2020-08-07 13:56:42'),
(1538, '0', 'Logged In', '', '2020-08-07 13:58:18'),
(1539, '0', 'Message Email Sent  - Jimmy Scowley', '', '2020-08-07 16:56:07'),
(1540, '0', 'Message Email Sent  - Dalibor Harald', '', '2020-08-08 03:52:30'),
(1541, '0', 'Logged In', '', '2020-08-08 05:34:46'),
(1542, '0', 'Property Updated Successful- An Exquisite 5 Bedroom Duplex With Empty Land For Sale In Abuja', '', '2020-08-08 05:37:24'),
(1543, '0', 'Logged In', '', '2020-08-08 08:22:57'),
(1544, '0', 'Property Status Updated Successful- 10088', '', '2020-08-08 08:23:45'),
(1545, '0', 'Logged In', '', '2020-08-08 10:11:15'),
(1546, '0', 'Logged In', '', '2020-08-08 20:53:04'),
(1547, '0', 'Logged In', '', '2020-08-09 08:40:21'),
(1548, '0', 'Logged In', '', '2020-08-09 12:25:16'),
(1549, '0', 'Logged In', '', '2020-08-10 04:46:08'),
(1550, '0', 'Logged In', '', '2020-08-10 06:27:28'),
(0, '100100', 'Unable to Load Properties', 'Reason: You Have An Error In Your Sql Syntax; Check The Manual That Corresponds To Your Mariadb Server Version For The Right Syntax To Use Near \\\'limit 3\\\' At Line 1', '2020-08-14 20:05:00'),
(0, '100100', 'Unable to Load Properties', 'Reason: You Have An Error In Your Sql Syntax; Check The Manual That Corresponds To Your Mariadb Server Version For The Right Syntax To Use Near \\\'limit 3\\\' At Line 1', '2020-08-14 20:05:18'),
(0, '100100', 'Unable to Load Properties', 'Reason: You Have An Error In Your Sql Syntax; Check The Manual That Corresponds To Your Mariadb Server Version For The Right Syntax To Use Near \\\'limit 3\\\' At Line 1', '2020-08-14 20:05:38'),
(0, '0', 'Logged Out', '', '2020-08-14 20:06:22'),
(0, '0', 'Logged Out', '', '2020-08-14 20:14:28'),
(0, '100100', 'Created New User: free@gmail.com', '', '2020-10-05 16:56:30'),
(0, '0', 'Logged In', '', '2020-10-05 17:07:22'),
(0, '0', 'Logged Out', '', '2020-10-05 17:15:05'),
(0, '0', 'Logged In', '', '2020-10-05 17:17:00'),
(0, '0', 'Agents Details Updated Successful', '', '2020-10-05 18:19:11'),
(0, '0', 'Logged In', '', '2020-10-05 21:38:09'),
(0, '0', 'Logged In', '', '2020-10-06 07:08:11'),
(0, '0', 'Logged Out', '', '2020-10-06 07:38:25'),
(0, '0', 'Logged In', '', '2020-10-06 07:42:50'),
(0, '0', 'Logged Out', '', '2020-10-06 07:53:17'),
(0, '0', 'Logged In', '', '2020-10-06 15:19:45'),
(0, '0', 'Logged Out', '', '2020-10-06 15:22:33'),
(0, '0', 'Logged In', '', '2020-10-06 15:23:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`),
  ADD KEY `autoload` (`autoload`);

--
-- Indexes for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Indexes for table `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Indexes for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Indexes for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_yoast_seo_links`
--
ALTER TABLE `wp_yoast_seo_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `link_direction` (`post_id`,`type`);

--
-- Indexes for table `wp_yoast_seo_meta`
--
ALTER TABLE `wp_yoast_seo_meta`
  ADD UNIQUE KEY `object_id` (`object_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5260;

--
-- AUTO_INCREMENT for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=435;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
