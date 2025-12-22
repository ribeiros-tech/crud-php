<?php
require 'config.php';

$usuario = [];
$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $sql = $pdo->prepare("SELECT * FROM new_table WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $usuario = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header("Location: index.php");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="container">
    <h1>Editar Usuário</h1>

    <form method="POST" action="editar_action.php" class="form">
        <input type="hidden" name="id" value="<?=$usuario['id'];?>">

        <label>
            Nome
            <input type="text" name="nome" value="<?=$usuario['nome'];?>" required>
        </label>

        <label>
            Email
            <input type="email" name="email" value="<?=$usuario['email'];?>" required>
        </label>

        <button type="submit">Atualizar</button>
        <a href="index.php" class="voltar">Cancelar</a>
    </form>
</div>

</body>
</html>
