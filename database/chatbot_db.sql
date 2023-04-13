-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 08, 2022 lúc 06:19 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `chatbot_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `chude` text NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `hoten`, `email`, `chude`, `noidung`) VALUES
(1, 'Trương Thiết Long', 'ttlong315@gmail.com', 'ABC', 'abcderiafknvsljvlsd'),
(2, 'asfsv', 'thietlongpro@gmail.com', 'sdf', 'kaljlaglbfdnbkdfnbkdhfglkjlajg;lasm'),
(3, 'asfsv', 'thietlongpro@gmail.com', 'sdf', 'kaljlaglbfdnbkdfnbkdhfglkjlajg;lasm'),
(4, 'Trần Văn B', 'b@gmail.com', 'Đánh Giá Trang Web', 'Tuyệt vời, dễ sử dụng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `frequent_asks`
--

CREATE TABLE `frequent_asks` (
  `id` int(30) NOT NULL,
  `question_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `frequent_asks`
--

INSERT INTO `frequent_asks` (`id`, `question_id`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 4),
(12, 1),
(13, 6),
(14, 7),
(15, 7),
(16, 1),
(17, 7),
(18, 8),
(19, 7),
(20, 7),
(21, 7),
(22, 6),
(23, 7),
(24, 7),
(25, 7),
(26, 7),
(27, 7),
(28, 7),
(29, 9),
(30, 1),
(31, 8),
(32, 2),
(33, 7),
(34, 14),
(35, 9),
(36, 9),
(37, 9),
(38, 1),
(39, 4),
(40, 6),
(41, 7),
(42, 7),
(43, 9),
(44, 17),
(45, 18),
(46, 16),
(47, 17),
(48, 9),
(49, 9),
(50, 9),
(51, 17),
(52, 12),
(53, 22),
(54, 27),
(55, 17),
(56, 30),
(57, 21),
(58, 27),
(59, 21),
(60, 21),
(61, 17),
(62, 21),
(63, 21),
(64, 17),
(65, 30),
(66, 17),
(67, 21),
(68, 41),
(69, 42),
(70, 42),
(71, 45),
(72, 42),
(73, 17),
(74, 48),
(75, 17),
(76, 17),
(77, 48),
(78, 42),
(79, 21),
(80, 21),
(81, 43),
(82, 17),
(83, 22),
(84, 42),
(85, 52),
(86, 21),
(87, 21),
(88, 21),
(89, 21),
(90, 21),
(91, 22),
(92, 17),
(93, 48),
(94, 42),
(95, 48),
(96, 42);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `title`, `mota`, `file`) VALUES
(55, 'TKB', 'HK2 2022-2023', 'tkb hk2 năm 4.xlsx'),
(56, 'NL08', 'HK2 2022-2023', 'NLN_Nhóm8_TruongThietLong.docx'),
(57, 'Thông Báo ', '......', 'a.docx'),
(58, 'Báo Cáo', 'CT449', 'BÁO CÁO CT449.docx'),
(59, 'ĐKHP', 'Kế Hoạch Giảng Dạy Và Đăng Ký Học Phần', 'CV3470_KH_giang_day_va_dang_ky_HP_HK2_2022_2023.pdf'),
(60, 'Mở KHHT', 'Mở lại website lập KHHT đợt 2', 'CV2718_DHCT_DT_31_08_2022_TB_Mo_WEBSITE_DieuChinh_KHHT_Dot2_2022.pdf'),
(61, 'CTĐT_KHMT', 'CTĐT Ngành Khoa Học Máy Tính K45', '2_02_7480101_Khoa hoc may tinh.pdf'),
(62, '73/NQ-HĐT', 'Nghị quyết về việc thành lập Trường Công nghệ thông tin và truyền thông thuộc Trường ĐHCT', '73-NQHT_ve_viec_thanh_lap_Truong_CNTT.pdf'),
(63, 'Mẫu Luận Văn', 'Định dạng LVTN cho sinh viên', 'LVDH-TY-2020.pdf');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `id` int(30) NOT NULL,
  `question` text DEFAULT NULL,
  `response_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `questions`
--

INSERT INTO `questions` (`id`, `question`, `response_id`) VALUES
(16, 'Đại học Cần Thơ?', 9),
(17, 'CTU?', 9),
(21, 'hi', 13),
(22, 'hello', 13),
(23, 'xin chào', 13),
(24, 'chào', 13),
(25, 'bye', 14),
(26, 'tạm biệt', 14),
(27, 'bái bai', 14),
(29, 'bai', 15),
(30, '1 học kỳ được đăng ký tối đa bao nhiêu tín chỉ', 16),
(31, 'một học kỳ có thể đăng ký tối đa bao nhiêu tín chỉ', 17),
(33, '1 học kỳ học được bao nhiêu tín chỉ', 19),
(34, '1 học kỳ đăng ký được tối đa bao nhiêu tín chỉ', 20),
(35, '1 học kỳ học được bao nhiêu tín chỉ', 21),
(36, '1 học kỳ học được bao nhiêu tín chỉ', 22),
(39, 'một học kỳ có thể đăng ký tối đa bao nhiêu tín chỉ', 25),
(40, 'một học kỳ có thể đăng ký tối đa bao nhiêu tín chỉ', 26),
(42, 'cảnh báo học vụ', 27),
(43, 'khi nào bị cảnh báo học vụ', 27),
(44, 'Các trường hợp bị cảnh báo học vụ', 28),
(45, 'Mỗi năm học có bao nhiêu học kì', 29),
(47, '1 học kỳ học được bao nhiêu tín chỉ', 31),
(48, 'học bổng', 32),
(49, 'điều kiện để nhận học bổng', 32),
(50, 'làm sao để nhận học bổng', 32),
(51, '1 học kỳ đăng ký được tối đa bao nhiêu tín chỉ', 33),
(52, 'Mei', 34);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `responses`
--

CREATE TABLE `responses` (
  `id` int(30) NOT NULL,
  `response_message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `responses`
