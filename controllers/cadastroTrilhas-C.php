<?php

include('../model/Cadastrador.php');

function input_data($data) {  
    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  
}

$nome = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = input_data($_POST["nome"]);
}

if ($nome != "") {
    $cadastrador = new Cadastrador();
    $cadastrador->cadastrarTrilha($nome);
    header("location: cadastroEventos.php");
    echo "Cadastrado com sucesso!";
    unset($cadastrador);
}

?>