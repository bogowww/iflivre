<html>
    <head>
        <link rel="stylesheet" href="<?php echo URL_BASE . "css/entrar.css" ?>">
    </head>
    <body>
        <div class="header" id="header">
            <div class="logo_header">
                <img src="<?php echo URL_BASE . "img/logoIF.png" ?>" class="imagem_logo" alt="Logo IFC Rio do Sul">
            </div> <!--logo -->
            <div class="nave_header">
                <a href=" <?php echo URL_BASE."index.php" ?>" class="ativacao">HOME</a>
                <a href=" <?php echo URL_BASE."pages/logar/login.php" ?>"class="ativacao"><?php 
                if (isset($_SESSION['id'])){
                    echo "PAGINA PRINCIPAL";
                }else{
                    echo "ENTRAR";
                } ?>
                </a>
                <?php 
                    if(isset($_SESSION['id'])){
                        echo "<a href='" . URL_BASE."config/logado.php?acao=deslogar' class='deslogar'><img src='" . URL_BASE . "imagens/deslogar.png' alt=''></a>";
                    }
                ?>
            </div> <!-- Navegação -->
        </div> <!--header -->
    </body>
</html>