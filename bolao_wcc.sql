-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `bolao_wcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `apostas`
--

CREATE TABLE IF NOT EXISTS `apostas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Restime_1` varchar(45) DEFAULT NULL,
  `Restime_2` varchar(45) DEFAULT NULL,
  `usuarios_Id` int(11) NOT NULL,
  `partidas_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_apostas_usuarios_idx` (`usuarios_Id`),
  KEY `fk_apostas_partidas1_idx` (`partidas_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `apostas`
--

INSERT INTO `apostas` (`Id`, `Restime_1`, `Restime_2`, `usuarios_Id`, `partidas_Id`) VALUES
(1, '3', '1', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `partidas`
--

CREATE TABLE IF NOT EXISTS `partidas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Time_1` varchar(45) DEFAULT NULL,
  `Time_2` varchar(45) DEFAULT NULL,
  `Data` varchar(45) DEFAULT NULL,
  `Local` varchar(45) DEFAULT NULL,
  `Horario` varchar(45) DEFAULT NULL,
  `Grupo` varchar(45) DEFAULT NULL,
  `Fase` varchar(45) DEFAULT NULL,
  `Resultado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Extraindo dados da tabela `partidas`
--

INSERT INTO `partidas` (`Id`, `Time_1`, `Time_2`, `Data`, `Local`, `Horario`, `Grupo`, `Fase`, `Resultado`) VALUES
(1, 'Brasil', 'Croácia', '12/06/2014', 'São Paulo', '17:00', 'A', '1', 'Á JOGAR'),
(2, 'México', 'Camarões', '13/06/2014', 'Natal', '13:00', 'A', '1', 'Á JOGAR'),
(3, 'Brasil', 'México', '17/06/2014', 'Fortaleza', '16:00', 'A', '1', 'Á JOGAR'),
(4, 'Camarões', 'Croácia', '18/06/2014', 'Manaus', '18:00', 'A', '1', 'Á JOGAR'),
(5, 'Camarões', 'Brasil', '23/06/2014', 'Brasília', '17:00', 'A', '1', 'Á JOGAR'),
(6, 'Croácia', 'México', '23/06/2014', 'Recife', '17:00', 'A', '1', 'Á JOGAR'),
(7, 'Espanha', 'Holanda', '13/06/2014', 'Salvador', '16:00', 'B', '1', 'Á JOGAR'),
(8, 'Chile', 'Austrália', '13/06/2014', 'Cuiabá', '18:00', 'B', '1', 'Á JOGAR'),
(9, 'Espanha', 'Chile', '18/06/2014', 'Rio de Janeiro', '16:00', 'B', '1', 'Á JOGAR'),
(10, 'Austrália', 'Holanda', '18/06/2014', 'Porto Alegre', '13:00', 'B', '1', 'Á JOGAR'),
(11, 'Austrália', 'Espanha', '23/06/2014', 'Curitiba', '13:00', 'B', '1', 'Á JOGAR'),
(12, 'Holanda', 'Chile', '23/06/2014', 'São Paulo', '13:00', 'B', '1', 'Á JOGAR'),
(13, 'Colômbia', 'Grécia', '14/06/2014', 'Belo Horizonte', '13:00', 'C', '1', 'Á JOGAR'),
(14, 'Costa do Marfim', 'Japão', '14/06/2014', 'Recife', '22:00', 'C', '1', 'Á JOGAR'),
(15, 'Colômbia', 'Costa do Marfim', '19/06/2014', 'Brasília', '13:00', 'C', '1', 'Á JOGAR'),
(16, 'Japão', 'Grécia', '19/06/2014', 'Natal', '19:00', 'C', '1', 'Á JOGAR'),
(17, 'Japão', 'Colômbia', '24/06/2014', 'Cuiabá', '16:00', 'C', '1', 'Á JOGAR'),
(18, 'Grécia', 'Costa do Marfim', '24/06/2014', 'Fortaleza', '17:00', 'C', '1', 'Á JOGAR'),
(19, 'Uruguai', 'Costa Rica', '14/06/2014', 'Fortaleza', '16:00', 'D', '1', 'Á JOGAR'),
(20, 'Inglaterra', 'Itália', '14/06/2014', 'Manaus', '18:00', 'D', '1', 'Á JOGAR'),
(21, 'Uruguai', 'Inglaterra', '19/06/2014', 'São Paulo', '16:00', 'D', '1', 'Á JOGAR'),
(22, 'Itália', 'Costa Rica', '20/06/2014', 'Recife', '13:00', 'D', '1', 'Á JOGAR'),
(23, 'Itália', 'Uruguai', '24/06/2014', 'Natal', '13:00', 'D', '1', 'Á JOGAR'),
(24, 'Costa Rica', 'Inglaterra', '24/06/2014', 'Belo Horizonte', '13:00', 'D', '1', 'Á JOGAR'),
(25, 'Suiça', 'Equador', '15/06/2014', 'Brasília', '13:00', 'E', '1', 'Á JOGAR'),
(26, 'França', 'Honduras', '15/06/2014', 'Porto Alegre', '16:00', 'E', '1', 'Á JOGAR'),
(27, 'Suiça', 'França', '20/06/2014', 'Salvador', '16:00', 'E', '1', 'Á JOGAR'),
(28, 'Honduras', 'Equador', '20/06/2014', 'Curitiba', '19:00', 'E', '1', 'Á JOGAR'),
(29, 'Honduras', 'Suiça', '25/06/2014', 'Manaus', '16:00', 'E', '1', 'Á JOGAR'),
(30, 'Equador', 'França', '25/06/2014', 'Rio de Janeiro', '17:00', 'E', '1', 'Á JOGAR'),
(31, 'Argentina', 'Bósnia-Herzegovina', '15/06/2014', 'Rio de Janeiro', '19:00', 'F', '1', 'Á JOGAR'),
(32, 'Irã', 'Nigéria', '16/06/2014', 'Curitiba', '16:00', 'F', '1', 'Á JOGAR'),
(33, 'Argentina', 'Irã', '21/06/2014', 'Belo Horizonte', '13:00', 'F', '1', 'Á JOGAR'),
(34, 'Nigéria', 'Bósnia-Herzegovina', '21/06/2014', 'Cuiabá', '18:00', 'F', '1', 'Á JOGAR'),
(35, 'Nigéria', 'Argentina', '25/06/2014', 'Porto Alegre', '13:00', 'F', '1', 'Á JOGAR'),
(36, 'Bósnia-Herzegovina', 'Irã', '25/06/2014', 'Salvador', '13:00', 'F', '1', 'Á JOGAR'),
(37, 'Alemanha', 'Portugal', '16/06/2014', 'Salvador', '13:00', 'G', '1', 'Á JOGAR'),
(38, 'Gana', 'EUA', '16/06/2014', 'Natal', '19:00', 'G', '1', 'Á JOGAR'),
(39, 'Alemanha', 'Gana', '21/06/2014', 'Fortaleza', '16:00', 'G', '1', 'Á JOGAR'),
(40, 'EUA', 'Portugal', '22/06/2014', 'Manaus', '15:00', 'G', '1', 'Á JOGAR'),
(41, 'EUA', 'Alemanha', '26/06/2014', 'Recife', '13:00', 'G', '1', 'Á JOGAR'),
(42, 'Portugal', 'Gana', '26/06/2014', 'Brasília', '13:00', 'G', '1', 'Á JOGAR'),
(43, 'Bélgica', 'Algéria', '17/06/2014', 'Belo Horizonte', '13:00', 'H', '1', 'Á JOGAR'),
(44, 'Rússia', 'Coreia do Sul', '17/06/2014', 'Cuiabá', '18:00', 'H', '1', 'Á JOGAR'),
(45, 'Bélgica', 'Rússia', '22/06/2014', 'Rio de Janeiro', '13:00', 'H', '1', 'Á JOGAR'),
(46, 'Coreia do Sul', 'Algéria', '22/06/2014', 'Porto Alegre', '16:00', 'H', '1', 'Á JOGAR'),
(47, 'Coreia do Sul', 'Bélgica', '26/06/2014', 'São Paulo', '17:00', 'H', '1', 'Á JOGAR'),
(48, 'Algéria', 'Rússia', '26/06/2014', 'Curitiba', '17:00', 'H', '1', 'Á JOGAR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Senha` varchar(45) NOT NULL,
  `Dtnasc` varchar(45) DEFAULT NULL,
  `Selecao` varchar(45) DEFAULT NULL,
  `Time` varchar(45) DEFAULT NULL,
  `Pontos` int(200) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nome`, `Email`, `Senha`, `Dtnasc`, `Selecao`, `Time`, `Pontos`) VALUES
(1, 'RAMON GONçALVES', 'ramonbhb@gmail.com', 'ef67e0868c98e5f0b0e2fcd9b0c4a3bad808f551', '1990-09-04', 'Brasil', 'Cruzeiro (MG) ', 0);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `apostas`
--
ALTER TABLE `apostas`
  ADD CONSTRAINT `fk_apostas_usuarios` FOREIGN KEY (`usuarios_Id`) REFERENCES `usuarios` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_apostas_partidas1` FOREIGN KEY (`partidas_Id`) REFERENCES `partidas` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
