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
    <link rel="shortcut icon" href="../../Resources/Assets/dex66te-e97d5f90-5c30-4441-aaee-3905f1e2036d.png" type="image/x-icon">
    <script src="../../Resources/Js/script.js"></script>
    <link rel="stylesheet" href="../../Resources/Css/times.css">
    <title>The Backrooms</title>
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
        <?php if(isset($_SESSION['usuarioEmail']) && isset($_SESSION['usuarioNomedeUsuario'])): ?>
            <button id="log" onclick="logout()">Sair</button>
            <h3>Olá <?php echo $_SESSION['usuarioNomedeUsuario'], "!"; ?> </h3>
        <?php else: ?>
            <h3>Olá</h3>
        <?php endif; ?>
        
        <a href="index.php">Index</a>
        <a href="gincana.php">Gincana</a>
        <a href="times.php">Times</a>
        <a href="../login.php">Login</a>
    </div>

    <div id="main">
        <header>
            <span style="font-size:30px;cursor:pointer" onclick="toggleSidebar()">&#9776; Menu</span>
        </header>
        <div class="light"></div>
        <img class="smile" src="../../Resources/Assets/dex66te-e97d5f90-5c30-4441-aaee-3905f1e2036d.png" alt=":D">
        <img class="smile2" src="../../Resources/Assets/dex66te-e97d5f90-5c30-4441-aaee-3905f1e2036d.png" alt=":D">
        <div class="container">
            <p>Nesta seção, destacamos as equipes intrépidas que se aventuraram nas profundezas das backrooms. 
            Nas sombras da competição, desenrola-se um espetáculo de habilidades impressionantes, enquanto enfrentam desafios que desafiam os mais destemidos. 
            Nosso ranking semanal reflete os pontos conquistados através de astúcia, coragem e, quem sabe, pactos sombrios.</p>
            <?php
                $equipeController->exibirListaEquipesOrdenadasPorPontos();
            ?>
        </div>
        <img class="smile3" src="../../Resources/Assets/dex66te-e97d5f90-5c30-4441-aaee-3905f1e2036d.png" alt=":D">
        <img class="smile4" src="../../Resources/Assets/dex66te-e97d5f90-5c30-4441-aaee-3905f1e2036d.png" alt=":D">
        <img class="smile5" src="../../Resources/Assets/dex66te-e97d5f90-5c30-4441-aaee-3905f1e2036d.png" alt=":D">
    </div>
</body>
</html>