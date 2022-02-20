
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
            <h1>Login</h1>
        <form action="logar.php" method="POST">
            <div id="user">
                <label for="">Usuário</label>
                <span>
                    <input type="text" name="usuario" placeholder="Informe seu usuário">
                    <ion-icon name="person-outline"></ion-icon>
                </span>
            </div>
            
            <div id="pass">
                <label for="">Senha</label>
                <span>
                    <input type="password" name="senha" placeholder="Informe sua senha">
                    <ion-icon name="eye-outline"></ion-icon>
                </span>
            </div>
            <button type="submit" name="submit">Entrar</button>
        </form>
        </section>
    </main>
    <!-- Icones -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>