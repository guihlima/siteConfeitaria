
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Styles -->
    <link rel="stylesheet" href="./styles/style.css">
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
        <section class="section" id="section__left">
            <h2 id="section__title">Confeitaria das Amigas</h2>
            <p id="section__description">A melhor confeitaria da região, aqui encontra-se bolos com diversos temas, e contamos com salgados de diversos tipos, como também tortas geladas de sua preferência.</p>

            <a href="./catalogo.php"><button id="section__btn">Faça seu pedido</button></a>
        </section>
        <section class="section" id="section__right">
            <div id="section__img">
                <img src="./img/cake.jpg" alt="Cake">
            </div>
        </section>
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