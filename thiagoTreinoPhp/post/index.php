<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro.php" method="post">
        <div>
            <input type="text" name="marca" placeholder="Marca do carro">
        </div>
        <div>
            <input type="text" name="preco" placeholder="Preço do carro">
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" id="" value="Teto Solar">Teto Solar
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" id="" value="Direção eletrica">Direção eletrica
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" id="" value="Vidro Eletrico">Vidro Eletrico
        </div>
        <div>
            <input type="submit" value="Cadastrar">
        </div>
    </form>
</body>
</html>