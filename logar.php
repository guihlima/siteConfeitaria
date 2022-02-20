<?php
session_start();


if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])){
        
    include_once('conexao.php');
        $nome = $_POST['usuario'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE nome = '$nome' and senha = '$senha'";
        
        $result = $mysqli->query($sql);

        if(mysqli_num_rows($result)<1){
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else{
            $_SESSION['usuario'] = $nome;
            $_SESSION['senha'] = $senha;
            header('Location: index.php');
        }
        // $result = mysqli_query($conexao, "INSERT INTO usuarios(usuario, email, senha) 
        // VALUES ('$nome', '$email', '$senha')");
    }
    else{
        // header('Location: cadastroUsuario.php');
        header('Location: login.php');
    }
?>