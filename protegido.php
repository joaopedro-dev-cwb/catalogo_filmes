<?php
require_once 'header.php';
require_once 'dados.php';
require_once 'funcoes.php';
protegerPagina();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $novoItem = [
        'id' => max(array_column(getItens(), 'id')) + 1,
        'titulo' => htmlspecialchars($_POST['titulo']),
        'imagem' => htmlspecialchars($_POST['imagem']),
        'categoria' => htmlspecialchars($_POST['categoria']),
        'descricao' => htmlspecialchars($_POST['descricao'])
    ];
    
    $_SESSION['itens_adicionais'][] = $novoItem;
    header('Location: index.php');
    exit();
}
?>

<h2>Adicionar Novo Item</h2>
<form method="POST">
    <input type="text" name="titulo" placeholder="Título" required>
    <input type="text" name="imagem" placeholder="URL da Imagem" required>
    <input type="text" name="categoria" placeholder="Categoria" required>
    <textarea name="descricao" placeholder="Descrição" required></textarea>
    <button type="submit">Adicionar</button>
</form>

<?php require_once 'footer.php'; ?>