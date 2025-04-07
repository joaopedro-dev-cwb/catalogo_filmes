<?php
require_once 'header.php';
require_once 'dados.php';
require_once 'funcoes.php';

$itens = getItens();
?>

<h2>Itens do Catálogo</h2>
<div class="itens-container">
    <?php foreach ($itens as $item): ?>
        <div class="item">
            <img src="<?= htmlspecialchars($item['imagem']) ?>" width="100">
            <h3><?= htmlspecialchars($item['titulo']) ?></h3>
            <p>Categoria: <?= htmlspecialchars($item['categoria']) ?></p>
            <a href="detalhes.php?id=<?= $item['id'] ?>">Ver mais</a>
        </div>
    <?php endforeach; ?>
</div>

<?php require_once 'footer.php'; ?>