-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Out-2020 às 16:48
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `produtosepedidos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `nomeProduto` varchar(80) NOT NULL,
  `valorUnitario` decimal(8,2) NOT NULL,
  `quantidade` varchar(50) NOT NULL,
  `valorTotal` decimal(8,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `nome`, `endereco`, `telefone`, `nomeProduto`, `valorUnitario`, `quantidade`, `valorTotal`) VALUES
(1, 'Carolina', 'Rua 1, 123', '11999999999', 'Geladeira/Refrigerador Side By Side Frost Free Inox 504L Electrolux', '7789.05', '1', '7789.05'),
(2, 'Vanessa', 'Rua B, 343', '11888888888', 'Micro-Ondas 34L Preto Pro Series Electrolux', '4399.00', '2', '8798.00'),
(3, 'Gabriela', 'Rua C, 54', '11777777777', 'Ar-Condicionado Inverter Split 9000 BTUs Electrolux Frio com Wi-fi - 220V', '1851.55', '1', '1851.55'),
(4, 'Luisa', 'Rua D, 76', '11666666666', 'Fogão 5 Bocas Electrolux Prata Aut.com Mesa de Vidro e Tripla Chama', '2089.05', '1', '2089.05'),
(5, 'Thais', 'Rua E, 99', '11555555555', 'Purificador de Água Prata com Painel Touch Bivolt', '559.55', '1', '559.55'),
(6, 'Sonia', 'Rua F, 546', '11444444444', 'Geladeira/Refrigerador Frost Free 310 Litros Branco Electrolux', '1799.10', '1', '1799.10'),
(7, 'Rosana', 'Rua G, 21', '11333333333', 'Cafeteira Expressionist Display LCD Programável Electrolux', '599.90', '1', '599.90'),
(8, 'Roberta', 'Rua 3', '11333333333', 'Geladeira/Refrigerador Side By Side Frost Free Inox 504L Electrolux', '7789.05', '1', '7789.05'),
(9, 'Camila', 'Rua 10', '11222222222', 'Micro-Ondas 34L Preto Pro Series Electrolux', '4399.00', '2', '8798.00'),
(10, 'Carla', 'Rua Z', '11111111111', 'Ar-Condicionado Inverter Split 9000 BTUs Electrolux Frio com Wi-fi - 220V', '1851.55', '1', '1851.55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `preco` decimal(8,2) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idproduto`, `nome`, `descricao`, `preco`, `imagem`) VALUES
(1, 'geladeira', 'Geladeira/Refrigerador Side By Side Frost Free Inox 504L Electrolux', '7789.05', './img/geladeira-eletrolux.png'),
(2, 'microondas', 'Micro-Ondas 34L Preto Pro Series Electrolux', '4399.00', './img/microondas-eletrolux.png'),
(3, 'microondas', 'Micro-ondas Branco com Função Tira Odor e Manter Aquecido 34L', '539.10', './img/microondas-eletrolux2.png'),
(4, 'fogao', 'Fogão 5 Bocas Electrolux Prata Aut.com Mesa de Vidro e Tripla Chama', '2089.05', './img/fogao-eletrolux1.png'),
(5, 'lavaloucas', 'Lava-Louças Electrolux 8 Serviços e 5 velocidades Cinza', '2249.10', './img/lava-lou%C3%A7as1.png'),
(6, 'geladeira', 'Geladeira/Refrigerador Frost Free 310 Litros Branco Electrolux', '1799.10', './img/geladeira-eletrolux2.png'),
(7, 'lavadora', 'Lava e Seca 11Kg/7Kg Electrolux Prata com Wi-fI e Água Quente/Vapor', '4084.05', './img/lava-roupas.png'),
(8, 'fogao', 'Fogão 4 Bocas Electrolux Branco Aut. com Timer Digital e Forno de 70L', '1186.55', './img/fogao-eletrolux2.png'),
(9, 'adega', 'Adega 8 Garrafas Com Acabamento Em Alumínio Escovado', '674.10', './img/adega.png'),
(10, 'arcondicionado', 'Ar-Condicionado Inverter Split 9000 BTUs Electrolux Frio com Wi-fi - 220V', '1851.55', './img/ar-condicionado.png'),
(11, 'filtro', 'Purificador de Água Prata com Painel Touch Bivolt', '559.55', './img/purificador-agua.png'),
(12, 'cafeteira', 'Cafeteira Expressionist Display LCD Programável Electrolux', '599.90', './img/cafeteira.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
