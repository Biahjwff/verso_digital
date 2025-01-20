<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajuda - Plataforma de Livros Digitais</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&family=Rubik+Mono+One&family=VT323&display=swap"
    rel="stylesheet">
</head>
<body style="font-family: 'Happy Monkey' , system-ui;" class="bg-yellow-100">

    <!-- Cabeçalho -->
    <?php include "cabecalho.php" ?>

    <!-- Conteúdo da Página de Ajuda -->
    <main class="py-20">
        <div class="max-w-4xl mx-auto px-6">
            <section class="bg-white shadow-2xl rounded-lg p-10 space-y-8">
                <h2 class="text-3xl text-yellow-900 text-center">Centro de Ajuda</h2>
                <p class="text-xl text-yellow-700 text-center">Aqui você encontrará soluções para os problemas mais comuns.</p>

                <!-- Problema 1 -->
                <div class="border-b-2 pb-8">
                    <h3 class="text-2xl text-yellow-900">Não Consigo Acessar Minha Conta</h3>
                    <p class="text-yellow-700 mt-2">
                        Se você não consegue acessar sua conta, verifique as seguintes opções:
                    </p>
                    <ul class="list-disc pl-6 text-yellow-700 mt-2">
                        <li>Certifique-se de que seu nome de usuário e senha estão corretos.</li>
                        <li>Verifique se a tecla "Caps Lock" está ativada.</li>
                        <li>Se esqueceu sua senha, clique em "Esqueci minha senha" na tela de login para redefini-la.</li>
                    </ul>
                </div>

                <!-- Problema 2 -->
                <div class="border-b-2 pb-8 mt-8">
                    <h3 class="text-2xl text-yellow-900">O Livro Não Está Carregando</h3>
                    <p class="text-yellow-700 mt-2">
                        Se o livro não estiver carregando corretamente, tente as seguintes soluções:
                    </p>
                    <ul class="list-disc pl-6 text-yellow-700 mt-2">
                        <li>Verifique sua conexão com a internet.</li>
                        <li>Tente atualizar a página ou limpar o cache do navegador.</li>
                        <li>Se o problema persistir, tente abrir o livro em outro navegador ou dispositivo.</li>
                    </ul>
                </div>

                

                <!-- Problema 5 -->
                <div class="border-b-2 pb-8 mt-8">
                    <h3 class="text-2xl text-yellow-900">Como Entrar em Contato Conosco</h3>
                    <p class="text-yellow-700 mt-2">
                        Se você precisar de ajuda adicional, entre em contato conosco da seguinte maneira:
                    </p>
                    <ul class="list-disc pl-6 text-yellow-700 mt-2">
                        <li>Acesse nossa página de "Contato" e preencha o formulário de mensagem.</li>
                        <li>Envie um e-mail diretamente para <a href="mailto:support@livrosdigitais.com" class="text-yellow-600">support@livrosdigitais.com</a>.</li>
                    </ul>
                </div>
            </section>
        </div>
    </main>

    <!-- Rodapé -->
    <?php include "footer.php" ?>

</body>
</html>
