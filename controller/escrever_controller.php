<?php 

include "../livros.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $foto = $_POST['foto'];
    $nome = $_POST['nome'];

    // var_dump($foto);


    $livros [] = [
        'nome' => $nome,
        'foto' => $foto
    ];


    foreach ($livros as $livro) {
        echo "<h3>".$livro['nome'] . "</h3>";
        echo "<img src='".$livro['foto']. "' alt='" . "'style='width:150px;'></br>";
    }
    // echo "teste" . $livros;
}


?>