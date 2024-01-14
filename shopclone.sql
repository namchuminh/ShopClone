-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2024 at 08:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopclone`
--

-- --------------------------------------------------------

--
-- Table structure for table `caidat`
--

CREATE TABLE `caidat` (
  `TenWebsite` text NOT NULL,
  `MoTaWebsite` text NOT NULL,
  `TuKhoa` text NOT NULL,
  `LogoWebsite` text NOT NULL,
  `FaviconWebsite` text NOT NULL,
  `TaiKhoanGmail` text NOT NULL,
  `MatKhauGmail` text NOT NULL,
  `SoDienThoai` varchar(11) NOT NULL,
  `Email` text NOT NULL,
  `Facebook` text NOT NULL,
  `Zalo` text NOT NULL,
  `HuongDan` text NOT NULL,
  `ChinhSach` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `caidat`
--

INSERT INTO `caidat` (`TenWebsite`, `MoTaWebsite`, `TuKhoa`, `LogoWebsite`, `FaviconWebsite`, `TaiKhoanGmail`, `MatKhauGmail`, `SoDienThoai`, `Email`, `Facebook`, `Zalo`, `HuongDan`, `ChinhSach`) VALUES
('Shop Clone 247', 'Cung cấp các sản phẩm nguyên liệu cho Facebook, Tiktok, Gmail và các tài khoản mạng xã hội cho các khách hàng làm dịch vụ Marketing', 'shop clone, clone shop, mua clone, web bán clone giá rẻ, sellclone, clone gia re, clone viet, mua tai khoan, taikhoan fb, shop nick fb, via fb, shop via, via gia re', 'http://localhost/ShopClone/uploads/banner_chu_4-11.jpg', 'http://localhost/ShopClone/uploads/e6b325c11718349e12cdc5d682871554.png', 'lienhe.shopclone247@gmail.com', 'mabpkfkgbxlltrsw', '0379962045', 'lienhe.shopclone247@gmail.com', 'https://www.facebook.com/namchuminhh/', 'https://zalo.me/0379962045', 'https://www.youtube.com/watch?v=y2rlOOw0Xqg', '<h2 id=\"chinh-sach-dich-vu-cham-soc-khach-hang-trong-cac-doanh-nghiep\" dir=\"ltr\">1. Ch&iacute;nh s&aacute;ch dịch vụ chăm s&oacute;c kh&aacute;ch h&agrave;ng trong c&aacute;c doanh nghiệp</h2>\r\n<h3 id=\"khai-niem-chinh-sach-dich-vu-khach-hang\" dir=\"ltr\">1.1. Kh&aacute;i niệm ch&iacute;nh s&aacute;ch dịch vụ kh&aacute;ch h&agrave;ng</h3>\r\n<p dir=\"ltr\">Kh&aacute;ch h&agrave;ng l&agrave; đối tượng được quan t&acirc;m h&agrave;ng đầu trong bất cứ một doanh nghiệp hay một tổ chức kinh doanh n&agrave;o. Việc x&acirc;y dựng những ch&iacute;nh s&aacute;ch, sử dụng những&nbsp;<strong>phần mềm quản l&yacute; kh&aacute;ch h&agrave;ng crm online</strong>&nbsp;đều l&agrave; c&aacute;ch thức để c&aacute;c doanh nghiệp tập trung v&agrave;o đối tượng n&agrave;y. Vậy ch&iacute;nh s&aacute;ch dịch vụ kh&aacute;ch h&agrave;ng l&agrave; g&igrave;?</p>\r\n<p dir=\"ltr\">Ch&iacute;nh s&aacute;ch dịch vụ kh&aacute;ch h&agrave;ng được hiểu l&agrave; những quy định, chương tr&igrave;nh của một doanh nghiệp được x&acirc;y dựng để phục vụ cho c&ocirc;ng việc chăm s&oacute;c kh&aacute;ch h&agrave;ng của m&igrave;nh. Những ch&iacute;nh n&agrave;y sẽ bao gồm những ch&iacute;nh s&aacute;ch dịch vụ nhỏ li&ecirc;n quan đến đối tượng người ti&ecirc;u d&ugrave;ng. Đ&oacute; c&oacute; thể l&agrave; ch&iacute;nh s&aacute;ch khuyến m&atilde;i, ch&iacute;nh s&aacute;ch cho kh&aacute;ch h&agrave;ng th&acirc;n thiết, ch&iacute;nh s&aacute;ch t&iacute;ch điểm, ch&iacute;nh s&aacute;ch hỗ trợ, giải đ&aacute;p nhu cầu của kh&aacute;ch h&agrave;ng,...</p>\r\n<div>\r\n<figure><img class=\" lazyloaded\" src=\"https://storage.timviec365.vn/timviec365/pictures/images_11_2021/chinh-sach-dich-vu-khach-hang.jpg\" alt=\"Ch&iacute;nh s&aacute;ch dịch vụ chăm s&oacute;c kh&aacute;ch h&agrave;ng trong c&aacute;c doanh nghiệp\" width=\"800\" height=\"450\" data-src=\"https://storage.timviec365.vn/timviec365/pictures/images_11_2021/chinh-sach-dich-vu-khach-hang.jpg\">\r\n<figcaption>Ch&iacute;nh s&aacute;ch dịch vụ chăm s&oacute;c kh&aacute;ch h&agrave;ng trong c&aacute;c doanh nghiệp</figcaption>\r\n</figure>\r\n</div>\r\n<h3 id=\"ly-do-can-co-chinh-sach-dich-vu-khach-hang\" dir=\"ltr\">1.2. L&yacute; do cần c&oacute; ch&iacute;nh s&aacute;ch dịch vụ kh&aacute;ch h&agrave;ng</h3>\r\n<p dir=\"ltr\">Như đ&atilde; n&oacute;i ở tr&ecirc;n, kh&aacute;ch h&agrave;ng l&agrave; người lu&ocirc;n được c&aacute;c doanh nghiệp hướng đến khi x&acirc;y dựng v&agrave; trao đi gi&aacute; trị của m&igrave;nh. Việc thiết lập, tạo dựng những ch&iacute;nh s&aacute;ch li&ecirc;n quan đến chăm s&oacute;c dịch vụ kh&aacute;ch h&agrave;ng l&agrave; v&ocirc; c&ugrave;ng cần thiết.</p>\r\n<p dir=\"ltr\">Thị trường cạnh tranh khốc liệt, c&aacute;c doanh nghiệp với c&ugrave;ng lĩnh vực kinh doanh khiến cho sự lựa chọn của kh&aacute;ch h&agrave;ng ng&agrave;y c&agrave;ng đa dạng. Điểm mấu chốt trong cuộc chạy đua xem ai l&agrave; những c&aacute;i t&ecirc;n nổi bật hơn ch&iacute;nh l&agrave; nằm ở những ch&iacute;nh s&aacute;ch dịch vụ n&agrave;y.</p>\r\n<p dir=\"ltr\">C&aacute;c doanh nghiệp hiểu r&otilde; rằng, việc x&acirc;y dựng những ch&iacute;nh s&aacute;ch dịch vụ trở th&agrave;nh l&yacute; do khiến kh&aacute;ch h&agrave;ng ghi nhớ thương hiệu, thu h&uacute;t th&ecirc;m nhiều kh&aacute;ch h&agrave;ng mục ti&ecirc;u. Đồng thời g&oacute;p phần đẩy mạnh t&igrave;nh h&igrave;nh kinh doanh, đem về những lợi nhuận đ&aacute;ng kể cho m&igrave;nh.</p>\r\n<div>\r\n<figure><img class=\" lazyloaded\" src=\"https://storage.timviec365.vn/timviec365/pictures/images_11_2021/giu-chan-khach-hang.jpg\" alt=\"L&yacute; do cần c&oacute; ch&iacute;nh s&aacute;ch dịch vụ kh&aacute;ch h&agrave;ng\" width=\"800\" height=\"450\" data-src=\"https://storage.timviec365.vn/timviec365/pictures/images_11_2021/giu-chan-khach-hang.jpg\">\r\n<figcaption>L&yacute; do cần c&oacute; ch&iacute;nh s&aacute;ch dịch vụ kh&aacute;ch h&agrave;ng</figcaption>\r\n</figure>\r\n</div>\r\n<h2 id=\"cach-thuc-de-xay-dung-chinh-sach-dich-vu-khach-hang-hieu-qua\" dir=\"ltr\">2. C&aacute;ch thức để x&acirc;y dựng ch&iacute;nh s&aacute;ch dịch vụ kh&aacute;ch h&agrave;ng hiệu quả</h2>\r\n<h3 id=\"cach-xay-dung-chinh-sach-dich-vu-khach-hang\" dir=\"ltr\">2.1. C&aacute;ch x&acirc;y dựng ch&iacute;nh s&aacute;ch dịch vụ kh&aacute;ch h&agrave;ng</h3>\r\n<p dir=\"ltr\">Để c&oacute; thể x&acirc;y dựng được những ch&iacute;nh s&aacute;ch dịch vụ kh&aacute;ch h&agrave;ng th&igrave; c&aacute;c doanh nghiệp cần thực hiện c&aacute;c bước cơ bản bao gồm: tiến h&agrave;nh thu thập, quản l&yacute; th&ocirc;ng tin kh&aacute;ch h&agrave;ng; x&acirc;y dựng c&aacute;c ch&iacute;nh s&aacute;ch dịch vụ dựa tr&ecirc;n những yếu tố li&ecirc;n quan; cuối c&ugrave;ng l&agrave; đưa ch&iacute;nh s&aacute;ch v&agrave;o hoạt động thực tế v&agrave; đ&aacute;nh gi&aacute; để điều chỉnh cho ph&ugrave; hợp.</p>\r\n<h4 id=\"thu-thap-va-quan-ly-thong-tin-khach-hang\" dir=\"ltr\">2.1.1. Thu thập v&agrave; quản l&yacute; th&ocirc;ng tin kh&aacute;ch h&agrave;ng</h4>\r\n<p dir=\"ltr\">Đ&acirc;y l&agrave; bước cơ bản đầu ti&ecirc;n gi&uacute;p doanh nghiệp c&oacute; cơ sở để x&acirc;y dựng l&ecirc;n những ch&iacute;nh s&aacute;ch dịch vụ hiệu quả. Khi thực hiện bước n&agrave;y, c&aacute;c nh&agrave; quản l&yacute; sẽ sử dụng những c&ocirc;ng cụ hỗ trợ như&nbsp;<strong>phần mềm quản l&yacute; kh&aacute;ch h&agrave;ng CRM online miễn ph&iacute;</strong>.&nbsp;</p>\r\n<p dir=\"ltr\">Thu thập, ph&acirc;n t&iacute;ch th&ocirc;ng tin kh&aacute;ch h&agrave;ng qua việc x&acirc;y dựng chiến lược kinh doanh cụ thể để t&igrave;m ra những ch&iacute;nh s&aacute;ch ph&ugrave; hợp. Nếu doanh nghiệp của bạn thực sự hiểu r&otilde; những th&ocirc;ng tin v&agrave; c&oacute; khả năng ph&acirc;n t&iacute;ch, thấu hiểu những t&acirc;m l&yacute; kh&aacute;ch h&agrave;ng th&igrave; việc tạo ra ch&iacute;nh s&aacute;ch dịch vụ sẽ trở n&ecirc;n đơn giản v&agrave; hiệu quả hơn rất nhiều.</p>\r\n<div>\r\n<figure><img class=\" lazyloaded\" src=\"https://storage.timviec365.vn/timviec365/pictures/images_11_2021/xay-dung-chinh-sach.jpg\" alt=\"C&aacute;ch x&acirc;y dựng ch&iacute;nh s&aacute;ch dịch vụ kh&aacute;ch h&agrave;ng\" width=\"800\" height=\"532\" data-src=\"https://storage.timviec365.vn/timviec365/pictures/images_11_2021/xay-dung-chinh-sach.jpg\">\r\n<figcaption>C&aacute;ch x&acirc;y dựng ch&iacute;nh s&aacute;ch dịch vụ kh&aacute;ch h&agrave;ng</figcaption>\r\n</figure>\r\n</div>\r\n<h4 id=\"xay-dung-chinh-sach-dich-vu-dua-tren-nhung-dac-diem-phu-hop\" dir=\"ltr\">2.1.2. X&acirc;y dựng ch&iacute;nh s&aacute;ch dịch vụ dựa tr&ecirc;n những đặc điểm ph&ugrave; hợp</h4>\r\n<p dir=\"ltr\">Bước thứ hai của quy tr&igrave;nh n&agrave;y đ&oacute; l&agrave; l&ecirc;n kế hoạch v&agrave; tiến th&agrave;nh tạo dựng những ch&iacute;nh s&aacute;ch dịch vụ cho kh&aacute;ch h&agrave;ng. Sau khi đ&atilde; ph&acirc;n t&iacute;ch r&otilde; r&agrave;ng những th&ocirc;ng tin, đặc điểm chung của đối tượng th&igrave; c&aacute;c doanh nghiệp cần l&ecirc;n kế hoạch cụ thể cho việc x&acirc;y dựng ch&iacute;nh s&aacute;ch.&nbsp;</p>\r\n<p dir=\"ltr\">Ch&iacute;nh s&aacute;ch dịch vụ kh&aacute;ch h&agrave;ng n&ecirc;n được b&aacute;m s&aacute;t dựa theo những đặc điểm ri&ecirc;ng của doanh nghiệp. Ph&ugrave; hợp với t&agrave;i ch&iacute;nh, nguồn lực v&agrave; đi đứng theo phương hướng cũng như gi&aacute; trị cốt l&otilde;i m&agrave; doanh nghiệp muốn mang đến cho người ti&ecirc;u d&ugrave;ng.</p>\r\n<h4 id=\"dua-nhung-chinh-sach-vao-hoat-dong-thuc-te\" dir=\"ltr\">2.1.3. Đưa những ch&iacute;nh s&aacute;ch v&agrave;o hoạt động thực tế</h4>\r\n<p dir=\"ltr\">Sau khi x&acirc;y dựng xong v&agrave; t&igrave;m ra được sự khả th&igrave; th&igrave; việc đưa những ch&iacute;nh s&aacute;ch đ&oacute; v&agrave;o thực tế l&agrave; bước cuối c&ugrave;ng c&aacute;c doanh nghiệp phải l&agrave;m. Sau qu&aacute; tr&igrave;nh hoạt động thử nghiệm, c&aacute;c doanh nghiệp cần đưa ra những đ&aacute;nh gi&aacute; chi tiết về sự hiệu quả của những ch&iacute;nh s&aacute;ch đ&oacute;.</p>\r\n<p dir=\"ltr\">Tiền h&agrave;nh c&aacute;c c&aacute;ch thức để t&igrave;m kiếm những &yacute; kiến x&acirc;y dựng như việc thảo luận hoặc th&acirc;m nhập v&agrave;o thị trường thực tế để c&oacute; thể đưa ra những g&oacute;c nh&igrave;n kh&aacute;ch quan nhất. Đồng thời c&oacute; thể điều chỉnh ph&ugrave; hợp nếu ch&iacute;nh s&aacute;ch kh&ocirc;ng qu&aacute; khả thi tr&ecirc;n phương diện thực tiễn.&nbsp;</p>\r\n<div>\r\n<figure><img class=\" lazyloaded\" src=\"https://storage.timviec365.vn/timviec365/pictures/images_11_2021/thuc-te-cham-soc-khach-hang.jpg\" alt=\" Đưa những ch&iacute;nh s&aacute;ch v&agrave;o hoạt động thực tế\" width=\"800\" height=\"450\" data-src=\"https://storage.timviec365.vn/timviec365/pictures/images_11_2021/thuc-te-cham-soc-khach-hang.jpg\">\r\n<figcaption>Đưa những ch&iacute;nh s&aacute;ch v&agrave;o hoạt động thực tế</figcaption>\r\n</figure>\r\n</div>\r\n<h3 id=\"nhung-luu-y-khi-xay-dung-nhung-chinh-sach-dich-vu-khach-hang\" dir=\"ltr\">2.2. Những lưu &yacute; khi x&acirc;y dựng những ch&iacute;nh s&aacute;ch dịch vụ kh&aacute;ch h&agrave;ng</h3>\r\n<h4 id=\"bam-sat-muc-tieu-trong-chien-luoc-kinh-doanh\" dir=\"ltr\">2.2.1. B&aacute;m s&aacute;t mục ti&ecirc;u trong chiến lược kinh doanh</h4>\r\n<p dir=\"ltr\">Điều đầu ti&ecirc;n c&aacute;c doanh nghiệp cần lưu &yacute;, đ&oacute; l&agrave; qu&aacute; tr&igrave;nh x&acirc;y dựng ch&iacute;nh s&aacute;ch phải lu&ocirc;n b&aacute;m s&aacute;t với mục ti&ecirc;u chiến lược kinh doanh của doanh nghiệp m&igrave;nh. Kh&ocirc;ng c&oacute; ch&iacute;nh s&aacute;ch dịch vụ n&agrave;o lại hiệu quả nếu n&oacute; kh&ocirc;ng đem đến gi&aacute; trị xứng tầm với mục ti&ecirc;u của doanh nghiệp. Ngược lại, những ch&iacute;nh s&aacute;ch với đặc điểm qu&aacute; xa vời sẽ gặp rất nhiều kh&oacute; khăn trong qu&aacute; tr&igrave;nh hoạt động. Tạo ra những hạn chế về t&iacute;nh khả thi, từ đ&oacute; g&acirc;y ra sự thất bại kinh doanh đ&aacute;ng tiếc.</p>\r\n<div>\r\n<figure><img class=\" lazyloaded\" src=\"https://storage.timviec365.vn/timviec365/pictures/images_11_2021/muc-tieu-kinh-doanh.jpg\" alt=\" B&aacute;m s&aacute;t mục ti&ecirc;u trong chiến lược kinh doanh\" width=\"800\" height=\"450\" data-src=\"https://storage.timviec365.vn/timviec365/pictures/images_11_2021/muc-tieu-kinh-doanh.jpg\">\r\n<figcaption>B&aacute;m s&aacute;t mục ti&ecirc;u trong chiến lược kinh doanh</figcaption>\r\n</figure>\r\n</div>\r\n<h4 id=\"thau-hieu-tam-ly-de-cham-soc-khach-hang-hieu-qua\" dir=\"ltr\">2.2.2. Thấu hiểu t&acirc;m l&yacute; để chăm s&oacute;c kh&aacute;ch h&agrave;ng hiệu quả</h4>\r\n<p dir=\"ltr\">Việc th&ocirc;ng qua những trải nghiệm thực tế c&ugrave;ng việc thấu hiểu t&acirc;m l&yacute; kh&aacute;ch h&agrave;ng cũng l&agrave; một trong những lưu &yacute; quan trọng khi x&acirc;y dựng những ch&iacute;nh s&aacute;ch dịch vụ n&agrave;y. C&aacute;c doanh nghiệp phải hiểu r&otilde; đối tượng của họ l&agrave; ai? Họ cần v&agrave; mong muốn điều g&igrave; khi sử dụng dịch vụ th&igrave; mới c&oacute; thể đem lại những ch&iacute;nh s&aacute;ch hiệu quả tối đa được.</p>\r\n<p dir=\"ltr\">T&acirc;m l&yacute; con người l&agrave; mu&ocirc;n h&igrave;nh vạn trạng. Việc trở th&agrave;nh &ldquo;n&agrave;ng d&acirc;u&rdquo; của trăm họ c&oacute; thể khiến bạn đau đầu thế nhưng nếu kh&eacute;o l&eacute;o, am hiểu v&agrave; biết c&aacute;ch th&igrave; ch&uacute;ng t&ocirc;i tin rằng kh&ocirc;ng một ai c&oacute; thể ch&ecirc; bai ch&iacute;nh s&aacute;ch của bạn.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `chuyenmuc`
--

CREATE TABLE `chuyenmuc` (
  `MaChuyenMuc` int(11) NOT NULL,
  `TenChuyenMuc` varchar(255) NOT NULL,
  `HinhAnh` text NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chuyenmuc`
