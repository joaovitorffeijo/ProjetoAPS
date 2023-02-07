<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cadastro-login.css">
    <title>Login - APS</title>
</head>

<body>
    <div style="position:sticky; top: 0; margin-bottom: -120px;">
        <iframe  src="header.php" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" width="100%"></iframe>
    </div>

    <div class="cadastro-login">
        <div class="intro">
            <h1>ACESSE SUA CONTA</h1>
            <p>Faça login para ter acesso a sua conta e cadastrar seus eventos.</p>
            <p>Não tem uma conta? Faça seu <a href="./cadastro.html">cadastro</a></p>
        </div>
        <div class="cadastro-box">
            <form action="">
                <label for="email">E-mail</label><br>
                <input type="email"><br>
                <label for="senha">Senha</label><br>
                <input type="password"><br>
                <p><a href="">Esqueci a senha</a></p>
                <input type="submit" class="botao-enviar">
            </form>
        </div>
    </div>

    <div style="background-color: #521313;">
        <iframe  src="footer.php" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" width="100%" height="50"></iframe>
    </div>
</body>
</html>