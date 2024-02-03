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
    <link rel="stylesheet" href="../../Resources/Css/times.css">
    <title>Document</title>
    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            var main = document.getElementById('main');

            if (sidebar.style.width === '250px') {
                sidebar.style.width = '0';
                main.style.marginLeft = '0';
            } else {
                sidebar.style.width = '250px';
                main.style.marginLeft = '250px';
            }
        }
    </script>
</head>
<body>
    <div id="sidebar">
        <?php
            include '../../App/Providers/verifica_login.php'
        ?>
        <button id="log" onclick="logout()">Sair</button>
        
        <h3>Olá <?php echo $_SESSION['usuarioNomedeUsuario'], "!"; ?> </h3>
        
        <a href="index.php">Index</a>
        <a href="gincana.php">Gincana</a>
        <a href="times.php">Times</a>
    </div>

    <div id="main">
        <header>
            <span style="font-size:30px;cursor:pointer" onclick="toggleSidebar()">&#9776; Menu</span>
        </header>

        <div class="container">
            <?php
                $equipeController->exibirListaEquipesOrdenadasPorPontos();
            ?>
        </div>
    </div>
</body>
</html>