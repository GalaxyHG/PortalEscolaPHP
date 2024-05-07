<?php
    header('Content-Type: text/html; charset=utf-8');

    include_once '../controller/inserirFuncionario.php';
    include_once '../controller/conexao.php';

    $sql = 'SELECT * FROM funcionario';
    $stmt = FabricaConexao::Conexao()->prepare($sql);
    $stmt->execute();
    $linhas = $stmt->fetchAll(PDO::FETCH_CLASS);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Lista Funcionarios</title>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Portal Escola</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        <h1>Listagem de Funcionarios</h1>
    </div>
    <div class="container py-9">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Senha</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($linhas as $linha) {
                    echo "<tr>";
                    echo "<td>" . $linha->idFuncionario . "</td>";
                    echo "<td>" . $linha->username . "</td>";
                    echo "<td>" . $linha->pass. "</td>";
                    echo '<td><a class="btn btn-sm btn-primary"href="altera_funcionario.php?acao=alterar&id='. $linha->idFuncionario .'">Editar</a></td>';
                    echo '<td><a class="btn btn-sm btn-danger"href="altera_funcionario.php?acao=deletar&id='. $linha->idFuncionario .'">Deletar</a></td>';
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php
    ?>
</body>

</html>