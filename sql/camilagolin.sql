-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql4.porta80.com.br
-- Generation Time: 21-Set-2016 às 21:53
-- Versão do servidor: 5.6.30-log
-- PHP Version: 5.5.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camilagolin`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) CHARACTER SET latin1 NOT NULL,
  `descricao` text CHARACTER SET latin1 NOT NULL,
  `portifolio` varchar(30) CHARACTER SET latin1 NOT NULL,
  `item` varchar(30) CHARACTER SET latin1 NOT NULL,
  `local` varchar(200) NOT NULL,
  `alt` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `crud`
--

INSERT INTO `crud` (`id`, `titulo`, `descricao`, `portifolio`, `item`, `local`, `alt`) VALUES
(6, 'Convite', '', 'casamento', 'convite', '/assets/img/uploads/casamento/convite/DSC03557.jpg', 'Convite');

-- --------------------------------------------------------

--
-- Estrutura da tabela `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `portfolio` varchar(20) NOT NULL,
  `item` varchar(20) NOT NULL,
  `alt` varchar(150) NOT NULL,
  `local` varchar(200) NOT NULL,
  `data_postagem` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `portfolio`
--

INSERT INTO `portfolio` (`id`, `titulo`, `descricao`, `portfolio`, `item`, `alt`, `local`, `data_postagem`) VALUES
(1, 'Convite de casamento rendado a laser', 'convite de casamento de papel rendado cortado a laser de aba ondulada e fechamento com laço de cetim', 'casamento', 'convite', 'convite de casamento de papel rendado cortado a laser de aba ondulada e fechamento com laço de cetim', '/assets/img/uploads/casamento/convite/DSC03557.jpg', '2016-09-17'),
(2, 'Convite de casamento de aba reta', 'convite de casamento clássico com brasão em relevo seco centralizado, abas retas e fechamento com fita laço chanel gorgurão', 'casamento', 'convite', 'convite de casamento clássico com brasão em relevo seco centralizado, abas retas e fechamento com fita laço chanel gorgurão', '/assets/img/uploads/casamento/convite/IMG_0039.jpg', '2016-09-17'),
(3, 'Convite de casamento retangular com renda', 'Convite de casamento branco clássico retangular com renda de envelope gaveta com corte meia lua centralizada no topo.', 'casamento', 'convite', 'Convite de casamento branco clássico retangular com renda de envelope gaveta com corte meia lua centralizada no topo.', '/assets/img/uploads/casamento/convite/IMG_0042.jpg', '2016-09-17'),
(4, 'Convite de casamento de aba reta', 'Convite de casamento de aba reta com brasão centralizado com o nome do casal e amarração com fita de cetim azul tiffany laço chanel duplo e meia pérola', 'casamento', 'convite', 'Convite de casamento de aba reta com brasão centralizado com o nome do casal e amarração com fita de cetim azul tiffany laço chanel duplo e meia pérol', '/assets/img/uploads/casamento/convite/IMG_0080.jpg', '2016-09-17'),
(5, 'Convite de casamento de aba reta', 'Convite de casamento de aba reta com tag nome', 'casamento', 'convite', 'Convite de casamento de aba reta com tag nome', '/assets/img/uploads/casamento/convite/IMG_0081.jpg', '2016-09-17'),
(6, 'Convite de casamento de aba reta', 'Convite de casamento de aba reta estampada com arabescos na parte interna ', 'casamento', 'convite', 'Convite de casamento de aba reta estampada com arabescos na parte interna', '/assets/img/uploads/casamento/convite/IMG_2634.jpg', '2016-09-17'),
(7, 'Convite de casamento de aba reta', 'Convite de casamento de aba reta com brasão dourado centralizado com iniciais do casal e fechamento de laço chanel duplo dourado', 'casamento', 'convite', 'Convite de casamento de aba reta com brasão dourado centralizado com iniciais do casal e fechamento de laço chanel duplo dourado', '/assets/img/uploads/casamento/convite/IMG_2638.jpg', '2016-09-17'),
(8, 'Convite de casamento clássico de aba triangular', 'Convite de casamento clássico de aba triangular com douração de arabescos no bico do convite', 'casamento', 'convite', 'Convite de casamento clássico de aba triangular com douração de arabescos na ponta do convite', '/assets/img/uploads/casamento/convite/IMG_2640.jpg', '2016-09-17'),
(9, 'Convite de casamento clássico de aba triangular', 'Convite de casamento clássico de aba triangular com estampa interna de arabescos', 'casamento', 'convite', 'Convite de casamento clássico de aba triangular com estampa interna de arabescos', '/assets/img/uploads/casamento/convite/IMG_2641.jpg', '2016-09-17'),
(10, 'Convite de casamento com papel vegetal', 'Convite de casamento com papel vegetal estampado com arabescos brancos', 'casamento', 'convite', 'Convite de casamento com papel vegetal estampado com arabescos brancos', '/assets/img/uploads/casamento/convite/IMG_2644.jpg', '2016-09-17'),
(11, 'Convite de casamento rendado a laser', 'Convite de casamento rendado a laser de abas circulares e fechamento com laço de cetim azul tiffany', 'casamento', 'convite', 'Convite de casamento rendado a laser de abas circulares e fechamento com laço de cetim azul tiffany', '/assets/img/uploads/casamento/convite/IMG_3036.jpg', '2016-09-17'),
(12, 'Convite de casamento de aba reta', 'Convite de casamento de aba reta e laço de cetim chanel vermelho', 'casamento', 'convite', 'Convite de casamento de aba reta e laço de cetim chanel vermelho', '/assets/img/uploads/casamento/convite/IMG_3338.jpg', '2016-09-17'),
(13, 'Convite de casamento de aba reta', 'Convite de casamento de aba reta e relevo seco com laço de cetim chanel preto', 'casamento', 'convite', 'Convite de casamento de aba reta e relevo seco com laço de cetim chanel preto', '/assets/img/uploads/casamento/convite/IMG_6400.jpg', '2016-09-17'),
(14, 'Convite de casamento rendado a laser', 'Convite de casamento rendado a laser de abas circulares e fechamento com laço de cordão encerado borboleta verde', 'casamento', 'convite', 'Convite de casamento rendado a laser de abas circulares e fechamento com laço de cordão encerado borboleta verde', '/assets/img/uploads/casamento/convite/IMG_6684.jpg', '2016-09-17'),
(15, 'Convite de casamento de aba reta', 'Convite de casamento de aba reta com brasão dourado com estampas de arabescos na parte inferior e fechamento de cetim laço chanel', 'casamento', 'convite', 'Convite de casamento de aba reta com brasão dourado com estampas de arabescos na parte inferior e fechamento de cetim laço chanel', '/assets/img/uploads/casamento/convite/IMG_6770.jpg', '2016-09-17'),
(16, 'Convite de casamento de aba reta', 'Convite de casamento de aba reta com papel texturizado', 'casamento', 'convite', 'Convite de casamento de aba reta com papel texturizado', '/assets/img/uploads/casamento/convite/IMG_6777.jpg', '2016-09-17'),
(17, 'Convite de casamento rendado a laser', 'Convite de casamento rendado a laser', 'casamento', 'convite', 'Convite de casamento rendado a laser', '/assets/img/uploads/casamento/convite/IMG_6784.jpg', '2016-09-17'),
(18, 'Convite de casamento clássico de aba triangular', 'Convite de casamento clássico de aba triangular', 'casamento', 'convite', 'Convite de casamento clássico de aba triangular e brasão dourado', '/assets/img/uploads/casamento/convite/IMG_6785.jpg', '2016-09-17'),
(19, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_7468.jpg', '2016-09-17'),
(20, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_8167.jpg', '2016-09-17'),
(21, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9419.jpg', '2016-09-17'),
(22, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9421.jpg', '2016-09-17'),
(23, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9422.jpg', '2016-09-17'),
(24, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9423.jpg', '2016-09-17'),
(25, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9426.jpg', '2016-09-17'),
(26, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9433.jpg', '2016-09-17'),
(27, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9439.jpg', '2016-09-17'),
(28, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9442.jpg', '2016-09-17'),
(29, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9448.jpg', '2016-09-17'),
(30, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9449.jpg', '2016-09-17'),
(31, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9451.jpg', '2016-09-17'),
(32, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9452.jpg', '2016-09-17'),
(33, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9453.jpg', '2016-09-17'),
(34, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9454.jpg', '2016-09-17'),
(35, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9457.jpg', '2016-09-17'),
(36, 'Convite titulo', 'Convite de casamento', 'casamento', 'convite', 'convite info', '/assets/img/uploads/casamento/convite/IMG_9458.jpg', '2016-09-17'),
(37, 'Lembrança', 'Lembrança', 'casamento', 'lembranca', 'Lembrança', '/assets/img/uploads/casamento/lembranca/IMG_0030.jpg', '2016-09-17'),
(38, 'Lembrança', 'Lembrança', 'casamento', 'lembranca', 'Lembrança', '/assets/img/uploads/casamento/lembranca/IMG_1567.jpg', '2016-09-17'),
(39, 'Lembrança', 'Lembrança', 'casamento', 'lembranca', 'Lembrança', '/assets/img/uploads/casamento/lembranca/IMG_5973.jpg', '2016-09-17'),
(40, 'Lembrança', 'Lembrança', 'casamento', 'lembranca', 'Lembrança', '/assets/img/uploads/casamento/lembranca/IMG_6242.jpg', '2016-09-17'),
(41, 'Lembrança', 'Lembrança', 'casamento', 'lembranca', 'Lembrança', '/assets/img/uploads/casamento/lembranca/IMG_7426.jpg', '2016-09-17'),
(42, 'Acessório', 'Acessório', 'casamento', 'acessorio', 'Acessório', '/assets/img/uploads/casamento/acessorio/IMG_3240.jpg', '2016-09-17'),
(43, 'Acessório', 'Acessório', 'casamento', 'acessorio', 'Acessório', '/assets/img/uploads/casamento/acessorio/IMG_3242.jpg', '2016-09-17'),
(44, 'Acessório', 'Acessório', 'casamento', 'acessorio', 'Acessório', '/assets/img/uploads/casamento/acessorio/IMG_3276.jpg', '2016-09-17'),
(45, 'Acessório', 'Acessório', 'casamento', 'acessorio', 'Acessório', '/assets/img/uploads/casamento/acessorio/IMG_3724.jpg', '2016-09-17'),
(46, 'Acessório', 'Acessório', 'casamento', 'acessorio', 'Acessório', '/assets/img/uploads/casamento/acessorio/IMG_4511.jpg', '2016-09-17'),
(47, 'Acessório', 'Acessório', 'casamento', 'acessorio', 'Acessório', '/assets/img/uploads/casamento/acessorio/IMG_4929.jpg', '2016-09-17'),
(48, 'Acessório', 'Acessório', 'casamento', 'acessorio', 'Acessório', '/assets/img/uploads/casamento/acessorio/IMG_6274.jpg', '2016-09-17'),
(49, 'Acessório', 'Acessório', 'casamento', 'acessorio', 'Acessório', '/assets/img/uploads/casamento/acessorio/IMG_6372.jpg', '2016-09-17'),
(50, 'Acessório', 'Acessório', 'casamento', 'acessorio', 'Acessório', '/assets/img/uploads/casamento/acessorio/IMG_6783.jpg', '2016-09-17'),
(51, 'Acessório', 'Acessório', 'casamento', 'acessorio', 'Acessório', '/assets/img/uploads/casamento/acessorio/IMG_6787.jpg', '2016-09-17'),
(52, 'Acessório', 'Acessório', 'casamento', 'acessorio', 'Acessório', '/assets/img/uploads/casamento/acessorio/IMG_7266.jpg', '2016-09-17'),
(53, 'Acessório', 'Acessório', 'casamento', 'acessorio', 'Acessório', '/assets/img/uploads/casamento/acessorio/IMG_7517.jpg', '2016-09-17'),
(54, 'Acessório', 'Acessório', 'casamento', 'acessorio', 'Acessório', '/assets/img/uploads/casamento/acessorio/IMG_9455.jpg', '2016-09-17'),
(55, 'Acessório', 'Acessório', 'casamento', 'acessorio', 'Acessório', '/assets/img/uploads/casamento/acessorio/IMG_9456.jpg', '2016-09-17'),
(56, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_0024.jpg', '2016-09-17'),
(57, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_0049.jpg', '2016-09-17'),
(58, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_0056.jpg', '2016-09-17'),
(59, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_0147.jpg', '2016-09-17'),
(60, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_0791.jpg', '2016-09-17'),
(61, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_0942.jpg', '2016-09-17'),
(62, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_1043.jpg', '2016-09-17'),
(63, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_1076.jpg', '2016-09-17'),
(64, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_1239.jpg', '2016-09-17'),
(65, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_2522.jpg', '2016-09-17'),
(66, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_2554.jpg', '2016-09-17'),
(67, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_2555.jpg', '2016-09-17'),
(68, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_3460.jpg', '2016-09-17'),
(69, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_3668.jpg', '2016-09-17'),
(70, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_3719.jpg', '2016-09-17'),
(71, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_3948.jpg', '2016-09-17'),
(72, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_3955.jpg', '2016-09-17'),
(73, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_3957.jpg', '2016-09-17'),
(74, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_4226.jpg', '2016-09-17'),
(75, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_4231.jpg', '2016-09-17'),
(76, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_4234.jpg', '2016-09-17'),
(77, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_4500.jpg', '2016-09-17'),
(78, 'Acessório', 'Acessório', 'debutante', 'acessorio', 'Acessório', '/assets/img/uploads/debutante/acessorio/IMG_4536.jpg', '2016-09-17'),
(79, 'Convite Debutante', 'Convite Debutante', 'debutante', 'convite', 'Convite Debutante', '/assets/img/uploads/debutante/convite/DSC03596.jpg', '2016-09-17'),
(80, 'Convite Debutante', 'Convite Debutante', 'debutante', 'convite', 'Convite Debutante', '/assets/img/uploads/debutante/convite/DSC03597.jpg', '2016-09-17'),
(81, 'Convite Debutante', 'Convite Debutante', 'debutante', 'convite', 'Convite Debutante', '/assets/img/uploads/debutante/convite/DSC03601.jpg', '2016-09-17'),
(82, 'Convite Debutante', 'Convite Debutante', 'debutante', 'convite', 'Convite Debutante', '/assets/img/uploads/debutante/convite/IMG_0224.jpg', '2016-09-17'),
(83, 'Convite Debutante', 'Convite Debutante', 'debutante', 'convite', 'Convite Debutante', '/assets/img/uploads/debutante/convite/IMG_0236.jpg', '2016-09-17'),
(84, 'Convite Debutante', 'Convite Debutante', 'debutante', 'convite', 'Convite Debutante', '/assets/img/uploads/debutante/convite/IMG_0423.jpg', '2016-09-17'),
(85, 'Convite Debutante', 'Convite Debutante', 'debutante', 'convite', 'Convite Debutante', '/assets/img/uploads/debutante/convite/IMG_0690.jpg', '2016-09-17'),
(86, 'Convite Debutante', 'Convite Debutante', 'debutante', 'convite', 'Convite Debutante', '/assets/img/uploads/debutante/convite/IMG_0708.jpg', '2016-09-17'),
(87, 'Convite Debutante', 'Convite Debutante', 'debutante', 'convite', 'Convite Debutante', '/assets/img/uploads/debutante/convite/IMG_1721.jpg', '2016-09-17'),
(88, 'Convite Debutante', 'Convite Debutante', 'debutante', 'convite', 'Convite Debutante', '/assets/img/uploads/debutante/convite/IMG_2757.jpg', '2016-09-17'),
(89, 'Convite Debutante', 'Convite Debutante', 'debutante', 'convite', 'Convite Debutante', '/assets/img/uploads/debutante/convite/IMG_2771.jpg', '2016-09-17'),
(90, 'Convite Debutante', 'Convite Debutante', 'debutante', 'convite', 'Convite Debutante', '/assets/img/uploads/debutante/convite/IMG_3261.jpg', '2016-09-17'),
(91, 'Convite Debutante', 'Convite Debutante', 'debutante', 'convite', 'Convite Debutante', '/assets/img/uploads/debutante/convite/IMG_3292.jpg', '2016-09-17'),
(92, 'Convite Debutante', 'Convite Debutante', 'debutante', 'convite', 'Convite Debutante', '/assets/img/uploads/debutante/convite/IMG_3300.jpg', '2016-09-17'),
(93, 'Convite Debutante', 'Convite Debutante', 'debutante', 'convite', 'Convite Debutante', '/assets/img/uploads/debutante/convite/IMG_3311.jpg', '2016-09-17'),
(94, 'Convite Debutante', 'Convite Debutante', 'debutante', 'convite', 'Convite Debutante', '/assets/img/uploads/debutante/convite/IMG_3327.jpg', '2016-09-17'),
(95, 'Lembrança', 'Lembrança', 'debutante', 'lembranca', 'Lembrança', '/assets/img/uploads/debutante/lembranca/IMG_0059.jpg', '2016-09-17'),
(96, 'Lembrança', 'Lembrança', 'debutante', 'lembranca', 'Lembrança', '/assets/img/uploads/debutante/lembranca/IMG_3269.jpg', '2016-09-17'),
(97, 'Lembrança', 'Lembrança', 'debutante', 'lembranca', 'Lembrança', '/assets/img/uploads/debutante/lembranca/IMG_3272.jpg', '2016-09-17'),
(98, 'Lembrança', 'Lembrança', 'debutante', 'lembranca', 'Lembrança', '/assets/img/uploads/debutante/lembranca/IMG_3278.jpg', '2016-09-17'),
(99, 'Lembrança', 'Lembrança', 'debutante', 'lembranca', 'Lembrança', '/assets/img/uploads/debutante/lembranca/IMG_3926.jpg', '2016-09-17'),
(100, 'Lembrança', 'Lembrança', 'debutante', 'lembranca', 'Lembrança', '/assets/img/uploads/debutante/lembranca/IMG_4103.jpg', '2016-09-17'),
(101, 'Lembrança', 'Lembrança', 'debutante', 'lembranca', 'Lembrança', '/assets/img/uploads/debutante/lembranca/IMG_4274.jpg', '2016-09-17'),
(102, 'Titulo acessório', 'Descrição acessório', 'adulto', 'acessorio', 'AltTitulo acessório', '/assets/img/uploads/adulto/acessorio/IMG_0953.jpg', '2016-09-17'),
(103, 'Titulo acessório', 'Descrição acessório', 'adulto', 'acessorio', 'AltTitulo acessório', '/assets/img/uploads/adulto/acessorio/IMG_2502.jpg', '2016-09-17'),
(104, 'Titulo acessório', 'Descrição acessório', 'adulto', 'acessorio', 'AltTitulo acessório', '/assets/img/uploads/adulto/acessorio/IMG_6846.jpg', '2016-09-17'),
(105, 'Titulo acessório', 'Descrição acessório', 'adulto', 'acessorio', 'AltTitulo acessório', '/assets/img/uploads/adulto/acessorio/IMG_9111.jpg', '2016-09-17'),
(106, 'Titulo convite', 'Descrição convite', 'adulto', 'convite', 'alt convite', '/assets/img/uploads/adulto/convite/IMG_6733.jpg', '2016-09-17'),
(107, 'Titulo convite', 'Descrição convite', 'adulto', 'convite', 'alt convite', '/assets/img/uploads/adulto/convite/IMG_6790.jpg', '2016-09-17'),
(108, 'Titulo convite', 'Descrição convite', 'adulto', 'convite', 'alt convite', '/assets/img/uploads/adulto/convite/IMG_7632.jpg', '2016-09-17'),
(109, 'Titulo convite', 'Descrição convite', 'adulto', 'convite', 'alt convite', '/assets/img/uploads/adulto/convite/IMG_9125.jpg', '2016-09-17'),
(110, 'Titulo lembrança', 'Descrição lembranca', 'adulto', 'lembranca', 'lembrança adulto', '/assets/img/uploads/adulto/lembranca/IMG_2603.jpg', '2016-09-17'),
(111, 'Titulo lembrança', 'Descrição lembranca', 'adulto', 'lembranca', 'lembrança adulto', '/assets/img/uploads/adulto/lembranca/IMG_2605.jpg', '2016-09-17'),
(112, 'Titulo lembrança', 'Descrição lembranca', 'adulto', 'lembranca', 'lembrança adulto', '/assets/img/uploads/adulto/lembranca/IMG_6361.jpg', '2016-09-17'),
(113, 'Titulo lembrança', 'Descrição lembranca', 'adulto', 'lembranca', 'lembrança adulto', '/assets/img/uploads/adulto/lembranca/IMG_9137.jpg', '2016-09-17'),
(114, 'Titulo lembrança', 'Descrição lembranca', 'adulto', 'lembranca', 'lembrança adulto', '/assets/img/uploads/adulto/lembranca/IMG_9562.jpg', '2016-09-17'),
(115, 'Titulo convite', 'Descrição convite', 'corporativo', 'convite', 'Convite corporativo', '/assets/img/uploads/corporativo/convite/IMG_2664.jpg', '2016-09-17'),
(116, 'Titulo convite', 'Descrição convite', 'corporativo', 'convite', 'Convite corporativo', '/assets/img/uploads/corporativo/convite/IMG_2730.jpg', '2016-09-17'),
(117, 'Título Lembrança', 'Descrição Lembrança', 'corporativo', 'lembranca', 'Lembrança corporativ', '/assets/img/uploads/corporativo/lembranca/IMG_0990.jpg', '2016-09-17'),
(118, 'Título Lembrança', 'Descrição Lembrança', 'corporativo', 'lembranca', 'Lembrança corporativ', '/assets/img/uploads/corporativo/lembranca/IMG_1255.jpg', '2016-09-17'),
(119, 'Título Lembrança', 'Descrição Lembrança', 'corporativo', 'lembranca', 'Lembrança corporativ', '/assets/img/uploads/corporativo/lembranca/IMG_1276.jpg', '2016-09-17'),
(120, 'Título Lembrança', 'Descrição Lembrança', 'corporativo', 'lembranca', 'Lembrança corporativ', '/assets/img/uploads/corporativo/lembranca/IMG_1758.jpg', '2016-09-17'),
(121, 'Título Lembrança', 'Descrição Lembrança', 'corporativo', 'lembranca', 'Lembrança corporativ', '/assets/img/uploads/corporativo/lembranca/IMG_1990.jpg', '2016-09-17'),
(122, 'Título Lembrança', 'Descrição Lembrança', 'corporativo', 'lembranca', 'Lembrança corporativ', '/assets/img/uploads/corporativo/lembranca/IMG_4549.jpg', '2016-09-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
