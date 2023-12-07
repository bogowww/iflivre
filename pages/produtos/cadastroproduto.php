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
        require_once('../../config/config.inc.php');
        include('../../teamplate/navbar.php');
    ?>

<center><h1>Informações do Produto</h1></center>
<form method="post" action="acaoproduto.php">
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
                <textarea name="descricao" id="descricao" rows="6" required class="desc"></textarea>
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
                    <option value="1">Roupas</option>
                    <option value="2">Calçados</option>
                    <option value="3">Acessórios</option>
                </select>
            </div>
        </div>
    </div>

    <div style="text-align: left;">
        <input type="submit" name="acao" value="Salvar">
        <input type="button" value="Cancelar" onclick="history.back()">
    </div>
</form>
</body>
</html>
