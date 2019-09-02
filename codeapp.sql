-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 02 Eyl 2019, 12:47:46
-- Sunucu sürümü: 5.7.26
-- PHP Sürümü: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `codeapp`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8_turkish_ci NOT NULL,
  `date` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `company`
--

INSERT INTO `company` (`id`, `content`, `date`) VALUES
(3, '&lt;h2&gt;The Flavorful Tuscany Meetup&lt;/h2&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Welcome letter&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;Dear Guest,&lt;/p&gt;\r\n\r\n&lt;p&gt;We are delighted to welcome you to the annual &lt;em&gt;Flavorful Tuscany Meetup&lt;/em&gt; and hope you will enjoy the programme as well as your stay at the Bilancino Hotel.&lt;/p&gt;\r\n\r\n&lt;p&gt;Please find below the full schedule of the event.&lt;/p&gt;\r\n\r\n&lt;table cellpadding=&quot;15&quot; cellspacing=&quot;0&quot;&gt;\r\n	&lt;thead&gt;\r\n		&lt;tr&gt;\r\n			&lt;th colspan=&quot;2&quot; scope=&quot;col&quot;&gt;\r\n			&lt;p&gt;CANAN DAĞDEVİREN KİMDİR?&lt;/p&gt;\r\n\r\n			&lt;h2&gt;CANAN DAĞDEVİREN KIZ &amp;Ouml;ĞRENCİ YURDU&lt;/h2&gt;\r\n\r\n			&lt;p&gt;Canan Dağdeviren, 4 mayıs 1985 tarihinde İstanbul, &amp;Uuml;sk&amp;uuml;dar&amp;rsquo;da Adanalı bir anne ve Sivaslı bir babanın ilk &amp;ccedil;ocuğu olarak doğmuştur. Caner ve Emre adında iki erkek kardeşi vardır. 5 yaşındayken babasının hediye ettiği Marie Curie ile ilgili bir kitap okumayla fiziğe karşı ilgisi oluştu. B&amp;uuml;y&amp;uuml;d&amp;uuml;ğ&amp;uuml;nde de Marie Curie&amp;lsquo;nin eşi Pierre Curie&amp;lsquo;nin keşfi piezoelektrikten ilhamla aletler &amp;uuml;retti. İlkokulu ve ortaokulu okuduktan sonra liseyi Kocaeli&amp;lsquo;e okurken 1999 depreminde okulu hasar g&amp;ouml;rd&amp;uuml;ğ&amp;uuml; i&amp;ccedil;in, Adana Seyhan &amp;Ccedil;EAŞ Anadolu Lisesi&amp;rsquo;ne misafir &amp;ouml;ğrenci olarak g&amp;ouml;nderildi. Ardından Ankara&amp;lsquo;da Hacettepe &amp;Uuml;niversitesi Fizik M&amp;uuml;hendisliği&amp;rsquo;nden 2007 yılında mezun oldu. İstanbul&amp;rsquo;da Sabancı &amp;Uuml;niversitesinde tam burslu olarak Malzeme Bilimi ve M&amp;uuml;hendisliği programındaki y&amp;uuml;ksek lisans eğitimini 2009&amp;rsquo;da bitirdi. Canan Dağdeviren, 2009 yılında Fulbright bursu kazanarak (UIUC)&amp;rsquo;da ABD&amp;lsquo;de Illinois&amp;rsquo;te bir devlet &amp;uuml;niversitesi olan University of Illinois at Urbana-Champaign&amp;rsquo;de Malzeme Bilimi ve M&amp;uuml;hendisliği b&amp;ouml;l&amp;uuml;m&amp;uuml;nde doktora eğitimine başladı. Doktora s&amp;uuml;resince fizik, elektronik, kimyp alanlarının kapsamına giren esnek ve katlanabilir, v&amp;uuml;cut i&amp;ccedil;ine ve deri &amp;uuml;st&amp;uuml;ne yapıştırılabilir/giyilebilir elektronik aletler &amp;uuml;zerinde &amp;ccedil;alışmalar yaptı. Canan Dağdeviren T&amp;uuml;rkiye&amp;rsquo;nin bilim d&amp;uuml;nyasındaki gen&amp;ccedil; yeteneklerinden biridir. D&amp;uuml;nyanın en iyi &amp;uuml;niversitelerinden ikisinde birden aynı anda proje y&amp;uuml;r&amp;uuml;tme ayrıcalığına sahip. Massachusetts Teknoloji Enstit&amp;uuml;s&amp;uuml; (MIT) Koch Laboratuvarı&amp;rsquo;nda &amp;ccedil;alışmalarını s&amp;uuml;rd&amp;uuml;r&amp;uuml;yor. Harvard &amp;Uuml;niversitesi&amp;lsquo;nde ise gen&amp;ccedil; akademi &amp;uuml;yeliği var.&lt;/p&gt;\r\n\r\n			&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n			&lt;h2&gt;TANITIM FİLMİ&lt;/h2&gt;\r\n\r\n			&lt;h2&gt;CANAN DAĞDEVİREN KIZ &amp;Ouml;ĞRENCİ YURDU&lt;/h2&gt;\r\n\r\n			&lt;p&gt;Canan Dağdeviren kız &amp;ouml;ğrenci yurdu olarak &amp;ouml;ğrencilerimize otel ve ev konforunda hizmet veriyor ve onların t&amp;uuml;m haklarını; ırk, dil, din, renk, siyasi g&amp;ouml;r&amp;uuml;ş ve aile stat&amp;uuml;s&amp;uuml; g&amp;ouml;zetmeden, adil ve eşit sahipleniyor ve sıcak bir aile ortamı oluşmasını sağlıyoruz. Toplamda 16.000 metrekare alan &amp;uuml;zerine kurulmuş olan 22 katlı yurdumuzda 174 oda bulunmaktadır. Yurt i&amp;ccedil;erisinde &amp;ouml;ğrencilerimiz i&amp;ccedil;in sauna, fitness, sinema , T&amp;uuml;rk hamamı, revir, mescit, k&amp;uuml;t&amp;uuml;phane, restaurant, bavul odası ve &amp;ccedil;amaşır yıkama- kurutma odaları alanlarımız mevcuttur.&lt;/p&gt;\r\n\r\n			&lt;p&gt;VİZYONUMUZ&lt;/p&gt;\r\n\r\n			&lt;h2&gt;CANAN DAĞDEVİREN KIZ &amp;Ouml;ĞRENCİ YURDU&lt;/h2&gt;\r\n\r\n			&lt;p&gt;Yurdumuzda &amp;ouml;ğrencilerimizin g&amp;uuml;venliğini sağlamak amacıyla yurda giriş- &amp;ccedil;ıkışlar da parmak izinin yanı sıra 24 saat gece g&amp;ouml;r&amp;uuml;şl&amp;uuml; kamera sistemi ve profesyonel g&amp;uuml;venlik ekibiyle takip edilmektedir. Depreme dayanıklı yapılan yurdumuzda &amp;ouml;ğrencilerimizin yurt yaşamını kolaylaştırmak ve rahat etmeleri t&amp;uuml;m odalarımızda banyo,wc, bazalı yatak (ortopedik), &amp;ccedil;alışma masası-sandalyesi, kitaplık, giysi dolabı, komodin, mini buzdolabı, telefon, 2 adet televizyon, 7/24 sıcak su, sa&amp;ccedil; kurutma makinesi, wifi ve merkezi ısıtma bulunmaktadır. Ayrıca &amp;ouml;ğrencilerimizin velileri i&amp;ccedil;in misafirhane hizmeti sunulmaktadır.&lt;/p&gt;\r\n\r\n			&lt;p&gt;&lt;img alt=&quot;İstanbu Kız Öğrenci Yurdu&quot; src=&quot;images/istanbul-kiz-ogrenci-yurdi-kurumsal/2.jpg&quot; /&gt;&lt;/p&gt;\r\n			&lt;/th&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/thead&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;&amp;nbsp;&lt;/td&gt;\r\n			&lt;td&gt;&amp;nbsp;&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;&amp;nbsp;&lt;/td&gt;\r\n			&lt;td&gt;&amp;nbsp;&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;&amp;nbsp;&lt;/td&gt;\r\n			&lt;td&gt;&amp;nbsp;&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n\r\n&lt;blockquote&gt;\r\n&lt;p&gt;The annual Flavorful Tuscany meetups are always a culinary discovery. You get the best of Tuscan flavors during an intense one-day stay at one of the top hotels of the region. All the sessions are lead by top chefs passionate about their profession. I would certainly recommend to save the date in your calendar for this one!&lt;/p&gt;\r\n\r\n&lt;p&gt;Angelina Calvino, food journalist&lt;/p&gt;\r\n&lt;/blockquote&gt;\r\n\r\n&lt;p&gt;Please arrive at the Bilancino Hotel reception desk at least &lt;strong&gt;half an hour earlier&lt;/strong&gt; to make sure that the registration process goes as smoothly as possible.&lt;/p&gt;\r\n\r\n&lt;p&gt;We look forward to welcoming you to the event.&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;Victoria Valc&lt;/strong&gt;&lt;br /&gt;\r\n&lt;strong&gt;Event Manager&lt;/strong&gt;&lt;br /&gt;\r\n&lt;strong&gt;Bilancino Hotel&lt;/strong&gt;&lt;/p&gt;\r\n', '2019-08-28 19:26:06');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `images`
--

