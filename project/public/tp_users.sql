-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28-Maio-2023 às 13:35
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tp_users`
--

DROP TABLE IF EXISTS `tp_users`;
CREATE TABLE IF NOT EXISTS `tp_users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `endereco` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cidade` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `estado` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cep` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tp_users`
--

INSERT INTO `tp_users` (`id`, `nome`, `email`, `senha`, `endereco`, `cidade`, `estado`, `cep`) VALUES
(1, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '{cidade}', '{estado}', 0),
(2, 'andreia1', 'andreia1@teste.com', '202cb962ac59075b964b07152d234b70', 'rua das ruas', '{cidade}', '{estado}', 0),
(3, 'Bruna Teste de Cadastro ;)', 'bruna@aluno.univesp.br', '202cb962ac59075b964b07152d234b70', 'rua das ruas', '{cidade}', '{estado}', 0),
(4, 'Juliana', 'juliana@teste.com', '202cb962ac59075b964b07152d234b70', 'rua das flores', '{cidade}', '{estado}', 0),
(5, 'Evandro365', 'evandro365@teste.com', '202cb962ac59075b964b07152d234b70', 'rua geronimo', '{cidade}', '{estado}', 0),
(6, 'Evandro789', 'evandro789@teste.com', '202cb962ac59075b964b07152d234b70', 'Rua Aristides, 547', '{cidade}', '{estado}', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
