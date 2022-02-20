<?php
session_start();
    if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: index.php');
    }
    $logado = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

    <!-- Styles -->
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/perfil.css">
</head>
<body>
    <header id="header" class="header container">
        <div id="logo">
            <!-- <a href="./index.php"><img src="./img/logo.png" alt="Logo Confeitaria"></a> -->
            <a href="./index.php">Confeitaria das Amigas</a>
        </div>
        <nav id="nav">
            <ul id="menu">
                <li><a href="./index.php">Inicio</a></li>
                <li><a href="./catalogo.php">Catálogo</a></li>
                <li><a href="./contato.php">Contato</a></li>
                <li><a href="./perfil.php">Perfil</a></li>
            </ul>
        </nav>
    </header>

    <main id="main" class="main container">
        <?php echo "Este é seu perfil $logado" ?>
        <ul>
            <li>
                <a href="">
                    Adicionar forma de pagamento
                    <ion-icon name="card-outline"></ion-icon>
                </a>
            </li>
            <li>
                <a href="logout.php">
                    Sair
                    <ion-icon name="log-out-outline"></ion-icon>
                </a>
            </li>
        </ul>
    </main>

    <footer id="footer" class="footer container">
        <h2 id="footer__title">Confeitaria das Amigas</h2>
        <span id="copy">&copy; Copyright Confeitaria das Amigas 2022 - Todos os direitos reservados</span>

        <ul id="social__media">
            <li class="social__item"><a href="#"><ion-icon name="logo-instagram" class="social__icon" ></ion-icon></a></li>
            <li class="social__item"><a href="#"><ion-icon name="logo-whatsapp" class="social__icon"></ion-icon></a></li>
        </ul>

    </footer>

    <!-- Icones -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>