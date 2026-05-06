<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insert.php" method="post" enctype="multipart/form-data">

        <label for="Membro">Membro:</label>
        <select name="membro" required>
            <option>Kim Namjoon</option>
            <option>Kim Seokjin</option>
            <option>Min Yoongi</option>
            <option>Jung Hoseok</option>
            <option>Park Jimin</option>
            <option>Jeon Jungkook</option>
        </select><br><br>



        <label for="Era">Era:</label>
        <select name="era" required>
            <option>Kim Namjoon</option>
            <option>Kim Seokjin</option>
            <option>Min Yoongi</option>
            <option>Jung Hoseok</option>
            <option>Park Jimin</option>
            <option>Jeon Jungkook</option>
        </select><br><br>


        <label for="Versao">Versão:</label>
        <select name="versao" required>
            <option>Normal</option>
            <option>Holográfico </option>
            <option>Lenticular </option>
            <option>Transparent Card</option>
            <option>Unit Card</option>
        </select><br><br>


        <label for="raridade">Raridade:</label>
        <select name="raridade" required>
            <option>Comum</option>
            <option>Raro</option>
            <option>Ultra Raro</option>
        </select><br><br>

        <label for="oficial">Oficial?:</label>
        <select name="oficial" required>
            <option>Sim</option>
            <option>Não, Fanmade</option>
        </select><br><br>

        <label for="preco_pago">Preco pago:</label>
        <input type="text" name="preco_pago" required><br><br>

        <label for="arquivo">Selecione uma imagem do Photocard:</label>
        <input type="file" name="arquivo" accept="image/*" required><br><br>

        <button type="submit">Inserir Photocard</button>

    </form>
</body>

</html>