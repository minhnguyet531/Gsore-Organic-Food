-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 31, 2021 lúc 01:35 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `data_web03`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `makhachdathang` int(10) NOT NULL,
  `masanpham` int(10) NOT NULL,
  `noidungbinhluan` text COLLATE utf8_unicode_ci NOT NULL,
  `thoigianbinhluan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`makhachdathang`, `masanpham`, `noidungbinhluan`, `thoigianbinhluan`) VALUES
(1, 12, 'Sản phẩm', '2021-10-19 12:13:34'),
(4, 5, 'Ăn chán quá ngộ độc 3 ngày nay rồi', '2021-10-19 12:25:29'),
(3, 10, 'Sản phẩm không tốt cho não bộ', '2021-10-19 12:26:05'),
(2, 4, 'Tàm tạm chắc lần sau thử lại', '2021-10-19 12:26:05'),
(4, 7, 'Cá tươi nhảy tanh tách ăn không bị đau bụng', '2021-10-19 12:27:12'),
(3, 4, 'fsdaf', '2021-10-29 02:39:38'),
(4, 5, 'Tưới lém nhé. Giá còn rẻ luôn ýyyy', '2021-10-30 23:17:02'),
(10, 4, 'Hoa quả tươi lại ngọt lịm như tym cờ rút ý', '2021-10-30 23:18:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `mahoadon` int(10) NOT NULL,
  `masanpham` int(10) NOT NULL,
  `soluongmua` int(15) NOT NULL,
  `dongia` float NOT NULL,
  `maphuongthucthanhtoan` int(11) NOT NULL,
  `ghichudonhang` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `makhachdathang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`mahoadon`, `masanpham`, `soluongmua`, `dongia`, `maphuongthucthanhtoan`, `ghichudonhang`, `makhachdathang`) VALUES
