<?php

$dados = [
    ["João", "M", "Portugal"],
    ["Ana", "F", "Brasil"],
    ["Pedro", "M", "Angola"]
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="5">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Gênero</th>
                <th>País</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dados as $dado) : ?>
                <tr>
                    <td><?= $dado[0] ?></td>
                    <td><?= $dado[1] ?></td>
                    <td><?= $dado[2] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
</body>
</table>

</html>