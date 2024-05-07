<?php
    session_start();
    $username = $_POST['username'];
    $senha = $_POST['pass'];

    require_once "conexao.php";

    if($username != "" and $senha != "")
    {
        $sql = "SELECT * FROM funcionario WHERE username = '$username' and pass = '$senha'";
        $command = FabricaConexao::Conexao()->prepare($sql);
        $command->execute();

        if($command->rowCount())
        {
            $_SESSION['sessao'] = $username;
            header("Location: ../view/menu.php");
        }
        else
        {
            echo "<script language='javascript' type='text/javascript'> alert('Os dados não conferem!'); window.location.href='../index.php';</script>";
        }

    }
?>