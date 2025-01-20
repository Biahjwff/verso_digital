<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Senha</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&family=Rubik+Mono+One&family=VT323&display=swap"
    rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
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
<?php include "cabecalho.php"; ?>

<body style="font-family: 'Happy Monkey' , system-ui;" class="bg-yellow-100">
    <div class="flex flex-col justify-center items-center mt-12 min-h-screen">
        <div class="bg-yellow-200 border border-black p-8 rounded-lg shadow-xl w-full max-w-sm ">
            <h2 class="text-2xl font-semibold text-center mb-8">Alterar Senha</h2>

            <form onsubmit="alterarSenha(event)" class="space-y-4">
                <div>
                    <label for="senha_atual" class="block text-sm font-medium">Senha Atual</label>
                    <input type="password" id="senha_atual" name="senha_atual"
                        class="w-full p-3 border border-yellow-300 rounded-md" required>
                </div>

                <div>
                    <label for="nova_senha" class="block text-sm font-medium">Nova Senha</label>
                    <input type="password" id="nova_senha" name="nova_senha"
                        class="w-full p-3 border border-yellow-300 rounded-md" required>
                </div>

                <div>
                    <label for="confirmar_senha" class="block text-sm font-medium">Confirmar Nova
                        Senha</label>
                    <input type="password" id="confirmar_senha" name="confirmar_senha"
                        class="w-full p-3 border border-yellow-300 rounded-md" required>
                </div>

                <div class="space-y-4">
                    <button type="submit"
                        class="w-full bg-yellow-500 text-gray-800 p-3 rounded-md hover:bg-yellow-400 transition">Alterar
                        Senha</button>
                </div>
            </form>

            <div class="mt-4 text-center">
                <a href="principal.php" class="text-yellow-500 hover:text-yellow-400">Voltar</a>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
</body>

</html>