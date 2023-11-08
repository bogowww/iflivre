<?php
abstract class TipoUsuario {
    private $idtipousuario;
    private $tipo;
    
    public function __construct($idtipousuario, $tipo, $matricula) {
        $this->idtipousuario = $idtipousuario;
        $this->tipo = $tipo;
    }

    public function setIdtipousuario($idtipousuario) {
        $this->idtipousuario = $idtipousuario;
    }

    public function getIdtipousuario() {
        return $this->idtipousuario;
    }

    public function settipo($tipo) {
        $this->tipo = $tipo;
    }

    public function gettipo() {
        return $this->tipo;
    }

    /*public function salvar() {
        $sql = "INSERT INTO usuario (tipo, matricula) VALUES (:tipo, :matricula)";
        $params = array(
            ':tipo' => $this->tipo,
            ':matricula' => $this->matricula,
        );
        return BancoDeDados::executar($sql, $params);
    }*/


}

?>
