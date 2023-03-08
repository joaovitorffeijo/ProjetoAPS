<!DOCTYPE html>
<html lang="pt-br">

<?php
    include("../model/Cadastrador.php");
    if(!isset($_SESSION)) {
        session_start();
    }
    if(isset($_GET['logout'])) {
        unset($_SESSION);
        session_destroy();
        header("Location: home.php");
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/pag.css">
    <title>Perfil</title>
</head>

<body>
    <div style="position:sticky; top: 0; margin-bottom: -120px;">
        <iframe  src="headerCad.php" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" width="100%"></iframe>
    </div>

    <div class="dados">
        <div class="tituloCad">
            <h1><?php echo $_SESSION['nome'];?></h1>
            <a href="./cadastroUsuario.php"><img src="./img/edit-white.png" alt="editar"></a>
            <a href="?logout"><img src="./img/logout.png" alt="sair"></a>
        </div>
        <div class="dados-menores">
            <p><b>Email: <?php echo $_SESSION['email'];?></b></p>
            <p><b>Sexo: <?php echo $_SESSION['sexo'];?></b></p>
            <p><b>Telefone: <?php echo $_SESSION['telefone'];?></b></p>
            <p><b>Lattes: <?php echo $_SESSION['lattes'];?></b></p>
            <p><b>Formação: <?php echo $_SESSION['formacao'];?></b></p>
        </div>
    </div>

    <div class="eventosColaborador">
        <h1>EVENTOS CADASTRADOS</h1>
        <div class="tabela-eventos">
            <table>
            <?php
                include('../controllers/connect.php');
                $id = $_SESSION['id'];
                $result_evento = "SELECT nome FROM evento WHERE cadastrado_por = '$id'";
                $result_evento = mysqli_query($conn, $result_evento);

                while ($row = mysqli_fetch_array($result_evento))  { 
                    $nome = $row['nome'];
                    echo "<tr><td><hr color='#521313' size=1></td></tr>";
                    echo "<tr><td><a href='./paginaEventoCad.php'><b>" . $row["nome"] . "</b></a></td></tr>";
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

    <div style="background-color: #521313;">
        <iframe  src="footer.php" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" width="100%" height="50"></iframe>
    </div>
</body>