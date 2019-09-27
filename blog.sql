-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 27, 2019 at 09:38 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `membername` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `freeze` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `memberimg` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `membername`, `password`, `email`, `freeze`, `memberimg`) VALUES
(1, 'Ozgur', 'MTIz', 'ozgur@gmail.com', '0', '/img/ozgur.jpeg'),
(6, 'Furkan', 'c2VsYW0=', 'furkan@gmail.com', '0', '/img/Furkan'),
(7, 'Mustafa', 'MTIz', 'admin@myblog.com', '0', 'img/Admin'),
(8, 'try', 'aW50', '1@gmail.com', '0', 'img/try');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sender` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `reciver` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `title`, `content`, `sender`, `reciver`, `date`) VALUES
(1, 'Sığacık', 'Sığacık gezisi hakkında...', 'Ozgur', 'Mustaga', '2019-09-20'),
(2, 'Deneme Mesajım', 'Mustafa nbr', 'Ozgur', 'Mustafa', '19'),
(3, 'asdf', 'asdf', 'Ozgur', 'Mustafa', '9');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `content` text COLLATE utf8_turkish_ci NOT NULL,
  `senddate` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `membername` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `about` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `senddate`, `membername`, `about`, `url`) VALUES
(21, 'Oğuz Atay okuma rehberi', 'Oğuz Atay hayattayken pek az okunmuş, beklediğinin çok altında eleştiri ve değerlendirme almış bir yazar. Berna Moran\'ın dediği gibi Türk edebiyatında yepyeni bir evre olan Tutunamayanlar\'a başlamış ama bitirememiş çok tanıdığım olduğundan eserlerini hangi sırayla okumanın onu anlamayı kolaylaştıracağını (elbette kendi fikrime göre) tarif etmek istiyorum. Atay\'ın bütün eserlerinin bir değerlendirmesini yapmak bir blog girdisi ile yapılabilecek bir şey olmadığından niyetimin sadece onun kitaplarını daha iyi anlamak için kişisel bir kılavuz hazırlamak olduğunu da söylemeliyim. ', '2019/09/24/01:56:07pm', 'Ozgur', '', 'OguzAtayokumarehberi'),
(23, 'Çanakkale Ulaşımı Hakkında', 'Çanakkale Belediyesi 2006 yılından bu yana otobüslerde kentkart uygulamasını kullanıyor. Yani elinizde bu karttan yoksa parasını verip yolculuk yapmak mümkün değil. Kartı bir cihaza okutup ancak öyle yolculuk yapabiliyorsunuz (bu konuda itirazlarım var ama bu yazının konusu değil). Otobüslerin güzergahları da aradan geçen yıllarda oldukça çeşitlendi. Peki bu güzergahları ve sefer saatlerini kim belirliyor? Muhtemelen bu işe bakan bir şube müdürlüğü veya daire başkanlığı var ve onlar ellerindeki araçları uygun olduğunu düşündükleri şekilde bölüyorlar. Kendilerine sorulsa şehri tanıdıklarını ve en uygun rotaların bunlar olduğunu söyleyeceklerdir.  Eğer elinizde yılın hangi günü, hangi saatte, hangi duraktan kaç yolcunun otobüse bindiği (ve nerede indiği) bilgisi varsa bunlara en uygun otobüs güzergahlarını belirlemek ve sefer saatlerini ayarlamak bir mühendislik problemine dönüşür. Çanakkale belediyesi otobüse biniş bilgisine sahip olmasına rağmen otobüsten iniş bilgisine sahip değil ama bu da çözülemez bir sorun değil. Basitçe yolculara inişte kentkartlarını okutmaları durumunda küçük bir meblağ geri ödenerek bu bilgi toplanabilir. Tabi halka ne yapılmaya çalışıldığını da iyi anlatmak gereklidir. Eğer kentli toplanan bu verinin kendisine en uygun otobüs rotası ve sefer saati olarak geri döneceğini bilirse kolayca inerken de kartını okutmaya ikna olacaktır.  Peki belediye bu mühendislik problemini nasıl çözecek? Benim önerim belediyenin topladığı veriyi (gerekiyorsa anonimleştirerek) araştırmacılara açması olacaktır. Araştırmacılar bu veri kümesinden ilk bakışta aklımıza gelmeyen başka anlamlar da çıkartabileceklerdir. Şu anda bir sorun olduğunu düşünmediğimiz konular için çözüm önerileri üreteceklerdir.', '2019/09/24/01:57:13pm', 'Ozgur', '', 'CanakkaleUlasimiHakkinda'),
(35, 'ee', 'ee', '2019/09/26/09:59:24am', 'Ozgur', 'asdf', 'asdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
