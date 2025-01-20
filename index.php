<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&family=Rubik+Mono+One&family=VT323&display=swap"
        rel="stylesheet">
    <script src="../controller/usuario_controller.js"></script>
    <script>
        function paginaCadastro() {
            window.location.href = 'view/cadastro.php';
        }
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="font-family: 'Happy Monkey' , system-ui;"
    class="bg-yellow-100 flex justify-center items-center min-h-screen m-0">
    <div class="bg-yellow-200 p-8 rounded-lg shadow-xl w-full max-w-sm">
        <h2 class="text-2xl font-semibold text-center mb-8">Login</h2>

        <form class="space-y-4">
            <div>
                <label for="usuario" class="block text-sm font-medium text-gray-700">Usuário</label>
                <input type="text" id="usuario" name="usuario" class="w-full p-3 border border-gray-300 rounded-md"
                    required>
            </div>

            <div>
                <label for="senha" class="block text-sm font-medium text-gray-700">Senha</label>
                <input type="password" id="senha" name="senha" class="w-full p-3 border border-gray-300 rounded-md"
                    required>
            </div>

            <div class="space-y-4">
                <button type="button" onClick="fazerLogin()"
                    class="w-full bg-yellow-500 text-gray-800 p-3 rounded-md hover:bg-yellow-400 transition">Entrar</button>
                <button type="button" onClick="paginaCadastro()" class="w-full bg-transparent border border-yellow-500 text-yellow-500 p-3 rounded-md hover:bg-yellow-300 transition">Cadastrar</button>
            </div>
        </form>
    </div>
</body>

</html>