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
    <header>
        <img src="" alt="logo" class="logo">
        <nav class="menu-nav">
            <ul class="navlist">
                <li><a href="">Eventos</a></li>
                <li><a href="">Artigos</a></li>
                <li><a href="./colaboradores">Colaboradores</a></li>
                <li><img src="./img/user-128.png" alt="user"><a href="./login.html">Login |</a><a href="./cadastro.html"> Cadastre-se</a></li>
            </ul>
        </nav>
    </header>

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

    <footer>
        <p>© UFRRJ 2022. All Rights Reserved.</p>
    </footer>
</body>
</html>