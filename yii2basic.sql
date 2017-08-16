-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Ago 16, 2017 alle 14:36
-- Versione del server: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yii2basic`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `test1`
--

CREATE TABLE IF NOT EXISTS `test1` (
  `campoa` int(11) NOT NULL COMMENT 'label_a',
  `campob` varchar(255) NOT NULL COMMENT 'label_b',
  `campod` varchar(255) NOT NULL COMMENT 'label_c',
  `campoe` date NOT NULL COMMENT 'label_d',
  `id_test2` bigint(20) DEFAULT NULL COMMENT 'label_id_test2',
  PRIMARY KEY (`campoa`),
  KEY `FK_TEST2` (`id_test2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='prova crud yii';

--
-- Dump dei dati per la tabella `test1`
--

INSERT INTO `test1` (`campoa`, `campob`, `campod`, `campoe`, `id_test2`) VALUES
(1, 'bbbb', 'ccc', '2016-12-31', 1),
(2, 'bbb2', 'cccc22', '0000-00-00', 1),
(3, 'aaa', 'ddd', '0000-00-00', 1),
(10, 'AAAAA', 'VCCCC', '0000-00-00', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `test2`
--

CREATE TABLE IF NOT EXISTS `test2` (
  `id` bigint(20) NOT NULL DEFAULT '0' COMMENT 'label_id2',
  `nome` text COMMENT 'label_nome',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `test2`
--

INSERT INTO `test2` (`id`, `nome`) VALUES
(1, 'WALTER TEST'),
(2, 'WALTER TEST2');

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `test1`
--
ALTER TABLE `test1`
  ADD CONSTRAINT `FK_TEST2` FOREIGN KEY (`id_test2`) REFERENCES `test2` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
