<?php

require_once 'conexao.php';
require_once '../model/funcionario.php';

class DAOFuncionarios {
    public function Inserir(Funcionario $f)
    {
        $sql = "INSERT INTO funcionario VALUES(default,?,?)";
        $stmt = FabricaConexao::Conexao()->prepare($sql);

        $stmt->bindValue(1,$f -> getUsername());
        $stmt->bindValue(2,$f -> getSenha());
        $stmt->execute();

        header("Location: ../index.php");
    }

    public function Atualizar(Funcionario $f)
    {
        $sql = 'UPDATE funcionario SET username=?, pass=? WHERE idFuncionario=?';
        $stmt = FabricaConexao::Conexao()->prepare($sql);

        $stmt->bindValue(1,$f -> getUsername());
        $stmt->bindValue(2,$f -> getSenha());
        $stmt->bindValue(3,$f -> getIdFuncionario());
        
        $stmt->execute();
    }

    public function Localizar($id)
    {
        $sql = "SELECT * FROM funcionario WHERE idFuncionario = :id";
        $stmt = FabricaConexao::Conexao()->prepare($sql);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function Deletar($id)
    {
        $sql = "DELETE FROM funcionario WHERE idFuncionario = :id";
        $stmt = FabricaConexao::Conexao()->prepare($sql);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
    }
}

?>