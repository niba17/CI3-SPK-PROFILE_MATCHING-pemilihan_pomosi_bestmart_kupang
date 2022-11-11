-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 05:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk-promosi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'Best Mart', 'belladwaprl1205@gmail.com', '01cfcd4f6b8770febfb40cb906715822');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `kode_barang` varchar(128) NOT NULL,
  `modal` varchar(128) NOT NULL,
  `bobot_modal` int(11) NOT NULL,
  `penjualan` varchar(128) NOT NULL,
  `bobot_penjualan` int(11) NOT NULL,
  `waktu` varchar(128) NOT NULL,
  `bobot_waktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `kode_barang`, `modal`, `bobot_modal`, `penjualan`, `bobot_penjualan`, `waktu`, `bobot_waktu`) VALUES
(49, 'Buavita Mini Guava 125 ML', '1410724', '3275150', 2, '4173050', 3, '31', 1),
(50, 'Buavita Manggo 250 ML', '1410465', '975112', 5, '2384000', 2, '7', 4),
(51, 'Buavita Lychee 250 ML', '1410231', '225101', 5, '542037', 1, '7', 4),
(52, 'Fair And Lovely Multivitamin 9', '1591255', '3125000', 2, '1585000', 1, '30', 1),
(53, 'Fair And Lovely Multivitamin 25', '1591254', '1187350', 4, '2500707', 2, '22', 2),
(54, 'Ponds Powder Pinkish White 150', '1592795', '3876990', 2, '5765970', 4, '15', 3),
(55, 'Ponds Age Miracle Wrinkle', '1591968', '4343096', 1, '4997089', 4, '17', 3),
(56, 'Zwitsal BB Nat Hair And Body', '1650879', '734418', 5, '874991', 1, '5', 5),
(57, 'Zwitsal BB Hair Lotion Avks', '1651186', '494040', 5, '580117', 1, '7', 4),
(58, 'Zwitsal BB Bath Classic 300ML', '1651213', '982430', 5, '1485529', 1, '12', 4),
(59, 'Lifebuoy Bw Mildcare Btl 100', '2310739', '1056079', 4, '4235679', 3, '20', 2),
(60, 'Lifebuoy Bw Cool Fresh Btl', '2310767', '2098088', 3, '6778975', 5, '30', 1),
(61, 'Lifebuoy Bw total 10 Btl 100', '2310754', '525991', 5, '1775808', 2, '31', 1),
(62, 'Pepsodent Sg Dc Sensitive', '2312701', '1250253', 4, '2175760', 2, '14', 3),
(63, 'Pepsodent Sg Doub Care Sesns', '2313408', '6787889', 1, '8000710', 5, '30', 1),
(64, 'Bango Manis Reff 575 ML', '1130059', '21202', 5, '763276', 1, '5', 5),
(65, 'Bango Kecap Manis Reff 220', '1130118', '4000000', 1, '1185000', 1, '24', 2),
(66, 'Bango Recap Manis Btl 275 Ml', '1130061', '3185000', 2, '3870000', 3, '15', 2),
(67, 'Sarimurni 20P 36Gr ', '1411025', '397152', 5, '528000', 1, '7', 4),
(68, 'Sariwangi Teh Tarik 3In1 92G', '1411306', '3850000', 2, '4200000', 3, '20', 2),
(69, 'Ponds Wb Sun Protec Spf15 ', '1591929', '120450', 5, '143400', 1, '1', 5),
(70, 'Pondswb Cream Normal Skin ', '1591958', '107472', 5, '125400', 1, '2', 5),
(71, 'Ponds Cleansing Milk 150 Ml ', '1591348', '3581950', 2, '3867950', 3, '15', 3),
(72, 'Zwitsal Deterjen Cair G Tea ', '1651473', '50604', 5, '59700', 1, '1', 5),
(73, 'Zwitsal Bb Shp Nat Avks 450 ', '1651203', '2153000', 3, '2872000', 2, '19', 2),
(74, 'Zwitsal Bb Oil Aloe Vera 100 ', '1650532', '1875000', 4, '2487000', 2, '20', 2),
(75, 'Zwitsal Natural Basic Pack', '1651414', '1388000', 4, '1890000', 2, '19', 2),
(76, 'Molto Pewangi Edp K-Romance ', '2300670', '3000000', 2, '3200000', 2, '20', 2),
(77, 'Rinso Anti Noda Acti Fresh ', '2300680', '528930', 5, '627000', 1, '2', 5),
(78, 'Rinso Deterjen Anti Noda ', '2300665', '3850000', 2, '4513000', 3, '21', 2),
(79, 'Rinso Molto Deterjen Perfume', '2300609', '457128', 5, '525600', 1, '4', 5),
(80, 'Rinso Molto Deterjen 25Ogr ', '2300588', '4000000', 1, '4125000', 3, '25', 1),
(81, 'Pepsodent Sg Triple Medium ', '2313155', '4328000', 1, '4975000', 4, '15', 3),
(82, 'Ponds Foam Clear Solutions ', '2314179', '802750', 5, '945000', 1, '7', 4),
(83, 'Clear Men Shp Cool Menthol ', '2315643', '3125750', 2, '4175000', 3, '14', 3),
(84, 'Lux Bw Velvet Touch Reff 450', '2313004', '406106', 5, '473100', 1, '12', 4),
(85, 'Lux Soap Magical Spell 85 Gr', '2312935', '198576', 5, '252000', 1, '1', 5),
(86, 'Lux Soap White Impress 85Gr ', '2315003', '132384', 5, '168000', 1, '12', 4),
(87, 'Citra Tune Up Lot Rice ', '2316138', '1300200', 4, '1554000', 1, '16', 3),
(88, 'Rexona Men Deo Invisibile Dry', '2314174', '194436', 5, '227400', 1, '1', 5),
(89, 'Ponds Foam Son Dullness ', '2314166', '3000000', 2, '3185000', 2, '20', 2),
(90, 'Pepsodent Sg Triple Clean ', '2313159', '3000000', 2, '3200000', 2, '12', 4),
(91, 'Pepsodent Sg Triple Clean ', '2313156', '67368', 5, '86400', 1, '13', 3),
(92, 'Ponds Men Foam Energy 100 Gr', '2312004', '309084', 5, '354000', 1, '9', 4),
(93, 'Close Up Pg Deep Action 160 ', '2310931', '3000000', 2, '3513000', 3, '18', 3),
(94, 'Close Up Pg Deep Action 110 ', '2310930', '477504', 5, '552000', 1, '10', 4),
(95, 'Close Up Pg Deep Action 65 ', '2310932', '283680', 5, '336000', 1, '11', 4),
(96, 'Lifebuoy Bw Total10 Btl 500 ', '2312340', '3900000', 2, '4375850', 3, '18', 3),
(97, 'Lifebuoy Bw Mildcare 500 Ml ', '2312168', '203538', 5, '225000', 1, '1', 5),
(98, 'Vaseline Hbl Triple Spt 42', '2311054', '2670000', 3, '3010000', 2, '24', 2),
(99, 'Vaseline Hbl Uv Light 100Ml', '2310893', '372128', 5, '432000', 1, '10', 4),
(100, 'Vaseline Hbl Cocoaradiant', '2310882', '2379760', 3, '2792000', 2, '11', 4),
(101, 'Vaseline Hbl Triple Spf24 ', '2311055', '2082290', 3, '2443000', 2, '13', 3),
(102, 'Axe Body Spray Dark 150 Ml ', '2311056', '1846875', 4, '2167500', 2, '5', 5),
(103, 'Sunsilk Shp Black Shine ', '2314142', '4006920', 4, '4548000', 3, '6', 5),
(104, 'Citra Hazeline Pearl Cream ', '2314705', '1294200', 4, '1500000', 1, '7', 4),
(105, 'Dove Shp Ttl Hairfall 160 Ml', '2313142', '412700', 5, '478000', 1, '9', 4),
(106, 'Dove Cond Ttl Damage 160 Ml ', '2313013', '1275000', 4, '1785000', 2, '23', 2),
(108, 'Dove Shp Ttl Damage 160 Ml ', '2313170', '825520', 5, '996000', 1, '7', 4),
(109, 'Dove Shp Ttl Damage 320 M ', '2313331', '1722015', 4, '2020500', 2, '3', 5),
(110, 'Fair&Lovely Facial Foam 50Gr', '2314165', '396432', 5, '464400', 1, '6', 5),
(111, 'Rexona Women Advanced 9Gr ', '2313727', '1980000', 4, '2484000', 2, '20', 2),
(112, 'Rexona Men Ice Cool 9Gr 3`S ', '2310989', '1284926', 4, '1538700', 1, '30', 1),
(113, 'Vaseline Repairing Jelly ', '2315283', '1941420', 4, '2190000', 2, '7', 4),
(114, 'Citra Fm Cream Pearly Wht Uv', '2315161', '175296', 5, '210000', 1, '8', 4),
(115, 'Citra Sakura Powder Cream ', '2315339', '248336', 5, '280500', 1, '1', 5),
(116, 'Pepsodent Sg Bamboo Salt', '2315304', '3575000', 2, '4187098', 3, '16', 3),
(117, 'Citra Ff Green Tea Anti', '2315384', '1054650', 4, '1245000', 1, '2', 5),
(118, 'Tresemme Shp Hair Fall Btl', '2315515', '243133', 5, '280500', 1, '1', 5),
(119, 'Tresemme Cond Keratin Smooth', '2315517', '220040', 5, '259000', 1, '3', 5),
(120, 'Tresemme Shp Scalp Care', '2315654', '940286', 5, '1078700', 1, '3', 5),
(121, 'Sunsilk Hijab Shp ', '2315301', '4185730', 1, '4485000', 4, '13', 3),
(122, 'Citra Hbl Golden Coconut Oil ', '2315635', '470799', 5, '564300', 1, '5', 5),
(123, 'Citra Hbl Avocado&Honey', '2315614', '287970', 5, '333500', 1, '2', 5),
(124, 'Clear Men Shp Complete Care ', '2315740', '3275080', 2, '3573880', 3, '15', 3),
(125, 'Clear Men Shp Cool Sport ', '2315806', '408770', 5, '469000', 1, '1', 5),
(126, 'Clear Shp Anti Ketombe ', '2315489', '412200', 5, '490500', 1, '5', 5),
(127, 'Clear Shp Ak Ice Cool ', '2315490', '366400', 5, '436000', 1, '2', 5),
(128, 'Axe Clean Cut Look Gel 75Ml ', '2315652', '591000', 5, '714000', 1, '7', 4),
(129, 'Axe Pomade Clea Cut Look ', '2315981', '964548', 5, '1112400', 1, '12', 4),
(131, 'Axe Bw Dark Temptation ', '2315606', '121352', 5, '148500', 1, '1', 5),
(132, 'Citra Hbl Sunflower ', '2315741', '2998350', 3, '3435000', 3, '9', 4),
(133, 'Citra Soap Aloe Vera 70G', '2315589', '1623000', 4, '2467000', 2, '20', 2),
(134, 'Citra Soap Lulur Pearly ', '2315523', '269424', 5, '331200', 1, '5', 5),
(135, 'Citra Soap Lulur Natural ', '2315522', '269424', 5, '331200', 1, '3', 5),
(136, 'Ponds Ff Tone Up Instabright', '2315531', '2995590', 3, '3575000', 3, '2', 5),
(137, 'Sunsilk Shp Soft&Sm 10Ml', '2314082', '4483000', 1, '4889000', 4, '18', 3),
(138, 'Sunsilk Shp Hijab Anti ', '2314124', '522120', 5, '598500', 1, '7', 4),
(139, 'Sunsilk Shp Soft&Smooth 70Ml', '2314080', '2107890', 3, '2673000', 2, '19', 2),
(141, 'Rexona Men Quantum 50 Ml', '2313894', '1708288', 4, '2035200', 2, '20', 2),
(142, 'Rexona Ro Dreamy White 40Ml ', '2315594', '533205', 5, '625500', 1, '4', 5),
(143, 'Rexona Ro Glowing White 40Ml ', '2315593', '2251310', 3, '2641000', 2, '6', 5),
(144, 'Axe Ro Anti Bac Fresh Amber ', '2310007', '768300', 5, '895000', 1, '3', 5),
(145, 'Rexona Men Ferrari V8 50 Ml ', '2313909', '895388', 5, '1065300', 1, '2', 5),
(146, 'Dove Shp Scalp Strength ', '2315920', '1580000', 4, '2125100', 2, '22', 2),
(147, 'Citra Face&Body Gel Lot Aloee', '2316013', '2265000', 3, '2765000', 2, '18', 2),
(148, 'Rexona Dry Serum Fresh Rose ', '2316111', '777816', 5, '945000', 1, '1', 5),
(149, 'Sunsilk Shp Thick&Long Rtg ', '2315736', '183200', 5, '210000', 1, '2', 5),
(150, 'Ponds Micellar Water Bright ', '2316064', '1504686', 4, '1802300', 2, '11', 4),
(151, 'Ponds Micellar Water D-Toxx ', '2316063', '426702', 5, '511100', 1, '1', 5),
(152, 'Fair&Lovely Masker Serum ', '2316110', '177288', 5, '213600', 1, '7', 4),
(153, 'Lifebuoy Shp Anti Dandruf 10 ', '2311533', '177280', 5, '220000', 1, '6', 5),
(154, 'Lifebuoy Shp Anti Dandruf 70 ', '2312286', '82740', 5, '94800', 1, '3', 5),
(155, 'Lifebuoy Shp Strong&Shiny 70', '2312344', '82740', 5, '94800', 1, '5', 5),
(156, 'Lifebuoy Shp Strong&Shiny ', '2312809', '793410', 5, '927000', 1, '6', 5),
(157, 'Citra Bw Natural White Reff ', '2310963', '615945', 5, '722700', 1, '2', 5),
(158, 'Tresemme Keratin Smooth Rtg ', '2316007', '183200', 5, '218000', 1, '12', 4),
(159, 'Dove Shp Perawatan Rambut ', '2316032', '357240', 5, '425100', 1, '7', 4),
(160, 'Clear Shp Ad Ice Cool ', '2316140', '47574', 5, '56700', 1, '15', 3),
(161, 'Sunsilk Shp Hijab Hairfall ', '2314128', '1789000', 4, '2385000', 2, '19', 2),
(162, 'Ponds Clear Solutions S&C ', '2311856', '797850', 5, '940500', 1, '10', 4),
(163, 'Lifebuoy Soap Matcha 75G', '2315707', '4901000', 1, '5385000', 4, '18', 3),
(164, 'Fair&Lovely Facial Foam 100 ', '2314177', '153600', 5, '805632', 1, '3', 5),
(165, 'Rexona Women Powder Dry 50 ', '2313949', '298176', 5, '381600', 1, '7', 4),
(166, 'Rexona Women Free Spirit 50 ', '2313945', '298176', 5, '381600', 1, '3', 5),
(167, 'Sunlight Jeruk Nipis Reff ', '2320854', '1467650', 4, '1745000', 2, '6', 5),
(168, 'Sunlight Jeruk Nipis 100 Reff', '2320981', '2000000', 3, '234576', 2, '20', 2),
(169, 'Sunlight Higienis ', '2320971', '113472', 5, '144000', 1, '1', 5),
(170, 'Rexona Men Ice Cool 50 Ml', '2313893', '4003800', 4, '4770000', 3, '17', 3);

