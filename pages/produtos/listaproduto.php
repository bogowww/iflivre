<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .search-container {
            display: flex;
            align-items: center;
            justify-content: center; /* Centralizar o conteúdo horizontalmente */
            margin-bottom: 20px;
        }

        input[type="text"] {
            flex: 1;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px 0 0 4px;
        }

        button[type="submit"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            font-size: 16px;
            background-color: #fff;
            color: #555;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .product {
            width: 180px;
            margin: 10px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .product a {
            text-decoration: none;
            color: inherit;
        }

        .product img {
            width: 100%;
            max-height: 120px;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .product h3 {
            font-size: 14px;
            margin-bottom: 8px;
            color: #555;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Lista de Produtos</h1>

    <div class="search-container">
        <input type="text" placeholder="Pesquisar por produto...">
        <button type="submit">
            <img src="https://img.icons8.com/material-sharp/24/000000/search.png" alt="Ícone de Lupa">
        </button>
    </div>

    <div class="product-container">
        <!-- Exemplo de produto -->
        <div class="product">
            <a href="#">
                <img src="link_da_sua_imagem1.jpg" alt="Produto 1">
                <h3>Produto 1</h3>
            </a>
        </div>

        <div class="product">
            <a href="#">
                <img src="link_da_sua_imagem2.jpg" alt="Produto 2">
                <h3>Produto 2</h3>
            </a>
        </div>

        <div class="product">
            <a href="#">
                <img src="link_da_sua_imagem3.jpg" alt="Produto 3">
                <h3>Produto 3</h3>
            </a>
        </div>

        <!-- Adicione mais produtos conforme necessário -->
    </div>
</div>

</body>
</html>
