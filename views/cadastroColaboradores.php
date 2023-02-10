<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cadastro-login.css">
    <title>Cadastrar colaborador</title>
</head>

<body>
    <div style="position:sticky; top: 0; margin-bottom: -120px;">
        <iframe  src="header-cad.php" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" width="100%"></iframe>
    </div>

    <div class="cadastro-login">
        <div class="intro">
            <h1>CADASTRE UM COLABORADOR</h1>
            <p>Registre os colaboradores do seu evento para vinculá-los.</p>
        </div>
        <div class="cadastro-box">
            <form action="">
                <label for="nome">Nome completo</label><br>
                <input type="text" id="nome"><br>
                <label for="formacao">Formação</label><br>
                <input type="text" id="formacao"><br>
                <label for="sexo">Sexo</label><br>
                <select name="sexo" id="sexo" size="2">
                    <option value="F">Feminino</option>
                    <option value="M">Masculino</option>
                </select><br>
                <label for="lattes">Link do lattes</label><br>
                <input type="text" id="lattes"><br>
                <input type="submit" class="botao-enviar">
            </form>
        </div>
    </div>

    <div style="background-color: #521313; bottom: 0;">
        <iframe  src="footer.php" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" width="100%" height="50"></iframe>
    </div>
</body>
</html>