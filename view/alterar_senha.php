<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Senha</title>
    <script>
        // Função para alterar a senha
        function alterarSenha(event) {
            event.preventDefault(); // Evita o envio do formulário

            const senhaAtual = document.getElementById('senha_atual').value;
            const novaSenha = document.getElementById('nova_senha').value;
            const confirmarSenha = document.getElementById('confirmar_senha').value;
            const senhaArmazenada = localStorage.getItem('senha');

            if (senhaAtual !== senhaArmazenada) {
                alert('Senha atual incorreta!');
            } else if (novaSenha === senhaArmazenada) {
                alert('A nova senha não pode ser igual à senha atual!');
            } else if (novaSenha !== confirmarSenha) {
                alert('A nova senha e a confirmação não coincidem!');
            } else if (novaSenha.length < 4) {
                alert('A nova senha deve ter pelo menos 4 caracteres!');
            } else {
                // Salva a nova senha no LocalStorage
                localStorage.setItem('senha', novaSenha);
                alert('Senha alterada com sucesso!');
                window.location.href = 'principal.php'; // Redireciona para a página principal
            }
        }
    </script>
</head>
<body>
    <h2>Alterar Senha</h2>
    <form onsubmit="alterarSenha(event)">
        <label for="senha_atual">Senha Atual:</label><br>
        <input type="password" id="senha_atual" name="senha_atual" required><br><br>

        <label for="nova_senha">Nova Senha:</label><br>
        <input type="password" id="nova_senha" name="nova_senha" required><br><br>

        <label for="confirmar_senha">Confirmar Nova Senha:</label><br>
        <input type="password" id="confirmar_senha" name="confirmar_senha" required><br><br>

        <button type="submit">Alterar Senha</button>
    </form>
    <a href="principal.html">Voltar</a>
</body>
</html>
