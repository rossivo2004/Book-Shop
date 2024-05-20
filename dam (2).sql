-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2023 lúc 02:40 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(3) NOT NULL,
  `iduser` int(3) DEFAULT NULL,
  `nguoidat_ten` varchar(50) NOT NULL,
  `nguoidat_email` varchar(50) NOT NULL,
  `nguoidat_sdt` varchar(50) NOT NULL,
  `nguoidat_diachi` varchar(500) NOT NULL,
  `ngay_dat` date NOT NULL DEFAULT current_timestamp(),
  `total` int(9) NOT NULL,
  `ship` int(6) NOT NULL DEFAULT 0,
  `voucher` int(6) NOT NULL DEFAULT 0,
  `tongthanhtoan` int(9) NOT NULL,
  `pttt` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `nguoidat_ten`, `nguoidat_email`, `nguoidat_sdt`, `nguoidat_diachi`, `ngay_dat`, `total`, `ship`, `voucher`, `tongthanhtoan`, `pttt`, `status`) VALUES
(103, 57, 'huy', 'votronghuy1203@gmail.com', '213', '12123', '2023-12-01', 130000, 30000, 0, 160000, 'vidientu', 2),
(104, 57, 'huy', 'votronghuy1203@gmail.com', '12123', '12123', '2023-12-01', 81000, 30000, 1, 102900, 'vidientu', 2),
(105, 57, 'huy', 'votronghuy1203@gmail.com', '12123', '12123', '2023-12-01', 56700, 30000, 0, 86700, 'tienmat', 2),
(106, 57, 'huy', 'votronghuy1203@gmail.com', '12123', '12123', '2023-12-01', 135000, 30000, 1, 151500, 'vidientu', 2),
(107, 57, 'huy', 'votronghuy1203@gmail.com', '12123', '12123', '2023-12-01', 81000, 30000, 0, 111000, 'vidientu', 2),
(108, 59, '1123', 'votronghuy1200003@gmail.com', '321321', '132', '2023-12-01', 130000, 30000, 0, 160000, 'vidientu', 2),
(109, NULL, '1123', 'votronghuy1203444@gmail.com', '012', '12332', '2023-12-01', 56700, 30000, 0, 86700, 'vidientu', 1),
(110, 57, 'huy', 'votronghuy1203@gmail.com', '12123', '12123', '2023-12-01', 130000, 30000, 1, 147000, 'vidientu', 2),
(111, 57, 'huy', 'votronghuy1203@gmail.com', '12123', '12123', '2023-12-06', 56700, 30000, 0, 86700, 'tienmat', 1),
(112, 74, 'Huy', 'votronghuy1204@gmail.com', '123', '123', '2023-12-06', 130000, 30000, 0, 160000, 'tienmat', 1),
(113, NULL, 'huy1111', 'votronghuy1200@gmail.com', '123', '123', '2023-12-06', 56700, 30000, 0, 86700, 'tienmat', 1),
(114, 59, '1123', 'votronghuy1200@gmail.com', '132', '132', '2023-12-06', 81000, 30000, 1, 102900, 'tienmat', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(3) NOT NULL,
  `idpro` int(3) NOT NULL,
  `iduser` int(3) NOT NULL,
  `noidung` text NOT NULL,
  `ngaybl` varchar(200) NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `idpro`, `iduser`, `noidung`, `ngaybl`, `trangthai`) VALUES
