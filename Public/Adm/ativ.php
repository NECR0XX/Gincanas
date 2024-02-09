<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/AtivController.php';

$ativController = new AtivController($pdo);

if (isset($_POST['nome']) &&
    isset($_POST['regras']) &&
    isset($_POST['data'])) 
{
    $ativController->criarAtiv($_POST['nome'], $_POST['regras'], $_POST['data']);
    header('Location: #');
}

// Atualiza Ativ
if (isset($_POST['id_ativ']) && isset($_POST['atualizar_nome']) && isset($_POST['atualizar_regras']) && isset($_POST['atualizar_data'])) {
    $ativController->atualizarAtiv($_POST['id_ativ'], $_POST['atualizar_nome'], $_POST['atualizar_regras'], $_POST['atualizar_data']);
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
    <link rel="shortcut icon" href="../../Resources/Assets/dex66te-e97d5f90-5c30-4441-aaee-3905f1e2036d.png" type="image/x-icon">
    <link rel="stylesheet" href="../../Resources/Css/adm2.css">
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
        <input type="datetime-local" name="data" required>
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
        <input type="datetime-local" name="atualizar_data" required>
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