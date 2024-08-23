<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My app</title>
</head>
<body>
    <form action="proceso.php" method="POST">
        <label for="n1">Digite numero 1</label>
        <br>
        <input type="number" name="n1" id="">
        <br>
        <br>
        <select name="operador" id="">
            <option value="0">Seleccione</option>
            <option value="+">Suma</option>
            <option value="-">Resta</option>
            <option value="*">Multiplicar</option>
            <option value="/">Dividir</option>
        </select>
        <br>
        <br>
        <label for="n2">Digite numero 2</label>
        <br>
        <input type="number" name="n2" id="">
        <br>
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>