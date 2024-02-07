-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Fev-2024 às 20:33
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `ID` int(11) NOT NULL,
  `FK_CLIENTE_ID` int(11) NOT NULL,
  `FK_SERVICO_ID` int(11) NOT NULL,
  `DATA_AGENDAMENTO` date NOT NULL,
  `HORA_AGENDAMENTO` time NOT NULL,
  `FUNCIONARIO_ID` int(11) NOT NULL,
  `status` varchar(30) DEFAULT 'marcado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`ID`, `FK_CLIENTE_ID`, `FK_SERVICO_ID`, `DATA_AGENDAMENTO`, `HORA_AGENDAMENTO`, `FUNCIONARIO_ID`, `status`) VALUES
(1, 5, 9, '2024-11-10', '12:30:00', 5, 'marcado'),
(2, 7, 5, '2024-08-10', '19:30:00', 2, 'marcado'),
(3, 5, 9, '2024-01-31', '19:57:58', 2, 'marcado'),
(4, 4, 8, '2024-01-31', '19:57:58', 3, 'marcado'),
(5, 2, 5, '2024-02-07', '16:28:50', 2, 'marcado'),
(6, 2, 5, '2024-02-07', '16:29:33', 2, 'marcado');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_CLIENTE_ID` (`FK_CLIENTE_ID`),
  ADD KEY `FK_SERVICO_ID` (`FK_SERVICO_ID`),
  ADD KEY `FUNC_ID` (`FUNCIONARIO_ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
