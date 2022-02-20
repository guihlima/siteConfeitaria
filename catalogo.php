<?php

include("conexao.php");

if(isset($_FILES['arquivo'])){
    $arquivo = $_FILES['arquivo'];

    $pasta = 'arquivos/';
    $nomeArquivo = $arquivo['name'];
    $novoNomeArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeArquivo,PATHINFO_EXTENSION));

    $path = $pasta . $novoNomeArquivo . '.' . $extensao;
}
$sql_query = $mysqli->query("SELECT * FROM teste") or die($mysqli->error);
$sql_bolos = $mysqli->query("SELECT * FROM teste WHERE categoria = 'bolos'");
$sql_salgados = $mysqli->query("SELECT * FROM teste WHERE categoria = 'salgados'");
$sql_tortas = $mysqli->query("SELECT * FROM teste WHERE categoria = 'torta'");
// $sql_produtos = $mysqli->query("SELECT * FROM produtos") or die($mysqli->error);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>

    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/listaProdutos.css">
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
<main class="main container">
        
        <section class="section" id="section">
            <div id="cards">
                <?php
                    while($arquivo = $sql_bolos->fetch_assoc()){
                ?>
                <div class="card"  id="card__bolo">
                    <img height="100px" src="<?php echo $arquivo['path']; ?>" alt="">
                    <p>
                        <a href="./contato.php"><?php echo $arquivo['nomeProduto'];?></a>
                    </p>
                </div>

                <?php
                    }
                ?>
            </div>
            <div id="cards">
                <?php
                    while($arquivo = $sql_salgados->fetch_assoc()){
                ?>
                <div class="card" id="card__salgado">
                    <img height="100px" src="<?php echo $arquivo['path']; ?>" alt="">
                    <p>
                        <a href="./contato.php"><?php echo $arquivo['nomeProduto'];?></a>
                    </p>
                </div>

                <?php
                    }
                ?>
            </div>
            <div id="cards">
                <?php
                    while($arquivo = $sql_tortas->fetch_assoc()){
                ?>
                <div class="card" id="card__salgado">
                    <img height="100px" src="<?php echo $arquivo['path']; ?>" alt="">
                    <p>
                        <a href="./contato.php"><?php echo $arquivo['nomeProduto'];?></a>
                    </p>
                </div>

                <?php
                    }
                ?>
            </div>
        </section>

</body>
</html>