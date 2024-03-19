-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2024 at 04:22 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `anhmota`
--

CREATE TABLE `anhmota` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `Id_phim` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `anhmota`
--

INSERT INTO `anhmota` (`id`, `name`, `Id_phim`) VALUES
(29, 'Love At First Sight 2.jpg', 13),
(32, 'Love At First Sight 1.jpg', 13),
(33, 'Through My Window 3.jpg', 14),
(35, 'Through My Window 1.jpg', 14),
(78, 'the nun 5.png', 17),
(79, 'thu nun 6.jpg', 17),
(84, 'bongde3.jpg', 26),
(85, 'bongde1.jpg', 26),
(86, 'bongde2.jpg', 26),
(87, 'dan choi 2.jpg', 25),
(88, 'dan choi 1.jpg', 25),
(89, 'dan choi 3.jpg', 25),
(90, 'muon gạp anh 1 (3).jpg', 24),
(91, 'muon gạp anh 1 (2).jpg', 24),
(92, 'muon gạp anh 1 (1).jpg', 24),
(95, 'con tau chien thang (1).jpg', 23),
(96, 'con tau chien thang (2).jpg', 23),
(97, 'lưa dao gap lua deu.jpeg', 16),
(98, 'lưa dao gap lua deu (1).jpg', 16),
(99, 'lưa dao gap lua deu (2).jpg', 16),
(101, 'bo gia (1).jpg', 15),
(102, 'bo gia (2).jpg', 15),
(103, 'ma quy am 1.jpg', 12),
(104, 'ma quy am.png', 12),
(105, 'tieng vong tu dia nguc (1).jpg', 11),
(106, 'tieng vong tu dia nguc (2).jpg', 11),
(107, 'nha ba nu (1).jpg', 10),
(108, 'nha ba nu (2).jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int NOT NULL,
  `noidung` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `idphim` int NOT NULL,
  `ngaybinhluan` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `user`, `idphim`, `ngaybinhluan`) VALUES
(44, 'tuyệt', '10', 12, '05:00:06pm 27/11/2023'),
(45, 'rhsnj', 'huong', 12, '05:01:49pm 27/11/2023'),
(46, 'abc', 'huong', 26, '05:07:04pm 27/11/2023'),
(47, 'sdsdsf', 'nguyet', 26, '07:07:15am 04/12/2023');

-- --------------------------------------------------------

--
-- Table structure for table `bong_nuoc`
--

