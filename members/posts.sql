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
-- テーブルの構造 `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` text DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '最初のテスト', '最初のテストです', NULL, 1, '2024-01-01 08:52:12', '2024-01-01 08:52:12'),
(2, 'テスト２回目／更新テスト1/2.15:20', '@ifからのsession使用。\r\n締めの@endifがなくてエラー', NULL, 1, '2024-01-01 08:59:22', '2024-01-02 06:21:58'),
(3, '３回目のテスト', 'cdでフォルダに移動する\r\nartisanで新しいファイルを作成したら、最後にnpm run devをしなければエラーになる', NULL, 1, '2024-01-01 09:37:31', '2024-01-01 09:37:31'),
(5, '画像アップテスト２', '日時を名前に追加したテスト', '20240101_201520_もくもく1.1.png', 1, '2024-01-01 11:15:20', '2024-01-01 11:15:20'),
(6, '2日目のテスト', '昨晩はxamppを切って終了。翌日はxamppを起動、phpmyadminを起動で昨日のプログラムのページを更新したがエラーが出た。改めてlaravelにログインし、ページを更新したらエラーが解除された。', '20240102_093300__0020d228-310d-4310-a6d8-21d0b20ae837.jpeg', 1, '2024-01-02 00:33:00', '2024-01-02 00:33:00'),
(7, 'test', 'testアカウントにてテスト。追加で長文を行なって更新しているy。\r\ntestアカウントにてテスト。追加で長文を行なって更新しているy。１\r\ntestアカウントにてテスト。追加で長文を行なって更新しているy。２\r\ntestアカウントにてテスト。追加で長文を行なって更新しているy。３\r\ntestアカウントにてテスト。追加で長文を行なって更新しているy。４', '20240102_171134__e707d5f5-abf1-44bf-80c5-04ca82d964c4.jpeg', 2, '2024-01-02 02:04:18', '2024-01-02 08:11:34'),
(8, '一覧表示終わった後の再テスト', '再テスト。画像アップが必須になってる？', '20240102_133924_animated_deer_and_boy.gif', 1, '2024-01-02 04:39:24', '2024-01-02 04:39:24'),
(11, '画像が壊れる', '画像がうまく表示されない', '20240102_171214_もくもく12.10.png', 1, '2024-01-02 08:12:14', '2024-01-02 08:12:14'),
(12, 'takagiです', '高木と言います。\r\n3つ目のアカウント', '20240103_193055__e707d5f5-abf1-44bf-80c5-04ca82d964c4.jpeg', 3, '2024-01-03 10:30:55', '2024-01-03 10:30:55'),
(14, '米沢牛', 'dalle３', '20240108_094352__e0997743-5bba-4ae8-a723-694977dbd1c9.jpeg', 4, '2024-01-08 00:43:52', '2024-01-08 00:43:52'),
(15, 'ふぁふぁふぁ', 'ふぁふぁふぁ', '20240108_123516_もくもく1.1.png', 1, '2024-01-08 03:35:16', '2024-01-08 03:35:16'),
(16, 'さとうたけるです', 'だり', '20240108_131748__5be866a0-46eb-4a55-a979-78c4e2f4d259.jpeg', 5, '2024-01-08 04:17:48', '2024-01-08 04:17:48'),
(18, '斉藤太一です', '初めまして。斉藤太一です。', '20240108_172201_もくもくします.png', 7, '2024-01-08 08:22:01', '2024-01-08 08:22:01'),
(19, '山谷陽介', '山谷ともうします。やまやと読みます', '20240108_174601_もくもく1.1.png', 8, '2024-01-08 08:46:01', '2024-01-08 08:46:01');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