-- --------------------------------------------------------

--
-- Table structure for table `perhitungan_pm`
--

CREATE TABLE `perhitungan_pm` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `kode_barang` varchar(128) NOT NULL,
  `modal` varchar(128) NOT NULL,
  `bobot_modal` int(11) NOT NULL,
  `penjualan` varchar(128) NOT NULL,
  `bobot_penjualan` int(11) NOT NULL,
  `waktu` varchar(128) NOT NULL,
  `bobot_waktu` int(11) NOT NULL,
  `GAP_M` int(11) NOT NULL,
  `GAP_P` int(11) NOT NULL,
  `GAP_W` int(11) NOT NULL,
  `GAP_M_fix` double NOT NULL,
  `GAP_P_fix` double NOT NULL,
  `GAP_W_fix` double NOT NULL,
  `NCF` double NOT NULL,
  `NSF` double NOT NULL,
  `NI` double NOT NULL,
  `hasil` double NOT NULL,
  `kesimpulan` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `presentasi_NCF/NSF` varchar(128) NOT NULL,
  `presentasi_NCF2/NSF2/NI` varchar(128) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `id_relasi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perhitungan_pm`
--

INSERT INTO `perhitungan_pm` (`id_barang`, `nama_barang`, `kode_barang`, `modal`, `bobot_modal`, `penjualan`, `bobot_penjualan`, `waktu`, `bobot_waktu`, `GAP_M`, `GAP_P`, `GAP_W`, `GAP_M_fix`, `GAP_P_fix`, `GAP_W_fix`, `NCF`, `NSF`, `NI`, `hasil`, `kesimpulan`, `keterangan`, `presentasi_NCF/NSF`, `presentasi_NCF2/NSF2/NI`, `tanggal`, `id_relasi`) VALUES
(9384, 'Buavita Mini Guava 125 ML', '1410724', '3275150', 2, '4173050', 3, '31', 1, -3, -2, -4, 2, 3, 1, 2.5, 1, 1.945, 1.8679, 'Discount', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9385, 'Buavita Manggo 250 ML', '1410465', '975112', 5, '2384000', 2, '7', 4, 0, -3, -1, 5, 2, 4, 3.5, 4, 3.685, 3.7107, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9386, 'Buavita Lychee 250 ML', '1410231', '225101', 5, '542037', 1, '7', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9387, 'Fair And Lovely Multivitamin 9', '1591255', '3125000', 2, '1585000', 1, '30', 1, -3, -4, -4, 2, 1, 1, 1.5, 1, 1.315, 1.2893, 'Listing', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9388, 'Fair And Lovely Multivitamin 25', '1591254', '1187350', 4, '2500707', 2, '22', 2, -1, -3, -3, 4, 2, 2, 3, 2, 2.63, 2.5786, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9389, 'Ponds Powder Pinkish White 150', '1592795', '3876990', 2, '5765970', 4, '15', 3, -3, -1, -2, 2, 4, 3, 3, 3, 3, 3, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9390, 'Ponds Age Miracle Wrinkle', '1591968', '4343096', 1, '4997089', 4, '17', 3, -4, -1, -2, 1, 4, 3, 2.5, 3, 2.685, 2.7107, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9391, 'Zwitsal BB Nat Hair And Body', '1650879', '734418', 5, '874991', 1, '5', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9392, 'Zwitsal BB Hair Lotion Avks', '1651186', '494040', 5, '580117', 1, '7', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9393, 'Zwitsal BB Bath Classic 300ML', '1651213', '982430', 5, '1485529', 1, '12', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9394, 'Lifebuoy Bw Mildcare Btl 100', '2310739', '1056079', 4, '4235679', 3, '20', 2, -1, -2, -3, 4, 3, 2, 3.5, 2, 2.945, 2.8679, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9395, 'Lifebuoy Bw Cool Fresh Btl', '2310767', '2098088', 3, '6778975', 5, '30', 1, -2, 0, -4, 3, 5, 1, 4, 1, 2.89, 2.7358, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9396, 'Lifebuoy Bw total 10 Btl 100', '2310754', '525991', 5, '1775808', 2, '31', 1, 0, -3, -4, 5, 2, 1, 3.5, 1, 2.575, 2.4465, 'Discount', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9397, 'Pepsodent Sg Dc Sensitive', '2312701', '1250253', 4, '2175760', 2, '14', 3, -1, -3, -2, 4, 2, 3, 3, 3, 3, 3, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9398, 'Pepsodent Sg Doub Care Sesns', '2313408', '6787889', 1, '8000710', 5, '30', 1, -4, 0, -4, 1, 5, 1, 3, 1, 2.26, 2.1572, 'Discount', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9399, 'Bango Manis Reff 575 ML', '1130059', '21202', 5, '763276', 1, '5', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9400, 'Bango Kecap Manis Reff 220', '1130118', '4000000', 1, '1185000', 1, '24', 2, -4, -4, -3, 1, 1, 2, 1, 2, 1.37, 1.4214, 'Listing', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9401, 'Bango Recap Manis Btl 275 Ml', '1130061', '3185000', 2, '3870000', 3, '15', 2, -3, -2, -3, 2, 3, 2, 2.5, 2, 2.315, 2.2893, 'Discount', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9402, 'Sarimurni 20P 36Gr ', '1411025', '397152', 5, '528000', 1, '7', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9403, 'Sariwangi Teh Tarik 3In1 92G', '1411306', '3850000', 2, '4200000', 3, '20', 2, -3, -2, -3, 2, 3, 2, 2.5, 2, 2.315, 2.2893, 'Discount', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9404, 'Ponds Wb Sun Protec Spf15 ', '1591929', '120450', 5, '143400', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9405, 'Pondswb Cream Normal Skin ', '1591958', '107472', 5, '125400', 1, '2', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9406, 'Ponds Cleansing Milk 150 Ml ', '1591348', '3581950', 2, '3867950', 3, '15', 3, -3, -2, -2, 2, 3, 3, 2.5, 3, 2.685, 2.7107, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9407, 'Zwitsal Deterjen Cair G Tea ', '1651473', '50604', 5, '59700', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9408, 'Zwitsal Bb Shp Nat Avks 450 ', '1651203', '2153000', 3, '2872000', 2, '19', 2, -2, -3, -3, 3, 2, 2, 2.5, 2, 2.315, 2.2893, 'Discount', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9409, 'Zwitsal Bb Oil Aloe Vera 100 ', '1650532', '1875000', 4, '2487000', 2, '20', 2, -1, -3, -3, 4, 2, 2, 3, 2, 2.63, 2.5786, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9410, 'Zwitsal Natural Basic Pack', '1651414', '1388000', 4, '1890000', 2, '19', 2, -1, -3, -3, 4, 2, 2, 3, 2, 2.63, 2.5786, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9411, 'Molto Pewangi Edp K-Romance ', '2300670', '3000000', 2, '3200000', 2, '20', 2, -3, -3, -3, 2, 2, 2, 2, 2, 2, 2, 'Discount', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9412, 'Rinso Anti Noda Acti Fresh ', '2300680', '528930', 5, '627000', 1, '2', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9413, 'Rinso Deterjen Anti Noda ', '2300665', '3850000', 2, '4513000', 3, '21', 2, -3, -2, -3, 2, 3, 2, 2.5, 2, 2.315, 2.2893, 'Discount', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9414, 'Rinso Molto Deterjen Perfume', '2300609', '457128', 5, '525600', 1, '4', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9415, 'Rinso Molto Deterjen 25Ogr ', '2300588', '4000000', 1, '4125000', 3, '25', 1, -4, -2, -4, 1, 3, 1, 2, 1, 1.63, 1.5786, 'Discount', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9416, 'Pepsodent Sg Triple Medium ', '2313155', '4328000', 1, '4975000', 4, '15', 3, -4, -1, -2, 1, 4, 3, 2.5, 3, 2.685, 2.7107, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9417, 'Ponds Foam Clear Solutions ', '2314179', '802750', 5, '945000', 1, '7', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9418, 'Clear Men Shp Cool Menthol ', '2315643', '3125750', 2, '4175000', 3, '14', 3, -3, -2, -2, 2, 3, 3, 2.5, 3, 2.685, 2.7107, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9419, 'Lux Bw Velvet Touch Reff 450', '2313004', '406106', 5, '473100', 1, '12', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9420, 'Lux Soap Magical Spell 85 Gr', '2312935', '198576', 5, '252000', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9421, 'Lux Soap White Impress 85Gr ', '2315003', '132384', 5, '168000', 1, '12', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9422, 'Citra Tune Up Lot Rice ', '2316138', '1300200', 4, '1554000', 1, '16', 3, -1, -4, -2, 4, 1, 3, 2.5, 3, 2.685, 2.7107, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9423, 'Rexona Men Deo Invisibile Dry', '2314174', '194436', 5, '227400', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9424, 'Ponds Foam Son Dullness ', '2314166', '3000000', 2, '3185000', 2, '20', 2, -3, -3, -3, 2, 2, 2, 2, 2, 2, 2, 'Discount', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9425, 'Pepsodent Sg Triple Clean ', '2313159', '3000000', 2, '3200000', 2, '12', 4, -3, -3, -1, 2, 2, 4, 2, 4, 2.74, 2.8428, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9426, 'Pepsodent Sg Triple Clean ', '2313156', '67368', 5, '86400', 1, '13', 3, 0, -4, -2, 5, 1, 3, 3, 3, 3, 3, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9427, 'Ponds Men Foam Energy 100 Gr', '2312004', '309084', 5, '354000', 1, '9', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9428, 'Close Up Pg Deep Action 160 ', '2310931', '3000000', 2, '3513000', 3, '18', 3, -3, -2, -2, 2, 3, 3, 2.5, 3, 2.685, 2.7107, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9429, 'Close Up Pg Deep Action 110 ', '2310930', '477504', 5, '552000', 1, '10', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9430, 'Close Up Pg Deep Action 65 ', '2310932', '283680', 5, '336000', 1, '11', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9431, 'Lifebuoy Bw Total10 Btl 500 ', '2312340', '3900000', 2, '4375850', 3, '18', 3, -3, -2, -2, 2, 3, 3, 2.5, 3, 2.685, 2.7107, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9432, 'Lifebuoy Bw Mildcare 500 Ml ', '2312168', '203538', 5, '225000', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9433, 'Vaseline Hbl Triple Spt 42', '2311054', '2670000', 3, '3010000', 2, '24', 2, -2, -3, -3, 3, 2, 2, 2.5, 2, 2.315, 2.2893, 'Discount', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9434, 'Vaseline Hbl Uv Light 100Ml', '2310893', '372128', 5, '432000', 1, '10', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9435, 'Vaseline Hbl Cocoaradiant', '2310882', '2379760', 3, '2792000', 2, '11', 4, -2, -3, -1, 3, 2, 4, 2.5, 4, 3.055, 3.1321, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9436, 'Vaseline Hbl Triple Spf24 ', '2311055', '2082290', 3, '2443000', 2, '13', 3, -2, -3, -2, 3, 2, 3, 2.5, 3, 2.685, 2.7107, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9437, 'Axe Body Spray Dark 150 Ml ', '2311056', '1846875', 4, '2167500', 2, '5', 5, -1, -3, 0, 4, 2, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9438, 'Sunsilk Shp Black Shine ', '2314142', '4006920', 4, '4548000', 3, '6', 5, -1, -2, 0, 4, 3, 5, 3.5, 5, 4.055, 4.1321, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9439, 'Citra Hazeline Pearl Cream ', '2314705', '1294200', 4, '1500000', 1, '7', 4, -1, -4, -1, 4, 1, 4, 2.5, 4, 3.055, 3.1321, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9440, 'Dove Shp Ttl Hairfall 160 Ml', '2313142', '412700', 5, '478000', 1, '9', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9441, 'Dove Cond Ttl Damage 160 Ml ', '2313013', '1275000', 4, '1785000', 2, '23', 2, -1, -3, -3, 4, 2, 2, 3, 2, 2.63, 2.5786, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9442, 'Dove Shp Ttl Damage 160 Ml ', '2313170', '825520', 5, '996000', 1, '7', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9443, 'Dove Shp Ttl Damage 320 M ', '2313331', '1722015', 4, '2020500', 2, '3', 5, -1, -3, 0, 4, 2, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9444, 'Fair&Lovely Facial Foam 50Gr', '2314165', '396432', 5, '464400', 1, '6', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9445, 'Rexona Women Advanced 9Gr ', '2313727', '1980000', 4, '2484000', 2, '20', 2, -1, -3, -3, 4, 2, 2, 3, 2, 2.63, 2.5786, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9446, 'Rexona Men Ice Cool 9Gr 3`S ', '2310989', '1284926', 4, '1538700', 1, '30', 1, -1, -4, -4, 4, 1, 1, 2.5, 1, 1.945, 1.8679, 'Discount', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9447, 'Vaseline Repairing Jelly ', '2315283', '1941420', 4, '2190000', 2, '7', 4, -1, -3, -1, 4, 2, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9448, 'Citra Fm Cream Pearly Wht Uv', '2315161', '175296', 5, '210000', 1, '8', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9449, 'Citra Sakura Powder Cream ', '2315339', '248336', 5, '280500', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9450, 'Pepsodent Sg Bamboo Salt', '2315304', '3575000', 2, '4187098', 3, '16', 3, -3, -2, -2, 2, 3, 3, 2.5, 3, 2.685, 2.7107, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9451, 'Citra Ff Green Tea Anti', '2315384', '1054650', 4, '1245000', 1, '2', 5, -1, -4, 0, 4, 1, 5, 2.5, 5, 3.425, 3.5535, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9452, 'Tresemme Shp Hair Fall Btl', '2315515', '243133', 5, '280500', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9453, 'Tresemme Cond Keratin Smooth', '2315517', '220040', 5, '259000', 1, '3', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9454, 'Tresemme Shp Scalp Care', '2315654', '940286', 5, '1078700', 1, '3', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9455, 'Sunsilk Hijab Shp ', '2315301', '4185730', 1, '4485000', 4, '13', 3, -4, -1, -2, 1, 4, 3, 2.5, 3, 2.685, 2.7107, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9456, 'Citra Hbl Golden Coconut Oil ', '2315635', '470799', 5, '564300', 1, '5', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9457, 'Citra Hbl Avocado&Honey', '2315614', '287970', 5, '333500', 1, '2', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9458, 'Clear Men Shp Complete Care ', '2315740', '3275080', 2, '3573880', 3, '15', 3, -3, -2, -2, 2, 3, 3, 2.5, 3, 2.685, 2.7107, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9459, 'Clear Men Shp Cool Sport ', '2315806', '408770', 5, '469000', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9460, 'Clear Shp Anti Ketombe ', '2315489', '412200', 5, '490500', 1, '5', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9461, 'Clear Shp Ak Ice Cool ', '2315490', '366400', 5, '436000', 1, '2', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9462, 'Axe Clean Cut Look Gel 75Ml ', '2315652', '591000', 5, '714000', 1, '7', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9463, 'Axe Pomade Clea Cut Look ', '2315981', '964548', 5, '1112400', 1, '12', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9464, 'Axe Bw Dark Temptation ', '2315606', '121352', 5, '148500', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9465, 'Citra Hbl Sunflower ', '2315741', '2998350', 3, '3435000', 3, '9', 4, -2, -2, -1, 3, 3, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9466, 'Citra Soap Aloe Vera 70G', '2315589', '1623000', 4, '2467000', 2, '20', 2, -1, -3, -3, 4, 2, 2, 3, 2, 2.63, 2.5786, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9467, 'Citra Soap Lulur Pearly ', '2315523', '269424', 5, '331200', 1, '5', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9468, 'Citra Soap Lulur Natural ', '2315522', '269424', 5, '331200', 1, '3', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9469, 'Ponds Ff Tone Up Instabright', '2315531', '2995590', 3, '3575000', 3, '2', 5, -2, -2, 0, 3, 3, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9470, 'Sunsilk Shp Soft&Sm 10Ml', '2314082', '4483000', 1, '4889000', 4, '18', 3, -4, -1, -2, 1, 4, 3, 2.5, 3, 2.685, 2.7107, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9471, 'Sunsilk Shp Hijab Anti ', '2314124', '522120', 5, '598500', 1, '7', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9472, 'Sunsilk Shp Soft&Smooth 70Ml', '2314080', '2107890', 3, '2673000', 2, '19', 2, -2, -3, -3, 3, 2, 2, 2.5, 2, 2.315, 2.2893, 'Discount', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9473, 'Rexona Men Quantum 50 Ml', '2313894', '1708288', 4, '2035200', 2, '20', 2, -1, -3, -3, 4, 2, 2, 3, 2, 2.63, 2.5786, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9474, 'Rexona Ro Dreamy White 40Ml ', '2315594', '533205', 5, '625500', 1, '4', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9475, 'Rexona Ro Glowing White 40Ml ', '2315593', '2251310', 3, '2641000', 2, '6', 5, -2, -3, 0, 3, 2, 5, 2.5, 5, 3.425, 3.5535, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9476, 'Axe Ro Anti Bac Fresh Amber ', '2310007', '768300', 5, '895000', 1, '3', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9477, 'Rexona Men Ferrari V8 50 Ml ', '2313909', '895388', 5, '1065300', 1, '2', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9478, 'Dove Shp Scalp Strength ', '2315920', '1580000', 4, '2125100', 2, '22', 2, -1, -3, -3, 4, 2, 2, 3, 2, 2.63, 2.5786, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9479, 'Citra Face&Body Gel Lot Aloee', '2316013', '2265000', 3, '2765000', 2, '18', 2, -2, -3, -3, 3, 2, 2, 2.5, 2, 2.315, 2.2893, 'Discount', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9480, 'Rexona Dry Serum Fresh Rose ', '2316111', '777816', 5, '945000', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9481, 'Sunsilk Shp Thick&Long Rtg ', '2315736', '183200', 5, '210000', 1, '2', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9482, 'Ponds Micellar Water Bright ', '2316064', '1504686', 4, '1802300', 2, '11', 4, -1, -3, -1, 4, 2, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9483, 'Ponds Micellar Water D-Toxx ', '2316063', '426702', 5, '511100', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9484, 'Fair&Lovely Masker Serum ', '2316110', '177288', 5, '213600', 1, '7', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9485, 'Lifebuoy Shp Anti Dandruf 10 ', '2311533', '177280', 5, '220000', 1, '6', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9486, 'Lifebuoy Shp Anti Dandruf 70 ', '2312286', '82740', 5, '94800', 1, '3', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9487, 'Lifebuoy Shp Strong&Shiny 70', '2312344', '82740', 5, '94800', 1, '5', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9488, 'Lifebuoy Shp Strong&Shiny ', '2312809', '793410', 5, '927000', 1, '6', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9489, 'Citra Bw Natural White Reff ', '2310963', '615945', 5, '722700', 1, '2', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9490, 'Tresemme Keratin Smooth Rtg ', '2316007', '183200', 5, '218000', 1, '12', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9491, 'Dove Shp Perawatan Rambut ', '2316032', '357240', 5, '425100', 1, '7', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9492, 'Clear Shp Ad Ice Cool ', '2316140', '47574', 5, '56700', 1, '15', 3, 0, -4, -2, 5, 1, 3, 3, 3, 3, 3, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9493, 'Sunsilk Shp Hijab Hairfall ', '2314128', '1789000', 4, '2385000', 2, '19', 2, -1, -3, -3, 4, 2, 2, 3, 2, 2.63, 2.5786, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9494, 'Ponds Clear Solutions S&C ', '2311856', '797850', 5, '940500', 1, '10', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9495, 'Lifebuoy Soap Matcha 75G', '2315707', '4901000', 1, '5385000', 4, '18', 3, -4, -1, -2, 1, 4, 3, 2.5, 3, 2.685, 2.7107, 'Mailer', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9496, 'Fair&Lovely Facial Foam 100 ', '2314177', '153600', 5, '805632', 1, '3', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9497, 'Rexona Women Powder Dry 50 ', '2313949', '298176', 5, '381600', 1, '7', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.37, 3.4214, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9498, 'Rexona Women Free Spirit 50 ', '2313945', '298176', 5, '381600', 1, '3', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9499, 'Sunlight Jeruk Nipis Reff ', '2320854', '1467650', 4, '1745000', 2, '6', 5, -1, -3, 0, 4, 2, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9500, 'Sunlight Jeruk Nipis 100 Reff', '2320981', '2000000', 3, '234576', 2, '20', 2, -2, -3, -3, 3, 2, 2, 2.5, 2, 2.315, 2.2893, 'Discount', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9501, 'Sunlight Higienis ', '2320971', '113472', 5, '144000', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.74, 3.8428, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9502, 'Rexona Men Ice Cool 50 Ml', '2313893', '4003800', 4, '4770000', 3, '17', 3, -1, -2, -2, 4, 3, 3, 3.5, 3, 3.315, 3.2893, 'Rafaksi', '', '63/37', '44/34/22', 'Tanggal: 26-Jun-2022<br> Waktu: 16:14:28', NULL),
(9860, 'Buavita Mini Guava 125 ML', '1410724', '3275150', 2, '4173050', 3, '31', 1, -3, -2, -4, 2, 3, 1, 2.5, 1, 2.05, 1.81, 'Discount', 'awduuuu', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9861, 'Buavita Manggo 250 ML', '1410465', '975112', 5, '2384000', 2, '7', 4, 0, -3, -1, 5, 2, 4, 3.5, 4, 3.65, 3.73, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9862, 'Buavita Lychee 250 ML', '1410231', '225101', 5, '542037', 1, '7', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9863, 'Fair And Lovely Multivitamin 9', '1591255', '3125000', 2, '1585000', 1, '30', 1, -3, -4, -4, 2, 1, 1, 1.5, 1, 1.35, 1.27, 'Listing', 'awdtttt', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9864, 'Fair And Lovely Multivitamin 25', '1591254', '1187350', 4, '2500707', 2, '22', 2, -1, -3, -3, 4, 2, 2, 3, 2, 2.7, 2.54, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9865, 'Ponds Powder Pinkish White 150', '1592795', '3876990', 2, '5765970', 4, '15', 3, -3, -1, -2, 2, 4, 3, 3, 3, 3, 3, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9866, 'Ponds Age Miracle Wrinkle', '1591968', '4343096', 1, '4997089', 4, '17', 3, -4, -1, -2, 1, 4, 3, 2.5, 3, 2.65, 2.73, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9867, 'Zwitsal BB Nat Hair And Body', '1650879', '734418', 5, '874991', 1, '5', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9868, 'Zwitsal BB Hair Lotion Avks', '1651186', '494040', 5, '580117', 1, '7', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9869, 'Zwitsal BB Bath Classic 300ML', '1651213', '982430', 5, '1485529', 1, '12', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9870, 'Lifebuoy Bw Mildcare Btl 100', '2310739', '1056079', 4, '4235679', 3, '20', 2, -1, -2, -3, 4, 3, 2, 3.5, 2, 3.05, 2.81, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9871, 'Lifebuoy Bw Cool Fresh Btl', '2310767', '2098088', 3, '6778975', 5, '30', 1, -2, 0, -4, 3, 5, 1, 4, 1, 3.1, 2.62, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9872, 'Lifebuoy Bw total 10 Btl 100', '2310754', '525991', 5, '1775808', 2, '31', 1, 0, -3, -4, 5, 2, 1, 3.5, 1, 2.75, 2.35, 'Discount', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9873, 'Pepsodent Sg Dc Sensitive', '2312701', '1250253', 4, '2175760', 2, '14', 3, -1, -3, -2, 4, 2, 3, 3, 3, 3, 3, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9874, 'Pepsodent Sg Doub Care Sesns', '2313408', '6787889', 1, '8000710', 5, '30', 1, -4, 0, -4, 1, 5, 1, 3, 1, 2.4, 2.08, 'Discount', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9875, 'Bango Manis Reff 575 ML', '1130059', '21202', 5, '763276', 1, '5', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9876, 'Bango Kecap Manis Reff 220', '1130118', '4000000', 1, '1185000', 1, '24', 2, -4, -4, -3, 1, 1, 2, 1, 2, 1.3, 1.46, 'Listing', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9877, 'Bango Recap Manis Btl 275 Ml', '1130061', '3185000', 2, '3870000', 3, '15', 2, -3, -2, -3, 2, 3, 2, 2.5, 2, 2.35, 2.27, 'Discount', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9878, 'Sarimurni 20P 36Gr ', '1411025', '397152', 5, '528000', 1, '7', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9879, 'Sariwangi Teh Tarik 3In1 92G', '1411306', '3850000', 2, '4200000', 3, '20', 2, -3, -2, -3, 2, 3, 2, 2.5, 2, 2.35, 2.27, 'Discount', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9880, 'Ponds Wb Sun Protec Spf15 ', '1591929', '120450', 5, '143400', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9881, 'Pondswb Cream Normal Skin ', '1591958', '107472', 5, '125400', 1, '2', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9882, 'Ponds Cleansing Milk 150 Ml ', '1591348', '3581950', 2, '3867950', 3, '15', 3, -3, -2, -2, 2, 3, 3, 2.5, 3, 2.65, 2.73, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9883, 'Zwitsal Deterjen Cair G Tea ', '1651473', '50604', 5, '59700', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9884, 'Zwitsal Bb Shp Nat Avks 450 ', '1651203', '2153000', 3, '2872000', 2, '19', 2, -2, -3, -3, 3, 2, 2, 2.5, 2, 2.35, 2.27, 'Discount', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9885, 'Zwitsal Bb Oil Aloe Vera 100 ', '1650532', '1875000', 4, '2487000', 2, '20', 2, -1, -3, -3, 4, 2, 2, 3, 2, 2.7, 2.54, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9886, 'Zwitsal Natural Basic Pack', '1651414', '1388000', 4, '1890000', 2, '19', 2, -1, -3, -3, 4, 2, 2, 3, 2, 2.7, 2.54, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9887, 'Molto Pewangi Edp K-Romance ', '2300670', '3000000', 2, '3200000', 2, '20', 2, -3, -3, -3, 2, 2, 2, 2, 2, 2, 2, 'Discount', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9888, 'Rinso Anti Noda Acti Fresh ', '2300680', '528930', 5, '627000', 1, '2', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9889, 'Rinso Deterjen Anti Noda ', '2300665', '3850000', 2, '4513000', 3, '21', 2, -3, -2, -3, 2, 3, 2, 2.5, 2, 2.35, 2.27, 'Discount', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9890, 'Rinso Molto Deterjen Perfume', '2300609', '457128', 5, '525600', 1, '4', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9891, 'Rinso Molto Deterjen 25Ogr ', '2300588', '4000000', 1, '4125000', 3, '25', 1, -4, -2, -4, 1, 3, 1, 2, 1, 1.7, 1.54, 'Discount', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9892, 'Pepsodent Sg Triple Medium ', '2313155', '4328000', 1, '4975000', 4, '15', 3, -4, -1, -2, 1, 4, 3, 2.5, 3, 2.65, 2.73, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9893, 'Ponds Foam Clear Solutions ', '2314179', '802750', 5, '945000', 1, '7', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9894, 'Clear Men Shp Cool Menthol ', '2315643', '3125750', 2, '4175000', 3, '14', 3, -3, -2, -2, 2, 3, 3, 2.5, 3, 2.65, 2.73, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9895, 'Lux Bw Velvet Touch Reff 450', '2313004', '406106', 5, '473100', 1, '12', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9896, 'Lux Soap Magical Spell 85 Gr', '2312935', '198576', 5, '252000', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9897, 'Lux Soap White Impress 85Gr ', '2315003', '132384', 5, '168000', 1, '12', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9898, 'Citra Tune Up Lot Rice ', '2316138', '1300200', 4, '1554000', 1, '16', 3, -1, -4, -2, 4, 1, 3, 2.5, 3, 2.65, 2.73, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9899, 'Rexona Men Deo Invisibile Dry', '2314174', '194436', 5, '227400', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9900, 'Ponds Foam Son Dullness ', '2314166', '3000000', 2, '3185000', 2, '20', 2, -3, -3, -3, 2, 2, 2, 2, 2, 2, 2, 'Discount', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9901, 'Pepsodent Sg Triple Clean ', '2313159', '3000000', 2, '3200000', 2, '12', 4, -3, -3, -1, 2, 2, 4, 2, 4, 2.6, 2.92, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9902, 'Pepsodent Sg Triple Clean ', '2313156', '67368', 5, '86400', 1, '13', 3, 0, -4, -2, 5, 1, 3, 3, 3, 3, 3, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9903, 'Ponds Men Foam Energy 100 Gr', '2312004', '309084', 5, '354000', 1, '9', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9904, 'Close Up Pg Deep Action 160 ', '2310931', '3000000', 2, '3513000', 3, '18', 3, -3, -2, -2, 2, 3, 3, 2.5, 3, 2.65, 2.73, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9905, 'Close Up Pg Deep Action 110 ', '2310930', '477504', 5, '552000', 1, '10', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9906, 'Close Up Pg Deep Action 65 ', '2310932', '283680', 5, '336000', 1, '11', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9907, 'Lifebuoy Bw Total10 Btl 500 ', '2312340', '3900000', 2, '4375850', 3, '18', 3, -3, -2, -2, 2, 3, 3, 2.5, 3, 2.65, 2.73, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9908, 'Lifebuoy Bw Mildcare 500 Ml ', '2312168', '203538', 5, '225000', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9909, 'Vaseline Hbl Triple Spt 42', '2311054', '2670000', 3, '3010000', 2, '24', 2, -2, -3, -3, 3, 2, 2, 2.5, 2, 2.35, 2.27, 'Discount', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9910, 'Vaseline Hbl Uv Light 100Ml', '2310893', '372128', 5, '432000', 1, '10', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9911, 'Vaseline Hbl Cocoaradiant', '2310882', '2379760', 3, '2792000', 2, '11', 4, -2, -3, -1, 3, 2, 4, 2.5, 4, 2.95, 3.19, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9912, 'Vaseline Hbl Triple Spf24 ', '2311055', '2082290', 3, '2443000', 2, '13', 3, -2, -3, -2, 3, 2, 3, 2.5, 3, 2.65, 2.73, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9913, 'Axe Body Spray Dark 150 Ml ', '2311056', '1846875', 4, '2167500', 2, '5', 5, -1, -3, 0, 4, 2, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9914, 'Sunsilk Shp Black Shine ', '2314142', '4006920', 4, '4548000', 3, '6', 5, -1, -2, 0, 4, 3, 5, 3.5, 5, 3.95, 4.19, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9915, 'Citra Hazeline Pearl Cream ', '2314705', '1294200', 4, '1500000', 1, '7', 4, -1, -4, -1, 4, 1, 4, 2.5, 4, 2.95, 3.19, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9916, 'Dove Shp Ttl Hairfall 160 Ml', '2313142', '412700', 5, '478000', 1, '9', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9917, 'Dove Cond Ttl Damage 160 Ml ', '2313013', '1275000', 4, '1785000', 2, '23', 2, -1, -3, -3, 4, 2, 2, 3, 2, 2.7, 2.54, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9918, 'Dove Shp Ttl Damage 160 Ml ', '2313170', '825520', 5, '996000', 1, '7', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9919, 'Dove Shp Ttl Damage 320 M ', '2313331', '1722015', 4, '2020500', 2, '3', 5, -1, -3, 0, 4, 2, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9920, 'Fair&Lovely Facial Foam 50Gr', '2314165', '396432', 5, '464400', 1, '6', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9921, 'Rexona Women Advanced 9Gr ', '2313727', '1980000', 4, '2484000', 2, '20', 2, -1, -3, -3, 4, 2, 2, 3, 2, 2.7, 2.54, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9922, 'Rexona Men Ice Cool 9Gr 3`S ', '2310989', '1284926', 4, '1538700', 1, '30', 1, -1, -4, -4, 4, 1, 1, 2.5, 1, 2.05, 1.81, 'Discount', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9923, 'Vaseline Repairing Jelly ', '2315283', '1941420', 4, '2190000', 2, '7', 4, -1, -3, -1, 4, 2, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9924, 'Citra Fm Cream Pearly Wht Uv', '2315161', '175296', 5, '210000', 1, '8', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9925, 'Citra Sakura Powder Cream ', '2315339', '248336', 5, '280500', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9926, 'Pepsodent Sg Bamboo Salt', '2315304', '3575000', 2, '4187098', 3, '16', 3, -3, -2, -2, 2, 3, 3, 2.5, 3, 2.65, 2.73, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9927, 'Citra Ff Green Tea Anti', '2315384', '1054650', 4, '1245000', 1, '2', 5, -1, -4, 0, 4, 1, 5, 2.5, 5, 3.25, 3.65, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9928, 'Tresemme Shp Hair Fall Btl', '2315515', '243133', 5, '280500', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9929, 'Tresemme Cond Keratin Smooth', '2315517', '220040', 5, '259000', 1, '3', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9930, 'Tresemme Shp Scalp Care', '2315654', '940286', 5, '1078700', 1, '3', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9931, 'Sunsilk Hijab Shp ', '2315301', '4185730', 1, '4485000', 4, '13', 3, -4, -1, -2, 1, 4, 3, 2.5, 3, 2.65, 2.73, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9932, 'Citra Hbl Golden Coconut Oil ', '2315635', '470799', 5, '564300', 1, '5', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9933, 'Citra Hbl Avocado&Honey', '2315614', '287970', 5, '333500', 1, '2', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9934, 'Clear Men Shp Complete Care ', '2315740', '3275080', 2, '3573880', 3, '15', 3, -3, -2, -2, 2, 3, 3, 2.5, 3, 2.65, 2.73, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9935, 'Clear Men Shp Cool Sport ', '2315806', '408770', 5, '469000', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9936, 'Clear Shp Anti Ketombe ', '2315489', '412200', 5, '490500', 1, '5', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9937, 'Clear Shp Ak Ice Cool ', '2315490', '366400', 5, '436000', 1, '2', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9938, 'Axe Clean Cut Look Gel 75Ml ', '2315652', '591000', 5, '714000', 1, '7', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9939, 'Axe Pomade Clea Cut Look ', '2315981', '964548', 5, '1112400', 1, '12', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9940, 'Axe Bw Dark Temptation ', '2315606', '121352', 5, '148500', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9941, 'Citra Hbl Sunflower ', '2315741', '2998350', 3, '3435000', 3, '9', 4, -2, -2, -1, 3, 3, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9942, 'Citra Soap Aloe Vera 70G', '2315589', '1623000', 4, '2467000', 2, '20', 2, -1, -3, -3, 4, 2, 2, 3, 2, 2.7, 2.54, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9943, 'Citra Soap Lulur Pearly ', '2315523', '269424', 5, '331200', 1, '5', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9944, 'Citra Soap Lulur Natural ', '2315522', '269424', 5, '331200', 1, '3', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9945, 'Ponds Ff Tone Up Instabright', '2315531', '2995590', 3, '3575000', 3, '2', 5, -2, -2, 0, 3, 3, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9946, 'Sunsilk Shp Soft&Sm 10Ml', '2314082', '4483000', 1, '4889000', 4, '18', 3, -4, -1, -2, 1, 4, 3, 2.5, 3, 2.65, 2.73, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9947, 'Sunsilk Shp Hijab Anti ', '2314124', '522120', 5, '598500', 1, '7', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9948, 'Sunsilk Shp Soft&Smooth 70Ml', '2314080', '2107890', 3, '2673000', 2, '19', 2, -2, -3, -3, 3, 2, 2, 2.5, 2, 2.35, 2.27, 'Discount', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9949, 'Rexona Men Quantum 50 Ml', '2313894', '1708288', 4, '2035200', 2, '20', 2, -1, -3, -3, 4, 2, 2, 3, 2, 2.7, 2.54, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9950, 'Rexona Ro Dreamy White 40Ml ', '2315594', '533205', 5, '625500', 1, '4', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9951, 'Rexona Ro Glowing White 40Ml ', '2315593', '2251310', 3, '2641000', 2, '6', 5, -2, -3, 0, 3, 2, 5, 2.5, 5, 3.25, 3.65, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9952, 'Axe Ro Anti Bac Fresh Amber ', '2310007', '768300', 5, '895000', 1, '3', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9953, 'Rexona Men Ferrari V8 50 Ml ', '2313909', '895388', 5, '1065300', 1, '2', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9954, 'Dove Shp Scalp Strength ', '2315920', '1580000', 4, '2125100', 2, '22', 2, -1, -3, -3, 4, 2, 2, 3, 2, 2.7, 2.54, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9955, 'Citra Face&Body Gel Lot Aloee', '2316013', '2265000', 3, '2765000', 2, '18', 2, -2, -3, -3, 3, 2, 2, 2.5, 2, 2.35, 2.27, 'Discount', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9956, 'Rexona Dry Serum Fresh Rose ', '2316111', '777816', 5, '945000', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9957, 'Sunsilk Shp Thick&Long Rtg ', '2315736', '183200', 5, '210000', 1, '2', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9958, 'Ponds Micellar Water Bright ', '2316064', '1504686', 4, '1802300', 2, '11', 4, -1, -3, -1, 4, 2, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9959, 'Ponds Micellar Water D-Toxx ', '2316063', '426702', 5, '511100', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9960, 'Fair&Lovely Masker Serum ', '2316110', '177288', 5, '213600', 1, '7', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9961, 'Lifebuoy Shp Anti Dandruf 10 ', '2311533', '177280', 5, '220000', 1, '6', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9962, 'Lifebuoy Shp Anti Dandruf 70 ', '2312286', '82740', 5, '94800', 1, '3', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9963, 'Lifebuoy Shp Strong&Shiny 70', '2312344', '82740', 5, '94800', 1, '5', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9964, 'Lifebuoy Shp Strong&Shiny ', '2312809', '793410', 5, '927000', 1, '6', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9965, 'Citra Bw Natural White Reff ', '2310963', '615945', 5, '722700', 1, '2', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9966, 'Tresemme Keratin Smooth Rtg ', '2316007', '183200', 5, '218000', 1, '12', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9967, 'Dove Shp Perawatan Rambut ', '2316032', '357240', 5, '425100', 1, '7', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9968, 'Clear Shp Ad Ice Cool ', '2316140', '47574', 5, '56700', 1, '15', 3, 0, -4, -2, 5, 1, 3, 3, 3, 3, 3, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9969, 'Sunsilk Shp Hijab Hairfall ', '2314128', '1789000', 4, '2385000', 2, '19', 2, -1, -3, -3, 4, 2, 2, 3, 2, 2.7, 2.54, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9970, 'Ponds Clear Solutions S&C ', '2311856', '797850', 5, '940500', 1, '10', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9971, 'Lifebuoy Soap Matcha 75G', '2315707', '4901000', 1, '5385000', 4, '18', 3, -4, -1, -2, 1, 4, 3, 2.5, 3, 2.65, 2.73, 'Mailer', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9972, 'Fair&Lovely Facial Foam 100 ', '2314177', '153600', 5, '805632', 1, '3', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9973, 'Rexona Women Powder Dry 50 ', '2313949', '298176', 5, '381600', 1, '7', 4, 0, -4, -1, 5, 1, 4, 3, 4, 3.3, 3.46, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9974, 'Rexona Women Free Spirit 50 ', '2313945', '298176', 5, '381600', 1, '3', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9975, 'Sunlight Jeruk Nipis Reff ', '2320854', '1467650', 4, '1745000', 2, '6', 5, -1, -3, 0, 4, 2, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9976, 'Sunlight Jeruk Nipis 100 Reff', '2320981', '2000000', 3, '234576', 2, '20', 2, -2, -3, -3, 3, 2, 2, 2.5, 2, 2.35, 2.27, 'Discount', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9977, 'Sunlight Higienis ', '2320971', '113472', 5, '144000', 1, '1', 5, 0, -4, 0, 5, 1, 5, 3, 5, 3.6, 3.92, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL),
(9978, 'Rexona Men Ice Cool 50 Ml', '2313893', '4003800', 4, '4770000', 3, '17', 3, -1, -2, -2, 4, 3, 3, 3.5, 3, 3.35, 3.27, 'Rafaksi', '', '70/30', '40/40/20', 'Tanggal: 17-Jul-2022<br> Waktu: 15:47:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `perhitungan_pm_smntr`
--

CREATE TABLE `perhitungan_pm_smntr` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `kode_barang` varchar(128) NOT NULL,
  `modal` varchar(128) NOT NULL,
  `bobot_modal` int(11) NOT NULL,
  `penjualan` varchar(128) NOT NULL,
  `bobot_penjualan` int(11) NOT NULL,
  `waktu` varchar(128) NOT NULL,
  `bobot_waktu` int(11) NOT NULL,
  `GAP_M` int(11) NOT NULL,
  `GAP_P` int(11) NOT NULL,
  `GAP_W` int(11) NOT NULL,
  `GAP_M_fix` int(11) NOT NULL,
  `GAP_P_fix` int(11) NOT NULL,
  `GAP_W_fix` int(11) NOT NULL,
  `NCF` varchar(128) NOT NULL,
  `NSF` varchar(128) NOT NULL,
  `NI` varchar(128) NOT NULL,
  `hasil` varchar(128) NOT NULL,
  `kesimpulan` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `presentasi_NCF/NSF` varchar(128) NOT NULL,
  `presentasi_NCF2/NSF2/NI` varchar(128) NOT NULL,
  `tanggal` varchar(128) DEFAULT NULL,
  `id_relasi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perhitungan_pm`
--
ALTER TABLE `perhitungan_pm`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_relasi` (`id_relasi`);

--
-- Indexes for table `perhitungan_pm_smntr`
--
ALTER TABLE `perhitungan_pm_smntr`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_relasi` (`id_relasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `perhitungan_pm`
--
ALTER TABLE `perhitungan_pm`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9979;

--
-- AUTO_INCREMENT for table `perhitungan_pm_smntr`
--
ALTER TABLE `perhitungan_pm_smntr`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49730;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `perhitungan_pm`
--
ALTER TABLE `perhitungan_pm`
  ADD CONSTRAINT `perhitungan_pm_ibfk_1` FOREIGN KEY (`id_relasi`) REFERENCES `perhitungan_pm_smntr` (`id_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `perhitungan_pm_smntr`
--
ALTER TABLE `perhitungan_pm_smntr`
  ADD CONSTRAINT `perhitungan_pm_smntr_ibfk_1` FOREIGN KEY (`id_relasi`) REFERENCES `barang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
