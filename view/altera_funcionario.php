<?php

include_once "../model/funcionario.php";
include_once '../controller/inserirFuncionario.php';
include_once "../controller/conexao.php";

$funcionarioDAO = new DAOFuncionarios();
$funcionario = new Funcionario();

if (isset($_POST['alterar'])) {
    $funcionario->setIdFuncionario($id = $_GET['id']);
    $funcionario->setUsername($username = $_POST['username']);
    $funcionario->setSenha($pass = $_POST['pass']);
    $funcionarioDAO->Atualizar($funcionario);
    echo "<script language='javascript' type='text/javascript'> alert('Faça login novamente!'); window.location.href='../ndex.php';</script>";
}

$ids = (int) $_GET['id'];
$linhas = $funcionarioDAO->Localizar($ids);

if (isset($_GET['acao']) && $_GET['acao'] == 'deletar') {
    $funcionarioDAO->Deletar($ids);
    if($linha->username == $_SESSION['sessao'])
    {
        header("Location: ../index.php");
    }
    else {
        header("Location: lista_funcionarios.php");
    }
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
    <title>Alterar um Funcionario</title>
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
                        <a class="nav-link active" aria-current="page" href="menu.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro_aluno.php">Cadastro de Alunos</a>
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
        <h1 class="mb-3">Alterar Funcionario</h1>
    </div>
    <div class="container">
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username:</label>
                <?php
                foreach ($linhas as $linha) {
                    echo '<input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="' . $linha->username . '">';
                    ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Senha:</label>
                    <?php
                    echo '<input type="text" name="pass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="' . $linha->pass . '">';
                 } ?>
            </div>
            <button type="submit" name="alterar" class="btn btn-primary">Alterar</button>
        </form>
    </div>
</body>

</html>