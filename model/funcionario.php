<?php

class Funcionario {
    private $idFuncionario;
    private $username;
    private $senha;

    public function setIdFuncionario($idFuncionario) {$this->idFuncionario = $idFuncionario; return $this;}
    public function setUsername($username){$this->username = $username;}
    public function setSenha($senha){$this->senha = $senha;}

    public function getIdFuncionario() {return $this->idFuncionario;}
    public function getUsername(){return $this->username;}
    public function getSenha(){return $this->senha;}

}
?>