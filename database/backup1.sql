-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 10, 2025 lúc 01:02 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duogbachmobile`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `subtitle`, `image`, `category`, `content`, `created_at`, `updated_at`) VALUES
(1, 3, 'The Personality Trait That Makes People Happier', 'no title', 'blog_images/qdHrY2kcOMzDe8IHbVKfsMOv0g6eHHtGxIannKYb.jpg', 'TRAVEL', '1. Virus máy tính là gì?\r\nVirus máy tính là một loại mã độc hoặc những đoạn mã chương trình được thiết kế để xâm nhập vào máy tính. Ngay khi virus máy tính được cài vào máy, nó sẽ tự động nhân bản để lây lan với mục đích đánh cắp thông tin, xóa dữ liệu, làm hỏng ổ cứng,...\r\n\r\nvirus-may-tinh-la-mot-doan-ma-doc\r\n\r\nvirus-may-tinh-la-mot-doan-ma-doc\r\n\r\nVirus máy tính có nguồn gốc ban đầu xuất phát từ người am hiểu về lập trình muốn chứng tỏ bản thân. Tuy nhiên hiện nay virus máy tính ngày càng nguy hiểm khi nó hướng đến việc ăn cắp thông tin cá nhân (như là thông tin về mã thẻ tín dụng) từ đó chiếm đoạt tài khoản.\r\n\r\nhinh-mo-ta-virus-may-tinh-2\r\n\r\nhinh-mo-ta-virus-may-tinh-2\r\n\r\n2. Tác hại của virus máy tính\r\nVới sự phát triển của công nghệ 4.0 thì virus máy tính ngày nay không chỉ đơn thuần là gây khó chịu cho người dùng, làm hỏng hóc các phần cứng máy tính mà chúng còn hướng đến việc phá hủy dữ liệu, phá hủy hệ thống, đánh cắp dữ liệu, mã hóa thông tin để tống tiền.\r\n\r\nhinh-mo-ta-virus-may-tinh-7\r\n\r\nhinh-mo-ta-virus-may-tinh-7\r\n\r\n3. Các hình thức hoạt động, lây nhiễm của virus máy tính\r\nVirus lây nhiễm theo cách cổ điển\r\nVirus có thể lây lan vào máy tính thông qua USB, điện thoại, các ổ cứng gắn ngoài. Nếu những thiết bị này đã bị nhiễm virus thì máy tính cũng sẽ bị nhiễm virus nếu không có các biện pháp bảo vệ.\r\n\r\nhinh-mo-ta-virus-may-tinh-8\r\n\r\nhinh-mo-ta-virus-may-tinh-8\r\n\r\nVirus lây nhiễm qua thư điện tử\r\nLây nhiễm vào các file đính kèm theo thư điện tử.\r\n\r\nVí dụ: Bạn nhận được 1 email với các tiêu đề như nhận quà hay quảng cáo bán phần mềm giá rẻ, đừng click vào xem mà hãy xóa vào thùng rác để tránh việc virus được kích hoạt.\r\n\r\nhinh-mo-ta-virus-may-tinh-9\r\n\r\nhinh-mo-ta-virus-may-tinh-9\r\n\r\nLây nhiễm do mở 1 liên kết trong thư điện tử.\r\n\r\nVí dụ: Trong thư điện tử sẽ có chứa các liên kết để dẫn đến 1 trang web được cài sẵn virus, ngay khi nhấn vào liên kết máy của bạn cũng có khả năng nhiễm virus ngay.\r\n\r\nVirus lây nhiễm qua mạng Internet\r\nKhi tải file hoặc phần mềm trên mạng về máy tính, nếu file bị nhiễm virus thì khả năng cao nó sẽ lây lan sang máy tính bạn. Việc cần làm là nên lựa chọn các trang web uy tín để tải file và phần mềm.\r\n\r\nNgoài ra, trên các trang mạng xã hội, các ứng dụng trò chuyện cũng hay xuất hiện các link độc. Bạn không nên nhấn vào.\r\n\r\nhinh-mo-ta-virus-may-tinh-10\r\n\r\n4. Cách bảo vệ máy tính tránh khỏi virus xâm nhập\r\nSử dụng phần mềm diệt virus\r\nViệc cài đặt phần mềm diệt virus là rất cần thiết đối với bất kỳ người sử dụng máy tính bởi tính tiện dụng và sự an toàn trong bảo mật thông tin. Những phần mềm diệt virus bạn có thể cài đặt trên máy tính của mình như: Kaspersky, AVG, Avast,... Để xem chi tiết những phần mềm diệt virus tốt nhất hiện nay, mời bạn tham khảo TOP phần mềm diệt virus miễn phí tốt nhất trên máy tính.\r\n\r\nphan-mem-diet-virus\r\n\r\nMột số ứng dụng diệt virus tại Thế Giới Di Động\r\n\r\nESET NOD32 Antivirus chính hãng\r\n170.000₫\r\nXem đặc điểm nổi bật\r\n\r\nXem chi tiết\r\nXem thêm:\r\n\r\nCách diệt virus trên máy tính\r\nCài 2 phần mềm diệt virus có sao không? Đây là câu trả lời chuẩn xác!\r\nSử dụng tường lửa cá nhân\r\nCũng giống như phần mềm diệt virus thì tường lửa cũng cần sử dụng để bảo vệ máy tính trước những tác nhân gây hại. Tường lửa sẽ kiểm soát máy tính chặt chẽ để thông báo ngay tới người dùng khi có vấn đề.\r\n\r\nXem thêm: Cách bật, tắt tường lửa trên máy tính.\r\n\r\ntuong-lua-tranh-virus\r\n\r\ntuong-lua-tranh-virus\r\n\r\nCập nhật các bản vá lỗi của hệ điều hành\r\nHệ điều hành Windows luôn luôn bị phát hiện các lỗi bảo mật chính bởi sự thông dụng của nó, tin tặc có thể lợi dụng các lỗi bảo mật để chiếm quyền điều khiển hoặc phát tán virus và các phần mềm độc hại. Người sử dụng luôn cần cập nhật các bản vá lỗi của Windows thông qua trang web Microsoft Update (cho việc nâng cấp tất cả các phần mềm của hãng Microsoft) hoặc Windows Update (chỉ cập nhật riêng cho Windows). Cách tốt nhất hãy đặt chế độ nâng cấp (sửa chữa) tự động (Automatic Updates) của Windows. Tính năng này chỉ hỗ trợ đối với các bản Windows mà Microsoft nhận thấy rằng chúng hợp pháp.\r\n\r\nVận dụng kinh nghiệm sử dụng máy tính\r\nPhát hiện sự hoạt động khác thường của máy tính\r\n\r\nVí dụ: Khi thấy sự hoạt động chậm chạp của máy tính, nếu không phải do phần cứng gây ra thì cần nghi ngờ sự xuất hiện của virus. Lúc này nên cần kiểm tra bằng cách cập nhật dữ liệu mới nhất cho phần mềm diệt virus hoặc thử sử dụng một phần mềm diệt virus khác để quét toàn hệ thống.\r\n\r\nanh-load-cham\r\n\r\nanh-load-cham\r\n\r\nKiểm soát các ứng dụng đang hoạt động\r\n\r\nVí dụ: Kiểm soát sự hoạt động của các phần mềm trong hệ thống thông qua Task Manager để biết hệ thống đang chạy ngầm những ứng dụng nào, chiếm dung lượng bao nhiêu, CPU bao nhiêu,... để ngay khi có điều bất thường của hệ thống để có những hành động phòng ngừa phù hợp.', NULL, '2025-05-10 09:33:02'),
(2, 3, 'This was one of our first days in Hawaii last week.', 'title', 'blog_images/8e9eFQEYgPCnyCNYVnQT8P43bi7XG2lnqTa5k9sZ.jpg', 'duogbachdevON', 'Màn hình Anti-glare là màn hình chống chói được tích hợp với các màn hình LCD hiện nay. Đây là công nghệ với thiết kế gồm bảng điều khiển hoặc bộ lọc được sắp đặt trước màn hình giúp tránh được ánh sáng mặt trời và các nguồn ánh sáng khác khi sử dụng bên ngoài. Màn hình Anti-glare có thể được trang bị sẵn lớp phủ chống chói trực tiếp ngay trên bề mặt kính hoặc chỉ là một miếng dán màn hình để giảm độ ánh sáng', NULL, '2025-05-10 10:45:55'),
(3, 3, 'Last week I had my first work trip of the year to Sonoma Valley', 'title', 'blog_images/hXkgZL7PF4dKUkICBAgNQA6yYXFXKbRGPDMZy4tI.jpg', 'TRAVEL', 'Màn hình Anti-glare là màn hình chống chói được tích hợp với các màn hình LCD hiện nay. Đây là công nghệ với thiết kế gồm bảng điều khiển hoặc bộ lọc được sắp đặt trước màn hình giúp tránh được ánh sáng mặt trời và các nguồn ánh sáng khác khi sử dụng bên ngoài. Màn hình Anti-glare có thể được trang bị sẵn lớp phủ chống chói trực tiếp ngay trên bề mặt kính hoặc chỉ là một miếng dán màn hình để giảm độ ánh sáng', NULL, '2025-05-10 10:46:16'),
(4, 3, 'Happppppy New Year! I know I am a little late on this post', 'title', 'blog_images/x2ALj9lZfTb1eV7sPPVeqPIkJiu0OlAw12Gxrhnu.jpg', 'duogbachdevON', 'Màn hình Anti-glare là màn hình chống chói được tích hợp với các màn hình LCD hiện nay. Đây là công nghệ với thiết kế gồm bảng điều khiển hoặc bộ lọc được sắp đặt trước màn hình giúp tránh được ánh sáng mặt trời và các nguồn ánh sáng khác khi sử dụng bên ngoài. Màn hình Anti-glare có thể được trang bị sẵn lớp phủ chống chói trực tiếp ngay trên bề mặt kính hoặc chỉ là một miếng dán màn hình để giảm độ ánh sáng', NULL, '2025-05-10 10:46:59'),
(5, 3, 'Absolue collection. The Lancome team has been one…', 'title', 'blog_images/Bj9gpBHKQPpK0kBpLsMJ9BMhXgES7EkHcUB2vGcp.jpg', 'MODEL', 'Màn hình Anti-glare là màn hình chống chói được tích hợp với các màn hình LCD hiện nay. Đây là công nghệ với thiết kế gồm bảng điều khiển hoặc bộ lọc được sắp đặt trước màn hình giúp tránh được ánh sáng mặt trời và các nguồn ánh sáng khác khi sử dụng bên ngoài. Màn hình Anti-glare có thể được trang bị sẵn lớp phủ chống chói trực tiếp ngay trên bề mặt kính hoặc chỉ là một miếng dán màn hình để giảm độ ánh sáng', NULL, '2025-05-10 10:47:41'),
(6, 3, 'Writing has always been kind of therapeutic for me', 'title', 'blog_images/tgtiiRDZSLh6c1DYrNMqQoNIciXibhvxMClbwUX8.jpg', 'duogbachdevON', 'Màn hình Anti-glare là màn hình chống chói được tích hợp với các màn hình LCD hiện nay. Đây là công nghệ với thiết kế gồm bảng điều khiển hoặc bộ lọc được sắp đặt trước màn hình giúp tránh được ánh sáng mặt trời và các nguồn ánh sáng khác khi sử dụng bên ngoài. Màn hình Anti-glare có thể được trang bị sẵn lớp phủ chống chói trực tiếp ngay trên bề mặt kính hoặc chỉ là một miếng dán màn hình để giảm độ ánh sáng', NULL, '2025-05-10 10:48:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `messages` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Apple', NULL, NULL),
(2, 'Samsung', NULL, NULL),
(3, 'Oppo', NULL, NULL),
(4, 'Lenovo', NULL, NULL),
(5, 'Linh kiện khác', '2025-05-10 08:22:48', '2025-05-10 08:22:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Điện thoại', NULL, NULL),
(2, 'Laptop', NULL, NULL),
(3, 'Phụ kiện', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `log_action_admin_tools`
--

CREATE TABLE `log_action_admin_tools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin` bigint(20) UNSIGNED NOT NULL,
  `action` varchar(255) NOT NULL,
  `data` text DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `method` varchar(255) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `log_action_admin_tools`
--

INSERT INTO `log_action_admin_tools` (`id`, `admin`, `action`, `data`, `time`, `method`, `route`, `ip`, `created_at`, `updated_at`) VALUES
(9, 6, 'edit_product', '{\"product_id\":1,\"product_name\":\"Pure Pineapple\",\"admin_id\":6,\"admin_name\":\"nhien\"}', '2025-04-05 13:40:54', 'GET', NULL, '127.0.0.1', '2025-04-05 13:40:54', '2025-04-05 13:40:54'),
(10, 7, 'edit_product', '{\"admin_id\":7,\"admin_name\":\"nhien26\"}', '2025-05-10 03:09:48', 'GET', NULL, '127.0.0.1', '2025-05-10 03:09:48', '2025-05-10 03:09:48'),
(11, 7, 'edit_product', '{\"admin_id\":7,\"admin_name\":\"nhien26\"}', '2025-05-10 03:10:09', 'GET', NULL, '127.0.0.1', '2025-05-10 03:10:09', '2025-05-10 03:10:09'),
(12, 7, 'edit_product', '{\"admin_id\":7,\"admin_name\":\"nhien26\"}', '2025-05-10 03:12:11', 'GET', NULL, '127.0.0.1', '2025-05-10 03:12:11', '2025-05-10 03:12:11'),
(13, 7, 'edit_product', '{\"admin_id\":7,\"admin_name\":\"nhien26\"}', '2025-05-10 08:25:06', 'GET', NULL, '127.0.0.1', '2025-05-10 08:25:06', '2025-05-10 08:25:06'),
(14, 7, 'edit_product', '{\"admin_id\":7,\"admin_name\":\"nhien26\"}', '2025-05-10 08:25:43', 'GET', NULL, '127.0.0.1', '2025-05-10 08:25:43', '2025-05-10 08:25:43'),
(15, 7, 'edit_product', '{\"admin_id\":7,\"admin_name\":\"nhien26\"}', '2025-05-10 08:25:54', 'GET', NULL, '127.0.0.1', '2025-05-10 08:25:54', '2025-05-10 08:25:54'),
(16, 7, 'edit_product', '{\"admin_id\":7,\"admin_name\":\"nhien26\"}', '2025-05-10 08:26:10', 'GET', NULL, '127.0.0.1', '2025-05-10 08:26:10', '2025-05-10 08:26:10'),
(17, 7, 'edit_product', '{\"admin_id\":7,\"admin_name\":\"nhien26\"}', '2025-05-10 08:26:27', 'GET', NULL, '127.0.0.1', '2025-05-10 08:26:27', '2025-05-10 08:26:27'),
(18, 7, 'edit_product', '{\"admin_id\":7,\"admin_name\":\"nhien26\"}', '2025-05-10 08:33:44', 'GET', NULL, '127.0.0.1', '2025-05-10 08:33:44', '2025-05-10 08:33:44'),
(19, 7, 'edit_product', '{\"admin_id\":7,\"admin_name\":\"nhien26\"}', '2025-05-10 08:35:05', 'GET', NULL, '127.0.0.1', '2025-05-10 08:35:05', '2025-05-10 08:35:05'),
(20, 7, 'edit_product', '{\"admin_id\":7,\"admin_name\":\"nhien26\"}', '2025-05-10 08:35:22', 'GET', NULL, '127.0.0.1', '2025-05-10 08:35:22', '2025-05-10 08:35:22'),
(21, 7, 'edit_product', '{\"admin_id\":7,\"admin_name\":\"nhien26\"}', '2025-05-10 08:43:25', 'GET', NULL, '127.0.0.1', '2025-05-10 08:43:25', '2025-05-10 08:43:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_30_071728_create_orders_table', 1),
(6, '2023_09_30_071749_create_order_details_table', 1),
(7, '2023_09_30_071758_create_products_table', 1),
(8, '2023_09_30_071824_create_product_details_table', 1),
(9, '2023_09_30_071833_create_product_comments_table', 1),
(10, '2023_09_30_071843_create_product_images_table', 1),
(11, '2023_09_30_071910_create_brands_table', 1),
(12, '2023_09_30_071950_create_categories_table', 1),
(13, '2023_09_30_071958_create_blogs_table', 1),
(14, '2023_09_30_072006_create_blog_comments_table', 1),
(15, '2023_10_12_092339_create_sliders_table', 1),
(16, '2025_04_05_195624_create_log_action_admin_tools_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `postcode_zip` varchar(255) NOT NULL,
  `town_city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `product_category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL,
  `discount` double DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `featured` tinyint(1) NOT NULL,
  `state` tinyint(1) NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `brand_id`, `product_category_id`, `name`, `description`, `content`, `price`, `qty`, `discount`, `weight`, `sku`, `featured`, `state`, `tag`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Điện thoại iPhone 16e 128GB', '<p><a href=\"https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-bi-1174134#hd\" target=\"_blank\">HD 720p@30fps</a><a href=\"https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-bi-1174134#fullhd\" target=\"_blank\">FullHD 1080p@60fps</a><a href=\"https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-bi-1174134#fullhd\" target=\"_blank\">FullHD 1080p@30fps</a>FullHD 1080p@25fps<a href=\"https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-bi-1174134#fullhd\" target=\"_blank\">FullHD 1080p@240fps</a><a href=\"https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-bi-1174134#fullhd\" target=\"_blank\">FullHD 1080p@120fps</a><a href=\"https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-bi-1174134#4k\" target=\"_blank\">4K 2160p@60fps</a><a href=\"https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-bi-1174134#4k\" target=\"_blank\">4K 2160p@30fps</a>4K 2160p@25fps<a href=\"https://www.thegioididong.com/hoi-dap/cac-chuan-quay-phim-tren-dien-thoai-tablet-pho-bi-1174134#4k\" target=\"_blank\">4K 2160p@24fps</a></p>', 'Iphone', 16.99, 20, 16.19, 1.3, '00012', 1, 1, 'điện thoại', NULL, '2025-05-10 03:13:48'),
(2, 2, 2, 'Guangzhou sweater', '<p>c&ograve;n 30 sp</p>', 'Laptop quý 1', 35, 20, 13, 2.3, '1', 1, 1, 'Clothing', NULL, '2025-04-05 13:32:44'),
(3, 3, 2, 'Guangzhou sweater', NULL, NULL, 35, 20, 34, NULL, NULL, 1, 1, 'Clothing', NULL, NULL),
(4, 4, 1, 'Microfiber Wool Scarf', '<p>c&ograve;n 30 sp</p>', 'Laptop quý 1', 64, 20, 35, 1.2, '2', 1, 1, 'Accessories', NULL, '2025-04-05 13:35:51'),
(5, 1, 3, 'Men\'s Painted Hat', NULL, NULL, 44, 20, 35, NULL, NULL, 0, 1, 'Accessories', NULL, NULL),
(6, 1, 2, 'Converse Shoes', NULL, NULL, 35, 20, 34, NULL, NULL, 1, 1, 'Clothing', NULL, NULL),
(7, 1, 1, 'Pure Pineapple', NULL, NULL, 64, 20, 35, NULL, NULL, 1, 1, 'HandBag', NULL, NULL),
(8, 1, 1, '2 Layer Windbreaker', NULL, NULL, 44, 20, 35, NULL, NULL, 1, 1, 'Clothing', NULL, NULL),
(9, 1, 1, 'Converse Shoes', NULL, NULL, 35, 20, 34, NULL, NULL, 1, 1, 'Shoes', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_comments`
--

