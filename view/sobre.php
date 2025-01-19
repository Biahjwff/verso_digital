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
      class="bg-[url('../img/sobre.png')]  bg-center bg-no-repeat min-h-screen flex flex-col bg-yellow-50">
  <!-- Cabeçalho fixo -->
  <?php include "cabecalho.php"; ?>

 
  <div class="flex justify-center items-center h-screen">
  <div class="text-center">
    <br><br><br>
    <p class="pr-96 pl-80"> <b> Bem-vindo ao Verso Digital!</b> <br> Somos uma plataforma gratuita dedicada a incentivar <br> a leitura e a escrita. Aqui, você encontrará <br> uma comunidade apaixonada por literatura,<br> onde leitores e escritores podem se conectar,<br> compartilhar ideias e explorar novas histórias.<br> Nosso objetivo é celebrar o poder das palavras <br> e oferecer recursos para desenvolver <br> sua criatividade. <br> Junte-se a nós nessa jornada literária!</p>
  </div>
</div>
 

<?php include "footer.php" ?>


</body>
</html>
