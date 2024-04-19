<?php

require_once 'conexao.php';
require_once 'aluno.php';

class DAOAlunos {
    public function Inserir(Aluno $c)
    {
        $sql = "INSERT INTO aluno VALUES(default,?,?,?,?,?,?)";
        $stmt = FabricaConexao::Conexao()->prepare($sql);

        $stmt->bindValue(1,$c -> getNome());
        $stmt->bindValue(2,$c -> getDtNasc());
        $stmt->bindValue(3,$c -> getTelefone());
        $stmt->bindValue(4,$c -> getEndereco());
        $stmt->bindValue(5,$c -> getNomeMae());
        $stmt->bindValue(6,$c -> getNomePai());
        $stmt->execute();

        header('Location: lista_alunos.php');
    }

    public function Atualizar(Aluno $c)
    {
        $sql = 'UPDATE aluno SET nomeAluno=?, dt_nasc=?, telAluno=?, enderecoAluno=?, maeAluno=?, paiAluno=? WHERE idAluno=?';
        $stmt = FabricaConexao::Conexao()->prepare($sql);

        $stmt->bindValue(1,$c -> getNome());
        $stmt->bindValue(2,$c -> getDtNasc());
        $stmt->bindValue(3,$c -> getTelefone());
        $stmt->bindValue(4,$c -> getEndereco());
        $stmt->bindValue(5,$c -> getNomeMae());
        $stmt->bindValue(6,$c -> getNomePai());
        $stmt->bindValue(7,$c -> getIdAluno());
        
        $stmt->execute();
    }

    public function Localizar($id)
    {
        $sql = "SELECT * FROM aluno WHERE idAluno = :id";
        $stmt = FabricaConexao::Conexao()->prepare($sql);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function Deletar($id)
    {
        $sql = "DELETE FROM aluno WHERE idAluno = :id";
        $stmt = FabricaConexao::Conexao()->prepare($sql);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
        header('Location: lista_alunos.php');
    }
}

?>