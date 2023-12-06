<?php
    require_once ('../../config/config.inc.php');
    require_once ('../../classes/database.class.php');

 class Produto{
    private $idproduto;
    private $titulo;
    private $tamanho;
    private $quantidade;
    private $descricao;
    private $idtipoprodutos;
    
    public function __construct($idproduto, $titulo, $tamanho, $quantidade, $descricao, $idtipoprodutos) {
        $this->setidtipoprodutos($idtipoprodutos);
        $this->setidproduto($idproduto);
        $this->settitulo($titulo);
        $this->settamanho($tamanho);
        $this->setdescricao($descricao); 
        $this->setquantidade($quantidade);
    }

    public function setidtipoprodutos($idtipoprodutos) {
        $this->idtipoprodutos = $idtipoprodutos;
    }

    public function getidtipoprodutos() {
        return $this->idtipoprodutos;
    }

    public function setidproduto($idproduto) {
        $this->idproduto = $idproduto;
    }

    public function getidproduto() {
        return $this->idproduto;
    }

    public function settitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function gettitulo() {
        return $this->titulo;
    }

    public function settamanho($tamanho) {
        $this->tamanho = $tamanho;
    }

    public function gettamanho() {
        return $this->tamanho;
    }

    public function setquantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function getquantidade() {
        return $this->quantidade;
    }

    public function setdescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getdescricao() {
        return $this->descricao;
    }

    public function salvar() {
        $sql = "INSERT INTO produtos (titulo, tamanho, quantidade, descricao, idtipoprodutos) VALUES (:titulo, :tamanho, :quantidade, :descricao, :idtipoprodutos)";
        $params = array(
            ':titulo' => $this->titulo,
            ':tamanho' => $this ->tamanho,
            ':quantidade' => $this -> quantidade,
            ':descricao' => $this->descricao,
            ':idtipoprodutos' => $this -> idtipoprodutos
        );
        return Database::executar($sql, $params);
    }

    public function listar($tipo = 0, $info = '', $info2 = ''){
        $sql = 'SELECT * FROM produtos';
        switch($tipo){
            case 1: $sql .= ' WHERE idproduto = :info'; break;
            case 2: $sql .= ' WHERE tamanho like :info and quantidade like :info2';  break;
            case 3: $sql .= ' WHERE trianglucol = :info'; break;
        }           
        $params = array();
        if ($tipo > 0){
            $params = array(':info'=>$info, 
                            ':info2'=>$info2);
        }
        return Database::listar($sql, $params);
    }


}

?>
