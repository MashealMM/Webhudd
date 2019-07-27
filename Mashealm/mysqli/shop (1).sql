-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 18, 2017 at 10:17 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `baby`
--

CREATE TABLE IF NOT EXISTS `baby` (
  `B_id` int(10) NOT NULL,
  `B_name` varchar(100) NOT NULL,
  `B_price` int(11) NOT NULL,
  `B_img` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baby`
--

INSERT INTO `baby` (`B_id`, `B_name`, `B_price`, `B_img`) VALUES
(1, 'Three-piece trousers', 899, 'https://img.elwlid.com/imgcache/2014/03/802674.jpg'),
(2, 'trousers', 678, 'http://1.bp.blogspot.com/-H89R3LbZFpA/UcxNmuo0ajI/AAAAAAAAISk/b5613v5wEPk/s600/alonso-mateo.jpg'),
(3, 'trousers', 566, 'http://1.bp.blogspot.com/-Hvk0kLIaiS4/UZO5bBC0pFI/AAAAAAAAAIY/XAlzXBpLdcM/s1600/2.jpg'),
(4, 'Pants', 490, 'https://upload.3dlat.net/uploads/3dlat.net_13_17_b205_0a03703848a16.jpg'),
(5, 'nn', 678, 'https://ae01.alicdn.com/kf/HTB1eIcMLpXXXXbfXpXXq6xXFXXXc/Boys-Set-Summer-Casual-Kids-Clothes-2016-Fa');

-- --------------------------------------------------------

--
-- Table structure for table `bags`
--

CREATE TABLE IF NOT EXISTS `bags` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(100) NOT NULL,
  `b_price` int(11) NOT NULL,
  `b_img` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bags`
--

INSERT INTO `bags` (`b_id`, `b_name`, `b_price`, `b_img`) VALUES
(1, 'bag bnik', 67, 'http://img.doduae.com/image/cache/catalog/bags/108hb4/beautiful-arrows-printing-women-s-tote-bag-set'),
(2, 'bag', 78, 'http://embroidery.net/assets/img/bags_nike_golf_cinch_sack_img1.png');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `c_id` int(10) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `girls`
--

CREATE TABLE IF NOT EXISTS `girls` (
  `g_id` int(10) NOT NULL,
  `g_name` varchar(100) NOT NULL,
  `g_price` int(11) NOT NULL,
  `g_img` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `girls`
--

INSERT INTO `girls` (`g_id`, `g_name`, `g_price`, `g_img`) VALUES
(1, 'Dress Pink', 100, 'https://www.pattz.com/media/wysiwyg/pattz-summer-girls-dress.png'),
(10, 'Dress ', 100, 'https://vb.elmstba.com/imgcache/almastba.com_1392165094_739.gif'),
(11, 'trousers', 444, 'https://i.pinimg.com/236x/ee/ee/b6/eeeeb6940f8e7d41510a9620d0d2fcd3.jpg'),
(12, 'dress', 566, 'http://www.up.tassilialgerie.com/uploads/1473973858121.jpg'),
(13, 'trousers', 560, 'http://www.belg24.com/family/wp-content/uploads/2017/03/933-3-or-1459435741-500x330.jpg'),
(14, 'skirt', 566, 'http://st3-fashiony.ru/pic/kids/pic/134944/47.jpg'),
(15, 'dress', 900, 'https://sharray.net/wp-content/uploads/2016/04/cropped_1515489_7-500x399.jpg'),
(16, 'dress', 798, 'https://i2.wp.com/i2.ytimg.com/vi/1P8UeJIlUFo/mqdefault.jpg'),
(17, 'dress', 350, 'http://ytimg.googleusercontent.com/vi/QSBCMf79c7Y/mqdefault.jpg'),
(18, 'jj', 899, 'https://sc01.alicdn.com/kf/HTB19DA9IXXXXXaIXXXXq6xXFXXXl/223420139/HTB19DA9IXXXXXaIXXXXq6xXFXXXl.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `glasses`
--

CREATE TABLE IF NOT EXISTS `glasses` (
  `gl_id` int(10) NOT NULL,
  `gl_name` varchar(100) NOT NULL,
  `gl_price` int(11) NOT NULL,
  `gl_img` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `glasses`
--

INSERT INTO `glasses` (`gl_id`, `gl_name`, `gl_price`, `gl_img`) VALUES
(1, 'n', 100, 'http://data.whicdn.com/images/108740281/original.jpg'),
(2, 'u', 899, 'https://s8.favim.com/610/151209/claudia-sulewski-claudia-seluwski-Favim.com-3739268.jpg'),
(3, 'n6', 100, 'http://i.dailymail.co.uk/i/pix/2015/01/15/24BC10AB00000578-0-image-m-9_1421354721494.jpg'),
(4, 'rr', 70, 'https://i.ebayimg.com/images/g/PqsAAOSw7XZXh2IM/s-l300.jpg'),
(6, 'h', 90, 'http://n.nordstrommedia.com/ImageGallery/store/product/Zoom/3/_100348063.jpg'),
(7, 'm', 899, 'http://www.sayidaty.net/sites/default/files/styles/800x510/public/pics/25/10/2012/les_lunettes_bijou');

-- --------------------------------------------------------

--
-- Table structure for table `houres`
--

CREATE TABLE IF NOT EXISTS `houres` (
  `h_id` int(10) NOT NULL,
  `h_name` varchar(100) NOT NULL,
  `h_price` int(5) NOT NULL,
  `h_img` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houres`
--

INSERT INTO `houres` (`h_id`, `h_name`, `h_price`, `h_img`) VALUES
(1, 'Swatch', 100, 'https://forum.imageslove.net/photos/img_1403466233_604.jpg'),
(3, 'Swatch Watch', 150, 'http://bennybenz.com/media/Swatch%20SFK240B%201.jpg'),
(4, 'Dale Clock', 550, 'https://cdn.shopify.com/s/files/1/2099/8823/products/SW_DH_01_1024x1024.jpg?v=1499955784'),
(5, 'Dale Clock', 405, 'https://static.kaymu.pk/p/quartz-0374-359942-1-product.jpg'),
(6, 'Hour Al - Humaidhi', 350, 'http://www.gheir.com/big/montre-12-21-10-2014.jpg'),
(7, 'Hour Al - Humaidhi', 300, 'http://www.evearabia.com/ar/wp-content/uploads/21bf81b3-ac20-4c64-b2d0-3e2a8d71a35a.jpg'),
(8, 'Hour Al - Humaidhi', 240, 'https://pbs.twimg.com/media/DHCwk7uXUAA_pUe.jpg'),
(9, 'Hour Al - Humaidhi', 150, 'http://www.hayah.cc/forum/img1434/hayahcc_1443013538_349.jpg'),
(10, 'Hour Al - Humaidhi', 589, 'https://www.almrsal.com/wp-content/uploads/2015/02/damas-golden-watch-kanmia-.jpg'),
(11, 'n', 455, 'https://pbs.twimg.com/media/A759pcxCcAAk3pj.jpg'),
(12, 'n', 56, 'https://i.pinimg.com/236x/b3/31/9d/b3319d6b9e14a65d86e918b1f4111f50.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `man`
--

CREATE TABLE IF NOT EXISTS `man` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_price` int(11) NOT NULL,
  `m_img` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `man`
--

INSERT INTO `man` (`m_id`, `m_name`, `m_price`, `m_img`) VALUES
(1, 'm', 899, 'https://ae01.alicdn.com/kf/HTB13oskOXXXXXXWapXXq6xXFXXXI/Custom-Made-Groomsmen-Best-Man-Suit-Wedding'),
(2, 'n', 700, 'https://i.pinimg.com/736x/ea/49/a4/ea49a4b27fe95acb606d3d9b013a15a1--outfit-man-outfit-for-men.jpg'),
(3, 'o', 500, 'http://www4.pictures.zimbio.com/fp/Scott+Disick+Scott+Disick+Gets+Lunch+Beverly+GzjgmaBemgql.jpg'),
(4, 'mk', 90, 'http://www.ezytred.com/image/EMS0035_EMS0035blue-2Thumb.jpg'),
(5, 'jj', 800, 'https://ae01.alicdn.com/kf/HTB1PWcsOFXXXXXhXVXXq6xXFXXXs/2017Spring-New-High-Qualtiy-Dress-Blazer-Me'),
(6, 'b', 400, 'http://img.youtube.com/vi/N9yxbwe-2Ds/hqdefault.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mshoes`
--

CREATE TABLE IF NOT EXISTS `mshoes` (
  `ms_id` int(11) NOT NULL,
  `ms_name` varchar(100) NOT NULL,
  `ms_price` int(11) NOT NULL,
  `ms_img` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mshoes`
--

INSERT INTO `mshoes` (`ms_id`, `ms_name`, `ms_price`, `ms_img`) VALUES
(1, 'mm', 600, 'http://img.ewaaan.com/imgcache/1167044.jpg'),
(2, 'nn', 400, 'https://www.raffaello-network.com/item_images/giuszmsh-ru5006006006-large-1.jpg'),
(3, 'nu', 870, 'https://www.dhresource.com/0x0s/f2-albu-g3-M01-B1-DB-rBVaHFaIrMGAf8WKAAGImjoQXUI456.jpg/2016-men-sho'),
(4, 'jj', 609, 'http://img01.orientshoe.com/orientshoeen/2014/0913/02/2014091302180720717.jpg'),
(5, 'ty', 875, 'http://img.ewaaan.com/imgcache/1148707.jpg'),
(6, 'ww', 300, 'https://gloimg.drlcdn.com/L/pdm-product-pic/Clothing/2016/08/17/source-img/20160817173837_47743.jpg'),
(7, 'd', 457, 'http://el-gato-loco.com/image/cache/data/homme%20chaussures/chaussures-bateau-homme-baskets-casual-s'),
(8, 'nike', 645, 'http://www.nike2.org/ar/images/_small//nike04/Nike-Air-Max-Men/Nike-Air-Max-Darwin-360-Mens-Shoes-Ch');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pro_id` int(10) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `pro_price` int(100) NOT NULL,
  `pro_img` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_price`, `pro_img`) VALUES
(1, 'bah1', 200, 'https://i.ebayimg.com/images/a/T2eC16VHJHYE9nzpeC+FBQWn)88vtg~~/s-l300.jpg'),
(2, 'bag', 200, 'rec/uploads/720367.jpg'),
(8, 'bag', 60, 'http://www.entizeina.com/wp-content/uploads/2014/07/School-Supplies.jpg'),
(12, 'bag', 100, 'https://www.mexatk.com/wp-content/uploads/2014/07/%D8%B4%D9%86%D8%B7-%D8%A8%D8%A7%D9%84%D9%84%D9%88%D9%86-%D8%A7%D9%84%D8%A8%D9%86%D9%8A-%D9%85%D8%A7%D8%B1%D9%83%D8%A7%D8%AA.jpg'),
(13, 'dress', 500, 'https://img.elwlid.com/imgcache/2013/10/718781.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE IF NOT EXISTS `shoes` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_price` int(10) NOT NULL,
  `s_img` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`s_id`, `s_name`, `s_price`, `s_img`) VALUES
(1, 'n', 230, 'https://i.ytimg.com/vi/CTEmisFHRpU/maxresdefault.jpg'),
(3, 'bb', 500, 'http://www.jamaluk.com/uploads/image/9459794fff1ccaa4f07e26e94b7620d2.jpg'),
(4, 'fg', 769, 'http://img.shein.com/images/shein.com/201703/cc/14905816085142503205_thumbnail_405x552.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL,
  `frstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `repassword` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `frstname`, `lastname`, `email`, `password`, `repassword`) VALUES
(6, 'mashael', 'mosa', 'Mashel4n@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b'),
(8, 'mm', 'musa', 'm@m.com', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'aaa', 'aaaa', 'a@a.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(10, 'n', 'n', 'm@m.com', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `wbag`
--

CREATE TABLE IF NOT EXISTS `wbag` (
  `wb_id` int(11) NOT NULL,
  `wb_name` varchar(100) NOT NULL,
  `wb_price` int(100) NOT NULL,
  `wb_img` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wbag`
--

INSERT INTO `wbag` (`wb_id`, `wb_name`, `wb_price`, `wb_img`) VALUES
(1, 'bag', 400, 'http://cmsdb.furla.com/app/uploads/2017/07/2verticale.jpg'),
(2, 'bag', 400, 'https://secure-www.zappos.com/images/z/3/8/1/6/4/2/3816425-p-MULTIVIEW.jpg'),
(3, 'rt', 500, 'https://i.pinimg.com/736x/6a/10/45/6a1045b840ce957bd9a2881cad5effa1--vegan-handbags-blue-handbags.jp');

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE IF NOT EXISTS `women` (
  `w_id` int(10) NOT NULL,
  `w_name` varchar(100) NOT NULL,
  `w_price` int(10) NOT NULL,
  `w_img` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`w_id`, `w_name`, `w_price`, `w_img`) VALUES
(1, 'jm', 400, 'https://pa.namshicdn.com/product/03/5003/v1/1-web-desktop-product.jpg'),
(2, 'nn', 700, 'https://i.pinimg.com/736x/0a/91/93/0a9193107235b7e6bc6c19077827432d--full-skirts-style-icons.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wshoes`
--

CREATE TABLE IF NOT EXISTS `wshoes` (
  `ws_id` int(11) NOT NULL,
  `ws_name` varchar(100) NOT NULL,
  `ws_price` int(100) NOT NULL,
  `ws_img` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wshoes`
--

INSERT INTO `wshoes` (`ws_id`, `ws_name`, `ws_price`, `ws_img`) VALUES
(1, 'vv', 290, 'http://imag'),
(2, 'p', 690, 'http://medi'),
(3, 'o', 700, 'http://roje');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baby`
--
ALTER TABLE `baby`
  ADD PRIMARY KEY (`B_id`);

--
-- Indexes for table `bags`
--
ALTER TABLE `bags`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `girls`
--
ALTER TABLE `girls`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `glasses`
--
ALTER TABLE `glasses`
  ADD PRIMARY KEY (`gl_id`);

--
-- Indexes for table `houres`
--
ALTER TABLE `houres`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `man`
--
ALTER TABLE `man`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `mshoes`
--
ALTER TABLE `mshoes`
  ADD PRIMARY KEY (`ms_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wbag`
--
ALTER TABLE `wbag`
  ADD PRIMARY KEY (`wb_id`);

--
-- Indexes for table `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`w_id`);

--
-- Indexes for table `wshoes`
--
ALTER TABLE `wshoes`
  ADD PRIMARY KEY (`ws_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baby`
--
ALTER TABLE `baby`
  MODIFY `B_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bags`
--
ALTER TABLE `bags`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `girls`
--
ALTER TABLE `girls`
  MODIFY `g_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `glasses`
--
ALTER TABLE `glasses`
  MODIFY `gl_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `houres`
--
ALTER TABLE `houres`
  MODIFY `h_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `man`
--
ALTER TABLE `man`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mshoes`
--
ALTER TABLE `mshoes`
  MODIFY `ms_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `wbag`
--
ALTER TABLE `wbag`
  MODIFY `wb_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `women`
--
ALTER TABLE `women`
  MODIFY `w_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wshoes`
--
ALTER TABLE `wshoes`
  MODIFY `ws_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
