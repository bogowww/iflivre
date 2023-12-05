<?php
    require_once ('../config/config.inc.php');
    require_once ('../classes/database.class.php');

 class Usuario{
    private $idusuario;
    private $nome;
    private $email;
    private $senha;
    private $matricula;
    private $idtipousuario;
    
    public function __construct($idusuario, $nome, $email, $senha, $matricula, $idtipousuario) {
        $this->setidtipousuario($idtipousuario);
        $this->setidusuario($idusuario);
        $this->setnome($nome);
        $this->setemail($email);
        $this->setmatricula($matricula); 
        $this->setsenha($senha);
    }

    public function setidtipousuario($idtipousuario) {
        $this->idtipousuario = $idtipousuario;
    }

    public function getidtipousuario() {
        return $this->idtipousuario;
    }

    public function setidusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    public function getidusuario() {
        return $this->idusuario;
    }

    public function setnome($nome) {
        $this->nome = $nome;
    }

    public function getnome() {
        return $this->nome;
    }

    public function setemail($email) {
        $this->email = $email;
    }

    public function getemail() {
        return $this->email;
    }

    public function setsenha($senha) {
        $this->senha = $senha;
    }

    public function getsenha() {
        return $this->senha;
    }

    public function setmatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getmatricula() {
        return $this->matricula;
    }

    public function salvar() {
        $sql = "INSERT INTO usuario (nome, email, senha, matricula, tipousuario_idtipousuario) VALUES (:nome, :email, :senha, :matricula, :idtipousuario)";
        $params = array(
            ':nome' => $this->nome,
            ':email' => $this ->email,
            ':senha' => $this -> senha,
            ':matricula' => $this->matricula,
            ':idtipousuario' => $this -> idtipousuario
        );
        return Database::executar($sql, $params);
    }

    public function listar($tipo = 0, $info = '1', $info2 = '1'){
        $sql = 'SELECT * FROM usuario';
        switch($tipo){
            case 1: $sql .= ' WHERE idusuario = :info'; break;
            case 2: $sql .= ' WHERE email like :info and senha like :info2';  break;
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
