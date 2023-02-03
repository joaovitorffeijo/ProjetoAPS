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
                <li><img src="./img/user-128.png" alt="user"><a href="">Olá, usuário!</a></li>
            </ul>
        </nav>
    </header>

    <div class="cadastro-login">
        <div class="intro">
            <h1>GERENCIAR EVENTO</h1>
            <p>Insira o PIN do evento para poder ter acesso a seus dados.</p>
            <p>Não tem o PIN de acesso desse evento? <a href="">Crie seu próprio evento.</a></p>
        </div>
        <div class="cadastro-box">
            <form action="">
                <h3 class="nomeEvento">Nome do evento</h3><br>
                <label for="pin">PIN do evento</label><br>
                <input type="password" id="pin"><br>
                <input type="submit" class="botao-enviar">
            </form>
        </div>
    </div>

    <footer>
        <p>© UFRRJ 2022. All Rights Reserved.</p>
    </footer>
</body>
</html>