<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="../../css/produto.css">
</head>
<body>
    <?php
        require_once('../../config/config.inc.php');
        include('../../teamplate/navbar.php');
    ?>
<div class="container">
    <h1>Lista de Produtos</h1>

    <div class="search-container">
        <input type="text" placeholder="Pesquisar por produto...">
        <button type="submit">
            <img src="https://img.icons8.com/material-sharp/24/000000/search.png" alt="Ícone de Lupa">
        </button>
    </div>
    <div class="product-container">
    <?php 
        require_once('../../classes/produto.class.php');

        $showproduto = new Produto(1,1,1,1,1,1);
        $variavel = $showproduto -> listar();

        foreach ($variavel as $variavelchave) {
            
            echo "<div class='product'>
                <a href='showproduto.php'>
                    <img src='../../img/cheese-frango.webp' alt=''>
                    <h3>". $variavelchave['titulo'] ."</h3>
                    <h3>". $variavelchave['descricao'] ."</h3>
                </a>
            </div>";
        }

    ?>
        <!-- Exemplo de produto -->
        <!-- Adicione mais produtos conforme necessário -->
    </div>
</div>

</body>
</html>
