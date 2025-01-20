<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Novo Livro / Fanfic</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&family=Rubik+Mono+One&family=VT323&display=swap"
    rel="stylesheet">
    <script src="../controller/escrever_controller.js"></script>
</head>

<body style="font-family: 'Happy Monkey' , system-ui;">
    <!-- Cabeçalho fixo -->
    <?php include "cabecalho.php"; ?>
    <!-- Conteúdo Principal -->

    <div class="bg-yellow-100 flex flex-col min-h-screen p-24">
        <div class="bg-white p-8 rounded-lg shadow-xl w-full max-w-7xl flex">
            <!-- Lado Esquerdo -->
            <div class="w-1/2 pr-6 mx-100">
                <h2 class="text-3xl font-bold text-center mb-8 text-yellow-600">Criar Novo Livro / Fanfic</h2>

                <form class="space-y-6">
                    <div>
                        <label for="autor" class="block text-sm font-medium text-yellow-700">Nome do Autor</label>
                        <input type="text" id="autor" name="autor"
                            class="w-full p-3 border border-yellow-600 rounded-md" required>
                    </div>

                    <div>
                        <label for="nome-obra" class="block text-sm font-medium text-yellow-700">Nome da Obra</label>
                        <input type="text" id="nomeobra" name="nomeobra"
                            class="w-full p-3 border border-yellow-600 rounded-md" required>
                    </div>

                    <div>
                        <label for="classificacao-etaria"
                            class="block text-sm font-medium text-yellow-700">Classificação Etária</label>
                        <select id="classificacao-etaria" name="classificacao-etaria"
                            class="w-full p-3 border border-yellow-600 rounded-md">
                            <option value="Livre">Livre</option>
                            <option value="10+">10+</option>
                            <option value="12+">12+</option>
                            <option value="14+">14+</option>
                            <option value="16+">16+</option>
                            <option value="18+">18+</option>
                        </select>
                    </div>

                    <div>
                        <label for="descricao" class="block text-sm font-medium text-yellow-700">Descrição</label>
                        <textarea id="descricao" name="descricao" rows="4"
                            class="w-full p-3 border border-yellow-600 rounded-md" required></textarea>
                    </div>

                    <div>
                        <label for="capa" class="block text-sm font-medium text-yellow-700">Capa da Obra</label>
                        <input type="file" id="capa" name="capa" class="w-full p-3 border border-yellow-600 rounded-md"
                            onchange="mostrarCapa()">
                    </div>
                </form>
            </div>

            <!-- Lado Direito -->
            <div class="w-1/2 pl-6">
                <div class="mb-6">
                    <h3 class="text-xl font-bold text-yellow-600 mb-4">Imagem da Capa</h3>
                    <!-- Ajustando a imagem para proporção de capa de livro -->
                    <img id="preview-capa"
                        class="w-[240px] h-[350px] object-cover rounded-lg border border-yellow-600 mb-6" src=""
                        alt="Pré-visualização da Capa">
                </div>

                <div class="mb-6">
                    <label for="status" class="block text-sm font-medium text-yellow-700">Status da Obra</label>
                    <select id="status" name="status" class="w-full p-3 border border-yellow-600 rounded-md">
                        <option value="Finalizada">Finalizada</option>
                        <option value="Em andamento">Em andamento</option>
                        <option value="Pausada">Pausada</option>
                        <option value="Cancelada">Cancelada</option>
                    </select>
                </div>

                <div class="flex justify-between">
                    <div
                        class="bg-yellow-400 border border-black w-1/2 shadow h-10 text-center my-4 flex items-center justify-center shadow-lg">
                        <button onclick="salvar()" type="button" class="w-full text-black">Salvar</button>
                    </div>
                    <div
                        class="bg-yellow-400 border border-black w-1/2 shadow h-10 text-center my-4 flex items-center justify-center shadow-lg">
                        <button type="button" class="w-full text-black">Começar a Escrever</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Rodapé -->
    <?php include "footer.php"; ?>
</body>


</html>