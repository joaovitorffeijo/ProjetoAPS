<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cadastro-login.css">
    <title>Cadastrar evento</title>
</head>

<?php 
include('../controllers/cadastroEvento-C.php');
?>

<body>
    <div style="position:sticky; top: 0; margin-bottom: -120px;">
        <iframe  src="headerCad.php" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" width="100%"></iframe>
    </div>

    <div class="cadastro-login">
        <div class="intro">
            <h1>CADASTRE SEU EVENTO</h1>
            <p>Crie seu evento e convide colaboradores!</p>
        </div>

        <div class="cadastro-box">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="nome">Nome do evento</label><br>
                <input name="nome" type="text" id="nome"><br>
                <label for="colaboradores">Vincular Pessoa</label><br>
                <select name="colaboradores" class="colaboradores" multiple size="4">
                    <?php
                        include('../controllers/connect.php');
                        $result_colaborador = "SELECT id, nome FROM colaborador";
                        $result_colaborador = mysqli_query($conn, $result_colaborador);

                        while ($row = mysqli_fetch_array($result_colaborador))  { 
                            $id = $row['id'];
                            $nome = $row['nome'];
                            if (is_string($id) && $nome != "") {
                                echo "<option value='$id'> $nome </option>";
                            }
                        }
                    ?>
                </select> <br>
                <button class="colabButton"><a href="./cadastroColaboradores.php">Adicionar colaborador</a></button><br>
                <label for="data">Data</label><br>
                <input name="data" type="date" id="data"><br>
                <label for="pin">PIN do evento</label><br>
                <input name="pin" type="password" id="pin"><br>
                <label for="confirma">Confirmar PIN</label><br>
                <input name="confirma" type="password" id="confirma"><br>
                <label for="tipo">Tipo do Evento</label><br>
                <input name="tipo" type="text" id="tipo"><br>
                <label for="link">Link do Evento</label><br>
                <input name="link" type="text" id="tipo"><br>
                <label for="trilhas">Trilha do Evento</label><br>
                <select name="trilhas" class="colaboradores" multiple size="4">
                    <?php
                        include('../controllers/connect.php');
                        $result_trilhas = "SELECT id_trilha, nome FROM trilhas";
                        $result_trilhas = mysqli_query($conn, $result_trilhas);

                        while ($row = mysqli_fetch_array($result_trilhas))  { 
                            $id = $row['id_trilha'];
                            $nome = $row['nome'];
                            if (is_string($id) && $nome != "") {
                                echo "<option value='$id'> $nome </option>";
                            }
                        }
                    ?>
                </select> <br>
                <button class="colabButton"><a href="./cadastroTrilhas.php">Adicionar trilha</a></button><br>
                <label for="desc">Descrição</label><br>
                <textarea name="descricao" id="desc" cols="23" rows="10"></textarea><br>
                <input type="submit" class="botao-enviar">
            </form>
        </div>
        
    </div>

    <div style="background-color: #521313; bottom: 0;">
        <iframe  src="footer.php" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" width="100%" height="50"></iframe>
    </div>
</body>
</html>