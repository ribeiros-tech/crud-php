<?php
require 'config.php';

<link rel="stylesheet" href="assets/style.css">

$nome  = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

if (!$nome || !$email) {
    header("Location: cadastrar.php");
    exit;
}

$sql = $pdo->prepare(
    "INSERT INTO new_table (nome, email) VALUES (:nome, :email)"
);
$sql->bindValue(':nome', $nome);
$sql->bindValue(':email', $email);
$sql->execute();

header("Location: index.php");
exit;

