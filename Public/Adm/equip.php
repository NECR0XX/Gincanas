<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/EquipeController.php';

$equipeController = new EquipeController($pdo);

if (isset($_POST['nome']) && 
    isset($_POST['participantes']) &&
    isset($_POST['cor']) &&
    isset($_POST['pontos']) &&
    isset($_POST['categoria'])) 
{
    $equipeController->criarEquipe($_POST['nome'], $_POST['participantes'], $_POST['cor'], $_POST['pontos'], $_POST['categoria']);
    header('Location: #');
}

$equipes = $equipeController->listarEquipes();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wid_ativth=device-wid_ativth, initial-scale=1.0">
    <link rel="stylesheet" href="../../Resources/Css/adm2.css">
    <title>Equipes</title>
</head>
<body>
    <header>
        <a href="index.php">Voltar</a>
        <h1>Equipes</h1>
    </header>

    <form method="post">
        <input type="text" name="nome" placeholder="Nome da Equipe" required>
        <input type="text" name="participantes" placeholder="Participantes" required>
        <input type="text" name="cor" placeholder="Cor" required list="cores">
            <datalist id="cores"><br>Escolha entre esses
                <option value="Branco">
                <option value="Preto">
                <option value="Vermelho">
                <option value="Verde">
                <option value="Azul">
                <option value="Amarelo">
                <option value="Laranja">
            </datalist>
        <input type="number" name="pontos" placeholder="Pontos" min="0" max="100" required>
        <select name="categoria" placeholder="Categoria" required>
            <option value="">Escolha uma categoria</option>
            <option value="A TV">A TV</option>
            <option value="Os 9 Cadáveres">Os 9 Cadáveres</option>
            <option value="O projetor de luz e a silhueta">O projetor de luz e a silhueta</option>
            <option value="O relógio">O relógio</option>
        </select>
        <button type="submit">Adicionar Usuário</button>
    </form>

    <?php
        $equipeController->exibirListaEquipes();
    ?>
</body>
</html>