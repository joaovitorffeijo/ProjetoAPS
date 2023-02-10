<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/pag.css">
    <title>Página do Evento</title>
</head>

<body>
    <div style="position:sticky; top: 0; margin-top: -115px;">
        <iframe  src="header-cad.php" marginwidth="0" marginheight="0px" scrolling="no" frameborder="0" width="100%"></iframe>
    </div>

    <div class="dados">
        <div class="tituloCad">
            <h1>NOME DO EVENTO</h1>
            <a href="./cadastroArtigos.php"><img src="./img/edit-white.png" alt="editar"></a>
            <a href="./"><img src="./img/trash.png" alt="lixeira"></a>
        </div>
        <div class="dados-menores">
            <p><b>Data:</b></p>
            <p><b>Organizadores:</b></p>
            <p><b>Palavras-chave:</b></p>
        </div>
    </div>

    <div class="sobre">
        <h1>SOBRE O EVENTO</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec neque dignissim, pharetra enim eget, pharetra orci. Aenean et felis eget lacus tempus fermentum id a leo. Curabitur ac nisl sollicitudin, consectetur dolor et, mollis ante. Vivamus tristique ultricies pellentesque. Aenean luctus mattis turpis quis malesuada. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur semper sagittis sapien ut iaculis. Cras scelerisque ante varius semper molestie.</p>
    </div>

    <div class="artigosMostrados">
        <div class="tituloPesquisa">
            <h1>ARTIGOS</h1>
            <div class="caixa-de-busca">
                <img src="./img/lupa.png" alt="lupa">
                <input type="text" id="busca" placeholder="Pesquise pelo nome">
            </div>
        </div>
        <div class="botao-adicionar">
            <a href="./cadastroArtigos.php"><button>Adiconar novo artigo<img src="./img/plus.png" alt="adicionar"></button></a>
        </div>
        <div class="artigos">
            <div class="artigo-escrito">
                <h3>Título do artigo</h3>
                <p><b>Autor:</b></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec neque dignissim, pharetra enim eget...<a href="./paginaArtigo-cad.php">Leia mais</a></p>
            </div>
            <div class="artigo-escrito">
                <h3>Título do artigo</h3>
                <p><b>Autor:</b></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec neque dignissim, pharetra enim eget...<a href="./paginaArtigo-cad.php">Leia mais</a></p>
            </div>
            <div class="artigo-escrito">
                <h3>Título do artigo</h3>
                <p><b>Autor:</b></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec neque dignissim, pharetra enim eget...<a href="./paginaArtigo-cad.php">Leia mais</a></p>
            </div>
            <div class="artigo-escrito">
                <h3>Título do artigo</h3>
                <p><b>Autor:</b></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec neque dignissim, pharetra enim eget...<a href="./paginaArtigo-cad.php">Leia mais</a></p>
            </div>
            <div class="artigo-escrito">
                <h3>Título do artigo</h3>
                <p><b>Autor:</b></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec neque dignissim, pharetra enim eget...<a href="./paginaArtigo-cad.php">Leia mais</a></p>
            </div>
            <div class="artigo-escrito">
                <h3>Título do artigo</h3>
                <p><b>Autor:</b></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec neque dignissim, pharetra enim eget...<a href="./paginaArtigo-cad.php">Leia mais</a></p>
            </div>
            <div class="artigo-escrito">
                <h3>Título do artigo</h3>
                <p><b>Autor:</b></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec neque dignissim, pharetra enim eget...<a href="./paginaArtigo-cad.php">Leia mais</a></p>
            </div>
        </div>
    </div>

    <div style="background-color: #521313;">
        <iframe  src="footer.php" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" width="100%" height="50"></iframe>
    </div>
</body>
