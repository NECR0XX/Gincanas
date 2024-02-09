<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../Resources/Assets/dex66te-e97d5f90-5c30-4441-aaee-3905f1e2036d.png" type="image/x-icon">
    <link rel="stylesheet" href="../../Resources/Css/index.css">
    <script src="../../Resources/Js/script.js"></script>
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
            <img src="../../Resources/Assets/The_Backrooms.webp" alt="The Backrooms">
            <div class="text">
                <h2>Bem-vindo ao<br> The Backrooms -<br> O Mundo da Diversão!</h2>
                <p>Descubra o Lado Mais Divertido do Mundo!</p>
                <div class="fun">
                    <?php if(!isset($_SESSION['usuarioEmail']) || !isset($_SESSION['usuarioNomedeUsuario'])): ?>
                        <form action="../cadastro.php">
                            <button>Cadastre-se Agora!</button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <img class="smile2" src="../../Resources/Assets/dex66te-e97d5f90-5c30-4441-aaee-3905f1e2036d.png" alt=":D">
        <div class="comp1">
            <div class="not1">
                <h2>Explore o Desconhecido:</h2>
                <p>Junte-se a nós em uma jornada ao desconhecido, onde desafios divertidos aguardam por corajosos aventureiros. 
                Encare seus medos e descubra o que se esconde <br> nos cantos mais sombrios.</p>
            </div>
            <div class="not1">
                <h2>Atividades divertidas Inovadoras:</h2>
                <p>Prepare-se para gincanas únicas e emocionantes que testarão seus limites. Dos corredores assombrados <br>às salas enigmáticas,
                cada desafio foi projetado para proporcionar uma experiência verdadeiramente arrepiante.</p>
            </div>
            <img class="smile3" src="../../Resources/Assets/dex66te-e97d5f90-5c30-4441-aaee-3905f1e2036d.png" alt=":D">
            <div class="not1">
                <h2>Equipes e Competição:</h2>
                <p>Monte sua equipe de intrépidos exploradores <br>e enfrente outras equipes em uma competição sinistra. <br>Quem será capaz de superar os desafios e sair ileso? <br>
                A glória aguarda os mais destemidos.</p>
            </div>
        </div>        <div class="comp2">
            <div class="not1">
                <h2>Segurança em Primeiro Lugar:</h2>
                <p>Sua segurança é nossa prioridade. Todos os desafios<br> foram cuidadosamente projetados para garantir uma experiência intensa, mas segura. 
                Nossos monitores especializados estão sempre presentes para garantir <br>que você aproveite ao máximo, sem correr riscos desnecessários.</p>
            </div>
            <img class="smile4" src="../../Resources/Assets/dex66te-e97d5f90-5c30-4441-aaee-3905f1e2036d.png" alt=":D">
            <div class="not1">
                <h2>Siga-nos nas Redes Sociais:</h2>
                <p>Mantenha-se atualizado com as últimas novidades, <br>fotos dos bastidores e histórias arrepiantes. Siga-nos no 
                <a href="https://backrooms.fandom.com/pt-br/wiki/Backrooms_Wiki">Facebook</a>, 
                <a href="https://backrooms.fandom.com/pt-br/wiki/Backrooms_Wiki">Instagram</a> e <a href="https://backrooms.fandom.com/pt-br/wiki/Backrooms_Wiki">Twitter</a>.</p>
            </div>
            <div class="not1">
                <h2>Contato:</h2>
                <p>Dúvidas ou preocupações? Estamos aqui para ajudar.<br> Entre em contato conosco em back6766@hotmail.com ou ligue para o número 666-7777.</p>
            </div>
        </div>
    </section>
</body>
</html>