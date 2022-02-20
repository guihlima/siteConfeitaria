<?php

include("conexao.php");

if(isset($_POST['submit'])){

    $arquivo = $_FILES['arquivo'];
    $pasta = 'arquivos/';
    $nomeArquivo = $arquivo['name'];
    $novoNomeArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeArquivo,PATHINFO_EXTENSION));
    $path = $pasta . $novoNomeArquivo . '.' . $extensao;

    $nomeProduto = $_POST['nome'];
    $categoria = $_POST['categoria'];

    $deu_certo = move_uploaded_file($arquivo['tmp_name'], $path);

    if($deu_certo){
        $mysqli->query("INSERT INTO teste (nomeImg, path, nomeProduto, categoria) VALUES('$nomeArquivo','$path','$nomeProduto','$categoria')") or die($mysqli->error);
        echo "<p>Arquivo enviado com sucesso!</p>";
    }
    else{
        echo "Falha ao enviar arquivo!";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <form action="cadastro.php" method="POST" enctype="multipart/form-data" >
        <div>
            <label for="">Selecione a imagem</label>
            <input name="arquivo" type="file">
        </div>
        <div>
            <label for="">Nome do produto</label>
            <input name="nome" type="text" placeholder="Ex: Bolo de chocolate...">
        </div>
        <div>
            <label for="">Categoria</label>
            <input name="categoria" type="text"  placeholder="Ex: Bolos">
        </div>
        <button name="submit" type="submit">Enviar</button>
    </form>
</body>
</html>