INSERT INTO `images` (`id`, `image`, `title`, `date`) VALUES
(7, 'assets/upload/room/1.jpg', 'Parmak İzi Kontrol', '2019-08-25 13:17:34'),
(8, 'assets/upload/room/2.jpg', 'Bekleme Odas', '2019-08-25 13:21:39'),
(9, 'assets/upload/room/4.jpg', '7/24 Destek', '2019-08-25 13:21:52'),
(10, 'assets/upload/room/5.jpg', '2 Kişilik Oda', '2019-08-25 13:22:17'),
(11, 'assets/upload/room/13.jpg', 'Spor Salonu', '2019-08-25 13:22:34'),
(12, 'assets/upload/room/8.jpg', '3 Kişilik Oda', '2019-08-25 18:41:50');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `content` text COLLATE utf8_turkish_ci,
  `isRead` int(11) DEFAULT '0',
  `date` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `message`
--

INSERT INTO `message` (`id`, `title`, `fullName`, `email`, `phone`, `content`, `isRead`, `date`) VALUES
(5, 'asddasdasdasdasd', 'adadsökjkhk', 'asdasd@gmail.com', '123123', 'asdasdasdasdadsasda', 0, '2019-08-25 13:41:20'),
(6, 'denmeasdads', 'asdasdasdasd', 'jackpwilliam@gmail.com', '54444444444444444444444444444', 'akldsjlkadsjlkasdjlkasd', 0, '2019-08-28 20:13:28');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` text COLLATE utf8_turkish_ci,
  `keywords` text COLLATE utf8_turkish_ci,
  `copyright` text COLLATE utf8_turkish_ci,
  `author` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `companyName` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `about` text COLLATE utf8_turkish_ci,
  `email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `logo`, `whatsapp`, `description`, `keywords`, `copyright`, `author`, `facebook`, `instagram`, `phone`, `companyName`, `adress`, `about`, `email`, `youtube`, `twitter`, `date`) VALUES
