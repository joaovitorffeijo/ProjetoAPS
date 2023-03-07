<?php

include('../model/Usuario.php');

function input_data($data) {  
    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  
}

$nome = $sexo = $email = $senha = $tel = $lattes = $formacao = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = input_data($_POST["nome"]);
        $sexo = input_data($_POST["sexo"]);
        $email = input_data($_POST["email"]);
        $senha = input_data($_POST["senha"]);
        $tel = input_data($_POST["tel"]);
        $lattes = input_data($_POST["lattes"]); 
        $formacao = input_data($_POST["formacao"]);
}

if ($nome != "" 
&& $sexo != "" 
&& $email != "" 
&& $senha != ""
&& $tel != "" 
&& $lattes != "" 
&& $formacao != "") {
    $usuario = new Usuario();
    $usuario->cadastroUsuario($nome, $sexo, $email, $senha, $tel, $lattes, $formacao);
    echo "Cadastrado com sucesso!";
    unset($usuario);
}
?>