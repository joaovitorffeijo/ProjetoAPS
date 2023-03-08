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
            <form action="">
                <label for="nome">Nome do evento</label><br>
                <input type="text" id="nome"><br>
                <label for="pessoa">Vincular Pessoa</label><br>
                <select name="colaboradores" class="colaboradores" multiple size="4">
                    <?php
                        include('../controllers/connect.php');
                        $result_colaborador = "SELECT id, nome FROM colaborador";
                        $result_colaborador = mysqli_query($conn, $result_colaborador);

                        while ($row = mysqli_fetch_array($result_colaborador))  { 
                            $id = $row['id'];
                            $nome = $row['nome'];

                            echo "<option value='$id'> $nome <option>";
                        }
                    ?>
                </select> <br>
                <button class="colabButton"><a href="./cadastroColaboradores.php">Adicionar colaborador</a></button><br>
                <label for="data">Data</label><br>
                <input type="date" id="data"><br>
                <label for="pin">PIN do evento</label><br>
                <input type="password" id="pin"><br>
                <label for="confirma">Confirmar PIN</label><br>
                <input type="password" id="confirma"><br>
                <label for="tipo">Tipo do Evento</label><br>
                <input type="text" id="tipo"><br>
                <label for="trilha">Trilha do Evento</label><br>
                <input type="text" id="trilha"><br>
                <label for="desc">Descrição</label><br>
                <textarea name="Descrição" id="desc" cols="30" rows="10"></textarea><br>
                <input type="submit" class="botao-enviar">
            </form>
        </div>
        
    </div>

    <div style="background-color: #521313; bottom: 0;">
        <iframe  src="footer.php" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" width="100%" height="50"></iframe>
    </div>
</body>
</html>