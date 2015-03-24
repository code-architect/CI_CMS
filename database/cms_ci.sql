-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2015 at 09:57 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms_ci`
--
CREATE DATABASE IF NOT EXISTS `cms_ci` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cms_ci`;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
`id` int(11) unsigned NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `pubdate` date NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `pubdate`, `body`, `created`, `modified`) VALUES
(2, 'Blog 1', 'blog_1', '2015-03-22', '<p style="text-align: left;">blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog</p>', '2015-03-22 00:11:23', '2015-03-22 00:11:23'),
(3, 'Blog 31', 'blog_16', '2015-03-20', '<p>blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blog blo.</p>\r\n<ul>\r\n<li>blog blog blog blog blog blog blog blog</li>\r\n<li>blog blog blog blog blog blog blog blog blog</li>\r\n<li>blog blog blog blog blog blog blog blog blog blog blog blog</li>\r\n<li>blog blog blog</li>\r\n<li>blog blog blog blog blog blog blog</li>\r\n</ul>\r\n<p>blog blog blog blog blog blog blog blog blog blog blog blog blog blo.</p>\r\n<p>&nbsp;</p>', '2015-03-22 00:12:15', '2015-03-22 00:12:15'),
(4, 'blog 2', 'blog-2', '2015-03-24', '<p>blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2blog 2</p>', '2015-03-24 02:00:14', '2015-03-24 02:00:14'),
(5, 'blog 3', 'blog-3', '2015-03-24', '<p>blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3 blog 3</p>', '2015-03-24 02:00:46', '2015-03-24 02:00:46'),
(6, 'blog 4', 'blog-4', '2015-03-24', '<p>blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4blog 4</p>', '2015-03-24 02:01:09', '2015-03-24 02:01:09'),
(7, 'blog 5', 'blog-5', '2015-03-24', '<p>blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5blog 5</p>', '2015-03-24 02:01:25', '2015-03-24 02:01:25'),
(8, 'MySql Querries with algorithem', 'blog-6', '2015-03-24', '<h2>MySql Querries with algorithem</h2>\r\n<p>This is on mysql paragrap.<br /><br /></p>', '2015-03-24 02:01:38', '2015-03-24 13:16:54'),
(9, 'Futuer article', 'futuer-article', '2015-03-31', '<p>Futuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer articleFutuer article.</p>', '2015-03-25 00:14:30', '2015-03-25 00:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(255) NOT NULL DEFAULT '0',
  `ip_address` varchar(255) NOT NULL DEFAULT '0',
  `user_agent` varchar(255) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('8d6374b05783ebab0b40a1d05c8dc088', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:31.0) Gecko/20100101 Firefox/31.0', 1427230493, '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `version` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(6);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
`id` int(11) unsigned NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `body` text NOT NULL,
  `parent_id` int(11) unsigned NOT NULL DEFAULT '0',
  `template` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `order`, `body`, `parent_id`, `template`) VALUES
(1, 'Home', '', 1, '<p>bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla.</p>', 0, 'homepage'),
(3, 'Contact', 'contact', 2, '<h2>Just Contact me.</h2>', 0, 'page'),
(8, 'News Archive', 'news_archive', 4, '<h1>The News Archive Page</h1>', 0, 'news_archive'),
(9, 'About Me', 'about-me', 3, '<p>No, seriouslly you really need to know.</p>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 0, 'page');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) unsigned NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES
(1, 'admin@xyz.com', 'f9b329e4544ea47a6571598585578fa8d2549887', 'admin'),
(2, 'john@xyz.com', 'f9b329e4544ea47a6571598585578fa8d2549887', 'john constantine'),
(3, 'lee@xyz.com', 'f9b329e4544ea47a6571598585578fa8d2549887', 'Lee Christmas'),
(4, 'chuck@xyz.com', 'f9b329e4544ea47a6571598585578fa8d2549887', 'Chuck Norris');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
