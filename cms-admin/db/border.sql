-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2017 at 10:19 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `border`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(20) NOT NULL,
  `page_title` varchar(255) DEFAULT NULL,
  `image` text,
  `page_deatils` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `page_title`, `image`, `page_deatils`, `date`, `status`) VALUES
(3, 'About Us', '', '&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and\r\n typesetting industry. Lorem Ipsum has been the industry''s standard \r\ndummy text ever since the 1500s, when an unknown printer took a galley \r\nof type and scrambled it to make a type specimen book. It has survived \r\nnot only five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.&lt;/p&gt;&lt;p&gt;It is a long established fact \r\nthat a reader will be distracted by the readable content of a page when \r\nlooking at its layout. The point of using Lorem Ipsum is that it has a \r\nmore-or-less normal distribution of letters, as opposed to using \r\n''Content here, content here'', making it look like readable English. Many\r\n desktop publishing packages and web page editors now use Lorem Ipsum as\r\n their default model text, and a search for ''lorem ipsum'' will uncover \r\nmany web sites still in their infancy. Various versions have evolved \r\nover the years, sometimes by accident, sometimes on purpose (injected \r\nhumour and the like).&lt;/p&gt;&lt;p&gt;Contrary to popular belief, Lorem Ipsum is \r\nnot simply random text. It has roots in a piece of classical Latin \r\nliterature from 45 BC, making it over 2000 years old. Richard \r\nMcClintock, a Latin professor at Hampden-Sydney College in Virginia, \r\nlooked up one of the more obscure Latin words, consectetur, from a Lorem\r\n Ipsum passage, and going through the cites of the word in classical \r\nliterature, discovered the undoubtable source. Lorem Ipsum comes from \r\nsections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The \r\nExtremes of Good and Evil) by Cicero, written in 45 BC. This book is a \r\ntreatise on the theory of ethics, very popular during the Renaissance. \r\nThe first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes \r\nfrom a line in section 1.10.32.&lt;/p&gt;&lt;p&gt;There are many variations of \r\npassages of Lorem Ipsum available, but the majority have suffered \r\nalteration in some form, by injected humour, or randomised words which \r\ndon''t look even slightly believable. If you are going to use a passage \r\nof Lorem Ipsum, you need to be sure there isn''t anything embarrassing \r\nhidden in the middle of text. All the Lorem Ipsum generators on the \r\nInternet tend to repeat predefined chunks as necessary, making this the \r\nfirst true generator on the Internet. It uses a dictionary of over 200 \r\nLatin words, combined with a handful of model sentence structures, to \r\ngenerate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum \r\nis therefore always free from repetition, injected humour, or \r\nnon-characteristic words etc..&lt;/p&gt;', '2017-01-09', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `about_us_view`
--
CREATE TABLE IF NOT EXISTS `about_us_view` (
`id` int(20)
,`page_title` varchar(255)
,`image` text
,`page_deatils` text
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `authorize_user`
--

CREATE TABLE IF NOT EXISTS `authorize_user` (
  `id` int(20) NOT NULL,
  `pc_name` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authorize_user`
--

INSERT INTO `authorize_user` (`id`, `pc_name`, `date`, `status`) VALUES
(1, 'SUL-LABPC-11', '2015-09-15', 1),
(2, 'fahad-PC', NULL, NULL),
(4, 'Khairul-PC', NULL, NULL),
(5, 'SUL-Soft-PC', '2015-11-25', 1),
(7, 'USER-PC-Monira', '2015-12-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `photo` text,
  `date` date DEFAULT NULL,
  `blog_type` varchar(255) DEFAULT NULL,
  `short_details` text,
  `long_details` text,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `photo`, `date`, `blog_type`, `short_details`, `long_details`, `status`) VALUES
(1, 'The Only Thing That Matters To Us', 'photo_upload__1482607834_1482607834.jpg', '2017-01-09', 'Work & Travel', 'Egraphy is the process of creating still or moving pictures by recording radiation on a sensitive medium like film or an electronic sensor. The products of photography are called negatives and photographs, the latter being developed from the negatives.', '&lt;p&gt;Egraphy is the process of creating still or moving pictures by recording radiation on a sensitive medium like film or an electronic sensor. The products of photography are called negatives and photographs, the latter being developed from the negatives.&lt;/p&gt;&lt;p&gt;Artists are crafters of human thought and emotion. Think about that .. its massive. It is for us to inspire and motivate. To merely duplicate is to devastate. True innovation is born on the wings of reality, but will always fly one mile higher. Don&amp;rsquo;t ever think for a moment we are merely couriers of imitation to some sort of &amp;ldquo;reality&amp;rdquo;.&lt;/p&gt;', 1),
(2, 'How photography connects us', 'photo_upload__1482607937_1482607937.jpg', '2016-12-25', 'Work & Travel', 'Egraphy is the process of creating still or moving pictures by recording\r\n radiation on a sensitive medium like film or an electronic sensor. The \r\nproducts of photography are called negatives and photographs, the latter\r\n being developed from the negatives.', '&lt;p&gt;Egraphy is the process of creating still or moving pictures by \r\nrecording radiation on a sensitive medium like film or an electronic \r\nsensor. The products of photography are called negatives and \r\nphotographs, the latter being developed from the negatives.&lt;/p&gt;&lt;p&gt;Artists are crafters of human\r\n thought and emotion. Think about that .. its massive. It is for us to \r\ninspire and motivate. To merely duplicate is to devastate. True \r\ninnovation is born on the wings of reality, but will always fly one mile\r\n higher. Don&amp;rsquo;t ever think for a moment we are merely couriers of \r\nimitation to some sort of &amp;ldquo;reality&amp;rdquo;.&lt;/p&gt;&lt;h2&gt;Give the idea a shower&lt;/h2&gt;&lt;div class="wp-caption aligncenter" id="attachment_519" style="width:1034px;"&gt;&lt;a class="dJAX_internal" href="http://192.168.06/Fakhrul/template/Border/image/dsc_0051-1024x576.jpg"&gt;&lt;img alt=" " class="size-full wp-image-519" height="576" src="http://192.168.06/Fakhrul/template/Border/image/dsc_0051-1024x576.jpg" width="1024" /&gt;&lt;/a&gt;&lt;p class="wp-caption-text"&gt;Light and Movement &amp;copy; Cristian Frumusanu&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;The seed needs to be soaked \r\nin an inspiration shower (patent pending). I hunt the interwebs for cool\r\n UI patterns and archive them in a massive Photoshop file. For example, \r\nwhen working on YouTube TV I grabbed hundreds of examples of future UI \r\nfrom futurists like Jayse Hansen and Neil Huxley.&lt;/p&gt;&lt;p&gt;Tiny women carry amazingly \r\nlarge bags, twice their eighty-pound weight. Some of the women carry \r\nbabies in slings around front. A good adult picker can harvest over two \r\nhundred pounds of cherries and earn $8 a day, more than twice the \r\nGuatemalan minimum daily wage.&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;Compel your \r\naudience. Capture the moment. Light with purpose. If a picture is worth a\r\n thousand words, what&amp;rsquo;s a talking picture worth?&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;While I&amp;rsquo;m not the best \r\nphotographer you&amp;rsquo;ll bump into, my images are worth something. It&amp;rsquo;s hard \r\nto put a monetary value on some shots, but those photos sell, and those \r\nphotos arouse emotions.&lt;/p&gt;&lt;p&gt;And beyond that, those are \r\none-in-a-lifetime experiences that I documented through my photo trips. \r\nAnd beyond that, those are one-in-a-lifetime experiences that I \r\ndocumented through my photo trips.&lt;/p&gt;', 1),
(3, 'The Hidden Power of Smiling', 'photo_upload__1482607974_1482607974.jpg', '2016-12-25', 'Work & Travel', 'Egraphy is the process of creating still or moving pictures by recording\r\n radiation on a sensitive medium like film or an electronic sensor. The \r\nproducts of photography are called negatives and photographs, the latter\r\n being developed from the negatives.', '&lt;p&gt;Egraphy is the process of creating still or moving pictures by \r\nrecording radiation on a sensitive medium like film or an electronic \r\nsensor. The products of photography are called negatives and \r\nphotographs, the latter being developed from the negatives.&lt;/p&gt;&lt;p&gt;Artists are crafters of human\r\n thought and emotion. Think about that .. its massive. It is for us to \r\ninspire and motivate. To merely duplicate is to devastate. True \r\ninnovation is born on the wings of reality, but will always fly one mile\r\n higher. Don&amp;rsquo;t ever think for a moment we are merely couriers of \r\nimitation to some sort of &amp;ldquo;reality&amp;rdquo;.&lt;/p&gt;&lt;h2&gt;Give the idea a shower&lt;/h2&gt;&lt;div class="wp-caption aligncenter" id="attachment_519" style="width:1034px;"&gt;&lt;a class="dJAX_internal" href="http://192.168.06/Fakhrul/template/Border/image/dsc_0051-1024x576.jpg"&gt;&lt;img alt=" " class="size-full wp-image-519" height="576" src="http://192.168.06/Fakhrul/template/Border/image/dsc_0051-1024x576.jpg" width="1024" /&gt;&lt;/a&gt;&lt;p class="wp-caption-text"&gt;Light and Movement &amp;copy; Cristian Frumusanu&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;The seed needs to be soaked \r\nin an inspiration shower (patent pending). I hunt the interwebs for cool\r\n UI patterns and archive them in a massive Photoshop file. For example, \r\nwhen working on YouTube TV I grabbed hundreds of examples of future UI \r\nfrom futurists like Jayse Hansen and Neil Huxley.&lt;/p&gt;&lt;p&gt;Tiny women carry amazingly \r\nlarge bags, twice their eighty-pound weight. Some of the women carry \r\nbabies in slings around front. A good adult picker can harvest over two \r\nhundred pounds of cherries and earn $8 a day, more than twice the \r\nGuatemalan minimum daily wage.&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;Compel your \r\naudience. Capture the moment. Light with purpose. If a picture is worth a\r\n thousand words, what&amp;rsquo;s a talking picture worth?&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;While I&amp;rsquo;m not the best \r\nphotographer you&amp;rsquo;ll bump into, my images are worth something. It&amp;rsquo;s hard \r\nto put a monetary value on some shots, but those photos sell, and those \r\nphotos arouse emotions.&lt;/p&gt;&lt;p&gt;And beyond that, those are \r\none-in-a-lifetime experiences that I documented through my photo trips. \r\nAnd beyond that, those are one-in-a-lifetime experiences that I \r\ndocumented through my photo trips.&lt;/p&gt;', 1),
(4, 'Flow Is the Secret to Happiness', 'photo_upload__1482608016_1482608016.jpg', '2016-12-25', 'Work & Travel', 'Egraphy is the process of creating still or moving pictures by recording\r\n radiation on a sensitive medium like film or an electronic sensor. The \r\nproducts of photography are called negatives and photographs, the latter\r\n being developed from the negatives.', '&lt;p&gt;Egraphy is the process of creating still or moving pictures by \r\nrecording radiation on a sensitive medium like film or an electronic \r\nsensor. The products of photography are called negatives and \r\nphotographs, the latter being developed from the negatives.&lt;/p&gt;&lt;p&gt;Artists are crafters of human\r\n thought and emotion. Think about that .. its massive. It is for us to \r\ninspire and motivate. To merely duplicate is to devastate. True \r\ninnovation is born on the wings of reality, but will always fly one mile\r\n higher. Don&amp;rsquo;t ever think for a moment we are merely couriers of \r\nimitation to some sort of &amp;ldquo;reality&amp;rdquo;.&lt;/p&gt;&lt;h2&gt;Give the idea a shower&lt;/h2&gt;&lt;div class="wp-caption aligncenter" id="attachment_519" style="width:1034px;"&gt;&lt;a class="dJAX_internal" href="http://192.168.06/Fakhrul/template/Border/image/dsc_0051-1024x576.jpg"&gt;&lt;img alt=" " class="size-full wp-image-519" height="576" src="http://192.168.06/Fakhrul/template/Border/image/dsc_0051-1024x576.jpg" width="1024" /&gt;&lt;/a&gt;&lt;p class="wp-caption-text"&gt;Light and Movement &amp;copy; Cristian Frumusanu&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;The seed needs to be soaked \r\nin an inspiration shower (patent pending). I hunt the interwebs for cool\r\n UI patterns and archive them in a massive Photoshop file. For example, \r\nwhen working on YouTube TV I grabbed hundreds of examples of future UI \r\nfrom futurists like Jayse Hansen and Neil Huxley.&lt;/p&gt;&lt;p&gt;Tiny women carry amazingly \r\nlarge bags, twice their eighty-pound weight. Some of the women carry \r\nbabies in slings around front. A good adult picker can harvest over two \r\nhundred pounds of cherries and earn $8 a day, more than twice the \r\nGuatemalan minimum daily wage.&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;Compel your \r\naudience. Capture the moment. Light with purpose. If a picture is worth a\r\n thousand words, what&amp;rsquo;s a talking picture worth?&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;While I&amp;rsquo;m not the best \r\nphotographer you&amp;rsquo;ll bump into, my images are worth something. It&amp;rsquo;s hard \r\nto put a monetary value on some shots, but those photos sell, and those \r\nphotos arouse emotions.&lt;/p&gt;&lt;p&gt;And beyond that, those are \r\none-in-a-lifetime experiences that I documented through my photo trips. \r\nAnd beyond that, those are one-in-a-lifetime experiences that I \r\ndocumented through my photo trips.&lt;/p&gt;', 1),
(5, 'The Voice of the Natural World', 'photo_upload__1482608050_1482608050.jpg', '2016-12-25', 'Work & Travel', 'Egraphy is the process of creating still or moving pictures by \r\nrecording radiation on a sensitive medium like film or an electronic \r\nsensor. The products of photography are called negatives and \r\nphotographs, the latter being developed from the negatives.', '&lt;p&gt;Egraphy is the process of creating still or moving pictures by \r\nrecording radiation on a sensitive medium like film or an electronic \r\nsensor. The products of photography are called negatives and \r\nphotographs, the latter being developed from the negatives.&lt;/p&gt;&lt;p&gt;Artists are crafters of human\r\n thought and emotion. Think about that .. its massive. It is for us to \r\ninspire and motivate. To merely duplicate is to devastate. True \r\ninnovation is born on the wings of reality, but will always fly one mile\r\n higher. Don&amp;rsquo;t ever think for a moment we are merely couriers of \r\nimitation to some sort of &amp;ldquo;reality&amp;rdquo;.&lt;/p&gt;&lt;h2&gt;Give the idea a shower&lt;/h2&gt;&lt;div class="wp-caption aligncenter" id="attachment_519" style="width:1034px;"&gt;&lt;a class="dJAX_internal" href="http://192.168.06/Fakhrul/template/Border/image/dsc_0051-1024x576.jpg"&gt;&lt;img alt=" " class="size-full wp-image-519" height="576" src="http://192.168.06/Fakhrul/template/Border/image/dsc_0051-1024x576.jpg" width="1024" /&gt;&lt;/a&gt;&lt;p class="wp-caption-text"&gt;Light and Movement &amp;copy; Cristian Frumusanu&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;The seed needs to be soaked \r\nin an inspiration shower (patent pending). I hunt the interwebs for cool\r\n UI patterns and archive them in a massive Photoshop file. For example, \r\nwhen working on YouTube TV I grabbed hundreds of examples of future UI \r\nfrom futurists like Jayse Hansen and Neil Huxley.&lt;/p&gt;&lt;p&gt;Tiny women carry amazingly \r\nlarge bags, twice their eighty-pound weight. Some of the women carry \r\nbabies in slings around front. A good adult picker can harvest over two \r\nhundred pounds of cherries and earn $8 a day, more than twice the \r\nGuatemalan minimum daily wage.&lt;/p&gt;&lt;blockquote&gt;&lt;p&gt;Compel your \r\naudience. Capture the moment. Light with purpose. If a picture is worth a\r\n thousand words, what&amp;rsquo;s a talking picture worth?&lt;/p&gt;&lt;/blockquote&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;While I&amp;rsquo;m not the best \r\nphotographer you&amp;rsquo;ll bump into, my images are worth something. It&amp;rsquo;s hard \r\nto put a monetary value on some shots, but those photos sell, and those \r\nphotos arouse emotions.&lt;/p&gt;&lt;p&gt;And beyond that, those are \r\none-in-a-lifetime experiences that I documented through my photo trips. \r\nAnd beyond that, those are one-in-a-lifetime experiences that I \r\ndocumented through my photo trips.&lt;/p&gt;', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `blog_view`
--
CREATE TABLE IF NOT EXISTS `blog_view` (
`id` int(20)
,`title` varchar(255)
,`photo` text
,`date` date
,`blog_type` varchar(255)
,`short_details` text
,`long_details` text
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `priority` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `priority`, `date`, `status`) VALUES
(5, 'Gallery', 1, '2016-12-26', 1),
(6, 'Portfolio', 2, '2016-12-26', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `category_view`
--
CREATE TABLE IF NOT EXISTS `category_view` (
`id` int(20)
,`name` varchar(255)
,`priority` int(20)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(20) NOT NULL,
  `photo` text,
  `about_us` text,
  `address` text,
  `phone_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `photo`, `about_us`, `address`, `phone_number`, `email`, `location`, `date`, `status`) VALUES
(1, 'photo_upload__1482693102_1482693102.jpg', 'Now, as you were able to get a picture of who I am, how I work and what I\r\n can do for you and your brand, it is up to you to contact me and lay \r\nthe foundation for a new and successful business relationship.', 'Unit 13c / Piano House, 9 Brighton Terrace, London, SW7 3DJ                                                 ', '+44 (0) 7801 415 481', ' anastasia@yoursite.com ', 'https://www.google.com/maps/preview?ll=51.392952,-2.392831&z=13&hl=en&gl=US&mapclient=apiv3', '2016-12-26', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `contact_us_view`
--
CREATE TABLE IF NOT EXISTS `contact_us_view` (
`id` int(20)
,`photo` text
,`about_us` text
,`address` text
,`phone_number` varchar(255)
,`email` varchar(255)
,`location` varchar(255)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `custom_table_field`
--

CREATE TABLE IF NOT EXISTS `custom_table_field` (
  `id` int(20) NOT NULL,
  `table_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custom_table_field`
--

INSERT INTO `custom_table_field` (`id`, `table_id`, `name`, `date`, `status`) VALUES
(1, 1, 'site_name', '2016-12-24', 1),
(2, 1, 'site_logo', '2016-12-24', 1),
(3, 1, 'facebook_link', '2016-12-24', 1),
(4, 1, 'twitter_link', '2016-12-24', 1),
(5, 1, 'youtube_link', '2016-12-24', 1),
(6, 1, 'flickr', '2016-12-24', 1),
(8, 3, 'slider_name', '2016-12-24', 1),
(9, 3, 'image', '2016-12-24', 1),
(10, 3, 'slider_top_text', '2016-12-24', 1),
(11, 3, 'slider_middle_text', '2016-12-24', 1),
(12, 3, 'slider_bottom_text', '2016-12-24', 1),
(13, 4, 'name', '2016-12-24', 1),
(14, 4, 'priority', '2016-12-24', 1),
(29, 8, 'category_id', '2016-12-25', 1),
(30, 8, 'name', '2016-12-25', 1),
(31, 8, 'priority', '2016-12-25', 1),
(32, 9, 'category_id', '2016-12-25', 1),
(33, 9, 'sub_category_id', '2016-12-25', 1),
(34, 9, 'photo_title', '2016-12-25', 1),
(35, 9, 'photo', '2016-12-25', 1),
(36, 9, 'photo_type', '2016-12-25', 1),
(37, 9, 'photo_details', '2016-12-25', 1),
(38, 9, 'priority', '2016-12-25', 1),
(40, 11, 'title', '2016-12-25', 1),
(41, 11, 'photo', '2016-12-25', 1),
(42, 11, 'date', '2016-12-25', 1),
(43, 11, 'blog_type', '2016-12-25', 1),
(44, 11, 'short_details', '2016-12-25', 1),
(45, 11, 'long_details', '2016-12-25', 1),
(46, 12, 'photo', '2016-12-26', 1),
(47, 12, 'about_us', '2016-12-26', 1),
(48, 12, 'address', '2016-12-26', 1),
(49, 12, 'phone_number', '2016-12-26', 1),
(50, 12, 'email', '2016-12-26', 1),
(51, 12, 'location', '2016-12-26', 1),
(55, 14, 'page_title', '2017-01-09', 1),
(56, 14, 'image', '2017-01-09', 1),
(57, 14, 'page_deatils', '2017-01-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `blood_group` varchar(20) NOT NULL,
  `dob` date DEFAULT NULL,
  `contactnumber` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `gender`, `blood_group`, `dob`, `contactnumber`, `address`, `username`, `password`, `date`, `status`) VALUES
(3, 'CMS Admin', '1', '1', '2015-12-09', '01927608261', 'asdS', 'cms', '7e8a32176a113a7ba3d2b1f85834e828', '2015-09-13', 1),
(4, 'Shanto', '1', '1', '1988-08-16', '13231312', 'wesaqweqw', 'shanto', '7e8a32176a113a7ba3d2b1f85834e828', '2015-11-25', 1),
(5, 'Sirajum Munira', '1', '1', '1986-08-29', '01923318408', 'adasdsad', 'munira', '7e8a32176a113a7ba3d2b1f85834e828', '2015-12-13', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `login`
--
CREATE TABLE IF NOT EXISTS `login` (
`id` int(20)
,`name` varchar(255)
,`username` varchar(255)
,`password` varchar(255)
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `page_data`
--

CREATE TABLE IF NOT EXISTS `page_data` (
  `id` int(20) NOT NULL,
  `category_id` int(20) DEFAULT NULL,
  `sub_category_id` int(20) DEFAULT NULL,
  `photo_title` varchar(255) DEFAULT NULL,
  `photo` text,
  `photo_type` varchar(255) DEFAULT NULL,
  `photo_details` text,
  `priority` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_data`
--

INSERT INTO `page_data` (`id`, `category_id`, `sub_category_id`, `photo_title`, `photo`, `photo_type`, `photo_details`, `priority`, `date`, `status`) VALUES
(1, 5, 2, 'The Heat of Summer (Video)', 'photo_upload__1482690555_1482690555.jpg', '© Ann Nevreva', '&amp;nbsp;', 1, '2016-12-26', 1),
(2, 5, 2, '© Ann Nevreva', 'photo_upload__1482689746_1482689746.jpg', ' ', '&amp;nbsp;', 2, '2016-12-26', 1),
(3, 5, 2, 'The Heat of Summer (Video)', 'photo_upload__1482690492_1482690492.jpg', ' Portraits', '&amp;nbsp;', 3, '2016-12-26', 1),
(4, 6, 5, 'The Heat of Summer (Video)', 'photo_upload__1482691207_1482691207.jpg', 'Portraits', '&amp;nbsp;', 2, '2016-12-26', 1),
(5, 5, 3, 'The Heat of Summer (Video)', 'photo_upload__1482691237_1482691237.jpg', '© Ann Nevreva', '&amp;nbsp;', 6, '2016-12-26', 1),
(6, 5, 2, '© Ann Nevreva', 'photo_upload__1482691576_1482691576.jpg', '© Ann Nevreva', '&amp;nbsp; &lt;br /&gt;', 7, '2016-12-26', 1),
(7, 5, 2, 'The Heat of Summer (Video)', 'photo_upload__1482691610_1482691610.jpg', '© Ann Nevreva', '&amp;nbsp;', 3, '2016-12-26', 1),
(8, 5, 2, 'The Heat of Summer (Video)', 'photo_upload__1482692565_1482692565.jpg', 'Portraits', '&amp;nbsp;', 3, '2016-12-26', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `page_data_view`
--
CREATE TABLE IF NOT EXISTS `page_data_view` (
`id` int(20)
,`category_id` int(20)
,`sub_category_id` int(20)
,`photo_title` varchar(255)
,`photo` text
,`photo_type` varchar(255)
,`photo_details` text
,`priority` int(20)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `page_info`
--

CREATE TABLE IF NOT EXISTS `page_info` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `page_name_view` varchar(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `status` int(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_info`
--

INSERT INTO `page_info` (`id`, `name`, `page_name`, `page_name_view`, `menu_name`, `date`, `status`) VALUES
(1, 'site_basic_info', 'site_basic_info.php', '', 'Site basic info', '2016-12-24', 1),
(3, 'slider', 'slider.php', '', 'Slider', '2016-12-24', 1),
(4, 'category', 'category.php', '', 'Category', '2016-12-24', 1),
(8, 'sub_category', 'sub_category.php', '', 'Sub Category', '2016-12-25', 1),
(9, 'page_data', 'page_data.php', '', 'Page Data', '2016-12-25', 1),
(11, 'blog', 'blog.php', '', 'Blog', '2016-12-25', 1),
(12, 'contact_us', 'contact_us.php', '', 'Contact us', '2016-12-26', 1),
(14, 'about_us', 'about_us.php', '', 'About us', '2017-01-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `site_basic_info`
--

CREATE TABLE IF NOT EXISTS `site_basic_info` (
  `id` int(20) NOT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `site_logo` text,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `flickr` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_basic_info`
--

INSERT INTO `site_basic_info` (`id`, `site_name`, `site_logo`, `facebook_link`, `twitter_link`, `youtube_link`, `flickr`, `date`, `status`) VALUES
(1, 'Border', 'site_logo_upload__1482571700_1482571700.png', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.youtube.com/', 'https://www.flickr.com/', '2016-12-24', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `site_basic_info_view`
--
CREATE TABLE IF NOT EXISTS `site_basic_info_view` (
`id` int(20)
,`site_name` varchar(255)
,`site_logo` text
,`facebook_link` varchar(255)
,`twitter_link` varchar(255)
,`youtube_link` varchar(255)
,`flickr` varchar(255)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(20) NOT NULL,
  `slider_name` varchar(255) DEFAULT NULL,
  `image` text,
  `slider_top_text` varchar(255) DEFAULT NULL,
  `slider_middle_text` varchar(255) DEFAULT NULL,
  `slider_bottom_text` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_name`, `image`, `slider_top_text`, `slider_middle_text`, `slider_bottom_text`, `date`, `status`) VALUES
(1, 'Darío Sastre', 'image_upload__1482569427_1482569427.jpg', 'true sounds of liberty', 'Oliver & Mason', 'Explore My Portfolio', '2016-12-24', 1),
(2, 'King of Richmond © Mark Bridger', 'image_upload__1482569761_1482569761.jpg', ' ', ' ', ' ', '2016-12-24', 1),
(3, '© Anna Evreva', 'image_upload__1482569598_1482569598.jpg', ' ', ' ', ' ', '2016-12-24', 1),
(4, 'Crowned Crane © Mark Bridger', 'image_upload__1482569714_1482569714.jpg', ' ', ' ', ' ', '2016-12-24', 1),
(5, '© Ann Nevreva', 'image_upload__1482569741_1482569741.jpg', ' ', ' ', ' ', '2016-12-24', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `slider_view`
--
CREATE TABLE IF NOT EXISTS `slider_view` (
`id` int(20)
,`slider_name` varchar(255)
,`image` text
,`slider_top_text` varchar(255)
,`slider_middle_text` varchar(255)
,`slider_bottom_text` varchar(255)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int(20) NOT NULL,
  `category_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `priority` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `name`, `priority`, `date`, `status`) VALUES
(2, 5, 'Masonry Archive', 1, '2016-12-26', 1),
(3, 5, 'Slideshow', 2, '2016-12-26', 1),
(4, 5, 'Masonry', 4, '2016-12-26', 1),
(5, 6, 'Archive', 5, '2016-12-26', 1),
(6, 6, 'Masonry Archive', 6, '2016-12-26', 1),
(7, 6, 'Slideshow', 7, '2016-12-26', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sub_category_view`
--
CREATE TABLE IF NOT EXISTS `sub_category_view` (
`id` int(20)
,`category_id` int(20)
,`name` varchar(255)
,`priority` int(20)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Structure for view `about_us_view`
--
DROP TABLE IF EXISTS `about_us_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `about_us_view` AS select `about_us`.`id` AS `id`,`about_us`.`page_title` AS `page_title`,`about_us`.`image` AS `image`,`about_us`.`page_deatils` AS `page_deatils`,`about_us`.`date` AS `date`,`about_us`.`status` AS `status` from `about_us`;

-- --------------------------------------------------------

--
-- Structure for view `blog_view`
--
DROP TABLE IF EXISTS `blog_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `blog_view` AS select `blog`.`id` AS `id`,`blog`.`title` AS `title`,`blog`.`photo` AS `photo`,`blog`.`date` AS `date`,`blog`.`blog_type` AS `blog_type`,`blog`.`short_details` AS `short_details`,`blog`.`long_details` AS `long_details`,`blog`.`status` AS `status` from `blog`;

-- --------------------------------------------------------

--
-- Structure for view `category_view`
--
DROP TABLE IF EXISTS `category_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `category_view` AS select `category`.`id` AS `id`,`category`.`name` AS `name`,`category`.`priority` AS `priority`,`category`.`date` AS `date`,`category`.`status` AS `status` from `category`;

-- --------------------------------------------------------

--
-- Structure for view `contact_us_view`
--
DROP TABLE IF EXISTS `contact_us_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `contact_us_view` AS select `contact_us`.`id` AS `id`,`contact_us`.`photo` AS `photo`,`contact_us`.`about_us` AS `about_us`,`contact_us`.`address` AS `address`,`contact_us`.`phone_number` AS `phone_number`,`contact_us`.`email` AS `email`,`contact_us`.`location` AS `location`,`contact_us`.`date` AS `date`,`contact_us`.`status` AS `status` from `contact_us`;

-- --------------------------------------------------------

--
-- Structure for view `login`
--
DROP TABLE IF EXISTS `login`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `login` AS select `employee`.`id` AS `id`,`employee`.`name` AS `name`,`employee`.`username` AS `username`,`employee`.`password` AS `password`,`employee`.`status` AS `status` from `employee`;

-- --------------------------------------------------------

--
-- Structure for view `page_data_view`
--
DROP TABLE IF EXISTS `page_data_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `page_data_view` AS select `page_data`.`id` AS `id`,`page_data`.`category_id` AS `category_id`,`page_data`.`sub_category_id` AS `sub_category_id`,`page_data`.`photo_title` AS `photo_title`,`page_data`.`photo` AS `photo`,`page_data`.`photo_type` AS `photo_type`,`page_data`.`photo_details` AS `photo_details`,`page_data`.`priority` AS `priority`,`page_data`.`date` AS `date`,`page_data`.`status` AS `status` from `page_data`;

-- --------------------------------------------------------

--
-- Structure for view `site_basic_info_view`
--
DROP TABLE IF EXISTS `site_basic_info_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `site_basic_info_view` AS select `site_basic_info`.`id` AS `id`,`site_basic_info`.`site_name` AS `site_name`,`site_basic_info`.`site_logo` AS `site_logo`,`site_basic_info`.`facebook_link` AS `facebook_link`,`site_basic_info`.`twitter_link` AS `twitter_link`,`site_basic_info`.`youtube_link` AS `youtube_link`,`site_basic_info`.`flickr` AS `flickr`,`site_basic_info`.`date` AS `date`,`site_basic_info`.`status` AS `status` from `site_basic_info`;

-- --------------------------------------------------------

--
-- Structure for view `slider_view`
--
DROP TABLE IF EXISTS `slider_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `slider_view` AS select `slider`.`id` AS `id`,`slider`.`slider_name` AS `slider_name`,`slider`.`image` AS `image`,`slider`.`slider_top_text` AS `slider_top_text`,`slider`.`slider_middle_text` AS `slider_middle_text`,`slider`.`slider_bottom_text` AS `slider_bottom_text`,`slider`.`date` AS `date`,`slider`.`status` AS `status` from `slider`;

-- --------------------------------------------------------

--
-- Structure for view `sub_category_view`
--
DROP TABLE IF EXISTS `sub_category_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sub_category_view` AS select `sub_category`.`id` AS `id`,`sub_category`.`category_id` AS `category_id`,`sub_category`.`name` AS `name`,`sub_category`.`priority` AS `priority`,`sub_category`.`date` AS `date`,`sub_category`.`status` AS `status` from `sub_category`;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authorize_user`
--
ALTER TABLE `authorize_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_table_field`
--
ALTER TABLE `custom_table_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_data`
--
ALTER TABLE `page_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_info`
--
ALTER TABLE `page_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_basic_info`
--
ALTER TABLE `site_basic_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `authorize_user`
--
ALTER TABLE `authorize_user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `custom_table_field`
--
ALTER TABLE `custom_table_field`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `page_data`
--
ALTER TABLE `page_data`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `page_info`
--
ALTER TABLE `page_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `site_basic_info`
--
ALTER TABLE `site_basic_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
