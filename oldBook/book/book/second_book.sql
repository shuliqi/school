-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 12 月 30 日 11:01
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `second book`
--

-- --------------------------------------------------------

--
-- 表的结构 `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employeeName` varchar(50) NOT NULL COMMENT '工作人员姓名',
  `employeePassword` varchar(100) NOT NULL COMMENT '密码'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `employee`
--

INSERT INTO `employee` (`employeeName`, `employeePassword`) VALUES
('兰必钟', 'lanbizhong1022'),
('舒丽琦', 'shuliqi1014'),
('易长城', 'yichangcheng1027');

-- --------------------------------------------------------

--
-- 表的结构 `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `purchaseNo` int(100) NOT NULL AUTO_INCREMENT COMMENT '购买代号',
  `textBookNo` int(100) NOT NULL,
  `textBookName` varchar(100) NOT NULL COMMENT '教材名字',
  `orderDate` varchar(100) NOT NULL COMMENT '购买日期',
  `freighCharge` int(100) NOT NULL COMMENT '货运费',
  PRIMARY KEY (`purchaseNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `purchase`
--

INSERT INTO `purchase` (`purchaseNo`, `textBookNo`, `textBookName`, `orderDate`, `freighCharge`) VALUES
(1, 2, '算法设计与分析基础', '2015/12/22', 0),
(2, 2, '算法设计与分析基础', '2015/12/22', 0),
(3, 2, '算法设计与分析基础', '2015/12/22', 0),
(4, 3, '算法设计与分析基础', '2015/12/22', 0),
(5, 3, '算法设计与分析基础', '2015/12/22', 0),
(6, 4, '算法设计与分析基础', '2015/12/22', 0),
(7, 8, '算法设计与分析基础', '2015/12/22', 0),
(8, 11, '计算机组成原理', '2015/12/22', 0),
(9, 11, '计算机组成原理', '2015/12/23', 0),
(10, 15, '软件工程导论', '2015/12/23', 0);

-- --------------------------------------------------------

--
-- 表的结构 `textbook`
--

CREATE TABLE IF NOT EXISTS `textbook` (
  `textBookNo` int(50) NOT NULL AUTO_INCREMENT,
  `textBookName` varchar(100) NOT NULL COMMENT '教材名字',
  `major` varchar(100) NOT NULL COMMENT '教材专业',
  `unitPrice` int(100) NOT NULL COMMENT '单价',
  `quantitgOnHand` int(100) NOT NULL COMMENT '现存数量',
  PRIMARY KEY (`textBookNo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `textbook`
--

INSERT INTO `textbook` (`textBookNo`, `textBookName`, `major`, `unitPrice`, `quantitgOnHand`) VALUES
(11, '计算机组成原理', '计算机科学与技术', 16, 12),
(12, '人工智能原理及其应用', '计算机科学与技术', 13, 3),
(13, '人工智能原理及其应用', '软件工程', 13, 34),
(14, '软件工程导论', '计算机科学与技术', 15, 10),
(15, '软件工程导论', '软件工程', 13, 11),
(16, '计算机操作系统', '智能科学', 15, 50),
(17, '数据库系统概论', '自动化专业', 15, 23),
(18, 'JavaEE编程技术', '计算机科学与技术', 12, 34),
(19, '算法分析与算法设计', '软件工程', 20, 32),
(20, '高等数学A', '计算机科学与技术', 20, 12),
(21, '线性代数', '经济数统', 13, 21),
(23, '数据结构', '计算机科学与技术', 14, 23);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userName` varchar(50) NOT NULL COMMENT '客户姓名',
  `userPass` varchar(100) NOT NULL COMMENT '密码'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`userName`, `userPass`) VALUES
('陈艳萍', 'chenyanping1016'),
('易长城', 'yichangcheng1027'),
('舒丽琦', 'shuliqi1014');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
