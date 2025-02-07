<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcerias</title>
    <!-- fonte das letras -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&family=Rubik+Mono+One&family=VT323&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="font-family: 'Happy Monkey' , system-ui;" class="flex flex-col min-h-screen bg-yellow-100">

<?php include "cabecalho.php" ?>

    <main class="container mx-auto px-6 py-10">
        <!-- Convite para Parcerias -->
        <section class="mb-10">
            <br>
            <h2 class="text-2xl font-bold  mb-4">Convite para Parcerias</h2>
            <p class="text-lg">Estamos em busca de editoras, autores independentes, e organizações que queiram <br> colaborar conosco para promover literatura digital e gratuita. Se você compartilha <br> nossa paixão por democratizar o acesso à leitura, entre em contato!</p>
        </section>

        <!-- Benefícios -->
        <section class="mb-10">
            <h2 class="text-2xl font-bold  mb-4">Benefícios das Parcerias</h2>
            <ul class="list-disc pl-6 text-lg">
                <li>Aumente sua visibilidade em uma comunidade apaixonada por literatura.</li>
                <li>Contribua para o acesso gratuito a e-books e materiais educativos.</li>
                <li>Participe de eventos literários e iniciativas exclusivas.</li>
            </ul>
        </section>

        <!-- Espaço para Destaque de Parceiros -->
        <section class="mb-10">
            <h2 class="text-2xl font-bold  mb-4">Destaque de Parceiros</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-6">
                <div class="bg-yellow-200 p-4 shadow rounded text-center">
                    <div class="h-16 w-16 bg-yellow-300 border border-black rounded-full mx-auto mb-4"></div>
                    <p class="text-lg font-semibold">Parceiro 1</p>
                </div>
                <div class="bg-yellow-200 p-4 shadow rounded text-center">
                    <div class="h-16 w-16 bg-yellow-300 border border-black rounded-full mx-auto mb-4"></div>
                    <p class="text-lg font-semibold">Parceiro 2</p>
                </div>
                <div class="bg-yellow-200 p-4 shadow rounded text-center">
                    <div class="h-16 w-16 bg-yellow-300 border border-black rounded-full mx-auto mb-4"></div>
                    <p class="text-lg font-semibold">Parceiro 3</p>
                </div>
            </div>
        </section>

        <!-- Contato -->
        <section class="mb-10">
            <h2 class="text-2xl font-bold  mb-4">Entre em Contato</h2>
            <p class="text-lg mb-4">Se você está interessado em se tornar nosso parceiro, entre em contato pelos canais abaixo:</p>
            <ul class="text-lg">
                <li><strong>Email:</strong> Verso_Digital@gmail.com</li>
                <li><strong>Instagram:</strong> <a href="https://www.instagram.com/scripta.tech/" class=" underline">@Verso.Digital</a></li>
                <li><strong>Twitter:</strong> <a href="#" class=" underline">@Verso.Digital</a></li>
                <li><strong>Facebook:</strong> <a href="#" class=" underline">facebook.com/Verso Digital</a></li>
            </ul>
        </section>
    </main>

    <?php include "footer.php" ?>
    
</body>
</html>
