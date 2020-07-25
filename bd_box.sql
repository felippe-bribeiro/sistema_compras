-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Jul-2020 às 09:26
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `box`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `lc_acompanhamentos`
--

CREATE TABLE `lc_acompanhamentos` (
  `id_acompanhamento` int(11) NOT NULL,
  `acompanhamento_add` text DEFAULT NULL,
  `dt_acompanhamento` date NOT NULL,
  `hr_acompanhamento` time NOT NULL,
  `id_fk_usuario_acompanhamento` int(11) NOT NULL,
  `id_fk_pedido` int(11) NOT NULL,
  `dt_time_acompanhamento` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `lc_acompanhamentos`
--

INSERT INTO `lc_acompanhamentos` (`id_acompanhamento`, `acompanhamento_add`, `dt_acompanhamento`, `hr_acompanhamento`, `id_fk_usuario_acompanhamento`, `id_fk_pedido`, `dt_time_acompanhamento`) VALUES
(33, 'Acompanhamento <b>Felippe</b>\r\n<br><i>Felippe</i>', '2020-05-11', '15:20:14', 31, 74, '2020-05-11 15:20:14'),
(34, '<b>Acompanhamento 2.</br></b>\r\n<b>Valores:</b><i>\r\n</br>R$50,00\r\n</br>R$150,00\r\n</i>', '2020-05-11', '15:21:20', 31, 74, '2020-05-11 15:21:20'),
(35, '<b>Alguma Novidade por gentileza </b>', '2020-05-11', '15:23:10', 44, 59, '2020-05-11 15:23:10'),
(36, 'Agilizar por gentileza</br>\r\n<b><i>O quanto antes melhor</b>', '2020-05-11', '15:24:04', 44, 75, '2020-05-11 15:24:04'),
(37, '<b>Mas de vagar se vai ao longe certo ? </b>', '2020-05-11', '15:24:51', 31, 75, '2020-05-11 15:24:51'),
(38, '<b>Novo Acompanhamento</b></br>\r\nFelippe Ribeiro da Silva Sauro.', '2020-05-11', '15:34:27', 31, 54, '2020-05-11 15:34:27'),
(39, 'Acompanhamento', '2020-05-11', '15:49:30', 31, 82, '2020-05-11 15:49:30'),
(40, 'Outro Acompanhamento', '2020-05-11', '15:49:41', 31, 83, '2020-05-11 15:49:41'),
(41, 'Novo Acompanhamento', '2020-05-11', '17:01:57', 31, 61, '2020-05-11 17:01:57'),
(42, '<i>Mais um Acompanhamento para Testes', '2020-05-12', '08:34:09', 31, 81, '2020-05-12 08:34:09'),
(43, '<i> E este acompanhamento ?', '2020-05-12', '08:34:30', 31, 84, '2020-05-12 08:34:30'),
(44, 'aaaaa', '2020-05-12', '11:02:27', 31, 84, '2020-05-12 11:02:27'),
(45, 'Pedido: aprovado', '2020-05-12', '13:03:21', 31, 84, '2020-05-12 13:03:21'),
(46, 'Pedido: negado', '2020-05-12', '13:03:38', 31, 84, '2020-05-12 13:03:38'),
(47, 'Pedido: negado, <b><br />Justificativa: </b> Não precisamos', '2020-05-12', '13:04:43', 31, 84, '2020-05-12 13:04:43'),
(48, 'Pedido: negado, <b><br />Justificativa: </b> Cancelado', '2020-05-12', '13:06:22', 31, 84, '2020-05-12 13:06:22'),
(49, 'Pedido: aprovado, <b><br />Justificativa: </b> asd', '2020-05-12', '13:07:50', 31, 84, '2020-05-12 13:07:50'),
(50, 'Pedido: negado, <b><br />Justificativa: </b> Rejeitado', '2020-05-12', '13:07:59', 31, 84, '2020-05-12 13:07:59'),
(51, 'Pedido: aprovado, <b><br />Justificativa: </b> Ciente ', '2020-05-12', '13:09:10', 31, 84, '2020-05-12 13:09:10'),
(53, 'Pedido: aprovado, <b><br />Justificativa: </b> Ciente', '2020-05-12', '14:57:05', 49, 86, '2020-05-12 14:57:05'),
(54, 'Pedido: negado, <b><br />Justificativa: </b> Teste', '2020-05-12', '15:04:48', 53, 88, '2020-05-12 15:04:48'),
(55, 'Pedido: negado, <b><br />Justificativa: </b> Não quero', '2020-05-12', '15:10:23', 53, 88, '2020-05-12 15:10:23'),
(56, 'Pedido: negado, <b><br />Justificativa: </b> asasd', '2020-05-12', '15:11:37', 53, 88, '2020-05-12 15:11:37'),
(57, 'Pedido: negado, <b><br />Justificativa: </b> Não quero', '2020-05-12', '15:12:01', 53, 88, '2020-05-12 15:12:01'),
(58, 'Pedido: negado, <b><br />Justificativa: </b> tb não quero', '2020-05-12', '15:12:46', 44, 88, '2020-05-12 15:12:46'),
(59, 'Pedido: negado, <b><br />Justificativa: </b> Sim', '2020-05-12', '15:27:05', 53, 88, '2020-05-12 15:27:05'),
(60, 'Pedido: negado, <b><br />Justificativa: </b> Sim', '2020-05-12', '15:27:05', 53, 88, '2020-05-12 15:27:05'),
(61, 'Pedido: negado, <b><br />Justificativa: </b> Rejeitado', '2020-05-12', '15:27:48', 53, 88, '2020-05-12 15:27:48'),
(62, 'Pedido: negado, <b><br />Justificativa: </b> Nops', '2020-05-12', '15:27:58', 53, 88, '2020-05-12 15:27:58'),
(63, 'Pedido: negado, <b><br />Justificativa: </b> Negado', '2020-05-12', '15:28:35', 53, 88, '2020-05-12 15:28:35'),
(64, 'Pedido: aprovado, <b><br />Justificativa: </b> teste', '2020-05-12', '15:29:53', 53, 88, '2020-05-12 15:29:53'),
(65, 'Pedido: aprovado, <b><br />Justificativa: </b> asdasd', '2020-05-12', '15:33:04', 53, 88, '2020-05-12 15:33:04'),
(66, 'Pedido: negado, <b><br />Justificativa: </b> asdsad', '2020-05-12', '15:33:17', 53, 88, '2020-05-12 15:33:17'),
(67, 'Pedido: aprovado, <b><br />Justificativa: </b> asdasd', '2020-05-12', '15:34:52', 53, 88, '2020-05-12 15:34:52'),
(68, 'Pedido: aprovado, <b><br />Justificativa: </b> sads', '2020-05-12', '15:35:31', 53, 88, '2020-05-12 15:35:31'),
(69, 'Pedido: aprovado, <b><br />Justificativa: </b> sdfd', '2020-05-12', '15:38:25', 53, 88, '2020-05-12 15:38:25'),
(70, 'Pedido: aprovado, <b><br />Justificativa: </b> asdsad', '2020-05-12', '15:39:02', 53, 88, '2020-05-12 15:39:02'),
(71, 'Pedido: aprovado, <b><br />Justificativa: </b> asdsad', '2020-05-12', '15:39:03', 53, 88, '2020-05-12 15:39:03'),
(72, 'Pedido: aprovado, <b><br />Justificativa: </b> asdsad', '2020-05-12', '15:39:28', 53, 88, '2020-05-12 15:39:28'),
(73, 'Pedido: aprovado, <b><br />Justificativa: </b> asd', '2020-05-12', '15:39:45', 53, 88, '2020-05-12 15:39:45'),
(74, 'Pedido: aprovado, <b><br />Justificativa: </b> asdsda', '2020-05-12', '15:40:11', 53, 88, '2020-05-12 15:40:11'),
(75, 'Pedido: aprovado, <b><br />Justificativa: </b> asdsad', '2020-05-12', '15:40:36', 53, 88, '2020-05-12 15:40:36'),
(76, 'Pedido: aprovado, <b><br />Justificativa: </b> asdsad', '2020-05-12', '15:41:12', 53, 88, '2020-05-12 15:41:12'),
(77, 'Pedido: aprovado, <b><br />Justificativa: </b> 123', '2020-05-12', '15:43:19', 53, 88, '2020-05-12 15:43:19'),
(78, 'Pedido: aprovado, <b><br />Justificativa: </b> asd', '2020-05-12', '15:43:40', 53, 88, '2020-05-12 15:43:40'),
(79, 'Pedido: aprovado, <b><br />Justificativa: </b> asdsda', '2020-05-12', '15:44:21', 53, 88, '2020-05-12 15:44:21'),
(80, 'Pedido: aprovado, <b><br />Justificativa: </b> aa', '2020-05-12', '15:45:18', 53, 88, '2020-05-12 15:45:18'),
(81, 'Pedido: aprovado, <b><br />Justificativa: </b> asdasd', '2020-05-12', '15:47:16', 53, 88, '2020-05-12 15:47:16'),
(82, 'Pedido: aprovado, <b><br />Justificativa: </b> 12', '2020-05-12', '15:47:35', 53, 88, '2020-05-12 15:47:35'),
(83, 'Pedido: aprovado, <b><br />Justificativa: </b> asdsda', '2020-05-12', '15:48:20', 53, 88, '2020-05-12 15:48:20'),
(84, 'Pedido: aprovado, <b><br />Justificativa: </b> as', '2020-05-12', '15:50:07', 53, 88, '2020-05-12 15:50:07'),
(85, 'Pedido: aprovado, <b><br />Justificativa: </b> asdsad', '2020-05-12', '15:50:17', 53, 88, '2020-05-12 15:50:17'),
(86, 'Pedido: aprovado, <b><br />Justificativa: </b> asdsd', '2020-05-12', '15:50:34', 53, 88, '2020-05-12 15:50:34'),
(87, 'Pedido: aprovado, <b><br />Justificativa: </b> nbb', '2020-05-12', '15:51:14', 53, 88, '2020-05-12 15:51:14'),
(88, 'Pedido: aprovado, <b><br />Justificativa: </b> 21132', '2020-05-12', '15:51:34', 53, 88, '2020-05-12 15:51:34'),
(89, 'Pedido: aprovado, <b><br />Justificativa: </b> 4', '2020-05-12', '15:51:54', 53, 88, '2020-05-12 15:51:54'),
(90, 'Pedido: aprovado, <b><br />Justificativa: </b> 67', '2020-05-12', '15:52:09', 53, 88, '2020-05-12 15:52:09'),
(91, 'Pedido: aprovado, <b><br />Justificativa: </b> 111', '2020-05-12', '15:52:44', 53, 88, '2020-05-12 15:52:44'),
(92, 'Pedido: aprovado, <b><br />Justificativa: </b> 7', '2020-05-12', '15:53:51', 53, 88, '2020-05-12 15:53:51'),
(93, 'Pedido: aprovado, <b><br />Justificativa: </b> asdad', '2020-05-12', '15:54:22', 53, 88, '2020-05-12 15:54:22'),
(94, 'Pedido: aprovado, <b><br />Justificativa: </b> 66', '2020-05-12', '15:54:42', 53, 88, '2020-05-12 15:54:42'),
(95, 'Pedido: aprovado, <b><br />Justificativa: </b> 11', '2020-05-12', '15:56:11', 53, 88, '2020-05-12 15:56:11'),
(96, 'Pedido: aprovado, <b><br />Justificativa: </b> asdasd', '2020-05-12', '15:59:07', 53, 88, '2020-05-12 15:59:07'),
(97, 'Pedido: aprovado, <b><br />Justificativa: </b> asd', '2020-05-12', '15:59:49', 53, 88, '2020-05-12 15:59:49'),
(98, 'Pedido: aprovado, <b><br />Justificativa: </b> Teste', '2020-05-12', '16:00:07', 53, 88, '2020-05-12 16:00:07'),
(99, 'Pedido: aprovado, <b><br />Justificativa: </b> Teste', '2020-05-12', '16:00:07', 53, 88, '2020-05-12 16:00:07'),
(100, 'Pedido: aprovado, <b><br />Justificativa: </b> teste', '2020-05-12', '16:00:29', 53, 88, '2020-05-12 16:00:29'),
(101, 'Pedido: aprovado, <b><br />Justificativa: </b> asdsad', '2020-05-12', '16:03:32', 53, 88, '2020-05-12 16:03:32'),
(102, 'Pedido: aprovado, <b><br />Justificativa: </b> 123', '2020-05-12', '16:05:21', 53, 88, '2020-05-12 16:05:21'),
(103, 'Pedido: aprovado, <b><br />Justificativa: </b> asd', '2020-05-12', '16:05:35', 53, 88, '2020-05-12 16:05:35'),
(104, 'Pedido: aprovado, <b><br />Justificativa: </b> 11', '2020-05-12', '16:07:05', 53, 88, '2020-05-12 16:07:05'),
(105, 'Pedido: aprovado, <b><br />Justificativa: </b> asd', '2020-05-12', '16:07:31', 53, 88, '2020-05-12 16:07:31'),
(106, 'Pedido: aprovado, <b><br />Justificativa: </b> asdad', '2020-05-12', '16:12:25', 53, 88, '2020-05-12 16:12:25'),
(107, 'Pedido: aprovado, <b><br />Justificativa: </b> asd', '2020-05-12', '16:13:02', 53, 88, '2020-05-12 16:13:02'),
(108, 'Pedido: aprovado, <b><br />Justificativa: </b> asdasdsdadsadsa', '2020-05-12', '16:17:11', 53, 88, '2020-05-12 16:17:11'),
(109, 'Pedido: negado, <b><br />Justificativa: </b> asdsadsdadsadsa', '2020-05-12', '16:17:19', 53, 88, '2020-05-12 16:17:19'),
(110, 'Pedido: aprovado, <b><br />Justificativa: </b> De acordo', '2020-05-12', '16:50:09', 44, 56, '2020-05-12 16:50:09'),
(111, 'Pedido: negado, <b><br />Justificativa: </b> Não Concordo', '2020-05-12', '17:03:39', 49, 85, '2020-05-12 17:03:39'),
(112, 'Pedido: aprovado, <b><br />Justificativa: </b> De acordo', '2020-05-12', '17:05:07', 49, 85, '2020-05-12 17:05:07'),
(113, 'Pedido: aprovado, <b><br />Justificativa: </b> De acordo', '2020-05-12', '17:05:56', 53, 85, '2020-05-12 17:05:56'),
(114, 'Pedido: aprovado, <b><br />Justificativa: </b> Aprovado para compra de 1', '2020-05-13', '10:10:38', 49, 92, '2020-05-13 10:10:38'),
(115, 'Pedido: negado, <b><br />Justificativa: </b> Rejeitado', '2020-05-13', '10:11:04', 49, 92, '2020-05-13 10:11:04'),
(116, 'Acomapanhetno disso daquilo', '2020-05-13', '10:13:45', 53, 89, '2020-05-13 10:13:45'),
(117, 'Novo Acompanhamento\r\n', '2020-05-13', '10:14:09', 53, 89, '2020-05-13 10:14:09'),
(118, 'Outro Acompanhamento', '2020-05-13', '10:14:28', 31, 89, '2020-05-13 10:14:28'),
(119, 'Verifique por gentileza se Pial atende.', '2020-05-13', '10:14:46', 31, 89, '2020-05-13 10:14:46'),
(120, 'Pedido: aprovado, <b><br />Justificativa: </b> Aprovado', '2020-05-13', '10:16:24', 44, 89, '2020-05-13 10:16:24'),
(121, 'Em cotação ', '2020-05-13', '10:32:09', 31, 93, '2020-05-13 10:32:09'),
(122, 'Pedido: aprovado, <b><br />Justificativa: </b> Aprovado', '2020-05-13', '10:36:11', 53, 89, '2020-05-13 10:36:11'),
(123, 'Prosseguir com a compra', '2020-05-13', '10:37:35', 55, 94, '2020-05-13 10:37:35'),
(124, 'Pedido: negado, <b><br />Justificativa: </b> Valor absurdo. rever.', '2020-05-13', '12:19:10', 44, 86, '2020-05-13 12:19:10'),
(125, 'Pedido: negado, <b><br />Justificativa: </b> teste', '2020-05-13', '13:21:42', 49, 100, '2020-05-13 13:21:42'),
(126, 'Pedido: aprovado, <b><br />Justificativa: </b> ok', '2020-05-13', '15:22:17', 49, 99, '2020-05-13 15:22:17'),
(127, 'Pedido: aprovado, <b><br />Justificativa: </b> aprovado', '2020-05-13', '15:27:34', 53, 99, '2020-05-13 15:27:34'),
(128, 'Pedido: aprovado, <b><br />Justificativa: </b> De acordo', '2020-05-13', '15:27:56', 44, 99, '2020-05-13 15:27:56'),
(129, 'Pedido: negado, <b><br />Justificativa: </b> B', '2020-05-13', '16:57:59', 53, 97, '2020-05-13 16:57:59'),
(130, 'Pedido: aprovado, <b><br />Justificativa: </b> asdsad', '2020-05-13', '17:11:53', 44, 82, '2020-05-13 17:11:53'),
(131, 'Pedido: aprovado, <b><br />Justificativa: </b> asdasd', '2020-05-13', '17:12:16', 44, 98, '2020-05-13 17:12:16'),
(132, 'Pedido: aprovado, <b><br />Justificativa: </b> asdasd', '2020-05-13', '17:12:49', 44, 101, '2020-05-13 17:12:49'),
(133, 'teste', '2020-05-14', '08:57:00', 31, 82, '2020-05-14 08:57:00'),
(134, 'assda', '2020-05-14', '08:57:17', 31, 82, '2020-05-14 08:57:17'),
(135, 'asdsd', '2020-05-14', '08:59:39', 31, 82, '2020-05-14 08:59:39'),
(136, 'sadsadsdasda', '2020-05-14', '09:00:30', 31, 82, '2020-05-14 09:00:30'),
(137, 'dsasd', '2020-05-14', '09:01:37', 31, 82, '2020-05-14 09:01:37'),
(138, 'asdsda', '2020-05-14', '09:03:43', 31, 82, '2020-05-14 09:03:43'),
(139, 'sasd', '2020-05-14', '09:48:03', 31, 82, '2020-05-14 09:48:03'),
(140, 'sadsd', '2020-05-14', '09:48:47', 31, 54, '2020-05-14 09:48:47'),
(141, 'asdds', '2020-05-14', '09:52:30', 31, 82, '2020-05-14 09:52:30'),
(142, 'asdsda', '2020-05-14', '09:54:52', 31, 54, '2020-05-14 09:54:52'),
(143, 'asd', '2020-05-14', '09:58:08', 31, 71, '2020-05-14 09:58:08'),
(144, 'sad', '2020-05-14', '10:00:49', 31, 71, '2020-05-14 10:00:49'),
(145, 'asdsC:fakepathGraduacao_Frente.JPG', '2020-05-14', '10:04:54', 31, 71, '2020-05-14 10:04:54'),
(146, 'asd', '2020-05-14', '10:05:57', 31, 71, '2020-05-14 10:05:57'),
(147, 'asd', '2020-05-14', '10:06:23', 31, 71, '2020-05-14 10:06:23'),
(148, 'asd', '2020-05-14', '10:09:38', 31, 71, '2020-05-14 10:09:38'),
(149, 'asd', '2020-05-14', '10:10:21', 31, 71, '2020-05-14 10:10:21'),
(150, 'asd', '2020-05-14', '10:11:04', 31, 54, '2020-05-14 10:11:04'),
(151, 'asd', '2020-05-14', '10:12:08', 31, 71, '2020-05-14 10:12:08'),
(152, 'asdsd', '2020-05-14', '10:12:20', 31, 71, '2020-05-14 10:12:20'),
(153, 'asd', '2020-05-14', '10:14:21', 31, 71, '2020-05-14 10:14:21'),
(154, 'sdads', '2020-05-14', '10:15:17', 31, 71, '2020-05-14 10:15:17'),
(155, 'asd', '2020-05-14', '10:16:06', 31, 71, '2020-05-14 10:16:06'),
(156, 'asddsa', '2020-05-14', '10:20:18', 31, 71, '2020-05-14 10:20:18'),
(157, 'asdsd', '2020-05-14', '10:23:29', 31, 71, '2020-05-14 10:23:29'),
(158, 'sad', '2020-05-14', '10:26:12', 31, 71, '2020-05-14 10:26:12'),
(159, 'sad', '2020-05-14', '10:26:27', 31, 71, '2020-05-14 10:26:27'),
(160, 'dsad', '2020-05-14', '10:27:03', 31, 71, '2020-05-14 10:27:03'),
(161, 'asd', '2020-05-14', '10:28:17', 31, 71, '2020-05-14 10:28:17'),
(162, '1', '2020-05-14', '16:19:15', 31, 71, '2020-05-14 16:19:16'),
(163, '2', '2020-05-14', '16:20:04', 31, 54, '2020-05-14 16:20:04'),
(164, 'asd', '2020-05-14', '16:21:31', 31, 71, '2020-05-14 16:21:31'),
(165, 'asd', '2020-05-14', '16:21:49', 31, 82, '2020-05-14 16:21:49'),
(166, 'Pedido: aprovado, <b><br />Justificativa: </b> asd', '2020-05-14', '16:22:34', 49, 101, '2020-05-14 16:22:34'),
(167, '2', '2020-05-14', '16:24:29', 49, 101, '2020-05-14 16:24:29'),
(168, 'asd', '2020-05-14', '16:24:41', 49, 101, '2020-05-14 16:24:41'),
(169, 'asd', '2020-05-14', '16:25:06', 49, 101, '2020-05-14 16:25:06'),
(170, 'asdasdasd', '2020-05-14', '16:57:39', 44, 101, '2020-05-14 16:57:39'),
(171, '0', '2020-05-15', '10:51:27', 44, 59, '2020-05-15 10:51:27'),
(172, '0', '2020-05-15', '10:52:18', 44, 59, '2020-05-15 10:52:18'),
(173, '0', '2020-05-15', '10:52:48', 44, 59, '2020-05-15 10:52:48'),
(174, '0', '2020-05-15', '10:53:43', 44, 59, '2020-05-15 10:53:43'),
(175, '0', '2020-05-15', '10:53:52', 44, 59, '2020-05-15 10:53:52'),
(176, '0', '2020-05-15', '10:54:02', 44, 59, '2020-05-15 10:54:02'),
(177, '0', '2020-05-15', '10:55:45', 44, 59, '2020-05-15 10:55:45'),
(178, '0', '2020-05-15', '10:58:41', 44, 59, '2020-05-15 10:58:41'),
(179, '0', '2020-05-15', '10:59:23', 44, 59, '2020-05-15 10:59:23'),
(180, '0', '2020-05-15', '10:59:47', 44, 59, '2020-05-15 10:59:47'),
(181, '0', '2020-05-15', '11:29:52', 44, 59, '2020-05-15 11:29:52'),
(182, '0', '2020-05-15', '11:30:16', 44, 59, '2020-05-15 11:30:16'),
(183, '<b></b>Status do pedido alterado para:</b> Pendente ,<b><br />Acompanhamento: </b> asd', '2020-05-15', '11:31:24', 44, 59, '2020-05-15 11:31:24'),
(184, '<b>Status Alterado:</b> Aguardando Aprovação ,<b><br />Acompanhamento: </b> asdsad', '2020-05-15', '11:32:23', 44, 59, '2020-05-15 11:32:23'),
(185, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> asdasdadssda', '2020-05-15', '11:33:10', 44, 59, '2020-05-15 11:33:10'),
(186, '<b>Status Alterado:</b> Aguardando Aprovação ,<b><br />Acompanhamento: </b> asdssda', '2020-05-15', '11:33:34', 44, 59, '2020-05-15 11:33:34'),
(187, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> sadsdsda', '2020-05-15', '11:34:17', 44, 96, '2020-05-15 11:34:17'),
(188, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> asad', '2020-05-15', '11:36:54', 44, 59, '2020-05-15 11:36:54'),
(189, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> asdsad', '2020-05-15', '11:37:03', 44, 59, '2020-05-15 11:37:03'),
(190, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> asdsa', '2020-05-15', '11:37:26', 44, 59, '2020-05-15 11:37:26'),
(191, '<b>Status Alterado:</b> Aguardando Aprovação ,<b><br />Acompanhamento: </b> asdasd', '2020-05-15', '11:37:48', 44, 59, '2020-05-15 11:37:48'),
(192, '<b>Status Alterado:</b> Aguardando Aprovação ,<b><br />Acompanhamento: </b> asdsda', '2020-05-15', '11:38:07', 44, 59, '2020-05-15 11:38:07'),
(193, '<b>Status Alterado:</b> Aguardando Aprovação ,<b><br />Acompanhamento: </b> asdsad', '2020-05-15', '11:39:47', 44, 59, '2020-05-15 11:39:47'),
(194, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> sadsdasdadsa', '2020-05-15', '11:39:59', 44, 59, '2020-05-15 11:39:59'),
(195, '<b>Status Alterado:</b> Aguardando Aprovação ,<b><br />Acompanhamento: </b> asdasdsad', '2020-05-15', '11:40:11', 44, 59, '2020-05-15 11:40:11'),
(196, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> sadsda', '2020-05-15', '11:40:24', 44, 59, '2020-05-15 11:40:24'),
(197, '<b>Status Alterado:</b> Aguardando Aprovação ,<b><br />Acompanhamento: </b> 5165', '2020-05-15', '11:42:19', 44, 59, '2020-05-15 11:42:19'),
(198, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> asdsad', '2020-05-15', '11:42:49', 44, 59, '2020-05-15 11:42:49'),
(199, '<b>Status Alterado:</b> Aguardando Aprovação ,<b><br />Acompanhamento: </b> asds', '2020-05-15', '11:43:42', 44, 59, '2020-05-15 11:43:42'),
(200, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> asdsda', '2020-05-15', '11:43:50', 44, 59, '2020-05-15 11:43:50'),
(201, '<b>Status Alterado:</b> Aguardando Aprovação ,<b><br />Acompanhamento: </b> asdsad', '2020-05-15', '11:45:10', 44, 59, '2020-05-15 11:45:10'),
(202, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> asd', '2020-05-15', '11:45:45', 44, 59, '2020-05-15 11:45:45'),
(203, '<b>Status Alterado:</b> Aguardando Aprovação ,<b><br />Acompanhamento: </b> asd', '2020-05-15', '11:46:26', 44, 59, '2020-05-15 11:46:26'),
(204, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> asd', '2020-05-15', '11:47:01', 44, 59, '2020-05-15 11:47:01'),
(205, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> asdsad', '2020-05-15', '11:47:19', 44, 59, '2020-05-15 11:47:19'),
(206, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> asdsda', '2020-05-15', '11:48:32', 44, 59, '2020-05-15 11:48:32'),
(207, '<b>Status Alterado:</b> Aguardando Aprovação ,<b><br />Acompanhamento: </b> asddsa', '2020-05-15', '11:49:39', 44, 59, '2020-05-15 11:49:39'),
(208, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> sdasad', '2020-05-15', '11:49:49', 44, 59, '2020-05-15 11:49:49'),
(209, '<b>Status Alterado:</b> Aguardando Aprovação ,<b><br />Acompanhamento: </b> asdsad', '2020-05-15', '11:50:33', 44, 59, '2020-05-15 11:50:33'),
(210, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> sadsad', '2020-05-15', '11:50:40', 44, 59, '2020-05-15 11:50:40'),
(211, 'Pedido: aprovado, <b><br />Justificativa: </b> De acordo', '2020-05-15', '11:52:33', 44, 102, '2020-05-15 11:52:33'),
(212, 'teste', '2020-05-15', '11:52:50', 44, 102, '2020-05-15 11:52:50'),
(213, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> as', '2020-05-15', '12:06:03', 44, 111, '2020-05-15 12:06:03'),
(214, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> assa', '2020-05-15', '12:06:08', 44, 110, '2020-05-15 12:06:08'),
(215, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> asdasd', '2020-05-15', '12:07:32', 44, 111, '2020-05-15 12:07:32'),
(216, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> asd', '2020-05-15', '12:09:43', 44, 111, '2020-05-15 12:09:43'),
(217, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> asd', '2020-05-15', '12:11:26', 44, 109, '2020-05-15 12:11:26'),
(218, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> asda', '2020-05-15', '12:20:18', 44, 114, '2020-05-15 12:20:18'),
(219, 'Teste', '2020-05-15', '12:25:25', 31, 61, '2020-05-15 12:25:26'),
(220, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> Teste', '2020-05-15', '12:25:32', 31, 61, '2020-05-15 12:25:32'),
(221, '<b>Status Alterado:</b> Concluído ,<b><br />Acompanhamento: </b> Concluído', '2020-05-15', '12:25:47', 31, 61, '2020-05-15 12:25:47'),
(222, '<b>Status Alterado:</b> Concluído ,<b><br />Acompanhamento: </b> Concluído', '2020-05-15', '12:26:27', 50, 85, '2020-05-15 12:26:27'),
(223, 'Pedido: negado, <b><br />Justificativa: </b> teste', '2020-05-15', '12:27:04', 44, 60, '2020-05-15 12:27:04'),
(224, 'Pedido: aprovado, <b><br />Justificativa: </b> teste', '2020-05-15', '12:27:44', 49, 98, '2020-05-15 12:27:44'),
(225, 'Pedido: aprovado, <b><br />Justificativa: </b> asdsd', '2020-05-15', '12:28:03', 53, 98, '2020-05-15 12:28:03'),
(226, '<b>Status Alterado:</b> Aguardando Aprovação ,<b><br />Acompanhamento: </b> Teste', '2020-05-15', '12:28:25', 50, 98, '2020-05-15 12:28:25'),
(227, 'Pedido: aprovado, <b><br />Justificativa: </b> ok', '2020-05-15', '12:34:53', 44, 98, '2020-05-15 12:34:53'),
(228, '<b>Status Alterado:</b> Aguardando Aprovação ,<b><br />Acompanhamento: </b> asdsd', '2020-05-15', '12:35:03', 44, 98, '2020-05-15 12:35:03'),
(229, '<b>Status Alterado:</b> Aprovar Orçamento ,<b><br />Acompanhamento: </b> asdsad', '2020-05-15', '12:37:58', 44, 114, '2020-05-15 12:37:58'),
(230, '<b>Status Alterado:</b> Aprovar Orçamento ,<b><br />Acompanhamento: </b> teste', '2020-05-15', '12:38:20', 44, 113, '2020-05-15 12:38:20'),
(231, '<b>Status Alterado:</b> Aprovar Orçamento ,<b><br />Acompanhamento: </b> asd', '2020-05-15', '12:53:40', 49, 98, '2020-05-15 12:53:40'),
(232, 'Pedido: aprovado, <b><br />Justificativa: </b> asd', '2020-05-15', '13:00:21', 49, 96, '2020-05-15 13:00:21'),
(233, 'Pedido: aprovado, <b><br />Justificativa: </b> asd', '2020-05-15', '13:00:43', 53, 96, '2020-05-15 13:00:43'),
(234, 'Pedido: aprovado, <b><br />Justificativa: </b> asd', '2020-05-15', '13:00:59', 44, 96, '2020-05-15 13:00:59'),
(235, '<b>Status Alterado:</b>  ,<b><br />Acompanhamento: </b> asd', '2020-05-15', '13:01:26', 50, 96, '2020-05-15 13:01:26'),
(236, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> adas', '2020-05-15', '13:05:57', 50, 112, '2020-05-15 13:05:57'),
(237, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> asdsad', '2020-05-15', '13:06:40', 50, 95, '2020-05-15 13:06:40'),
(238, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> asdds', '2020-05-15', '13:07:30', 50, 108, '2020-05-15 13:07:30'),
(239, 'Pedido: aprovado, <b><br />Justificativa: </b> sadsad', '2020-05-15', '13:12:59', 49, 115, '2020-05-15 13:12:59'),
(240, 'Pedido: aprovado, <b><br />Justificativa: </b> asdsad', '2020-05-15', '13:14:07', 49, 115, '2020-05-15 13:14:07'),
(241, 'Pedido: aprovado, <b><br />Justificativa: </b> 234112asdsda', '2020-05-15', '13:14:18', 49, 115, '2020-05-15 13:14:18'),
(242, 'Pedido: negado, <b><br />Justificativa: </b> asdasd', '2020-05-15', '13:14:33', 49, 115, '2020-05-15 13:14:33'),
(243, 'Pedido: aprovado, <b><br />Justificativa: </b> asdasd', '2020-05-15', '13:14:47', 49, 115, '2020-05-15 13:14:47'),
(244, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> asdasd', '2020-05-15', '13:15:25', 49, 115, '2020-05-15 13:15:25'),
(245, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> asdasd', '2020-05-15', '13:15:55', 49, 115, '2020-05-15 13:15:55'),
(246, '<b>Status Alterado:</b>  ,<b><br />Acompanhamento: </b> sdasd', '2020-05-15', '14:20:11', 50, 115, '2020-05-15 14:20:11'),
(247, 'asds', '2020-05-15', '14:53:38', 50, 117, '2020-05-15 14:53:38'),
(248, 'asdds', '2020-05-15', '14:55:06', 50, 117, '2020-05-15 14:55:06'),
(249, 'asdsa', '2020-05-15', '14:56:35', 50, 117, '2020-05-15 14:56:35'),
(250, 'nada\r\n', '2020-05-15', '14:56:45', 50, 117, '2020-05-15 14:56:45'),
(251, 'teste', '2020-05-15', '14:57:45', 50, 117, '2020-05-15 14:57:45'),
(252, 'oi', '2020-05-15', '14:58:39', 50, 117, '2020-05-15 14:58:39'),
(253, '<b>Status Alterado:</b>  ,<b><br />Acompanhamento: </b> sadsa', '2020-05-15', '15:23:33', 54, 119, '2020-05-15 15:23:33'),
(254, 'Poderiam Agilizar o Atendimento ?', '2020-05-15', '15:44:05', 50, 120, '2020-05-15 15:44:05'),
(255, 'Continuo no aguardo.\r\nObrigado.', '2020-05-15', '15:44:17', 50, 120, '2020-05-15 15:44:17'),
(256, 'Pedido: aprovado, <b><br />Justificativa: </b> Aprovado, apenas 10', '2020-05-15', '15:44:40', 49, 120, '2020-05-15 15:44:40'),
(257, 'Diretor, por gentileza agilizar.', '2020-05-15', '15:45:29', 50, 120, '2020-05-15 15:45:29'),
(258, 'Pedido: aprovado, <b><br />Justificativa: </b> Aprovado apenas 5', '2020-05-15', '15:45:51', 53, 120, '2020-05-15 15:45:51'),
(259, 'Pedido: aprovado, <b><br />Justificativa: </b> De acordo todos solicitados', '2020-05-15', '15:50:34', 44, 120, '2020-05-15 15:50:34'),
(260, '<b>Status Alterado:</b>  ,<b><br />Acompanhamento: </b> Orçamento Realizado.\r\n<br /><b>Fornecedor 1: </b> R$ 50,00\r\n<br><b>Fornecedor 2: </b> R$ 100,00\r\n<br><b>Fornecedor 3: </b> R$ 45,90', '2020-05-15', '15:52:30', 55, 120, '2020-05-15 15:52:31'),
(263, '<b>Status Alterado:</b> Aprovado ,<b><br />Acompanhamento: </b> De acordo', '2020-05-15', '15:57:43', 44, 120, '2020-05-15 15:57:43'),
(264, 'Em processo de compra.\r\n<br/>Prazo de entrega: 31/02/2020', '2020-05-15', '15:58:19', 55, 120, '2020-05-15 15:58:19'),
(265, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> Aguardando Fornecedor', '2020-05-15', '15:58:31', 55, 120, '2020-05-15 15:58:31'),
(266, '<b>Status Alterado:</b> Concluído ,<b><br />Acompanhamento: </b> Compra concluída.', '2020-05-15', '15:59:26', 55, 120, '2020-05-15 15:59:26'),
(267, 'Incluir um item a mais. Obrigado.', '2020-05-15', '23:31:50', 50, 126, '2020-05-15 23:31:50'),
(268, 'Pedido: aprovado, <b><br />Justificativa: </b> ok', '2020-05-15', '23:36:23', 49, 126, '2020-05-15 23:36:23'),
(269, 'Pedido: aprovado, <b><br />Justificativa: </b> ok', '2020-05-15', '23:37:26', 44, 126, '2020-05-15 23:37:26'),
(270, '<b>Status Alterado:</b> Aprovar Orçamento ,<b><br />Acompanhamento: </b> OK', '2020-05-15', '23:38:32', 55, 126, '2020-05-15 23:38:32'),
(271, '<b>Status Alterado:</b> Aprovado ,<b><br />Acompanhamento: </b> OK', '2020-05-15', '23:41:34', 44, 126, '2020-05-15 23:41:34'),
(272, 'ABC', '2020-05-15', '23:45:15', 55, 126, '2020-05-15 23:45:15'),
(273, '<b>Status Alterado:</b>  ,<b><br />Acompanhamento: </b> Item no almoxarifado', '2020-05-15', '23:50:24', 55, 126, '2020-05-15 23:50:24'),
(274, '<b>Status Alterado:</b> Concluído ,<b><br />Acompanhamento: </b> Entregue MV 436533', '2020-05-16', '00:15:26', 55, 126, '2020-05-16 00:15:26'),
(275, 'Pedido: aprovado, <b><br />Justificativa: </b> Ok', '2020-05-16', '00:56:16', 49, 127, '2020-05-16 00:56:16'),
(276, 'Pedido: aprovado, <b><br />Justificativa: </b> Ok', '2020-05-16', '00:56:17', 49, 127, '2020-05-16 00:56:17'),
(277, 'Pedido: aprovado, <b><br />Justificativa: </b> Ok', '2020-05-16', '00:57:59', 53, 127, '2020-05-16 00:57:59'),
(278, 'Pedido: aprovado, <b><br />Justificativa: </b> Ok', '2020-05-16', '00:58:33', 44, 127, '2020-05-16 00:58:33'),
(279, 'Pedido: aprovado, <b><br />Justificativa: </b> Aprovado', '2020-05-16', '01:10:12', 49, 125, '2020-05-16 01:10:12'),
(280, 'Pedido: aprovado, <b><br />Justificativa: </b> OK', '2020-05-16', '01:10:37', 53, 125, '2020-05-16 01:10:37'),
(281, 'Pedido: aprovado, <b><br />Justificativa: </b> aprovado', '2020-05-16', '01:12:43', 44, 125, '2020-05-16 01:12:43'),
(282, '<b>Status Alterado:</b> Aprovar Orçamento ,<b><br />Acompanhamento: </b> Avalie Por favor', '2020-05-16', '01:15:52', 55, 127, '2020-05-16 01:15:52'),
(283, '<b>Status Alterado:</b> Aprovado ,<b><br />Acompanhamento: </b> De Acordo', '2020-05-16', '01:16:34', 44, 127, '2020-05-16 01:16:34'),
(284, '<b>Status Alterado:</b> Concluído ,<b><br />Acompanhamento: </b> Fim', '2020-05-16', '01:17:01', 55, 127, '2020-05-16 01:17:01'),
(285, '<b>Status Alterado:</b> Disponivel para Retirada ,<b><br />Acompanhamento: </b> Teste', '2020-05-18', '08:58:04', 55, 125, '2020-05-18 08:58:04'),
(286, 'E ai ? pode aprovar por favor ?', '2020-05-18', '11:07:42', 50, 128, '2020-05-18 11:07:42'),
(287, 'Vai chefe', '2020-05-18', '11:07:53', 50, 128, '2020-05-18 11:07:54'),
(288, 'Pedido: aprovado, <b><br />Justificativa: </b> Aprovei só que 2', '2020-05-18', '11:08:37', 49, 128, '2020-05-18 11:08:37'),
(289, 'Pedido: aprovado, <b><br />Justificativa: </b> Aprovado os 3', '2020-05-18', '11:10:58', 53, 128, '2020-05-18 11:10:58'),
(290, 'Pedido: aprovado, <b><br />Justificativa: </b> ok', '2020-05-18', '11:12:14', 44, 128, '2020-05-18 11:12:15'),
(291, 'Orçando', '2020-05-18', '11:12:35', 55, 128, '2020-05-18 11:12:35'),
(292, '<b>Status Alterado:</b> Aprovar Orçamento ,<b><br />Acompanhamento: </b> Avaliem por gentileza o orçamento realiado: <br />\r\nItem 1 R$ 50,00<br />\r\nItem 2 R$ 100,00 <br />\r\nItem 3 R$ 150,00\r\n', '2020-05-18', '11:13:23', 55, 128, '2020-05-18 11:13:23'),
(293, '<b>Status Alterado:</b> Aprovado ,<b><br />Acompanhamento: </b> OK', '2020-05-18', '11:14:07', 49, 128, '2020-05-18 11:14:07'),
(294, 'Agurdando entrega', '2020-05-18', '11:14:32', 55, 128, '2020-05-18 11:14:32'),
(295, '<b>Status Alterado:</b> Disponivel para Retirada ,<b><br />Acompanhamento: </b> Compra realizada. retirar itens', '2020-05-18', '11:14:56', 55, 128, '2020-05-18 11:14:56'),
(296, '<b>Status Alterado:</b> Concluído ,<b><br />Acompanhamento: </b> Equipamento Retirado por tal pessoal.', '2020-05-18', '11:15:25', 55, 128, '2020-05-18 11:15:25'),
(297, 'Pedido: negado, <b><br />Justificativa: </b> Não autorizado', '2020-05-18', '11:22:39', 44, 107, '2020-05-18 11:22:39'),
(298, 'Pedido: aprovado, <b><br />Justificativa: </b> kjhasksd', '2020-05-18', '19:20:36', 49, 130, '2020-05-18 19:20:36'),
(299, 'Pedido: negado, <b><br />Justificativa: </b> negado', '2020-05-18', '19:21:08', 53, 130, '2020-05-18 19:21:08'),
(300, 'Pedido: aprovado, <b><br />Justificativa: </b> aprovado', '2020-05-18', '19:22:18', 53, 119, '2020-05-18 19:22:18'),
(301, 'Pedido: aprovado, <b><br />Justificativa: </b> aprovado', '2020-05-18', '19:22:20', 53, 119, '2020-05-18 19:22:20'),
(302, 'Pedido: aprovado, <b><br />Justificativa: </b> ok', '2020-05-18', '19:23:01', 44, 119, '2020-05-18 19:23:01'),
(303, 'comprei', '2020-05-18', '19:23:33', 55, 119, '2020-05-18 19:23:33'),
(304, '<b>Status Alterado:</b> Disponivel para Retirada ,<b><br />Acompanhamento: </b> comprado', '2020-05-18', '19:23:41', 55, 119, '2020-05-18 19:23:41'),
(305, 'Pedido: aprovado, <b><br />Justificativa: </b> Aprovado', '2020-05-20', '09:17:14', 49, 131, '2020-05-20 09:17:14'),
(306, 'Pedido: aprovado, <b><br />Justificativa: </b> Aprovado ', '2020-05-20', '09:18:29', 53, 131, '2020-05-20 09:18:29'),
(307, 'Pedido: aprovado, <b><br />Justificativa: </b> Aprovado', '2020-05-20', '09:23:56', 44, 131, '2020-05-20 09:23:56'),
(308, 'Em cotação', '2020-05-20', '09:24:31', 55, 131, '2020-05-20 09:24:31'),
(309, '<b>Status Alterado:</b> Aprovar Orçamento ,<b><br />Acompanhamento: </b> Encontrada somente marca x-x-x-', '2020-05-20', '09:25:52', 55, 131, '2020-05-20 09:25:52'),
(310, 'R$ 200,00 o rolo com 100 metros', '2020-05-20', '09:26:37', 55, 131, '2020-05-20 09:26:37'),
(311, 'De acordo com a marca', '2020-05-20', '09:27:20', 50, 131, '2020-05-20 09:27:20'),
(312, '<b>Status Alterado:</b> Disponivel para Retirada ,<b><br />Acompanhamento: </b> Disponível', '2020-05-20', '09:30:37', 55, 131, '2020-05-20 09:30:37'),
(313, '<b>Status Alterado:</b> Disponivel para Retirada ,<b><br />Acompanhamento: </b> Disponível', '2020-05-20', '09:30:37', 55, 131, '2020-05-20 09:30:37'),
(314, '<b>Status Alterado:</b> Concluído ,<b><br />Acompanhamento: </b> Retirado por x-x-x- em 20/05/2020', '2020-05-20', '09:36:05', 55, 131, '2020-05-20 09:36:05'),
(315, 'Pedido: aprovado, <b><br />Justificativa: </b> Aprovado', '2020-05-20', '09:42:38', 49, 132, '2020-05-20 09:42:38'),
(316, 'Pedido: aprovado, <b><br />Justificativa: </b> Aprovado', '2020-05-20', '09:43:24', 53, 132, '2020-05-20 09:43:24'),
(317, 'Pedido: aprovado, <b><br />Justificativa: </b> Aprovado somente 100 metros', '2020-05-20', '09:44:00', 44, 132, '2020-05-20 09:44:00'),
(318, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> Realizando cotações', '2020-05-20', '09:46:54', 55, 132, '2020-05-20 09:46:54'),
(319, 'Pedido: aprovado, <b><br />Justificativa: </b> Aprovado', '2020-05-20', '10:50:32', 49, 133, '2020-05-20 10:50:32'),
(320, 'Pedido: aprovado, <b><br />Justificativa: </b> Aprovado', '2020-05-20', '10:51:02', 53, 133, '2020-05-20 10:51:02'),
(321, 'Pedido: aprovado, <b><br />Justificativa: </b> Aprovado', '2020-05-20', '10:51:18', 44, 133, '2020-05-20 10:51:18'),
(322, '<b>Status Alterado:</b> Pendente ,<b><br />Acompanhamento: </b> em cotação', '2020-05-20', '10:52:07', 55, 133, '2020-05-20 10:52:07'),
(323, '<b>Status Alterado:</b> Concluído ,<b><br />Acompanhamento: </b> ok', '2020-05-20', '11:09:14', 55, 125, '2020-05-20 11:09:14'),
(324, 'Pedido: aprovado, <b><br />Justificativa: </b> ok', '2020-05-20', '11:31:34', 49, 134, '2020-05-20 11:31:34'),
(325, 'Pedido: aprovado, <b><br />Justificativa: </b> ok', '2020-05-20', '11:31:56', 53, 134, '2020-05-20 11:31:56'),
(326, 'Pedido: aprovado, <b><br />Justificativa: </b> ok', '2020-05-20', '11:32:13', 44, 134, '2020-05-20 11:32:13'),
(327, '<b>Status Alterado:</b> Aprovar Orçamento ,<b><br />Acompanhamento: </b> Avaliar por favor', '2020-05-20', '11:33:28', 55, 134, '2020-05-20 11:33:28'),
(328, '<b>Status Alterado:</b> Aprovado ,<b><br />Acompanhamento: </b> Aprovado', '2020-05-20', '11:34:08', 44, 134, '2020-05-20 11:34:08'),
(329, '<b>Status Alterado:</b> Aprovar Orçamento ,<b><br />Acompanhamento: </b> Chefia Avaliar Itens', '2020-05-20', '11:34:48', 55, 134, '2020-05-20 11:34:48'),
(330, 'Itens OK.', '2020-05-20', '11:35:02', 49, 134, '2020-05-20 11:35:02'),
(331, '<b>Status Alterado:</b> Aprovado ,<b><br />Acompanhamento: </b> Aprovado', '2020-05-20', '11:35:14', 44, 134, '2020-05-20 11:35:14'),
(332, 'Pedido: aprovado, <b><br />Justificativa: </b> aprovado', '2020-05-20', '21:58:33', 44, 115, '2020-05-20 21:58:33'),
(333, 'Pedido: aprovado, <b><br />Justificativa: </b> aprovado', '2020-05-21', '10:12:44', 49, 137, '2020-05-21 10:12:44'),
(334, 'Pedido: aprovado, <b><br />Justificativa: </b> aprovado', '2020-05-21', '10:14:22', 53, 137, '2020-05-21 10:14:22'),
(335, 'Pedido: aprovado, <b><br />Justificativa: </b> aprovado', '2020-05-21', '10:14:53', 44, 137, '2020-05-21 10:14:53'),
(336, '<b>Status Alterado:</b> Aprovar Orçamento ,<b><br />Acompanhamento: </b> R$ 50,00\r\nR$ 60,00\r\nR$ 70,00', '2020-05-21', '10:16:06', 55, 137, '2020-05-21 10:16:06'),
(337, '<b>Status Alterado:</b> Aprovado ,<b><br />Acompanhamento: </b> De aCORDO comprar só 5', '2020-05-21', '10:26:04', 44, 137, '2020-05-21 10:26:04'),
(338, '<b>Status Alterado:</b> Disponivel para Retirada ,<b><br />Acompanhamento: </b> Comprado', '2020-05-21', '10:26:36', 55, 137, '2020-05-21 10:26:36'),
(339, '<b>Status Alterado:</b> Aprovar Orçamento ,<b><br />Acompanhamento: </b> <table border rules=all>\r\n    <tr >\r\n        <th></th>\r\n        <th>Forcenedor 1</th>\r\n        <th>Forcenedor 2</th>\r\n		<th>Forcenedor 3</th>\r\n    </tr>\r\n    <tr>\r\n        <th>Valor:</th>\r\n		<td>R$ 160,00</td>\r\n		<td>R$ 180,00</td>\r\n		<td>R$ 200,00</td>\r\n    </tr>\r\n</table>', '2020-05-28', '08:52:05', 55, 134, '2020-05-28 08:52:05'),
(340, '<b>Status Alterado:</b> Refazer Orçamento ,<b><br />Acompanhamento: </b> Teste', '2020-05-28', '10:16:09', 44, 134, '2020-05-28 10:16:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lc_aprovacoes`
--

CREATE TABLE `lc_aprovacoes` (
  `id_aprovacao` int(11) NOT NULL,
  `aprovacao_chefia` int(11) DEFAULT 1,
  `justificativa_rejeicao_chefia` text DEFAULT NULL,
  `dt_aprovacao_chefia` date DEFAULT NULL,
  `aprovacao_diretoria` int(11) DEFAULT 1,
  `justificativa_rejeicao_diretoria` text DEFAULT NULL,
  `dt_aprovacao_diretoria` date DEFAULT NULL,
  `aprovacao_direx` int(11) DEFAULT 1,
  `justificativa_rejeicao_direx` text DEFAULT NULL,
  `dt_aprovacao_direx` date DEFAULT NULL,
  `pedido_id_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `lc_aprovacoes`
--

INSERT INTO `lc_aprovacoes` (`id_aprovacao`, `aprovacao_chefia`, `justificativa_rejeicao_chefia`, `dt_aprovacao_chefia`, `aprovacao_diretoria`, `justificativa_rejeicao_diretoria`, `dt_aprovacao_diretoria`, `aprovacao_direx`, `justificativa_rejeicao_direx`, `dt_aprovacao_direx`, `pedido_id_fk`) VALUES
(8, 2, '', NULL, 2, NULL, NULL, 2, NULL, NULL, 54),
(10, 2, NULL, NULL, 2, NULL, NULL, 2, 'De acordo', NULL, 56),
(12, 1, NULL, NULL, 2, NULL, NULL, 1, NULL, NULL, 58),
(13, 2, '', NULL, 2, NULL, NULL, 2, NULL, NULL, 59),
(14, 2, NULL, NULL, 2, NULL, NULL, 3, 'teste', NULL, 60),
(15, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 61),
(16, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 66),
(17, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 67),
(18, 2, NULL, NULL, 3, 'teste', NULL, 1, NULL, NULL, 68),
(19, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 69),
(20, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 70),
(21, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 71),
(22, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 72),
(23, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 73),
(24, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 74),
(25, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 75),
(26, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 76),
(27, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 77),
(28, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 78),
(29, 2, 'Justificativa', NULL, 1, NULL, NULL, 1, NULL, NULL, 79),
(30, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 80),
(31, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 81),
(32, 1, NULL, NULL, 1, NULL, NULL, 2, 'asdsad', NULL, 82),
(33, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 83),
(34, 2, 'Ciente ', NULL, 1, NULL, NULL, 1, NULL, NULL, 84),
(35, 2, 'De acordo', NULL, 2, 'De acordo', NULL, 1, NULL, NULL, 85),
(36, 2, 'Ciente', NULL, 2, NULL, NULL, 3, 'Valor absurdo. rever.', NULL, 86),
(37, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 87),
(38, 3, 'Teste', NULL, 3, 'asdsadsdadsadsa', NULL, 3, 'tb não quero', NULL, 88),
(42, 1, NULL, NULL, 2, 'Aprovado', NULL, 2, 'Aprovado', NULL, 89),
(43, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 90),
(44, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 91),
(45, 3, 'Rejeitado', NULL, 1, NULL, NULL, 1, NULL, NULL, 92),
(46, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 93),
(47, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 94),
(48, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 95),
(49, 2, 'asd', NULL, 2, 'asd', NULL, 2, 'asd', NULL, 96),
(50, 1, NULL, NULL, 3, 'B', NULL, 1, NULL, NULL, 97),
(51, 2, 'teste', NULL, 2, 'asdsd', NULL, 2, 'ok', NULL, 98),
(52, 2, 'ok', NULL, 2, 'aprovado', NULL, 2, 'De acordo', NULL, 99),
(53, 3, 'teste', NULL, 1, NULL, NULL, 1, NULL, NULL, 100),
(54, 2, 'asd', NULL, 1, NULL, NULL, 2, 'asdasd', NULL, 101),
(55, 1, NULL, NULL, 1, NULL, NULL, 2, 'De acordo', NULL, 102),
(56, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 103),
(57, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 104),
(58, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 105),
(59, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 106),
(60, 1, NULL, NULL, 1, NULL, NULL, 3, 'Não autorizado', NULL, 107),
(61, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 108),
(62, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 109),
(63, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 110),
(64, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 111),
(65, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 112),
(66, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 113),
(67, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 114),
(68, 2, 'asdasd', NULL, 1, NULL, NULL, 2, 'aprovado', NULL, 115),
(70, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 117),
(71, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 118),
(72, 1, NULL, NULL, 2, 'aprovado', NULL, 2, 'ok', NULL, 119),
(73, 2, 'Aprovado, apenas 10', NULL, 2, 'Aprovado apenas 5', NULL, 2, 'De acordo todos solicitados', NULL, 120),
(74, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 122),
(75, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 123),
(76, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 124),
(77, 2, 'Aprovado', NULL, 2, 'OK', NULL, 2, 'aprovado', NULL, 125),
(78, 2, 'ok', NULL, 1, NULL, NULL, 2, 'ok', NULL, 126),
(79, 2, 'Ok', NULL, 2, 'Ok', NULL, 2, 'Ok', NULL, 127),
(80, 2, 'Aprovei só que 2', NULL, 2, 'Aprovado os 3', NULL, 2, 'ok', NULL, 128),
(81, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 129),
(82, 2, 'kjhasksd', NULL, 3, 'negado', NULL, 1, NULL, NULL, 130),
(83, 2, 'Aprovado', NULL, 2, 'Aprovado ', NULL, 2, 'Aprovado', NULL, 131),
(84, 2, 'Aprovado', NULL, 2, 'Aprovado', NULL, 2, 'Aprovado somente 100 metros', NULL, 132),
(85, 2, 'Aprovado', NULL, 2, 'Aprovado', NULL, 2, 'Aprovado', NULL, 133),
(86, 2, 'ok', NULL, 2, 'ok', NULL, 2, 'ok', NULL, 134),
(87, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 135),
(88, 1, NULL, NULL, 1, NULL, NULL, 1, NULL, NULL, 136),
(89, 2, 'aprovado', NULL, 2, 'aprovado', NULL, 2, 'aprovado', NULL, 137);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lc_cat`
--

CREATE TABLE `lc_cat` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `Tipo` varchar(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lc_cat`
--

INSERT INTO `lc_cat` (`id`, `nome`, `Tipo`) VALUES
(17, 'Recebimento Fundo Fixo', 'Receita'),
(18, 'Estorno Compras', 'Receita'),
(19, 'Saque Compras', 'Despesa'),
(21, 'Reembolso Transporte', 'Despesa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lc_centro_custo`
--

CREATE TABLE `lc_centro_custo` (
  `id_centro_custo` int(11) NOT NULL,
  `cc_descricao` varchar(100) NOT NULL,
  `centro_custo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lc_centro_custo`
--

INSERT INTO `lc_centro_custo` (`id_centro_custo`, `cc_descricao`, `centro_custo`) VALUES
(71, 'Centro de Custo 001', 1),
(72, 'Centro de Custo 002', 2),
(73, 'Centro de Custo 003', 3),
(74, 'Centro de Custo 004', 4),
(75, 'Centro de Custo 005', 5),
(76, 'Centro de Custo 006', 6),
(79, 'Centro de Custo 007', 7),
(80, 'CETI', 4194),
(81, 'teste', 4195),
(82, 'teste2', 4196),
(83, 'wqza', 4111),
(84, 'leti', 4197),
(85, '4198', 4198),
(86, 'asdhgjbndakjsvhxb', 2147483647);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lc_contas`
--

CREATE TABLE `lc_contas` (
  `id` int(11) NOT NULL,
  `de_para` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` int(11) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `observacoes` longtext CHARACTER SET utf8 DEFAULT NULL,
  `tipo` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `conta_mensal` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `pago` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lc_contas`
--

INSERT INTO `lc_contas` (`id`, `de_para`, `dia`, `mes`, `ano`, `observacoes`, `tipo`, `conta_mensal`, `valor`, `pago`) VALUES
(1, 'ELAINE LELLIS ALVES DA COSTA <elaine.lel', 28, 2, 2020, 'Troco Pendente Almoxarifado/Compras', 'credito', '', 81.22, 'pago'),
(3, 'kjjhk', 12, 3, 2020, '', 'credito', '', 77667, 'pago');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lc_itens`
--

CREATE TABLE `lc_itens` (
  `id_item` int(11) NOT NULL,
  `nome_item` varchar(100) DEFAULT NULL,
  `descricao_item` varchar(5000) NOT NULL,
  `cod_mv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lc_itens`
--

INSERT INTO `lc_itens` (`id_item`, `nome_item`, `descricao_item`, `cod_mv`) VALUES
(35, 'Item001', 'Item001', 12),
(36, 'Item002', 'Item002', 2),
(37, 'Item003', 'Item003', 54),
(38, 'Item004', 'Item004', 15),
(40, 'Item005', 'Item005', 3),
(41, 'Item006', 'Item006', 7658556),
(43, 'item007', 'item007', 20),
(44, 'Item008', 'Item008', 8),
(45, 'Item009', 'Item009', 9),
(46, 'Item010', 'Item010', 10),
(47, 'Item011', 'Item011', 11),
(48, 'Item012', 'Item012', 12),
(49, 'Item013', 'Item013', 13),
(50, 'Item014', 'Item014', 14),
(51, 'Item015', 'Item015', 15),
(52, 'Item016', 'Item016', 16),
(53, 'Item017', 'Item017', 17),
(54, 'Item018', 'Item018', 18),
(56, 'Item019', 'Item019', 19),
(57, 'Item020', 'Item020', 20002020),
(59, 'Novo Item', 'Item Novo', 8378743),
(60, 'Outros', 'Outros Itens', NULL),
(61, 'Outros2', 'Outros2', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lc_movimento`
--

CREATE TABLE `lc_movimento` (
  `id` int(11) NOT NULL,
  `tipo` int(11) DEFAULT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` int(11) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `cat` int(11) DEFAULT NULL,
  `descricao` longtext DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `responsavel` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lc_movimento`
--

INSERT INTO `lc_movimento` (`id`, `tipo`, `dia`, `mes`, `ano`, `cat`, `descricao`, `valor`, `responsavel`) VALUES
(89, 0, 17, 6, 2019, 21, 'Conceição ref dia 06/06/2019', 59.4, 'Vivian Bersote Oliveira'),
(88, 0, 14, 6, 2019, 21, 'Isabel ref dia 10/06/2019', 48.5, 'Vivian Bersote Oliveira'),
(87, 0, 13, 6, 2019, 19, 'Elaine', 500, 'Vivian Bersote Oliveira'),
(86, 1, 12, 6, 2019, 17, 'Eduardo Santocchi', 1000, 'Vivian Bersote Oliveira'),
(90, 0, 18, 6, 2019, 21, 'Mario ref dias 10/06 e 17/06/2019 ', 97, 'Vivian Bersote Oliveira'),
(91, 0, 18, 6, 2019, 21, 'Luciene ref dia 10/06/2019', 29.7, 'Vivian Bersote Oliveira'),
(92, 0, 18, 6, 2019, 21, 'Fabiana ref dia 10/06/2019', 29.7, 'Vivian Bersote Oliveira'),
(94, 1, 19, 6, 2019, 17, 'Eduardo Santocchi', 2000, 'Vivian Bersote Oliveira'),
(95, 1, 28, 6, 2019, 17, 'Eduardo Santocchi', 2000, 'Vivian Bersote Oliveira'),
(96, 1, 5, 7, 2019, 17, 'Eduardo Santocchi', 3000, 'Vivian Bersote Oliveira'),
(97, 0, 21, 6, 2019, 19, 'Elaine', 500, 'Vivian Bersote Oliveira'),
(98, 0, 24, 6, 2019, 19, 'Elaine', 1000, 'Vivian Bersote Oliveira'),
(99, 0, 28, 6, 2019, 19, 'Elaine', 132.6, 'Vivian Bersote Oliveira'),
(100, 0, 18, 6, 2019, 21, 'Eliza ref dia 06/06/2019', 29.7, 'Vivian Bersote Oliveira'),
(101, 0, 18, 6, 2019, 21, 'Daniele Lima ref dia 13/06/2019', 53.95, 'Vivian Bersote Oliveira'),
(102, 0, 25, 6, 2019, 21, 'Gabriela Nagatani ref dia 11/06/2019', 48.5, 'Vivian Bersote Oliveira'),
(103, 0, 25, 6, 2019, 21, 'Gabriela Nagatani ref.: dias 13/06 e 17/06/2019', 97, 'Vivian Bersote Oliveira'),
(104, 0, 25, 6, 2019, 21, 'Fátima ref dia 07/06/2019', 59.4, 'Vivian Bersote Oliveira'),
(105, 0, 25, 6, 2019, 21, 'Fatima ref.: dias 13/06 e 14/06/2019', 118.8, 'Vivian Bersote Oliveira'),
(106, 0, 25, 6, 2019, 21, 'Marta Eloisa ref dia 07/06/2019', 29.7, 'Vivian Bersote Oliveira'),
(107, 0, 28, 6, 2019, 21, 'Mariana Mianni ref dia 27/06/2019', 48.5, 'Vivian Bersote Oliveira'),
(108, 0, 28, 6, 2019, 21, 'Daniele Lima ref dia 27/06/2019', 48.5, 'Vivian Bersote Oliveira'),
(109, 0, 28, 6, 2019, 21, 'Silmara ref dia 24/06/2019', 48.5, 'Vivian Bersote Oliveira'),
(110, 0, 28, 6, 2019, 21, 'Silvia Honda ref dia 27/06/2019', 59.4, 'Vivian Bersote Oliveira'),
(111, 0, 28, 6, 2019, 21, 'Fatima ref dia 27/06/2019', 59.4, 'Vivian Bersote Oliveira'),
(112, 0, 28, 6, 2019, 21, 'José Jorge Quadros ref dia 17/06/2019', 48.5, 'Vivian Bersote Oliveira'),
(113, 0, 28, 6, 2019, 21, 'Luciene ref dia 25/06/2019', 48.5, 'Vivian Bersote Oliveira'),
(114, 0, 28, 6, 2019, 21, 'Daise ref dia 27/06/2019', 48.5, 'Vivian Bersote Oliveira'),
(115, 0, 28, 6, 2019, 21, 'José Jorge Quadros ref dia 13/06/2019', 48.5, 'Vivian Bersote Oliveira'),
(116, 0, 28, 6, 2019, 21, 'Fabiana Nagafuti ref dia 26/06/2019', 48.5, 'Vivian Bersote Oliveira'),
(117, 0, 28, 6, 2019, 21, 'Vanessa Paiva ref dia 26/06/2019', 48.5, 'Vivian Bersote Oliveira'),
(118, 0, 28, 6, 2019, 21, 'Elza Fiamini ref dia 25/06/2019', 24.25, 'Vivian Bersote Oliveira'),
(119, 1, 18, 7, 2019, 17, 'Eduardo Santocchi', 2000, 'Vivian Bersote Oliveira'),
(120, 0, 1, 7, 2019, 19, 'Elaine', 67.4, 'Vivian Bersote Oliveira'),
(121, 0, 2, 7, 2019, 19, 'Elaine', 600, 'Vivian Bersote Oliveira'),
(122, 0, 4, 7, 2019, 19, 'Elaine', 700, 'Vivian Bersote Oliveira'),
(123, 0, 11, 7, 2019, 19, 'Luiz Romão', 1500, 'Vivian Bersote Oliveira'),
(124, 0, 15, 7, 2019, 19, 'Luiz Romão', 1000, 'Vivian Bersote Oliveira'),
(125, 0, 17, 7, 2019, 19, 'Luiz Romão', 100, 'Vivian Bersote Oliveira'),
(126, 0, 22, 7, 2019, 19, 'Luiz Romão', 500, 'Vivian Bersote Oliveira'),
(127, 0, 3, 7, 2019, 21, 'Gabriela Nagatani ref dia 27/06/2019', 48.5, 'Vivian Bersote Oliveira'),
(128, 0, 3, 7, 2019, 21, 'Gabriela Nagatani ref dia 28/06', 48.5, 'Vivian Bersote Oliveira'),
(129, 0, 5, 7, 2019, 21, 'Viviane ref dia 28/06/2019', 24.25, 'Vivian Bersote Oliveira'),
(130, 0, 12, 7, 2019, 21, 'Luciene ref dia 04/07/2019', 48.5, 'Vivian Bersote Oliveira'),
(131, 0, 15, 7, 2019, 21, 'Gabriela Nagatani ref.: dias 03/07 e 04/07/2019', 97, 'Vivian Bersote Oliveira'),
(132, 0, 16, 7, 2019, 21, 'Mario ref dia 11/07/2019', 48.5, 'Vivian Bersote Oliveira'),
(133, 0, 17, 7, 2019, 21, 'Roberta holanda ref dia 04/07/2019', 48.5, 'Vivian Bersote Oliveira'),
(134, 0, 18, 7, 2019, 21, 'Gabriela Nagatani ref dia 12/07/2019', 48.5, 'Vivian Bersote Oliveira'),
(135, 0, 19, 7, 2019, 21, 'Marcia Souza ref dia 18/07/2019', 48.5, 'Vivian Bersote Oliveira'),
(136, 0, 19, 7, 2019, 21, 'Luciene ref dia 15/07/2019', 48.5, 'Vivian Bersote Oliveira'),
(137, 0, 23, 7, 2019, 21, 'Roberta Holanda ref dia 12/07/2019', 48.5, 'Vivian Bersote Oliveira'),
(138, 0, 23, 7, 2019, 21, 'Isabel Arruda ref dia 17/07/2019', 48.5, 'Vivian Bersote Oliveira'),
(139, 0, 31, 7, 2019, 21, 'Gabriela Hitomi ref dia 25/07/2019', 48.5, 'Vivian Bersote Oliveira'),
(140, 0, 31, 7, 2019, 21, 'Luciene ref dia 30/07/2019', 59.4, 'Vivian Bersote Oliveira'),
(141, 0, 31, 7, 2019, 21, 'Mario Sevasteli ref dia 30/07/2019', 48.5, 'Vivian Bersote Oliveira'),
(142, 0, 31, 7, 2019, 21, 'Viviane ref dia 25/07/2019', 48.5, 'Vivian Bersote Oliveira'),
(315, 1, 21, 2, 2020, 17, 'Eduardo Santocchi', 2000, 'Vivian Bersote Oliveira'),
(144, 1, 31, 7, 2019, 18, 'Troco mês 07/2019', 188.9, 'Vivian Bersote Oliveira'),
(145, 1, 6, 8, 2019, 17, 'Eduardo Santocchi', 2000, 'Vivian Bersote Oliveira'),
(146, 1, 26, 8, 2019, 17, 'Eduardo Santocchi', 3000, 'Vivian Bersote Oliveira'),
(147, 0, 8, 8, 2019, 19, 'Elaine', 1500, 'Vivian Bersote Oliveira'),
(148, 0, 16, 8, 2019, 19, 'Elaine', 500, 'Vivian Bersote Oliveira'),
(149, 0, 19, 8, 2019, 19, 'Elaine', 500, 'Vivian Bersote Oliveira'),
(150, 0, 22, 8, 2019, 19, 'Carlos Costa', 200, 'Vivian Bersote Oliveira'),
(151, 0, 27, 8, 2019, 19, 'Elaine', 30, 'Vivian Bersote Oliveira'),
(152, 0, 28, 8, 2019, 19, 'Elaine', 50, 'Vivian Bersote Oliveira'),
(153, 0, 30, 8, 2019, 19, 'Elaine ', 100, 'Vivian Bersote Oliveira'),
(154, 0, 6, 8, 2019, 21, 'Viviane ref dia 31/07/2019', 48.5, 'Vivian Bersote Oliveira'),
(155, 0, 9, 8, 2019, 21, 'Eduardo Calegari ref dia 26/07/2019', 48.5, 'Vivian Bersote Oliveira'),
(156, 0, 12, 8, 2019, 21, 'Gabriela Nagatani ref.: dias 31/07 e 05/08/2019', 97, 'Vivian Bersote Oliveira'),
(157, 0, 16, 8, 2019, 21, 'Marcia Souza ref dia 14/08/2019', 48.5, 'Vivian Bersote Oliveira'),
(158, 0, 19, 8, 2019, 21, 'Marcelo Molina ref dia 09/08/2019', 48.5, 'Vivian Bersote Oliveira'),
(159, 0, 19, 8, 2019, 21, 'Gabriela ref dias: 06/08, 07/08, 08/08 e 09/08/2019', 194, 'Vivian Bersote Oliveira'),
(160, 0, 21, 8, 2019, 21, 'Mario Sevasteli ref dia 12/08/2019', 48.5, 'Vivian Bersote Oliveira'),
(161, 0, 21, 8, 2019, 21, 'Gabriela ref dias: 13/08, 14/08, 15/08 e 16/08/2019', 194, 'Vivian Bersote Oliveira'),
(162, 0, 21, 8, 2019, 21, 'Silvia Honda ref dia 14/08/2019', 59.4, 'Vivian Bersote Oliveira'),
(163, 0, 27, 8, 2019, 21, 'Silvia Honda ref dia 22/08/2019', 59.4, 'Vivian Bersote Oliveira'),
(164, 0, 27, 8, 2019, 21, 'Daise Guilherme ref dias 05/08, 06/08 e 07/08/2019', 72.75, 'Vivian Bersote Oliveira'),
(165, 0, 28, 8, 2019, 21, 'Gabriela Nagatani ref dia 22/08/2019', 48.5, 'Vivian Bersote Oliveira'),
(166, 0, 30, 8, 2019, 21, 'Conceição ref dia 22/08/2019', 59.4, 'Vivian Bersote Oliveira'),
(167, 0, 30, 8, 2019, 21, 'Eduardo Calegari ref dias: 07/08 e 20/08/2019.', 97, 'Vivian Bersote Oliveira'),
(168, 0, 30, 8, 2019, 21, 'Daniele Lima ref dia 22/08/2019', 48.5, 'Vivian Bersote Oliveira'),
(169, 0, 30, 8, 2019, 21, 'Silmara Muniz ref dias: 22/08 e 26/08/2019', 97, 'Vivian Bersote Oliveira'),
(170, 1, 23, 8, 2019, 18, 'Troco', 165.31, 'Vivian Bersote Oliveira'),
(171, 1, 30, 8, 2019, 18, 'Troco', 41.81, 'Vivian Bersote Oliveira'),
(172, 1, 12, 9, 2019, 17, 'Eduardo Santocchi', 2000, 'Vivian Bersote Oliveira'),
(173, 1, 18, 9, 2019, 17, 'Eduardo Santocchi', 2000, 'Vivian Bersote Oliveira'),
(174, 0, 3, 9, 2019, 19, 'Elaine', 2000, 'Vivian Bersote Oliveira'),
(175, 0, 13, 9, 2019, 19, 'Elaine', 400, 'Vivian Bersote Oliveira'),
(176, 0, 13, 9, 2019, 19, 'Elaine', 200, 'Vivian Bersote Oliveira'),
(177, 0, 16, 9, 2019, 19, 'Elaine', 1500, 'Vivian Bersote Oliveira'),
(178, 0, 19, 9, 2019, 19, 'Elaine', 1000, 'Vivian Bersote Oliveira'),
(314, 0, 21, 2, 2020, 21, 'Silmara Muniz ref dia 17/02/2020', 48.5, 'Vivian Bersote Oliveira'),
(180, 0, 27, 9, 2019, 19, 'Elaine', 120, 'Vivian Bersote Oliveira'),
(181, 1, 30, 9, 2019, 18, 'Troco Mês ', 13.53, 'Vivian Bersote Oliveira'),
(182, 0, 3, 9, 2019, 21, 'Silvia Honda ref dia 29/08/2019', 59.4, 'Vivian Bersote Oliveira'),
(183, 0, 3, 9, 2019, 21, 'Viviane ref dia 28/08/2019', 48.5, 'Vivian Bersote Oliveira'),
(184, 0, 4, 9, 2019, 21, 'Joelma ref dia 03/09/2019', 48.5, 'Vivian Bersote Oliveira'),
(185, 0, 10, 9, 2019, 21, 'Mario Sevasteli ref dia 09/09/2019', 48.5, 'Vivian Bersote Oliveira'),
(186, 0, 11, 9, 2019, 21, 'Silvia Honda ref dia 09/09/2019 ', 59.4, 'Vivian Bersote Oliveira'),
(187, 0, 11, 9, 2019, 21, 'Vivian ref dia 09/09/2019', 48.5, 'Vivian Bersote Oliveira'),
(188, 0, 12, 9, 2019, 21, 'Gabriela Nagatani ref dia 09/09/2019', 48.5, 'Vivian Bersote Oliveira'),
(189, 0, 17, 9, 2019, 21, 'Luciene Vitoria ref dias: 09/09 e 10/09/2019', 118.8, 'Vivian Bersote Oliveira'),
(190, 0, 18, 9, 2019, 21, 'Fatima ref dias: 10/09 e 13/09/2019', 118.8, 'Vivian Bersote Oliveira'),
(191, 0, 19, 9, 2019, 21, 'Viviane ref dia 11/09/2019 ', 48.5, 'Vivian Bersote Oliveira'),
(192, 0, 19, 9, 2019, 19, 'Reembolso ref Bingo T.O (Vanessa Campos)', 70.25, 'Vivian Bersote Oliveira'),
(193, 0, 23, 9, 2019, 21, 'Nádia ref dia 19/09/2019', 59.4, 'Vivian Bersote Oliveira'),
(194, 0, 23, 9, 2019, 21, 'Marcia Souza ref dia 19/09/2019', 48.5, 'Vivian Bersote Oliveira'),
(195, 0, 26, 9, 2019, 21, 'Luciene Vitoria ref dia 24/09/2019', 59.4, 'Vivian Bersote Oliveira'),
(196, 0, 26, 9, 2019, 21, 'Mario Sevasteli ref dia 25/09/2019', 48.5, 'Vivian Bersote Oliveira'),
(197, 0, 30, 9, 2019, 21, 'Fatima ref dias: 25/09 e 26/09/2019', 118.8, 'Vivian Bersote Oliveira'),
(198, 0, 30, 9, 2019, 21, 'Gabriela ref dia 26/09/2019', 48.5, 'Vivian Bersote Oliveira'),
(199, 1, 3, 10, 2019, 17, 'Eduardo Santocchi', 1500, 'Vivian Bersote Oliveira'),
(200, 1, 14, 10, 2019, 17, 'Eduardo Santocchi', 3000, 'Vivian Bersote Oliveira'),
(201, 1, 23, 10, 2019, 17, 'Eduardo Santocchi', 2000, 'Vivian Bersote Oliveira'),
(202, 0, 7, 10, 2019, 19, 'Elaine', 1500, 'Vivian Bersote Oliveira'),
(203, 0, 15, 10, 2019, 19, 'Elaine', 2000, 'Vivian Bersote Oliveira'),
(204, 0, 17, 10, 2019, 19, 'Jessé', 300, 'Vivian Bersote Oliveira'),
(205, 0, 21, 10, 2019, 19, 'Elaine', 500, 'Vivian Bersote Oliveira'),
(206, 0, 23, 10, 2019, 19, 'Jessé', 100, 'Vivian Bersote Oliveira'),
(207, 0, 23, 10, 2019, 19, 'Elaine', 13, 'Vivian Bersote Oliveira'),
(208, 0, 29, 10, 2019, 19, 'Elaine', 200, 'Vivian Bersote Oliveira'),
(209, 0, 9, 10, 2019, 21, 'Gabriela Nagatani ref dia 03/10/2019', 48.5, 'Vivian Bersote Oliveira'),
(210, 0, 15, 10, 2019, 21, 'Mario Sevasteli ref dia 07/10/2019', 48.5, 'Vivian Bersote Oliveira'),
(211, 0, 15, 10, 2019, 21, 'Mario Sevasteli ref dia 14/10/2019', 48.5, 'Vivian Bersote Oliveira'),
(212, 0, 16, 10, 2019, 21, 'Jorge Quadros ref dia 10/10/2019', 48.5, 'Vivian Bersote Oliveira'),
(213, 0, 17, 10, 2019, 21, 'Sonia Lieko ref dia 15/10/2019', 59.4, 'Vivian Bersote Oliveira'),
(214, 0, 18, 10, 2019, 21, 'Nadia ref dia 17/10/2019', 59.4, 'Vivian Bersote Oliveira'),
(215, 0, 23, 10, 2019, 21, 'Viviane ref dia 16/10/2019', 48.5, 'Vivian Bersote Oliveira'),
(216, 0, 23, 10, 2019, 21, 'Sonia Lieko ref dia 18/10/2019', 48.5, 'Vivian Bersote Oliveira'),
(217, 0, 29, 10, 2019, 21, 'Fatima ref dia 16/10/2019', 59.4, 'Vivian Bersote Oliveira'),
(218, 0, 29, 10, 2019, 21, 'Gabriela Nagatani ref dia 21/10/2019', 48.5, 'Vivian Bersote Oliveira'),
(219, 0, 31, 10, 2019, 21, 'Gabriela Nagatani ref dia 24/10/2019', 48.5, 'Vivian Bersote Oliveira'),
(220, 0, 31, 10, 2019, 21, 'Joelma ref dias: 29/10 e 30/10/2019', 97, 'Vivian Bersote Oliveira'),
(221, 0, 29, 10, 2019, 21, 'Marcia Souza ref dia 24/10/2019', 48.5, 'Vivian Bersote Oliveira'),
(222, 1, 11, 11, 2019, 17, 'Eduardo Santocchi', 3000, 'Vivian Bersote Oliveira'),
(223, 1, 21, 11, 2019, 17, 'Eduardo Santocchi', 2000, 'Vivian Bersote Oliveira'),
(224, 0, 6, 11, 2019, 19, 'Elaine', 142.8, 'Vivian Bersote Oliveira'),
(225, 0, 6, 11, 2019, 19, 'Elaine', 1000, 'Vivian Bersote Oliveira'),
(226, 0, 12, 11, 2019, 19, 'Elaine', 2000, 'Vivian Bersote Oliveira'),
(227, 0, 19, 11, 2019, 19, 'Elaine', 800, 'Vivian Bersote Oliveira'),
(228, 0, 22, 11, 2019, 19, 'Elaine', 500, 'Vivian Bersote Oliveira'),
(230, 0, 27, 11, 2019, 19, 'Elaine', 200, 'Vivian Bersote Oliveira'),
(231, 1, 29, 11, 2019, 18, 'Troco mês ', 72.72, 'Vivian Bersote Oliveira'),
(232, 0, 1, 11, 2019, 21, 'Silvia Honda', 59.4, 'Vivian Bersote Oliveira'),
(233, 0, 6, 11, 2019, 21, 'Roberta Holanda ref dia 24/10/2019', 48.5, 'Vivian Bersote Oliveira'),
(234, 0, 6, 11, 2019, 21, 'Roberta Holanda ref dia 15/10/2019', 48.5, 'Vivian Bersote Oliveira'),
(235, 0, 6, 11, 2019, 21, 'Fatima ref dia 31/10/2019', 59.4, 'Vivian Bersote Oliveira'),
(236, 0, 6, 11, 2019, 21, 'Viviane ref dia 29/10/2019', 48.5, 'Vivian Bersote Oliveira'),
(237, 0, 12, 11, 2019, 21, 'Gabriela Nagatani ref dia 08/11/2019', 48.5, 'Vivian Bersote Oliveira'),
(238, 0, 13, 11, 2019, 21, 'Eduardo Calegari ref dia 10/10/2019', 48.5, 'Vivian Bersote Oliveira'),
(239, 0, 14, 11, 2019, 21, 'Silvia Honda ref dia 13/11/2019', 59.4, 'Vivian Bersote Oliveira'),
(240, 0, 14, 11, 2019, 21, 'Rodrigo ref dia 13/11/2019', 59.4, 'Vivian Bersote Oliveira'),
(241, 0, 18, 11, 2019, 21, 'Silmara ref dia 11/11/2019', 48.5, 'Vivian Bersote Oliveira'),
(242, 0, 22, 11, 2019, 21, 'Marcia Souza ref dia 21/11/2019', 48.5, 'Vivian Bersote Oliveira'),
(243, 0, 22, 11, 2019, 21, 'Eduardo Calegari ref dia 07/11/2019', 48.5, 'Vivian Bersote Oliveira'),
(244, 0, 22, 11, 2019, 21, 'Eduardo Calegari ref dia 14/11/2019', 48.5, 'Vivian Bersote Oliveira'),
(245, 0, 22, 11, 2019, 21, 'Viviane ref dia 14/11/2019', 24.25, 'Vivian Bersote Oliveira'),
(246, 0, 26, 11, 2019, 21, 'Silvia Honda ref dia 25/11/2019', 59.4, 'Vivian Bersote Oliveira'),
(247, 0, 26, 11, 2019, 21, 'Fatima ref dia 25/11/2019', 59.4, 'Vivian Bersote Oliveira'),
(248, 0, 27, 11, 2019, 21, 'Jorge Quadros ref dia 14/11/2019', 48.5, 'Vivian Bersote Oliveira'),
(249, 0, 27, 11, 2019, 21, 'Sonia Lieko ref dia 19/11/2019', 29.7, 'Vivian Bersote Oliveira'),
(250, 1, 9, 12, 2019, 17, 'Eduardo Santocchi', 3000, 'Vivian Bersote Oliveira'),
(251, 1, 10, 12, 2019, 17, 'Eduardo Santocchi', 3000, 'Vivian Bersote Oliveira'),
(252, 0, 3, 12, 2019, 19, 'Elaine', 150, 'Vivian Bersote Oliveira'),
(253, 0, 4, 12, 2019, 19, 'Elaine', 50, 'Vivian Bersote Oliveira'),
(254, 0, 5, 12, 2019, 19, 'Elaine', 700, 'Vivian Bersote Oliveira'),
(255, 0, 10, 12, 2019, 19, 'Elaine', 2500, 'Vivian Bersote Oliveira'),
(256, 0, 12, 12, 2019, 19, 'Elaine', 1500, 'Vivian Bersote Oliveira'),
(257, 0, 17, 12, 2019, 19, 'Luiz Romão', 400, 'Vivian Bersote Oliveira'),
(258, 0, 26, 12, 2019, 19, 'Luiz Romão', 200, 'Vivian Bersote Oliveira'),
(259, 0, 27, 12, 2019, 19, 'Danielle Coronado', 150, 'Vivian Bersote Oliveira'),
(260, 0, 4, 12, 2019, 21, 'Gabriela Nagatani ref dias: 28/11 e 29/11/2019', 107.9, 'Vivian Bersote Oliveira'),
(261, 0, 5, 12, 2019, 21, 'Luciene Vitoria ref dia 03/12/2019', 59.4, 'Vivian Bersote Oliveira'),
(262, 0, 9, 12, 2019, 21, 'Fatima ref dia 28/11/2019', 59.4, 'Vivian Bersote Oliveira'),
(263, 0, 12, 12, 2019, 21, 'Jorge Quadros ref dias: 05/12 e 06/12/2019', 97, 'Vivian Bersote Oliveira'),
(264, 0, 13, 12, 2019, 21, 'Silvia Honda ref dia 13/12/2019', 59.4, 'Vivian Bersote Oliveira'),
(265, 0, 13, 12, 2019, 21, 'Marcia Souza ref dia 12/12/2019', 48.5, 'Vivian Bersote Oliveira'),
(266, 0, 16, 12, 2019, 21, 'Nadia ref dia 12/12/2019', 59.4, 'Vivian Bersote Oliveira'),
(267, 0, 17, 12, 2019, 21, 'Daniele Siqueira ref dia 05/12/2019', 59.4, 'Vivian Bersote Oliveira'),
(268, 0, 17, 12, 2019, 21, 'Daniele Lima ref dias: 05/12 e 06/12/2019', 118.8, 'Vivian Bersote Oliveira'),
(269, 0, 17, 12, 2019, 21, 'Fatima ref dias: 05/12, 06/12, 11/12 e 12/12/2019', 178.2, 'Vivian Bersote Oliveira'),
(270, 0, 20, 12, 2019, 21, 'Viviane ref dia 17/12/2019', 48.5, 'Vivian Bersote Oliveira'),
(271, 0, 20, 12, 2019, 21, 'Silvia Honda ref dia 18/12/2019', 59.4, 'Vivian Bersote Oliveira'),
(272, 0, 23, 12, 2019, 21, 'Silmara Muniz ref dia 16/12/2019', 24.25, 'Vivian Bersote Oliveira'),
(273, 0, 27, 12, 2019, 21, 'Fatima ref dias: 17/12 e 19/12/2019', 118.8, 'Vivian Bersote Oliveira'),
(274, 1, 6, 1, 2020, 17, 'Eduardo Santocchi', 3000, 'Vivian Bersote Oliveira'),
(275, 1, 22, 1, 2020, 17, 'Eduardo Santocchi', 3000, 'Vivian Bersote Oliveira'),
(276, 0, 2, 1, 2020, 19, 'Luiz Romão', 150, 'Vivian Bersote Oliveira'),
(277, 0, 6, 1, 2020, 19, 'Carlos Costa', 21, 'Vivian Bersote Oliveira'),
(279, 0, 7, 1, 2020, 19, 'Elaine', 100, 'Vivian Bersote Oliveira'),
(280, 0, 8, 1, 2020, 19, 'Elaine', 2000, 'Vivian Bersote Oliveira'),
(281, 0, 14, 1, 2020, 19, 'Elaine', 800, 'Vivian Bersote Oliveira'),
(282, 0, 22, 1, 2020, 19, 'Luiz Romão', 200, 'Vivian Bersote Oliveira'),
(283, 0, 22, 1, 2020, 19, 'Elaine', 8.35, 'Vivian Bersote Oliveira'),
(284, 0, 23, 1, 2020, 19, 'Elaine', 250, 'Vivian Bersote Oliveira'),
(285, 0, 24, 1, 2020, 19, 'Edmar ', 220, 'Vivian Bersote Oliveira'),
(286, 0, 24, 1, 2020, 19, 'Jessé', 700, 'Vivian Bersote Oliveira'),
(287, 0, 28, 1, 2020, 19, 'Elaine', 405, 'Vivian Bersote Oliveira'),
(288, 0, 29, 1, 2020, 19, 'Elaine', 200, 'Vivian Bersote Oliveira'),
(289, 0, 31, 1, 2020, 19, 'Carlos', 200, 'Vivian Bersote Oliveira'),
(290, 0, 16, 1, 2020, 21, 'Fatima ref dia 09/01/2020', 59.4, 'Vivian Bersote Oliveira'),
(291, 0, 16, 1, 2020, 21, 'Marcelo Molina ref dia 14/01/2020', 48.5, 'Vivian Bersote Oliveira'),
(292, 0, 24, 1, 2020, 21, 'Margarete ref dia 24/01/2020', 48.5, 'Vivian Bersote Oliveira'),
(293, 0, 31, 1, 2020, 21, 'Silvia Honda ref dia 30/01/2020', 59.4, 'Vivian Bersote Oliveira'),
(294, 0, 31, 1, 2020, 21, 'Viviane ref dia 21/01/2020', 48.5, 'Vivian Bersote Oliveira'),
(295, 0, 31, 1, 2020, 21, 'Isabel ref dia 23/01/2020', 48.5, 'Vivian Bersote Oliveira'),
(296, 0, 31, 1, 2020, 21, 'Eduardo Calegari ref dia 22/01/2020', 48.5, 'Vivian Bersote Oliveira'),
(297, 1, 31, 1, 2020, 18, 'Troco Mês', 66.31, 'Vivian Bersote Oliveira'),
(298, 1, 28, 6, 2019, 18, 'Elaine', 192.33, 'Vivian Bersote Oliveira'),
(300, 1, 14, 2, 2020, 17, 'Eduardo Santocchi', 3000, 'Vivian Bersote Oliveira'),
(313, 1, 20, 2, 2020, 18, 'Conta recebida de ELAINE LELLIS ALVES DA COSTA</br>  Obs.:Troco Pendente Almoxarifado/Compras', 81.22, 'Vivian Bersote Oliveira'),
(302, 0, 5, 2, 2020, 19, 'Elaine', 200, 'Vivian Bersote Oliveira'),
(303, 0, 6, 2, 2020, 19, 'Elaine', 200, 'Vivian Bersote Oliveira'),
(304, 0, 11, 2, 2020, 19, 'Elaine', 300, 'Vivian Bersote Oliveira'),
(305, 0, 13, 2, 2020, 19, 'Carlos Costa', 110, 'Vivian Bersote Oliveira'),
(306, 0, 18, 2, 2020, 19, 'Elaine', 2300, 'Vivian Bersote Oliveira'),
(307, 0, 20, 2, 2020, 19, 'Elaine', 350, 'Vivian Bersote Oliveira'),
(308, 0, 14, 2, 2020, 21, 'Daniele Lima ref dias: 11/02 e 13/02/2020', 118.8, 'Vivian Bersote Oliveira'),
(309, 0, 18, 2, 2020, 21, 'Viviane ref dia 13/02/2020', 48.5, 'Vivian Bersote Oliveira'),
(310, 0, 18, 2, 2020, 21, 'Fatima ref dias: 11/02 e 14/02/2020', 118.8, 'Vivian Bersote Oliveira'),
(311, 0, 19, 2, 2020, 21, 'Sonia Lieko ref dia 18/02/2020', 59.4, 'Vivian Bersote Oliveira'),
(312, 0, 20, 2, 2020, 21, 'Jorge Quadros ref dia 13/02/2020', 48.5, 'Vivian Bersote Oliveira'),
(316, 0, 27, 2, 2020, 19, 'Carlos Costa', 500, 'Vivian Bersote Oliveira'),
(317, 1, 27, 2, 2020, 0, '', 0, 'Felippe de Barros Ribeiro'),
(318, 1, 6, 3, 2020, NULL, 'Conta recebida de kjjhk. Obs.:', 77667, ''),
(319, 1, 9, 3, 2020, 17, 'din din', 3502540000, 'Felippe de Barros Ribeiro'),
(320, 0, 9, 3, 2020, 19, 'Ferrari', 1500000, 'Felippe de Barros Ribeiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lc_pedido`
--

CREATE TABLE `lc_pedido` (
  `id_pedido` int(11) NOT NULL,
  `status_pedido` int(11) DEFAULT 5,
  `justificativa_pedido` text NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `ano` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `unidade` varchar(30) NOT NULL,
  `documento_fiscal` text DEFAULT NULL,
  `item_fk_id` int(11) NOT NULL,
  `centro_custo_fk_id` int(11) NOT NULL,
  `dt_abertura` date DEFAULT NULL,
  `hrs_abertura` time NOT NULL,
  `usuario_fk_id` int(11) NOT NULL,
  `dt_fechamento` date DEFAULT NULL,
  `hrs_fechamento` time DEFAULT NULL,
  `aprovacao_fk_id` int(11) DEFAULT NULL,
  `descricao_item_pedido` text NOT NULL,
  `comprador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `lc_pedido`
--

INSERT INTO `lc_pedido` (`id_pedido`, `status_pedido`, `justificativa_pedido`, `dia`, `mes`, `ano`, `quantidade`, `unidade`, `documento_fiscal`, `item_fk_id`, `centro_custo_fk_id`, `dt_abertura`, `hrs_abertura`, `usuario_fk_id`, `dt_fechamento`, `hrs_fechamento`, `aprovacao_fk_id`, `descricao_item_pedido`, `comprador`) VALUES
(54, 3, 'asd', 13, 4, 2020, 123, '', NULL, 45, 75, '2020-04-08', '10:06:00', 31, '2020-05-13', '02:09:00', 8, '', NULL),
(56, 4, '2', 13, 4, 2020, 2, '', NULL, 36, 72, '2020-04-13', '00:00:00', 38, NULL, NULL, 10, '', NULL),
(58, 2, '4', 13, 4, 2020, 4, '', NULL, 38, 74, '2020-04-13', '10:58:01', 31, NULL, NULL, 12, '', NULL),
(59, 2, 'asd', 13, 4, 2020, 123, '', NULL, 45, 75, '2020-04-13', '00:00:00', 44, NULL, NULL, 13, '', NULL),
(60, 6, '1', 13, 4, 2020, 1, '', NULL, 35, 71, '2020-04-13', '16:18:48', 31, '2020-05-15', '12:27:04', 14, '', NULL),
(61, 3, 'Justificativa001', 15, 4, 2020, 10, '', NULL, 35, 71, '2020-04-15', '09:03:58', 31, '2020-05-15', '12:25:47', 15, 'Descrição001', NULL),
(66, 1, 'teste', 20, 4, 2020, 1, 'peça(s)', NULL, 35, 71, '2020-04-20', '15:58:11', 31, NULL, NULL, 16, 'Teste', NULL),
(67, 1, 'Teste', 22, 4, 2020, 4, 'Metro(s)', NULL, 46, 74, '2020-04-22', '12:15:15', 31, NULL, NULL, 17, '', NULL),
(68, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 22, 4, 2020, 5, 'Metro(s)', NULL, 38, 80, '2020-04-22', '12:16:13', 31, '2020-04-22', '13:49:00', 18, '<i>Felippe</i> <b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL),
(69, 1, 'asd', 22, 4, 2020, 2, 'peça(s)', NULL, 45, 71, '2020-04-22', '14:57:19', 31, NULL, NULL, 19, 'teste', NULL),
(70, 1, 'Precisamos \r\nPorque foi solicitado\r\nEntão comprem por gentileza.', 28, 4, 2020, 24, 'peça', NULL, 56, 80, '2020-04-28', '14:28:01', 31, NULL, NULL, 20, 'Novo Item\r\nCompra Realizada\r\nA pedido de Tal Pessoa.', NULL),
(71, 3, 'Teste<br />\r\nTeste', 28, 4, 2020, 2, 'Kilo(s)', NULL, 43, 74, '2020-04-28', '14:46:58', 31, '2020-05-04', '09:19:17', 21, 'Teste<br />\r\nTeste', NULL),
(72, 1, 'Meu Primeiro Pedido.\r\nTeste de 1 pedido', 29, 4, 2020, 2, 'peça', NULL, 35, 73, '2020-04-29', '12:25:02', 48, NULL, NULL, 22, 'Meu Primeiro Pedido.\r\nTeste de 1 pedido', NULL),
(73, 1, 'Item019', 8, 5, 2020, 9, 'peça(s)', NULL, 56, 80, '2020-05-08', '12:15:15', 31, NULL, NULL, 23, 'Item019', NULL),
(74, 1, 'Teste\r\nTeste\r\nTeste', 8, 5, 2020, 1, 'peça(s)', NULL, 54, 84, '2020-05-08', '15:07:14', 31, NULL, NULL, 24, 'Teste\r\nTeste\r\nTeste', NULL),
(75, 1, 'Por que sim', 11, 5, 2020, 10, 'Kilo(s)', NULL, 43, 80, '2020-05-11', '15:23:38', 44, NULL, NULL, 25, 'Quero esse aquele e o outro.', NULL),
(76, 1, 'dadasd', 11, 5, 2020, 12, 'peça(s)', NULL, 43, 71, '2020-05-11', '15:37:25', 31, NULL, NULL, 26, 'Teste', NULL),
(77, 1, 'asdsad', 11, 5, 2020, 11, 'peça(s)', NULL, 44, 71, '2020-05-11', '15:38:55', 31, NULL, NULL, 27, 'assa11', NULL),
(78, 1, 'asda', 11, 5, 2020, 12, 'peça(s)', NULL, 44, 71, '2020-05-11', '15:39:32', 31, NULL, NULL, 28, 'asdasd', NULL),
(79, 1, 'asd', 11, 5, 2020, 1, 'peça(s)', NULL, 35, 71, '2020-05-11', '15:42:16', 31, NULL, NULL, 29, 'asdsad', NULL),
(80, 1, 'sdasd', 11, 5, 2020, 123, 'peça(s)', NULL, 35, 71, '2020-05-11', '15:42:25', 31, NULL, NULL, 30, 'asdasd', NULL),
(81, 1, 'asdsad', 11, 5, 2020, 13, 'peça(s)', NULL, 35, 71, '2020-05-11', '15:42:36', 31, NULL, NULL, 31, 'asdad', NULL),
(82, 4, 'asdasdsa', 11, 5, 2020, 12, 'peça(s)', NULL, 37, 75, '2020-05-11', '15:43:02', 31, NULL, NULL, 32, 'asdasdsa', NULL),
(83, 1, 'sadsad', 11, 5, 2020, 12, 'peça(s)', NULL, 35, 71, '2020-05-11', '15:43:27', 31, NULL, NULL, 33, 'asdsad', NULL),
(84, 1, 'asda', 11, 5, 2020, 12, 'peça(s)', NULL, 35, 71, '2020-05-11', '17:01:07', 31, NULL, NULL, 34, 'asdasd', NULL),
(85, 3, '1', 12, 5, 2020, 1, 'peça(s)', NULL, 41, 71, '2020-05-12', '08:55:26', 50, '2020-05-15', '12:26:27', 35, '1', NULL),
(86, 6, '2', 12, 5, 2020, 2, 'peça(s)', NULL, 45, 72, '2020-05-12', '08:56:51', 51, '2020-05-02', '06:25:59', 36, '2', NULL),
(87, 1, '3', 12, 5, 2020, 3, 'peça(s)', NULL, 37, 73, '2020-05-12', '09:09:29', 54, NULL, NULL, 37, '3', NULL),
(88, 3, '4', 12, 5, 2020, 4, 'peça(s)', NULL, 38, 71, '2020-05-12', '09:20:45', 53, NULL, NULL, 38, '4', NULL),
(89, 4, 'Justificado', 12, 5, 2020, 10, 'peça(s)', NULL, 35, 71, '2020-05-12', '16:18:14', 53, NULL, NULL, 42, 'Pedido Novo', NULL),
(90, 1, 'novo Pedido', 12, 5, 2020, 2, 'peça(s)', NULL, 35, 71, '2020-05-12', '16:19:05', 50, NULL, NULL, 43, 'novo Pedido', NULL),
(91, 1, 'sadsdsad', 13, 5, 2020, 123, 'Kilo(s)', NULL, 43, 73, '2020-05-13', '10:05:57', 50, NULL, NULL, 44, 'saasd', NULL),
(92, 6, 'sadsad', 13, 5, 2020, 23, 'peça(s)', NULL, 35, 71, '2020-05-13', '10:06:25', 51, '2020-05-03', '14:25:46', 45, 'asdsa', NULL),
(93, 1, 'asdsad', 13, 5, 2020, 12, 'peça(s)', NULL, 38, 71, '2020-05-13', '10:06:48', 54, NULL, NULL, 46, 'asdsda', NULL),
(94, 1, 'TESTE', 13, 5, 2020, 5, 'Metro(s)', NULL, 50, 80, '2020-05-13', '10:35:17', 50, NULL, NULL, 47, 'TESTE', NULL),
(95, 2, 'hmhmhmhm', 13, 5, 2020, 10, 'Metro(s)', NULL, 49, 81, '2020-05-13', '10:47:58', 50, NULL, NULL, 48, 'momomomo', NULL),
(96, 7, 'asdad', 13, 5, 2020, 213, 'peça(s)', NULL, 44, 71, '2020-05-13', '12:38:52', 50, NULL, NULL, 49, 'Novo Pedido', NULL),
(97, 6, 'a', 13, 5, 2020, 1, 'peça(s)', NULL, 35, 71, '2020-05-13', '12:39:35', 54, '2020-05-13', '16:57:59', 50, 'a', NULL),
(98, 6, 'sdasd', 13, 5, 2020, 123, 'peça(s)', NULL, 35, 71, '2020-05-13', '12:45:27', 50, NULL, NULL, 51, 'asdasd', NULL),
(99, 3, 'sdasd', 13, 5, 2020, 132, 'peça(s)', NULL, 35, 71, '2020-05-13', '12:45:54', 50, NULL, NULL, 52, 'asdsad', NULL),
(100, 6, 'asd', 13, 5, 2020, 12, 'peça(s)', NULL, 35, 71, '2020-05-13', '12:58:30', 51, '2020-05-13', '13:21:42', 53, 'asd', NULL),
(101, 4, 'asdsa', 13, 5, 2020, 11, 'peça(s)', NULL, 35, 71, '2020-05-13', '16:40:59', 49, NULL, NULL, 54, 'ads', NULL),
(102, 4, 'asdsad', 15, 5, 2020, 22, 'peça(s)', NULL, 35, 71, '2020-05-15', '11:52:17', 44, NULL, NULL, 55, 'asdasd', NULL),
(103, 5, 'asdsda', 15, 5, 2020, 12, 'peça(s)', NULL, 35, 71, '2020-05-15', '11:53:10', 44, NULL, NULL, 56, 'asdsda', NULL),
(104, 5, 'asdsa', 15, 5, 2020, 22, 'peça(s)', NULL, 35, 71, '2020-05-15', '11:55:15', 44, NULL, NULL, 57, 'asdsda', NULL),
(105, 5, '11', 15, 5, 2020, 1, 'peça(s)', NULL, 35, 73, '2020-05-15', '11:57:54', 44, NULL, NULL, 58, 'asdasd', NULL),
(106, 5, 'asd', 15, 5, 2020, 1, 'peça(s)', NULL, 35, 71, '2020-05-15', '11:59:04', 44, NULL, NULL, 59, 'sadsad', NULL),
(107, 6, 'asdsad', 15, 5, 2020, 123, 'peça(s)', NULL, 35, 71, '2020-05-15', '12:00:16', 44, '2020-05-18', '11:22:39', 60, 'asdsad', NULL),
(108, 2, 'asdasd', 15, 5, 2020, 12, 'peça(s)', NULL, 35, 71, '2020-05-15', '12:02:01', 44, NULL, NULL, 61, 'asdsa', NULL),
(109, 2, 'asd', 15, 5, 2020, 12, 'peça(s)', NULL, 35, 71, '2020-05-15', '12:03:56', 44, NULL, NULL, 62, 'asdasd', NULL),
(110, 2, 'sdasd', 15, 5, 2020, 1, 'peça(s)', NULL, 35, 71, '2020-05-15', '12:04:23', 44, NULL, NULL, 63, 'asdasd', NULL),
(111, 2, 'asdasd', 15, 5, 2020, 123, 'peça(s)', NULL, 35, 71, '2020-05-15', '12:05:11', 44, NULL, NULL, 64, 'asdsad', NULL),
(112, 2, 'asdsd', 15, 5, 2020, 123, 'peça(s)', NULL, 35, 71, '2020-05-15', '12:17:13', 44, NULL, NULL, 65, 'asdd', NULL),
(113, 6, 'asds', 15, 5, 2020, 1231, 'peça(s)', NULL, 35, 71, '2020-05-15', '12:19:49', 44, NULL, NULL, 66, 'sads', NULL),
(114, 6, 'asdsad', 15, 5, 2020, 12312, 'peça(s)', NULL, 35, 71, '2020-05-15', '12:20:06', 44, NULL, NULL, 67, 'asdsda', NULL),
(115, 4, 'asdd', 15, 5, 2020, 123, 'peça(s)', NULL, 35, 71, '2020-05-15', '13:07:50', 50, '2020-05-15', '13:14:33', 68, 'asdasd', NULL),
(117, 2, '1212', 15, 5, 2020, 123, 'peça(s)', NULL, 35, 71, '2020-05-15', '14:27:19', 50, NULL, NULL, 70, 'te', NULL),
(118, 5, 'sdasd', 15, 5, 2020, 121, 'peça(s)', NULL, 35, 71, '2020-05-15', '14:55:14', 50, NULL, NULL, 71, 'asdsd', NULL),
(119, 8, 'asdsa', 15, 5, 2020, 12, 'peça(s)', NULL, 35, 71, '2020-05-15', '15:23:25', 54, NULL, NULL, 72, 'asdasd', NULL),
(120, 3, 'Novo Pedido\r\n', 15, 5, 2020, 123, 'peça(s)', NULL, 35, 71, '2020-05-15', '15:43:49', 50, '2020-05-15', '15:59:26', 73, 'Novo Pedido', NULL),
(122, 5, 'asdsda', 15, 5, 2020, 123, 'peça(s)', NULL, 35, 71, '2020-05-15', '16:21:22', 50, NULL, NULL, 74, 'asdsa', NULL),
(123, 5, 'asd', 15, 5, 2020, 123, 'peça(s)', NULL, 35, 71, '2020-05-15', '16:22:48', 50, NULL, NULL, 75, 'sad', NULL),
(124, 5, 'asdasd', 15, 5, 2020, 123, 'peça(s)', NULL, 35, 71, '2020-05-15', '16:42:38', 50, NULL, NULL, 76, 'asdsad', NULL),
(125, 3, 'asd', 15, 5, 2020, 12, 'peça(s)', NULL, 35, 71, '2020-05-15', '16:50:04', 50, '2020-05-20', '11:09:14', 77, 'asdsad', NULL),
(126, 3, 'Fluxo 001', 15, 5, 2020, 1, 'peça(s)', NULL, 35, 71, '2020-05-15', '23:31:07', 50, '2020-05-16', '00:15:26', 78, 'Fluxo 001', NULL),
(127, 3, 'Pedido Novo', 16, 5, 2020, 25, 'peça(s)', NULL, 41, 74, '2020-05-16', '00:55:48', 50, '2020-05-16', '01:17:01', 79, 'Novo Pedio', NULL),
(128, 3, '<b> Minha Justificativa </b>\r\n<br /> Essa aqui.', 18, 5, 2020, 3, 'Metro(s)', NULL, 41, 80, '2020-05-18', '11:07:13', 50, '2020-05-18', '11:15:25', 80, '<b>Novo Pedido</b><br/>\r\nFeito por Felippe', NULL),
(129, 5, 'asdasd', 18, 5, 2020, 12, 'peça(s)', NULL, 35, 71, '2020-05-18', '11:27:31', 50, NULL, NULL, 81, 'sadsad', NULL),
(130, 6, 'sadkjgiguas', 18, 5, 2020, 12, 'peça(s)', NULL, 37, 71, '2020-05-18', '19:20:06', 50, '2020-05-18', '19:21:08', 82, 'Tantas MAscaras', NULL),
(131, 3, 'Para uso em teste teste', 20, 5, 2020, 4, 'Metro(s)', NULL, 41, 81, '2020-05-20', '09:16:07', 50, '2020-05-20', '09:36:05', 83, 'Cabo 2,5 flexível marca Induscabos', NULL),
(132, 2, 'Para atendimento da OS 11111', 20, 5, 2020, 200, 'peça(s)', NULL, 57, 73, '2020-05-20', '09:40:18', 50, NULL, NULL, 84, 'Preferência marca Induscabos', NULL),
(133, 2, 'x-x-x-x-x', 20, 5, 2020, 5, 'peça(s)', NULL, 40, 72, '2020-05-20', '10:49:35', 51, NULL, NULL, 85, 'x-x-x-x', NULL),
(134, 9, 'Nova Compra', 20, 5, 2020, 1, 'peça(s)', NULL, 35, 71, '2020-05-20', '11:31:19', 50, NULL, NULL, 86, 'Nova Compra', NULL),
(135, 5, 'asdasd', 20, 5, 2020, 123, 'peça(s)', NULL, 35, 71, '2020-05-20', '11:39:16', 50, NULL, NULL, 87, 'asdsad', NULL),
(136, 5, 'qsdasd', 20, 5, 2020, 12, 'Kilo(s)', NULL, 38, 71, '2020-05-20', '21:57:55', 50, NULL, NULL, 88, 'asjhsd', NULL),
(137, 8, 'novo', 21, 5, 2020, 10, 'peça(s)', NULL, 35, 71, '2020-05-21', '10:11:54', 50, NULL, NULL, 89, 'novo', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lc_usuarios`
--

CREATE TABLE `lc_usuarios` (
  `id` int(11) NOT NULL,
  `centro_custo_u_fk_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `first_name` text DEFAULT NULL,
  `middle_name` text DEFAULT NULL,
  `last_name` text DEFAULT NULL,
  `tipo_direx` char(1) NOT NULL,
  `tipo_gestor` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lc_usuarios`
--senha 123
--

INSERT INTO `lc_usuarios` (`id`, `centro_custo_u_fk_id`, `nome`, `email`, `senha`, `tipo`, `first_name`, `middle_name`, `last_name`, `tipo_direx`, `tipo_gestor`) VALUES
(31, 80, 'UsuarioSupADM', 'sup@adm.com.br', '202cb962ac59075b964b07152d234b70', 'supadm', 'Sup', 'de Adm', 'Adn', '1', '1'), 
(38, 82, 'UsuaruiADM', 'adm@adm.com.br', '202cb962ac59075b964b07152d234b70', 'administrador', 'Administrador', 'adm', 'adm', '0', '1'),
(44, 80, 'Direx', 'direx', '202cb962ac59075b964b07152d234b70', 'direx', 'diretor', 'da direx', 'Sup', '2', '2'),
(45, 0, 'fefe', 'fefe', 'fefe', 'supadm', 'fefe', 'fefe', 'fefe', '2', '1'),
(47, 80, 'Comprador', 'comprador', '202cb962ac59075b964b07152d234b70', 'compras', 'Comprador', 'do HAS', '', '1', '1'),
(48, 80, 'Compras001', 'compras001', '202cb962ac59075b964b07152d234b70', 'compras', 'compras', 'de comprador', 'compras', '1', '1'),
(49, 80, 'Chefe - Tipo DIr:3 enfermagem, tipo_Chefia: 3', 'chefe', '202cb962ac59075b964b07152d234b70', 'gestor', 'User', 'Teste', '2Teste', '3', '3'),
(50, 80, 'Oficial - Tipo DIr:3 enfermagem, tipo_Chefia: 3', 'oficial', '202cb962ac59075b964b07152d234b70', 'oficial', 'User', 'Teste', '2Teste', '3', '3'),
(51, 80, 'Oficial2 - Tipo DIr:3 enfermagem, tipo_Chefia: 3', 'oficial2', '202cb962ac59075b964b07152d234b70', 'oficial', 'User', 'Teste', '2Teste', '3', '3'),
(53, 80, 'Diretor - Tipo DIr:3 enfermagem, tipo_Chefia: 3', 'diretor', '202cb962ac59075b964b07152d234b70', 'diretor', 'User', 'Teste', '2Teste', '3', '4'),
(54, 80, 'Oficial3 - Tipo DIr:3 enfermagem, tipo_Chefia: 2', 'oficial3', '202cb962ac59075b964b07152d234b70', 'oficial', 'User', 'Teste', '2Teste', '3', '2'),
(55, 80, 'Comprador001', 'comprador001', '202cb962ac59075b964b07152d234b70', 'compras', 'comprador', '002', 'comprador', '1', '1');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `lc_acompanhamentos`
--
ALTER TABLE `lc_acompanhamentos`
  ADD PRIMARY KEY (`id_acompanhamento`),
  ADD KEY `id_fk_usuario_acompanhamento` (`id_fk_usuario_acompanhamento`),
  ADD KEY `id_fk_pedido` (`id_fk_pedido`);

--
-- Índices para tabela `lc_aprovacoes`
--
ALTER TABLE `lc_aprovacoes`
  ADD PRIMARY KEY (`id_aprovacao`),
  ADD UNIQUE KEY `pedido_id_fk` (`pedido_id_fk`) USING BTREE;

--
-- Índices para tabela `lc_cat`
--
ALTER TABLE `lc_cat`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `lc_centro_custo`
--
ALTER TABLE `lc_centro_custo`
  ADD PRIMARY KEY (`id_centro_custo`),
  ADD UNIQUE KEY `UC_CENTRO_CUSTO` (`centro_custo`),
  ADD UNIQUE KEY `UC_CENTRO_CUSTO_DESCRICAO` (`cc_descricao`);

--
-- Índices para tabela `lc_contas`
--
ALTER TABLE `lc_contas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `lc_itens`
--
ALTER TABLE `lc_itens`
  ADD PRIMARY KEY (`id_item`),
  ADD UNIQUE KEY `UC_itens` (`nome_item`);

--
-- Índices para tabela `lc_movimento`
--
ALTER TABLE `lc_movimento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `lc_pedido`
--
ALTER TABLE `lc_pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD UNIQUE KEY `aprovacao_fk_id` (`aprovacao_fk_id`) USING BTREE,
  ADD KEY `item_fk_id` (`item_fk_id`),
  ADD KEY `centro_custo_fk_id` (`centro_custo_fk_id`),
  ADD KEY `usuario_fk_id` (`usuario_fk_id`),
  ADD KEY `comprador_fk_id` (`comprador`);

--
-- Índices para tabela `lc_usuarios`
--
ALTER TABLE `lc_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD KEY `centro_custo_u_fk_id` (`centro_custo_u_fk_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `lc_acompanhamentos`
--
ALTER TABLE `lc_acompanhamentos`
  MODIFY `id_acompanhamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=341;

--
-- AUTO_INCREMENT de tabela `lc_aprovacoes`
--
ALTER TABLE `lc_aprovacoes`
  MODIFY `id_aprovacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de tabela `lc_cat`
--
ALTER TABLE `lc_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `lc_centro_custo`
--
ALTER TABLE `lc_centro_custo`
  MODIFY `id_centro_custo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de tabela `lc_contas`
--
ALTER TABLE `lc_contas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `lc_itens`
--
ALTER TABLE `lc_itens`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de tabela `lc_movimento`
--
ALTER TABLE `lc_movimento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321;

--
-- AUTO_INCREMENT de tabela `lc_pedido`
--
ALTER TABLE `lc_pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT de tabela `lc_usuarios`
--
ALTER TABLE `lc_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `lc_acompanhamentos`
--
ALTER TABLE `lc_acompanhamentos`
  ADD CONSTRAINT `lc_acompanhamentos_ibfk_1` FOREIGN KEY (`id_fk_usuario_acompanhamento`) REFERENCES `lc_usuarios` (`id`),
  ADD CONSTRAINT `lc_acompanhamentos_ibfk_2` FOREIGN KEY (`id_fk_pedido`) REFERENCES `lc_pedido` (`id_pedido`);

--
-- Limitadores para a tabela `lc_aprovacoes`
--
ALTER TABLE `lc_aprovacoes`
  ADD CONSTRAINT `lc_aprovacoes_ibfk_1` FOREIGN KEY (`pedido_id_fk`) REFERENCES `lc_pedido` (`id_pedido`);

--
-- Limitadores para a tabela `lc_pedido`
--
ALTER TABLE `lc_pedido`
  ADD CONSTRAINT `comprador_fk_id` FOREIGN KEY (`comprador`) REFERENCES `lc_usuarios` (`id`),
  ADD CONSTRAINT `lc_pedido_ibfk_1` FOREIGN KEY (`item_fk_id`) REFERENCES `lc_itens` (`id_item`),
  ADD CONSTRAINT `lc_pedido_ibfk_2` FOREIGN KEY (`centro_custo_fk_id`) REFERENCES `lc_centro_custo` (`id_centro_custo`),
  ADD CONSTRAINT `lc_pedido_ibfk_3` FOREIGN KEY (`usuario_fk_id`) REFERENCES `lc_usuarios` (`id`),
  ADD CONSTRAINT `lc_pedido_ibfk_4` FOREIGN KEY (`aprovacao_fk_id`) REFERENCES `lc_aprovacoes` (`id_aprovacao`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
