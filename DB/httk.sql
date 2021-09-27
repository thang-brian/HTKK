-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 27, 2021 lúc 04:43 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `httk`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'admin', '25f9e794323b453885f5181f1b624d0b', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh`
--

CREATE TABLE `anh` (
  `id` int(10) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `nation` varchar(100) NOT NULL,
  `nd_vi` text NOT NULL,
  `nd_en` text NOT NULL,
  `mota_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `style` varchar(50) NOT NULL,
  `trang_thai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `anh`
--

INSERT INTO `anh` (`id`, `hinhanh`, `nation`, `nd_vi`, `nd_en`, `mota_vi`, `mota_en`, `style`, `trang_thai`) VALUES
(2, '1632147059_vtduongbo.png', '', 'Vận chuyển đường bộ', 'Road transportation', '', '', '', 1),
(3, '1632124240_vtduongbien.png', '', 'Vận chuyển đường biển', 'Sea shipping', '', '', '', 1),
(4, '1632124498_vthangkhong.png', '', 'Vận chuyển đường hàng không', 'Air Transport', '', '', '', 1),
(5, '1632124543_kb-haiquan.png', '', 'Khai báo hải quan', 'Customs declaration', '', '', '', 1),
(6, '1632130408_viettel.png', '', '', '', '', '', 'doitac', 1),
(7, '1632130936_cafef.png', '', '', '', '', '', 'doitac', 1),
(8, '1632131728_baidu.png', '', '', '', '', '', 'doitac', 1),
(9, '1632131821_vietnamnet.png', '', '', '', '', '', 'doitac', 1),
(11, '1632147189_1688.png', '', '', '', '', '', 'doitac', 1),
(13, '1632372391_dv-vc-CN.png', 'Hoa Kỳ', 'DỊCH VỤ VẬN CHUYỂN HÀNG TỪ SAN FRANCISCO VỀ VIỆT NAM UY TÍN', 'PRESTIGE SHIPPING SERVICE FROM SAN FRANCISCO TO VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'dvvanchuyen', 1),
(14, '1632372454_dv-xuathang-CN.png', 'Hoa Kỳ', 'DỊCH VỤ XUẤT HÀNG TỪ VIỆT NAM SANG HOA KỲ', 'EXPORT SERVICE FROM VIETNAM TO US', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'dvvanchuyen', 1),
(15, '1632372558_dv-khaithac-CN.png', 'Hoa Kỳ', 'KHAI THÁC VÀ GIAO DỊCH MỌI HÀNG HÓA TRÊN LÃNH THỔ HOA KỲ', 'MINING AND TRADE OF EVERY GOOD IN THE US', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'dvvanchuyen', 1),
(16, '1632372600_dv-chuyenphat-CN.png', 'Hoa Kỳ', 'DỊCH VỤ CHUYỂN PHÁT NHANH SIÊU TỐC HOA KỲ VIỆT NAM', 'EXPRESS DELIVERY SERVICES USA VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'dvvanchuyen', 1),
(17, '1632383061_dv-vc-CN.png', 'Trung Quốc', 'DỊCH VỤ VẬN CHUYỂN HÀNG TỪ QUẢNG CHÂU VỀ VIỆT NAM UY TÍN', 'PRESTIGE SHIPPING SERVICE FROM GUANGZHOU TO VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy .', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'dvvanchuyen', 1),
(18, '1632383164_dv-xuathang-CN.png', 'Trung Quốc', 'DỊCH VỤ XUẤT HÀNG TỪ VIỆT NAM SANG TRUNG QUỐC', 'EXPORT SERVICE FROM VIETNAM TO CHINA', 'Lorem ipsum dolor sit amet, consectetuer adipiscing .', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'dvvanchuyen', 1),
(19, '1632383322_dv-khaithac-CN.png', 'Trung Quốc', 'KHAI THÁC VÀ GIAO DỊCH MỌI HÀNG HÓA TRÊN LÃNH THỔ TRUNG QUỐC', 'MINING AND TRADE OF EVERY GOOD IN CHINA', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed .', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'dvvanchuyen', 1),
(21, '1632385040_dv-chuyenphat-CN.png', 'Trung Quốc', 'DỊCH VỤ CHUYỂN PHÁT NHANH SIÊU TỐC TRUNG QUỐC VIỆT NAM', 'CHINA VIETNAM EXPRESS DELIVERY SERVICE', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'dvvanchuyen', 1),
(22, '1632385683_dv-vc-CN.png', 'Hàn Quốc', 'DỊCH VỤ VẬN CHUYỂN HÀNG TỪ BUSAN VỀ VIỆT NAM UY TÍN', 'PRESTIGE SHIPPING SERVICE FROM BUSAN TO VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'dvvanchuyen', 1),
(23, '1632385724_dv-xuathang-CN.png', 'Hàn Quốc', 'DỊCH VỤ XUẤT HÀNG TỪ VIỆT NAM SANG HÀN QUỐC', 'EXPORT SERVICE FROM VIETNAM TO KOREA', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'dvvanchuyen', 1),
(24, '1632385758_dv-khaithac-CN.png', 'Hàn Quốc', 'KHAI THÁC VÀ GIAO DỊCH MỌI HÀNG HÓA TRÊN LÃNH THỔ HÀN QUỐC', 'MINING AND TRADE OF EVERY GOOD IN KOREA', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'dvvanchuyen', 1),
(25, '1632385871_dv-chuyenphat-CN.png', 'Hàn Quốc', 'DỊCH VỤ CHUYỂN PHÁT NHANH SIÊU TỐC HÀN QUỐC VIỆT NAM', 'EXPRESS DELIVERY SERVICES KOREA KOREA VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'dvvanchuyen', 1),
(26, '1632448823_dv-vc-CN.png', 'Nhật Bản', 'DỊCH VỤ VẬN CHUYỂN HÀNG TỪ HOKKAIDO VỀ VIỆT NAM UY TÍN', 'PRESTIGE SHIPPING SERVICE FROM HOKKAIDO TO VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'dvvanchuyen', 1),
(27, '1632448911_dv-xuathang-CN.png', 'Nhật Bản', 'DỊCH VỤ XUẤT HÀNG TỪ VIỆT NAM SANG NHẬT BẢN', 'EXPORT SERVICE FROM VIETNAM TO JAPAN', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam', 'dvvanchuyen', 1),
(28, '1632448959_dv-khaithac-CN.png', 'Nhật Bản', 'KHAI THÁC VÀ GIAO DỊCH MỌI HÀNG HÓA TRÊN LÃNH THỔ NHẬT BẢN', 'MINING AND TRADE OF EVERY GOOD IN JAPAN', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh .', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'dvvanchuyen', 1),
(29, '1632449018_dv-chuyenphat-CN.png', 'Nhật Bản', 'DỊCH VỤ CHUYỂN PHÁT NHANH SIÊU TỐC NHẬT BẢN VIỆT NAM', 'JAPAN VIETNAM SUPER EXPRESS DELIVERY SERVICE', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'dvvanchuyen', 1),
(37, '1632452013_kinhnghiem-CN.png', '', 'KINH NGHIỆM', 'EXPERIENCE', '', '', 'kbvanchuyen', 1),
(38, '1632452074_rẻ-CN.png', '', 'CHI PHÍ RẺ', 'CHEAPER', '', '', 'kbvanchuyen', 1),
(39, '1632452103_kho-CN.png', '', 'ĐỊA CHỈ KHO, VĂN PHÒNG', 'ADDRESS OF WAREHOUSE, OFFICE', '', '', 'kbvanchuyen', 1),
(40, '1632452131_banggia-CN.png', '', 'BẢNG GIÁ VẬN CHUYỂN', 'SHIPPING PRICE LIST', '', '', 'kbvanchuyen', 1),
(46, '1632459019_bangtuong-CN.png', 'Hoa Kỳ', 'BẢNG GIÁ CHUYẾN HÀNG TỪ CALIFORNIA VỀ VIỆT NAM', 'SHIPPING PRICE LIST FROM CALIFORNIA TO VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh .', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'bgvanchuyen', 1),
(47, '1632466962_thamquyen-CN.png', 'Hoa Kỳ', 'BẢNG GIÁ CHUYẾN HÀNG TỪ TEXAS VỀ VIỆT NAM', 'SHIPPING PRICE LIST FROM TEXAS TO VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'bgvanchuyen', 1),
(48, '1632467077_quangchau-CN.png', 'Hoa Kỳ', 'BẢNG GIÁ CHUYẾN HÀNG TỪ OREGON VỀ VIỆT NAM', 'SHIPPING PRICE LIST FROM OREGON TO VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh .', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'bgvanchuyen', 1),
(49, '1632467123_donghung-CN.png', 'Hoa Kỳ', 'BẢNG GIÁ CHUYẾN HÀNG TỪ WASHINGTON VỀ VIỆT NAM', 'SHIPPING PRICE LIST FROM WASHINGTON TO VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'bgvanchuyen', 1),
(50, '1632467517_bangtuong-CN.png', 'Trung Quốc', 'BẢNG GIÁ CHUYẾN HÀNG TỪ BĂNG TƯỜNG VỀ VIỆT NAM', 'SHIPPING PRICE LIST FROM PINGXIANG TO VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'bgvanchuyen', 1),
(51, '1632467571_thamquyen-CN.png', 'Trung Quốc', 'BẢNG GIÁ CHUYẾN HÀNG TỪ THẨM QUYẾN VỀ VIỆT NAM', 'SHIPPING PRICE LIST FROM SHENZHEN TO VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh .', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'bgvanchuyen', 1),
(52, '1632467616_quangchau-CN.png', 'Trung Quốc', 'BẢNG GIÁ CHUYẾN HÀNG TỪ QUẢNG CHÂU VỀ VIỆT NAM', 'SHIPPING PRICE LIST FROM GUANGZHOU TO VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'bgvanchuyen', 1),
(53, '1632467698_donghung-CN.png', 'Trung Quốc', 'BẢNG GIÁ CHUYẾN HÀNG TỪ ĐÔNG HƯNG VỀ VIỆT NAM', 'SHIPPING PRICE LIST FROM DONGXING TO VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'bgvanchuyen', 1),
(54, '1632467792_bangtuong-CN.png', 'Hàn Quốc', 'BẢNG GIÁ CHUYẾN HÀNG TỪ BUSAN VỀ VIỆT NAM', 'SHIPPING PRICE LIST FROM BUSAN TO VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh .', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'bgvanchuyen', 1),
(55, '1632467881_thamquyen-CN.png', 'Hàn Quốc', 'BẢNG GIÁ CHUYẾN HÀNG TỪ INCHEON VỀ VIỆT NAM', 'PRICE SHIPPING FROM INCHEON TO VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'bgvanchuyen', 1),
(56, '1632467923_quangchau-CN.png', 'Hàn Quốc', 'BẢNG GIÁ CHUYẾN HÀNG TỪ ULSAN VỀ VIỆT NAM', 'SHIPPING PRICE LIST FROM ULSAN TO VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh .', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'bgvanchuyen', 1),
(57, '1632467958_donghung-CN.png', 'Hàn Quốc', 'BẢNG GIÁ CHUYẾN HÀNG TỪ GWANGYANG VỀ VIỆT NAM', 'SHIPPING PRICE LIST FROM GWANGYANG TO VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'bgvanchuyen', 1),
(58, '1632468030_bangtuong-CN.png', 'Nhật Bản', 'BẢNG GIÁ CHUYẾN HÀNG TỪ HOKKAIDO VỀ VIỆT NAM', 'SHIPPING PRICE LIST FROM HOKKAIDO TO VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'bgvanchuyen', 1),
(59, '1632468091_thamquyen-CN.png', 'Nhật Bản', 'BẢNG GIÁ CHUYẾN HÀNG TỪ TOHOKU VỀ VIỆT NAM', 'SHIPPING PRICE LIST FROM TOHOKU TO VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh .', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'bgvanchuyen', 1),
(60, '1632468192_quangchau-CN.png', 'Nhật Bản', 'BẢNG GIÁ CHUYẾN HÀNG TỪ KYUSHU VỀ VIỆT NAM', 'SHIPPING PRICE LIST FROM KYUSHU TO VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'bgvanchuyen', 1),
(61, '1632468234_donghung-CN.png', 'Nhật Bản', 'BẢNG GIÁ CHUYẾN HÀNG TỪ OKINAWA VỀ VIỆT NAM', 'SHIPPING PRICE LIST FROM OKINAWA TO VIETNAM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'bgvanchuyen', 1),
(62, '1632469040_hoptac-CN.png', '', 'HỢP TÁC QUỐC TẾ TRÊN MỌI LÃNH THỔ', 'INTERNATIONAL COOPERATION IN EVERY LAND', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'ttvanchuyen', 1),
(63, '1632469082_sale-CN.png', '', 'CÁC CHƯƠNG TRÌNH SALE-OFF LỚN', 'HUGE SALE-OFF PROGRAMS', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'ttvanchuyen', 1),
(64, '1632469117_ketnoi-CN.png', '', 'GIAO DỊCH KẾT NỐI MỌI PHƯƠNG DIỆN TRUYỀN THÔNG', 'TRANSACTIONS CONNECTING ALL AREA OF COMMUNICATIONS', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'ttvanchuyen', 1),
(65, '1632469155_thuongmai-CN.png', '', 'DỊCH VỤ THƯƠNG MẠI TRÊN THỊ TRƯỜNG', 'TRADE SERVICES IN THE MARKET', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.', 'ttvanchuyen', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioithieu_footer`
--

