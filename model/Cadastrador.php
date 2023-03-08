<?php

require_once('Usuario.php');

class Cadastrador extends Usuario{

    $id;
    $valid;
    $email;
    $senha;
    $nome;
    $sexo;
    $telefone;
    $lattes;
    $formacao;

    function iniciarSession($usuario_result, $nome) 
    {
        if(!isset($_SESSION)) 
        {
            session_start();
            $_SESSION['nome'] = $nome;
            header('Location: homeCad.php');
        }
    }

    function cadastrarArtigo() {
        
    }

    function cadastrarEvento() {

    }
}
?>