<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/AtivController.php';

$ativController = new AtivController($pdo);
$ativs = $ativController->listarAtivs();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../Resources/Assets/dex66te-e97d5f90-5c30-4441-aaee-3905f1e2036d.png" type="image/x-icon">
    <script src="../../Resources/Js/script.js"></script>
    <link rel="stylesheet" href="../../Resources/Css/gincana.css">
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
        <section>
        <img class="smile" src="../../Resources/Assets/dex66te-e97d5f90-5c30-4441-aaee-3905f1e2036d.png" alt=":D">
            <div class="container">
                <p>Bem-vindos aos desafios das backrooms, onde equipes audaciosas enfrentam desafios que desafiam a própria essência do destemor. 
                Encare a TV, um portal para o desconhecido; os 9 Cadáveres, testemunhas silenciosas de mistérios insondáveis; 
                o projetor de luz e a silhueta, uma dança entre sombras e revelações; e o relógio, marcando o tempo em um universo onde as horas têm significados obscuros. 
                Preparem-se para uma jornada onde coragem e astúcia são as chaves para desvendar os enigmas mais sombrios das backrooms.</p>
            </div>
            <img class="smile2" src="../../Resources/Assets/dex66te-e97d5f90-5c30-4441-aaee-3905f1e2036d.png" alt=":D">
            <img class="smile3" src="../../Resources/Assets/dex66te-e97d5f90-5c30-4441-aaee-3905f1e2036d.png" alt=":D">
        <div class="atividades">
            <ul>
                <?php foreach ($ativs as $ativ): ?>
                    <li>
                        <div class="atividade-box">
                            <h2><?php echo $ativ['nome']; ?></h2>
                            <p><?php echo $ativ['regras']; ?></p>
                            <strong><p>Data do evento: <?php echo $ativ['data']; ?></p></strong>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <img class="smile4" src="../../Resources/Assets/dex66te-e97d5f90-5c30-4441-aaee-3905f1e2036d.png" alt=":D">
        <img class="smile5" src="../../Resources/Assets/dex66te-e97d5f90-5c30-4441-aaee-3905f1e2036d.png" alt=":D">
        <h3>
            <?php if(isset($_SESSION['usuarioEmail']) && isset($_SESSION['usuarioNomedeUsuario'])): ?>
                Acha que é capaz? <a href="equipa.php">cadastre a sua equipe</a>
            <?php else: ?>
                <span class="aviso">Para cadastrar a sua equipe, é necessário <a href="../../Public/login.php">logar</a> ou <a href="../../Public/cadastro.php">cadastrar-se</a>.</span>
            <?php endif; ?>
        </h3>

        </section>
    </div>
</body>
</html>

