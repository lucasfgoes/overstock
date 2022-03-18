-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Mar-2022 às 22:15
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `overstock`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `produto` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `custo` float NOT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `quantidade`, `produto`, `marca`, `custo`, `preco`) VALUES
(1, 21, 'café', 'maratá', 4, 9),
(2, 0, 'leite', 'ninho', 0, 8),
(3, 0, 'maçã', '', 0, 0),
(7, 29, 'café', '3 corações', 2, 9),
(8, 0, 'refrigerante', 'tubaína', 0, 0),
(9, 0, 'refrigerante', 'antártica', 0, 0),
(10, 0, 'refrigerante', 'coca-cola', 0, 0),
(11, 0, 'refrigerante', 'frevo', 0, 0),
(12, 0, 'refrigerante', 'goob', 0, 0),
(13, 0, 'biscoito', 'negresco', 0, 0),
(14, 0, 'biscoito', 'treloso', 0, 0),
(15, 0, 'biscoito', 'bono', 0, 0),
(16, 0, 'biscoito', 'passa tempo', 0, 0),
(17, 0, 'biscoito', 'bauducco', 0, 0),
(18, 0, 'manga', '', 0, 0),
(19, 0, 'limão', '', 0, 0),
(20, 0, 'bolacha', 'maizena', 0, 0),
(21, 0, 'bolacha', 'vitarella', 0, 0),
(22, 0, 'bolacha', 'águia', 0, 0),
(23, 0, 'água mineral 250ml', 'crystal', 0, 0),
(24, 0, 'álcool', 'meyor\'s', 0, 0),
(25, 0, 'salgadinho', 'cheetos', 0, 0),
(26, 0, 'salgadinho', 'lay\'s', 0, 0),
(27, 0, 'macarrão instantâneo', 'nissin', 0, 0),
(28, 0, 'vinho', 'pérgola', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(1, 'lucas@gmail.com', '1234'),
(20, 'jhon@gmail.com', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UC_usuarios` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
