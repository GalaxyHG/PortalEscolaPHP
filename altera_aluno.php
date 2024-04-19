<?php

include_once "aluno.php";
include_once 'inserirAluno.php';
include_once "conexao.php";

$alunoDAO = new DAOAlunos();
$aluno = new Aluno();

if (isset($_POST['alterar'])) {
    $aluno->setIdAluno($id = $_GET['id']);
    $aluno->setNome($nome = $_POST['nome']);
    $aluno->setDtNasc($cpf = $_POST['dtNasc']);
    $aluno->setTel($telefone = $_POST['tel']);
    $aluno->setEndereco($endereco = $_POST['endereco']);
    $aluno->setNomeMae($endereco = $_POST['nomeMae']);
    $aluno->setNomePai($endereco = $_POST['nomePai']);
    $alunoDAO->Atualizar($aluno);
    header("Location: lista_alunos.php");
}

$ids = (int) $_GET['id'];
$linhas = $alunoDAO->Localizar($ids);

if (isset($_GET['acao']) && $_GET['acao'] == 'deletar') {
    $alunoDAO->Deletar($ids);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <title>Alterar um aluno</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Portal Escola</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro_aluno.php">Cadastro de Alunos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro_funcionario.php">Cadastro de Funcionários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro_professor.php">Cadastro de Professores</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Listas</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="lista_alunos.php">Alunos</a></li>
                            <li><a class="dropdown-item" href="lista_funcionarios.php">Funcionários</a></li>
                            <li><a class="dropdown-item" href="lista_professores.php">Professores</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="testaConexao.php">Testar Conexão</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>
    <div class="container">
        <h1 class="mb-3">Alterar Aluno</h1>
    </div>
    <div class="container">
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome do Aluno:</label>
                <?php
                foreach ($linhas as $linha) {
                    echo '<input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="' . $linha->nomeAluno . '">';
                    ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Data de Nascimento:</label>
                    <?php
                    echo '<input type="text" name="dtNasc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="' . $linha->dt_nasc . '">';
                    ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Telefone:</label>
                    <?php
                    echo '<input type="text" name="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="' . $linha->telAluno . '">';
                    ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Endereço:</label>
                    <?php
                    echo '<input type="text" name="endereco" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="' . $linha->enderecoAluno . '">';
                    ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome da Mãe:</label>
                    <?php
                    echo '<input type="text" name="nomeMae" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="' . $linha->maeAluno . '">';
                    ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome do Pai:</label>
                    <?php
                    echo '<input type="text" name="nomePai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="' . $linha->paiAluno . '">';
                    } ?>
            </div>
            <button type="submit" name="alterar" class="btn btn-primary">Alterar</button>
        </form>
    </div>
</body>

</html>