(5, NULL, '(544) 942-1274', 'CANAN DAĞDEVİREN KIZ ÖĞRENCİ YURDU', 'CANAN DAĞDEVİREN KIZ ÖĞRENCİ YURDU', 'CANAN DAĞDEVİREN KIZ ÖĞRENCİ YURDU', 'CANAN DAĞDEVİREN KIZ ÖĞRENCİ YURDU', 'asdasd', NULL, '(544) 942-1274', 'CANAN DAĞDEVİREN KIZ ÖĞRENCİ YURDU', 'Üniversite Mh. Jandarma Komando Onbaşı Kadir Demir Sk. No: 7 Avcılar / İSTANBUL ', 'Canan Dağdeviren Kız Öğrenci Yurdu olarak öğrencilerimize otel konforu ev rahatlığında hizmet veriyor ve onların tüm haklarını; ırk, dil, din, renk, siyasi görüş ve aile statüsü gözetmeden, adil ve eşit sahipleniyor ve sıcak bir aile ortamı oluşmasını sağlıyoruz.', 'mail@turgutkursat.org', NULL, NULL, '2019-08-28 20:03:39');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slides`
--

DROP TABLE IF EXISTS `slides`;
CREATE TABLE IF NOT EXISTS `slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `isActive` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slides`
--

INSERT INTO `slides` (`id`, `image`, `isActive`, `date`, `title`) VALUES
(17, 'assets/upload/slides/2.jpg', 'true', '2019-08-25 13:47:26', 'Slider1'),
(18, 'assets/upload/slides/3.jpg', 'true', '2019-08-25 13:47:37', 'Slide2'),
(19, 'assets/upload/slides/1.jpg', 'true', '2019-08-25 13:47:44', 'Slide3');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sss`
--

DROP TABLE IF EXISTS `sss`;
CREATE TABLE IF NOT EXISTS `sss` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `message` text COLLATE utf8_turkish_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sss`
--

INSERT INTO `sss` (`id`, `title`, `message`, `date`) VALUES
(4, 'Yurt Kaydımı Ne Zaman Yapabilirim?', 'Yurt kaydınızı dilediğiniz zaman web sayfamıza girip ön kayıt formunu doldurduktan sonra kayıt masası tarafından size geri dönüş yapılacak ve gerekli işlemler başlatılacaktır.', ''),
(5, 'Fiyata dahil Hizmetler nelerdir?', 'Elektrik, ısınma 24 saat sıcak su, 24 saat internet,24 saat güvenlik, açıkbüfe kahvaltı sinema salonu, hamam, sauna, fıtness, masa tenisi, oda temizliği, dahili telefon.', ''),
(6, 'Ödemelerimi nasıl yapabilirim?', 'Ödemelerinizi peşin, kredi kartı ve senet şeklinde yapabilirsiniz', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `rank` int(11) NOT NULL DEFAULT '3',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `image`, `fullName`, `email`, `password`, `rank`, `date`) VALUES
(11, 'assets/images/uploads/user.png', 'User Admin', 'admin@admin.com', 'eJwrtrK0UkpJzc1PTMnNzFOyBgAsZgVO', 2, '2019-08-21 08:15:57'),
(12, 'assets/images/uploads/user.png', 'Canan Dağdeviren', 'admin@canandagdevirenogrenciyurdu.com.tr', 'eJwrtrKwUkpMyc3MMzQyVrIGACP8BD4=', 2, '2019-08-25 10:11:27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
