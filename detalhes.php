<?php
require_once 'header.php';
require_once 'dados.php';
require_once 'funcoes.php';

$item = buscarItemPorId($_GET['id'] ?? 0);

if (!$item) {
    header('Location: index.php');
    exit();
}
?>

<div class="item-detalhe">
    <h2><?= htmlspecialchars($item['titulo']) ?></h2>
    <img src="<?= htmlspecialchars($item['imagem']) ?>" width="200">
    <p>Categoria: <?= htmlspecialchars($item['categoria']) ?></p>
    <p><?= htmlspecialchars($item['descricao']) ?></p>
    <a href="index.php">Voltar</a>
</div>

<?php require_once 'footer.php'; ?>