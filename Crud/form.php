<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insert.php" method="post" enctype="multipart/form-data">

        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required><br><br>



        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" required><br><br>

        <label for="autor">Autor:</label>
        <input type="text" name="autor" required><br><br>

        <label for="preco">Preço:</label>
        <input type="text" name="preco" required><br><br>

        <select name="situacao" required>
            <option>Disponível</option>
            <option>Indisponível</option>
        </select><br><br>

        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" required><br><br>

        <label for="arquivo">Selecione uma imagem da capa:</label>
        <input type="file" name="arquivo" accept="image/*" required><br><br>

        <button type="submit">Inserir livro</button>

    </form>
</body>

</html>