<?php
include '../../Config/config.php';
if (!isset($_GET['id'])) {
    header('Location: ../../Public/Adm/equip.php');
    exit;
}
$id_equipes = $_GET['id'];

$stmt = $pdo->prepare('SELECT * FROM equipes WHERE id_equipes = ?');
$stmt->execute([$id_equipes]);
$appointment = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$appointment) {
    header('Location: ../../Public/Adm/equip.php');
    exit;   
}
$nome = $appointment['nome'];
$participantes = $appointment['participantes'];   
$cor = $appointment['cor'];
$pontos = $appointment['pontos'];
$categoria = $appointment['categoria'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../public/css/style3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Resources/Css/adm3.css">
    <title>Atualizar Conta</title>
</head>
<body>
    
<h1>Atualizar Conta</h1>
<form method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?php echo $nome; ?>" required></br>

    <label for="participantes">Participantes:</label>
    <input type="text" name="participantes" value="<?php echo $participantes; ?>" required></br>

    <label for="cor">Cor:</label>
    <input type="text" name="cor" value="<?php echo $cor; ?>" required list="cores"></br>
        <datalist id="cores"><br>Escolha entre esses
            <option value="Branco">
            <option value="Preto">
            <option value="Vermelho">
            <option value="Verde">
            <option value="Azul">
            <option value="Amarelo">
            <option value="Laranja">
        </datalist>

    <label for="pontos">Pontos:</label>
    <input type="number" name="pontos" value="<?php echo $pontos; ?>" required></br>

    <label for="categoria">Categoria:</label>
    <input type="text" name="categoria" value="<?php echo $categoria; ?>" required list="cat"></br>
        <datalist id="cat"><br>Escolha entre esses
            <option value="Dança das cadeiras">
            <option value="Cabo de guerra">
            <option value="Caça ao tesouro">
            <option value="Torta na cara">
        </datalist>

    <button type="submit">Atualizar</button>
</form>

</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $participantes = $_POST['participantes'];
    $cor = $_POST['cor'];
    $pontos = $_POST['pontos'];
    $categoria = $_POST['categoria'];

    $stmt = $pdo->prepare('UPDATE equipes SET nome = ?, participantes = ?, cor = ?, pontos = ?, categoria = ? WHERE id_equipes = ?');
    $stmt->execute([$nome, $participantes, $cor, $pontos, $categoria, $id_equipes]);
    header('Location: ../../Public/Adm/equip.php');
    exit;
}