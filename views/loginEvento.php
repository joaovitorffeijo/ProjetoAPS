<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cadastro-login.css">
    <title>Gerenciar evento</title>
</head>

<?php
    include('../controllers/loginEvento-C.php');
?>

<body>
    <div style="position:sticky; top: 0; margin-bottom: -120px;">
        <iframe  src="headerCad.php" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" width="100%"></iframe>
    </div>

    <div class="cadastro-login">
        <div class="intro">
            <h1>GERENCIAR EVENTO</h1>
            <p>Insira o PIN do evento para poder ter acesso a seus dados.</p>
            <p>Não tem o PIN de acesso desse evento? <a href="">Crie seu próprio evento.</a></p>
        </div>
        <div class="cadastro-box">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <h3 class="nomeEvento">Nome do evento</h3><br>
                <label for="pin">PIN do evento</label><br>
                <input type="password" id="pin" name="pin"><br>
                <input type="submit" class="botao-enviar">
            </form>
        </div>
    </div>

    <div style="background-color: #521313; bottom: 0;">
        <iframe  src="footer.php" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" width="100%" height="50"></iframe>
    </div>
</body>
</html>