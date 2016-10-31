-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql4.porta80.com.br
-- Generation Time: 16-Set-2016 às 07:50
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
-- Estrutura da tabela `portifolio`
--

CREATE TABLE `portifolio` (
  `id` int(11) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  `descricao` text NOT NULL,
  `portifolio` varchar(20) NOT NULL,
  `item` varchar(20) NOT NULL,
  `alt` varchar(20) NOT NULL,
  `local` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `portifolio`
--

INSERT INTO `portifolio` (`id`, `titulo`, `descricao`, `portifolio`, `item`, `alt`, `local`) VALUES
(1, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/DSC03557.jpg'),
(2, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_0039.jpg'),
(3, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_0042.jpg'),
(4, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_0080.jpg'),
(5, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_0081.jpg'),
(6, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_2634.jpg'),
(7, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_2638.jpg'),
(8, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_2640.jpg'),
(9, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_2641.jpg'),
(10, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_2644.jpg'),
(11, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_3036.jpg'),
(12, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_3338.jpg'),
(13, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_6400.jpg'),
(14, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_6684.jpg'),
(15, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_6770.jpg'),
(16, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_6777.jpg'),
(17, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_6784.jpg'),
(18, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_6785.jpg'),
(19, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_7468.jpg'),
(20, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_8167.jpg'),
(21, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9419.jpg'),
(22, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9421.jpg'),
(23, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9422.jpg'),
(24, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9423.jpg'),
(25, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9426.jpg'),
(26, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9433.jpg'),
(27, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9439.jpg'),
(28, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9442.jpg'),
(29, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9448.jpg'),
(30, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9449.jpg'),
(31, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9451.jpg'),
(32, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9452.jpg'),
(33, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9453.jpg'),
(34, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9454.jpg'),
(35, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9457.jpg'),
(36, 'Convite', 'Convite de casamento', 'casamento', 'convite', 'convite', '/assets/img/uploads/casamento/convite/IMG_9458.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portifolio`
--
ALTER TABLE `portifolio`
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
-- AUTO_INCREMENT for table `portifolio`
--
ALTER TABLE `portifolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
