<?php
abstract class Usuario {
    private $idtipovenda;
    private $tipovenda;

    public function __construct($idtipovenda, $tipovenda) {
        $this->idtipovenda = $idtipovenda;
        $this->tipovenda = $tipovenda;
    }

    public function setIdtipovenda($idtipovenda) {
        $this->idtipovenda = $idtipovenda;
    }

    public function getIdtipovenda() {
        return $this->idtipovenda;
    }

    public function settipovenda($tipovenda) {
        $this->tipovenda = $tipovenda;
    }

    public function gettipovenda() {
        return $this->tipovenda;
    }


    /*public function salvar() {
        $sql = "INSERT INTO usuario (tipovenda, matricula) VALUES (:tipovenda, :matricula)";
        $params = array(
            ':tipovenda' => $this->tipovenda,
            ':matricula' => $this->matricula,
        );
        return BancoDeDados::executar($sql, $params);
    }*/


}

?>
