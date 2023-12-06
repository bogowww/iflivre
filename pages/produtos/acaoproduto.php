<?php
$idproduto = isset($_POST['idproduto'])?$_POST['idproduto']:0;
$titulo = isset($_POST['titulo'])?$_POST['titulo']:0;
$idtipoprodutos = isset($_POST['idtipoprodutos'])?$_POST['idtipoprodutos']:1;
$tamanho = isset($_POST['tamanho'])?$_POST['tamanho']:1;
$descricao = isset($_POST['descricao'])?$_POST['descricao']:1;
$quantidade = isset($_POST['quantidade'])?$_POST['quantidade']:1;
$acao = isset($_POST['acao'])?$_POST['acao']:'';
    
    require_once('../../classes/produto.class.php');

    if ($acao == 'Salvar'){
        echo "a";
    try{        
        $Prods = new Produto($idproduto, $titulo, $tamanho, $quantidade, $descricao, $idtipoprodutos);
        if ($idproduto > 0){
            echo "teste";
            //$Prods->editar();
            header('location:index.php');
        }
        else{
            echo "aaa";
            $Prods -> salvar();
        header('location:cadastro.php'); 
        }  
    }catch(Exception $e){
        echo "Erro ao inserir: ".$e->getMessage();
    }
}else if($acao == 'excluir'){
    try{
        require_once('../../classes/livro.class.php');
        $Eusuario = new Usuario($idproduto, $titulo, $idtipoprodutos, $quantidade, $descricao, $idtipoprodutos);
        //$Eusuario->excluir();
        header('location:index.php');

    }catch(Exception $e){
        echo "Erro: ".$e->getMessage();
    }
}

if ($acao == 'logar'){

    try{        
        $Prods = new Usuario($idproduto, $titulo, $idtipoprodutos, $quantidade, $descricao, $idtipoprodutos);
        $consulta = $Prods -> listar(2, $idtipoprodutos, $quantidade);
        foreach ($consulta as $pesquisa) {
            echo $pesquisa['titulo'];
        }  
    }catch(Exception $e){
        echo "Erro ao inserir: ".$e->getMessage();
    }
}

?>