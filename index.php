<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script>
        // Configuração inicial: define uma senha padrão no LocalStorage
        if (!localStorage.getItem('senha')) {
            localStorage.setItem('senha', '1234'); // Senha padrão inicial
        }

        // Função para realizar o login
        function fazerLogin(event) {
            event.preventDefault(); // Evita o envio do formulário

            const usuario = document.getElementById('usuario').value;
            const senha = document.getElementById('senha').value;
            const senhaArmazenada = localStorage.getItem('senha');

            if (usuario === 'bianca' && senha === senhaArmazenada) {
                window.location.href = 'view/principal.php'; // Redireciona para a página principal
            } else {
                alert('Usuário ou senha incorretos!');
            }
        }
    </script>
</head>
<body>
    <h2>Login</h2>
    <form onsubmit="fazerLogin(event)">
        <label for="usuario">Usuário:</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br><br>

        <button type="submit">Entrar</button>
    </form>
</body>
</html>
