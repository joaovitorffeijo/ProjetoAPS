<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "projetoAPS";

    // Criar a conexão:
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname) or die("Erro na conexão.");

?>