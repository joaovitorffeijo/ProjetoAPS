<?php

include('../model/Cadastrador.php');

function input_data($data) {  
    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  
}

$nome = $colaboradores = $data = $pin = $confirma = $tipo = $trilhas = $descricao = $link = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = input_data($_POST["nome"]);
        $colaboradores = input_data($_POST["colaboradores"]);
        $data = input_data($_POST["data"]);
        if(input_data($_POST["pin"]) == input_data($_POST["confirma"]))
            $pin = input_data($_POST["pin"]);
        $tipo = input_data($_POST["tipo"]);
        $trilhas = input_data($_POST["trilhas"]); 
        $descricao = input_data($_POST["descricao"]);
        $link = input_data($_POST["link"]);
}

if ($nome != "" 
    && $colaboradores != "" 
    && $data != "" 
    && $pin != ""
    && $tipo != "" 
    && $trilhas != "" 
    && $descricao != ""
    && $link != "") {
    $cadastrador = new cadastrador();
    $cadastrador->cadastrarEvento($nome, $colaboradores, $data, $pin, $tipo, $trilhas, $descricao, $link);
    echo "Cadastrado com sucesso!";
    unset($cadastrador);
}

?>