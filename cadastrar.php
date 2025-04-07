<?php
require_once 'header.php';
require_once 'funcoes.php';

if (!isset($_SESSION["usuarios"])) {
    $_SESSION["usuarios"] = []; // Cria o array de usuários se não existir
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT); // Hash da senha

    $usuario = [
        "nome" => $nome,
        "senha" => $senha
    ];

    $_SESSION["usuarios"][] = $usuario; // Adiciona o usuário ao array

    echo "Usuário cadastrado com sucesso!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <form action="cadastrar.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>

<?php require_once 'footer.php'; ?>