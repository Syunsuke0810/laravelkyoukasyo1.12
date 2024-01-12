-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024 年 1 月 12 日 02:28
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `Laravel_test`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'user_default.jpg',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sasaki', '20240111_220704_保育の.png', 's.0810.for.everyone@gmail.com', NULL, '$2y$12$gHw3a9dEvMauvtYXWgi.0uO494g5UwwGoK3f7b8KDHOdmCzL6Iczu', NULL, '2024-01-01 05:06:35', '2024-01-11 13:18:22'),
(2, 'testてすと', 'user_default.jpg', 'sasaki@gmal.com', NULL, '$2y$12$vGu592Boft2rlLAEscGb0udM57p32RvgPXWNGmll1S1bEiTYpItaK', NULL, '2024-01-02 02:03:37', '2024-01-12 00:32:52'),
(3, 'takagi', 'user_default.jpg', 'takagi@gmai.com', NULL, '$2y$12$omxKgtea8/LG5rgaAyxgCO402sqxzw7JkQN6uwbPP4wQn7LYnNMuK', NULL, '2024-01-03 10:30:18', '2024-01-03 10:30:18'),
(4, '米沢', 'user_default.jpg', 'feverrvreve@gegergregr.jp', NULL, '$2y$12$Z6FY7nGx3Cl1FXuFURbhsODxkGiKpP/1k6We2zeICxs0q5z9D9QkG', NULL, '2024-01-08 00:42:48', '2024-01-08 00:42:48'),
(5, 'さとうたける', 'user_default.jpg', 'satou@satou.jp', NULL, '$2y$12$LXG20xmMDPBbq27mdrWZKumiL0IGzBEOe4CqiszNAZAvJwCcQ5pnq', NULL, '2024-01-08 04:17:21', '2024-01-08 04:17:21'),
(6, 'たけのうちゆたか', 'user_default.jpg', 'takenouti@takenouti', NULL, '$2y$12$5O2Sl7vF0TuKzkIYMF0BJunYhErEVyZ9NcMeFrrrNfsk4bc5QL8Xi', NULL, '2024-01-08 04:18:51', '2024-01-08 04:18:51'),
(7, '斉藤太一', 'user_default.jpg', 'saitou@saitou', NULL, '$2y$12$YUR0F1Y0rHNyZ35RKKXice3OUhbwvEeZezQYipHTwBjW/4A0Kqv8m', NULL, '2024-01-08 08:21:26', '2024-01-08 08:21:26'),
(8, '山谷陽介', '20240108_172834_もくもく1.1.png', 'yamaya@yamaya', NULL, '$2y$12$r83MPjodMpfQvhmTu6G4Mea9Q58VlwcU6kCNR1QeOPuYA33iB88Wq', NULL, '2024-01-08 08:28:34', '2024-01-08 08:28:34');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