--

INSERT INTO `responses` (`id`, `response_message`) VALUES
(9, 'Trường Đại học Cần Thơ là một trường đại học đa ngành lớn có vị thế trụ cột trong hệ thống giáo dục bậc cao của Việt Nam, được Chính phủ xếp vào nhóm trường đại học trọng điểm quốc gia của cả nước. Trường là một trong ba trường đại học tại Việt Nam đạt chuẩn đào tạo quốc tế của Hệ thống đại học ASEAN.'),
(12, 'Xin chào, tôi có thể giúp gì cho bạn? :)'),
(13, 'Xin chào, tôi có thể giúp gì cho bạn?'),
(14, 'Hẹn gặp lại!'),
(15, 'Hẹn gặp lại!'),
(16, '25 TC'),
(17, '25TC'),
(18, '25TC'),
(19, '25TC'),
(20, '25TC'),
(21, '25TC'),
(22, '25TC'),
(23, 'b'),
(24, 'b'),
(25, '25TC'),
(26, '25TC'),
(27, 'Có ĐTBCHK đạt dưới 0,80 đối với học kỳ đầu của khóa học, dưới 1,00 đối với các học kỳ tiếp theo.\r\nKhông đăng ký học trong HK chính mà không được sự cho phép của Hiệu trưởng.'),
(28, 'Có ĐTBCHK đạt dưới 0,80 đối với học kỳ đầu của khóa học, dưới 1,00 đối với các học kỳ tiếp theo hoặc Không đăng ký học trong HK chính mà không được sự cho phép của Hiệu trưởng.'),
(29, 'Có 3 học kì là học kì 1, học kì 2 và học kì 3 (học kì hè).'),
(30, 'b'),
(31, '25'),
(32, 'Trường Đại học Cần Thơ cấp học bổng hỗ trợ cho sinh viên có kết quả học tập và rèn luyện đạt học bổng khuyến khích từ loại giỏi trở lên.'),
(33, '25TC'),
(34, '<3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `Sex` varchar(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`id`, `name`, `phone`, `address`, `Sex`, `username`, `password`) VALUES
(1, 'Trần Tuyết Mỹ', '0987654321', 'Ô Môn', 'Nữ', 'meimey113', '11032002'),
(3, 'Trương Thiết Long', '0941636509', 'Hậu Giang', 'Nam', 'ttlong', '20022001'),
(4, 'Nguyễn Văn A', '0987657512', 'Hà Nội', 'Nam', 'vana', '1'),
(5, 'Trần Văn B', '0784234567', 'Ô Môn', 'Nam', 'vanb', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'CTU Academic Advisor Support'),
(4, 'intro', 'Xin chào Bạn! '),
(6, 'short_name', 'Academic Advisor Support'),
(10, 'no_result', 'Xin lỗi. Tôi không thể hiểu câu hỏi của bạn. Vui lòng viết lại câu hỏi của bạn và đảm bảo rằng nó có liên quan đến trang web này. Cảm ơn bạn :)'),
(11, 'logo', 'uploads/1669157460_1669157220_logo-ctu-inkythuatso-01-09-14-23-02.jpg'),
(12, 'bot_avatar', 'uploads/bot_avatar.png'),
(13, 'user_avatar', 'uploads/user_avatar.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `unanswered`
--

CREATE TABLE `unanswered` (
  `id` int(30) NOT NULL,
  `question` text DEFAULT NULL,
  `no_asks` int(30) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `unanswered`
--

INSERT INTO `unanswered` (`id`, `question`, `no_asks`) VALUES
(2, 'what can you do ?', 6),
(5, 'asdasd', 6),
(6, 'asdaaa', 6),
(7, 'asd', 6),
(11, 'test', 6),
(12, 'TM', 2),
(15, 'một học kỳ có thể đăng ký tối đa bao nhiêu tín chỉ', 1),
(16, '1 học kỳ học được bao nhiêu tín chỉ', 1),
(17, '1 học kỳ đăng ký tối đa bao nhiêu tín chỉ', 1),
(18, '1 học kỳ đăng ký được tối đa bao nhiêu tín chỉ', 1),
(19, 'mỗi năm học có mấy học kì', 1),
(20, 'asfcv', 1),
(21, 'hi\n', 0),
(22, '.', 0),
(23, 'tôi là long', 0),
(24, 'diem', 0),
(25, 'afdf', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `avatar`, `last_login`, `date_added`, `date_updated`) VALUES
(1, 'Truong', 'Thiet Long', 'admin', '0192023a7bbd73250516f069df18b500', 'uploads/1669158540_bot_avatar1.jpg', NULL, '2022-10-20 14:02:37', '2022-12-01 16:24:02');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `frequent_asks`
--
ALTER TABLE `frequent_asks`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `unanswered`
--
ALTER TABLE `unanswered`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `frequent_asks`
--
ALTER TABLE `frequent_asks`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `responses`
--
ALTER TABLE `responses`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `unanswered`
--
ALTER TABLE `unanswered`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
