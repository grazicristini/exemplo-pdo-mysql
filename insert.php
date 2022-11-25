<?php
require_once './vendor/autoload.php';

use ExemploPDOMySQL\MySQLConnection;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $bd = new MySQLConnection();

    $comando = $bd->prepare('INSERT INTO generos(nome) VALUES(:nome)');
    $comando->execute([':nome' => $_POST['nome']]);

    header('Location:/index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Gênero</title>
    <link href="<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <h1>Novo Gênero</h1>
        <form action="insert.php" method="post">
            <div class="form-control" type="text" name="nome" />
                <label for="nome">Nome do Gênero</label>
                <input type="text" required name="nome" />
            </div>
            <br />
            <a class="btn btn-secundary" href="index.php">Voltar</a>
            <button type="submit">Salvar</button>
        </form>
    </main>
</body>
</html>