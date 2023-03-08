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

    function cadastrarEvento($nome, $colaboradores, $data, $pin, $tipo, $trilhas, $descricao, $link) {
        include('../controllers/connect.php');

        if(!isset($_SESSION)) {
            session_start();
        }

        $id_cadastrador = intval($_SESSION['id']);
        
        $result_evento = "INSERT INTO evento (nome, data_evento, pin, descricao, link, tipo, cadastrado_por) 
                                VALUES ('$nome', '$data', '$pin', '$descricao', '$link', '$tipo', '$id_cadastrador')";
        $result_evento = mysqli_query($conn, $result_evento);

        if (!$result_evento) {
        echo "Erro na consulta: ". mysqli_error($conn);
        }

        $result_evento = "SELECT id FROM evento WHERE nome = '$nome'";
        $result_evento = mysqli_query($conn, $result_evento);

        if (!$result_evento) {
            echo "Erro na consulta: ". mysqli_error($conn);
        }

        $row = mysqli_fetch_assoc($result_evento);
        $id_evento = $row['id'];

        foreach ($trilhas as $id_trilha) {
            $result_trilha = "INSERT INTO trilhaDoEvento (id_trilha, id_evento)
                            VALUES ('$id_trilha', '$id_evento')";
            $result_trilha = mysqli_query($conn, $result_trilha);

            if (!$result_trilha) {
                echo "Erro na consulta: ". mysqli_error($conn);
            }
        }

        foreach ($colaboradores as $id_colaborador) {
            $result_colaborador = "INSERT INTO organizouEvento (id_colaborador, id_evento)
                            VALUES ('$id_colaborador', '$id_evento')";
            $result_colaborador = mysqli_query($conn, $result_colaborador);

            if (!$result_colaborador) {
                echo "Erro na consulta: ". mysqli_error($conn);
            }
        }

        if (!$result_colaborador) {
            echo "Erro na consulta: ". mysqli_error($conn);
        }

        mysqli_close($conn);
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

    function cadastrarTrilha ($nome) 
    {
        include('../controllers/connect.php');

        $result_colaborador = "INSERT INTO trilhas (nome) 
                       VALUES ('$nome')";
        $result_colaborador = mysqli_query($conn, $result_colaborador);

        if (!$result_colaborador) {
            echo "Erro na consulta: ". mysqli_error($conn);
        }

        mysqli_close($conn);
    }
}
?>