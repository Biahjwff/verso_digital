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
  <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&family=Rubik+Mono+One&family=VT323&display=swap"
    rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    /* Garante que o carrossel tenha overflow escondido */
    #carousel {
      scroll-behavior: smooth;
    }

    /* Evita que os botões fiquem sobre os itens */
    button {
      z-index: 10;
    }
  </style>

</head>

<body style="font-family: 'Happy Monkey' , system-ui;" class="flex flex-col min-h-screen bg-yellow-50">

  <!-- Cabeçalho fixo -->
  <?php include "cabecalho.php"; ?>
  <!-- Cabeçalho fixo -->

  <!-- Conteúdo Principal -->
  <main>
    <div class="flex space-x-4"> <!-- Robson -->

      <!-- Container -->
      <div class="bg-yellow-200 border border-black w-1/6 py-4 ml-4 mt-20 mb-8 h-screen fixed px-8  shadow shadow-xl">
        <!-- Toba -->

        <div
          class="bg-yellow-300 border border-black w-26 shadow h-10 text-center my-4 flex items-center justify-center shadow-lg">
          <a href="">Definições</a>
        </div>

        <div
          class="bg-yellow-300 border border-black w-26 shadow h-10 text-center my-8 flex items-center justify-center shadow-lg">
          <a href="">Meu Perfil</a>
        </div>

        <div
          class="bg-yellow-300 border border-black w-26 shadow h-10 text-center my-8 flex items-center justify-center shadow-lg">
          <a href="">Alterar Senha</a>
        </div>

        <div
          class="bg-yellow-300 border border-black w-26 shadow h-10 text-center my-8 flex items-center justify-center shadow-lg">
          <a href="">Contatos</a>
        </div>

        <div
          class="bg-yellow-300 border border-black w-26 shadow h-10 text-center my-8 flex items-center justify-center shadow-lg">
          <a href="">Termos</a>
        </div>

        <div
          class="bg-yellow-300 border border-black w-26 shadow h-10 text-center my-8 flex items-center justify-center shadow-lg">
          <a href="">Privacidade</a>
        </div>

        <div
          class="bg-yellow-300 border border-black w-26 shadow h-10 text-center my-4 flex items-center justify-center shadow-lg">
          <a href="parcerias.html">Parcerias</a>
        </div>

      </div> <!-- fecha Toba -->


      <div class="w-5/6 pl-64 w-full   pr-12"> <!-- Roberto -->
        <div class="flex space-x-4">

          <div
            class="w-1/4 bg-yellow-200 w-1/4 ml-8 h-8 justify-center items-center flex text-center py-4 mt-32 px-8 shadow shadow-xl">
            <a href="escrever.php">Escrever</a>
          </div>

          <div
            class="w-1/4 bg-yellow-200 w-1/4 h-8 justify-center items-center flex text-center py-4 mt-32 px-8 shadow shadow-xl">
            <a href="">Biblioteca</a>
          </div>

          <div
            class="w-1/4 bg-yellow-200 w-1/4 h-8 justify-center items-center flex text-center py-4 mt-32 px-8 shadow shadow-xl">
            <a href="">Mais Acessados</a>
          </div>

          <div
            class="w-1/4 bg-yellow-200 w-1/4 h-8 justify-center items-center flex text-center py-4 mt-32 px-8 shadow shadow-xl">
            <a href="">Meus Livros</a>
          </div>

        </div>



        <!-- Começo do Carrossel -->
        <h2 class="text-xl font-bold mt-8 ml-12">Explore Destaques</h2>
        <div class="flex flex-col items-center p-6">

          <div class="relative w-full overflow-hidden">
            <!-- Botão para a Esquerda -->
            <button
              class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-transparent p-2 rounded-full shadow-md hover:bg-gray-300"
              onclick="scrollCarousel(-1)">
              <img src="../img/seta-direita.png" style="transform: scaleX(-1);" alt="">
            </button>

            <!-- Track do Carousel -->
            <div id="carousel" style="scrollbar-width: none;  scroll-behavior: smooth;
  transition: scroll-right 1.5s ease-in-out "
              class="flex gap-4 w-full px-4 snap-x scroll-smooth relative w-full overflow-x-auto">

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sobre Foto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">STEDZSGoto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sobre Foto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">BBBBBBBBB</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sobre Foto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sobre Foto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sobre Foto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sobre Foto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sobre Foto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">AAAAAAAA</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">UUUUUUUU</p>
              </div>

              <!-- Repetir os itens conforme necessário -->
            </div>

            <!-- Botão para a Direita -->
            <button
              class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-transparent p-2 rounded-full shadow-md hover:bg-gray-300"
              onclick="scrollCarousel(1)">
              <img src="../img/seta-direita.png" alt="">
            </button>
          </div>
        </div>

        <script>
          function scrollCarousel(direction) {
            const carousel = document.getElementById('carousel');
            const scrollAmount = carousel.offsetWidth;
            carousel.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
          }
        </script>




        <h2 class="text-xl font-bold mt-8 ml-12">Explore Destaques</h2>
        <div class="flex flex-col items-center p-6">

          <div class="relative w-full overflow-hidden">
            <!-- Botão para a Esquerda -->
            <button
              class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-transparent p-2 rounded-full shadow-md hover:bg-gray-300"
              onclick="scrollCarousel2(-1)">
              <img src="../img/seta-direita.png" style="transform: scaleX(-1);" alt="">
            </button>

            <!-- Track do Carousel -->
            <div id="carousel2" style="scrollbar-width: none;  scroll-behavior: smooth;
  transition: scroll-right 1.5s ease-in-out "
              class="flex gap-4 w-full px-4 snap-x scroll-smooth relative w-full overflow-x-auto">

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sobre Foto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">STEDZSGoto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sobre Foto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">BBBBBBBBB</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sobre Foto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sobre Foto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sobre Foto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sobre Foto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sobre Foto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">AAAAAAAA</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">UUUUUUUU</p>
              </div>

              <!-- Repetir os itens conforme necessário -->
            </div>

            <!-- Botão para a Direita -->
            <button
              class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-transparent p-2 rounded-full shadow-md hover:bg-gray-300"
              onclick="scrollCarousel2(1)">
              <img src="../img/seta-direita.png" alt="">
            </button>
          </div>
        </div>

        <script>
          function scrollCarousel2(direction) {
            const carousel = document.getElementById('carousel2');
            const scrollAmount = carousel.offsetWidth;
            carousel.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
          }
        </script>



        <h2 class="text-xl font-bold mt-8 ml-12">Explore Destaques</h2>
        <div class="flex flex-col items-center p-6">

          <div class="relative w-full overflow-hidden">
            <!-- Botão para a Esquerda -->
            <button
              class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-transparent p-2 rounded-full shadow-md hover:bg-gray-300"
              onclick="scrollCarousel3(-1)">
              <img src="../img/seta-direita.png" style="transform: scaleX(-1);" alt="">
            </button>

            <!-- Track do Carousel -->
            <div id="carousel3" style="scrollbar-width: none;  scroll-behavior: smooth;
  transition: scroll-right 1.5s ease-in-out "
              class="flex gap-4 w-full px-4 snap-x scroll-smooth relative w-full overflow-x-auto">

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sobre Foto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">STEDZSGoto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sobre Foto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">BBBBBBBBB</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sobre Foto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sobre Foto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sobre Foto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sobre Foto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sobre Foto</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">AAAAAAAA</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/sobre.png" alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">UUUUUUUU</p>
              </div>

              <!-- Repetir os itens conforme necessário -->
            </div>

            <!-- Botão para a Direita -->
            <button
              class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-transparent p-2 rounded-full shadow-md hover:bg-gray-300"
              onclick="scrollCarousel3(1)">
              <img src="../img/seta-direita.png" alt="">
            </button>
          </div>
        </div>

        <script>
          function scrollCarousel3(direction) {
            const carousel = document.getElementById('carousel3');
            const scrollAmount = carousel.offsetWidth;
            carousel.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
          }
        </script>

        <!-- Final do Carrossel -->
      </div> <!-- fecha Roberto -->
    </div> <!-- Fecha Robson -->

  </main>


  <!-- Footer -->
  <?php include "footer.php" ?>
  <!-- Fecha Footer -->


</body>

</html>