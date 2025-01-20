<?php
session_start();

// Define uma senha inicial, se não houver na sessão
if (!isset($_SESSION['senha'])) {
    $_SESSION['senha'] = '1234'; // Senha padrão inicial
}

function login() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
        $senha = isset($_POST['senha']) ? $_POST['senha'] : '';

        // Validação de login
        if ($usuario === 'bianca' && $senha === $_SESSION['senha']) {
            $_SESSION['logado'] = true;
            $_SESSION['usuario'] = $usuario;

            header('Location: principal.php'); // Redireciona para a página principal
            exit;
        } else {
            session_destroy();
            header('Location: login.php?erro=Usuário ou senha incorretos');
            exit;
        }
    }
}

login();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php
    // Exibe mensagem de erro, se houver
    if (isset($_GET['erro'])) {
        echo "<p style='color: red;'>{$_GET['erro']}</p>";
    }
    ?>
    <form method="POST" action="">
        <label for="usuario">Usuário:</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>
