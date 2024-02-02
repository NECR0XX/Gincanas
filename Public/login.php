<?php
session_start();
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
            if(isset($_SESSION['nao_autenticado'])):
                echo '<div class="alert">Usuário ou senha inválidos!</div>';
                unset($_SESSION['nao_autenticado']);
            endif;
        ?>
    </header>
    <section>
        <h1>Site Foda</h1>
        <form action="../App/Providers/loginconfig.php" method="post">
            <input type="text" name="email" placeholder="E-mail" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button>Login</button>
        </form>
        <a href="cadastro.php">cadastro</a>
    </section>
</body>
</html>