-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/12/2024 às 01:40
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_carros`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carros`
--

CREATE TABLE `carros` (
  `id_carros` int(11) NOT NULL,
  `modelo_carros` varchar(50) DEFAULT NULL,
  `marca_carros` varchar(30) DEFAULT NULL,
  `ano_carros` varchar(4) DEFAULT NULL,
  `preco_carros` decimal(15,2) DEFAULT NULL,
  `categoria_carros` varchar(30) DEFAULT NULL,
  `imagem_carros` varchar(600) DEFAULT NULL,
  `cor_carros` varchar(30) DEFAULT NULL,
  `descricao_carros` varchar(500) DEFAULT NULL,
  `promocao` tinyint(4) DEFAULT NULL COMMENT 'true = 1\n\nfalse = 0',
  `classe_carros` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `carros`
--

INSERT INTO `carros` (`id_carros`, `modelo_carros`, `marca_carros`, `ano_carros`, `preco_carros`, `categoria_carros`, `imagem_carros`, `cor_carros`, `descricao_carros`, `promocao`, `classe_carros`) VALUES
(1, '911', 'Porsche', '2019', 340000.00, 'Esportivo', 'https://upload.wikimedia.org/wikipedia/commons/c/c6/2013_Porsche_911_Carrera_4S_%28991%29_%289626546987%29.jpg', 'Preto', 'Carro Porsche', 0, 'CARRO'),
(2, '911', 'Porsche', '2019', 340000.00, 'Esportivo', 'https://upload.wikimedia.org/wikipedia/commons/c/c6/2013_Porsche_911_Carrera_4S_%28991%29_%289626546987%29.jpg', 'Preto', 'Carro Porsche', 0, 'CARRO');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`id_carros`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carros`
--
ALTER TABLE `carros`
  MODIFY `id_carros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
