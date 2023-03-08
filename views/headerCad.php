<!DOCTYPE html>
<html lang="pt-br">

<?php
    include('../model/Cadastrador.php');
    if(!isset($_SESSION)) {
        session_start();
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="./homeCad.php" target="_parent"><img src="" alt="logo" class="logo"></a>
        <nav class="menu-nav">
            <ul class="navlist">
                <li><a href="./eventosCad.php" target="_parent">Eventos</a></li>
                <li><a href="./artigosCad.php" target="_parent">Artigos</a></li>
                <li><a href="./colaboradoresCad.php" target="_parent">Colaboradores</a></li>
                <li><img src="./img/user-128.png" alt="user"><a href="./perfilUserCad.php" target="_parent">Olá, <?php echo $_SESSION['nome'];?>!</a>
        </nav>
    </header>
</body>
</html>