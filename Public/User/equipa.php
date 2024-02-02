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
    <link rel="stylesheet" href="Public/Css/style2.css">
    <link rel="shortcut icon" href="Public/Assets/_31554896-b491-466e-b129-d77e088c3b0c-removebg-preview.png" type="image/x-icon">
    <title>Equipes</title>
</head>
<body>
    <header>
        <a href="index.php">Voltar</a>
        <h1>Equipes</h1>
    </header>

    <form method="post" action="times.php">
        <input type="text" name="nome" placeholder="Nome da Equipe" required list="tit">
            <datalist id="tit"><br>Escolha entre esses
                <option value="Tigre">
                <option value="Leão">
                <option value="Crocodilo">
                <option value="Zebra">
                <option value="Arara">
            </datalist>
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
        <input type="number" name="pontos" placeholder="Pontos" required>
        <input type="text" name="categoria" placeholder="Categoria" required list="cat">
            <datalist id="cat"><br>Escolha entre esses
                <option value="Dança das cadeiras">
                <option value="Cabo de guerra">
                <option value="Caça ao tesouro">
                <option value="Torta na cara">
            </datalist>
        <button type="submit">Adicionar Usuário</button>
    </form>
</body>
</html>