<?php
include('conexao.php');
    if(isset($_POST['submit'])){
        
    
        $nome = $_POST['usuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $mysqli->query("INSERT INTO usuarios(nome, email, senha) VALUES ('$nome','$email','$senha')");
        // $result = mysqli_query($conexao, "INSERT INTO usuarios(usuario, email, senha) 
        // VALUES ('$nome', '$email', '$senha')");
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <!-- Styles -->
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>

    <main id="main" class="main container">
        <section>
            <h1>Cadastro</h1>
        <form action="cadastroUsuario.php" method="POST">
            <div id="user">
                <label for="">Usuário</label>
                <span>
                    <input type="text" name="usuario" placeholder="Informe seu usuário">
                    <ion-icon name="person-outline"></ion-icon>
                </span>
            </div>
            <div id="user">
                <label for="">Email</label>
                <span>
                    <input type="email" name="email" placeholder="Informe seu e-mail">
                    <ion-icon name="mail-outline"></ion-icon>
                </span>
            </div>
            <div id="pass">
                <label for="">Senha</label>
                <span>
                    <input type="password" name="senha" placeholder="Informe sua senha">
                    <ion-icon name="eye-outline"></ion-icon>
                </span>
            </div>
            <button type="submit" name="submit">Cadastrar</button>
        </form>
        </section>
    </main>
    <!-- Icones -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>