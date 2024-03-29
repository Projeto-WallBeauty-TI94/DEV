-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Fev-2024 às 01:34
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
  `DATA_AGENDAMENTO` datetime NOT NULL,
  `FUNCIONARIO_ID` int(11) NOT NULL,
  `FK_EMAIL` varchar(100) NOT NULL,
  `CLIENTE_NOME` varchar(100) NOT NULL,
  `CLIENTE_TEL` char(14) NOT NULL,
  `STATUS` varchar(30) DEFAULT 'marcado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`ID`, `FK_CLIENTE_ID`, `FK_SERVICO_ID`, `DATA_AGENDAMENTO`, `FUNCIONARIO_ID`, `FK_EMAIL`, `CLIENTE_NOME`, `CLIENTE_TEL`, `STATUS`) VALUES
(13, 2, 5, '2024-02-19 00:00:00', 2, '', '', '', 'Cancelado'),
(14, 9, 5, '2024-02-19 00:00:00', 7, '', '', '', 'Cancelado'),
(15, 7, 5, '2024-02-21 00:00:00', 9, '', '', '', 'Cancelado'),
(16, 5, 24, '2024-02-27 00:00:00', 10, '', '', '', 'Cancelado'),
(17, 13, 30, '2024-02-19 00:00:00', 2, '', '', '', 'marcado'),
(18, 8, 5, '2024-02-22 00:00:00', 9, '', '', '', 'Concluído'),
(19, 4, 15, '2024-02-28 00:00:00', 4, '', '', '', 'Concluído'),
(20, 4, 11, '2024-02-19 00:00:00', 9, '', '', '', 'marcado'),
(21, 9, 11, '2024-02-29 00:00:00', 10, '', '', '', 'Cancelado'),
(22, 2, 5, '2024-02-20 07:00:00', 4, '', '', '', 'Concluído'),
(26, 2, 13, '2024-02-22 08:00:00', 10, '', '', '', 'marcado'),
(27, 13, 13, '2024-02-22 13:00:00', 10, '', '', '', 'marcado'),
(28, 15, 9, '2024-02-27 17:00:00', 10, 'g@gmail.com', 'Giovanna', '(55)44884-9475', 'marcado'),
(29, 7, 19, '2024-02-23 07:00:00', 5, 'r@gmail.com', 'Wiltão', '(11)88994-8495', 'marcado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE `cargo` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(20) NOT NULL,
  `DESCRICAO` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`ID`, `NOME`, `DESCRICAO`) VALUES
(1, 'funcionario', 'funcionario'),
(2, 'administrador', 'administrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `TEL` varchar(15) NOT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `DATA_INSCRICAO` datetime NOT NULL DEFAULT current_timestamp(),
  `SENHA` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`ID`, `NOME`, `CPF`, `TEL`, `EMAIL`, `DATA_INSCRICAO`, `SENHA`) VALUES
