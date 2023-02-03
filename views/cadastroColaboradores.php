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

    <footer>
        <p>© UFRRJ 2022. All Rights Reserved.</p>
    </footer>
</body>
</html>