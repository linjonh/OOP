-- phpMyAdmin SQL Dump
-- version 4.2.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-02-28 15:56:11
-- 服务器版本： 5.6.21-log
-- PHP Version: 5.6.3
-- create table first

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `_id` int(11) primary key NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `sex` enum('0','1','2') DEFAULT '2',
  `birth` date DEFAULT NULL,
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `avatar` text,
  `history_avatar` text,
  `signature` text,
  `age` integer NOT NULL DEFAULT 0,
  `email` text,
  `mobile` text,
  `home_page` text,
  UNIQUE KEY `name_uq` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`username`, `pwd`, `sex`, `birth`, `createtime`) VALUES
('linjonh', '12345', '0', '1990-05-09', '2014-11-21 00:00:00'),
('celina', '12345', '0', '1990-05-09', '2014-11-21 00:00:00'),
('lin', '12345', '0', '2014-11-26', '2014-11-26 22:35:30'),
('linx', '12345', '0', '2014-11-26', '2014-11-26 22:41:41'),
('linxin', '12345', '0', '2014-11-26', '2014-11-26 22:42:09'),
('linxing', '12345', '0', '2014-11-26', '2014-11-26 22:42:36'),
('linxingx', '12345', '0', '2014-11-26', '2014-11-26 22:42:59'),
('mao', '12345', '0', '2014-11-26', '2014-11-26 22:50:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
--ALTER TABLE `user` ADD PRIMARY KEY (`_id`);
--ALTER TABLE `user` ADD UNIQUE KEY `name_uq` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user` MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1011;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
