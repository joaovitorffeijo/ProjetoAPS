<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cadastro-login.css">
    <title>Cadastro - APS</title>
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
            <h1>CADASTRE SEU EVENTO</h1>
            <p>Crie seu evento e convide colaboradores!</p>
        </div>

        <div class="cadastro-box">
            <form action="">
                <label for="nome">Nome do evento</label><br>
                <input type="text" id="nome"><br>
                <label for="pessoa">Vincular Pessoa</label><br>
                <multiselect name="pessoa" id="pessoa" size="">
                    <option></option>
                </select><br>
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

    <footer>
        <p>© UFRRJ 2022. All Rights Reserved.</p>
    </footer>
    
</body>
</html>