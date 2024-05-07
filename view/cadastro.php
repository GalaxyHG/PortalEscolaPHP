<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container d-flex align-center h-100 justify-center">
        <form method="POST">
            <h1>Cadastre-se</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Senha:</label>
                <input type="text" name="pass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" name="cadastrar" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <style>
        body {
            height: 100vh;
        }
    </style>
</body>
</html>

<?php
include_once "../model/funcionario.php";
include_once '../controller/inserirFuncionario.php';

$funcionarioDAO = new DAOFuncionarios();
$funcionario = new Funcionario();

if (isset($_POST['cadastrar'])) {
    $funcionario->setUsername($_POST['username']);
    $funcionario->setSenha($_POST['pass']);

    $funcionarioDAO->Inserir($funcionario);
}
?>