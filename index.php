<?php
require_once './vendor/autoload.php';

use ExemploPDOMySQL;

$bd = new PDO('mysql:host=localhost;dbname=biblioteca', 'root', '');

$comando = $bd->prepare('SELECT * FROM generos');
$comando->execute();
$generos = $comando->fetchAll(PDO::FECH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <a href="insert.php">Novo Gênero</a>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach($generos as $g): ?>
            <tr>
                <td><?= $g['id'] ?></td>
                <td><?= $g['nome'] ?></td>
                <td>
                    <a href="update.php?id=<?= $g['id'] ?>">Editar</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
