<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM new_table");
if($sql->rowCount() >0 ){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Usuários</title>

    <!-- AQUI entra o CSS -->
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">

    <h1>Listagem de Usuários</h1>

    <a href="cadastrar.php">+ Cadastrar Usuário</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($lista as $new_table): ?>
            <tr>
                <td><?= $new_table['id']; ?></td>
                <td><?= $new_table['nome']; ?></td>
                <td><?= $new_table['email']; ?></td>
                <td>
                    <a href="editar.php?id=<?= $new_table['id']; ?>">Editar</a> |
                    <a href="excluir.php?id=<?= $new_table['id']; ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>

</div>

</body>
</html>
