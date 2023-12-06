<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Sua Página</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-white bg-white">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo URL_BASE . "pages/produtos/cadastroproduto.php" ?>"><b> Anunciar</b></a>
        </li>
    </ul>
    <a class="navbar-brand mx-auto" href="<?php echo URL_BASE . "index.php" ?>">IFLIVRE</a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <img src="<?php echo URL_BASE. "img/email.png" ?>" alt="Email" width="30" height="30">
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <img src="<?php echo URL_BASE . "img/pessoa.png"; ?>" alt="Pessoa" width="30" height="30">
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URL_BASE . "pages/produtos/listaproduto.php" ?>">
          <img src="<?php echo URL_BASE."img/loja.png";?>" alt="Loja" width="30" height="30">
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URL_BASE . "pages/logar/acaologar.php?acao=logout" ?>">
          <img src="<?php echo URL_BASE."img/20278.png";?>" alt="logout" width="30" height="30">
        </a>
      </li>
    </ul>
  </div>
</nav>
