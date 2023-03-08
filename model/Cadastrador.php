<?php

require_once('Usuario.php');

// falta autorizar o cadastrador apenas se o valid for true.

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

    function cadastrarColaborador($nome, $sexo, $instituicao, $lattes) 
    {
        include('../controllers/connect.php');

        $result_colaborador = "INSERT INTO colaborador (nome, sexo, instituicao, lattes) 
                       VALUES ('$nome', '$sexo', '$instituicao', '$lattes')";
        $result_colaborador = mysqli_query($conn, $result_colaborador);

        if (!$result_colaborador) {
            echo "Erro na consulta: ". mysqli_error($conn);
        }

        mysqli_close($conn);
    }
}
?>