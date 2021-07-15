-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-07-14 09:15
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
-- 테이블 구조 `nov_mem`
--

CREATE TABLE `nov_mem` (
  `NOV_mem_idx` int(11) NOT NULL COMMENT '고유번호',
  `NOV_mem_id` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '회원 아이디',
  `NOV_mem_pass` varchar(80) CHARACTER SET utf8 NOT NULL COMMENT '회원 비밀번호',
  `NOV_mem_name` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '회원 이름',
  `NOV_mem_email` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '회원 이메일',
  `NOV_mem_regi_day` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '회원 가입일'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `nov_mem`
--
ALTER TABLE `nov_mem`
  ADD PRIMARY KEY (`NOV_mem_idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `nov_mem`
--
ALTER TABLE `nov_mem`
  MODIFY `NOV_mem_idx` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
