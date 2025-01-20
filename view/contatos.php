<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&family=Rubik+Mono+One&family=VT323&display=swap"
    rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="font-family: 'Happy Monkey' , system-ui;" class="bg-yellow-100">

    <!-- Cabeçalho -->
    <?php include "cabecalho.php" ?>

    <!-- Conteúdo da Página -->
    <main class="py-20">
        <div class="max-w-4xl mx-auto px-6">
            <section class="bg-yellow-200 shadow-2xl rounded-lg p-10 space-y-8 border border-black">
                <h2 class="text-3xl font-semibold text-black text-center">Entre em Contato Conosco</h2>
                <p class="text-xl text-center">Tem alguma dúvida ou sugestão? Estamos prontos para te ouvir!</p>

                <form action="#" method="POST" class="space-y-8 mt-6">
                    <!-- Nome -->
                    <div class="flex flex-col">
                        <label for="nome" class="text-black font-medium">Seu Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo"
                               class="p-4 border border-yellow-300 bg-yellow-100 rounded-md focus:ring-2 ">
                    </div>
                    
                    <!-- E-mail -->
                    <div class="flex flex-col">
                        <label for="email" class="text-black font-medium">Seu E-mail</label>
                        <input type="email" id="email" name="email" placeholder="Digite seu e-mail"
                               class="p-4 border border-yellow-300 bg-yellow-100 rounded-md focus:ring-2 ">
                    </div>

                    <!-- Mensagem -->
                    <div class="flex flex-col">
                        <label for="mensagem" class="text-black font-medium">Sua Mensagem</label>
                        <textarea id="mensagem" name="mensagem" rows="6" placeholder="Escreva sua mensagem aqui"
                                  class="p-4 border border-yellow-300 bg-yellow-100 rounded-md focus:ring-2 "></textarea>
                    </div>

                    <!-- Botão de Enviar -->
                    <div class="text-center">
                        <button type="submit" class="bg-yellow-600 text-white py-3 px-8 rounded-full hover:bg-yellow-700 transition duration-300">Enviar Mensagem</button>
                    </div>
                </form>
            </section>
        </div>
    </main>

    <!-- Rodapé -->
    <?php include "footer.php" ?>

</body>
</html>
