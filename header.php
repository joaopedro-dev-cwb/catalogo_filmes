<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Catálogo Online</title>
    <style>
        .item { border: 1px solid #ccc; padding: 10px; margin: 10px; }
        .itens-container { display: flex; flex-wrap: wrap; }
    </style>
</head>
<body>
    <header>
        <h1>Catálogo Online</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="filtrar.php">Filtrar</a>
            <?php if (isset($_SESSION['logado'])): ?>
                <a href="protegido.php">Admin</a>
                <a href="logout.php">Sair</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="cadastrar.php">Cadastrar</a>
            <?php endif; ?>
            
        </nav>
    </header>
    <main></main>