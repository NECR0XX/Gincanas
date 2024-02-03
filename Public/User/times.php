<?php
session_start();
require_once '../../Config/config.php';
require_once '../../App/Controller/EquipeController.php';

$equipeController = new EquipeController($pdo);
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
        <a href="index.php">index</a><br>
        <a href="gincana.php">gincana</a><br>
        <a href="times.php">times</a>
    </header>
    <?php
        $equipeController->exibirListaEquipesOrdenadasPorPontos();
    ?>
</body>
</html>
