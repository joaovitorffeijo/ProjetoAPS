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
}
?>