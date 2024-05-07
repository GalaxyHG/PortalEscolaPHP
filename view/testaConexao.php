<?php

define('HOST','mysql:host=localhost;dbname=portalEscola;charset=utf8');
define('USER','root');
define('PASSWORD','');

function TestaConexao()
{
    static $conn;

    try {
        if (!isset($conn)):
            $conn = new PDO(HOST,USER,PASSWORD);
            $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        endif;
        echo "Conexão com o banco de dados estabelecida!";
    }
    catch (PDOException $e) {
        echo "Falha de Conexão <br>" . $e -> getMessage();
        die();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testa Conexão</title>
</head>
<body>
    <?php TestaConexao(); ?><br><br>
    <a href="menu.php">Voltar ao menu principal</a>
</body>
</html>