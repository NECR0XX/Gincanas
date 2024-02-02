-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Fev-2024 às 19:40
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
  `regras` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `atividades`
--

INSERT INTO `atividades` (`id_ativ`, `nome`, `regras`) VALUES
(2, 'Dança da cadeira', 'A dança da cadeira só precisa de cadeiras dispostas em um círculo, sendo que o número de assentos sempre deve ser menor que o número de participantes. Ao som de uma música, os jogadores devem dançar em volta das cadeiras até ela parar. Quando isso acontecer, todos devem tentar sentar. Quem não conseguir, sai do jogo levando consigo uma cadeira. Vence aquele que conseguir sentar na última cadeira.'),
(3, 'Cabo de guerra', 'Em um espaço amplo e seguro, estique a corda, marcando o meio tanto na corda, com uma fita, quanto no chão (linha de giz). Divida os participantes em duas equipes, atentando para equilibrar força e número de pessoas. Com os jogadores divididos e enfileirados no seu lado da corda, eles devem puxar até que pelo menos um dos participantes da outra equipe cruze a linha central. Quem fizer isso primeiro é a equipe vencedora.'),
(4, 'Caça ao tesouro', 'Uma das coisas mais legais da caça ao tesouro é que, dependendo do grau de dificuldade e da quantidade de pistas, ela pode durar a festa inteira, com prosseguimento entre as outras brincadeiras. A caça ao tesouro é bem famosa, mas não custa nada relembrar como funciona. Depois de preparar e de esconder dois conjuntos de pistas com cores e conteúdos diferentes em uma área pré-determinada, divida os participantes em dois grupos e entregue a pista inicial de cada um. A partir daí, cada grupo deve desvendar as pistas recebidas para encontrar as próximas até chegar ao tesouro.\r\n\r\nNo que diz respeito ao conteúdo das pistas, o legal é que elas estimulem o raciocínio e trabalho em equipe, trazendo charadas, cruzadinhas, caças-palavras, anagramas, etc. Lembrando que as pistas devem ser adaptadas para a idade do grupo. Afinal, o objetivo é que eles realmente encontrem o tesouro, que pode ser balas, bombons ou algo que tenha a ver com a festa.'),
(5, 'Torta na cara', 'A brincadeira que ficou famosa nos programas vespertinos pode ser reproduzida em casa e fica ainda mais divertida com adultos, já que rolam alguns brancos que levam às tortadas. Para fazer as tortas, você vai precisar de pratinhos de plástico ou papelão (daqueles vendidos em lojas de artigos para festa) e de um creme comestível que não irrite os olhos, como chantilly caseiro. Além disso, você também precisará de uma lista de perguntas que podem abranger desde geografia até sexualidade. Na internet você encontra listas de perguntas prontas. Outra dica bacana é usar os cartões de perguntas de jogos como Perfil, caso ele esteja dando sopa em casa.\r\n\r\nFeito isso, a dinâmica você já conhece: com os participantes divididos em duas ou mais equipes, alguém lê a pergunta para dois jogadores. Quem responder errado ou por último leva torta na cara, enquanto o outro participante soma pontos para o seu time.');

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
(5, 'Tigre', 'Fábio', 'Preto', 0, 'Dança das cadeiras'),
(6, 'Leão', 'Wesley', 'Vermelho', 0, 'Caça ao tesouro'),
(7, 'Zebra', 'Ryan', 'Laranja', 0, 'Dança das cadeiras');

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
  MODIFY `id_ativ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `equipes`
--
ALTER TABLE `equipes`
  MODIFY `id_equipes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
