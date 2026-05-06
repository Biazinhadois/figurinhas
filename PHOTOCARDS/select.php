<?php

require_once 'crud.php';


$photocards = read($pdo, 'photocards', 'id = ' . $_GET['id']);
if ($photocards) {
    echo"Livro encontrado: ID = " . $photocards['id'] . "<br><br>
    membro = " . $photocards ['membro'] . "<br>
    era = " . $photocards['era'] . "<br>
    versao = " . $photocards['versao'] . "<br>
    raridade = " . $photocards ['raridade'] . "<br>
    oficial = " . $photocards['oficial'] . "<br>
    preco_pago = " . $photocards['preco_pago'] . "<br>
    capa = <br><img src='". $photocards['capa'] . "' width='200'>";
} else {
    echo "Photocard não encontrado";
}