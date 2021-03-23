-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Mar-2021 às 22:00
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lasorella`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL DEFAULT '',
  `email` varchar(220) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `quantidade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`id`, `nome`, `email`, `telefone`, `data`, `quantidade`) VALUES
(40, 'Ryan Rodrigues', 'ryanrodriguesoficial880@gmail.com', '21966944292', '2021-03-10', '2'),
(49, 'Emilly Rebeca Caroline de Paula', 'emillyrebeca@grupoaguaviva.com.br', '21996685668', '2021-06-15', '1'),
(50, 'Joana Daiane', 'joanadaiane@rotadasbandeiras.com', '2129703004', '2021-03-23', '2'),
(51, 'Lívia Agatha Marlene Almada', 'liviaagathamarlene@zootecnista.com.br', '21988867473', '2021-04-20', '4'),
(52, 'Pedro Henrique Enrico', 'pedrohenriqueenricoo@pib.com.br', '24989355687', '2021-03-29', '2'),
(53, 'Roberto Nicolas', 'rrobertonicolas@solucao.adm.br', '21998432538', '2021-03-22', '3'),
(54, 'Caio Nelson Sales', 'caionelsonsales@quintadoslagos.com.br', '21986930204', '2021-05-18', '4'),
(55, 'Carlos Cláudio Melo', 'carlosclaudio@grupoamericaville.com.br', '24988394419', '2021-06-16', '3'),
(56, 'Levi Kauê', 'levikauedasneves_@saojose.biz', '21996535895', '2021-11-17', '2'),
(57, 'César Roberto Fogaça', 'cesarrobertofogaca@globo.com', '2136331431', '2021-03-25', '2'),
(58, 'Pedro Henrique', 'pedrohenrique@teadit.com.br', '21991549865', '2021-06-15', '3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `login` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'Administrador', 'admin', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
