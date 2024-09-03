<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];

    $sql = 'INSERT INTO contatos (nome, telefone) VALUES (:nome, :telefone)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nome' => $nome, 'telefone' => $telefone]);

    echo 'Registro cadastrado com sucesso!';
}
?>
<a href="index.html">Voltar</a>