(2, 'Felipe', '20987648175', '11980084731', 'felipe@gmail.com', '2024-01-24 23:08:40', ''),
(5, 'Carlos', '40876543210', '11987654321', 'carlos@yahoo.com', '2024-01-24 23:09:30', ''),
(6, 'Juliana', '51234567890', '11998765432', 'juliana@gmail.com', '2024-01-24 23:09:30', ''),
(7, 'Lucas', '61234567890', '11987654321', 'lucas@outlook.com', '2024-01-24 23:09:30', ''),
(8, 'Pedro', '12565488946', '11884466658', 'pedro@gmail.com', '2024-01-31 20:20:29', ''),
(9, 'Sabrina', '12312311548', '99448871756', 'bina@gmail.com', '2024-01-31 20:41:50', ''),
(11, 'Roberto', '11199944488', '99558848464', 'ro@gmail.com', '2024-01-31 20:57:17', ''),
(12, 'Ruan', '15897844816', '99448845486', 'ru@gmail.com', '2024-01-31 21:03:29', ''),
(13, 'Esdras', '44488877798', '99889984897', 'es@gmail.com', '2024-01-31 21:38:09', ''),
(15, 'Giovana', '', '(55)44884-9475', 'g@gmail.com', '2024-02-20 20:32:21', '202cb962ac59075b964b07152d234b70'),
(16, 'Renan', '', '(11)88994-8495', 'r@gmail.com', '2024-02-20 21:28:06', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco_cli`
--

CREATE TABLE `endereco_cli` (
  `ID` int(11) NOT NULL,
  `UF` varchar(45) NOT NULL,
  `CIDADE` varchar(45) NOT NULL,
  `CEP` int(8) NOT NULL,
  `LOGRADOURO` varchar(45) NOT NULL,
  `BAIRRO` varchar(45) DEFAULT NULL,
  `NUMERO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(100) NOT NULL,
  `SOBRENOME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `DATA_NASCIMENTO` date DEFAULT NULL,
  `CPF` varchar(14) NOT NULL,
  `TELEFONE` varchar(20) DEFAULT NULL,
  `SALARIO` decimal(10,2) DEFAULT NULL,
  `DATA_CONTRATACAO` date DEFAULT NULL,
  `DATA_CRIACAO` timestamp NOT NULL DEFAULT current_timestamp(),
  `DATA_ATUALIZACAO` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `CEP` varchar(8) NOT NULL,
  `SENHA` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`ID`, `NOME`, `SOBRENOME`, `EMAIL`, `DATA_NASCIMENTO`, `CPF`, `TELEFONE`, `SALARIO`, `DATA_CONTRATACAO`, `DATA_CRIACAO`, `DATA_ATUALIZACAO`, `CEP`, `SENHA`) VALUES
(4, 'Camila', 'Santos', 'camila.santos@email.com', '1992-03-10', '234.567.890-12', '(31) 7654-3210', '5600.00', '2023-02-18', '2024-01-25 02:13:04', '2024-02-16 11:33:50', '67890-12', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
(5, 'Rafael', 'Costa', 'rafael.costa@email.com', '1988-11-28', '345.678.901-23', '(41) 6543-2109', '7000.00', '2020-09-30', '2024-01-25 02:13:04', '2024-01-25 02:13:04', '98765-43', NULL),
(6, 'Julia', 'Santos', 'julia.martins@email.com', '1995-06-05', '456.789.012-34', '(51) 5432-1098', '4800.00', '2024-03-25', '2024-01-25 02:13:04', '2024-02-19 23:00:33', '34567-89', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
(7, 'Paulo', 'Henrique', 'pa@gmail.com', '2024-02-07', '95865488216', '11665562653', '5000.00', '2024-02-07', '2024-02-07 14:21:46', '2024-02-16 11:34:09', '15669480', 'e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),
(9, 'Pedro', 'Almeida', 'p@gmail.com', '2024-02-16', '52973944813', '11994470756', '1700.00', '2024-02-16', '2024-02-16 12:12:36', '2024-02-16 12:12:36', '08330180', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3'),
(10, 'Milena', 'Carvalho', 'mi@gmail.com', '2024-02-19', '15615612321', '11554464659', '2000.00', '2024-02-19', '2024-02-19 19:18:02', '2024-02-19 19:18:02', '15664815', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(45) NOT NULL,
  `DESCRICAO` varchar(300) DEFAULT NULL,
  `PRECO` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`ID`, `NOME`, `DESCRICAO`, `PRECO`) VALUES
(5, 'Corte de Cabelo Masculino', 'Corte moderno e personalizado para homens.', '30.00'),
(6, 'Corte de Cabelo Feminino', 'Corte moderno e personalizado para mulheres.', '50.00'),
(7, 'Coloração Masculina', 'Coloração profissional para homens.', '60.00'),
(8, 'Coloração Feminina', 'Coloração profissional para mulheres.', '80.00'),
(9, 'Barba', 'Tratamento completo para a barba, incluindo corte e modelagem.', '25.00'),
(10, 'Escova Progressiva Feminina', 'Tratamento capilar para alisamento e redução de volume.', '120.00'),
(11, 'Corte e Barba Masculino', 'Combo de corte de cabelo e barba para homens.', '45.00'),
(12, 'Hidratação Capilar Feminina', 'Tratamento intensivo para hidratação e saúde dos cabelos femininos.', '70.00'),
(13, 'Penteado Especial Feminino', 'Penteado profissional para eventos especiais.', '65.00'),
(14, 'Design de Sobrancelhas Masculino', 'Modelagem de sobrancelhas para homens.', '20.00'),
(15, 'Massagem Relaxante', 'Massagem terapêutica para relaxamento e bem-estar.', '80.00'),
(16, 'Tratamento Capilar Masculino', 'Tratamento especializado para saúde e beleza dos cabelos masculinos.', '40.00'),
(17, 'Depilação Feminina', 'Depilação profissional para mulheres em diferentes áreas do corpo.', '45.00'),
(18, '18', 'Coloração e mechas para homens que desejam um visual único.', '65.00'),
(19, 'Spa dos Pés', 'Tratamento revitalizante para pés, incluindo esfoliação e massagem.', '35.00'),
(20, 'Corte e Penteados para Crianças', 'Serviços especializados para crianças, incluindo cortes e penteados.', '25.00'),
(21, 'Alongamento de Cílios', 'Técnica profissional para realçar o olhar com cílios mais longos.', '55.00'),
(22, 'Maquiagem para Noivas', 'Maquiagem especial para o dia do casamento, destacando a beleza da noiva.', '90.00'),
(23, 'Tratamento Facial Masculino', 'Cuidados faciais específicos para a pele masculina.', '50.00'),
(24, 'Pedicure Masculina', 'Tratamento completo para pés masculinos, incluindo cuidados com as unhas.', '30.00'),
(25, 'Manicure Masculina', 'Tratamento completo para unhas masculinas, incluindo corte e hidratação.', '25.00'),
(26, 'Limpeza de Pele Profunda Feminina', 'Procedimento facial profundo para remover impurezas e revitalizar a pele feminina.', '80.00'),
(27, 'Corte e Coloração Masculina', 'Combo de corte de cabelo e coloração para homens que buscam um visual completo.', '65.00'),
(28, 'Massagem Relaxante Corporal', 'Massagem terapêutica para relaxamento completo do corpo.', '90.00'),
(29, 'Maquiagem para Eventos Especiais', 'Maquiagem profissional para ocasiões especiais, destacando a beleza feminina.', '70.00'),
(30, 'Unhas Decoradas', 'Decoração artística das unhas para um toque único e elegante.', '35.00'),
(31, 'Cauterização Capilar Masculina', 'Procedimento de cauterização para fortalecimento dos cabelos masculinos.', '50.00'),
(32, 'Design de Sobrancelhas e Tintura', 'Modelagem precisa e tintura para realçar as sobrancelhas de homens e mulheres.', '40.00'),
(33, 'Penteado para Festas Feminino', 'Penteado sofisticado para eventos e festas, realçando a feminilidade.', '75.00'),
(34, 'Manicure e Pedicure Masculino', 'Tratamento completo para unhas masculinas, incluindo corte e esmaltação.', '25.00');

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
  ADD KEY `FUNC_ID` (`FUNCIONARIO_ID`),
  ADD KEY `FK_EMAIL` (`FK_EMAIL`) USING BTREE;

--
-- Índices para tabela `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `endereco_cli`
--
ALTER TABLE `endereco_cli`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `cargo`
--
ALTER TABLE `cargo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `endereco_cli`
--
ALTER TABLE `endereco_cli`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
