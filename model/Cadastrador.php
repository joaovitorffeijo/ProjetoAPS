<?php

require_once('Usuario.php');

class Cadastrador extends Usuario{

    private $id;
    private $valid;
    private $email;
    private $senha;
    private $nome;
    private $sexo;
    private $telefone;
    private $lattes;
    private $formacao;

    function iniciarSession($usuario_result, $nome, $email, $sexo, $telefone, $lattes, $formacao) 
    {
        if(!isset($_SESSION)) 
        {
            session_start();
            $_SESSION['nome'] = $nome;
            $_SESSION['email'] = $email;
            $_SESSION['sexo'] = $sexo;
            $_SESSION['telefone'] = $telefone;
            $_SESSION['lattes'] = $lattes;
            $_SESSION['formacao'] = $formacao;
            header('Location: homeCad.php');
        }
    }

    function cadastrarArtigo() {
        
    }

    function cadastrarEvento() {

    }
}
?>