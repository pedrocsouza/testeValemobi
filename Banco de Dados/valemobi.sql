-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Abr-2017 às 18:00
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `valemobi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mercadoria`
--

CREATE TABLE `mercadoria` (
  `cod_merc` int(4) NOT NULL,
  `tipnegoc_merc` varchar(30) CHARACTER SET latin1 NOT NULL,
  `nome_merc` varchar(30) CHARACTER SET latin1 NOT NULL,
  `tipmerc_merc` varchar(30) CHARACTER SET latin1 NOT NULL,
  `preco_merc` float(6,2) NOT NULL,
  `qtd_merc` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `mercadoria`
--

INSERT INTO `mercadoria` (`cod_merc`, `tipnegoc_merc`, `nome_merc`, `tipmerc_merc`, `preco_merc`, `qtd_merc`) VALUES
(4, 'Venda', 'Arroz', 'Comida', 10.00, 2),
(5, 'Compra', 'Arroz', 'Comida', 30.00, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mercadoria`
--
ALTER TABLE `mercadoria`
  ADD PRIMARY KEY (`cod_merc`) KEY_BLOCK_SIZE=6;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mercadoria`
--
ALTER TABLE `mercadoria`
  MODIFY `cod_merc` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
