<?php
// Retorna as arrays integradas após receber itens adicionais, ou retorna apenas a array de itens caso receba null
function getItens() {
    global $itens;
    $itens_adicionais = $_SESSION['itens_adicionais'] ?? [];
    $resultado = array_merge($itens, $itens_adicionais);
    return $resultado;
}

// Usa getItens() como parâmetro e retorna apenas a parte categoria da array itens 
function getCategorias() {
    $itens = getItens();
    $categorias_column = array_column($itens, 'categoria');
    $categorias = array_unique($categorias_column);
    return $categorias;
}

// Busca itens por ID a partir de getItens() se o ID for encontrado retorna o item
function buscarItemPorId($id) {
    $itens = getItens();
    foreach ($itens as $item) {
        if ($item['id'] == $id) return $item;
    }
    return null;
}

//Garante que a página protegida seja acessível somente se o usuário estiver logado
function protegerPagina() {
    if (!isset($_SESSION['logado']) || !$_SESSION['logado']) {
        header('Location: login.php');
        exit();
    }
}
?>