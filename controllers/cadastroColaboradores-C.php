<?php

include('../model/Cadastrador.php');

function input_data($data) {  
    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  
}

$nome = $sexo = $instituicao = $lattes = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = input_data($_POST["nome"]);
        $sexo = input_data($_POST["sexo"]);
        $instituicao = input_data($_POST["instituicao"]);
        $lattes = input_data($_POST["lattes"]); 
}

if ($nome != "" 
    && $sexo != "" 
    && $lattes != "" 
    && $instituicao != "") {
    $cadastrador = new Cadastrador();
    $cadastrador->cadastrarColaborador($nome, $sexo, $instituicao, $lattes);
    header("location: cadastroEventos.php");
    echo "Cadastrado com sucesso!";
    unset($cadastrador);
}

?>