<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "projeto_APS";

    // Criar a conexão:
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname) or die("Erro na conexão.");
?>