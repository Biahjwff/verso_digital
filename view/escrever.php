<?php
    session_start();

    if (!isset($_SESSION['logado'])) {
        header('Location: ../index.php?erro=Sistema não está logado');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verso Digital</title>
  <!-- Fonte das letras -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&family=Rubik+Mono+One&family=VT323&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="font-family: 'Happy Monkey' , system-ui;" class="flex flex-col min-h-screen">
    <div class="flex flex-col flex-grow"> <!-- Esta div vai ocupar o restante da altura da página -->
        <!-- Cabeçalho fixo -->
        <header class="bg-white flex items-center py-4 shadow fixed top-0 w-full z-10">
          <h1 class="mx-4 text-2xl font-bold">Verso Digital</h1>
          <nav class="ml-auto flex space-x-4 mr-4">
            <a href="#" class="text-lg font-medium mx-4 hover:underline">Sobre Nós</a>
            <a href="#" class="text-lg font-medium hover:underline">Home</a>
          </nav>
        </header>

        <!-- Conteúdo Principal -->
        <main class="p-8 mt-16">
        <div class="flex space-x-4" >
            <div class="bg-yellow-200 border w-3/5 border-black rounded-lg py-4 ml-4 mt-4 px-8  shadow shadow-xl" >
                <h1>Criar Nova Obra</h1>
            </div>

            <div class="bg-yellow-200 border w-2/5 border-black rounded-lg py-4 ml-4 mt-4 px-8  shadow shadow-xl">
                <h1>aaaaaaaaaa</h1>
            </div>
        </div>   
        </main>
    </div>

    <!-- Rodapé -->
    <footer class="flex bg-white py-4 items-center mt-auto">
        <div class="mr-auto"></div>
        <div class="mx-auto">
            <p>&copy; 2024 Verso Digital. Todos os direitos reservados.</p>
        </div>
        <div class="ml-auto mr-4">
            <a href="#" class="text-blue-400 hover:underline">?</a>
        </div>
    </footer>
</body>
</html>
