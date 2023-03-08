<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/principais.css">
    <title>Eventos</title>
</head>
<body>
    <div style="position:sticky; top: 0; margin-bottom: -120px;">
        <iframe  src="header.php" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" width="100%"></iframe>
    </div>

    <div class="pesquisa">
        <div class="caixa-de-busca">
            <img src="./img/lupa.png" alt="lupa">
            <input type="text" id="busca" placeholder="Pesquise pelo nome">
        </div>
        <h1>ENCONTRE O EVENTO</h1>
        <div class="filtros">
        <a><p class="filtro">2022</p></a>
            <a><p class="filtro">2021</p></a>
            <a><p class="filtro">2020</p></a>
            <a><p class="filtro">2019</p></a>
            <a><p class="filtro">2018</p></a>
            <a><p class="filtro">2022</p></a>
            <a><p class="filtro">2021</p></a>
            <a><p class="filtro">2020</p></a>
            <a><p class="filtro">2019</p></a>
            <a><p class="filtro">2018</p></a>
            <a><p class="filtro">2022</p></a>
            <a><p class="filtro">2021</p></a>
            <a><p class="filtro">2020</p></a>
            <a><p class="filtro">2019</p></a>
            <a><p class="filtro">2018</p></a>
            <a><p class="filtro">2022</p></a>
            <a><p class="filtro">2021</p></a>
            <a><p class="filtro">2020</p></a>
            <a><p class="filtro">2019</p></a>
            <a><p class="filtro">2018</p></a>
            
        </div>
    </div>

    <div class="eventosColaborador">
        <div class="tabela-eventos">
            <table>
            <?php
                include('../controllers/connect.php');
                $result_evento = "SELECT id, nome FROM evento";
                $result_evento = mysqli_query($conn, $result_evento);

                while ($row = mysqli_fetch_array($result_evento))  { 
                    $id = $row['id'];
                    $nome = $row['nome'];
                    echo "<tr><td><hr color='#521313' size=1></td></tr>";
                    echo "<tr><td><a href='./paginaEvento.php'><b>" . $row["nome"] . "</b></a></td></tr>";
                }
            ?>
            </table>
        </div>
        <div class="pagina-lista">
            <p class="guia">Voltar</p>
            <p class="numero-pagina">1</p>
            <p class="numero-pagina">2</p>
            <p class="numero-pagina">3</p>
            <p class="numero-pagina">4</p>
            <p class="numero-pagina">5</p>
            <p class="guia">Próxima</p>
        </div>
    </div>

    <div style="background-color: #521313; bottom: 0;">
        <iframe  src="footer.php" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" width="100%" height="50"></iframe>
    </div>
    
</body>
</html>