<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros Mais Acessados</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&family=Rubik+Mono+One&family=VT323&display=swap"
    rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="font-family: 'Happy Monkey' , system-ui;" class="bg-yellow-100">
    <?php include "cabecalho.php" ?>
    <div class="container mx-auto mt-10 p-6">
        <h1 class="text-3xl font-bold text-center mt-8 text-yellow-700 mb-6">Livros Mais Acessados</h1>
        <table class="table-auto w-full border-collapse border border-yellow-300 shadow-lg">
            <thead>
                <tr class="bg-yellow-200">
                    <th class="border border-yellow-300 px-4 py-2 text-yellow-900">#</th>
                    <th class="border border-yellow-300 px-4 py-2 text-yellow-900">Título</th>
                    <th class="border border-yellow-300 px-4 py-2 text-yellow-900">Autor</th>
                    <th class="border border-yellow-300 px-4 py-2 text-yellow-900">Acessos</th>
                    <th class="border border-yellow-300 px-4 py-2 text-yellow-900">Data de Publicação</th>
                </tr>
            </thead>
            <tbody>
                <!-- Livros mais acessados -->
                <tr class="bg-yellow-50 hover:bg-yellow-100">
                    <td class="border border-yellow-300 px-4 py-2 text-center">1</td>
                    <td class="border border-yellow-300 px-4 py-2">A Jornada dos Ventos</td>
                    <td class="border border-yellow-300 px-4 py-2">Ana Clara Mendes</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">12,345</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">12/03/2023</td>
                </tr>
                <tr class="bg-yellow-50 hover:bg-yellow-100">
                    <td class="border border-yellow-300 px-4 py-2 text-center">2</td>
                    <td class="border border-yellow-300 px-4 py-2">O Segredo da Floresta</td>
                    <td class="border border-yellow-300 px-4 py-2">Carlos Pereira</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">11,987</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">05/09/2022</td>
                </tr>
                <tr class="bg-yellow-50 hover:bg-yellow-100">
                    <td class="border border-yellow-300 px-4 py-2 text-center">3</td>
                    <td class="border border-yellow-300 px-4 py-2">Além do Horizonte</td>
                    <td class="border border-yellow-300 px-4 py-2">Bianca Oliveira</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">11,500</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">20/07/2023</td>
                </tr>
                <tr class="bg-yellow-50 hover:bg-yellow-100">
                    <td class="border border-yellow-300 px-4 py-2 text-center">4</td>
                    <td class="border border-yellow-300 px-4 py-2">Sombras do Passado</td>
                    <td class="border border-yellow-300 px-4 py-2">Diego Martins</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">10,874</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">14/06/2021</td>
                </tr>
                <tr class="bg-yellow-50 hover:bg-yellow-100">
                    <td class="border border-yellow-300 px-4 py-2 text-center">5</td>
                    <td class="border border-yellow-300 px-4 py-2">O Último Reino</td>
                    <td class="border border-yellow-300 px-4 py-2">Fernanda Lima</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">10,345</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">10/01/2020</td>
                </tr>
                <tr class="bg-yellow-50 hover:bg-yellow-100">
                    <td class="border border-yellow-300 px-4 py-2 text-center">6</td>
                    <td class="border border-yellow-300 px-4 py-2">Caminhos Entrelaçados</td>
                    <td class="border border-yellow-300 px-4 py-2">Julia Almeida</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">9,678</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">22/11/2023</td>
                </tr>
                <tr class="bg-yellow-50 hover:bg-yellow-100">
                    <td class="border border-yellow-300 px-4 py-2 text-center">7</td>
                    <td class="border border-yellow-300 px-4 py-2">A Canção dos Sonhos</td>
                    <td class="border border-yellow-300 px-4 py-2">Lucas Rocha</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">9,123</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">08/02/2023</td>
                </tr>
                <tr class="bg-yellow-50 hover:bg-yellow-100">
                    <td class="border border-yellow-300 px-4 py-2 text-center">8</td>
                    <td class="border border-yellow-300 px-4 py-2">Fragmentos de Luz</td>
                    <td class="border border-yellow-300 px-4 py-2">Maria Ferreira</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">8,765</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">19/03/2022</td>
                </tr>
                <tr class="bg-yellow-50 hover:bg-yellow-100">
                    <td class="border border-yellow-300 px-4 py-2 text-center">9</td>
                    <td class="border border-yellow-300 px-4 py-2">Entre Estrelas</td>
                    <td class="border border-yellow-300 px-4 py-2">Roberto Souza</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">8,432</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">02/10/2021</td>
                </tr>
                <tr class="bg-yellow-50 hover:bg-yellow-100">
                    <td class="border border-yellow-300 px-4 py-2 text-center">10</td>
                    <td class="border border-yellow-300 px-4 py-2">Marés do Destino</td>
                    <td class="border border-yellow-300 px-4 py-2">Paula Ribeiro</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">8,210</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">15/08/2020</td>
                </tr>
                <tr class="bg-yellow-50 hover:bg-yellow-100">
                    <td class="border border-yellow-300 px-4 py-2 text-center">11</td>
                    <td class="border border-yellow-300 px-4 py-2">Cores do Outono</td>
                    <td class="border border-yellow-300 px-4 py-2">Sara Lopes</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">7,894</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">28/04/2023</td>
                </tr>
                <tr class="bg-yellow-50 hover:bg-yellow-100">
                    <td class="border border-yellow-300 px-4 py-2 text-center">12</td>
                    <td class="border border-yellow-300 px-4 py-2">Labirintos do Tempo</td>
                    <td class="border border-yellow-300 px-4 py-2">Renato Araújo</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">7,657</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">12/11/2019</td>
                </tr>
                <tr class="bg-yellow-50 hover:bg-yellow-100">
                    <td class="border border-yellow-300 px-4 py-2 text-center">13</td>
                    <td class="border border-yellow-300 px-4 py-2">O Sol e a Lua</td>
                    <td class="border border-yellow-300 px-4 py-2">Mariana Rocha</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">6,210</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">12/07/2021</td>
                </tr>
                <tr class="bg-yellow-50 hover:bg-yellow-100">
                    <td class="border border-yellow-300 px-4 py-2 text-center">14</td>
                    <td class="border border-yellow-300 px-4 py-2">Coração de Ferro</td>
                    <td class="border border-yellow-300 px-4 py-2">Gustavo Oliveira</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">5,987</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">27/08/2020</td>
                </tr> 
                <tr class="bg-yellow-50 hover:bg-yellow-100">
                    <td class="border border-yellow-300 px-4 py-2 text-center">15</td>
                    <td class="border border-yellow-300 px-4 py-2">Raízes do Passado</td>
                    <td class="border border-yellow-300 px-4 py-2">Tatiane Lima</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">5,345</td>
                    <td class="border border-yellow-300 px-4 py-2 text-center">10/10/2021</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>

<?php include "footer.php" ?>

</body>

</html>