<?php
session_start();
require_once '../../Config/config.php';
require_once '../../App/Controller/EquipeController.php';

$equipeController = new EquipeController($pdo);

if (isset($_POST['nome']) && 
    isset($_POST['participantes']) &&
    isset($_POST['cor']) &&
    isset($_POST['categoria'])) 
{
    $equipeController->criarEquipe2($_POST['nome'], $_POST['participantes'], $_POST['cor'], $_POST['categoria']);
    header('Location: #');
}

$equipes = $equipeController->listarEquipes();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../Resources/Assets/dex66te-e97d5f90-5c30-4441-aaee-3905f1e2036d.png" type="image/x-icon">
    <script src="../../Resources/Js/script.js"></script>
    <link rel="stylesheet" href="../../Resources/Css/equipa.css">
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
            <select name="categoria" placeholder="Categoria" required>
                <option value="">Escolha uma categoria</option>
                <option value="A TV">A TV</option>
                <option value="Os 9 Cadáveres">Os 9 Cadáveres</option>
                <option value="O projetor de luz e a silhueta">O projetor de luz e a silhueta</option>
                <option value="O relógio">O relógio</option>
            </select>
            <button type="submit">Adicionar Equipe</button>
        </form>
    </div>
</body>
</html>