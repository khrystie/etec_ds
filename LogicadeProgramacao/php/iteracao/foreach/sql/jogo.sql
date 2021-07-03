-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 03/07/2021 às 17:37
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pwii`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogo`
--

CREATE TABLE `jogo` (
  `idjogo` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `fabricante` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `jogo`
--

INSERT INTO `jogo` (`idjogo`, `nome`, `fabricante`) VALUES
(1, 'FIFA 2020', 'EA'),
(2, 'FINAL FANTASY', 'Squ are Enix'),
(3, 'GTA', 'Rockstar Game s'),
(4, 'CS: GO', 'Valve');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `jogo`
--
ALTER TABLE `jogo`
  ADD PRIMARY KEY (`idjogo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `jogo`
--
ALTER TABLE `jogo`
  MODIFY `idjogo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