(34, 15, 1, 53515.2, 1, 'Test thui ý', 3),
(34, 23, 3, 3000, 1, 'Test thui ý', 3),
(35, 9, 1, 7000, 3, 'Hế lâu ae.', 4),
(35, 28, 1, 3600, 3, 'Hế lâu ae.', 4),
(35, 6, 1, 3200, 3, 'Hế lâu ae.', 4),
(36, 12, 8, 6400, 2, 'EXO-L 8 năm rồi hí hí', 5),
(36, 26, 3, 28461, 2, 'EXO-L 8 năm rồi hí hí', 5),
(36, 4, 1, 2000, 2, 'EXO-L 8 năm rồi hí hí', 5),
(36, 15, 3, 53515.2, 2, 'EXO-L 8 năm rồi hí hí', 5),
(38, 12, 5, 6400, 1, 'chẹp chẹp', 7),
(38, 6, 10, 3200, 1, 'chẹp chẹp', 7),
(38, 28, 5, 3600, 1, 'chẹp chẹp', 7),
(39, 6, 1, 3200, 1, 'Đọc chi zợ. Khum có j đóc ýyyy', 8),
(39, 12, 3, 6400, 1, 'Đọc chi zợ. Khum có j đóc ýyyy', 8),
(39, 27, 2, 64313, 1, 'Đọc chi zợ. Khum có j đóc ýyyy', 8),
(39, 28, 1, 3600, 1, 'Đọc chi zợ. Khum có j đóc ýyyy', 8),
(40, 12, 2, 6400, 3, '', 9),
(40, 10, 1, 880, 3, '', 9),
(41, 13, 1, 7110.4, 1, 'Thèm bún đậu quá mn ưi', 10),
(41, 26, 1, 28461, 1, 'Thèm bún đậu quá mn ưi', 10),
(41, 27, 3, 64313, 1, 'Thèm bún đậu quá mn ưi', 10),
(42, 2, 1, 7200, 3, 'Tui chầm kamr bà con cô bác ạ', 93),
(42, 28, 4, 3600, 3, 'Tui chầm kamr bà con cô bác ạ', 93),
(43, 9, 1, 5950, 1, 'Cảm thán', 94),
(43, 6, 1, 3200, 1, 'Cảm thán', 94),
(43, 15, 2, 53515.2, 1, 'Cảm thán', 94),
(44, 6, 1, 3200, 1, '', 95),
(44, 27, 1, 54666.1, 1, '', 95),
(45, 28, 3, 3600, 1, 'Chán rồi k muốn test nx huhu', 96),
(45, 11, 1, 25600, 1, 'Chán rồi k muốn test nx huhu', 96),
(45, 10, 1, 880, 1, 'Chán rồi k muốn test nx huhu', 96),
(46, 7, 0, 5000, 1, '', 97),
(47, 13, 5, 7110.4, 1, '', 98),
(48, 27, 1, 54666.1, 1, '', 99),
(49, 28, 5, 3600, 1, '', 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahoadon` int(10) NOT NULL,
  `makhachdathang` int(10) NOT NULL,
  `ngaydat` datetime NOT NULL,
  `tongtien` float NOT NULL,
  `tongsoluong` int(11) NOT NULL,
  `trangthai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahoadon`, `makhachdathang`, `ngaydat`, `tongtien`, `tongsoluong`, `trangthai`) VALUES
(34, 3, '2021-10-29 22:42:19', 62515.2, 4, 1),
(35, 4, '2021-10-30 19:22:11', 13800, 3, 0),
(36, 5, '2021-10-30 20:00:47', 299129, 15, 0),
(38, 7, '2021-10-30 20:05:14', 82000, 20, 0),
(39, 8, '2021-10-30 20:07:58', 154626, 7, 0),
(40, 9, '2021-10-30 20:08:53', 13680, 3, 0),
(41, 10, '2021-10-30 20:55:21', 228510, 5, 0),
(42, 93, '2021-10-31 08:33:19', 21600, 5, 0),
(43, 94, '2021-10-31 08:34:22', 116180, 4, 0),
(44, 95, '2021-10-31 08:37:28', 57866.1, 2, 0),
(45, 96, '2021-10-31 08:38:42', 37280, 5, 0),
(46, 97, '2021-10-31 08:40:01', 10000, 2, 0),
(47, 98, '2021-10-31 08:45:11', 35552, 5, 0),
(48, 99, '2021-10-31 08:45:56', 54666.1, 1, 0),
(49, 100, '2021-10-31 08:51:54', 18000, 5, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachdathang`
--

CREATE TABLE `khachdathang` (
  `makhachdathang` int(11) NOT NULL,
  `tenkhachdathang` varchar(100) NOT NULL,
  `diachikhachdathang` varchar(200) NOT NULL,
  `sodienthoaikhachdathang` varchar(10) NOT NULL,
  `emailkhachdathang` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachdathang`
--

INSERT INTO `khachdathang` (`makhachdathang`, `tenkhachdathang`, `diachikhachdathang`, `sodienthoaikhachdathang`, `emailkhachdathang`) VALUES
(1, '1', '1', '1', 'minh@gmail.com'),
(2, 'Test1', 'a', '111', ''),
(3, 'Nguyệt', 'Test1', '1', '11@gmail.com'),
(4, 'Minh', 'Hà Nam', '1', '11@gmail.com'),
(5, 'Nguyệt', 'Nơi Suho ở', '0999', 'fanexo@gmail.com'),
(6, 'Nguyệt', 'Test1', '111', '11@gmail.com'),
(7, 'Nguyệt', 'Test1', '111', '11@gmail.com'),
(8, 'á', 'Test1', '0999', 'minh@gmail.com'),
(9, '1', '1', '1', '11@gmail.com'),
(10, 'Ngáo', 'No quá', '888', 'thembundau@gmail.com'),
(93, 'U là trời', 'Khó quá bỏ qua', '123456', 'fanexo@gmail.com'),
(94, '1', 'No quá', '888', 'thembundau@gmail.com'),
(95, 'Nguyệt', 'Test1', '111', 'thembundau@gmail.com'),
(96, 'Khùng', 'Không test nx', '898989', ''),
(97, 'Nguyệt', 'Hà Nam', '123456', ''),
(98, 'Nguyệt', 'Hà Nam', '123456', '11@gmail.com'),
(99, 'abc', 'Hà Nam', '888', 'fanexo@gmail.com'),
(100, 'Hình như lần này đc r', 'Done chưa ta', '0909999', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makhachhang` int(11) NOT NULL,
  `tenkhachhang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachikhachhang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoaikhachhang` int(15) NOT NULL,
  `emailkhachhang` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `matkhaukhachhang` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makhachhang`, `tenkhachhang`, `diachikhachhang`, `sodienthoaikhachhang`, `emailkhachhang`, `matkhaukhachhang`) VALUES
(1, 'Mai Huyền Nhi', 'Xóm 3- Nga thanh - Nga lĩnh- Hà Nội', 858489766, 'maihuyenhi2001@gmail.com', ''),
(2, 'Trần Hữu Long', 'làng thiện chi-Bạch Phượng- Đống Đa- Hà Nội', 325498112, 'long123@gmail.com', ''),
(3, 'Nguyệt Nguyệt', ' Hà Nam - Hà Nội', 858489751, 'nguyet123@gmail.com', ''),
(4, 'Hải Yến Pro', '22 tôn thất tùng - Đóng đa -  Hà Nội', 325459445, 'tranyen124@gmail.com', ''),
(5, 'Xuân Hoàng', 'Kim Ngưu - Ba Đình- Hà Nội', 58962782, 'xuanhoang123@gmail.com', ''),
(6, 'Ngọc Minh', '45 Phạm Ngọc Thạch - Đống Đa - Hà Nội', 325459456, 'minhngoc123@gmail.com', ''),
(7, 'Hoàng Hà', '', 962843029, 'hoangha123@gmail.com', ''),
(11, 'Minh Minh', 'Hà Nam', 123, 'minhminh@gmail.com', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `makhuyenmai` int(10) NOT NULL,
  `giamgia` int(10) NOT NULL,
  `thoihan` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`makhuyenmai`, `giamgia`, `thoihan`) VALUES
(1, 0, NULL),
(2, 20, '2021-11-09 11:27:01'),
(3, 20, '2021-11-16 06:53:41'),
(4, 15, '2021-11-10 11:53:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `malienhe` int(10) NOT NULL,
  `tenlienhe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `emaillienhe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chudelienhe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `noidunglienhe` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `ngaylienhe` datetime NOT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`malienhe`, `tenlienhe`, `emaillienhe`, `chudelienhe`, `noidunglienhe`, `ngaylienhe`, `trangthai`) VALUES
(2, 'Minh', 'a@gmail.com', 'Hí hí', 'Test thui á', '2021-10-29 16:48:16', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `maloaisanpham` int(10) NOT NULL,
  `tenloaisanpham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `anhloai` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`maloaisanpham`, `tenloaisanpham`, `anhloai`) VALUES
(1, 'Trứng', 'category-home-1-img-1.jpg'),
(2, 'Nấm', 'category-home-1-img-10.jpg'),
(3, 'Sữa tươi', 'category-home-1-img-3.jpg'),
(4, 'Thực phẩm đóng hộp', 'category-home-1-img-4.jpg'),
(5, 'Thịt bò', 'category-home-1-img-5.jpg'),
(6, 'Đậu, đỗ', 'category-home-1-img-6.jpg'),
(7, 'Trái cây', 'category-trai-cay.jpg'),
(8, 'Cá', 'product-home-1-img-2.jpg'),
(9, 'Bột gia vị', 'category-home-1-img-9.jpg'),
(10, 'Rau củ xanh', 'category-home-1-img-2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `manguoidung` int(10) NOT NULL,
  `tennguoidung` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `emailnguoidung` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`manguoidung`, `tennguoidung`, `emailnguoidung`, `matkhau`) VALUES
(1, 'Mai Thị Huyền', 'maihuyen09102001@gmail.com', 9999),
(2, 'Trần Hải Yến', 'tranyen23301@gmail.com', 9999),
(3, 'Nguyễn Tân Thanh', 'ntt6869@gmail.com', 9999),
(4, 'Nguyễn Thị Minh Nguyệt', 'minhnguyetexo0503@gmail.com', 9999);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `manhacungcap` int(10) NOT NULL,
  `tennhacungcap` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachinhacungcap` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdtnhacungcap` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`manhacungcap`, `tennhacungcap`, `diachinhacungcap`, `sdtnhacungcap`) VALUES
