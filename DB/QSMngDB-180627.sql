-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2018-06-27 12:14:57
-- 服务器版本： 5.7.21
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `QSMngDB`
--

-- --------------------------------------------------------

--
-- 表的结构 `CheckBase`
--

CREATE TABLE `CheckBase` (
  `id` int(11) NOT NULL,
  `CheckSource` varchar(4096) COLLATE utf8_bin NOT NULL COMMENT '检查项目来源',
  `CheckSourceType` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '检查项目来源类型，法规，AC等',
  `CheckSubject` varchar(4096) COLLATE utf8_bin NOT NULL COMMENT '检查项目',
  `CheckContent` varchar(4096) COLLATE utf8_bin NOT NULL COMMENT '具体检查内容',
  `CheckStandard` varchar(4096) COLLATE utf8_bin NOT NULL COMMENT '检查标准',
  `CheckConfirmStd` text COLLATE utf8_bin COMMENT '符合性判定标准',
  `BelongDBs` text COLLATE utf8_bin COMMENT '属于哪个执法库',
  `AddTime` datetime NOT NULL,
  `isValid` int(11) NOT NULL,
  `OldID` int(11) NOT NULL COMMENT '被修订的条款ID号',
  `Memo` varchar(4096) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `CheckBase`
--

INSERT INTO `CheckBase` (`id`, `CheckSource`, `CheckSourceType`, `CheckSubject`, `CheckContent`, `CheckStandard`, `CheckConfirmStd`, `BelongDBs`, `AddTime`, `isValid`, `OldID`, `Memo`) VALUES
(19, 'CCAR-91', '中国民用航空规章', '3001 适航维修', 'CCAR-91</br> 航空器的修理和改装-修理和改装的实施规则 3001.25.4', '符合规章要求，符合局方批准的维修单位手册要求。', '1、任何人（包括商业非运输运营人和航空器代管人）使用的大型航空器及其航空器部件的维修工作都应当由按照 CCAR-145 部获得相应批准的维修单位实施或者按照 CCAR-43 部第 43.11 条(e)由航空器或者航空器部件制造厂家实施。</br>2、 除1款的情况外，其他航空器的维修可以按照下述规则进行：</br>(1) 航空器机体和部件的翻修应当由按照 CCAR-145 部获得相应批准的维修单位实施或者按照CCAR-43 部第 43.11 条(e)由航空器或者航空器部件制造厂家实施；</br>(2) 其他任何维修应当按照 CCAR-43 部实施。</br>(c) 航空器的所有权人或者运营人使用的航空器、航空器部件以及对其实施维修的任何机构和人员应当接受局方为保证其对本章规定的符合性而进行的监督和检查。', '机务部法定自查库|机务部法定自查库', '2018-06-25 09:10:27', 1, 0, NULL),
(20, 'CCAR-91', '中国民用航空规章', '3001 适航维修', 'CCAR-91 </br>航空器批准恢复使用-任何修理改装后的批准 3001.26.1', '符合规章要求，符合局方批准的维修单位手册要求。', '1、应当确保在每次对航空器完成任何维修和改装工作后，都应当由具有相应资格的维修人员在其航空器技术记录本上签署批准恢复使用。', '机务部法定自查库|机务部法定自查库', '2018-06-25 09:11:24', 1, 0, NULL),
(21, 'CCAR-91', '中国民用航空规章', '3001 适航维修', 'CCAR-91 </br>航空器批准恢复使用-重大维修或改装后的批准 3001.26.4', '符合规章要求，符合局方批准的维修单位手册要求。', '1、当航空器经过可能明显改变其飞行特性或对其飞行操作有重大影响的维修或者改装后，在载运人员（机组人员除外）前应当进行试飞检查，但如果可以通过地面试验和检查表明维修没有明显改变航空器的飞行性能或对其飞行操作产生重大影响时可以不进行试飞。</br>', '机务部法定自查库|机务部法定自查库', '2018-06-25 09:11:53', 1, 0, NULL),
(22, 'CCAR-91', '中国民用航空规章', '3001 适航维修', 'CCAR-91</br> 航空器批准恢复使用-使用限制和条件下的批准 3001.26.5', '符合规章要求，符合局方批准的维修单位手册要求。', '1、对于有MEL的航空器，该MEL应最新有效并经局方批准。</br>2、MEL的编写应当符合维修工程管理手册4.3的要求，MEL应当规定带有处于不工作状态的仪表和设备的航空器如何运行。</br>3、应当在航空器记录本上记录不工作的仪表和设备，确保在最低设备清单和批准其使用的批准书中所述的所有适用条件和限制下运行航空器。</br>4、对于那些符合 MEL 规定的允许不工作的项目，检查人员应在有关的不工作的仪表上、驾驶舱内的操纵装置处挂上标有“不工作”字样的告示牌，此告示牌应当符合航空器适航审定的要求，并且这些项目应当添加到航空器所有人或使用人的该航空器缺陷一览表中。', '机务部法定自查库|机务部法定自查库', '2018-06-25 09:12:44', 0, 0, NULL),
(23, 'CCAR-91', '中国民用航空规章', '3001 适航维修', 'CCAR-91</br> 航空器批准恢复使用-使用限制和条件下的批准 3001.26.5', '符合规章要求，符合局方批准的维修单位手册要求。1111', '1、对于有MEL的航空器，该MEL应最新有效并经局方批准。</br>2、MEL的编写应当符合维修工程管理手册4.3的要求，MEL应当规定带有处于不工作状态的仪表和设备的航空器如何运行。</br>3、应当在航空器记录本上记录不工作的仪表和设备，确保在最低设备清单和批准其使用的批准书中所述的所有适用条件和限制下运行航空器。</br>4、对于那些符合 MEL 规定的允许不工作的项目，检查人员应在有关的不工作的仪表上、驾驶舱内的操纵装置处挂上标有“不工作”字样的告示牌，此告示牌应当符合航空器适航审定的要求，并且这些项目应当添加到航空器所有人或使用人的该航空器缺陷一览表中。', '机务部法定自查库|机务部法定自查库', '2018-06-25 09:17:49', 1, 22, NULL),
(24, 'CCAR-91', '中国民用航空规章', 'dddd', 'dfsafdasf', 'afaewfewfewfwefwf', 'awefewfeaew', '机务部法定自查库|安全隐患排查库', '2018-06-27 19:13:07', 0, 0, NULL),
(25, 'CCAR-91', '中国民用航空规章', 'dddd', 'dfsafdasf', 'afaewfewfewfwefwf', 'awefewfeaew', '外部审查库', '2018-06-27 19:17:12', 0, 24, NULL),
(26, 'CCAR-91', '中国民用航空规章', 'dddd', 'dfsafdasf', 'afaewfewfewfwefwf', 'awefewfeaew', '外部审查库|自我质量审核库|安全隐患排查库', '2018-06-27 19:30:06', 0, 25, NULL),
(27, 'CCAR-91', '中国民用航空规章', 'dddd', 'dfsafdasf', 'afaewfewfewfwefwf', 'awefewfeaew', '安全隐患排查库|机务部法定自查库|自我质量审核库', '2018-06-27 19:30:49', 1, 26, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `CheckBaseDB`
--

CREATE TABLE `CheckBaseDB` (
  `id` int(11) NOT NULL,
  `DBName` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `CheckBaseDB`
--

INSERT INTO `CheckBaseDB` (`id`, `DBName`) VALUES
(1, '机务部法定自查库'),
(2, '自我质量审核库'),
(3, '安全隐患排查库'),
(4, '外部审查库');

-- --------------------------------------------------------

--
-- 表的结构 `CheckBaseSourceTab`
--

CREATE TABLE `CheckBaseSourceTab` (
  `id` int(11) NOT NULL,
  `SourceTypeName` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `CheckBaseSourceTab`
--

INSERT INTO `CheckBaseSourceTab` (`id`, `SourceTypeName`) VALUES
(1, '中国民用航空规章'),
(2, '咨询通告'),
(3, '民航行业标准'),
(4, '维修单位管理手册'),
(5, '维修单位工作程序手册');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CheckBase`
--
ALTER TABLE `CheckBase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `CheckBaseDB`
--
ALTER TABLE `CheckBaseDB`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `CheckBaseSourceTab`
--
ALTER TABLE `CheckBaseSourceTab`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `CheckBase`
--
ALTER TABLE `CheckBase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- 使用表AUTO_INCREMENT `CheckBaseDB`
--
ALTER TABLE `CheckBaseDB`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `CheckBaseSourceTab`
--
ALTER TABLE `CheckBaseSourceTab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
