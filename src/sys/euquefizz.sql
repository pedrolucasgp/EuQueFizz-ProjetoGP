-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Nov-2022 às 01:41
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `euquefizz`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(1000) NOT NULL,
  `senha_cliente` text NOT NULL,
  `email` varchar(1000) NOT NULL,
  `endereco` varchar(1000) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `cep` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `senha_cliente`, `email`, `endereco`, `cidade`, `cep`) VALUES
(9, 'asdasd', '$2y$10$/LY0aQOBRG364QYbXh86dewHz1wo9WT4wFYxtoJopY5yBVKUZjJCW', 'asdf@gmail.com', 'dasdasda', '', ''),
(10, '12341', '$2y$10$LowEnv67pQMGAH.M8mQFIO5X7e7mEj2sNOHbdrV7rkL3ydX6r8dQm', '12354@gmail.com', '', '', ''),
(11, 'pedro adm', '$2y$10$701cOGBq4UzJB8vHnQmFXucTrZf5a92m1J2T62yNGFHEfQQlrrQDC', 'adm@teste.com', '', '', ''),
(12, 'teste4', '$2y$10$uatomftsW6HuBR5y/9YRX.Q3BODTf.zBibIG9.mECutHyNnhC/CJe', 'teste4@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(100) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `preco` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome_produto`, `descricao`, `preco`) VALUES
(1, 'Agenda de Manicure / Agendamentos 2023', '', '90.00'),
(2, 'Planner Semestral - JULHO / DEZEMBRO 2022', '', '80.00'),
(3, 'Diário da Alimentação', '', '90.00'),
(4, 'Agenda Escolar 2022 Pocket (datada)', '', '77.00'),
(5, 'Agenda Dia das Mães', '', '70.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_imagem`
--

CREATE TABLE `produtos_imagem` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `imagemURL` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos_imagem`
--

INSERT INTO `produtos_imagem` (`id`, `id_produto`, `imagemURL`) VALUES
(1, 1, 'https://cf.shopee.com.br/file/sg-11134201-22090-rybcbapmuzhva1'),
(2, 1, 'https://cf.shopee.com.br/file/sg-11134201-22090-zkqc20omuzhv26'),
(3, 1, 'https://cf.shopee.com.br/file/sg-11134201-22090-zkqc20omuzhv26'),
(4, 1, 'https://cf.shopee.com.br/file/sg-11134201-22090-yscjbapmuzhv3b'),
(5, 2, 'https://cf.shopee.com.br/file/84b80e46ea2f12c686e08ea5f8f087a8'),
(6, 2, 'https://cf.shopee.com.br/file/125e5d68901331cea8f5217a944fbeb7'),
(7, 2, 'https://cf.shopee.com.br/file/113a32415118ec2f3872e415d98002cc'),
(8, 2, 'https://cf.shopee.com.br/file/559a4971f36d83df5640a579edc37446'),
(9, 3, 'https://cf.shopee.com.br/file/c6733c3e82a763846e899a9056bedc6e'),
(10, 3, 'https://cf.shopee.com.br/file/ba00640792c6bf28db9d9e43b5359cd1'),
(11, 3, 'https://cf.shopee.com.br/file/b3057b2468d460e5fab13c0e59ba4f34'),
(12, 4, 'https://cf.shopee.com.br/file/e6d0598958a9e5acc803833b67ceab73'),
(13, 4, 'https://cf.shopee.com.br/file/9e6b52aa16191653357d13a9fcddd996'),
(14, 4, 'https://cf.shopee.com.br/file/721271dec1741e5130fc8440ede64453'),
(15, 4, 'https://cf.shopee.com.br/file/5cb8cea6e8f816929e432f26e219a90f'),
(16, 5, 'https://cf.shopee.com.br/file/fd92cef3545b920cbb4a22a9bc60658b'),
(17, 5, 'https://cf.shopee.com.br/file/aa2e91b166158b42c8ed92b493014ee6'),
(18, 5, 'https://cf.shopee.com.br/file/3a2db27dd35ef1c19558dc5c080e15b5'),
(19, 5, 'https://cf.shopee.com.br/file/ce0d1a167d19bf07f5b608942e1a788c');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `produtos_imagem`
--
ALTER TABLE `produtos_imagem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produtos_imagem`
--
ALTER TABLE `produtos_imagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
