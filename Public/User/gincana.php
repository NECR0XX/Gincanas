<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/AtivController.php';

$ativController = new AtivController($pdo);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../Resources/Js/script.js"></script>
    <title>Document</title>
</head>
<body>
<header>
        <?php
            include '../../App/Providers/verifica_login.php'
        ?>
        <h3>Olá <?php echo $_SESSION['usuarioNomedeUsuario'], "!"; ?> </h3>
        <button id="log" onclick="logout()">Sair</button></div><br>
        <a href="index.php">index</a><br>
        <a href="gincana.php">gincana</a><br>
        <a href="times.php">times</a>
    </header>
    <section>
        <?php
            $ativController->exibirListaAtivs();
        ?>
        <h3>Quer participar? inscreva a sua <a href="equipa.php">equipe</a></h3>
    </section>
</body>
</html>