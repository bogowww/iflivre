<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/entrar.css">
</head>
<body>
<a href="../../index.php"><img class="voltar" src="../../img/seta.png" alt=""></a>
<div class="corpo">
    <h1 class="h1">CRIE UMA CONTA</h1>
    <h6>Faça seu cadastro para continuar</h6>

    <form action="acaologar.php" method="post">
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome"> <br>
        <input type="text" class="form-control" name="email" id="email" placeholder="Email"> <br>
        <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha"> <br>
        <h5 class="navegar">Já possui um cadastro? <a href="login.php">Entrar</a></h3>

        <button type="submit" name="acao" value="salvar" class="btn btn-dark">Cadastrar</button>
    </form>
</div>
</body>
</html>