CREATE TABLE `bong_nuoc` (
  `id` int NOT NULL,
  `ten_combo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gia` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bong_nuoc`
--

INSERT INTO `bong_nuoc` (`id`, `ten_combo`, `hinh_anh`, `gia`) VALUES
(1, 'Combo 1 bỏng + 1 nước', '3.jpg', '99000'),
(2, 'Combo 2 nước + 1 bỏng', '2.jpg', '139000'),
(3, 'Combo 2 bỏng + 2 nước', '1.jpg', '169000'),
(4, 'Bỏng', '4.jpg', '49000');

-- --------------------------------------------------------

--
-- Table structure for table `ghe`
--

CREATE TABLE `ghe` (
  `id` int NOT NULL,
  `ten_ghe` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `trang_thai` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `gia` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ghe`
--

INSERT INTO `ghe` (`id`, `ten_ghe`, `trang_thai`, `gia`) VALUES
(1, 'A1', 'trong', '80000'),
(2, 'A2', 'da_dat', '80000'),
(3, 'A3', 'trong', '80000'),
(4, 'A4', 'trong', '80000'),
(5, 'A5', 'trong', '80000'),
(6, 'B1', 'trong', '80000'),
(7, 'B2', 'trong', '80000'),
(8, 'B3', 'trong', '80000'),
(9, 'B4', 'trong', '80000'),
(10, 'B5', 'trong', '80000'),
(11, 'C1', 'trong', '50000'),
(12, 'C2', 'trong', '50000'),
(13, 'C3', 'da_dat', '50000'),
(14, 'C4', 'trong', '50000'),
(15, 'C5', 'trong', '50000'),
(16, 'D1', 'trong', '50000'),
(17, 'D2', 'trong', '50000'),
(18, 'D3', 'trong', '50000'),
(19, 'D4', 'trong', '50000'),
(20, 'D5', 'trong', '50000'),
(21, 'E1', 'trong', '50000'),
(22, 'E2', 'da_dat', '50000'),
(23, 'E3', 'trong', '50000'),
(24, 'E4', 'trong', '50000'),
(25, 'E5', 'trong', '50000'),
(26, 'F1', 'trong', '50000'),
(27, 'F2', 'trong', '50000'),
(28, 'F3', 'trong', '50000'),
(29, 'F4', 'trong', '50000'),
(30, 'F5', 'trong', '50000'),
(31, 'G1', 'trong', '50000'),
(32, 'G2', 'trong', '50000'),
(33, 'G3', 'trong', '50000'),
(34, 'G4', 'da_dat', '50000'),
(35, 'G5', 'trong', '50000'),
(36, 'H1', 'trong', '50000'),
(37, 'H2', 'trong', '50000'),
(38, 'H3', 'trong', '50000'),
(39, 'H4', 'trong', '50000'),
(40, 'H5', 'trong', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `khung_gio_chieu`
--

CREATE TABLE `khung_gio_chieu` (
  `id` int NOT NULL,
  `gio_chieu` time NOT NULL,
  `id_lichchieu` int NOT NULL,
  `id_phong` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khung_gio_chieu`
--

INSERT INTO `khung_gio_chieu` (`id`, `gio_chieu`, `id_lichchieu`, `id_phong`) VALUES
(1, '14:00:00', 11, 2),
(2, '14:00:00', 13, 3),
(4, '14:00:00', 10, 1),
(5, '14:00:00', 9, 2),
(6, '14:00:00', 8, 2),
(7, '14:00:00', 15, 2),
(8, '14:00:00', 12, 3),
(9, '14:00:00', 14, 3),
(10, '14:00:00', 16, 6),
(11, '14:00:00', 17, 1),
(12, '14:00:00', 18, 1),
(13, '14:00:00', 19, 2),
(14, '14:00:00', 20, 6),
(15, '14:00:00', 21, 3),
(16, '14:00:00', 22, 3),
(17, '14:00:00', 23, 1),
(18, '14:00:00', 26, 3),
(21, '14:00:00', 33, 2),
(22, '14:00:00', 34, 6),
(23, '14:00:00', 35, 1),
(29, '14:00:00', 36, 2),
(31, '14:00:00', 37, 6),
(32, '14:00:00', 39, 3),
(33, '14:00:00', 25, 3),
(34, '14:00:00', 40, 2);

-- --------------------------------------------------------

--
-- Table structure for table `lich_chieu`
--

CREATE TABLE `lich_chieu` (
  `id` int NOT NULL,
  `idphim` int NOT NULL,
  `ngay_chieu` date NOT NULL,
  `trang_thai` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lich_chieu`
--

INSERT INTO `lich_chieu` (`id`, `idphim`, `ngay_chieu`, `trang_thai`) VALUES
(8, 8, '2024-02-18', 0),
(9, 16, '2024-02-18', 1),
(10, 10, '2024-02-18', 0),
(11, 6, '2024-02-18', 1),
(12, 12, '2024-02-18', 0),
(13, 25, '2024-02-18', 1),
(14, 23, '2024-02-18', 0),
(15, 24, '2024-02-18', 1),
(16, 16, '2024-02-18', 0),
(17, 17, '2024-02-18', 0),
(18, 9, '2024-02-18', 1),
(19, 10, '2024-02-18', 1),
(20, 11, '2024-02-18', 0),
(21, 12, '2024-02-18', 1),
(22, 13, '2024-02-18', 1),
(23, 14, '2024-02-18', 1),
(25, 14, '2024-02-18', 0),
(26, 26, '2024-02-18', 1),
(34, 34, '2024-02-18', 0),
(36, 25, '2024-02-18', 0),
(38, 38, '2024-02-18', 0),
(39, 15, '2024-02-18', 0),
(40, 7, '2024-02-18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `phim`
--

CREATE TABLE `phim` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `traller` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mota` text COLLATE utf8mb4_general_ci NOT NULL,
  `thoi_luong` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `idtl` int NOT NULL,
  `ngaychieu` date NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phim`
--

INSERT INTO `phim` (`id`, `name`, `traller`, `avatar`, `mota`, `thoi_luong`, `idtl`, `ngaychieu`, `status`) VALUES
(6, 'Người vợ cuối cùng ', 'nguoivocuoicung.mp4', 'nguoivocuoicung.jpg', 'NGƯỜI VỢ CUỐI CÙNG bao gồm 5 câu chuyện kinh dị: Ding-dong Challenge: Xoay quanh 3 người bạn Bora, Haeyul và Youngbi. Mỗi người đều có một mong muốn riêng và quyết định tham gia vào một cuộc thi nguy hiểm, chấp nhận thử thách thực hiện những vũ đạo trên m', '90', 3, '2023-10-11', '0'),
(7, 'Cuộc chiến Vô cực ', 'cuocchienvocuc.mp4', 'Avengers-Infinity_War-Official-Poster.jpg', 'Avengers: Cuộc chiến vô cực (tựa gốc tiếng Anh: Avengers: Infinity War) là một bộ phim điện ảnh đề tài siêu anh hùng của Mỹ năm 2018 dựa trên các nhân vật của Marvel Comics. Phim do Marvel Studios sản xuất và Walt Disney Studios Motion Pictures chịu trách', '80', 4, '2023-12-10', '1'),
(8, 'Người nhện ', 'spiderman.mp4', 'nguoinhen.jpg', 'Spider-Man: Across the Spider-Verse là bộ phim Người Nhện được đánh giá cao nhất trong 20 năm qua. Danh tính bí mật của Người Nhện là Peter Benjamin Parker, một học sinh trung học tuổi teen và một đứa trẻ mồ côi được nuôi dưỡng bởi Dì May và Chú Ben của a', '120', 4, '2021-04-10', '1'),
(9, 'Moon fall', 'moonfall.mp4', 'superman.jpg', 'Bộ phim bắt đầu với việc tìm cách cứu nhân loại khỏi thảm họa “trăng rơi” với Jocinda (Halle Berry đóng) - Giám đốc NASA trong buồng lái của một tàu không gian cũ kỹ cùng phi hành gia Brian Harper (Patrick Wilson) và chuyên gia vũ trụ nghiệp dư Houseman (John Bradley). Khán giả nhìn thấy các địa điểm quen thuộc trên màn ảnh rộng, ngay cả khi chúng bị xóa mờ như Nhà Trắng, tòa nhà Empire State… bị tàn phá nặng nề.\r\n\r\nHouseman tin rằng Mặt trăng là một “siêu cấu trúc”, khối cầu rỗng được xây dựng cho một số mục đích mà bộ não của con người có thể tưởng tượng. Đạo diễn tiếp tục khắc họa tình trạng lộn xộn có thể xảy ra sau thảm họa nếu Mặt trăng thực sự thoát khỏi quỹ đạo: thủy triều dâng, trọng lực thay đổi và một thứ gọi là “sự chênh lệch khí quyển”…', '112', 4, '2020-12-01', '0'),
(10, 'Nhà bà nữ', 'nhabanu.mp4', 'nhabanu1.jpg', 'Bộ phim xoay quanh gia đình ba thế hệ của bà Ngọc Nữ (do Lê Giang thủ vai), một gia đình làm nghề bán bánh canh cua trong một khu chung cư cũ do ông Liêm (do NSND Việt Anh thủ vai) quản lý. Bà Ngọc Nữ có hai đứa con gái là Ngọc Như (do Khả Như thủ vai) và Ngọc Nhi (do Huỳnh Uyển Ân thủ vai). Ngọc Ngà (do NSND Ngọc Giàu thủ vai), mẹ của bà Ngọc Nữ cũng sống chung gia đình. Do có mâu thuẫn với chồng, cả hai ly hôn và chồng bà rời bỏ gia đình, bà Ngọc Nữ đã một mình nuôi lớn hai đứa con nên bà có mối thù cực kỳ lớn đối với những người đàn ông. Khi đứa con gái lớn của bà có chồng là Phú Nhuận (do Trấn Thành thủ vai) đã khiến cho bà Ngọc Nữ vô cùng khó chịu. Chính vì vậy mà bà luôn cố gắng bảo vệ cho đứa con gái út của mình là Ngọc Nhi tránh xa \"cánh mày râu\" nhằm hy vọng đứa con gái không bị tổn thương giống như mình.\r\n\r\nNgọc Nhi lớn lên, cô bé có ước muốn được làm đồ gốm nhưng bà Ngọc Nữ lại không coi trọng ngành nghề này nên đã bắt con gái phải học Ngân hàng theo ngành nghề mà bà chọn, còn không thì ở nhà phụ giúp bán bánh canh cua. Không cãi lời, Nhi đã quyết định đi theo con đường mà mẹ đã lựa chọn. Đến tuổi trưởng thành, Nhi bắt đầu đi chơi theo bè bạn và gặp được John (do Song Luân thủ vai) qua lời giới thiệu của hai người bạn là Lan (do Phương Lan thủ vai) và Quỳnh Lý (do Lý Hạo Mạnh Quỳnh thủ vai). John là một anh chàng Việt kiều Mỹ cũng trong độ tuổi của Nhi, và là con trong một gia đình doanh nhân giàu có (do NSƯT Công Ninh – ba John và Ngân Quỳnh – mẹ John, thủ vai). Cả hai đã gặp và phải lòng nhau nhưng đều bị hai bên gia đình ngăn cấm. Ngọc Nhi đã thông đồng với Phú Nhuận và bà ngoại là Ngọc Ngà để được đi chơi với John trong một thời gian dài. Tuy nhiên, đến một ngày sự việc đã bị phơi bày và Ngọc Nhi đã mang thai.', '122', 2, '2023-12-01', '0'),
(11, 'Tiếng vọng từ địa ngục', 'tiengvongtudianguc.mp4', 'tiengvong.jpg', 'Là một bộ phim kinh dị khai thác những góc tối trong tâm lý con người, “Tiếng vọng từ địa ngục” đem đến những nỗi sợ hoàn toàn khác biệt so với các bộ phim cùng thể loại. Đây là một tác phẩm kinh dị có nội dung không đi theo lối mòn thông thường. Bộ phim xoay quanh Grace – một cô gái trẻ vừa trải qua cú sốc tình cảm khi bị hôn phu của mình phản bội. Cô quyết định trở về nhà thăm chị gái Catherine sau nhiều năm xa cách, để rồi từ đó phải đối mặt với hàng loạt bí mật gia đình đen tối đến không ngờ.Nhiều năm về trước, mẹ của Grace và Catherine tự vẫn khi cả hai còn rất nhỏ. Bà bị mắc chứng tâm thần phân liệt hoang tưởng, và chị cả Catherine không may cũng mắc phải căn bệnh này. Chính căn bệnh tâm lý quái gở đó đã khiến Catherine không thể giành quyền nuôi con sau khi chia tay chồng. Grace thường hay bắt gặp chị mình bật dậy giữa đêm và thường xuyên lảm nhảm những lời vô nghĩa. Hơn thế nữa, Catherine còn rất hay thực hiện những hành động kỳ lạ khiến Grace vô cùng hoảng sợ.', '135', 1, '2022-06-02', '0'),
(12, 'Ma quỷ ám ', 'thenun.mp4', 'quyam.jpg', 'Bộ phim lấy bối cảnh vào năm 1952 tại România, hai nữ tu Công giáo Rôma sống tại Tu viện Cârța đi vào một đường hầm tăm tối, họ cầm theo một chiếc chìa khóa với mục đích lấy lại một di tích Thiên Chúa giáo cổ đại, họ đã bị tấn công bởi một thế lực vô hình. Nữ tu Victoria may mắn sống sót đã cầm theo chiếc chìa khóa và chạy trốn khỏi kẻ tấn công, đó là một con ác quỷ xuất hiện với hình dạng một nữ tu, sau đó sơ Victoria đã tự treo cổ mình khi trong tay vẫn còn cầm chặt chiếc chìa khóa. Thi thể của cô được phát hiện bởi Frenchie, một người Pháp gốc Canada sinh sống tại România, anh là một dân làng chở vật tư cho các nữ tu tại tu viện Cârța.\r\n\r\nVatican muốn tìm hiểu về cái chết của sơ Victoria vì tự tử là một tội lớn, họ đã triệu tập Cha Burke đến Roma, nơi họ yêu cầu ông đi điều tra cái chết của sơ Victoria nhưng thực chất là họ muốn điều tra về các thế lực siêu nhiên, họ muốn cha Burke đi cùng với sơ Irene đến România để điều tra tình hình. Trong khi sơ Irene đang dạy trẻ em về mối quan hệ giữa tôn giáo và khoa học trong một trường học, viện trưởng của cô đã thông báo với cô rằng cha Burke đã đến để yêu cầu cô đi cùng đến România.', '12', 1, '2023-12-01', '0'),
(13, 'Love at First Sight', 'loveatfirstsight.mp4', 'download (2).jpg', 'Love at First Sight xoay quanh mối tình của Hadley (Haley Lu Richardson) và Oliver (Ben Hardy). Khi Hadley trễ chuyến bay, cô vô tình gặp Oliver và được anh cho mượn sạc điện thoại. Trong thời gian ở sân bay và ngồi cạnh nhau trên máy bay, cả hai nảy sinh', '122', 3, '2023-12-01', '0'),
(14, 'Through My Window', 'throughmywindow.mp4', 'throughmywindow.jpg', 'Through My Window, bộ phim là bản chuyển thể bằng tiếng Tây Ban Nha từ tiểu thuyết dành cho tuổi teen của tác giả người Venezuela Ariana Godoy. Tiểu thuyết ban đầu được tạo trên trang web nổi tiếng Wattpad, đây cũng là nguồn của bộ tiểu thuyết và bộ phim ', '150', 3, '2023-12-01', '0'),
(15, 'Bố già', 'bogia.mp4', 'download (3).jpg', 'Bố già là một bộ phim điện ảnh hài chính kịch của Việt Nam năm 2021 do Trấn Thành và Vũ Ngọc Đãng đồng đạo diễn. Bộ phim do Thảo Nguyễn đảm nhiệm vai trò sản xuất, dựa trên phần kịch bản do Trấn Thành, Kalei An Nhi và Aquay chấp bút. Bộ phim Bố già kể xoay quanh một xóm nghèo có bộ tứ nhiều chuyện Giàu - Sang - Phú - Quý, nhưng nhân vật chính là ông Ba Sang (do Trấn Thành thủ vai) và cậu con trai cứng đầu của mình tên là Quắn (do Tuấn Trần thủ vai).\r\nMặc dù Ba Sang và cậu con trai Quắn hết mực thương yêu nhau, nhưng lại xảy ra nhiều bất đồng trong quan điểm, không thể thấu hiểu nhau vì chênh lệch thế hệ. Mạch phim dẫn dắt đưa bạn đến những câu chuyện cảm động rơi nước mắt giữa hai ba con, đảm bảo là một bộ phim hấp dẫn không thể bỏ qua.', '140', 2, '2022-12-01', '1'),
(16, 'Lừa Đểu Gặp Lừa Đảo ', 'luadeugapluadao.mp4', 'luadao.jpg', 'Lừa Đểu Gặp Lừa Đảo xoay quanh câu chuyện của Ina (Baifern Pimchanok) - một nữ nhân viên ngân hàng xinh đẹp, thông minh, hoạt bát nhưng lại nghèo đến thảm thương. Hẳn là nhiều khán giả sẽ phải thắc mắc một chị gái có công việc ổn định lại thêm nghề tay trái là YouTuber, đã thế rất thông minh và xinh đẹp, tại sao lại nghèo? Vâng, là bởi chị mê trai, đem cả gia tài của mẹ đi thế chấp ngân hàng để lấy tiền cho bồ trẻ - Petch (Bank Thiti) mà nào có ngờ, Petch là một \"phi công\" chuyên đào mỏ, chỉ cần lấy được tiền từ tay chị đẹp là sẽ cao chạy xa bay. Kết quả, Ina nghèo thảm thương, lo cho mình không xong còn phải nói dối gia đình về Petch. Giữa thời điểm bi kịch nhất cuộc đời, Ina vô tình biết Tower (Nadech Kugimiya) - một trùm lửa đảo khi anh có ý định lừa tiền cô nhưng lại bị cô nắm thóp, kết quả Tower bất đắc dĩ phải tham gia vào một phi vụ, giúp Ina lấy lại tiền từ Petch.', '110', 2, '2023-12-01', '0'),
(17, 'The nun', 'thenun.mp4', 'thenun1.jpg', 'Bộ phim lấy bối cảnh vào năm 1952 tại România, hai nữ tu Công giáo Rôma sống tại Tu viện Cârța đi vào một đường hầm tăm tối, họ cầm theo một chiếc chìa khóa với mục đích lấy lại một di tích Thiên Chúa giáo cổ đại, họ đã bị tấn công bởi một thế lực vô hình. Nữ tu Victoria may mắn sống sót đã cầm theo chiếc chìa khóa và chạy trốn khỏi kẻ tấn công, đó là một con ác quỷ xuất hiện với hình dạng một nữ tu, sau đó sơ Victoria đã tự treo cổ mình khi trong tay vẫn còn cầm chặt chiếc chìa khóa. Thi thể của cô được phát hiện bởi Frenchie, một người Pháp gốc Canada sinh sống tại România, anh là một dân làng chở vật tư cho các nữ tu tại tu viện Cârța.\r\nVatican muốn tìm hiểu về cái chết của sơ Victoria vì tự tử là một tội lớn, họ đã triệu tập Cha Burke đến Roma, nơi họ yêu cầu ông đi điều tra cái chết của sơ Victoria nhưng thực chất là họ muốn điều tra về các thế lực siêu nhiên, họ muốn cha Burke đi cùng với sơ Irene đến România để điều tra tình hình. Trong khi sơ Irene đang dạy trẻ em về mối quan hệ giữa tôn giáo và khoa học trong một trường học, viện trưởng của cô đã thông báo với cô rằng cha Burke đã đến để yêu cầu cô đi cùng đến România.', '120', 1, '2023-10-12', '0'),
(23, 'Con tàu chiến thắng', 'contauchienthang.mp4', 'cont.jpg', 'Con tàu Chiến Thắng (tên gốc Tiếng Hàn: 승리호, còn được biết đến với tên tiếng Anh: Space Sweepers) là phim điện ảnh không gian của Hàn Quốc năm 2021 do Jo Sung-hee đạo diễn. Bộ phim do Yoon In-beom và Kim Soo-jin đảm nhiệm vai trò sản xuất, dựa trên phần kịch bản do Yoon Seung-min, Yoo-kang Seo-ae và Jo Sung-hee chấp bút. Tác phẩm do Bidangil Pictures và Dexter Studios chịu trách nhiệm sản xuất, với sự tham gia diễn xuất của Song Joong-ki, Kim Tae-ri, Jin Seon-kyu và Yoo Hae-jin.[2] Được coi là bom tấn lấy bối cảnh ngoài không gian đầu tiên của Hàn Quốc, Con tàu Chiến Thắng lấy bối cảnh năm 2092, với nội dung xoay quanh cuộc phiêu lưu của bốn kẻ lạc loài trên tàu Chiến Thắng sau khi vô tình phát hiện ra một bé gái mang trong mình vũ khí hủy diệt hàng loạt.', '120', 4, '2023-09-04', '1'),
(24, 'Muốn gặp anh', 'muongapanh.mp4', 'muon-gap-anh-4.jpg', 'Tác phẩm dựa trên loạt phim Đài Loan Someday or Oneday (2019) từng gây tiếng vang. Vài năm sau khi hẹn hò, đôi tình nhân phải yêu xa lúc Hoàng Vũ Huyên chuyển công tác đến Thượng Hải. Mỗi ngày, cô đều nhắn tin và facetime với người yêu.\r\n\r\nMột ngày nọ, Hoàng Vũ Huyên nhận ra Lý Tử Duy đã qua đời khi cứu sống cô bảy năm trước, thời gian qua cô chỉ sống trong ảo mộng. Vết thương do vụ tai nạn khiến cô không thể nhớ chuyện gì đã xảy ra hôm đó. Trong quá trình tìm kiếm sự thật, Hoàng Vũ Huyên nhận được một cuốn băng cassette có thể đưa cô trở về quá khứ với thân phận Trần Vận Như - bạn học cấp ba của Lý Tử Duy có ngoại hình giống cô. Hoàng Vũ Huyên quyết định dùng cơ hội đó nhằm cố gắng cứu mạng Lý Tử Duy.', '130', 3, '2022-12-04', '0'),
(25, 'Dân chơi không sợ con rơi', 'danchoikhongsoconroi - Trim.mp4', 'danchoi.jpg', 'Dân Chơi Không Sợ Con Rơi là bộ phim hài chiếu rạp được sản xuất bởi bộ đôi đình đám Thu Trang - Tiến Luật. Bộ phim được giới phê bình đánh giá như bản thi ca tôn vinh giá trị tình cảm gia đình, đặc biệt là tình cha con. Theo chân bộ phim, chúng ta sẽ chứng kiến sự “trưởng thành” của một dân chơi lãng tử miền Tây (do Tiến Luật thủ vai) đột nhiên trở thành người cha bất đắc dĩ. Bộ phim khắc họa rất rõ nét và chân thật đời sống người dân tại miền Tây Nam Bộ với những hình ảnh gần gũi, quen thuộc và đậm chất chân quê Việt Nam.', '90', 2, '2022-11-24', '0'),
(26, 'Bóng đè', 'bongde.mp4', 'bongde.jpg', 'Bóng Đè kể về việc ba cha con Thành (Quang Tuấn), Linh (Lâm Thanh Mỹ) và Yến (Mai Cát Vi) trở về sống tại một vùng quê sau khi gia đình trải qua một biến cố lớn là vợ của Thành, tức mẹ của Linh và Yến qua đời. Họ không ngờ rằng chính quyết định này lại đẩy họ đến với chuỗi ngày ám ảnh nhất cuộc đời. Mỗi khi ba không có mặt, Linh và Yến luôn gặp phải những hiện tượng kì lạ, căn nhà im ắng trở nên ồn ào với sự xuất hiện của những vị khách bí ẩn. Không những thế, cả hai chị em liên tục gặp phải hiện tượng bóng đè kể cả ban ngày khiến cả hai vô cùng hoảng sợ. Bác sĩ tâm lý Hạnh (Diệu Nhi) được mời đến để giúp đỡ hai chị em, nhưng chính cô cũng bị cuốn vào những bí ẩn kinh hoàng xảy ra trong ngôi nhà này. ', '110', 1, '2023-01-24', '1');

-- --------------------------------------------------------

--
-- Table structure for table `phong_chieu`
--

CREATE TABLE `phong_chieu` (
  `id` int NOT NULL,
  `ten_phong` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phong_chieu`
--

INSERT INTO `phong_chieu` (`id`, `ten_phong`) VALUES
(1, 'Phòng 1'),
(2, 'Phòng 2'),
(3, 'Phòng 3'),
(6, 'Phòng 4');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pass` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sdt` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `vai_tro` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `dia_chi`, `sdt`, `vai_tro`) VALUES
(1, 'nguyet11', '123456', 'nguyet1110@gmail.com', '75 Hồ Tùng Mậu', '0392839712', 0),
(2, 'minh', '123456', 'dinhnguyet11102004@gmail.com', '', '0', 1),
(7, 'admin', '123456', 'admin@gmail.com', '', '', 1),
(10, 'huong', '111111', 'vuhuong@gmail.com', '155 cầu giấy', '0358785784', 0),
(12, 'nguyet', '123456', 'dinhnguyet11102004@gmail.com', '191 Hoàng Mai', '0398535275', 0),
(13, 'admin2', '123456', 'admin2@gmail.com', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vnpay`
--

CREATE TABLE `tbl_vnpay` (
  `id` int NOT NULL,
  `vnp_Amount` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_BankCode` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_BankTranNo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_CardType` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_OrderInfo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_PayDate` int NOT NULL,
  `vnp_TmnCode` int NOT NULL,
  `vnp_TransactionNo` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `the_loai`
--

CREATE TABLE `the_loai` (
  `id` int NOT NULL,
  `nametl` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `the_loai`
--

INSERT INTO `the_loai` (`id`, `nametl`) VALUES
(1, 'Kinh dị'),
(2, 'Hài hước'),
(3, 'Tình cảm'),
(4, 'Khoa học viễn tưởng ');

-- --------------------------------------------------------

--
-- Table structure for table `ve`
--

CREATE TABLE `ve` (
  `id` int NOT NULL,
  `iduser` int NOT NULL,
  `idkhunggio` int NOT NULL,
  `idphong` int NOT NULL,
  `idcombo` int NOT NULL,
  `ghe` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ngaydat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tongtien` int NOT NULL,
  `trangthai` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ve`
--

INSERT INTO `ve` (`id`, `iduser`, `idkhunggio`, `idphong`, `idcombo`, `ghe`, `ngaydat`, `tongtien`, `trangthai`) VALUES
(91, 12, 18, 3, 4, 'A1', '09:19 / 04-12-2023', 129000, 'Đã thanh toán'),
(109, 12, 2, 3, 4, 'C3', '21:12 / 09-02-2024', 99000, 'Đã thanh toán'),
(110, 12, 29, 2, 4, 'E2, G4', '21:31 / 09-02-2024', 149000, 'Đã thanh toán');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anhmota`
--
ALTER TABLE `anhmota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bong_nuoc`
--
ALTER TABLE `bong_nuoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ghe`
--
ALTER TABLE `ghe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khung_gio_chieu`
--
ALTER TABLE `khung_gio_chieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lich_chieu`
--
ALTER TABLE `lich_chieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phong_chieu`
--
ALTER TABLE `phong_chieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `the_loai`
--
ALTER TABLE `the_loai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anhmota`
--
ALTER TABLE `anhmota`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `bong_nuoc`
--
ALTER TABLE `bong_nuoc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ghe`
--
ALTER TABLE `ghe`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `khung_gio_chieu`
--
ALTER TABLE `khung_gio_chieu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `lich_chieu`
--
ALTER TABLE `lich_chieu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `phim`
--
ALTER TABLE `phim`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `phong_chieu`
--
ALTER TABLE `phong_chieu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `the_loai`
--
ALTER TABLE `the_loai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ve`
--
ALTER TABLE `ve`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