CREATE TABLE `product_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `messages` varchar(255) NOT NULL,
  `rating` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_comments`
--

INSERT INTO `product_comments` (`id`, `product_id`, `user_id`, `email`, `name`, `messages`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'BrandonKelley@gmail.com', 'Brandon Kelley', 'Nice !', 4, NULL, NULL),
(2, 1, 5, 'RoyBanks@gmail.com', 'Roy Banks', 'Nice !', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_details`
--

CREATE TABLE `product_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `color`, `size`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, 'blue', 'S', 5, NULL, NULL),
(2, 1, 'blue', 'M', 5, NULL, NULL),
(3, 1, 'blue', 'L', 5, NULL, NULL),
(4, 1, 'blue', 'XS', 5, NULL, NULL),
(5, 1, 'yellow', 'S', 0, NULL, NULL),
(6, 1, 'violet', 'S', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `path`, `created_at`, `updated_at`) VALUES
(1, 1, 'product-1.jpg', NULL, NULL),
(2, 1, 'product-1-1.jpg', NULL, NULL),
(3, 1, 'product-1-2.jpg', NULL, NULL),
(4, 2, 'product-2.jpg', NULL, NULL),
(5, 3, 'product-3.jpg', NULL, NULL),
(6, 4, 'product-4.jpg', NULL, NULL),
(7, 5, 'product-5.jpg', NULL, NULL),
(8, 6, 'product-6.jpg', NULL, NULL),
(9, 7, 'product-7.jpg', NULL, NULL),
(10, 8, 'product-8.jpg', NULL, NULL),
(11, 9, 'product-9.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sliders`
--

INSERT INTO `sliders` (`id`, `path`, `created_at`, `updated_at`) VALUES
(1, 'slider-1.png', NULL, '2025-05-09 14:49:23'),
(2, 'slider-2.jpg', NULL, NULL),
(3, 'slider-3.png', NULL, '2025-05-09 14:50:21'),
(4, 'slider-4.png', NULL, '2025-05-09 14:51:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `level` tinyint(3) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `postcode_zip` varchar(255) DEFAULT NULL,
  `town_city` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `avatar`, `level`, `description`, `company_name`, `country`, `street_address`, `postcode_zip`, `town_city`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'duogbachdev', 'duogbachdev@gmail.com', NULL, '$2y$10$cFGhn0R3XMU.p49/22L14.RBdzgGKgAEA9yHECkya2YEmPNLZUMGy', NULL, 'duogbachdev.jpg', 0, 'DuogBachDev is a developer', 'DuogBachDev', 'Việt Nam', 'Thái Bình, Việt Nam', '666666', 'Thái Bình', '0357918298', NULL, NULL),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$AGiX4BUAkDIHOXQGX6JzO.SrxgGBvZAVOo7BKOISwDCxqNUpNOgxm', NULL, NULL, 0, NULL, 'DuogBachDev', 'Việt Nam', 'Thái Bình, Việt Nam', '666666', 'Thái Bình', '0357918298', NULL, NULL),
(3, 'Shane Lynch', 'ShaneLynch@gmail.com', NULL, '$2y$10$Bu3NKsIfQbp4UYVq8VnYRueUw2THRFFycm4UP/EuJjCmzmscyXuIe', NULL, 'avatar-0.png', 1, 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo', 'DuogBachDev', 'Việt Nam', 'Thái Bình, Việt Nam', '666666', 'Thái Bình', '0357918298', NULL, NULL),
(4, 'Brandon Kelley', 'BrandonKelley@gmail.com', NULL, '$2y$10$OB2WWkYt8k6YVWoashd/CO41NT80PwFuPehOhBNROV3c8trWukv/K', NULL, 'avatar-1.png', 1, NULL, 'DuogBachDev', 'Việt Nam', 'Thái Bình, Việt Nam', '666666', 'Thái Bình', '0357918298', NULL, NULL),
(5, 'Roy Banks', 'RoyBanks@gmail.com', NULL, '$2y$10$bGwVitnVvkUZRIVvXLZJzuKU/BdaOiNARPz9D5kY/7IwRwhQaawIy', NULL, 'avatar-2.png', 1, NULL, 'DuogBachDev', 'Việt Nam', 'Thái Bình, Việt Nam', '666666', 'Thái Bình', '0357918298', NULL, NULL),
(6, 'nhien', '21012082@st.phenikaa-uni.edu.vn', NULL, '$2y$10$fxQv6k51XqeOy4oYTxiEPuLQpo3P1qeBnWgasLB0Tk.q8QWG62w2S', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-03 14:35:40', '2025-04-03 14:35:40'),
(7, 'nhien26', 'nhien26@gmail.com', NULL, '$2y$10$R8ygxvkygll.J3m2bY4fue/xjp1JW3yjF.AjD.4LfpEtX8fFl3pES', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-09 14:16:03', '2025-05-09 14:16:03'),
(8, 'nhien', 'nhien12@gmail.com', NULL, '$2y$10$gqf6e8ZUyRGXKMXQ4ptt3ufnaVJ.w.deuPbg4TEfLoyQ4AKWK2pBG', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-10 01:30:44', '2025-05-10 01:30:44');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `log_action_admin_tools`
--
ALTER TABLE `log_action_admin_tools`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_action_admin_tools_admin_foreign` (`admin`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `log_action_admin_tools`
--
ALTER TABLE `log_action_admin_tools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `log_action_admin_tools`
--
ALTER TABLE `log_action_admin_tools`
  ADD CONSTRAINT `log_action_admin_tools_admin_foreign` FOREIGN KEY (`admin`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