(1, 'Minh Nguyệt', 'Hà Nam', 88889999),
(2, 'Hải Yến', 'Hải Phòng', 99998888),
(3, 'Tân Thanh', 'Hà Nội', 77778888),
(4, 'Mai Huyền', 'Thanh Hóa', 66667777);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongthucthanhtoan`
--

CREATE TABLE `phuongthucthanhtoan` (
  `maphuongthucthanhtoan` int(11) NOT NULL,
  `tenphuongthucthanhtoan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phuongthucthanhtoan`
--

INSERT INTO `phuongthucthanhtoan` (`maphuongthucthanhtoan`, `tenphuongthucthanhtoan`) VALUES
(1, 'Thanh toán khi nhận hàng'),
(2, 'Thanh toán qua ví điện tử'),
(3, 'Thanh toán qua thẻ ngân hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masanpham` int(10) NOT NULL,
  `tensanpham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `maloaisanpham` int(10) NOT NULL,
  `soluong` int(15) NOT NULL,
  `dongia` int(15) NOT NULL,
  `anh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `manhacungcap` int(10) NOT NULL,
  `makhuyenmai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masanpham`, `tensanpham`, `maloaisanpham`, `soluong`, `dongia`, `anh`, `mota`, `manhacungcap`, `makhuyenmai`) VALUES
