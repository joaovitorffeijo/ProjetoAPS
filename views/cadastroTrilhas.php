<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cadastro-login.css">
    <title>Cadastrar colaborador</title>
</head>

<?php include("../controllers/cadastroTrilhas-C.php"); ?>

<body>
    <div style="position:sticky; top: 0; margin-bottom: -120px;">
        <iframe  src="headerCad.php" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" width="100%"></iframe>
    </div>

    <div class="cadastro-login">
        <div class="intro">
            <h1>CADASTRE UMA TRILHA</h1>
            <p>Registre as trilhas do seu evento para vinculá-las.</p>
        </div>
        <div class="cadastro-box">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="nome">Nome da trilha</label><br>
                <input name="nome" type="text" id="nome"><br>
                <input name="botao-enviar" type="submit" class="botao-enviar">
            </form>
        </div>
    </div>

    <div style="background-color: #521313; bottom: 0;">
        <iframe  src="footer.php" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" width="100%" height="50"></iframe>
    </div>
</body>
</html>