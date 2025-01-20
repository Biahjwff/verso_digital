 // Função para carregar os livros do localStorage e exibi-los
 function carregarLivros() {
    // Recupera os livros do localStorage
    
    let livros = JSON.parse(localStorage.getItem('livros')) || [];

    // Seleciona o container onde os livros serão exibidos
    const container = document.getElementById('livros-container');
    container.innerHTML = ''; // Limpa o conteúdo atual

    // Verifica se existem livros e os exibe
    if (livros.length === 0) {
        container.innerHTML = '<p class="text-center text-yellow-600">Não há livros salvos ainda.</p>';
    } else {
        livros.forEach(livro => {
            const livroDiv = document.createElement('div');
            livroDiv.classList.add('bg-white', 'p-6', 'rounded-lg', 'shadow-lg', 'mb-6', 'flex', 'space-x-6');

            // Adiciona a imagem da capa
            const capa = document.createElement('img');
            capa.src = livro.capa;
            capa.classList.add('w-[120px]', 'h-[175px]', 'object-cover', 'rounded-lg', 'border', 'border-yellow-600');

            // Adiciona as informações do livro
            const infoDiv = document.createElement('div');
            infoDiv.classList.add('flex-1');

            infoDiv.innerHTML = `
                <h3 class="text-xl font-bold text-yellow-600">${livro.nomeObra}</h3>
                <p class="text-sm text-yellow-700">Autor: ${livro.autor}</p>
                <p class="text-sm text-yellow-700">Classificação Etária: ${livro.classificacaoEtaria}</p>
                <p class="text-sm text-yellow-700">Status: ${livro.status}</p>
                <p class="text-sm text-yellow-700">Descrição: ${livro.descricao}</p>
            `;

            // Adiciona a capa e as informações na div principal
            livroDiv.appendChild(capa);
            livroDiv.appendChild(infoDiv);

            // Adiciona o livro ao container
            container.appendChild(livroDiv);
        });
    }
}

// Chama a função ao carregar a página
window.onload = carregarLivros;