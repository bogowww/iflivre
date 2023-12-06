<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Produto</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 20px;
        }

        form {
            max-width: 800px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            width: 100%;
            text-align: left;
            margin-bottom: 8px;
            color: #333;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 16px;
        }

        .form-column {
            width: 23%;
        }

        .form-column .form-group {
            margin-bottom: 16px;
        }

        .form-column .form-group label {
            width: 100%;
        }

        .form-column .form-group input,
        .form-column .form-group textarea,
        .form-column .form-group select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 8px; /* Arredondar as bordas */
            margin-bottom: 8px;
        }

        .form-column .form-group textarea {
            resize: vertical; /* Permitir ajuste vertical */
            height: 120px; /* Altura aumentada para evitar espaço em branco */
        }

        .form-column .form-group select {
            width: 100%;
        }

        input[type="file"] {
            width: 100%;
            margin-bottom: 16px;
        }

        input[type="submit"],
        input[type="button"] {
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
        }

        input[type="submit"] {
            background-color: #ccc;
            color: #333;
        }

        input[type="button"] {
            background-color: #000;
            color: #fff;
        }
    </style>
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
