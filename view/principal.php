<!DOCTYPE html>
<html lang="pt-br" class="dark">

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
  <script src="../controller/verificar.js"></script>
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

<body onload="verificar()" style="font-family: 'Happy Monkey' , system-ui;" class="flex flex-col min-h-screen bg-yellow-100 dark:bg-gray-500">

  <!-- Cabeçalho fixo -->
  <?php include "cabecalho.php"; ?>
  <!-- Cabeçalho fixo -->

  <!-- Conteúdo Principal -->
  <main>
    <div class="flex space-x-4"> <!-- Robson -->

      <!-- Container -->
      <div class="bg-yellow-200 border border-black w-1/6 py-4 ml-4 mt-20 mb-8 h-screen px-8  shadow shadow-xl">
        <!-- Toba -->

        <div
          class="bg-yellow-300 border border-black w-26 shadow h-10 text-center my-4 flex items-center justify-center shadow-lg">
          <a href="definicoes.php">Definições</a>
        </div>

        <div
          class="bg-yellow-300 border border-black w-26 shadow h-10 text-center my-8 flex items-center justify-center shadow-lg">
          <a href="">Meu Perfil</a>
        </div>

        <div
          class="bg-yellow-300 border border-black w-26 shadow h-10 text-center my-8 flex items-center justify-center shadow-lg">
          <a href="alterar_senha.php">Alterar Senha</a>
        </div>

        <div
          class="bg-yellow-300 border border-black w-26 shadow h-10 text-center my-8 flex items-center justify-center shadow-lg">
          <a href="contatos.php">Contatos</a>
        </div>

        <div
          class="bg-yellow-300 border border-black w-26 shadow h-10 text-center my-8 flex items-center justify-center shadow-lg">
          <a href="termos.php">Termos</a>
        </div>

        <div
          class="bg-yellow-300 border border-black w-26 shadow h-10 text-center my-8 flex items-center justify-center shadow-lg">
          <a href="../logout.php">Sair</a>
        </div>

        <div
          class="bg-yellow-300 border border-black w-26 shadow h-10 text-center my-4 flex items-center justify-center shadow-lg">
          <a href="parcerias.php">Parcerias</a>
        </div>

      </div> <!-- fecha Toba -->


      <div class="w-5/6 pl-8 max-w-full   pr-12"> <!-- Roberto -->
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
            <a href="mais_acessados.php">Mais Acessados</a>
          </div>

          <div
            class="w-1/4 bg-yellow-200 w-1/4 h-8 justify-center items-center flex text-center py-4 mt-32 px-8 shadow shadow-xl">
            <a href="meus_livros.php">Meus Livros</a>
          </div>

        </div>



        <!-- Começo do Carrossel -->
        <h2 class="text-xl font-bold mt-8 ml-12">Explore Destaques</h2>
        <div class="flex flex-col items-center p-6">

          <div class="relative max-w-full">
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
                <img src="../img/livro_romance//O Aluno Novo - 06_ Cadê o meu livro__.jpeg" alt="Imagem 1"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">O Aluno Novo</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_romance/5d30a202-4435-4602-b5b7-ca3a179d052c.jpeg" alt="Imagem 1"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Segredos do Coração</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_romance/30a794ec-8f1d-433d-8d84-ae291e595adc.jpeg" alt="Imagem 1"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Amores Proibidos</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_romance/Falso Namorado [Concluído] - 07_ Você fica linda de qualquer jeito.jpeg"
                  alt="Imagem 1" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Falsos Sentimentos</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_romance/fbf10180-9f25-4dd3-a55d-6b8c1d40e57b.jpeg" alt="Imagem 1"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Encontro Inesperado</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_romance/Fora do Controle.jpeg" alt="Imagem 1"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Sem Controle</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_romance/JUST THE THREE OF US your_pretty_anneeeee.jpeg" alt="Imagem 1"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">O Trio Perfeito</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_romance/livroooo.jpeg" alt="Imagem 1"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Misterioso Amor</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_romance/Silver and Cole - Ruthless Empire.jpeg" alt="Imagem 1"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Império Selvagem</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_romance/Verão Em Dois Tons.jpeg" alt="Imagem 1"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Verão de Mudanças</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_romance/Amore 2.jpeg" alt="Imagem 1"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Aventura Romântica</p>
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




        <h2 class="text-xl font-bold mt-8 ml-12">Infantil</h2>
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
                <img src="../img/livro_infantil/3c94a7ae-4dee-40bc-8f24-ce94a489ef26.jpeg" alt="Imagem 1"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">A Aventura do Coelhinho Saltitante</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_infantil/86d8d583-fa48-4617-b86f-a088a902d73b.jpeg" alt="Imagem 2"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">O Mistério da Floresta Encantada</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_infantil/699786f2-89d5-4fe8-96ea-e59c616d6a06.jpeg" alt="Imagem 3"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">O Dragão que Queria Amizade</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_infantil/Autumn Tea Party by Aurélie Lise-Anne.jpeg" alt="Imagem 4"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">O Chá Mágico das Estações</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img
                  src="../img/livro_infantil/Charlene Chua, illustration _ Children's illustrator, Canada - Rainy Day Ducks.jpeg"
                  alt="Imagem 5" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">As Patinhas na Chuva</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img
                  src="../img/livro_infantil/Elemento Comercial Dinossauro PNG , Clipart De Dinossauro, Dinossauro, Desenho Animado PNG Imagem para download gratuito.jpeg"
                  alt="Imagem 6" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">A Jornada do Dino Amigo</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_infantil/kids, reza  abbbasi.jpeg" alt="Imagem 7"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">A Festa no Mundo dos Brinquedos</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img
                  src="../img/livro_infantil/Mavi Kırlangıç Çocuk Dergisi (Kapak Tasarımları) 2019 - Dilek Altıntaş Birben.jpeg"
                  alt="Imagem 8" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">O Mundo Mágico das Fadas</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img
                  src="../img/livro_infantil/O Que Eu Faço Com Esse Grito - Children's Book - Maria Gabriela Gama.jpeg"
                  alt="Imagem 9" class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">O Mistério do Grito do Bosque</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_infantil/Premium Vector _ Children lying on the lawn.jpeg" alt="Imagem 10"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">O Jardim Encantado</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_infantil/The Story Of Bong, Bom, Bach - Wazza Pink.jpeg" alt="Imagem 11"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">A História de Bong e Seus Amigos</p>
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



        <h2 class="text-xl font-bold mt-8 ml-12">Terror</h2>
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
                <img src="../img/livro_terror/8e9b64ed-380f-4636-83d4-20bfcdb252af.jpeg" alt="Imagem 1"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">A Sombria Maldição</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_terror/9 Livros de Contos de Terror para ler no Halloween 🎃.jpeg" alt="Imagem 2"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Os Contos do Medo</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_terror/0877e6c1-aa25-456a-83c7-9d2f085d2008.jpeg" alt="Imagem 3"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Noites sem Fim</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_terror/ea389a3f-12b7-4b3e-8843-ed1963d0f4a4.jpeg" alt="Imagem 4"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">A Última Noite</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_terror/Este é o tom de Poemas de Noites Insones, uma….jpeg" alt="Imagem 5"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Poemas para uma Mente Sombria</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_terror/f0549903-d9fd-4eb8-abe1-bb4672c668d7.jpeg" alt="Imagem 6"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center -sm font-medium">O Grito da Sombra</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_terror/Fotos para conto de história de terror _.jpeg" alt="Imagem 7"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Histórias para Sussurrar no Escuro</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_terror/Imagens criadas através da Inteligência Artificial….jpeg" alt="Imagem 8"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">Reflexos da Mente Macabra</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_terror/Shane Rebenschied - Illustration Portfolio.jpeg" alt="Imagem 9"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">O Retorno das Sombras</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_terror/Shane Rebenschied - Illustration Portfolio.jpeg" alt="Imagem 10"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">O Chamado da Noite</p>
              </div>

              <div class="flex-shrink-0 w-40 snap-center">
                <img src="../img/livro_terror/zodiaco  - 8.jpeg" alt="Imagem 11"
                  class="w-full h-40 object-cover rounded-lg" />
                <p class="mt-2 text-center text-sm font-medium">O Enigma do Zodíaco</p>
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