(1, 'Nho chín', 7, 0, 8000, 'product-home-1-img-8.jpg', 'Hợp chất “flavonoid” trong nho có khả năng chống oxy hóa mạnh, có khả năng ngăn chặn sự oxy hóa hình thành do cholesterol xấu có thể gây tắc mạch máu và một số bệnh tuần hoàn khác. Loại quả “nhỏ mà có võ” này còn hỗ trợ đẩy lùi tình trạng mảng bám và thành mạch giúp thanh lọc máu và đào thải các độc tố ra ngoài cơ thể, giúp bảo vệ sức khỏe tim mạch của bạn.', 1, 1),
(2, 'cà chua', 10, 100, 9000, 'product-home-1-img-10.jpg', 'Cà chua là nguồn cung cấp vitamin A và C tuyệt vời giúp ngăn ngừa bệnh quáng gà và tăng thị lực cho đôi mắt của bạn. Một nghiên cứu gần đây cho thấy hàm lượng vitamin A cao của cà chua có thể ngăn ngừa thoái hóa điểm vàng, một bệnh nghiêm trọng có thể dẫn đến mù mắt. Hơn nữa, cà chua có thể giảm nguy cơ đục thủy tinh thể. Trong cà chua còn có các chất chống oxy hóa như lycopene, lutein và zeaxanthin .', 4, 3),
(3, 'Đậu Hà Lan', 6, 123, 1000, 'product-home-1-img-1.jpg', 'Đậu Hà Lan xanh giàu tinh bột, nhiều loại khoáng chất, vitamin B và axit amin, có hiệu quả rất tốt đối với việc giảm bớt sự mệt mỏi, sưng phù hay tiểu tiện khó khăn… Đậu Hà Lan xanh còn có công dụng thanh nhiệt, giải độc, giúp mắt sáng hơn, hạ huyết áp…', 4, 3),
(4, 'Lựu đỏ', 7, 231, 2000, 'product-home-1-img-3.jpg', 'Lựu có tên khoa học là Punica granatum L. (Punicaceae), là loại cây thân gỗ lá rụng có nguồn gốc từ Iran và các nước dọc theo duyên hải Địa Trung Hải. Nay được trồng nhiều tại các vùng nhiệt đới và ôn đới, trong đó có Việt Nam. Quả mọng hình cầu, màu đỏ vàng, có vị ngọt tự nhiên, dồi dào vitamin C, A, E và khoáng chất, rất tốt cho sức khỏe và làn da. Thông thường lựu đỏ được ép lấy nước để uống giải khát hoặc được thêm vào các thành phần kem dưỡng da. Gần đây cách làm trắng da tại nhà bằng lựu đỏ khá được ưa chuộng.', 3, 4),
(5, 'Bắp cải', 10, 431, 3000, 'product-home-1-img-4.jpg', 'Trong bắp cải có chứa lượng vitamin cao hơn nhiều so với các loại rau củ khác như: gấp 4,5 lần so với cà rốt, 3,6 lần so với khoai tây, hành tây. Điều đặc biệt là vitamin A và P trong cải bắp kết hợp với nhau làm cho thành mạch máu bền vững hơn. Trong cải bắp còn có các chất chống ung thư: Sulforaphane, phenethyl isothiocyanate và Indol-33 carbinol.', 2, 2),
(6, 'Táo xanh', 7, 10, 4000, 'product-home-1-img-6.jpg', 'Trong thành phần dinh dưỡng của táo xanh chứa nhiều kali. Kali có vai trò như một chất điện giải giúp giữ cơ thể cân bằng các loại axit cần thiết, đồng thời duy trì hoạt động điện tim giúp cơ thể luôn khẻo mạnh. Ngoài ra, chất kali cần thiết cho việc xây dựng các cơ và protein cũng như có tác dụng thúc đẩy sự hoạt động của carbohydrate trong cơ thể giảm bệnh tim mạch, mạch vành.', 1, 2),
(7, 'Cá chép', 8, 0, 5000, 'product-home-1-img-2.jpg', 'Cá chép rất giàu khoáng chất và vitamin, đặc biệt là phốt pho và vitamin B12, mà cơ thể cần để thực hiện chức năng hoạt động, cũng như hàm lượng cao các acid béo có lợi, protein và chất chống oxy hóa', 2, 1),
(8, 'Thịt bắp bò', 5, 60, 6000, 'product-home-1-img-5.jpg', 'Thịt bắp bò chủ yếu bao gồm chất béo bão hòa và không bão hòa đơn. Các axit béo chính trong thịt bò là axit stearic, axit oleic và axit palmitic. Lượng chất béo trong thịt bắp bò giúp thịt có thêm hương vị và cũng nhiều calo hơn', 1, 3),
(9, 'Cam Xoàn Miền tây', 7, 16, 7000, 'product-home-1-img-7.jpg', 'Thuộc loại trái cây vùng nhiệt đới, cam xoàn cùng họ với cam mật nhưng vẫn có điểm khác với cam mật. Trong danh sách các loại cam ngon nhất Việt Nam, bao giờ cũng không thể không nhắc tới cam xoàn. \r\n\r\nTùy thuộc vào thổ nhưỡng khác nhau mà các loại cam ở từng nơi sẽ có vị khác nhau. Cam xoàn đến từ vùng đất Miền Tây, có vị ngọt đậm rất dễ ăn. Cây cam xoàn khi trồng rất sai quả và còn cho trái quanh năm. ', 3, 4),
(10, 'Sữa bò Chocolate', 3, 9, 1100, 'product-home-1-img-9.jpg', 'Protein sữa có thành phần acid amin cân đối và có độ đồng hóa cao. Protein sữa bao gồm casein, lactoalbumin và lactoglobulin. Sữa bò, sữa trâu, sữa dê thuộc loại sữa casein vì lượng casein chiếm hơn 75% tổng số protein. Casein có đủ tất cả các acid amin cần thiết. Đặc biệt là Lysin là một acid amin cần thiết cho sự phát triển của trẻ em.', 2, 2),
(11, 'Lát phô mai', 3, 32, 32000, 'lat-pho-mai.jpg', 'Lát phô mai được làm từ sữa bỏ nguyên chất. Thích hợp sử dụng kèm với các loại món ăn như: Hamburger, thịt bò nướng... ', 1, 2),
(12, 'Lê Hàn Quốc', 7, 205, 8000, 'le-han-quoc.jpg', 'Quả lê tính lạnh, bình hòa không độc hại, rất giàu vitamin C và pectin là chất giúp làm tăng độ xốp và men vi sinh giúp hệ tiêu hóa ổn định, nhu động ruột thải bã dễ dàng.\r\nVỏ quả lê có giá trị chữa bệnh cao, có lợi cho tim và phổi, giúp tiêu độc hạ nhiệt. Lê chứa vitamin A, B, C, D và E. Một trái lê có thể cung cấp 10% hàm lượng vitamin C và hàm lượng canxi khá lớn.\r\n\r\n', 3, 2),
(13, 'Táo đỏ', 7, 301, 8888, 'tao-do.jpg', 'Táo có nhiều chất xơ và nước nên có thể giúp bạn cảm thấy no bụng, bớt thèm ăn và từ đó giảm cân. Một nghiên cứu cho thấy những người ăn vài lát táo trước bữa ăn cảm thấy no hơn so với những người chỉ dùng sốt táo, uống nước táo hoặc không dùng sản phẩm từ táo. Nghiên cứu trên cũng cho biết những người ăn vài lát táo trước bữa ăn cũng nạp ít hơn trung bình 200 calo so với những người không ăn.', 4, 2),
(14, 'Chuối', 7, 0, 90909, 'chuoi.jpg', 'Một trong những tác dụng nổi bật của chuối là giúp kiểm soát đường huyết. Loại trái cây này rất giàu pectin – một loại chất xơ có hình dạng cấu trúc xốp. Chuối chưa chín chứa kháng tinh bột, hoạt động như chất xơ hòa tan và không được tiêu hóa. Cả pectin và kháng tinh bột có thể làm giảm lượng đường trong máu sau bữa ăn và giảm cảm giác thèm ăn bằng cách làm chậm quá trình làm rỗng dạ dày.\r\n\r\n', 3, 1),
(15, 'Bưởi da xanh', 7, 999, 66894, 'buoi.jpg', 'Là thành viên của gia đình họ nhà cam quýt, bưởi cũng là một nguồn bổ sung lượng Vitamin C tuyệt vời và làm tăng sức đề kháng của cơ thể. Bưởi còn là một quả chống oxy hóa, giúp cơ thể chống lại strees và các bệnh liên quan đến hen suyễn và viêm khớp…\r\n\r\n', 1, 2),
(16, 'Phô mai vỉ', 3, 10, 20000, 'phomai.jpg', 'Phô mai lốc 4 vỉ phù hợp cho trẻ nhỏ từ 3-5 tuổi. Đễ dàng sử dụng, giàu chất béo. Không chất bảo quản.', 1, 1),
(17, 'Dừa nước', 7, 15, 123456, 'dua-nuoc.jpg', 'Giá trị dinh dưỡng từ nước dừa uống nước dừa rất có lợi cho cơ thể, bởi trong nước dừa chứa rất nhiều vitamin và khoáng chất như: canxi, kali, clorua, Vitamin A, E. Ngoài ra, nó còn có tác dụng  giúp giảm huyết áp, giảm lượng đường huyết, giúp cải thiện sức khỏe của xương và răng. Nước dừa cũng được dùng để thay thế các sản phẩm sữa, nhất là đối với những người không dung nạp được lactose thì có thể uống nước dừa mà vẫn nhận đủ các vitamin và khoáng chất cần thiết.\r\n\r\n', 2, 1),
(18, 'Kiwi', 7, 33, 444555, 'kiwi.jpg', 'Kiwi chứa rất nhiều vitamin C được xem là dưỡng chất thiết yếu giúp cơ thể tăng cường hệ miễn dịch, chống stress, giúp vết thương mau lành, hấp thụ tốt chất sắt, cũng như làm giảm xuất hiện các triệu chứng của một số bệnh thường gặp như cảm cúm, cảm lạnh.', 4, 1),
(19, 'Nấm kim châm VN 150g', 10, 15, 12000, 'nam-kim-cham-150g.jpg', 'Nấm kim châm VN 150g rất giàu chất xơ và một số khoáng chất cần thiết cho cơ thể như Canxi, Sắt, Magie, Photpho, Natri, Kẽm và Kali với hàm lượng cao, đặc biệt là hàm lượng Kali. Nấm kim châm rất giàu vitamin như Thiamin, Riboflavin, Niacin, B6, Folate, A, D, axit amin và chất lysine rất tốt cho cơ thể.\nNấm kim châm VN 150g có công dụng tuyệt vời giúp hỗ trợ điều trị xơ vữa động mạnh, hỗ trợ ngăn ngừa các tác nhân ung thư, hỗ trợ tiêu hoá và ngăn ngừa bệnh loãng xương. Ngoài ra loại thực phẩm này rất phù hợp với những người có biến chứng, bị bệnh tiểu đường do nó giúp giảm lượng đường trong máu. Loại nấm này thích hợp để dùng cho các món nấu, xào, lẩu, nướng, canh, hơn nữa hương vị sẽ đậm đà hơn nhiều khi dùng chung với thịt.\n\nLưu ý:\n- Hạn sử dụng thực tế quý khách vui lòng xem trên bao bì.\n- Hình sản phẩm chỉ mang tính chất minh họa, hình thực tế bao bì của sản phẩm tùy thời điểm sẽ khác so với thực tế.', 2, 3),
(20, 'Mướp hương', 2, 15, 10000, 'muop-huong-500g.jpg', 'Mướp hương là một trong những loại rau củ rất quen thuộc đối với người Việt Nam. Với mướp hương, chúng ta có thể chế biến được rất nhiều món ăn hấp dẫn và giàu dinh dưỡng. Mỗi quả mướp hương được nuôi trồng và chăm chút rất cẩn thận. Những sản phẩm được bày bán trên gian hàng đều đã trải qua quá trình tuyển chọn kỹ càng. Sản phẩm được phân phối bởi Vinmart và được bảo quản cẩn thận và chặt chẽ để mang tới cho khách hàng những sản phẩm có chất lượng tốt nhất.\r\n\r\nLưu ý:\r\n- Hạn sử dụng thực tế quý khách vui lòng xem trên bao bì.\r\n\r\n- Hình sản phẩm chỉ mang tính chất minh họa, hình thực tế bao bì của sản phẩm tùy thời điểm sẽ khác so với thực tế.', 1, 3),
(21, 'Đậu cove', 6, 20, 8000, 'dau-cove.jpg', 'Đậu cô ve (hay đậu que) là một loại thực phẩm được ưa chuộng trên khắp thế giới. Chúng không chỉ mang đến giá trị dinh dưỡng to lớn mà còn mang đến nhiều lợi ích cho sức khỏe.\r\n\r\nThành phần dinh dưỡng: Đậu cove tươi chứa 12,2 mg vitamin C/100g và khi luộc chín là 9,7 mg. Vitamin C là một chất chống oxy hóa, giúp trung hòa các gốc tự do có thể gây hại đến các tế bào khỏe mạnh và bảo vệ cấu trúc DNA của cơ thể. Ngoài ra, vitamin C còn duy trì lượng protein, chất béo và carbohydrate giúp tăng cường hệ miễn dịch', 3, 2),
(22, 'Trứng gà ta', 1, 10, 4000, 'trung-ga.jpg', 'Xuất xứ:Việt Nam\n\nĐơn vị tính: 1 trứng\n\nThành phần dinh dưỡng: Trứng gà là loại thực phẩm có giá trị dinh dưỡng cao, có đủ protein, lipid, glucid, vitamin và khoáng chất, các loại men và hormon, phospho protein, các acid amin như: tryptophan, methionin, cystein, arginin. Ngoài ra, trứng gà có nguồn lecithin quý.\n\nCách dùng:Luộc, chiên, nướng muối, thịt kho trứng...\n\nBảo quản: Nơi khô ráo, thoáng mát', 3, 1),
(23, 'Khoai lang', 10, 15, 3000, 'khoai-lang.jpg', 'Khoai lang tím ', 4, 1),
(25, 'Váng sữa bò', 3, 0, 94315, 'vang-sua.jpg', 'Váng sữa bò hương vị sô cô la, tươi ngon thơm ngậy.', 3, 3),
(26, 'Khoai tây', 10, 60, 28461, 'khoai-tay.jpg', 'Khoai tây cát, vàng óng không ngâm chất bảo quản.', 2, 3),
(27, 'sữa uống lên men', 3, 999, 64313, 'sua-uong-len-men.jpg', 'Sữa uống lên men tốt cho hệ tiêu hóa.', 1, 4),
(28, 'Sữa tươi TH', 3, 149, 4500, 'sua-TH.jpg', 'Sữa tươi từ nông trại TH không chất bảo quản.', 2, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `matintuc` int(11) NOT NULL,
  `tieude` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noidungtintuc` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` datetime NOT NULL,
  `mota` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `nguoidang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `anhminhhoa` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`matintuc`, `tieude`, `noidungtintuc`, `ngaydang`, `mota`, `nguoidang`, `anhminhhoa`) VALUES
(1, '6 loại rau củ giúp tăng chiều cao tự nhiên mà bạn nên biết', 'Dưới đây là một số loại rau củ có khả năng góp phần làm tăng chiều cao của bạn thêm vài cm một cách tự nhiên.\r\n1. Cải bó xôi\r\n\r\nCải bó xôi là một loại rau xanh rậm lá có khả năng nâng cao các chức năng của cơ thể. Nó thường xuất hiện và được sử dụng ở nhiều vùng ở Nam Á. Chúng chứa nhiều vitamin, chất sắt, chất xơ và canxi.\r\n\r\nBổ sung cải bó xôi vào chế độ ăn uống hàng ngày sẽ giúp cơ thể vận hành một cách chính xác. Nó có tác dụng cải thiện sự phát triển của cơ thể về chiều dọc thông qua sự tác động tới các hoocmon tăng trưởng không hoạt động bên trong cơ thể.\r\n\r\nrau cu tang chieu cao 1\r\n2. Đậu Hà Lan\r\n\r\n\r\nLoại đậu này chứa rất nhiều vitamin và khoáng chất làm tăng chiều cao. Đậu Hà Lan cũng được biết là có chứa một vài kích thích tố tiết hormone tăng trưởng. Ngoài ra, đậu Hà Lan còn mang lại nhiều lợi ích cho sức khỏe như tăng cường sức đề kháng và duy trì mức cân nặng lý tưởng.\r\n\r\nrau cu tang chieu cao 5\r\n3. Cà rốt\r\n\r\nMột nửa cốc cà rốt có thể đáp ứng đến 73% nhu cầu vitamin A, 9% nhu cầu vitamin K, 8% lượng Kali và chất xơ cần thiết, 5% vitamin C cùng khoảng 2% sắt và khoáng chất Canxi. Do đó, nó được liệt kê vào nhóm các loại củ giàu dinh dưỡng, có lợi cho sự khỏe và sự tăng trưởng thể chất. Ăn nhiều cà rốt là cách chăm sóc sức khỏe mắt và làn da, cải thiện sức đề kháng và khả năng miễn dịch, đồng thời giúp bạn có được hệ xương khớp chắc khỏe cùng chiều cao nổi bật.\r\n\r\nrau cu tang chieu cao 4\r\n4. Khoai lang\r\n\r\nKhoai lang là thực phẩm tốt cho sức khỏe, đặc biệt rất giàu vitamin A. Cho nên, nó có thể cải thiện sức khỏe của xương và giúp phát triển chiều cao cũng như duy trì chiều cao.\r\n\r\nHơn nữa, khoai lang có chứa hàm lượng chất xơ hoà tan và không hòa tan khá phong phú. Những chất xơ này có thể thúc đẩy sức khoẻ tiêu hoá và thúc đẩy sự phát triển của vi khuẩn đường ruột. Duy trì hệ sinh vật đường ruột khỏe mạnh cũng có thể tăng cường hấp thụ chất dinh dưỡng để đảm bảo rằng cơ thể có thể được đủ lượng vitamin và chất khoáng cần thiết cho sự tăng trưởng và phát triển.\r\n\r\nrau cu tang chieu cao 3\r\n5. Bông cải xanh\r\n\r\nBông cải xanh chứa nhiều vitamin C, chất xơ và sắt. Nó giúp cho các cơ quan trong cơ thể hoạt động đúng đắn và kích thích các yếu tố tăng trưởng. Do đó, tiêu thụ bông cải xanh là một trong những cách cải thiện tầm vóc một cách tự nhiên và an toàn. Ngoài ra, nên ăn bông cải xanh sống để giữ trọn chất dinh dưỡng.\r\n\r\nrau cu tang chieu cao 6\r\n6. Đậu bắp\r\n\r\nĐậu bắp hay mướp tây là một loại rau quả quan trọng khác giúp bạn phát triển chiều cao. Trong đậu bắp chứa đầy đủ vitamin, chất xơ, carbohydrate, khoáng chất và có giá trị dinh dưỡng rất cao. Loại quả này luôn gắn liền với tính chất thực hiện chức năng của một loại thuốc nhuận tràng. Các chất dinh dưỡng bên trong đậu bắp có thể kích thích hiệu quả sự phát triển của các tế bào mới, từ đó giúp cơ thể phát triển về chiều dọc.\r\n\r\nrau cu tang chieu cao 2\r\n', '2021-10-19 11:39:15', 'Dưới đây là một số loại rau củ có khả năng góp phần làm tăng chiều cao của bạn thêm vài cm một cách ', 'Minh Nguyệt', 'anhminhhoa1.jpg'),
(2, 'Cách làm súp thịt bò rau củ đậm đà thơm mềm', 'Món ăn này còn chiều lòng các chị em bởi lượng dinh dưỡng cao mà không lo tăng cân.\r\nNguyên liệu:\r\n\r\n- Cà rốt\r\n\r\n- Tỏi\r\n\r\n- Khoai tây\r\n\r\n- Hành tây\r\n\r\n- Đậu hà lan ngâm đường\r\n\r\n- Cần tây\r\n\r\n- 350g thịt bò\r\n\r\n- Dầu thực vật\r\n\r\n- Nước cốt bò\r\n\r\n- Xạ hương\r\n\r\n- Lá nguyệt quế\r\n\r\nCách làm:\r\n\r\n- Rửa sạch, gọt vỏ của cà rốt, khoai tây, rửa sạch tỏi và cần tây rồi đem cắt nhỏ. Thịt bò rửa sạch, thái miếng vừa ăn.\r\n\r\nsup thit bo rau cu 1\r\n- Đặt chảo lên bếp, thêm dầu ăn vào đun nóng, sau đó cho toàn bộ rau củ đã thái nhỏ xào sơ trong vòng 1 phút. Tiếp tục cho các miếng thịt bò đã thái vào đảo cùng, đảm bảo mọi thứ được kết hợp với nhau và thịt bò chín đều ở tất cả các mặt.\r\n\r\nsup thit bo rau cu 2\r\n- Đổ nước cốt thịt bò vào chảo trên, sau đó cho thêm lá nguyệt quế và xạ hương vào đảo đều. Đậy vung và đun tất cả các nguyên liệu trong 20 phút ở lừa vừa. Cuối cùng, bạn chỉ cần đổ súp ra bát và thưởng thức.\r\n\r\nsup thit bo rau cu 3\r\nChúc bạn thành công!\r\n- Cần tây\r\n\r\n- 350g ', '2021-10-19 11:44:43', 'Món ăn này còn chiều lòng các chị em bởi lượng dinh dưỡng cao mà không lo tăng cân.', 'Hải Yến', 'anhminhhoa2.jpg'),
(3, 'Rau củ mất chất, có nguy cơ gây ung thư vì sai lầm ', ' Nhiều người thường mắc những sai lầm này khi chế biến mà không biết chúng sẽ khiến rau củ mất chất, thậm chí gây ung thư.\r\nRửa rau củ không kỹ\r\n\r\nPhần lớn các loại rau củ đều có nguy cơ chứa chất bảo quản, thuốc trừ sâu. Việc không làm sạch rau củ cẩn thận hoặc không rửa sẽ gây hại cho sức khỏe.\r\n\r\nCác hóa chất sau khi vào cơ thể có khả năng gây đau bụng, buồn nôn, tiêu chảy hoặc khiến bạn phải đi cấp cứu. Đặc biệt, các chất độc hại không dễ đào thải, tích tụ dần dần trong cơ thể, gây ra nhiều bệnh nguy hiểm, trong đó có ung thư.\r\n\r\nrau cu mat chat co nguy co gay ung thu vi 10 sai lam khi che bien1\r\nĂn rau để nguội, rau để qua đêm\r\n\r\nNghiên cứu chỉ ra rau sau khi chế biến bị hao hụt khoảng 15% vitamin, để sau khoảng 1 tiếng mất tới 25%, cứ tịnh tiến lên 2 giờ sẽ giảm từ 34% - 57%. Nếu chế biến sẵn, để lâu và hâm nóng lại, rau sẽ bị mất tới 90% vitamin bên trong. Món rau khi để lâu có nguy cơ sinh sôi nhiều vi khuẩn có hại cho cơ thể, trong đó có nitrite – một chất gây ung thư.\r\n\r\nÉp rau củ quả\r\n\r\nRau củ quả sau khi ép sẽ bị mất môt lượng chất xơ vốn rất có lợi cho hệ tiêu hóa. Nếu buộc phải nghiền nát các loại rau củ quả, bạn nên dùng một chiếc máy xay sinh tố, không bỏ đi bất cứ thành phần nào.\r\n\r\nNấu, xào rau quá kỹ\r\n\r\nViệc luộc, nấu rau ở nhiệt độ cao quá lâu khiến các vi chất dinh dưỡng như vitamin B, vitamin C bị hòa tan trong nước, thẩm thấu ra ngoài một cách lãng phí.\r\n\r\nrau cu mat chat co nguy co gay ung thu vi 10 sai lam khi che bien2\r\nTrong khi đó, xào rau quá kỹ sẽ làm các loại vitamin có lợi trong rau bị phân hủy. Khi xào rau củ, bạn nên để lửa thật lớn, xào nhanh để có thể giữ được lương vitamin cao nhất.\r\n\r\nĐổ quá ít nước để luộc rau\r\n\r\nViệc cho quá ít nước khi luộc sẽ làm rau bị thâm đen và mất ngon. Bạn nên cho một lượng nước vừa đủ, bật lửa lớn và cho vào chút muối để rau trông xanh, ngon hơn.\r\n\r\nĂn giá đỗ không được nấu chín\r\n\r\nGiá đỗ vừa ngon vừa bổ dưỡng. Tuy nhiên, giá đỗ chứa một số chất độc hại như các chất ức chế trypsin, có thể gây buồn nôn, tiêu chảy, chóng mặt, kèm theo các phản ứng bất lợi khác. Do đó, bạn nên nấu chín giá đỗ trước khi ăn.\r\n\r\nXào mướp đắng nhưng không luộc qua nước nóng\r\n\r\nMướp đắng chứa axit oxalic, có thể cản trở sự hấp thu canxi trong thực phẩm. Trước khi cho mướp đắng vào xào, bạn nên luộc qua loại quả này trong nước nóng để loại bỏ axit oxalic.\r\n\r\nNướng rau củ trên than\r\n\r\nLàm chín rau củ ở nhiệt độ quá nóng và khô có thể làm cạn kiệt các chất dinh dưỡng bên trong. Rau củ nướng bị cháy đen, có mùi khét đồng nghĩa với việc rau củ đã bị biến hóa thành chất benzopyrene, một tác nhân gây ung thư thường được tìm thấy trong khói thuốc lá. Rau củ được xào ở nhiệt độ quá cao cũng khiến các chất chống oxy hóa biến đổi, ảnh hưởng không tốt tới sức khỏe.\r\n\r\nrau cu mat chat co nguy co gay ung thu vi 10 sai lam khi che bien\r\nLưu trữ các loại rau lá xanh quá lâu sau khi nấu chín\r\n\r\nThức ăn thừa, nhất là các loại rau lá xanh khi được lưu trưc quá lâu sẽ sản sinh ra một lượng lớn nitrit, gây ngộ độc thực phẩm. Vì thế, bạn không nên lưu trữ các loại rau lá xanh quá lâu sau khi chúng được nấu chín.\r\n\r\nNgâm nấm quá lâu trong nước\r\n\r\nNấm ngâm quá lâu trong nước hoặc được làm sạch quá kỹ sẽ mất đi mộ lượng lớn ergosterol và các chất dinh dưỡng khác.', '2021-10-19 11:46:54', 'Nhiều người thường mắc những sai lầm này khi chế biến mà không biết chúng sẽ khiến rau củ mất chất', 'Mai Huyền', 'anhminhhoa3.jpg'),
(4, 'Điểm mặt 11 loại rau củ quen thuộc giúp giải nhiệt', 'Những loại rau củ này không chỉ giúp giải nhiệt mà còn bổ sung chất dinh dưỡng, tăng sức đề kháng, tốt cho sức khỏe.\r\nKhoai lang\r\n\r\nKhoai lang có vị ngọt, thơm, tính mát với thành phần chứa 70% là nước. Loại củ này tốt cho hệ tiêu hóa, nhuận tràng, giải nhiệt, sát khuẩn. Khoai lang có lượng calo thấp, do vậy có khả năng cân bằng hàm lượng insulin trong cơ thể, giảm lượng đường trong máu. Lá khoai lang luộc ăn chữa táo bón, trong khi phần củ trị các chứng lỵ, tiêu chảy, táo bón, trĩ lậu, thương hàn.\r\n\r\nSúp lơ xanh\r\n\r\nLoại rau này chứa tới 90% nước, giúp làm mát cơ thể hiệu quả. Đặc biệt, súp lơ xanh là loại rau hỗ trợ hydrat hóa, giúp chống lại tình trang đột quỵ xảy ra do nhiệt.\r\n\r\nBí đao, bầu\r\n\r\nBí đao có vị ngọt, tính mát với các công dụng như thanh nhiệt, tiêu thử, sinh tân, chỉ khát. Dân gian thường sử dụng loại quả này để nấu các món canh giải nhiệt hoặc rửa sạch và ép lấy nước uống. Vỏ bí đao cũng có tác dụng giải nhiệt.\r\n\r\ndiem mat 11 loai rau cu quen thuoc giup giai nhiet trong ngay he nang nong1\r\nTrong khi đó, quả bầu có vị ngọt, tính bình. Công dụng của quả bầu là thanh nhiệt, lợi niệu, trừ thử, giải khát. Loại quả này thường được nấu canh với tôm hoặc xương.\r\n\r\nBắp cải tím\r\n\r\nSo với rau bắp cải bình thường, bắp cải tím chứa nhiều nước hơn. Nếu thường xuyên ăn loại rau này vào ngày hè, cơ thể bạn sẽ luôn được mát mẻ.\r\n\r\nRau dền\r\n\r\nRau dền có 2 loại phổ biến là dền xanh và dền tía. Loại rau này có vị ngọt, thơm, tính mát với dược năng thanh nhiệt, lọc máu, lợi tiểu, an thần. Rau dền có thể trị nhức đầu, hạ nhiệt, giúp tiêu hóa, lưu thông khí huyết, trừ nhọt lở, ngoài ra còn trị sung huyết, ứ huyết và tăng huyết áp. Bạn có thể luộc, nấu canh ăn kèm với cà, hoặc xào với tỏi, hành…\r\n\r\nMướp đắng\r\n\r\nĐây là loại quả có vị đắng, tính hàn với tác dụng làm sáng mắt, giải khát, giải nhiệt, bổ khí, hoạt huyết. Mướp đắng thường được xào với thịt bò, nấu canh xương, nhồi thịt hấp. Loại quả này cũng được dùng để đun nước tắm cho trẻ lặn rôm, sắc nước uống (thái nhỏ phơi khô dùng dần).\r\n\r\nRau má\r\n\r\nRau má có vị đắng, hơi ngọt, tính mát với những tác dụng như thanh nhiệt, giải độc, chống nhiễm trùng, chống độc, lợi tiểu, bổ gan, điều hòa tạng phủ.... Loại rau này có thể dùng ăn sống, xay ra rồi hòa với đường làm nước giải khát…\r\n\r\ndiem mat 11 loai rau cu quen thuoc giup giai nhiet trong ngay he nang nong2\r\nRau muống\r\n\r\nRau muống chứa 90% nước, nhiều chất cơ, viamin C, protein, vitamin E, chất béo và khoáng chất như sắt, kẽm, magie, tốt cho hệ miễn dịch. Nước rau muống có tác dụng giải nhiệt, hạ sốt.\r\n\r\nTuy nhiên, những người bị bệnh gout, viêm nhiễm đường tiết niệu do sỏi thận, huyết áp cao, có vết thương mềm ngoài da, đang điều trị nội khoa, ngoại khoa hoặc bị đau xương khớp, viêm, đau nhức nên hạn chế ăn rau muống.\r\n\r\nRau diếp cá\r\n\r\nĐây là loại rau có tác dụng thanh nhiệt, giải độc, tiêu đờm. Vì có lượng xơ thực vật cao, có lợi cho hệ tiêu hóa, rau diếp cá còn có thể trị táo bón.\r\n\r\ndiem mat 11 loai rau cu quen thuoc giup giai nhiet trong ngay he nang nong3\r\nRau diếp cá tốt cho người bị thiếu máu, đồng thời giúp giảm cân, giữ dáng, lợi tiểu, giải độc. Loại rau này vào mùa hè thường được xay thành nước, hòa thêm chút đường để giải khát, thanh nhiệt.\r\n\r\nRau mồng tơi\r\n\r\nRau mồng tơi có tính hàn, vị chua, tán nhiệt, mát máu, lợi tiểu, giải độc, đẹp da, trị rôm sảy, mụn nhọt hiệu quả. Các nghiên cứu cho thấy mồng tới chứa chất nhầy pectin, giúp phòng chữa nhiều bệnh, có tác dụng nhuận tràng, thải chất béo chống béo phì, thích hợp cho người có mỡ và đường cao trong máu.\r\n\r\nRau ngót\r\n\r\nTheo Đông y, đây là loại thảo dược có đặc tính mát, giải nhiệt và rất lành tính. Lượng vitamin C trong rau ngót cao hơn nhiều so với cam, ổi. Rau ngót có nhiều tác dụng như thanh nhiệt, giải độc, lợi tiểu, bổ huyết, nhuận tràng…', '2021-10-19 11:48:49', 'Những loại rau củ này không chỉ giúp giải nhiệt mà còn bổ sung chất dinh dưỡng, tăng sức đề kháng', 'Tân Thanh', 'anhminhhoa4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trogiup`
--

CREATE TABLE `trogiup` (
  `matrogiup` int(10) NOT NULL,
  `tentrogiup` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `emailtrogiup` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdttrogiup` int(15) NOT NULL,
  `noidungtrogiup` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ngayyeucau` datetime NOT NULL,
  `trangthai` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trogiup`
--

INSERT INTO `trogiup` (`matrogiup`, `tentrogiup`, `emailtrogiup`, `sdttrogiup`, `noidungtrogiup`, `ngayyeucau`, `trangthai`) VALUES
(1, 'Minh', 'nguyet@gmail.com', 9999, 'Sây hai Yến hâm', '2021-10-30 20:48:08', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlist`
--

CREATE TABLE `wishlist` (
  `masanpham` int(10) NOT NULL,
  `makhachhang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD KEY `foreign key` (`makhachdathang`),
  ADD KEY `masanpham` (`masanpham`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD KEY `maphuongthucthanhtoan` (`maphuongthucthanhtoan`),
  ADD KEY `masanpham` (`masanpham`),
  ADD KEY `chitiethoadon_ibfk_4` (`makhachdathang`),
  ADD KEY `chitiethoadon_ibfk` (`mahoadon`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahoadon`),
  ADD KEY `fk1` (`makhachdathang`);

--
-- Chỉ mục cho bảng `khachdathang`
--
ALTER TABLE `khachdathang`
  ADD PRIMARY KEY (`makhachdathang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makhachhang`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`makhuyenmai`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`malienhe`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`maloaisanpham`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`manguoidung`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`manhacungcap`);

--
-- Chỉ mục cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  ADD PRIMARY KEY (`maphuongthucthanhtoan`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masanpham`),
  ADD KEY `makhuyenmai` (`makhuyenmai`),
  ADD KEY `maloaisanpham` (`maloaisanpham`),
  ADD KEY `manhacungcap` (`manhacungcap`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`matintuc`);

--
-- Chỉ mục cho bảng `trogiup`
--
ALTER TABLE `trogiup`
  ADD PRIMARY KEY (`matrogiup`);

--
-- Chỉ mục cho bảng `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`masanpham`),
  ADD KEY `makhachhang` (`makhachhang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahoadon` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `khachdathang`
--
ALTER TABLE `khachdathang`
  MODIFY `makhachdathang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makhachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `makhuyenmai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `malienhe` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `manguoidung` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `manhacungcap` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  MODIFY `maphuongthucthanhtoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masanpham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `matintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `trogiup`
--
ALTER TABLE `trogiup`
  MODIFY `matrogiup` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `masanpham` int(10) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`makhachdathang`) REFERENCES `khachdathang` (`makhachdathang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk` FOREIGN KEY (`mahoadon`) REFERENCES `hoadon` (`mahoadon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`makhachdathang`) REFERENCES `khachdathang` (`makhachdathang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`maphuongthucthanhtoan`) REFERENCES `phuongthucthanhtoan` (`maphuongthucthanhtoan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_3` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_4` FOREIGN KEY (`mahoadon`) REFERENCES `hoadon` (`mahoadon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`makhachdathang`) REFERENCES `khachdathang` (`makhachdathang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`makhuyenmai`) REFERENCES `khuyenmai` (`makhuyenmai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`maloaisanpham`) REFERENCES `loaisanpham` (`maloaisanpham`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`manhacungcap`) REFERENCES `nhacungcap` (`manhacungcap`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`makhachhang`) REFERENCES `khachhang` (`makhachhang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
