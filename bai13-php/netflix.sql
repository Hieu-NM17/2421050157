-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 26, 2026 at 03:21 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `dao_dien`
--

CREATE TABLE `dao_dien` (
  `id` int NOT NULL,
  `ho_ten` varchar(100) NOT NULL,
  `ngay_sinh` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dao_dien`
--

INSERT INTO `dao_dien` (`id`, `ho_ten`, `ngay_sinh`) VALUES
(1, 'Nguyễn Phan Quang Bình', '1972-01-01'),
(2, 'Greg Nicotero', '1963-03-15'),
(3, 'George Lucas', '1944-05-14'),
(4, 'Martin Scorsese', '1942-11-17'),
(5, 'James Cameron', '1954-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `dien_vien`
--

CREATE TABLE `dien_vien` (
  `id` int NOT NULL,
  `ho_ten` varchar(100) NOT NULL,
  `ngay_sinh` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dien_vien`
--

INSERT INTO `dien_vien` (`id`, `ho_ten`, `ngay_sinh`) VALUES
(1, 'Tom Holland', '1996-06-01'),
(2, 'Nguyễn Quốc Trung', '2006-11-20'),
(3, 'Nguyễn Đăng Khoa', '2006-10-12'),
(4, 'Ninh Dương Lan Ngọc', '1990-04-04'),
(5, 'Nguyễn Thị Nhung', '2006-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `id` int NOT NULL,
  `ten_dang_nhap` varchar(30) NOT NULL,
  `mat_khau` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `so_dien_thoai` varchar(10) NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`id`, `ten_dang_nhap`, `mat_khau`, `email`, `ho_ten`, `ngay_sinh`, `so_dien_thoai`, `gioi_tinh`) VALUES
(1, 'XEKNX', '12345', 'trung@gmail.com', 'Nguyễn Quốc Trung', '2006-11-20', '0361111111', 1),
(2, 'KhoaKK', '12345', 'khoa@gmail.com', 'Nguyễn Đăng Khoa', '2006-10-12', '0361111111', 1),
(3, 'NhungNg', '12345', 'nhung@gmail.com', 'Nguyễn Thị Nhung', '2006-07-17', '036111111', 0),
(4, 'Kou', '12345', 'kou@gmail.com', 'Nguyễn Minh Hiếu', '2006-04-17', '036111111', 1),
(5, 'NhiNN', '12345', 'nhi@gmail.com', 'Trần Thị Yến Nhi', '2006-01-01', '0361111111', 0),
(9, 'admin', 'ad', 'ad@gmail.com', 'ad', '2000-01-01', '0987654321', 1);

-- --------------------------------------------------------

--
-- Table structure for table `phim`
--

CREATE TABLE `phim` (
  `id` int NOT NULL,
  `ten_phim` varchar(255) NOT NULL,
  `quoc_gia` varchar(100) DEFAULT NULL,
  `dao_dien_id` int NOT NULL,
  `nam` datetime DEFAULT NULL,
  `do_tuoi` int DEFAULT NULL,
  `mo_ta` varchar(255) DEFAULT NULL,
  `trailer` varchar(255) DEFAULT NULL,
  `poster_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `phim`
--

INSERT INTO `phim` (`id`, `ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `mo_ta`, `trailer`, `poster_url`) VALUES
(1, 'Mai', 'Việt Nam', 1, '2024-01-01 00:00:00', 18, 'Câu chuyện tình cảm giữa Mai và Dương', NULL, NULL),
(2, 'Mắt Biếc', 'Việt Nam', 2, '2019-01-01 00:00:00', 16, 'Chuyện tình đơn phương của Ngạn dành cho Hà Lan', NULL, NULL),
(3, 'Bố Già', 'Việt Nam', 3, '2021-01-01 00:00:00', 16, 'Câu chuyện gia đình về tình cha con và những mâu thuẫn thế hệ', NULL, NULL),
(4, 'Inception', 'Mỹ', 4, '2010-01-01 00:00:00', 13, 'Một nhóm chuyên gia xâm nhập vào giấc mơ để đánh cắp ý tưởng', NULL, NULL),
(5, 'Interstellar', 'Mỹ', 5, '2014-01-01 00:00:00', 13, 'Hành trình tìm kiếm hành tinh mới để cứu nhân loại', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `phim_dien_vien`
--

CREATE TABLE `phim_dien_vien` (
  `id` int NOT NULL,
  `phim_id` int NOT NULL,
  `dien_vien_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `phim_dien_vien`
--

INSERT INTO `phim_dien_vien` (`id`, `phim_id`, `dien_vien_id`) VALUES
(16, 1, 2),
(17, 1, 3),
(18, 1, 5),
(19, 2, 3),
(20, 2, 5),
(21, 3, 2),
(22, 3, 5),
(23, 4, 1),
(24, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phim_the_loai`
--

CREATE TABLE `phim_the_loai` (
  `id` int NOT NULL,
  `phim_id` int NOT NULL,
  `the_loai_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `phim_the_loai`
--

INSERT INTO `phim_the_loai` (`id`, `phim_id`, `the_loai_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `the_loai`
--

CREATE TABLE `the_loai` (
  `id` int NOT NULL,
  `ten_the_loai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `the_loai`
--

INSERT INTO `the_loai` (`id`, `ten_the_loai`) VALUES
(1, 'Hài hước'),
(2, 'Kinh dị'),
(3, 'Hành động'),
(4, 'Hài'),
(5, 'Tình cảm'),
(6, 'Viễn tưởng'),
(7, 'Hoạt hình'),
(8, 'Trinh thám');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dao_dien`
--
ALTER TABLE `dao_dien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dien_vien`
--
ALTER TABLE `dien_vien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phim_dien_vien`
--
ALTER TABLE `phim_dien_vien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phim_the_loai`
--
ALTER TABLE `phim_the_loai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `the_loai`
--
ALTER TABLE `the_loai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dao_dien`
--
ALTER TABLE `dao_dien`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dien_vien`
--
ALTER TABLE `dien_vien`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `phim`
--
ALTER TABLE `phim`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `phim_dien_vien`
--
ALTER TABLE `phim_dien_vien`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `phim_the_loai`
--
ALTER TABLE `phim_the_loai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `the_loai`
--
ALTER TABLE `the_loai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
