<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/AtivController.php';

$ativController = new AtivController($pdo);

if (isset($_POST['nome']) &&
    isset($_POST['regras'])) 
{
    $ativController->criarAtiv($_POST['nome'], $_POST['regras']);
    header('Location: #');
}

// Atualiza Ativ
if (isset($_POST['id_ativ']) && isset($_POST['atualizar_nome']) && isset($_POST['atualizar_regras'])) {
    $ativController->atualizarAtiv($_POST['id_ativ'], $_POST['atualizar_nome'], $_POST['atualizar_regras']);
}

// Excluir Ativ
if (isset($_POST['excluir_id_ativ'])) {
    $ativController->excluirAtiv($_POST['excluir_id_ativ']);
}

$ativs = $ativController->listarAtivs();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wid_ativth=device-wid_ativth, initial-scale=1.0">
    <link rel="stylesheet" href="Public/Css/style2.css">
    <link rel="shortcut icon" href="Public/Assets/_31554896-b491-466e-b129-d77e088c3b0c-removebg-preview.png" type="image/x-icon">
    <title>Atividades</title>
</head>
<body>
    <header>
        <a href="index.php">Voltar</a>
        <h1>Atividades</h1>
    </header>

    <form method="post">
        <input type="text" name="nome" placeholder="Nome Gincana" required>
        <textarea name="regras" cols="50" rows="5" placeholder="Regras" required></textarea>
        <button type="submit">Adicionar Usuário</button>
    </form>

    <?php
        $ativController->exibirListaAtivs();
    ?>

    <h2>Atualizar Atividade</h2>
    <form method="post">
        <select name="id_ativ">
            <?php foreach ($ativs as $ativ): ?>
                <option value="<?php echo $ativ['id_ativ']; ?>"><?php echo $ativ['id_ativ']; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="text" name="atualizar_nome" placeholder="Novo Nome Gincana" required>
        <textarea name="atualizar_regras" cols="50" rows="5" placeholder="Nova Regras" required></textarea>
        <button type="submit">Atualizar Atividade</button>
    </form>

    <h2>Excluir Atividade</h2>
    <form method="post">
        <select name="excluir_id_ativ">
            <?php foreach ($ativs as $ativ): ?>
                <option value="<?php echo $ativ['id_ativ']; ?>"><?php echo $ativ['nome']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir Atividade</button>
    </form>
</body>
</html>