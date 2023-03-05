<!DOCTYPE html>
<html lang="pt-br">

<?php include("../controllers/cadastro-C.php"); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cadastro-login.css">
    <title>Cadastre-se</title>
</head>

<body>
    <div style="position:sticky; top: 0; margin-bottom: -120px;">
        <iframe  src="header.php" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" width="100%"></iframe>
    </div>

    <div class="cadastro-login">
        <div class="intro">
            <h1>FAÇA SEU CADASTRO</h1>
            <p>Deseja cadastrar eventos e artigos seus ou de terceiros? Faça seu cadastro!</p>
            <p>Já tem uma conta? Faça <a href="./login.html">login</a>.</p>
        </div>

        <div class="cadastro-box">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="nome">Nome completo</label><br>
                <input type="text" id="nome"><br>
                <label for="sexo">Sexo</label><br>
                <select name="sexo" id="sexo" size="2">
                    <option value="F">Feminino</option>
                    <option value="M">Masculino</option>
                </select><br>
                <label for="email">E-mail</label><br>
                <input type="email" id="email"><br>
                <label for="senha">Senha</label><br>
                <input type="password" id="senha"><br>
                <label for="confirma">Confirmar senha</label><br>
                <input type="password" id="confirma"><br>
                <label for="tel">Telefone</label><br>
                <input type="text" id="tel"><br>
                <label for="lattes">Link do Lattes</label><br>
                <input type="text" id="lattes"><br>
                <label for="inst">Instituição</label><br>
                <input type="text" id="inst"><br>
                <label for="bio">Biografia</label><br>
                <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>
                <input type="submit" class="botao-enviar">
            </form>
        </div>
        
    </div>

    <div style="background-color: #521313; bottom: 0;">
        <iframe  src="footer.php" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" width="100%" height="50"></iframe>
    </div>
    
</body>
</html>