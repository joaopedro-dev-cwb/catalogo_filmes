<?php
require_once 'header.php';
require_once 'dados.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Verifica o usuário "admin" pré-definido
    if ($login === $usuario['login'] && password_verify($senha, $usuario['senha_hash'])) {
        $_SESSION['logado'] = true;
        session_regenerate_id(true);
        header('Location: protegido.php');
        exit();
    }

    // Verifica os usuários cadastrados via formulário (armazenados na sessão)
    if (isset($_SESSION['usuarios'])) {
        foreach ($_SESSION['usuarios'] as $user) {
            if ($login === $user['nome'] && password_verify($senha, $user['senha'])) {
                $_SESSION['logado'] = true;
                session_regenerate_id(true);
                header('Location: protegido.php');
                exit();
            }
        }
    }

    $erro = 'Credenciais inválidas!';
}
?>

<h2>Login</h2>
<?php if (isset($erro)) echo "<p style='color:red'>$erro</p>"; ?>
<form method="POST">
    <input type="text" name="login" placeholder="Usuário" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <button type="submit">Entrar</button>
</form>

<?php require_once 'footer.php'; ?>