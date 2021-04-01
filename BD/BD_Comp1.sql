-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           10.1.31-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para tcc_comp
CREATE DATABASE IF NOT EXISTS `tcc_comp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tcc_comp`;

-- Copiando estrutura para tabela tcc_comp.bloco_a
CREATE TABLE IF NOT EXISTS `bloco_a` (
  `numero` int(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `preco` double(9,2) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_comp.bloco_a: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `bloco_a` DISABLE KEYS */;
INSERT INTO `bloco_a` (`numero`, `estado`, `preco`) VALUES
	(1, 'Ocupado', 80.00),
	(3, 'Livre', 80.00),
	(6, 'Livre', 80.00),
	(7, 'Ocupado', 80.00),
	(8, 'Livre', 80.00),
	(10, 'Livre', 80.00),
	(11, 'Livre', 80.00),
	(12, 'Ocupado', 80.00),
	(13, 'Livre', 80.00),
	(14, 'Livre', 80.00),
	(17, 'Livre', 80.00);
/*!40000 ALTER TABLE `bloco_a` ENABLE KEYS */;

-- Copiando estrutura para tabela tcc_comp.cad_alunos
CREATE TABLE IF NOT EXISTS `cad_alunos` (
  `RM` int(11) NOT NULL AUTO_INCREMENT,
  `nome_comp_alunobd` varchar(100) NOT NULL,
  `rg_alunobd` varchar(14) NOT NULL,
  `dtnascimento_alunobd` varchar(50) NOT NULL,
  `email_alunobd` varchar(50) NOT NULL,
  `usuario_alunobd` varchar(30) NOT NULL,
  `senha_alunobd` varchar(30) NOT NULL,
  `Turma` varchar(30) NOT NULL,
  PRIMARY KEY (`RM`)
) ENGINE=InnoDB AUTO_INCREMENT=666667 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_comp.cad_alunos: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `cad_alunos` DISABLE KEYS */;
INSERT INTO `cad_alunos` (`RM`, `nome_comp_alunobd`, `rg_alunobd`, `dtnascimento_alunobd`, `email_alunobd`, `usuario_alunobd`, `senha_alunobd`, `Turma`) VALUES
	(4567, 'Maria', '(  )     -', '  /  /', '', '', '', 'DID2'),
	(7812, 'Fabrício', '(  )     -', '  /  /', '', '', '', 'MEC 3'),
	(8960, 'alberto', '(  )     -', '22/10/2000', '', '', '', ''),
	(33246, 'asd', '(  )     -', '  /  /', 'sdva', 'sdfvas', 'sadf', 'LOG 1'),
	(33456, 'asd', '(  )     -', '  /  /', '', '', '', ''),
	(33457, 'Avulso', '', '', '', '', '', ''),
	(98765, 'Belzebu', '(  )     -', '  /  /', '', 'Luci', '123', ''),
	(99832, 'José', '(33) 3333-3333', '11/11/1111', 'asodijfidofjdasoijf', '', '', 'ADM 3'),
	(666666, 'João', '(  )     -', '  /  /', '', '', '', 'ADM 1');
/*!40000 ALTER TABLE `cad_alunos` ENABLE KEYS */;

-- Copiando estrutura para tabela tcc_comp.cad_func
CREATE TABLE IF NOT EXISTS `cad_func` (
  `codigo_funcbd` int(11) NOT NULL AUTO_INCREMENT,
  `nome_comp_funcbd` varchar(100) NOT NULL DEFAULT '0',
  `rg_funcbd` varchar(20) NOT NULL DEFAULT '0',
  `dtnascimento_funcbd` varchar(50) NOT NULL DEFAULT '0',
  `email_funcbd` varchar(50) NOT NULL DEFAULT '0',
  `usuario_funcbd` varchar(30) NOT NULL DEFAULT '0',
  `senha_funcbd` varchar(30) NOT NULL DEFAULT '0',
  `Turno` varchar(30) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo_funcbd`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_comp.cad_func: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `cad_func` DISABLE KEYS */;
INSERT INTO `cad_func` (`codigo_funcbd`, `nome_comp_funcbd`, `rg_funcbd`, `dtnascimento_funcbd`, `email_funcbd`, `usuario_funcbd`, `senha_funcbd`, `Turno`) VALUES
	(1, 'wefasdf', '(   )    -', '  /  /', '', '', '', ''),
	(2, 'roberto', '(   )    -', '  /  /', '', '', '', ''),
	(3, 'Administrador', '0', '0', '0', '0', '0', '0'),
	(4, 'Giga', '(   )    -', '  /  /', '', 'Gislaine', '123', '');
/*!40000 ALTER TABLE `cad_func` ENABLE KEYS */;

-- Copiando estrutura para tabela tcc_comp.cad_produtos
CREATE TABLE IF NOT EXISTS `cad_produtos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `produto` varchar(50) NOT NULL DEFAULT '0',
  `marca` varchar(25) NOT NULL DEFAULT '0',
  `quantidade` int(255) NOT NULL DEFAULT '0',
  `unidade` varchar(25) NOT NULL DEFAULT '0',
  `valor_compra` double(9,2) NOT NULL DEFAULT '0.00',
  `valor_venda` double(9,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_comp.cad_produtos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `cad_produtos` DISABLE KEYS */;
INSERT INTO `cad_produtos` (`codigo`, `produto`, `marca`, `quantidade`, `unidade`, `valor_compra`, `valor_venda`) VALUES
	(70, 'Régua', 'Bic', 150, '0', 1.50, 10.99),
	(71, 'Lápis', 'trunfo', 380, '0', 0.99, 2.50),
	(73, 'Esquadro', 'Registrer', 370, '0', 1.55, 3.99);
/*!40000 ALTER TABLE `cad_produtos` ENABLE KEYS */;

-- Copiando estrutura para tabela tcc_comp.cad_prof
CREATE TABLE IF NOT EXISTS `cad_prof` (
  `codigo_profbd` int(11) NOT NULL AUTO_INCREMENT,
  `nome_comp_profbd` varchar(100) NOT NULL DEFAULT '0',
  `rg_profbd` varchar(20) NOT NULL DEFAULT '0',
  `dtnascimento_profbd` varchar(50) NOT NULL DEFAULT '0',
  `email_profbd` varchar(50) NOT NULL DEFAULT '0',
  `usuario_profbd` varchar(30) NOT NULL DEFAULT '0',
  `senha_profbd` varchar(30) NOT NULL DEFAULT '0',
  `Materia` varchar(30) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo_profbd`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_comp.cad_prof: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `cad_prof` DISABLE KEYS */;
INSERT INTO `cad_prof` (`codigo_profbd`, `nome_comp_profbd`, `rg_profbd`, `dtnascimento_profbd`, `email_profbd`, `usuario_profbd`, `senha_profbd`, `Materia`) VALUES
	(1, 'afas', '(  )      -', '  /  /', '', '', '', ''),
	(4, '', '(  )      -', '  /  /', 'wefaweawefawe', 'Rodrigo', '123', 'weafew'),
	(6, '', '(  )      -', '  /  /', '', '', '', ''),
	(10, 'mol', '( 5) 55555-555', ' 3/33/3333', 'sdoiafj', 'skadjfhasoj', 'skjdhfrslj', 'sadlkhfdsa'),
	(11, 'Mafalda', '(  )      -', '  /  /', '', '', '', ''),
	(12, 'Mayara', '(  )      -', '  /  /', '', 'mayara', '123', '');
/*!40000 ALTER TABLE `cad_prof` ENABLE KEYS */;

-- Copiando estrutura para tabela tcc_comp.ent_produdos
CREATE TABLE IF NOT EXISTS `ent_produdos` (
  `idprod` int(11) NOT NULL AUTO_INCREMENT,
  `produto` varchar(50) NOT NULL DEFAULT '0',
  `marca` varchar(25) NOT NULL DEFAULT '0',
  `quantidade_adq` int(255) NOT NULL DEFAULT '0',
  `unidade` varchar(50) NOT NULL DEFAULT '0',
  `valor_compra` double(9,2) NOT NULL DEFAULT '0.00',
  `subtotal` double(9,2) NOT NULL DEFAULT '0.00',
  `codigo_porduto` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo_porduto`,`idprod`),
  KEY `FK_ent_produdos_cad_produtos` (`idprod`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_comp.ent_produdos: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `ent_produdos` DISABLE KEYS */;
INSERT INTO `ent_produdos` (`idprod`, `produto`, `marca`, `quantidade_adq`, `unidade`, `valor_compra`, `subtotal`, `codigo_porduto`) VALUES
	(73, 'Esquadro', 'Registrer', 40, 'Caixas', 2.00, 62.00, 22),
	(73, 'Esquadro', 'Registrer', 20, 'Caixas', 2.00, 31.00, 23),
	(73, 'Esquadro', 'Registrer', 10, 'Caixas', 2.00, 16.00, 24),
	(73, 'Esquadro', 'Registrer', 10, 'Caixas', 2.00, 16.00, 25),
	(70, 'Régua', 'Bic', 5, 'Caixas', 2.00, 8.00, 26),
	(71, 'Lápis', 'trunfo', 20, 'Caixas', 1.00, 20.00, 26),
	(71, 'Lápis', 'trunfo', 5, 'Caixas', 1.00, 5.00, 27),
	(70, 'Régua', 'Bic', 9, 'Caixas', 2.00, 14.00, 28);
/*!40000 ALTER TABLE `ent_produdos` ENABLE KEYS */;

-- Copiando estrutura para tabela tcc_comp.item_venda
CREATE TABLE IF NOT EXISTS `item_venda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_venda` int(11) NOT NULL,
  `cod_produto` int(11) NOT NULL,
  `quantidade` int(100) NOT NULL,
  `unidade` varchar(50) NOT NULL,
  `valor` double(9,2) NOT NULL,
  `desconto` int(100) NOT NULL,
  `subtotal` double(9,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=666752 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_comp.item_venda: ~30 rows (aproximadamente)
/*!40000 ALTER TABLE `item_venda` DISABLE KEYS */;
INSERT INTO `item_venda` (`id`, `cod_venda`, `cod_produto`, `quantidade`, `unidade`, `valor`, `desconto`, `subtotal`) VALUES
	(666722, 142, 70, 3, 'Caixas', 10.99, 0, 32.97),
	(666723, 143, 73, 15, 'Caixas', 3.99, 0, 59.85),
	(666724, 144, 70, 3, 'Caixas', 10.99, 0, 32.97),
	(666725, 145, 70, 4, 'Caixas', 10.99, 0, 43.96),
	(666726, 145, 73, 1, 'Caixas', 3.99, 0, 3.99),
	(666727, 146, 70, 3, 'Caixas', 10.99, 0, 32.97),
	(666728, 147, 73, 3, 'Caixas', 3.99, 0, 11.97),
	(666729, 147, 71, 7, 'Caixas', 2.50, 0, 17.50),
	(666730, 148, 70, 7, 'Caixas', 10.99, 0, 76.93),
	(666731, 148, 73, 3, 'Caixas', 3.99, 0, 11.97),
	(666732, 149, 70, 5, 'Caixas', 10.99, 0, 54.95),
	(666733, 149, 73, 2, 'Caixas', 3.99, 0, 7.98),
	(666734, 150, 70, 3, 'Caixas', 10.99, 0, 32.97),
	(666735, 151, 73, 2, 'Caixas', 3.99, 0, 7.98),
	(666736, 151, 70, 3, 'Caixas', 10.99, 0, 32.97),
	(666737, 152, 70, 4, 'Caixas', 10.99, 0, 43.96),
	(666738, 153, 70, 6, 'Caixas', 10.99, 0, 65.94),
	(666739, 154, 70, 5, 'Caixas', 10.99, 0, 54.95),
	(666740, 154, 73, 2, 'Caixas', 3.99, 0, 7.98),
	(666741, 155, 70, 3, 'Caixas', 10.99, 0, 32.97),
	(666742, 155, 73, 8, 'Caixas', 3.99, 0, 31.92),
	(666743, 155, 71, 50, 'Caixas', 2.50, 0, 125.00),
	(666744, 158, 73, 3, 'Caixas', 3.99, 0, 11.97),
	(666745, 158, 71, 5, 'Caixas', 2.50, 0, 12.50),
	(666746, 159, 70, 2, 'Caixas', 10.99, 0, 21.98),
	(666747, 159, 73, 3, 'Caixas', 3.99, 0, 11.97),
	(666748, 160, 70, 3, 'Caixas', 10.99, 0, 32.97),
	(666749, 160, 71, 5, 'Caixas', 2.50, 0, 12.50),
	(666750, 161, 70, 7, 'Caixas', 10.99, 0, 76.93),
	(666751, 161, 73, 7, 'Caixas', 3.99, 0, 27.93);
/*!40000 ALTER TABLE `item_venda` ENABLE KEYS */;

-- Copiando estrutura para tabela tcc_comp.locacao_ba
CREATE TABLE IF NOT EXISTS `locacao_ba` (
  `numero` int(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `preco` double(9,2) NOT NULL,
  `locatario` int(100) NOT NULL,
  `nome_loc` varchar(100) NOT NULL,
  `rg_loc` varchar(50) NOT NULL,
  `sala` varchar(50) NOT NULL,
  `data_locacao` varchar(50) NOT NULL,
  `data_dev` varchar(50) NOT NULL,
  PRIMARY KEY (`locatario`),
  UNIQUE KEY `numero` (`numero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_comp.locacao_ba: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `locacao_ba` DISABLE KEYS */;
INSERT INTO `locacao_ba` (`numero`, `estado`, `preco`, `locatario`, `nome_loc`, `rg_loc`, `sala`, `data_locacao`, `data_dev`) VALUES
	(12, 'Ocupado', 80.00, 4567, 'Maria', 'Aparecida', 'DID2', 'segunda-feira, 17 de setembro de 2018', 'segunda-feira, 17 de setembro de 2018'),
	(1, 'Ocupado', 80.00, 8960, 'alberto', 'filé', '', 'segunda-feira, 17 de setembro de 2018', 'sexta-feira, 30 de novembro de 2018'),
	(7, 'Ocupado', 80.00, 666666, 'João', 'Chinfronésio', 'ADM 1', 'terça-feira, 18 de setembro de 2018', 'terça-feira, 18 de setembro de 2018');
/*!40000 ALTER TABLE `locacao_ba` ENABLE KEYS */;

-- Copiando estrutura para tabela tcc_comp.registros_arm
CREATE TABLE IF NOT EXISTS `registros_arm` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `bloco` varchar(20) NOT NULL,
  `numero` int(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `preco` double(9,2) NOT NULL,
  `locatario` int(100) NOT NULL,
  `nome_loc` varchar(100) NOT NULL,
  `rg_loc` varchar(50) NOT NULL,
  `sala` varchar(50) NOT NULL,
  `data_locacao` varchar(50) NOT NULL,
  `data_dev` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_comp.registros_arm: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `registros_arm` DISABLE KEYS */;
INSERT INTO `registros_arm` (`id`, `bloco`, `numero`, `estado`, `preco`, `locatario`, `nome_loc`, `rg_loc`, `sala`, `data_locacao`, `data_dev`) VALUES
	(2, 'Bloco A', 6, 'Ocupado', 80.00, 4567, 'asergaes', 'rgraeg', '', 'sábado, 1 de setembro de 2018', 'quinta-feira, 29 de novembro de 2018'),
	(3, 'Bloco A', 1, 'Ocupado', 80.00, 8960, 'alberto', 'filé', '', 'segunda-feira, 17 de setembro de 2018', 'sexta-feira, 30 de novembro de 2018'),
	(4, 'Bloco A', 6, 'Ocupado', 80.00, 33246, 'dsiacbfdhas', 'ckjdsbjsd', 'LOG 1', 'sábado, 1 de setembro de 2018', 'quinta-feira, 29 de novembro de 2018'),
	(5, 'Bloco A', 12, 'Ocupado', 80.00, 4567, 'Maria', 'Aparecida', 'DID2', 'segunda-feira, 17 de setembro de 2018', 'segunda-feira, 17 de setembro de 2018'),
	(6, 'Bloco A', 7, 'Ocupado', 80.00, 666666, 'João', 'Chinfronésio', 'ADM 1', 'terça-feira, 18 de setembro de 2018', 'terça-feira, 18 de setembro de 2018');
/*!40000 ALTER TABLE `registros_arm` ENABLE KEYS */;

-- Copiando estrutura para tabela tcc_comp.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_comp.usuario: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`cod`, `login`, `senha`) VALUES
	(1, 'Marilene', '123'),
	(2, 'Rique', '456');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

-- Copiando estrutura para tabela tcc_comp.venda
CREATE TABLE IF NOT EXISTS `venda` (
  `codigo_venda` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(50) NOT NULL DEFAULT '0',
  `subtotal_geral` double(9,2) NOT NULL DEFAULT '0.00',
  `id_cliente` int(11) NOT NULL DEFAULT '0',
  `id_vendedor` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo_venda`)
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela tcc_comp.venda: ~20 rows (aproximadamente)
/*!40000 ALTER TABLE `venda` DISABLE KEYS */;
INSERT INTO `venda` (`codigo_venda`, `data`, `subtotal_geral`, `id_cliente`, `id_vendedor`) VALUES
	(142, '05/10/2018', 48.93, 98765, 1),
	(143, '05/10/2018', 81.83, 8960, 4),
	(144, '05/10/2018', 40.95, 33456, 1),
	(145, '05/10/2018', 47.95, 99832, 2),
	(146, '05/10/2018', 44.94, 33457, 4),
	(147, '05/10/2018', 29.47, 7812, 4),
	(148, '05/10/2018', 88.90, 4567, 3),
	(149, '05/10/2018', 62.93, 7812, 2),
	(150, '05/10/2018', 32.97, 98765, 4),
	(151, '05/10/2018', 40.95, 666666, 2),
	(152, '05/10/2018', 43.96, 99832, 4),
	(153, '05/10/2018', 65.94, 33246, 2),
	(154, '05/10/2018', 62.93, 666666, 2),
	(155, '05/10/2018', 189.89, 8960, 1),
	(156, '05/10/2018', 28.46, 98765, 4),
	(157, '05/10/2018', 24.47, 99832, 3),
	(158, '05/10/2018', 24.47, 98765, 3),
	(159, '05/10/2018', 33.95, 4567, 1),
	(160, '05/10/2018', 45.47, 7812, 2),
	(161, '05/10/2018', 104.86, 33456, 2);
/*!40000 ALTER TABLE `venda` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
