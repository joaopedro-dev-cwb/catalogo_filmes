<?php
require_once 'header.php';
require_once 'dados.php';
require_once 'funcoes.php';

$filtros = [
    'categoria' => $_GET['categoria'] ?? '',
];

$itens_filtrados = array_filter(getItens(), function($item) use ($filtros) {
    return empty($filtros['categoria']) || $item['categoria'] == $filtros['categoria'];
});

?>

<h2>Filtrar Itens</h2>
<form method="GET">
    <label>Categoria:
        <select name="categoria">
            <option value="">Todas</option>
            <?php foreach (getCategorias() as $cat): ?>
                <option <?= $cat == $filtros['categoria'] ? 'selected' : '' ?>><?= $cat ?></option>
            <?php endforeach; ?>
        </select>
    </label>

    <button type="submit">Filtrar</button>
</form>

<div class="itens-container">
    <?php foreach ($itens_filtrados as $item): ?>
        <div class="item">
            <img src="<?= htmlspecialchars($item['imagem']) ?>" width="100">
            <h3><?= htmlspecialchars($item['titulo']) ?></h3>
            <p>Categoria: <?= htmlspecialchars($item['categoria']) ?></p>
            <a href="detalhes.php?id=<?= $item['id'] ?>">Ver mais</a>
        </div>
        <?php endforeach; ?>
</div>

<?php require_once 'footer.php'; ?>