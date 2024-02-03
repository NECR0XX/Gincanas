<!DOCTYPE html>
<html>
<head>
    <title>Lista de Equipes</title>
</head>
<body>
    <fieldset>
        <legend><h1>Lista de Equipes</h1></legend>
            <table border="1">
                <thead>
                    <tr>
                        <th>Equipe</th>
                        <th>Participantes</th>
                        <th>Cor da equipe</th>
                        <th>Pontos</th>
                        <th>Categoria</th>
                    </tr>
                </thead>
                <?php foreach ($equipes as $equipe): ?>
                    <tbody>
                        <tr>
                            <td><?php echo $equipe['nome']; ?></td>
                            <td><?php echo $equipe['participantes']; ?></td>
                            <td><?php echo $equipe['cor']; ?></td>
                            <td><?php echo $equipe['pontos']; ?></td>
                            <td><?php echo $equipe['categoria']; ?></td>
                        </tr>
                <?php endforeach; ?>
                <tbody>
            </table>
    </fieldset>
</body>
</html>