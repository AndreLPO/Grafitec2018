-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           10.1.21-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para inicio
CREATE DATABASE IF NOT EXISTS `inicio` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `inicio`;

-- Copiando estrutura para tabela inicio.func
CREATE TABLE IF NOT EXISTS `func` (
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela inicio.func: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `func` DISABLE KEYS */;
INSERT INTO `func` (`usuario`, `senha`) VALUES
	('Admin', '123');
/*!40000 ALTER TABLE `func` ENABLE KEYS */;

-- Copiando estrutura para tabela inicio.login
CREATE TABLE IF NOT EXISTS `login` (
  `usuario` varchar(25) NOT NULL,
  `senha` varchar(25) NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela inicio.login: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`usuario`, `senha`) VALUES
	('Admin', '1234'),
	('Andre', '123');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

-- Copiando estrutura para tabela inicio.prof
CREATE TABLE IF NOT EXISTS `prof` (
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela inicio.prof: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `prof` DISABLE KEYS */;
INSERT INTO `prof` (`usuario`, `senha`) VALUES
	('Mancini', '123');
/*!40000 ALTER TABLE `prof` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
