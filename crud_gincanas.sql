-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Fev-2024 às 03:12
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud_gincanas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividades`
--

CREATE TABLE `atividades` (
  `id_ativ` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `regras` text NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `atividades`
--

INSERT INTO `atividades` (`id_ativ`, `nome`, `regras`, `data`) VALUES
(6, 'A TV', 'Você vai se deparar com uma TV em cima de uma gaveta em um quarto isolado. Esta TV permite reproduzir uma fita VHS. Você pode encontrar a fita VHS em uma gaveta ou em um armário – então olhe ao redor para ela. Em seguida, o vídeo será iniciado. Isso é vital para completar o quebra-cabeça de 9 cadáveres, então tire uma foto de cada um dos três pacientes e o que está faltando neles, para que você não precise reproduzir a mensagem novamente.', '2024-02-08 07:30:00'),
(7, 'Os 9 cadáveres', 'O jogador se depara com nove cadáveres em uma fita VHS. Antes de iniciar um quebra-cabeça, é necessário encontrar as três partes do corpo ausentes dos pacientes mostrados na fita, que estão espalhadas pelos bastidores. O jogador deve colocar as partes do corpo nos pacientes correspondentes interagindo com latas acima dos corpos. Ao fazer isso para os três pacientes, uma parede misteriosa desaparece, revelando uma nova passagem com um quebra-cabeça de interruptores.', '2024-02-08 08:30:00'),
(8, 'O projetor de luz e silhueta', 'Você vai se deparar com um projetor que ilumina um objeto de metal flutuante. Interaja com o objeto para poder movê-lo. Seu objetivo é girar o objeto até que a sombra na parede se assemelhe a um cavalo. Quando isso acontecer, uma porta se transformará em existência. Você pode caminhar através dele no quebra-cabeça do relógio.', '2024-02-08 09:30:00'),
(9, 'O relógio', 'O relógio exige que você tenha os braços do relógio, que podem ser encontrados em uma gaveta ou em um armário nos bastidores. Depois de tê-lo, você pode interagir com o relógio e deslizar os braços do relógio do seu inventário para o relógio. Gire sua visão para ver atrás do relógio, onde haverá duas teclas. Você pode virá-los para girar os braços. Para resolver o quebra-cabeça, você deve encontrar uma nota com o tempo que você precisa do relógio para dizer. Esta nota pode ser encontrada na gaveta em frente à Porta Vermelha. Encontre a hora e, em seguida, faça o relógio mostrar essa hora. Isso abrirá um compartimento atrás do relógio com o código para o cofre de bloqueio de número.', '2024-02-08 10:30:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipes`
--

CREATE TABLE `equipes` (
  `id_equipes` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `participantes` varchar(255) NOT NULL,
  `cor` varchar(255) NOT NULL,
  `pontos` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `equipes`
--

INSERT INTO `equipes` (`id_equipes`, `nome`, `participantes`, `cor`, `pontos`, `categoria`) VALUES
(13, 'Dqdobp', 'Stefany, Ana, Melyssa e Régis', 'Preto', 9, 'Os 9 Cadáveres'),
(14, 'GeralDeuaBunda', 'Fábio, Felipe, João, Ryan e Wesley', 'Vermelho', 13, 'O projetor de luz e a silhueta'),
(15, 'Vôlei', 'Ferrer, Sido, Jonothas, Oliveira ', 'Azul', 5, 'O relógio'),
(16, 'Pqp', 'Sla', 'Branco', 2, 'A TV');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `nome`, `email`, `senha`, `tipo_usuario`) VALUES
(1, 'Adm', 'gincanas@gmail.com', 'qawsed', 1),
(4, 'Wesley', 'carron@gmail.com', '12345', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atividades`
--
ALTER TABLE `atividades`
  ADD PRIMARY KEY (`id_ativ`);

--
-- Índices para tabela `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`id_equipes`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atividades`
--
ALTER TABLE `atividades`
  MODIFY `id_ativ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `equipes`
--
ALTER TABLE `equipes`
  MODIFY `id_equipes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