--

INSERT INTO `chuyenmuc` (`MaChuyenMuc`, `TenChuyenMuc`, `HinhAnh`, `TrangThai`) VALUES
(4, 'Mục mới 34', 'http://localhost/ShopClone/uploads/asus-gaming-rog-strix-scar-18-g834jy-i9-n6039w-thumb-600x6002.jpg', 1),
(5, 'Mục mới', 'http://localhost/ShopClone/uploads/mat-buon-1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dongtien`
--

CREATE TABLE `dongtien` (
  `MaDongTien` int(11) NOT NULL,
  `MaNguoiDung` int(11) NOT NULL,
  `SoTienTruoc` int(11) NOT NULL,
  `SoTienThayDoi` int(11) NOT NULL,
  `SoTienHienTai` int(11) NOT NULL,
  `ThoiGian` datetime NOT NULL DEFAULT current_timestamp(),
  `NoiDung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dongtien`
--

INSERT INTO `dongtien` (`MaDongTien`, `MaNguoiDung`, `SoTienTruoc`, `SoTienThayDoi`, `SoTienHienTai`, `ThoiGian`, `NoiDung`) VALUES
(1, 1, 150000, 200000, 350000, '2023-12-02 18:11:06', 'Admin cộng tiền vào tài khoản!'),
(2, 1, 350000, 50000, 400000, '2023-12-02 18:11:38', 'Admin cộng tiền vào tài khoản!'),
(3, 1, 400000, 100000, 300000, '2023-12-02 18:16:50', 'Admin trừ 100,000đ khỏi tài khoản!'),
(4, 1, 300000, 700000, 1000000, '2023-12-02 18:30:50', 'Admin cộng 700,000đ vào tài khoản!'),
(5, 1, 1000000, 100000, 1100000, '2023-12-05 00:20:09', 'Admin cộng 100,000đ vào tài khoản!'),
(6, 1, 1100000, 2000000, 0, '2023-12-05 00:20:35', 'Admin trừ 2,000,000đ khỏi tài khoản!'),
(7, 1, 0, 1000000, 1000000, '2023-12-05 00:20:53', 'Admin cộng 1,000,000đ vào tài khoản!'),
(8, 1, 1000000, -100000, 900000, '2023-12-05 12:53:09', 'Admin cộng -100,000đ vào tài khoản!');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDonHang` int(11) NOT NULL,
  `MaGiaoDich` varchar(14) NOT NULL,
  `DanhSachClone` text NOT NULL,
  `MaNguoiDung` int(11) NOT NULL,
  `MaSanPham` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `ThanhToan` int(11) NOT NULL,
  `MaChuyenMuc` int(11) NOT NULL,
  `ThoiGian` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`MaDonHang`, `MaGiaoDich`, `DanhSachClone`, `MaNguoiDung`, `MaSanPham`, `SoLuong`, `ThanhToan`, `MaChuyenMuc`, `ThoiGian`) VALUES
(16, 'E49DBBCDFE67CE', 'nam@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64\n', 2, 8, 1, 100, 4, '2024-01-14 00:23:14'),
(17, 'CD187CD8F571C4', 'nam2@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64\nnam3@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64\n', 2, 8, 2, 200, 4, '2024-01-14 00:23:31'),
(18, '248F23625B0F79', '100084047197041|prz!fbtOHz$co|7ZWXFCEUG7KTUURJXN2JNPD7TJFP4JMK|robertojansons4171979@hotmail.com|ksqUJ03ltOJE74\n100084069156608|pfskGCURviWmGfRjp|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64\n100076648476515|5ao3uzm4wd0|BB2LBCF4JFO4AZC2FZBY3AOG4JHIJT5V|nowaynuilu@outlook.com|xlMZaa44|12/29/1980\n', 2, 8, 3, 300, 4, '2024-01-14 00:24:37'),
(19, '085384C9784985', 'nam@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JádfJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT6478w\nnam2@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJsdafsda5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT6425\nnam3@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TádfsewrsadN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64888\n100084047197041|prz!fbtOHz$co|7ZWXFCEUG7KTUURJXN2JNewrewPD7TJFP4JMK|robertojansons4171979@hotmail.com|ksqUJ03ltOJE74wqe\n100084069156608|pfskGCURviWmGfRjp|WVMGXIVIOYLFBTBNsadfewerwM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64\n100076648476515|5ao3uzm4wd0|BB2LBCF4JFO4AZC2FZBYsadf3AOG4JHIJT5V|nowaynuilu@outlook.com|xlMZaa44|12/29/1980\nnam@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64\nnam2@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64\nnam3@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64\n100084047197041|prz!fbtOHz$co|7ZWXFCEUG7KTUURJXN2JNPD7TJFP4JMK|robertojansons4171979@hotmail.com|ksqUJ03ltOJE74\n', 2, 7, 10, 1500, 5, '2024-01-14 04:12:22'),
(20, '2BAC9A45EDFAD0', 'nam6@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64FGH9\n', 2, 8, 1, 100, 4, '2024-01-14 04:15:38'),
(21, '1F396FFF7F5DFA', 'nam5@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64FGH2\n', 2, 8, 1, 100, 4, '2024-01-14 04:16:39'),
(22, 'E10FCC7962D396', 'nam4@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64FGH8\n', 2, 8, 1, 100, 4, '2024-01-14 04:21:57'),
(23, '77C39A450AD9A6', 'nam@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64FGH9\nnam2@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64HFG5\n', 2, 8, 2, 200, 4, '2024-01-14 04:22:36'),
(24, '8456C7E37FEFDE', 'nam3@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64DGSF\n', 2, 8, 1, 100, 4, '2024-01-14 04:23:00'),
(25, 'BB2E3115A660A7', 'nam6@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64SRE\nnam5@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64DSFG54\nnam4@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64DGSF\nnam@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64DFSG\n', 2, 8, 4, 400, 4, '2024-01-14 04:23:10'),
(26, 'F7EB9139FED6CF', 'nam2@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64DSFG3\n', 2, 8, 1, 100, 4, '2024-01-14 04:23:36'),
(27, '31BCF2864B246D', 'nam3@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64SDFG5\n', 2, 8, 1, 100, 4, '2024-01-14 04:23:40'),
(28, '9A9B7B01FEFD12', 'nam6@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64SDFG\n', 2, 8, 1, 100, 4, '2024-01-14 04:25:29'),
(29, 'E5A31003204602', 'nam5@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64FGD\n', 2, 8, 1, 100, 4, '2024-01-14 04:26:55'),
(30, '25E8B65D8A1A25', 'nam4@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64R\n', 2, 8, 1, 100, 4, '2024-01-14 04:29:25'),
(31, '57A39F4F98DCC4', 'nam@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64E\n', 2, 8, 1, 100, 4, '2024-01-14 04:29:53'),
(32, '150680FCCB9BDC', 'nam2@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64E1\n', 2, 8, 1, 100, 4, '2024-01-14 04:31:44'),
(33, 'B7AB11526FA02D', 'nam3@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64Q\n', 2, 8, 1, 100, 4, '2024-01-14 17:18:54'),
(34, 'AB7B389DE75223', 'nam@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxEWQR3\n', 2, 8, 1, 100, 4, '2024-01-14 17:21:51'),
(35, '976D9E01DF4DB9', 'nam2@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEEQWRW\n', 2, 8, 1, 100, 4, '2024-01-14 17:28:53'),
(36, '76CC6AAD2474DD', 'nam3@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64WEQRSD\n100084047197041|prz!fbtOHz$co|7ZWXFCEUG7KTUURJXN2JNPD7TJFP4JMK|robertojansons4171979@hotmail.com|ksqUJ03ltOJE74QWER4\n100084069156608|pfskGCURviWmGfRjp|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64EW4RT3\nnam@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeWEQR432\nnam2@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYQWER3\nnam3@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxye234223\n100084047197041|prz!fbtOHz$co|7ZWXFCEUG7KTUURJXN2JNPD7TJFP4JMK|robertojansons4171979@hotmail.com|ksqUJ03ltOWEQR1DSF\n100084069156608|pfskGCURviWmGfRjp|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyASD65AS32\nnam@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxEWQR23\nnam2@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEEQWR32\n', 2, 8, 10, 1000, 4, '2024-01-15 02:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKhuyenMai` int(11) NOT NULL,
  `NapToiThieu` int(11) NOT NULL,
  `PhanTramKhuyenMai` int(11) NOT NULL,
  `ThoiGian` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKhuyenMai`, `NapToiThieu`, `PhanTramKhuyenMai`, `ThoiGian`) VALUES
(4, 1500000, 10, '2023-12-02 19:42:11');

-- --------------------------------------------------------

--
-- Table structure for table `lichsumua`
--

CREATE TABLE `lichsumua` (
  `MaLichSuMua` int(11) NOT NULL,
  `MaNguoiDung` int(11) NOT NULL,
  `MaSanPham` int(11) NOT NULL,
  `HanhDong` text NOT NULL,
  `ThoiGian` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lichsumua`
--

INSERT INTO `lichsumua` (`MaLichSuMua`, `MaNguoiDung`, `MaSanPham`, `HanhDong`, `ThoiGian`) VALUES
(15, 2, 8, 'Đã mua 1 Tài khoản Gmail Việt Nam!', '2024-01-14 00:23:14'),
(16, 2, 8, 'Đã mua 2 Tài khoản Gmail Việt Nam!', '2024-01-14 00:23:31'),
(17, 2, 8, 'Đã mua 3 Tài khoản Gmail Việt Nam!', '2024-01-14 00:24:37'),
(18, 2, 7, 'Đã mua 10 Clone Facebook mới!', '2024-01-14 04:12:22'),
(19, 2, 8, 'Đã mua 1 Tài khoản Gmail Việt Nam!', '2024-01-14 04:15:38'),
(20, 2, 8, 'Đã mua 1 Tài khoản Gmail Việt Nam!', '2024-01-14 04:16:39'),
(21, 2, 8, 'Đã mua 1 Tài khoản Gmail Việt Nam!', '2024-01-14 04:21:57'),
(22, 2, 8, 'Đã mua 2 Tài khoản Gmail Việt Nam!', '2024-01-14 04:22:36'),
(23, 2, 8, 'Đã mua 1 Tài khoản Gmail Việt Nam!', '2024-01-14 04:23:00'),
(24, 2, 8, 'Đã mua 4 Tài khoản Gmail Việt Nam!', '2024-01-14 04:23:10'),
(25, 2, 8, 'Đã mua 1 Tài khoản Gmail Việt Nam!', '2024-01-14 04:23:36'),
(26, 2, 8, 'Đã mua 1 Tài khoản Gmail Việt Nam!', '2024-01-14 04:23:40'),
(27, 2, 8, 'Đã mua 1 Tài khoản Gmail Việt Nam!', '2024-01-14 04:25:29'),
(28, 2, 8, 'Đã mua 1 Tài khoản Gmail Việt Nam!', '2024-01-14 04:26:55'),
(29, 2, 8, 'Đã mua 1 Tài khoản Gmail Việt Nam!', '2024-01-14 04:29:25'),
(30, 2, 8, 'Đã mua 1 Tài khoản Gmail Việt Nam!', '2024-01-14 04:29:53'),
(31, 2, 8, 'Đã mua 1 Tài khoản Gmail Việt Nam!', '2024-01-14 04:31:44'),
(32, 2, 8, 'Đã mua 1 Tài khoản Gmail Việt Nam!', '2024-01-14 17:18:54'),
(33, 2, 8, 'Đã mua 1 Tài khoản Gmail Việt Nam!', '2024-01-14 17:21:51'),
(34, 2, 8, 'Đã mua 1 Tài khoản Gmail Việt Nam!', '2024-01-14 17:28:53'),
(35, 2, 8, 'Đã mua 10 Tài khoản Gmail Việt Nam!', '2024-01-15 02:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaNguoiDung` int(11) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `TaiKhoan` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `SoDienThoai` varchar(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `NgayThamGia` datetime NOT NULL DEFAULT current_timestamp(),
  `PhanQuyen` int(11) NOT NULL DEFAULT 0,
  `TrangThai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`MaNguoiDung`, `HoTen`, `TaiKhoan`, `MatKhau`, `SoDienThoai`, `Email`, `NgayThamGia`, `PhanQuyen`, `TrangThai`) VALUES
(1, 'Quản Trị Viên', 'admin', '21232f297a57a5a743894a0e4a801fc3', '0379962045', 'chuminhnamma@gmail.com', '2023-11-24 19:04:09', 1, 1),
(2, 'Chu Minh Nam', 'nguyenvana', '20ca70c7c8f494c7bd1d54ad23d40cde', '0888555999', 'namdeptrai@gmail.com', '2024-01-12 18:04:19', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quanlychuyenkhoan`
--

CREATE TABLE `quanlychuyenkhoan` (
  `MaChuyenKhoan` int(11) NOT NULL,
  `MaThanhToan` varchar(255) NOT NULL,
  `MaNguoiDung` int(11) NOT NULL,
  `NganHang` varchar(255) NOT NULL,
  `LoaiThe` varchar(255) NOT NULL,
  `SoTien` int(11) NOT NULL,
  `NoiDung` varchar(500) NOT NULL,
  `ThoiGian` datetime NOT NULL DEFAULT current_timestamp(),
  `TrangThai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quanlychuyenkhoan`
--

INSERT INTO `quanlychuyenkhoan` (`MaChuyenKhoan`, `MaThanhToan`, `MaNguoiDung`, `NganHang`, `LoaiThe`, `SoTien`, `NoiDung`, `ThoiGian`, `TrangThai`) VALUES
(1, 'ChuyenKhoan', 1, 'MB BANK', 'ATM', 500000, 'CHU MINH NAM chuyen khoan', '2023-12-05 15:22:20', 'Thành công');

-- --------------------------------------------------------

--
-- Table structure for table `quanlynapthe`
--

CREATE TABLE `quanlynapthe` (
  `MaNapThe` int(11) NOT NULL,
  `MaNguoiDung` int(11) NOT NULL,
  `MaThanhToan` varchar(255) NOT NULL,
  `MaThe` varchar(255) NOT NULL,
  `SeriThe` varchar(255) NOT NULL,
  `LoaiThe` varchar(255) NOT NULL,
  `MenhGia` int(11) NOT NULL,
  `ThoiGian` datetime NOT NULL DEFAULT current_timestamp(),
  `Request_Id` text NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quanlynapthe`
--

INSERT INTO `quanlynapthe` (`MaNapThe`, `MaNguoiDung`, `MaThanhToan`, `MaThe`, `SeriThe`, `LoaiThe`, `MenhGia`, `ThoiGian`, `Request_Id`, `TrangThai`) VALUES
(2, 2, 'NapThe', '718864646116690', '10009884603356', 'VIETTEL', 20000, '2024-01-15 00:55:37', '', 1),
(3, 2, 'NapThe', '427112310987602', '20000265246841', 'VIETTEL', 10000, '2024-01-15 01:22:10', '73221506883', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quocgia`
--

CREATE TABLE `quocgia` (
  `MaQuocGia` int(11) NOT NULL,
  `TenQuocGia` varchar(255) NOT NULL,
  `HinhAnh` text NOT NULL,
  `KyHieu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quocgia`
--

INSERT INTO `quocgia` (`MaQuocGia`, `TenQuocGia`, `HinhAnh`, `KyHieu`) VALUES
(1, 'Burkina Faso', 'https://flagcdn.com/w320/bf.png', 'BF'),
(2, 'Hong Kong', 'https://flagcdn.com/w320/hk.png', 'HK'),
(3, 'United Arab Emirates', 'https://flagcdn.com/w320/ae.png', 'AE'),
(4, 'Antigua and Barbuda', 'https://flagcdn.com/w320/ag.png', 'AG'),
(5, 'Comoros', 'https://flagcdn.com/w320/km.png', 'KM'),
(6, 'Pitcairn Islands', 'https://flagcdn.com/w320/pn.png', 'PN'),
(7, 'Bulgaria', 'https://flagcdn.com/w320/bg.png', 'BG'),
(8, 'Djibouti', 'https://flagcdn.com/w320/dj.png', 'DJ'),
(9, 'Laos', 'https://flagcdn.com/w320/la.png', 'LA'),
(10, 'Lebanon', 'https://flagcdn.com/w320/lb.png', 'LB'),
(11, 'Panama', 'https://flagcdn.com/w320/pa.png', 'PA'),
(12, 'Ecuador', 'https://flagcdn.com/w320/ec.png', 'EC'),
(13, 'Barbados', 'https://flagcdn.com/w320/bb.png', 'BB'),
(14, 'Isle of Man', 'https://flagcdn.com/w320/im.png', 'IM'),
(15, 'Bhutan', 'https://flagcdn.com/w320/bt.png', 'BT'),
(16, 'Burundi', 'https://flagcdn.com/w320/bi.png', 'BI'),
(17, 'China', 'https://flagcdn.com/w320/cn.png', 'CN'),
(18, 'Norfolk Island', 'https://flagcdn.com/w320/nf.png', 'NF'),
(19, 'Libya', 'https://flagcdn.com/w320/ly.png', 'LY'),
(20, 'Bosnia and Herzegovina', 'https://flagcdn.com/w320/ba.png', 'BA'),
(21, 'Tuvalu', 'https://flagcdn.com/w320/tv.png', 'TV'),
(22, 'Angola', 'https://flagcdn.com/w320/ao.png', 'AO'),
(23, 'Madagascar', 'https://flagcdn.com/w320/mg.png', 'MG'),
(24, 'Mauritania', 'https://flagcdn.com/w320/mr.png', 'MR'),
(25, 'Anguilla', 'https://flagcdn.com/w320/ai.png', 'AI'),
(26, 'Jersey', 'https://flagcdn.com/w320/je.png', 'JE'),
(27, 'Cape Verde', 'https://flagcdn.com/w320/cv.png', 'CV'),
(28, 'United States Virgin Islands', 'https://flagcdn.com/w320/vi.png', 'VI'),
(29, 'Northern Mariana Islands', 'https://flagcdn.com/w320/mp.png', 'MP'),
(30, 'Niue', 'https://flagcdn.com/w320/nu.png', 'NU'),
(31, 'United States Minor Outlying Islands', 'https://flagcdn.com/w320/um.png', 'UM'),
(32, 'Mexico', 'https://flagcdn.com/w320/mx.png', 'MX'),
(33, 'Sri Lanka', 'https://flagcdn.com/w320/lk.png', 'LK'),
(34, 'Venezuela', 'https://flagcdn.com/w320/ve.png', 'VE'),
(35, 'Falkland Islands', 'https://flagcdn.com/w320/fk.png', 'FK'),
(36, 'Malawi', 'https://flagcdn.com/w320/mw.png', 'MW'),
(37, 'San Marino', 'https://flagcdn.com/w320/sm.png', 'SM'),
(38, 'Turks and Caicos Islands', 'https://flagcdn.com/w320/tc.png', 'TC'),
(39, 'Saint Pierre and Miquelon', 'https://flagcdn.com/w320/pm.png', 'PM'),
(40, 'Suriname', 'https://flagcdn.com/w320/sr.png', 'SR'),
(41, 'Guinea', 'https://flagcdn.com/w320/gn.png', 'GN'),
(42, 'Zimbabwe', 'https://flagcdn.com/w320/zw.png', 'ZW'),
(43, 'Rwanda', 'https://flagcdn.com/w320/rw.png', 'RW'),
(44, 'Kyrgyzstan', 'https://flagcdn.com/w320/kg.png', 'KG'),
(45, 'Russia', 'https://flagcdn.com/w320/ru.png', 'RU'),
(46, 'Uzbekistan', 'https://flagcdn.com/w320/uz.png', 'UZ'),
(47, 'Belgium', 'https://flagcdn.com/w320/be.png', 'BE'),
(48, 'Åland Islands', 'https://flagcdn.com/w320/ax.png', 'AX'),
(49, 'Western Sahara', 'https://flagcdn.com/w320/eh.png', 'EH'),
(50, 'Mayotte', 'https://flagcdn.com/w320/yt.png', 'YT'),
(51, 'Morocco', 'https://flagcdn.com/w320/ma.png', 'MA'),
(52, 'Martinique', 'https://flagcdn.com/w320/mq.png', 'MQ'),
(53, 'France', 'https://flagcdn.com/w320/fr.png', 'FR'),
(54, 'Tanzania', 'https://flagcdn.com/w320/tz.png', 'TZ'),
(55, 'Cayman Islands', 'https://flagcdn.com/w320/ky.png', 'KY'),
(56, 'Iran', 'https://flagcdn.com/w320/ir.png', 'IR'),
(57, 'Israel', 'https://flagcdn.com/w320/il.png', 'IL'),
(58, 'Cameroon', 'https://flagcdn.com/w320/cm.png', 'CM'),
(59, 'Singapore', 'https://flagcdn.com/w320/sg.png', 'SG'),
(60, 'Croatia', 'https://flagcdn.com/w320/hr.png', 'HR'),
(61, 'Myanmar', 'https://flagcdn.com/w320/mm.png', 'MM'),
(62, 'Grenada', 'https://flagcdn.com/w320/gd.png', 'GD'),
(63, 'Canada', 'https://flagcdn.com/w320/ca.png', 'CA'),
(64, 'Argentina', 'https://flagcdn.com/w320/ar.png', 'AR'),
(65, 'Réunion', 'https://flagcdn.com/w320/re.png', 'RE'),
(66, 'Malaysia', 'https://flagcdn.com/w320/my.png', 'MY'),
(67, 'Eswatini', 'https://flagcdn.com/w320/sz.png', 'SZ'),
(68, 'Faroe Islands', 'https://flagcdn.com/w320/fo.png', 'FO'),
(69, 'Sierra Leone', 'https://flagcdn.com/w320/sl.png', 'SL'),
(70, 'Uganda', 'https://flagcdn.com/w320/ug.png', 'UG'),
(71, 'American Samoa', 'https://flagcdn.com/w320/as.png', 'AS'),
(72, 'Ivory Coast', 'https://flagcdn.com/w320/ci.png', 'CI'),
(73, 'Equatorial Guinea', 'https://flagcdn.com/w320/gq.png', 'GQ'),
(74, 'Pakistan', 'https://flagcdn.com/w320/pk.png', 'PK'),
(75, 'Monaco', 'https://flagcdn.com/w320/mc.png', 'MC'),
(76, 'Cook Islands', 'https://flagcdn.com/w320/ck.png', 'CK'),
(77, 'Bolivia', 'https://flagcdn.com/w320/bo.png', 'BO'),
(78, 'Cyprus', 'https://flagcdn.com/w320/cy.png', 'CY'),
(79, 'Fiji', 'https://flagcdn.com/w320/fj.png', 'FJ'),
(80, 'Brazil', 'https://flagcdn.com/w320/br.png', 'BR'),
(81, 'Ukraine', 'https://flagcdn.com/w320/ua.png', 'UA'),
(82, 'Palau', 'https://flagcdn.com/w320/pw.png', 'PW'),
(83, 'Bahrain', 'https://flagcdn.com/w320/bh.png', 'BH'),
(84, 'Gambia', 'https://flagcdn.com/w320/gm.png', 'GM'),
(85, 'Poland', 'https://flagcdn.com/w320/pl.png', 'PL'),
(86, 'Cuba', 'https://flagcdn.com/w320/cu.png', 'CU'),
(87, 'Jordan', 'https://flagcdn.com/w320/jo.png', 'JO'),
(88, 'Slovenia', 'https://flagcdn.com/w320/si.png', 'SI'),
(89, 'French Southern and Antarctic Lands', 'https://flagcdn.com/w320/tf.png', 'TF'),
(90, 'Turkmenistan', 'https://flagcdn.com/w320/tm.png', 'TM'),
(91, 'Luxembourg', 'https://flagcdn.com/w320/lu.png', 'LU'),
(92, 'Ghana', 'https://flagcdn.com/w320/gh.png', 'GH'),
(93, 'Moldova', 'https://flagcdn.com/w320/md.png', 'MD'),
(94, 'Eritrea', 'https://flagcdn.com/w320/er.png', 'ER'),
(95, 'Spain', 'https://flagcdn.com/w320/es.png', 'ES'),
(96, 'Ethiopia', 'https://flagcdn.com/w320/et.png', 'ET'),
(97, 'Mozambique', 'https://flagcdn.com/w320/mz.png', 'MZ'),
(98, 'Sint Maarten', 'https://flagcdn.com/w320/sx.png', 'SX'),
(99, 'Syria', 'https://flagcdn.com/w320/sy.png', 'SY'),
(100, 'Bangladesh', 'https://flagcdn.com/w320/bd.png', 'BD'),
(101, 'Vietnam', 'https://flagcdn.com/w320/vn.png', 'VN'),
(102, 'Netherlands', 'https://flagcdn.com/w320/nl.png', 'NL'),
(103, 'Andorra', 'https://flagcdn.com/w320/ad.png', 'AD'),
(104, 'Taiwan', 'https://flagcdn.com/w320/tw.png', 'TW'),
(105, 'Christmas Island', 'https://flagcdn.com/w320/cx.png', 'CX'),
(106, 'Samoa', 'https://flagcdn.com/w320/ws.png', 'WS'),
(107, 'Guinea-Bissau', 'https://flagcdn.com/w320/gw.png', 'GW'),
(108, 'Puerto Rico', 'https://flagcdn.com/w320/pr.png', 'PR'),
(109, 'Papua New Guinea', 'https://flagcdn.com/w320/pg.png', 'PG'),
(110, 'Guernsey', 'https://flagcdn.com/w320/gg.png', 'GG'),
(111, 'Uruguay', 'https://flagcdn.com/w320/uy.png', 'UY'),
(112, 'Australia', 'https://flagcdn.com/w320/au.png', 'AU'),
(113, 'North Korea', 'https://flagcdn.com/w320/kp.png', 'KP'),
(114, 'Bouvet Island', 'https://flagcdn.com/w320/bv.png', 'BV'),
(115, 'Estonia', 'https://flagcdn.com/w320/ee.png', 'EE'),
(116, 'Haiti', 'https://flagcdn.com/w320/ht.png', 'HT'),
(117, 'Algeria', 'https://flagcdn.com/w320/dz.png', 'DZ'),
(118, 'Togo', 'https://flagcdn.com/w320/tg.png', 'TG'),
(119, 'French Guiana', 'https://flagcdn.com/w320/gf.png', 'GF'),
(120, 'Dominica', 'https://flagcdn.com/w320/dm.png', 'DM'),
(121, 'São Tomé and Príncipe', 'https://flagcdn.com/w320/st.png', 'ST'),
(122, 'Egypt', 'https://flagcdn.com/w320/eg.png', 'EG'),
(123, 'Guatemala', 'https://flagcdn.com/w320/gt.png', 'GT'),
(124, 'Norway', 'https://flagcdn.com/w320/no.png', 'NO'),
(125, 'Greece', 'https://flagcdn.com/w320/gr.png', 'GR'),
(126, 'Belarus', 'https://flagcdn.com/w320/by.png', 'BY'),
(127, 'Denmark', 'https://flagcdn.com/w320/dk.png', 'DK'),
(128, 'Heard Island and McDonald Islands', 'https://flagcdn.com/w320/hm.png', 'HM'),
(129, 'Indonesia', 'https://flagcdn.com/w320/id.png', 'ID'),
(130, 'Chile', 'https://flagcdn.com/w320/cl.png', 'CL'),
(131, 'Palestine', 'https://flagcdn.com/w320/ps.png', 'PS'),
(132, 'United Kingdom', 'https://flagcdn.com/w320/gb.png', 'GB'),
(133, 'Saint Kitts and Nevis', 'https://flagcdn.com/w320/kn.png', 'KN'),
(134, 'Saint Barthélemy', 'https://flagcdn.com/w320/bl.png', 'BL'),
(135, 'Nicaragua', 'https://flagcdn.com/w320/ni.png', 'NI'),
(136, 'Tunisia', 'https://flagcdn.com/w320/tn.png', 'TN'),
(137, 'Guam', 'https://flagcdn.com/w320/gu.png', 'GU'),
(138, 'Macau', 'https://flagcdn.com/w320/mo.png', 'MO'),
(139, 'French Polynesia', 'https://flagcdn.com/w320/pf.png', 'PF'),
(140, 'Finland', 'https://flagcdn.com/w320/fi.png', 'FI'),
(141, 'Seychelles', 'https://flagcdn.com/w320/sc.png', 'SC'),
(142, 'South Georgia', 'https://flagcdn.com/w320/gs.png', 'GS'),
(143, 'Jamaica', 'https://flagcdn.com/w320/jm.png', 'JM'),
(144, 'Slovakia', 'https://flagcdn.com/w320/sk.png', 'SK'),
(145, 'Guyana', 'https://flagcdn.com/w320/gy.png', 'GY'),
(146, 'Cambodia', 'https://flagcdn.com/w320/kh.png', 'KH'),
(147, 'Thailand', 'https://flagcdn.com/w320/th.png', 'TH'),
(148, 'Micronesia', 'https://flagcdn.com/w320/fm.png', 'FM'),
(149, 'Maldives', 'https://flagcdn.com/w320/mv.png', 'MV'),
(150, 'Mauritius', 'https://flagcdn.com/w320/mu.png', 'MU'),
(151, 'New Caledonia', 'https://flagcdn.com/w320/nc.png', 'NC'),
(152, 'Philippines', 'https://flagcdn.com/w320/ph.png', 'PH'),
(153, 'Sudan', 'https://flagcdn.com/w320/sd.png', 'SD'),
(154, 'United States', 'https://flagcdn.com/w320/us.png', 'US'),
(155, 'Japan', 'https://flagcdn.com/w320/jp.png', 'JP'),
(156, 'Georgia', 'https://flagcdn.com/w320/ge.png', 'GE'),
(157, 'Tajikistan', 'https://flagcdn.com/w320/tj.png', 'TJ'),
(158, 'Antarctica', 'https://flagcdn.com/w320/aq.png', 'AQ'),
(159, 'Republic of the Congo', 'https://flagcdn.com/w320/cg.png', 'CG'),
(160, 'Serbia', 'https://flagcdn.com/w320/rs.png', 'RS'),
(161, 'Armenia', 'https://flagcdn.com/w320/am.png', 'AM'),
(162, 'Botswana', 'https://flagcdn.com/w320/bw.png', 'BW'),
(163, 'Afghanistan', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_the_Taliban.svg/320px-Flag_of_the_Taliban.svg.png', 'AF'),
(164, 'Qatar', 'https://flagcdn.com/w320/qa.png', 'QA'),
(165, 'Trinidad and Tobago', 'https://flagcdn.com/w320/tt.png', 'TT'),
(166, 'Yemen', 'https://flagcdn.com/w320/ye.png', 'YE'),
(167, 'Brunei', 'https://flagcdn.com/w320/bn.png', 'BN'),
(168, 'Iceland', 'https://flagcdn.com/w320/is.png', 'IS'),
(169, 'Caribbean Netherlands', 'https://flagcdn.com/w320/bq.png', 'BQ'),
(170, 'Marshall Islands', 'https://flagcdn.com/w320/mh.png', 'MH'),
(171, 'Iraq', 'https://flagcdn.com/w320/iq.png', 'IQ'),
(172, 'Curaçao', 'https://flagcdn.com/w320/cw.png', 'CW'),
(173, 'Kosovo', 'https://flagcdn.com/w320/xk.png', 'XK'),
(174, 'Albania', 'https://flagcdn.com/w320/al.png', 'AL'),
(175, 'Saint Vincent and the Grenadines', 'https://flagcdn.com/w320/vc.png', 'VC'),
(176, 'Honduras', 'https://flagcdn.com/w320/hn.png', 'HN'),
(177, 'Tokelau', 'https://flagcdn.com/w320/tk.png', 'TK'),
(178, 'Namibia', 'https://flagcdn.com/w320/na.png', 'NA'),
(179, 'Wallis and Futuna', 'https://flagcdn.com/w320/wf.png', 'WF'),
(180, 'Lithuania', 'https://flagcdn.com/w320/lt.png', 'LT'),
(181, 'Niger', 'https://flagcdn.com/w320/ne.png', 'NE'),
(182, 'Benin', 'https://flagcdn.com/w320/bj.png', 'BJ'),
(183, 'India', 'https://flagcdn.com/w320/in.png', 'IN'),
(184, 'Mali', 'https://flagcdn.com/w320/ml.png', 'ML'),
(185, 'Nigeria', 'https://flagcdn.com/w320/ng.png', 'NG'),
(186, 'Aruba', 'https://flagcdn.com/w320/aw.png', 'AW'),
(187, 'Saudi Arabia', 'https://flagcdn.com/w320/sa.png', 'SA'),
(188, 'Bermuda', 'https://flagcdn.com/w320/bm.png', 'BM'),
(189, 'Montserrat', 'https://flagcdn.com/w320/ms.png', 'MS'),
(190, 'Kazakhstan', 'https://flagcdn.com/w320/kz.png', 'KZ'),
(191, 'Lesotho', 'https://flagcdn.com/w320/ls.png', 'LS'),
(192, 'Kiribati', 'https://flagcdn.com/w320/ki.png', 'KI'),
(193, 'Dominican Republic', 'https://flagcdn.com/w320/do.png', 'DO'),
(194, 'Ireland', 'https://flagcdn.com/w320/ie.png', 'IE'),
(195, 'Azerbaijan', 'https://flagcdn.com/w320/az.png', 'AZ'),
(196, 'South Korea', 'https://flagcdn.com/w320/kr.png', 'KR'),
(197, 'Tonga', 'https://flagcdn.com/w320/to.png', 'TO'),
(198, 'Kuwait', 'https://flagcdn.com/w320/kw.png', 'KW'),
(199, 'Oman', 'https://flagcdn.com/w320/om.png', 'OM'),
(200, 'Chad', 'https://flagcdn.com/w320/td.png', 'TD'),
(201, 'Mongolia', 'https://flagcdn.com/w320/mn.png', 'MN'),
(202, 'North Macedonia', 'https://flagcdn.com/w320/mk.png', 'MK'),
(203, 'DR Congo', 'https://flagcdn.com/w320/cd.png', 'CD'),
(204, 'Germany', 'https://flagcdn.com/w320/de.png', 'DE'),
(205, 'Hungary', 'https://flagcdn.com/w320/hu.png', 'HU'),
(206, 'Kenya', 'https://flagcdn.com/w320/ke.png', 'KE'),
(207, 'Zambia', 'https://flagcdn.com/w320/zm.png', 'ZM'),
(208, 'South Africa', 'https://flagcdn.com/w320/za.png', 'ZA'),
(209, 'Latvia', 'https://flagcdn.com/w320/lv.png', 'LV'),
(210, 'Timor-Leste', 'https://flagcdn.com/w320/tl.png', 'TL'),
(211, 'Peru', 'https://flagcdn.com/w320/pe.png', 'PE'),
(212, 'Switzerland', 'https://flagcdn.com/w320/ch.png', 'CH'),
(213, 'Bahamas', 'https://flagcdn.com/w320/bs.png', 'BS'),
(214, 'Gabon', 'https://flagcdn.com/w320/ga.png', 'GA'),
(215, 'Liberia', 'https://flagcdn.com/w320/lr.png', 'LR'),
(216, 'South Sudan', 'https://flagcdn.com/w320/ss.png', 'SS'),
(217, 'Gibraltar', 'https://flagcdn.com/w320/gi.png', 'GI'),
(218, 'Saint Lucia', 'https://flagcdn.com/w320/lc.png', 'LC'),
(219, 'Portugal', 'https://flagcdn.com/w320/pt.png', 'PT'),
(220, 'Greenland', 'https://flagcdn.com/w320/gl.png', 'GL'),
(221, 'Guadeloupe', 'https://flagcdn.com/w320/gp.png', 'GP'),
(222, 'Saint Martin', 'https://flagcdn.com/w320/mf.png', 'MF'),
(223, 'Costa Rica', 'https://flagcdn.com/w320/cr.png', 'CR'),
(224, 'Czechia', 'https://flagcdn.com/w320/cz.png', 'CZ'),
(225, 'Montenegro', 'https://flagcdn.com/w320/me.png', 'ME'),
(226, 'Cocos (Keeling) Islands', 'https://flagcdn.com/w320/cc.png', 'CC'),
(227, 'Sweden', 'https://flagcdn.com/w320/se.png', 'SE'),
(228, 'British Indian Ocean Territory', 'https://flagcdn.com/w320/io.png', 'IO'),
(229, 'Somalia', 'https://flagcdn.com/w320/so.png', 'SO'),
(230, 'Malta', 'https://flagcdn.com/w320/mt.png', 'MT'),
(231, 'Saint Helena, Ascension and Tristan da Cunha', 'https://flagcdn.com/w320/sh.png', 'SH'),
(232, 'Colombia', 'https://flagcdn.com/w320/co.png', 'CO'),
(233, 'Turkey', 'https://flagcdn.com/w320/tr.png', 'TR'),
(234, 'Belize', 'https://flagcdn.com/w320/bz.png', 'BZ'),
(235, 'Solomon Islands', 'https://flagcdn.com/w320/sb.png', 'SB'),
(236, 'British Virgin Islands', 'https://flagcdn.com/w320/vg.png', 'VG'),
(237, 'Vatican City', 'https://flagcdn.com/w320/va.png', 'VA'),
(238, 'Senegal', 'https://flagcdn.com/w320/sn.png', 'SN'),
(239, 'Central African Republic', 'https://flagcdn.com/w320/cf.png', 'CF'),
(240, 'Liechtenstein', 'https://flagcdn.com/w320/li.png', 'LI'),
(241, 'Nauru', 'https://flagcdn.com/w320/nr.png', 'NR'),
(242, 'Romania', 'https://flagcdn.com/w320/ro.png', 'RO'),
(243, 'Austria', 'https://flagcdn.com/w320/at.png', 'AT'),
(244, 'Nepal', 'https://flagcdn.com/w320/np.png', 'NP'),
(245, 'Paraguay', 'https://flagcdn.com/w320/py.png', 'PY'),
(246, 'New Zealand', 'https://flagcdn.com/w320/nz.png', 'NZ'),
(247, 'Italy', 'https://flagcdn.com/w320/it.png', 'IT'),
(248, 'El Salvador', 'https://flagcdn.com/w320/sv.png', 'SV'),
(249, 'Svalbard and Jan Mayen', 'https://flagcdn.com/w320/sj.png', 'SJ'),
(250, 'Vanuatu', 'https://flagcdn.com/w320/vu.png', 'VU');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(255) NOT NULL,
  `MaQuocGia` int(11) NOT NULL,
  `GiaBan` int(11) NOT NULL,
  `MuaToiDa` int(11) NOT NULL,
  `MuaToiThieu` int(11) NOT NULL,
  `MaChuyenMuc` int(11) NOT NULL,
  `MoTa` text NOT NULL,
  `LuuY` text NOT NULL,
  `DaBan` int(11) NOT NULL DEFAULT 0,
  `TrangThai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSanPham`, `TenSanPham`, `MaQuocGia`, `GiaBan`, `MuaToiDa`, `MuaToiThieu`, `MaChuyenMuc`, `MoTa`, `LuuY`, `DaBan`, `TrangThai`) VALUES
(7, 'Clone Facebook mới', 103, 150, 1000, 10, 5, 'abcd', '<p>abcd</p>', 10, 1),
(8, 'Tài khoản Gmail Việt Nam', 101, 100, 10000, 1, 4, 'Tài khoản gmail việt nam', '<p>Lưu &yacute;</p>\r\n<p>Lưu &yacute;</p>\r\n<p>Lưu &yacute;</p>', 36, 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTaiKhoan` int(11) NOT NULL,
  `MaSanPham` int(11) NOT NULL,
  `DanhSachTaiKhoan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MaTaiKhoan`, `MaSanPham`, `DanhSachTaiKhoan`) VALUES
(5, 8, '100084069156608|pfskGCURviWmGfRjp|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyASDF								\r\n100084047197041|prz!fbtOHz$co|7ZWXFCEUG7KTUURJXN2JNPD7TJFP4JMK|robertojansons4171979@hotmail.com|ksqUJ03ltOWEQR1\r\nnam3@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxye234\r\nnam2@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYQWER\r\nnam@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeWEQR\r\n100084069156608|pfskGCURviWmGfRjp|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64EWRT							\r\n100084047197041|prz!fbtOHz$co|7ZWXFCEUG7KTUURJXN2JNPD7TJFP4JMK|robertojansons4171979@hotmail.com|ksqUJ03ltOJE74QWER\r\nnam3@gmail.com|sadfewwarfasdf|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64WEQR'),
(6, 7, '100076648476515|5ao3uzm4wd0|BB2LBCF4JFO4AZC2FZBY3AOG4JHIJT5V|nowaynuilu@outlook.com|xlMZaa44|12/29/1980								\r\n100084069156608|pfskGCURviWmGfRjp|WVMGXIVIOYLFBTBNM67TN4JJ5PWJAA7S|sheridanlindall27670@hotmail.com|mC3jxyeEJYKT64');

-- --------------------------------------------------------

--
-- Table structure for table `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `MaThanhToan` varchar(255) NOT NULL,
  `TenThanhToan` varchar(255) NOT NULL,
  `Id` text NOT NULL,
  `IdKey` text NOT NULL,
  `LuuY` text NOT NULL,
  `TrangThai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thanhtoan`
--

INSERT INTO `thanhtoan` (`MaThanhToan`, `TenThanhToan`, `Id`, `IdKey`, `LuuY`, `TrangThai`) VALUES
('ChuyenKhoan', 'Chuyển Khoản Ví VNPAY', '9G9J586E', 'DEMWKYTGYDEBMDSPRFWKLVTCLOHHDWNB', '<p>ABCD</p>', 1),
('NapThe', 'Nạp Thẻ Cào', '7437662603', '09163a62272adfa074a54c3e261a6206', '<ol>\r\n<li>Hệ thống xử l&yacute; 5s 1 thẻ.</li>\r\n<li>Vui l&ograve;ng gửi đ&uacute;ng mệnh gi&aacute;, sai mệnh gi&aacute; thực nhận mệnh gi&aacute; b&eacute; nhất.</li>\r\n<li>V&iacute; dụ mệnh gi&aacute; thực l&agrave; 100k, qu&yacute; kh&aacute;ch nạp 100k thực nhận 100k.</li>\r\n<li>V&iacute; dụ mệnh gi&aacute; thực l&agrave; 100k qu&yacute; kh&aacute;ch nạp 50k thực nhận 50k.</li>\r\n<li>Mệnh gi&aacute; 10k, 20k, 30k t&iacute;nh th&ecirc;m 3% ph&iacute;.</li>\r\n</ol>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vitien`
--

CREATE TABLE `vitien` (
  `MaViTien` int(11) NOT NULL,
  `MaNguoiDung` int(11) NOT NULL,
  `SoDuKhaDung` int(11) NOT NULL,
  `DaSuDung` int(11) NOT NULL,
  `TongNap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vitien`
--

INSERT INTO `vitien` (`MaViTien`, `MaNguoiDung`, `SoDuKhaDung`, `DaSuDung`, `TongNap`) VALUES
(1, 1, 900000, 14200, 1500000),
(2, 2, 103500, 16500, 120000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chuyenmuc`
--
ALTER TABLE `chuyenmuc`
  ADD PRIMARY KEY (`MaChuyenMuc`);

--
-- Indexes for table `dongtien`
--
ALTER TABLE `dongtien`
  ADD PRIMARY KEY (`MaDongTien`),
  ADD KEY `MaNguoiDung` (`MaNguoiDung`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDonHang`),
  ADD KEY `MaKhachHang` (`MaNguoiDung`,`MaSanPham`,`MaChuyenMuc`),
  ADD KEY `MaSanPham` (`MaSanPham`),
  ADD KEY `MaChuyenMuc` (`MaChuyenMuc`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKhuyenMai`);

--
-- Indexes for table `lichsumua`
--
ALTER TABLE `lichsumua`
  ADD PRIMARY KEY (`MaLichSuMua`),
  ADD KEY `MaKhachHang` (`MaNguoiDung`),
  ADD KEY `MaSanPham` (`MaSanPham`),
  ADD KEY `MaSanPham_2` (`MaSanPham`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaNguoiDung`);

--
-- Indexes for table `quanlychuyenkhoan`
--
ALTER TABLE `quanlychuyenkhoan`
  ADD PRIMARY KEY (`MaChuyenKhoan`),
  ADD KEY `MaThanhToan` (`MaThanhToan`,`MaNguoiDung`),
  ADD KEY `MaNguoiDung` (`MaNguoiDung`);

--
-- Indexes for table `quanlynapthe`
--
ALTER TABLE `quanlynapthe`
  ADD PRIMARY KEY (`MaNapThe`),
  ADD KEY `MaNguoiDung` (`MaNguoiDung`,`MaThanhToan`),
  ADD KEY `MaThanhToan` (`MaThanhToan`);

--
-- Indexes for table `quocgia`
--
ALTER TABLE `quocgia`
  ADD PRIMARY KEY (`MaQuocGia`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSanPham`),
  ADD KEY `MaQuocGia` (`MaQuocGia`,`MaChuyenMuc`),
  ADD KEY `MaChuyenMuc` (`MaChuyenMuc`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTaiKhoan`),
  ADD KEY `MaSanPham` (`MaSanPham`);

--
-- Indexes for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`MaThanhToan`);

--
-- Indexes for table `vitien`
--
ALTER TABLE `vitien`
  ADD PRIMARY KEY (`MaViTien`),
  ADD KEY `MaKhachHang` (`MaNguoiDung`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chuyenmuc`
--
ALTER TABLE `chuyenmuc`
  MODIFY `MaChuyenMuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dongtien`
--
ALTER TABLE `dongtien`
  MODIFY `MaDongTien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MaKhuyenMai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lichsumua`
--
ALTER TABLE `lichsumua`
  MODIFY `MaLichSuMua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaNguoiDung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quanlychuyenkhoan`
--
ALTER TABLE `quanlychuyenkhoan`
  MODIFY `MaChuyenKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quanlynapthe`
--
ALTER TABLE `quanlynapthe`
  MODIFY `MaNapThe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quocgia`
--
ALTER TABLE `quocgia`
  MODIFY `MaQuocGia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vitien`
--
ALTER TABLE `vitien`
  MODIFY `MaViTien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dongtien`
--
ALTER TABLE `dongtien`
  ADD CONSTRAINT `dongtien_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`MaNguoiDung`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`MaNguoiDung`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `donhang_ibfk_3` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `donhang_ibfk_4` FOREIGN KEY (`MaChuyenMuc`) REFERENCES `chuyenmuc` (`MaChuyenMuc`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lichsumua`
--
ALTER TABLE `lichsumua`
  ADD CONSTRAINT `lichsumua_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`MaNguoiDung`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `lichsumua_ibfk_2` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `quanlychuyenkhoan`
--
ALTER TABLE `quanlychuyenkhoan`
  ADD CONSTRAINT `quanlychuyenkhoan_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`MaNguoiDung`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `quanlychuyenkhoan_ibfk_2` FOREIGN KEY (`MaThanhToan`) REFERENCES `thanhtoan` (`MaThanhToan`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `quanlynapthe`
--
ALTER TABLE `quanlynapthe`
  ADD CONSTRAINT `quanlynapthe_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`MaNguoiDung`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `quanlynapthe_ibfk_2` FOREIGN KEY (`MaThanhToan`) REFERENCES `thanhtoan` (`MaThanhToan`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaQuocGia`) REFERENCES `quocgia` (`MaQuocGia`) ON DELETE NO ACTION,
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`MaChuyenMuc`) REFERENCES `chuyenmuc` (`MaChuyenMuc`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `vitien`
--
ALTER TABLE `vitien`
  ADD CONSTRAINT `vitien_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`MaNguoiDung`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
