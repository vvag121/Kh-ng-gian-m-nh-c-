-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 14, 2024 lúc 03:35 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `kgan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `email` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`email`, `password`) VALUES
('vinh@gmail.com', 'admin'),
('traivavinhdn2@gmail.com', 'admin'),
('traivavinhdn4@gmail.com', '123123'),
('vinh1@gmail.com', '11111');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `email` varchar(256) NOT NULL,
  `password` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admininfo`
--

CREATE TABLE `admininfo` (
  `email` varchar(256) NOT NULL,
  `nameAdmin` varchar(256) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `phone` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admininfo`
--

INSERT INTO `admininfo` (`email`, `nameAdmin`, `address`, `phone`) VALUES
('admin@gmail.com', 'Nguyễn Quang Vinh', 'Đà Nẵng', '0563027013');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment_interactive`
--

CREATE TABLE `comment_interactive` (
  `idCommentInteractive` varchar(256) NOT NULL,
  `idSong` varchar(256) DEFAULT NULL,
  `emailListener` varchar(256) DEFAULT NULL,
  `content` varchar(256) DEFAULT NULL,
  `commentTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `composer`
--

CREATE TABLE `composer` (
  `email` varchar(256) NOT NULL,
  `nameComposer` varchar(256) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `imageComposer` varchar(256) DEFAULT 'image.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `composer`
--

INSERT INTO `composer` (`email`, `nameComposer`, `birthday`, `address`, `imageComposer`) VALUES
('anh@gmail.com', 'Quốc Anh', '1991-03-17', 'Hồ Chí Minh', 'QuocAnh.png'),
('dan1@gmail.com', 'Lê Nguyễn Trung Đan', '1988-05-24', 'Hồ Chí Minh', 'Binz.png'),
('dan@gmail.com', 'Chi Dân', '1989-06-02', 'Kiên Giang', 'ChiDan.png'),
('dat@gmail.com', 'Nguyễn Tấn Đạt', '1995-07-14', 'Hồ Chí Minh', 'DatG.png'),
('hung@gmail.com', 'Nguyễn Khắc Hưng', '1992-12-12', 'Yên Bái', 'Hung.png'),
('huong@gmail.com', 'Chí Hướng', NULL, NULL, 'image.png'),
('nam@gmail.com', 'Bùi Công Nam', '1994-08-03', 'Đắk Lắk', 'Nam.png'),
('other@gmail.com', 'Other', NULL, NULL, 'image.png'),
('thanh@gmail.com', 'Hồng Thanh', '1991-03-17', 'Đồng Tháp', 'HongThanh.png'),
('thien@gmail.com', 'Vũ Đức Thiện', '1991-04-08', 'Hà Nội', 'Thien.png'),
('tu@gmail.com', 'Vương Anh Tú', '1989-09-16', ' Hồ chí Minh', 'VuongAnhThu.png'),
('vi@gmail.com', 'Nguyễn Vĩ', NULL, NULL, 'image.png'),
('vu@gmail.com', 'Nguyên Đình Vũ', '1991-03-17', 'Hồ Chí Minh', 'NguyenDinhVu.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `download_interactive`
--

CREATE TABLE `download_interactive` (
  `idDownload` varchar(256) NOT NULL,
  `idSong` varchar(256) DEFAULT NULL,
  `emailListener` varchar(256) DEFAULT NULL,
  `downloadTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `like_interactive`
--

CREATE TABLE `like_interactive` (
  `idLikeInteractive` varchar(256) NOT NULL,
  `idSong` varchar(256) DEFAULT NULL,
  `emailListener` varchar(256) DEFAULT NULL,
  `likeTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `listener`
--

CREATE TABLE `listener` (
  `email` varchar(256) NOT NULL,
  `nameListener` varchar(256) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `listener`
--

INSERT INTO `listener` (`email`, `nameListener`, `birthday`, `address`) VALUES
('chuan@gmail.com', 'Chuân', '2000-06-06', 'Huế'),
('traivaivnhdn@gmail.com', 'vinh', '2002-11-02', 'DaNang'),
('traivavinhdn2@gmail.com', 'Vinh', '2002-11-20', 'da nang'),
('traivavinhdn4@gmail.com', 'vinh', '2024-12-04', 'da nang'),
('traivavinhdn@gmail.com', 'Vinh', '2002-11-20', 'da nang'),
('vinh1@gmail.com', 'Vinh', '0001-11-11', '111'),
('vinh@gmail.com', 'Vinh', '2002-12-20', 'Đà Nẵng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `singer`
--

CREATE TABLE `singer` (
  `email` varchar(256) NOT NULL,
  `nameSinger` varchar(256) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `imageSinger` varchar(256) DEFAULT 'notimage'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `singer`
--

INSERT INTO `singer` (`email`, `nameSinger`, `birthday`, `address`, `imageSinger`) VALUES
('dan1@gmail.com', 'Lê Nguyễn Trung Đan', '1988-05-24', 'Hồ Chí Minh', 'Binz.png'),
('dan@gmail.com', 'Chi Dân', '1989-06-02', 'Kiên Giang', 'ChiDan.png'),
('dat@gmail.com', 'Nguyễn Tấn Đạt', '1995-07-14', 'Hồ Chí Minh', 'DatG.png'),
('hien@gmail.com', 'Hiền Hồ', '1997-02-26', 'Hồ Chí Minh', 'HienHo.png'),
('hieu@gmail.com', 'Hồ Quang Hiếu', '1986-09-20', 'Buôn Ma Thuộc', 'HoQuangHieu.png'),
('hoc@gmail.com', 'Nguyễn Thái Học', '2000-04-30', 'Hà Tĩnh', 'NguyenThaiHoc.png'),
('hung@gmail.com', 'Hồ Gia Hùng', '1989-06-02', 'An Giang', 'HoGiaHung.png'),
('kiet@gmail.com', 'Lý Tuấn Kiệt', '1989-06-02', 'Bình Dương', 'LyTuanKiet.png'),
('nhan@gmail.com', 'Trúc Nhân', '1989-06-02', 'Bình Định', 'TrucNhan.png'),
('son@gmail.com', 'Nguyễn Hoàng Sơn', '1992-09-10', 'Hà Nội', 'Sobin.png'),
('tam@gmail.com', 'Mỹ Tâm', '1989-06-02', 'Đà Nẵng', 'MyTam.png'),
('thanh@gmail.com', 'Hồng Thanh', '1989-06-02', 'Đồng Tháp', 'HongThanh.png'),
('thien@gmail.com', 'Vũ Đức Thiện', '1991-04-08', 'Hà Nội', 'Thien.png'),
('tram@gmail.com', 'Thiều Bảo Trâm', '1989-06-02', 'Thanh Hóa', 'ThieuBaoTram.png'),
('viet@gmail.com', 'Khang Việt', '1989-06-02', 'Hồ Chí Minh', 'KhangViet.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `song`
--

CREATE TABLE `song` (
  `idSong` varchar(256) NOT NULL,
  `nameSong` varchar(256) DEFAULT NULL,
  `emailSinger` varchar(256) DEFAULT NULL,
  `emailComposer` varchar(256) DEFAULT NULL,
  `srcSong` varchar(256) DEFAULT NULL,
  `releaseTime` date DEFAULT NULL,
  `numLike` int(11) DEFAULT 0,
  `numComment` int(11) DEFAULT 0,
  `numDownload` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `song`
--

INSERT INTO `song` (`idSong`, `nameSong`, `emailSinger`, `emailComposer`, `srcSong`, `releaseTime`, `numLike`, `numComment`, `numDownload`) VALUES
('BH001', 'Không Cảm Xúc', 'hieu@gmail.com', 'vu@gmail.com', 'kcx', NULL, 0, 0, 0),
('BH002', 'Anh Không Sao Đâu', 'dan@gmail.com', 'dan@gmail.com', 'aksd', NULL, 0, 0, 0),
('BH003', 'Cây Đàn Sinh Viên', 'tam@gmail.com', 'anh@gmail.com', 'cdsv', NULL, 0, 0, 0),
('BH004', 'Đám Cưới Nha', 'thanh@gmail.com', 'thanh@gmail.com', 'dcn', NULL, 0, 0, 0),
('BH005', 'Tay Bế Tay Bồng', 'hoc@gmail.com', 'vi@gmail.com', 'tbtb', NULL, 0, 0, 0),
('BH006', 'Kiếp Này Em Gả Cho Anh', 'hoc@gmail.com', 'huong@gmail.com', 'knegca', NULL, 0, 0, 0),
('BH007', 'Anh Chưa Đủ Tư Cách', 'kiet@gmail.com', 'other@gmail.com', 'acdtc', NULL, 0, 0, 0),
('BH008', 'Ai Thật Lòng Thương Em', 'kiet@gmail.com', 'other@gmail.com', 'atlte', NULL, 0, 0, 0),
('BH009', 'Giấu Nước Mắt', 'kiet@gmail.com', 'other@gmail.com', 'gnm', NULL, 0, 0, 0),
('BH010', 'Ngã Tư Đường', 'hieu@gmail.com', 'other@gmail.com', 'ntd', NULL, 0, 0, 0),
('BH011', 'Sau Lưng Anh Có Ai Kìa', 'tram@gmail.com', 'other@gmail.com', 'slacak', NULL, 0, 0, 0),
('BH012', 'Nơi Em Mãi Mãi Là Bình Yên', 'hieu@gmail.com', 'other@gmail.com', 'nemmlby', NULL, 0, 0, 0),
('BH013', 'Một Mình Có Buồn Không', 'tram@gmail.com', 'other@gmail.com', 'mmcbk', NULL, 0, 0, 0),
('BH014', 'Thay Thế', 'kiet@gmail.com', 'other@gmail.com', 'tt', NULL, 0, 0, 0),
('BH015', 'Em Là Con Thuyền Cô Đơn', 'hoc@gmail.com', 'other@gmail.com', 'elctcd', NULL, 0, 0, 0),
('BH016', 'Sáng Mắt Chưa', 'nhan@gmail.com', 'other@gmail.com', 'smc', NULL, 0, 0, 0),
('BH017', 'Có Không Giữ Mất Đừng Tìm', 'nhan@gmail.com', 'nam@gmail.com', 'ckgmdt', NULL, 0, 0, 0),
('BH018', 'Gặp Nhưng Không Ở Lại', 'hien@gmail.com', 'tu@gmail.com', 'gnkol', NULL, 0, 0, 0),
('BH019', 'Có Như Không Có', 'hien@gmail.com', 'dat@gmail.com', 'cnkc', NULL, 0, 0, 0),
('BH020', 'ĐÔ TRƯỞNG', 'dat@gmail.com', 'dat@gmail.com', 'dt', NULL, 0, 0, 0),
('BH021', 'ToGetHer ', 'dan1@gmail.com', 'dan1@gmail.com', 'tgh', NULL, 0, 0, 0),
('BH022', 'BIGCITYBOI', 'dan1@gmail.com', 'dan1@gmail.com', 'BCB', NULL, 0, 0, 0),
('BH023', 'Nến Và Hoa', 'thien@gmail.com', 'thien@gmail.com', 'nvh', NULL, 0, 0, 0),
('BH024', 'Giàu Sang', 'thien@gmail.com', 'thien@gmail.com', 'gs', NULL, 0, 0, 0),
('BH026', 'LẠC', 'thien@gmail.com', 'other@gmail.com', 'l', NULL, 0, 0, 0),
('BH027', 'BLACKJACK', 'son@gmail.com', 'dan1@gmail.com', 'bj', NULL, 0, 0, 0),
('BH028', 'Vẫn Nhớ', 'son@gmail.com', 'other@gmail.com', 'vn', NULL, 0, 0, 0),
('BH030', 'Em Ngày Xưa Khác Rồi', 'hien@gmail.com', 'tu@gmail.com', 'EmNgayXuaKhacRoiCover-NhiNhi-5952274.mp3', '0000-00-00', 0, 0, 0),
('BH031', 'em khác', 'son@gmail.com', 'vi@gmail.com', 'emngayxua', '2024-11-11', 0, 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `comment_interactive`
--
ALTER TABLE `comment_interactive`
  ADD PRIMARY KEY (`idCommentInteractive`),
  ADD KEY `idSong` (`idSong`),
  ADD KEY `emailListener` (`emailListener`);

--
-- Chỉ mục cho bảng `composer`
--
ALTER TABLE `composer`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `download_interactive`
--
ALTER TABLE `download_interactive`
  ADD PRIMARY KEY (`idDownload`),
  ADD KEY `idSong` (`idSong`),
  ADD KEY `emailListener` (`emailListener`);

--
-- Chỉ mục cho bảng `like_interactive`
--
ALTER TABLE `like_interactive`
  ADD PRIMARY KEY (`idLikeInteractive`),
  ADD KEY `idSong` (`idSong`),
  ADD KEY `emailListener` (`emailListener`);

--
-- Chỉ mục cho bảng `listener`
--
ALTER TABLE `listener`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `singer`
--
ALTER TABLE `singer`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`idSong`),
  ADD KEY `emailSinger` (`emailSinger`),
  ADD KEY `emailComposer` (`emailComposer`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`email`) REFERENCES `listener` (`email`);

--
-- Các ràng buộc cho bảng `comment_interactive`
--
ALTER TABLE `comment_interactive`
  ADD CONSTRAINT `comment_interactive_ibfk_1` FOREIGN KEY (`idSong`) REFERENCES `song` (`idSong`),
  ADD CONSTRAINT `comment_interactive_ibfk_2` FOREIGN KEY (`emailListener`) REFERENCES `listener` (`email`);

--
-- Các ràng buộc cho bảng `download_interactive`
--
ALTER TABLE `download_interactive`
  ADD CONSTRAINT `download_interactive_ibfk_1` FOREIGN KEY (`idSong`) REFERENCES `song` (`idSong`),
  ADD CONSTRAINT `download_interactive_ibfk_2` FOREIGN KEY (`emailListener`) REFERENCES `listener` (`email`);

--
-- Các ràng buộc cho bảng `like_interactive`
--
ALTER TABLE `like_interactive`
  ADD CONSTRAINT `like_interactive_ibfk_1` FOREIGN KEY (`idSong`) REFERENCES `song` (`idSong`),
  ADD CONSTRAINT `like_interactive_ibfk_2` FOREIGN KEY (`emailListener`) REFERENCES `listener` (`email`);

--
-- Các ràng buộc cho bảng `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_1` FOREIGN KEY (`emailSinger`) REFERENCES `singer` (`email`),
  ADD CONSTRAINT `song_ibfk_2` FOREIGN KEY (`emailComposer`) REFERENCES `composer` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
