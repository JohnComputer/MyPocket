-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 19-11-25 16:07
-- 서버 버전: 10.4.8-MariaDB
-- PHP 버전: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `drawworld`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `num` int(11) NOT NULL,
  `id` char(15) NOT NULL,
  `name` char(10) NOT NULL,
  `subject` char(200) NOT NULL,
  `content` text NOT NULL,
  `regist_day` char(20) NOT NULL,
  `recommand` int(11) DEFAULT 0,
  `hit` int(11) NOT NULL,
  `file_name` char(40) DEFAULT NULL,
  `file_type` char(40) DEFAULT NULL,
  `file_copied` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`num`, `id`, `name`, `subject`, `content`, `regist_day`, `recommand`, `hit`, `file_name`, `file_type`, `file_copied`) VALUES
(1, 'qwe', '김종국', '', 'TTTTTT', '', 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 테이블 구조 `canadaboard`
--

CREATE TABLE `canadaboard` (
  `num` int(11) NOT NULL,
  `id` char(15) NOT NULL,
  `name` char(10) NOT NULL,
  `subject` char(200) NOT NULL,
  `content` text NOT NULL,
  `regist_day` char(20) NOT NULL,
  `recommand` int(11) DEFAULT 0,
  `hit` int(11) NOT NULL,
  `file_name` char(40) DEFAULT NULL,
  `file_type` char(40) DEFAULT NULL,
  `file_copied` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `canadaboard`
--

INSERT INTO `canadaboard` (`num`, `id`, `name`, `subject`, `content`, `regist_day`, `recommand`, `hit`, `file_name`, `file_type`, `file_copied`) VALUES
(1, 'check', '김종구', '캐나다에 글남깁니다.', 'ㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇ', '2019-11-20 (01:14)', 7, 102, '', '', ''),
(2, 'qweqwe', '', 'wwwww', 'wwwwwwww', '2019-11-20 (01:13)', 19, 85, '', '', ''),
(3, 'korea', '김한국', '글남깁니다', '글글글긁ㄹ', '2019-11-20 (13:55)', 0, 5, '- (4).png', 'image/png', '2019_11_20_13_55_23.png'),
(5, 'qweqwe', '', 'asdasczxc', 'qweqweazxsdasd', '2019-11-20 (15:16)', 0, 4, '', '', ''),
(6, 'qweqwe', '', 'qweasdzxcasq', 'qwedasdczsxcasedqwe', '2019-11-20 (15:16)', 5, 2, '', '', ''),
(7, 'qweqwe', '', 'qweasdzxc', 'qwerdwqaefrasdad', '2019-11-20 (15:16)', 0, 4, '', '', ''),
(16, 'user1', '인호', 'qweqwdqwd', 'qsdqwdasdqawd', '2019-11-23 (10:09)', 0, 1, '', '', ''),
(17, 'user1', '인호', 'zxcqwcsxazcasd', 'qwe1qwdasczxcasd', '2019-11-23 (10:09)', 0, 193, '', '', ''),
(19, 'qwe777', 'qqqq', 'asdasda', 'sdasdasdasd', '2019-11-23 (13:50)', 0, 9, '', '', ''),
(20, 'qwe777', 'qqqq', 'asdasdas', 'dasdasd', '2019-11-23 (13:50)', 0, 40, '', '', ''),
(21, 'qwe777', 'qqqq', 'asdasda', 'asdsdasd', '2019-11-23 (13:50)', 0, 39, '', '', ''),
(25, 'kim88', '김연우', '확인중', '<iframe src=\"https://www.google.com/maps/d/embed?mid=1dQptCyvl_B-cx7AniKPkbKPVD4E\" width=\"640\" height=\"480\"></iframe>', '2019-11-25 (15:16)', 0, 2, '', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `chinaboard`
--

CREATE TABLE `chinaboard` (
  `num` int(11) NOT NULL,
  `id` char(15) NOT NULL,
  `name` char(10) NOT NULL,
  `subject` char(200) NOT NULL,
  `content` text NOT NULL,
  `regist_day` char(20) NOT NULL,
  `recommand` int(11) DEFAULT 0,
  `hit` int(11) NOT NULL,
  `file_name` char(40) DEFAULT NULL,
  `file_type` char(40) DEFAULT NULL,
  `file_copied` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 테이블 구조 `comment`
--

CREATE TABLE `comment` (
  `num` int(11) NOT NULL,
  `board_num` int(11) NOT NULL,
  `board_type` varchar(20) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` varchar(30) NOT NULL,
  `id` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `comment`
--

INSERT INTO `comment` (`num`, `board_num`, `board_type`, `comment`, `name`, `date`, `id`) VALUES
(3, 17, 'canadaboard', '134441', '인호', '2019-11-23 (12:42)', 'user1'),
(5, 17, 'canadaboard', '123123', 'qqqq', '2019-11-23 (13:47)', 'qwe777'),
(6, 17, 'canadaboard', '141414', 'qqqq', '2019-11-23 (13:47)', 'qwe777'),
(7, 17, 'canadaboard', '1315', 'qqqq', '2019-11-23 (13:47)', 'qwe777'),
(8, 17, 'canadaboard', '147788\r\n', 'qqqq', '2019-11-23 (13:47)', 'qwe777'),
(9, 17, 'canadaboard', '4613', 'qqqq', '2019-11-23 (13:48)', 'qwe777'),
(10, 17, 'canadaboard', '88888', 'qqqq', '2019-11-23 (13:48)', 'qwe777'),
(11, 17, 'canadaboard', '9908052', 'qqqq', '2019-11-23 (13:48)', 'qwe777'),
(12, 17, 'canadaboard', '797946', 'qqqq', '2019-11-23 (13:48)', 'qwe777'),
(13, 17, 'canadaboard', '784545413', 'qqqq', '2019-11-23 (13:48)', 'qwe777'),
(14, 5, 'canadaboard', 'adwswdqwdasd', 'qqqq', '2019-11-23 (13:50)', 'qwe777'),
(15, 7, 'canadaboard', 'wdqwd', 'qqqq', '2019-11-23 (13:50)', 'qwe777'),
(16, 21, 'canadaboard', 'csscs', 'qqqq', '2019-11-23 (13:51)', 'qwe777'),
(17, 20, 'canadaboard', '123123', '', '2019-11-24 (09:09)', 'qweqwe'),
(18, 20, 'canadaboard', '123123', '', '2019-11-24 (09:11)', 'qweqwe'),
(19, 21, 'canadaboard', '123123', '', '2019-11-24 (09:11)', 'qweqwe'),
(20, 17, 'canadaboard', '관리자 댓글', '관리자', '2019-11-24 (10:05)', 'admin'),
(21, 5, 'koreaboard', '좋은 정보 감사합니다.~', '인호', '2019-11-24 (14:51)', 'user1'),
(22, 1, 'canadaboard', '글남겨요', '', '2019-11-24 (16:16)', 'qweqwe');

-- --------------------------------------------------------

--
-- 테이블 구조 `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `iso` varchar(3) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- 테이블 구조 `iframeboard`
--

CREATE TABLE `iframeboard` (
  `num` int(11) NOT NULL,
  `id` char(15) NOT NULL,
  `name` char(10) NOT NULL,
  `subject` char(200) NOT NULL,
  `content` text NOT NULL,
  `regist_day` char(20) NOT NULL,
  `recommand` int(11) DEFAULT 0,
  `hit` int(11) NOT NULL,
  `frameadd` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `iframeboard`
--

INSERT INTO `iframeboard` (`num`, `id`, `name`, `subject`, `content`, `regist_day`, `recommand`, `hit`, `frameadd`) VALUES
(1, 'kim88', '김연우', 'qqq', 'qqqq', '2019-11-25 (15:39)', 0, 2, 'https://www.google.com/maps/d/embed?mid='),
(2, 'admin', '관리자', 'www', 'qeeqe', '2019-11-25 (15:50)', 0, 15, 'https://www.google.com/maps/d/embed?mid=1dQptCyvl_B-cx7AniKPkbKPVD4E'),
(3, 'admin', '관리자', '마분꽁님 대만지도', '마분꽁님 대만 지도입니다.', '2019-11-25 (16:06)', 0, 1, 'https://www.google.com/maps/d/embed?mid=15cbTsCYvvJcrCbPctvICnJ9D5NY');

-- --------------------------------------------------------

--
-- 테이블 구조 `japanboard`
--

CREATE TABLE `japanboard` (
  `num` int(11) NOT NULL,
  `id` char(15) NOT NULL,
  `name` char(10) NOT NULL,
  `subject` char(200) NOT NULL,
  `content` text NOT NULL,
  `regist_day` char(20) NOT NULL,
  `recommand` int(11) DEFAULT 0,
  `hit` int(11) NOT NULL,
  `file_name` char(40) DEFAULT NULL,
  `file_type` char(40) DEFAULT NULL,
  `file_copied` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `japanboard`
--

INSERT INTO `japanboard` (`num`, `id`, `name`, `subject`, `content`, `regist_day`, `recommand`, `hit`, `file_name`, `file_type`, `file_copied`) VALUES
(1, 'kim88', '김연우', 'ㅇ', '일본여행\r\n&lt;iframe src=&quot;https://www.google.com/maps/d/embed?mid=1dQptCyvl_B-cx7AniKPkbKPVD4E&quot; width=&quot;640&quot; height=&quot;480&quot;&gt;&lt;/iframe&gt;', '2019-11-25 (14:48)', 0, 2, '', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `koreaboard`
--

CREATE TABLE `koreaboard` (
  `num` int(11) NOT NULL,
  `id` char(15) NOT NULL,
  `name` char(10) NOT NULL,
  `subject` char(200) NOT NULL,
  `content` text NOT NULL,
  `regist_day` char(20) NOT NULL,
  `recommand` int(11) DEFAULT 0,
  `hit` int(11) NOT NULL,
  `file_name` char(40) DEFAULT NULL,
  `file_type` char(40) DEFAULT NULL,
  `file_copied` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `koreaboard`
--

INSERT INTO `koreaboard` (`num`, `id`, `name`, `subject`, `content`, `regist_day`, `recommand`, `hit`, `file_name`, `file_type`, `file_copied`) VALUES
(1, 'korean', '장동건', '경암동 철길마을', '교복을 빌리면 스냅 사진을 찍어주는 대여점과 예스러움을 콘셉트로 주전부리나 소품을 파는 가게들이 늘어선 경암동 철길마을!', '2019-11-24 (14:37)', 0, 4, '경암동철길2.jfif', 'image/jpeg', '2019_11_24_14_37_34.jfif'),
(2, 'korean', '장동건', '대구 여행', '대구 여행시 참고하세요~~', '2019-11-24 (14:42)', 0, 3, '', '', ''),
(3, 'korean', '장동건', '서해 회식당', '현지인 추천 맛집! ★★★★★\r\n\r\n겨울엔 쫀득하고 맛있는 &#039;회&#039;를 먹어줘야 제맛! &lt;무한도전&gt;도 다녀간 이 횟집에선 새콤달콤하고 시원한 육수가 일품인 물회를 꼭 먹어보기~!', '2019-11-24 (14:47)', 0, 1, '서해회식당1.jfif', 'image/jpeg', '2019_11_24_14_47_10.jfif'),
(4, 'korean', '장동건', '군산의 명물 틈', '\r\n쌀창고를 개조한 빈티지 무드 카페!\r\n빨간 벽돌 위로 뻗어 나간 울창한 담쟁이 넝쿨과 무성한 잎으로 그늘을 만드는 나무, 그 사이 코발트 블루의 문이 매력적인 공간.\r\n내부에는 오래된 타자기와 옛날 잡지, LP 레코드 등 빈티지한 소품을 배치해 차분하고 편안하다.\r\n\r\n여행 중 커피 한 잔하며 쉬어가기에 안성맞춤인 곳 :)', '2019-11-24 (14:48)', 0, 1, '틈.jfif', 'image/jpeg', '2019_11_24_14_48_33.jfif'),
(5, 'korean', '장동건', '제주도 여행 참고하세요~', '1. 렌트카\r\n\r\n \r\n\r\n제주도는 대중교통이 정말 열악하기 때문에 렌트카가 필수라고 볼 수 있는데요,\r\n\r\n \r\n\r\n택시를 이용하기엔 너무 가격이 나가 렌트카를 빌립니다.\r\n\r\n \r\n\r\n또 해안도로 혹은 산으로 가는 대중교통이 없기 때문에\r\n\r\n \r\n\r\n렌트카 없이는 제주도 여행을 즐기기엔 제약이 많이 따라옵니다.\r\n\r\n \r\n\r\n대여하실 때 면책보험을 꼭 신청하셔서 만일의 사태에 대비하시기 바랍니다.\r\n\r\n \r\n\r\n과속 문제만이 아니고, 음주운전도 있는데 이건 제주도여행 주의사항입니다.\r\n\r\n \r\n\r\n시내보다도 관광지에서 나오는 길목에 많이 단속하고\r\n\r\n \r\n\r\n렌트카의 상징 &#039;허&#039;넘버를 많이 잡는다고 하니 아예 술먹으면 운전대를 잡지 않는 습관을 기릅시다.\r\n\r\n \r\n\r\n \r\n\r\n\r\n\r\n \r\n\r\n \r\n\r\n \r\n\r\n2. 숙박\r\n\r\n \r\n\r\n제주도여행시 숙박은 필수인데요, 제주도에는저렴한 게스트하우스부터 펜션 및\r\n\r\n \r\n\r\n특급호텔까지 다양한 숙박시설이 많습니다.\r\n\r\n \r\n\r\n이때 예약시 충분한 질문을 통해 자신이 생각한 그런 숙박시설이 맞나 찾아봅니다.\r\n\r\n \r\n\r\n \r\n\r\n\r\n\r\n \r\n\r\n \r\n\r\n3. 교통\r\n\r\n \r\n\r\n제주도는 섬이라 비행기 혹은 배를 이용해 오시는 방법이 있는데\r\n\r\n \r\n\r\n기상악화로 인해 비행기, 배가 결항되는 경우 계획이 꼬여버립니다.\r\n\r\n \r\n\r\n제주도의 변덕스러운 날씨를 미리 알아두어\r\n\r\n \r\n\r\n거기에 맞는 계획을 짜셔서 다녀야 이러한 변수를 예방할 수 있습니다.\r\n\r\n \r\n\r\n \r\n\r\n\r\n\r\n \r\n\r\n \r\n\r\n \r\n\r\n4. 일정\r\n\r\n \r\n\r\n일정을 잡아야 체계적인 제주도 관광이 가능한데,\r\n\r\n \r\n\r\n빡빡한 일정은 무리한 운전을 하게되니 더욱 피곤해집니다.\r\n\r\n \r\n\r\n제주도 여행 계획을 짜실때 무리한 일정을 잡지 마시기 바랍니다.\r\n\r\n \r\n\r\n그날그날 숙소 위치에 따라 나눠서 어딜 간다는 생각으로 짜신다면\r\n\r\n \r\n\r\n더욱 여유로운 제주도여행이 되실거라 믿습니다.\r\n\r\n \r\n\r\n \r\n\r\n', '2019-11-24 (14:50)', 2, 5, '', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `map`
--

CREATE TABLE `map` (
  `id` varchar(3) NOT NULL,
  `korean` varchar(20) NOT NULL,
  `location1` varchar(300) NOT NULL,
  `location2` varchar(300) NOT NULL,
  `location3` varchar(300) NOT NULL,
  `location4` varchar(300) NOT NULL,
  `l1name` varchar(10) NOT NULL,
  `l2name` varchar(10) NOT NULL,
  `l3name` varchar(10) NOT NULL,
  `l4name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `map`
--

INSERT INTO `map` (`id`, `korean`, `location1`, `location2`, `location3`, `location4`, `l1name`, `l2name`, `l3name`, `l4name`) VALUES
('CA', '캐나다', 'pb=!1m18!1m12!1m3!1d18876468.200307723!2d-113.72221585646199!3d54.72270517403909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b0d03d337cc6ad9%3A0x9968b72aa2438fa5!2z7LqQ64KY64uk!5e0!3m2!1sko!2skr!4v1574438055603!5m2!1sko!2skr', 'pb=!1m18!1m12!1m3!1d359536.1450310544!2d-76.08043526625569!3d45.25029749476435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce05b25f5113af%3A0x8a6a51e131dd15ed!2z7LqQ64KY64ukIOyYqO2DgOumrOyYpCDsmKTtg4DsmYA!5e0!3m2!1sko!2skr!4v1574438086757!5m2!1sko!2skr', 'pb=!1m18!1m12!1m3!1d83327.35775817934!2d-123.19394344735221!3d49.25782632003207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673f143a94fb3%3A0xbb9196ea9b81f38b!2z7LqQ64KY64ukIOu4jOumrO2LsOyLnOy7rOufvOu5hOyVhCDrsLTsv6DrsoQ!5e0!3m2!1sko!2skr!4v1574438112229!5m2!1sko!2skr', 'pb=!1m18!1m12!1m3!1d174614.29109995943!2d-71.48177482843379!3d46.85651774274637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cb8968a05db8893%3A0x8fc52d63f0e83a03!2z7LqQ64KY64ukIO2AmOuyoQ!5e0!3m2!1sko!2skr!4v1574438172094!5m2!1sko!2skr', 'Canada', 'Otawa', 'Vencouver', 'Quebec'),
('CN', '중국', 'pb=!1m18!1m12!1m3!1d26950635.25983771!2d86.07893691800834!3d34.4553850891689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31508e64e5c642c1%3A0x951daa7c349f366f!2z7KSR6rWt!5e0!3m2!1sko!2skr!4v1574438462771!5m2!1sko!2skr', 'pb=!1m18!1m12!1m3!1d391565.25583022175!2d116.11727820954714!3d39.93907312984264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35f05296e7142cb9%3A0xb9625620af0fa98a!2z7KSR6rWtIOuyoOydtOynlSDsi5wg67Kg7J207KeV!5e0!3m2!1sko!2skr!4v1574438523358!5m2!1sko!2skr', 'pb=!1m18!1m12!1m3!1d436717.96616815985!2d121.19656888018183!3d31.224632506753668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35b27040b1f53c33%3A0x295129423c364a1!2z7KSR6rWtIOyDge2VmOydtCDsi5wg7IOB7ZWY7J20!5e0!3m2!1sko!2skr!4v1574438554208!5m2!1sko!2skr', 'pb=!1m18!1m12!1m3!1d206223.6304492543!2d120.22475425452755!3d36.136266331335364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35960fd582f8f06b%3A0x614d82fa614cf2f3!2z7KSR6rWtIOyCsOuRpSDshLEg7Lmt64uk7JikIOyLnA!5e0!3m2!1sko!2skr!4v1574438605870!5m2!1sko!2skr', 'China', 'Beijing', 'Shanghai', 'Qingdao'),
('JP', '일본', 'pb=!1m18!1m12!1m3!1d13753000.716291202!2d129.42726705905704!3d32.694921060699556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34674e0fd77f192f%3A0xf54275d47c665244!2z7J2867O4!5e0!3m2!1sko!2skr!4v1574438219438!5m2!1sko!2skr', 'pb=!1m18!1m12!1m3!1d207446.2481965256!2d139.6007842640055!3d35.66844146191366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b857628235d%3A0xcdd8aef709a2b520!2z7J2867O4IOuPhOy_hOuPhCDrj4Tsv4Q!5e0!3m2!1sko!2skr!4v1574438374855!5m2!1sko!2skr', 'pb=!1m18!1m12!1m3!1d104994.7705836582!2d135.4160245997024!3d34.67776424213757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6553406e2e1%3A0xc55bc16ee46a2fe7!2z7J2867O4IOyYpOyCrOy5tOu2gCDsmKTsgqzsubTsi5w!5e0!3m2!1sko!2skr!4v1574438410573!5m2!1sko!2skr', 'pb=!1m18!1m12!1m3!1d212561.2392122052!2d130.12388844536122!3d33.65018176967571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3541eda1e9848429%3A0xf60a729936398783!2z7J2867O4IO2bhOy_oOyYpOy5tO2YhCDtm4Tsv6DsmKTsubTsi5w!5e0!3m2!1sko!2skr!4v1574438436014!5m2!1sko!2skr', 'Japan', 'Tokyo', 'Osaka', 'Fukuoka'),
('KR', '대한민국', 'pb=!1m18!1m12!1m3!1d3313549.7555240993!2d125.63033865533585!3d35.802672162225434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356455ebcb11ba9b%3A0x91249b00ba88db4b!2z64yA7ZWc66-86rWt!5e0!3m2!1sko!2skr!4v1574436084059!5m2!1sko!2skr', 'pb=!1m18!1m12!1m3!1d202404.95892072783!2d126.84946603089736!3d37.56501724361054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca28b61c565cd%3A0x858aedb4e4ea83eb!2z7ISc7Jq47Yq567OE7Iuc!5e0!3m2!1sko!2skr!4v1574437047142!5m2!1sko!2skr', 'pb=!1m18!1m12!1m3!1d208748.11349536836!2d128.93171575395493!3d35.16436937285283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3568eb6de823cd35%3A0x35d8cb74247108a7!2z67aA7IKw6rSR7Jet7Iuc!5e0!3m2!1sko!2skr!4v1574437096837!5m2!1sko!2skr', 'pb=!1m18!1m12!1m3!1d103447.88670171914!2d128.49666003741842!3d35.87972967085935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3565e3b8b2efadd5%3A0xba92e029a0382e30!2z64yA6rWs6rSR7Jet7Iuc!5e0!3m2!1sko!2skr!4v1574437152197!5m2!1sko!2skr', 'Korea', 'Seoul', 'Busan', 'Daegu'),
('US', '미국', 'pb=!1m18!1m12!1m3!1d26370744.755678315!2d-113.7060879514326!3d36.21312758450238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2z66-46rWt!5e0!3m2!1sko!2skr!4v1574437194901!5m2!1sko!2skr', 'pb=!1m18!1m12!1m3!1d99370.3629710979!2d-77.08461571047508!3d38.89370913955885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7c6de5af6e45b%3A0xc2524522d4885d2a!2z66-46rWtIOybjOyLse2EtCBEQyDsm4zsi7HthLQ!5e0!3m2!1sko!2skr!4v1574437504791!5m2!1sko!2skr', 'pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2z66-46rWtIOuJtOyalQ!5e0!3m2!1sko!2skr!4v1574437539150!5m2!1sko!2skr', 'pb=!1m18!1m12!1m3!1d423286.27403720113!2d-118.6919186616014!3d34.02016131064457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z66-46rWtIOy6mOumrO2PrOuLiOyVhCDroZzsiqTslaTsoKTroIjsiqQ!5e0!3m2!1sko!2skr!4v1574437247598!5m2!1sko!2skr', 'USA', 'Wasington ', 'Newyork', 'LA'),
('VN', '베트남', 'pb=!1m18!1m12!1m3!1d7864040.707305012!2d101.41510489415944!3d15.758351946110096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31157a4d736a1e5f%3A0xb03bb0c9e2fe62be!2z67Kg7Yq464Ko!5e0!3m2!1sko!2skr!4v1574437670849!5m2!1sko!2skr', 'pb=!1m18!1m12!1m3!1d29793.980384379247!2d105.81945410425034!3d21.022778763209775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2z67Kg7Yq464KoIEhhbm9pLCDtmLjslYjrgbzsl6Ag7ZWY64W47J20!5e0!3m2!1sko!2skr!4v1574437707766!5m2!1sko!2skr', 'pb=!1m18!1m12!1m3!1d501725.3382536588!2d106.4150395052842!3d10.75534107330081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529292e8d3dd1%3A0xf15f5aad773c112b!2z67Kg7Yq464KoIEhvIENoaSBNaW5oIENpdHksIO2YuOy5mOuvvA!5e0!3m2!1sko!2skr!4v1574437752950!5m2!1sko!2skr', 'pb=!1m18!1m12!1m3!1d61349.62126488034!2d108.17168657577378!3d16.047248394438395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219c792252a13%3A0xfc14e3a044436487!2z67Kg7Yq464KoIOuLpOuCrSDtlZjsnbTsqYzsmrAg6rWwIOuLpOuCrQ!5e0!3m2!1sko!2skr!4v1574437770757!5m2!1sko!2skr\r\n', 'Vietnam', 'Hanoi', 'Hochiminh', 'Danang');

-- --------------------------------------------------------

--
-- 테이블 구조 `members`
--

CREATE TABLE `members` (
  `num` int(11) NOT NULL,
  `id` char(15) NOT NULL,
  `pass` char(15) NOT NULL,
  `name` char(10) NOT NULL,
  `address` char(40) DEFAULT NULL,
  `phone` char(20) DEFAULT NULL,
  `email` char(80) DEFAULT NULL,
  `regist_day` char(20) DEFAULT NULL,
  `auth` int(11) DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `nickname` varchar(80) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `members`
--

INSERT INTO `members` (`num`, `id`, `pass`, `name`, `address`, `phone`, `email`, `regist_day`, `auth`, `point`, `nickname`, `ip`) VALUES
(5, 'user1', '123123', '인호', '123123', '123123123123', '123123@naver.com', '2019-11-10 (04:37)', 2, 1100, '인호', NULL),
(7, 'qwe777', '12345', 'qqqq', 'qqqqqq', 'qqqqqqq', 'qqqq@naver.com', '2019-11-18 (15:20)', 1, 300, 'qqqq', NULL),
(8, '12322', '12345', '12345', '12345', '12345', 'qweqwe@naver.com', '2019-11-18 (15:21)', 1, 0, '12355', NULL),
(9, 'check', '12345', '김종구', '종구네 아파트', '11111111111111', 'googoog@naver.com', '2019-11-20 (01:14)', 1, 200, '종구왔다', NULL),
(10, 'shsj', '12345', 'dddd', 'gsuhnn', '11010001', 'svsub@naver.com', '2019-11-20 (14:51)', 1, 0, '1235', NULL),
(11, 'admin', '12345', '관리자', NULL, NULL, NULL, NULL, 5, 9999, '관리자', NULL),
(12, 'korean', '12345', '장동건', '대구 중구 삼덕동', '010-7897-4546', 'donggun@naver.com', '2019-11-24 (14:33)', 1, 800, '동건VV', NULL),
(13, 'japan', '12345', '다나카', '대구 남구 봉덕동', '010-7978-1613', 'woook@naver.com', '2019-11-24 (14:34)', 1, 0, '오하이요', NULL),
(14, 'kkbb123', '12345', '김장훈', '울산 남구 삼산동', '010-7894-6484', 'asdasd11@naver.com', '2019-11-24 (14:35)', 1, 0, 'MASETERd', NULL),
(15, 'Otral', 'asd1234', '이름들어감', '부산 남구 남포동', '010-4946-1315', 'happy123@naver.com', '2019-11-24 (14:35)', 1, 0, 'wksoo', NULL),
(16, 'checklist', '123123', '체크중', '대구 남구', '010-7777-7777', 'chekc@naver.com', '2019-11-25 (04:49)', 1, 0, '체크중', NULL),
(17, 'qweqwe', 'qweqwe', 'qweqwe', 'qweqweqwe', '111-11111-1111', 'qweqwe@naver.com', '2019-11-25 (10:37)', 2, 222, 'qweqwe', NULL),
(18, 'kim88', '8888', '김연우', '대구광역시 달성군', '010-7878-4647', 'woo1313@gmail.com', '2019-11-25 (14:32)', 1, 200, '봉덕동불주먹', NULL);

-- --------------------------------------------------------

--
-- 테이블 구조 `message`
--

CREATE TABLE `message` (
  `num` int(11) NOT NULL,
  `send_id` char(20) NOT NULL,
  `rv_id` char(20) NOT NULL,
  `content` text NOT NULL,
  `regist_day` char(20) DEFAULT NULL,
  `checking` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `message`
--

INSERT INTO `message` (`num`, `send_id`, `rv_id`, `content`, `regist_day`, `checking`) VALUES
(1, 'qweqwe', 'user1', '안녕하세요.', NULL, 1),
(2, 'qweqwe', 'user1', '안녕하세요.', NULL, 1),
(3, 'user1', 'qweqwe', '네~안녕하세요.', NULL, 0),
(4, '123', '123', '123', NULL, 1),
(5, 'user1', 'qweqwe', '하이', '2019-11-25 (10:48)', 0),
(6, 'user1', 'user1', '나한테보내기', '2019-11-25 (11:00)', 0),
(7, 'kim88', 'admin', '문의드립니다.', '2019-11-25 (14:33)', 0),
(8, 'kim88', 'admin', '문의드려요', '2019-11-25 (14:34)', 0);

-- --------------------------------------------------------

--
-- 테이블 구조 `usboard`
--

CREATE TABLE `usboard` (
  `num` int(11) NOT NULL,
  `id` char(15) NOT NULL,
  `name` char(10) NOT NULL,
  `subject` char(200) NOT NULL,
  `content` text NOT NULL,
  `regist_day` char(20) NOT NULL,
  `recommand` int(11) DEFAULT 0,
  `hit` int(11) NOT NULL,
  `file_name` char(40) DEFAULT NULL,
  `file_type` char(40) DEFAULT NULL,
  `file_copied` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `usboard`
--

INSERT INTO `usboard` (`num`, `id`, `name`, `subject`, `content`, `regist_day`, `recommand`, `hit`, `file_name`, `file_type`, `file_copied`) VALUES
(1, 'check', '김종구', '미국에 글남깁니다', 'ㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋ', '2019-11-20 (01:15)', 0, 6, '', '', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `vietnamboard`
--

CREATE TABLE `vietnamboard` (
  `num` int(11) NOT NULL,
  `id` char(15) NOT NULL,
  `name` char(10) NOT NULL,
  `subject` char(200) NOT NULL,
  `content` text NOT NULL,
  `regist_day` char(20) NOT NULL,
  `recommand` int(11) DEFAULT 0,
  `hit` int(11) NOT NULL,
  `file_name` char(40) DEFAULT NULL,
  `file_type` char(40) DEFAULT NULL,
  `file_copied` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 테이블 구조 `world`
--

CREATE TABLE `world` (
  `id` varchar(3) NOT NULL,
  `korean` varchar(20) NOT NULL,
  `english` varchar(20) NOT NULL,
  `language` varchar(30) NOT NULL,
  `population` int(11) NOT NULL,
  `capital` varchar(20) NOT NULL,
  `anthem` varchar(20) NOT NULL,
  `anthemfile` varchar(50) NOT NULL,
  `flag` varchar(50) NOT NULL,
  `plug` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `world`
--

INSERT INTO `world` (`id`, `korean`, `english`, `language`, `population`, `capital`, `anthem`, `anthemfile`, `flag`, `plug`) VALUES
('AU', '호주', 'Australia', '영어', 25000000, '캔버라', '굳세게 전진하라', './music/australiasong.ogg', './images/australia.png', '240V'),
('CA', '캐나다', 'Canada', '영어, 불어', 37000000, '오타와', 'O-Canada', './music/canadasong.ogg', './images/canada.png', '110V'),
('CN', '중국', 'China', '중국어', 1430000000, '베이징', '의용군 행진곡', './music/chinasong.ogg', './images/china.png', '220V'),
('JP', '일본', 'Japan', '일본어', 38000000, '도쿄', '기미가요', './music/japansong.ogg', './images/japan.png', '110V'),
('KR', '대한민국', 'Republic of Korea', '한국어', 50000000, 'Seoul', '애국가', './music/koreasong.ogg', './images/korea.png', '220V'),
('US', '미국', 'United States of Ame', '영어', 330000000, '워싱턴 D.C', '별이 빛나는 깃발', './music/americasong.ogg', './images/america.png', '110V'),
('VN', '베트남', 'VIET NAM', '베트남어', 97000000, '하노이', '진군가', './music/vietnamsong.ogg', './images/vietnam.png', '220V');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`num`);

--
-- 테이블의 인덱스 `canadaboard`
--
ALTER TABLE `canadaboard`
  ADD PRIMARY KEY (`num`,`id`);

--
-- 테이블의 인덱스 `chinaboard`
--
ALTER TABLE `chinaboard`
  ADD PRIMARY KEY (`num`);

--
-- 테이블의 인덱스 `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`num`);

--
-- 테이블의 인덱스 `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `iso` (`iso`);

--
-- 테이블의 인덱스 `iframeboard`
--
ALTER TABLE `iframeboard`
  ADD PRIMARY KEY (`num`);

--
-- 테이블의 인덱스 `japanboard`
--
ALTER TABLE `japanboard`
  ADD PRIMARY KEY (`num`,`id`);

--
-- 테이블의 인덱스 `koreaboard`
--
ALTER TABLE `koreaboard`
  ADD PRIMARY KEY (`num`,`id`);

--
-- 테이블의 인덱스 `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`num`),
  ADD UNIQUE KEY `UK_members` (`id`);

--
-- 테이블의 인덱스 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`num`);

--
-- 테이블의 인덱스 `usboard`
--
ALTER TABLE `usboard`
  ADD PRIMARY KEY (`num`,`id`);

--
-- 테이블의 인덱스 `vietnamboard`
--
ALTER TABLE `vietnamboard`
  ADD PRIMARY KEY (`num`);

--
-- 테이블의 인덱스 `world`
--
ALTER TABLE `world`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `korean` (`korean`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `canadaboard`
--
ALTER TABLE `canadaboard`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- 테이블의 AUTO_INCREMENT `chinaboard`
--
ALTER TABLE `chinaboard`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `comment`
--
ALTER TABLE `comment`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- 테이블의 AUTO_INCREMENT `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- 테이블의 AUTO_INCREMENT `iframeboard`
--
ALTER TABLE `iframeboard`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 테이블의 AUTO_INCREMENT `japanboard`
--
ALTER TABLE `japanboard`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `koreaboard`
--
ALTER TABLE `koreaboard`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 테이블의 AUTO_INCREMENT `members`
--
ALTER TABLE `members`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 테이블의 AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 테이블의 AUTO_INCREMENT `usboard`
--
ALTER TABLE `usboard`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 테이블의 AUTO_INCREMENT `vietnamboard`
--
ALTER TABLE `vietnamboard`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
