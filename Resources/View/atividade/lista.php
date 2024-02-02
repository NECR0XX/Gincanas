<!DOCTYPE html>
<html>
<head>
    <title>Lista de Atividades</title>
</head>
<body>
    <fieldset>
        <legend><h1>Lista de Atividades</h1></legend>
            <table border="1">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Regras</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <?php foreach ($ativs as $ativ): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $ativ['nome']; ?></td>
                            <td><?php echo $ativ['regras']; ?></td>
                            <td><a href="../../Public/User/equipa.php">Montar equipe</a></td>
                        </tr>
                <?php endforeach; ?>
                <tbody>
            </table>
    </fieldset>
</body>
</html>