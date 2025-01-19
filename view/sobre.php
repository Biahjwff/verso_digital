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
    <!-- fonte das letras -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&family=Rubik+Mono+One&family=VT323&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
 
</head>
<body style="font-family: 'Happy Monkey' , system-ui;" 
      class="bg-[url('../IMG/sobre.png')]  bg-center bg-no-repeat min-h-screen flex flex-col">
  <!-- Cabeçalho fixo -->
  <header class="bg-white flex items-center py-4 shadow fixed top-0 w-full z-10">
    <h1 class="mx-4 text-2xl mx-4 font-bold">Verso Digital</h1>
    <nav class="ml-auto flex space-x-4 mr-4">
      <a href="principal.php" class="text-lg font-medium hover:underline">Home</a>
    </nav>
  </header>

 
  <div class="flex justify-center items-center h-screen">
  <div class="text-center">
    <p class="pr-96 pl-80"> <b> Bem-vindo ao Verso Digital!</b> <br> Somos uma plataforma gratuita dedicada a incentivar <br> a leitura e a escrita. Aqui, você encontrará <br> uma comunidade apaixonada por literatura,<br> onde leitores e escritores podem se conectar,<br> compartilhar ideias e explorar novas histórias.<br> Nosso objetivo é celebrar o poder das palavras <br> e oferecer recursos para desenvolver <br> sua criatividade. <br> Junte-se a nós nessa jornada literária!</p>
  </div>
</div>
 

  <footer class="flex bg-white py-4 items-center fixed bottom-0 w-full">

  <div class="mr-auto" ></div>

  <div class="mx-auto">
    <p>&copy; 2024 Verso Digital. Todos os direitos reservados.</p>
  </div>

  <div class="ml-auto mr-4">
    <a href="#" class="text-blue-400 hover:underline">?</a>
  </div>
  
  </footer>


</body>
</html>
