-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 07:17 PM
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
(4, 'Mục mới 34', 'http://localhost/ShopClone/uploads/asus-gaming-rog-strix-scar-18-g834jy-i9-n6039w-thumb-600x6002.jpg', 1);

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
(4, 1, 300000, 700000, 1000000, '2023-12-02 18:30:50', 'Admin cộng 700,000đ vào tài khoản!');

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
  `ThoiGian` datetime NOT NULL DEFAULT current_timestamp(),
  `PhuongThucThanhToan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`MaDonHang`, `MaGiaoDich`, `DanhSachClone`, `MaNguoiDung`, `MaSanPham`, `SoLuong`, `ThanhToan`, `MaChuyenMuc`, `ThoiGian`, `PhuongThucThanhToan`) VALUES
(1, 'GHFA4234325433', '100090792949406|ottlwerlndpdpsg|locale=my_MM; sb=lDkLZO01bEPFP_2NeQjfqhD3; c_user=100090792949406; xs=48%3AWUpQu17bSqD-SQ%3A2%3A1678457303%3A-1%3A-1; fr=0TIiDReYHL2dSjhhd.AWV9HoTqcIfXUHAIPtOcX5xeG8E.BkCzmU.tB.AAA.0.0.BkCznS.AWVjzVu3o_E|fullstopted@kosay4.tk||10-03-2023 - 14:05:03\r\n100090582296979|gkdcsmsguqkcvnv|locale=bs_BA; sb=sHMJZBjJ68oPj2WRa9azh87F; c_user=100090582296979; xs=16%3A-6PfpuTOVCjacg%3A2%3A1678341107%3A-1%3A-1; fr=0X2vqj4bQXJdZOoW2.AWXbSppSD6XmfMZewH-38-NGUk4.BkCXOw.8x.AAA.0.0.BkCXPv.AWVmMCuxs88|mohockduck@reacc.me||09-03-2023 - 05:48:29\r\n100090343143111|hfgdxlpvmaafffr|locale=en_US; sb=GNEJZAQ8qBeRiwTJSbT1z0Un; c_user=100090343143111; xs=26%3AxyVmRTlC_CH7-w%3A2%3A1678365023%3A-1%3A-1; fr=0Z10IF8wqTuxVJNl3.AWUMtXxq0jNAgaHs472yAp5ta3w.BkCdEY._k.AAA.0.0.BkCdFW.AWWBY0KPdnI|kylegilmour@yt-google.com||09-03-2023 - 12:27:06\r\n100090676372871|ivzmyldkcvfrhsb|locale=en_US; sb=X6sJZCA9Scv5tJoGCZA4sFbH; c_user=100090676372871; xs=10%3AKBOZJQfFqPQOMw%3A2%3A1678355365%3A-1%3A-1; fr=0NmRk5kIAyZvr9BwN.AWX_5uRwodq_hJuvw6pKX3KuJsQ.BkCatf.H6.AAA.0.0.BkCaud.AWXetLEth94|benthebadboy2@istitutocomprensivo-cavaglia.it||09-03-2023 - 09:46:09\r\n100090582296979|gkdcsmsguqkcvnv|locale=bs_BA; sb=sHMJZBjJ68oPj2WRa9azh87F; c_user=100090582296979; xs=16%3A-6PfpuTOVCjacg%3A2%3A1678341107%3A-1%3A-1; fr=0X2vqj4bQXJdZOoW2.AWXbSppSD6XmfMZewH-38-NGUk4.BkCXOw.8x.AAA.0.0.BkCXPv.AWVmMCuxs88|mohockduck@reacc.me||09-03-2023 - 05:48:29', 1, 7, 900, 135000, 4, '2023-12-03 00:10:59', 1);

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
(1, 'Quản Trị Viên', 'admin', '21232f297a57a5a743894a0e4a801fc3', '0999888999', 'admin@gmail.com', '2023-11-24 19:04:09', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhatky`
--

CREATE TABLE `nhatky` (
  `MaNhatKy` int(11) NOT NULL,
  `MaNguoiDung` int(11) NOT NULL,
  `HanhDong` text NOT NULL,
  `ThoiGian` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(7, 'Clone Facebook mới', 103, 150, 1000, 100, 4, 'abcd', '<p>abcd</p>', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTaiKhoan` int(11) NOT NULL,
  `MaSanPham` int(11) NOT NULL,
  `DanhSachTaiKhoan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1, 1, 1000000, 14200, 1500000);

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
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaNguoiDung`);

--
-- Indexes for table `nhatky`
--
ALTER TABLE `nhatky`
  ADD PRIMARY KEY (`MaNhatKy`),
  ADD KEY `MaKhachHang` (`MaNguoiDung`);

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
  MODIFY `MaChuyenMuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dongtien`
--
ALTER TABLE `dongtien`
  MODIFY `MaDongTien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MaKhuyenMai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaNguoiDung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nhatky`
--
ALTER TABLE `nhatky`
  MODIFY `MaNhatKy` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quocgia`
--
ALTER TABLE `quocgia`
  MODIFY `MaQuocGia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vitien`
--
ALTER TABLE `vitien`
  MODIFY `MaViTien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Constraints for table `nhatky`
--
ALTER TABLE `nhatky`
  ADD CONSTRAINT `nhatky_ibfk_1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`MaNguoiDung`) ON DELETE CASCADE ON UPDATE NO ACTION;

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
