<?php
$host = "localhost";
$dbname = "nome_do_banco";
$user = "usuario";
$pass = "senha";

$pdo = new PDO(
    "mysql:dbname=".$dbname.";host=".$host,
    $user,
    $pass
);
