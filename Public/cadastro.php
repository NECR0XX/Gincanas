<?php
session_start();

require_once '../Config/config.php';
require_once '../App/Controller/LoginController.php';

$loginController = new LoginController($pdo);

if (isset($_POST['nome'])
    && isset($_POST['email'])
    && isset($_POST['senha']))
    {
    $loginController->criarLogin($_POST['nome'], $_POST['email'], $_POST['senha']);
    header('Location: cadastro.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php
            if (isset($_SESSION['mensagem'])) {
                echo '<div class="alert"><p>' . $_SESSION['mensagem'] . '</p></div>';
                unset($_SESSION['mensagem']);
            }
        ?>
    </header>
    <section>
        <h1>Site Foda</h1>
        <form method="post">
            <input type="nome" name="nome" placeholder="Usuário" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Cadastrar</button>
        </form>
        <a href="login.php">Login</a>
    </section>
</body>
</html>