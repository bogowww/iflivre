<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Produto</title>
    <link rel="stylesheet" href="../../css/cadastro.css">
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["imagem"])) {
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $tamanho = $_POST["tamanho"];
    $quantidade = $_POST["quantidade"];

    // Processar a imagem aqui, se necessário
    $imagem_temp = $_FILES["imagem"]["tmp_name"];
    $nome_imagem = $_FILES["imagem"]["name"];
    move_uploaded_file($imagem_temp, "uploads/" . $nome_imagem);

    echo '<h2>Produto Cadastrado:</h2>';
    echo '<p><strong>Título:</strong> ' . $titulo . '</p>';
    echo '<p><strong>Descrição:</strong> ' . $descricao . '</p>';
    echo '<p><strong>Tamanho:</strong> ' . $tamanho . '</p>';
    echo '<p><strong>Quantidade:</strong> ' . $quantidade . '</p>';
    echo '<p><strong>Imagem:</strong> ' . $nome_imagem . '</p>';
}
?>

<h1>Informações do Produto</h1>
<form method="post" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-column">
            <div class="form-group">
                <label for="imagem">Imagem do Produto:</label>
                <input type="file" name="imagem" id="imagem" accept="image/*" required>
            </div>
        </div>

        <div class="form-column">
            <div class="form-group">
                <label for="titulo">Título do Produto:</label>
                <input type="text" name="titulo" id="titulo" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao" rows="6" required></textarea>
            </div>
        </div>

        <div class="form-column">
            <div class="form-group">
                <label for="tamanho">Tamanho:</label>
                <input type="text" name="tamanho" id="tamanho" required>
            </div>
        </div>

        <div class="form-column">
            <div class="form-group">
                <label for="quantidade">Quantidade:</label>
                <input type="number" name="quantidade" id="quantidade" required>
            </div>

            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <select name="categoria" id="categoria" required>
                    <option value="roupas">Roupas</option>
                    <option value="calcados">Calçados</option>
                    <option value="acessorios">Acessórios</option>
                </select>
            </div>
        </div>
    </div>

    <div style="text-align: left;">
        <input type="submit" value="Salvar">
        <input type="button" value="Cancelar" onclick="history.back()">
    </div>
</form>

</body>
</html>
