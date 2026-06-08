<?php
include_once ('../controller/Controlador.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros Cadastrados</title>
</head>
<body>

    <h1>Carros Cadastrados</h1>

    <table border="1">
        <tr>
            <th>id</th>
            <th>Nome do Modelo</th>
            <th>Fabricante / Montadora</th>
            <th>Ano de Fabricação</th>
            <th>Preço</th>
        </tr>
                <?php 
        $controlador = new Controlador();
        echo ($controlador->RetornarCarros());
        ?>

    </table>

</body>
</html>