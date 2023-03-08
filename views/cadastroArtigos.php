<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cadastro-login.css">
    <title>Cadastrar artigo</title>
</head>

<body>
    <div style="position:sticky; top: 0; margin-bottom: -120px;">
        <iframe  src="headerCad.php" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" width="100%"></iframe>
    </div>

    <div class="cadastro-login">
        <div class="intro">
            <h1>CADASTRE UM ARTIGO</h1>
            <p>Cadastre um artigo no seu evento!</p>
        </div>

        <div class="cadastro-box">
            <form action="">
                <label for="titulo">Título</label><br>
                <input type="text" id="titulo"><br>
                <label for="pessoa">Vincular Pessoa</label><br>
                <multiselect name="pessoa" id="pessoa" size="">
                    <option></option>
                </select><br>
                <label for="data">Data</label><br>
                <input type="date" id="data"><br>
                <label for="idioma">Idioma</label><br>
                <input type="text" id="idioma"><br>
                <label for="tema">Tema</label><br>
                <input type="text" id="tema"><br>
                <label for="palavras-chave">Palavras Chave</label><br>
                <input type="text" id="palavras-chave"><br>
                <label for="num-pag">Número de páginas</label><br>
                <input type="text" id="num-pag"><br>
                <label for="edicao">Edição</label><br>
                <input type="text" id="edicao"><br>
                <label for="doi">DOI</label><br>
                <input type="text" id="doi"><br>
                <label for="ref-bibliograficas">Referências Bibliográficas</label><br>
                <input type="text" id="ref-bibliograficas"><br>
                <label for="resumo">Resumo</label><br>
                <textarea name="resumo" id="resumo" cols="30" rows="10"></textarea><br>
                <label for="abstract">Abstract</label><br>
                <textarea name="abstract" id="abstract" cols="30" rows="10"></textarea><br>
                <input type="submit" class="botao-enviar">
            </form>
        </div>
        
    </div>

    <div style="background-color: #521313; bottom: 0;">
        <iframe  src="footer.php" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" width="100%" height="50"></iframe>
    </div>
    
</body>
</html>