CREATE TABLE `gioithieu_footer` (
  `id` int(11) NOT NULL,
  `tenct_vi` varchar(100) NOT NULL,
  `tenct_en` varchar(100) NOT NULL,
  `chungnhan_en` varchar(300) NOT NULL,
  `chungnhan_vi` varchar(300) NOT NULL,
  `diachi_vi` varchar(100) NOT NULL,
  `diachi_en` varchar(100) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `gioithieu_footer`
--

INSERT INTO `gioithieu_footer` (`id`, `tenct_vi`, `tenct_en`, `chungnhan_en`, `chungnhan_vi`, `diachi_vi`, `diachi_en`, `phone`, `email`) VALUES
(1, 'CÔNG TY CỔ PHẦN QUỐC TẾ HTKK', 'HTKK INTERNATIONAL JOINT STOCK COMPANY', 'Business registration certificate number 0316904160 issued for the first time by the Department of Planning and Investment of Ho Chi Minh City on...', 'Giấy chứng nhận đăng ký doanh nghiệp số 0316904160 do Sở Kế hoạch và Đầu tư thành phố Hồ Chí Minh cấp lần đầu ngày....', 'Hà Nội', 'Hanoi', 123456789, 'httk@mail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `style` int(11) NOT NULL,
  `tinhtrang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `logo`
--

INSERT INTO `logo` (`id`, `hinhanh`, `style`, `tinhtrang`) VALUES
(11, '1632111017_logo-footer.png', 1, 1),
(12, '1632127890_logo.png', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `noidung`
--

CREATE TABLE `noidung` (
  `id` int(11) NOT NULL,
  `loaind` varchar(50) NOT NULL,
  `chitiet_vi` text NOT NULL,
  `chitiet_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `noidung`
--

INSERT INTO `noidung` (`id`, `loaind`, `chitiet_vi`, `chitiet_en`) VALUES
(2, 'tintuc', 'Tổng CTCP Xuất nhập khẩu và Xây dựng Việt Nam (Vinaconex, VCG) vừa thông qua quyết định đầu tư góp 40% vốn điều lệ tại Cảng quốc tế Vạn Ninh.', 'Vietnam Construction and Import-Export Corporation (Vinaconex, VCG) has just approved the investment decision to contribute 40% of charter capital at Van Ninh International Port.'),
(3, 'tintuc', 'Chế biến sâu và sản xuất theo hướng hữu cơ đang là giải pháp được khuyến cáo nhằm gia tăng giá trị xuất khẩu mặt hàng gia vị và hương liệu của Việt Nam', 'Deep processing and organic production are recommended solutions to increase the export value of spices and flavorings of Vietnam.'),
(4, 'ykien', 'Rất vui mừng khi hàng hóa được đến cảng sớm ', 'Very happy when the goods arrive at the port soon'),
(5, 'vbpl', 'Tổng cục Hải quan nhận được công văn không số ngày 24/8/2021 của Công ty TNHH Icel Logistics đề nghị hướng dẫn việc xử lý thuế xuất khẩu đối với nguyên liệu nhập khẩu từ nước ngoài (theo loại hình A12, E31) để sản xuất hàng hóa xuất khẩu ra nước ngoài và xuất bán cho doanh nghiệp chế xuất.', 'The General Department of Customs received the letter No. dated August 24, 2021 from Ice Logistics Co., Ltd., requesting guidance on the handling of export tax for imported materials from abroad (according to types A12, E31) to produce goods for export abroad and sell to export processing enterprises.'),
(6, 'gioithieu', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `anh`
--
ALTER TABLE `anh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gioithieu_footer`
--
ALTER TABLE `gioithieu_footer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `noidung`
--
ALTER TABLE `noidung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `anh`
--
ALTER TABLE `anh`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `gioithieu_footer`
--
ALTER TABLE `gioithieu_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `noidung`
--
ALTER TABLE `noidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
