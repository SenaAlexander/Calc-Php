<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>

<body>
    <form method="post" action="main.php"> 
        <label for="num1">Número 1:</label>
        <input type="text" name="num1" id="num1">
        <br>
        <input type="text" name="num2" id="num2">
        <label for="num2">Número 2:</label> 
        <br>
        <label for="op">Operação:</label> 

        <select name="op" id="op">
            <option value="+">Somar</option>
            <option value="">Multiplicar</option>
            <option value="-">Subtrair</option>
            <option value="/">Dividir</option>
        </select>
        <br>
        <button type="submit">Calcular</button>
    </form>

</body>
</html>
