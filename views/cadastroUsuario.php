<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cadastroUsuario.css">
    <title>Cadastro - APS</title>
</head>

<body>
    <header>
        <img src="" alt="logo" class="logo">
        <nav class="menu-nav">
            <ul class="navlist">
                <li><a href="#QUEM SOMOS">Quem Somos</a></li>
                <li><a href="./colaboradores">Colaboradores</a></li>
                <li><img src="./img/user-128.png" alt="user"><a href="./login.html">Login |</a><a href="./cadastro.html"> Cadastre-se</a></li>
            </ul>
        </nav>
    </header>

    <div class="cadastro">
        <div class="intro">
            <h1>FAÇA SEU CADASTRO</h1>
            <p>Deseja cadastrar eventos e artigos seus ou de terceiros? Faça seu cadastro!</p>
            <p>Já tem uma conta? Faça <a href="./login.html">login</a>.</p>
        </div>

        <div class="cadastro-box">
            <form action="">
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
                <label for="formacao">Formação</label><br>
                <textarea name="formacao" id="formacao" cols="30" rows="5"></textarea><br>
                <input type="submit">
            </form>
        </div>
        
    </div>

    <footer>
        <p>© UFRRJ 2022. All Rights Reserved.</p>
    </footer>
    
</body>
</html>