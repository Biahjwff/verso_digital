<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verso Digital - Cadastro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&family=Rubik+Mono+One&family=VT323&display=swap"
        rel="stylesheet">
    <script>
        function validarSenhas() {
            const senha = document.getElementById('nova_senha').value;
            const confirmarSenha = document.getElementById('confirmar_senha').value;

            if (senha !== confirmarSenha) {
                alert('As senhas não coincidem!');
                return false;
            }
            return true;
        }
    </script>
</head>

<body style="font-family: 'Happy Monkey' , system-ui;" class="bg-yellow-100 flex justify-center items-center min-h-screen m-0">
    <div class="bg-yellow-200 p-8 rounded-lg shadow-xl w-full max-w-sm">
        <h2 class="text-2xl font-semibold text-center mb-8">Cadastro</h2>

        <form onsubmit="return validarSenhas()" class="space-y-4">
            <div>
                <label for="usuario" class="block text-sm font-medium text-gray-700">Usuário</label>
                <input type="text" id="usuario" name="usuario" class="w-full p-3 border border-gray-300 rounded-md"
                    required>
            </div>

            <div>
                <label for="nova_senha" class="block text-sm font-medium text-gray-700">Nova Senha</label>
                <input type="password" id="nova_senha" name="nova_senha"
                    class="w-full p-3 border border-gray-300 rounded-md" required>
            </div>

            <div>
                <label for="confirmar_senha" class="block text-sm font-medium text-gray-700">Confirmar Nova
                    Senha</label>
                <input type="password" id="confirmar_senha" name="confirmar_senha"
                    class="w-full p-3 border border-gray-300 rounded-md" required>
            </div>

            <div class="space-y-4">
                <button type="submit"
                    class="w-full bg-yellow-500 text-gray-800 p-3 rounded-md hover:bg-yellow-400 transition">Cadastrar</button>
            </div>
        </form>
    </div>
</body>

</html>