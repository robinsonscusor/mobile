-- phpMyAdmin SQL Dump
-- version 4.3.13
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2015 at 03:58 AM
-- Server version: 5.6.23
-- PHP Version: 5.4.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mobi`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdienthoai`
--

CREATE TABLE IF NOT EXISTS `chitietdienthoai` (
  `id` int(11) NOT NULL,
  `manhinh` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `cpu` varchar(155) COLLATE utf8_unicode_ci NOT NULL,
  `ram` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `hedieuhanh` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `camerachinh` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `cameraphu` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `bonhotrong` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `thenhongoai` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `pin` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `idSP` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietdienthoai`
--

INSERT INTO `chitietdienthoai` (`id`, `manhinh`, `cpu`, `ram`, `hedieuhanh`, `camerachinh`, `cameraphu`, `bonhotrong`, `thenhongoai`, `pin`, `idSP`) VALUES
(1, 'Retina HD, 5.5", 1080 x 1920 pixels', 'Apple A8, 2 nhân, 1.4 GHz', '1 GB', 'iOS 8.0', '8.0 MP, Quay phim FullHD 1080p@60fps', '1.2 MP', '64 GB', 'Không', '2915 mAh', 1),
(2, 'Retina HD, 4.7", 1334 x 750', 'Apple A8, 2 nhân, 1.4 GHz\r\n', '1 GB', 'iOS 8.0', '8.0 MP, Quay phim FullHD 1080p@60fps', '1.2 MP', '128GB', 'Không', '1810 mAh', 2),
(3, 'Retina HD, 5.5", 1080 x 1920 pixels', 'Apple A8, 2 nhân, 1.4 GHz\r\n', '1 GB', 'iOS 8.0', '8.0 MP, Quay phim FullHD 1080p@60fps', '1.2 MP', '16 GB', 'Không', '2915 mAh', 3),
(4, 'DVGA, 4.0", 640 x 1136 pixels', 'Apple A7, 2 nhân, 1.3 GHz\r\n', '1 GB', 'iOS 8.0', '8.0 MP, Quay phim FullHD 1080p@30fps', '1.2 MP', '16 GB', 'Không', '1560 mAh', 4),
(5, 'DVGA, 3.5", 640 x 960 pixels', 'Apple A5, 2 nhân, 1 GHz\r\n', '512 MB', 'iOS 8.0', '8.0 MP, Quay phim FullHD 1080p@30fps', 'VGA (0.3 Mpx)', '8 GB', 'Không', '1420 mAh', 5),
(6, 'Quad HD, 5.6", 1440 x 2560 pixels', 'Qualcomm Snapdragon 805, 4 nhân, 2.7GHz\r\n', '3GB', 'Android 4.4 (KitKat)', '16 MP, Quay phim 4K 2160p@24fps', '3.7MP', '32 GB', '128 GB', '3000 mAh', 6),
(7, 'Quad HD, 5.1", 1440 x 2560 pixels', 'Exynos 7420, 8 nhân, 4x1.5GHz Cortex-A53 & 4x2.1 GHz Cortex-A57\r\n', '3GB', 'Android 5.0 (Lollipop)', '16 MP, Quay phim 4K 2160p@30fps', '5 MP', '32 GB', 'Không', '2600 mAh', 7),
(8, 'Full HD, 5.5", 1080 x 1920 pixels', 'Snapdragon 615, 8 nhân, -\r\n', '2 GB', 'Android 4.4 (KitKat)', '13 MP, Quay phim FullHD 1080p@30fps', '', '16 GB', '64 GB', '2600 mAh', 8),
(9, 'Quad HD, 5.7", 1440 x 2560 pixels', 'Exynos 5433, 8 nhân, Quad-core 1.3 GHz Cortex-A53 & 1.9GHz quad-core Cortex-A57\r\n', '3GB', 'Android 4.4 (KitKat)', '16 MP, Quay phim 4K 2160p@30fps', '3.7MP', '32 GB', '128 GB', '3220mAh', 9),
(10, 'HD, 5.5", 720 x 1280 pixels', 'Qualcomm Snapdragon 410, 4 nhân, 1.2 GHz\r\n', '2 GB', 'Android 4.4 (KitKat)', '13 MP, Quay phim FullHD 1080p@30fps', '', '16 GB', '64 GB', '2950mAh', 10),
(11, 'HD, 5.0", 720 x 1280 pixels', 'Qualcomm Snapdragon 410, 4 nhân, 1.2 GHz\r\n', '2 GB', 'Android 4.4 (KitKat)', '13 MP, Quay phim FullHD 1080p@30fps', '5 MP', '16 GB', '64 GB', '2300 mAh', 11),
(12, 'Full HD, 5.5", 1080 x 1920 pixels', 'Qualcomm Snapdragon 801, 4 nhân, 2.3 GHz\r\n', '2 GB', 'Android 4.3 (Jelly Bean)', '13 MP, Quay phim 4K 2160p@30fps', '5 MP', '16 GB', '128 GB', '2800 mAh', 12),
(13, 'HD, 5.0", 720 x 1280 pixels', 'Qualcomm Snapdragon 400, 4 nhân, 1.6 GHz\r\n', '2 GB', 'Android 4.3 (Jelly Bean)', '13 MP, Quay phim FullHD 1080p@30fps', '13 MP', '16 GB', 'Không', '2140mAh', 13),
(14, 'HD, 5.0", 720 x 1280 pixels', 'Qualcomm Snapdragon 400, 4 nhân, 1.6 GHz\r\n', '1 GB', 'Android 4.3 (Jelly Bean)', '13 MP, Quay phim HD 720p@30fps', '5 MP', '16 GB', 'Không', '2410 mAh', 14),
(15, 'qHD, 4.7", 540 x 960 pixels', 'ARM 7, 4 nhân, 1.3 GHz\r\n', '1 GB', 'Android 4.2.2 (Jelly Bean)', '8.0 MP, Quay phim HD 720p@30fps', '2.0 MP', '8 GB', '32 GB', '2000 mAh', 15),
(16, 'Full HD, 5.0", 1080 x 1920 pixels', 'Snapdragon 810, 8 nhân, 4 nhân 1.5 GHz Cortex-A53 & 4 nhân 2 GHz Cortex-A57\r\n', '3GB', 'Android 5.0 (Lollipop)', '20.7 MP, Quay phim 4K 2160p@30fps', '4 Ultra pixel', '32 GB', '128 GB', '2840 mAh', 16),
(17, 'Full HD, 5.2", 1080 x 1920 pixels', 'Qualcomm Snapdragon 801, 4 nhân, 2.26 GHz\r\n', '2 GB', 'Android 4.4 (KitKat)', '13 MP, Quay phim FullHD 1080p@30fps', '13 MP', '16 GB', '128 GB', '2400 mAh', 17),
(18, 'HD, 5.5", 720 x 1280 pixels', 'Qualcomm Snapdragon 410, 4 nhân, 1.2 GHz\r\n', '1 GB', 'Android 4.4 (KitKat)', '13 MP, Quay phim FullHD 1080p@30fps', '', '16 GB', '128 GB', '2600 mAh', 18),
(19, 'HD, 5.0", 720 x 1280 pixels', '-, 8 nhân, 1.7 GHz\r\n', '1 GB', 'Android 4.4 (KitKat)', '13 MP, Quay phim FullHD 1080p@30fps', '5 MP', '8 GB', '32 GB', '2000 mAh', 19),
(20, 'Full HD, 5.0", 1080 x 1920 pixels', 'Qualcomm Snapdragon 800, 4 nhân, 2.2 GHz\r\n', '2 GB', 'Windows Phone 8.1', '20 MP, Quay phim FullHD 1080p@30fps', '1.2 MP', '32 GB', 'Không', '2420 mAh', 20),
(21, 'HD, 5.0", 720 x 1280 pixels', 'Qualcomm Snapdragon 400, 4 nhân, Quad-core 1.2 GHz\r\n', '1 GB', 'Windows Phone 8.1', '10 MP, Quay phim FullHD 1080p@30fps', '1.0 MP', '16 GB', '128 GB', '2200 mAh', 21),
(22, 'HD, 6.0", 720 x 1280 pixels', 'Qualcomm Snapdragon S4, 2 nhân, 1.7 GHz\r\n', '1 GB', 'Windows Phone 8', '5.0 MP, Quay phim FullHD 1080p@30fps', '', '8 GB', '64 GB', '3400 mAh', 22),
(23, 'HD, 5.7", 720 x 1280 pixels', 'Qualcomm Snapdragon 400, 4 nhân, 1.2 GHz\r\n', '1 GB', 'Windows Phone 8.1', '13 MP, Quay phim FullHD 1080p@30fps', '', '8 GB', '128 GB', '3000 mAh', 23),
(24, 'FWVGA, 4.0", 480 x 854 Pixels', 'Qualcomm Snapdragon 200, 4 nhân, 1.2 GHz\r\n', '512 MB', 'Windows Phone 8.1', '5.0 MP, Quay phim WVGA@30fps', 'Không', '4 GB', '128 GB', '1430 mAh', 25),
(25, 'WVGA, 4.0", 480 x 800 pixels', 'Qualcomm Snapdragon 200, 4 nhân, 1.2 GHz\r\n', '1 GB', 'Windows Phone 8.1', '5.0 MP, Quay phim 480p@30fps', '', '8 GB', '128 GB', '1560 mAh', 24);

-- --------------------------------------------------------

--
-- Table structure for table `dienthoai`
--

CREATE TABLE IF NOT EXISTS `dienthoai` (
  `id` int(11) NOT NULL,
  `tendienthoai` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `hinh` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `idLoai` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dienthoai`
--

INSERT INTO `dienthoai` (`id`, `tendienthoai`, `gia`, `hinh`, `idLoai`) VALUES
(1, 'iPhone 6 Plus 64GB', 22000000, 'iphone-6-plus-64gb.jpg', 1),
(2, 'iPhone 6 128GB', 21490000, 'iphone-6-128gb.jpg', 1),
(3, 'iPhone 6 Plus 16GB', 19590000, 'iphone-6-plus-16g.jpg', 1),
(4, ' iPhone 5S 16GB', 13990000, 'iphone-5s-16gb-1-org-1.jpg', 1),
(5, 'iPhone 4S 8GB', 5990000, 'iphone-4s-8gb--(1).jpg', 1),
(6, 'Samsung Galaxy Note Edge', 20990000, 'samsung-galaxy-note-edge-1.jpg', 2),
(7, 'Samsung Galaxy S6 Edge 32GB', 19990000, 'samsung-galaxy-s6-edge-4.jpg', 2),
(8, 'Samsung Galaxy A7', 9990000, 'samsung-galaxy-a7-2.jpg', 2),
(9, 'Samsung Galaxy Note 4', 17990000, 'samsung-galaxy-note-4-1.jpg', 2),
(10, 'Samsung Galaxy E7', 6990000, 'samsung-galaxy-e7-3.jpg', 2),
(11, 'Samsung Galaxy A5', 8990000, 'samsung-galaxy-a500.jpg', 2),
(12, 'OPPO Find 7a', 8990000, 'oppo-find-7a-2.jpg', 2),
(13, 'OPPO N1 Mini', 8490000, 'oppo-n1-mini-trang-9.jpg', 2),
(14, 'OPPO R1K R8001', 7990000, 'oppo-r1k-r8001-slider01.jpg', 2),
(15, 'OPPO Find 5 Mini R827', 4990000, 'oppo-find-5-mini-r827-1.jpg', 2),
(16, ' HTC One M9', 16990000, 'htc-one-m9-2.jpg', 2),
(17, 'HTC Desire Eye', 11990000, 'htc-desire-eye-trang&do-10.jpg', 2),
(18, 'HTC Desire 820Q', 6590000, 'htc-desire-820q-1.jpg', 2),
(19, 'HTC Desire 626G', 5390000, 'htc-desire-820q-1.jpg', 2),
(20, 'Nokia Lumia 930', 10990000, 'nokia-lumia-930-lumia-icon--(5).jpg', 3),
(21, 'Nokia Lumia 830', 7990000, 'nokia-lumia-830-5.jpg', 3),
(22, 'Nokia Lumia 1320', 4790000, 'nokia-lumia-1320-(2).jpg', 3),
(23, 'Microsoft Lumia 640 XL', 4590000, 'microsoft-lumia-640-xl.jpg', 3),
(24, 'Microsoft Lumia 532', 2190000, 'microsoft-lumia-532-1.jpg', 3),
(25, 'Nokia Lumia 530', 1790000, 'nokia-lumia-530-(2).jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE IF NOT EXISTS `donhang` (
  `id` int(11) NOT NULL,
  `tentk` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `masp` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `tentk`, `masp`, `gia`, `soluong`, `thanhtien`, `tinhtrang`) VALUES
(1, 'admin', 24, 2190000, 1, 2190000, 'chuagui'),
(2, 'admin', 25, 1790000, 2, 3580000, 'chuagui');

-- --------------------------------------------------------

--
-- Table structure for table `loaidienthoai`
--

CREATE TABLE IF NOT EXISTS `loaidienthoai` (
  `id` int(11) NOT NULL,
  `ten` varchar(55) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaidienthoai`
--

INSERT INTO `loaidienthoai` (`id`, `ten`) VALUES
(1, 'IOS'),
(2, 'Android'),
(3, 'Windows Phone');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE IF NOT EXISTS `taikhoan` (
  `tentk` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` int(11) NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `diachi` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`tentk`, `matkhau`, `quyen`, `dienthoai`, `diachi`) VALUES
('admin', 'admin', 0, 123, '123'),
('phat', '123', 0, 123, '123');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE IF NOT EXISTS `tintuc` (
  `id` int(11) NOT NULL,
  `tieude` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `tomtat` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(55) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `tomtat`, `noidung`, `hinh`) VALUES
(1, '7 dòng smartphone vỏ kim loại hot nhất hiện nay', 'Vỏ kim loại không chỉ tạo nên cảm giác chắc chắn, đẹp mắt mà còn khiến chiếc smartphone sang trọng và hấp dẫn hơn.', 'Samsung Galaxy S6 and S6 Edge\r\nSamsung cuối cùng đã từ bỏ thiết kế nhựa cho những mẫu điện thoại chủ đạo và thay bằng vỏ kim loại phủ kính lóng lánh trên Galaxy S6 và S6 Edge. Điều này khiến hai thiết bị này hấp dẫn và trông đáng tiền hơn hẳn so với người tiền nhiệm S5.\r\niPhone 6 và 6 Plus\r\nApple đã khoác lên mình lớp ao nhôm cho mặt cạnh và mặt sau smartphone iPhone 6 và 6 Plus. Thiết kế kim loại là thứ luôn được chờ đợi ở các sản phẩm iPhone cao cấp. Tuy nhiên cũng chính lớp vỏ nhôm mỏng mảnh trên chiếc iPhone 6 Plus của Apple cũng tạo nên scandal bẻ cong tai tiếng một thời.\r\nTonino Lamborghini 88 Tauri\r\nSản phẩm này không phổ biến ở Việt Nam, nhưng nếu có khoảng 6.000 USD thì bạn có thể sắm cho mình một chiếc Tonino Lamborghini 88 Tauri. Với phần khung bằng thép không gỉ và bọc bằng da bò, sản phẩm này có ba màu chủ đạo là đen, bạc và vàng.\r\nTuring Phone\r\nCái tên Turing Phone còn tương đối lạ lẫm, nhưng nếu ai đã nghe qua về siêu điện thoại này sẽ có thể đặt câu hỏi: vật liệu “liquidmorphium” là gì? Đó là tổng hợp từ 5 loại hợp kim bao gồm cả bạc, tạo nên lớp vỏ bên ngoài của siêu điện thoại Turing Phone. Hợp kim bền hơn cả thép này được kết hợp với gốm và và nhôm để tạo nên phần vỏ bên ngoài của thiết bị.\r\nHTC One M9, M8, M7\r\n"Rực rỡ", "đẹp điên đảo" là những từ ngữ được mọi người dùng để mô tả thiết kế của những chiếc HTC One, dù kể cả bạn nói đến chiếc M7, M8 hay M9. Vẻ đẹp này được làm nên chính là nhờ lớp vỏ nhôm anod hóa với nhiều ánh màu phong phú như đỏ, xanh và vàng.\r\nSamsung Galaxy Alpha\r\nCho dù vẫn chưa phải là một model đem lại cảm giác sang trọng cho người dùng, Samsung Galaxy Alpha vẫn là chiếc điện thoại khung nhôm đầu tiên của Samsung. Với phần cạnh viền kim loại bao quanh kèm theo chút cao su ở phần lưng khiến thiết bị nhẹ đến đáng kinh ngạc và đem lại cảm giác thoải mái khi cầm.\r\nSony Xperia Z\r\nNói đến các thiết bị vỏ kim loại, người dùng phải nhắc đến dòng Xperia của Sony. Từ chiếc Z1, Z1 Compact đến Z2 hay Z3 và Z4 đều là những thiết bị có phần khung nhôm chắc chắn tạo điểm nhấn cho sản phẩm.', '9426c37bf9c38e76d6a1833e9a92269e_copy.JPG.png'),
(2, 'Nokia phủ nhận tin đồn quay lại sản xuất điện thoại', 'Nguồn tin từ Reuters cho biết, Nokia vừa phủ nhận thông tin từ báo chí Trung Quốc nói rằng công ty sắp quay lại thị trường điện thoại.', 'Cách đây ít ngày một số báo chí Trung Quốc đưa tin, Nokia đang chuẩn bị quay trở lại thị trường điện thoại vào năm sau (2016). Tuy nhiên, theo tờ báo uy tín Reuter của Mỹ, hãng công nghệ Phần Lan vừa phủ nhận thông tin này.  "Nokia nhận thấy có một số trang tin tức mới đây cho biết công ty đang có ý định sản xuất điện thoại, tuy nhiên, điều này là sai sự thật" - Nokia cho biết trên website của mình. "Chúng tôi cũng nhắc lại rằng hiện Nokia không có kế hoạch sản xuất hoặc bán điện thoại cho thị trường người dùng phổ thông".  Tuy nhiên, công ty Phần Lan cho biết vẫn đang tìm cách quay lại mảng kinh doanh smartphone thông qua con đường cấp phép bản quyền (cho nhà sản xuất bên thứ ba)\r\nNokia hoàn tất việc bán mảng điện thoại của mình cho Microsoft hồi đầu 2014. Sau đó ít tháng, họ ra mắt mẫu tablet chạy Android mang tên N1 thông qua việc cấp phép bản quyền sử dụng tên gọi cho hãng Đài Loan Foxconn. Với công bố mới đây, Nokia sẽ tiếp tục thực hiện việc cấp bản quyền giống như N1 trong tương lai.  Khi bán lại mảng điện thoại cho Microsoft, Nokia đồng ý với hãng phần mềm Mỹ không tham gia kinh doanh điện thoại trước năm 2016.  "Tất nhiên chúng tôi sẽ tìm kiếm các cơ hội ở mảng di động, một thị trường rất màu mỡ" - Sebastian Nystrom, Chủ tịch mảng sản phẩm tại bộ phận Technologies của Nokia chia sẻ trên Reuters hồi năm ngoái.  Nokia mới đây công bố thâu tóm hãng viễn thông Pháp Alcatel-Lucent, nhằm đẩy mạnh mảng kinh doanh thiết bị mạng; đồng thời đang cân nhắc bán mảng bản đồ Here Maps. Theo một số tin đồn, những ông lớn trong làng công nghệ như Apple, Facebook, hay Uber; cũng như các nhà sản xuất ôtô, đều quan tâm tới mảng bản đồ này.\r\n\r\n\r\n', 'efedf63bf577135e441456a763c85ef4.jpg'),
(3, 'Bên trong phòng thử nghiệm bí mật của Apple Watch', 'Trước khi chính thức lên kệ, Apple cho phép một số nhà phát triển được xây dựng và kiểm thử ứng dụng của họ trên sản phẩm cuối.', 'Sau 2 năm liên tục xuất hiện trên mặt báo dưới dạng tin đồn, sự tồn tại của chiếc "iWatch" ngày càng bị nghi ngờ. Đến ngày 9/9/2014, Apple bất ngờ ra mắt chiếc smartwatch đầu tiên của mình với tên gọi "Apple Watch", đánh dấu lần đầu tiên kể từ khi Steve Jobs qua đời, Apple bước chân vào một phân khúc sản phẩm hoàn toàn mới. Sự bí mật bao phủ lên chiếc Apple Watch kéo dài tới tận ngày chiếc đồng hồ này đến tay người tiêu dùng. Để chuẩn bị cho ngày phát hành 24/4 vừa qua, Apple đã cho phép một số ít các nhà phát triển được đến thăm phòng phát triển Watch tại trụ sở của hãng đặt tại Sunnyvale, California, Mỹ và trực tiếp chạy thử ứng dụng của họ trên những chiếc Watch "bằng xương bằng thịt". Bạn sẽ phải nhận được giấy mời trực tiếp từ Apple để được tham dự sự kiện này, nhưng một trong số các nhà phát triển nói trên đã kể lại đầy đủ trải nghiệm ghé thăm "ngôi nhà" của Apple Watch: "Sự kiện bắt đầu vào lúc 9h sáng, khi Apple cho phép lần lượt từng đội phát triển vào thăm", nhà phát triển giấu tên cho biết. "Khi bạn vào thăm, bạn sẽ thấy một màn hình lớn phát đi phát lại cùng một đoạn video".\r\nQuá trình kiểm tra an ninh diễn ra ngay sau đó: "Ngay phía bên trái là vài người ghi tên của chúng tôi và dán sticker lên camera của iPhone và laptop của chúng tôi để ngăn chúng tôi ghi hình. Trong phòng có khoảng 25 đến 30 người, và mỗi lập trình viên được quyền mang theo một người nữa, bởi vậy trong phòng phần lớn là các đội 2 người. Họ xếp những chiếc bàn thành hàng, mỗi cái đều được đánh số". Sau khi các nhà phát triển đã có mặt đầy đủ (một số người nhận được giấy mời quá muộn, nhân viên của Apple bắt đầu phân phát những chiếc Watch "bằng xương bằng thịt" tới tay những người tham dự: "Những chiếc Watch này được đựng trong túi nilon Ziploc. Đây không phải là trải nghiệm Apple hoàn thiện mà bạn biết tới. Tất cả mọi người đều được phát bản Sport, và mỗi người được giao cả 2 phiên bản 38mm lẫn 42mm". Đồng thời, Apple cũng cung cấp cho từng người một chiếc iPhone riêng biệt. Các nhà phát triển ngồi trong căn phòng không được sử dụng iPhone của riêng họ do các lo ngại về bảo mật.\r\n"Trong phòng có 3 hoặc 4 kỹ sư sẵn sàng trả lời câu hỏi của bạn. Một nhân viên bảo vệ sẽ đứng trong phòng, một người đứng bên ngoài phòng. Có hai cánh cửa, một dẫn tới khoang chính của tòa nhà và cái còn lại dẫn vào phía bên trong. Cả hai đều được bảo vệ bởi máy quẹt thẻ". Rõ ràng, Apple đã rất cẩn trọng để tránh làm rò rỉ các thông tin về chiếc Watch ra ngoài, dẫu rằng ngày lên kệ của sản phẩm đã rất cận kề. "Khi đi vào nhà vệ sinh hoặc sang canteen bên cạnh, bạn sẽ phải giơ cổ tay lên để chứng minh rằng bạn đang không cố lấy trộm một chiếc Watch. Điều này không hợp lý lắm vì ai cũng có thể giấu chiếc Watch trong túi quần". Trong khi một số người bỏ về chỉ sau vài giờ, Apple cho phép những người tham dự được ngồi lại tới 4h30 chiều. Các nhà phát triển có đủ thời gian để thử nghiệm một vài ứng dụng mặc định được Apple cài sẵn lên Apple Watch.\r\n', '1401839.jpg'),
(4, '4 ưu điểm của smartphone phổ thông Aveo X8', 'Máy sử dụng công nghệ điện toán đám mây hiện đại, giúp người dùng có thể cùng lúc vừa hiển thị video Full HD và âm thanh trên tivi, vừa có thể đọc báo hay chơi game.', 'Aveo X8 hút khách được nhận xét là smartphone có thiết kế đẹp và cấu hình tốt thời điểm hiện tại với chip xử lý 8 lõi tốc độ 1,7 GHz, RAM dung lượng 2 GB và màn hình phân giải Full HD sắc nét. Dưới đây là 4 ưu điểm giúp sản phẩm chiếm trọn cảm tình của người tiêu dùng.\r\nCấu hình cao\r\nAveo X8 sở hữu bộ chip lõi 8 MTK 6592 mạnh mẽ, tốc độ lên tới 1,7 GHz, nâng hiệu suất hoạt động nhanh hơn 30%. Máy sử dụng RAM 2 GB đa luồng, bộ nhớ trong 8 GB và hỗ trợ bộ nhớ ngoài nâng cấp lên tới 64 GB, có thể chơi hoặc tải về những ứng dụng game nặng chạy trên nền Android 4.4 KitKat.\r\nKiểu dáng đẹp\r\nKiểu dáng thiết kế của Aveo X8 sang trọng, mỏng, gọn nhẹ và tinh tế. Đây là một trong những smartphone mỏng nhất trong phân khúc sản phẩm tầm giá 5 triệu đồng.\r\nĐơn giản, hiện đại và hấp dẫn là những cảm nhận đầu tiên khi nhìn thấy smartphone này. Chọn thiết kế hai màu trắng và đen, máy có độ dày chỉ 0,8 cm. Sở hữu màn hình kích thước 5 inch, nhưng đường viền mỏng và 4 góc vuông cứng cáp khiến điện thoại nhìn thon gọn, sành điệu. Ba phím cảm ứng nằm chìm vào mặt kính đen và có đèn LED nền. Cạnh trái của Aveo X8 là phím tăng giảm âm lượng, đỉnh máy là giắc tai nghe 3,5 mm trong khi cổng microUSB nằm ở cạnh dưới cùng và phím nguồn nằm ở cạnh phải.\r\nCông nghệ camera và màn hình sắc nét\r\nCông nghệ chụp ảnh và các chức năng giải trí hiện đại là điều bất cứ người dùng smartphone nào cũng quan tâm. Do vậy, Aveo X8 hỗ trợ những tín đồ công nghệ khả năng chụp ảnh tốt bằng camera 13 megapixel hiện đại, sử dụng cảm biến Exmor RS. Camera trước của máy có độ phân giải 5 megapixel.\r\nXét về khía cạnh hiển thị, Aveo X8 sở hữu màn hình hiển thị sắc nét, đạt chuẩn HD với độ phân giải 1080 x 720 pixel và mật độ điểm ảnh 420 dpi. \r\nChức năng hiện đại\r\nAveo X8 có thể kết nối và truyền hình ảnh Full HD lên tivi mà không cần thiết bị trung gian. Công nghệ không dây này cho phép người dùng di chuyển trong phạm vi 20 m mà không bị gò bó bởi dây nối. Máy sử dụng công nghệ điện toán đám mây hiện đại, nên trong khi hiển thị video Full HD và âm thanh trên tivi vẫn đọc báo hay chơi game tốt.\r\n\r\n\r\n', 'avatelecom_4.jpg'),
(5, '5 smartphone đáng mua trong dịp nghỉ lễ 30/4', 'Sở hữu thiết kế ổn, hiệu năng tốt và mức giá phải chăng, 5 chiếc điện thoại dưới đây là lựa chọn hợp lý với nhiều người dùng trong kỳ nghỉ sắp tới.', 'Sony Xperia Z3\r\nVới thiết kế thời trang, hai mặt đều làm bằng kính chống nước tốt, Xperia Z3 là chiếc điện thoại phù hợp cho những chuyến đi biển bởi bạn không lo máy bị hỏng khi dính nước. Camera độ phân giải 20 megapixel giúp bạn lưu giữ những khoảnh khắc tuyệt vời của hành trình. Hiện nay, thị trường có phiên bản Xperia Z3 Docomo giá khoảng 8 triệu đồng.\r\nPhilip W6610\r\nPhilip W6610 là chiếc smatphone pin khỏe cho thời gian chờ 2 tháng. Thời lượng pin này lý tưởng đối với một chuyến du lịch dài ngày. Bạn không lo điện thoại bị cạn pin hay phải sạc quá nhiều lần. Máy sử dụng công nghệ pin Xenium đặc trưng của hãng điện tử Philip. Các tính năng nổi bật khác của smartphone này là chụp ảnh, nghe nhạc, lướt web, kết nối mạng xã hội Facebook, Twitter... Máy chịu được va đập và cho cảm giá thoải mái khi cầm. Hiện nay, Hoàng Hà Mobile đang bán sản phẩm này với giá 3,18 triệu đồng.  \r\nLumia 640XL\r\nMới ra mắt trong tháng 4, Lumia 640XL là phablet đầu tiên mà Microsoft thiết kế. Máy có màn hình 5,7 inch độ phân giải HD 720 x 1280 pixel, RAM 1 GB và bộ nhớ trong 8 GB có hỗ trợ thẻ nhớ ngoài. Ưu điểm đáng chú ý nhất của thiết bị là camera chính có độ phân giải 13 megapixel. Máy đang chạy hệ điều hành Windows Phone 8.1 mới nhất, có thể nâng cấp lên các phiên bản cao hơn trong thời gian tới. Dung lượng pin lên đến 3.000 mAh, đảm bảo cho bạn sử dụng thoải mái 1-2 ngày. Mức giá của phablet này tại Hoàng Hà Mobile là khoảng 4,2 triệu đồng. \r\nLenovo S850\r\nGần đây, Lenovo S850 giảm từ 4,8 xuống còn 2,99 triệu đồng. Thiết kế của máy khá giống với Xperia Z3 nhưng không có khả năng chống nước. Camera chính 13 megapixel có thể tự động lấy nét, hỗ trợ đèn flash LED, camera phụ độ phân giải 5 megapixel. Việc sử dụng chip 4 nhân 1,3 GHz giúp máy dễ dàng chạy mượt mà nhiều ứng dụng và phần mềm. Điện thoại hiện có sẵn tại các showroom của Hoàng Hà Mobile trên toàn quốc với 2 màu đen và trắng.\r\niPhone 5 bản khóa mạng\r\niPhone luôn là sản phẩm công nghệ thu hút người dùng. Chỉ với 3,99 triệu đồng, bạn đã có thể sở hữu iPhone 5 bản khóa mạng. Máy phải sử dụng sim ghép để kích hoạt và bị hạn chế một vài tính năng như kiểm tra tài khoản, nạp thẻ, sóng 3G hơi yếu… Tuy nhiên, chiếc smartphone này vẫn hỗ trợ đầy đủ các tính năng quan trọng như nghe gọi, nhắn tin, Facetime, sử dụng mạng xã hội, nghe nhạc, chụp ảnh, chơi game... Hoàng Hà Mobile sẽ tặng thêm sim ghép kích hoạt khi mua iPhone 5, 5C và 5S bản khóa mạng. \r\n\r\n', 'hoang_ha_mobile_3.jpg'),
(6, 'Đánh giá HTC One M9: Thiết kế đẳng cấp', 'One M9 không mang tới ấn tượng ở sự đổi mới, nhưng HTC lại tạo nên sản phẩm đẳng cấp ở khâu chế tác bên cạnh các cải tiến phần cứng.', 'HTC bắt đầu bán One M9 tại Việt Nam với giá 17 triệu đồng. Đây là thế hệ One thứ 3 trung thành với kiểu dáng nhôm nguyên khối. Trước đó, M7 và M8 từng tạo ấn tượng và giành được nhiều giải thưởng về thiết kế.\r\nSự xuất hiện của HTC One M9 tại MWC 2015 gây nên cuộc tranh cãi lớn. Với nhiều người, việc giữ nguyên thiết kế khiến máy trông nhàm chán. Theo đó, HTC cần thay đổi, giống như các tên tuổi lớn như Apple, Samsung đang làm.\r\nVới các fan hãng này, One M9 tiếp tục kế thừa kiểu dáng vốn đã hoàn hảo trên M8, M7. Đây là smartphone đẹp nhất thế giới, do đó, HTC không cần lý do thay đổi. Cũng trong sự kiện họp báo tại Việt Nam, hãng này một lần nữa khẳng định, "M9 là tiếp tục với thiết kế không tuổi". Vì vậy, HTC chưa có ý định thay đổi.\r\nThiết kế là điểm nhấn lớn nhất trên M9. Với việc chế tác đặc biệt, đây là sản phẩm khi cầm, người dùng sẽ nhận thấy sự đẳng cấp trong các đường nét, chi tiết trên vỏ máy. \r\nSau 6 thế hệ giao diện Sense khá cứng, phần mềm mới mang tới các trải nghiệm trông mạch lạc, đơn giản hơn. Trên giao diện này, HTC đưa vào nhiều tuỳ biển như thay đổi hình nền, themes, linh hoạt xuất hiện ứng dụng theo từng vị trí.\r\nVề màn hình, One M9 dù vẫn trung thành với công nghệ Full HD, nhưng khả năng hiển thị thuộc nhóm tốt nhất hiện nay. Chất lượng ảnh, nội dung hiện lên sạch và trong, không ám màu như một số smartphone cao cấp khác.\r\nĐiểm trừ trên máy là camera sau đã nâng cấp, nhưng chụp đêm chưa tương xứng với giá trị. Dù vậy, máy chụp nhanh, ảnh trong điều kiện ánh sáng đủ sạch sẽ, trung thực.\r\nSense 7 mang tới nhiều cải tiến, nhưng thực tế vẫn còn nhiều đường nét cũ. Các nút điều khiển của Android vẫn nằm trong màn hình. HTC hỗ trợ khả năng ẩn hiện các nút này, thực tế nó vẫn khiến người dùng mất thời gian trong việc kéo, trượt, thay vì tự động như LG.\r\nNăm 2013, HTC thay đổi chiến lược marketing. Theo đó, câu slogan "quietly brilliant" (tạm dịch: Sự toả sáng trong thầm lặng) được thay thế. Dù vậy, One M9 vẫn khá im tiếng so với các đối thủ trên nhóm cao. Máy khiến những người khi cầm lên xuýt xoa vì vẻ đẹp, sự đẳng cấp. Tuy nhiên, họ cần phải làm nhiều hơn để những khách hàng lướt qua các kệ bán chú ý tới M9.\r\n', 'HTC_One_M9__zing_24.jpg'),
(7, 'Sự cố đứt cáp quang biển AAG', 'Theo đại diện lãnh đạo một số ISP, với sự cố ngày 23/4, sẽ phải mất khoảng 3 tuần mới khắc phục xong.', 'Sáng sớm nay, ngày 23/4, tuyến cáp quang biển quốc tế châu Á - Thái Bình Dương (Asia America Gate Way - AAG) lại bị đứt. Trao đổi với ICTnews, ông Đặng Tùng Sơn, Phó Tổng giám đốc CMC Telecom cho biết, từ sáng sớm, đội ngũ vận hành mạng của CMC Telecom đã phát hiện thấy cảnh báo trên hệ thống, sau đó đã nhận được thông báo chính thức từ đơn vị quản lý trạm cập bờ Vũng Tàu cũng như quản lý toàn tuyến cáp quang biển AAG. Vị trí chính xác hiện chưa xác định được, mà mới phân lập được sự cố sụt nguồn tại phân đoạn cáp SH1. \r\nTheo thông tin mới nhất vừa được Tập đoàn VNPT chính thức công bố, vào lúc 5h27 ngày 23/4, đã xảy ra sự cố rò nguồn trên hệ thống cáp quang biển quốc tế AAG đoạn từ Vũng Tàu (Việt Nam) đi Hong Kong và Singapore, cách bờ biển Vũng Tàu khoảng hơn 300 km. Sự cố đã gây ảnh hưởng chủ yếu đến tốc độ đường truyền Internet giữa Việt Nam và quốc tế.\r\nVNPT cho biết, ngay sau khi xảy ra sự cố, công ty Viễn thông Quốc tế (VNPT-I) đã khẩn trương tiến hành các biện pháp để xác định được khu vực sự cố ngoài khơi Vũng Tàu. Sự cố này sẽ đòi hỏi phải sử dụng tàu cáp chuyên dùng của quốc tế để tiến hành khắc phục. công ty VNPT-I đang tích cực làm việc với nhà quản trị hệ thống AAG, các công ty tàu cáp quốc tế và với các thành viên của các hệ thống khác để ưu tiên cho việc sửa chữa tuyến AAG một cách sớm nhất.Tuy nhiên, theo kinh nghiệm của hai nhà mạng CMC Telecom và NetNam, sẽ phải mất khoảng 2-3 tuần nữa, sự cố của tuyến cáp quang biển AAG mới được khắc phục xong, đường truyền mới được phục hồi hoàn toàn. Phó Tổng giám đốc CMC Telecom Lê Thanh Sơn cho biết: “Tùy thuộc vào độ sẵn sàng của tàu ứng cứu và việc xác định rõ nguyên nhân, các sự cố cáp biển nói chung và AAG nói riêng thường mất 3 tuần để khắc phục”. Thực tế, sự cố đứt cáp quang biển AAG ngày 5/1 cũng đã phải mất tròn 3 tuần mới được khôi phục hoàn toàn. Chia sẻ về phương án nhằm giảm thiểu ảnh hưởng chất lượng dịch vụ cung cấp tới khách hàng, đại diện VNPT cho hay, công ty VNPT-I đã và đang phối hợp cùng các bên liên quan nhanh chóng định tuyến liên lạc qua các hệ thống cáp quang biển SMW3, cáp đất liền và thông tin vệ tinh, đồng thời bổ sung dung lượng qua các hệ thống này. “Đây là sự cố bất khả kháng, vì vậy VNPT rất mong nhận được sự cảm thông của khách hàng nếu như việc truy cập Internet nói riêng và các dịch vụ viễn thông quốc tế khác nói chung có thể bị ảnh hưởng nhất định”, đại diện VNPT chia sẻ. Đối với FPT Telecom, sáng nay, đại diện nhà mạng này cho hay, ngay sau khi sự cố xảy ra, FPT Telecom đã triển khai việc sử dụng các tuyến cáp đất liền để chuyển tiếp lưu lượng AAG bị ngừng hoạt động nhằm giảm thiểu ảnh hưởng tới khách hàng. Đồng thời vị đại diện này cho biết, sự cố này thực sự ảnh hưởng không lớn đối với khách hàng của công ty. Nhận định về sự cố lần này, Tổng giám đốc công ty CP NetNam Vũ Thế Bình nhấn mạnh việc tuyến cáp quang biển AAG lại bị sự cố là chuyện không mới. Nhiều năm qua tuyến cáp này thường xuyên bị sự cố, gián đoạn, với thời gian dài. NetNam đã có sẵn phương án chuyển hướng lưu lượng sang cáp đất liền và hướng cáp biển khác, do đó ngay khi có sự cố sáng sớm nay, các lưu lượng đã được chuyển hướng và ổn định. “Với sự cố lần thứ hai trong năm 2015 xảy ra với tuyến cáp quang biển quốc tế AAG này, NetNam không bị ảnh hưởng gì lớn, vì đã chuẩn bị trước và ứng phó nhiều lần việc tương tự. Từ sáng nay dịch vụ cung cấp tới các khách hàng NetNam vẫn ổn định”, ông Bình khẳng định. Về sự cố cáp quang biển AAG lần này, theo thông tin từ Viettel Telecom, hiện tại sử dụng tới 4 tuyến cáp quốc tế gồm 2 tuyến cáp trên đất liền và 2 tuyến cáp quang biển trong đó có tuyến AAG. Chính vì vậy, khi sự cố xảy ra, về cơ bản, chất lượng dịch vụ Viettel cung cấp cho các khách hàng vẫn được đảm bảo, không bị ảnh hưởng nhiều. Còn với CMC Telecom ông Đặng Tùng Sơn cho biết, hiện nhà mạng này chỉ sử dụng 15% lưu lượng kết nối từ tuyến cáp quang biển AAG nên mức độ ảnh hưởng tới khách hàng khi truy cập Internet hướng quốc tế rất nhỏ. Hiện tại, truy cập Internet ra hướng quốc tế của khách hàng doanh nghiệp sử dụng dịch vụ Kênh thuê riêng Internet Leased Line của CMC Telecom hoàn toàn không bị ảnh hưởng bởi sự cố. Tuy nhiên, khách hàng sử dụng dịch vụ Internet trên truyền hình cáp sẽ truy cập Internet hướng ra quốc tế chậm hơn bình thường. Ông Sơn cũng cho biết thêm: “Sau khi nhận được thông tin, CMC Telecom đã lập tức tiến hành thông báo với khách hàng về sự cố. Hiện CMC Telecom đang làm việc với đối tác để xác định chính xác lỗi để xử lý, chủ động tiến hành định tuyến lại, bổ sung lưu lượng đầy đủ thông qua các kết nối khác. Đồng thời, CMC Telecom đã bố trí nhân sự hỗ trợ, ứng cứu, sẵn sàng phục vụ khách hàng 24/7 trong quá trình khắc phục sự cố trên”.\r\n', 'ebdd18ae5ab2acc24d7c7ad2f892db55.jpg'),
(8, 'Hơn 100 triệu chiếc iPhone, iPad bị YouTube bỏ rơi', 'Bản cập nhật mới nhất của YouTube khiến nhiều thiết bị cũ không được hỗ trợ, bên cạnh Smart TV thế hệ cũ, hơn 100 triệu chiếc iPhone, iPad của Apple cũng nằm ngoài danh sách.', 'Việc nâng cấp hàm API khiến hàng loạt thiết bị đời cũ như các dòng Smart TV sản xuất từ năm 2012 trở về trước không thể truy cập ứng dụng YouTube.  Google đã tung ra bản cập nhật từ version 2 lên version 3 cho ứng dụng YouTube trên các thiết bị di động. Điều này làm cho nhiều chiếc iPhone, iPad và thậm chí là iPod touch (không cập nhật lên được iOS 7) sẽ không được hỗ trợ bởi YouTube.  Tuy nhiên, người dùng các thiết bị trên vẫn có thể truy cập vào dịch vụ này thông qua trình duyệt di động Safari được cài đặt sẵn trên thiết bị.\r\nĐộng thái này của Google cũng làm ảnh hưởng đến các ứng dụng bên thứ 3 hỗ trợ YouTube trên nền tảng Windows Phone. Một số ứng dụng như MetroTube và myTube phải tung ra bản cập nhật để hỗ trợ những API mới của YouTube. Nếu không tiến hành làm lại, những ứng dụng trên sẽ không hoạt động. Những người dử dụng các thiết bị như điện thoại, máy tính bảng chạy Android không bị ảnh hưởng nhiều vì bản cập nhật cho ứng dụng YouTube đã có sẵn trên Google Play Store. Hiện tại, ứng dụng YouTube của Google chỉ hỗ trợ những thiết bị iOS được cập nhật iOS 7 trở lên.\r\n\r\n', '1400197_copy.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdienthoai`
--
ALTER TABLE `chitietdienthoai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaidienthoai`
--
ALTER TABLE `loaidienthoai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`tentk`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdienthoai`
--
ALTER TABLE `chitietdienthoai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `dienthoai`
--
ALTER TABLE `dienthoai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `loaidienthoai`
--
ALTER TABLE `loaidienthoai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
