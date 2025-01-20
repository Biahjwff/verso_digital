<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Livros</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&family=Rubik+Mono+One&family=VT323&display=swap"
    rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../controller/meus_livros_controller.js"></script>
</head>

<body style="font-family: 'Happy Monkey' , system-ui;">
    <!-- Cabeçalho fixo -->
    <?php include "cabecalho.php"; ?>
    <!-- Cabeçalho fixo -->
    <div class="bg-yellow-100 min-h-screen p-8 pt-24">
        <div class="bg-white p-8 rounded-lg shadow-xl w-full max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8 text-yellow-600">Meus Livros</h2>

            <!-- Container onde os livros serão exibidos -->
            <div id="livros-container"></div>
        </div>
    </div>
    

    <!-- Cabeçalho fixo -->
    <?php include "footer.php"; ?>
    <!-- Cabeçalho fixo -->
</body>

</html>