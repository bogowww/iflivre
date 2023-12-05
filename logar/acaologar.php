<?php
$idusuario = isset($_POST['idlivros'])?$_POST['idlivros']:0;
$nome = isset($_POST['nome'])?$_POST['nome']:0;
$idtipousuario = isset($_POST['idtipousuarioo'])?$_POST['idtiposuario']:1;
$email = isset($_POST['email'])?$_POST['email']:1;
$matricula = isset($_POST['matricula'])?$_POST['matricula']:1;
$senha = isset($_POST['senha'])?$_POST['senha']:1;
$acao = isset($_POST['acao'])?$_POST['acao']:'';
    
    require_once('../classes/usuario.class.php');

    if ($acao == 'salvar'){

    try{        
        $Nusuario = new Usuario($idusuario, $nome, $email, $senha, $matricula, $idtipousuario);
        if ($idusuario > 0){
            echo "teste";
            //$Nusuario->editar();
            header('location:index.php');
        }
        else{
            $Nusuario -> salvar();
        header('location:login.php'); 
        }  
    }catch(Exception $e){
        echo "Erro ao inserir: ".$e->getMessage();
    }
}else if($acao == 'excluir'){
    try{
        require_once('../../classes/livro.class.php');
        $Eusuario = new Usuario($idusuario, $nome, $email, $senha, $matricula, $idtipousuario);
        //$Eusuario->excluir();
        header('location:index.php');

    }catch(Exception $e){
        echo "Erro: ".$e->getMessage();
    }
}

if ($acao == 'logar'){

    try{        
        $Nusuario = new Usuario($idusuario, $nome, $email, $senha, $matricula, $idtipousuario);
        $consulta = $Nusuario -> listar(2, $email, $senha);
        foreach ($consulta as $pesquisa) {
            echo $pesquisa['nome'];
        }  
    }catch(Exception $e){
        echo "Erro ao inserir: ".$e->getMessage();
    }
}

?>