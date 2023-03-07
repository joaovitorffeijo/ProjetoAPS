<?php

class Usuario{
	function cadastroUsuario($nome, $sexo, $email, $senha, $tel, $lattes, $formacao) {
        include('../controllers/connect.php');

        $senha = password_hash($senha, PASSWORD_DEFAULT);

        $result_usuarios = "INSERT INTO usuarioCad (valid, email, senha, nome, sexo, telefone, lattes, formacao) 
                       VALUES (0, '$email', '$senha', '$nome', '$sexo', '$tel', '$lattes', '$formacao')";
        $result_usuarios = mysqli_query($conn, $result_usuarios);

        if (!$result_usuarios) {
            echo "Erro na consulta: ". mysqli_error($conn);
        }

        mysqli_close($conn);
    }

    function loginUsuario($email, $senha) {
        include('../controllers/connect.php');
        include('../model/Cadastrador.php');

        $email = mysqli_real_escape_string($conn, $email);
        $senha_login = mysqli_real_escape_string($conn, $senha);

        $usuario_logado = "SELECT senha FROM usuarioCad WHERE email = '$email'";
        $usuario_result = mysqli_query($conn, $usuario_logado);

        if (!$usuario_logado) {
            echo "Erro na consulta: ". mysqli_error($conn);
        }

        mysqli_close($conn);

        $row = mysqli_fetch_assoc($usuario_result);
        $senha_hash = $row['senha'];

        if(password_verify($senha_login, $senha_hash)) {
            $cadastrador = new Cadastrador();
            $cadastrador->iniciarSession ($usuarioCad);
        }


    }
}
?>