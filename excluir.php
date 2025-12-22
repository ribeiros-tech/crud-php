<?php
require 'config.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if($id){
    $sql = $pdo->prepare("DELETE FROM new_table WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
}

header("Location: index.php");

?>

<link rel="stylesheet" href="assets/style.css">