(32, 77, 57, 'hello', ' 01/12/2023', 0),
(33, 77, 57, 'nice bro', ' 01/12/2023', 0),
(34, 76, 57, '123123123', ' 01/12/2023', 0),
(35, 76, 57, 'balbalablablabla', ' 01/12/2023', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(3) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tenblog` varchar(100) NOT NULL,
  `ngayvietblog` date NOT NULL,
  `mota` text NOT NULL,
  `noidung` text NOT NULL,
  `img` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `id_user`, `tenblog`, `ngayvietblog`, `mota`, `noidung`, `img`, `status`) VALUES
(1, 57, '123', '2023-11-28', '123', '123', '2 test.png', 1),
(2, 57, 'Test123', '2023-11-28', '123', '123', 'war-devil-chainsaw-man-anime-4k-wallpaper-uhdpaper.com-108@1@j.jpg', 1),
(5, 57, 'tesst', '2023-11-28', '123', '123', 'tải xuống.jpg', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(3) NOT NULL,
  `idpro` int(3) NOT NULL,
  `id_user` int(11) NOT NULL,
  `soluong` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_bill`
--

CREATE TABLE `detail_bill` (
  `id_dtb` int(3) NOT NULL,
  `id_pro` int(3) NOT NULL,
  `id_bill` int(3) NOT NULL,
  `soluong` int(3) NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_bill`
--

INSERT INTO `detail_bill` (`id_dtb`, `id_pro`, `id_bill`, `soluong`, `gia`) VALUES
(31, 77, 103, 1, 130000),
(32, 75, 104, 1, 81000),
(33, 79, 105, 1, 56700),
(34, 73, 106, 1, 135000),
(35, 75, 107, 1, 81000),
(36, 77, 108, 1, 130000),
(37, 79, 109, 1, 56700),
(38, 77, 110, 1, 130000),
(39, 79, 111, 1, 56700),
(40, 77, 112, 1, 130000),
(41, 79, 113, 1, 56700),
(42, 75, 114, 1, 81000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisach`
--

CREATE TABLE `loaisach` (
  `id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `mota` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisach`
--

INSERT INTO `loaisach` (`id`, `name`, `img`, `mota`) VALUES
(1, 'Tiểu thuyết', 'tieuthuyet.jpg', 'Tiểu thuyết là một dạng văn học dài, kể một câu chuyện qua việc phát triển nhân vật và cốt truyện. Thường tập trung vào chi tiết tâm lý và mối quan hệ giữa nhân vật, tiểu thuyết mang lại cho độc giả những trải nghiệm đa dạng từ giải trí đến suy ngẫm về cuộc sống.'),
(2, 'Văn học', 'vanhoc.jpg', 'Sách văn học là những tác phẩm nghệ thuật sáng tạo, tập trung vào phát triển nhân vật và cốt truyện. Chúng mang đến trải nghiệm đọc độc đáo, không chỉ giải trí mà còn làm nảy mắt tâm hồn và mở rộng hiểu biết về con người và thế giới xung quanh.'),
(3, 'Giáo dục', 'giaoduc.jpg', 'Sách giáo dục là các tác phẩm văn bản chuyên sâu, thiết kế để truyền đạt kiến thức và kỹ năng. Chúng đóng vai trò quan trọng trong quá trình học tập và phát triển cá nhân, cung cấp nguồn thông tin đa dạng từ cơ bản đến nâng cao.\r\n\r\n\r\n\r\n\r\n\r\n'),
(4, 'Giã tưởng', 'giatuong.jpg', 'Sách giã tưởng là những tác phẩm văn học mô tả các thế giới hư cấu, thường chứa phép thuật, siêu nhiên hoặc công nghệ tiên tiến. Chúng tạo ra trải nghiệm đọc độc đáo và thú vị, mở rộng tầm tưởng tượng của độc giả.'),
(5, 'Kĩ năng sống', 'kinangsong.jpg', 'Sách kỹ năng sống tập trung vào việc phát triển kỹ năng cần thiết cho cuộc sống hàng ngày, cung cấp chiến lược giải quyết vấn đề và khuyến khích sự phát triển cá nhân. Đây là nguồn thông tin hữu ích để xây dựng tự tin và thành công trong mọi khía cạnh cuộc sống.'),
(6, 'Truyện tranh', 'manga.jpg', 'Truyện tranh là nghệ thuật kể chuyện bằng hình ảnh và từ ngữ, thường được sắp xếp theo trang hoặc ô vuông. Đa dạng về thể loại, truyện tranh là một hình thức giải trí hấp dẫn và phổ biến, thu hút độc giả ở mọi độ tuổi.\r\n\r\n\r\n\r\n\r\n\r\n'),
(7, 'Tâm lý học', 'tamlyhoc.jpg', 'Sách tâm lý học là những tác phẩm chuyên sâu khám phá về tâm lý con người, cung cấp thông tin, lý thuyết, và chiến lược để nâng cao sức khỏe tâm thần, hiểu rõ bản thân và xây dựng cuộc sống tinh thần cân bằng.'),
(8, 'Tôn Giáo', 'tongiao.jpg', 'Sách tôn giáo là sách tập trung vào nghiên cứu về giáo lý, tín ngưỡng, và thực hành tôn giáo, cung cấp thông tin và hiểu biết về đời sống tâm linh và đạo đức.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nxb`
--

CREATE TABLE `nxb` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nxb`
--

INSERT INTO `nxb` (`id`, `name`, `img`) VALUES
(1, 'Nhã Nam', 'brand3.png'),
(2, 'Kim Đồng', 'brand2.png'),
(3, 'Tổng Hợp', 'brand4.png'),
(4, 'Trẻ', 'brand1.png'),
(5, 'Dân Trí', 'brand5.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `id` int(3) NOT NULL,
  `name` varchar(200) NOT NULL,
  `idloaisach` int(3) NOT NULL,
  `price1` int(30) NOT NULL,
  `img` varchar(200) NOT NULL,
  `mota` varchar(1000) NOT NULL,
  `moi` int(11) NOT NULL DEFAULT 0,
  `giamgia` int(11) NOT NULL DEFAULT 0,
  `view` int(5) NOT NULL DEFAULT 0,
  `idtacgia` int(3) NOT NULL,
  `id_nxb` int(3) NOT NULL,
  `namxb` int(4) NOT NULL,
  `ngonngu` varchar(30) NOT NULL,
  `sotrang` int(4) NOT NULL,
  `hinhthuc` varchar(10) NOT NULL,
  `motangan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`id`, `name`, `idloaisach`, `price1`, `img`, `mota`, `moi`, `giamgia`, `view`, `idtacgia`, `id_nxb`, `namxb`, `ngonngu`, `sotrang`, `hinhthuc`, `motangan`) VALUES
(1, 'Có Hai Con Mèo Ngồi Bên Cửa Sổ (Tái Bản 2023)', 2, 90000, '2conmeongoibencuaso.jpg', 'CÓ HAI CON MÈO NGỒI BÊN CỬA SỔ là tác phẩm đầu tiên của nhà văn Nguyễn Nhật Ánh viết theo thể loại đồng thoại. Đặc biệt hơn nữa là viết về tình bạn của hai loài vốn là thù địch của nhau mèo và chuột. Đó là tình bạn giữa mèo Gấu và chuột Tí Hon.\r\n\r\nĐể biết tại sao mèo Gấu lại chơi thân với chuột Tí Hon, thì mời bạn hãy mở sách ra.\r\n\r\nCuốn truyện mỏng mảnh vừa phải, hình vẽ của họa sĩ Hoàng Tường sinh động đến từng nét nũng nịu hay kiêu căng của nàng mèo người yêu mèo Gấu, câu chuyện thì hấp dẫn duyên dáng điểm những bài thơ tình lãng mạn nao lòng song đọc to lên thì khiến cười hinh hích…\r\n\r\nBạn hãy đọc nhé, để thấy, Nguyễn Nhật Ánh đã viết truyện đồng thoại theo cái cách của riêng mình độc đáo như thế nào.\r\n', 0, 0, 0, 1, 4, 2023, 'Tiếng Việt', 208, 'Bìa Mềm', ''),
(2, '100 Kỹ Năng Sinh Tồn', 5, 69300, '100kynangsinhton.jpg', 'Bạn sẽ làm gì nếu như một ngày bị mắc kẹt giữa vùng lãnh thổ có dịch bệnh hoành hành, lạc ở nơi hoang dã, bị móc túi khi đi du lịch ở đất nước xa lạ, hay phải thoát ngay khỏi một vụ hỏa hoạn ở nhà cao tầng… ? Clint Emerson – một cựu Đặc vụ SEAL, lực lượng tác chiến đặc biệt của Hải quân Hoa Kỳ – muốn bạn có được sự chuẩn bị tốt nhất trong cuốn sách 100 kỹ năng sinh tồn này.\r\n\r\nRõ ràng, chi tiết và được trình bày dễ hiểu, cuốn sách này phác thảo chi tiết nhiều chiến lược giúp bảo vệ bạn và những người bạn yêu thương, dạy bạn cách suy nghĩ và hành động như một thành viên của lực lượng quân đội tinh nhuệ Hoa Kỳ. 100 kỹ năng sinh tồn thực sự là cuốn cẩm nang vô giá. Bởi lẽ, khi nguy hiểm xảy ra, bạn chẳng có nhiều thời gian cho những chỉ dẫn phức tạp đâu.', 0, 0, 0, 2, 4, 2020, 'Tiếng Việt', 272, 'Bìa Mềm', ''),
(3, '600 Động Từ Bất Quy Tắc Trong Tiếng Anh', 3, 60000, '600-dong-tu-bat-quy-tac-trong-tieng-anh.jpg', 'Đối với người học tiếng Anh, việc ghi nhớ và biết cách sử dụng các động từ bất quy tắc cũng rất quan trọng.\r\nĐặc biệt, trong việc thi cử thì chuyện nhầm lẫn, sai sót sẽ khiến điểm số của bạn không được tốt. Thông thường, động từ bất quy tắc chỉ được giới thiệu ở phần phụ lục của một số cuốn sách tham khảo tiếng Anh. Điều đó sẽ gặp rất nhiều bất tiện cho bạn học khi muốn tra một từ nào đó.\r\nĐể khắc phục những hạn chế trên, chúng tôi xin giới thiệu với các bạn cuốn \"600 Động từ bất quy tắc tiếng Anh\".\r\nTrong bảng động từ bất quy tắc (được sắp xếp theo thứ tự ABC) sẽ có 4 cột: nguyên thể, quá khứ, quá khứ phân từ, và nghĩa tiếng Việt. Trong cuốn sách này bạn sẽ tìm thấy một số dạng bài tập với mục đích vừa cung cấp cho các bạn một số cấu trúc câu quan trọng cho bạn tham khảo vừa giúp các bạn nhớ được hình thức bất quy tắc của động từ một cách nhanh nhất.\r\nc của động từ một cách nhanh nhất.', 0, 0, 0, 3, 4, 2017, 'Tiếng Việt & Tiếng Anh', 204, 'Bìa Mềm', ''),
(4, '999 Lá Thư Gửi Cho Chính Mình - Những Lá Thư Ấn Tượng Nhất (Phiên Bản Song Ngữ Trung - Việt)', 2, 70000, '999lathu.jpg', 'Bạn có đang cảm thấy bị “quá tải” với cuộc sống hiện tại không?\r\n\r\nHay là đang loay hoay chữa lành giữa những bộn bề không thể gác lại, chỉ trực chờ để cuốn mình đi?\r\n\r\nĐã bao lâu rồi bạn chưa ngồi xuống viết những dòng nhật ký, đã bao lâu rồi bạn chưa tự gửi cho mình một lá thư viết ra những điều bạn mong muốn, viết ra những ước mơ còn dang dở, viết ra những khó khăn bạn đã hoặc đang phải trải qua và cũng không quên động viên, cổ vũ chính mình của hiện tại, nhắn nhủ đến chính mình của tương lai…\r\n\r\nTheo dòng chảy hối hả của cuộc sống hiện nay – khi mỗi một ngày đều trôi qua nhanh chóng nhưng chẳng đọng lại được điều gì thì việc viết lách hay nhắn nhủ những lời tâm tình cho nhau càng trở thành một điều xa xỉ, dường như chẳng mấy ai nguyện làm. Nhưng không sao hết, đã có “999 lá thư gửi cho chính mình” – với Phiên bản chọn lọc, tổng hợp lại những lá thư hay nhất, những lá thư ý nghĩa nhất, chất chứa nội hàm, khả năng chữa lành cao sẽ thay những lá thư tay nói lên những điều bạn muốn giã', 0, 0, 0, 4, 4, 2023, 'Tiếng Việt & Tiếng Trung', 164, 'Bìa Mềm', ''),
(5, '999 Lá Thư Gửi Cho Chính Mình - Những Lá Thư Ấn Tượng Nhất - Tập 2 (Phiên Bản Song Ngữ Trung-Việt)\r\n\r\n', 2, 89000, '999lathu2.jpg', 'Cuộc sống đầy cạnh tranh và đố kị, dường như cả xã hội đều kỳ vọng bạn trở thành một người thật hoàn hảo, thật có ích để có thể cống hiến càng nhiều càng tốt. Nhưng bạn biết không, bạn chẳng cần phải kiệt sức để biến mình trở thành một người vẹn toàn trong mắt bất cứ ai, chỉ cần bản thân bạn vẫn cố gắng và kiên trì nỗ lực không ngừng nghỉ để trở thành người mà chính bạn mong muốn là đủ. Bạn cũng chẳng cần phải làm hài lòng tất cả thế giới này, chẳng cần tất cả mọi người yêu quý, chỉ mong những người thân của bạn thấu hiểu, tin tưởng và ủng hộ, chỉ cần bản thân bạn tự yêu thương lấy chính mình vậy thôi.\r\n\r\nĐể tiếp sức cho bạn trước hành trình đầy những trông gai và khó khăn ấy, ấn phẩm “999 lá thư gửi cho chính mình” – Những lá thư ấn tượng nhất (Phiên bản song ngữ Trung – Việt) sẽ tiếp nối sứ mệnh của phần 1 – mang theo những thông điệp chữa lành và khích lệ bên trong để cổ vũ và đồng hành cùng bạn qua những cột mốc, cùng bạn ngày một trở thành người tuyệt vời hơn.\r\n\r\nPhần 2 cũng hứa h', 0, 0, 0, 4, 4, 2023, 'Tiếng Việt', 152, 'Bìa Mềm', ''),
(6, '999 Lá Thư Gửi Cho Chính Mình - Mong Bạn Trở Thành Phiên Bản Hạnh Phúc Nhất (Tập 2) - Tái Bản 2021', 2, 109000, '999lathu3.jpg', '\"999 lá thư gửi cho chính mình” là một tác phẩm đặc biệt đầy cảm hứng đến từ tác giả văn học mạng nổi tiếng Miêu Công Tử, mang một màu sắc riêng biệt qua những lời thư nhỏ nhắn nhủ đến người đọc về giá trị cuộc sống, tình yêu, tuổi trẻ, tương lai… v.v..\r\n\r\nTiếp nối phần 1 giúp bạn trở nên hoàn hảo, cuốn sách phần 2: “999 lá thư gửi cho chính mình” – Mong bạn trở thành phiên bản hạnh phúc nhất, không chỉ một lần nữa khẳng định và nhắc nhở bạn rằng việc nỗ lực quan trọng đến mức nào mà bên cạnh đó còn đề cao những yếu tố không thể thiếu trong cuộc sống để bạn có thể trở nên hạnh phúc hơn, giúp bạn mỗi ngày như một hoa hướng dương hướng về phía mặt trời, hấp thụ trọn vẹn năng lượng tích cực, vui vẻ mỉm cười, mọi đau buồn sẽ bốc hơi tan biến.\r\n', 0, 0, 0, 4, 4, 2022, 'Tiếng Việt', 200, 'Bìa Mềm', ''),
(7, '999 Lá Thư Gửi Cho Chính Mình - Mong Bạn Trở Thành Phiên Bản Hoàn Hảo Nhất (Tập 1) - Tái Bản 2021\r\n\r\n', 2, 109000, '999lathu4.jpg', '“999 lá thư gửi cho chính mình” là một tác phẩm đặc biệt đầy cảm hứng đến từ tác giả văn học mạng nổi tiếng Miêu Công Tử, mang một màu sắc riêng biệt qua những lời thư nhỏ nhắn nhủ đến người đọc về giá trị cuộc sống, tình yêu, tuổi trẻ, tương lai… v.v.. đã làm lay động trái tim của hàng vạn độc giả trẻ. Cầm trên tay cuốn sách “999 lá thư gửi cho chính mình” – bạn sẽ hiểu rằng: tuổi trẻ của chúng ta dù có mong manh đến đâu thì cũng sẽ thành công vượt qua mọi khó khăn một cách mạnh mẽ ngoài sức tưởng tượng. Một ngày nào đó, bạn sẽ cảm nhận được hạnh phúc, tự tin của chính bản thân và học được cách mỉm cười trước những nỗi đau của quá khứ. Bạn sẽ biết cách nói lời cảm ơn với những ai đã rời bỏ bạn, hiểu ra rằng họ không phải người thích hợp để cùng đồng hành với bạn trên đoạn đường chông gai đi tới tương lai. Đôi lúc bạn có thể yếu đuối mỏi mệt rơi nước mắt, thế nhưng khi bất chợt nhìn lại, bạn sẽ thấy thì ra mình đã rất mạnh mẽ, dũng cảm đi hết cả một quãng đường dài.\r\n\r\n“999 lá thư gửi ', 0, 0, 0, 4, 4, 2021, 'Tiếng Việt', 232, 'Bìa Mềm', ''),
(8, '999 Lá Thư Gửi Cho Chính Mình - Song Ngữ Trung-Việt Có Phiên Âm (Toàn Tập)', 2, 314000, '999lathu5.jpg', 'Ra mắt lần đầu năm 2018 với sứ mệnh mang đến cảm hứng sống tích cực và nguồn năng lượng tươi mát đến các độc giả, “999 lá thư gửi cho chính mình” của tác giả Miêu Công Tử đã nhận được sự chào đón vô cùng nhiệt tình bới những lá thư mang thông điệp và ý nghĩa hết sức sâu sắc, tiếp sức giúp mọi người ngày một nỗ lực hơn để có thể vững bước trên con đường thành công và khẳng định bản thân.\r\n\r\nGiờ đây, nhằm đáp ứng nhu cầu của những độc giả có niềm yêu thích ngôn ngữ Trung Quốc, Vanvietbooks hân hạnh ra mắt “999 lá thư gửi cho chính mình” – Phiên bản Song ngữ toàn tập với đầy đủ 999 lá thư chỉ trong 1 cuốn sách duy nhất! Được lấy cảm hứng từ chiếc tủ sách – tượng trưng cho nguồn kiến thức dồi dào, mới lạ đang chờ đón bạn khai phá - từng trang sách chính là từng ô tủ chứa đựng những lá thư thân quen không chỉ mang tính truyền cảm hứng sống mà còn “đính kèm” cả Hán tự và phiên âm được trình bày khoa học, hợp lý và đẹp mắt, là một công cụ rất tốt để giúp bạn đọc rèn luyện và nâng cao khả năng', 0, 0, 0, 4, 4, 2023, 'Tiếng Việt', 568, 'Bìa Mềm', ''),
(9, '5.000 Từ Vựng Tiếng Anh Thông Dụng Nhất (Tái Bản 2023)', 3, 106000, '5000tutienganhthongdung.jpg', 'Để có thể học giỏi tiếng Anh, các kỹ năng giao tiếp thành thạo thì vấn đề đầu tiên và quan trọng nhất chính là từ vựng. Nếu thiếu vốn từ vựng cơ bản sẽ dẫn đến việc bạn không thể nghe nói được tiếng Anh. “Bí từ” trong giao tiếp và chẳng biết viết gì khi viết văn bản tiếng Anh. Trau dồi và nâng cao vốn từ vựng là một phần không thể thiếu của người học tiếng Anh.\r\n\r\nBạn muốn giỏi tiếng Anh nhưng không biết học bao nhiêu từ vựng là đủ?\r\n\r\nTâm lý của người học ngoại ngữ nói chung và người học tiếng Anh nói riêng thì bao giờ cũng muốn bản thân nhớ càng nhiều từ vựng càng tốt. Thế nhưng, liệu bộ não của chúng ta có dung nạp và ghi nhớ khoảng 750.000 từ vựng??? Đó là một điều KHÔNG TƯỞNG!!! Và thực ra nó cũng không cần thiết. Vậy khi bơi giữa 750.000 từ vựng ấy, bạn nên giữ lại cho bản thân bao nhiêu, bao nhiêu là đủ để NGHE-NÓI-ĐỌC-VIẾT tốt? Quan trọng hơn là bạn nên giữ lại cho mình những từ vựng như thế nào?\r\n\r\nBạn quá chán nản với những cuốn từ điển tiếng Anh dày cộp\r\n\r\nNhững cuốn từ điển', 0, 0, 0, 3, 4, 2023, 'Song Ngữ Anh - Việt', 232, 'Bìa Mềm', ''),
(10, 'Bản Đồ Tâm Thức', 8, 152000, 'bandotamthuc.jpg', '“Cuốn sách là một bộ sưu tập những ý tưởng sâu sắc từ một trong những nhà tư tưởng tâm linh vĩ đại của thế hệ chúng ta - David R. Hawkins.”\r\n\r\nBản đồ tâm thức là tuyển tập 10 bài giảng cốt lõi của Tiến sĩ David R. Hawkins về thế giới tâm linh, những nguyên tắc cơ bản cần biết trên con đường phát triển tâm linh, bao gồm cả quy trình hiệu chỉnh Bản đồ tâm thức của ông. Qua cuốn sách này, độc giả sẽ được khám phá tầng nhận thức, kiểm soát và hiểu biết cao hơn, từ đó sẵn sàng tách ra khỏi Bản ngã và tiến vào một hành trình giác ngộ bổ ích, hoàn thiện hơn. Sinh ra được là con người đã là một điều may mắn, nhưng may mắn hơn là người đó được nghe về giác ngộ, và hiếm có hơn cả là khi sinh ra đã được nghe về giác ngộ và sau đó vẫn tiếp tục theo đuổi nó.\r\n\r\nCuốn sách “BẢN ĐỒ TÂM THỨC” sẽ giúp chúng ta:\r\n\r\n- Nhận thức và hiểu biết về các tầng ý thức, chân lý tâm linh, cũng như sự phát triển tâm linh của con người\r\n\r\n- Áp dụng quy tắc hiệu chỉnh dựa trên Bản đồ Ý thức của Tiến sĩ David R.Hawkins\r', 0, 0, 0, 5, 4, 2023, 'Tiếng Việt', 332, 'Bìa Mềm', ''),
(11, 'Bản Đồ Về Ý Thức - Giải Mã Trường Năng Lượng, Khai Phá Sức Mạnh Phi Thường Trong Con Người Bạn', 8, 178000, 'bandoveythuc.jpg', 'Đã bao giờ bạn nghĩ rằng bệnh tật hay những suy giảm năng lượng trong cơ thể con người chính là do những suy nghĩ tiêu cực gây ra? Liệu rằng có dẫn chứng khoa học nào chứng minh cho mối liên hệ này. Có những ngày quá khó khăn, bạn đã tự nhủ rằng: “Không bao giờ muốn một ngày nào như thế này nữa!”. Thế nhưng luôn có những điều đáng hy vọng dù trong hoàn cảnh tuyệt vọng nhất và tấm bản đồ ý thức sẽ giúp cho cho bạn biết một ngày tồi tệ không phải là dấu chấm hết.\r\nCuốn sách truyền cảm hứng cho mọi người sống yêu thương hơn, trắc ẩn hơn, mở ra con đường thoát khỏi khổ đau. Dù bắt đầu đọc từ đầu hay cuối thì bạn vẫn sẽ nhận thấy cuốn sách này xoay quanh một điểm trung tâm: Chúng ta thay đổi thế giới không phải bằng những lời ta nói hay việc ta làm mà chúng ta thay đổi thế giới bằng chính con người chúng ta trở thành. Hành tinh này đầy những người cố gắng “thay đổi thế giới” nhưng chỉ thực hiện điều đó ở cấp độ triệu chứng, không ở gốc rễ vấn đề. Kiểu lực này chỉ tạo ra phản lực và chúng ta', 0, 0, 0, 5, 5, 2023, 'Tiếng Việt', 348, 'Bìa Mềm', ''),
(12, 'Bản Ngã - Thấu Hiểu Và Tan Biến (Tái Bản 2023)', 8, 126000, 'bannga.jpg', 'Tôi là ai? Câu hỏi lớn nhất của triết học cũng là băn khoăn lớn nhất của mỗi người trên hành trình khám phá bản thân và ý nghĩa cuộc sống. Tiến sĩ David R. Hawkins so sánh “thế giới của bản ngã giống như một ngôi nhà làm bằng kính, nơi bản ngã lang thang một cách vô định và mơ hồ, đuổi theo những hình ảnh phản chiếu qua các tấm gương”. Thế giới trong suốt ấy giam cầm và trói buộc tâm hồn chúng ta như một mê cung không lối thoát.\r\nCuốn sách“Bản Ngã – Thấu hiểu và tan biến” là hành trình đi tìm cái tôi chân thực, phá vỡ mọi ảo ảnh và ngụy biện sai lệch để ánh sáng thực tại và hạnh phúc chiếu rọi, như “Mặt trời luôn chiếu sáng, chỉ cần chúng ta loại bỏ những đám mây”.\r\nCuốn sách tập hợp những thông điệp truyền cảm hướng từ các tác phẩm nổi tiếng của Tiến sĩ David R. Hawkins, từ đó người đọc được nhắc nhở về bản chất ảo tưởng của cái tôi cá nhân (đó là nỗ lực xác định bản ngã/tâm trí) và những con đường trực tiếp để vượt thoát những cạm bẫy của bản ngã / tâm trí.\r\nVới những đoạn trích được', 0, 0, 0, 5, 5, 2023, 'Tiếng Việt', 230, 'Bìa Mềm', ''),
(13, 'Bức Tranh Kỳ Quái', 4, 148000, 'bia_buc-tranh-ky-quai.jpg', 'Bức tranh cô gái đứng trong gió được đăng tải trên một trang blog nọ, lại có Bức tranh bị nhòe và bóng mờ bao phủ căn hộ do một đứa bé bị mất tích vẽ, còn cả Bức tranh phong cảnh đồi núi với những nét vẽ run rẩy...\r\n\r\nNhững bức tranh vẽ tưởng chừng như vô thưởng vô phạt, cũng chẳng hề liên quan gì đến nhau... Tất cả tổng cộng 9 bức tranh vẽ tay ẩn chứa những “câu đố bí ẩn” chờ đợi được giải mã.\r\n\r\nRốt cuộc những người vẽ ra chúng đã muốn truyền tải thông điệp gì?\r\n\r\nSự thật chấn động nào được chôn giấu phía sau 9 bức vẽ kỳ lạ ấy?\r\n\r\nSẽ ra sao khi những mảnh ghép bí ẩn rời rạc nọ bỗng dưng được xâu chuỗi lại và liên kết với nhau để mở ra một cái kết chẳng thể ngờ tới?', 0, 0, 0, 6, 5, 2023, 'Tiếng Việt', 388, 'Bìa Mềm', ''),
(14, 'Bước Chậm Lại Giữa Thế Gian Vội Vã (Tái Bản 2018)', 7, 68000, 'buoc_cham_lai_giua_the_gian_voi_va.jpg', 'Chen vai thích cánh để có một chỗ bám trên xe buýt giờ đi làm, nhích từng xentimét bánh xe trên đường lúc tan sở, quay cuồng với thi cử và tiến độ công việc, lu bù vướng mắc trong những mối quan hệ cả thân lẫn sơ… bạn có luôn cảm thấy thế gian xung quanh mình đang xoay chuyển quá vội vàng?\r\n\r\nNếu có thể, hãy tạm dừng một bước.\r\n\r\nĐể tự hỏi, là do thế gian này vội vàng hay do chính tâm trí bạn đang quá bận rộn? Để cầm cuốn sách nhỏ dung dị mà lắng đọng này lên, chậm rãi lật giở từng trang, thong thả khám phá những điều mà chỉ khi bước chậm lại mới có thể thấu rõ: về các mối quan hệ, về chính bản thân mình, về những trăn trở trước cuộc đời và nhân thế, về bao điều lý trí rất hiểu nhưng trái tim chưa cách nào nghe theo…\r\n\r\nRa mắt lần đầu năm 2012, Bước chậm lại giữa thế gian vội vã của Đại đức Hae Min đã liên tục đứng đầu danh sách best-seller của nhiều trang sách trực tuyến uy tín của Hàn Quốc, trở thành cuốn sách chữa lành cho hàng triệu người trẻ luôn tất bật với nhịp sống hiện đại hối', 0, 0, 0, 7, 1, 2018, 'Tiếng Việt', 254, 'Bìa Mềm', ''),
(15, 'Càng Bình Tĩnh Càng Hạnh Phúc', 1, 97000, 'cangbinhtinhcanghanhphuc.jpg', 'Thông điệp xuyên suốt trong “Càng bình tĩnh Càng hạnh phúc” mà Vãn Tình muốn gửi gắm tới độc giả là:\r\n\r\n“Bảy năm trước tôi sẽ cãi vã với người ta khi phật ý, bảy năm sau tôi tuân thủ câu nói ‘Bận rộn là liều thuốc trị mọi chứng bệnh tâm lý.’\r\n\r\nBảy năm trước tôi luôn chuẩn bị cẩn thận cho mọi ngày lễ, bảy năm sau tôi bận tới mức quên cả bản thân mình chứ đừng nói tới ngày lễ gì.\r\n\r\nBảy năm trước, chú cún nhà tôi qua đời, bảy năm sau, tôi không còn nuôi cún nữa.\r\n\r\nBảy năm đủ để một phụ nữ ngây ngô trở nên chín chắn, ngây thơ trở nên lý trí, và xốc nổi trở nên bình tĩnh ung dung, dần dần tìm thấy ý nghĩa của cuộc đời mình.\r\n\r\nKhông biết bảy năm sau tôi sẽ như thế nào.”\r\n\r\nCòn bạn, bảy năm trước bạn là ai?\r\n\r\nVà bảy năm sau, bạn muốn trở thành một người như thế nào?\r\n\r\nTrích dẫn hay của Vãn Tình trong Càng bình tĩnh Càng hạnh phúc:\r\n\r\n“Phồn hoa tựa gấm, hào quang bốn phương đều có thể từ bỏ, nhưng chân tình đâu dễ gì có được.\r\n\r\nTôi muốn nói với mọi người rằng: ‘Có người yêu thương chúng', 0, 0, 0, 8, 5, 2022, 'Tiếng Việt', 352, 'Bìa Mềm', ''),
(16, 'Cây Chuối Non Đi Giày Xanh', 2, 187000, 'caychuoinon.jpg', '\"Khác với mùa thu rón rén, bao giờ mùa hè cũng về với những bước chân rộn ràng. Cây phượng trước sân trường tôi và cây phượng trước sân chùa Giác Nguyên thi nhau nở đỏ thắm mấy hôm nay. Trên những ngọn cây cao hai bên bờ suối, tiếng ve đã bắt đầu râm ran. Và trên cánh đồng dẫn vô con suối xóm Trong, cỏ khô đi dưới cái nắng như thiêu, rủ nhau chuyển sang màu rơm rạ và phát ra tiếng kêu lạo xạo mỗi khi bánh xe của chú tiểu Khôi lăn qua.\r\n\r\n....\r\n\r\nKhi người ta lớn lên, niềm vui và nỗi buồn cũng lớn lên theo. Trong những giấc mơ của tôi, không có châu chấu chuồn chuồn như những ngày thơ bé. Đã có bão giông theo về trong những đêm gió luồn qua mái lá. Ờ, ngay cả giấc mơ cũng lớn lên đó thôi.\"', 0, 0, 0, 1, 4, 2018, 'Tiếng Việt', 304, 'Bìa Cứng', ''),
(17, 'Chuyện Tâm Lý Trong Phòng Pháp Lý', 7, 115000, 'chuyen-tam-ly-phong-phap-ly.jpg', 'AI CŨNG LÀ NẠN NHÂN TRONG CÂU CHUYỆN CỦA CHÍNH MÌNH!\r\n\r\n- Có thật là “trẻ con không biết gì đâu”, “trẻ em không biết nói dối”?\r\n\r\n- Tại sao người bị bạo lực gia đình không nhanh chóng rời đi?\r\n\r\n- Tại sao người bị bắt nạt thường nghĩ đến tự sát thay vì trả thù?\r\n\r\n-Chuyện gì sẽ xảy đến nếu con người để bản năng động vật lấn át?\r\n\r\nCuốn sách đánh dấu sự trở lại của tác giả “Không phải sói nhưng cũng đừng là cừu” - Luật gia Lê Bảo Ngọc. “Chuyện tâm lý trong phòng pháp lý” không phải cuốn sách tâm lý để thỏa mãn cái tôi của bạn. Cuốn sách là hàng trăm chiếc gương với đủ hình dạng méo tròn để bạn tự đặt câu hỏi về thế giới quan của mình và những người xung quanh. Ai cũng là nạn nhân trong câu chuyện của chính mình. Câu chuyện qua lời kể của “người bị hại” có thể không phải là sự thật như chúng ta từng nghĩ!\r\n\r\n- Chiến thắng ở phiên tòa có thật sự được yên và có cuộc sống hạnh phúc?\r\n\r\n- Thủ phạm nhiều khi lại chính là kẻ đi kiện nạn nhân…\r\n\r\n- Những tên tội phạm nhân danh tình yêu đã thao ', 0, 0, 0, 9, 5, 2023, 'Tiếng Việt', 304, 'Bìa Cứng', ''),
(18, 'Đắc Nhân Tâm (Tái Bản 2021)', 7, 86000, 'dacnhantam.jpg', 'Đắc nhân tâm của Dale Carnegie là quyển sách của mọi thời đại và một hiện tượng đáng kinh ngạc trong ngành xuất bản Hoa Kỳ. Trong suốt nhiều thập kỷ tiếp theo và cho đến tận bây giờ, tác phẩm này vẫn chiếm vị trí số một trong danh mục sách bán chạy nhất và trở thành một sự kiện có một không hai trong lịch sử ngành xuất bản thế giới và được đánh giá là một quyển sách có tầm ảnh hưởng nhất mọi thời đại.\r\n\r\nĐây là cuốn sách độc nhất về thể loại self-help sở hữu một lượng lớn người hâm mộ. Ngoài ra cuốn sách có doanh số bán ra cao nhất được tờ báo The New York Times bình chọn trong nhiều năm. Cuốn sách này không còn là một tác phẩm về nghệ thuật đơn thuần nữa mà là một bước thay đổi lớn trong cuộc sống của mỗi người.\r\n\r\nNhờ có tầm hiểu biết rộng rãi và khả năng ‘ứng xử một cách nghệ thuật trong giao  tiếp’ – Dale Carnegie đã viết ra một quyển sách với góc nhìn độc đáo và mới mẻ trong giao tiếp hàng ngày một cách vô cùng thú vị – Thông qua những mẫu truyện rời rạc nhưng lại đầy lý lẽ thuyết', 0, 0, 0, 10, 3, 2021, 'Tiếng Việt', 320, 'Bìa Cứng', ''),
(19, 'Đá Cuội Hay Kim Cương - Cùng Dale Carnegie Tiến Tới Thành Công', 5, 52000, 'dacuoihaykimcuong.jpg', 'Trước kia có một người vô cùng to khỏe, có thể dễ dàng nhấc được cái đỉnh lớn nặng ngàn cân; chỉ có một thứ anh ta không thể nào nhấc được, chính là bản thân anh ta. Nhưng vị đại lực sĩ này nhất quyết không chịu tin, anh ta tự nắm tóc nhấc mình lên, và sự thật vẫn chứng minh rằng: Bất cứ ai cũng không thể nhấc nổi bản thân mình lên khỏi mặt đất. Rất nhiều người trong chúng ta khi đối diện với cảm xúc phiền não, đau khổ, tiêu cực và u uất, cũng giống như đại lực sĩ kia, chúng ta muốn vứt bỏ chúng đi nhưng tất cả đều tốn công vô ích. Nhớ lại một chút, bạn có hay không những lần được gọi lên trả lời câu hỏi và vô cùng tự tin với câu trả lời của mình? Bạn đã từng có khoảng thời gian mà mọi việc đều diễn ra suôn sẻ?\r\n\r\nTất cả mọi chuyện trong cuộc sống đều tốt đẹp đến thế! Nhưng có thể bạn cũng có những trải nghiệm hoàn toàn trái ngược, mọi việc xảy ra vào ngày hôm đó đều không ổn, bình thường làm dễ như trở bàn tay, nhưng lúc ấy lại xui xẻo hết mức, tất cả trở nên hỗn độn. Hoặc là vừa rồi ', 0, 0, 0, 30, 5, 2018, 'Tiếng Việt', 228, 'Bìa Mềm', ''),
(20, 'Đám Trẻ Ở Đại Dương Đen', 2, 69000, 'damtreodaiduongden.jpg', '“nỗi buồn không rõ hình thù\r\n\r\nta cho nó dáng, ta thu vào lòng\r\n\r\nta ôm mà chẳng đề phòng\r\n\r\nmột ngày nó lớn chất chồng tâm can”\r\n\r\n“kẻ sống muốn đời cạn\r\n\r\nngười chết muốn hồi sinh\r\n\r\ntrần gian bi hài nhỉ?\r\n\r\nta còn muốn bỏ mình?”\r\n\r\nĐám trẻ ở đại dương đen là lời độc thoại và đối thoại của những đứa trẻ ở đại dương đen, nơi từng lớp sóng của nỗi buồn và tuyệt vọng không ngừng cuộn trào, lúc âm ỉ, khi dữ dội. Những đứa trẻ ấy phải vật lộn trong những góc tối tâm lý, với sự u uất đè nén từ tổn thương khi không được sinh ra trong một gia đình toàn vẹn, ấm êm, khi phải mang trên đôi vai non dại những gánh nặng không tưởng.\r\n\r\nSong song đó cũng là quá trình tự chữa lành vô cùng khó khăn của đám trẻ, cố gắng vươn mình ra khỏi đại dương đen, tìm cho mình một ánh sáng. Và chính những sự nỗ lực xoa dịu chính mình đó đã hóa thành những câu từ trong cuốn sách này, bất kể đau đớn thế nào.\r\n\r\nCuốn sách được viết bởi Châu Sa Đáy Mắt, một tác giả GenZ mong muốn cùng các bạn trẻ bộc bạch và vỗ về nh', 0, 0, 0, 11, 5, 2023, 'Tiếng Việt', 280, 'Bìa Mềm', ''),
(21, 'Dấu Vết Của Quỷ', 4, 134000, 'dauvetcuaquy.jpg', 'QUẢ THẬT LÀ MỘT DẤU VÂN TAY KỲ LẠ!\r\n\r\nDị thường ở chỗ có tận ba xoắn ốc trên một dấu tay: hai xoắn nhỏ ở phía trên tựa đôi mắt, một xoắn to bên dưới như cái miệng đang cười ngoác ra.\r\n\r\nCơn ác mộng bắt đầu với cái chết của một trợ lý thám tử, người bị giết khi theo dấu kẻ đe dọa nhà Kawate. Đó như một lời cảnh báo cho bi kịch sắp phủ lên gia đình họ. Một kẻ thích tra tấn tinh thần nạn nhân trước khi xâu xé con mồi. Một ảo thuật gia phô trương luôn mở màn bằng lá thư thách thức, kế đến là những thủ thuật không tưởng qua mặt cảnh sát rồi phô bày phần còn sót lại của kẻ xấu số. Hành tung của hắn khôn lường, chỉ để lại một manh mối duy nhất, một tạo tác đáng lẽ không thể tồn tại trên thế gian này - thứ giống như DẤU VẾT CỦA QUỶ.', 0, 0, 0, 12, 3, 2023, 'Tiếng Việt', 384, 'Bìa Mềm', ''),
(22, 'Định Luật Murphy - Mọi Bí Mật Tâm Lý Thao Túng Cuộc Đời Bạn', 7, 83000, 'dinhluatmurphy.jpg', 'Nếu một điều tồi tệ có thể xảy ra, nó sẽ xảy ra!\r\n\r\nKhi một món đồ quan trọng bị rơi, nó có xu hướng lăn tới dưới ngăn tủ nặng nhất.\r\n\r\nKhi hai tay bạn cầm đầy đồ đạc, mũi bạn bắt đầu ngứa. \r\n\r\nKhi bạn sợ gặp một người nào đó ở bên ngoài, bạn luôn vô tình gặp phải người đó.\r\n\r\n…\r\n\r\nCó phải hằng ngày bạn hay gặp những chuyện dở khóc dở cười tương tự như vậy? Những hiện tượng này đều có thể giải thích bằng một khái niệm tâm lý học thú vị: Định luật Murphy. Nó nhắc nhở chúng ta rằng việc xấu luôn có “cơ may” cao hơn và sai lầm luôn là một phần của thế giới này. Dù cho mỗi chúng ta đều cố gắng hết sức để tránh khỏi sai lầm, nhưng trên thực tế đó là điều bất khả thi.\r\n\r\nTuy nhiên, định luật Murphy mang tính cảnh tỉnh và dẫn dắt rất lớn trong cuộc sống hằng ngày. Cuốn sách này giới thiệu đến với bạn đọc về kiến thức cơ bản, hiện tượng thường gặp cùng với các hiệu ứng tâm lý học biểu hiện trong ý thức cá nhân, tính cạnh tranh, quan hệ xã hội,… của định luật Murphy thông qua góc nhìn thực tiễn', 0, 0, 0, 13, 3, 2022, 'Tiếng Việt', 280, 'Bìa Mềm', ''),
(23, 'Đừng Chỉ Là Hi Vọng - Cùng Dale Carnegie Tiến Tới Thành Công', 5, 48000, 'dungchilahyvong.jpg', 'Thời La Mã cổ, có một vị tướng chinh chiến nhiều năm mà mãi chưa được thăng lên chức thống soái ông ta hằng mong muốn. Ông ta cảm thấy lẽ ra mình phải được thăng chức, nhưng không biết vì sao Hoàng đế lại cứ lờ việc này đi. Thế là một hôm, ông ta nhắc tới chuyện này ngay trước mặt Hoàng đế Hadrianus. Vị tướng nói: “Bệ hạ, thần luôn trung thành với đất nước, thần chinh chiến nhiều năm, ít nhất đã từng ra quân trong 10 chiến dịch quan trọng. Hi vọng bệ hạ có thể cân nhắc, thăng cho thần lên chức thống soái, để thần có nhiều cơ hội phục vụ đất nước hơn”. Hoàng đế là một vị vua anh minh, có khả năng quan sát cực kì xuất chúng. Ông nghe vậy liền bật cười. Vị tướng bối rối nhìn ông, cuối cùng, Hoàng đế ngừng cười và nói: “Hãy đi theo ta!” Tới cạnh doanh trại, Hoàng đế chỉ vào một con lừa nhỏ đứng bên đường, nói: “Ông nhìn con lừa kia xem, ít nhất nó đã từng tham gia 20 chiến dịch, nhưng nhìn kĩ thì nó có gì thay đổi không? Con lừa vẫn chỉ là con lừa”.  Kinh nghiệm và thời gian làm việc tuy q', 0, 0, 0, 30, 3, 2018, 'Tiếng Việt', 228, 'Bìa Mềm', ''),
(24, 'Đứng Dậy Lần Nữa - Cùng Dale Carnegie Tiến Tới Thành Công (Tái Bản 2023)', 5, 50000, 'dungdaylannua.jpg', 'Nhiều năm về trước, tôi tình cờ đọc được một cuốn sách có tên Những câu cách ngôn về cuộc đời của Carnegie. Những câu nói giản dị nhưng hàm chứa triết lí phong phú trong sách đã thu hút tôi. Carnegie chủ trương xây dựng một thái độ sống tích cực, đề xướng phát huy những ưu điểm trong tính cách, khai phá tiềm năng, bồi dưỡng nhân sinh quan tích cực. Kinh nghiệm thành công của ông đã ảnh hưởng tới toàn thế giới trong suốt hơn nửa thế kỉ qua, vô số người đã học hỏi được những điều hữu ích với bản thân từ đó. Những câu cách ngôn kinh điển này luôn có ích cho sự phát triển của chúng ta. Xã hội hiện nay tuy phát triển với tốc độ nhanh chóng, khoa học kĩ thuật, kinh tế đều không ngừng tiến bộ, nhưng cạnh tranh cũng ngày càng khốc liệt.\r\n\r\nTrong bối cảnh như vậy, chúng ta cần học hỏi kinh nghiệm của người đi trước để có thể phát triển tốt hơn, nâng cao tố chất tự thân, khiến bản thân thực hiện được những mục tiêu to lớn hơn trong cuộc đời. Cuốn sách này đúc rút những tinh tuý trong lí thuyết t', 0, 0, 0, 30, 3, 2023, 'Tiếng Việt', 214, 'Bìa Mềm', ''),
(25, 'Genz Trong Kỷ Nguyên Số - Định Hướng Tương Lai Như Thế Nào?', 5, 85000, 'genz.jpg', 'Bởi vì khi ai đó đang chơi, tôi đang đọc cuốn sách này! \r\n\r\nCuốn sách là câu chuyện thành công và thất bại thông qua các cuộc gặp gỡ với hơn 330.000 thanh thiếu niên trong 6 năm trời. Đặc điểm cuốn sách này chính là hướng dẫn cách định hướng sự nghiệp dựa trên các câu chuyện rất \"thực tế\". \r\n\r\n\"Thầy ơi, em muốn trở thành một người giàu có\"\r\n\r\n\"Em muốn trở thành chủ tòa nhà và sống thoải mái\"\r\n\r\n\"Em muốn bố mẹ không phải vất vả làm việc nữ. Em mong bố mẹ sẽ không phải vất vả nữa\"\r\n\r\nĐây là những câu chuyện mà chúng tôi được nghe rất nhiều từ các em học sinh trong quá trình thực hiện các buổi nói chuyện, tư vấn định hướng sự nghiệp. Không có học sinh nào lại không suy nghĩ về tương lai của mình cả.\r\n\r\nKhi bất chợt được hỏi về ước mơ tương lai, nhiều bạn trẻ gen Z sẽ dõng dạc trình bày những mong muốn, cũng như việc các bạn đang làm để đạt được ước mơ đó. Thế nhưng cũng có những bạn trẻ vẫn còn mơ hồ về 2 từ \"ước mơ\", họ thực sự không biết mình giỏi gì, muốn gì.\r\n\r\nTrong cuốn sách Gen Z t', 0, 0, 0, 14, 3, 2022, 'Tiếng Việt', 223, 'Bìa Mềm', ''),
(26, 'Ghi Chép Pháp Y - Những Cái Chết Bí Ẩn', 1, 105000, 'ghichepphapy.jpg', 'Làm cách nào để một “xác chết lên tiếng”? - đó là công việc của bác sĩ pháp y. \r\n\r\n“Ghi chép pháp y - Những cái chết bí ẩn” là cuốn sách nằm trong hệ liệt với “Pháp y Tần Minh” - bộ tiểu thuyết nổi đình đám của xứ Trung đã được chuyển thể thành series phim. Cuốn sách tổng hợp những vụ án có thật, được viết bởi bác sĩ pháp y Lưu Hiểu Huy - người có 15 năm kinh nghiệm và từng mổ xẻ hơn 800 tử thi. \r\n\r\nTrải qua 15 câu chuyện kinh hoàng, cuốn sách sẽ đưa bạn bước vào hiện trường của những vụ án man rợ như: xác chết phi tang dưới cánh đồng ngô, thi thể thiếu nữ không lành lặn, xác chết nhầy nhụa đang bị giòi bọ đục khoét hay một thi thể co cứng trong màng bọc nilon…lần theo những dấu vết, ghép lại sự thật từ những mảnh vụn thi thể, nguyên nhân của cái chết sẽ dần được hé mở.\r\n\r\nMỗi vụ án đều là một ẩn số, hiện trường vụ án bao gồm cả xác chết chính là chiếc chìa khóa để truy tìm hung thủ ngay cả khi nó không còn nguyên vẹn. Vậy làm cách để các bác sĩ pháp y có thể xác định thương tật, các d', 0, 0, 0, 15, 3, 2022, 'Tiếng Việt', 344, 'Bìa Mềm', ''),
(27, 'Hiệu Ứng Franklin - Mối Quan Hệ Tốt Đều Bắt Nguồn Tự Sự \"Làm Phiền\"', 5, 134000, 'hieuungfranklin.jpg', 'Cuốn sách đi sâu vào phân tích việc xây dựng và tương tác trong mối quan hệ thân thiết giữa con người với con người thông qua kiến thức tâm lý học đại chúng kết hợp với cái nhìn sâu sắc của bản thân với cuộc sống thông qua 5 chương:\r\nI. Hiệu ứng Franklin: Mối quan hệ tốt đều bắt nguồn từ sự “làm phiền”\r\nII. Đừng để ngại ngần khiến bạn bỏ lỡ những mối quan hệ chất lượng\r\nIII. Duy trì chừng mực, cần nắm rõ giới hạn của các mối quan hệ\r\nIV. Xây dựng thương hiệu cá nhân, trở thành người không thể thiếu\r\nV. Cần nhau, khiến chúng ta đến gần bên nhau\r\n“Làm sao có thể làm phiền người khác một cách thông minh?”\r\n“Làm sao mới có được dũng khí đón nhận việc bị ghét bỏ?”\r\n“Người hướng nội, nhạy cảm tìm kiếm phương thức sinh tồn của bản thân ra sao?”\r\nDũng cảm làm phiền người khác cũng là một loại trí tuệ, đây là sự khởi đầu cho việc hợp tác giữa hai bên cũng là năng lực để giải quyết vấn đề. Nhờ người khác giúp đỡ có bị từ chối hay không? Các nhà khoa học xã hội cho rằng, những người càng giàu càn', 0, 0, 0, 16, 3, 2023, 'Tiếng Việt', 280, 'Bìa Mềm', ''),
(28, 'Hiểu Về Trái Tim (Tái Bản 2023)', 5, 126000, 'hieuvetraitim.jpg', '“Hiểu về trái tim” là một cuốn sách đặc biệt được viết bởi thiền sư Minh Niệm. Với phong thái và lối hành văn gần gũi với những sinh hoạt của người Việt, thầy Minh Niệm đã thật sự thổi hồn Việt vào cuốn sách nhỏ này.\r\n\r\nXuất bản lần đầu tiên vào năm 2011, Hiểu Về Trái Tim trình làng cũng lúc với kỷ lục: cuốn sách có số lượng in lần đầu lớn nhất: 100.000 bản. Trung tâm sách kỷ lục Việt Nam công nhận kỳ tích ấy nhưng đến nay, con số phát hành của Hiểu về trái tim vẫn chưa có dấu hiệu chậm lại.\r\n\r\nLà tác phẩm đầu tay của nhà sư Minh Niệm, người sáng lập dòng thiền hiểu biết (Understanding Meditation), kết hợp giữa tư tưởng Phật giáo Đại thừa và Thiền nguyên thủy Vipassana, nhưng Hiểu Về Trái Tim không phải tác phẩm thuyết giáo về Phật pháp. Cuốn sách rất “đời” với những ưu tư của một người tu nhìn về cõi thế. Ở đó, có hạnh phúc, có đau khổ, có tình yêu, có cô đơn, có tuyệt vọng, có lười biếng, có yếu đuối, có buông xả… Nhưng, tất cả những hỉ nộ ái ố ấy đều được khoác lên tấm áo mới, một t', 0, 0, 0, 17, 3, 2023, 'Tiếng Việt', 479, 'Bìa Mềm', ''),
(29, 'Khí Chất Bao Nhiêu, Hạnh Phúc Bấy Nhiêu (Tái Bản 2022)', 5, 111000, 'khi-chat-bao-nhieu-hanh-phuc-bay-nhieu.jpg', 'Khí Chất Bao Nhiêu Hạnh Phúc Bấy Nhiêu đã một lần nữa tái xuất trong một diện mạo hoàn toàn mới mẻ. Với diện mạo mới này, Bloom Books mong muốn đem đến cho độc giả những trải nghiệm chất lượng nhất từ nội dung đến hình thức: bìa thiết kế phủ nhũ, ruột in màu sắc nét.\r\n\r\nCó ai đó từng nói: “Hãy sống như một trái dứa: Đầu đội vương miện, dáng đứng hiên ngang – Bên ngoài gai góc, bên trong ngọt ngào.”\r\n\r\nCũng giống như trái dứa, khi một người phụ nữ đủ bản lĩnh để chống đỡ và vượt qua nghịch cảnh, đủ tĩnh tại để tận hưởng trọn vẹn niềm vui cuộc sống, thì đó chính là lúc họ đội lên đầu chiếc vương miện và trở thành nữ hoàng trong thế giới của chính mình.\r\n\r\nTiếp nối thành công từ Bạn đắt giá bao nhiêu? dành cho các cô gái trẻ mới bước chân vào cuộc sống, Khí Chất Bao Nhiêu, Hạnh Phúc Bấy Nhiêu của Vãn Tình đặc biệt hướng đến những phụ nữ mong muốn trưởng thành, khát khao tự do và tự chủ.\r\n\r\nHơn 40 câu chuyện trong Khí Chất Bao Nhiêu, Hạnh Phúc Bấy Nhiêu sẽ đưa bạn phiêu lưu vào thế giới củ', 0, 0, 0, 8, 3, 2022, 'Tiếng Việt', 360, 'Bìa Mềm', ''),
(30, 'Khoa Học Về Gia Vị - Hiểu Các Kết Nối Hương Vị Và Cách Mạng Hóa Việc Nấu Ăn - Bìa Cứng', 3, 315000, 'khoahocvegiavi.jpg', 'Hỡi những tín đồ gia vị, những người ưa khám phá và những đầu bếp hiếu kỳ, hãy nâng tình yêu gia vị của các bạn lên một tầm cao mới với kiến thức chuyên sâu từ nhà khoa học thực phẩm và tác giả sách bán chạy – Tiến sĩ Stuart Farrimond.\r\n\r\nHãy tiếp thu kiến thức khoa học ẩn sau nghệ thuật tạo ra các hỗn hợp gia vị, cách thức các hợp chất hương vị trong gia vị kết hợp với nhau tạo ra những lớp hương vị lý thú đem lại những cảm nhận mới mẻ.\r\n\r\nVới hơn 40 chỉ dẫn về ẩm thực vùng, 60 gia vị cùng với 65 công thức nấu ăn nguyên bản và sáng tạo, cuốn cẩm nang hữu ích này sẽ cho bạn cảm hứng nấu ăn theo một cách hoàn toàn mới.', 0, 0, 0, 18, 3, 2023, 'Tiếng Việt', 317, 'Bìa Cứng', ''),
(31, 'World Trigger - Tập 1', 6, 33000, 'world_trigger_bia_tap_1.jpg', '4 năm trước, ở thành phố Mikado đột nhiên mở ra một cánh cổng dẫn đến thế giới khác, những con quái vật khổng lồ được gọi là Neighbor (cư dân thế giới liền kề) chui ra và tàn phá khu vực xung quanh Cổng. Vũ khí của con người bất lực trước sức mạnh của chúng, thành phố đang trên bờ tuyệt diệt thì một tổ chức bí ẩn tự xưng là Border xuất hiện, họ sử dụng công nghệ của Neighbor gọi là Trigger để chống lại và tiêu diệt bọn quái vật, trả lại bình yên cho nơi đây. Hiện tại, Border đã xây dựng một căn cứ khổng lồ ở thành phố Mikado, Cổng thi thoảng vẫn mở ra nhưng nhờ có sự bảo vệ của Border, người dân đã quen dần và ít nhiều lấy lại nhịp sống cũ.\r\n\r\nNgày nọ, một học sinh tóc trắng bí ẩn tên là Kuga Yuma chuyển đến một ngôi trường ở thành phố này. Cậu thực ra là một Neighbor mang hình dạng con người. Ở đây, cậu gặp Mikumo Osamu là thực tập sinh cấp C của Border. Vòng xoay vận mệnh bắt đầu dịch chuyển, liệu họ sẽ bảo vệ thế giới như thế nào...?', 0, 0, 0, 33, 2, 2023, 'Tiếng Việt', 192, 'Bìa Mềm', ''),
(32, 'Lam Hỏa Diệt Quỷ - Tập 26', 6, 23000, 'lam_hoa_diet_quy_bia_tap_26.jpg', 'Sau khi chứng kiến mọi chuyện trong quá khứ, Rin quyết định đến cứu Yukio, và đã dùng chìa khóa thần ẩn để đến trước mặt em trai. Tại đó, Yukio đã tiết lộ nguyên nhân khiến cậu tới và gia nhập vào hội Illuminati!? Đây là lần đầu tiên hai con người cùng gánh chung số mệnh thực sự đối đầu!!', 0, 0, 0, 31, 2, 2023, 'Tiếng Việt', 226, 'Bìa Mềm', ''),
(33, 'BlueLock - Tập 17', 6, 33000, 'bluelock_bia_tap_17.jpg', 'NÀO, TIẾN TỚI KỈ NGUYÊN MỚI CỦA BÓNG ĐÁ NHẬT BẢN!!\r\n\r\nNHỮNG CÁI TÔI SẼ MỞ RA CÁNH CỬA ẤY!!\r\n\r\nTrận đấu giữa BLUELOCK với tuyển U-20 hớp hồn người xem bằng những màn trình diễn bứt phá giới hạn của các cầu thủ! Trong khi ân oán giữa anh em nhà Itoshi ngày càng sâu sắc và trận bóng đá đẳng cấp không thể đoán trước đang diễn ra thì Nagi, Bachira, Isagi, tất cả đều nhắm đến bàn thắng “dành riêng cho mình”! Liệu ước mơ và sự kiên định của Ego Jinpachi có thể lật đổ nền bóng đá Nhật Bản hiện tại hay không!? Và chủ nhân của cú sút phân định thắng bại chính là…\r\n\r\nTRẬN ĐẤU GIỮA BLUELOCK VỚI TUYỂN U-20 ĐÃ ĐI ĐẾN HỒI KẾT!\r\n\r\nHÃY CHỨNG KIẾN NHỮNG ANH HÙNG ĐƯỢC SINH RA TRÊN ĐẤT NƯỚC NÀY!!', 0, 0, 0, 32, 2, 2023, 'Tiếng Việt', 200, 'Bìa Mềm', ''),
(34, 'BlueLock - Tập 18', 6, 33000, 'bluelock_bia_tap_18.jpg', 'NHỮNG CÁI TÔI CỦA CHÚNG TA TIẾN TỚI ĐẤU TRƯỜNG RỘNG LỚN HƠN!!\r\n\r\nSau chiến thắng trước Đội tuyển Quốc gia U-20 Nhật Bản, Isagi và BLUELOCK một bước trở thành người hùng trong giới bóng đá. Khi các tiền đạo đang tận hưởng thời gian nghỉ ngơi ngắn ngủi, một thử thách mới là Ego Jinpachi chuẩn bị đang chời đợi họ! Bị ám ảnh bởi “khát khao” chiến đầu và chứng tỏ bản thân, những cái tôi của chúng ta một lần nữa lao ra chiến trường, nơi họ đặt cược sinh mạng của mình! Và tại đó có một nhân vật bất ngờ đang chờ đợi họ.\r\n\r\nĐỐI THỦ TIẾP THEO LÀ 5 ĐỘI BÓNG LỚN CỦA CHÂU ÂU!\r\n\r\n“TRẬN ĐẠI CHIẾN GIỮA CÁC TÂN ANH HÙNG” KHAI MẠC!!', 0, 0, 0, 32, 2, 2023, 'Tiếng Việt', 192, 'Bìa Mềm', ''),
(35, 'BlueLock - Tập 19', 6, 33000, 'bluelock_bia_tap_19.jpg', 'VÒNG ĐẦU TIÊN CỦA GIAI ĐOẠN 2 DỰ ÁN BLUELOCK, “TRẬN ĐẠI CHIẾN GIỮA CÁC TÂN ANH HÙNG” BẮT ĐẦU!!\r\n\r\nCuối cùng trận đấu với FC Barcha của Tây Ban Nha cũng tới. Trái ngược với Isagi phải bắt đầu từ băng ghế dự bị, Bachira cho thấy sự tiến bộ vượt bậc của mình khi xuất hiện một cách đầy ấn tượng trong đội hình ra quân! Sau khi quay lại, Kunigami đã thay đổi, và thiên tài Kaiser cuối cùng cũng trổ hết tài nghệ của mình. Một trận đấu ở đẳng cấp cao chưa từng thấy trong lịch sử BLUELOCK, ngay cả những siêu cầu thủ ở trình độ khác hẳn cũng sẽ tham chiến!? Trong một đấu trường nơi thực lực là tất cả và những con số biết nói, liệu Isagi có tìm được cơ hội thể hiện mình hay không?\r\n\r\nGIÀNH LẤY VỊ TRÍ TRONG ĐỘI HÌNH CHÍNH THỨC VÀ CHỨNG TỎ BẢN THÂN VỚI THẾ GIỚI ĐI! THỬ THÁCH CÀNG LỚN, “CÁI TÔI” CÀNG RỰC CHÁY!!', 0, 0, 0, 32, 2, 2023, 'Tiếng Việt', 192, 'Bìa Mềm', ''),
(36, 'BlueLock - Tập 20', 6, 33000, 'bluelock_ban_thuong_bia_tap_20.jpg', 'VÉN MÀN TOÀN CẢNH “ĐẠI CHIẾN TÂN ANH HÙNG”!!\r\n\r\nNƠI CÓ NHỮNG TRẬN CẦU NẢY LỬA NHẤT!!\r\n\r\nBastard Muchen vươn lên dẫn trước nhờ sự phối hợp giữa Isagi và Kunigami. Trong lúc tận đấu còn chưa hạ nhiệt, một sự thật gây sốc về “đại chiến tân anh hùng” sẽ được hé lộ từ chính miệng Ego! Với điều luật giá trị của bản thân sẽ được công khai trước toàn thế giới, mỗi cầu thủ đều cân nhắc lại về chiến lược sinh tồn của mình, xung đột giữa Kaiser với Isagi ngày càng gay gắt! Nagi, Reo, Chigiri, những đối thủ ở trận đấy tiếp theo xuất hiện và gây cản trở trước một Isagi đang khát khao “giành bàn thắng”!!\r\n\r\nTRẬN ĐẤU THỨ 2, VS. MANSHINE CITY BẮT ĐẦU!\r\n\r\nAI SẼ TRỞ THÀNH NHÂN VẬT CHÍNH ĐÂY!?', 0, 0, 0, 32, 2, 2023, 'Tiếng Việt', 192, 'Bìa Mềm', ''),
(37, 'Không Gia Đình', 2, 132000, 'khonggiadinh.jpg', 'Thở xa lắm, giữa lòng nước Pháp thế kỷ XIX, có một câu chuyện...\r\n\r\nCâu chuyện về cậu bé bất hạnh Rémi lang bạt trên dặm trường thiên lý, dấn thân giữa tất cả những bần cùng đói khổ và những xa hoa lộng lẫy. Cậu thiếu niên nhỏ tuổi đã đi qua biết bao miền quê, thấy biết bao cảnh đời, mỗi bước chân đều in dấu ấn của những câu chuyện kỳ lạ, có lúc hoan hỉ mừng vui, có khi thê lương đau đớn nhưng luôn lấp lánh tình người. Cuộc hành trình của Rémi với đoàn xiếc khỉ, chó, với những người thợ mỏ, với cậu bé hát rong người Ý đưa người đọc trải nghiệm mọi cung bậc cảm xúc: thích thú, bất ngờ, hồi hộp, thương tâm, thậm chí cả tuyệt vọng và dạy cho ta - những người chưa, đang, hay đã trưởng thành - những bài học thấm thía về ý chí, nghị lực và lao động chân chính...\r\n\r\nBàn về Không gia đình không cần bất cứ lời bình luận hoa mỹ nào khác, chỉ gói gọn trong hai từ: Kinh điển!', 0, 0, 0, 19, 3, 2023, 'Tiếng Việt', 663, 'Bìa Mềm', ''),
(38, 'Không Gia Đình (Tái Bản 2022)', 2, 127000, 'khonggiadinhtaiban2022.jpg', '“KHÔNG GIA ĐÌNH kể chuyện về cuộc đời của cậu bé Rémi. Từ nhỏ, Rémi đã bị bắt cóc, rồi bị bố nuôi bán cho một đoàn xiếc thú. Em đã theo đoàn xiếc ấy đi lưu lạc khắp nước Pháp.\r\n\r\nRémi đã lớn lên trong gian khổ và lao động để sống. Lúc đầu em được sự dạy bảo của cụ Vitalis, về sau thì tự lập. Không những lo cho mình, em còn lo việc biểu diễn và kiếm sống cho cả một gánh hát rong… Nhưng dù ở đâu, trong cảnh ngộ nào, em vẫn noi theo nếp rèn dạy của cụ Vitalis giữ phẩm chất làm người. Đó là lòng yêu lao động, tự trọng, ngay thẳng, biết nhớ ơn nghĩa và luôn luôn muốn làm người có ích.\r\n\r\nKHÔNG GIA ĐÌNH luôn cuốn hút, hấp dẫn người đọc vì đây chính là những cuộc phiêu lưu của lòng dũng cảm và tình cảm gia đình. KHÔNG GIA ĐÌNH là quyển sách hay nhất về giáo dục, xứng đáng nhận giải thưởng của Viện hàn lâm Văn học Pháp.” Giáo sư – Nhà giáo Nhân dân HUỲNH LÝ', 0, 0, 0, 19, 2, 2022, 'Tiếng Việt', 464, 'Bìa Mềm', ''),
(39, 'Không Phải Sói Nhưng Cũng Đừng Là Cừu', 7, 89000, 'khongphaisoidunglacuu.jpg', 'SÓI VÀ CỪU - BẠN KHÔNG TỐT NHƯ BẠN NGHĨ ĐÂU!\r\n\r\nLàn ranh của việc ngây thơ hay xấu xa đôi khi mỏng manh hơn bạn nghĩ.\r\n\r\nBạn làm một việc mà mình cho là đúng, kết quả lại bị mọi người khiển trách.\r\n\r\nBạn ủng hộ một quan điểm của ai đó, và số đông khác lại ủng hộ một quan điểm trái chiều.\r\n\r\nRốt cuộc thì bạn sai hay họ sai?\r\n\r\nCuốn sách “Không phải sói nhưng cũng đừng là cừu” đến từ tác giả Lê Bảo Ngọc sẽ giúp bạn hiểu rõ hơn những khía cạnh sắc sảo phía sau những nhận định đúng, sai đơn thuần của mỗi người.\r\n\r\nNhững câu hỏi đầy tính tranh cãi như “Cứu người hay cứu chó?”, “Một kẻ thô lỗ trong lớp vỏ “thẳng tính” khác với người EQ thấp như thế nào?”, “Vì sao một bộ phận nữ giới lại victim blaming đối với nạn nhân bị xâm hại?”,... được tác giả đưa ra trong “Không phải sói nhưng cũng đừng là cừu”. Bằng từng chương sách của mình, tác giả vạch rõ cho bạn rằng “thật sự thế nào mới là người tốt”, ngây thơ và xấu xa có ranh giới rõ ràng như thế không, rốt cuộc bạn có là người tốt như mình vẫn ', 0, 0, 0, 9, 1, 2022, 'Tiếng Việt', 296, 'Bìa Mềm', ''),
(40, 'Không Sợ Chậm Chỉ Sợ Dừng', 5, 109000, 'khongsochamchisodung.jpg', '“Nhiều người không hiểu được vì sao một số người lại có thể sống kỷ luật như vậy. Rốt cuộc làm thế nào để họ có thể duy trì được nếp sống như thế? Họ có bí quyết gì không?\r\n\r\nThật ra tất cả những người có thể sống tự giác và kỷ luật đều chỉ có một lý do: Họ đã được nếm thử ‘trái ngọt’ mà sự kỷ luật đó mang lại!”\r\n\r\nVãn Tình được coi như “nữ hoàng” của dòng sách cảm hứng dành cho phái nữ và từng tạo nên một làn sóng thay đổi tư duy tích cực của hàng vạn phụ nữ Việt Nam qua tác phẩm Bạn đắt giá bao nhiêu?\r\n\r\nVẫn là những quan điểm thẳng thắn và đánh trúng tâm lý các cô gái, sự trở lại của Vãn Tình với Không sợ chậm Chỉ sợ dừng mang một hơi thở mới, trung tính hơn, là những bài học đắt giá không chỉ dành cho phái nữ mà còn cả nam giới, về sức mạnh của tính kỷ luật và tự giác để có thể trở thành phiên bản tốt hơn mỗi ngày.\r\n\r\nKhi bạn càng Kỷ luật, bạn sẽ càng tới gần Tự do.', 0, 0, 0, 8, 1, 2020, 'Tiếng Việt', 364, 'Bìa Mềm', ''),
(41, 'Không Tự Khinh Bỉ - Không Tự Phí Hoài (Tái Bản 2021)', 5, 101000, 'khongtukhinhbikhongtuphihoai.jpg', 'Là cuốn sách bán chạy nhất của Vãn Tình, viết trong đoạn trưởng thành nhất của tác giả, 40 bài viết trong “Không tự khinh bỉ – Không tự phí hoài” là những trải nghiệm của chính Vãn Tình, bạn bè và những người thân quen, về công việc – con đường phát triển năng lực bản thân; về gia đình – tình yêu, vướng mắc trong hôn nhân, đối nhân xử thế với họ hàng, làng xóm; và cả về chính bản thân mỗi người phụ nữ – đời sống, quan điểm, cách ứng xử và đối mặt với vô vàn sóng gió trong cuộc đời.\r\n\r\nQuan điểm xuyên suốt những câu chuyện của Vãn Tình là:\r\n\r\n“Nếu một người phụ nữ đánh mất chính mình thì cô ấy sẽ mất đi tất cả.”\r\n\r\nNgay khi ra mắt, “Không tự Khinh bỉ – Không tự phí hoài” đã đạt được hàng triệu lượt xem trên mạng, bán được hàng trăm nghìn bản tới bạn đọc Trung Quốc, đồng thời tạo nên một làn sóng mạnh mẽ, góp phần thay đổi tư duy và quan điểm về các mối quan hệ, gia đình, công việc của hàng triệu phụ nữ.\r\n\r\n“Bạn thử nói xem, trên thế giới này, điều gì có thể huỷ hoại cuộc đời bạn được ch', 0, 0, 0, 8, 1, 2021, 'Tiếng Việt', 368, 'Bìa Mềm', ''),
(42, 'Làm Bạn Với Bầu Trời', 2, 88000, 'lambanvoibautroi.jpg', 'Một câu chuyện giản dị, chứa đầy bất ngờ cho tới trang cuối cùng. Và đẹp lộng lẫy, vì lòng vị tha và tình yêu thương, khiến mắt rưng rưng vì một nỗi mừng vui hân hoan. Cuốn sách như một đốm lửa thắp lên lòng khát khao sống tốt trên đời.\r\n\r\nViết về điều tốt đã không dễ, viết sao cho người đọc có thể đón nhận đầy cảm xúc tích cực, và muốn được hưởng, được làm những điều tốt dù nhỏ bé... mới thật là khó. Làm bạn với bầu trời của Nguyễn Nhật Ánh đã làm được điều này.\r\n\r\nNhư nhà văn từng phát biểu “...điểm mạnh của văn chương nằm ở khả năng thẩm thấu. Bằng hình thức đặc thù của mình, văn chương góp phần mài sắc các ý niệm đạo đức nơi người đọc một cách vô hình. Bồi đắp tâm hồn và nhân cách một cách âm thầm và bền bỉ, đó là chức năng gốc rễ của văn chương, đặc biệt là văn chương viết cho thanh thiếu niên.”', 0, 0, 0, 1, 4, 2019, 'Tiếng Việt', 220, 'Bìa Mềm', ''),
(43, 'Letting Go - Lộ Trình Đi Đến Sự Buông Bỏ', 5, 161000, 'lettinggo.jpg', 'Trong cuốn sách mang tính ứng dụng cao này, tiến sĩ, bác sĩ Hawkins làm sáng tỏ một kỹ thuật mà nhờ đó chúng ta có thể siêu việt bản ngã nhỏ bé và bứt phá để đạt được tự do mà ta mong đợi. Ông cho rằng trạng thái tự do và niềm hạnh phúc thuần khiết ở bên trong này chính là “quyền bẩm sinh” của chúng ta. Khi đọc, chúng ta sẽ cảm thấy được khích lệ và được truyền cảm hứng từ các ví dụ lâm sàng thực tiễn mà ông chia sẻ dựa trên nhiều thập kỷ điều trị các bệnh tâm thần của mình. Chúng ta thấy được sức mạnh của buông bỏ ứng nghiệm trong gần như mọi khía cạnh của đời sống: các mối quan hệ, sức khỏe thể chất, môi trường làm việc, các hoạt động tái sáng tạo, quá trình làm việc tâm linh, đời sống gia đình, tình dục, chữa lành cảm xúc và cai nghiện.', 0, 0, 0, 5, 5, 2023, 'Tiếng Việt', 384, 'Bìa Mềm', ''),
(44, 'Luật Tâm Thức - Giải Mã Ma Trận Vũ Trụ (Tái Bản 2022)\r\n\r\n', 7, 204000, 'luattamthuc.jpg', 'Dịch bệnh, thiên tai, chiến tranh… có phải là lời cảnh cáo của tự nhiên đến con người?\r\n\r\n“Biến đổi khí hậu” là một nước đi chính trị hay chỉ là sự thay đổi của Trái Đất theo chu kỳ?\r\n\r\nUFO, người ngoài hành tinh có thật không?\r\n\r\nTại sao Kinh dịch lại tiên đoán được các sự kiện?\r\n\r\nMỗi con người có số mệnh định sẵn không? Chúng ta sẽ đi về đâu sau khi chết?\r\n\r\n…\r\n\r\nLiệu tất cả chỉ là ngẫu nhiên, hay có một sự sắp đặt tài tình của vũ trụ?\r\n\r\n“Luật Tâm Thức - giải mã ma trận vũ trụ” sẽ giải đáp tất cả những khía cạnh mà có thể bạn không nhận thức được chúng tồn tại, và có thể khám phá những vùng đất mình chưa từng biết đến.  \r\n\r\nNhững góc nhìn trong “Luật Tâm Thức” bắt nguồn từ tất cả những kiến thức cổ xưa nhất của loài người… nhưng được tác giả Ngô Sa Thạch giải thích bằng một góc nhìn gần gũi, đặc biệt, qua đó bạn sẽ hiểu được:\r\n\r\nNguồn gốc của vũ trụ, những quy luật tự nhiên chi phối sự hình thành của mọi vật,  trí tuệ cổ xưa khi thông hiểu và ứng dụng các quy luật tự nhiên.\r\n\r\nNăng', 0, 0, 0, 20, 5, 2021, 'Tiếng Việt', 408, 'Bìa Mềm', ''),
(45, 'Mắt Biếc (Tái Bản 2022)', 2, 110000, 'matbiec.jpg', 'Một tác phẩm được nhiều người bình chọn là hay nhất của nhà văn này. Một tác phẩm đang được dịch và giới thiệu tại Nhật Bản (theo thông tin từ các báo)… Bởi sự trong sáng của một tình cảm, bởi cái kết thúc rất, rất buồn khi suốt câu chuyện vẫn là những điều vui, buồn lẫn lộn (cái kết thúc không như mong đợi của mọi người). Cũng bởi, mắt biếc… năm xưa nay đâu (theo lời một bài hát)', 0, 0, 0, 1, 4, 2022, 'Tiếng Việt', 298, 'Bìa Mềm', ''),
(46, 'Mẹ Làm Gì Có Ước Mơ', 2, 75000, 'melamgicouocmo.jpg', '“Ước mơ của mẹ là gì?”\r\n\r\n“Thì cho chúng mày ăn học đàng hoàng, đầy đủ để mai sau đỡ khổ.”\r\n\r\n“Không, ước mơ khác cơ.”\r\n\r\n“Mai sau chúng mày lập gia đình, chọn được đúng người, vợ chồng yêu thương nhau.”\r\n\r\n“Ước mơ dành riêng cho bản thân mẹ cơ mà.”\r\n\r\n“MẸ THÌ LÀM GÌ CÓ ƯỚC MƠ.”\r\n\r\nBạn có bao giờ hỏi ước mơ của bố mẹ là gì? Hoặc dù có hỏi bố mẹ cũng chỉ trả lời qua loa như “Làm gì có…”. Nhưng bạn biết không, làm gì có ai trên thế giới này không có ước mơ cơ chứ, chỉ là ước mơ của bố mẹ chúng ta được cất giấu rất sâu trong tim và đánh đổi bằng nụ cười của những đứa con mà thôi.\r\n\r\nTại sao mẹ lại chẳng có nổi một ước mơ cho riêng mình? Phải chăng gánh vai mẹ đã quá mỏi mệt với cơm áo gạo tiền, với những bữa ăn và học phí của con.\r\n\r\nÀ không, mẹ có ước mơ đấy chứ. Mẹ ước mơ có một người bố, rồi mẹ cho nó cả một gia đình. Mẹ ước mơ được tới trường, nên mẹ cho nó học con chữ. Mẹ ước mơ được một bữa no, nên dẫu có phải đi làm vất vả khổ cực đến đâu mẹ cũng cho nó được bữa cơm ngon. Chỉ khác ', 0, 0, 0, 21, 1, 2023, 'Tiếng Việt', 208, 'Bìa Mềm', ''),
(47, 'Minh Triết Nội Tại', 7, 143000, 'minhtrietnoitai.jpg', 'Điều gì cản trở con đường minh triết của ta? Điều gì ngăn ta đạt được chân lý thực sự? Và làm thế nào để chúng ta vượt qua những vật cản này?\r\n\r\n“Minh Triết Nội Tại” không trả lời những câu hỏi ấy. Cuốn sách không đóng vai trò như cẩm nang giải đáp mọi bí ẩn trong vũ trụ, mà là cuốn nhật ký hàng ngày, mang những thông điệp chân lý được tìm thấy trong các giới luật của tôn giáo phương Tây với cốt lõi của triết học phương Đông, bắc cầu nối giữa thế giới vật chất, quen thuộc với lĩnh vực tâm linh, phi tuyến tính. Những lời nhắn trong sách được tuyển chọn cẩn thận, mang đến cho độc giả một suy ngẫm mới mỗi ngày. Bất kỳ đoạn nào trong số này, nếu được hiểu đầy đủ, đều có thể nâng cao mức độ tỉnh thức của một người.\r\n\r\nVới niềm tin về Vũ trụ an bài, những lời nhắn trong sách hướng đến việc đỡ bỏ gánh nặng đang đè lên tâm hồn con người hiện đại, và trên thực tế chúng ta chỉ cần đơn thuần tìm kiếm tri thức giác ngộ phù hợp với bản thân để tỉnh thức ở mức độ cao hơn. Điều này đòi hỏi phải trải ', 0, 0, 0, 5, 1, 2023, 'Tiếng Việt', 352, 'Bìa Mềm', '');
INSERT INTO `sach` (`id`, `name`, `idloaisach`, `price1`, `img`, `mota`, `moi`, `giamgia`, `view`, `idtacgia`, `id_nxb`, `namxb`, `ngonngu`, `sotrang`, `hinhthuc`, `motangan`) VALUES
(48, 'Một Người Đi Tiếp, Một Người Quẩn Quanh', 1, 79000, 'motnguoiditiep.jpg', '“và tôi cứ chờ người như trước giờ vẫn thế\r\n\r\nchờ đến lần kế người nói thương tôi\r\n\r\nnhưng có vẻ chẳng được rồi\r\n\r\nlời người để trên môi\r\n\r\nluôn là lời “tạm biệt”.”\r\n\r\nCó lẽ trong cuộc đời mỗi chúng ta, ai cũng ít nhất một lần trải qua một mối tình đậm sâu đến day dứt. Chúng ta mơ mộng, kỳ vọng vào hai chữ “mãi mãi” nhưng sau cùng vẫn không thể tránh khỏi sự chia ly. Và chắc hẳn, đâu đó ngoài kia vẫn còn những trái tim vương vấn hình bóng cũ, những con người cuồng si cố gắng thoát khỏi vòng luẩn quẩn của mảnh ký ức đã vụn vỡ.\r\n\r\n“Một người đi tiếp, một người quẩn quanh” - thương gửi những vết thương rỉ máu vì không thể buông bỏ. Từng câu, từng chữ của cuốn sách như dấy lên nỗi đau giằng xé đã qua, bởi có thể bạn sẽ bắt gặp câu chuyện của chính mình.\r\n\r\nTác giả Châu sa đáy mắt sẽ cùng bạn đối diện với những tảng đá nặng trĩu đang đè nén trong lòng, để rồi bạn bình thản đón nhận mọi thương tổn mà bản thân vẫn luôn cố trốn tránh. Bởi như vậy, bạn mới có thể vươn lên mạnh mẽ, tìm được lối ', 0, 0, 0, 11, 1, 2023, 'Tiếng Việt', 176, 'Bìa Mềm', ''),
(49, 'Muôn Kiếp Nhân Sinh - Many Times, Many Lives - Tập 1', 8, 117000, 'muonkiepnhansinh1.jpg', 'Giáo sư John Vũ – Nguyên Phong và những câu chuyện chưa từng có về tiền kiếp, khám phá luật Nhân quả, Luân hồi.\r\n“Muôn kiếp nhân sinh” là tác phẩm do Giáo sư John Vũ - Nguyên Phong viết từ năm 2017 và hoàn tất đầu năm 2020 ghi lại những câu chuyện, trải nghiệm tiền kiếp kỳ lạ từ nhiều kiếp sống của người bạn tâm giao lâu năm, ông Thomas – một nhà kinh doanh tài chính nổi tiếng ở New York. Những câu chuyện chưa từng tiết lộ này sẽ giúp mọi người trên thế giới chiêm nghiệm, khám phá các quy luật về luật Nhân quả và Luân hồi của vũ trụ giữa lúc trái đất đang gặp nhiều tai ương, biến động, khủng hoảng từng ngày.\r\n“Muôn kiếp nhân sinh” là một bức tranh lớn với vô vàn mảnh ghép cuộc đời, là một cuốn phim đồ sộ, sống động về những kiếp sống huyền bí, trải dài từ nền văn minh Atlantis hùng mạnh đến vương quốc Ai Cập cổ đại của các Pharaoh quyền uy, đến Hợp Chủng Quốc Hoa Kỳ ngày nay.\r\n“Muôn kiếp nhân sinh”cung cấp cho bạn đọc kiến thức mới mẻ, vô tận của nhân loại lần đầu được hé mở, cùng nhữn', 0, 0, 0, 22, 3, 2020, 'Tiếng Việt', 408, 'Bìa Mềm', ''),
(50, 'Muôn Kiếp Nhân Sinh - Many Times, Many Lives - Tập 2', 8, 187000, 'muonkiepnhansinh2.jpg', 'Hiếm có cuốn sách nào ngay từ khi ra mắt đã tạo nên hiện tượng văn hóa đọc và sau nửa năm đã trở thành cuốn sách bán chạy nhất năm 2020 tại Việt Nam như Muôn Kiếp Nhân Sinh. Cơn sốt của cuốn sách này tiếp tục được dấy lên vào dịp Tết Nguyên Đán 2021 khi công ty First News Trí Việt hé lộ đang “ngày đêm thực hiện Muôn Kiếp Nhân Sinh tập 2”. Đáp lại sự mong đợi của độc giả suốt hơn ba tháng, Muôn Kiếp Nhân Sinh tập 2 đã chính thức phát hành trên cả nước.\r\nMuôn Kiếp Nhân Sinh tập 2 của tác giả Nguyên Phong tiếp tục là những câu chuyện tiền kiếp, nhân quả luân hồi hấp dẫn gắn liền với những kiến giải uyên bác về quá khứ, hiện tại, tương lai của nhân loại và thế giới thông qua góc nhìn của cả khoa học và tâm linh. Chúng ta là ai, chúng ta đến từ đâu và sẽ đi về đâu? Làm cách nào để chữa lành thế giới này, hành tinh này trước những biến cố lớn đang và sẽ diễn ra trong tương lai gần?\r\nTrong tập 2, hành trình thức tỉnh tâm linh của nhân vật Thomas sẽ dẫn dắt người đọc đến với những tầng cõi năn', 0, 0, 0, 22, 3, 2021, 'Tiếng Việt', 544, 'Bìa Mềm', ''),
(51, 'Muôn Kiếp Nhân Sinh - Many Times, Many Lives - Tập 3', 8, 152000, 'muonkiepnhansinh3.jpg', 'Nối tiếp câu chuyện và tinh thần của tập 1 và tập 2, “Muôn Kiếp Nhân Sinh – tập 3” tiếp tục đưa bạn đọc đi qua hành trình thức tỉnh tâm linh của nhân vật chính Thomas. Không chỉ là hồi tiếp theo trong chuyến phiêu lưu của linh hồn, tập mới nhất và cũng là tập cuối cùng của bộ sách sẽ bàn luận sâu hơn về hiện tại và tương lai của nhân loại, đồng thời nhẹ nhàng khép lại câu chuyện tiền kiếp nhiều trăn trở, nhiều bài học của Thomas và giải đáp những câu hỏi còn bỏ ngỏ từ hai tập trước.\r\n\r\nNếu tập 1 và tập 2 tập trung lý giải hai quy luật vũ trụ là Nhân quả và Luân hồi, thì tập 3 bàn về khía cạnh đạo đức của con người, đặc biệt là lòng tham và cực đối lập của nó – thái độ sống cho đi. Qua đó, tác giả cùng nhân vật chính Thomas và bậc thầy giác ngộ Kris đã gửi gắm vào quyển sách những thông điệp mạnh mẽ về tương lai nhân loại.\r\n\r\nNếu con người muốn thay đổi tương lai, trước hết phải bắt đầu bằng thay đổi tâm thức. Thay đổi tâm thức bắt nguồn từ việc hiểu rằng, tự do ý chí của con người là m', 0, 0, 0, 22, 3, 2023, 'Tiếng Việt', 464, 'Bìa Mềm', ''),
(52, 'Nằm Nghe Gió Thổi Sau Hè\r\n\r\n', 2, 130000, 'namnghegiothoisauhe.jpg', 'Nằm nghe gió thổi sau hè xoay quanh câu chuyện tuổi thơ của nhân vật Mận với những kỷ niệm về trái sim tím căng mọng, bông dủ dẻ vàng ươm, chùm lá sương sâm xanh mướt, hay những ngày rong ruổi trên cánh đồng với con diều giấy…\r\n\r\nNhững ký ức về chiếc bánh xèo trong “gian hàng tự phát” của bà mà “ba vị khách quen” mua bằng tiền là những chiếc lá cải, chiếc bánh ít lá gai hiếm hoi ba làm trong những ngày gia đình còn khó khăn, hay những cành củi nhặt nhạnh trong buổi chiều đi chăn trâu để chị em cùng nhau đốt “pháo hoa”… được tái hiện lại bởi một người cháu, người con đầy xúc động.\r\n\r\nNằm nghe gió thổi sau hè thích hợp cho một buổi chiều gió nhẹ, nằm trên chiếc võng đu đưa hay những ngày hè nắng đã thôi oi bức, để thấy mình lạc giữa đồi sim, giữa cánh đồng rộng mênh mông… để nghe tâm hồn mình dịu lại.', 0, 0, 0, 23, 1, 2023, 'Tiếng Việt', 164, 'Bìa Mềm', ''),
(53, 'Ngày Xưa Có Một Chuyện Tình (Tái Bản 2019)', 2, 100000, 'ngayxuaco1chuyentinh.jpg', '\r\nNGÀY XƯA CÓ MỘT CHUYỆN TÌNH là tác phẩm mới tinh thứ 2 trong năm 2016 của nhà văn Nguyễn Nhật Ánh dài hơn 300 trang, được coi là tập tiếp theo của tập truyện Mắt biếc. Có một tình yêu dữ dội, với em,  của một người yêu em hơn chính bản thân mình - là anh.\r\n\r\nNgày xưa có một chuyện tình có phải là một câu chuyện cảm động  khi người ta yêu nhau, nỗi khát khao một hạnh phúc êm đềm ấm áp đến thế; hay đơn giản chỉ là chuyện ba người - anh, em, và người ấy…?\r\n\r\nBạn hãy mở sách ra, để chứng kiến làn gió tình yêu chảy qua như rải nắng trên khuôn mặt mùa đông của cô gái; nụ hôn đầu tiên ngọt mật, cái ôm đầu tiên, những giọt nước mắt và cái ôm xiết cuối cùng… rồi sẽ tìm thấy câu trả lời, cho riêng mình.', 0, 0, 0, 1, 2, 2019, 'Tiếng Việt', 344, 'Bìa Mềm', ''),
(54, 'Ngôi Nhà Kỳ Quái', 4, 92000, 'ngoinhakyquai.jpg', 'Thoạt nhìn, có lẽ trông nó cũng như bao ngôi nhà bình thường khác. Tuy nhiên, nếu để ý và săm soi tới từng ngóc ngách, bạn sẽ nhận thấy cảm giác khó chịu kỳ quái hiện diện ở khắp nơi trong nhà. Những sự kỳ quái đó cứ chồng chéo lên nhau để rồi cuối cùng dẫn đến một “sự thật”...\r\n\r\nKhoảng không bí ẩn, hai lớp cửa, phòng trẻ em không có cửa sổ...\r\n\r\nĐó là những điểm kỳ quái trên bản vẽ mặt bằng của một ngôi nhà cũ ở Tokyo mà người quen của ôi đang cân nhắc mua lại. Ngôi nhà trông thì có vẻ bình thường, bên trong thoáng đãng và sáng sủa. Thế nhưng... nó đem lại cảm giác bất ổn quái gở.\r\n\r\nKhi tôi đưa bản vẽ mặt bằng cho một người quen khác làm kiến trúc sư xem, đối phương cũng đưa ra kết luận tương tự.\r\n\r\nSự thật đằng sau thiết kế bí ẩn này là gì? Người chủ cũ của ngôi nhà này là ai? Có chuyện gì đã xảy ra trong ngôi nhà đó?', 0, 0, 0, 6, 1, 2022, 'Tiếng Việt', 284, 'Bìa Mềm', ''),
(55, 'Người Dọn Dẹp Hiện Trường Án Mạng\r\n\r\n', 4, 72000, 'nguoidondephientruonganmang.jpg', '“Người dọn dẹp hiện trường án mạng” - Góc khuất đằng sau nghề dọn dẹp hiện trường vụ án: đầy tính nhân văn nhưng cũng hết sức thảm khốc.\r\n\r\nNhiệm vụ của những nhân viên dọn dẹp hiện trường là làm sạch và khôi phục trạng thái của nơi xảy ra vụ án lại như ban đầu. Để hoàn thành việc dọn dẹp hiện trường, người trong nghề phải trải qua một khóa huấn luyện. Họ được cung cấp những kiến thức về cách xử lý hiện trường khi xảy ra các vụ gi…ết người, t…ự t…ử hay t…ai n…ạn... Họ luôn phải giữ cho tinh thần ổn định, sự can đảm, khả năng phục hồi khi bị \"chấn thương\" tâm lý bất chấp nơi cần xử lý sẽ phải kinh khủng đến mức nào. Hiển nhiên đây không phải công việc dành cho người \"yếu tim\".\r\n\r\n“Người dọn dẹp hiện trường án mạng” sẽ đưa bạn đi từ hiện trường này tới hiện trường khác đầy sự kinh hoàng và bi thương như: khách thuê nhà ch,ết trong căn nhà trên tầng thượng; t..ự t…ử bằng cách treo cổ hay đốt than trong phòng kín; thi thể trương phình thối rữa trong bồn chứa nước… Hầu hết hiện trường án mạ', 0, 0, 0, 24, 5, 2023, 'Tiếng Việt', 200, 'Bìa Mềm', ''),
(56, 'Phòng Trọ Ba Người (Tái Bản 2022)', 2, 35000, 'nhatrobanguoi.jpg', 'Phòng trọ ba người là nơi dành cho ba chàng sinh viên Chuyên, Nhiệm, và Mẫn trú ngụ, là nơi họ chia sẻ việc học hành, những trò nghịch ngợm và chia sẻ cả những buồn vui trong đời sống tình cảm.\r\n\r\nMẫn, chàng trai nhút nhát vốn quan niệm tình yêu là thứ “ xa xỉ phẩm”, đến lúc phải dựng lên vở kịch tình yêu với sự trợ sức của Thu Thảo, cô học trò tinh nghịch của anh.\r\n\r\nTrò chơi tưởng chỉ để góp vào không khí sôi động của căn gác trọ ấy, không ngờ đã thực sự cuốn hút chàng trai chuyên “dị ứng với phụ nữ” ấy.\r\n\r\nKhi buộc lòng phải chấm dứt với trò chơi, cũng là lúc Mẫn cảm thấy bâng khuâng như phải chia tay với tình cảm thực sự.', 0, 0, 0, 1, 4, 2022, 'Tiếng Việt', 250, 'Bìa Mềm', ''),
(57, 'Những Người Hàng Xóm', 2, 88000, 'nhungnguoihangxom.jpg', 'Câu chuyện đi theo lời kể của một anh chàng mới lấy vợ, chuẩn bị đi làm và có ý thích viết văn. Anh chàng yêu vợ theo cách của mình, khen ngợi sùng bái người yêu cũng theo cách của mình, nhưng nhìn cuộc đời theo cách sống của những người hàng xóm. Sống trong tình yêu của vợ đầy mùi thơm và nhiều vị ngọt. Chứng kiến tình yêu của anh cảnh sát với cô bạn gái ngành y; mối tình thứ hai của người phụ nữ tốt bụng phát thanh viên ngôn ngữ ký hiệu. Và được chiêm nghiệm trong tình yêu đắm đuối mỗi ngày của ông họa sĩ già thương nhớ người vợ xinh đẹp-người mẫu, nàng thơ của ông.\r\n\r\nNhư một cuốn phim đầy màu sắc với âm điệu dịu dàng, êm ả. Cuộc sống bình yên của những người yêu thương nhau. Bài học về tình người đứng phía sau bài học về nghề viết, và cả trong câu chuyện về… một lối kinh doanh nhà cực kỳ đặc biệt!\r\n\r\nCâu chuyện mở ra sẽ là bất ngờ với bạn đọc “ruột” của Nguyễn Nhật Ánh, và kết thúc trong một sự dịu dàng nhẹ nhõm lòng, bởi nhà văn đã nhắc lại cho ta nhớ: cuộc sống luôn thật là tươi ', 0, 0, 0, 1, 4, 2023, 'Tiếng Việt', 215, 'Bìa Mềm', ''),
(58, 'Nói Không Với Nghịch Cảnh - Cùng Dale Carnegie Tiến Tới Thành Công', 5, 53000, 'noikhongvoinghichcanh.jpg', 'Các bạn còn nhớ nhân vật Forrest Gump trong bộ phim cùng tên không? Anh không thông minh như đại đa số chúng ta, nói chính xác thì là một người ngốc nghếch, có thể sống một cuộc đời yên ổn đã là may mắn lắm rồi. Nhưng anh chàng ngây ngô này lại luôn cố gắng xây dựng cuộc đời mình với tinh thần không bao giờ bỏ cuộc – thành lập công ty, có được tình bạn chân thành, cô gái mà anh luôn đem lòng yêu say đắm cuối cùng cũng trở về bên cạnh anh, tình yêu của anh được vẹn tròn. Có người nói đó là thần thoại của Hollywood, đồng thời cho rằng đó là tượng trưng của nước Mĩ và giấc mơ Mĩ. Dù bộ phim này có ngụ ý gì, thì hàng triệu người đã xúc động trước tinh thần tích cực của Forrest Gump, nhất là câu nói nổi tiếng: “Chạy, chạy đi! Forrest, chạy nhanh lên!” Người ta thường nói tính cách quyết định số phận, hai người có tính cách khác nhau, cho dù có trải nghiệm cuộc sống giống nhau, có thể vẫn sẽ đi theo những con đường đời hoàn toàn khác biệt. Hãy tiếp tục lật giở cuốn sách này để tìm hiểu điều ', 0, 0, 0, 30, 3, 2018, 'Tiếng Việt', 260, 'Bìa Mềm', ''),
(59, 'Power Vs Force - Trường Năng Lượng Và Những Nhân Tố Quyết Định Hành Vi Của Con Người (Tái Bản)', 7, 143000, 'PowerVsForce.jpg', 'Tiến sĩ, bác sĩ tâm thần, nhà nghiên cứu nhận thức và giảng viên tâm linh nổi tiếng người Mỹ, ông David R.Hawkins (1927–2012), đã chứng minh được mối liên hệ mật thiết giữa bệnh tật của con người và những suy giảm năng lượng trong cơ thể, đến từ những tư tưởng tiêu cực. Kết quả nghiên cứu được ông trình bày trong cuốn sách bán chạy nhất của mình- “Power vs Force – Trường năng lượng và những nhân tố quyết định tinh thần, sức khỏe con người”.\r\n\r\nTheo đó, mỗi người có một tần số rung động hay mức năng lượng khác nhau tùy theo cảnh giới tinh thần của họ, nằm trong khoảng từ 1 đến 1000.', 0, 0, 0, 5, 3, 2022, 'Tiếng Việt', 398, 'Bìa Mềm', ''),
(60, 'Quẳng Gánh Lo Đi Và Vui Sống', 5, 124000, 'quangganhlodivavuisong.jpg', 'Tại sao bạn không thể thoát ra được những rắc rối và ưu phiền của chính mình?\r\n\r\nMỗi khi gặp phải một trở ngại, những cảm xúc tiêu cực giống như một thỏi nam châm thu hút toàn bộ tinh thần của bạn. Khi bạn cho phép một nỗi lo phiền bất lực đầu tiên được phép manh nha trong tâm thức, chúng sẽ ùa đến như hàng ngàn con sóng dồn.\r\n\r\nRồi khi bạn mở mắt, thức dậy, nghĩ đến những công việc đang chờ, những dự định dang dở, những gánh nặng mưu sinh hay những mối quan hệ khó khăn trong việc duy trì, bạn lại tự nhấn chìm mình vào cái hộc u tối của biển đen tĩnh mịch.\r\n\r\nNhưng, chẳng phải mặt trời đã ló rạng rồi hay sao, ngày mới đã tỏa sáng đến cả trong đôi mắt bạn rồi đấy. “Quẳng gánh lo đi và vui sống” thôi!\r\n\r\nCuốn sách Quẳng gánh lo đi và vui sống (How to Stop Worrying and Start Living) không dạy bạn cách từ bỏ hoàn toàn các vấn đề trong cuộc sống, mà sẽ chỉ cho bạn làm thế nào để vui sống, tận hưởng trong không gian trách nhiệm.\r\n\r\nCuộc đời là một cán cân thăng bằng, bạn không thể sống mà kh', 0, 0, 0, 10, 3, 2023, 'Tiếng Việt', 540, 'Bìa Mềm', ''),
(61, 'Sĩ Số Lớp Vắng 0', 4, 71000, 'sisolopvang0.jpg', '“Tiếng gọi bí ẩn trong căn phòng đó dường như chỉ có mình tôi nghe thấy.”\r\n\r\n“Lớp học này từng có người c.h.ế.t.”\r\n\r\n“Người ta đồn rằng, vào buổi tối, trường này có ma.”\r\n\r\nSau khi bóng đêm nuốt trọn ngôi trường, những điều quỷ dị đã xảy ra…Nơi chiếc bàn học cuối lớp thỉnh thoảng lại vang lên tiếng gọi, chẳng nghe rõ tiếng nhưng như một loại thuốc mê khiến con người ta không thể điều khiển nổi tâm trí mà đi theo… một thứ quỷ dị đanglen lỏi trong từng ngóc ngách của lớp học này.\r\n\r\n“SĨ SỐ LỚP VẮNG 0” là cuốn sách được chắp bút bởi EMMA HẠ MY - chủ sở hữu kênh Youtube “Truyện của Emma” đăng tải những câu chuyện kinh dị tự sáng tác bằng hình ảnh hoạt họa do chính tác giả thực hiện. Cuốn sách bao gồm “Vệt Phấn Trên Bảng Đen” và 9 truyện ngắn khác CHƯA TỪNG xuất hiện trên kênh của Emma Hạ My.\r\n\r\nTrải qua 10 câu chuyện, cuốn sách sẽ đưa bạn bước vào một thế giới đầy ám ảnh rùng mình khi nhắc đến như: hồn ma của nữ sinh bị g….iết và hã…m hi…ếp rồi ngụy tạo thành tr.eo c.ổ t..ự t..ử; nam sinh ', 0, 0, 0, 25, 5, 2023, 'Tiếng Việt', 264, 'Bìa Mềm', ''),
(62, 'Thao Túng Tâm Lý - Nhận Diện, Thức Tỉnh Và Chữa Lành Những Tổn Thương Tiềm Ẩn', 7, 118000, 'thaotungtamly.jpg', 'Trong cuốn “Thao túng tâm lý”, tác giả Shannon Thomas giới thiệu đến độc giả những hiểu biết liên quan đến thao túng tâm lý và lạm dụng tiềm ẩn.\r\n\r\n“Thao túng tâm lý” là một dạng của lạm dụng tâm lý. Cũng giống như lạm dụng tâm lý, thao túng tâm lý có thể xuất hiện ở bất kỳ môi trường nào, từ bất cứ đối tượng độc hại nào. Đó có thể là bố mẹ ruột, anh chị em ruột, người yêu, vợ hoặc chồng, sếp hay đồng nghiệp… của bạn. Với tính chất bí hiểm, âm thầm gây hại, thao túng, lạm dụng tâm lý làm tổn thương cảm xúc, lòng tự trọng, cuộc sống của mỗi nạn nhân. Những người từng bị lạm dụng tâm lý thường không thể miêu tả rõ ràng điều gì đã xảy ra với mình. Trong nhiều trường hợp, nạn nhân bị thao túng đến mức tự hỏi có phải họ là người có lỗi, thậm chí họ có phải là người độc hại trong mối quan hệ đó.\r\n\r\nHành vi của (những) kẻ lạm dụng giống như một trò chơi bí ẩn, tệ hại và lặp đi lặp lại, do một cá nhân hoặc một nhóm người thực hiện với nạn nhân. Những hành vi này được ngụy trang tài tình đến mứ', 0, 0, 0, 26, 5, 2022, 'Tiếng Việt', 328, 'Bìa Mềm', ''),
(63, 'Thao Túng Về Tiền\r\n\r\n', 7, 134000, 'thaotungvetien.jpg', 'Tiền bạc là một chủ đề nhạy cảm không phải ai cũng muốn đề cập đến trong cuộc sống. Tuy nhiên, tiền có thể được sử dụng như một phương tiện để nắm giữ quyền lực và kiểm soát đối phương. Chúng ta gọi những trường hợp đó là “Lạm dụng tài chính”. Lạm dụng tài chính có thể kìm kẹp bạn trong mối quan hệ bị lạm dụng và cũng có thể ảnh hưởng đến khả năng giữ an toàn cho bản thân bạn.\r\n\r\nLạm dụng tài chính là gì? Liệu rằng bạn có đang bị “lạm dụng”\r\nCuốn sách “Thao túng về tiền” sẽ cho bạn cơ hội vén tấm màn che đậy và thấy được cuộc sống của những người bị tổn hại tài chính do những người thân thiết với họ gây ra. Nó cũng giúp bạn có được cái nhìn cụ thể và sâu sắc hơn về lạm dụng tài chính để nhận biết sớm, có hành động dứt khoát giúp bạn thoát khỏi hố sâu tâm lý và chữa lành những tổn thương tiềm ẩn.', 0, 0, 0, 26, 5, 2023, 'Tiếng Việt', 224, 'Bìa Mềm', ''),
(64, 'Thiên Tài Bên Trái, Kẻ Điên Bên Phải (Tái Bản 2021)', 7, 125000, 'thientaibentrai.jpg\r\n', 'NẾU MỘT NGÀY ANH THẤY TÔI ĐIÊN, THỰC RA CHÍNH LÀ ANH ĐIÊN ĐẤY!\r\n\r\nHỡi những con người đang oằn mình trong cuộc sống, bạn biết gì về thế giới của mình? Là vô vàn thứ lý thuyết được các bậc vĩ nhân kiểm chứng, là luật lệ, là cả nghìn thứ sự thật bọc trong cái lốt hiển nhiên, hay những triết lý cứng nhắc của cuộc đời?\r\n\r\nLại đây, vượt qua thứ nhận thức tẻ nhạt bị đóng kín bằng con mắt trần gian, khai mở toàn bộ suy nghĩ, để dòng máu trong bạn sục sôi trước những điều kỳ vĩ, phá vỡ mọi quy tắc. Thế giới sẽ gọi bạn là kẻ điên, nhưng vậy thì có sao? Ranh giới duy nhất giữa kẻ điên và thiên tài chẳng qua là một sợi chỉ mỏng manh: Thiên tài chứng minh được thế giới của mình, còn kẻ điên chưa kịp làm điều đó. Chọn trở thành một kẻ điên để vẫy vùng giữa nhân gian loạn thế hay khóa hết chúng lại, sống mãi một cuộc đời bình thường khiến bạn cảm thấy hạnh phúc hơn?\r\n\r\nThiên tài bên trái, kẻ điên bên phải là cuốn sách dành cho những người điên rồ, những kẻ gây rối, những người chống đối, những mảnh ', 0, 0, 0, 35, 1, 2021, 'Tiếng Việt', 424, 'Bìa Mềm', ''),
(65, 'Thuật Thao Túng - Góc Tối Ẩn Sau Mỗi Câu Nói', 7, 97000, 'thuatthaotung.jpg', 'Bạn có muốn giành phần thắng cuối cùng trong các cuộc tranh luận?\r\n\r\nBạn có muốn dẹp đi bộ mặt kiêu ngạo của các đồng nghiệp xung quanh mình?\r\n\r\nBạn có muốn chứng minh rằng bạn đã đúng về mọi thứ?\r\n\r\nĐây là quyển sách chứa đựng đáp án mà bạn mong muốn. Thuật thao túng sẽ giúp bạn thuần thục các kỹ năng thuộc bộ môn “nghệ thuật” làm chủ cảm xúc, làm chủ vận mệnh, điều chỉnh tâm lý và đạt được thứ bạn muốn một cách tinh vi: thao túng tâm lý người đối diện, khiến họ hành động theo hướng ta mong đợi. Không những vậy, quyển sách còn giúp bạn nhìn nhận lại về định nghĩa thao túng, những tốt-xấu ẩn giấu đằng sau và giải đáp vấn đề đạo đức con người mà bạn luôn trăn trở khi thực hiện những hành vi này. Bật mí, con người khi vừa sinh ra đã làm một thao tác thao túng tâm lý người khác rồi đấy!\r\n\r\nCó thể bạn chưa biết, bạn đã và đang thao túng người khác hoặc bị người khác thao túng thông qua cử chỉ ngôn hành mỗi ngày, như-một-trò-đùa.\r\n\r\nCó thể bạn chưa biết, nạn nhân bị thao túng chưa chắc đã r', 0, 0, 0, 27, 1, 2022, 'Tiếng Việt', 344, 'Bìa Mềm', ''),
(66, 'Thương Nhớ Trà Long (Tái Bản 2019)', 2, 66000, 'thuongnhotralong.jpg', 'Một cuốn sách lãng mạn, trong từng con chữ đầy ắp tình yêu với mưa, với lá, với ngôi nhà cũ, cuốn sách xưa, cùng nỗi nhớ quê và những kỷ niệm thuở nhỏ... Có thể thấy mùi vị của những món ăn mẹ nấu, màu sắc trái cây mẹ mua, những trò chơi của con nhà nghèo…, từ ký ức tác giả đã vẽ ra cho người đọc cả một miền quê với hình ảnh, bối cảnh, không gian, con người của thời ấy, chân thực và tinh tế.', 0, 0, 1, 1, 4, 2019, 'Tiếng Việt', 211, 'Bìa Mềm', ''),
(67, 'Tôi Thấy Hoa Vàng Trên Cỏ Xanh (Tái Bản 2023)', 2, 135000, 'toithayhoavangtrencoxanh.jpg', 'Những câu chuyện nhỏ xảy ra ở một ngôi làng nhỏ: chuyện người, chuyện cóc, chuyện ma, chuyện công chúa và hoàng tử , rồi chuyện đói ăn, cháy nhà, lụt lội,... Bối cảnh là trường học, nhà trong xóm, bãi tha ma. Dẫn chuyện là cậu bé 15 tuổi tên Thiều. Thiều có chú ruột là chú Đàn, có bạn thân là cô bé Mận. Nhưng nhân vật đáng yêu nhất lại là Tường, em trai Thiều, một cậu bé học không giỏi. Thiều, Tường và những đứa trẻ sống trong cùng một làng, học cùng một trường, có biết bao chuyện chung. Chúng nô đùa, cãi cọ rồi yêu thương nhau, cùng lớn lên theo năm tháng, trải qua bao sự kiện biến cố của cuộc đời.\r\n\r\nTác giả vẫn giữ cách kể chuyện bằng chính giọng trong sáng hồn nhiên của trẻ con. 81 chương ngắn là 81 câu chuyện hấp dẫn với nhiều chi tiết thú vị, cảm động, có những tình tiết bất ngờ, từ đó lộ rõ tính cách người. Cuốn sách, vì thế, có sức ám ảnh.', 0, 0, 0, 1, 4, 2023, 'Tiếng Việt', 378, 'Bìa Mềm', ''),
(68, 'Trong Gia Đình', 1, 79000, 'tronggiadinh.jpg', 'Trong các tác phẩm của Hector Malot: KHÔNG GIA ĐÌNH và TRONG GIA ĐÌNH là hai tác phẩm xuất sắc viết về: những cuộc phiêu lưu của lòng dũng cảm và tình cảm gia đình. Hai tác phẩm này có tác dụng giáo dục cao nên đã được giải thưởng của Viện Hàn lâm văn học Pháp. Nó vượt qua biên giới Pháp và đã được đón nhận nồng nhiệt ở khắp mọi nơi.\r\n\r\nHector Malot viết TRONG GIA ĐÌNH gồm hai tập với bốn mươi chương. Để các bạn đọc nhỏ tuổi tiện theo dõi, người dịch đã phiên âm tên và địa danh cho dể đọc và sắp xếp các tựa đề hợp với cốt truyện như: Tình mẹ con, Lên đường thôi! Điều bất ngờ kỳ diệu,… Rôbinxơn tý hon, Theo dõi và bao vây, Chờ mong…Tuyệt vọng, Chiếc đũa thần của nàng tiên…\r\n\r\n', 0, 0, 0, 19, 2, 2018, 'Tiếng Việt', 414, 'Bìa Mềm', ''),
(69, 'Trong Gia Đình (Tái Bản 2023)', 1, 121000, 'tronggiadinhtaiban2023.jpg', 'Trong Gia Đình kể về cuộc đời của cô bé Perin, mới 12 tuổi đã mồ côi cha mẹ. Trơ trọi một mình giữa những người xa lạ với bao khó khăn, nguy hiểm phía trước.\r\n\r\nPerin đã từng ở một mình giữa rừng sâu trong đêm tối với bao nỗi kinh hoàng, khiếp hãi. Có khi mệt mỏi, đói khát đã làm em kiệt sức, mê man bất tỉnh. Một sự tình cờ kì diệu đã kéo em về với cuộc sống.\r\n\r\nPerin là cô gái can đảm có ý thức tự lập, lòng tự trọng và niềm say mê sáng tạo. Không chịu đầu hàng số phận, bằng mọi cách cố gắng vươn lên. Dầu cực nhọc, đói khổ em vẫn luôn vui vẻ lạc quan với suy nghĩ: Người ta sẽ thành công khi có nghị lực, lòng quyết tâm và sáng tạo. Và trong lòng cô bé, ta vẫn thấy sáng ngời những nụ hôn dấu yêu của mẹ cha, giờ phút êm đềm của năm tháng ấu thơ và những ước mong tốt đẹp về sự sống còn nhiều, nhiều lắm điều lí thú.', 0, 0, 0, 19, 2, 2023, 'Tiếng Việt', 488, 'Bìa Mềm', ''),
(70, 'Trở Về Từ Cõi Sáng (Tái Bản 2022)', 5, 78000, 'trovetucoisang.jpg', 'Thế giới tâm linh và những bí mật bên kia cửa tử Sinh – lão – bệnh – tử là quy luật của đời người dù muốn hay không muốn con người vẫn phải trải qua. Vòng quay của quy luật ấy đối với mỗi con người có thể dài hay ngắn, nhưng có sinh, có tử là điều tất yếu. Đã là con người, cho dù đẹp đẽ hay xấu xa, giàu có hay nghèo hèn, khôn ngoan hay khờ dại thì chúng ta cũng không sao tránh khỏi sự chết. Thế nhưng nói đến sự chết ai cũng sợ, cũng chính vì sợ mà không đi sâu tìm hiểu và chuẩn bị về mặt tâm lý để chấp nhận nó một cách nhẹ nhõm. Thần chết luôn luôn bám đuổi cuộc sống con người như  hình với bóng và có thể buộc cuộc sống của mỗi người dừng lại theo cách khác nhau.', 0, 0, 0, 22, 3, 2022, 'Tiếng Việt', 208, 'Bìa Mềm', ''),
(71, 'Trở Về Từ Xứ Tuyết (Tái Bản 2019)', 5, 78000, 'trovetuxutuyet.jpg', 'Trở về từ xứ tuyết là cuốn sách tiếp theo trong bộ sách về văn hóa, tâm linh của dịch giả Nguyên Phong được First News xuất bản. Sau cuốn sách về cuộc hành trình “Đường mây qua xứ tuyết” các ngài đã được biết Tây Tạng là một xứ nằm ở vị trí hiểm trở, biệt lập với thế giới bên ngoài, nhờ thế nó duy trì được một nền văn minh cổ khác với những nền văn minh mà chúng ta được biết đến.\r\n\r\nKhông một ai đặt chân vào Tây Tạng mà không chịu ảnh hưởng của nó, và không ai có thể chui rúc vào đời sống chật hẹp khi đã nhìn thấy sự bao la hùng vĩ của rặng Tuyết Sơn. Trở về từ xứ tuyết sẽ tiếp nối cho cuộc hành trình đi đến Tuyết Sơn và từ Tuyết Sơn trở về. Đối với nơi đây, nhiều người cho rằng đó là nơi linh thiêng nhưng một số nguời lại cho rằng nơi đây lại là nơi hoang đường và không có thật. Nhưng cho dù thế nào đi nữa, thì các bậc hiền triết trên Tuyết Sơn đã minh chứng được điều đó và đã củng cố niềm tin tôn giáo một cách vững chắc hơn về những điều mà trước đó, tuy được học hỏi qua truyền thống', 0, 0, 1, 22, 3, 2019, 'Tiếng Việt', 232, 'Bìa Mềm', ''),
(72, 'Tự Học 2000 Từ Vựng Tiếng Anh Theo Chủ Đề (Tái Bản)', 3, 43000, 'tuhoc2000tutienganh.jpg', 'Nhà ngôn ngữ học nổi tiếng D.A.Wilkins đã nói rằng “Without grammar, very little can be conveyed; without vocabulary, nothing can be conveyed.” (Không có ngữ pháp, rất ít thông tin có thể được truyền đạt; Không có từ vựng, không một thông tin nào có thể được truyền đạt cả). Vì thế, trong việc học một ngoại ngữ, thì từ vựng có thể xem như các tế bào nhỏ hình thành nên khả năng sử dụng ngoại ngữ của người học.\r\n\r\nCác bạn đang băn khoăn chưa biết nên học từ vựng như thế nào để có thể ghi nhớ được nhiều từ và lâu nhất. Dưới đây là những phương pháp học mà các bạn có thể áp dụng để học từ vựng hiệu quả nhất.\r\n\r\n1. Học từ vựng theo chủ đề\r\n2. Sử dụng hình ảnh, âm thanh hay câu chuyện để ghi nhớ từ vựng nhanh\r\n3. Học từ vựng qua bài hát, phim ảnh\r\n4. Luôn có một cuốn sổ tay ghi từ mới\r\n5. Tập sử dụng các từ mới và ôn tập thường xuyên\r\n', 0, 0, 0, 3, 2, 2019, 'Tiếng Việt', 260, 'Bìa Mềm', ''),
(73, 'Về Nơi Có Nhiều Cánh Đồng (Tái Bản 2023)', 1, 135000, 'venoiconhieucanhdong.jpg', 'Về nơi có nhiều cánh đồng à cuốn du ký hoạ mới nhất của Lê Phan (Câu lạc bộ nghiên cứu bí ẩn, Xứ Mèo). Đây là tuyển tập ghi chép bằng tranh những câu chuyện thú vị trong hành trình di cư từ thành thị đến thung lũng Têu-y-pot trong lòng núi Ngọc Linh (Kon Tum) của Phan và các bạn trẻ thuộc INDIgo home. Với cách thể hiện độc đáo, kể chuyện hài hước nhưng không kém phần sâu sắc, đây là một món quà tinh thần tuyệt vời dịp cuối năm để \"detox\" tâm hồn.\r\n\r\nNét vẽ của Phan ở tập này đã trở nên tự nhiên và nhẹ nhàng như hơi thở -- đây không chỉ là biểu hiện của một tâm hồn nhạy cảm và trong sáng, mà còn là kết quả của một quá trình làm việc nghiêm túc và kiên trì. Mỗi năm xuất bản một tập sách, tập sau hay hơn, sáng tạo hơn và sâu sắc hơn tập trước, loại tinh thần làm việc ấy ít người tự gọi mình là sáng tạo trên mảnh đất này có được.', 0, 0, 0, 28, 1, 2023, 'Tiếng Việt', 336, 'Bìa Mềm', ''),
(74, 'Yêu Những Điều Không Hoàn Hảo', 5, 97000, 'yeunhungdieukhonghoanhao.jpg', '“Ngẫm lại cuộc sống của chính mình, ta sẽ nhận thấy rất nhiều điều không hoàn hảo. Trước hết, chỉ nhìn vào bản thân mình thôi ta đã cảm nhận được nhiều thiếu sót rồi: lời nói và hành động mâu thuẫn với nhau, vụng về trong những mối quan hệ xã hội, chuyện học hành, công việc không suôn sẻ như ý muốn. Chưa kể đôi khi ta còn khiến người khác tổn thương, thậm chí còn làm những việc khiến bản thân cảm thấy tội lỗi và hối hận. Và khi nhìn vào những người thân trong gia đình, bạn bè, đồng nghiệp, ta cũng nhận thấy những điều không-hoàn-hảo tương tự như vậy.', 0, 0, 0, 7, 3, 2018, 'Tiếng Việt', 295, 'Bìa Mềm', ''),
(75, 'Nhà Hàng Ở Tận Cùng Vũ Trụ', 4, 81000, 'vutru1.jpg', 'Bầu trời đêm trên hành tinh Krikkit là cảnh tượng kém thú vị nhất: đen ngòm không một ánh trăng sao. Đó là lý do người Krikkit sốc nặng khi thấy một con tàu vũ trụ bốc cháy ngùn ngụt lao về phía mình. Thì ra ngoài chốn điền viên mục đồng họ vốn quen thuộc từ thời cổ đại, còn tồn tại muốn vận thế giới khác ngoài khoảng không bao là đen kịt gọi là Vũ Trụ !!! Những cư dân hiền hòa yêu ca hát ấy làm gì để vượt qua cú choáng váng này? Họ quyết tiêu diệt toàn bộ sự sống, Vũ Trụ và vạn vật ngoài hành tinh.\r\n\r\nSong, đứng chắn lù lù giữa họ và sự tận diệt của Vũ Trụ vẫn còn năm nhân vật đã thân quen với chúng ta qua hai cuốn đầu của series Bí kíp quá giang vào Ngân Hà. Họ, bằng sức mạnh của sự ngớ ngẩn, điên rồ, nhảm nhít, trầm cảm, nhát cáy (ừ thì cũng còn le lói chút trí tuệ từ người này sang người kia), liệu có cứu được thế giới, hay đúng hơn là, Vũ Trụ?\r\n\r\n“Trào phúng cực mạnh... nhân vật chính vô tích sự Arthur Dent gợi nhắc đến các người hùng trong sách của Kurt Vonnegut.” - CHICAGO TRIBU', 0, 0, 0, 29, 1, 2022, 'Tiếng Việt', 294, 'Bìa Mềm', ''),
(76, 'Sự Sống, Vũ Trụ Và Vạn Vật', 4, 107000, 'vutru4.jpg', 'Bầu trời đêm trên hành tinh Krikkit là cảnh tượng kém thú vị nhất: đen ngòm không một ánh trăng sao. Đó là lý do người Krikkit sốc nặng khi thấy một con tàu vũ trụ bốc cháy ngùn ngụt lao về phía mình. Thì ra ngoài chốn điền viên mục đồng họ vốn quen thuộc từ thời cổ đại, còn tồn tại muốn vận thế giới khác ngoài khoảng không bao là đen kịt gọi là Vũ Trụ !!! Những cư dân hiền hòa yêu ca hát ấy làm gì để vượt qua cú choáng váng này? Họ quyết tiêu diệt toàn bộ sự sống, Vũ Trụ và vạn vật ngoài hành tinh.\r\n\r\nSong, đứng chắn lù lù giữa họ và sự tận diệt của Vũ Trụ vẫn còn năm nhân vật đã thân quen với chúng ta qua hai cuốn đầu của series Bí kíp quá giang vào Ngân Hà. Họ, bằng sức mạnh của sự ngớ ngẩn, điên rồ, nhảm nhít, trầm cảm, nhát cáy (ừ thì cũng còn le lói chút trí tuệ từ người này sang người kia), liệu có cứu được thế giới, hay đúng hơn là, Vũ Trụ?\r\n\r\n“Trào phúng cực mạnh... nhân vật chính vô tích sự Arthur Dent gợi nhắc đến các người hùng trong sách của Kurt Vonnegut.” - CHICAGO TRIBU', 0, 0, 0, 29, 1, 2022, 'Tiếng Việt', 294, 'Bìa Mềm', ''),
(77, 'Hầu Như Vô Hại', 4, 130000, 'vutru2.jpg', 'Khi hành tinh quê nhà nổ tung, người phụ nữ ta yêu bỗng bốc hơi vì một hiểu nhầm tai hại về không-thời gian, còn tàu vũ trụ của ta lao xuống tan xác trên một hành tinh hẻo lánh… thì chán đời cũng là dễ hiểu thôi phải không? Chán nản đến cùng cực, Arthur chỉ biết tìm quên trong những chuyến quá giang bất tận. Oái oăm thay, ngay khi anh bắt đầu nhen nhóm niềm vui sống và tưởng như bi kịch đã vĩnh viễn buông tha mình, thì bi kịch, chực chờ đúng lúc ấy, lại sổ ra.\r\n\r\nBi kịch ẩn dưới muôn hình vạn trạng: dưới hình dạng tiêu chuẩn của một ấn bản Bí kíp quá giang vào Ngân Hà mới toanh, rồi mang hình hài bất ngờ của một cô bé tuổi teen nổi loạn. Một lần nữa, Arthur lại phải cứu Trái Đất, cứu cuốn Bí kíp, cứu cô bé lạ lùng kia. Và một lần nữa, anh hoàn toàn ngơ ngác.\r\n\r\nCuốn cuối cùng của bộ truyện đem đến một cái kết có thể gây nhiều tranh cãi, nhưng chắc chắn là một kết thúc gợi nhiều suy ngẫm cho một hành trình phiêu lưu tuyệt vời dày đặc những cú ngoặt, những lý thuyết khoa học điên rồ và, ', 0, 0, 0, 29, 1, 2023, 'Tiếng Việt', 316, 'Bìa Mềm', ''),
(78, 'Vĩnh Biệt, Cảm Ơn Vì Đã Cho Ăn Cá', 4, 108000, 'vutru3.jpg', 'Tám năm lưu lạc trong Vũ Trụ, và đây, Arthur Dent lại được đĩa bay thả xuống một hành tinh nhỏ sau một chuyến quá giang dài dằng dặc băng qua dải Ngân Hà. Giữa đêm đen mịt mùng. Trong dông tố bão bùng. Anh đứng chờ.\r\n\r\nMột chiếc ô tô lướt qua.\r\n\r\nTRÁI ĐẤT! Quê nhà đây ư? Chẳng phải hành tinh xanh lơ xanh lá này đã bị san phẳng để xây đường cao tốc liên không gian rồi sao? Có lẽ nào bao nhiêu năm tháng bị quăng quật nhừ tử trong Ngân Hà vừa qua chỉ là một “ảo giác”?\r\n\r\nDẫu những màn trào phúng đặc sệt Anh vẫn là không khí bao trùm series Bí kíp quá giang vào Ngân Hà, cuốn thứ tư của bộ truyện dễ dàng đứng tách biệt và nổi bật. Chính ở đây, độc giả yêu thích những câu chuyện có hậu sẽ tìm được cho mình một cái kết thỏa mãn cho một cuộc phiêu lưu kỳ thú nho nhỏ và một mối tình bay bổng lãng mạn. Vĩnh biệt, cảm ơn vì đã cho ăn cá - đừng để cái tên có vẻ tưng tửng đánh lừa, vì các bạn sẽ nao lòng trước vẻ đẹp và sự quyến rũ ngọt ngào của nó.', 0, 0, 0, 29, 3, 2023, 'Tiếng Việt', 231, 'Bìa Mềm', ''),
(79, 'Bí Kíp Quá Giang Vào Ngân Hà', 4, 63000, 'vutru5.jpg', 'Chuyện kể rằng, sau những cuốc xe quá giang từ Anh quốc tới tận Thổ Nhĩ Kỳ, tác giả của chúng ta, anh chàng Douglas Adams rỗng túi say khướt nằm dưới trời đêm mộng tưởng về một ngày đi nhờ tàu vũ trụ lang thang giữa các vì tinh tú. Và thế là Bí kíp quá giang vào Ngân Hà ra đời: là tất cả những điều cần biết nếu bạn nghèo kiết xác mà lại khao khát chiêm ngưỡng các kỳ quan của Vũ Trụ, chỉ với chưa đầy ba mươi đô la Ngưu Lang một ngày.\r\nVới Bí kíp trong tay, một nhóm người ngoài hành tinh kỳ quặc bên cạnh, và một Trái Đất nổ tung sau lưng, Arthur đột nhiên trở thành kẻ lữ hành lạc trôi trong Vũ Trụ. Không, câu chuyện sẽ không mộng mơ hay nghiêm túc như bạn tưởng, mà quay cuồng giữa những trò khôi hài, ngẫu hứng, điên rồ. Một truyện khoa học viễn tưởng cực kỳ hài hước, bạn có tin không?', 0, 10, 0, 29, 3, 2017, 'Tiếng Việt', 245, 'Bìa Mềm', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

CREATE TABLE `tacgia` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tacgia`
--

INSERT INTO `tacgia` (`id`, `name`) VALUES
(1, 'Nguyễn Nhật Ánh'),
(2, 'Clint Emerson'),
(3, 'The Windy'),
(4, 'Miêu Công Tử'),
(5, 'David R. Hawkins'),
(6, 'Uketsu'),
(7, 'Hae Min'),
(8, 'Vãn Tình'),
(9, 'Lê Bảo Ngọc'),
(10, 'Dale Carnegie'),
(11, 'Châu Sa Đáy Mắt'),
(12, 'Edogawa Ranpo'),
(13, 'Từ Thính Phong'),
(14, 'Yun Kyo Hoon'),
(15, 'Lưu Hiểu Huy'),
(16, 'Trần Duẫn Hạo'),
(17, 'Minh Niệm'),
(18, 'Tiến sĩ Stuart Farrimond'),
(19, 'Hector Malot'),
(20, 'Ngô Sa Thạch'),
(21, 'Hạ Mer'),
(22, 'Nguyên Phong'),
(23, 'Hải Dương'),
(24, 'Lư Lạp Lạp'),
(25, 'Emma Hạ My'),
(26, 'Shannon Thomas, LCSW'),
(27, 'Wladislaw Jachtchenko'),
(28, 'Phan'),
(29, 'Douglas Adams'),
(30, 'XIONG LI FAN'),
(31, 'Kazue Kato'),
(32, 'Muneyuki Kaneshiro, Yusuke Nomura'),
(33, 'Daisuke Ashihara'),
(34, 'Norihiro Yagi'),
(35, 'Cao Minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL DEFAULT 'user1.png',
  `diachi` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `dienthoai` int(12) DEFAULT NULL,
  `role` int(2) NOT NULL DEFAULT 0,
  `diem_tich_luy` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `img`, `diachi`, `email`, `dienthoai`, `role`, `diem_tich_luy`) VALUES
(57, 'huy', '123', '', 'user1.png', '', 'votronghuy1203@gmail.com', 0, 0, 5),
(58, 'Huy1', '123', '', 'user1.png', '', 'votronghuy12003@gmail.com', 0, 0, 0),
(59, 'huy123', '123', '', 'user1.png', NULL, 'votronghuy120003@gmail.com', NULL, 0, 0),
(63, 'huy303', '123', '', 'user1.png', NULL, 'ngochuy2k4hh@gmail.com', NULL, 0, 0),
(74, 'hy', '1111', '', 'user1.png', NULL, 'votronghuy1204@gmail.com', NULL, 0, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `sotien_giam` int(11) NOT NULL,
  `diemtichluy_can` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `voucher`
--

INSERT INTO `voucher` (`id`, `sotien_giam`, `diemtichluy_can`) VALUES
(1, 10, 10),
(3, 20, 20),
(5, 30, 30),
(7, 40, 40),
(8, 50, 50);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucher_detail`
--

CREATE TABLE `voucher_detail` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_voucher` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `voucher_detail`
--

INSERT INTO `voucher_detail` (`id`, `id_user`, `id_voucher`, `status`) VALUES
(1, 57, 1, 0),
(2, 57, 1, 0),
(3, 59, 1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bill_user` (`iduser`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_BL_HH` (`idpro`),
  ADD KEY `FK_BL_U` (`iduser`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_BL_USER` (`id_user`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_GH_U` (`id_user`),
  ADD KEY `FK_GH_S` (`idpro`);

--
-- Chỉ mục cho bảng `detail_bill`
--
ALTER TABLE `detail_bill`
  ADD PRIMARY KEY (`id_dtb`),
  ADD KEY `fk_detail_bill` (`id_bill`),
  ADD KEY `fk_detail_sach` (`id_pro`);

--
-- Chỉ mục cho bảng `loaisach`
--
ALTER TABLE `loaisach`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nxb`
--
ALTER TABLE `nxb`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sach_nxb` (`id_nxb`),
  ADD KEY `fk_sach_tacgia` (`idtacgia`),
  ADD KEY `fk_sach_loaisach` (`idloaisach`);

--
-- Chỉ mục cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `voucher_detail`
--
ALTER TABLE `voucher_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_V_U` (`id_user`),
  ADD KEY `FK_V_S` (`id_voucher`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT cho bảng `detail_bill`
--
ALTER TABLE `detail_bill`
  MODIFY `id_dtb` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `loaisach`
--
ALTER TABLE `loaisach`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `nxb`
--
ALTER TABLE `nxb`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT cho bảng `tacgia`
--
ALTER TABLE `tacgia`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT cho bảng `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `voucher_detail`
--
ALTER TABLE `voucher_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `FK_BL_HH` FOREIGN KEY (`idpro`) REFERENCES `sach` (`id`),
  ADD CONSTRAINT `FK_BL_U` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `FK_BL_USER` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_GH_S` FOREIGN KEY (`idpro`) REFERENCES `sach` (`id`),
  ADD CONSTRAINT `FK_GH_U` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `detail_bill`
--
ALTER TABLE `detail_bill`
  ADD CONSTRAINT `FK_HDCT_HD` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `FK_HDCT_HH` FOREIGN KEY (`id_pro`) REFERENCES `sach` (`id`);

--
-- Các ràng buộc cho bảng `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `fk_sach_loaisach` FOREIGN KEY (`idloaisach`) REFERENCES `loaisach` (`id`),
  ADD CONSTRAINT `fk_sach_nxb` FOREIGN KEY (`id_nxb`) REFERENCES `nxb` (`id`),
  ADD CONSTRAINT `fk_sach_tacgia` FOREIGN KEY (`idtacgia`) REFERENCES `tacgia` (`id`);

--
-- Các ràng buộc cho bảng `voucher_detail`
--
ALTER TABLE `voucher_detail`
  ADD CONSTRAINT `FK_V_S` FOREIGN KEY (`id_voucher`) REFERENCES `voucher` (`id`),
  ADD CONSTRAINT `FK_V_U` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
