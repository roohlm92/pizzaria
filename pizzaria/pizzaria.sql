-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/08/2023 às 01:30
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pizzaria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `bordas`
--

CREATE TABLE `bordas` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `bordas`
--

INSERT INTO `bordas` (`id`, `tipo`) VALUES
(1, 'Cheddar'),
(2, 'Catupiry');

-- --------------------------------------------------------

--
-- Estrutura para tabela `massas`
--

CREATE TABLE `massas` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `massas`
--

INSERT INTO `massas` (`id`, `tipo`) VALUES
(1, 'Massa comum'),
(2, 'Massa integral');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `pizza_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `pizza_id`, `status_id`) VALUES
(6, 6, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pizzas`
--

CREATE TABLE `pizzas` (
  `id` int(11) NOT NULL,
  `borda_id` int(11) NOT NULL,
  `massa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pizzas`
--

INSERT INTO `pizzas` (`id`, `borda_id`, `massa_id`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1),
(4, 1, 1),
(5, 1, 2),
(6, 1, 2),
(7, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pizza_sabor`
--

CREATE TABLE `pizza_sabor` (
  `id` int(11) NOT NULL,
  `pizza_id` int(11) NOT NULL,
  `sabor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pizza_sabor`
--

INSERT INTO `pizza_sabor` (`id`, `pizza_id`, `sabor_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 2, 2),
(5, 3, 1),
(6, 3, 2),
(7, 4, 2),
(8, 5, 2),
(9, 6, 4),
(10, 7, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sabores`
--

CREATE TABLE `sabores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sabores`
--

INSERT INTO `sabores` (`id`, `nome`) VALUES
(1, 'Calabresa'),
(2, 'Mussarela'),
(3, 'Marguerita'),
(4, 'Portugues'),
(5, 'Frango com Catupiry'),
(6, 'Quatro Queijos'),
(7, 'Pepperoni');

-- --------------------------------------------------------

--
-- Estrutura para tabela `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `status`
--

INSERT INTO `status` (`id`, `tipo`) VALUES
(1, 'Em produção'),
(2, 'Em entrega'),
(3, 'Concluído');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`) VALUES
(1, 'usuario', '0192023a7bbd73250516f069df18b500'),
(2, 'admin', 'admin123');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `bordas`
--
ALTER TABLE `bordas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `massas`
--
ALTER TABLE `massas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizza_id` (`pizza_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Índices de tabela `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `borda_id` (`borda_id`),
  ADD KEY `massa_id` (`massa_id`);

--
-- Índices de tabela `pizza_sabor`
--
ALTER TABLE `pizza_sabor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pizza_id` (`pizza_id`),
  ADD KEY `sabor_id` (`sabor_id`);

--
-- Índices de tabela `sabores`
--
ALTER TABLE `sabores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bordas`
--
ALTER TABLE `bordas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `massas`
--
ALTER TABLE `massas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `pizza_sabor`
--
ALTER TABLE `pizza_sabor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `sabores`
--
ALTER TABLE `sabores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`pizza_id`) REFERENCES `pizzas` (`id`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`);

--
-- Restrições para tabelas `pizzas`
--
ALTER TABLE `pizzas`
  ADD CONSTRAINT `pizzas_ibfk_1` FOREIGN KEY (`borda_id`) REFERENCES `bordas` (`id`),
  ADD CONSTRAINT `pizzas_ibfk_2` FOREIGN KEY (`massa_id`) REFERENCES `massas` (`id`);

--
-- Restrições para tabelas `pizza_sabor`
--
ALTER TABLE `pizza_sabor`
  ADD CONSTRAINT `pizza_sabor_ibfk_1` FOREIGN KEY (`pizza_id`) REFERENCES `pizzas` (`id`),
  ADD CONSTRAINT `pizza_sabor_ibfk_2` FOREIGN KEY (`sabor_id`) REFERENCES `sabores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
