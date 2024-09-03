<?php
include 'conexao.php';

if (isset($_GET['nome'])) {
    $nome = $_GET['nome'];

    $sql = 'SELECT * FROM contatos WHERE nome LIKE :nome';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nome' => "%$nome%"]);

    $contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($contatos) {
        echo '<h1>Resultados da Pesquisa:</h1>';
        echo '<ul>';
        foreach ($contatos as $contato) {
            echo '<li>' . htmlspecialchars($contato['nome']) . ' - ' . htmlspecialchars($contato['telefone']) . '</li>';
        }
        echo '</ul>';
    } else {
        echo 'Nenhum registro encontrado.';
    }
}
?>
<a href="pesquisar.html">Voltar</a>
