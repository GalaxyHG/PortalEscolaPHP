<?php

class Aluno {
    private $idAluno;
    private $nome;
    private $dtNasc;
    private $telefone;
    private $endereco;
    private $nomeMae;
    private $nomePai;

    public function setIdAluno($idAluno) {$this->idAluno = $idAluno; return $this;}
    public function setNome($nome){$this->nome = $nome;}
    public function setDtNasc($dtNasc){$this->dtNasc = $dtNasc;}
    public function setTel($telefone){$this->telefone = $telefone;}
    public function setEndereco($endereco){$this->endereco = $endereco;}
    public function setNomeMae($nomeMae){$this->nomeMae = $nomeMae;}
    public function setNomePai($nomePai){$this->nomePai = $nomePai;}

    public function getIdAluno() {return $this->idAluno;}
    public function getNome(){return $this->nome;}
    public function getDtNasc(){return $this->dtNasc;}
    public function getTelefone(){return $this->telefone;}
    public function getEndereco(){return $this->endereco;}
    public function getNomeMae(){return $this->nomeMae;}
    public function getNomePai(){return $this->nomePai;}

}
?>