-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2017 at 05:16 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gadget`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_email` varchar(100) NOT NULL,
  `a_username` varchar(100) NOT NULL,
  `a_password` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `a_name`, `a_email`, `a_username`, `a_password`, `status`) VALUES
(1, 'Administrator', 'admin@gadgetbee.in', 'admin', 'toor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `c_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment_name` varchar(200) NOT NULL,
  `comment_email` varchar(200) NOT NULL,
  `comments` text NOT NULL,
  `cmt_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`c_id`, `post_id`, `comment_name`, `comment_email`, `comments`, `cmt_time`, `status`) VALUES
(12, 16, 'Rahul', 'rahul1996@gmail.com', 'Very Nice phone Go for it', '2016-11-21 04:15:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `main_post`
--

CREATE TABLE `main_post` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `add_by` varchar(200) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `os` varchar(200) NOT NULL,
  `discription` text NOT NULL,
  `img` varchar(200) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_post`
--

INSERT INTO `main_post` (`id`, `title`, `add_by`, `brand`, `os`, `discription`, `img`, `time_stamp`, `status`) VALUES
(3, 'gal', '1', 'samsung', 'android', 'Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.\r\n<br/>\r\n Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. ', 'apple_iphone_5s.jpg', '2016-11-14 10:06:51', 2),
(4, 'gal2', '1', 'samsung', 'android', 'test just', 'Koala.jpg', '2016-07-26 14:11:30', 2),
(5, 'gal3', '1', 'samsung', 'android', 'test just lolololol', 'Jellyfish.jpg', '2016-11-14 10:07:31', 2),
(6, 'dummy', '1', 'microsoft', 'windows', 'dummuy dummy dummy post', '2.jpg', '2016-11-21 06:27:39', 2),
(7, 'Iphone', '2', 'apple', 'ios', 'File Allready Exist,choose anotherone!File Allready Exist,choose anotherone!File Allready Exist,choose anotherone!File Allready Exist,choose anotherone!File Allready Exist,choose anotherone!', 'IMG_20160206_144057_1.jpg', '2016-07-26 06:28:25', 1),
(8, 'IPHONE 6S', '2', 'apple', 'ios', 'sdads', 'IMG_20160206_144047.jpg', '2016-07-26 06:28:06', 1),
(9, 'Iphone', '1', 'apple', 'ios', 'ttttttttt', 'IMG_20160206_145704_1.jpg', '2016-11-14 10:07:34', 2),
(10, 'Motorola moto x force', '2', 'motorola', 'android', 'Lenovoâ€™s company Motorola recently launch a shatter proof phone moto x force . Company claim that this phone will not break easily by just a slip from hand as it made of hard material which canâ€™t easily broken.\r\n<br/><br/>\r\nMoto x force comes with some high specs which may catch your attention like 21mp rare camera, AMOLED display , snapdragon 810 chipset , NFC and much more. But the main eye catch feature is strong build of device. In looks the device is similar to its old flagship device like moto g3 , another interesting feature of moto x force is that it get android 6.0 marshmallow OTA update which makes this phone future proof so it is a strong future proof phone at a decent price of Rs. 49,999.\r\n<br/><br/>\r\nThis phone also support fast and wireless charging , it support memory card of up to 200 GB instead of that it have 32 GB of inbuilt storage with 3 GB of ram which make the phone with plenty of space. This phone have great feature but a con which is that it doesnâ€™t have a Radio yes, â€œFM radio is not supportedâ€ in moto x force. But moto x force have many great features which make it value for money.\r\n<br/><br/>', 'motoxforce.jpg', '2016-07-30 06:42:44', 1),
(11, 'dump22', '1', 'samsung', 'android', 'this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test this is only a test  ', 'IMG_20160206_133636_1.jpg', '2016-11-14 10:07:00', 2),
(12, 'dump', '1', 'samsung', 'android', 'test test', '', '2016-11-08 05:23:41', 2),
(13, 'Google Pixel', '1', 'samsung', 'android', 'lol', '14540710355611.jpg', '2016-11-14 08:07:34', 2),
(14, 'Iphone 7 Plus', '1', 'apple', 'ios', '<br><br>\r\nApple iPhone 7 Plus smartphone was launched in September 2016. The phone comes with a 5.50-inch touchscreen display with a resolution of 1080 pixels by 1920 pixels at a PPI of 401 pixels per inch. \r\n<br><br>\r\nThe Apple iPhone 7 Plus is powered by quad-core Apple A10 Fusion processor and it comes with 3GB of RAM. The phone packs 32GB of internal storage cannot be expanded. As far as the cameras are concerned, the Apple iPhone 7 Plus packs a 12-megapixel primary camera on the rear and a 7-megapixel front shooter for selfies.\r\n<br><br>\r\nThe Apple iPhone 7 Plus runs iOS 10 and is powered by a 2900mAh non removable battery. It measures 158.20 x 77.90 x 7.30 (height x width x thickness) and weighs 188.00 grams.\r\n<br><br>\r\nThe Apple iPhone 7 Plus is a single SIM (GSM) smartphone that accepts a Nano-SIM. Connectivity options include Wi-Fi, GPS, Bluetooth, 3G and 4G (with support for Band 40 used by some LTE networks in India). Sensors on the phone include Compass Magnetometer, Proximity sensor, Accelerometer, Ambient light sensor, Gyroscope and Barometer.\r\n<br><br>\r\nApple iPhone 7 Plus detailed specifications\r\n<br><br>\r\nGENERAL\r\n<br><br>\r\nRelease date	September 2016\r\nForm factor	Touchscreen\r\nDimensions (mm)	158.20 x 77.90 x 7.30\r\nWeight (g)	188.00\r\nBattery capacity (mAh)	2900\r\nRemovable battery	No\r\nColours	Rose Gold, Gold, Silver, Black, Jet Black\r\nSAR value	NA\r\n<br><br>\r\nDISPLAY\r\n<br><br>\r\nScreen size (inches)	5.50\r\nTouchscreen	Yes\r\nResolution	1080x1920 pixels\r\nPixels per inch (PPI)	401\r\n<br><br>\r\nHARDWARE\r\n<br><br>\r\nProcessor	quad-core\r\nProcessor make	Apple A10 Fusion\r\nRAM	3GB\r\nInternal storage	32GB\r\nExpandable storage	No\r\n<br><br>\r\nCAMERA\r\n<br><br>\r\nRear camera	12-megapixel\r\nFlash	Yes\r\nFront camera	7-megapixel\r\n<br><br>\r\nSOFTWARE\r\n<br><br>\r\nOperating System	iOS 10\r\n<br><br>\r\nCONNECTIVITY\r\n<br><br>\r\nWi-Fi	Yes\r\nWi-Fi standards supported	802.11 a/b/g/n/ac\r\nGPS	Yes\r\nBluetooth	Yes, v 4.20\r\nNFC	No\r\nInfrared	No\r\nUSB OTG	No\r\nFM	No\r\nNumber of SIMs	1\r\nSIM 1	\r\nSIM Type	Nano-SIM\r\nGSM/CDMA	GSM\r\n3G	Yes\r\n4G/ LTE	Yes\r\nSupports 4G in India (Band 40)	Yes\r\n<br><br>\r\nSENSORS\r\n<br><br>\r\nCompass/ Magnetometer	Yes\r\nProximity sensor	Yes\r\nAccelerometer	Yes\r\nAmbient light sensor	Yes\r\nGyroscope	Yes\r\nBarometer	Yes\r\nTemperature sensor	No\r\n<br><br>', '107814030_A_closeup_view_of_the_iPhone_7_Plus27_dual_cameras_during_an_Apple_media_event_at_Bill_Grah-large_trans++VKOd1ILXaurCHi1o16wQuRKj00Z_PLQyJFkzKWFH1-o.jpg', '2016-11-14 08:48:34', 1),
(15, 'Moto G4 Plus', '1', 'Motorola', 'android', '<br><br>\r\nMotorola Moto G4 Plus smartphone was launched in May 2016. The phone comes with a 5.50-inch touchscreen display with a resolution of 1080 pixels by 1920 pixels at a PPI of 401 pixels per inch. Motorola Moto G4 Plus price in India starts from Rs. 12999. \r\n<br><br>\r\nThe Motorola Moto G4 Plus is powered by 1.5GHz octa-core Qualcomm Snapdragon 617 processor and it comes with 2GB of RAM. The phone packs 16GB of internal storage that can be expanded up to 128GB via a microSD card. As far as the cameras are concerned, the Motorola Moto G4 Plus packs a 16-megapixel primary camera on the rear and a 5-megapixel front shooter for selfies.\r\n<br><br>\r\nThe Motorola Moto G4 Plus runs Android 6.0.1 and is powered by a 3000mAh non removable battery. It measures 153.00 x 76.60 x 7.90 (height x width x thickness) and weighs 155.00 grams.\r\n<br><br>\r\nThe Motorola Moto G4 Plus is a dual SIM (GSM and GSM) smartphone that accepts Micro-SIM and Micro-SIM. Connectivity options include Wi-Fi, GPS, Bluetooth, USB OTG, FM, 3G and 4G (with support for Band 40 used by some LTE networks in India). Sensors on the phone include Proximity sensor, Accelerometer, Ambient light sensor and Gyroscope.\r\n<br><br>\r\nMotorola Moto G4 Plus detailed specifications\r\n<br><br>\r\nGENERAL\r\n<br><br>\r\nAlternate names	XT1643\r\nRelease date	May 2016\r\nForm factor	Touchscreen\r\nDimensions (mm)	153.00 x 76.60 x 7.90\r\nWeight (g)	155.00\r\nBattery capacity (mAh)	3000\r\nRemovable battery	No\r\nColours	Black, White\r\nSAR value	1.09\r\n<br><br>\r\nDISPLAY\r\nScreen size (inches)	5.50\r\nTouchscreen	Yes\r\nResolution	1080x1920 pixels\r\nPixels per inch (PPI)	401\r\n<br><br>\r\nHARDWARE\r\nProcessor	1.5GHz octa-core\r\nProcessor make	Qualcomm Snapdragon 617\r\nRAM	2GB\r\nInternal storage	16GB\r\nExpandable storage	Yes\r\nExpandable storage type	microSD\r\nExpandable storage up to (GB)	128\r\n<br><br>\r\nCAMERA\r\nRear camera	16-megapixel\r\nFlash	Yes\r\nFront camera	5-megapixel\r\n<br><br>\r\nSOFTWARE\r\nOperating System	Android 6.0.1\r\n<br><br>\r\nCONNECTIVITY\r\nWi-Fi	Yes\r\nWi-Fi standards supported	802.11 a/b/g/n\r\nGPS	Yes\r\nBluetooth	Yes, v 4.10\r\nNFC	No\r\nInfrared	No\r\nUSB OTG	Yes\r\nHeadphones	3.5mm\r\nFM	Yes\r\nNumber of SIMs	2\r\nSIM 1	\r\nSIM Type	Micro-SIM\r\nGSM/CDMA	GSM\r\n3G	Yes\r\n4G/ LTE	Yes\r\nSupports 4G in India (Band 40)	Yes\r\nSIM 2	\r\nSIM Type	Micro-SIM\r\nGSM/CDMA	GSM\r\n3G	Yes\r\n4G/ LTE	No\r\nSupports 4G in India (Band 40)	Yes\r\n<br><br>\r\nSENSORS\r\nCompass/ Magnetometer	No\r\nProximity sensor	Yes\r\nAccelerometer	Yes\r\nAmbient light sensor	Yes\r\nGyroscope	Yes\r\nBarometer	No\r\nTemperature sensor	No', 'moto-g4-features-specs.png', '2016-11-14 08:45:36', 1),
(16, 'Samsung Galaxy S7 Edge', '1', 'samsung', 'android', 'Samsung Galaxy S7 Edge smartphone was launched in February 2016. The phone comes with a 5.50-inch touchscreen display with a resolution of 1440 pixels by 2560 pixels at a PPI of 534 pixels per inch. Samsung Galaxy S7 Edge price in India starts from Rs. 40000. \r\n<br><br>\r\nThe Samsung Galaxy S7 Edge is powered by 1.6GHz octa-core it comes with 4GB of RAM. The phone packs 32GB of internal storage that can be expanded up to 200GB via a microSD card. As far as the cameras are concerned, the Samsung Galaxy S7 Edge packs a 12-megapixel primary camera on the rear and a 5-megapixel front shooter for selfies.\r\n\r\n<br><br>\r\nThe Samsung Galaxy S7 Edge runs Android 6.0 and is powered by a 3600mAh non removable battery. It measures 150.90 x 72.60 x 7.70 (height x width x thickness) and weighs 157.00 grams.\r\n<br><br>\r\nThe Samsung Galaxy S7 Edge is a dual SIM (GSM and GSM) smartphone that accepts . Connectivity options include Wi-Fi, GPS, Bluetooth, NFC, USB OTG, 3G and 4G (with support for Band 40 used by some LTE networks in India). Sensors on the phone include Compass Magnetometer, Proximity sensor, Accelerometer, Ambient light sensor, Gyroscope and Barometer.\r\n<br><br>\r\nSamsung Galaxy S7 Edge detailed specifications\r\n<br><br>\r\nGENERAL\r\nRelease date	February 2016\r\nForm factor	Touchscreen\r\nDimensions (mm)	150.90 x 72.60 x 7.70\r\nWeight (g)	157.00\r\nBattery capacity (mAh)	3600\r\nRemovable battery	No\r\nSAR value	NA\r\n<br><br>\r\nDISPLAY\r\nScreen size (inches)	5.50\r\nTouchscreen	Yes\r\nResolution	1440x2560 pixels\r\nPixels per inch (PPI)	534\r\n<br><br>\r\nHARDWARE\r\nProcessor	1.6GHz octa-core\r\nRAM	4GB\r\nInternal storage	32GB\r\nExpandable storage	Yes\r\nExpandable storage type	microSD\r\nExpandable storage up to (GB)	200\r\n<br><br>\r\nCAMERA\r\nRear camera	12-megapixel\r\nFlash	Yes\r\nFront camera	5-megapixel\r\n<br><br>\r\nSOFTWARE\r\nOperating System	Android 6.0\r\n<br><br>\r\nCONNECTIVITY\r\nWi-Fi	Yes\r\nWi-Fi standards supported	802.11 a/b/g/n/ac\r\nGPS	Yes\r\n<br><br>\r\nBluetooth	Yes, v 4.20\r\nNFC	Yes\r\nInfrared	No\r\nUSB OTG	Yes\r\nHeadphones	3.5mm\r\nFM	No\r\nNumber of SIMs	2\r\nSIM 1	\r\nSIM Type	\r\nGSM/CDMA	GSM\r\n3G	Yes\r\n4G/ LTE	Yes\r\nSupports 4G in India (Band 40)	Yes\r\nSIM 2	\r\nSIM Type	\r\nGSM/CDMA	GSM\r\n3G	Yes\r\n4G/ LTE	Yes\r\nSupports 4G in India (Band 40)	Yes\r\n<br><br>\r\nSENSORS\r\nCompass/ Magnetometer	Yes\r\nProximity sensor	Yes\r\nAccelerometer	Yes\r\nAmbient light sensor	Yes\r\nGyroscope	Yes\r\nBarometer	Yes\r\nTemperature sensor	No\r\n<br><br>', '48201633106PM_635_samsung_galaxy_s7_edge.jpeg', '2016-11-14 08:43:06', 1),
(17, 'One Plus 3', '1', 'OnePlus', 'android', 'OnePlus 3 smartphone was launched in June 2016. The phone comes with a 5.50-inch touchscreen display with a resolution of 1080 pixels by 1920 pixels at a PPI of 401 pixels per inch. \r\n\r\nThe OnePlus 3 is powered by 1.6GHz quad-core Qualcomm Snapdragon 820 processor and it comes with 6GB of RAM. The phone packs 64GB of internal storage cannot be expanded. As far as the cameras are concerned, the OnePlus 3 packs a 16-megapixel primary camera on the rear and a 8-megapixel front shooter for selfies.\r\n\r\n<br><br>\r\nThe OnePlus 3 runs Android 6.0.1 and is powered by a 3000mAh non removable battery. It measures 152.70 x 74.70 x 7.35 (height x width x thickness) and weighs 158.00 grams.\r\n<br><br>\r\nThe OnePlus 3 is a dual SIM (GSM and GSM) smartphone that accepts Nano-SIM and Nano-SIM. Connectivity options include Wi-Fi, GPS, Bluetooth, NFC, USB OTG, 3G and 4G (with support for Band 40 used by some LTE networks in India). Sensors on the phone include Compass Magnetometer, Proximity sensor, Accelerometer, Ambient light sensor and Gyroscope.\r\n<br><br>\r\nOnePlus 3 detailed specifications\r\n<br><br>\r\nGENERAL\r\n<br><br>\r\nRelease date	June 2016\r\nForm factor	Touchscreen\r\nDimensions (mm)	152.70 x 74.70 x 7.35\r\nWeight (g)	158.00\r\nBattery capacity (mAh)	3000\r\nRemovable battery	No\r\nColours	Graphite, Soft Gold\r\nSAR value	0.78\r\n<br><br>\r\nDISPLAY\r\n<br><br>\r\nScreen size (inches)	5.50\r\nTouchscreen	Yes\r\nResolution	1080x1920 pixels\r\nPixels per inch (PPI)	401\r\n<br><br>\r\nHARDWARE\r\n<br><br>\r\nProcessor	1.6GHz quad-core\r\nProcessor make	Qualcomm Snapdragon 820\r\nRAM	6GB\r\nInternal storage	64GB\r\nExpandable storage	No\r\n<br><br>\r\nCAMERA\r\n<br><br>\r\nRear camera	16-megapixel\r\nFlash	Yes\r\nFront camera	8-megapixel\r\nSOFTWARE\r\nOperating System	Android 6.0.1\r\nSkin	OxygenOS 3.1.1\r\n<br><br>\r\nCONNECTIVITY\r\n<br><br>\r\nWi-Fi	Yes\r\nWi-Fi standards supported	802.11 a/b/g/n/ac\r\nGPS	Yes\r\nBluetooth	Yes, v 4.20\r\nNFC	Yes\r\nInfrared	No\r\nUSB OTG	Yes\r\nHeadphones	3.5mm\r\nFM	No\r\nNumber of SIMs	2\r\nSIM 1	\r\nSIM Type	Nano-SIM\r\nGSM/CDMA	GSM\r\n3G	Yes\r\n4G/ LTE	Yes\r\nSupports 4G in India (Band 40)	Yes\r\nSIM 2	\r\nSIM Type	Nano-SIM\r\nGSM/CDMA	GSM\r\n3G	Yes\r\n4G/ LTE	Yes\r\nSupports 4G in India (Band 40)	Yes\r\n<br><br>\r\nSENSORS\r\n<br><br>\r\nCompass/ Magnetometer	Yes\r\nProximity sensor	Yes\r\nAccelerometer	Yes\r\nAmbient light sensor	Yes\r\nGyroscope	Yes\r\nBarometer	No\r\nTemperature sensor	No\r\n<br><br>', 'oneplus_3_db2_ndtv_3579_480X960_6162016115135AM.jpg', '2016-11-14 09:43:38', 1),
(18, 'Google Pixel XL', '1', 'Google', 'android', '<br><br>\r\nGoogle hasnâ€™t held back in terms of hardware, though. The Pixel siblings have essentially identical specs apart from screen size, resolution, and battery capacity.  Thereâ€™s a top-of-the-line Qualcomm Snapdragon 821 SoC with two 2.15GHz cores and two 1.6GHz cores for efficiency, along with integrated Adreno 530 graphics. Both models have 4GB of RAM and either 32 or 128GB of fixed storage. Our 32GB unit had 29.7GB of usable space. Considering the lack of microSD expansion, we think 128GB might be the better bet for some in the long term.\r\n<br><br>\r\nThe Pixel XL has a 5.5-inch 1440x2560-pixel screen, whereas the Pixel steps down to a 5-inch panel at 1080x1920. Both promise 100 percent NTSC colour gamut reproduction and true blacks, and while we canâ€™t speak for the smaller one, the Pixel XLâ€™s screen might be one of the best weâ€™ve ever seen on a smartphone. Itâ€™s bright and crisp, with natural-looking colours.\r\n<br><br>\r\nConnectivity standards are all up to date: thereâ€™s Cat 12 LTE, which means downloads of up to 600Mbps and uploads of up to 75Mbps, if the service provider can deliver that capability. Thereâ€™s also Wi-Fi 802.11ac, Bluetooth 4.2, GPS, and NFC. USB 3.0 speed is supported over the Type-C connection. Thereâ€™s also a variety of spatial and environmental sensors, plus what google calls the Android Sensor Hub â€“ a smaller dedicated processor which is constantly monitoring for input, including voice commands, even when the Snapdragon 821 is in standby.\r\n<br><br>\r\nGoogle Pixel XL software\r\nGoogle is replacing its much-loved Nexus line with the Pixel phones, which means that they are now the companyâ€™s best representation of its vision for Android. However, what you get here isnâ€™t pure Android but a â€œPixelizedâ€ version of it with a custom launcher and numerous tweaks. Itâ€™s still unclear whether other manufacturers will be allowed to adopt one or more of these features.\r\n<br><br>\r\nSpecs\r\n<br><br>\r\nDisplay\r\n<br><br>\r\n5.50-inch\r\n<br><br>\r\nProcessor\r\n<br><br>\r\n1.6GHz quad-core\r\nFront Camera\r\n8-megapixel\r\n<br><br>\r\nResolution\r\n<br><br>\r\n1440x2560 pixels\r\nRAM\r\n4GB\r\n<br><br>\r\nOS\r\n<br><br>\r\nAndroid 7.1\r\nStorage\r\n32GB\r\nRear Camera\r\n12.3-megapixel\r\nBattery Capacity\r\n3450mAh<br><br>', 'google-pixel-xl.jpg', '2016-11-14 10:02:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `pf_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `pf_name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`pf_id`, `post_id`, `pf_name`, `date`, `status`) VALUES
(9, 9, 'captain-america-3.jpg', '2016-07-28 07:34:49', 1),
(10, 9, 'bahubali-movie-review.jpg', '2016-07-28 07:35:28', 1),
(11, 10, 'motorola-moto-x-force-irrompible-piel-3gb-ram-100-nuevos-631511-MLM20562787272_012016-F.jpg', '2016-07-28 15:08:29', 1),
(12, 10, 'colors-800x420.jpg', '2016-07-28 15:08:42', 1),
(13, 10, 'Moto-X-Force-657x370-f228a1a4dbae3a52.jpg', '2016-07-28 15:08:53', 1),
(15, 5, 'Screenshot (1).png', '2016-11-02 06:18:17', 1),
(18, 11, 'IMG_20160206_144047_1.jpg', '2016-11-08 05:37:26', 1),
(22, 14, '1.jpg', '2016-11-14 08:15:16', 1),
(23, 14, '2.png', '2016-11-14 08:15:22', 1),
(24, 14, '3.jpg', '2016-11-14 08:15:28', 1),
(25, 15, 'moto-1.jpg', '2016-11-14 08:27:18', 1),
(26, 15, 'moto-2.jpeg', '2016-11-14 08:27:30', 1),
(27, 15, 'moto-3.jpg', '2016-11-14 08:27:45', 1),
(28, 17, 'op-1.jpg', '2016-11-14 09:45:03', 1),
(29, 17, 'op-2.jpg', '2016-11-14 09:45:08', 1),
(30, 17, 'op-3.jpg', '2016-11-14 09:45:13', 1),
(31, 18, 'g-01.jpg', '2016-11-14 09:54:04', 1),
(32, 18, 'g-02.jpg', '2016-11-14 09:54:09', 1),
(33, 18, 'g-03.jpg', '2016-11-14 09:54:14', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `main_post`
--
ALTER TABLE `main_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`pf_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `main_post`
--
ALTER TABLE `main_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `pf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
