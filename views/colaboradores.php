<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/principais.css">
    <title>Colaboradores</title>
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
        <h1>BUSQUE PELA INICIAL</h1>
        <div class="filtros-letra">
            <a><p class="filtro">A</p></a>
            <a><p class="filtro">B</p></a>
            <a><p class="filtro">C</p></a>
            <a><p class="filtro">D</p></a>
            <a><p class="filtro">E</p></a>
            <a><p class="filtro">F</p></a>
            <a><p class="filtro">G</p></a>
            <a><p class="filtro">H</p></a>
            <a><p class="filtro">I</p></a>
            <a><p class="filtro">J</p></a>
            <a><p class="filtro">K</p></a>
            <a><p class="filtro">L</p></a>
            <a><p class="filtro">M</p></a>
            <a><p class="filtro">N</p></a>
            <a><p class="filtro">O</p></a>
            <a><p class="filtro">P</p></a>
            <a><p class="filtro">Q</p></a>
            <a><p class="filtro">R</p></a>
            <a><p class="filtro">S</p></a>
            <a><p class="filtro">T</p></a>
            <a><p class="filtro">U</p></a>
            <a><p class="filtro">V</p></a>
            <a><p class="filtro">W</p></a>
            <a><p class="filtro">X</p></a>
            <a><p class="filtro">Y</p></a>
            <a><p class="filtro">Z</p></a>
        </div>
    </div>

    <div class="eventosColaborador">
        <div class="tabela-eventos">
            <table>
            <?php
                include('../controllers/connect.php');
                $result_colaborador = "SELECT id, nome FROM colaborador";
                $result_colaborador = mysqli_query($conn, $result_colaborador);

                while ($row = mysqli_fetch_array($result_colaborador))  { 
                    $id = $row['id'];
                    $nome = $row['nome'];
                    echo "<tr><td><hr color='#521313' size=1></td></tr>";
                    echo "<tr><td><a href='./'><b>" . $row["nome"] . "</b></a></td></tr>";
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