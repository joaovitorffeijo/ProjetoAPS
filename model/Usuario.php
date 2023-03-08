<?php

class Usuario{
	function cadastroUsuario($nome, $sexo, $email, $senha, $tel, $lattes, $formacao) {
        include('../controllers/connect.php');

        $senha = $conn->real_escape_string(trim(md5($_POST['senha'])));

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

        $senha = $conn->real_escape_string(trim(md5($_POST["senha"])));

        $usuario_logado = "SELECT * FROM usuarioCad WHERE email = '$email'";
        $usuario_result = mysqli_query($conn, $usuario_logado);

        if (!$usuario_logado) {
            echo "Erro na consulta: ". mysqli_error($conn);
        }

        $row = mysqli_fetch_assoc($usuario_result);
        $senha_tab = $row['senha'];
        $id = $row['id'];
        $nome = $row['nome'];
        $email = $row['email'];
        $sexo = $row['sexo'];
        $telefone = $row['telefone'];
        $lattes = $row['lattes'];
        $formacao = $row['formacao'];

        mysqli_close($conn);

        if($senha == $senha_tab) {
            $cadastrador = new Cadastrador();
            $cadastrador->iniciarSession ($usuario_result, $id, $nome, $email, $sexo, $telefone, $lattes, $formacao);
        }
        else {
            echo 'Senha Inválida';
        }


    }
}
?>