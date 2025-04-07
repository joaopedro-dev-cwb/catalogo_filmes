<?php
function getItens() {
    global $itens;
    $itens_adicionais = $_SESSION['itens_adicionais'] ?? [];
    $resultado = array_merge($itens, $itens_adicionais);
    return $resultado;
}

function getCategorias() {
    $itens = getItens();
    $categorias_column = array_column($itens, 'categoria');
    $categorias = array_unique($categorias_column);
    return $categorias;
}

function buscarItemPorId($id) {
    $itens = getItens();
    foreach ($itens as $item) {
        if ($item['id'] == $id) return $item;
    }
    return null;
}

function protegerPagina() {
    if (!isset($_SESSION['logado']) || !$_SESSION['logado']) {
        header('Location: login.php');
        exit();
    }
}
?>