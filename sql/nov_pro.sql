-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-07-19 15:32
-- 서버 버전: 10.4.20-MariaDB
-- PHP 버전: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `nov_pro`
--

CREATE TABLE `nov_pro` (
  `NOV_pro_idx` int(11) NOT NULL COMMENT '상품 고유번호',
  `NOV_pro_cate` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '상품 분류',
  `NOV_pro_name` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '상품 이름',
  `NOV_pro_pri` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '상품 가격',
  `NOV_pro_size` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '상품 용량',
  `NOV_pro_desc` text CHARACTER SET utf8 NOT NULL COMMENT '상품 설명',
  `NOV_pro_img_01` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '상품 사진1',
  `NOV_pro_img_02` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '상품 사진2',
  `NOV_pro_reg` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '상품 등록일'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `nov_pro`
--
ALTER TABLE `nov_pro`
  ADD PRIMARY KEY (`NOV_pro_idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `nov_pro`
--
ALTER TABLE `nov_pro`
  MODIFY `NOV_pro_idx` int(11) NOT NULL AUTO_INCREMENT COMMENT '상품 고유번호';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
