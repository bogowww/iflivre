<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    session_start();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>IFLIVRE</title>
</head>
<body>
    <div class="container">
        <div class="if">
            <h4>IFLIVRE</h4>
        </div>
        <div class="p1">
            <h2 class="aa">Vista o mundo de solidariedade, doe roupas e faça a</h2>
            <h2>diferença!</h2>
        </div>
        <div class="bu">
            <?php 
                if (isset($_SESSION['logado'])) {
                    echo "<a href='pages/produtos/listaproduto.php'><button type='button' class='btn btn-dark'>Entrar</button></a>";
                }else
                    echo "<a href='pages/logar/login.php'><button type='button' class='btn btn-dark'>Entrar</button></a>"
            ?>
        </div>
        <div class="lina">
                <div class="pz">
                <p>Caso não tenha se cadastrado, <a href="pages/logar/cadastro.php">FAZER CADASTRO</a></p>
                </div>
                <img class="gosei" src="img/imagemgrupo.png" alt="Imagem"/>
        </div>
    </div>
</body>
</html>