<?php

require_once('Usuario.php');

class Cadastrador extends Usuario{

    function iniciarSession($usuarioCad) 
    {
        if(!isset($_SESSION)) 
        {
            session_start();
            $_SESSION['nome'] = $usuarioCad['nome'];
            header('Location: homeCad.php');
        }
    }
}
?>