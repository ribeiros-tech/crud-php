<?php
require 'config.php';
?>

<link rel="stylesheet" href="assets/style.css">

<div class="container">

    <h1>Cadastrar Usuário</h1>

    <form method="POST" action="cadastrar_action.php" class="form-box">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <button type="submit">Salvar</button>

    </form>

    <a href="index.php" class="voltar">← Voltar para a lista</a>

</div>

