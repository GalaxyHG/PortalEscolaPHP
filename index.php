<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Menu Principal</title>
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
                        <a class="nav-link active" aria-current="page" href="ndex.php">Inicio</a>
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
</body>
</html>