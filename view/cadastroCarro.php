<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Carro</title>
</head>
<body>

    <h1>Cadastrar Carro</h1>


    <form action="../processamento/processamento.php" method="post">
        <input type="hidden" name="acao" value="cadastrarCarro">
        <label>Nome do Modelo:</label>
        <input type="text" name="nomeModelo">
        <br><br>

        <label>Fabricante / Montadora:</label>
        <input type="text" name="fabricanteMontadora">
        <br><br>

        <label>Ano de Fabricação:</label>
        <input type="number" name="anoFabricacao">
        <br><br>

        <label>Preço:</label>
        <input type="number" name="preco">
        <br><br>

        <button type="submit">Cadastrar</button>
    </form>

</body>
</html>