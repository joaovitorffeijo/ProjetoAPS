<?php

include('../model/Usuario.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['email']) || isset($_POST['senha'])) {
        if(strlen($_POST['email']) == 0) {
            echo "Email ou senha inválidos";
        }
        else if (strlen($_POST['senha']) == 0) {
            echo "Email ou senha inválidos";
        }
        else {
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $usuario = new Usuario();
            $usuario->loginUsuario($email, $senha);
        }
    }
}

?>