function salvar() {
    const autor = document.getElementById('autor').value; 
    const nomeObra = document.getElementById('nomeobra').value;
    const classificacaoEtaria = document.getElementById('classificacao-etaria').value;
    const descricao = document.getElementById('descricao').value;
    const capa = document.getElementById('preview-capa').src;
    const status = document.getElementById('status').value;

    // Cria um objeto com os dados
    const livro = {
        autor,
        nomeObra,
        classificacaoEtaria,
        descricao,
        capa,
        status
    };

    livros = JSON.parse(localStorage.getItem('livros')) || [];

    livros.push(livro);

    localStorage.setItem('livros', JSON.stringify(livros));
    window.location.href = "../view/meus_livros.php";
}

function mostrarCapa() {
    const input = document.getElementById('capa');
    const preview = document.getElementById('preview-capa');

    const file = input.files[0];
    const reader = new FileReader();

    reader.onloadend = function () {
        preview.src = reader.result;
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        preview.src = "";
    }
}