<?php
    // Captura o erro da query string, se existir
    $erro = isset($_GET['erro']) ? $_GET['erro'] : '';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se controla AI</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[url('img/login.png')] bg-cover bg-center bg-no-repeat min-h-screen" >

<!-- Cabeçalho fixo -->
<header class="bg-white flex items-center py-4 shadow fixed top-0 w-full z-10">
    <h1 class="mx-4 text-2xl mx-4 font-bold">Verso Digital</h1>
    <nav class="ml-auto flex space-x-4 mr-4">
      <a href="#" class="text-lg font-medium mx-4 hover:underline">Sobre Nós</a>
      <a href="principal.php" class="text-lg font-medium hover:underline">Home</a>
    </nav>
  </header>



<div class="flex space-x-4" >

<div class="flex items-center justify-center mt-auto min-h-screen w-1/2"> <!-- Tudo que ta aqui dentro fica na metade esquerda da página-->
        <form class=" rounded-lg p-8 w-full min-h-screen items-center justify-center max-w-md" action="login.php" method="POST">
            <div class="mt-20">
            <h2 class="text-2xl font-bold text-center mb-6">Entrar</h2>
            
            <?php if (isset($erro)): ?>
                <div class="mb-4 text-red-400 text-center">
                    <?= $erro; ?>
                </div>
            <?php endif; ?>

            <div class="mb-4">
                <label class="block text-sm font-medium mb-2" for="usuario">
                    Usuário
                </label>
                <input class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="usuario" name="usuario" type="text" placeholder="Usuário" required>
            </div>

            <div class="mb-6">
                <label class="block  text-sm font-medium mb-2" for="senha">
                    Senha
                </label>
                <input class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" id="senha" name="senha" type="password" placeholder="**********" required>
            </div>

            <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" type="submit">
                Entrar
            </button>
            
            <div class="mt-4 text-center">
                <a class="text-sm text-blue-400 hover:text-blue-500" href="#">Esqueceu sua senha?</a>
            </div>
            </div>
        </form>
    </div>

                <div class="w-1/2 mt-16" >
                    aaaaaaaaa
                </div>

    </div>

   
</body>
</html>
