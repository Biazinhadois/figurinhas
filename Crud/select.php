<?php

require_once 'crud.php';


$livro = read($pdo, 'livros', 'id = ' . $_GET['id']);
if ($livro) {
    echo"Livro encontrado: ID = " . $livro['id'] . "<br><br>
    Título = " . $livro ['titulo'] . "<br>
    Autor = " . $livro['autor'] . "<br>
    Preco = " . $livro['preco'] . "<br>
    Situação = " . $livro ['situacao'] . "<br>
    Categoria = " . $livro['categoria'] . "<br>
    Capa = <br><img src='". $livro['capa'] . "' width='200'>";
} else {
    echo "Livro não encontrado";
}